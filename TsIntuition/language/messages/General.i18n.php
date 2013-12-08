<?php
/**
 * General purpose messages.
 */

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'dateformat' => '%B %d %Y', // Optional
	'hello' =>	'Hello',
	'welcome' => 'Welcome',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'colon-separator' => ':', // Optional
	'namespace' => 'Namespace',
	'form-submit' => 'Go',
	'form-reset' => 'Reset',
	'years' => '{{PLURAL: $1|year|years}}',
	'weeks' => '{{PLURAL: $1|week|weeks}}',
	'days' => '{{PLURAL: $1|day|days}}',
	'hours' => '{{PLURAL: $1|hour|hours}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'seconds' => '{{PLURAL: $1|second|seconds}}',
	'last-modified-date' => 'Last modified: $1',
	'view-source' => 'View source',
	'parentheses' => '($1)', // Optional
	'comma-separator' => ',&#32;', // Optional
	'word-separator' => '&#32;', // Optional
	'and' => '&#32;and',
);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author EugeneZelenko
 * @author Krinkle
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'dateformat' => '{{Optional}} Dateformat in this language. See documentation about [http://php.net/strftime strftime() at php.net] for the syntax.',
	'hello' => 'A friendly greet.
{{Identical|Hello}}',
	'welcome' => 'A friendly welcome.
{{Identical|Welcome}}',
	'toolversion' => 'Short label stating the current version of a tool. Parameters:
* $1 - the version. e.g. "1.2.3-alpha"
{{Identical|Version}}',
	'toolversionstamp' => 'Short label stating the current version of a tool and when the last update was. <code>$1</code> is the version (eg. "1.2.3-alpha") and <code>$2</code> is the date (without time).',
	'etc' => 'Abbreviated form of "et cetera"',
	'colon-separator' => '{{Optional}} Change it only if your language uses another character for ":" or it needs an extra space before the colon.',
	'namespace' => '{{Identical|Namespace}}',
	'form-submit' => 'A general label for a form submission button. Not per se a search form!
{{Identical|Go}}',
	'form-reset' => 'A general label for a form reset button. Not per se a search form!
{{Identical|Reset}}',
	'years' => 'Notation of time duration for multiple years (eg. "Duration: x years" ).
{{Identical|Year}}',
	'weeks' => 'Notation of time duration for multiple weeks (eg. "Duration: x weeks" ).',
	'days' => 'Notation of time duration for multiple days (eg. "Duration: x days" ).',
	'hours' => 'Notation of time duration for multiple hours (eg. "Duration: x hours" ).',
	'minutes' => 'Notation of time duration for multiple hours (eg. "Duration: x minutes" ). No support for advanced plural yet.
{{Identical|Minute}}',
	'seconds' => 'Notation of time duration for multiple hours (eg. "Duration: x seconds" ). No support for advenced plural yet.
{{Identical|Second}}',
	'last-modified-date' => 'The date something was last modified. $1 is a date (eg. "April 5 2010, 12:30 AM")',
	'view-source' => 'Label for a button or link that, when clicked, will present the program source code.
{{Identical|View source}}',
	'parentheses' => '{{Optional}}',
	'comma-separator' => '{{Optional}} Used for separating lists of items. {{Identical|comma-separator}}',
	'word-separator' => '{{Optional}} Used for separating lists of words. {{Identical|word-separator}}',
	'and' => 'The translation for "and" appears in the [[Special:Version]] page, between the last two items of a list. If a comma is needed, add it at the beginning without a gap between it and the "&". <nowiki>&#32;</nowiki> is a blank space, one character long. Please leave it as it is. {{Identical|and}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author Platonides
 */
$messages['af'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Welkom',
	'toolversionstamp' => 'Weergawe $1 ($2)',
	'etc' => 'ensovoorts',
	'namespace' => 'Naamruimte',
	'form-submit' => 'OK',
	'form-reset' => 'Herstel',
	'years' => '{{PLURAL: $1|jaar|jare}}',
	'weeks' => '{{PLURAL: $1|week|weke}}',
	'days' => '{{PLURAL: $1|dag|dae}}',
	'hours' => '{{PLURAL:$1|uur|ure}}',
	'minutes' => '{{PLURAL: $1|minuut|minute}}',
	'seconds' => '{{PLURAL: $1|sekonde|sekondes}}',
	'last-modified-date' => 'Laaste wysiging op: $1',
	'view-source' => 'Wys bronteks',
	'and' => '&#32;en',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'welcome' => 'ሰላምታ',
	'namespace' => 'ክፍለ-ዊኪ',
	'form-submit' => 'ሂድ',
	'form-reset' => 'ባዶ ይደረግ',
	'view-source' => 'ጥሬ ኮድ ለመመልከት',
	'and' => '&#32;እና',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author Mutarjem horr
 * @author OsamaK
 * @author Zanatos
 * @author أحمد
 * @author زكريا
 */
$messages['ar'] = array(
	'hello' => 'أهلاّ بك',
	'welcome' => 'مرحبا',
	'toolversionstamp' => 'الإصدار $1 ($2)',
	'etc' => 'إلخ.',
	'namespace' => 'فضاء التسمية',
	'form-submit' => 'اذهب',
	'form-reset' => 'صفِّر',
	'years' => '{{PLURAL: $1||سنة|سنتان|$1 سنين|$1 سنة}}',
	'weeks' => '{{PLURAL:$1||أسبوع|أسبوعان|$1 أسابيع|$1 أسبوعًا|$1 أسبوع}}',
	'days' => '{{PLURAL: $1|يوم|يوم}}',
	'hours' => '{{PLURAL: $1|ساعة|ساعة}}',
	'minutes' => '{{PLURAL: $1|دقيقة|دقائق}}',
	'seconds' => '{{PLURAL: $1|ثانية|ثوان}}',
	'last-modified-date' => 'آخر تغيير: $1',
	'view-source' => 'اعرض المصدر',
	'and' => '&#32; و',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 * @author Rafy
 */
$messages['arc'] = array(
	'hello' => 'ܫܠܡܐ',
	'welcome' => 'ܒܫܝܢܐ',
	'etc' => 'ܘܫܪ.',
	'namespace' => 'ܚܩܠܐ',
	'form-submit' => 'ܙܠ',
	'years' => '{{PLURAL: $1|ܫܢܬܐ|ܫܢܬ̈ܐ}}',
	'weeks' => '{{PLURAL: $1|ܫܒܘܥܐ|ܫܒܘܥ̈ܐ}}',
	'days' => '{{PLURAL:$1|ܝܘܡܐ|ܝܘܡܬ̈ܐ}}',
	'hours' => '{{PLURAL:$1|ܫܥܬܐ|ܫܥܬ̈ܐ}}',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Simbu123
 */
$messages['as'] = array(
	'hello' => 'নমস্কাৰ',
	'welcome' => 'স্বাগতম',
	'toolversionstamp' => 'সংস্কৰণ $1 ($2)',
	'etc' => 'ইত্যাদি।',
	'namespace' => 'নামস্থান',
	'form-submit' => 'যাওক',
	'form-reset' => 'পূৰ্বৰ অৱস্থালৈ লৈ যাওক',
	'years' => '$1 {{PLURAL:$1|বছৰ|বছৰ}}',
	'weeks' => '{{PLURAL: $1|সপ্তাহ|সপ্তাহ}}',
	'days' => '$1 {{PLURAL:$1|দিন|দিন}}',
	'hours' => '{{PLURAL: $1|ঘণ্টা|ঘণ্টা}}',
	'minutes' => '{{PLURAL: $1|মিনিট|মিনিট}}',
	'seconds' => '$1 {{PLURAL:$1|ছেকেণ্ড|ছেকেণ্ড}}',
	'last-modified-date' => 'শেষ পৰিবৰ্তন: $1',
	'view-source' => 'উৎস চাওক',
	'and' => '&#32;আৰু',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'hello' => 'Bones',
	'welcome' => 'Bienveníos',
	'toolversion' => 'Versión $1',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaciu de nomes',
	'form-submit' => 'Dir',
	'form-reset' => 'Reaniciar',
	'years' => '{{PLURAL: $1|añu|años}}',
	'weeks' => '{{PLURAL: $1|selmana|selmanes}}',
	'days' => '{{PLURAL: $1|día|díes}}',
	'hours' => '{{PLURAL: $1|hora|hores}}',
	'minutes' => '{{PLURAL: $1|minutu|minutos}}',
	'seconds' => '{{PLURAL: $1|segundu|segundos}}',
	'last-modified-date' => 'Caberu cambéu: $1',
	'view-source' => 'Ver códigu fonte',
	'and' => '&#32;y',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Khan27
 * @author Wertuose
 */
$messages['az'] = array(
	'hello' => 'Salam',
	'welcome' => 'Xoş gəlmisiniz',
	'toolversionstamp' => 'Versiya $1 ($2)',
	'etc' => 'vs.',
	'namespace' => 'Adlar fəzası',
	'form-submit' => 'Keçmək',
	'form-reset' => 'Qur',
	'years' => '{{PLURAL: $1|il|il}}',
	'weeks' => '{{PLURAL: $1|həftə|həftə}}',
	'days' => '{{PLURAL: $1|gün|gün}}',
	'hours' => '{{PLURAL: $1|saat|saat}}',
	'minutes' => '{{PLURAL: $1|dəqiqə|dəqiqə}}',
	'seconds' => '{{PLURAL: $1|saniyə|saniyə}}',
	'last-modified-date' => 'Sonuncu düzəliş: $1',
	'view-source' => 'Mənbəyə bax',
	'and' => '&#32;və',
);

/** South Azerbaijani (تورکجه)
 * @author E THP
 * @author Mousa
 */
$messages['azb'] = array(
	'hello' => 'سلام',
	'welcome' => 'خوش‌ گلمیسینیز',
	'toolversionstamp' => 'نوسخه $1 ($2)',
	'etc' => 'و س.',
	'namespace' => 'آدفضاسی',
	'form-submit' => 'گئت',
	'form-reset' => 'ایلک دورومونا قایتار',
	'years' => '{{PLURAL:$1|ایل}}',
	'weeks' => '{{PLURAL:$1|هفته}}',
	'days' => '{{PLURAL:$1|گون}}',
	'hours' => '{{PLURAL:$1|ساعات}}',
	'minutes' => '{{PLURAL:$1|دقیقه}}',
	'seconds' => '{{PLURAL:$1|ثانیه}}',
	'last-modified-date' => 'سون دَییشدیرمه: $1',
	'view-source' => 'قایناغا باخ',
	'and' => '&#32;و',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 * @author ҒатаУлла
 */
$messages['ba'] = array(
	'hello' => 'Сәләм',
	'welcome' => 'Рәхим итегеҙ!',
	'toolversionstamp' => ' $1 ($2) юрамаһы',
	'etc' => 'һ.б.',
	'namespace' => 'Исемдәр арауығы',
	'form-submit' => 'Күсеү',
	'form-reset' => 'таҙартырға',
	'years' => '$1 {{PLURAL:$1|йыл|йылдар}}',
	'weeks' => '$1 {{PLURAL:$1|аҙна}}',
	'days' => '$1 {{PLURAL:$1|көн}}',
	'hours' => '{{PLURAL:$1|$1 сәғәт}}',
	'minutes' => '$1 {{PLURAL:$1|минут}}',
	'seconds' => '{{PLURAL:$1|$1 секунд}}',
	'last-modified-date' => 'Һуңғы үҙгәртеү: $1',
	'view-source' => 'Сығанаҡты ҡарарға',
	'and' => '&#32;һәм',
);

/** Belarusian (беларуская)
 * @author LexArt
 * @author Platonides
 */
$messages['be'] = array(
	'hello' => 'Прывітанне',
	'welcome' => 'Сардэчна запрашаем',
	'toolversionstamp' => 'Версія $1 ( $2 )',
	'etc' => 'і г.д.',
	'namespace' => 'Прастора назваў',
	'form-submit' => 'Перайсці',
	'form-reset' => 'Скінуць',
	'years' => 'гадоў', # Fuzzy
	'weeks' => 'тыдняў', # Fuzzy
	'days' => 'дзён', # Fuzzy
	'hours' => 'гадзін', # Fuzzy
	'last-modified-date' => 'Апошнія змены: $1',
	'view-source' => 'Паказаць крынічны тэкст',
	'and' => '&#32;і',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Jim-by
 * @author Platonides
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'hello' => 'Прывітаньне',
	'welcome' => 'Вітаем',
	'toolversionstamp' => 'Вэрсія $1, ($2)',
	'etc' => 'і гэтак далей.',
	'namespace' => 'Прастора назваў',
	'form-submit' => 'Адправіць',
	'form-reset' => 'Скінуць',
	'years' => '{{PLURAL: $1|год|гады|гадоў}}',
	'weeks' => '{{PLURAL: $1|тыдзень|тыдні|тыдняў}}',
	'days' => '{{PLURAL: $1|дзень|дні|дзён}}',
	'hours' => '{{PLURAL: $1|гадзіна|гадзіны|гадзінаў}}',
	'minutes' => '{{PLURAL: $1|хвіліна|хвіліны|хвілінаў}}',
	'seconds' => '{{PLURAL: $1|сэкунда|сэкунды|сэкундаў}}',
	'last-modified-date' => 'Апошняя зьмена: $1',
	'view-source' => 'Паказаць код',
	'and' => '&#32;і',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'toolversionstamp' => 'Версия $1 ($2)',
	'namespace' => 'Именно пространство',
	'years' => '{{PLURAL: $1|година|години}}',
	'weeks' => 'седмици', # Fuzzy
	'days' => 'дни', # Fuzzy
	'minutes' => 'минути', # Fuzzy
	'seconds' => 'секунди', # Fuzzy
);

/** Banjar (Bahasa Banjar)
 * @author Riemogerz
 */
$messages['bjn'] = array(
	'hello' => 'Halu',
	'welcome' => 'Salamat datang',
	'toolversionstamp' => 'Pirsi $1 ($2)',
	'etc' => 'wll.',
	'form-submit' => 'Kirim',
	'form-reset' => 'Bulikakan satilan',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'hello' => 'হ্যালো',
	'welcome' => 'স্বাগতম',
	'toolversionstamp' => 'সংস্করণ $1 ($2)',
	'etc' => 'ইত্যাদি।',
	'namespace' => 'নামস্থান',
	'form-submit' => 'চলো',
	'form-reset' => 'আদি অবস্থায় ফেরত',
	'years' => '{{PLURAL: $1|বছর|বছর}}',
	'weeks' => '{{PLURAL: $1|সপ্তাহ|সপ্তাহ}}',
	'days' => '{{PLURAL: $1|দিন|দিন}}',
	'hours' => '{{PLURAL: $1|ঘণ্টা|ঘণ্টা}}',
	'minutes' => '{{PLURAL: $1|মিনিট|মিনিট}}',
	'seconds' => '{{PLURAL: $1|সেকেন্ড|সেকেন্ড}}',
	'last-modified-date' => 'সর্বশেষ পরিবর্তন: $1',
	'view-source' => 'সোর্স দেখাও',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Krinkle
 * @author Y-M D
 */
$messages['br'] = array(
	'hello' => 'Demat',
	'welcome' => 'Degemer mat',
	'toolversion' => 'Stumm $1',
	'toolversionstamp' => 'Stumm $1 ($2)',
	'etc' => 'h.a.',
	'namespace' => 'Esaouenn anv',
	'form-submit' => 'Mont',
	'form-reset' => 'Adderaouekaat',
	'years' => '{{PLURAL: $1|bloavezh|bloavezh}}',
	'weeks' => '{{PLURAL: $1|sizhunvezh|sizhunvezh}}',
	'days' => '{{PLURAL: $1|devezh|devezh}}',
	'hours' => '{{PLURAL: $1|eurvezh|eurvezh}}',
	'minutes' => '{{PLURAL: $1|munutenn|munutenn}}',
	'seconds' => '{{PLURAL: $1|eilenn|eilenn}}',
	'last-modified-date' => 'Kemmet da ziwezhañ : $1',
	'view-source' => 'Sellet ouzh tarzh an destenn',
	'and' => '&#32;ha(g)',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'hello' => 'Pozdrav',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Verzija $1 ($2)',
	'etc' => 'itd.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => 'godine', # Fuzzy
	'weeks' => 'sedmice', # Fuzzy
	'days' => 'dani', # Fuzzy
	'hours' => 'sati', # Fuzzy
	'last-modified-date' => 'Zadnji put izmijenjeno; $1',
	'view-source' => 'Pogledaj izvor',
);

/** Catalan (català)
 * @author Alvaro Vidal-Abarca
 * @author Platonides
 * @author SMP
 */
$messages['ca'] = array(
	'hello' => 'Hola',
	'welcome' => 'Benvinguts',
	'toolversion' => 'Versió $1',
	'toolversionstamp' => 'Versió $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espai de noms',
	'form-submit' => 'Vés-hi',
	'form-reset' => 'Restableix',
	'years' => '{{PLURAL: $1|any|anys}}',
	'weeks' => '{{PLURAL: $1|setmana|setmanes}}',
	'days' => '{{PLURAL: $1|dia|dies}}',
	'hours' => '{{PLURAL: $1|hora|hores}}',
	'minutes' => '{{PLURAL: $1|minut|minuts}}',
	'seconds' => '{{PLURAL:$1|segon|segons}}',
	'last-modified-date' => 'Darrera modificació: $1',
	'view-source' => 'Mostra el codi font',
	'and' => '&#32;i',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'form-submit' => 'Дехьа гӀо',
	'minutes' => '$1 {{PLURAL:$1|минут}} хьалха',
);

/** Sorani Kurdish (کوردی)
 * @author Asoxor
 */
$messages['ckb'] = array(
	'hello' => 'سڵاو',
	'welcome' => 'بەخێربێی',
	'toolversionstamp' => 'وەشانی $1 ($2)',
	'etc' => 'ھتد',
	'namespace' => 'بۆشاییی ناو',
	'form-submit' => 'بڕۆ',
	'form-reset' => 'دووبارە ڕێکخستنەوە',
	'years' => '{{PLURAL: $1|ساڵ|ساڵ}}',
	'weeks' => '{{PLURAL:$1|ھەفتە|ھەفتە}}',
	'days' => '{{PLURAL: $1|ڕۆژ|ڕۆژ}}',
	'hours' => '{{PLURAL: $1|کاتژمێر|کاتژمێر}}',
	'minutes' => '{{PLURAL: $1|خولەک|خولەک}}',
	'seconds' => '{{PLURAL: $1|چرکە|چرکە}}',
	'last-modified-date' => 'دوایین گۆڕانکاری: $1',
	'view-source' => 'سەرچاوەکەی ببینە',
);

/** Czech (česky)
 * @author Mormegil
 * @author Platonides
 */
$messages['cs'] = array(
	'hello' => 'Ahoj',
	'welcome' => 'Vítejte',
	'toolversionstamp' => 'Verze $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Jmenný prostor',
	'form-submit' => 'Provést',
	'form-reset' => 'Vyčistit',
	'years' => '{{PLURAL:$1|rok|roky|let}}',
	'weeks' => '{{PLURAL:$1|týden|týdny|týdnů}}',
	'days' => '{{PLURAL:$1|den|dny|dní}}',
	'hours' => '{{PLURAL:$1|hodina|hodiny|hodin}}',
	'minutes' => '{{PLURAL:$1|minuta|minuty|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundy|sekund}}',
	'last-modified-date' => 'Naposledy změněno: $1',
	'view-source' => 'Zobrazit zdrojový kód',
	'and' => '&#32;a',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 * @author Блокнот
 */
$messages['cv'] = array(
	'hello' => 'Салам',
	'welcome' => 'Килӗрех',
	'toolversionstamp' => 'Верси $1 ($2)',
	'etc' => 'т. ыт. те',
	'namespace' => 'Ятсен уҫлӑхӗ',
	'form-submit' => 'Куҫ',
	'form-reset' => 'Тасат',
	'years' => '{{PLURAL: $1|çул}}',
	'weeks' => '{{PLURAL: $1|эрне}}',
	'days' => '{{PLURAL: $1|кун}}',
	'hours' => '{{PLURAL: $1|сехет}}',
	'minutes' => '{{PLURAL: $1|минут}}',
	'seconds' => '{{PLURAL: $1|ҫеккунт}}',
	'last-modified-date' => 'Юлашки улшӑну вӑхӑчӗ: $1',
	'view-source' => 'Кӑка пӑх',
	'and' => '&#32;тата',
);

/** Danish (dansk)
 * @author Christian List
 * @author Peter Alberti
 * @author Platonides
 * @author Sarrus
 */
$messages['da'] = array(
	'hello' => 'Hej',
	'welcome' => 'Velkommen',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerum',
	'form-submit' => 'Udfør',
	'form-reset' => 'Nulstil',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uge|uger}}',
	'days' => '{{PLURAL: $1|dag|dage}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minut|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Senest ændret: $1',
	'view-source' => 'Vis kildekode',
	'and' => '&#32;og',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 * @author Metalhead64
 */
$messages['de'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Hallo',
	'welcome' => 'Willkommen',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'usw.',
	'namespace' => 'Namensraum',
	'form-submit' => 'Ausführen',
	'form-reset' => 'Zurücksetzen',
	'years' => '{{PLURAL: $1|Jahr|Jahre}}',
	'weeks' => '{{PLURAL: $1|Woche|Wochen}}',
	'days' => '{{PLURAL: $1|Tag|Tage}}',
	'hours' => '{{PLURAL: $1|Stunde|Stunden}}',
	'minutes' => '{{PLURAL: $1|Minute|Minuten}}',
	'seconds' => '{{PLURAL: $1|Sekunde|Sekunden}}',
	'last-modified-date' => 'Zuletzt geändert: $1',
	'view-source' => 'Quelltext anzeigen',
	'comma-separator' => ',&#32;',
	'word-separator' => '&#32;',
	'and' => '&#32;und',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'hello' => 'Merheba',
	'welcome' => 'Xeyr amey',
	'toolversion' => 'Versiyon $1',
	'toolversionstamp' => 'Versiyon $1 ($2)',
	'etc' => 'ws.',
	'namespace' => 'Cayê namey',
	'form-submit' => 'Şo',
	'form-reset' => 'Reset kerê',
	'years' => '{{PLURAL: $1|serre|serri}}',
	'weeks' => '{{PLURAL: $1|hefte|heftey}}',
	'days' => '{{PLURAL: $1|roc|roci}}',
	'hours' => '($1 {{PLURAL:$1|seate|seati}})',
	'minutes' => '{{PLURAL: $1|deqe|deqey}}',
	'seconds' => '{{PLURAL:$1|saniye|saniyeyan}}',
	'last-modified-date' => 'Vurnayışo peên: $1',
	'view-source' => 'Çımi bıvin',
	'and' => '&#32;u',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'hello' => 'Halo',
	'welcome' => 'Witaj',
	'toolversion' => 'Wersija $1',
	'toolversionstamp' => 'Wersija $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Mjenjowy rum',
	'form-submit' => 'Wótpósłaś',
	'form-reset' => 'Slědk stajiś',
	'years' => '{{PLURAL: $1|lěto|lěśe|lěta|lět}}',
	'weeks' => '{{PLURAL: $1|tyźeń|tyźenja|tyźenje|tyźenjow}}',
	'days' => '{{PLURAL: $1|źeń|dnja|dny|dnjow}}',
	'hours' => '{{PLURAL: $1|góźina|góźinje|góźiny|góźinow}}',
	'minutes' => '{{PLURAL: $1|minuta|minuśe|minuty|minutow}}',
	'seconds' => '{{PLURAL: $1|sekunda|sekunźe|sekundy|sekundow}}',
	'last-modified-date' => 'Slědny raz změnjony: $1',
	'view-source' => 'Žrědło se woglědaś',
	'and' => '&#32;a',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Glavkos
 */
$messages['el'] = array(
	'hello' => 'Γεια σας',
	'welcome' => 'Καλώς ορίσατε',
	'toolversion' => 'Έκδοση $1',
	'toolversionstamp' => 'Έκδοση $1 ($2)',
	'etc' => 'κλπ.',
	'namespace' => 'Ονοματοχώρος',
	'form-submit' => 'Μετάβαση',
	'form-reset' => 'Επαναφορά',
	'years' => '{{PLURAL: $1|έτος|έτη}}',
	'weeks' => '$1 {{PLURAL:$1|εβδομάδα|εβδομάδες}}',
	'days' => '($1 {{PLURAL: $1|ημέρα|ημέρες}})',
	'hours' => '{{PLURAL: $1|ώρα|ώρες}}',
	'minutes' => '{{PLURAL: $1|λεπτό|λεπτά}}',
	'seconds' => '{{PLURAL: $1|δευτερόλεπτο|δευτερόλεπτα}}',
	'last-modified-date' => 'Τελευταία επεξεργασία: $1',
	'view-source' => 'Εμφάνιση κώδικα',
);

/** Esperanto (Esperanto)
 * @author Objectivesea
 * @author Yekrats
 */
$messages['eo'] = array(
	'hello' => 'Saluton',
	'welcome' => 'Bonvenon',
	'toolversionstamp' => 'Versio $1 ($2)',
	'etc' => 't.k.p.',
	'namespace' => 'Nomspaco',
	'form-submit' => 'Ek!',
	'form-reset' => 'Restarigi',
	'years' => '{{PLURAL:$1|jaro|jaroj}}',
	'weeks' => '{{PLURAL:$1|semajno|$1 semajnoj}}',
	'days' => '{{PLURAL:$1|tago|tagoj}}',
	'hours' => '{{PLURAL:$1|horo|horoj}}',
	'minutes' => '{{PLURAL:$1|minuto|minutoj}}',
	'seconds' => '{{PLURAL:$1|sekundo|sekundoj}}',
	'last-modified-date' => 'Laste modifita: $1',
	'view-source' => 'Vidi fonton',
	'and' => '&#32;kaj',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Fitoschido
 * @author Platonides
 * @author VegaDark
 */
$messages['es'] = array(
	'dateformat' => '%d de %B de %Y',
	'hello' => 'Hola',
	'welcome' => 'Bienvenido/a',
	'toolversion' => 'Versión $1',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espacio de nombres',
	'form-submit' => 'Ir',
	'form-reset' => 'Restablecer',
	'years' => '{{PLURAL: $1|año|años}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|día|días}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificación: $1',
	'view-source' => 'Ver el código',
	'and' => '&#32;y',
);

/** Estonian (eesti)
 * @author Pikne
 * @author Platonides
 * @author WikedKentaur
 */
$messages['et'] = array(
	'hello' => 'Tere',
	'welcome' => 'Tere tulemast',
	'toolversionstamp' => 'Versioon $1 ($2)',
	'etc' => 'jne',
	'namespace' => 'Nimeruum',
	'form-submit' => 'Mine',
	'form-reset' => 'Lähtesta',
	'years' => '{{PLURAL: $1|aasta|aastat}}',
	'weeks' => '{{PLURAL: $1|nädal|nädalat}}',
	'days' => '{{PLURAL: $1|päev|päeva}}',
	'hours' => '{{PLURAL: $1|tund|tundi}}',
	'minutes' => '{{PLURAL: $1|minut|minutit}}',
	'seconds' => '{{PLURAL: $1|sekund|sekundit}}',
	'last-modified-date' => 'Viimati muudetud: $1',
	'view-source' => 'Vaata lähteteksti',
	'and' => '&#32;ja',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'hello' => 'Kaixo',
	'welcome' => 'Ongi etorri',
	'toolversionstamp' => 'Bertsioa $1 ($2)',
	'etc' => 'etab.',
	'namespace' => 'Izen-tartea',
	'form-submit' => 'Joan',
	'form-reset' => 'Hasieratu',
	'years' => '{{PLURAL: $1|urte|urte}}',
	'weeks' => '{{PLURAL: $1|aste|aste}}',
	'days' => '{{PLURAL: $1|egun|egun}}',
	'hours' => '{{PLURAL: $1|ordu|ordu}}',
	'minutes' => '{{PLURAL: $1|minutu|minutu}}',
	'seconds' => '{{PLURAL: $1|segundu|segundu}}',
	'last-modified-date' => 'Azken aldaketa: $1',
	'view-source' => 'Iturria ikusi',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Mjbmr
 * @author Reza1615
 */
$messages['fa'] = array(
	'hello' => 'سلام',
	'welcome' => 'خوش‌آمدید',
	'toolversionstamp' => 'نسخهٔ $1 ($2)',
	'etc' => 'غیره.',
	'namespace' => 'فضای نام',
	'form-submit' => 'برو',
	'form-reset' => 'بازنشانی',
	'years' => '{{PLURAL: $1|سال|سال}}',
	'weeks' => '{{PLURAL: $1|هفته|هفته}}',
	'days' => '{{PLURAL: $1|روز|روز}}',
	'hours' => '{{PLURAL: $1|ساعت|ساعت}}',
	'minutes' => '{{PLURAL: $1|دقیقه|دقیقه}}',
	'seconds' => '{{PLURAL: $1|ثانیه|ثانیه}}',
	'last-modified-date' => 'آخرین تغییر: $1',
	'view-source' => 'نمایش مبدأ',
	'and' => '&#32;و',
);

/** Finnish (suomi)
 * @author Nike
 * @author Olli
 * @author Pxos
 * @author Silvonen
 * @author Stryn
 */
$messages['fi'] = array(
	'hello' => 'Moikka',
	'welcome' => 'Tervetuloa',
	'toolversion' => 'Versio $1',
	'toolversionstamp' => 'Versio $1 ($2)',
	'etc' => 'jne.',
	'namespace' => 'Nimiavaruus',
	'form-submit' => 'Mene',
	'form-reset' => 'Tyhjennä',
	'years' => '{{PLURAL: $1|vuosi|vuotta}}',
	'weeks' => '{{PLURAL: $1|viikko|viikkoa}}',
	'days' => '{{PLURAL: $1|päivä|päivää}}',
	'hours' => '{{PLURAL: $1|tunti|tuntia}}',
	'minutes' => '{{PLURAL: $1|minuutti|minuuttia}}',
	'seconds' => '{{PLURAL: $1|sekunti|sekuntia}}',
	'last-modified-date' => 'Viimeksi muokattu $1',
	'view-source' => 'Näytä lähdekoodi',
	'and' => '&#32;ja',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'hello' => 'Halló',
	'welcome' => 'Vælkomin',
	'toolversionstamp' => 'Versjón $1 ($2)',
	'etc' => 'osfr.',
	'namespace' => 'Navnarúm',
	'form-submit' => 'Far',
	'form-reset' => 'Nullstilla',
	'years' => '{{PLURAL: $1|ár|ár}}',
	'weeks' => '{{PLURAL: $1|vika|vikur}}',
	'days' => '{{PLURAL: $1|dagur|dagar}}',
	'hours' => '{{PLURAL: $1|tími|tímar}}',
	'minutes' => '{{PLURAL: $1|minuttur|minuttir}}',
	'seconds' => '{{PLURAL: $1|sekund|sekundir}}',
	'last-modified-date' => 'Seinast broytt: $1',
	'view-source' => 'Vís keldu',
	'and' => '&#32;og',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Od1n
 * @author Platonides
 */
$messages['fr'] = array(
	'hello' => 'Bonjour',
	'welcome' => 'Bienvenue',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espace de noms',
	'form-submit' => 'Valider',
	'form-reset' => 'Réinitialiser',
	'years' => '{{PLURAL: $1|année|années}}',
	'weeks' => '{{PLURAL: $1|semaine|semaines}}',
	'days' => '{{PLURAL: $1|jour|jours}}',
	'hours' => '{{PLURAL: $1|heure|heures}}',
	'minutes' => '{{PLURAL: $1|minute|minutes}}',
	'seconds' => '{{PLURAL: $1|seconde|secondes}}',
	'last-modified-date' => 'Dernière modification : $1',
	'view-source' => 'Voir la source',
	'and' => '&#32;et',
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'hello' => 'Bonjorn',
	'welcome' => 'Benvegnua',
	'toolversionstamp' => 'Vèrsion $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Èspâço de noms',
	'form-submit' => 'Validar',
	'form-reset' => 'Tornar inicialisar',
	'years' => 'an{{PLURAL:$1||s}}',
	'weeks' => 'seman{{PLURAL:$1|a|es}}',
	'days' => 'jorn{{PLURAL:$1||s}}',
	'hours' => 'hor{{PLURAL:$1|a|es}}',
	'minutes' => 'menut{{PLURAL:$1|a|es}}',
	'seconds' => 'second{{PLURAL:$1|a|es}}',
	'last-modified-date' => 'Dèrriér changement : $1',
	'view-source' => 'Vêre lo tèxto sôrsa',
	'and' => '&#32;et',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'welcome' => 'Fáilte',
	'namespace' => 'Ainmspás',
	'form-submit' => 'Gabh',
	'form-reset' => 'Athshocraigh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'dateformat' => '%e de %B de %Y',
	'hello' => 'Ola',
	'welcome' => 'Benvido',
	'toolversion' => 'Versión $1',
	'toolversionstamp' => 'Versión $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espazo de nomes',
	'form-submit' => 'Ir',
	'form-reset' => 'Restablecer',
	'years' => '{{PLURAL: $1|ano|anos}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|día|días}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificación: $1',
	'view-source' => 'Ver o código fonte',
	'and' => '&#32;e',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'hello' => 'હેલો',
	'welcome' => 'સ્વાગત',
	'etc' => 'વગેરે',
	'form-submit' => 'જાઓ',
	'form-reset' => 'ફરી ગોઠવો',
	'view-source' => 'સ્રોત જુઓ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Platonides
 * @author YaronSh
 */
$messages['he'] = array(
	'hello' => 'שלום',
	'welcome' => 'ברוך בואך',
	'toolversionstamp' => 'גרסה $1 ($2)‏',
	'etc' => 'וכו׳',
	'namespace' => 'מרחב שם',
	'form-submit' => 'מעבר',
	'form-reset' => 'איפוס',
	'years' => '{{PLURAL: $1|שנה|שנים}}',
	'weeks' => '{{PLURAL: $1|שבוע|שבועות}}',
	'days' => '{{PLURAL: $1|יום|ימים}}',
	'hours' => 'שע׳',
	'minutes' => 'דק׳',
	'seconds' => 'שנ׳',
	'last-modified-date' => 'שונה לאחרונה: $1',
	'view-source' => 'הצגת מקור',
	'and' => '&#32;וגם',
);

/** Hindi (हिन्दी)
 * @author Platonides
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'hello' => 'नमस्कार',
	'welcome' => 'सुस्वागतम्‌!',
	'toolversionstamp' => 'वर्ज़न $1 ($2)',
	'etc' => 'आदि',
	'namespace' => 'नामस्थान',
	'form-submit' => 'जायें',
	'form-reset' => 'रीसेट करें',
	'years' => '{{PLURAL: $1|वर्ष}}',
	'weeks' => '{{PLURAL: $1|सप्ताह}}',
	'days' => '{{PLURAL: $1|दिन}}',
	'hours' => '{{PLURAL:$1|घंटा|घंटे}}',
	'minutes' => '{{PLURAL: $1|मिनट}}',
	'seconds' => '{{PLURAL: $1|सॅकेंड}}',
	'last-modified-date' => 'अंतिम परिवर्तन: $1',
	'view-source' => 'स्रोत देखें',
	'and' => '&#32;और',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'hello' => 'Pozdrav',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Inačica $1 ($2)',
	'etc' => 'itd.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => '{{PLURAL: $1|godina|godine|godina}}',
	'weeks' => '{{PLURAL: $1|tjedan|tjedna|tjedana}}',
	'days' => 'dana', # Fuzzy
	'hours' => 'sati', # Fuzzy
	'minutes' => '{{PLURAL: $1|minuta|minute|minuta}}',
	'seconds' => '{{PLURAL: $1|sekunda|sekunde|sekundi}}',
	'last-modified-date' => 'Zadnja izmjena: $1',
	'view-source' => 'Prikaži izvor',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'hello' => 'Halo',
	'welcome' => 'Witaj',
	'toolversion' => 'Wersija $1',
	'toolversionstamp' => 'Wersija $1 ($2)',
	'etc' => 'atd.',
	'namespace' => 'Mjenowy rum',
	'form-submit' => 'Wotpósłać',
	'form-reset' => 'Wróćo stajić',
	'years' => '{{PLURAL: $1|lěto|lěće|lěta|lět}}',
	'weeks' => '{{PLURAL: $1|tydźeń|njedźeli|njedźele|njedźel}}',
	'days' => '{{PLURAL: $1|dźeń|dnjej|dny|dnjow}}',
	'hours' => '{{PLURAL:$1|hodźina|hodźinje|hodźiny|hodźin}}',
	'minutes' => '{{PLURAL: $1|mjeńšina|mjeńšinje|mjeńšiny|mjeńšin}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
	'last-modified-date' => 'Posledni raz změnjeny: $1',
	'view-source' => 'Žórłowy tekst pokazać',
	'and' => '&#32;a',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 */
$messages['hu'] = array(
	'hello' => 'Szia',
	'welcome' => 'Üdvözlet',
	'toolversionstamp' => 'Verzió: $1 ($2)',
	'etc' => 'stb.',
	'namespace' => 'Névtér',
	'form-submit' => 'Gyerünk',
	'form-reset' => 'Alaphelyzet',
	'years' => '{{PLURAL: $1|év|év}}',
	'weeks' => '{{PLURAL: $1|hét|hét}}',
	'days' => '{{PLURAL: $1|nap|nap}}',
	'hours' => '{{PLURAL: $1|óra|óra}}',
	'minutes' => '{{PLURAL: $1|perc|perc}}',
	'seconds' => '{{PLURAL: $1|másodperc|másodperc}}',
	'last-modified-date' => 'Utolsó módosítás ideje: $1',
	'view-source' => 'Forrás megtekintése',
	'and' => '&#32;és',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'hello' => 'Salute',
	'welcome' => 'Benvenite',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Spatio de nomines',
	'form-submit' => 'Va',
	'form-reset' => 'Reinitialisar',
	'years' => '{{PLURAL: $1|anno|annos}}',
	'weeks' => '{{PLURAL: $1|septimana|septimanas}}',
	'days' => '{{PLURAL: $1|die|dies}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuta|minutas}}',
	'seconds' => '{{PLURAL: $1|secunda|secundas}}',
	'last-modified-date' => 'Ultime modification: $1',
	'view-source' => 'Vider texto fonte',
	'and' => '&#32;e',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 * @author IvanLanin
 */
$messages['id'] = array(
	'hello' => 'Halo',
	'welcome' => 'Selamat datang',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'dll.',
	'namespace' => 'Ruang nama',
	'form-submit' => 'Kirim',
	'form-reset' => 'Reset',
	'years' => '{{PLURAL: $1|Tahun|Tahun}}',
	'weeks' => '{{PLURAL: $1|Minggu|minggu}}',
	'days' => '{{PLURAL: $1|hari|hari}}',
	'hours' => '{{PLURAL: $1|Jam|jam}}',
	'minutes' => '{{PLURAL: $1|Menit|menit}}',
	'seconds' => '{{PLURAL: $1|Detik|detik}}',
	'last-modified-date' => 'Terakhir diubah: $1',
	'view-source' => 'Lihat sumber',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'hello' => 'Ndeewo',
	'welcome' => 'Nnọọ',
	'etc' => 'etc.',
	'namespace' => 'Ámááhà',
	'form-submit' => 'Gá',
	'view-source' => 'Zi mkpurụ',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'hello' => 'Kumusta',
	'welcome' => 'Kablaaw!',
	'toolversionstamp' => 'Bersion $1 ($2)',
	'etc' => 'kdpy.',
	'namespace' => 'Nagan ti lugar',
	'form-submit' => 'Inkan',
	'form-reset' => 'Isubli',
	'years' => '{{PLURAL: $1|tawen|taw-tawen}}',
	'weeks' => '{{PLURAL: $1|lawas|law-lawas}}',
	'days' => '{{PLURAL: $1|aldaw|al-aldaw}}',
	'hours' => '{{PLURAL: $1|oras|or-oras}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|seg-segundo}}',
	'last-modified-date' => 'Kinaudi a binaliwan: $1',
	'view-source' => 'Kitaen ti taudan',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 * @author Умар
 */
$messages['inh'] = array(
	'hello' => 'Салам',
	'welcome' => 'Маьрша доагIалда',
	'namespace' => 'ЦIерий аренаш',
	'form-submit' => 'Кхоачашде',
	'form-reset' => 'Юхаоттар',
	'years' => '{{PLURAL: $1|шу|шера|шераш}}',
	'weeks' => '{{PLURAL: $1|к|иранди|к|иранден|к|иранденош}}',
	'days' => '{{PLURAL: $1|ди|ден|денош}}',
	'hours' => '{{PLURAL: $1|сахьт}}',
);

/** Italian (italiano)
 * @author Beta16
 * @author Nemo bis
 * @author Platonides
 * @author Rippitippi
 */
$messages['it'] = array(
	'hello' => 'Ciao',
	'welcome' => 'Benvenuto/a',
	'toolversion' => 'Versione $1',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
	'namespace' => 'Namespace',
	'form-submit' => 'Vai',
	'form-reset' => 'Reimposta',
	'years' => '{{PLURAL: $1|anno|anni}}',
	'weeks' => '{{PLURAL: $1|settimana|settimane}}',
	'days' => '{{PLURAL:$1|giorno|giorni}}',
	'hours' => '{{PLURAL:$1|ora|ore}}',
	'minutes' => '{{PLURAL:$1|minuto|minuti}}',
	'seconds' => '{{PLURAL:$1|secondo|secondi}}',
	'last-modified-date' => 'Ultima modifica: $1',
	'view-source' => 'Visualizza sorgente',
	'and' => '&#32;e',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'dateformat' => '%Y年%m月%d日',
	'hello' => 'こんにちは',
	'welcome' => 'ようこそ',
	'toolversion' => 'バージョン $1',
	'toolversionstamp' => 'バージョン $1 ($2)',
	'etc' => 'など',
	'colon-separator' => ':',
	'namespace' => '名前空間',
	'form-submit' => '実行',
	'form-reset' => 'リセット',
	'years' => '{{PLURAL: $1|年}}',
	'weeks' => '{{PLURAL: $1|週間}}',
	'days' => '{{PLURAL: $1|日}}',
	'hours' => '{{PLURAL: $1|時間}}',
	'minutes' => '{{PLURAL: $1|分}}',
	'seconds' => '{{PLURAL: $1|秒}}',
	'last-modified-date' => '最終更新: $1',
	'view-source' => 'ソースを表示',
	'parentheses' => '($1)',
	'comma-separator' => '、',
	'and' => '&#32;および&#32;',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'hello' => 'Halo',
	'welcome' => 'Sugeng rawuh',
	'toolversionstamp' => 'Vèrsi $1 ($2)',
	'etc' => 'lsp.',
	'namespace' => 'Bilik jeneng',
	'form-submit' => 'Kirim',
	'form-reset' => 'Rèsèt',
	'years' => '{{PLURAL: $1|taun|taun}}',
	'weeks' => '{{PLURAL: $1|minggu|minggu}}',
	'days' => '{{PLURAL: $1|dina|dina}}',
	'hours' => '{{PLURAL: $1|jam|jam}}',
	'minutes' => '{{PLURAL: $1|menit|menit}}',
	'seconds' => '{{PLURAL: $1|detik|detik}}',
	'last-modified-date' => 'Pungkasan diowah: $1',
	'view-source' => 'Delok sumber',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'hello' => 'გამარჯობა',
	'welcome' => 'კეთილი იყოს თქვენი მობრძანება',
	'etc' => 'და ა.შ.',
	'namespace' => 'სახელთა სივრცე',
	'form-submit' => 'მიდი',
	'years' => '{{PLURAL:$1|წელი|წელი}}',
	'weeks' => '{{PLURAL:$1|კვირა|კვირა}}',
	'days' => '{{PLURAL:$1|დღე|დღე}}',
	'hours' => '{{PLURAL:$1|საათი|საათი}}',
	'minutes' => '{{PLURAL:$1|წუთი|წუთი}}',
	'seconds' => '{{PLURAL:$1|წამი|წამი}}',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'hello' => 'សួស្ដី',
	'welcome' => 'សូមស្វាគមន៍',
	'toolversionstamp' => 'ច្បាប់ទី $1 ($2)',
	'etc' => '-ល-',
	'namespace' => 'លំហឈ្មោះ',
	'form-submit' => 'ទៅ',
	'form-reset' => 'ធ្វើឱ្យដូចដើមវិញ',
	'years' => '{{PLURAL: $1|ឆ្នាំ|ឆ្នាំ}}',
	'weeks' => '{{PLURAL: $1|សប្តាហ៍|សប្តាហ៍}}',
	'days' => '{{PLURAL: $1|ថ្ងៃ​|ថ្ងៃ​}}',
	'hours' => '{{PLURAL: $1|ម៉ោង​|ម៉ោង​}}',
	'minutes' => '$1{{PLURAL:$1|នាទី|នាទី}}',
	'seconds' => '$1 {{PLURAL:$1|វិនាទី|វិនាទី}}',
	'last-modified-date' => 'ត្រូវបានកែប្រែលើកចុងក្រោយ៖ $1',
	'view-source' => 'មើល​កូដ',
);

/** Kannada (ಕನ್ನಡ)
 * @author M G Harish
 * @author Platonides
 */
$messages['kn'] = array(
	'hello' => 'ನಮಸ್ಕಾರ',
	'welcome' => 'ಸುಸ್ವಾಗತ',
	'toolversionstamp' => 'ಆವೃತ್ತಿ $1 ($2)',
	'etc' => 'ಇತ್ಯಾದಿ',
	'namespace' => 'ನಾಮವರ್ಗ',
	'form-submit' => 'ಹೋಗು',
	'form-reset' => 'ಮರುಹೊಂದಿಸು',
	'years' => '$1 {{PLURAL:$1|ವರ್ಷ|ವರ್ಷಗಳು}}',
	'weeks' => '$1 {{PLURAL:$1|ವಾರ|ವಾರಗಳು}}',
	'days' => '$1 {{PLURAL:$1|ದಿನ|ದಿನಗಳು}}',
	'hours' => '$1 {{PLURAL:$1|ಘಂಟೆ|ಘಂಟೆಗಳು}}',
	'minutes' => '$1 {{PLURAL:$1|ನಿಮಿಷ|ನಿಮಿಷಗಳು}}',
	'seconds' => '$1 {{PLURAL:$1|ಕ್ಷಣ|ಕ್ಷಣಗಳು}}',
	'last-modified-date' => 'ಕೊನೆಯ ಬದಲಾವಣೆ: $1',
	'view-source' => 'ಆಕರ ವೀಕ್ಷಿಸಿ',
	'and' => '&#32;ಮತ್ತು',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'hello' => '안녕하세요',
	'welcome' => '환영합니다',
	'toolversion' => '버전 $1',
	'toolversionstamp' => '버전 $1 ($2)',
	'etc' => '기타',
	'namespace' => '이름공간',
	'form-submit' => '가기',
	'form-reset' => '초기화',
	'years' => '{{PLURAL: $1|년}}',
	'weeks' => '{{PLURAL: $1|주}}',
	'days' => '{{PLURAL: $1|일}}',
	'hours' => '{{PLURAL: $1|시}}',
	'minutes' => '{{PLURAL: $1|분}}',
	'seconds' => '{{PLURAL: $1|초}}',
	'last-modified-date' => '최근 수정일: $1',
	'view-source' => '원본 보기',
	'and' => '&#32;(와)과',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'dateformat' => '%d. %B %Y',
	'hello' => 'Ene schööne Daach!',
	'welcome' => 'Wellkumme!',
	'toolversionstamp' => 'De Version $1 vum $2',
	'etc' => 'uew.',
	'namespace' => 'Appachtemang',
	'form-submit' => 'Lohß Jonn!',
	'form-reset' => 'Et Enjävve neu Aanfange!',
	'years' => '{{PLURAL: $1|Johr|Johre|Johre}}',
	'weeks' => '{{PLURAL: $1|Woch|Woche|Woche}}',
	'days' => '{{PLURAL:$1|Daach|Dääsch|Daach}}',
	'hours' => '({{PLURAL:$1|Shtund|Shtunde|Shtunde}})',
	'minutes' => '{{PLURAL:$1|Menutt|Menutte|Menutte}}',
	'seconds' => '{{PLURAL:$1|Sekund|Sekunde|Sekund}}',
	'last-modified-date' => 'Et läz jeändert aam $1',
	'view-source' => 'Der Quelltäx vum Projramm',
	'and' => ',&#32;un',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'hello' => 'Silav',
	'welcome' => 'Bi xêr hatî',
	'etc' => 'hwd.',
	'namespace' => 'Boşahîya nav',
	'view-source' => 'Çavkanîyê bibîne',
);

/** Kyrgyz (Кыргызча)
 * @author Chorobek
 * @author Growingup
 * @author Викиней
 */
$messages['ky'] = array(
	'hello' => 'Бар болуңуз',
	'welcome' => 'Кош келиңиз',
	'toolversionstamp' => 'Версия $1 ($2)',
	'etc' => 'ж.б.у.с.',
	'namespace' => 'Аталыштар мейкиндиги',
	'form-submit' => 'Алга',
	'form-reset' => 'Тазала',
	'years' => '{{PLURAL: $1|жыл|жылдар}}',
	'weeks' => '{{PLURAL: $1|апта|апталар}}',
	'days' => '{{PLURAL: $1|күн|күндөр}}',
	'hours' => '{{PLURAL: $1|саат|сааттар}}',
	'minutes' => '{{PLURAL: $1|мүнөт|мүнөттөр}}',
	'seconds' => '{{PLURAL: $1|секунд|секундалар}}',
	'last-modified-date' => '$1 акыркы жолу өзгөртүлгөн',
	'view-source' => 'Кайнарды кара',
	'and' => '&#32;жана',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'hello' => 'Salve',
	'form-submit' => 'Ire',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Platonides
 * @author Robby
 */
$messages['lb'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Salut',
	'welcome' => 'Wëllkomm',
	'toolversion' => 'Versioun $1',
	'toolversionstamp' => 'Versioun $1 ($2)',
	'etc' => 'asw.',
	'namespace' => 'Nummraum',
	'form-submit' => 'Lass',
	'form-reset' => 'Zrécksetzen',
	'years' => '{{PLURAL: $1|Joer|Joer}}',
	'weeks' => '{{PLURAL: $1|Woch|Wochen}}',
	'days' => '{{PLURAL: $1|Dag|Deeg}}',
	'hours' => '{{PLURAL: $1|Stonn|Stonnen}}',
	'minutes' => '{{PLURAL: $1|Minutt|Minutten}}',
	'seconds' => '{{PLURAL: $1|Sekonn|Sekonnen}}',
	'last-modified-date' => 'Lescht Ännerung: $1',
	'view-source' => 'Quellcode weisen',
	'and' => '&#32;a(n)',
);

/** Lezghian (лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'welcome' => 'Ша башуьсте',
	'years' => 'йисар', # Fuzzy
	'weeks' => '{{PLURAL: $1|афте|афтеяр}}',
	'days' => '{{PLURAL: $1|югъ|йикъар}}',
	'hours' => '{{PLURAL: $1|сят|сятерал}}',
);

/** لوری (لوری)
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'hello' => 'سلام',
	'welcome' => 'خوش اومايت',
	'toolversionstamp' => 'نسقه $1($2)',
	'etc' => 'همچنو.',
	'namespace' => 'نوم جا',
	'form-submit' => 'رو',
	'form-reset' => 'د نو شرو كردن',
	'years' => '{{جمی: $1|سال|سالیا}}', # Fuzzy
	'weeks' => '{{جمی: $1|هفته|هفته یا}}', # Fuzzy
	'days' => '{{جمی: $1|رو|زوزا}}', # Fuzzy
	'hours' => '{{جمی: $1|ساعت|ساعتیا}}', # Fuzzy
	'minutes' => '{{جمی: $1|دیقه|دیقه یا}}', # Fuzzy
	'seconds' => '{{جمی: $1|تیه وه یک زنون|تیه وه یک زنون یا}}', # Fuzzy
	'last-modified-date' => 'آخرین آلشت:$1',
	'view-source' => 'سرچشمه نه بوينيت',
	'and' => '&#32;و',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Matasg
 */
$messages['lt'] = array(
	'hello' => 'Sveiki',
	'welcome' => 'Sveiki atvykę',
	'toolversionstamp' => 'Versija $1 ($2)',
	'etc' => 'ir t. t.',
	'namespace' => 'Vardų sritis',
	'form-submit' => 'Eiti',
	'form-reset' => 'Atstatyti',
	'years' => 'metų', # Fuzzy
	'weeks' => 'savaičių', # Fuzzy
	'days' => 'dienų', # Fuzzy
	'hours' => 'valandų', # Fuzzy
	'minutes' => '{{PLURAL: $1|minutė|minučių}}',
	'seconds' => '$1 {{PLURAL:$1|sekundė|sekundžių}}',
	'last-modified-date' => 'Paskutinį kartą atnaujinta: $1',
	'view-source' => 'Peržiūrėti šaltinį',
	'and' => '&#32;ir',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'namespace' => 'Vārdtelpa',
	'form-submit' => 'Aiziet',
	'form-reset' => 'Notīrīt',
	'years' => '{{PLURAL: $1|gads|gadi}}',
	'weeks' => '{{PLURAL: $1|nedēļa|nedēļas}}',
	'days' => '{{PLURAL: $1|diena|dienas}}',
	'hours' => '{{PLURAL: $1|stunda|stundas}}',
	'minutes' => '{{PLURAL: $1|minūte|minūtes}}',
	'seconds' => '{{PLURAL: $1|sekunde|sekundes}}',
	'last-modified-date' => 'Pēdējoreiz mainīts: $1',
	'view-source' => 'Aplūkot kodu',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'hello' => 'Halo',
	'welcome' => 'Sugeng teka',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'lsp.',
	'namespace' => 'Bilik jeneng',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'hello' => 'Salam',
	'welcome' => 'Salamaik datang',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'dll.',
	'namespace' => 'Ruangnamo',
	'form-submit' => 'Tuju',
	'form-reset' => 'Reset',
	'years' => '{{PLURAL: $1|taun}}',
	'weeks' => '{{PLURAL: $1|pakan}}',
	'days' => '{{PLURAL: $1|ari}}',
	'hours' => '{{PLURAL: $1|jam}}',
	'minutes' => '{{PLURAL: $1|minik}}',
	'seconds' => '{{PLURAL: $1|datiak}}',
	'last-modified-date' => 'Tarakhia diubah: $1',
	'view-source' => 'Caliak sumber',
	'and' => '&#32;jo',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Здраво',
	'welcome' => 'Добредојдовте',
	'toolversion' => 'Верзија $1',
	'toolversionstamp' => 'Верзија $1 ($2)',
	'etc' => 'и тн.',
	'namespace' => 'Именски простор',
	'form-submit' => 'Оди',
	'form-reset' => 'Одново',
	'years' => '{{PLURAL: $1|година|години}}',
	'weeks' => '{{PLURAL: $1|недела|недели}}',
	'days' => '{{PLURAL: $1|ден|дена}}',
	'hours' => '{{PLURAL: $1|час|часа}}',
	'minutes' => '{{PLURAL: $1|минута|минути}}',
	'seconds' => '{{PLURAL: $1|секунда|секунди}}',
	'last-modified-date' => 'Последена измена: $1',
	'view-source' => 'Извор',
	'and' => '&#32;и',
);

/** Malayalam (മലയാളം)
 * @author Anoopan
 * @author Platonides
 * @author Suresh.balasubra
 */
$messages['ml'] = array(
	'hello' => 'ഹലോ',
	'welcome' => 'സ്വാഗതം',
	'toolversion' => 'പതിപ്പ് $1',
	'toolversionstamp' => 'പതിപ്പ് $1 ($2)',
	'etc' => 'മുതലായവ..',
	'namespace' => 'നാമമേഖല',
	'form-submit' => 'പോകൂ',
	'form-reset' => 'പുനഃക്രമീകരിക്കുക',
	'years' => '{{PLURAL:$1|ഒരു വർഷം|$1 വർഷം}}',
	'weeks' => '{{PLURAL:$1|ഒരു ആഴ്ച്ച|$1 ആഴ്ച്ച}}',
	'days' => '{{PLURAL:$1| ദിവസം| ദിവസങ്ങൾ}}',
	'hours' => '({{PLURAL:$1| മണിക്കൂർ| മണിക്കൂറുകൾ}})',
	'minutes' => '{{PLURAL:$1|മിനിറ്റ്|മിനിറ്റുകൾ}}',
	'seconds' => '{{PLURAL:$1|സെക്കന്റ്| സെക്കന്റുകൾ}}',
	'last-modified-date' => 'അവസാനമായി മാറ്റങ്ങൾ വരുത്തിയത് : $1',
	'view-source' => 'മൂലരൂപം കാണുക',
	'and' => '&#32;ഒപ്പം',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'hello' => 'नमस्कार',
	'welcome' => 'स्वागत',
	'toolversionstamp' => 'आवृत्ती $1 ($2)',
	'etc' => 'इत्यादी',
	'namespace' => 'नामविश्वे',
	'form-submit' => 'जा',
	'form-reset' => 'पुनर्स्थापन(रिसेट)',
	'years' => '{{PLURAL: $1|वर्ष|वर्षे}}',
	'weeks' => '{{PLURAL: $1|आठवडा|आठवडे}}',
	'days' => '{{PLURAL: $1|दिवस}}',
	'hours' => '{{PLURAL: $1|तास}}',
	'minutes' => '{{PLURAL: $1|मिनिट|मिनिटे}}',
	'seconds' => '{{PLURAL: $1|सेकंद}}',
	'last-modified-date' => 'शेवटचा बदल: $1',
	'view-source' => 'स्रोत बघा',
	'and' => '&#32;व',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Platonides
 */
$messages['ms'] = array(
	'hello' => 'Apa khabar',
	'welcome' => 'Selamat datang',
	'toolversionstamp' => 'Versi $1 ($2)',
	'etc' => 'dsb.',
	'namespace' => 'Ruang nama',
	'form-submit' => 'Pergi',
	'form-reset' => 'Set semula',
	'years' => '{{PLURAL: $1|tahun|tahun}}',
	'weeks' => '{{PLURAL: $1|minggu|minggu}}',
	'days' => '{{PLURAL: $1|hari|hari}}',
	'hours' => '{{PLURAL: $1|jam|jam}}',
	'minutes' => '{{PLURAL: $1|minit|minit}}',
	'seconds' => '{{PLURAL: $1|saat|saat}}',
	'last-modified-date' => 'Kali terakhir diubah: $1',
	'view-source' => 'Lihat sumber',
	'and' => '&#32;dan',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'welcome' => 'Merħba',
	'toolversionstamp' => 'Verżjoni $1 ($2)',
	'etc' => 'eċċ.',
	'namespace' => 'Spazju tal-isem',
	'form-submit' => 'Mur',
	'form-reset' => 'Irrisettja',
	'years' => '{{PLURAL: $1|sena|snin}}',
	'weeks' => '{{PLURAL: $1|ġimgħa|ġimgħat}}',
	'days' => '{{PLURAL: $1|jum|jiem}}',
	'hours' => '{{PLURAL: $1|siegħa|sigħat}}',
	'minutes' => '{{PLURAL: $1|minuta|minuti}}',
	'seconds' => '{{PLURAL: $1|sekonda|sekondi}}',
	'last-modified-date' => 'L-aħħar modifika: $1',
	'view-source' => 'Ara s-sors',
	'and' => '&#32;u',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'welcome' => 'ကြိုဆိုပါသည်',
	'namespace' => 'အမည်ညွှန်းများ',
	'form-submit' => 'သွား​ပါ​',
	'form-reset' => 'Reset ချရန်',
	'view-source' => 'ရင်းမြစ်ကို ကြည့်ရန်',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Velkommen',
	'toolversionstamp' => 'Versjon $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerom',
	'form-submit' => 'Gå',
	'form-reset' => 'Nullstill',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uke|uker}}',
	'days' => '{{PLURAL: $1|dag|dager}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minutt|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Sist endret: $1',
	'view-source' => 'Vis kilde',
	'and' => '&#32;og',
);

/** Nepali (नेपाली)
 * @author Krish Dulal
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'hello' => 'नमस्कार',
	'toolversion' => 'संस्करण $1',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'hello' => 'ज्वजलपा',
	'welcome' => 'लसकुस',
	'toolversionstamp' => 'संस्करण $1 ($2)',
	'etc' => 'आदि',
	'namespace' => 'नेमस्पेस:',
	'form-submit' => 'झासँ',
	'form-reset' => 'रिसेत',
	'years' => '{{PLURAL: $1|दँ|दँ}}', # Fuzzy
	'weeks' => '{{PLURAL: $1|वा|वा}}', # Fuzzy
	'days' => '{{PLURAL: $1|दिं|दिं}}', # Fuzzy
	'hours' => '{{PLURAL: $1|घौ|घौ}}', # Fuzzy
	'minutes' => '{{PLURAL: $1|मिनेत|मिनेत}}', # Fuzzy
	'seconds' => '{{PLURAL: $1|सेकेन्द|सेकेन्द}}', # Fuzzy
	'last-modified-date' => 'दकले लिउ संस्करण', # Fuzzy
	'view-source' => 'स्रोत स्वयादिसँ',
	'and' => '&#32;व',
);

/** Dutch (Nederlands)
 * @author GerardM
 * @author Krinkle
 * @author Platonides
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Hallo',
	'welcome' => 'Welkom',
	'toolversion' => 'Versie $1',
	'toolversionstamp' => 'Versie $1 ($2)',
	'etc' => 'enzovoort',
	'namespace' => 'Naamruimte',
	'form-submit' => 'OK',
	'form-reset' => 'Opnieuw instellen',
	'years' => '{{PLURAL: $1|jaar|jaren}}',
	'weeks' => '{{PLURAL: $1|week|weken}}',
	'days' => '{{PLURAL: $1|dag|dagen}}',
	'hours' => '{{PLURAL: $1|uur|uur}}',
	'minutes' => '{{PLURAL: $1|minuut|minuten}}',
	'seconds' => '{{PLURAL: $1|seconde|seconden}}',
	'last-modified-date' => 'Laatste wijziging op: $1',
	'view-source' => 'Brontekst bekijken',
	'and' => '&#32;en',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Platonides
 */
$messages['nn'] = array(
	'and' => '&#32;og',
);

/** no (no)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Velkommen',
	'toolversionstamp' => 'Versjon $1 ($2)',
	'etc' => 'osv.',
	'namespace' => 'Navnerom',
	'form-submit' => 'Gå',
	'form-reset' => 'Nullstill',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|uke|uker}}',
	'days' => '{{PLURAL: $1|dag|dager}}',
	'hours' => '{{PLURAL: $1|time|timer}}',
	'minutes' => '{{PLURAL: $1|minutt|minutter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Sist endret: $1',
	'view-source' => 'Vis kilde',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'hello' => 'Bonjorn',
	'welcome' => 'Benvenguda',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaci de noms',
	'form-submit' => 'Validar',
	'form-reset' => 'Reïnicializar',
	'years' => '{{PLURAL: $1|annada|annadas}}',
	'weeks' => '{{PLURAL: $1|setmana|setmanas}}',
	'days' => '{{PLURAL: $1|jorn|jorns}}',
	'hours' => '{{PLURAL:$1|ora|oras}}',
	'minutes' => '{{PLURAL:$1|minuta|minutas}}',
	'seconds' => '{{PLURAL:$1|segonda|segondas}}',
	'last-modified-date' => 'Darrièra modificacion : $1',
	'view-source' => 'Veire la font',
	'and' => '&#32;e',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'hello' => 'ନମସ୍କାର',
	'welcome' => 'ସ୍ଵାଗତ',
	'toolversionstamp' => '($2) $1ସଂସ୍କରଣ',
	'etc' => 'ଇତ୍ୟାଦି ।',
	'namespace' => 'ନେମସ୍ପେସ',
	'form-submit' => 'ଯିବେ',
	'form-reset' => 'ପୁନସ୍ଥାପନ',
	'years' => '{{PLURAL: $1|ବର୍ଷ|ବର୍ଷଗୁଡିକ}}',
	'weeks' => '{{PLURAL: $1|ସପ୍ତାହ|ସପ୍ତାହଗୁଡିକ}}',
	'days' => '($1 {{PLURAL:$1|ଦିନ|ଦିନଗୁଡିକ}})',
	'hours' => '($1 {{PLURAL:$1|ଘଣ୍ଟା|ଘଣ୍ଟା}})',
	'minutes' => '$1 {{PLURAL:$1|ମିନିଟ|ମିନିଟ}}',
	'seconds' => '$1 {{PLURAL:$1|ସେକେଣ୍ଡ|ସେକେଣ୍ଡ}}',
	'last-modified-date' => 'ଗତଥର ବଦଳା ଯାଇଥିଲା :$1',
	'view-source' => 'ମୂଳାଧାର ଦେଖିବେ',
	'and' => '&#32;ଏବଂ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'hello' => 'Heiya',
	'welcome' => 'Wilkum',
	'namespace' => 'Blatznaame',
	'years' => '{{PLURAL: $1|Yaahr|Yaahre}}',
	'weeks' => '{{PLURAL: $1|Woch|Woche}}',
	'days' => '{{PLURAL: $1|Daag|Daag}}',
	'hours' => '{{PLURAL:$1|Schtund|Schtund}}',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'hello' => 'Hallo',
	'welcome' => 'Willkumme',
	'toolversionstamp' => 'Ausgaw $1 ($2)',
	'etc' => 'usw.',
	'namespace' => 'Nomensraum',
	'form-submit' => 'Ausfiare',
	'form-reset' => 'Zriggsedze',
	'years' => '{{PLURAL: $1|Joa|Joare}}',
	'weeks' => '{{PLURAL: $1|Woch|Woche}}',
	'days' => '{{PLURAL: $1|Daach|Daache}}',
	'hours' => '{{PLURAL: $1|Schdund|Schdunde}}',
	'minutes' => '{{PLURAL: $1|Minud|Minude}}',
	'seconds' => '$1 {{PLURAL:$1|Sekund|Sekunde}}',
	'last-modified-date' => "Zuledschd g'änad: $1",
	'view-source' => 'Qwelltegschd oazaische',
);

/** Pali (पालि)
 * @author Anand Vivek Satpathi
 */
$messages['pi'] = array(
	'form-submit' => 'गच्छामि',
);

/** Polish (polski)
 * @author Odder
 * @author Platonides
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'hello' => 'Witaj',
	'welcome' => 'Witaj',
	'toolversionstamp' => 'Wersja $1 z $2',
	'etc' => 'itp.',
	'namespace' => 'Przestrzeń nazw',
	'form-submit' => 'Dalej',
	'form-reset' => 'Wyczyść',
	'years' => '{{PLURAL:$1|rok|lata|lat}}',
	'weeks' => '{{PLURAL:$1|tydzień|tygodnie|tygodni}}',
	'days' => '{{PLURAL:$1|dzień|dni}}',
	'hours' => '{{PLURAL:$1|godzina|godziny|godzin}}',
	'minutes' => '{{PLURAL:$1|minuta|minuty|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundy|sekund}}',
	'last-modified-date' => 'Ostatnia modyfikacja $1',
	'view-source' => 'Tekst źródłowy',
	'and' => '&#32;oraz',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'hello' => 'Cerea',
	'welcome' => 'Bin ëvnù',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'e via fòrt',
	'namespace' => 'Spassi nominal',
	'form-submit' => 'Va',
	'form-reset' => 'Spian-a',
	'years' => '{{PLURAL: $1|ann|agn}}',
	'weeks' => '{{PLURAL:$1|sman-a|sman-e}}',
	'days' => '{{PLURAL:$1|di}}',
	'hours' => '{{PLURAL:$1|ora|ore}}',
	'minutes' => '{{PLURAL:$1|minuta|minute}}',
	'seconds' => '{{PLURAL:$1|second}}',
	'last-modified-date' => 'Ùltima modìfica: $1',
	'view-source' => 'Vardé la sorgiss',
	'and' => '&#32;e',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'hello' => 'سلامونه',
	'welcome' => 'ښه راغلۍ',
	'toolversionstamp' => 'نسخه $1 ($2)',
	'etc' => 'او داسې نور',
	'namespace' => 'نوم-تشيال',
	'form-submit' => 'ورځه',
	'form-reset' => 'بياايښودل',
	'years' => '{{PLURAL: $1|کال|کالونه}}',
	'weeks' => '{{PLURAL: $1|اونۍ|اونۍ}}',
	'days' => '{{PLURAL: $1|ورځ|ورځې}}',
	'hours' => '{{PLURAL:$1|ساعت|ساعتونه}}',
	'minutes' => '{{PLURAL:$1|دقيقه|دقيقې}}',
	'seconds' => '{{PLURAL:$1|ثانيه|ثانيې}}',
	'last-modified-date' => 'وروستی بدلون: $1',
	'view-source' => 'سرچينه کتل',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Hamilton Abreu
 * @author Luckas
 * @author Sarilho1
 */
$messages['pt'] = array(
	'hello' => 'Olá',
	'welcome' => 'Bem-vindo',
	'toolversionstamp' => 'Versão $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaço nominal',
	'form-submit' => 'Enviar',
	'form-reset' => 'Repor',
	'years' => '{{PLURAL: $1|ano|anos}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|dia|dias}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificação: $1',
	'view-source' => 'Ver código fonte',
	'and' => '&#32;e',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Fúlvio
 * @author Giro720
 * @author Gusta
 * @author TheGabrielZaum
 */
$messages['pt-br'] = array(
	'hello' => 'Olá',
	'welcome' => 'Bem-vindo',
	'toolversion' => 'Versão $1',
	'toolversionstamp' => 'Versão $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Espaço nominal',
	'form-submit' => 'Ir',
	'form-reset' => 'Restaurar',
	'years' => '{{PLURAL: $1|ano|anos}}',
	'weeks' => '{{PLURAL: $1|semana|semanas}}',
	'days' => '{{PLURAL: $1|dia|dias}}',
	'hours' => '{{PLURAL: $1|hora|horas}}',
	'minutes' => '{{PLURAL: $1|minuto|minutos}}',
	'seconds' => '{{PLURAL: $1|segundo|segundos}}',
	'last-modified-date' => 'Última modificação: $1',
	'view-source' => 'Ver código-fonte',
	'and' => '&#32;e',
);

/** Romanian (română)
 * @author Minisarm
 * @author Platonides
 */
$messages['ro'] = array(
	'hello' => 'Bună',
	'welcome' => 'Bun venit',
	'toolversion' => 'Versiunea $1',
	'toolversionstamp' => 'Versiunea $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Spațiu de nume',
	'form-submit' => 'Du-te',
	'form-reset' => 'Resetează',
	'years' => '{{PLURAL: $1|an|ani}}',
	'weeks' => '{{PLURAL: $1|săptămână|săptămâni}}',
	'days' => '{{PLURAL: $1|zi|zile}}',
	'hours' => '{{PLURAL: $1|oră|ore}}',
	'minutes' => '{{PLURAL: $1|minut|minute}}',
	'seconds' => '{{PLURAL: $1|secundă|secunde}}',
	'last-modified-date' => 'Ultima modificare: $1',
	'view-source' => 'Sursă pagină',
	'and' => '&#32;și',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'dateformat' => '%B %d %Y',
	'hello' => 'Cià',
	'welcome' => 'Bovègne',
	'toolversionstamp' => 'Versione $1 ($2)',
	'etc' => 'ecc.',
	'colon-separator' => ':',
	'namespace' => 'Namespace',
	'form-submit' => 'Veje',
	'form-reset' => 'Azzere',
	'years' => '{{PLURAL: $1|anne|anne}}',
	'weeks' => '{{PLURAL: $1|sumàne|sumàne}}',
	'days' => '{{PLURAL: $1|sciurne|sciurne}}',
	'hours' => '{{PLURAL: $1|ore|ore}}',
	'minutes' => '{{PLURAL:$1|minute|minute}}',
	'seconds' => '{{PLURAL:$1|seconde|seconde}}',
	'last-modified-date' => 'Urteme cangiamende: $1',
	'view-source' => "Vide 'u sorgende",
	'parentheses' => '($1)',
	'and' => '&#32;e',
);

/** Russian (русский)
 * @author Eleferen
 * @author Lvova
 * @author Okras
 * @author Platonides
 * @author Rave
 */
$messages['ru'] = array(
	'hello' => 'Привет',
	'welcome' => 'Добро пожаловать',
	'toolversion' => 'Версия $1',
	'toolversionstamp' => 'Версия $1 ($2)',
	'etc' => 'и т.д.',
	'namespace' => 'Пространство имён',
	'form-submit' => 'Перейти',
	'form-reset' => 'Очистить',
	'years' => '{{PLURAL: $1|год|года|лет}}',
	'weeks' => '{{PLURAL: $1|неделя|недели|недель}}',
	'days' => '{{PLURAL: $1|день|дня|дней}}',
	'hours' => '{{PLURAL: $1|час|часа|часов}}',
	'minutes' => '{{PLURAL: $1|минута|минуты|минут}}',
	'seconds' => '{{PLURAL: $1|секунда|секунды|секунд}}',
	'last-modified-date' => 'Дата последнего изменения: $1',
	'view-source' => 'Просмотр исходного кода',
	'and' => '&#32;и',
);

/** Sanskrit (संस्कृतम्)
 * @author Hemant wikikosh1
 */
$messages['sa'] = array(
	'hello' => 'नमस्कारः',
	'welcome' => 'स्वागतम्',
	'toolversionstamp' => 'आवृत्तिः $1 ($2)',
	'etc' => 'इत्यादि',
	'namespace' => 'नामाकाशः',
	'form-submit' => 'गम्यताम्',
	'view-source' => 'स्रोतः दृश्यताम्',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'hello' => 'ආයුබෝවන්',
	'welcome' => 'ආයුබෝවන්',
	'toolversionstamp' => 'අනුවාදය $1 ($2)',
	'etc' => 'යනාදිය.',
	'namespace' => 'නාම අවකාශය',
	'form-submit' => 'යන්න',
	'form-reset' => 'නැවත සකසන්න',
	'years' => '{{PLURAL: $1|අවුරුද්ද|අවුරුදු}}',
	'weeks' => '{{PLURAL: $1|සතිය|සති}}',
	'days' => '{{PLURAL: $1|දවස|දවස්}}',
	'hours' => '{{PLURAL: $1|පැය|පැය}}',
	'minutes' => '{{PLURAL:$1|විනාඩිය|විනාඩි}}',
	'seconds' => '{{PLURAL: $1|තත්පරය|තත්පර}}',
	'last-modified-date' => 'අවසන්වරට සංස්කරණය කරන ලද්දේ: $1',
	'view-source' => 'මූලාශ්‍රය බලන්න',
	'and' => '&#32;සහ',
);

/** Slovak (slovenčina)
 * @author Platonides
 */
$messages['sk'] = array(
	'and' => '&#32;a',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'hello' => 'Pozdravljeni',
	'welcome' => 'Dobrodošli',
	'toolversionstamp' => 'Različica $1 ($2)',
	'etc' => 'idr.',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Pojdi',
	'form-reset' => 'Ponastavi',
	'years' => '{{PLURAL:$1|leto|leti|leta|let}}',
	'weeks' => '{{PLURAL:$1|teden|tedna|tedni|tednov}}',
	'days' => '{{PLURAL:$1|dan|dneva|dnevi|dni}}',
	'hours' => '{{PLURAL:$1|ura|uri|ure|ur}}',
	'minutes' => '{{PLURAL:$1|minuta|minuti|minute|minut}}',
	'seconds' => '{{PLURAL:$1|sekunda|sekundi|sekunde|sekund}}',
	'last-modified-date' => 'Zadnja sprememba: $1',
	'view-source' => 'Izvorna koda',
	'and' => '&#32;in',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'hello' => 'Haye',
	'welcome' => 'Soo dhowoow!',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'sidoo kale',
	'namespace' => 'Xarun magaceedyada',
	'form-submit' => 'Soco',
	'form-reset' => 'Dib u habeey',
	'years' => '{{PLURAL: $1|sanad|sanado}}',
	'weeks' => '{{PLURAL: $1|usbuuc|usbuucyo}}',
	'days' => '{{PLURAL: $1|maalin|maalmo}}',
	'hours' => '{{PLURAL: $1|saacad|Saacado}}',
	'minutes' => '{{PLURAL: $1|daqiiqad|daqiiqado}}',
	'seconds' => '{{PLURAL: $1|ilbiriqsi|ilbiliqsiyo}}',
	'last-modified-date' => 'badalkii ugu dambeeyey: $1',
	'view-source' => 'Itusi xogta',
	'and' => '&#32;iyo',
);

/** Albanian (shqip)
 * @author Besnik b
 * @author FatosMorina
 */
$messages['sq'] = array(
	'hello' => 'Tungjatjeta',
	'welcome' => 'Mirë se vini',
	'toolversionstamp' => 'Versioni $1 ($2)',
	'etc' => 'etj.',
	'namespace' => 'Hapësira',
	'form-submit' => 'Shko',
	'form-reset' => 'Rikthe vlerat',
	'years' => '{{PLURAL:$1|vit|vite}}',
	'weeks' => '{{PLURAL:$1|javë|javë}}',
	'days' => '{{PLURAL:$1|ditë|ditë}}',
	'hours' => '{{PLURAL:$1|orë|orë}}',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Nikola Smolenski
 * @author Platonides
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Здраво',
	'welcome' => 'Добро дошли',
	'toolversionstamp' => 'Издање $1 ($2)',
	'etc' => 'итд.',
	'colon-separator' => ':',
	'namespace' => 'Именски простор',
	'form-submit' => 'Иди',
	'form-reset' => 'Поништи',
	'years' => '{{PLURAL: $1|година|године|година}}',
	'weeks' => '{{PLURAL: $1|недеља|недеље|недеља}}',
	'days' => '{{PLURAL: $1|дан|дана|дана}}',
	'hours' => '{{PLURAL: $1|сат|сата|сати}}',
	'minutes' => '{{PLURAL: $1|минут|минута|минута}}',
	'seconds' => '{{PLURAL: $1|секунд|секунде|секунди}}',
	'last-modified-date' => 'Последња измена: $1',
	'view-source' => 'Изворни код',
	'parentheses' => '($1)',
	'and' => '&#32;и',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 * @author Platonides
 * @author Rancher
 */
$messages['sr-el'] = array(
	'dateformat' => '%d %B %Y',
	'hello' => 'Zdravo',
	'welcome' => 'Dobro došli',
	'toolversionstamp' => 'Izdanje $1 ($2)',
	'etc' => 'itd.',
	'colon-separator' => ':',
	'namespace' => 'Imenski prostor',
	'form-submit' => 'Idi',
	'form-reset' => 'Poništi',
	'years' => '{{PLURAL: $1|godina|godine|godina}}',
	'weeks' => '{{PLURAL: $1|nedelja|nedelje|nedelja}}',
	'days' => '{{PLURAL: $1|dan|dana|dana}}',
	'hours' => '{{PLURAL: $1|sat|sata|sati}}',
	'minutes' => '{{PLURAL: $1|minut|minuta|minuta}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunde|sekundi}}',
	'last-modified-date' => 'Poslednja izmena: $1',
	'view-source' => 'Izvorni kod',
	'parentheses' => '($1)',
	'and' => '&#32;i',
);

/** Swedish (svenska)
 * @author Cybjit
 * @author Liftarn
 * @author Lokal Profil
 * @author Platonides
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'hello' => 'Hej',
	'welcome' => 'Välkommen',
	'toolversion' => 'Version $1',
	'toolversionstamp' => 'Version $1 ($2)',
	'etc' => 'etc.',
	'namespace' => 'Namnrymd',
	'form-submit' => 'Gå',
	'form-reset' => 'Nollställ',
	'years' => '{{PLURAL: $1|år|år}}',
	'weeks' => '{{PLURAL: $1|vecka|veckor}}',
	'days' => '{{PLURAL: $1|dag|dagar}}',
	'hours' => '{{PLURAL: $1|timme|timmar}}',
	'minutes' => '{{PLURAL: $1|minut|minuter}}',
	'seconds' => '{{PLURAL: $1|sekund|sekunder}}',
	'last-modified-date' => 'Senast uppdaterad: $1',
	'view-source' => 'Visa källkod',
	'and' => '&#32;och',
);

/** Swahili (Kiswahili)
 * @author Lloffiwr
 * @author Platonides
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'welcome' => 'Karibu',
	'toolversionstamp' => 'Toleo la $1 ($2)',
	'etc' => 'nk',
	'namespace' => 'Eneo la wiki',
	'form-submit' => 'Nenda',
	'form-reset' => 'Panga upya',
	'years' => '{{PLURAL:$1|mwaka|miaka}}',
	'weeks' => '{{PLURAL:$1|wiki}}',
	'days' => '{{PLURAL:$1|siku}}',
	'hours' => '{{PLURAL:$1|saa|masaa}}',
	'minutes' => '{{PLURAL:$1|dakika}}',
	'seconds' => '{{PLURAL:$1|sekunde}}',
	'last-modified-date' => 'Ilibadilishwa mwishoni tarehe $1',
	'view-source' => 'Onesha msimbo wa ukurasa',
	'and' => '&#32;na',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Logicwiki
 * @author Platonides
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'hello' => 'வணக்கம்',
	'welcome' => 'வருக',
	'toolversionstamp' => 'பதிப்பு $1 ($2)',
	'etc' => 'இன்ன பிற',
	'namespace' => 'பெயர்வெளி',
	'form-submit' => 'செல்',
	'form-reset' => 'மீட்டமைக்க',
	'years' => '{{PLURAL: $1|வருடம்|வருடங்கள்}}',
	'weeks' => '{{PLURAL: $1|வாரம்|வாரங்கள்}}',
	'days' => '{{PLURAL: $1|நாள்|நாட்கள்}}',
	'hours' => '{{PLURAL: $1|மணி|மணிகள்}}',
	'minutes' => '{{PLURAL: $1|நிமிடம்|நிமிடங்கள்}}',
	'seconds' => '{{PLURAL: $1|வினாடி|வினாடிகள்}}',
	'last-modified-date' => 'கடைசியாகத் திருத்தப்பட்டது: $1',
	'view-source' => 'மூலத்தைப் பார்',
	'and' => ' மற்றும்',
);

/** Telugu (తెలుగు)
 * @author Platonides
 * @author Veeven
 */
$messages['te'] = array(
	'hello' => 'హలో',
	'welcome' => 'స్వాగతం',
	'toolversionstamp' => 'సంచిక $1 ($2)',
	'etc' => 'మొ.వి.',
	'namespace' => 'పేరుబరి',
	'form-submit' => 'వెళ్ళు',
	'years' => '{{PLURAL: $1|సంవత్సరం|సంవత్సరాలు}}',
	'weeks' => '{{PLURAL: $1|వారం|వారాలు}}',
	'days' => '{{PLURAL: $1|రోజు|రోజులు}}',
	'hours' => '{{PLURAL:$1|గంట|గంటలు}}',
	'minutes' => '{{PLURAL: $1|నిమిషం|నిమిషాలు}}',
	'seconds' => '{{PLURAL: $1|క్షణం|క్షణాలు}}',
	'last-modified-date' => 'చివరి మార్పు: $1',
	'view-source' => 'మూలాన్ని చూడండి',
	'and' => '&#32;మరియు',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'hello' => 'Olá',
	'toolversionstamp' => 'Versaun $1 ($2)',
	'etc' => 'sst.',
	'form-submit' => 'OK',
	'years' => '{{PLURAL: $1|tinan|tinan}}',
	'weeks' => '{{PLURAL: $1|semana|semana}}',
	'days' => '{{PLURAL: $1|loron|loron}}',
	'hours' => '{{PLURAL: $1|oras|oras}}',
	'last-modified-date' => 'Mudansa ba dala ikus: $1',
);

/** Tigrinya (ትግርኛ)
 * @author Tigrigna1
 */
$messages['ti'] = array(
	'years' => 'ዓመት| ዓመታት', # Fuzzy
	'days' => 'መዓልቲ|መዓልታት', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Platonides
 */
$messages['tl'] = array(
	'hello' => 'Kumusta',
	'welcome' => 'Maligayang pagdating',
	'toolversionstamp' => 'Bersyong $1 ($2)',
	'etc' => 'at iba pa',
	'namespace' => 'Puwang ng pangalan',
	'form-submit' => 'Pumunta',
	'form-reset' => 'Muling itakda',
	'years' => '{{PLURAL: $1|taon|mga taon}}',
	'weeks' => '{{PLURAL: $1|linggo|mga linggo}}',
	'days' => '{{PLURAL: $1|araw|mga araw}}',
	'hours' => '{{PLURAL: $1|oras|mga oras}}',
	'minutes' => '{{PLURAL:$1 |minuto|mga minuto}}',
	'seconds' => '{{PLURAL: $1|segundo|mga segundo}}',
	'last-modified-date' => 'Huling nabago noong: $1',
	'view-source' => 'Tingnan ang pinagmulan',
	'and' => ',&#32;at',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'hello' => 'Сәлом',
	'welcome' => 'Хәш омәјшон!',
	'toolversionstamp' => 'Рәвојәт $1 ($2)',
	'namespace' => 'Номон мәкон',
	'form-submit' => 'Давардеј',
	'form-reset' => 'Тәмиз кардеј',
	'years' => '{{PLURAL: $1|сор|сор}}',
	'weeks' => '{{PLURAL: $1|һәфтә|һәфтә}}',
	'days' => '{{PLURAL: $1|руж|руж}}',
	'hours' => '{{PLURAL: $1|саат|саат}}',
	'minutes' => '{{PLURAL: $1|дәғиғә|дәғиғә}}',
	'last-modified-date' => 'Охонә дәгиши тарых: $1',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'hello' => 'Merhaba',
	'welcome' => 'Hoş geldiniz',
	'toolversionstamp' => 'Sürüm $1 ($2)',
	'etc' => 'vs.',
	'namespace' => 'Ad alanı',
	'form-submit' => 'Gönder',
	'form-reset' => 'Sıfırla',
	'years' => '{{PLURAL: $1|yıl|yıl}}',
	'weeks' => '{{PLURAL: $1|hafta|hafta}}',
	'days' => '{{PLURAL: $1|gün|gün}}',
	'hours' => '{{PLURAL: $1|saat|saat}}',
	'minutes' => '{{PLURAL: $1|dakika|dakika}}',
	'seconds' => '{{PLURAL: $1|saniye|saniye}}',
	'last-modified-date' => 'Son değiştirme: $1',
	'view-source' => 'Kaynağı gör',
);

/** Tati (Tati)
 * @author Erdemaslancan
 */
$messages['ttt'] = array(
	'form-submit' => 'Buşu',
);

/** Tuvinian (тыва дыл)
 * @author Sborsody
 */
$messages['tyv'] = array(
	'hello' => 'Экии',
	'welcome' => 'Кирип моорлаңар',
	'toolversionstamp' => 'Үндүрери $1 ($2)',
	'namespace' => 'Аттар делгеми',
	'form-submit' => 'Күүcедири',
	'years' => '{{PLURAL: $1|чыл|чыл}}',
	'weeks' => '{{PLURAL: $1|чеди-хонук|чеди-хонук}}',
	'days' => '{{PLURAL: $1|хүн|хүн}}',
	'hours' => '{{PLURAL: $1|шак|шак}}',
	'minutes' => '{{PLURAL: $1|минут|минут}}',
	'seconds' => '{{PLURAL: $1|секунда|секунда}}',
	'view-source' => 'Дөзү бижиин көөрү',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'hello' => 'ⴰⵣⵓⵍ',
	'welcome' => 'ⴰⵏⵙⵓⴼ',
	'etc' => 'ⴰⵔ ⵜⴰⴳⴰⵔⴰ.',
	'form-submit' => 'ⴷⴷⵓ',
	'years' => '{{PLURAL:$1|ⴰⵙⴳⴳⵯⴰⵙ|ⵉⵙⴳⴳⵯⴰⵙⵏ}}',
	'weeks' => '{{PLURAL: $1|ⵉⵎⴰⵍⴰⵙⵙ|ⵉⵎⴰⵍⴰⵙⵙⵏ}}',
	'days' => '{{PLURAL: $1|ⴰⵙⵙ|ⵓⵙⵙⴰⵏ}}',
	'hours' => '{{PLURAL: $1|ⵜⴰⵙⵔⴰⴳⵜ|ⵜⵉⵙⵔⴰⴳⵉⵏ}}',
	'minutes' => '{{PLURAL: $1|ⵜⵓⵙⴷⴰⴷⵜ|ⵜⵓⵙⴷⴰⴷⵉⵏ}}',
	'seconds' => '{{PLURAL: $1|ⵜⴰⵙⵏⴰⵜ|ⵜⵉⵙⵏⴰⵜⵉⵏ}}',
	'last-modified-date' => 'ⴰⴱⴷⴷⴻⵍ ⴰⵏⴳⴳⴰⵔⵓ: $1',
	'view-source' => 'ⵥⵕ ⴰⵖⴱⴰⵍⵓ',
	'and' => '&#32;ⴷ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'dateformat' => '%Y-يىلى %d-ئاينىڭ %B-كۈنى',
	'hello' => 'ئەسسالامۇئەلەيكۇم',
	'welcome' => 'مەرھابا',
	'toolversionstamp' => 'نەشرى $1 ($2)',
	'etc' => 'قاتارلىق.',
	'colon-separator' => ':',
	'namespace' => 'ئات بوشلۇقى',
	'form-submit' => 'يۆتكەل',
	'form-reset' => 'ئەسلىگە قايتۇر',
	'years' => '{{PLURAL: $1|يىل|يىل}}',
	'weeks' => '{{PLURAL: $1|ھەپتە|ھەپتە}}',
	'days' => '{{PLURAL: $1|كۈن|كۈن}}',
	'hours' => '{{PLURAL: $1|سائەت|سائەت}}',
	'minutes' => '{{PLURAL: $1|مىنۇت|مىنۇت}}',
	'seconds' => '{{PLURAL: $1|سېكۇنت|سېكۇنت}}',
	'last-modified-date' => 'ئاخىرقى ئۆزگەرتىش: $1',
	'view-source' => 'مەنبەنى كۆرسەت',
	'parentheses' => '($1)',
);

/** Ukrainian (українська)
 * @author A1
 * @author Andriykopanytsia
 * @author Base
 * @author Platonides
 * @author Тест
 */
$messages['uk'] = array(
	'hello' => 'Вітаю',
	'welcome' => 'Ласкаво просимо!',
	'toolversion' => 'Версія $1',
	'toolversionstamp' => 'Версія $1 ($2)',
	'etc' => 'і т. д.',
	'namespace' => 'Простір назв',
	'form-submit' => 'Перейти',
	'form-reset' => 'Очистити',
	'years' => '{{PLURAL: $1|рік|роки|років}}',
	'weeks' => '{{PLURAL: $1|тиждень|тижня|тижнів}}',
	'days' => '{{PLURAL: $1|день|дні|днів}}',
	'hours' => '{{PLURAL: $1|годину|години|годин}}',
	'minutes' => '{{PLURAL:$1|хвилина|хвилини|хвилин}}',
	'seconds' => '{{PLURAL:$1|секунда|секунди|секунд}}',
	'last-modified-date' => 'Остання зміна: $1',
	'view-source' => 'Переглянути код',
	'and' => '&#32;і',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 * @author Sociologist
 */
$messages['uz'] = array(
	'hello' => 'Salom',
	'welcome' => 'Xush kelibsiz',
	'toolversionstamp' => 'Versiya $1 ($2)',
	'etc' => 'va sh.b.',
	'namespace' => 'Nomfazo',
	'form-submit' => 'Oʻtish',
	'form-reset' => 'Tozalash',
	'years' => '{{PLURAL: $1|yil}}',
	'weeks' => '{{PLURAL: $1|hafta}}',
	'days' => '{{PLURAL: $1|kun}}',
	'hours' => '{{PLURAL: $1|soat}}',
	'minutes' => '{{PLURAL: $1|minut}}',
	'seconds' => '{{PLURAL: $1|sekund}}',
	'last-modified-date' => 'Oxirgi oʻzgarish sanasi: $1',
	'view-source' => 'Manbasini koʻrish',
	'and' => '&#32;va',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Platonides
 */
$messages['vi'] = array(
	'dateformat' => '%d tháng %m năm %Y',
	'hello' => 'Xin chào',
	'welcome' => 'Hoan nghênh',
	'toolversion' => 'Phiên bản $1',
	'toolversionstamp' => 'Phiên bản $1 ($2)',
	'etc' => 'v.v.',
	'namespace' => 'Không gian tên',
	'form-submit' => 'Lưu',
	'form-reset' => 'Mặc định lại',
	'years' => '{{PLURAL:$1}}năm',
	'weeks' => '{{PLURAL:$1}}tuần',
	'days' => '{{PLURAL:$1}}ngày',
	'hours' => '{{PLURAL:$1}}giờ',
	'minutes' => '{{PLURAL:$1}}phút',
	'seconds' => '{{PLURAL:$1}}giây',
	'last-modified-date' => 'Sửa đổi lần cuối: $1',
	'view-source' => 'Xem mã nguồn',
	'and' => '&#32;và',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'form-reset' => 'צוריקשטעלן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Hzy980512
 * @author Shirayuki
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'dateformat' => '%Y年%m月%d日',
	'hello' => '你好',
	'welcome' => '欢迎',
	'toolversionstamp' => '版本 $1 ($2)',
	'etc' => '等。',
	'namespace' => '名字空间',
	'form-submit' => '提交',
	'form-reset' => '重置',
	'years' => '{{PLURAL: $1|年}}',
	'weeks' => '{{PLURAL: $1|周}}',
	'days' => '{{PLURAL: $1|天}}',
	'hours' => '{{PLURAL: $1|小时}}',
	'minutes' => '{{PLURAL: $1|分钟}}',
	'seconds' => '{{PLURAL: $1|秒}}',
	'last-modified-date' => '最近修改: $1',
	'view-source' => '查看源代码',
	'and' => '和',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Lauhenry
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'hello' => '您好',
	'welcome' => '歡迎',
	'toolversionstamp' => '版本$1 ($2)',
	'etc' => '等。',
	'namespace' => '名字空間',
	'form-submit' => '提交',
	'form-reset' => '重置',
	'years' => '{{PLURAL: $1|年|年}}',
	'weeks' => '$1週',
	'days' => '$1天',
	'hours' => '$1小時',
	'minutes' => '{{PLURAL: $1|分鐘|分鐘}}',
	'seconds' => '{{PLURAL: $1|秒|秒}}',
	'last-modified-date' => '最近修改於: $1',
	'view-source' => '查看原始碼',
	'and' => '&#32;和',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'hello' => '您好',
	'welcome' => '歡迎',
	'toolversionstamp' => '版本$1 ($2)',
	'etc' => '等。',
	'namespace' => '名字空間',
	'form-submit' => '提交',
	'form-reset' => '重設',
	'years' => '$1年',
	'weeks' => '$1週',
	'days' => '$1天',
	'hours' => '$1小時',
	'minutes' => '$1分鐘',
	'seconds' => '$1秒',
	'last-modified-date' => '最後修改:$1',
	'view-source' => '查看原始碼',
);
