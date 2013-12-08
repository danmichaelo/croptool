<?php
/**
 * Interface messages for tool "Get Wiki API".
 *
 * @toolowner krinkle
 */

$url = '//toolserver.org/~krinkle/getWikiAPI.php';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' =>	'Get Wiki API', // Ignore
	'formats-heading' => 'Output formats',
	'input' => 'Input',
	'label-wikiids' => 'Wiki identifiers',
	'no-matches' => 'Nothing matched "$1"',
	'output' => 'Output for "$1"',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Krinkle
 */
$messages['qqq'] = array(
	'formats-heading' => 'This is the heading above the list of available formats to export/output to.',
	'input' => 'This is the heading above the input form.',
	'label-wikiids' => 'This form label is for the input field for the wiki identifiers. Users may type one or more identifiers here.

Identifiers can be a language code (e.g. \'de\' will assume the German Wikipedia), or a database code (enwiki_p for English Wikipedia), hostname (fr.wiktionary, optionally including ".org") and some others as well. Almost any form of identification or guessing is accepted.',
	'no-matches' => 'Message to be displayed if nothing was found for the given id. $1 represents the user input.',
	'output' => 'For each of the search results this heading is placed. $1 represents the user input.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'formats-heading' => 'Afvoer-formate',
	'input' => 'Invoer',
	'label-wikiids' => "Wiki-ID's",
	'no-matches' => 'Geen resultate vir "$1"',
	'output' => 'Afvoer vir "$1"',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author أحمد
 */
$messages['ar'] = array(
	'formats-heading' => 'صيغ المخرجات',
	'input' => 'مدخل',
	'label-wikiids' => 'مُعَرَِّفات الويكي',
	'no-matches' => 'لم يطابق شيء "$1"',
	'output' => 'مخرجات "$1"',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Simbu123
 */
$messages['as'] = array(
	'formats-heading' => 'আউটপুট ফৰ্মেট',
	'input' => 'ইনপুট',
	'label-wikiids' => 'ৱিকি নিৰ্ধাৰণী',
	'no-matches' => '"$1"ৰ  লগত একো মিল খোৱা নাই',
	'output' => '"$1"ৰ বাবে আউটপুট',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'formats-heading' => 'Formatos de salida',
	'input' => 'Entrada',
	'label-wikiids' => 'Identificadores na Wiki',
	'no-matches' => 'Res nun casa con "$1"',
	'output' => 'Salida pa "$1"',
);

/** Azerbaijani (azərbaycanca)
 * @author Khan27
 */
$messages['az'] = array(
	'formats-heading' => 'Çıxış formatları',
	'input' => 'Giriş',
	'label-wikiids' => 'Viki tanımlayıcıları',
	'no-matches' => '"$1" ilə uyğunluq yoxdur',
	'output' => '"$1" üçün çıxış',
);

/** South Azerbaijani (تورکجه)
 * @author E THP
 * @author Mousa
 */
$messages['azb'] = array(
	'formats-heading' => 'چیختی فورمتلری',
	'input' => 'گیریش',
	'label-wikiids' => 'ویکی تانیتانلاری',
	'no-matches' => '«$1»-ه بیر شئی تطبیق اولونمادی',
	'output' => '"$1" اوچون چیخیش',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'formats-heading' => 'Сығарыу форматтары',
	'input' => 'Инеү',
	'label-wikiids' => 'Вики идентификаторҙар',
	'no-matches' => '«$1» менән тап килеүсе юҡ',
	'output' => '«$1» өсөн сығыу',
);

/** Belarusian (беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'formats-heading' => 'Выхадныя фарматы',
	'input' => 'Увод',
	'label-wikiids' => 'Вікі-ідэнтыфікатары',
	'no-matches' => 'Нічога не адпавядае "$1"',
	'output' => 'Вывад для "$1"',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'formats-heading' => 'Фарматы вываду',
	'input' => 'Увод',
	'label-wikiids' => 'Ідэнтыфікатары вікі',
	'no-matches' => 'Па запыце «$1» нічога ня знойдзена',
	'output' => 'Вывад для «$1»',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'formats-heading' => 'আউটপুটের কাঠামো',
	'input' => 'ইনপুট',
	'label-wikiids' => 'উইকি নির্ধারণী',
	'no-matches' => '"$1"-এর সাথে কোনো কিছু মেলেনি',
	'output' => '"$1"-এর জন্য আউটপুট',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'formats-heading' => 'Furmadoù ezvont',
	'input' => 'Enmont',
	'label-wikiids' => 'Anaouderioù wiki',
	'no-matches' => 'N\'eus netra o klotañ gant "$1"',
	'output' => 'Ezvont evit "$1"',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'input' => 'Unos',
	'output' => 'Izlaz za "$1"',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'formats-heading' => 'Formats de sortida',
	'input' => 'Entrada de dades',
	'label-wikiids' => 'Identificadors wiki',
	'no-matches' => 'Cap correspondència per «$1»',
	'output' => 'Sortida per «$1»',
);

/** Czech (česky)
 * @author Jezevec
 * @author Vks
 */
$messages['cs'] = array(
	'formats-heading' => 'Výstupní formáty',
	'input' => 'Vstup',
	'label-wikiids' => 'Identifikátory Wiki',
	'no-matches' => 'Nic neodpovídá dotazu "$1"',
	'output' => 'Výstup pro " $1 "',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'formats-heading' => 'Тӗллевлӗ форматсем',
	'label-wikiids' => 'Вики идентификаторӗсем',
);

/** Danish (dansk)
 * @author Christian List
 * @author Sarrus
 */
$messages['da'] = array(
	'formats-heading' => 'Outputformater',
	'input' => 'Input',
	'label-wikiids' => 'Wiki-identifikatorer',
	'no-matches' => 'Intet passer med "$1"',
	'output' => 'Resultat for "$1"',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'formats-heading' => 'Ausgabeformate',
	'input' => 'Angaben',
	'label-wikiids' => 'Wiki-Kennungen',
	'no-matches' => 'Kein Ergebnis für „$1“',
	'output' => 'Ausgabe für „$1“',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'formats-heading' => 'Terza vıcyayen',
	'input' => 'Cıkewten',
	'label-wikiids' => 'Viki şınaskar',
	'no-matches' => 'Zey "$1" netice çıniyo',
	'output' => 'Qandê "$1" vıcyayış',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'formats-heading' => 'Wudawańske formaty',
	'input' => 'Zapódaśe',
	'label-wikiids' => 'Wikiidentifikatory',
	'no-matches' => 'Žedne wótpowědniki za "$1"',
	'output' => 'Wudaśe za "$1"',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Glavkos
 */
$messages['el'] = array(
	'input' => 'Εισροή',
	'no-matches' => 'Τίποτα δεν βρέθηκε για το "$1"',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'formats-heading' => 'Eligaj formatoj',
	'input' => 'Enigo',
	'label-wikiids' => 'Vikiaj identigoj',
	'no-matches' => 'Nenio kongruas "$1"',
	'output' => 'Eligo por "$1"',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'formats-heading' => 'Formatos de salida',
	'input' => 'Entrada',
	'label-wikiids' => 'Identificadores de wiki',
	'no-matches' => 'No hay coincidencias para «$1»',
	'output' => 'Salida para «$1»',
);

/** Persian (فارسی)
 * @author Ebraminio
 */
$messages['fa'] = array(
	'formats-heading' => 'قالب‌های خروجی:',
	'input' => 'ورودی',
	'label-wikiids' => 'شناسهٔ ویکی',
	'no-matches' => 'هیچ‌چیز با «$1» همسان نبود',
	'output' => 'خروجی برای «$1»',
);

/** Finnish (suomi)
 * @author Nike
 */
$messages['fi'] = array(
	'formats-heading' => 'Tulosmuodot',
	'input' => 'Syöte',
	'label-wikiids' => 'Wikitunnisteet',
	'no-matches' => 'Mikään ei vastannu tunnusta $1.',
	'output' => 'Tulokset haulle ”$1”',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'no-matches' => 'Onki samsvaraði "$1"',
	'output' => 'Útdáta fyri "$1"',
);

/** French (français)
 * @author Jean-Frédéric
 */
$messages['fr'] = array(
	'formats-heading' => 'Formats de sortie',
	'input' => 'Entrées',
	'label-wikiids' => 'Identifiants Wiki',
	'no-matches' => 'Aucune correspondance pour « $1 »',
	'output' => 'Sortie pour « $1 »',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'formats-heading' => 'Formats de sortia',
	'input' => 'Entrâs',
	'output' => 'Sortia por « $1 »',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'formats-heading' => 'Formatos de saída',
	'input' => 'Entrada',
	'label-wikiids' => 'Identificadores wiki',
	'no-matches' => 'Nada coincidiu con "$1"',
	'output' => 'Saída para "$1"',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'input' => 'ઈનપુટ',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'formats-heading' => 'תסדירי פלט',
	'input' => 'קלט',
	'label-wikiids' => 'מזהי ויקי',
	'no-matches' => 'שום דבר לא התאים ל־"$1"',
	'output' => 'פלט עבור "$1"',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'formats-heading' => 'आउटपुट फ़ॉर्मैट',
	'input' => 'इनपुट',
	'label-wikiids' => 'विकी पहचान-चिन्ह',
	'no-matches' => '"$1" से कुछ भी मेल नहीं खाया',
	'output' => '"$1" के लिये आउटपुट',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'formats-heading' => 'Izlazni formati',
	'input' => 'Unos',
	'label-wikiids' => 'Wiki identifikatori',
	'no-matches' => 'Ništa ne odgovara "$1"',
	'output' => 'Izlaz za "$1"',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'formats-heading' => 'Wudawanske formaty',
	'input' => 'Zapodaće',
	'label-wikiids' => 'Wikiidentifikatory',
	'no-matches' => 'Žane wotpowědniki za "$1"',
	'output' => 'Wudaće za "$1"',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'formats-heading' => 'Kimeneti formátumok',
	'input' => 'Bemenet',
	'label-wikiids' => 'Wikiazonosítók',
	'no-matches' => 'Nincs találtat a következőre: „$1”',
	'output' => 'Eredmény: „$1”',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'formats-heading' => 'Formatos de output',
	'input' => 'Entrata',
	'label-wikiids' => 'Indentificatores de wiki',
	'no-matches' => 'Nihil corresponde a "$1"',
	'output' => 'Resultatos pro "$1"',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 */
$messages['id'] = array(
	'formats-heading' => 'Format keluaran:',
	'input' => 'Masukan',
	'label-wikiids' => 'Pengidentifikasi wiki',
	'no-matches' => 'Tidak ada yang cocok " $1 "',
	'output' => 'Output untuk " $1 "',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Nemo bis
 */
$messages['it'] = array(
	'formats-heading' => 'Formati in uscita',
	'input' => 'Input',
	'label-wikiids' => 'Identificativi wiki',
	'no-matches' => 'Nessuna corrispondenza per "$1"',
	'output' => 'Risultati per "$1"',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'formats-heading' => '出力形式',
	'input' => '入力',
	'label-wikiids' => 'ウィキ識別子',
	'no-matches' => '"$1" と一致するものはありません',
	'output' => '"$1" の検索結果',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'formats-heading' => 'Format weton',
	'input' => 'Lebon',
	'label-wikiids' => 'Pangidèntipikasi wiki',
	'no-matches' => 'Ora ana sing cocok "$1"',
	'output' => 'Weton kanggo "$1"',
);

/** Khmer (ភាសាខ្មែរ)
 * @author T-Rithy
 */
$messages['km'] = array(
	'no-matches' => 'មិនមាន"$1"ទេ',
	'output' => 'លទ្ឋផលចំពោះ"$1"',
);

/** Kannada (ಕನ್ನಡ)
 * @author M G Harish
 */
$messages['kn'] = array(
	'formats-heading' => 'ಹೊರಹೋಗುವ ಶೈಲಿಗಳು',
	'input' => 'ಒಳಬರುವಿಕೆ',
	'label-wikiids' => 'ವಿಕಿ ಗುರುತುಗಳು',
	'no-matches' => '"$1" ಅನ್ನು ಯಾವುದೂ ಹೋಲಲಿಲ್ಲ.',
	'output' => '"$1" ಗಾಗಿ ಫಲಿತಾಂಶಗಳು',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'formats-heading' => '출력 형식',
	'input' => '입력',
	'label-wikiids' => '위키 식별자',
	'no-matches' => '"$1"(와)과 일치하지 않습니다',
	'output' => '"$1"에 대한 출력',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'formats-heading' => 'De Fommaate för et Ußjävve',
	'input' => 'Enjaabe',
	'label-wikiids' => 'Kännonge för de Wikis',
	'no-matches' => 'Nix jefonge för „$1“',
	'output' => 'Ußjabe för „$1“',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'formats-heading' => 'Formater vum Resultat',
	'input' => 'Donnéeën',
	'label-wikiids' => 'Wiki-Identifikatioun',
	'no-matches' => 'Et passt näischt op "$1"',
	'output' => 'Resultat fir "$1"',
);

/** Lezghian (лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'input' => 'Экъечlун',
);

/** لوری (لوری)
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'formats-heading' => 'قالویا درفرسن',
	'input' => 'داده',
	'label-wikiids' => 'ویکی شناساگر',
	'no-matches' => 'هیچی تطاوق ناره$1',
	'output' => 'درفرسن سی $1',
);

/** Lithuanian (lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'formats-heading' => 'Išvesties formatai',
	'input' => 'Įvestis',
	'label-wikiids' => 'Wiki identifikatorius',
	'no-matches' => 'Niekas neatitiko "$1"',
	'output' => 'Išvestis "$1"',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'formats-heading' => 'Izvades formāti',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'formats-heading' => 'Формати на изводот',
	'input' => 'Внос',
	'label-wikiids' => 'Викиназнаки',
	'no-matches' => 'Ништо не одговара на „$1“',
	'output' => 'Извод за „$1“',
);

/** Malayalam (മലയാളം)
 * @author Anoopan
 */
$messages['ml'] = array(
	'formats-heading' => 'ഔട്ട്പുട്ട് ഫോർമാറ്റുകൾ',
	'input' => 'ഇൻപുട്ട്',
	'label-wikiids' => 'വിക്കി ഐച്ഛികങ്ങൾ',
	'no-matches' => '"$1" മായി ഒന്നും ചേർന്നില്ല',
	'output' => '"$1" ന്റെ ഔട്ട്പുട്ട്',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'formats-heading' => 'Format output',
	'input' => 'Input',
	'label-wikiids' => 'Pengenal wiki',
	'no-matches' => 'Tiada yang sepadan dengan "$1"',
	'output' => 'Output untuk "$1"',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'label-wikiids' => 'Identifikaturi tal-wiki',
	'no-matches' => 'Xejn ma qabel ma\' "$1"',
	'output' => 'Riżultat għal "$1"',
);

/** Norwegian Bokmål (norsk bokmål)
 */
$messages['nb'] = array(
	'formats-heading' => 'utdataformater',
	'input' => 'Inndata',
	'label-wikiids' => 'Wiki-identifikatorer',
	'no-matches' => 'Ingenting passet med «$1»',
	'output' => 'Utdata for «$1»',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'formats-heading' => 'आउतपुत फरम्यात',
	'input' => 'इन्पुत',
	'label-wikiids' => 'विकि म्हसीकामि',
	'no-matches' => '"$1"नाप छुं हे ज्वःमला',
	'output' => '"$1"या आउतपुत',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'formats-heading' => 'Uitvoeropmaak',
	'input' => 'Invoer',
	'label-wikiids' => "Wiki-ID's",
	'no-matches' => 'Geen resultaten voor "$1"',
	'output' => 'Uitvoer voor "$1"',
);

/** no (no)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'formats-heading' => 'utdataformater',
	'input' => 'Inndata',
	'label-wikiids' => 'Wiki-identifikatorer',
	'no-matches' => 'Ingenting passet med «$1»',
	'output' => 'Utdata for «$1»',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'formats-heading' => 'Format de sortida',
	'input' => 'Entradas',
	'label-wikiids' => 'Identificants Wiki',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 * @author Shisir 1945
 */
$messages['or'] = array(
	'formats-heading' => 'ଆଉଟ୍‌ପୁଟ୍‌ ବିନ୍ୟାସ',
	'input' => 'ଇନ୍‌ପୁଟ୍‌',
	'label-wikiids' => 'ଉଇକି ଚିହ୍ନଟକାରୀ',
	'no-matches' => 'କିଛି ମିଶିଲା ନାହିଁ "$1"',
	'output' => '"$1" ପାଇଁ ଫଳାଫଳ',
);

/** Polish (polski)
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'formats-heading' => 'Formaty wyjścia',
	'input' => 'Dane wejściowe',
	'label-wikiids' => 'Identyfikatory wiki',
	'no-matches' => 'Brak wyników odpowiadających zapytaniu „$1”',
	'output' => 'Wynik dla „$1”',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'formats-heading' => 'Formà ëd surtìa',
	'input' => 'Anseriment',
	'label-wikiids' => 'Identificador ëd wiki',
	'no-matches' => 'Gnun-a rëspondensa për «$1»',
	'output' => 'Surtìa për "$1"',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'formats-heading' => 'Formatos de saída',
	'input' => 'Entrada',
	'label-wikiids' => 'Identificadores wiki',
	'no-matches' => '"$1" não teve correspondências',
	'output' => 'Resultados para "$1"',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'formats-heading' => 'Formatos de saída',
	'input' => 'Entrada',
	'label-wikiids' => 'Identificadores wiki',
	'no-matches' => '"$1" não teve correspondências',
	'output' => 'Resultados para "$1"',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'formats-heading' => 'Formate de ieșire',
	'input' => 'Date de intrare',
	'label-wikiids' => 'Identificatori de wikiuri',
	'no-matches' => 'Nimic nu se potrivește cu „$1”',
	'output' => 'Datele de ieșire pentru „$1”',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'formats-heading' => 'Formate de le resultate',
	'input' => 'Ingresse',
	'label-wikiids' => 'Idendificature de Uicchi',
	'no-matches' => 'Nisciune soddisfe "$1"',
	'output' => 'Resultate pe "$1"',
);

/** Russian (русский)
 * @author Eleferen
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'formats-heading' => 'Выходные форматы',
	'input' => 'Вход',
	'label-wikiids' => 'Вики-идентификаторы',
	'no-matches' => 'Нет соответствий «$1»',
	'output' => 'Выход для «$1»',
);

/** Sanskrit (संस्कृतम्)
 * @author Hemant wikikosh1
 */
$messages['sa'] = array(
	'formats-heading' => 'बहिर्गतप्रारूपाणि',
	'input' => 'निवेश्यम्',
	'output' => '"$1" इत्यस्मै फलितम्',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'formats-heading' => 'ප්‍රතිදාන ආකෘතින්',
	'input' => 'ආදානය',
	'label-wikiids' => 'විකි හඳුන්වන',
	'no-matches' => '"$1" කිසිවක් ගැලපෙන්නේ නැත',
	'output' => '"$1" සඳහා ප්‍රතිදානය',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'formats-heading' => 'Izhodne oblike',
	'input' => 'Vhod',
	'label-wikiids' => 'Wikiidentifikatorji',
	'no-matches' => 'Nič se ne ujema z »$1«',
	'output' => 'Izhod za »$1«',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'formats-heading' => 'Habka bixidda',
	'input' => 'Galid',
	'label-wikiids' => 'Aqoonsiga wiki',
	'no-matches' => 'Wax udhigma maleh ee "$1"',
	'output' => 'Natiijada ee', # Fuzzy
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'formats-heading' => 'Одредишни формати',
	'input' => 'Унос',
	'label-wikiids' => 'Назнаке викија',
	'no-matches' => 'Ништа се не поклапа са „$1“',
	'output' => 'Излаз за „$1“',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'formats-heading' => 'Odredišni formati',
	'input' => 'Unos',
	'label-wikiids' => 'Naznake vikija',
	'no-matches' => 'Ništa se ne poklapa sa „$1“',
	'output' => 'Izlaz za „$1“',
);

/** Swedish (svenska)
 * @author Liftarn
 */
$messages['sv'] = array(
	'formats-heading' => 'Utdataformat',
	'input' => 'Indata',
	'label-wikiids' => 'Wiki-identifierare',
	'no-matches' => 'Ingenting matchade "$1"',
	'output' => 'Utdata för "$1"',
);

/** Tamil (தமிழ்)
 * @author Balajijagadesh
 * @author Logicwiki
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'formats-heading' => 'வெளியீடு வடிவங்கள்',
	'input' => 'உள்ளீடு',
	'no-matches' => '"$1" என்பதுடன் எதுவும் ஒத்துப் போகவில்லை',
	'output' => '"$1" என்பதற்கான வருவிளைவு',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'no-matches' => '"$1"కి ఏమీ సరిపోలేదు.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'formats-heading' => 'Mga anyo ng inilalabas',
	'input' => 'Ipinapasok',
	'label-wikiids' => 'Mga tagapagkilala ng Wiki',
	'no-matches' => 'Walang tumugma sa "$1"',
	'output' => 'Inilabas para sa "$1"',
);

/** Turkish (Türkçe)
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'formats-heading' => 'Çıkış biçimleri',
	'input' => 'Giriş',
	'label-wikiids' => 'Viki tanıtıcıları',
	'no-matches' => '"$1" ile eşleşme yok',
	'output' => '"$1" için çıkış',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'formats-heading' => 'چىقىرىش پىچىملىرى',
	'input' => 'كىرگۈز',
	'label-wikiids' => 'ۋىكى بەلگىلىرى',
	'no-matches' => 'ھېچنېمە ماسلاشمىدى "$1"',
	'output' => '"$1" ئۈچۈن چىقار',
);

/** Ukrainian (українська)
 * @author A1
 */
$messages['uk'] = array(
	'formats-heading' => 'Вихідні формати',
	'input' => 'Вхід',
	'label-wikiids' => 'Ідентифікатори Wiki',
	'no-matches' => 'Немає відповідностей «$1»',
	'output' => 'Вихід для " $1 "',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 */
$messages['uz'] = array(
	'formats-heading' => 'Chiqish formatlari',
	'input' => 'Kirish',
	'label-wikiids' => 'Viki-identifikatorlar',
	'no-matches' => '"$1" bilan mosliklar yoʻq',
	'output' => '"$1" uchun chiqish',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'formats-heading' => 'Định dạng kết quả',
	'input' => 'Truy vấn',
	'label-wikiids' => 'ID của các wiki',
	'no-matches' => 'Không có wiki với ID “$1”',
	'output' => 'Kết quả “$1”',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'formats-heading' => '输出格式',
	'input' => '输入',
	'label-wikiids' => 'Wiki 标识符',
	'no-matches' => '没有匹配 "$1"',
	'output' => '输出的 "$1"',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Lauhenry
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'formats-heading' => '輸出格式',
	'input' => '輸入',
	'label-wikiids' => 'Wiki標識符',
	'no-matches' => '找不到 "$1"',
	'output' => '輸出為" $1 "',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'formats-heading' => '輸出格式',
	'input' => '輸入',
	'no-matches' => '找不到 "$1"',
);
