<?php

$messages = array_merge( $messages, array(
'login_greeting' => 'Tervetuloa {{GRAMMAR:illative|{{SITENAME}}}}, [[User:$1|$1]]!',
'create_an_account' => 'Luo tunnus',
'login_as_another' => 'Kirjaudu sisään toisena käyttäjänä',
'not_you' => 'Eikö tämä ole tunnuksesi?',
'this_wiki' => 'Tämä wiki',
'home' => 'Etusivu',
'forum' => 'Foorumi',
'helpfaq' => 'Ohje ja UKK',
'createpage' => 'Luo uusi artikkeli',
'joinnow' => 'Liity nyt',
'most_popular_articles' => 'Kaikkein suosituimmat artikkelit',
'expert_tools' => 'experttien työkalut',
'this_article' => 'Tämä artikkeli',
'this_page' => 'Tämä sivu',
'edit_contribute' => 'Muokkaa / Lisää tietoa',
'discuss' => 'Keskustele',
'share_it' => 'Jaa:',
'my_stuff' => 'Omat jutut',
'choose_reason' => 'Valitse syy',
'top_five' => 'Viisi parhainta',
'most_popular' => 'Suosituimmat artikkelit',
'most_visited' => 'Käydyimmät',
'newly_changed' => 'Äskettäin muutetut',
'highest_ratings' => 'Korkeimmat arvosanat',
'most_emailed' => 'Eniten lähetetyt',
'rate_it' => 'Arvostele:',
'unrate_it' => 'Poista arvosteluni',
'use_old_formatting' => 'Vaihda Monobook-ulkoasuun',
'use_new_formatting' => 'Kokeile uutta ulkoasua',
'review_reason_1' => 'Arvostelun syy 1',
'review_reason_2' => 'Arvostelun syy 2',
'review_reason_3' => 'Arvostelun syy 3',
'review_reason_4' => 'Arvostelun syy 4',
'review_reason_5' => 'Arvostelun syy 5',
'preferences' => 'Asetukset',
'activeusers' => 'Aktiivisten käyttäjien lista',
'add_comment' => 'Jätä viesti',
'addresswarnings' => 'Ole hyvä ja ota huomioon kaikki varoitukset ennen kuin uudelleenlataat tiedostoja.',
'addtagsuccess' => 'Lisättiin tagi.',
'admin_skin' => 'Ylläpitäjän vaihtoehdot',
'adminskin_ds' => 'Oletus',
'ajaxLogin1' => 'Suorittaaksesi sisäänkirjautumisesi sinun tulee antaa uusi salasana. Tämä vie sinut pois tältä muokkaussivulta ja saatat menettää nykyisen muokkauksesi.',
'ajaxLogin2' => 'Oletko varma? Saatat menettää muokkauksesi jos lähdet tältä sivulta nyt.',
'all_the_wikia' => 'Kaikki wikiat',
'allwikis' => 'Kaikki Wikiat',
'antispam_label' => 'Tämä kenttä on spämmiansa. <strong>ÄLÄ</strong> täytä sitä!',
'back' => 'Takaisin',
'badsig' => 'Allekirjoitus ei kelpaa.',
'blockiptext' => 'Tällä lomakkeella voit estää käyttäjän tai IP-osoitteen muokkausoikeudet. Muokkausoikeuksien poistamiseen pitää olla syy, esimerkiksi sivujen vandalisointi. Kirjoita syy siihen varattuun kenttään.<br />Vanhenemisajat noudattavat GNUn standardimuotoa, esimerkiksi ”1 hour”, ”2 days”, ”next Wednesday”, 2005-08-29”. Esto voi olla myös ”indefinite” tai ”infinite”, joka kestää kunnes se poistetaan.',
'canteditneedloginmessage' => 'Et voi muokata tätä sivua. Se voi johtua siitä, että sinun täytyy kirjautua sisään antaaksesi kuville tageja. Haluatko kirjautua sisään nyt?',
'canteditothermessage' => 'Et voi muokata tätä sivua, joko koska sinulla ei ole oikeuksia tai koska sivu on lukittu muista syistä. Saadaksesi lisätietoa, katso http://fi.wikia.com/wiki/Suojaaminen',
'captcha-blank' => 'Jos koitat poistaa tätä sivua, ole hyvä ja ota yhteys [[Special:Listusers/sysop|ylläpitäjään]]. Sivun tyhjentäminen ei poista sitä. Vahvistaaksesi, että haluat tyhjentää sivun, ole hyvä ja kirjoita sanat, jotka näkyvät kuvassa. Tämä on tehokeinona tyhjentämisbotteja vastaan.<br /> ([[Special:Captcha/help|lisää tietoa]])',
'captcha-createaccount-fail' => 'Kelvoton tai puuttuva vahvistuskoodi.',
'captcha-createaccount' => 'Tehokeinona automatisoitua spämmiä vastaan sinun tulee kirjoittaa kuvassa näkyvät sanat rekisteröidäksesi tunnuksen:<br />
([[Special:Captcha/help|Mikä tämä on?]])',
'captcha-edit' => 'Muokkauksesi sisältää uusia ulkoisia linkkejä. Tehokeinona automatisoitua spämmiä vastaan sinun tulee kirjoittaa tässä kuvassa näkyvät sanat.<br /> ([[Special:Captcha/help|lisää tietoa]])',
'captcha-move' => 'Tehokeinona vandalismia vastaan sinun tulee kirjoittaa tässä kuvassa näkyvät sanat siirtääksesi sivun.<br /> ([[Special:Captcha/help|lisää tietoa]])',
'captcha-short' => 'Muokkauksesi sisältää uusia URL-linkkejä; tehokeinona automatisoitua spämmiä vastaan sinun tulee kirjoittaa tässä kuvassa näkyvät sanat:<br />
([[Special:Captcha/help|Mikä tämä on?]])',
'captchahelp-text' => 'Nettisivut, jotka sallivat yleisön viestit, kuten tämä wiki, ovat usein spämmääjien eli roskapostittajien väärinkäytön kohteena, sillä he käyttävät automatisoituja työkaluja lisätäkseen sivujensa linkkejä monille sivuille. Vaikkakin kyseiset spämmilinkit voidaan poistaa, ne ovat huomattava häiriö.

Joskus, varsinkin kun lisäät uusia ulkoisia linkkejä sivulle, wiki saattaa näyttää sinulle kuvan väritetystä tai väännetystä tekstistä ja pyytää sinua kirjoittamaan kuvassa näkyvät sanat. Koska tämä on tehtävä jota on hankala automatisoida, se mahdollistaa useimpien oikeiden ihmisten tehdä muokkauksensa samalla pysäyttäen suurimman osan spämmääjistä ja muista robottihyökkääjistä.

Valitettavasti tämä saatta häiritä näkörajoitteisia käyttäjiä tai käyttäjiä, jotka käyttävät tekstipohjaisia tai puhepohjaisia selaimia. Tällä hetkellä meillä ei ole kuultavaa vaihtoehtoa saatavilla. Ole hyvä ja ota yhteyttä sivuston ylläpitäjiin avun saamiseksi mikäli tämä yllättäen estää sinua tekemästä hyviä muokkauksia.

Paina selaimesi \'takaisin\'-nappia palataksesi sivunmuokkaustilaan.',
'captchahelp-title' => 'Captcha-ohjesivu',
'cockpit_hide' => 'Piilota ohjaamo',
'common.css' => '/***** Tämä sivu sisältää koko sivustoa muuttavia tyylejä. *****/
/* Katso myös: [[MediaWiki:Monobook.css]] */
/* <pre> */

/* Merkitse uudelleenohjaukset sivuilla Toiminnot:Kaikki sivut ja Toiminnot:Tarkkailulista */
.allpagesredirect { font-style: italic; }
.watchlistredir { font-style: italic; }

/* Tietolaatikkomallineiden tyylit */
.infobox {
   border: 1px solid #aaaaaa;
   background-color: #f9f9f9;
   color: black;
   margin-bottom: 0.5em;
   margin-left: 1em;
   padding: 0.2em;
   float: right;
   clear: right;
}
.infobox td,
.infobox th {
   vertical-align: top;
}
.infobox caption {
   font-size: larger;
   margin-left: inherit;
}
.infobox.bordered {
   border-collapse: collapse;
}
.infobox.bordered td,
.infobox.bordered th {
   border: 1px solid #aaaaaa;
}
.infobox.bordered .borderless td,
.infobox.bordered .borderless th {
   border: 0;
}

/* Foorumien tyylit (tekijät -Algorithm & -Splaka) */
.forumheader {
     border: 1px solid #aaa;
     background-color: #f9f9f9; margin-top: 1em; padding: 12px;
}
.forumlist td.forum_edited a {
     color: black; text-decoration: none
}
.forumlist td.forum_title a {
     padding-left: 20px;
}
.forumlist td.forum_title a.forum_new {
     font-weight: bold; background: url(/images/4/4e/Forum_new.gif)
     center left no-repeat; padding-left: 20px;
}
.forumlist td.forum_title a.forum_new:visited {
     font-weight: normal; background: none; padding-left: 20px;
}
.forumlist th.forum_title {
     padding-left: 20px;
}

/* Värit tuoreet muutokset-listalla */
.mw-plusminus-pos { color: #006500; }
.mw-plusminus-neg { color: #8B0000; }
/* </pre> */',
'community' => 'Yhteisö',
'contact' => 'Ota yhteyttä Wikiaan',
'contactintro' => '<p>Ole hyvä ja lue <a href="http://www.wikia.com/wiki/Report_a_problem">raportoi ongelmasta</a>-sivu löytääksesi tietoa miten ilmoittaa ongelmasta ja miten käyttää tätä yhteydenottolomaketta.</p>

<p>Voit ottaa yhteyttä Wikian yhteisöön <a href="http://fi.wikia.com/wiki/Foorumi:Sis%C3%A4llysluettelo">Keskuswikian foorumilla</a> ja ilmoittaa ohjelmistobugeista <a href="http://inside.wikia.com/forum">Inside-wikian foorumilla</a>.</p>

<p>Jos haluat viestisi <a href="http://fi.wikia.com/wiki/Wikia">Wikialle</a> olevan mieluummin olevan yksityinen, ole hyvä ja käytä allaolevaa yhteydenottolomaketta. <i>Kaikki kentät ovat vapaaehtoisia</i>.</p>

<p>Tämä lomake toimii tällä hetkellä hitaasti, mutta paina <i>lähetä</i>-painiketta <b>vain kerran</b>.</p>',
'contactmail' => 'Lähetä',
'contactpagetitle' => 'Ota yhteyttä Wikiaan',
'contactproblem' => 'Aihe',
'contactproblemdesc' => 'Viesti',
'contactrealname' => 'Nimesi',
'contactsubmitcomplete' => 'Kiitos yhteydenotostasi Wikiaan.',
'contactwikiname' => 'Wikin nimi',
'contris' => 'Muokkaukset',
'contris_s' => 'Muokkaukset',
'createarticle' => 'Luo sivu',
'createpage_alternate_creation' => 'tai paina $1 käyttääksesi alkuperäistä editoria',
'createpage_button' => 'Luo uusi artikkeli',
'createpage_button_caption' => 'Luo artikkeli',
'createpage_caption' => 'otsikko',
'createpage_categories' => 'Luokat:',
'createpage_categories_help' => 'Luokat auttavat järjestämään tietoa tässä wikissä. Alapuolella on lista suosituista luokista tässä wikissä. Mitä isompi sana, sitä suositumpi luokka on. Klikkaa luokkia, jotka haluat lisätä ja ne ilmestyvät laatikkoon alapuolella.',
'createpage_enter_text' => 'Kirjoita tekstiä tähän:',
'createpage_here' => 'tästä',
'createpage_hide_cloud' => '[piilota luokkapilvi]',
'createpage_loading_mesg' => 'Ladataan... ole hyvä ja odota...',
'createpage_show_cloud' => '[näytä luokkapilvi]',
'createpage_title' => 'Luo uusi artikkeli',
'createpage_title_caption' => 'Otsikko:',
'custom_info' => 'Itsetehtyjä teemoja voi rakentaa valitsemalla "Custom" ylhäältä ja sitten muokkaamalla',
'defaultskin1' => 'Tämän wikin ylläpitäjät ovat valinneet: <b>{{GRAMMAR:genitive|$1}}</b> oletusulkoasuksi.',
'defaultskin2' => 'Tämän wikin ylläpitäjät ovat valinneet: <b>{{GRAMMAR:genitive|$1}}</b> oletusulkoasuksi. Klikkaa <a href="$2">tästä</a> nähdäksesi koodin.',
'defaultskin3' => 'Tämän wikin ylläpitäjät eivät ole valinneet oletusulkoasua. Käytetään Wikian oletusta: <b>$1</b>.',
'defaultskin_choose' => 'Aseta tämän wikin oletusteema:',
'deletedcontributions' => 'Käyttäjän poistetut muokkaukset',
'dynamicpagelistsp' => 'Dynaaminen sivulista',
'edit-summary' => 'Yhteenveto',
'edit_this_page' => '<a href="$1">Muokkaa tätä artikkelia</a>',
'editcount' => 'Muokkauslaskuri',
'editcount_submit' => 'Lähetä',
'editcount_total' => 'Yhteensä',
'editcount_username' => 'Käyttäjä:',
'footer_1.5' => 'muokkaamalla tätä sivua',
'footer_1' => 'Paranna Wikiaa',
'footer_2' => 'Keskustele tästä artikkelista',
'footer_5' => '$1 teki muokkauksen $2',
'footer_6' => 'Katso sattumanvarainen sivu',
'footer_7' => 'Lähetä tämä artikkeli sähköpostitse',
'footer_8' => 'Jaa tämä artikkeli',
'footer_9' => 'Arvostele tämä artikkeli',
'footer_About_Wikia' => '[http://fi.wikia.com/wiki/Tietoja_Wikiasta Tietoja Wikiasta]',
'footer_Advertise_on_Wikia' => '[http://www.wikia.com/wiki/Advertising Mainosta Wikiassa]',
'footer_Contact_Wikia' => '[http://fi.wikia.com/wiki/Ota_yhteytt%C3%A4 Ota yhteyttä Wikiaan]',
'footer_Terms_of_use' => '[http://fi.wikia.com/wiki/K%C3%A4ytt%C3%B6ehdot Käyttöehdot]',
'forum-url' => 'Foorumi:Sisällysluettelo',
'forum_never' => 'Ei koskaan',
'forum_toofew' => 'DPL Forum: Liian vähän luokkia!',
'forum_toomany' => 'DPL Forum: Liian monta luokkaa!',
'giverollback-change' => 'Muuta tilaa:',
'giverollback-comment' => 'Kommentti:',
'giverollback-grant' => 'Anna',
'giverollback-granted' => 'Käyttäjällä [[Käyttäjä:$1|$1]] on nyt palautusoikeudet.',
'giverollback-hasrb' => 'Käyttäjällä [[Käyttäjä:$1|$1]] on palautusoikeudet.',
'giverollback-header' => '\'\'\'Paikallinen byrokraatti voi käyttää tätä sivua antaakseen tai poistaakseen palautusoikeudet toiselta käyttäjältä.\'\'\'<br />Tätä voidaan käyttää niin, että ei-ylläpitäjät voivat nopeasti palauttaa vandalismia. Tämä tulisi tehdä soveltuvien käytäntöjen mukaisesti.',
'giverollback-logentrygrant' => 'antoi palautusoikeudet käyttäjälle [[$1]]',
'giverollback-logentryrevoke' => 'poisti palautusoikeudet käyttäjältä [[$1]]',
'giverollback-logpage' => 'Palautusoikeusloki',
'giverollback-logpagetext' => 'Tämä on loki muutoksista ei-ylläpitäjien palautusoikeuksiin.',
'giverollback-norb' => 'Käyttäjällä [[Käyttäjä:$1|$1]] ei ole palautusoikeuksia.',
'giverollback-revoke' => 'Poista',
'giverollback-revoked' => 'Käyttäjällä [[Käyttäjä:$1|$1]] ei enää ole palautusoikeuksia.',
'giverollback-search' => 'Hae',
'giverollback-sysop' => 'Käyttäjä [[Käyttäjä:$1|$1]] on ylläpitäjä ja täten hänellä on jo palautusoikeudet.',
'giverollback-toonew' => 'Käyttäjä [[Käyttäjä:$1|$1]] on liian uusi, ja täten hänelle ei voida antaa palautusoikeuksia.',
'giverollback-username' => 'Käyttäjänimi:',
'giverollback' => 'Anna tai poista palautusoikeudet',
'group-helper-member' => 'Apulainen',
'group-helper' => 'Apulaiset',
'group-janitor' => 'Siivoojat',
'grouppage-janitor' => 'w:c:fi:Siivoojien käytännöt ja ohjeet',
'grouppage-staff' => 'w:c:fi:Wikian henkilökunta',
'grouproup-janitor-member' => 'Siivooja',
'helppage' => '{{ns:help}}:Sisällysluettelo',
'hidesome' => 'Piilota joitakin',
'hubs' => 'Hubit',
'ignoreallwarnings' => 'Ohita <b>kaikki varoitukset</b> ja tallenna tiedostot kaikesta huolimatta.',
'imagemap_description' => 'Tietoja tästä kuvasta',
'imagemap_invalid_coord' => '&lt;imagemap&gt;: kelvoton koordinaatti rivillä $1, täytyy olla numero',
'imagemap_unrecognised_shape' => '&lt;imagemap&gt;: tunnistamaton muoto rivillä $1, jokaisen rivin täytyy alkaa yhdellä seuraavista: default, rect, circle tai poly',
'imagereverted' => 'Palautus aiempaan versioon onnistui. <strong>Tällä muutoksella voi kestää jopa 2 minuuttia näkyä.</strong>',
'importfreeimages' => 'Tuo vapaita kuvia',
'importfreeimages_description' => 'Tämän sivun kautta pystyt etsimään asianomaisesti lisensoituja kuvia Flickr:sta ja tuomaan niitä wikiisi.',
'importfreeimages_filefromflickr' => '$1 käyttäjän <b>[$2]</b> toimesta Flickr:sta. Alkuperäinen URL',
'importfreeimages_importthis' => 'tuo tämä',
'importfreeimages_next' => 'Seuraavat $1',
'importfreeimages_nophotosfound' => 'Mitkään valokuvat eivät täsmänneet hakukriteeriisi \'$1\', ole hyvä ja koita uudestaan.',
'importfreeimages_owner' => 'Tekijä',
'importfreeimages_promptuserforfilename' => 'Ole hyvä ja anna kohdenimi:',
'importfreeimages_returntoform' => 'Tai klikkaa <a href=\'$1\'>tästä</a> palataksesi hakusi tuloksiin',
'insertimage' => 'Sisällytä kuva',
'insertimagelink' => 'Sisällytä kuva',
'invitespecialpage' => 'Kutsu ystävä',
'irc' => 'Reaaliaikaista wikiapua',
'its_easy' => '...se on helppoa ja ilmaista',
'last_downloaded' => 'Viimeeksi ladattu',
'leftalign-tooltip' => 'Tasaus vasemmalle',
'length' => 'pituus: $1',
'linksearch-ns' => 'Nimiavaruus:',
'linksearch-ok' => 'Hae',
'linksearch-pat' => 'Hakukaava:',
'makebureaucratok' => '<b>Käyttäjä "$1" on nyt byrokraatti</b>',
'manage_widgets' => 'Hallinnoi vekottimia',
'messagebar_mess' => 'Tiesitkö, että voit <a href="$1">muokata tätä sivua</a> tai <a href="$2">luoda uuden</a>? <a href="$3">Ota selvää</a> miten tämä toimii.',
'metadata-help' => 'Tämä tiedosto sisältää esimerkiksi kuvanlukijan, digikameran tai kuvankäsittelyohjelman lisäämiä lisätietoja. Kaikki tiedot eivät enää välttämättä vastaa todellisuutta, jos kuvaa on muokattu sen alkuperäisen luonnin jälkeen.',
'miniupload' => 'Lataa tiedosto (yksinkertaistettu)',
'mu_login' => 'Sinun pitää olla kirjautunut sisään ladataksesi tiedostoja.',
'multiplefileuploadsummary' => 'Yhteenveto:',
'multipleupload' => 'Lataa tiedostoja',
'multiuploadtext' => 'Lataa useampia tiedostoja täällä. <br/><br/> Valitse \'selaa\' ja valitse jokainen tiedosto, jonka haluat ladata. Voit ladata yhdestä viiteen tiedostoa kerrallaan. <br/><br/> Voit antaa vapaaehtoisen <b>kohdetiedostonimen</b> ja antaa <b>yhteenvedon</b>, joka kuvailee kuvaasi. <br/><br/> <br/> Sopimattomat kuvat poistetaan välittömästi; katso [[Project:Kuvien poistokäytäntö|kuvien poistokäytäntö]]<br/><br/>',
'mwlink_tip' => 'Sisäinen linkki',
'needhelp' => 'Tarvitsevat apua: Ole hyvä ja muokkaa [[MediaWiki:Needhelp|tätä sivua]] näyttääksesi artikkeleita tässä.',
'new_article' => 'Uusi artikkeli',
'new_wiki' => 'Uusi wiki',
'nocontributors' => 'Tällä sivulla ei ole muokkaajia',
'nontabbedsearch' => 'Välilehdetön haku',
'nontabbedsearchold' => 'Välilehdetön haku (käytä vanhaa otsikko/tekstiosuma -näkymää)',
'noresults' => 'Ei tuloksia. Voit: * \'\'\'[[Special:CreatePage|luoda tämän sivun]]\'\'\' * Katsoa kaikki tämän wikin sivut, jotka [[Special:Whatlinkshere/$1|linkittävät tälle sivulle]].',
'old_skins' => 'Vanhat ulkoasut',
'oneactionatatimemessage' => 'Pahoittelut, vain yksi tagitoiminto kerrallaan. Ole hyvä ja odota kunnes olemassaoleva toiminto suoritetaan.',
'oneuniquetagmessage' => 'Pahoittelut, tällä kuvalla on jo tämänniminen tagi.',
'or' => 'tai',
'or_learn' => 'Tai oppiaksesi lisää, ota',
'other_people' => 'Muut ihmiset ovat hakeneet seuraavia...',
'popular-articles' => 'Suositut artikkelit',
'popular-wikis' => 'Suositut wikit',
'pr_describe_problem' => 'Ole hyvä ja kuvaile ongelmaa tässä. Voit käyttää wikitekstiä muttet ulkoisia linkkejä.',
'pr_email_visible_only_to_staff' => 'näkyy vain henkilökunnalle',
'pr_empty_summary' => 'Ole hyvä ja anna lyhyt kuvaus ongelmasta',
'pr_introductory_text' => 'Useimmat tämän wikin sivut ovat muokattavissa, ja olet tervetullut muokkaamaan niitä ja korjaamaan virheitä itse! Jos tarvitset apua, katso [[Ohje:Muokkaaminen|kuinka muokataan]] ja [[Ohje:Palauttaminen|kuinka vandalismia kumotaan]].

Ottaaksesi yhteyttä henkilökuntaan tai raportoidaksesi tekijänoikeusongelmista, katso [[w:c:fi:Ota yhteyttä|Wikian "ota yhteyttä" -sivu]].

Ohjelmistobugeista voi raportoida foorumeilla. Tämän lomakkeen kautta tehdyt raportit [[Special:ProblemReports|näkyvät wikissä]].',
'pr_no_reports' => 'Mitkään raportit eivät täsmää kriteereihisi',
'pr_raports_from_this_wikia' => 'Katso raportit vain tästä Wikiasta',
'pr_remove_ask' => 'Poista raportti pysyvästi?',
'pr_reports_from' => 'Raportit vain',
'pr_spam_found' => 'Raportin yhteenvedosta löytyi spämmiä. Ole hyvä ja vaihda yhteenvedon sisältöä',
'pr_status_0' => 'odottaa',
'pr_status_1' => 'korjattu',
'pr_status_10' => 'poista raportti',
'pr_status_2' => 'ei ole ongelma',
'pr_status_3' => 'tarvitsee henkilökunnan apua',
'pr_status_ask' => 'Vaihda raportin statusta?',
'pr_status_undo' => 'Kumoa raportin statuksen muutos',
'pr_status_wait' => 'odota...',
'pr_table_actions' => 'Toiminnot',
'pr_table_comments' => 'Kommentit',
'pr_table_date_submitted' => 'Päivä, jolloin jätetty',
'pr_table_description' => 'Kuvaus',
'pr_table_page_link' => 'Sivu',
'pr_table_problem_id' => 'Ongelman ID',
'pr_table_problem_type' => 'Ongelman tyyppi',
'pr_table_reporter_name' => 'Raportoijan nimi',
'pr_table_wiki_name' => 'Wikin nimi',
'pr_thank_you' => 'Kiitos ongelman raportoimisesta',
'pr_thank_you_error' => 'Virhe tapahtui, kun ongelmaraporttia lähetettiin, koita myöhemmin uudestaan...',
'pr_total_number' => 'Raporttien yhteismäärä',
'pr_view_all' => 'Näytä kaikki raportit',
'pr_view_archive' => 'Katso arkistoidut ongelmat',
'pr_view_staff' => 'Näytä raportit, jotka tarvitsevat henkilökunnan apua',
'pr_what_page' => 'Millä sivulla ongelma on?',
'pr_what_problem' => 'Mitä ongelmaa ilmoitat?',
'pr_what_problem_incorrect_content' => 'tämä sisältö on virheellistä',
'pr_what_problem_incorrect_content_short' => 'virheellinen sisältö',
'pr_what_problem_other' => 'muu',
'pr_what_problem_other_short' => 'muu',
'pr_what_problem_software_bug' => 'ohjelmistossa on bugi',
'pr_what_problem_software_bug_short' => 'ohjelmistobugi',
'pr_what_problem_spam' => 'täällä on spämmilinkki',
'pr_what_problem_spam_short' => 'spämmiä',
'pr_what_problem_vandalised' => 'tätä sivua on vandalisoitu',
'pr_what_problem_vandalised_short' => 'vandalisoitu sivu',
'preferences_s' => 'Asetukset',
'prlog_changedentry' => 'merkkasi ongelmalle $1 tilan "$2"',
'prlog_removedentry' => 'poisti ongelman $1',
'prlog_reportedentry' => 'raportoi ongelman sivussa $1 ($2)',
'prlogheader' => 'Lista raportoiduista ongelmista ja muutoksista niiden statuksiin',
'prlogtext' => 'Ongelmaraportit',
'problemreports' => 'Ongelmaraporttien lista',
'profile' => 'Profiili',
'recentchanges_combined' => 'Tuoreet muutokset (yhdistetyt)',
'refreshpage' => 'Lataa sivu uudestaan aktivoidaksesi tämän vekottimen',
'related_wiki' => 'Lisää asteriskein linkkejä tähän näyttääksesi aiheeseen liittyviä wikejä [[Special:Widgets|samankaltaiset wikit-vekottimessa]].

* [{{FULLURL:MediaWiki:Related wiki}} Aiheeseen liittyviä wikejä ei ole valittu.]',
'removetag' => 'poista tagi',
'removetagsuccess' => 'Poistettiin tagi.',
'removingtag' => 'poistetaan tagia...',
'reportproblem' => 'Raportoi ongelmasta',
'reportproblemtext' => 'Useimmat tämän wikin sivut ovat muokattavissa, ja olet tervetullut muokkaamaan niitä ja korjaamaan virheitä itse! Jos tarvitset apua, katso [[w:c:fi:Ohje:Johdatuskurssi 2|kuinka muokataan]] ja [[w:c:fi:Ohje:Palauttaminen|kuinka vandalismia kumotaan]]. Ottaaksesi yhteyttä henkilökuntaan tai raportoidaksesi tekijänoikeusongelmista, katso [[w:c:fi:Ota yhteyttä|Wikian "ota yhteyttä" -sivu]]. Ohjelmistobugeista voi raportoida foorumeilla. Tämän lomakkeen kautta tehdyt raportit [[Special:ProblemReports|näkyvät wikissä]].',
'resultsof' => 'Tulokset $1 - $2 $3:sta',
'return_to_article' => 'Palaa artikkeliin',
'return_to_category' => 'Palaa luokkasivulle',
'return_to_category_talk' => 'Palaa keskusteluun',
'return_to_forum' => 'Palaa foorumisivulle',
'return_to_forum_talk' => 'Palaa keskusteluun',
'return_to_help' => 'Palaa ohjesivulle',
'return_to_help_talk' => 'Palaa keskusteluun',
'return_to_image' => 'Palaa kuvan kuvaussivulle',
'return_to_image_talk' => 'Palaa keskusteluun',
'return_to_mediawiki' => 'Palaa järjestelmäviestin sivulle',
'return_to_mediawiki_talk' => 'Palaa keskusteluun',
'return_to_project' => 'Palaa projektisivulle',
'return_to_project_talk' => 'Palaa keskusteluun',
'return_to_special' => 'Palaa toimintosivulle',
'return_to_talk' => 'Palaa keskusteluun',
'return_to_template' => 'Palaa mallineen sivulle',
'return_to_template_talk' => 'Palaa keskusteluun',
'return_to_user' => 'Palaa käyttäjäsivulle',
'return_to_user_talk' => 'Palaa keskusteluun',
'right_now' => 'Juuri nyt<br />ihmiset ovat...',
'rightalign-tooltip' => 'Tasaus oikealle',
'save' => 'Tallenna',
'saveallfiles' => 'Tallenna kaikki tiedostot',
'searchbutton' => 'Hae',
'searcherror' => '<br />Pahoittelut! Hakusi aikana tapahtui virhe. Ole hyvä ja tarkista hakusi.',
'searchsuggest' => 'Ehdottava haku',
'searchtype' => 'Haun tyyppi',
'see_more' => 'Katso lisää...',
'send' => 'Lähetä',
'serp_position' => 'Avainsanan sijoitus',
'serp_weight' => 'prosenttia kaikista%',
'showall' => 'Näytä kaikki',
'spamregex_summary' => 'Teksti löydettiin artikkelin yhteenvedosta.',
'tabbedsearchcse' => 'Välilehdellinen haku (Googlen kustomoitu haku)',
'tabbedsearchsolr' => 'Välilehdellinen haku',
'talkpagetext' => '<div style="margin: 0 0 1em; padding: .5em 1em; vertical-align: middle; border: solid #999 1px;">\'\'\'Tämä on keskustelusivu. Muistathan allekirjoittaa kaikki viestisi käyttämällä neljää tildeä (<code><nowiki>~~~~</nowiki></code>).\'\'\'</div>',
'theweb' => 'Internet',
'this_category' => 'Tämä luokka',
'this_discussion' => 'Tämä keskustelu',
'this_forum' => 'Tämä foorumi',
'this_help' => 'Tämä ohje',
'this_image' => 'Tämä kuva',
'this_message' => 'Tämä viesti',
'this_project' => 'Tämä projektisivu',
'this_special' => 'Tämä toimintosivu',
'this_template' => 'Tämä malline',
'this_user' => 'Tämä käyttäjä',
'thiswiki' => 'Tämä wiki',
'thumbnailsize' => 'Pienoiskuvan koko',
'tog-htmlemails' => 'Sähköpostit HTML-muotoisina',
'tog-searchsuggest' => 'Näytä ehdotukset hakulaatikossa',
'tog-skinoverwrite' => '<b>Näe kustomoidut wikit</b> (suositus)<br>Joidenkin wikien ylläpitäjät käyttävät paljon aikaa wikiensä ulkonäön kustomointiin. Rastita ylläoleva ruutu nähdäksesi wikit täydessä kustomoinnissaan.',
'upload' => 'Lisää tiedosto',
'users' => 'Käyttäjät',
'watchlist_s' => 'Tarkkailulista',
'wf_city_created' => 'Luotu',
'wf_city_lang' => 'Kieli',
'wf_city_title' => 'Otsikko',
'wf_city_url' => 'Osoite',
'wg_lastwikis' => 'Äskettäin käydyt',
'whats_new' => 'Mitä uutta',
'widget_description' => 'Kuvaus',
'widget_name' => 'Nimi',
'widgets' => 'Vekottimien lista',
'wikia_messages' => 'Wikian viestit',
'wikiastats_active_absent_wikians' => 'Aktiiviset / poissaolevat wikialaiset, järjestetty muokkausten lukumäärän perusteella',
'wikiastats_active_month' => 'kuukausi',
'wikiastats_active_months' => 'kuukaudet',
'wikiastats_active_wikians_subtitle' => 'sijoitus: vain artikkelimuokkaukset lasketaan, ei siis keskustelusivujen yms. muokkauksia',
'wikiastats_active_wikians_subtitle_info' => 'Δ = sijoituksen muutos 30 päivän aikana',
'wikiastats_anon_wikians' => 'Anonyymit käyttäjät, järjestetty muokkausten lukumäärän perusteella',
'wikiastats_anon_wikians_count' => '$1 anonyymiä käyttäjää löydetty',
'wikiastats_archived' => 'Arkistoidut',
'wikicitieshome-url' => 'http://fi.wikia.com/',
'wikicitieshome' => 'Wikian kotisivu',
'wikipedia_skin' => 'Wikipedian ulkoasu',
'wt_click_to_close' => 'Klikkaa sulkeaksesi työkaluvinkin...',
'wt_countdown_give_date' => 'Ole hyvä ja anna päiväys muodossa VVVV-KK-PP HH:MM:SS (kuten 2007-03-28 13:56:00) tai VVVV-KK-PP (kuten 2007-02-17) tai HH:MM:SS (kuten 17:01:00)',
'wt_countdown_show_seconds' => 'Näytä sekuntit',
'wt_help_cockpit' => '|Vekottimien ohjaamo||Raahaa vekottimien pikkukuvakkeita ja pudota ne sivupalkkiin lisätäksesi vekottimen...',
'wt_help_sidebar' => '|Vekottimien sivupalkki||Klikkaa "muokkaa" vaihtaaksesi vekottimien asetuksia. Voit sulkea vekottimia x-ikonin avulla',
'wt_help_startup' => '|Eivätkö vekottimet ole tuttuja sinulle?||Avaa käyttäjävalikko ja klikkaa "Hallinnoi vekottimia"...',
'wt_shoutbox_initial_message' => 'Hei... tervetuloa chattiin!',
'wysiwygcaption' => 'Visuaalinen muokkaaminen',
'yourmail' => 'Sähköpostiosoitteesi',
'editingTips' => '=Kuinka muotoilla tekstiä=
Voit muotoilla tekstiä \'wikikielellä\' tai HTML:n avulla.

<br />
<span style="font-family: courier"><nowiki>\'\'kursivoitu\'\'</nowiki></span> => \'\'kursivoitu\'\'

<br />
<span style="font-family: courier"><nowiki>\'\'\'lihavoitu\'\'\'</nowiki></span> => \'\'\'lihavoitu\'\'\'

<br />
<span style="font-family: courier"><nowiki>\'\'\'\'\'kursivoitu ja lihavoitu\'\'\'\'\'</nowiki></span> => \'\'\'\'\'kursivoitu ja lihavoitu\'\'\'\'\'

----

<br />
<nowiki><s>yliviivattu</s></nowiki> => <s>yliviivattu</s>

<br />
<nowiki><u>alleviivattu</u></nowiki> => <u>alleviivattu</u>

<br />
<nowiki><span style="color:red;">punaista tekstiä</span></nowiki> => <span style="color:red;">punaista tekstiä</span>

=Kuinka tehdä linkkejä=
Linkkejä luodaan yhden tai kahden hakasulkuparin avulla.

<br />
\'\'\'Yksinkertainen sisäinen linkki:\'\'\'<br />
<nowiki>[[Artikkelin nimi]]</nowiki>

<br />
\'\'\'Sisäinen linkki linkkitekstin kera:\'\'\'<br />
<nowiki>[[Artikkelin nimi|teksti, jonka haluat]]</nowiki>

<br />
----

<br />
\'\'\'Numeroitu ulkoinen linkki:\'\'\'<br />
<nowiki>[http://www.esimerkki.com]</nowiki>

<br />
\'\'\'Ulkoinen linkki linkkitekstin kera:\'\'\'

<nowiki>[http://www.esimerkki.com linkin teksti]</nowiki>

=Kuinka lisätä otsikoita=
Otsikot käyttävät yhtäsuuruusmerkkejä.  Mitä enemmän "="-merkkejä, sitä pienempi otsikko.
Tason 1 otsikko on varattu sivun otsikolle.

<br />
<span style="font-size: 1.6em"><nowiki>==Otsikko 2==</nowiki></span>

<br />
<span style="font-size: 1.3em"><nowiki>===Otsikko 3===</nowiki></span>

<br />
<nowiki>====Otsikko 4====</nowiki>

=Kuinka sisentää tekstiä=
Sisennykset voivat olla yksinkertaisia, asteriskein varustettuja tai numeroituja.

<br />
<nowiki>: sisennys</nowiki><br />
<nowiki>: sisennys</nowiki><br />
<nowiki>:: lisää sisennystä</nowiki><br />
<nowiki>::: vieläkin enemmän sisennystä</nowiki>

<br />
<nowiki>* asteriski</nowiki><br />
<nowiki>* asteriski</nowiki><br />
<nowiki>** ala-asteriski</nowiki><br />
<nowiki>* asteriski</nowiki>

<br />
<nowiki># numeroitu lista</nowiki><br />
<nowiki># numeroitu lista</nowiki><br />
<nowiki>## ala-lista</nowiki><br />
<nowiki># numeroitu lista</nowiki>

=Kuinka lisätä kuvia=
Kuvia lisätään ja muotoillaan samaan tapaan kuin linkkejäkin.

<br />
<nowiki>[[Kuva:Nimi.jpg]]</nowiki>

<br />
\'\'\'Lisätäksesi kuvatekstiä\'\'\'<br />
<nowiki>[[Kuva:Nimi.jpg|kuvateksti]]</nowiki>

<br />
\'\'\'Tehdäksesi pienoiskuvan\'\'\'<br />
<nowiki>[[Kuva:Nimi.jpg|thumb|]]</nowiki>

<br />
\'\'\'Määritelläksesi kuvan koon\'\'\'<br />
<nowiki>[[Kuva:Nimi.jpg|200px|]]</nowiki>

<br />
\'\'\'Sijoitellaksesi kuvan\'\'\'<br />
<nowiki>[[Kuva:Nimi.jpg|right|]]</nowiki>

<br />
Voit yhdistää näitä määritteitä lisäämällä pystyviivan "|" niiden väliin. Muista, että kaikki viimeisen pystyviivan jälkeen on tekstiä.',
) );
