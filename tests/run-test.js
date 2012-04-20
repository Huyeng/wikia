/**
 * Javascript unit test runner based on phantomJS
 *
 * @author Jacek "mech" Wozniak <jacek.wozniak(at)wikia-inc.com>
 * @author Federico "Lox" Lucignano <federico(at)wikia-inc.com>
 * @author Sebastiam Marzjan <sebastian.marzjam(at)wikia-inc.com>
 * @author Michał "Mix" Roszka <michal(at)wikia-inc.com>
 *
 * @example phantomjs run-test.js ../path/to/test.js (runs single test)
 */

var RUNNER_TEMP_PATH = '/tmp/run-test.js.' + (new Date()).getTime() + '.html',
	EXIT_SIGNAL = '!!PHANTOM_EXIT!!',
	DEPENDENCIES_PLACEHOLDER = '<!--DEPENDENCIES-->',
	DEFAULT_USER_AGENT = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.163 Safari/535.19',
	DEFAULT_VIEWPORT_WIDTH = 1024,
	DEFAULT_VIEWPORT_HEIGHT = 768,
	SCRIPT_TIMEOUT = 30000,
	SCRIPT_TEMPLATE = '<script type="text/javascript" src="$1"></script>\n',
	fs = require('fs'),
	sys = require('system'),
	cliOptionRegex = new RegExp('-{1,2}', 'gi'),
	frameworkRegex = new RegExp('@test-framework\\s+(\\S+)'),
	dependencyRegex = new RegExp('@test-require-file\\s+(\\S+)', 'g'),
	includeTestFileRegex = new RegExp('^.*\\/tests\\/[^\\/]+\\.js$'),
	excludeTestFileRegex = new RegExp('^\\.\\.\\/tests\\/.*\\.js$'),
	tests = [],
	options = {params: []},
	optionsCounter = 0,
	timer,
	page;

function exit(retVal) {
	retVal = (retVal == 1) ? 1 : 0;

	try {
		fs.remove(RUNNER_TEMP_PATH);
	} catch(e) {}

	if(tests.length){
		if(retVal == 1)
			console.error('Error: aborting test, running next one.');

		processTest(tests.pop());
	}else
		phantom.exit(retVal);
}

function scanDirectory(path) {
	if(fs.isDirectory(path)) {
		fs.list(path).forEach(function(e) {
			if(e !== "." && e !== "..") {
				scanDirectory(path + '/' + e);
			}
		});
	} else if(fs.exists(path) && fs.isFile(path)) {
		if(!excludeTestFileRegex.test(path) && includeTestFileRegex.test(path))
			tests.push(path);
	}
}

function onPageLoaded(status) {
	(typeof timer != 'undefined') && clearTimeout(timer);

	timer = setTimeout(function() {
		console.error('Maximum execution time exceeded, aborting.');
		exit(1);
	}, SCRIPT_TIMEOUT);
}

function processTest(test){
	console.log('Processing file:', test);

	var testSource = fs.read(test),
		framework = frameworkRegex.exec(testSource),
		requiredFiles = [],
		deps = '',
		runner,
		match,
		htmlTemplate;

	if( framework instanceof Array && framework.length > 1) {
		switch(framework[1].toString().toLowerCase()) {
			case 'qunit':
				requiredFiles.push('lib/qunit/qunit.js');
				requiredFiles.push('lib/qunit/console_reporter.js');
				runner = 'lib/qunit/test-runner.html';
				break;
			case 'jasmine':
				requiredFiles.push('lib/jasmine/jasmine.js');
				requiredFiles.push('lib/jasmine/console_reporter.js');
				runner = 'lib/jasmine/test-runner.html';
				break;
			default:
				console.error('Unrecognized framework declaration.');
				exit(1);
		}
	} else {
		console.error('Missing framework declaration.');
		exit(1);
	}
	
	while(match != null) {
		match = dependencyRegex.exec(testSource);
	
		if(match instanceof array && match.length > 1)
			requiredFiles.push('../' + match[1]);
	}
	
	requiredFiles.push(test);
	
	requiredFiles.forEach(function(item) {
		deps += SCRIPT_TEMPLATE.replace('$1', fs.absolute(item));
	});
	
	htmlTemplate = fs.read(runner).replace(DEPENDENCIES_PLACEHOLDER, deps);
	
	fs.write(RUNNER_TEMP_PATH, htmlTemplate, 'w');
	
	page.open(RUNNER_TEMP_PATH, onPageLoaded);
}

//commandline options processing
sys.args.forEach(function(item){
	if(++optionsCounter === 1)
		return;

	if(item.indexOf('-') === 0){
		//option
		var val = item.replace(/^-{1,2}/g, ''),
		tokens = val.split('=', 2);

		options[tokens[0]] = tokens[1] | true;
	}else{
		//param
		options.params.push(item);
	}
});

if(!options.params.length){
	scanDirectory('..');
	tests.reverse();
}else{
	options.params.forEach(function(item){
		tests.push(item);
	});
}

page = require('webpage').create({
	onConsoleMessage : function(msg) {
		if(msg == EXIT_SIGNAL){
			if(tests.length){
				processTest(tests.pop());
			}else
				exit(0);
		}else
			console.log(msg);
	},

	onError : function(msg, trace) {
		console.error('Error:', msg);

		trace.forEach(function(item) {
			console.error('\t-', item.file, ':', item.line);
		});
	},

	settings : {
		loadPlugins : true,
		localToRemoteUrlAccessEnabled : true,
		XSSAuditingEnabled : true,
		userAgent : DEFAULT_USER_AGENT
	},

	viewportSize : {
		width : DEFAULT_VIEWPORT_WIDTH,
		height : DEFAULT_VIEWPORT_HEIGHT
	}
});

processTest(tests.pop());