<?php
/**
 * Interface messages for tool "OrphanTalk2".
 *
 * @toolowner krinkle
 */

$url = '//toolserver.org/~krinkle/OrphanTalk2/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(select a wiki first)',
	'hideredirects' => 'Hide redirects',
	'hidesubpages' => 'Hide subpages',
	'limit' => 'Limit',
	'page' => 'Page',
	'redirect' => 'Is redirect?',
	'output' => 'Output',
	'update' => 'Update',
	'tools-delete' => 'delete',
	'tools-links' => 'links',
	'tools-subject' => 'subject',
	'tools-hist' => 'hist',
	'tools-curr' => 'curr',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Cleaning orphaned talk pages via $1',
	'noresults' => 'No orphaned talk pages on this wiki in this namespace matched your settings.',
	'resultslimited' => 'Results were limited to $1 pages.',
);

/** Message documentation (Message documentation)
 * @author Dbc334
 * @author EugeneZelenko
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool. Note that this is a sequel of an old tool by the same name. "2" is part of the name.',
	'select-wiki-first' => "This message is displayed in the dropdown menu for the namespace selector if the user didn't choose a wiki yet. Include the parenthesis.",
	'hideredirects' => 'Label for a checkbox in the input form indicating whether redirect pages should be included in the results.',
	'hidesubpages' => 'Label for a checkbox in the input form indicating whether subpages should be included in the results.',
	'limit' => 'Label in front of a dropdown menu. Affects the maximum number of results to display. {{Identical|Limit}}',
	'page' => 'Table heading for the "Page"-column in the results.
{{Identical|Page}}',
	'redirect' => 'Table heading for the "Is redirect"-column in the results. This column is "0" (not a redirect) or "1" (is redirect).',
	'output' => 'Heading above the results output of the search query.
{{Identical|Output}}',
	'update' => 'Clicking this button will update the form to adapt to the new settings. {{Identical|Update}}',
	'tools-delete' => 'This link goes directly to action=delete to delete this orphaned talk page. Part of the tool-links in the left column.
{{Identical|Delete}}',
	'tools-links' => 'Goes to Special:WhatLinksHere for the orphaned page. Part of the tool-links in the left column.
{{Identical|Link}}',
	'tools-subject' => 'Goes to the subject page (which never existed or has been deleted) of the orphaned page. Part of the tool-links in the left column.',
	'tools-hist' => 'Goes to the history view of the orphaned page. Part of the tool-links in the left column.',
	'tools-curr' => 'Shows the latest/current edit to this orphaned page. Part of the tool-links in the left column.',
	'tools-globalusage' => 'If the orphan is a Commons file talk page, this link will link to the Special:GlobalUsage for the File page.',
	'deletesummary' => 'Deletion summary for the "delete"-toollink. $1 is an interwiki link to more info, also a way to promote this tool to others.',
	'noresults' => 'Message displayed if there are no orphaned talk pages found with the current settings.',
	'resultslimited' => "If results were limited by the set' limit, this message is displayed at the bottom of the search results.",
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'select-wiki-first' => "(kies eers 'n wiki)",
	'hideredirects' => 'Versteek aansture',
	'hidesubpages' => 'Versteek subbladsye',
	'limit' => 'Limiet',
	'page' => 'Bladsy',
	'redirect' => 'Is aanstuur?',
	'output' => 'Afvoer',
	'update' => 'Opdateer',
	'tools-delete' => 'skrap',
	'tools-links' => 'skakels',
	'tools-subject' => 'onderwerp',
	'tools-hist' => 'gesk.',
	'tools-curr' => 'huidige',
	'resultslimited' => 'Resultate is beperk tot $1 bladsye.',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author أحمد
 */
$messages['ar'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(اختر ويكي أولا)',
	'hideredirects' => 'أخفِ التحويلات',
	'hidesubpages' => 'أخفِ الصفحات الفرعية',
	'limit' => 'حد',
	'page' => 'الصفحة',
	'redirect' => 'تحويلة؟',
	'output' => 'مخرج',
	'update' => 'حدّث',
	'tools-delete' => 'احذف',
	'tools-links' => 'روابط',
	'tools-subject' => 'موضوع',
	'tools-hist' => 'تاريخ',
	'tools-curr' => 'حالي',
	'tools-globalusage' => 'استخدام عام',
	'deletesummary' => 'تنظيف صفحات النقاش اليتيمة عن طريق $1',
	'noresults' => 'لا توجد صفحات نقاش يتيمة في هذا الويكي في فضاء التسمية هذا مما يطابق إعداداتك.',
	'resultslimited' => 'حُدِّدَ عدد النتائج بما لا يزيد على $1 صفحات.',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'page' => 'ܦܐܬܐ',
	'redirect' => 'ܐܪܐ ܨܘܝܒܐ ܐܝܬܘܗܝ؟',
	'output' => 'ܡܦܩܢܐ',
	'update' => 'ܚܕܬ',
	'tools-delete' => 'ܫܘܦ',
	'tools-links' => 'ܐܣܘܪ̈ܐ',
	'tools-subject' => 'ܡܠܘܐܐ',
	'tools-hist' => 'ܬܫܥܝܬܐ',
	'tools-curr' => 'ܗܫܝܐ',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'limit' => 'সীমা',
	'page' => 'পৃষ্ঠা',
	'output' => 'আউটপুট',
	'update' => 'আপডেট',
	'tools-delete' => 'বিলোপন (ডিলিট)',
	'tools-links' => 'সংযোগ (লিঙ্ক)',
	'tools-subject' => 'বিষয়',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(primero seleiciona una wiki)',
	'hideredirects' => 'Anubrir redireiciones',
	'hidesubpages' => 'Anubrir subpáxines',
	'limit' => 'Llímite',
	'page' => 'Páxina',
	'redirect' => '¿Ye redireición?',
	'output' => 'Salida',
	'update' => 'Anovar',
	'tools-delete' => 'desaniciar',
	'tools-links' => 'enllaces',
	'tools-subject' => 'asuntu',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'usuglobal',
	'deletesummary' => "Llimpiando páxines d'alderique güérfanes con $1",
	'noresults' => "Denguna páxina d'alderique d'esta wiki nesti espaciu de nomes concasa coles tos preferencies.",
	'resultslimited' => 'Los resultaos tan llendaos a $1 páxines.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'limit' => 'Limit',
	'page' => 'Səhifə',
	'tools-delete' => 'sil',
	'tools-links' => 'keçidlər',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'title' => 'یئتیم‌دانیشیق۲',
	'select-wiki-first' => '(ایلکجه بیر ویکی سئچین)',
	'hideredirects' => 'یول‌لاندیرمالاری گیزلت',
	'hidesubpages' => 'آلت‌صحیفه‌لری گیزلت',
	'limit' => 'سینیر',
	'page' => 'صحیفه',
	'redirect' => 'یول‌لاندیرمادیرمی؟',
	'output' => 'چیختی',
	'update' => 'گونجل‌له',
	'tools-delete' => 'سیل',
	'tools-links' => 'باغلانتیلار',
	'tools-subject' => 'قونو',
	'tools-hist' => 'گئچمیش',
	'tools-curr' => 'ایندی',
	'tools-globalusage' => 'سراسری ایستیفاده',
	'deletesummary' => '$1 ایله یئتیم اولموش دانیشیق صحیفه‌لری سیلینیر',
	'noresults' => 'سیزین تنظیملرینیزله بو ویکی‌ده بو آدفضاسیندا بیر یئتیم اولموش دانیشیق صحیفه‌سی تاپیلمادی.',
	'resultslimited' => 'نتیجه‌لر $1 صحیفه‌یه محدودلاشیبلار.',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(тәүҙә вики һайлағыҙ)',
	'hideredirects' => 'Йүнәлтеүҙәрҙе йәшерергә',
	'hidesubpages' => 'Эске биттәрҙе йәшерергә',
	'limit' => 'Сикләү',
	'page' => 'Бит',
	'redirect' => 'Был йүнәлтеүме?',
	'output' => 'Һөҙөмтә',
	'update' => 'Яңыртырға',
	'tools-delete' => 'юйырға',
	'tools-links' => 'һылтанмалар',
	'tools-subject' => 'тема',
	'tools-hist' => 'тарих',
	'tools-curr' => 'ағым.',
	'tools-globalusage' => 'дөйөм ҡулланыу',
	'deletesummary' => 'Йәтим-биттәрҙең фекер алышыу битен  $1 аша таҙартырға',
	'noresults' => 'Был викила һеҙ һораған исемдәр арауығында йәтим-биттәрҙең фекер алышыу биттәре табылманы.',
	'resultslimited' => 'Йомғаҡлау $1 бит менән сикләнде.',
);

/** Belarusian (беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(спачатку выберыце вікі)',
	'hideredirects' => 'Схаваць перанакіраванні',
	'hidesubpages' => 'Схаваць падстаронкі',
	'limit' => 'Ліміт',
	'page' => 'Старонка',
	'redirect' => 'Гэта перанакіраванне?',
	'output' => 'Вывад',
	'update' => 'Абнавіць',
	'tools-delete' => 'выдаліць',
	'tools-links' => 'спасылкі',
	'tools-subject' => 'тэма',
	'tools-hist' => 'гіст.',
	'tools-curr' => 'з актуальн',
	'tools-globalusage' => 'глабальн.',
	'deletesummary' => 'Выдаленне абмеркаванняў-сірот праз $1',
	'noresults' => 'У гэтай вікі і ў гэтай прасторы назваў абмеркаванняў-сірот няма.',
	'resultslimited' => 'Вынік абмежаваны да $1 старонак.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(сьпярша выберыце вікі)',
	'hideredirects' => 'Схаваць перанакіраваньні',
	'hidesubpages' => 'Схаваць падстаронкі',
	'limit' => 'Абмежаваньне',
	'page' => 'Старонка',
	'redirect' => 'Зьяўляецца перанакіраваньнем?',
	'output' => 'Вывад',
	'update' => 'Абнавіць',
	'tools-delete' => 'выдаліць',
	'tools-links' => 'спасылкі',
	'tools-subject' => 'прадмет',
	'tools-hist' => 'гіст',
	'tools-curr' => 'цяп',
	'tools-globalusage' => 'глябальнае выкарыстаньне',
	'deletesummary' => 'Выдаленьне абмеркаваньняў-сірацін праз $1',
	'noresults' => 'У гэтай вікі і ў гэтай прасторы назваў абмеркаваньняў-сірацін няма.',
	'resultslimited' => 'Вынік абмежаваны да $1 старонак.',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'update' => 'Обновяване',
	'tools-delete' => 'изтриване',
	'tools-hist' => 'ист',
	'tools-curr' => 'тек',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'title' => 'পিতৃহীন পাতা আলোচনা ২',
	'select-wiki-first' => '(প্রথমে একটি উইকি নির্বাচন করুন)',
	'hideredirects' => 'পুনর্নির্দেশনাগুলো লুকাও',
	'hidesubpages' => 'উপপাতাগুলো লুকাও',
	'limit' => 'সীমা',
	'page' => 'পাতা',
	'redirect' => 'এটি কী পুনর্নির্দেশ?',
	'output' => 'আউটপুট',
	'update' => 'হালনাগাদ',
	'tools-delete' => 'অপসারণ',
	'tools-links' => 'সংযোগ',
	'tools-subject' => 'বিষয়',
	'tools-hist' => 'ইতিহাস',
	'tools-curr' => 'বর্তমান',
	'tools-globalusage' => 'গ্লোবাল ব্যবহার',
	'deletesummary' => '$1-এর মাধ্যমে পিতৃহীন আলাপ পাতা পরিস্কার করা হচ্ছে',
	'noresults' => 'এই উইকির এই নামস্থানের কোনো পিতৃহীন আলাপ পাতার সাথে আপনার সেটিং মেলেনি।',
	'resultslimited' => 'ফলাফলগুলো $1টি পাতার মধ্যে সীমাবদ্ধ ছিলো।',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(diuzit ur wiki da gentañ)',
	'hideredirects' => 'Kuzhat an adkasoù',
	'hidesubpages' => 'Kuzhat an ispajennoù',
	'limit' => 'Bevenn',
	'page' => 'Pajenn',
	'redirect' => 'Un adkas eo ?',
	'output' => 'Ezvont',
	'update' => 'Hizivaat',
	'tools-delete' => 'diverkañ',
	'tools-links' => 'liammoù',
	'tools-subject' => 'danvez',
	'tools-hist' => 'istor',
	'tools-curr' => 'red',
	'tools-globalusage' => 'Implij hollek',
	'deletesummary' => 'O naetaat ar pajennoù kaozeal dre $1',
	'noresults' => "N'eus bet kavet pajenn gaozeal dall ebet er wiki, en esaouenn anv a glot gant ho kefluniadur.",
	'resultslimited' => "Krennet eo bet an disoc'hoù da $1 pajenn.",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'update' => 'Ažuriraj',
	'tools-delete' => 'obriši',
	'tools-subject' => 'tema',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(primer seleccioneu un wiki)',
	'hideredirects' => 'Amaga redireccions',
	'hidesubpages' => 'Amaga subpàgines',
	'limit' => 'Límit',
	'page' => 'Pàgina',
	'redirect' => 'És una redirecció?',
	'output' => 'Resultats',
	'update' => 'Actualitza',
	'tools-delete' => 'elimina',
	'tools-links' => 'enllaços',
	'tools-subject' => 'pàgina',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'ús global',
	'deletesummary' => 'Neteja de pàgines de discussió òrfenes via $1',
	'noresults' => "No s'ha trobat en aquest wiki cap pàgina de discussió òrfena en aquest espai de noms que correspongui amb la vostra configuració.",
	'resultslimited' => 'Els resultats es limiten a $1 pàgines.',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'output' => 'Хилам',
	'update' => 'Карлаяккха',
);

/** Czech (česky)
 * @author Chmee2
 * @author Jezevec
 * @author PSJG-Tyler
 * @author Vks
 */
$messages['cs'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(nejdříve vyber wiki)',
	'hideredirects' => 'Skrýt přesměrování',
	'hidesubpages' => 'Skrýt podstránky',
	'limit' => 'hranice',
	'page' => 'Stránka',
	'redirect' => 'Přesměrováno?',
	'output' => 'Výstup',
	'update' => 'Aktualizace',
	'tools-delete' => 'smazat',
	'tools-links' => 'odkazy',
	'tools-subject' => 'téma',
	'tools-hist' => 'historie',
	'tools-curr' => 'poslední editace',
	'tools-globalusage' => 'globální použití',
	'deletesummary' => 'Čistím osiřelé diskuzní stránky přes $1',
	'noresults' => 'Žádné osiřelé diskuzní stránky na této wiki v tomto jmenném prostoru neodpovídají Vašemu nastavení.',
	'resultslimited' => 'Výsledky byly omezeny na  $1  stránek.',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(малтанах викие суйлӑр)',
	'hidesubpages' => 'Кӗҫӗн страницӑсене пытар',
	'limit' => 'Хӗсев',
	'page' => 'Страница',
	'tools-delete' => 'тӗпле',
	'tools-links' => 'каҫӑсем',
	'tools-subject' => 'тема',
	'tools-hist' => 'истори',
	'tools-curr' => 'халь.',
	'tools-globalusage' => 'глобаллӑ усӑ курни',
);

/** Danish (dansk)
 * @author Christian List
 * @author Erisos
 * @author Sarrus
 * @author Tjernobyl
 */
$messages['da'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(vælg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grænse',
	'page' => 'Side',
	'redirect' => 'Er en omdirigering?',
	'output' => 'Resultat',
	'update' => 'Opdatér',
	'tools-delete' => 'slet',
	'tools-links' => 'links',
	'tools-subject' => 'emne',
	'tools-hist' => 'hist',
	'tools-curr' => 'nu',
	'tools-globalusage' => 'global brug',
	'deletesummary' => 'Sletning af forældreløse diskussionssider via $1',
	'noresults' => 'Ingen forældreløse diskussionssider på denne wiki i dette navneområde passede med de valgte indstillinger.',
	'resultslimited' => 'Resultaterne blev begrænset til $1 sider.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 */
$messages['de'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(wähle zuerst ein Wiki)',
	'hideredirects' => 'Weiterleitungen ausblenden',
	'hidesubpages' => 'Unterseiten ausblenden',
	'limit' => 'Limit',
	'page' => 'Seite',
	'redirect' => 'Ist es eine Weiterleitung?',
	'output' => 'Ausgabe',
	'update' => 'Aktualisieren',
	'tools-delete' => 'löschen',
	'tools-links' => 'Links',
	'tools-subject' => 'Betreff',
	'tools-hist' => 'Versionsgeschichte',
	'tools-curr' => 'Aktuelle Version',
	'tools-globalusage' => 'Globale Nutzung',
	'deletesummary' => 'Löschung der verwaisten Diskussionsseite mit $1',
	'noresults' => 'Es konnten auf diesem Wiki keine den Einstellungen entsprechenden verwaisten Diskussionsseiten in diesem Namensraum ermittelt werden.',
	'resultslimited' => 'Die Ergebnisse wurden auf $1 Seiten beschränkt.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'title' => 'BakusWerenayış2',
	'select-wiki-first' => '(Ya sıfte yew wiki weçine)',
	'hideredirects' => 'Hetenayışan bınımnê',
	'hidesubpages' => 'Pelanê bınan bınımnê',
	'limit' => 'Limit',
	'page' => 'Pele',
	'redirect' => 'Hetanayış ?',
	'output' => 'Vıcyayış',
	'update' => 'Noroc resn',
	'tools-delete' => 'bestere',
	'tools-links' => 'gırey',
	'tools-subject' => 'mersel',
	'tools-hist' => 'ravyardê',
	'tools-curr' => 'newen',
	'tools-globalusage' => 'global karkerdış',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(wubjeŕ nejpjerwjej wiki)',
	'hideredirects' => 'Dalejpósrědnjenja schowaś',
	'hidesubpages' => 'Pódboki schowaś',
	'limit' => 'Limit',
	'page' => 'Bok',
	'redirect' => 'Jo dalejpósrědnjenje?',
	'output' => 'Wudaśe',
	'update' => 'Aktualizěrowaś',
	'tools-delete' => 'wulašowaś',
	'tools-links' => 'wótkaze',
	'tools-subject' => 'tema',
	'tools-hist' => 'historija',
	'tools-curr' => 'aktualna wersija',
	'tools-globalusage' => 'globalne wužywanje',
	'deletesummary' => 'Lašowanje wósyrośonych diskusijnych bokow pśez $1',
	'noresults' => 'Žedne wósyrośone diskusijne boki na toś tom wikiju w toś tom mjenjowem rumje njejsu wašym nastajenjam wótpowědowali.',
	'resultslimited' => 'Wuslědki su se na $1 bokow wobgranicowali.',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Geraki
 * @author Glavkos
 */
$messages['el'] = array(
	'select-wiki-first' => '(επιλέξτε πρώτα ένα wiki)',
	'hideredirects' => 'Απόκρυψη ανακατευθύνσεων',
	'hidesubpages' => 'Απόκρυψη υποσελιδών',
	'limit' => 'Όριο',
	'page' => 'Άρθρο',
	'redirect' => 'Είναι ανακατεύθυνση;',
	'update' => 'Ενημέρωση',
	'tools-delete' => 'διαγραφή',
	'tools-links' => 'σύνδεσμοι',
	'tools-subject' => 'θέμα',
	'tools-hist' => 'ιστορικό',
	'tools-curr' => 'τρέχουσα',
	'tools-globalusage' => 'καθολική χρήση',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Yekrats
 */
$messages['eo'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(unue elektu vikion)',
	'hideredirects' => 'Kaŝi alidirektilojn',
	'hidesubpages' => 'Kaŝi subpaĝojn',
	'limit' => 'Limo',
	'page' => 'Paĝo',
	'redirect' => 'Ĉu alidirektilo?',
	'output' => 'Eligo',
	'update' => 'Ĝisdatigi',
	'tools-delete' => 'forigi',
	'tools-links' => 'ligiloj',
	'tools-subject' => 'temo',
	'tools-hist' => 'hist',
	'tools-curr' => 'aktu',
	'tools-globalusage' => 'globalusage',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(selecciona primero un wiki)',
	'hideredirects' => 'Ocultar redirecciones',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Límite',
	'page' => 'Página',
	'redirect' => '¿Es redirección?',
	'output' => 'Salida',
	'update' => 'Actualizar',
	'tools-delete' => 'eliminar',
	'tools-links' => 'enlaces',
	'tools-subject' => 'asunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpieza de páginas de discusión huérfanas con $1',
	'noresults' => 'Ninguna página de discusión huérfana en este wiki, en este espacio de nombres coinciden con tu configuración.',
	'resultslimited' => 'Los resultados se limitan a $1 páginas.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'select-wiki-first' => '(kõigepealt vali viki)',
	'hideredirects' => 'Peida ümbersuunamised',
	'hidesubpages' => 'Peida alamleheküljed',
	'limit' => 'Piirang',
	'page' => 'Lehekülg',
	'redirect' => 'Ümbersuunamine?',
	'output' => 'Väljund',
	'update' => 'Värskenda',
	'tools-delete' => 'kustuta',
	'tools-links' => 'lingid',
	'tools-subject' => 'lehekülg',
	'tools-hist' => 'ajal',
	'tools-curr' => 'uusim versioon',
	'tools-globalusage' => 'globaalne kasutus',
	'deletesummary' => 'Orbarutelu eemaldatud tööriista $1 abil',
	'noresults' => 'Selle viki selles nimeruumis ei vasta sinu sätetele ükski orbarutelu.',
	'resultslimited' => 'Lehekülje kohta näidatakse $1 tulemust.',
);

/** Basque (euskara)
 * @author An13sa
 * @author Xabier Armendaritz
 */
$messages['eu'] = array(
	'title' => 'OrphanTalk2',
	'hideredirects' => 'Birzuzenketak ezkutatu',
	'hidesubpages' => 'Azpiorrialdeak ezkutatu',
	'limit' => 'Muga',
	'page' => 'Orrialdea',
	'redirect' => 'Birzuzenketa da?',
	'update' => 'Eguneratu',
	'tools-delete' => 'ezabatu',
	'tools-links' => 'loturak',
	'tools-subject' => 'gaia',
	'tools-hist' => 'hist',
	'tools-curr' => 'orain',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'title' => 'بحث‌یتیم۲',
	'select-wiki-first' => '(ابتدا یک ویکی را انتخاب کنید)',
	'hideredirects' => 'پنهان‌کردن تغییر مسیرها',
	'hidesubpages' => 'پنهان‌کردن زیرصفحه‌ها',
	'limit' => 'تعداد',
	'page' => 'صفحه',
	'redirect' => 'تغییر مسیر است؟',
	'output' => 'خروجی',
	'update' => 'به روز رسانی',
	'tools-delete' => 'حذف',
	'tools-links' => 'پیوندها',
	'tools-subject' => 'عنوان',
	'tools-hist' => 'تاریخچه',
	'tools-curr' => 'فعلی',
	'tools-globalusage' => 'استفادهٔ سراسری',
	'deletesummary' => 'تمیزکردن صفحات بحث یتیم از طریق $1',
	'noresults' => 'هیچ صفحهٔ بحث یتیمی در این ویکی و در این فضای نام، مطابق با تنظیمات شما وجود ندارد.',
	'resultslimited' => 'نتایج به $1 صفحه محدود بود.',
);

/** Finnish (suomi)
 * @author Olli
 * @author Silvonen
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(valitse ensin wiki)',
	'hideredirects' => 'Piilota ohjaukset',
	'hidesubpages' => 'Piilota alasivut',
	'limit' => 'Raja',
	'page' => 'Sivu',
	'redirect' => 'Onko uudelleenohjaus?',
	'output' => 'Ulostulo',
	'update' => 'Päivitä',
	'tools-delete' => 'poista',
	'tools-links' => 'linkit',
	'tools-subject' => 'aihe',
	'tools-hist' => 'historia',
	'tools-curr' => 'nyk.',
	'deletesummary' => 'Yksinäisten keskustelusivujen siivous $1-työkalulla',
	'noresults' => 'Asetuksesi eivät vastanneet yhtään yksinäistä keskustelusivua tässä wikissä ja tässä nimiavaruudessa.',
	'resultslimited' => 'Tulokset rajoitettiin $1 sivuun.',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'select-wiki-first' => '(vel eina wikii fyrst)',
	'hideredirects' => 'Fjal snarvegir',
	'hidesubpages' => 'Fjal undirsíður',
	'limit' => 'Mark',
	'page' => 'Síða',
	'redirect' => 'Er snarvegur?',
	'output' => 'Útdáta',
	'update' => 'Dagfør',
	'tools-delete' => 'strika',
	'tools-links' => 'leinkjur',
	'tools-subject' => 'evni',
	'tools-hist' => 'søga',
	'tools-curr' => 'nú',
	'tools-globalusage' => 'global nýtsla',
	'deletesummary' => 'Ruddar upp í foreldraleysum kjaksíðum via $1',
	'noresults' => 'Ongar foreldraleyar kjaksíður á hesi wiki í hesum navnarúminum samsvaraðu tínum innstillingum.',
	'resultslimited' => 'Úrslitini vóru avmarkaði til $1 síður.',
);

/** French (français)
 * @author Crochet.david
 * @author Jean-Frédéric
 * @author Od1n
 */
$messages['fr'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(sélectionnez d’abord un wiki)',
	'hideredirects' => 'Masquer les redirections',
	'hidesubpages' => 'Masquer les sous-pages',
	'limit' => 'Limite',
	'page' => 'Page',
	'redirect' => 'Est une redirection ?',
	'output' => 'Sortie',
	'update' => 'Mettre à jour',
	'tools-delete' => 'supprimer',
	'tools-links' => 'liens',
	'tools-subject' => 'sujet',
	'tools-hist' => 'hist',
	'tools-curr' => 'actu',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Nettoyage des pages de discussion orphelines par $1',
	'noresults' => 'Aucune page de discussion orpheline dans ce wiki dans cet espace de nommage correspondant à votre configuration.',
	'resultslimited' => 'Les résultats ont été limités à $1 pages.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(chouèsésséd d’abôrd un vouiqui)',
	'hideredirects' => 'Cachiér les redirèccions',
	'hidesubpages' => 'Cachiér les sot-pâges',
	'limit' => 'Limita',
	'page' => 'Pâge',
	'redirect' => 'Est na redirèccion ?',
	'output' => 'Sortia',
	'update' => 'Betar a jorn',
	'tools-delete' => 'suprimar',
	'tools-links' => 'lims',
	'tools-subject' => 'sujèt',
	'tools-hist' => 'hist',
	'tools-curr' => 'ora',
	'tools-globalusage' => 'usâjo globâl',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'page' => 'Leathanach',
	'tools-delete' => 'scrios',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(seleccione primeiro un wiki)',
	'hideredirects' => 'Agochar as redireccións',
	'hidesubpages' => 'Agochar as subpáxinas',
	'limit' => 'Límite',
	'page' => 'Páxina',
	'redirect' => 'É unha redirección?',
	'output' => 'Saída',
	'update' => 'Actualizar',
	'tools-delete' => 'borrar',
	'tools-links' => 'ligazóns',
	'tools-subject' => 'asunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'actual',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpando as páxinas de conversa orfas mediante $1',
	'noresults' => 'Non hai páxina de conversa orfas neste espazo de nomes que coincidisen coa configuración.',
	'resultslimited' => 'Os resultados limítanse a $1 páxinas.',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'hidesubpages' => 'પેટાપૃષ્ઠ છુપાવો',
	'limit' => 'મર્યાદા',
	'page' => 'પૃષ્ઠ',
	'output' => 'ઉત્પાદન',
	'update' => 'સુધારો',
	'tools-delete' => 'હટાવો',
	'tools-links' => 'કડીઓ',
	'tools-subject' => 'વિષય',
	'tools-hist' => 'ઇતિહાસ',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'OrphanTalk2 – ניקוי דפי שיחה מיותמים',
	'select-wiki-first' => '(יש לבחור אתר ויקי קודם)',
	'hideredirects' => 'הסתרת הפניות',
	'hidesubpages' => 'הסתרת דפי-משנה',
	'limit' => 'מגבלה',
	'page' => 'דף',
	'redirect' => 'האם זו הפניה?',
	'output' => 'פלט',
	'update' => 'עדכון',
	'tools-delete' => 'מחיקה',
	'tools-links' => 'קישורים',
	'tools-subject' => 'נושא',
	'tools-hist' => 'היסטוריה',
	'tools-curr' => 'נוכחי',
	'tools-globalusage' => 'שימוש בכל המיזמים',
	'deletesummary' => 'ניקוי דפי משתמש מיותמים באמצעות $1',
	'noresults' => 'אין דפי שיחה מיותמים באתר הוויקי הזה במרחב השם הזה שמתאימים להגדרות שלך.',
	'resultslimited' => 'התוצאות הוגבלו ל־$1 דפים.',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'title' => 'एकाकी-वार्ता 2',
	'select-wiki-first' => '(पहले एक विकी चुनें)',
	'hideredirects' => 'पुनर्निर्देश छुपाएँ',
	'hidesubpages' => 'उपपृष्ठ छुपाएँ',
	'limit' => 'सीमा',
	'page' => 'पृष्ठ',
	'redirect' => 'पुनर्निर्देश है?',
	'output' => 'आउटपुट',
	'update' => 'अद्यतन',
	'tools-delete' => 'हटाएँ',
	'tools-links' => 'कड़ियाँ',
	'tools-subject' => 'सामग्री पृष्ठ',
	'tools-hist' => 'इतिहास',
	'tools-curr' => 'चालू',
	'tools-globalusage' => 'वैश्विक प्रयोग',
	'deletesummary' => '$1 द्वारा एकाकी वार्ता पृष्ठ हटाया जा रहा है',
	'noresults' => 'इस विकी पर इस नामस्थान में आपकी दी सेटिंग्स से मेल खाते कोई एकाकी वार्ता पृष्ठ नहीं हैं।',
	'resultslimited' => 'परिणाम $1 की सीमा के अंदर रखे गए हैं',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(prvo izaberite wiki)',
	'hideredirects' => 'Sakrij preusmjeravanja',
	'hidesubpages' => 'Sakrij podstranice',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'redirect' => 'Je li preusmjerena?',
	'output' => 'Odredište',
	'update' => 'Osvježi',
	'tools-delete' => 'izbriši',
	'tools-links' => 'poveznice',
	'tools-subject' => 'naslov',
	'tools-hist' => 'pov',
	'tools-curr' => 'sad',
	'tools-globalusage' => 'globalna uporaba',
	'deletesummary' => 'Čišćenje stranica za razgovor siročad preko $1',
	'noresults' => 'Niti jedna stranica za razgovor siročad na ovom wikiju u ovom imenskom prostoru ne odgovara vašim postavkama.',
	'resultslimited' => 'Rezultati su ograničeni na $1 stranica.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(wubjer najprjedy wiki)',
	'hideredirects' => 'Daleposrědkowanja schować',
	'hidesubpages' => 'Podstrony schować',
	'limit' => 'Limit',
	'page' => 'Strona',
	'redirect' => 'Je dalesposrědkowanje?',
	'output' => 'Wudaće',
	'update' => 'Aktualizować',
	'tools-delete' => 'zhašeć',
	'tools-links' => 'wotkazy',
	'tools-subject' => 'tema',
	'tools-hist' => 'wersije',
	'tools-curr' => 'aktualna wersija',
	'tools-globalusage' => 'globalne wužiwanje',
	'deletesummary' => 'Wuprózdnjenje wosyroćenych diskusijnych stronow přez $1',
	'noresults' => 'Žane wosyroćene diskusijne strony na tutym wikiju w tutym mjenowym rumje njejsu wašim nastajenjam wotpowědowali.',
	'resultslimited' => 'Wuslědki buchu na $1 stronow wobmjezowane.',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(előbb válassz egy wikit)',
	'hideredirects' => 'Átirányítások elrejtése',
	'hidesubpages' => 'Allapok elrejtése',
	'limit' => 'Korlát',
	'page' => 'Lap',
	'redirect' => 'Átirányítás?',
	'output' => 'Kimenet',
	'update' => 'Frissítés',
	'tools-delete' => 'törlés',
	'tools-links' => 'hivatkozások',
	'tools-subject' => 'megtekintés',
	'tools-hist' => 'laptörténet',
	'tools-curr' => 'akt',
	'tools-globalusage' => 'globális használat',
	'deletesummary' => 'Árva vitalapok törlése az $1 segítségével',
	'noresults' => 'Ebben a névtérben egyetlen vitalap sem felel meg a megadott beállításoknak.',
	'resultslimited' => 'Az eredmények száma $1 db lapra lett korlátozva.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(selige primo un wiki)',
	'hideredirects' => 'Celar redirectiones',
	'hidesubpages' => 'Celar subpaginas',
	'limit' => 'Limite',
	'page' => 'Pagina',
	'redirect' => 'Es redirection?',
	'output' => 'Resultato',
	'update' => 'Actualisar',
	'tools-delete' => 'deler',
	'tools-links' => 'ligamines',
	'tools-subject' => 'subjecto',
	'tools-hist' => 'hist',
	'tools-curr' => 'actu',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Radimento de paginas de discussion orphane via $1',
	'noresults' => 'Nulle pagina de discussion orphane in iste wiki e in iste spatio de nomines correspondeva a tu configurationes.',
	'resultslimited' => 'Le resultatos ha essite limitate a $1 paginas.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dahulu)',
	'hideredirects' => 'Sembunyikan pengalihan',
	'hidesubpages' => 'Sembunyikan subhalaman',
	'limit' => 'Batasan',
	'page' => 'Halaman',
	'redirect' => 'Pengalihan?',
	'output' => 'Keluaran',
	'update' => 'Mutakhirkan',
	'tools-delete' => 'hapus',
	'tools-links' => 'pranala',
	'tools-subject' => 'subyek',
	'tools-hist' => 'versi',
	'tools-curr' => 'sekarang',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Membersihkan halaman pembicaraan yatim melalui $1',
	'noresults' => 'Tidak ada halaman pembicaraan yatim di wiki ini dalam ruang nama ini yang sesuai dengan pengaturan Anda.',
	'resultslimited' => 'Hasil dibatasi hingga $1 halaman.',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'limit' => 'Érúrú',
	'page' => 'Ihü',
	'tools-hist' => 'akíkómbu',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'select-wiki-first' => '(umuna nga agpili ti wiki)',
	'hideredirects' => 'Ilemmeng dagiti baw-ing',
	'hidesubpages' => 'Ilemmeng dagiti subpanid',
	'limit' => 'Patingga',
	'page' => 'Panid',
	'redirect' => 'Baw-ing kadi?',
	'output' => 'Maiparuar',
	'update' => 'Pabaruen',
	'tools-delete' => 'ikkaten',
	'tools-links' => 'dagiti silpo',
	'tools-subject' => 'suheto',
	'tools-hist' => 'saritaan',
	'tools-curr' => 'agdama',
	'tools-globalusage' => 'sangalubongan a panag-usar',
	'deletesummary' => 'Agdaldalus kadagiti naulila a pampanid babaen ti $1',
	'noresults' => 'Awan dagiti naulila a pampanid ti tungtungan iti daytoy a wiki iti daytoy a nagan ti espasio a maipada kadagiti inyasentarmo',
	'resultslimited' => 'Dagiti resulta ket naipatingga iti $1 a pampanid.',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'page' => 'ОагIув',
	'tools-delete' => 'дIадакха',
	'tools-links' => 'Iинкаш',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Nemo bis
 * @author Valepert
 * @author ZioNicco
 */
$messages['it'] = array(
	'title' => 'DiscussioneOrfana2',
	'select-wiki-first' => '(prima scegli un wiki)',
	'hideredirects' => 'Nascondi redirect',
	'hidesubpages' => 'Nascondi le sottopagine',
	'limit' => 'Limite',
	'page' => 'Pagina',
	'redirect' => 'È un redirect?',
	'output' => 'Risultato',
	'update' => 'Aggiorna',
	'tools-delete' => 'cancella',
	'tools-links' => 'collegamenti',
	'tools-subject' => 'oggetto',
	'tools-hist' => 'cron',
	'tools-curr' => 'corr',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Pulizia pagine di discussione orfane con $1',
	'noresults' => 'Nessuna corrispondenza di pagine orfane in questo wiki, e per questo namespace, con i criteri indicati.',
	'resultslimited' => 'I risultati sono stati limitati a $1 pagine.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(まずウィキを選択)',
	'hideredirects' => 'リダイレクトを隠す',
	'hidesubpages' => '下位ページを隠す',
	'limit' => '制限',
	'page' => 'ページ',
	'redirect' => 'リダイレクト?',
	'output' => '出力',
	'update' => '更新',
	'tools-delete' => '削除',
	'tools-links' => 'リンク',
	'tools-subject' => '件名',
	'tools-hist' => '履歴',
	'tools-curr' => '最新',
	'resultslimited' => '結果は $1 ページに制限されています。',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dhisik)',
	'hideredirects' => 'Dhelikna alihan',
	'hidesubpages' => 'Dhelikna subkaca',
	'limit' => 'Wates',
	'page' => 'Kaca',
	'redirect' => 'Alihaké?',
	'output' => 'Weton',
	'update' => 'Anyari',
	'tools-delete' => 'busak',
	'tools-links' => 'pranala',
	'tools-subject' => 'jejer',
	'tools-hist' => 'riwayat',
	'tools-curr' => 'saiki',
	'tools-globalusage' => 'panganggoansakjagat',
	'deletesummary' => 'Ngresiki kaca guneman yatim liwat $1',
	'resultslimited' => 'Asil diwatesi mung $1 kaca.',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'select-wiki-first' => '(ჯერ აირჩიეთ ვიკი)',
	'limit' => 'ლიმიტი',
	'update' => 'განახლება',
	'tools-delete' => 'წაშლა',
	'tools-links' => 'ბმულები',
	'tools-subject' => 'თემა',
	'tools-hist' => 'ისტორია',
	'tools-curr' => 'მიმდინარე',
	'tools-globalusage' => 'გლობალური გამოყენება',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'select-wiki-first' => '(ជ្រើសរើសវិគីមួយសិន)',
	'hideredirects' => 'លាក់ការបញ្ជូនបន្ត',
	'hidesubpages' => 'លាក់ទំព័ររង',
	'limit' => 'កំហិត',
	'page' => 'ទំព័រ',
	'redirect' => 'ជាការបញ្ជូនបន្ត?',
	'update' => 'បន្ទាន់សម័យ',
	'tools-delete' => 'លុបចោល',
	'tools-links' => 'តំណ​ភ្ជាប់',
	'tools-subject' => 'ប្រធានបទ​',
	'tools-hist' => 'ប្រវត្តិ',
	'tools-curr' => 'បច្ចុប្បន្ន',
	'tools-globalusage' => 'បំរើបំរាស់សាកល',
	'deletesummary' => 'សំអាតទំព័រពិភាក្សាដែលកំព្រាតាមរយៈ $1',
	'noresults' => 'គ្មានទំព័រពិភាក្សាកំព្រានៅលើវិគីនេះ ក្នុងប្រភេទបែបនេះ ដែលត្រូវគ្នានឹងការកំណត់របស់អ្នកទេ។',
	'resultslimited' => 'លទ្ធផលត្រូវបានដាក់កំហិតត្រឹម $1 ទំព័រ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'title' => 'ಆರ್ಫನ್‌ಟಾಕ್೨',
	'select-wiki-first' => '(ಮೊದಲು ಒಂದು ವಿಕಿಯನ್ನು ಆಯ್ದುಕೊಳ್ಳಿ)',
	'hideredirects' => 'ಪುನರ್ನಿದೇಶನಗಳನ್ನು ಅಡಗಿಸಿ',
	'hidesubpages' => 'ಉಪಪುಟಗಳನ್ನು ಅಡಗಿಸಿ',
	'limit' => 'ಮಿತಿ',
	'page' => 'ಪುಟ',
	'redirect' => 'ಪುನರ್ನಿರ್ದೇಶನವೆ?',
	'output' => 'ಉತ್ಪಾದನೆ',
	'update' => 'ಬದಲಿಸಬೇಕೆ?',
	'tools-delete' => 'ಅಳಿಸು',
	'tools-links' => 'ಕೊಂಡಿ',
	'tools-subject' => 'ವಿಷಯ',
	'tools-hist' => 'ಇತಿಹಾಸ',
	'tools-curr' => 'ಈಗಿನ',
	'tools-globalusage' => 'ಸಮಗ್ರ ಬಳಕೆ',
	'deletesummary' => '$1 ಮೂಲಕ ಅನಾಥವಾದ ಚರ್ಚಾಪುಟಗಳನ್ನು ಶುದ್ಧಗೊಳಿಸಲಾಗುತ್ತಿದೆ',
	'noresults' => 'ನಿಮ್ಮ ವ್ಯವಸ್ಥೆಗೆ ಹೋಲುವಂಥ ಅನಾಥ ಚರ್ಚಾ ಪುಟಗಳು ಈ ವಿಕಿಯಲ್ಲಿ ಈ ನಾಮವರ್ಗದಲ್ಲಿ ಸಿಗಲಿಲ್ಲ.',
	'resultslimited' => 'ಫಲಿತಾಂಶಗಳು $1 ಪುಟಕ್ಕೆ ಸೀಮಿತಗೊಂಡಿದ್ದವು.',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(먼저 위키 선택)',
	'hideredirects' => '넘겨주기 숨기기',
	'hidesubpages' => '하위 문서 숨기기',
	'limit' => '제한',
	'page' => '문서',
	'redirect' => '넘겨주기입니까?',
	'output' => '출력',
	'update' => '업데이트',
	'tools-delete' => '삭제',
	'tools-links' => '링크',
	'tools-subject' => '제목',
	'tools-hist' => '역사',
	'tools-curr' => '차이',
	'tools-globalusage' => '공통사용',
	'deletesummary' => '$1(을)를 통해 외톨이 토론 문서 정리',
	'noresults' => '이 위키에 설정에서 일치하는 이 이름공간에서 외톨이 토론 문서가 없습니다.',
	'resultslimited' => '결과는 문서 $1개로 제한했습니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Alleinjeblevve Klaafsigge 2',
	'select-wiki-first' => '(donn et eez e Wiki ußsöhke)',
	'hideredirects' => 'Ömleidunge fott lohße',
	'hidesubpages' => 'Ongersigge fott lohße',
	'limit' => 'Donn de Aanzahl en dä Leß bejränze op',
	'page' => 'Klaafsigg',
	'redirect' => 'Ömleidong?',
	'output' => 'Dat kohm eruß:',
	'update' => 'Op der neuste Shtand bränge',
	'tools-delete' => 'schmiiß fott!',
	'tools-links' => 'Lengks',
	'tools-subject' => 'Sigg',
	'tools-hist' => 'Versione',
	'tools-curr' => 'läz Änderong',
	'tools-globalusage' => 'En alle Wikis',
	'deletesummary' => 'Alleinjeblevve Klaafsigg fott jeschmeße met „$1“.',
	'noresults' => 'Kein alleinjeblevve Klaafsigge en däm Wiki en däm Appachtemang paße zoh Dinge Enshtällonge.',
	'resultslimited' => 'Heh di Leß es bejränz op {{PLURAL:$1|ein Sigg|$1 Sigg|kein Sigge}}',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 * @author Ghybu
 */
$messages['ku-latn'] = array(
	'hideredirects' => 'Beralîkirinan veşêre',
	'hidesubpages' => 'Binrûpelan veşêre',
	'limit' => 'Sînor',
	'page' => 'Rûpel',
	'redirect' => 'Beralîkirin e?',
	'tools-delete' => 'jê bibe',
	'tools-links' => 'girêdan',
	'tools-hist' => 'dîro',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'page' => 'Pagina',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => "(sicht d'éischt eng Wiki eraus)",
	'hideredirects' => 'Viruleedunge verstoppen',
	'hidesubpages' => 'Ënnersäite verstoppen',
	'limit' => 'Limit',
	'page' => 'Säit',
	'redirect' => 'Ass et eng Viruleedung?',
	'output' => 'Resultat',
	'update' => 'Aktualiséieren',
	'tools-delete' => 'läschen',
	'tools-links' => 'Linken',
	'tools-subject' => 'Sujet',
	'tools-hist' => 'Versiounen',
	'tools-curr' => 'aktuell',
	'tools-globalusage' => 'Globale Gebrauch',
	'deletesummary' => 'Botze vu verweesten Diskussiouns-Säite mat $1',
	'noresults' => 'Keng Diskussiouns-Weese-Säit op dëser Wiki an dësem Nummraum entsprécht Ären Astellungen.',
	'resultslimited' => "D'Resultater goufen op $1 Säite limitéiert.",
);

/** Lithuanian (lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pirma pasirinkite wiki)',
	'hideredirects' => 'Slėpti peradresavimus',
	'hidesubpages' => 'Slėpti antrinius puslapius',
	'limit' => 'Limitas',
	'page' => 'Puslapis',
	'redirect' => 'Nukreipiantysis?',
	'output' => 'Išvestis',
	'update' => 'Atnaujinti',
	'tools-delete' => 'ištrinti',
	'tools-links' => 'nuorodos',
	'tools-subject' => 'tema',
	'tools-hist' => 'ist',
	'tools-curr' => 'esamas',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Valomi nereikalingi aptarimo puslapiai, naudojant $1',
	'noresults' => 'Nerasta nenaudojamų aptarimų puslapių šioje wiki vardų srityje pagal jūsų nustatymus.',
	'resultslimited' => 'Rezultatų limitas buvo $1 puslapių.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'hidesubpages' => 'Paslēpt apakšlapas',
	'page' => 'Lapa',
	'redirect' => 'Ir pāradresācija?',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(piliah wiki dulu)',
	'hideredirects' => 'Suruakan pangaliahan',
	'hidesubpages' => 'Suruakan sublaman',
	'limit' => 'Bateh',
	'page' => 'Laman',
	'redirect' => 'Pangaliahan?',
	'output' => 'Hasil',
	'update' => 'Pabarui',
	'tools-delete' => 'Hapuih',
	'tools-links' => 'pautan',
	'tools-subject' => 'subyek',
	'tools-hist' => 'versi',
	'tools-curr' => 'kini',
	'tools-globalusage' => 'panggunoan global',
	'deletesummary' => 'Barasiahkan laman rundiang yatim malalui $1',
	'noresults' => 'Indak ado laman rundiang yatim pado wiki ko dalam ruang namo nan sasuai pangaturan.',
	'resultslimited' => 'Hasil babateh sampai $1 laman.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(најпрвин изберете вики)',
	'hideredirects' => 'Скриј пренасочувања',
	'hidesubpages' => 'Скриј потстраници',
	'limit' => 'Највеќе до',
	'page' => 'Страница',
	'redirect' => 'Пренасочување е?',
	'output' => 'Извод',
	'update' => 'Поднови',
	'tools-delete' => 'избриши',
	'tools-links' => 'врски',
	'tools-subject' => 'наслов',
	'tools-hist' => 'истор',
	'tools-curr' => 'тек',
	'tools-globalusage' => 'глобална упот.',
	'deletesummary' => 'Бришење на осамени страници за разговор преку $1',
	'noresults' => 'На ова вики нема осамени страници за разговор во овој именски простор што соодветствуваат на вашите поставки.',
	'resultslimited' => 'Резултатите беа ограничени на $1 страници',
);

/** Malayalam (മലയാളം)
 * @author Akhilan
 * @author Praveenp
 */
$messages['ml'] = array(
	'limit' => 'പരിധി',
	'page' => 'താൾ',
	'output' => 'ഔട്ട്പുട്ട്',
	'update' => 'പുതുക്കുക',
	'tools-delete' => 'മായ്ക്കുക',
	'tools-links' => 'കണ്ണികൾ',
	'tools-subject' => 'വിഷയം',
	'tools-hist' => 'നാൾവഴി',
	'tools-curr' => 'നിലവിൽ',
	'tools-globalusage' => 'ആഗോള ഉപയോഗം',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(pilih wiki dahulu)',
	'hideredirects' => 'Sorokkan lencongan',
	'hidesubpages' => 'Sorokkan sublaman',
	'limit' => 'Had',
	'page' => 'Halaman',
	'redirect' => 'Lencongan?',
	'output' => 'Output',
	'update' => 'Kemas kini',
	'tools-delete' => 'hapuskan',
	'tools-links' => 'pautan',
	'tools-subject' => 'subjek',
	'tools-hist' => 'sej',
	'tools-curr' => 'kini',
	'tools-globalusage' => 'kegunaan global',
	'deletesummary' => 'Membersihkan laman perbincangan yatim melalui $1',
	'noresults' => 'Tiada laman perbincangan yatim di wiki ini dalam ruang nama ini yang sepadan dengan tetapan anda.',
	'resultslimited' => 'Hasil carian terhad kepada $1 laman.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'title' => 'DiskussjoniOrfni2',
	'select-wiki-first' => '(l-ewwel agħżel wiki)',
	'hideredirects' => 'Aħbi rindirizzi',
	'hidesubpages' => 'Aħbi sottopaġni',
	'limit' => 'Limitu',
	'page' => 'Paġna',
	'redirect' => 'Huwa rindirizz?',
	'output' => 'Riżultat',
	'update' => 'Aġġorna',
	'tools-delete' => 'ħassar',
	'tools-links' => 'ħoloq',
	'tools-subject' => 'suġġett',
	'tools-hist' => 'kron',
	'tools-curr' => 'kurr',
	'tools-globalusage' => 'użuglobali',
	'deletesummary' => "Tindif ta' paġni ta' diskussjoni orfni permezz ta' $1",
	'resultslimited' => 'Ir-riżultati ġew limitati għal $1 paġni.',
);

/** Norwegian Bokmål (norsk bokmål)
 */
$messages['nb'] = array(
	'title' => 'Foreldreløse diskusjonssider 2',
	'select-wiki-first' => '(velg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grense',
	'page' => 'Side',
	'redirect' => 'Er omdirigering?',
	'output' => 'Utdata',
	'update' => 'Oppdater',
	'tools-delete' => 'slett',
	'tools-links' => 'lenker',
	'tools-subject' => 'subjekt',
	'tools-hist' => 'hist',
	'tools-curr' => 'nå',
	'tools-globalusage' => 'global bruk',
	'deletesummary' => 'Renser opp i foreldreløse diskusjonssider via $1',
	'noresults' => 'Det var ingen foreldreløse diskusjonssider på denne wikien som passet med de valgte innstillingene.',
	'resultslimited' => 'Resultatene ble begrenset til $1 sider.',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'limit' => 'सीमा',
	'page' => 'पौ',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'WeesOverleg2',
	'select-wiki-first' => '(selecteer eerst een wiki)',
	'hideredirects' => 'Doorverwijzingen verbergen',
	'hidesubpages' => "Subpagina's verbergen",
	'limit' => 'Limiet',
	'page' => 'Pagina',
	'redirect' => 'Is doorverwijzing?',
	'output' => 'Uitvoer',
	'update' => 'Bijwerken',
	'tools-delete' => 'verwijderen',
	'tools-links' => 'koppelingen',
	'tools-subject' => 'pagina',
	'tools-hist' => 'gesch.',
	'tools-curr' => 'huidige',
	'tools-globalusage' => 'globaal gebruik',
	'deletesummary' => 'Opruimen van weesoverleg via $1',
	'noresults' => "Er zijn geen weesoverlegpagina's binnen deze naamruimte in deze wiki die aan uw instellingen voldoen.",
	'resultslimited' => "Er worden maximaal $1 pagina's weergegeven.",
);

/** no (no)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'title' => 'Foreldreløse diskusjonssider 2',
	'select-wiki-first' => '(velg en wiki først)',
	'hideredirects' => 'Skjul omdirigeringer',
	'hidesubpages' => 'Skjul undersider',
	'limit' => 'Grense',
	'page' => 'Side',
	'redirect' => 'Er omdirigering?',
	'output' => 'Utdata',
	'update' => 'Oppdater',
	'tools-delete' => 'slett',
	'tools-links' => 'lenker',
	'tools-subject' => 'subjekt',
	'tools-hist' => 'hist',
	'tools-curr' => 'nå',
	'tools-globalusage' => 'global bruk',
	'deletesummary' => 'Renser opp i foreldreløse diskusjonssider via $1',
	'noresults' => 'Det var ingen foreldreløse diskusjonssider på denne wikien som passet med de valgte innstillingene.',
	'resultslimited' => 'Resultatene ble begrenset til $1 sider.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'limit' => 'Limit',
	'page' => 'Pagina',
	'output' => 'Sortida',
	'update' => 'Metre a jorn',
	'tools-delete' => 'suprimir',
	'tools-links' => 'ligams',
	'tools-subject' => 'Subjècte',
	'tools-hist' => 'ist',
	'tools-curr' => 'actu',
	'tools-globalusage' => 'globalusage',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(ଆଗ ଏକ ଉଇକି ବାଛନ୍ତୁ)',
	'hideredirects' => 'ପୁନଃପ୍ରେରଣସମୂହକୁ ଲୁଚାଇବେ',
	'hidesubpages' => 'ଉପପୃଷ୍ଠାଗୁଡିକୁ ଲୁଚାଇବେ',
	'limit' => 'ସୀମା',
	'page' => 'ପୃଷ୍ଠା',
	'redirect' => 'ଲେଉଟାଣି ଅଛି କି ?',
	'output' => 'ଫଳାଫଳ',
	'update' => 'ଅପଡେଟ କରିବେ',
	'tools-delete' => 'ଲିଭାଇବେ',
	'tools-links' => 'ଲିଙ୍କଗୁଡିକ',
	'tools-subject' => 'ବିଷୟ',
	'tools-hist' => 'ଶେଷ',
	'tools-curr' => 'ବର୍ତମାନ',
	'tools-globalusage' => 'ସମସ୍ତ ବ୍ୟବହାର',
	'resultslimited' => 'ଫଳାଫଳ ଗୁଡିକ $1ପୃଷ୍ଠା ଭିତରେ ସୀମାତୀତ ହେଲା ।',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'limit' => 'Limit',
	'page' => 'Blatt',
	'update' => 'Druffschridde',
	'tools-delete' => 'verwische',
	'tools-links' => 'Gleecher',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'tools-delete' => 'lesche',
);

/** Polish (polski)
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(najpierw wybierz wiki)',
	'hideredirects' => 'Ukryj przekierowania',
	'hidesubpages' => 'Ukryj podstrony',
	'limit' => 'Ograniczenie',
	'page' => 'Strona',
	'redirect' => 'Przekierowanie?',
	'output' => 'Wynik',
	'update' => 'Aktualizuj',
	'tools-delete' => 'usuń',
	'tools-links' => 'linki',
	'tools-subject' => 'temat',
	'tools-hist' => 'hist.',
	'tools-curr' => 'bież.',
	'tools-globalusage' => 'globalne wykorzystanie pliku',
	'deletesummary' => 'Usuwanie osieroconych stron dyskusji przy użyciu $1',
	'noresults' => 'Na tej wiki nie odnaleziono osieroconych stron dyskusji odpowiadających wybranemu zapytaniu dla tej przestrzeni nazw.',
	'resultslimited' => 'Wyniki zostały ograniczone do $1 stron.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(selession-a na wiki prima)',
	'hideredirects' => 'Stërma le ridiression',
	'hidesubpages' => 'Stërmé le sot-pàgine',
	'limit' => 'Lìmit',
	'page' => 'Pàgina',
	'redirect' => 'É-lo na ridiression?',
	'output' => 'Surtìa',
	'update' => 'Agiorna',
	'tools-delete' => 'scancelé',
	'tools-links' => 'anliure',
	'tools-subject' => 'soget',
	'tools-hist' => 'stòria',
	'tools-curr' => 'cor',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => 'Scancelassion ëd le pàgine ëd discussion orfanin-e via $1',
	'noresults' => 'Gnun-e pàgine ëd discussion orfanin-e dzora a sta wiki ant cost ëspassi nominal a corëspondo a soe ampostassion.',
	'resultslimited' => "J'arzultà a son stàit limità a $1 pàgine.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'limit' => 'بريد',
	'page' => 'مخ',
	'update' => 'اوسمهالول',
	'tools-delete' => 'ړنگول',
	'tools-links' => 'تړنې',
	'tools-subject' => 'موضوع',
	'tools-hist' => 'پېښليک',
	'tools-curr' => 'اوسنی',
	'tools-globalusage' => 'نړېواله کارېدنه',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Hamilton Abreu
 * @author Luckas
 */
$messages['pt'] = array(
	'title' => 'DiscussõesOrfãs2',
	'select-wiki-first' => '(primeiro selecione uma wiki)',
	'hideredirects' => 'Ocultar redirecionamentos',
	'hidesubpages' => 'Excluir subpáginas',
	'limit' => 'Limite',
	'page' => 'Página',
	'redirect' => 'Redirecionamento?',
	'output' => 'Resultados',
	'update' => 'Atualizar',
	'tools-delete' => 'eliminar',
	'tools-links' => 'links',
	'tools-subject' => 'Página',
	'tools-hist' => 'hist',
	'tools-curr' => 'act',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpeza de páginas de discussão orfãs, usando o $1',
	'noresults' => 'Não foram encontradas páginas de discussão orfãs neste espaço nominal desta wiki, que correspondam às suas especificações.',
	'resultslimited' => 'Os resultados foram limitados a $1 páginas.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 * @author Giro720
 * @author Luckas
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'title' => 'DiscussõesOrfãs2',
	'select-wiki-first' => '(primeiro selecione uma wiki)',
	'hideredirects' => 'Excluir redirecionamentos',
	'hidesubpages' => 'Ocultar subpáginas',
	'limit' => 'Limite',
	'page' => 'Página',
	'redirect' => 'É redirecionamento?',
	'output' => 'Saída',
	'update' => 'Atualizar',
	'tools-delete' => 'apagar',
	'tools-links' => 'links',
	'tools-subject' => 'assunto',
	'tools-hist' => 'hist',
	'tools-curr' => 'atu',
	'tools-globalusage' => 'uso global',
	'deletesummary' => 'Limpeza das páginas de discussão órfãs via $1',
	'noresults' => 'Não há páginas de discussão órfãs nesta wiki, este namespace coincide com sua configuração.',
	'resultslimited' => 'Os resultados se limitam a $1 páginas',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(alegeți un wiki mai întâi)',
	'hideredirects' => 'Ascunde redirecționările',
	'hidesubpages' => 'Ascunde subpaginile',
	'limit' => 'Limită',
	'page' => 'Pagină',
	'redirect' => 'Este redirecționare?',
	'output' => 'Date de ieșire',
	'update' => 'Actualizează',
	'tools-delete' => 'ștergere',
	'tools-links' => 'legături',
	'tools-subject' => 'subiect',
	'tools-hist' => 'istoric',
	'tools-curr' => 'vers. act.',
	'tools-globalusage' => 'utilizare globală',
	'deletesummary' => 'Ștergerea paginilor de discuții orfane folosind $1',
	'noresults' => 'Nicio pagină de discuții orfană aflată în acest spațiu de nume, pe acest wiki, nu se potrivește criteriilor dumneavoastră.',
	'resultslimited' => 'Rezultatele au fost limitate la $1 pagini.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => "(scacchie 'na uicchi apprime)",
	'hideredirects' => 'Scunne le redirezionaminde',
	'hidesubpages' => 'Scunne sottopàggene',
	'limit' => 'Limite',
	'page' => 'Pàgene',
	'redirect' => "Jè 'nu redirezionamende?",
	'output' => 'Resultate',
	'update' => 'Aggiorne',
	'tools-delete' => 'scangelle',
	'tools-links' => 'colleghe',
	'tools-subject' => 'suggette',
	'tools-hist' => 'cunde',
	'tools-curr' => 'corr',
	'tools-globalusage' => 'globalusage',
	'deletesummary' => "Pulizze le pàggene de le 'ngazzaminde senze attane cu $1",
	'noresults' => "Nisciuna pàgene de le 'ngazzaminde orfane sus a sta uicchi jndr'à stu namespace soddisfe le 'mbostaziune tune.",
	'resultslimited' => 'Resultate limitate a $1 pàggene.',
);

/** Russian (русский)
 * @author Askarmuk
 * @author Eleferen
 * @author Lvova
 */
$messages['ru'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(сначала выберите вики)',
	'hideredirects' => 'Скрыть перенаправления',
	'hidesubpages' => 'Скрыть подстраницы',
	'limit' => 'Ограничение',
	'page' => 'Страница',
	'redirect' => 'Это перенаправление?',
	'output' => 'Результат',
	'update' => 'Обновить',
	'tools-delete' => 'удалить',
	'tools-links' => 'ссылки',
	'tools-subject' => 'тема',
	'tools-hist' => 'история',
	'tools-curr' => 'текущ.',
	'tools-globalusage' => 'глобальное использование',
	'deletesummary' => 'Очистка обсуждения страниц-сирот через $1',
	'noresults' => 'В этой вики в заданных вами пространствах имён страниц обсуждения-сирот не найдено.',
	'resultslimited' => 'Результаты были ограничены $1 страницами.',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'title' => 'අනාථකතාබහ2',
	'select-wiki-first' => '(පළමුව විකියක් තෝරාගන්න)',
	'hideredirects' => 'යළියොමු සඟවන්න',
	'hidesubpages' => 'උපපිටු සඟවන්න',
	'limit' => 'සීමාව',
	'page' => 'පිටුව',
	'redirect' => 'යළි යොමුවක්ද?',
	'output' => 'ප්‍රතිදානය',
	'update' => 'යාවත්කාලීන කරන්න',
	'tools-delete' => 'මකන්න',
	'tools-links' => 'සබැඳි',
	'tools-subject' => 'විෂයය',
	'tools-hist' => 'ඉතිහාසය',
	'tools-curr' => 'වත්මන්',
	'tools-globalusage' => 'ගෝලීයභාවිතය',
	'resultslimited' => 'ප්‍රතිඑල $1 පිටු වෙත සීමා කර ඇත.',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title' => 'OsiroteliPogovori2',
	'select-wiki-first' => '(najprej izberite wiki)',
	'hideredirects' => 'Skrij preusmeritve',
	'hidesubpages' => 'Skrij podstrani',
	'limit' => 'Omejitev',
	'page' => 'Stran',
	'redirect' => 'Je preusmeritev?',
	'output' => 'Izhod',
	'update' => 'Posodobi',
	'tools-delete' => 'izbriši',
	'tools-links' => 'povezave',
	'tools-subject' => 'zadeva',
	'tools-hist' => 'zgod',
	'tools-curr' => 'tren',
	'tools-globalusage' => 'globalnauporaba',
	'deletesummary' => 'Čiščenje osirotelih pogovornih strani preko $1',
	'noresults' => 'Nobena osirotela pogovorna stran na tem wikiju v tem imenskem prostoru ne ustreza vašim nastavitvam.',
	'resultslimited' => 'Rezultati so bili omejeni na $1 stran.',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => 'ka dooro wiki marka hore)', # Fuzzy
	'hideredirects' => 'Qari isbadalada',
	'hidesubpages' => 'Qari Bogogga faracyada ah',
	'limit' => 'Xad',
	'page' => 'Bogga',
	'redirect' => 'Ma dib u toosin baa?',
	'output' => 'Soo saare',
	'update' => 'Dib u howl galin',
	'tools-delete' => 'tirtir',
	'tools-links' => 'link',
	'tools-subject' => 'Mowduuc',
	'tools-hist' => 'taariikh',
	'tools-curr' => 'hadda',
	'tools-globalusage' => 'adeegsi guud',
	'deletesummary' => 'Ku nadiifinta bogagga cidlada ah $1',
	'noresults' => 'La ma helein wax u dhigma diyaarintaada bogga wada hadalka ee cidlada ah ee wiki iyo meel magacaan wadata.',
	'resultslimited' => 'Waxaa lagu soo koobay natiijooyinka $1 Bogagga.',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'hideredirects' => 'Fshih përcjelljet',
	'hidesubpages' => 'Fshih nënfaqet',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'Орфанток2',
	'select-wiki-first' => '(прво изаберите викију)',
	'hideredirects' => 'Сакриј преусмерења',
	'hidesubpages' => 'Сакриј подстранице',
	'limit' => 'Ограничење',
	'page' => 'Страница',
	'redirect' => 'Преусмерење',
	'output' => 'Одредиште',
	'update' => 'Ажурирај',
	'tools-delete' => 'обриши',
	'tools-links' => 'везе',
	'tools-subject' => 'наслов',
	'tools-hist' => 'ист',
	'tools-curr' => 'трен',
	'tools-globalusage' => 'употреба',
	'deletesummary' => 'Чишћење тајних страница за разговор преко $1',
	'noresults' => 'Ниједна тајна страница за разговор се не поклапа с поставкама у овом именском простору.',
	'resultslimited' => 'Резултати су ограничени на $1 страница.',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Orfantok2',
	'select-wiki-first' => '(prvo izaberite vikiju)',
	'hideredirects' => 'Sakrij preusmerenja',
	'hidesubpages' => 'Sakrij podstranice',
	'limit' => 'Ograničenje',
	'page' => 'Stranica',
	'redirect' => 'Preusmerenje',
	'output' => 'Odredište',
	'update' => 'Ažuriraj',
	'tools-delete' => 'obriši',
	'tools-links' => 'veze',
	'tools-subject' => 'naslov',
	'tools-hist' => 'ist',
	'tools-curr' => 'tren',
	'tools-globalusage' => 'upotreba',
	'deletesummary' => 'Čišćenje tajnih stranica za razgovor preko $1',
	'noresults' => 'Nijedna tajna stranica za razgovor se ne poklapa s postavkama u ovom imenskom prostoru.',
	'resultslimited' => 'Rezultati su ograničeni na $1 stranica.',
);

/** Swedish (svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(Välj en wiki först)',
	'hideredirects' => 'Göm omdirigeringar',
	'hidesubpages' => 'Dölj undersidor',
	'limit' => 'Begränsning',
	'page' => 'Sida',
	'redirect' => 'Är omdirigering?',
	'output' => 'Utdata',
	'update' => 'Uppdatera',
	'tools-delete' => 'radera',
	'tools-links' => 'länkar',
	'tools-subject' => 'ämne',
	'tools-hist' => 'hist',
	'tools-curr' => 'nu',
	'tools-globalusage' => 'global användning',
	'deletesummary' => 'Rensar upp bland föräldralösa diskussionssidor via $1',
	'noresults' => 'Inga föräldralösa diskussionssidor på denna wikin i denna namnrymden matchade dina inställningar.',
	'resultslimited' => 'Resultaten var begränsade till $1 sidor.',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'limit' => 'Kikomo',
	'page' => 'Ukurasa',
	'output' => 'Matokeo',
	'update' => 'Sasisha',
	'tools-delete' => 'futa',
	'tools-links' => 'viungo',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Sodabottle
 * @author செல்வா
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'select-wiki-first' => '(முதலில் ஒரு விக்கியைத் தெரியவும்)',
	'hideredirects' => 'வழிமாற்றுகளை மறை',
	'hidesubpages' => 'துனை பக்கங்களை மறை',
	'limit' => 'வரம்பு',
	'page' => 'பக்கம்',
	'redirect' => 'வழிமாற்றா?',
	'output' => 'வெளியீடு',
	'update' => 'புதுப்பி',
	'tools-delete' => 'நீக்கு',
	'tools-links' => 'இணைப்புகள்',
	'tools-subject' => 'பொருள்',
	'tools-hist' => 'வரலாறு',
	'tools-curr' => 'தற்போது',
	'tools-globalusage' => 'உலகளாவியப் பயண்பாடு',
	'resultslimited' => '$1 பக்கங்களுக்கு முடிவுகள் வரையறுக்கப்பட்டுள்ளன.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'select-wiki-first' => '(ముందుగా ఒక వికీని ఎంచుకోండి)',
	'hideredirects' => 'దారిమార్పులను దాచు',
	'hidesubpages' => 'ఉపపుటలను దాచు',
	'limit' => 'పరిమితి',
	'page' => 'పుట',
	'redirect' => 'దారిమార్పా?',
	'update' => 'తాజాకరించు',
	'tools-delete' => 'తొలగించండి',
	'tools-links' => 'లంకెలు',
	'tools-subject' => 'విషయం',
	'tools-hist' => 'చరిత్ర',
	'tools-curr' => 'ప్రస్తుత',
	'tools-globalusage' => 'సార్వత్రికవాడుక',
	'resultslimited' => 'ఫలితాలు $1 పుటలకు పరిమితం చేయబడ్డాయి.',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'limit' => 'Limite',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title' => 'Usapang Ulila 2',
	'select-wiki-first' => '(pumili muna ng isang wiki)',
	'hideredirects' => 'Itago ang mga pagpapapunta sa iba',
	'hidesubpages' => 'Itago ang kabahaging mga pahina',
	'limit' => 'Hanggahan',
	'page' => 'Pahina',
	'redirect' => 'Isang pagpapapunta sa iba?',
	'output' => 'Kinalabasan',
	'update' => 'Isapanahon',
	'tools-delete' => 'burahin',
	'tools-links' => 'mga kawing',
	'tools-subject' => 'paksa',
	'tools-hist' => 'kasaysayan',
	'tools-curr' => 'kasalukuyan',
	'tools-globalusage' => 'pandaigdigang paggamit',
	'deletesummary' => 'Nililini ang naulilang mga pahina ng usapan sa pamamagitan ng $1',
	'noresults' => 'Walang naulilang mga pahina ng usapan na tumugma sa mga pagtatakda mo sa wiking ito na nasa loob ng puwang ng pangalan na ito.',
	'resultslimited' => 'Ang mga kinalabasan ay nakahangga sa $1 mga pahina.',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title' => 'OrphanTalk2',
	'page' => 'Сәһифә',
	'output' => 'Нәтиҹә',
	'tools-delete' => 'рәдд кардеј',
	'tools-links' => 'сәбонон',
	'tools-subject' => 'мовзу',
	'tools-hist' => 'тарых',
	'tools-curr' => 'есәт.',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'title' => 'YalnızTartışma2',
	'select-wiki-first' => '(ilk olarak bir viki seçin)',
	'hideredirects' => 'Yönlendirmeleri gizle',
	'hidesubpages' => 'Alt sayfaları gizle',
	'limit' => 'Sınır',
	'page' => 'Sayfa',
	'redirect' => 'Yönlendirme mi?',
	'output' => 'Çıkış',
	'update' => 'Güncelle',
	'tools-delete' => 'sil',
	'tools-links' => 'bağlantılar',
	'tools-subject' => 'konu',
	'tools-hist' => 'geçmiş',
	'tools-curr' => 'günc',
	'tools-globalusage' => 'küresel kullanım',
	'deletesummary' => '$1 aracılığıyla sayfası silinmiş tartışma sayfaları temizleniyor',
	'noresults' => 'Bu vikinin bu ad alanındaki sayfası silinmiş hiçbir tartışma sayfası ayarlarınız ile eşleşmedi.',
	'resultslimited' => 'Sonuçlar, $1 sayfa ile sınırlandırıldı.',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'page' => 'ⵜⴰⵙⵏⴰ',
	'tools-delete' => 'ⵓⴽⵓⵙ',
	'tools-hist' => 'ⴰⵎⵣⵔⵓⵢ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'title' => 'يالغۇز سۆزلىشىش بېتى2',
	'select-wiki-first' => '(ئالدى بىلەن بىر ۋىكى تاللاڭ)',
	'hideredirects' => 'قايتا نىشانلاشنى يوشۇر',
	'hidesubpages' => 'تارماق بەتلەرنى يوشۇر',
	'limit' => 'چەك',
	'page' => 'بەت',
	'redirect' => 'قايتا نىشانلاشمۇ؟',
	'output' => 'چىقار',
	'update' => 'يېڭىلا',
	'tools-delete' => 'ئۆچۈر',
	'tools-links' => 'ئۇلانمالار',
	'tools-subject' => 'تېما',
	'tools-hist' => 'تارىخ',
	'tools-curr' => 'يېقىندا تۈزىتىلگەن نەشرى',
	'tools-globalusage' => 'پۈتكۈل دائىرىدە قوللان',
	'deletesummary' => '$1 ئارقىلىق يالغۇز سۆزلىشىش بېتىنى تازىلايدۇ',
	'noresults' => 'بۇ ۋىكى بەتتە سىزنىڭ تەڭشىكىڭىزگە ماس كېلىدىغان ئات بوشلۇقىدا يالغۇز سۆزلىشىش بېتى يوق:',
	'resultslimited' => 'نەتىجىلەر پەقەت $1 بەتلەرنىلا كۆرسىتىدۇ.',
);

/** Ukrainian (українська)
 * @author Base
 * @author DixonD
 * @author Тест
 */
$messages['uk'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(спершу оберіть вікі)',
	'hideredirects' => 'Сховати перенаправлення',
	'hidesubpages' => 'Приховати підсторінки',
	'limit' => 'Обмеження',
	'page' => 'Сторінка',
	'redirect' => 'Це перенаправлення?',
	'output' => 'Вивід',
	'update' => 'Оновити',
	'tools-delete' => 'вилучити',
	'tools-links' => 'посилання',
	'tools-subject' => 'тема',
	'tools-hist' => 'історія',
	'tools-curr' => 'остання',
	'tools-globalusage' => 'глобальне використання',
	'deletesummary' => 'Прибирання сторінок обговорень-сиріт за допомогою $1',
	'noresults' => 'У цій вікі в заданих Вами просторах назв не знайдено сторінок обговорень-сиріт.',
	'resultslimited' => 'Результати було обмежено $1 сторінками.',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 */
$messages['uz'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(oldin vikini tanlang)',
	'hideredirects' => 'Yoʻnaltirishlarni yashirish',
	'hidesubpages' => 'Ostsahifalarni yashirish',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'OrphanTalk2',
	'select-wiki-first' => '(trước tiên hãy chọn wiki)',
	'hideredirects' => 'Ẩn trang đổi hướng',
	'hidesubpages' => 'Ẩn trang con',
	'limit' => 'Tối đa',
	'page' => 'Trang',
	'redirect' => 'Có đổi hướng',
	'output' => 'Kết quả',
	'update' => 'Cập nhật',
	'tools-delete' => 'xóa',
	'tools-links' => 'liên kết',
	'tools-subject' => 'nội dung',
	'tools-hist' => 'sử',
	'tools-curr' => 'hiện',
	'tools-globalusage' => 'sử dụng toàn cầu',
	'deletesummary' => 'Dọn sạch các trang thảo luận mồ coi dùng $1',
	'noresults' => 'Không có trang thảo luận mồ coi nằm trong không gian tên này mà trùng với truy vấn của bạn.',
	'resultslimited' => 'Chỉ hiển thị $1 kết quả.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'title' => '孤立对话页2',
	'select-wiki-first' => '（先选择一个wiki）',
	'hideredirects' => '隐藏重定向',
	'hidesubpages' => '隐藏子页面',
	'limit' => '限制',
	'page' => '页面',
	'redirect' => '是重定向吗？',
	'output' => '输出',
	'update' => '更新',
	'tools-delete' => '删除',
	'tools-links' => '链入',
	'tools-subject' => '主页面',
	'tools-hist' => '历史',
	'tools-curr' => '最新修订',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立的对话页',
	'noresults' => '在该wiki上没有找到你设置的名字空间中的孤立对话页。',
	'resultslimited' => '结果只显示$1页面。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'title' => '孤立對話頁2',
	'select-wiki-first' => '（先選擇一個wiki）',
	'hideredirects' => '隱藏重定向頁',
	'hidesubpages' => '隱藏子頁面',
	'limit' => '限制',
	'page' => '頁面',
	'redirect' => '是重定向嗎？',
	'output' => '輸出',
	'update' => '更新',
	'tools-delete' => '已刪除',
	'tools-links' => '連結',
	'tools-subject' => '主旨',
	'tools-hist' => '歷史',
	'tools-curr' => '最新修訂',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立的討論頁',
	'noresults' => '以你設定搜尋，該維基的名字空間內沒有孤立的討論頁。',
	'resultslimited' => '結果只顯示$1頁。',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'title' => '孤立對話頁2',
	'select-wiki-first' => '（先選擇一個wiki）',
	'hideredirects' => '隱藏重定向',
	'hidesubpages' => '隱藏子頁面',
	'limit' => '限制',
	'page' => '頁面',
	'redirect' => '是否重定向',
	'output' => '輸出',
	'update' => '更新',
	'tools-delete' => '刪除',
	'tools-links' => '連結',
	'tools-hist' => '歷史',
	'tools-curr' => '最近',
	'tools-globalusage' => '全域使用',
	'deletesummary' => '使用$1清理孤立對話頁',
	'noresults' => '此wiki中此命名空間中沒有孤立談話頁匹配您的設定。',
	'resultslimited' => '結果只顯示$1頁面。',
);
