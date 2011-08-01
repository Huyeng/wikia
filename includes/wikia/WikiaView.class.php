<?php

/**
 * Nirvana Framework - View class
 *
 * @ingroup nirvana
 *
 * @author Adrian 'ADi' Wieczorek <adi(at)wikia-inc.com>
 * @author Owen Davis <owen(at)wikia-inc.com>
 * @author Wojciech Szela <wojtek(at)wikia-inc.com>
 * @author Federico "Lox" Lucignano <federico(at)wikia-inc.com>
 */
class WikiaView {

	const ERROR_HEADER_NAME = 'X-Wikia-Error';
	/**
	 * Response object
	 * @var WikiaResponse
	 */
	private $response = null;
	private $templatePath = null;

	/**
	 * factory method - create view object for given controller and method name
	 *
	 * @param string $controllerName
	 * @param string $methodName
	 * @param array $data
	 * @param string $format
	 */
	public static function newFromControllerAndMethodName( $controllerName, $methodName, Array $data = array(), $format = WikiaResponse::FORMAT_HTML ) {
		$response = F::build( 'WikiaResponse', array( $format ) );
		$response->setControllerName( $controllerName );
		$response->setMethodName( $methodName );
		$response->setData( $data );

		$view = new WikiaView;
		$view->setResponse( $response );

		return $view;
	}

	/**
	 * get response object
	 * @return WikiaResponse
	 */
	public function getResponse() {
		return $this->response;
	}

	/**
	 * set response object
	 * @param WikiaResponse $response
	 */
	public function setResponse( WikiaResponse $response ) {
		$this->response = $response;
	}

	/**
	 * get template path
	 * @return string
	 */
	public function getTemplatePath() {
		return $this->templatePath;
	}

	/**
	 * set template path
	 * @param string $value
	 */
	public function setTemplatePath( $value ) {
		$this->templatePath = $value;
	}

	/**
	 * set template by controller and method name
	 * @param string $controllerName
	 * @param string $methodName
	 */
	public function setTemplate( $controllerName, $methodName ) {
		$this->buildTemplatePath($controllerName, $methodName, true);
	}

	/**
	 * build template path for given controller and method name
	 *
	 * @param string $controllerName
	 * @param string $methodName
	 * @param bool $forceRebuild
	 */
	public function buildTemplatePath( $controllerName, $methodName, $forceRebuild = false ) {
		if( ( $this->templatePath == null ) || $forceRebuild ) {
			$app = F::app();
			$autoloadClasses = $app->wg->AutoloadClasses;

			if (
				(
					$app->isService( $controllerName ) ||
					$app->isController( $controllerName ) ||
					$app->isModule( $controllerName )
				) &&
				!empty( $autoloadClasses[$controllerName] )
			) {
				$controllerClass = $controllerName;
			} else {
				$controllerClass = "{$controllerName}Controller";
			}

			// Workaround for wfRenderPartial while Module still exists
			if( empty( $autoloadClasses[$controllerClass] ) ) {
				$controllerClass = "{$controllerName}Module";
			}

			if( empty( $autoloadClasses[$controllerClass] ) ) {
				throw new WikiaException( "Invalid controller name: {$controllerName}" );
			}

			$dirName = dirname( $autoloadClasses[$controllerClass] );
			$templatePath = "{$dirName}/templates/{$controllerName}_{$methodName}.php";

			if( !file_exists( $templatePath ) && !$app->isService( $controllerName ) ) {
				$controllerName = $app->getControllerLegacyName($controllerName);
				$templatePath = "{$dirName}/templates/{$controllerName}_{$methodName}.php";
			}

			if( !file_exists( $templatePath ) ) {
				throw new WikiaException( "Template file not found: {$templatePath}" );
			}

			$this->setTemplatePath( $templatePath );
		}
	}

	/**
	 * prepare response (called just before rendering starts)
	 * @param WikiaResponse $response
	 */
	public function prepareResponse( WikiaResponse $response ) {
		if( ( $response->getFormat() == WikiaResponse::FORMAT_JSON ) && $response->hasException() ) {
			// set error header for JSON response (as requested for mobile apps)
			$response->setHeader( self::ERROR_HEADER_NAME, $response->getException()->getMessage() );
		}
		if( ( $response->getFormat() == WikiaResponse::FORMAT_JSON ) && !$this->response->hasContentType() ) {
			$this->response->setContentType( 'application/json; charset=utf-8' );
		}
	}

	public function __toString() {
		try {
			return $this->render();
		} catch( Exception $e ) {
			// php doesn't allow exceptions to be thrown inside __toString() so we need an extra try/catch block here
			if ($this->response == null) return "WikiaView: response object is null";
			return F::app()->getView( 'WikiaError', 'error', array( 'response' => $this->response, 'devel' => $app->wg->DevelEnvironment ) )->render();
		}
	}

	/**
	 * render view
	 * @return string
	 */
	public function render() {
		if( $this->response == null ) {
			throw new WikiaException( "WikiaView: response object is null" );
		}

		$method = 'render' . ucfirst( $this->response->getFormat() );

		if( method_exists( $this, $method ) ) {
			return $this->$method();
		}
		else {
			throw new WikiaException( "WikiaView: render() failed for format: " . $this->response->getFormat() );
		}
	}

	protected function renderRaw() {
		if ($this->response->hasException()) {
			return '<pre>' . print_r ($this->response->getException(), true) . '</pre>';
		} 
		return '<pre>' . var_export( $this->response->getData(), true ) . '</pre>';
	}

	protected function renderHtml() {
		$this->buildTemplatePath( $this->response->getControllerName(), $this->response->getMethodName() );

		$data = $this->response->getData();
		// Export the app wg and wf helper objects into the template
		// Note: never do this for Raw or Json formats due to major security issues there
		$data['app'] = F::app();
		$data['wg'] = F::app()->wg;
		$data['wf'] = F::app()->wf;		

		if( !empty( $data ) ) {
			extract( $data );
		}

		ob_start();
		require $this->getTemplatePath();
		$out = ob_get_clean();

		return $out;
	}

	protected function renderJson() {
		if( $this->response->hasException() ) {
			$output = array( 'exception' => array( 'message' => $this->response->getException()->getMessage(), 'code' => $this->response->getException()->getCode() ) );
		}
		else {
			$output = $this->response->getData();
		}

		return json_encode( $output );
	}

}