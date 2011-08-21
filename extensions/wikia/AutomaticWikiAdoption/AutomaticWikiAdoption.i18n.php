<?php
/**
 * AutomaticWikiAdoption
 *
 * An AutomaticWikiAdoption extension for MediaWiki
 *
 * @author Maciej Błaszkowski (Marooned) <marooned at wikia-inc.com>
 * @date 2010-10-05
 * @copyright Copyright (C) 2010 Maciej Błaszkowski, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @package MediaWiki
 *
 * To activate this functionality, place this file in your extensions/
 * subdirectory, and add the following line to LocalSettings.php:
 *     require_once("$IP/extensions/wikia/AutomaticWikiAdoption/AutomaticWikiAdoption_setup.php");
 */

$messages = array();

$messages['en'] = array(
	'wikiadoption' => 'Automatic wiki adoption',
	'wikiadoption-desc' => 'An AutomaticWikiAdoption extension for MediaWiki',
	'wikiadoption-header' => 'Adopt this wiki',
	'wikiadoption-button-adopt' => 'Yes, I want to adopt {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Find out more!',
	'wikiadoption-description' => "$1, ready to adopt {{SITENAME}}?
<br /><br />
There hasn't been an active administrator on {{SITENAME}} for a while, and we're looking for a new leader to help this wiki's content and community grow! As someone who's contributed to {{SITENAME}} we were wondering if you'd like the job.
<br /><br />
By adopting the wiki, you'll be promoted to administrator and bureaucrat to give you the tools you'll need to manage the wiki's community and content. You'll also be able to create other administrators to help, delete, rollback, move and protect pages.
<br /><br />
Are you ready to take the next steps to help {{SITENAME}}?",
	'wikiadoption-know-more-header' => 'Want to know more?',
	'wikiadoption-know-more-description' => 'Check out these links for more information. And of course, feel free to contact us if you have any questions!',
	'wikiadoption-adoption-successed' => 'Congratulations! You are a now an administrator on this wiki!',
	'wikiadoption-adoption-failed' => "We are sorry. We tried to make you an administrator, but it did not work out. Please [http://community.wikia.com/Special:Contact contact us], and we will try to help you out.",
	'wikiadoption-not-allowed' => "We are sorry. You cannot adopt this wiki right now.",
	'wikiadoption-not-enough-edits' => "Oops! You need to have more than 10 edits to adopt this wiki.",
	'wikiadoption-adopted-recently' => "Oops! You have already adopted another wiki recently. You will need to wait a while before you can adopt a new wiki.",
	'wikiadoption-log-reason' => 'Automatic Wiki Adoption',
	'wikiadoption-notification' => "{{SITENAME}} is up for adoption. Interesting in becoming a leader here? Adopt this wiki to get started!  $2",
	'wikiadoption-mail-first-subject' => "We have not seen you around in a while",
	'wikiadoption-mail-first-content' => "Hi $1,

It's been a couple of weeks since we have seen an administrator on #WIKINAME. Administrators are an integral part of #WIKINAME and it's important they have a regular presence. If there are no active administrators for a long period of time, this wiki may be put up for adoption to allow another user to become an administrator.

If you need help taking care of the wiki, you can also allow other community members to become administrators now by going to $2.  Hope to see you on #WIKINAME soon!

The Wikia Team

You can unsubscribe from changes to this list here: $3",
	'wikiadoption-mail-first-content-HTML' => "Hi $1,<br /><br />

It's been a couple of weeks since we have seen an administrator on #WIKINAME. Administrators are an integral part of #WIKINAME and it's important they have a regular presence. If there are no active administrators for a long period of time, this wiki may be put up for adoption to allow another user to become an administrator.<br /><br />

If you need help taking care of the wiki, you can also allow other community members to become administrators now by going to <a href=\"$2\">User Rights management</a>.  Hope to see you on #WIKINAME soon!<br /><br />

The Wikia Team<br /><br />

You can <a href=\"$3\">unsubscribe</a> from changes to this list.",
	'wikiadoption-mail-second-subject' => "#WIKINAME will be put up for adoption soon",
	'wikiadoption-mail-second-content' => "Hi $1,
Oh, no! It's been almost 30 days since there's been an active administrator on #WIKINAME. It's important that administrators regularly appear and contribute so the wiki can continue to run smoothly.

Since it's been so many days since a current administrator has appeared, #WIKINAME will now be offered for adoption to other editors. 

The Wikia Team

You can unsubscribe from changes to this list here: $3",
	'wikiadoption-mail-second-content-HTML' => "Hi $1,<br /><br />
Oh, no! It's been almost 30 days since there's been an active administrator on #WIKINAME. It's important that adminstraters regularly appear and contribute so the wiki can continue to run smoothly.<br /><br />

Since it's been so many days since a current administrator has appeared, #WIKINAME will now be offered for adoption to other editors. <br /><br />

The Wikia Team<br /><br />

You can <a href=\"$3\">unsubscribe</a> from changes to this list.",
	'wikiadoption-mail-adoption-subject' => '#WIKINAME has been adopted',
	'wikiadoption-mail-adoption-content' => "Hi $1,

#WIKINAME has been adopted.  Wikis are available to be adopted when none of the current administrators are active for 30 days or more.

The adopting user of #WIKINAME will now have bureaucrat and admin status.  Don't worry, you'll also your retain administrator status on this wiki and are welcome to return and continue contributing at any time!

The Wikia Team

You can unsubscribe from changes to this list here: $3",
	'wikiadoption-mail-adoption-content-HTML' => "Hi $1,<br /><br />

#WIKINAME has been adopted.  Wikis are available to be adopted when none of the current administrators are active for 30 days or more.<br /><br />

The adopting user of #WIKINAME will now have bureaucrat and admin status.  Don't worry, you'll also your retain administrator status on this wiki and are welcome to return and continue contributing at any time!<br /><br />

The Wikia Team<br /><br />

You can <a href=\"$3\">unsubscribe</a> from changes to this list.",
	'tog-adoptionmails' => 'Email me if $1 will become available for other users to adopt',
	'wikiadoption-pref-label' => 'Changing these preferences will only affect emails from $1.',
	'wikiadoption-welcome-header' => 'Congratulations! You\'ve adopted {{SITENAME}}!',
	'wikiadoption-welcome-body' => "You're now a bureaucrat on this wiki. With your new status you now have access to all the tools that will help you manage {{SITENAME}}.
<br /><br />
The most important thing you can do to help {{SITENAME}} grow is keep editing.
<br /><br />
If there is no active administrator on a wiki it can be put up for adoption so be sure to check in on the wiki frequently.
<br /><br />
Helpful Tools:
<br /><br />
[[Special:ThemeDesigner|ThemeDesigner]]
<br />
[[Special:LayoutBuilder|Page Layout Builder]]
<br />
[[Special:ListUsers|User List]]
<br />
[[Special:UserRights|Manage Rights]]",
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'wikiadoption-know-more-header' => 'Wil u meer weet?',
);

/** Bulgarian (Български) */
$messages['bg'] = array(
	'wikiadoption-adoption-successed' => 'Поздравления! Вече сте администратор на това уики!',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'wikiadoption' => 'Degemer ur wiki ez-emgefre',
	'wikiadoption-header' => 'Degemer ar wiki-mañ',
	'wikiadoption-button-adopt' => "Ya, c'hoant 'm eus degemer {{SITENAME}} !",
	'wikiadoption-adopt-inquiry' => "Gouzout hiroc'h !",
	'wikiadoption-know-more-header' => "C'hoant gouzout hiroc'h ?",
	'wikiadoption-know-more-description' => "Sellit ouzh al liammoù-se evit gouzout hiroc'h. Ha deuit hardizh e darempred ganimp m'ho peus goulenn pe c'houlenn !",
	'wikiadoption-adoption-successed' => "Gourc'hemennoù ! Merour oc'h bremañ war ar wiki-mañ !",
	'wikiadoption-adoption-failed' => "Digarezit ac'hanomp. Klasket on eus lakaat ac'hanoc'h da verour, met ne ya ket en-dro. Mar plij [http://community.wikia.com/Special:Contact deuit e darempred ganeomp], hag e klaskimp skoazellañ ac'hanoc'h.",
	'wikiadoption-not-allowed' => "Digarezit ac'hanomp. Ne c'hellit ket degemer ar wiki-mañ bremañ.",
	'wikiadoption-not-enough-edits' => "C'hem ! Rankout a rit kaout muioc'h eget 10 degasadenn evit degemer ar wiki-mañ.",
	'wikiadoption-adopted-recently' => "C'hem ! Degemeret ho peus ur wiki n'eus ket pell. Ret 'vo deoc'h gortoz un tammig a-raok gellout degemer ur wiki nevez.",
	'wikiadoption-log-reason' => 'Degemer ur wiki ez-emgefre',
	'wikiadoption-notification' => "$1 a zo prest da vezañ degemeret ! Gellout a rit bezañ ar perc'henn nevez. '''Degemer bremañ !'''",
	'wikiadoption-mail-first-subject' => "N'hon eus ket gwelet ac'hanoc'h abaoe pell",
	'wikiadoption-mail-second-subject' => '#WIKINAME a vo lakaet da zegemer a-benn nebeut',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME a zo bet degemeret',
	'tog-adoptionmails' => 'Kasit din ur gemennadenn ma vez dieub $1 da zegemer',
	'wikiadoption-pref-label' => 'Kemmañ an dibarzhioù-mañ en do un efed war posteloù $1 hepken.',
	'wikiadoption-welcome-header' => "Gourc'hemennoù ! Degemeret ho peus {{SITENAME}} !",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'wikiadoption-header' => 'Usvoji ovu wiki',
	'wikiadoption-button-adopt' => 'Usvoji odmah',
	'wikiadoption-know-more-header' => 'Želite saznati više?',
	'wikiadoption-adoption-successed' => 'Čestitke! Sada ste administator na ovoj wiki!',
);

/** German (Deutsch)
 * @author Claudia Hattitten
 * @author LWChris
 * @author SVG
 */
$messages['de'] = array(
	'wikiadoption' => 'Automatische Wiki-Adoption',
	'wikiadoption-desc' => 'Ermöglicht die automatische Adoption eines Wikis',
	'wikiadoption-header' => 'Dieses Wiki adoptieren',
	'wikiadoption-button-adopt' => 'Ja, ich möchte {{SITENAME}} adoptieren!',
	'wikiadoption-adopt-inquiry' => 'Mehr erfahren',
	'wikiadoption-description' => '$1, willst du {{SITENAME}} adoptieren?
<br /><br />
Auf {{SITENAME}} ist seit einiger Zeit kein aktiver Admin mehr unterwegs, und wir suchen einen neuen Leiter, der dem Wiki beim Wachsen helfen soll. Du hast dich in diesem Wiki eingebracht, möchtest du diesen Job übernehmen?
<br /><br />
Durch die Adoption wirst du zum Administrator und Bürokraten befördert, sodass du die Werkzeuge erhältst, um den Inhalt und die Community des Wikis zu verwalten. Du wirst auch die Möglichkeit haben, andere Benutzer zu Administratoren zu ernennen, die beim Löschen, Zurücksetzen und Seitenschützen helfen können.
<br /><br />
Bist du bereit, einen weiteren Schritt zu tun, um {{SITENAME}} zu helfen?',
	'wikiadoption-know-more-header' => 'Möchtest du mehr wissen?',
	'wikiadoption-know-more-description' => 'Sieh dir diese Links für weitere Informationen an. Und natürlich, zögere nicht uns zu kontaktieren, wenn du Fragen hast!',
	'wikiadoption-adoption-successed' => 'Herzlichen Glückwunsch! Du bist jetzt ein Administrator in diesem Wiki!',
	'wikiadoption-adoption-failed' => 'Tut uns leid. Wir haben versucht, dich zu einem Administrator zu machen, aber es hat nicht funktioniert. Bitte [http://community.wikia.com/Special:Contact kontaktiere uns], und wir werden versuchen, dir weiterzuhelfen.',
	'wikiadoption-not-allowed' => 'Tut uns leid. Du kannst dieses Wiki gerade nicht übernehmen.',
	'wikiadoption-not-enough-edits' => 'Auweia! Du musst mehr als 10 Bearbeitungen getätigt haben, um dieses Wiki adoptieren zu können.',
	'wikiadoption-adopted-recently' => 'Auweia! Du hast in letzter Zeit bereits ein anderes Wiki adoptiert. Du musst eine Weile warten, bevor du ein weiteres Wiki adoptieren kannst.',
	'wikiadoption-log-reason' => 'Automatische Wiki-Adoption',
	'wikiadoption-notification' => '{{SITENAME}} kann adoptiert werden. Möchtest du hier Leiter werden? Adoptiere dieses Wiki, um loszulegen!  $2',
	'wikiadoption-mail-first-subject' => 'Wir haben dich eine Weile nicht gesehen',
	'wikiadoption-mail-first-content' => 'Hallo $1,

Es ist ein paar Wochen her, dass wir einen Administrator auf #WIKINAME gesehen haben. Administratoren sind eine wesentliche Komponente von #WIKINAME und es ist wichtig, dass sie regelmäßig im Wiki präsent sind. Wenn für längere Zeit keine Administratoren aktiv werden, könnte dieses Wiki zur Adoption freigegeben werden, um einen anderen Benutzer zum Administrator zu ernennen.

Falls du Hilfe bei der Pflege des Wikis brauchst, kannst du auch anderen Mitgliedern des Wikis ermöglichen, Administrator zu werden, indem du $2 aufsuchst.

Auf ein baldiges Wiedersehen in #WIKINAME!

Das Wikia-Team


Klicke auf den folgenden Link, um Änderungen an dieser Liste abzubestellen: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Hallo $1, <br /><br />
Es ist ein paar Wochen her, dass wir einen Administrator auf #WIKINAME gesehen haben. Administratoren sind eine wesentliche Komponente von #WIKINAME und es ist wichtig, dass sie regelmäßig im Wiki präsent sind. Wenn für längere Zeit keine Administratoren aktiv werden, könnte dieses Wiki zur Adoption freigegeben werden, um einen anderen Benutzer zum Administrator zu ernennen.<br /><br />
Wenn du Hilfe bei der Betreuung des Wikis benötigst, kannst du in der <a href="$2">Benutzerrechteverwaltung</a> auch anderen Community-Mitgliedern erlauben, Administrator zu werden.<br /><br />Auf ein baldiges Wiedersehen in #WIKINAME!<br /><br />
<b>Das Wikia-Team</b> <br /><br />
<small>Du kannst Änderungen an dieser Liste <a href="$3">abbestellen</a>.</small>',
	'wikiadoption-mail-second-subject' => '#WIKINAME wird bald zur Adoption freigegeben',
	'wikiadoption-mail-second-content' => 'Hallo $1!

Oje, es ist schon fast 30 Tage her, seit ein Administrator auf #WIKINAME aktiv gewesen ist. Es ist wichtig, dass Administratoren regelmäßig vorbeikommen und zum Wiki beitragen, damit das Wiki weiterhin rund läuft.

Da es schon so lange her ist, seit einer der derzeitigen Administratoren sich hat blicken lassen, wird #WIKINAME zur Adoption durch andere Benutzer freigegeben.

Das Wikia-Team

Klicke auf den folgenden Link, um Änderungen an dieser Liste abzubestellen: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Hallo $1!<br /><br />
Oje, es ist schon fast 30 Tage her, seit ein Administrator auf #WIKINAME aktiv gewesen ist. Es ist wichtig, dass Administratoren regelmäßig vorbeikommen und zum Wiki beitragen, damit das Wiki weiterhin rund läuft.<br /><br />

Da es schon so lange her ist, seit einer der derzeitigen Administratoren sich hat blicken lassen, wird #WIKINAME zur Adoption durch andere Benutzer freigegeben.<br /><br />

Das Wikia-Team<br /><br />

<small>Du kannst Änderungen an dieser Liste <a href="$3">abbestellen</a>.</small>',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME wurde adoptiert',
	'wikiadoption-mail-adoption-content' => 'Hallo $1,

#WIKINAME wurde adoptiert!  Wikis können adoptiert werden, wenn keiner der derzeitigen Administratoren für mindestens 30 Tage aktiv gewesen ist.

Der #WIKINAME adoptierende Benutzer hat nun Bürokraten- und Administratorstatus. Mach dir keine Sorgen - du bist immer noch ein Administrator, und du kannst jederzeit wieder dazustoßen und mitmachen.

Das Wikia-Team

Klicke auf den folgenden Link, um Änderungen an dieser Liste abzubestellen: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Hallo $1,<br /><br />
#WIKINAME wurde adoptiert!  Wikis können adoptiert werden, wenn keiner der derzeitigen Administratoren für mindestens 30 Tage aktiv gewesen ist.<br /><br />
Der #WIKINAME adoptierende Benutzer hat nun Bürokraten- und Administratorstatus. Mach dir keine Sorgen - du bist immer noch ein Administrator, und du kannst jederzeit wieder dazustoßen und mitmachen.<br /><br />
Das Wikia-Team<br /><br />
<small>Du kannst Änderungen an dieser Liste <a href="$3">abbestellen</a>.</small>',
	'tog-adoptionmails' => 'Mich per E-Mail benachrichtigen, wenn $1 zur Adoption durch andere Benutzer freigegeben wird',
	'wikiadoption-pref-label' => 'Eine Änderung dieser Einstellungen wirkt sich nur auf E-Mails von $1 aus.',
	'wikiadoption-welcome-header' => 'Gratulation! Du hast {{SITENAME}} adoptiert!',
	'wikiadoption-welcome-body' => 'Du bist in diesem Wiki nun ein Bürokrat. Damit hast du nun Zugang zu allen Werkzeugen, um {{SITENAME}} zu verwalten.
<br /><br />
Am meisten hilfst du {{SITENAME}} beim Wachsen immer noch, indem du weiterhin Seiten bearbeitest.
<br /><br />
Wenn in einem Wiki kein aktiver Administrator ist, kann es zur Adoption freigegeben werden, also solltest du regelmäßig im Wiki vorbeischauen.
<br /><br />
Hilfreiche Werkzeuge:
<br /><br />
[[Special:ThemeDesigner|Theme-Designer]]
<br />
[[Special:LayoutBuilder|Layout-Ersteller]]
<br />
[[Special:ListUsers|Benutzerliste]]
<br />
[[Special:UserRights|Rechteverwaltung]]',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬) */
$messages['de-formal'] = array(
	'wikiadoption-notification' => "$1 kann adoptiert werden. Sie können der neue Verwalter werden. ''Jetzt adoptieren!''",
);

/** Spanish (Español)
 * @author VegaDark
 */
$messages['es'] = array(
	'wikiadoption' => 'Adopción automática de wikis',
	'wikiadoption-desc' => 'Una extensión sobre Adopción Automática de Wikis para MediaWiki',
	'wikiadoption-header' => 'Adopta esta wiki',
	'wikiadoption-button-adopt' => 'Sí, ¡quiero adoptar {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => '¡Descubre más!',
	'wikiadoption-description' => '$1, ¿preparado para adoptar {{SITENAME}}?
<br /><br />
No han habido administradores activos en {{SITENAME}} por un tiempo, ¡y estamos buscando por un nuevo líder para ayudar al contenido de esta wiki y hacer crecer a la comunidad! Como alguien quien contribuyó a {{SITENAME}} pensamos si te gustaría el trabajo.
<br /><br />
Al adoptar esta wiki, serás promovido a administrador y burócrata para darte las herramientas que necesitarás para administrar el contenido y a la comunidad de la wiki. Estarás habilitado para promover a otros administradores para ayudar, borrar, revertir, mover y proteger páginas, como también crear grupos de usuario y asignar usuarios a ellos.
<br /><br />
¿Estás preparado para tomar los siguientes pasos y ayudar a {{SITENAME}}?',
	'wikiadoption-know-more-header' => '¿Quieres saber más?',
	'wikiadoption-know-more-description' => 'Revisa estos enlaces para obtener más información. Y, por supuesto, ¡no dudes en contactarnos si tienes alguna pregunta!',
	'wikiadoption-adoption-successed' => '¡Felicitaciones! ¡Ahora eres un administrador en esta wiki!',
	'wikiadoption-adoption-failed' => 'Lo sentimos. Intentamos hacerte administrador, pero no ha funcionado. Por favor [http://community.wikia.com/Special:Contact contáctanos], y trataremos de ayudarte.',
	'wikiadoption-not-allowed' => 'Lo sentimos. No puedes adoptar esta wiki por ahora.',
	'wikiadoption-not-enough-edits' => '¡Oops! Necesitas tener más de 10 ediciones para adoptar este wiki.',
	'wikiadoption-adopted-recently' => '¡Oops! Ya has adoptado otro wiki recientemente. Necesitas esperar un tiempo antes de que puedas adoptar un nuevo wiki.',
	'wikiadoption-log-reason' => 'Adopción automática de wikis',
	'wikiadoption-notification' => '{{SITENAME}} está en adopción. ¿Estás interesado en ser un líder aquí? ¡Adopta esta wiki para comenzar! $2',
	'wikiadoption-mail-first-subject' => 'No te hemos visto desde hace algún tiempo',
	'wikiadoption-mail-first-content' => 'Hola $1,

Han pasado un par de semanas desde que hemos visto un administrador en #WIKINAME. Los administradores son una parte integral de #WIKINAME y es importante que tengan una presencia regular. Si no hay administradores activos por un gran período de tiempo, esta wiki podría ponerse en adopción y permitirle a otro usuario en ser administrador.

Si necesitas ayuda para cuidar la wiki, puedes permitir que otros usuarios sean administradores haciendo clic en $2. ¡Esperamos verte pronto en #WIKINAME!

El Equipo de Wikia

Haz clic en el siguiente enlace para darte de baja de los cambios a esta lista: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Hola $1,<br /><br />
Han pasado un par de semanas desde que hemos visto un administrador en #WIKINAME. Los administradores son una parte integral de #WIKINAME y es importante que tengan una presencia regular. Si no hay administradores activos por un gran período de tiempo, esta wiki podría ponerse en adopción y permitirle a otro usuario en ser administrador.<br /><br />
Si necesitas ayuda para cuidar de la wiki, puedes permitir que otros miembros de la comunidad sean administradores, yendo a <a href="$2">Configuración de permisos de usuarios</a>. ¡Esperamos verte pronto en #WIKINAME!<br /><br />
<b>El Equipo de Wikia</b><br /><br />
Puedes <a href="$3">cancelar tu suscripción</a> para futuros cambios de esta lista.',
	'wikiadoption-mail-second-subject' => '#WIKINAME pronto se pondrá en adopción',
	'wikiadoption-mail-second-content' => 'Hola $1,

¡Oh, no! Han pasado un par 30 días desde que hemos visto a un administrador activo en #WIKINAME. Es importante tener administradores activos para la comunidad así la wiki puede continuar trabajando sin problemas.

Ya que han pasado muchos días desde que editó el último administrador activo, #WIKINAME se ofrecerá ahora para su adopción a otros editores.

El Equipo de Wikia

Haz clic en el siguiente enlace para cancelar tu suscripción de esta lista: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Hola $1,<br /><br />
¡Oh, no! Han pasado un par 30 días desde que hemos visto a un administrador activo en #WIKINAME. Es importante tener administradores activos para la comunidad así la wiki puede continuar trabajando sin problemas.<br /><br />
Ya que han pasado muchos días desde que editó el último administrador activo, #WIKINAME se ofrecerá ahora para su adopción a otros editores.<br /><br />
El Equipo de Wikia<br /><br />

Puedes <a href="$3">cancelar</a> tu suscripción de esta lista.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME ha sido adoptado',
	'wikiadoption-mail-adoption-content' => 'Hola $1,

#WIKINAME ha sido adoptado. Las wikis están disponibles para ser adoptadas cuando no hay administradores activos por 30 días o más.

El usuario que adoptó #WIKINAME ahora tiene los cargos de burócrata y administrador. No te preocupes, aún sigues manteniendo tus cargos en esta wiki y eres bienvenido a regresar en cualquier momento.

El Equipo de Wikia

Haz clic en el siguiente enlace para cancelar tu suscripción de la lista: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Hola $1,<br /><br />
#WIKINAME ha sido adoptado. Las wikis están disponibles para ser adoptadas cuando no hay administradores activos por 30 días o más.<br /><br />
El usuario que adoptó #WIKINAME ahora tiene los cargos de burócrata y administrador. No te preocupes, aún sigues manteniendo tus cargos en esta wiki y eres bienvenido a regresar en cualquier momento.<br /><br />
<b>El Equipo de Wikia</b><br /><br />
Puedes <a href="$3">cancelar</a> tu suscripción de esta lista.',
	'tog-adoptionmails' => 'Notificarme por correo electrónico si $1 está disponible para otros usuarios para adoptar.',
	'wikiadoption-pref-label' => 'Cambiar estas preferencias solo afectarán los correos electrónicos de $1.',
	'wikiadoption-welcome-header' => '¡Felicitaciones! ¡Has adoptado {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'Ahora eres burócrata en esta wikii. Con tu nuevo cargo ahora tienes acceso a todas las herramientas que te ayudarán a administrar {{SITENAME}}.
<br /><br />
Lo más importante que puedes hacer para ayudar a {{SITENAME}} es mantenerte editando.
<br /><br />
Si no hay administradores activos en una wiki, puede ponerse en adopción, así que asegúrate de estar revisando la wiki constantemente.
<br /><br />
Herramientas útiles:
<br /><br />
[[Special:ThemeDesigner|Diseñador de temas]]
<br />
[[Special:LayoutBuilder|Creador de plantillas]]
<br />
[[Special:ListUsers|Lista de Usuarios]]
<br />
[[Special:UserRights|Administrar permisos de usuarios]]',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'wikiadoption' => 'اتخاذ خودکار ویکی',
	'wikiadoption-header' => 'اتخاذ این ویکی',
	'wikiadoption-button-adopt' => 'هم‌اکنون اتخاذ کن',
	'wikiadoption-know-more-header' => 'چگونه بیشتر بدانیم؟',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Tofu II
 */
$messages['fi'] = array(
	'wikiadoption-header' => 'Adoptoi tämä wiki',
	'wikiadoption-button-adopt' => 'Adoptoi nyt',
	'wikiadoption-know-more-header' => 'Haluatko tietää enemmän?',
	'wikiadoption-adoption-successed' => 'Onnittelut! Olet nyt ylläpitäjä tässä wikissä!',
	'wikiadoption-notification' => "$1 on adoptoitavana! Sinusta voi tulla uusi omistaja. '''Adoptoi nyt!'''",
);

/** French (Français)
 * @author Balzac 40
 * @author Notafish
 * @author Verdy p
 * @author Wyz
 * @author Zcqsc06
 */
$messages['fr'] = array(
	'wikiadoption' => 'Adoption de wiki automatique',
	'wikiadoption-desc' => 'Une extension AutomaticWikiAdoption pour MediaWiki',
	'wikiadoption-header' => 'Adopter ce wiki',
	'wikiadoption-button-adopt' => 'Oui, je veux adopter {{SITENAME}} !',
	'wikiadoption-adopt-inquiry' => 'Pour en savoir plus !',
	'wikiadoption-description' => '$1, prêt à adopter {{SITENAME}} ?
<br /><br />
Il n’y a pas eu d’administrateur actif sur {{SITENAME}} depuis un moment et nous recherchons un nouveau responsable pour aider à développer le contenu de ce wiki et en agrandir la communauté ! En tant que personne ayant déjà contribué à {{SITENAME}}, nous nous demandons si vous aimeriez ce travail.
<br /><br />
En adoptant le wiki, vous serez promu administrateur et bureaucrate afin de vous donner les outils dont vous aurez besoin pour gérer la communauté et le contenu du wiki. Vous pourrez créer d’autres administrateurs et bureaucrates pouvant aider, supprimer, restaurer, déplacer et protéger les pages.
<br /><br />
Êtes-vous prêt à passer aux autres étapes pour aider {{SITENAME}} ?',
	'wikiadoption-know-more-header' => 'Vous voulez en savoir plus ?',
	'wikiadoption-know-more-description' => "Veuillez consultez ces liens pour plus d'informations. Et, bien entendu, n’hésitez pas à nous contacter si vous avez des questions !",
	'wikiadoption-adoption-successed' => 'Félicitations ! Vous êtes maintenant administrateur sur ce wiki !',
	'wikiadoption-adoption-failed' => 'Nous sommes désolés. Nous avons essayé de vous nommer administrateur, mais cela n’a pas fonctionné. Veuillez [http://community.wikia.com/Special:Contact nous contacter], et nous allons essayer de vous aider.',
	'wikiadoption-not-allowed' => 'Nous sommes désolés. Vous ne pouvez pas adopter ce wiki maintenant.',
	'wikiadoption-not-enough-edits' => 'Oups ! Vous devez avoir plus de 10 contributions pour adopter ce wiki.',
	'wikiadoption-adopted-recently' => 'Oups ! Vous avez adopté un wiki récemment. Vous allez devoir attendre un peu avant de pouvoir adopter un nouveau wiki.',
	'wikiadoption-log-reason' => 'Adoption de wiki automatique',
	'wikiadoption-notification' => '{{SITENAME}} est prêt à être adopté. Intéressé de devenir un meneur ici ? Adopter ce wiki pour commencer ! $2',
	'wikiadoption-mail-first-subject' => 'Nous ne vous avons pas vu depuis un bon moment',
	'wikiadoption-mail-first-content' => 'Bonjour $1,

Cela fait quelques semaines que nous n’avons pas vu d’administrateur sur #WIKINAME. Les administrateurs sont une partie intégrante de #WIKINAME et il est important de s’assurer de leur présence régulière. S’il n’y a aucun administrateur actif durant une longue période, ce wiki peut être placé à l’adoption afin de permettre à un autre utilisateur d’en devenir un administrateur.

Si vous avez besoin d’aide pour vous occuper du wiki, vous pouvez également autoriser d’autres membres de la communauté à devenir maintenant administrateurs en allant sur $2.

L’équipe de Wikia.

Vous pouvez vous désabonner des modifications de cette liste ici : $3.',
	'wikiadoption-mail-first-content-HTML' => 'Bonjour $1,<br /><br />

Cela fait quelques semaines que nous n’avons pas vu d’administrateur sur #WIKINAME. Les administrateurs font partie intégrante de #WIKINAME et il est important de s’assurer de leur présence régulière. S’il n’y a aucun administrateur actif durant une longue période de temps, ce wiki peut être placé à l’adoption afin de permettre à un autre utilisateur d’en devenir un administrateur.<br /><br />

Si vous avez besoin d’aide pour vous occuper du wiki, vous pouvez aussi permettre à d’autres membres de la communauté de devenir maintenant des administrateurs en allant dans le <a href="$2">gestionnaire des droits des utilisateurs</a>. Nous espérons vous voir bientôt sur #WIKINAME !<br /><br />

<b>L’équipe Wikia</b><br /><br />

Vous pouvez <a href="$3">vous désabonner</a> des mises à jour de cette liste.',
	'wikiadoption-mail-second-subject' => '#WIKINAME sera bientôt placé à l’adoption',
	'wikiadoption-mail-second-content' => 'Bonjour $1,

Oh non ! Cela fait presque 30 jours qu’il n’y a eu aucun administrateur actif sur #WIKINAME. Il est important que des administrateurs apparaissent régulièrement et y contribuent afin que le wiki puisse continuer à fonctionner sans problème.

Puisque cela fait tant de jours qu’aucun des administrateurs actuels n’est apparu, #WIKINAME sera maintenant offert à l’adoption par d’autres contributeurs.

L’équipe Wikia

Vous pouvez vous désabonner des mises à jour de cette liste ici : $3.',
	'wikiadoption-mail-second-content-HTML' => 'Bonjour $1,<br /><br />
Oh non ! Cela fait pratiquement 30 jours qu’il n’y a eu aucun administrateur actif sur #WIKINAME. Il est important que des administrateurs apparaissent régulièrement et contribuent afin que le wiki puisse continuer de fonctionner sans problème.<br /><br />

Puisque cela fait tant de jours qu’aucun administrateur actif n’est apparu, #WIKINAME sera maintenant offert à l’adoption aux autres contributeurs.<br /><br />

L’équipe Wikia<br /><br />

Vous pouvez <a href="$3">vous désabonner</a> des mises à jour de cette liste.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME a été adopté',
	'wikiadoption-mail-adoption-content' => 'Bonjour $1,

#WIKINAME a été adopté. Les wikis sont placés à l’adoption lorsque aucun des administrateurs actuels n’y a été actif durant 30 jours ou plus.

L’utilisateur qui a adopté #WIKINAME y aura maintenant les statuts de bureaucrate et administrateur. Ne vous inquiétez pas, vous conserverez aussi votre statut d’administrateur sur ce wiki et vous restez bienvenu pour y retourner et continuer d’y contribuer à tout moment !

L’équipe Wikia

Vous pouvez vous désabonner des mises à jour de cette liste ici : $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Bonjour $1,<br /><br />

#WIKINAME a été adopté ! Les wikis sont placés à l’adoption lorsque aucun des administrateurs actuels n’y ont été actifs pendant 30 jours ou plus.<br /><br />

L’utilisateur ayant adopté #WIKINAME y aura maintenant les statuts de bureaucrate et administrateur. Ne vous inquiétez pas, vous conserverez votre statut d’administrateur sur ce wiki et vous restez bienvenu pour y retourner et continuer d’y contribuer à tout moment !<br /><br />

L’équipe Wikia<br /><br />

Vous pouvez <a href="$3">vous désabonner</a> des mises à jour de cette liste.',
	'tog-adoptionmails' => "Envoyez-moi un message si $1 devient disponible pour l'adoption",
	'wikiadoption-pref-label' => 'La modification de ces préférences affectera seulement les courriels de $1.',
	'wikiadoption-welcome-header' => 'Félicitations ! Vous avez adopté {{SITENAME}} !',
	'wikiadoption-welcome-body' => 'Vous êtes maintenant bureaucrate sur ce wiki. Avec votre nouveau statut, vous avez maintenant accès à tous les outils qui vous aideront à gérer {{SITENAME}}.
<br /><br />
La chose la plus importante pour aider {{SITENAME}} à grandir est de développer son contenu.
<br /><br />
S’il n’y a pas d’administrateur actif sur un wiki, il peut devenir disponible à l’adoption, veillez donc à venir fréquemment surveiller le wiki.
<br /><br />
Outils très utiles :
<br /><br />
[[Special:ThemeDesigner|Concepteur de thème]]
<br />
[[Special:LayoutBuilder|Générateur de mise en page]]
<br />
[[Special:ListUsers|Liste des utilisateurs]]
<br />
[[Special:UserRights|Gérer les droits]]',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'wikiadoption' => 'Adopción de wiki automática',
	'wikiadoption-desc' => 'Unha extensión AutomaticWikiAdoption para MediaWiki',
	'wikiadoption-header' => 'Adoptar este wiki',
	'wikiadoption-button-adopt' => 'Si, quero adoptar {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Descubra máis!',
	'wikiadoption-know-more-header' => 'Quere descubrir máis?',
	'wikiadoption-adoption-successed' => 'Parabéns! Agora xa é un administrador deste wiki!',
	'wikiadoption-not-allowed' => 'Sentímolo. Nestes intres non pode adoptar este wiki.',
	'wikiadoption-not-enough-edits' => 'Vaites! Necesita facer máis de 10 edicións para adoptar o wiki.',
	'wikiadoption-log-reason' => 'Adopción de wiki automática',
	'wikiadoption-mail-first-subject' => 'Levamos sen velo bastante tempo',
	'wikiadoption-mail-adoption-subject' => 'Adoptaron #WIKINAME',
	'wikiadoption-welcome-header' => 'Parabéns! Adoptou {{SITENAME}}!',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'wikiadoption' => 'Automatikus wiki örökbefogadás',
	'wikiadoption-header' => 'Wiki örökbefogadása',
	'wikiadoption-button-adopt' => 'Örökbefogadás',
	'wikiadoption-know-more-header' => 'Szeretnél többet tudni?',
	'wikiadoption-not-allowed' => 'Sajnáljuk, jelenleg nem adoptálhatod ezt a wikit.',
	'wikiadoption-mail-first-subject' => 'Már nem láttunk téged erre egy ideje',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'wikiadoption' => 'Adoption automatic de wikis',
	'wikiadoption-desc' => 'Un extension de MediaWiki pro adoption automatic de wikis',
	'wikiadoption-header' => 'Adoptar iste wiki',
	'wikiadoption-button-adopt' => 'Si, io vole adoptar {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Lege plus!',
	'wikiadoption-description' => '$1, es tu preste a adoptar {{SITENAME}}?
<br /><br />
Il non ha habite un administrator active in {{SITENAME}} durante un tempore, e nos cerca un nove dirigente pro adjutar a facer le communitate e contento de iste wiki crescer! Tu ha contribuite multo a {{SITENAME}}. Vole tu prender le posto?
<br /><br />
Adoptar iste wiki significa que tu essera promovite a administrator e bureaucrate. Isto te da accesso al instrumentos necessari pro gerer le communitate e contento del wiki. Tu potera assignar altere administratores pro adjutar, deler, reverter, renominar e proteger paginas.
<br /><br />
Es tu preste a prender le proxime passos pro adjutar {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Vole saper plus?',
	'wikiadoption-know-more-description' => 'Explora iste ligamines pro plus informationes. E, naturalmente, sia libere de contactar nos si tu ha questiones!',
	'wikiadoption-adoption-successed' => 'Felicitationes! Tu es ora administrator de iste wiki!',
	'wikiadoption-adoption-failed' => 'Nos lo regretta: nos ha tentate facer te administrator, ma le procedura non ha succedite. Per favor [http://community.wikia.com/Special:Contact contacta nos], e nos tentara adjutar te.',
	'wikiadoption-not-allowed' => 'Nos regretta que tu non pote adoptar iste wiki justo ora.',
	'wikiadoption-not-enough-edits' => 'Ups! Tu debe haber facite plus de 10 modificationes pro poter adoptar iste wiki.',
	'wikiadoption-adopted-recently' => 'Ups! Tu ha jam adoptate un wiki recentemente. Tu debe attender un certe tempore ante que tu pote adoptar un altere wiki.',
	'wikiadoption-log-reason' => 'Adoption automatic de wikis',
	'wikiadoption-notification' => '{{SITENAME}} es disponibile pro adoption. Ha tu interesse in devenir un dirigente hic? Adopta iste wiki pro comenciar! $2',
	'wikiadoption-mail-first-subject' => 'Nos non te ha vidite durante un tempore',
	'wikiadoption-mail-first-content' => 'Salute $1,

Ha passate plure septimanas desde que nos videva un administrator active in tu wiki. Le administratores face un parte integral de #WIKINAME e lor presentia regular es importante. Si il non ha administratores active durante multe tempore, iste wiki pote esser rendite disponibile pro adoption pro permitter a un altere usator de devenir administrator.

Si tu require adjuta a facer attention al wiki, tu pote permitter a altere membros del communitate de devenir administrator per visitar $2. Nos spera de vider te tosto in #WIKINAME!

Le equipa de Wikia

Clicca super le ligamine sequente pro non plus reciper cambios a iste lista: $3',
	'wikiadoption-mail-first-content-HTML' => 'Salute $1,<br /><br />

Ha passate plure septimanas desde que nos videva un administrator active in tu wiki. Le administratores face un parte integral de #WIKINAME e lor presentia regular es importante. Si il non ha administratores active durante multe tempore, iste wiki pote esser rendite disponibile pro adoption pro permitter a un altere usator de devenir administrator.<br /><br />

Si tu require adjuta a facer attention al wiki, tu pote permitter a altere membros del communitate de devenir administrator per visitar <a href="$2">Gestion de derectos de usatores</a>. Nos spera de vider te tosto in #WIKINAME!<br /><br />

Le equipa de Wikia<br /><br />

Clicca super le ligamine sequente pro <a href="$3">non plus reciper cambios</a> a iste lista.',
	'wikiadoption-mail-second-subject' => '#WIKINAME essera tosto rendite disponibile pro adoption',
	'wikiadoption-mail-second-content' => 'Salute $1,

Oh, no! Quasi 30 dies ha passate depost que nos ha vidite un administrator active in #WIKINAME. Es importante que administratores appare regularmente e contribue pro assecurar le bon functionamento del wiki.

Post que ha passate tante dies desde le apparentia de un administrator actual, #WIKINAME essera ora offerite pro adoption a altere contributores.

Le equipa de Wikia

Pro cancellar le subscription al cambios in iste lista: $3',
	'wikiadoption-mail-second-content-HTML' => 'Salute $1,<br /><br />

Oh, no! Quasi 30 dies ha passate depost que nos ha vidite un administrator active in #WIKINAME. Es importante que administratores appare regularmente e contribue pro assecurar le bon functionamento del wiki.<br /><br />

Post que ha passate tante dies desde le apparentia de un administrator actual, #WIKINAME essera ora offerite pro adoption a altere contributores.<br /><br />

Le equipa de Wikia<br /><br />

Tu pote <a href="$3">cancellar le subscription</a> al cambios in iste lista.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME ha essite adoptate',
	'wikiadoption-mail-adoption-content' => 'Salute $1,

#WIKINAME ha essite adoptate. Wikis deveni disponibile pro adoption si nulle administrator actual es active durante 30 dies o plus.

Le usator adoptante de #WIKINAME habera ora le stato de bureaucrate e administrator. Non te inquieta; tu retenera tamben le stato de administrator in iste wiki, e tu es benvenite a retornar e continuar a contribuer a omne tempore!

Le equipa de Wikia

Pro cancellar le subscription a cambios in iste lista: $3',
	'wikiadoption-mail-adoption-content-HTML' => 'Salute $1,<br /><br />

#WIKINAME ha essite adoptate. Wikis deveni disponibile pro adoption si nulle administrator actual es active durante 30 dies o plus.<br /><br />

Le usator adoptante de #WIKINAME habera ora le stato de bureaucrate e administrator. Non te inquieta; tu retenera tamben le stato de administrator in iste wiki, e tu es benvenite a retornar e continuar a contribuer a omne tempore!<br /><br />

Le equipa de Wikia<br /><br />

Tu pote <a href="$3">cancellar le subscription</a> a cambios in iste lista.',
	'tog-adoptionmails' => 'Inviar me e-mail si $1 devenira disponibile pro adoption per altere usatores',
	'wikiadoption-pref-label' => 'Modificar iste preferentias influentiara solmente le messages de e-mail ab $1.',
	'wikiadoption-welcome-header' => 'Felicitationes! Tu ha adoptate {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'Tu es ora bureaucrate in iste wiki. Con tu nove stato, tu ha recipite accesso a tote le instrumentos que te adjutara a gerer {{SITENAME}}.
<br /><br />
Le cosa le plus importante que tu pote facer pro adjutar a facer {{SITENAME}} crescer es continuar a contribuer contento.
<br /><br />
Si il non ha un administrator active in un wiki illo pote esser rendite disponibile pro adoption, dunque assecura te de revider le wiki frequentemente.
<br /><br />
Instrumentos utile:
<br /><br />
[[Special:ThemeDesigner|Designator de apparentias]]
<br />
[[Special:LayoutBuilder|Constructor de dispositiones de pagina]]
<br />
[[Special:ListUsers|Lista de usatores]]
<br />
[[Special:UserRights|Gestion de derectos]]',
);

/** Italian (Italiano)
 * @author Minerva Titani
 */
$messages['it'] = array(
	'wikiadoption-header' => 'Adotta questa wiki',
	'wikiadoption-mail-adoption-subject' => 'La tua wiki è stata adottata',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wikiadoption-adopt-inquiry' => 'Fir méi ze wëssen!',
	'wikiadoption-know-more-header' => 'Wann Dir méi wësse wëllt.',
	'wikiadoption-mail-first-subject' => 'Mir hunn Iech schonn eng Zäit net méi gesinn.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'wikiadoption' => 'АвтоматскоПосвојувањеНаВики',
	'wikiadoption-desc' => 'Додаток за автоматско посвојување на вики за МедијаВики',
	'wikiadoption-header' => 'Посвој го викиво',
	'wikiadoption-button-adopt' => 'Да, сакам да го посвојам викито {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Дознајте повеќе!',
	'wikiadoption-description' => '$1, дали сте спремни да го посвоите викито {{SITENAME}}?
<br /><br />
Викито {{SITENAME}} веќе подолго време нема активен администратор, па затоа бараме нов водач за да се погрижи да се зголемат содржините и заедницата на викито! Бидејќи сте учесник на {{SITENAME}} со своите придонеси, би сакале таа функција да ви ја понудиме вам.
<br /><br />
Ако го посвоите викито, ќе бидете унапредени во администратор и бирократ, и со ова ќе ги имате на располагање сите алатки што ви се потребни за да раководите со заедницата и содржините на викито. Ќе можете да назначувате други администартори за да ви помагаат, бришат, враќаат, преместуваат и заштитуваат страници, како и да создаваат кориснички групи и да им доделуваат корисници.
<br /><br />
Дали сте подготвени да ги преземете следните чекори за да му помогнете на викито {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Сакате да дознаете повеќе?',
	'wikiadoption-know-more-description' => 'За повеќе информации, погледајте ги овие врски. И секако, најслободно обратете ни се ако имате прашања!',
	'wikiadoption-adoption-successed' => 'Честитаме! Сега сте администратор на ова вики!',
	'wikiadoption-adoption-failed' => 'Нажалост, се обидовме да ве назначиме за администратор, но не успеавме. [http://community.wikia.com/Special:Contact Контактирајте нè], и ќе се обидеме да ви помогнеме.',
	'wikiadoption-not-allowed' => 'Нажалост, во моментов не можете да го посвоите ова вики.',
	'wikiadoption-not-enough-edits' => 'Упс! Мора да имате барем 10 уредувања за да можете да го присвоите викито.',
	'wikiadoption-adopted-recently' => 'Упс! Неодамна имате посвоено друго вики. Ќе треба да почекате пред да можете да посвоите уште едно.',
	'wikiadoption-log-reason' => 'Автоматско посвојување на вики',
	'wikiadoption-notification' => '{{SITENAME}} може да се посвои! Сакате да станете водач на викито? Посвојте го и започнете!  $2',
	'wikiadoption-mail-first-subject' => 'Не ве имаме видено во последно време',
	'wikiadoption-mail-first-content' => 'Здраво $1,

Има две недели како нема администратор на #WIKINAME. Администраторите се составен дел од #WIKINAME и мора да бидат редовно присутни. Ако подолго време нема активни администратори, викито може да биде понудено за посвојување, и со тоа да му овозможиме на друг корисник да стане администратор.

Ако ви треба помош со раководењето со викито, ви предлагаме да назначите администратор(и) од другите учесници. Ова можете да го направите преку страницата $2. Се надеваме дека набргу ќе ве видиме на #WIKINAME!

Екипата на Викија

Ако сакате повеќе да не добивате известувања за измените на овој поштенски список, стиснете на следнава врска: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Здраво $1,<br /><br />

Има пар недели како немаме видено администратор на #WIKINAME. Администраторите се составен дел од #WIKINAME и мора да бидат редовно присутни. Ако подолго време нема активни администратори, викито може да биде понудено за посвојување, и со тоа да му овозможиме на друг корисник да стане администратор.<br /><br />

Ако ви треба помош со раководењето со викито, ви предлагаме да назначите администратор(и) од другите учесници. Ова можете да го направите преку страницата <a href="$2">Раководење со кориснички права</a>. Се надеваме дека набргу ќе ве видиме на #WIKINAME!<br /><br />

Екипата на Викија<br /><br />

Можете да се <a href="$3">отпишете</a> за повеќе да не добивате известувања за измените на овој список.',
	'wikiadoption-mail-second-subject' => 'Наскоро ќе го понудиме викито #WIKINAME за посвојување',
	'wikiadoption-mail-second-content' => 'Здраво $1,
Поминаа речиси 30 дена како не сме виделе активен администратор на #WIKINAME. Од голема важност е да имате активни администратори на викито за да може да работи правилно.

Бидејќи измина толку време,  #WIKINAME ќе им биде понудено за посвојување на други уредници.

Екипата на Викија

Ако сакате да не добивање известувања за измените на списоков, проследете ја врската: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Здраво $1,<br /><br />
Поминаа речиси 30 дена како не сме виделе активен администратор на #WIKINAME. Од голема важност е да имате активни администратори на викито за да може да работи правилно.

Бидејќи измина толку време,  #WIKINAME ќе им биде понудено за посвојување на други уредници.<br /><br />

Екипата на Викија<br /><br />

Можете да се <a href="$3">отпишете</a> од известувањата за промените на списоков.',
	'wikiadoption-mail-adoption-subject' => 'Викито #WIKINAME е посвоено',
	'wikiadoption-mail-adoption-content' => 'Здраво $1,

Викито #WIKINAME е посвоено! Викијата се нудат за посвојување кога немаат активен администратор веќе 30 дена.

Корисникот што го посвои #WIKINAME сега ќе биде бирократ и администратор.  Не грижете се, вие си го задржувате статусот на администратор и добредојдени сте да се вратите и да придонесувате во секое време!

Екипата на Викија

Ако сакате да не добивање известувања за измените на списоков, проследете ја врскава: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Здраво $1,<br /><br />

Викито #WIKINAME е посвоено! Викијата се нудат за посвојување кога немаат активен администратор веќе 30 дена.

Корисникот што го посвои #WIKINAME сега ќе биде бирократ и администратор.  Не грижете се, вие си го задржувате статусот на администратор и добредојдени сте да се вратите и да придонесувате во секое време!<br /><br />

Екипата на Викија<br /><br />


Можете да се <a href="$3">отпишете</a> од известувања за промените на списоков.',
	'tog-adoptionmails' => 'Извести ме по е-пошта ако $1 стане достапно за посвојување',
	'wikiadoption-pref-label' => 'Измените во овие нагодувања ќе важат само за -пошта од $1.',
	'wikiadoption-welcome-header' => 'Честитаме! Го посвоивте викито {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'Сега сте бирократ на ова вики. Со новиот статус, сега имате пристап до сите алатки што ви се потребни за да раководите со {{SITENAME}}.
<br /><br />
Најважно за зголемувањето и развојот на {{SITENAME}} е да продолжите да уредувате.
<br /><br />
Ако едно вики нема активен администратор, истото истото ќе биде понудено за посвојување, па затоа свраќајте на вашето вики што почесто.
<br /><br />
Корисни алатки:
<br /><br />
[[Special:ThemeDesigner|Ликовен уредник]] (уредување на изгледот на викито)
<br />
[[Special:LayoutBuilder|Распоредувач на страници]]
<br />
[[Special:ListUsers|Список на корисници]]
<br />
[[Special:UserRights|Раководење со права]]',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'wikiadoption-header' => 'ഈ വിക്കിയെ ദത്തെടുക്കുക',
	'wikiadoption-button-adopt' => 'ഇപ്പോൾ തന്നെ ദത്തെടുക്കുക',
	'wikiadoption-know-more-header' => 'കൂടുതൽ അറിയണമെന്നുണ്ടോ?',
	'wikiadoption-adoption-successed' => 'അഭിനന്ദനങ്ങൾ! താങ്കൾ ഇപ്പോൾ ഈ വിക്കിയിലെ ഒരു കാര്യനിർവാഹകനാണ്!',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'wikiadoption' => 'Pengambilalihan wiki automatik',
	'wikiadoption-desc' => 'Sambungan Pengambilalihan Wiki automatik untuk MediaWiki',
	'wikiadoption-header' => 'Ambil alih wiki ini',
	'wikiadoption-button-adopt' => 'Ya, saya mahu mengambil alih {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Ketahui lebih lanjut!',
	'wikiadoption-description' => '$1, bersediakah anda untuk mengambil alih {{SITENAME}}?
<br /><br />
Sudah sekian lama tiada pentadbir yang aktif di {{SITENAME}}, dan kami sedang mencari ketua baru untuk membantu pertumbuhan kandungan dan komuniti wiki ini! Sebagai salah seorang penyumbang kepada {{SITENAME}}, kami ingin tahu sama ada anda menerima jawatan ini.
<br /><br />
Dengan mengambil alih wiki ini, anda akan dinaik pangkat menjadi pentadbir dan birokrat dan diberikan peralatan yang anda perlukan untuk menguruskan komuniti dan kandungan wiki ini. Anda akan mampu mengambil pentadbir-pentadbir lain untuk membantu mengembangkan, menghapuskan, menggulung balik, memindahkan atau melindungi laman-laman dalam wiki.
<br /><br />
Bersediakah anda membuat langkah seterusnya untuk membantu {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Nak tahu lebih lanjut?',
	'wikiadoption-know-more-description' => 'Apa kata ikut pautan-pautan ini untuk maklumat lanjut. Seperkara lagi, jangan segan menghubungi kami jika ada apa-apa soalan untuk ditanya!',
	'wikiadoption-adoption-successed' => 'Syabas! Anda menjadi pentadbir di wiki ini!',
	'wikiadoption-adoption-failed' => 'Maaf. Kami cuba jadikan anda pentadbir, tetapi tidak menjadi pula. Sila [http://community.wikia.com/Special:Contact hubungi kami], supaya kami boleh membantu anda.',
	'wikiadoption-not-allowed' => 'Maafkan kami, anda tidak boleh mengambil alih wiki ini sekarang.',
	'wikiadoption-not-enough-edits' => 'Maaf, anda perlu membuat lebih 10 suntingan untuk mengambil alih wiki ini.',
	'wikiadoption-adopted-recently' => 'Maaf, anda baru mengambil alih wiki yang lain baru-baru ini. Anda perlu menunggu seketika sebelum anda boleh mengambil alih wiki baru.',
	'wikiadoption-log-reason' => 'Penerimaan Hakmilik Wiki Automatik',
	'wikiadoption-notification' => '{{SITENAME}} perlu diambil alih! Mungkin anda pemilik baru yang dicari-cari. $2!',
	'wikiadoption-mail-first-subject' => 'Sudah sekian lama kami tak berjumpa dengan anda',
	'wikiadoption-mail-first-content' => 'Apa khabar $1,

Sudah dua minggu lebih sejak kali terakhir kami melihat ada pentadbir di #WIKINAME. Pentadbir ialah sebahagian penting dalam #WIKINAME dan adalah penting untuk mereka sentiasa ada. Jika sudah sekian lama tiada pentadbir yang aktif, wiki ini boleh ditawarkan untuk diambil alih supaya pengguna lain boleh menjadi pentadbir.

Jika anda memerlukan bantuan untuk menjaga wiki ini, anda juga boleh membenarkan ahli-ahli komuniti yang lain menjadi pentadbir dengan pergi ke $2. Semoga berjumpa lagi di #WIKINAME!

Pasukan Wikia

Anda boleh berhenti melanggan perubahan pada senarai ini di sini: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Apa khabar $1,<br /><br />

Sudah dua minggu lebih sejak kali terakhir kami melihat ada pentadbir di #WIKINAME. Pentadbir ialah sebahagian penting dalam #WIKINAME dan adalah penting untuk mereka sentiasa ada. Jika sudah sekian lama tiada pentadbir yang aktif, wiki ini boleh ditawarkan untuk diambil alih supaya pengguna lain boleh menjadi pentadbir.<br /><br />

Jika anda memerlukan bantuan untuk menjaga wiki ini, anda juga boleh membenarkan ahli-ahli komuniti yang lain menjadi pentadbir dengan pergi ke <a href="$2">pengurusan Hak Pengguna</a>. Semoga berjumpa lagi di #WIKINAME!<br /><br />

Pasukan Wikia<br /><br />

Anda boleh <a href="$3">berhenti melanggan</a> perubahan pada senarai ini.',
	'wikiadoption-mail-second-subject' => '#WIKINAME akan ditawarkan untuk diambil alih nanti',
	'wikiadoption-mail-second-content' => 'Apa khabar $1,

Sudah hampir 30 hari sejak kali terakhir ada pentadbir yang aktif di #WIKINAME. Adalah penting untuk pentadbir kerap hadir dan menyumbang supaya wiki ini terus berjalan lancar.

Memandangkan sudah berapa lama sejak hadirnya seorang pentadbir semasa, maka #WIKINAME kini akan ditawarkan untuk diambil alih oleh pentadbir lain. 

Pasukan Wikia

Anda boleh berhenti melanggan perubahan pada senarai ini di sini: $3',
	'wikiadoption-mail-second-content-HTML' => 'Apa khabar $1,<br /><br />

Sudah hampir 30 hari sejak kali terakhir ada pentadbir yang aktif di #WIKINAME. Adalah penting untuk pentadbir kerap hadir dan menyumbang supaya wiki ini terus berjalan lancar.<br /><br />

Memandangkan sudah berapa lama sejak hadirnya seorang pentadbir semasa, maka #WIKINAME kini akan ditawarkan untuk diambil alih oleh pentadbir lain. <br /><br />

Pasukan Wikia<br /><br />

Anda boleh <a href="$3">berhenti melanggan</a> perubahan pada senarai ini.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME telah diambil alih',
	'wikiadoption-mail-adoption-content' => 'Apa khabar $1,

#WIKINAME telah diambil alih. Wiki akan disediakan untuk diambil alih apabila tiadanya pentadbir semasa yang aktif selama 30 hari atau lebih.

Pengguna yang mengambil alih #WIKINAME kini akan mendapat status birokrat dan pentadbir. Jangan bimbang kerana anda masih mengekalkan status pentadbir di wiki ini, dan anda boleh kembali ke situ pada bila-bila masa sahaja.

Pasukan Wikia

Anda boleh berhenti melanggan perubahan pada senarai ini di sini: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Apa khabar $1,<br /><br />

#WIKINAME telah diambil alih. Wiki akan disediakan untuk diambil alih apabila tiadanya pentadbir semasa yang aktif selama 30 hari atau lebih.<br /><br />

Pengguna yang mengambil alih #WIKINAME kini akan mendapat status birokrat dan pentadbir. Jangan bimbang kerana anda masih mengekalkan status pentadbir di wiki ini, dan anda boleh kembali ke situ pada bila-bila masa sahaja.<br /><br />

Pasukan Wikia<br /><br />

Anda boleh <a href="$3">berhenti melanggan</a> perubahan pada senarai ini.',
	'tog-adoptionmails' => 'E-mel kepada saya jika $1 akan dibuka kepada pengguna lain untuk mengambil alih',
	'wikiadoption-pref-label' => 'Penukaran keutamaan ini akan hanya mempengaruhi e-mel dari $1.',
	'wikiadoption-welcome-header' => 'Tahniah! Anda telah mengambil alih {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'Anda sudah menjadi birokrat di wiki ini. Dengan status baru anda, anda kini boleh mencapai semua peralatan yang akan membantu anda menguruskan {{SITENAME}}.
<br /><br />
Perkara paling penting yang anda boleh lakukan untuk membantu {{SITENAME}} berkembang adalah meneruskan usaha menyunting.
<br /><br />
Jika sesebuah wiki ketiadaan pentadbir yang aktif, ia boleh diserahkan untuk diambil alih, jadi tolong jenguk wiki ini selalu.
<br /><br />
Alatan yang Berguna:
<br /><br />
[[Special:ThemeDesigner|Pereka Tema]]
<br />
[[Special:LayoutBuilder|Pembina Tataletak Laman]]
<br />
[[Special:ListUsers|Senarai Pengguna]]
<br />
[[Special:UserRights|Uruskan Hak]]',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'wikiadoption' => 'Automatische wikiadoptie',
	'wikiadoption-desc' => 'Een uitbreiding voor automatisch toewijzen van nieuwe beheerders voor een wiki (adoptie)',
	'wikiadoption-header' => 'Deze wiki adopteren',
	'wikiadoption-button-adopt' => 'Ja, ik wil {{SITENAME}} adopteren!',
	'wikiadoption-adopt-inquiry' => 'Meer te weten komen',
	'wikiadoption-description' => "Bent u klaar om {{SITENAME}} te adopteren, $1?
<br /><br />
Er is al een tijdje geen actieve beheerder geweest voor {{SITENAME}} en we zoeken een nieuwe leider die ervoor zorgt dat de inhoud en de gemeenschap voor deze wiki blijft groeien! U hebt bijgedragen aan {{SITENAME}}, en we vragen ons af of u dat wilt doen.
<br /><br />
Door de wiki te adapteren wordt u beheerder en bureaucraat zodat u de hulpmiddelen hebt om de inhoud en de gemeenschap van de wiki te beheren. U kunt andere gebruikers beheerder maken en helpen met het verwijderen, hernoemen en beveiligen van pagina's en bewerkingen terugdraaien.
<br /><br />
Bent u klaar om de volgende stap te zetten in uw carrière bij {{SITENAME}}?",
	'wikiadoption-know-more-header' => 'Meer te weten komen?',
	'wikiadoption-know-more-description' => 'Volg deze verwijzingen voor meer infomatie. Het staat u natuurlijk ook vrij om contact met ons op te nemen als u vragen hebt.',
	'wikiadoption-adoption-successed' => 'Gefeliciteerd! U bent nu beheerder van deze wiki.',
	'wikiadoption-adoption-failed' => 'We hebben geprobeerd u beheerder te maken, maar dit lukte helaas niet. [http://community.wikia.com/Special:Contact Neem contact met ons op] zodat we u verder kunnen helpen.',
	'wikiadoption-not-allowed' => 'U kunt deze wiki nu helaas niet adopteren.',
	'wikiadoption-not-enough-edits' => 'U moet meer dan 10 bewerkingen gemaakt hebben om deze wiki te kunnen adopteren.',
	'wikiadoption-adopted-recently' => 'U hebt recentelijk al een wiki geadapteerd. U moet even wachten voordat u nog een wiki kunt adopteren.',
	'wikiadoption-log-reason' => 'Automatische wikiadoptie',
	'wikiadoption-notification' => '{{SITENAME}} kan geadopteerd worden. Wilt u de nieuwe leider worden? Adopteer deze wiki om er nu aan te beginnen! $2',
	'wikiadoption-mail-first-subject' => 'We hebben u al een tijdje niet gezien',
	'wikiadoption-mail-first-content' => 'Hallo $1,

Het is al weer een aantal weken geleden dat we een beheerder in uw wiki #WIKINAME hebben gezien. Beheerders zijn een integraal onderdeel van #WIKINAME en het is belangrijk dat ze regelmatig aanwezig zijn. Als er langere tijd geen actieve beheerders zijn, dan wordt de wiki opgegeven voor adoptie, zodat er een andere beheerder kan komen.

Als u hulp nodig hebt bij het zorgen voor uw wiki, dan kunt u ook andere gemeenschapsleden beheerder maken door te gaan naar $2. We hopen u snel te zien op #WIKINAME!

Het Wikia-team

Klik op de volgende verwijzing om u uit te schrijven van wijzigingen op deze lijst: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Hallo $1,<br /><br />

Het is al weer een aantal weken geleden dat we een beheerder in uw wiki #WIKINAME hebben gezien. Beheerders zijn een integraal onderdeel van #WIKINAME en het is belangrijk dat ze regelmatig aanwezig zijn. Als er langere tijd geen actieve beheerders zijn, dan wordt de wiki opgegeven voor adoptie, zodat er een andere beheerder kan komen.<br /><br />

Als u hulp nodig hebt bij het zorgen voor uw wiki, dan kunt u ook andere gemeenschapsleden beheerder maken door te gaan naar $2. We hopen u snel te zien op #WIKINAME!<br /><br />

Het Wikia-team<br /><br />

Klik op de volgende verwijzing om u <a href="$3">uit te schrijven</a> van wijzigingen op deze lijst.',
	'wikiadoption-mail-second-subject' => '#WIKINAME wordt binnenkort voor adoptie opgegeven',
	'wikiadoption-mail-second-content' => 'Hallo $1,

Het is al weer dertig dagen geleden dat we een beheerder op #WIKINAME hebben gezien. Het is belangrijk dat beheerders regelmatig aanwezig zijn en dat ze bijdragen zodat de wiki soepel kan lopen.

Omdat er zo lang geen beheerder actief is geweest, komt #WIKINAME nu beschikbaar voor adoptie door andere gebruikers.

Het Wikia-team

Klik op de volgende verwijzing om u uit te schrijven van wijzigingen op deze lijst: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Hallo $1,<br /><br />
Het is al weer dertig dagen geleden dat we een beheerder op #WIKINAME hebben gezien. Het is belangrijk dat beheerders regelmatig aanwezig zijn en dat ze bijdragen zodat de wiki soepel kan lopen.<br /><br />

Omdat er zo lang geen beheerder actief is geweest, komt #WIKINAME nu beschikbaar voor adoptie door andere gebruikers.<br /><br />

Het Wikia-team<br /><br />

Klik op de volgende verwijzing om u <a href="$3">unsubscribe</a>uit te schrijven</a> van wijzigingen op deze lijst.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME is geadopteerd',
	'wikiadoption-mail-adoption-content' => 'Hallo $1,

#WIKINAME is geadopteerd! Wikis zijn beschikbaar voor adoptie waar geen huidige beheerder minstens 30 dagen actief is.

De adopterende gebruiker van #WIKINAME zal nu bureaucraat- en beheerderrechten hebben. Vrees niet, u bent nog steeds beheerder en u bent nog steeds op ieder moment van harte welkom om terug te keren en opnieuw bij te dragen!

Het Wikia-team

U kunt zich van wijzigingen op deze lijst uitschrijven: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Hallo $1,<br /><br />

#WIKINAME is geadopteerd! Wikis zijn beschikbaar voor adoptie waar geen huidige beheerder minstens 30 dagen actief is.<br /><br />

De adopterende gebruiker van #WIKINAME zal nu bureaucraat- en beheerderrechten hebben. Vrees niet, u bent nog steeds beheerder en u bent nog steeds op ieder moment van harte welkom om terug te keren en opnieuw bij te dragen!<br /><br />

Het Wikia-team<br /><br />

U kunt zich van wijzigingen op deze lijst <a href="$3">uitschrijven</a>.',
	'tog-adoptionmails' => 'Mij e-mailen als $1 door andere gebruikers geadopteerd kan worden',
	'wikiadoption-pref-label' => 'Het wijzigen van deze voorkeuren heeft alleen invloed op e-mails van $1.',
	'wikiadoption-welcome-header' => 'Gefeliciteerd! U hebt {{SITENAME}} geadopteerd!',
	'wikiadoption-welcome-body' => 'U bent nu bureaucraat op deze wiki. Met uw nieuwe status hebt u nu de beschikking over alle hulpmiddelen die u nodig hebt om {{SITENAME}} te beheren.<br /><br />
Het belangrijkste wat u kunt doen om {{SITENAME}} te helpen is blijven bewerken.<br /><br />
Als er geen actieve beheerder is in een wiki, dan kan deze beschikbaar gesteld worden voor adoptie. Zorg er dus voor dat u de wiki regelmatig bezoekt.<br /><br />
Handige hulpmiddelen:<br /><br />
[[Special:ThemeDesigner|Vormgeving ontwerpen]]<br />
[[Special:LayoutBuilder|Paginavormgevingen maken]]<br />
[[Special:ListUsers|Gebruikerslijst]]<br />
[[Special:UserRights|Rechten beheren]]',
);

/** ‪Nederlands (informeel)‬ (‪Nederlands (informeel)‬)
 * @author MarkvA
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'wikiadoption-description' => "Je hebt bijgedragen aan deze wiki, maar er zijn op het moment geen actieve beheerders. Wil jij die taak op je nemen?

Beheerder zijn betekent dat je inhoud blijft bijdragen, maar ook anderen aanmoedigt en beschikbaar bent om anderen te helpen als ze hulp nodig hebben.

Daarnaast krijg je mogelijkheden om gebruikers te blokkeren en te deblokkeren, pagina's te beveiligen en nog veel meer. We sturen je ook een e-mail als iemand anders de wiki bewerkt.

In het kort, wordt je eigenaar en kun je de wiki kneden zoals je wilt.

Klinkt goed?",
	'wikiadoption-know-more-description' => 'Volg deze verwijzingen voor meer infomatie. Het staat je natuurlijk ook vrij om contact met ons op te nemen als je vragen hebt.',
	'wikiadoption-adoption-successed' => 'Gefeliciteerd! Je bent nu beheerder van deze wiki.',
	'wikiadoption-adoption-failed' => 'We hebben geprobeerd je beheerder te maken, maar dit lukte helaas niet. [http://community.wikia.com/Special:Contact Neem contact met ons op] zodat we je verder kunnen helpen.',
	'wikiadoption-not-allowed' => 'Je kunt deze wiki nu helaas niet adopteren.',
	'wikiadoption-not-enough-edits' => 'Je moet meer dan 10 bewerkingen gemaakt hebben om deze wiki te kunnen adopteren.',
	'wikiadoption-adopted-recently' => 'Je hebt recentelijk al een wiki geadapteerd. Je moet even wachten voordat je nog een wiki kunt adopteren.',
	'wikiadoption-notification' => '$1 kan geadopteerd worden. Je kunt de nieuwe eigenaar worden. $2',
	'wikiadoption-mail-first-subject' => 'We hebben je al een tijdje niet gezien',
	'wikiadoption-mail-first-content' => 'Hallo $1,

Het is al weer een aantal weken geleden dat we een beheerder in je wiki #WIKINAME hebben gezien. Beheerders zijn een integraal onderdeel van #WIKINAME en het is belangrijk dat ze regelmatig aanwezig zijn. Als er langere tijd geen actieve beheerders zijn, dan wordt de wiki opgegeven voor adoptie, zodat er een andere beheerder kan komen.

Als je hulp nodig hebt bij het zorgen voor je wiki, dan kan je ook andere gemeenschapsleden beheerder maken door te gaan naar $2. We hopen je snel te zien op #WIKINAME!

Het Wikia-team

Klik op de volgende verwijzing om je uit te schrijven van wijzigingen op deze lijst: $3.',
	'wikiadoption-mail-first-content-HTML' => 'Hallo $1,<br /><br />

Het is al weer een aantal weken geleden dat we een beheerder in je wiki #WIKINAME hebben gezien. Beheerders zijn een integraal onderdeel van #WIKINAME en het is belangrijk dat ze regelmatig aanwezig zijn. Als er langere tijd geen actieve beheerders zijn, dan wordt de wiki opgegeven voor adoptie, zodat er een andere beheerder kan komen.<br /><br />

Als je hulp nodig hebt bij het zorgen voor je wiki, dan kan je ook andere gemeenschapsleden beheerder maken door te gaan naar $2. We hopen je snel te zien op #WIKINAME!<br /><br />

Het Wikia-team<br /><br />

Klik op de volgende verwijzing om je <a href="$3">uit te schrijven</a> van wijzigingen op deze lijst.',
	'wikiadoption-mail-second-subject' => 'Je wiki wordt binnenkort voor adoptie opgegeven',
	'wikiadoption-mail-second-content' => 'Hallo $1,

Het is al weer dertig dagen geleden dat we een beheerder op #WIKINAME hebben gezien. Het is belangrijk dat beheerders regelmatig aanwezig zijn en dat ze bijdragen zodat de wiki soepel kan lopen.

Omdat er zo lang geen beheerder actief is geweest, komt #WIKINAME nu beschikbaar voor adoptie door andere gebruikers.

Het Wikia-team

Klik op de volgende verwijzing om je uit te schrijven van wijzigingen op deze lijst: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Hoi $1,<br /><br />
Het is al weer dertig dagen geleden dat we een beheerder op #WIKINAME hebben gezien. Het is belangrijk dat beheerders regelmatig aanwezig zijn en dat ze bijdragen zodat de wiki soepel kan lopen.<br /><br />

Omdat er zo lang geen beheerder actief is geweest, komt #WIKINAME nu beschikbaar voor adoptie door andere gebruikers.<br /><br />

Het Wikia-team<br /><br />

Klik op de volgende verwijzing om je <a href="$3">unsubscribe</a>uit te schrijven</a> van wijzigingen op deze lijst.',
	'wikiadoption-mail-adoption-subject' => 'Je wiki is geadopteerd',
	'wikiadoption-mail-adoption-content' => 'Hoi $1,

Je wiki is geadopteerd! Dit betekent dat iemand anders zich heeft opgeworpen om te helpen bij het onderhouden van de gemeenschap en de inhoud van de site. Vrees niet. Je bent nog steeds beheerder en je bent nog steeds op ieder moment van harte welkom.

Het Wikia-team

Je kunt je van wijzigingen op deze lijst uitschrijven: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Hoi $1,<br /><br />
Je wiki is geadopteerd! Dit betekent dat iemand anders zich heeft opgeworpen om te helpen bij het onderhouden van de gemeenschap en de inhoud van de site. Vrees niet. Je bent nog steeds beheerder en je bent nog steeds op ieder moment van harte welkom.<br /><br />
<b>Het Wikia-team</b><br /><br />
<small>Je kunt je van wijzigingen op deze lijst <a href="$3">uitschrijven</a>.</small>',
	'wikiadoption-welcome-header' => 'Gefeliciteerd! Je hebt {{SITENAME}} geadopteerd!',
	'wikiadoption-welcome-body' => 'Je bent nu bureaucraat op deze wiki. Met je nieuwe status heb je nu de beschikking over alle hulpmiddelen die je nodig hebt om {{SITENAME}} te beheren.<br /><br />
Het belangrijkste wat je kunt doen om {{SITENAME}} te helpen is blijven bewerken.<br /><br />
Als er geen actieve beheerder is in een wiki, dan kan deze beschikbaar gesteld worden voor adoptie. Zorg er dus voor dat je de wiki regelmatig bezoekt.<br /><br />
Handige hulpmiddelen:<br /><br />
[[Special:ThemeDesigner|Vormgeving ontwerpen]]<br />
[[Special:LayoutBuilder|Paginavormgevingen maken]]<br />
[[Special:ListUsers|Gebruikerslijst]]<br />
[[Special:UserRights|Rechten beheren]]',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Audun
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'wikiadoption' => 'Automatisk wikiadopsjon',
	'wikiadoption-desc' => 'En AutomatiskWikiAdopsjons-utvidelse for MediaWiki',
	'wikiadoption-header' => 'Adopter denne wikien',
	'wikiadoption-button-adopt' => 'Ja, jeg vil adoptere {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Finn ut mer!',
	'wikiadoption-description' => '$1, klar til å adoptere {{SITENAME}}?
<br /><br />
Det har ikke vært en aktiv administrator på {{SITENAME}} på en stund, og vi ser etter en ny leder som kan hjelpe denne wikiens innhold og fellesskap med å vokse! Som en av bidragsyterne til {{SITENAME}} lurte vi på om du ville ha jobben.
<br /><br />
Ved å adoptere wikien vil du bli forfremmet til administrator og byråkrat for å gi deg verktøyene du trenger for å håndtere wikiens fellesskap og innhold. Du vil være i stand til å utnevne andre administratorer for å hjelpe til, slette, tilbakestille, flytte og beskytte sider.
<br /><br />
Er du klar til å ta det neste steget for å hjelpe {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Vil du vite mer?',
	'wikiadoption-know-more-description' => 'Sjekk disse lenkene for mer informasjon. Du er selvsagt velkommen til å kontakte oss om du har spørsmål!',
	'wikiadoption-adoption-successed' => 'Gratulerer! Du er nå administrator på denne wikien.',
	'wikiadoption-adoption-failed' => 'Beklager. Vi prøvde å gjøre deg til administrator, men det fungerte ikke. [http://community.wikia.com/Special:Contact Kontakt oss], så skal vi prøve å hjelpe deg.',
	'wikiadoption-not-allowed' => 'Beklager. Du kan ikke adoptere denne wikien akkurat nå.',
	'wikiadoption-not-enough-edits' => 'Ops! Du må ha flere enn ti redigeringer for å adoptere denne wikien.',
	'wikiadoption-adopted-recently' => 'Ops! Du har allerede adoptert en annen wiki nylig. Du må vente en stund før du kan adoptere en ny wiki.',
	'wikiadoption-log-reason' => 'Automatisk wikiadopsjon',
	'wikiadoption-notification' => '{{SITENAME}} er tilgjengelig for adopsjon. Interessert i å bli en leder her? Adopter denne wikien for å komme i gang!  $2',
	'wikiadoption-mail-first-subject' => 'Vi har ikke sett deg på en stund',
	'wikiadoption-mail-first-content' => 'Hei $1,

Det har gått noen uker siden vi har sett en administrator på #WIKINAME. Administratorer er en vital del av #WIKINAME og det er viktig at de har en fast tilstedeværelse. Hvis det ikke er noen aktive administratorer i en lengre tidsperiode, vil denne wikien settes opp for adopsjon slik at en annen bruker kan bli administrator.

Hvis du trenger hjelp til å ta vare på wikien, kan du la andre medlemmer av fellesskapet bli administratorer ved å gå til $2. Vi håper å se deg på #WIKINAME snart!

Wikia-teamet

Du kan avslutte abonnementet på endringer fra denne listen her: $3',
	'wikiadoption-mail-first-content-HTML' => 'Hei $1,<br /><br />

Det har gått noen uker siden vi har sett en administrator på #WIKINAME. Administratorer er en vital del av #WIKINAME og det er viktig at de har en fast tilstedeværelse. Hvis det ikke er noen aktive administratorer i en lengre tidsperiode, vil denne wikien settes opp for adopsjon slik at en annen bruker kan bli administrator.<br /><br />

Hvis du trenger hjelp til å ta vare på wikien, kan du la andre medlemmer av fellesskapet bli administratorer ved å gå til <a href="$2">Brukerrettighetskontroll</a>. Vi håper å se deg på #WIKINAME snart!<br /><br />

Wikia-teamet<br /><br />

Du kan <a href="$3">avslutte abonnementet</a> på endringer fra denne listen.',
	'wikiadoption-mail-second-subject' => '#WIKINAME vil bli satt opp for adopsjon snart',
	'wikiadoption-mail-second-content' => 'Hei $1,

Å, nei! Det har gått nesten 30 dager siden det var en aktiv administrator på #WIKINAME. Det er viktig at administratorer jevnlig viser seg og bidrar slik at wikien kan fortsette problemfritt.

Siden det har gått så mange dager siden en nåværende administrator viste seg, har #WIKINAME nå blitt satt opp for adopsjon til andre redaktører.

Wikia-teamet

Du kan avslutte abonnementet på endringer fra denne listen her: $3',
	'wikiadoption-mail-second-content-HTML' => 'Hei $1,<br /><br />

Å, nei! Det har gått nesten 30 dager siden det var en aktiv administrator på #WIKINAME. Det er viktig at administratorer jevnlig viser seg og bidrar slik at wikien kan fortsette problemfritt.<br /><br />

Siden det har gått så mange dager siden en nåværende administrator viste seg, har #WIKINAME nå blitt satt opp for adopsjon til andre redaktører.<br /><br />

Wikia-teamet<br /><br />

Du kan <a href="$3">avslutte abonnementet</a> på endringer fra denne listen.',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME har blitt adoptert',
	'wikiadoption-mail-adoption-content' => 'Hei $1,

#WIKINAME har blitt adoptert! Wikier er tilgjenglige for adopsjon når ingen av de nåværende administratorene har vært aktive i 30 eller flere dager.

Brukeren som har adoptert #WIKINAME vil nå ha status som byråkrat og administrator. Ikke bekymre deg, du beholder også administratorstatusen din på denne wikien og er velkommen tilbake for videre bidrag når som helst!

Wikia-teamet

Du kan avslutte abonnementet på endringer fra denne listen her: $3',
	'wikiadoption-mail-adoption-content-HTML' => 'Hei $1,<br /><br />

#WIKINAME har blitt adoptert! Wikier er tilgjenglige for adopsjon når ingen av de nåværende administratorene har vært aktive i 30 eller flere dager.<br /><br />

Brukeren som har adoptert #WIKINAME vil nå ha status som byråkrat og administrator. Ikke bekymre deg, du beholder også administratorstatusen din på denne wikien og er velkommen tilbake for videre bidrag når som helst!<br /><br />

Wikia-teamet<br /><br />

Du kan <a href="$3">avslutte abonnementet</a> på endringer fra denne listen.',
	'tog-adoptionmails' => 'Send meg en e-post hvis $1 blir tilgjengelig for adopsjon av andre brukere',
	'wikiadoption-pref-label' => 'Å endre disse innstillingene vil bare påvirke e-poster fra $1.',
	'wikiadoption-welcome-header' => 'Gratulerer! Du har adoptert {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'Du er nå en byråkrat på denne wikien. Med din nye status har du nå tilgang til alle verktøyene som vil hjelpe deg å håndtere {{SITENAME}}.
<br /><br />
Det viktigste du kan gjøre for å hjelpe {{SITENAME}} med å vokse er å fortsette å redigere.
<br /><br />
Hvis det ikke er noen aktive administratorer på en wiki kan den settes opp for adopsjon så sørg for å besøke wikien ofte.
<br /><br />
Nyttige verktøy:
<br /><br />
[[Special:ThemeDesigner|Temautformeren]]
<br />
[[Special:LayoutBuilder|Sideoppsett-bygger]]
<br />
[[Special:ListUsers|Brukerliste]]
<br />
[[Special:UserRights|Håndter rettigheter]]',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'wikiadoption' => 'Automatyczna adopcja wiki',
	'wikiadoption-header' => 'Adoptuj tę wiki',
	'wikiadoption-button-adopt' => 'Tak, chcę adoptować {{SITENAME}}!',
	'wikiadoption-know-more-header' => 'Chcesz wiedzieć więcej?',
	'wikiadoption-adoption-successed' => 'Gratulacje! Jesteś teraz administratorem na tej wiki!',
	'wikiadoption-mail-second-content' => 'Witaj $1,

Minęło 30 dni od momentu, gdy aktywny był administrator na wiki $WIKINAME. Regularna obecność administratorów jest ważna dla poprawnego rozwoju wiki.

Ponieważ minęło tak wiele dni od pojawienia się aktualnego administratora, $WIKINAME zostanie zaproponowana do adopcji innym edytorom.

Zespół Wikii

Możesz zrezygnować z otrzymywania zmian na tej liście klikając link $3.',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'wikiadoption' => 'Adopção automática de wikis',
	'wikiadoption-desc' => 'Uma extensão do MediaWiki para Adopção Automática de Wikis',
	'wikiadoption-header' => 'Adoptar esta wiki',
	'wikiadoption-button-adopt' => 'Sim, quero adoptar a {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Saiba mais!',
	'wikiadoption-description' => '$1, está preparado(a) para adoptar a {{SITENAME}}?
<br /><br />
Há já algum tempo que a {{SITENAME}} não tem uma administração activa. Estamos à procura de uma nova liderança, para ajudar a aumentar o conteúdo da wiki e fazer crescer a comunidade de utilizadores! Como tem colaborado na {{SITENAME}}, queremos saber se gostaria de desempenhar o cargo.
<br /><br />
Ao adoptar a wiki será promovido a administrador e burocrata para que tenha acesso às ferramentas necessárias para gerir a comunidade e o conteúdo da wiki. Poderá eleger outros administradores para ajudar, eliminar, desfazer edições, mover e proteger páginas.
<br /><br />
Está preparado(a) para dar os próximos passos e ajudar a {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Quer saber mais?',
	'wikiadoption-know-more-description' => 'Para mais informações visite estes links. E claro, contacte-nos se tiver alguma pergunta!',
	'wikiadoption-adoption-successed' => 'Parabéns! Agora é administrador desta wiki!',
	'wikiadoption-adoption-failed' => 'Infelizmente, tentámos torná-lo administrador desta wiki mas não funcionou. [http://community.wikia.com/Special:Contact Contacte-nos] e tentaremos ajudá-lo.',
	'wikiadoption-not-allowed' => 'Desculpe. Não pode adoptar esta wiki agora.',
	'wikiadoption-not-enough-edits' => 'Precisa de ter feito mais de 10 edições para adoptar esta wiki.',
	'wikiadoption-adopted-recently' => 'Já adoptou outra wiki recentemente. Tem de esperar algum tempo até poder adoptar mais uma wiki.',
	'wikiadoption-log-reason' => 'Adopção Automática de Wikis',
	'wikiadoption-notification' => 'A {{SITENAME}} está preparada para ser adoptada. Tem interesse em tornar-se o(a) novo(a) líder? Adopte esta wiki para começar!  $2',
	'wikiadoption-mail-first-subject' => 'Já não o vemos há algum tempo',
	'wikiadoption-mail-first-content' => 'Olá $1,

Há já duas semanas que nenhum administrador visita a #WIKINAME. Os administradores são uma parte integrante da #WIKINAME e é importante que tenham uma presença regular. Se não tiver administradores activos durante um período extenso, esta wiki ficará disponível para adopção, para permitir que outro utilizador se torne administrador.

Se precisa de ajuda para cuidar da wiki, pode permitir que outros membros da comunidade também sejam administradores, visitando agora a página $2. Esperamos que regresse à #WIKINAME dentro de pouco tempo.

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-first-content-HTML' => 'Olá $1,<br /><br />

Há já duas semanas que nenhum administrador visita a #WIKINAME. Os administradores são uma parte integrante da #WIKINAME e é importante que tenham uma presença regular. Se não tiver administradores activos durante um período extenso, esta wiki ficará disponível para adopção, para permitir que outro utilizador se torne administrador.<br /><br />

Se precisa de ajuda para cuidar da wiki, pode permitir que outros membros da comunidade também sejam administradores, visitando agora a página de <a href="$2">gestão das Permissões dos Utilizadores</a>.. Esperamos que regresse à #WIKINAME dentro de pouco tempo.<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'wikiadoption-mail-second-subject' => 'A #WIKINAME será disponibilizada para adopção em breve',
	'wikiadoption-mail-second-content' => 'Olá $1,

Infelizmente, há quase um mês que nenhum administrador visita a #WIKINAME. É importante que existam administradores activos a colaborar na wiki para que ela continue a funcionar bem.

Como já passaram tantos dias desde que um dos administradores apareceu, a #WIKINAME vai ser disponibilizada para adopção por outros utilizadores.

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-second-content-HTML' => 'Olá $1,<br /><br />
Infelizmente, há quase um mês que nenhum administrador visita a #WIKINAME. É importante que existam administradores activos a colaborar na wiki para que ela continue a funcionar bem.<br /><br />

Como já passaram tantos dias desde que um dos administradores apareceu, a #WIKINAME vai ser disponibilizada para adopção por outros utilizadores.<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'wikiadoption-mail-adoption-subject' => 'A #WIKINAME foi adoptada',
	'wikiadoption-mail-adoption-content' => 'Olá $1,

A #WIKINAME foi adoptada. As wikis ficam disponíveis para adopção que nenhum dos administradores está activo durante 30 ou mais dias.

O utilizador que adoptou a #WIKINAME terá agora o estatuto de burocrata e administrador. Não se preocupe; manterá o seu estatuto de administrador nesta wiki e esperamos que regresse e continue a sua colaboração quando puder!

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-adoption-content-HTML' => 'Olá $1,<br /><br />
A #WIKINAME foi adoptada. As wikis ficam disponíveis para adopção que nenhum dos administradores está activo durante 30 ou mais dias.<br /><br />

O utilizador que adoptou a #WIKINAME terá agora o estatuto de burocrata e administrador. Não se preocupe; manterá o seu estatuto de administrador nesta wiki e esperamos que regresse e continue a sua colaboração quando puder!<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'tog-adoptionmails' => 'Notificar-me por correio electrónico se a $1 ficar disponível para adopção por outros utilizadores',
	'wikiadoption-pref-label' => 'Alterar estas preferências só afectará as mensagens por correio electrónico vindas da $1.',
	'wikiadoption-welcome-header' => 'Parabéns! Adoptou a {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'É agora burocrata nesta wiki. Com este novo estatuto tem agora acesso a todas as ferramentas que lhe permitem gerir a {{SITENAME}}.
<br /><br />
A coisa mais importante que pode fazer para ajudar a {{SITENAME}} a crescer é continuar a editá-la.
<br /><br />
Se não houver uma administração activa da wiki ela será disponibilizada para adopção, por isso verifique a wiki com frequência.
<br /><br />
Ferramentas Úteis:
<br /><br />
[[Special:ThemeDesigner|Compositor de Variantes do Tema]]
<br />
[[Special:LayoutBuilder|Criador de Designs de Páginas]]
<br />
[[Special:ListUsers|Lista de Utilizadores]]
<br />
[[Special:UserRights|Gerir Privilégios]]',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Aristóbulo
 */
$messages['pt-br'] = array(
	'wikiadoption' => 'Adoção automática de wikis',
	'wikiadoption-desc' => 'Uma extensão do MediaWiki para Adoção Automática de Wikis',
	'wikiadoption-header' => 'Adotar esta wiki',
	'wikiadoption-button-adopt' => 'Sim, quero adotar a {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Saiba mais!',
	'wikiadoption-description' => '$1, está preparado(a) para adotar a {{SITENAME}}?
<br /><br />
Há já algum tempo que a {{SITENAME}} não tem uma administração activa. Estamos à procura de uma nova liderança, para ajudar a aumentar o conteúdo da wiki e fazer crescer a comunidade de utilizadores! Como tem colaborado na {{SITENAME}}, queremos saber se gostaria de desempenhar o cargo.
<br /><br />
Ao adotar a wiki será promovido a administrador e burocrata para que tenha acesso às ferramentas necessárias para gerir a comunidade e o conteúdo da wiki. Poderá eleger outros administradores para ajudar, eliminar, desfazer edições, mover e proteger páginas.
<br /><br />
Está preparado(a) para dar os próximos passos e ajudar a {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Quer saber mais?',
	'wikiadoption-know-more-description' => 'Para mais informações visite estes links. E claro, contate-nos se tiver alguma pergunta!',
	'wikiadoption-adoption-successed' => 'Parabéns! Agora você é administrador desta wiki!',
	'wikiadoption-adoption-failed' => 'Infelizmente, tentámos torná-lo administrador desta wiki mas não funcionou. [http://community.wikia.com/Special:Contact Contacte-nos] e tentaremos ajudá-lo.',
	'wikiadoption-not-allowed' => 'Desculpe. Não pode adotar esta wiki agora.',
	'wikiadoption-not-enough-edits' => 'Precisa ter feito mais de 10 edições para adotar esta wiki.',
	'wikiadoption-adopted-recently' => 'Já adotou outra wiki recentemente. Você terá que esperar algum tempo até poder adotar mais uma wiki.',
	'wikiadoption-log-reason' => 'Adoção Automática de Wikis',
	'wikiadoption-notification' => 'A {{SITENAME}} está preparada para ser adotada. Tem interesse em tornar-se o(a) novo(a) líder? Adote esta wiki para começar!  $2',
	'wikiadoption-mail-first-subject' => 'Já não o vemos há algum tempo',
	'wikiadoption-mail-first-content' => 'Olá $1,

Há já duas semanas que nenhum administrador visita a #WIKINAME. Os administradores são uma parte integrante da #WIKINAME e é importante que tenham uma presença regular. Se não tiver administradores ativos durante um período extenso, esta wiki ficará disponível para adoção, para permitir que outro utilizador se torne administrador.

Se precisa de ajuda para cuidar da wiki, pode permitir que outros membros da comunidade também sejam administradores, visitando agora a página $2. Esperamos que regresse à #WIKINAME dentro de pouco tempo.

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-first-content-HTML' => 'Olá $1,<br /><br />

Há já duas semanas que nenhum administrador visita a #WIKINAME. Os administradores são uma parte integrante da #WIKINAME e é importante que tenham uma presença regular. Se não tiver administradores activos durante um período extenso, esta wiki ficará disponível para adoção, para permitir que outro utilizador se torne administrador.<br /><br />

Se precisa de ajuda para cuidar da wiki, pode permitir que outros membros da comunidade também sejam administradores, visitando agora a página de <a href="$2">gestão das Permissões dos Utilizadores</a>.. Esperamos que regresse à #WIKINAME dentro de pouco tempo.<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'wikiadoption-mail-second-subject' => 'A #WIKINAME será disponibilizada para adoção em breve',
	'wikiadoption-mail-second-content' => 'Olá $1,

Infelizmente, há quase um mês que nenhum administrador visita a #WIKINAME. É importante que existam administradores ativos a colaborar na wiki para que ela continue a funcionar bem.

Como já passaram tantos dias desde que um dos administradores apareceu, a #WIKINAME vai ser disponibilizada para adoção por outros utilizadores.

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-second-content-HTML' => 'Olá $1,<br /><br />
Infelizmente, há quase um mês que nenhum administrador visita a #WIKINAME. É importante que existam administradores ativos a colaborar na wiki para que ela continue a funcionar bem.<br /><br />

Como já passaram tantos dias desde que um dos administradores apareceu, a #WIKINAME vai ser disponibilizada para adoção por outros utilizadores.<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'wikiadoption-mail-adoption-subject' => 'A #WIKINAME foi adotada',
	'wikiadoption-mail-adoption-content' => 'Olá $1,

A #WIKINAME foi adotada. As wikis ficam disponíveis para adoção quando nenhum dos administradores está ativo durante 30 ou mais dias.

O utilizador que adotou a #WIKINAME terá agora o estatuto de burocrata e administrador. Não se preocupe; manterá o seu estatuto de administrador nesta wiki e esperamos que regresse e continue a sua colaboração quando puder!

A Equipa da Wikia

Para cancelar a subscrição de alterações a esta lista, clique o seguinte link: $3',
	'wikiadoption-mail-adoption-content-HTML' => 'Olá $1,<br /><br />
A #WIKINAME foi adotada. As wikis ficam disponíveis para adopção quando nenhum dos administradores está ativo durante 30 ou mais dias.<br /><br />

O utilizador que adotou a #WIKINAME terá agora o estatuto de burocrata e administrador. Não se preocupe; manterá o seu estatuto de administrador nesta wiki e esperamos que regresse e continue a sua colaboração quando puder!<br /><br />

A Equipa da Wikia<br /><br />

Pode <a href="$3">cancelar a subscrição</a> de alterações a esta lista.',
	'tog-adoptionmails' => 'Notificar-me por correio electrónico se a $1 ficar disponível para adoção por outros utilizadores',
	'wikiadoption-pref-label' => 'Alterar estas preferências só afetará as mensagens por correio electrónico vindas da $1.',
	'wikiadoption-welcome-header' => 'Parabéns! Adotou a {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'É agora burocrata nesta wiki. Com este novo estatuto tem agora acesso a todas as ferramentas que lhe permitem gerir a {{SITENAME}}.
<br /><br />
A coisa mais importante que pode fazer para ajudar a {{SITENAME}} a crescer é continuar a editá-la.
<br /><br />
Se não houver uma administração ativa da wiki ela será disponibilizada para adoção, por isso verifique a wiki com frequência.
<br /><br />
Ferramentas Úteis:
<br /><br />
[[Special:ThemeDesigner|Compositor de Temas Visuais]]
<br />
[[Special:LayoutBuilder|Criador de Designs de Páginas]]
<br />
[[Special:ListUsers|Lista de Utilizadores]]
<br />
[[Special:UserRights|Gerir Privilégios]]',
);

/** Romanian (Română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'wikiadoption-header' => 'Adoptă acest wiki',
	'wikiadoption-button-adopt' => 'Da, vreau să adopt {{SITENAME}}!',
	'wikiadoption-know-more-header' => 'Doriți să aflați mai multe?',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME a fost adoptat',
);

/** Russian (Русский)
 * @author Kuzura
 */
$messages['ru'] = array(
	'wikiadoption' => 'Автоматическое принятие вики',
	'wikiadoption-desc' => 'AutomaticWikiAdoption расширение для MediaWiki',
	'wikiadoption-header' => 'Принять эту вики',
	'wikiadoption-button-adopt' => 'Да, я хочу принять {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Узнать больше!',
	'wikiadoption-description' => '$1, Вы готовы принять {{SITENAME}}?
<br /><br />
На {{SITENAME}} не было активного администратора длительное вреся, и мы ищем нового лидера, чтобы помочь этой Вики и её сообществу вырасти! Как тот, кто способствовал развитию {{SITENAME}}, нам итересно, не хотели бы Вы остаться здесь?
<br /><br />
Приняв эту вики, вы будете повышены до статуса администратора и бюрократ и получите инструменты для управления сообществом вики и её содержимым. Вы также сможете давать другим участникам права администратора, чтобы помочь Вам удалять, откатывать правки, переименовывать и защищать страницы.
<br /><br />
Вы готовы предпринять следующие шаги, чтобы помочь {{SITENAME}}?',
	'wikiadoption-know-more-header' => 'Хотите узнать больше?',
	'wikiadoption-know-more-description' => 'Перейдите по этим ссылкам для получения дополнительной информации. И, конечно, не стесняйтесь обращаться к нам, если у вас есть вопросы!',
	'wikiadoption-adoption-successed' => 'Поздравляем! Теперь Вы администратор этой вики!',
	'wikiadoption-adoption-failed' => 'Приносим свои извинения. Мы старались сделать Вас администратором, однако ничего не вышло. Пожалуйста, [http://community.wikia.com/Special:Contact свяжитесь с нами], и мы постараемся Вам помочь.',
	'wikiadoption-not-allowed' => 'Приносим свои извинения. Вы не можете принять эту вики прямо сейчас.',
	'wikiadoption-not-enough-edits' => 'Вам нужно иметь более чем 10 правок, чтобы принять эту вики.',
	'wikiadoption-adopted-recently' => 'Вы уже приняли другую вики недавно. Вам необходимо подождать некоторое время прежде, чем Вы сможете принять новую вики.',
	'wikiadoption-log-reason' => 'Автоматическое принятие вики',
	'wikiadoption-notification' => '{{SITENAME}} выставляется на принятие. Интересно стать лидером здесь? Примите эту вики, чтобы начать! $2',
	'wikiadoption-mail-first-subject' => 'Мы ещё не видели твою работу здесь',
	'wikiadoption-mail-first-content' => 'Привет $1,

Уже пара недель прошло с тех пор, как мы видели Вас на #WIKINAME. Администраторы являются неотъемлемой частью #WIKINAME и очень важно, чтобы они регулярно присутствовали на вики. Если на вики активных администраторов длительное времен, данная вики может быть другому участнику и статус администратора перейдёт к нему.

Если вам нужна помощь, чтобы заботится о вики, вы можете дать права администратора другим участникам сообщества, перейдя в $2. Надеемся увидеть вас скоро на #WIKINAME!

Команда Викия.

Вы можете отписаться от рассылки в этом списке: $3',
	'wikiadoption-mail-second-subject' => '#WIKINAME скоро будет выставлена для принятия',
	'wikiadoption-mail-second-content' => 'Привет $1,

Ах нет! Прошло уже 30 дней с тех пор, как мы видели Вас на #WIKINAME. Администраторы являются неотъемлемой частью #WIKINAME и очень важно, чтобы они регулярно присутствовали на вики.

Так как прошло слишком много дней, а текущий администратор так и не появился, #WIKINAME будет предложено принять другому редактору.

Команда Викия.

Вы можете отписаться от рассылки в этом списке: $3',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME была принята',
	'wikiadoption-mail-adoption-content' => 'Привет, $1.

#WIKINAME была принята! Вики может быть отдана другому участнику, если ни один из текущих администраторов не будет проявлять активности в течение 30 дней и более.

Участник, который принял #WIKINAME, получил статус бюрократа и администратора. Не беспокойтесь, вы тоже сохраните свой статус администратора, и мы будем рады, если вы вернётесь и продолжите редактировать!

Команда Викия

Кликните по ссылке, чтобы отписаться от изменений в этом списке: $3.',
	'tog-adoptionmails' => 'Мой e-mail, если $1 станет доступной для принятия другим участникам',
	'wikiadoption-pref-label' => 'Изменение этих настроек влияет только на электронные письма от $1',
	'wikiadoption-welcome-header' => 'Поздравляем! Вы приняли {{SITENAME}}!',
	'wikiadoption-welcome-body' => 'инструментам, которые помогут вам управлять {{SITENAME}}.
<br /><br />
Самая важная вещь, которую вы можете сделать, чтобы помочь {{SITENAME}} расти - это продолжить редактирование.
<br /><br />
Если вы не будете активным администратором, то вики опять может быть выдвинута на принятие, поэтому не забывайте бывать на вики чаще.
<br /><br />
Полезные инструменты:
<br /><br />
[[Special:ThemeDesigner|ThemeDesigner]]
<br />
[[Special:LayoutBuilder|LayoutBuilder]]
<br />
[[Special:ListUsers|Список участников]]
<br />
[[Special:UserRights|Управление правами участников]]',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'wikiadoption' => 'Самоприсвајање викије',
	'wikiadoption-header' => 'Присвоји ову викију',
	'wikiadoption-button-adopt' => 'Присвоји одмах',
	'wikiadoption-know-more-header' => 'Желите да знате више?',
	'wikiadoption-adoption-successed' => 'Честитамо! Постали сте администратор ове викије!',
);

/** Swedish (Svenska)
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'wikiadoption' => 'Automatisk wiki-adoption',
	'wikiadoption-header' => 'Adoptera den här wikin',
	'wikiadoption-button-adopt' => 'Ja, jag vill adoptera {{SITENAME}}!',
	'wikiadoption-adopt-inquiry' => 'Lär dig mer!',
	'wikiadoption-know-more-header' => 'Vill du veta mer?',
	'wikiadoption-know-more-description' => 'Kolla dessa länkar för mer information. Och naturligtvis är du välkommen att kontakta oss om du har några frågor!',
	'wikiadoption-adoption-successed' => 'Grattis! Du är nu en administratör på denna wiki!',
	'wikiadoption-adoption-failed' => 'Vi ber om ursäkt. Vi försökte att göra dig till en administratör, men det fungerade inte. Vänligen [http://community.wikia.com/Special:Contact kontakta oss], så ska vi försöka hjälpa dig.',
	'wikiadoption-not-allowed' => 'Vi ber om ursäkt. Du kan inte adoptera denna wiki just nu.',
	'wikiadoption-not-enough-edits' => 'Hoppsan! Du måste ha mer än 10 redigeringar för att adoptera denna wiki.',
	'wikiadoption-adopted-recently' => 'Hoppsan! Du har redan adopterat en wiki nyligen. Du måste vänta ett tag innan du kan adoptera en ny wiki.',
	'wikiadoption-log-reason' => 'Automatisk Wiki-Adoption',
	'wikiadoption-notification' => '{{SITENAME}} är tillgänglig för adoption! Intressant att bli en ledare här? Adoptera denna wiki för att komma igång! $2',
	'wikiadoption-mail-first-subject' => 'Vi har inte sett dig på ett tag',
	'wikiadoption-mail-first-content-HTML' => 'Hej $1,<br /><br />
Det har varit ett par veckor sen vi såg en administratör på din wiki. Kom ihåg att din commynity kommer att titta till er för att se om wikin fungerar som den ska.<br /><br />
Om du behöver hjälp med att sköta din wiki, kan du tillåta andra medlemmar i din community att bli administratörer genom att gå till <a href="$2">Användarrättigheterna</a>.<br /><br />
<b>The Wikia Team</b><br /><br />
<small>Du kan <a href="$3">avbryta prenumerationen</a> från ändringar av denna lista.</small>',
	'wikiadoption-mail-second-subject' => '#WIKINAME kommer att sättas upp för adoption snart',
	'wikiadoption-mail-second-content' => 'Hej $1,

Åh nej! Det har gått nästan 30 dagar sedan det har var en aktiv administratör på #WIKINAME. Det är viktigt att administratörer regelbundet dyker upp och bidrar så wikin kan fortsätta att fungera utan problem.

Eftersom det är så många dagar sedan en nuvarande administratör varit där, kommer #WIKINAME nu erbjudas för adoption till andra redigerare.

Wikia-teamet

Du kan avbryta din prenumeration på ändringar för denna lista här: $3.',
	'wikiadoption-mail-second-content-HTML' => 'Hej $1,

Det var ett tag sen vi såg en administratör på din wiki. Det är viktigt att ha aktiva administratörer för din community så att din wiki kan fortsätta att fungera smidigt - så vi kommer att sätta upp din wiki för adoption snart för att ge den en chans att få aktiva administratörer igen.

<b>The Wikia Team</b>

<small>Du kan <a href="$3">avbryta prenumerationen</a> från ändringar på denna lista.</small>',
	'wikiadoption-mail-adoption-subject' => '#WIKINAME har adopterats',
	'wikiadoption-mail-adoption-content' => 'Hej $1,

Din wiki har adopterats! Detta innebär att någon annan har erbjudit sig att bidra till att upprätthålla din community och innehållet på webbplatsen. Oroa dig inte - du är fortfarande en administratör, och du är välkommen att komma tillbaka när som helst.

The Wikia Team

Klicka på följande länk för att avsluta prenumerationen på ändringar i denna lista: $3.',
	'wikiadoption-mail-adoption-content-HTML' => 'Hej $1,<br /><br />
Din wiki har adopterats! Detta innebär att någon annan har erbjudit sig att bidra till att upprätthålla din community och innehållet på webbplatsen. Oroa dig inte - du är fortfarande en administratör, och du är välkommen att komma tillbaka när som helst.<br /><br />
<b>The Wikia Team</b><br /><br />
<small>Du kan <a href="$3">avbryta prenumerationen</a> på ändringar i denna lista.</small>',
	'tog-adoptionmails' => 'Skicka ett e-post till mig om $1 kommer att bli tillgänglig för andra användare att adoptera',
	'wikiadoption-pref-label' => 'Att ändra dessa inställningar kommer bara påverkar e-post från $1.',
	'wikiadoption-welcome-header' => 'Gratulerar! Du har adopterat {{SITENAME}}!',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'wikiadoption-adopt-inquiry' => 'ఇంకా తెలుసుకోండి!',
	'wikiadoption-know-more-header' => 'మరింత తెలుసుకోవాలనుకుంటున్నారా?',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'wikiadoption-know-more-header' => 'Хочете знати більше?',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'wikiadoption' => '制动维基领养',
	'wikiadoption-header' => '领养这个维基',
	'wikiadoption-button-adopt' => '现在领养',
	'wikiadoption-know-more-header' => '想知道更多吗？',
	'wikiadoption-adoption-successed' => '恭喜！您现在是这个维基的管理员！',
	'wikiadoption-log-reason' => '制动维基领养',
	'wikiadoption-mail-first-subject' => '我们没有看到你在一段时间',
);

