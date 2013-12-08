<?php
/**
 * Interface messages for RTRC.
 *
 * @toolowner krinkle
 */

$url = 'https://github.com/Krinkle/mw-gadget-rtrc';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'Real-Time Recent Changes',
	'apply' => 'Apply',
	'asc' => 'Asc',
	'changelog' => 'What\'s New',
	'clear' => 'clear',
	'currentedit' => 'Currently selected edit',
	'cvn-adder' => 'Adder',
	'cvn-adder-empty' => 'Unknown',
	'cvn-reason' => 'Reason',
	'cvn-reason-empty' => 'No reason found',
	'desc' => 'Desc',
	'documentation' => 'Documentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Learn more about this feature',
	'lastupdate-cvn' => 'Last update: $1',
	'lastupdate-rc' => 'Last update: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol has been disabled as it requires a user filter and none was set.',
	'months' => 'January, February, March, April, May, June, July, August, September, October, November, December',
	'mypatrollog' => 'my patrol log',
	'namespace' => 'Namespace',
	'navtoggle-tooltip' => 'Toggle the sidebar',
	'nomatches' => 'No relevant changes for your settings',
	'order' => 'Order',
	'permalink' => 'Permalink to current settings',
	'select-placeholder-none' => '(none)',
	'showAnonOnly' => 'Anonymous only',
	'showUnpatrolledOnly' => 'Unpatrolled only',
	'skippededit' => 'Skipped edit',
	'tag' => 'Tag',
	'time-from' => 'From',
	'time-untill' => 'Until',
	'timeframe' => 'Timeframe',
	'type' => 'Type',
	'typeEdit' => 'Edits',
	'typeNew' => 'New pages',
	'userfilter' => 'User filter',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'apply' => 'Button to apply the settings.
{{Identical|Apply}}',
	'asc' => 'Label of the radio button that sets sort order to ascending.

See also:
* {{msg-toolserver|Rtrc-desc}}',
	'changelog' => 'Label of link to the page about RTRC software updates.',
	'clear' => 'Button to clear (or reset) a particular input field.
{{Identical|Clear}}',
	'currentedit' => 'Example text in the legend to show what a currently selected edit looks like',
	'cvn-adder' => 'Label of the user that added this item to the CVN database',
	'cvn-adder-empty' => 'Placeholder text for when the author is unknown.

See also:
* {{msg-intuition|rtrc-cvn-adder}}
{{Identical|Unknown}}',
	'cvn-reason' => 'Label of the comment left by the user who added this item to the CVN database.
{{Identical|Reason}}',
	'cvn-reason-empty' => 'Placeholder text when no reason was found

See also:
* {{msg-intuition|rtrc-cvn-reason}}',
	'desc' => 'Label of the radio button that sets the sort order to descending.

See also:
* {{msg-toolserver|Rtrc-asc}}',
	'documentation' => 'Label of the link to the documentation page.
{{Identical|Documentation}}',
	'filter' => 'Section label for various change filters.

See also:
* {{msg-intuition|rtrc-showAnonOnly}}
* {{msg-intuition|rtrc-showUnpatrolledOnly}}
{{Identical|Filter}}',
	'helpicon-tooltip' => 'Tooltip for the Help questionmark icon.',
	'lastupdate-cvn' => 'Foot note showing when the CVN database was last updated. Parameters:
* $1 - timestamp
{{Identical|Last update}}',
	'lastupdate-rc' => 'Foot note showing when the list of changes was last refreshed from the server. Parameters:
* $1 - timestamp
{{Identical|Last update}}',
	'limit' => 'Label of dropdown menu for changing how many results to show (maximum).
{{Identical|Limit}}',
	'masspatrol-requires-userfilter' => 'Informing the user that MassPatrol has been disabled when the user clears the user filter (or when there was no user filter to begin with)',
	'months' => 'Comma-separated list of the 12 different months in a year',
	'mypatrollog' => 'Label of the link to your patrol log',
	'namespace' => 'Label of dropdown menu for filtering by namespace.
{{Identical|Namespace}}',
	'navtoggle-tooltip' => 'Tooltip for the icon that toggles the MediaWiki sidebar',
	'nomatches' => 'Placeholder text in place of the changes list when the query returned no results',
	'order' => 'Section label for the sort order radio buttons.
{{Identical|Order}}',
	'permalink' => 'Label of the permalink that will start RTRC with the current settings',
	'select-placeholder-none' => 'Placeholder in a dropdown menu representing the blank option.
{{Identical|None}}',
	'showAnonOnly' => 'Label of the checkbox to only show changes by anonymous users.
{{Identical|Anon only}}',
	'showUnpatrolledOnly' => 'Label of the checkbox to only show unpatrolled changes',
	'skippededit' => 'Example text in the legend to show what a skipped edit looks like',
	'tag' => 'Label of the dropdown menu for filtering by change tag.
{{Identical|Tag}}',
	'time-from' => 'Label of input field containing the start date of the time range filter.
{{Identical|From}}',
	'time-untill' => 'Label of input field containing the end date of the time range filter',
	'timeframe' => 'Label of time range filter',
	'type' => 'Section label for the change type checkboxes.
{{Identical|Type}}',
	'typeEdit' => 'Label of the checkbox to include changes that edit existing pages.

See also:
* {{msg-intuition|Rtrc-typeNew}}
{{Identical|Edit}}',
	'typeNew' => 'Label of the checkbox to include changes that create new pages.

See also:
* {{msg-intuition|Rtrc-typeEdit}}
{{Identical|New page}}',
	'userfilter' => 'Label of username filter',
);

/** Arabic (العربية)
 * @author Claw eg
 */
$messages['ar'] = array(
	'select-placeholder-none' => '(لا شيء)',
	'tag' => 'وسم',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'Cambios recientes en tiempu real',
	'apply' => 'Aplicar',
	'asc' => 'Asc',
	'changelog' => 'Novedaes',
	'clear' => 'llimpiar',
	'currentedit' => 'Edición seleicionada anguaño',
	'cvn-adder' => 'Amestáu por',
	'cvn-adder-empty' => 'Desconocíu',
	'cvn-reason' => 'Motivu',
	'cvn-reason-empty' => "Nun s'alcontró un motivu",
	'desc' => 'Desc',
	'documentation' => 'Documentación',
	'filter' => 'Peñera',
	'helpicon-tooltip' => 'Calque equí pa más información',
	'lastupdate-cvn' => 'Caberu anovamientu: $1',
	'lastupdate-rc' => 'Caberu anovamientu: $1',
	'limit' => 'Llímite',
	'masspatrol-requires-userfilter' => "Desactivóse MassPatrol porque necesita una peñera d'usuariu y nun se configuró denguna.",
	'months' => 'xineru, febreru, marzu, abril, mayu, xunu, xunetu, agostu, setiembre, ochobre, payares, avientu',
	'mypatrollog' => 'el mio rexistru de supervisión',
	'namespace' => 'Espaciu de nomes',
	'navtoggle-tooltip' => 'Conmutar la barra llateral',
	'nomatches' => 'Nun hai cambios cola so configuración',
	'order' => 'Orde',
	'permalink' => 'Enllaz permanente a la configuración actual',
	'select-placeholder-none' => '(nengún)',
	'showAnonOnly' => 'Namái anónimos',
	'showUnpatrolledOnly' => 'Namái ensin supervisar',
	'skippededit' => 'Edición saltada',
	'tag' => 'Etiqueta',
	'time-from' => 'Dende',
	'time-untill' => 'Fasta',
	'timeframe' => 'Rangu temporal',
	'type' => 'Triba',
	'typeEdit' => 'Ediciones',
	'typeNew' => 'Páxines nueves',
	'userfilter' => "Peñera d'usuariu",
);

/** Azerbaijani (azərbaycanca)
 * @author Khan27
 */
$messages['az'] = array(
	'apply' => 'Tətbiq et',
	'clear' => 'təmizlə',
	'cvn-adder-empty' => 'Naməlum',
	'limit' => 'Limit',
	'months' => 'Yanvar, Fevral, Mart, Aprel, May, İyun, İyul, Avqust, Sentyabr, Oktyabr, Noyabr, Dekabr',
	'typeEdit' => 'Redaktələr',
	'typeNew' => 'Yeni səhifələr',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'cvn-reason' => 'Причина',
	'documentation' => 'Документация',
	'namespace' => 'Именно пространство',
	'time-from' => 'От',
	'typeEdit' => 'Редакции',
	'typeNew' => 'Нови страници',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'apply' => 'Lakaat da dalvezout',
	'changelog' => 'Petra nevez',
	'clear' => 'riñsañ',
	'cvn-adder-empty' => 'Dianav',
	'cvn-reason' => 'Abeg',
	'cvn-reason-empty' => "N'eus bet kavet abeg ebet",
	'documentation' => 'Teuliadur',
	'filter' => 'Sil',
	'helpicon-tooltip' => "Klikañ amañ evit kaout muioc'h a ditouroù", # Fuzzy
	'lastupdate-cvn' => 'Hizivadenn ziwezhañ : $1',
	'lastupdate-rc' => 'Hizivadenn ziwezhañ : $1',
	'limit' => 'Bevenn',
	'months' => "Genver, C'hwevrer, Meurzh, Ebrel, Mae, Mezheven, Gouere, Eost, Gwengolo, Here, Du, Kerzu",
	'namespace' => 'Esaouenn anv',
	'order' => 'Urzh',
	'select-placeholder-none' => '(hini ebet)',
	'showAnonOnly' => 'Dizanv hepken',
	'time-from' => 'Eus',
	'time-untill' => 'Betek',
	'type' => 'Seurt',
	'typeEdit' => 'Kemmoù',
	'typeNew' => 'Pajennoù nevez',
	'userfilter' => 'Sil implijer',
);

/** Danish (dansk)
 * @author Christian List
 * @author Overlaet
 */
$messages['da'] = array(
	'title' => 'Seneste ændringer i realtid',
	'apply' => 'Anvend',
	'asc' => 'Stig',
	'changelog' => 'Hvad er nyt',
	'clear' => 'ryd',
	'currentedit' => 'Aktuelt valgt redigering',
	'cvn-adder' => 'Bruger',
	'cvn-adder-empty' => 'Ukendt',
	'cvn-reason' => 'Årsag',
	'cvn-reason-empty' => 'Ingen årsag fundet',
	'desc' => 'Fald',
	'documentation' => 'Dokumentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Lær mere om denne funktion',
	'lastupdate-cvn' => 'Sidst opdateret: $1',
	'lastupdate-rc' => 'Sidst opdateret: $1',
	'limit' => 'Grænse',
	'masspatrol-requires-userfilter' => 'MassPatrol er blevet deaktiveret, fordi den kræver et brugerfilter og ingen blev sat.',
	'months' => 'januar, februar, marts, april, maj, juni, juli, august, september, oktober, november, december',
	'mypatrollog' => 'min patruljeringslog',
	'namespace' => 'Navnerum',
	'navtoggle-tooltip' => 'Vis/gem venstremenuen',
	'nomatches' => 'Ingen relevante ændringer for dine indstillinger',
	'order' => 'Rækkefølge',
	'permalink' => 'Permanent link til de aktuelle indstillinger',
	'select-placeholder-none' => '(ingen)',
	'showAnonOnly' => 'Kun anonyme',
	'showUnpatrolledOnly' => 'Kun upatruljeret',
	'skippededit' => 'Oversprunget redigering',
	'time-from' => 'Fra',
	'time-untill' => 'Indtil',
	'timeframe' => 'Tidsramme',
	'type' => 'Type',
	'typeEdit' => 'Redigeringer',
	'typeNew' => 'Nye sider',
	'userfilter' => 'Brugerfilter',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'title' => 'Letzte Änderungen (Echtzeit)',
	'apply' => 'Anwenden',
	'asc' => 'Aufst.',
	'changelog' => 'Was ist neu?',
	'clear' => 'löschen',
	'currentedit' => 'Aktuell ausgewählte Bearbeitung',
	'cvn-adder' => 'Benutzer',
	'cvn-adder-empty' => 'Unbekannt',
	'cvn-reason' => 'Begründung',
	'cvn-reason-empty' => 'Keine Begründung gefunden',
	'desc' => 'Abst.',
	'documentation' => 'Dokumentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Mehr über diese Funktion erfahren',
	'lastupdate-cvn' => 'Letzte Aktualisierung: $1',
	'lastupdate-rc' => 'Letzte Aktualisierung: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol wurde deaktiviert, da es einen Benutzerfilter benötigt und kein Filter festgelegt wurde.',
	'months' => 'Januar, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember',
	'mypatrollog' => 'Mein Kontroll-Logbuch',
	'namespace' => 'Namensraum',
	'navtoggle-tooltip' => 'Seitenleiste feststellen',
	'nomatches' => 'Es sind keine relevanten Änderungen für deine Einstellungen vorhanden',
	'order' => 'Reihenfolge',
	'permalink' => 'Permanentlink auf die aktuellen Einstellungen',
	'select-placeholder-none' => '(keine)',
	'showAnonOnly' => 'Nur anonyme',
	'showUnpatrolledOnly' => 'Nur unkontrollierte',
	'skippededit' => 'Übersprungene Bearbeitung',
	'tag' => 'Markierung',
	'time-from' => 'Von',
	'time-untill' => 'Bis',
	'timeframe' => 'Zeitrahmen',
	'type' => 'Typ',
	'typeEdit' => 'Bearbeitungen',
	'typeNew' => 'Neue Seiten',
	'userfilter' => 'Benutzerfilter',
);

/** Zazaki (Zazaki)
 * @author Gorizon
 */
$messages['diq'] = array(
	'apply' => 'Dezge',
	'changelog' => 'Çıçi newe yo',
	'clear' => 'pak ke',
	'currentedit' => 'Hesıbyaye timar weçineya',
	'cvn-adder' => 'Dekeroğ',
	'cvn-adder-empty' => 'Nêzanayen',
	'cvn-reason' => 'Sebeb',
	'cvn-reason-empty' => 'Sebeb nivineya',
	'documentation' => 'Dokumentasyon',
	'filter' => 'Avréc',
	'limit' => 'Limit',
	'order' => 'Pepeyin',
	'tag' => 'Etiket',
	'time-from' => 'Kêra',
	'type' => 'Babet',
	'typeEdit' => 'Timari',
	'typeNew' => 'Perré newey',
	'userfilter' => 'Filtreya karberi',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title' => 'Nejnowše změny (napšawdnu cas)',
	'apply' => 'Nałožyś',
	'asc' => 'Stup.',
	'changelog' => 'Co jo nowe?',
	'clear' => 'wuprozniś',
	'currentedit' => 'Tuchylu wubrana změna',
	'cvn-adder' => 'Wužywaŕ',
	'cvn-adder-empty' => 'Njeznaty',
	'cvn-reason' => 'Pśicyna',
	'cvn-reason-empty' => 'Źedna pśicyna namakana',
	'desc' => 'Wóst.',
	'documentation' => 'Dokumentacija',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Wěcej wó toś tej funkciji zgóniś',
	'lastupdate-cvn' => 'Slědna aktualizacija: $1',
	'lastupdate-rc' => 'Slědna aktualizacija: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol jo se znjemóžnił a trjeba wužywarski filter a žeden njejo se nastajił.',
	'months' => 'januar, februar, měrc, apryl, maj, junij, julij, awgust, september, oktober, nowember, december',
	'mypatrollog' => 'mój protokol doglědowanja',
	'namespace' => 'Mjenjowy rum',
	'navtoggle-tooltip' => 'Bócnicu pśešaltowaś',
	'nomatches' => 'Žedne relewantne změny za twóje nastajenja',
	'order' => 'Pórěd',
	'permalink' => 'Trajny wótkaz k aktualnym nastajenjam',
	'select-placeholder-none' => '(žeden)',
	'showAnonOnly' => 'Jano anonymne',
	'showUnpatrolledOnly' => 'Jano njedoglědowane',
	'skippededit' => 'Pśeskócona změna',
	'tag' => 'Toflicka',
	'time-from' => 'Wót',
	'time-untill' => 'Až do',
	'timeframe' => 'Casowy wobłuk',
	'type' => 'Typ',
	'typeEdit' => 'Změny',
	'typeNew' => 'Nowe boki',
	'userfilter' => 'Wužywarski filter',
);

/** Greek (Ελληνικά)
 * @author Astralnet
 * @author Evropi
 */
$messages['el'] = array(
	'apply' => 'Εφαρμογή',
	'tag' => 'Ετικέτα',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Krinkle
 * @author McDutchie
 * @author VegaDark
 */
$messages['es'] = array(
	'title' => 'Cambios Recientes en tiempo real',
	'apply' => 'Aplicar',
	'asc' => 'ASC',
	'changelog' => 'Qué hay de nuevo',
	'clear' => 'Limpiar',
	'currentedit' => 'Edición seleccionada actualmente',
	'cvn-adder' => 'Agregado',
	'cvn-adder-empty' => 'Desconocido',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'No se encontró un motivo',
	'desc' => 'Desc',
	'documentation' => 'Documentación',
	'filter' => 'Filtro',
	'helpicon-tooltip' => 'Más información sobre esta función',
	'lastupdate-cvn' => 'Última actualización: $1',
	'lastupdate-rc' => 'Última actualización: $1',
	'limit' => 'Límite',
	'masspatrol-requires-userfilter' => 'MassPatrol ha sido deshabilitado porque requiere un filtro de usuario y ninguno fue creado.',
	'months' => 'Enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre',
	'mypatrollog' => 'mi registro de patrulla',
	'namespace' => 'Espacio de nombre',
	'navtoggle-tooltip' => 'Alternar la barra lateral',
	'nomatches' => 'No hay cambios relevantes para tu configuración',
	'order' => 'Orden',
	'permalink' => 'Enlace permanente a la configuración actual',
	'select-placeholder-none' => '(ninguno)',
	'showAnonOnly' => 'sólo anónimos',
	'showUnpatrolledOnly' => 'Sin patrullar',
	'skippededit' => 'Edición omitida',
	'tag' => 'Etiqueta',
	'time-from' => 'De',
	'time-untill' => 'Hasta',
	'timeframe' => 'Calendario',
	'type' => 'Tipo',
	'typeEdit' => 'Ediciones',
	'typeNew' => 'Páginas nuevas',
	'userfilter' => 'Filtro de usuario',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'cvn-reason' => 'Syy',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'title' => 'Modifications récentes en temps réel',
	'apply' => 'Appliquer',
	'asc' => 'Croissant',
	'changelog' => 'Quoi de neuf',
	'clear' => 'effacer',
	'currentedit' => 'Modification actuellement sélectionnée',
	'cvn-adder' => 'Responsable de l’ajout',
	'cvn-adder-empty' => 'Inconnu',
	'cvn-reason' => 'Motif',
	'cvn-reason-empty' => 'Aucun motif trouvé',
	'desc' => 'Décroissant',
	'documentation' => 'Documentation',
	'filter' => 'Filtre',
	'helpicon-tooltip' => 'Cliquer ici pour plus d’information',
	'lastupdate-cvn' => 'Dernière mise à jour : $1',
	'lastupdate-rc' => 'Dernière mise à jour : $1',
	'limit' => 'Limite',
	'masspatrol-requires-userfilter' => 'MassPatrol a été désactivé car il nécessite un filtre utilisateur et aucun n’a été défini.',
	'months' => 'Janvier, Février, Mars, Avril, Mai, Juin, Juillet, Août, Septembre, Octobre, Novembre, Décembre',
	'mypatrollog' => 'mon journal de patrouille',
	'namespace' => 'Espace de nommage',
	'navtoggle-tooltip' => 'Basculer l’affichage de la barre latérale',
	'nomatches' => 'Aucune modification pertinente de vos paramètres',
	'order' => 'Ordre',
	'permalink' => 'Lien permanent vers les paramètres actuels',
	'select-placeholder-none' => '(aucun)',
	'showAnonOnly' => 'Anonymes uniquement',
	'showUnpatrolledOnly' => 'Non patrouillés uniquement',
	'skippededit' => 'Modification sautée',
	'tag' => 'Balise',
	'time-from' => 'De',
	'time-untill' => 'Jusqu’à',
	'timeframe' => 'Période',
	'type' => 'Type',
	'typeEdit' => 'Modifications',
	'typeNew' => 'Nouvelles pages',
	'userfilter' => 'Filtre utilisateur',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Cambios recentes en tempo real',
	'apply' => 'Aplicar',
	'asc' => 'Ascendente',
	'changelog' => 'Novidades',
	'clear' => 'limpar',
	'currentedit' => 'Edición seleccionada actualmente',
	'cvn-adder' => 'Responsable da adición',
	'cvn-adder-empty' => 'Descoñecido',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Non se atopou ningún motivo',
	'desc' => 'Descendente',
	'documentation' => 'Documentación',
	'filter' => 'Filtro',
	'helpicon-tooltip' => 'Máis información sobre esta característica',
	'lastupdate-cvn' => 'Última actualización: $1',
	'lastupdate-rc' => 'Última actualización: $1',
	'limit' => 'Límite',
	'masspatrol-requires-userfilter' => 'MassPatrol foi desactivado, dado que necesita un filtro de usuario e non hai ningún filtro definido.',
	'months' => 'xaneiro, febreiro, marzo, abril, maio, xuño, xullo, agosto, setembro, outubro, novembro, decembro',
	'mypatrollog' => 'o meu rexistro de patrullas',
	'namespace' => 'Espazo de nomes',
	'navtoggle-tooltip' => 'Activar ou desactivar a barra lateral',
	'nomatches' => 'Non se produciron cambios relevantes segundo a súa configuración',
	'order' => 'Orde',
	'permalink' => 'Ligazón permanente á configuración actual',
	'select-placeholder-none' => '(ningún)',
	'showAnonOnly' => 'Anónimos unicamente',
	'showUnpatrolledOnly' => 'Sen patrullar unicamente',
	'skippededit' => 'Edición saltada',
	'tag' => 'Etiqueta',
	'time-from' => 'De',
	'time-untill' => 'Ata',
	'timeframe' => 'Período',
	'type' => 'Tipo',
	'typeEdit' => 'Edicións',
	'typeNew' => 'Páxinas novas',
	'userfilter' => 'Filtro de usuario',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'apply' => 'લાગુ પાડો',
	'clear' => 'સાફ કરો',
	'cvn-adder-empty' => 'અજ્ઞાત',
	'cvn-reason' => 'કારણ',
	'lastupdate-cvn' => 'છેલ્લે સુધારેલ: $1',
	'limit' => 'મર્યાદા',
	'months' => 'જાન્યુઆરી, ફેબ્રુઆરી, માર્ચ, એપ્રિલ, મે, જુન, જુલાઇ, ઓગસ્ટ, સપ્ટેમ્બર, ઓક્ટોબર, નવેમ્બર, ડિસેમ્બર',
	'mypatrollog' => 'મારા ચકાસણી લૉગ',
	'order' => 'ક્રમ',
	'showAnonOnly' => 'માત્ર અજ્ઞાત',
	'typeEdit' => 'સંપાદનો',
	'typeNew' => 'નવાં પાનાં',
);

/** Hebrew (עברית)
 * @author תומר ט
 */
$messages['he'] = array(
	'showAnonOnly' => 'משתמשים אנונימיים בלבד',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title' => 'Najnowše změny (woprawdźity čas)',
	'apply' => 'Nałožić',
	'asc' => 'Post.',
	'changelog' => 'Što je nowe?',
	'clear' => 'wuprózdnić',
	'currentedit' => 'Tuchwilu wubrana změna',
	'cvn-adder' => 'Wužiwar',
	'cvn-adder-empty' => 'Njeznaty',
	'cvn-reason' => 'Přičina',
	'cvn-reason-empty' => 'Žana přičina namakana',
	'desc' => 'Tačałka',
	'documentation' => 'Dokumentacija',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Wjace wo tutej funkciji zhonić',
	'lastupdate-cvn' => 'Poslednja aktualizacija: $1',
	'lastupdate-rc' => 'Poslednja aktualizacija: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol je so znjemóžnił a trjeba wužiwarski filter a žadyn njeje so nastajił.',
	'months' => 'januar, februar, měrc, apryl, meja, junij, julij, awgust, september, oktober, nowember, december',
	'mypatrollog' => 'mój protokol dohladowanja',
	'namespace' => 'Mjenowy rum',
	'navtoggle-tooltip' => 'Bóčnicu přešaltować',
	'nomatches' => 'Žane relewantne změny za twoje nastajenja',
	'order' => 'Porjad',
	'permalink' => 'Trajny wotkaz k aktualnym nastajenjam',
	'select-placeholder-none' => '(žadyn)',
	'showAnonOnly' => 'Jenož anonymne',
	'showUnpatrolledOnly' => 'Jenož njedohladowane',
	'skippededit' => 'Přeskočena změna',
	'tag' => 'Značka',
	'time-from' => 'Wot',
	'time-untill' => 'Hač do',
	'timeframe' => 'Časowy wobłuk',
	'type' => 'Typ',
	'typeEdit' => 'Změny',
	'typeNew' => 'Nowe strony',
	'userfilter' => 'Wužiwarski filter',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'Modificationes recente in tempore real',
	'apply' => 'Applicar',
	'asc' => 'Asc.',
	'changelog' => 'Novitates',
	'clear' => 'Rader',
	'currentedit' => 'Modification actualmente seligite',
	'cvn-adder' => 'Additor',
	'cvn-adder-empty' => 'Incognite',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Nulle motivo trovate',
	'desc' => 'Desc.',
	'documentation' => 'Documentation',
	'filter' => 'Filtro',
	'helpicon-tooltip' => 'Lege plus a proposito de iste function',
	'lastupdate-cvn' => 'Ultime actualisation: $1',
	'lastupdate-rc' => 'Ultime actualisation: $1',
	'limit' => 'Limite',
	'masspatrol-requires-userfilter' => 'MassPatrol ha essite disactivate perque illo require un filtro de usator e necun ha essite definite.',
	'months' => 'januario, februario, martio, april, maio, junio, julio, augusto, septembre, octobre, novembre, decembre',
	'mypatrollog' => 'mi registro de patrulia',
	'namespace' => 'Spatio de nomines',
	'navtoggle-tooltip' => 'Alternar le barra lateral',
	'nomatches' => 'Nulle modification pertinente a tu parametros',
	'order' => 'Ordine',
	'permalink' => 'Ligamine permanente al parametros actual',
	'select-placeholder-none' => '(nulle)',
	'showAnonOnly' => 'Anonymos solmente',
	'showUnpatrolledOnly' => 'Non patruliates solmente',
	'skippededit' => 'Modification saltate',
	'tag' => 'Etiquetta',
	'time-from' => 'De',
	'time-untill' => 'Usque a',
	'timeframe' => 'Periodo',
	'type' => 'Typo',
	'typeEdit' => 'Modificationes',
	'typeNew' => 'Nove paginas',
	'userfilter' => 'Filtro de usator',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'apply' => 'Applica',
	'changelog' => "Cosa c'è di nuovo",
	'clear' => 'pulisci',
	'cvn-adder-empty' => 'Sconosciuto',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Nessun motivo trovato',
	'documentation' => 'Documentazione',
	'filter' => 'Filtra',
	'helpicon-tooltip' => 'Clicca qui per maggiori informazioni',
	'lastupdate-cvn' => 'Ultimo aggiornamento: $1',
	'lastupdate-rc' => 'Ultimo aggiornamento: $1',
	'limit' => 'Limite',
	'months' => 'gennaio, febbraio, marzo, aprile, maggio, giugno, luglio, agosto, settembre, ottobre, novembre, dicembre',
	'namespace' => 'Namespace',
	'order' => 'Ordina',
	'permalink' => 'Link permanente alle impostazioni attuali',
	'showAnonOnly' => 'Solo anonimi',
	'showUnpatrolledOnly' => 'Solo non verificate',
	'skippededit' => 'Modifica saltata',
	'time-from' => 'Da',
	'time-untill' => 'Fino a',
	'timeframe' => 'Finestra temporale',
	'type' => 'Tipo',
	'typeEdit' => 'Modifiche',
	'typeNew' => 'Nuove pagine',
	'userfilter' => 'Filtra utente',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'Real-Time Recent Changes',
	'apply' => '適用',
	'asc' => '昇順',
	'changelog' => '新着情報',
	'clear' => '消去',
	'currentedit' => '現在選択している編集',
	'cvn-adder' => '追加者',
	'cvn-adder-empty' => '不明',
	'cvn-reason' => '理由',
	'cvn-reason-empty' => '理由がありません',
	'desc' => '降順',
	'documentation' => '説明書',
	'filter' => '絞り込み',
	'helpicon-tooltip' => 'この機能の詳細情報',
	'lastupdate-cvn' => '最終更新: $1',
	'lastupdate-rc' => '最終更新: $1',
	'limit' => '表示数',
	'masspatrol-requires-userfilter' => 'MassPatrol に必要な利用者フィルターを設定していないため、無効にしました。',
	'months' => '1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月',
	'mypatrollog' => '自分の巡回記録',
	'namespace' => '名前空間',
	'navtoggle-tooltip' => 'サイドバーを表示/非表示',
	'nomatches' => '設定内容に一致する変更はありません',
	'order' => '並び順',
	'permalink' => '現在の設定への固定リンク',
	'select-placeholder-none' => '(なし)',
	'showAnonOnly' => '匿名利用者のみ',
	'showUnpatrolledOnly' => '未巡回のみ',
	'skippededit' => 'スキップした編集',
	'tag' => 'タグ',
	'time-from' => '始点',
	'time-untill' => '終点',
	'timeframe' => '時間指定',
	'type' => '種類',
	'typeEdit' => '編集',
	'typeNew' => '新規ページ',
	'userfilter' => '利用者フィルター',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'title' => 'Нақты уақыттағы жуықтағы өзгерістер',
	'apply' => 'Қолдану',
	'asc' => 'Артуы',
	'clear' => 'Тазарту',
	'currentedit' => 'Таңдалған өңдеме',
	'cvn-adder' => 'Қосушы',
	'cvn-adder-empty' => 'Белгісіз',
	'cvn-reason' => 'Себебі',
	'cvn-reason-empty' => 'Себебі табылмады',
	'desc' => 'Кему',
	'documentation' => 'Құжаттамасы',
	'filter' => 'Сүзгі',
	'helpicon-tooltip' => 'Бұл мүмкіндік туралы көбірек білу',
	'lastupdate-cvn' => 'Соңғы жаңартылуы: $1',
	'lastupdate-rc' => 'Соңғы жаңартылуы: $1',
	'limit' => 'Шектеуі',
	'months' => 'Қаңтар, Ақпан, Наурыз, Сәуір, Мамыр, Маусым, Шілде, Тамыз, Қыркүйек, Қазан, Қараша, Желтоқсан',
	'mypatrollog' => 'Қадағалау журналым',
	'namespace' => 'Есім кеңістігі',
	'nomatches' => 'Сіздің талабыңыз бойынша өзгерістер жоқ',
	'order' => 'Рет',
	'select-placeholder-none' => '(ештеңе)',
	'showAnonOnly' => 'Тек анонимдер',
	'showUnpatrolledOnly' => 'Тек тексерілмегендер',
	'skippededit' => 'Жасырылған өңдеме',
	'tag' => 'Тег',
	'time-from' => 'Бастап',
	'time-untill' => 'Дейін',
	'timeframe' => 'Уақыт аралығы',
	'type' => 'Түрі',
	'typeEdit' => 'Өңдемелер',
	'typeNew' => 'Жаңа беттер',
	'userfilter' => 'Қатысушы сүзгісі',
);

/** Korean (한국어)
 * @author Hym411
 * @author 아라
 */
$messages['ko'] = array(
	'title' => '실시간 최근 바뀜',
	'apply' => '적용',
	'asc' => '오름차순',
	'changelog' => '새로운 소식',
	'clear' => '비우기',
	'currentedit' => '현재 선택된 편집',
	'cvn-adder' => '추가한 사람',
	'cvn-adder-empty' => '알 수 없음',
	'cvn-reason' => '이유',
	'cvn-reason-empty' => '이유를 찾을 수 없음',
	'desc' => '내림차순',
	'documentation' => '설명',
	'filter' => '필터',
	'helpicon-tooltip' => '이 기능에 대해 더 알아보기',
	'lastupdate-cvn' => '마지막 업데이트: $1',
	'lastupdate-rc' => '마지막 업데이트: $1',
	'limit' => '제한',
	'masspatrol-requires-userfilter' => 'MassPatrol은 사용자 필터가 필요하지만 제공되지 않아 해제되었습니다.',
	'months' => '1월,2월,3월,4월,5월,6월,7월,8월,9월,10월,11월,12월',
	'mypatrollog' => '나의 검토 기록',
	'namespace' => '이름공간',
	'navtoggle-tooltip' => '사이트바를 토글',
	'nomatches' => '변경된 설정이 없습니다',
	'order' => '순서',
	'permalink' => '현재 설정에 대한 정적 링크',
	'select-placeholder-none' => '(없음)',
	'showAnonOnly' => '익명 편집만 보기',
	'showUnpatrolledOnly' => '검토되지 않은 편집만 보기',
	'skippededit' => '건너뛴 편집',
	'tag' => '태그',
	'time-from' => '부터',
	'time-untill' => '까지',
	'timeframe' => '기간',
	'type' => '종류',
	'typeEdit' => '편집',
	'typeNew' => '새 문서',
	'userfilter' => '사용자 필터',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'Rezent Ännerungen (an Echtzäit)',
	'apply' => 'Uwenden',
	'asc' => 'Kleng op grouss',
	'changelog' => 'Wat gëtt et Neies',
	'clear' => 'eidel maachen',
	'currentedit' => 'Aktuell erausgesichten Ännerung',
	'cvn-adder-empty' => 'Onbekannt',
	'cvn-reason' => 'Grond',
	'cvn-reason-empty' => 'Kee Grond fonnt',
	'desc' => 'Grouss op kleng',
	'documentation' => 'Dokumentatioun',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Fir méi ze wëssen iwwer dës Funktioun',
	'lastupdate-cvn' => 'Lescht Aktualisatioun: $1',
	'lastupdate-rc' => 'Lescht Aktualisatioun: $1',
	'limit' => 'Limit',
	'months' => 'Januar, Februar, Mäerz, Abrëll, Mee, Juni, Juli, August, September. Oktober, November, Dezember',
	'namespace' => 'Nummraum',
	'nomatches' => 'Keng relevant Ännerunge fir Är Astellungen',
	'order' => 'Reiefolleg',
	'select-placeholder-none' => '(keen)',
	'showAnonOnly' => 'Nëmmen anonym',
	'showUnpatrolledOnly' => 'Nëmmen déi net nogekuckten',
	'skippededit' => 'Iwwersprongen Ännerung',
	'tag' => 'Markéierung',
	'time-from' => 'Vum',
	'time-untill' => 'Bis',
	'timeframe' => 'Period',
	'type' => 'Typ',
	'typeEdit' => 'Ännerungen',
	'typeNew' => 'Nei Säiten',
	'userfilter' => 'Benotzerfilter',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Скорешни промени во живо',
	'apply' => 'Примени',
	'asc' => 'Наг',
	'changelog' => 'Што има ново',
	'clear' => 'исчисти',
	'currentedit' => 'Тековно избрано уредување',
	'cvn-adder' => 'Додавач',
	'cvn-adder-empty' => 'Непознат',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Не најдов причина',
	'desc' => 'Над',
	'documentation' => 'Документација',
	'filter' => 'Филтер',
	'helpicon-tooltip' => 'Повеќе за функцијава',
	'lastupdate-cvn' => 'Последна измена: $1',
	'lastupdate-rc' => 'Последна измена: $1',
	'limit' => 'Граница',
	'masspatrol-requires-userfilter' => 'МасовнаПатрола е исклучен бидејќи нема зададено кориснички филтер, кој му е потребен.',
	'months' => 'јануари, февруари, март, април, мај, јуни, јули, август, септември, октомври, ноември, декември',
	'mypatrollog' => 'мој дневник на патролирање',
	'namespace' => 'Именски простор',
	'navtoggle-tooltip' => 'Префрлање на странична лента',
	'nomatches' => 'Нема промени што одговараат на вашите поставки',
	'order' => 'Редослед',
	'permalink' => 'Постојана врска до тековните поставки',
	'select-placeholder-none' => '(ништо)',
	'showAnonOnly' => 'Само анонимни',
	'showUnpatrolledOnly' => 'Само неиспатролирани',
	'skippededit' => 'Изоставено уредување',
	'tag' => 'Ознака',
	'time-from' => 'Од',
	'time-untill' => 'До',
	'timeframe' => 'Временска рамка',
	'type' => 'Тип',
	'typeEdit' => 'Уредувања',
	'typeNew' => 'Нови страници',
	'userfilter' => 'Кориснички филтер',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'title' => 'Siste endringer i sanntid',
	'apply' => 'Bruk',
	'asc' => 'Stigende',
	'changelog' => 'Hva er nytt',
	'clear' => 'tøm',
	'currentedit' => 'Valgt redigering',
	'cvn-adder' => 'Bruker',
	'cvn-adder-empty' => 'Ukjent',
	'cvn-reason' => 'Årsak',
	'cvn-reason-empty' => 'Ingen årsak funnet',
	'desc' => 'Synkende',
	'documentation' => 'Dokumentasjon',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Lær mer om denne funksjonen',
	'lastupdate-cvn' => 'Siste oppdatering: $1',
	'lastupdate-rc' => 'Sist oppdatert: $1',
	'limit' => 'Grense',
	'masspatrol-requires-userfilter' => 'MassPatrol har blitt deaktivert, fordi den krever et brukerfilter, noe som ikke ble funnet.',
	'months' => 'januar, februar, mars, april, mai, juni, juli, august, september, oktober, november, desember',
	'mypatrollog' => 'min patruljeringslogg',
	'namespace' => 'Navnerom:',
	'navtoggle-tooltip' => 'Veksle sidefeltet',
	'nomatches' => 'Ingen relevante endringer for innstillingene dine',
	'order' => 'Rekkefølge',
	'permalink' => 'Permalenke til de nåværende innstillingene',
	'select-placeholder-none' => '(ingen)',
	'showAnonOnly' => 'Kun uregistrerte',
	'showUnpatrolledOnly' => 'Kun upatruljerte',
	'skippededit' => 'Hoppet over redigering',
	'tag' => 'Tagg',
	'time-from' => 'Fra',
	'time-untill' => 'Til',
	'timeframe' => 'Tidsrom',
	'type' => 'Type',
	'typeEdit' => 'Redigeringer',
	'typeNew' => 'Nye sider',
	'userfilter' => 'Brukerfilter',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Siebrand
 * @author Sjoerddebruin
 */
$messages['nl'] = array(
	'title' => 'Realtime recente wijzigingen',
	'apply' => 'Toepassen',
	'asc' => 'Oplopend',
	'changelog' => 'Wat is er nieuw?',
	'clear' => 'wissen',
	'currentedit' => 'Huidige selectie',
	'cvn-adder' => 'Toegevoegd door',
	'cvn-adder-empty' => 'Onbekend',
	'cvn-reason' => 'Reden',
	'cvn-reason-empty' => 'Geen reden gevonden',
	'desc' => 'Aflopend',
	'documentation' => 'Documentatie',
	'filter' => 'Filters',
	'helpicon-tooltip' => 'Meer informatie over deze functie',
	'lastupdate-cvn' => 'Laatst bijgewerkt: $1',
	'lastupdate-rc' => 'Laatst bijgewerkt: $1',
	'limit' => 'Aantal',
	'masspatrol-requires-userfilter' => 'Massaal controleren is uitgeschakeld omdat hiervoor een gebruikersfilter nodig is, en die is uitgeschakeld.',
	'months' => 'januari, februari, maart, april, mei, juni, juli, augustus, september, oktober, november, december',
	'mypatrollog' => 'markeerlogboek',
	'namespace' => 'Naamruimte',
	'navtoggle-tooltip' => 'Zijbalk in- of uitschakelen',
	'nomatches' => 'Er zijn geen relevante wijzigingen voor uw instellingen',
	'order' => 'Volgorde',
	'permalink' => 'Permalink naar huidige instellingen',
	'select-placeholder-none' => '(geen)',
	'showAnonOnly' => 'Alleen anoniemen',
	'showUnpatrolledOnly' => 'Alleen ongecontroleerd',
	'skippededit' => 'Overgeslagen bewerking',
	'tag' => 'Label',
	'time-from' => 'Vanaf',
	'time-untill' => 'Tot',
	'timeframe' => 'Tijdsbestek',
	'type' => 'Type',
	'typeEdit' => 'Bewerkingen',
	'typeNew' => "Nieuwe pagina's",
	'userfilter' => 'Gebruikersfilter',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'title' => 'Modificacions recentas en temps real',
	'apply' => 'Aplicar',
	'asc' => 'Creissent',
	'changelog' => 'Qué de nòu',
	'clear' => 'escafar',
	'currentedit' => 'Modificacion actualament seleccionada',
	'cvn-adder' => 'Responsable de l’apondon',
	'cvn-adder-empty' => 'Desconegut',
	'cvn-reason' => 'Motiu',
	'cvn-reason-empty' => 'Cap de motiu pas trobat',
	'desc' => 'Descreissent',
	'documentation' => 'Documentacion',
	'filter' => 'Filtre',
	'helpicon-tooltip' => 'Clicar aicí per mai d’informacion',
	'lastupdate-cvn' => 'Darrièra mesa a jorn : $1',
	'lastupdate-rc' => 'Darrièra mesa a jorn : $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => "MassPatrol es estat desactivat perque necessita un filtre utilizaire e que n'i a pas cap de definit.",
	'months' => 'Genièr, Febrièr, Març, Abril, Mai, Junh, Julhet, Agost, Setembre, Octobre, Novembre, Decembre',
	'mypatrollog' => 'mon jornal de patrolha',
	'namespace' => 'Espaci de nom',
	'navtoggle-tooltip' => 'Bascuolar l’afichatge de la barra laterala',
	'nomatches' => 'Pas cap de modificacion pertinenta de vòstres paramètres',
	'order' => 'Òrdre',
	'permalink' => 'Ligam permanent cap als paramètres actuals',
	'select-placeholder-none' => '(pas cap)',
	'showAnonOnly' => 'Anonimes unicament',
	'showUnpatrolledOnly' => 'Pas patrolhats unicament',
	'skippededit' => 'Modificacion sautada',
	'tag' => 'Balisa',
	'time-from' => 'De',
	'time-untill' => 'Fins a',
	'timeframe' => 'Periòde',
	'type' => 'Tipe',
	'typeEdit' => 'Modificacions',
	'typeNew' => 'Paginas novèlas',
	'userfilter' => 'Filtre utilizaire',
);

/** Polish (polski)
 * @author Rezonansowy
 * @author Woytecr
 */
$messages['pl'] = array(
	'title' => 'Ostatnie zmiany w czasie rzeczywistym',
	'apply' => 'Zastosuj',
	'asc' => 'Rosnąco',
	'changelog' => 'Co nowego',
	'clear' => 'wyczyść',
	'currentedit' => 'Aktualnie wybrana edycja',
	'cvn-adder' => 'Dodający',
	'cvn-adder-empty' => 'Nieznany',
	'cvn-reason' => 'Powód',
	'cvn-reason-empty' => 'Nie znaleziono powodu',
	'desc' => 'Malejąco',
	'documentation' => 'Dokumentacja',
	'filter' => 'Filtr',
	'helpicon-tooltip' => 'Kliknij tutaj, aby uzyskać więcej informacji',
	'lastupdate-cvn' => 'Ostatnia aktualizacja: $1',
	'lastupdate-rc' => 'Ostatnia aktualizacja: $1',
	'limit' => 'Limit',
	'masspatrol-requires-userfilter' => 'MassPatrol został zablokowany, ponieważ wymaga filtru użytkownika, a żaden nie został określony.',
	'months' => 'Styczeń, Luty, Marzec, Kwiecień, Maj, Czerwiec, Lipiec, Sierpień, Wrzesień, Październik, Listopad, Grudzień',
	'mypatrollog' => 'mój rejestr patrolowania',
	'namespace' => 'Przestrzeń nazw',
	'navtoggle-tooltip' => 'Przełącz pasek boczny',
	'permalink' => 'Link do bieżących ustawień',
	'showAnonOnly' => 'Tylko anonimowy',
	'showUnpatrolledOnly' => 'Tylko niezatwierdzeni',
	'skippededit' => 'Pominięte edycje',
	'tag' => 'Tag',
	'typeEdit' => 'Edycje',
	'typeNew' => 'Nowe strony',
	'userfilter' => 'Filtr użytkownika',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'apply' => 'غوښتنه کول',
	'asc' => 'مخپورته',
	'changelog' => 'څوک نوي دي',
	'clear' => 'سپينول',
	'currentedit' => 'دم مهال ټاکلی سمون',
	'cvn-adder' => 'گډونگر',
	'cvn-adder-empty' => 'ناجوت',
	'cvn-reason' => 'سبب',
	'cvn-reason-empty' => 'سبب يې و نه موندل شو',
	'desc' => 'مخښکته',
	'documentation' => 'لاسوند',
	'filter' => 'چاڼگر',
	'helpicon-tooltip' => 'د نورو مالوماتو لپاره دلته وټوکۍ',
	'lastupdate-cvn' => 'وروستئ هممهالېدنه: $1',
	'lastupdate-rc' => 'وروستئ هممهالېدنه: $1',
	'limit' => 'بريد',
	'months' => 'جنوري، فېبروري، مارچ، اپرېل، مئ، جون، جولای، اگسټ، سېپتمبر، اکتوبر، نومبر، ډيسمبر',
	'namespace' => 'نوم-تشيال',
	'nomatches' => 'د امستنو سره مو هېڅ يوې پايلې جوسر و نه لگاوه', # Fuzzy
	'order' => 'بولل',
	'showAnonOnly' => 'يوازې ورکنومی',
	'time-untill' => 'تر',
	'type' => 'ډول',
	'typeEdit' => 'سمونونه',
	'typeNew' => 'نوي مخونه',
	'userfilter' => 'کارن چاڼگر',
);

/** Portuguese (português)
 * @author Helder.wiki
 * @author Krinkle
 */
$messages['pt'] = array(
	'apply' => 'Aplicar',
	'limit' => 'Limite',
	'order' => 'Ordem',
	'type' => 'Tipo',
	'typeEdit' => 'Edições',
	'typeNew' => 'Páginas novas',
	'userfilter' => 'Filtro de utilizadores',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Helder.wiki
 * @author Titoncio
 */
$messages['pt-br'] = array(
	'title' => 'Mudanças Recentes em Tempo Real',
	'apply' => 'Aplicar',
	'asc' => 'Asc',
	'changelog' => 'Novidades',
	'clear' => 'limpar',
	'currentedit' => 'Edição selecionada atualmente',
	'cvn-adder' => 'Incluído por',
	'cvn-adder-empty' => 'Desconhecido',
	'cvn-reason' => 'Motivo',
	'cvn-reason-empty' => 'Nenhum motivo encontrado',
	'desc' => 'Desc',
	'documentation' => 'Documentação',
	'filter' => 'Filtro',
	'helpicon-tooltip' => 'Mais informação sobre este recurso',
	'lastupdate-cvn' => 'Última atualização: $1',
	'lastupdate-rc' => 'Última atualização: $1',
	'limit' => 'Limite',
	'masspatrol-requires-userfilter' => 'MassPatrol foi desativado pois requer um filtro de usuário e nenhum foi selecionado.',
	'months' => 'janeiro, fevereiro, março, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro',
	'mypatrollog' => 'registro dos meus patrulhamentos',
	'namespace' => 'Domínio',
	'navtoggle-tooltip' => 'Ativar ou desativar a barra lateral',
	'nomatches' => 'Nenhuma mudança recente corresponde às suas configurações',
	'order' => 'Ordem',
	'permalink' => 'Link permanente para as configurações atuais',
	'select-placeholder-none' => '(nenhum)',
	'showAnonOnly' => 'Apenas edições de anônimos',
	'showUnpatrolledOnly' => 'Apenas não patrulhadas',
	'skippededit' => 'Edição pulada',
	'tag' => 'Etiqueta',
	'time-from' => 'De',
	'time-untill' => 'Até',
	'timeframe' => 'Intervalo de tempo',
	'type' => 'Tipo',
	'typeEdit' => 'Edições',
	'typeNew' => 'Páginas novas',
	'userfilter' => 'Filtro de usuários',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'Schimbări recente în timp real',
	'apply' => 'Aplică',
	'asc' => 'Asc.',
	'changelog' => 'Ce este nou',
	'clear' => 'curăță',
	'currentedit' => 'Modificare actualmente selectată',
	'cvn-adder' => 'Persoana care a adăugat',
	'cvn-adder-empty' => 'Necunoscut',
	'cvn-reason' => 'Motiv',
	'cvn-reason-empty' => 'Niciun motiv găsit',
	'desc' => 'Desc.',
	'documentation' => 'Documentație',
	'filter' => 'Filtru',
	'helpicon-tooltip' => 'Aflați mai multe despre această funcție',
	'lastupdate-cvn' => 'Ultima actualizare: $1',
	'lastupdate-rc' => 'Ultima actualizare: $1',
	'limit' => 'Limită',
	'masspatrol-requires-userfilter' => 'MassPatrol a fost dezactivată întrucât necesită un filtru de utilizator, niciunul nefiind definit.',
	'months' => 'Ianuarie, Februarie, Martie, Aprilie, Mai, Iunie, Iulie, August, Septembrie, Octombrie, Noiembrie, Decembrie',
	'mypatrollog' => 'jurnalul meu de patrulare',
	'namespace' => 'Spațiu de nume',
	'navtoggle-tooltip' => 'Arată/ascunde bara laterală',
	'nomatches' => 'Nicio modificare relevantă parametrilor dumneavoastră',
	'order' => 'Ordonare',
	'permalink' => 'Legătură permanentă către parametrii actuali',
	'select-placeholder-none' => '(niciuna)',
	'showAnonOnly' => 'Doar anonimi',
	'showUnpatrolledOnly' => 'Doar nepatrulate',
	'skippededit' => 'Modificare sărită',
	'tag' => 'Etichetă',
	'time-from' => 'De la',
	'time-untill' => 'Până la',
	'timeframe' => 'Interval de timp',
	'type' => 'Tip',
	'typeEdit' => 'Modificări',
	'typeNew' => 'Pagini noi',
	'userfilter' => 'Filtru de utilizator',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'title' => 'Последние изменения в режиме реального времени',
	'apply' => 'Применить',
	'asc' => 'По возрастанию',
	'changelog' => 'Что нового',
	'clear' => 'очистить',
	'currentedit' => 'Выбранная в настоящий момент правка',
	'cvn-adder' => 'Добавивший',
	'cvn-adder-empty' => 'Неизвестен',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Причина не найдена',
	'desc' => 'По убыванию',
	'documentation' => 'Документация',
	'filter' => 'Фильтр',
	'helpicon-tooltip' => 'Подробнее об этой функции',
	'lastupdate-cvn' => 'Последнее обновление: $1',
	'lastupdate-rc' => 'Последнее обновление: $1',
	'limit' => 'Ограничение',
	'masspatrol-requires-userfilter' => 'Массовое патрулирование было отключено, так как оно требует установки пользовательского фильтра, а не один из них не был установлен.',
	'months' => 'Январь, Февраль, Март, Апрель, Май, Июнь, Июль, Август, Сентябрь, Октябрь, Ноябрь, Декабрь',
	'mypatrollog' => 'мой журнал патрулирования',
	'namespace' => 'Пространство имён',
	'navtoggle-tooltip' => 'Переключить боковую панель',
	'nomatches' => 'Нет изменений, соответствующих вашим параметрам',
	'order' => 'Порядок',
	'permalink' => 'Постоянная ссылка на текущие параметры',
	'select-placeholder-none' => '(нет)',
	'showAnonOnly' => 'только анонимов',
	'showUnpatrolledOnly' => 'Только неотпатрулированные',
	'skippededit' => 'Пропущенные правки',
	'tag' => 'Тег',
	'time-from' => 'С',
	'time-untill' => 'До',
	'timeframe' => 'Временные рамки',
	'type' => 'Тип',
	'typeEdit' => 'Правки',
	'typeNew' => 'Новые страницы',
	'userfilter' => 'Фильтр пользователей',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'tag' => 'Ознака',
	'type' => 'Тип',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 */
$messages['sr-el'] = array(
	'tag' => 'Oznaka',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title' => 'Senaste ändringer i realtid',
	'apply' => 'Verkställ',
	'asc' => 'Stig',
	'changelog' => 'Vad är nytt',
	'clear' => 'rensa',
	'currentedit' => 'Aktuell vald redigering',
	'cvn-adder' => 'Användare',
	'cvn-adder-empty' => 'Okänd',
	'cvn-reason' => 'Anledning',
	'cvn-reason-empty' => 'Ingen anledning hittades',
	'desc' => 'Fall',
	'documentation' => 'Dokumentation',
	'filter' => 'Filter',
	'helpicon-tooltip' => 'Läs mer om denna funktion',
	'lastupdate-cvn' => 'Senaste uppdatering: $1',
	'lastupdate-rc' => 'Senaste uppdatering: $1',
	'limit' => 'Gräns',
	'masspatrol-requires-userfilter' => 'MassPatrol har inaktiverats, eftersom den kräver ett användarfilter och ingen var satt.',
	'months' => 'januari, februari, mars, april, maj, juni, juli, augusti, september, oktober, november, december',
	'mypatrollog' => 'min patrullogg',
	'namespace' => 'Namnrymd',
	'navtoggle-tooltip' => 'Visa/dölj sidofältet',
	'nomatches' => 'Inga relevanta ändringar för dina inställningar',
	'order' => 'Sortera',
	'permalink' => 'Permanent länk till nuvarande inställningar',
	'select-placeholder-none' => '(ingen)',
	'showAnonOnly' => 'Bara anonyma',
	'showUnpatrolledOnly' => 'Bara opatrullerade',
	'skippededit' => 'Hoppade över redigering',
	'tag' => 'Tagg',
	'time-from' => 'Från',
	'time-untill' => 'Tills',
	'timeframe' => 'Tidsram',
	'type' => 'Typ',
	'typeEdit' => 'Redigeringar',
	'typeNew' => 'Nya sidor',
	'userfilter' => 'Användarfilter',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'title' => 'Останні зміни в режимі реального часу',
	'apply' => 'Застосовувати',
	'asc' => 'Зрост',
	'changelog' => 'Що нового',
	'clear' => 'очистити',
	'currentedit' => 'Поточно вибране редагування',
	'cvn-adder' => 'Доповнення',
	'cvn-adder-empty' => 'Невідомий',
	'cvn-reason' => 'Причина',
	'cvn-reason-empty' => 'Не знайдено причин',
	'desc' => 'Спад',
	'documentation' => 'Документація',
	'filter' => 'Фільтр',
	'helpicon-tooltip' => 'Натисніть тут для отримання додаткової інформації',
	'lastupdate-cvn' => 'Останнє оновлення: $1',
	'lastupdate-rc' => 'Останнє оновлення: $1',
	'limit' => 'Обмеження',
	'masspatrol-requires-userfilter' => 'MassPatrol був відключений, бо він вимагає користувацького фільтру і жодний не був встановлений.',
	'months' => 'Січень, Лютий, Березень, Квітень, Травень, Червень, Липень, Серпень, Вересень, Жовтень, Листопад, Грудень',
	'mypatrollog' => 'журнал патрулювання',
	'namespace' => 'Простір назв',
	'navtoggle-tooltip' => 'Перемкнути бічну панель',
	'nomatches' => 'Немає відповідних змін для ваших налаштувань',
	'order' => 'Порядок',
	'permalink' => 'Постійне посилання на поточні параметри',
	'select-placeholder-none' => '(нема)',
	'showAnonOnly' => 'Анонім тільки',
	'showUnpatrolledOnly' => 'Непатрульований тільки',
	'skippededit' => 'Пропущені редагування',
	'tag' => 'Мітка',
	'time-from' => 'Від',
	'time-untill' => 'Доки',
	'timeframe' => 'Часові рамки',
	'type' => 'Тип',
	'typeEdit' => 'Редагування',
	'typeNew' => 'Нові сторінки',
	'userfilter' => 'Користувацький фільтр',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'Thay đổi gần đây túc thời',
	'apply' => 'Áp dụng',
	'asc' => 'Tăng',
	'changelog' => 'Những gì mới',
	'clear' => 'xóa',
	'currentedit' => 'Sửa đổi được chọn',
	'cvn-adder' => 'Người thêm',
	'cvn-adder-empty' => 'Không rõ',
	'cvn-reason' => 'Lý do',
	'cvn-reason-empty' => 'Không tìm thấy lý do',
	'desc' => 'Giảm',
	'documentation' => 'Tài liệu',
	'filter' => 'Bộ lọc',
	'helpicon-tooltip' => 'Thêm thông tin',
	'lastupdate-cvn' => 'Cập nhật lần cuối: $1',
	'lastupdate-rc' => 'Cập nhật lần cuối: $1',
	'limit' => 'Giới hạn',
	'masspatrol-requires-userfilter' => 'MassPatrol đã bị tắt vì không có bộ lọc người dùng nào được đặt.',
	'months' => 'tháng 1, tháng 2, tháng 3, tháng 4, tháng 5, tháng 6, tháng 7, tháng 8, tháng 9, tháng 10, tháng 11, tháng 12',
	'mypatrollog' => 'nhật trình tuần tra của tôi',
	'namespace' => 'Không gian tên',
	'navtoggle-tooltip' => 'Bật/tắt thanh bên',
	'nomatches' => 'Không có thay đổi liên quan đến tùy chọn của bạn',
	'order' => 'Thứ tự',
	'permalink' => 'Liên kết thường trực đến tùy chọn hiện tại',
	'select-placeholder-none' => '(không có)',
	'showAnonOnly' => 'Chỉ vô danh',
	'showUnpatrolledOnly' => 'Chỉ chưa tuần tra',
	'skippededit' => 'Sửa đổi được bỏ qua',
	'tag' => 'Thẻ',
	'time-from' => 'Từ',
	'time-untill' => 'Đến',
	'timeframe' => 'Khoảng thời gian',
	'type' => 'Kiểu',
	'typeEdit' => 'Sửa đổi',
	'typeNew' => 'Trang mới',
	'userfilter' => 'Bộ lọc người dùng',
);

/** Wu (吴语)
 * @author Benojan
 */
$messages['wuu'] = array(
	'cvn-adder-empty' => '弗識',
	'helpicon-tooltip' => '捺箇裏望還多信息',
	'time-from' => '從',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Liuxinyu970226
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'title' => '实时最新更改',
	'apply' => '应用',
	'asc' => '升序',
	'changelog' => '最新消息',
	'clear' => '清除',
	'currentedit' => '当前所选编辑',
	'cvn-adder' => '添加者',
	'cvn-adder-empty' => '未知',
	'cvn-reason' => '理由',
	'cvn-reason-empty' => '找不到理由',
	'desc' => '降序',
	'documentation' => '档案',
	'filter' => '过滤器',
	'helpicon-tooltip' => '点这里获得更多信息',
	'lastupdate-cvn' => '最后更新：$1',
	'lastupdate-rc' => '最后更新：$1',
	'limit' => '限制',
	'masspatrol-requires-userfilter' => '由于需要用户筛选器但却全部失效MassPatrol已被禁用。',
	'months' => '1月、2月、3月、4月、5月、6月、7月、8月、9月、10月、11月、12月',
	'mypatrollog' => '我的巡查日志',
	'namespace' => '名字空间',
	'navtoggle-tooltip' => '切换侧栏',
	'nomatches' => '找不到与您设置相关的结果',
	'order' => '顺序',
	'permalink' => '链至目前设定的永久链接',
	'select-placeholder-none' => '（无）',
	'showAnonOnly' => '仅匿名用户',
	'showUnpatrolledOnly' => '仅未巡查编辑',
	'skippededit' => '跳过的编辑',
	'tag' => '标签',
	'time-from' => '从',
	'time-untill' => '到',
	'timeframe' => '时间范围',
	'type' => '类型',
	'typeEdit' => '编辑',
	'typeNew' => '新页面',
	'userfilter' => '用户过滤器',
);
