<?php
/**
 * Interface messages for tool "svgtranslate"
 *
 * @toolowner jarry
 */

$url = '//toolserver.org/~jarry/svgtranslate/';

$messages = array();

/**
 * English
 *
 * @author Jarry
 */
$messages['en'] = array(
	'title' => 'SVG Translate', // Optional
	'error-tryagain' => '$1 Hit your browser\'s back button to retry.',
	'error-nothing' => 'Nothing to translate.',
	'error-notsvg' => 'Not an SVG file.',
	'error-unexpected' => 'An unexpected error occurred.',
	'error-notfound' => 'The SVG file could not be retrieved from the URL provided.',
	'error-upload' => 'There was an error uploading.',
	'begin-translation' => 'Begin translation',
	'th-original' => 'Original',
	'th-translation' => 'Translation',
	'th-language' => 'Language',
	'th-username' => 'Username',
	'th-password' => 'Password',
	'th-method' => 'Method',
	'option-tusc' => 'TUSC (automatic upload)',
	'option-manual' => 'Manual upload',
	'preview' => 'Preview',
	'translate' => 'Translate',
	'translate-instructions' => 'Inputs are accepted as either file names (e.g. "$1") or full URL (e.g. "$2"). If the first option is used, Wikimedia Commons will be assumed as source. To translate an SVG from another site or wiki, you must use the full-URL format.',
	'format-filename-example' => 'File:Planetary transit.svg', // Ignore
	'format-fullurl-example' => 'http://upload.wikimedia.org/wikipedia/commons/8/8a/Planetary_transit.svg', // Ignore
	'svginput-label' => 'SVG file',
	'stats-footer' => 'This tool has been used to translate approximately $1 files since $2.',
	'uploading' => 'Uploading',
	'upload-complete' => 'The upload completed successfully. The image should now be at $1',
	'editdescriptionpage' => 'Edit the new description page',
	'disclaimer' => 'Some anonymous data will be privately collected for statistical purposes. If supplied, TUSC usernames will also be recorded to assist in the event of vandalism. Passwords will never be recorded.',
	'author-complete' => 'Please complete author information!',
	'preview-hide' => 'Hide preview',
	'preview-refresh' => 'Refresh preview',
	'error-must-accept' => 'To continue with a direct upload you must accept the terms of use provided.',
	'error-tusc-failed' => 'TUSC validation failed: username or password incorrect.',
	'description-license' => 'Select description and license',
	'finalise' => 'Finalize details',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jarry
 * @author Jarry1250
 * @author Krinkle
 * @author Purodha
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'error-tryagain' => 'A general error message appended to another error message ($1) suggesting the user hits their "Back" button and tries again.',
	'error-nothing' => 'An error received when the tool finds no translatable items of text in the SVG.
{{Identical|Nothing to translate}}',
	'error-notsvg' => 'An error that occurs when the file provided is not in the required SVG file format.',
	'error-unexpected' => 'A general error category, for errors which are "unexpected": they should never be encountered by the average user / at all.',
	'error-notfound' => 'An error that occurs when the URL provided does not point to an SVG file or a file description page.',
	'error-upload' => 'General error message for when the tool\'s "direct upload" feature fails.',
	'begin-translation' => 'This is the opening heading on the home page of the tool.',
	'th-original' => 'Heading of the "Original"-column.',
	'th-translation' => 'Heading of the "Translation"-column.
{{Identical|Translation}}',
	'th-language' => 'Label for the language selection dropdown box. {{Identical|Language}}',
	'th-username' => '{{Identical|Username}}',
	'th-password' => '{{Identical|Password}}',
	'th-method' => 'The label introducing a choice between two ways of proceeding/ways of uploading the file.',
	'option-tusc' => 'The option for an automated upload using the "TUSC" mechanism.',
	'option-manual' => 'The option for uploading a file manually.',
	'preview' => '{{Identical|Preview}}',
	'translate' => '{{Identical|Translate}}',
	'translate-instructions' => 'Intro paragraph in the translation process.

Parameters:
* $1 is the string {{msg-toolserver|svgtranslate-format-filename-example}}
* $2 is the string {{msg-toolserver|svgtranslate-format-fullurl-example}}',
	'format-filename-example' => '{{Notranslate}}',
	'format-fullurl-example' => '{{Notranslate}}',
	'svginput-label' => 'The label for main SVG filename input.',
	'stats-footer' => 'This message is displayed at the bottom of the welcome page displaying some statistics.
*$1 is the number of files
*$2 is the date the first known translation took place (Example: March 2011)',
	'uploading' => 'A heading expressing that an upload is in progress.
{{Identical|Uploading}}',
	'upload-complete' => 'The message given on the successful conclusion of an upload, where $1 is a URL to the file in question.',
	'editdescriptionpage' => 'An additional invitation, once a file has been uploaded automatically, to edit the new description page to tidy it.',
	'disclaimer' => 'Supplementary footer text explaining that the tool may collect certain pieces of data from the user.',
	'author-complete' => 'An instruction to the user to manually add in author information from the file because the tool could not generate it automatically.',
	'preview-hide' => 'The text for a button which hides the preview that the user has just asked for.',
	'preview-refresh' => 'The text for a button which refreshes the preview that the user has just asked for.',
	'error-must-accept' => 'An error message encountered when users do not tick the box that indicates they accept the terms of use of the tool.',
	'error-tusc-failed' => 'An error encountered when a TUSC user with that username/password combination is not found e.g. because the wrong password have been supplied.',
	'description-license' => 'A header for a form where description and copyright license are selected.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'error-nothing' => 'Niks om te vertaal nie.',
	'error-notsvg' => "Dis nie 'n SVG-lêer nie.",
	'begin-translation' => 'Begin vertaal',
	'th-original' => 'Oorspronklike',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'th-username' => 'Gebruikersnaam',
	'th-password' => 'Wagwoord',
	'th-method' => 'Metode',
	'option-manual' => 'Handmatige oplaai',
	'preview' => 'Voorskou',
	'translate' => 'Vertaal',
	'svginput-label' => 'SVG-lêer',
	'uploading' => 'Besig om op te laai',
	'editdescriptionpage' => 'Wysig die nuwe beskrywingsbladsy',
	'preview-hide' => 'Versteek voorskou',
	'preview-refresh' => 'verfris voorskou',
	'description-license' => 'Kies beskrywing en lisensie',
	'finalise' => 'Finaliseer besonderhede',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author أحمد
 * @author ترجمان05
 */
$messages['ar'] = array(
	'error-tryagain' => '$1 اضغط زر الرجوع في المتصفح لإعادة المحاولة.',
	'error-nothing' => 'لا شيء لترجمته.',
	'error-notsvg' => 'ليس بملف SVG.',
	'error-unexpected' => 'طرأ خطأ غير متوقع.',
	'error-notfound' => 'تعذر جلبُ ملف SVG من المسار المُعطى.',
	'error-upload' => 'حدث خطأ أثناء الرّفع.',
	'begin-translation' => 'ابدأ الترجمة',
	'th-original' => 'أصلي',
	'th-translation' => 'الترجمة',
	'th-language' => 'اللغة',
	'th-username' => 'اسم المستخدم',
	'th-password' => 'كلمة السر',
	'th-method' => 'وسيلة',
	'option-tusc' => 'TUSC (التحميل التلقائي)',
	'option-manual' => 'رفع يدوي',
	'preview' => 'استعرِض',
	'translate' => 'ترجم',
	'translate-instructions' => 'يتم قبول المدخلات كأسماء ملفات (على سبيل المثال "$1") أو مسارات كاملة (على سبيل المثال "$2"). إذا ما لجأت للخيار الأول فإن ويكيميديا كُمُنْزْ ستحسب أنها المصدر. لترجمة SVG من موقع أو ويكي غير كُمُنْزْ يجب عليك استخدام صيغة المسار الكامل.',
	'svginput-label' => 'ملف SVG',
	'stats-footer' => 'تم استخدام هذه الأداة لترجمة ما يقارب $1 ملفا منذ $2.',
	'uploading' => 'يجري الرفع',
	'upload-complete' => 'تم الرفع بنجاح. ينبغي أن تكون الصورة الآن في $1',
	'editdescriptionpage' => 'عدل صفحة الوصف الجديدة',
	'disclaimer' => 'سيتم جمع بعض البيانات المُجَهَّلَة لأغراض إحصائية، كما سيتم تسجيل أسماء مستخدمي TUSC - إن أُعطيت - للمعونة في حال وقوع تخريب. كلمات السِّرِّ لا يتم تسجيلها مطلقا.',
	'author-complete' => 'استكمل بيانات المؤلف.',
	'preview-hide' => 'أخفِ المعاينة',
	'preview-refresh' => 'أنعش المعاينة',
	'error-must-accept' => 'للمواصلة في الرفع المباشر يجب عليك قبول شروط الاستخدام المقدمة.',
	'error-tusc-failed' => 'فشل التحقق من صحة الـ TUSC: اسم المستخدم أو كلمة المرور غير صحيحة.',
	'description-license' => 'اختر وصفا ورخصة',
	'finalise' => 'إنهاء التفاصيل',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'begin-translation' => 'ܫܪܝ ܬܘܪܓܡܐ',
	'th-original' => 'ܫܪܫܝܐ',
	'th-translation' => 'ܬܘܪܓܡܐ',
	'th-language' => 'ܠܫܢܐ',
	'th-username' => 'ܫܡܐ ܕܡܦܠܚܢܐ',
	'th-password' => 'ܡܠܬܐ ܕܥܠܠܐ',
	'th-method' => 'ܫܒܝܠܐ',
	'preview' => 'ܚܝܪܐ ܩܕܡܝܐ',
	'translate' => 'ܬܪܓܡ',
	'preview-hide' => 'ܛܫܝ ܚܝܪܐ ܩܕܡܝܐ',
	'preview-refresh' => 'ܦܪܓܝ ܚܝܪܐ ܩܕܡܝܐ',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'begin-translation' => 'অনুবাদ আৰম্ভ কৰক',
	'th-original' => 'মূল',
	'th-translation' => 'অনুবাদ',
	'th-language' => 'ভাষা',
	'th-username' => 'সদস্যনাম',
	'th-password' => 'গুপ্তশব্দ',
	'th-method' => 'পদ্ধতি',
	'option-manual' => 'মেনুৱেল আপল’ড',
	'preview' => 'খচৰা',
	'translate' => 'অনুবাদ কৰক',
	'svginput-label' => 'SVG ফাইল',
	'uploading' => 'আপল’ড কৰি থকা হৈছে',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Calca nel botón atrás del restolador pa volver a tentalo.',
	'error-nothing' => 'Nun hai ren que traducir.',
	'error-notsvg' => 'Nun ye un ficheru SVG.',
	'error-unexpected' => 'Hebo un fallu inesperáu.',
	'error-notfound' => 'El ficheru SVG nun se pudo baxar de la URL conseñada.',
	'error-upload' => 'Hebo un fallu al xubir.',
	'begin-translation' => 'Entamar traducción',
	'th-original' => 'Orixinal',
	'th-translation' => 'Traducción',
	'th-language' => 'Llingua',
	'th-username' => "Nome d'usuariu",
	'th-password' => 'Contraseña',
	'th-method' => 'Métodu',
	'option-tusc' => 'TUSC (xuba automática)',
	'option-manual' => 'Xuba manual',
	'preview' => 'Vista previa',
	'translate' => 'Traducir',
	'translate-instructions' => 'S\'aceuten entraes como nomes de ficheru (p.ex. "$1") o  como URL completes (p.ex. "$2"). Si s\'usa la primera opción, se tomará como orixe Wikimedia Commons. Pa traducir un SVG d\'otru sitiu o wiki, tienes d\'usar el formatu d\'url completa.',
	'svginput-label' => 'Ficheru SVG',
	'stats-footer' => "Esta ferramienta s'usó pa traducir alredor de $1 ficheros dende $2.",
	'uploading' => 'Xubiendo',
	'upload-complete' => 'La xuba se completó correutamente. La imaxe habría tar anguaño en $1',
	'editdescriptionpage' => 'Editar la páxina de descripción nueva',
	'disclaimer' => "Van recoyese dellos datos anónimos con propósitu estadísticu. Si se dan, los nomes d'usuariu TUSC tamién van grabase como ayuda'n casu de vandalismu. Les contraseñes enxamás se grabarán.",
	'author-complete' => '¡Por favor, completa la información del autor!',
	'preview-hide' => 'Anubrir vista previa',
	'preview-refresh' => 'Refrescar entever',
	'error-must-accept' => "Pa siguir cola xubía direuta tienes d'aceutar los términos d'usu que s'ufren.",
	'error-tusc-failed' => 'Fallu na validación TUSC: usuariu o conseña incorreutos.',
	'description-license' => 'Escoyer descripción y llicencia',
	'finalise' => 'Finar detalles',
);

/** Azerbaijani (azərbaycanca)
 * @author AZISS
 * @author Cekli829
 * @author Wertuose
 */
$messages['az'] = array(
	'error-nothing' => 'Tərcümə etməli heç nə yoxdur.',
	'error-notsvg' => 'Bu SVG faylı deyil.',
	'begin-translation' => 'Tərcüməyə başla',
	'th-original' => 'Orijinal',
	'th-translation' => 'Tərcümə',
	'th-language' => 'Dil',
	'th-username' => 'İstifadəçi adı',
	'th-password' => 'Parol',
	'th-method' => 'Üsul',
	'preview' => 'Sınaq görüntüsü',
	'translate' => 'Tərcümə et',
	'svginput-label' => 'SVG fayl',
	'author-complete' => 'Zəhmət olmasa, müəllif informasiyasını tamamla!',
	'preview-hide' => 'Önizləməni gizlət',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'error-tryagain' => '$1 یئنی‌دن چالیشماق اوچون براوزِرینیزین «قاییت» دویمه‌سینی وورون.',
	'error-nothing' => 'چئویرمگه بیر شئی یوخدور.',
	'error-notsvg' => 'اِس‌وی‌جی فایلی دئییل.',
	'error-unexpected' => 'بیر گؤزلَنیلمه‌ین خطا باش وئردی.',
	'error-notfound' => 'وئریلن اینترنت آدرسیندن، اِس‌وی‌جی فایلی گؤتورولنمه‌دی.',
	'error-upload' => 'یوکله‌مک‌ده بیر خطا وار ایدی.',
	'begin-translation' => 'چئویرمگه باشلا',
	'th-original' => 'ایلکین',
	'th-translation' => 'چئویرمک',
	'th-language' => 'دیل',
	'th-username' => 'ایستیفاده‌چی آدی',
	'th-password' => 'رمز',
	'th-method' => 'یول',
	'option-tusc' => 'TUSC (اوتوماتیک یوکله‌مک)',
	'option-manual' => 'ال ایله یوکله‌مک',
	'preview' => 'اؤن‌گؤستریش',
	'translate' => 'چئویرمک',
	'translate-instructions' => 'گیریشلر فایل آدلاری (مثلاً «$1») یا بوتؤو اینترنت آدرسی (مثلاً «$2») کیمی قبول اولونور. ایلک سئچمه سئچیلسه، ویکی‌مئدیا اورتاقلار قایناق نظرده آلیناجاق‌دیر. باشقا بیر سایت‌دان ویکی‌ده بیر اِس‌وی‌جی-نی چئویرمک اوچون گرک بوتؤو آدرس فورمتینی ایشلده‌سینیز.',
	'svginput-label' => 'اِس‌وی‌جی فایلی',
	'stats-footer' => 'بو آراج $2-دن بویانا حدوداً $1 فایلین چئویرمگینه ایشلدیلیب‌دیر.',
	'uploading' => 'یوکله‌نیر',
	'upload-complete' => 'یوکله‌مک اوغورلا قورتاریلدی. شکیل ایندی گرک $1-ده اولا',
	'editdescriptionpage' => 'یئنی آچیقلاما صحیفه‌سینی دَییشدیر',
	'disclaimer' => 'بعضی تانیملانمامیش معلومات اؤزل اولاراق آمار اوچون ییغیلاجاق‌دیر. اگر وئریلسه، واندالیزمه قارشی یاردیم اولماق اوچون TUSC ایستیفاده‌چی آدی دا ثبت اولوناجاقدیر. رمزلر هئچ واخت ثبت اولمایاجاقلار.',
	'author-complete' => 'لوطفاً یارادیجی بیلگیلرینی دولدورون!',
	'preview-hide' => 'اؤن‌گؤستریشی گیزلت',
	'preview-refresh' => 'اؤن‌گؤستریشی یئنی‌له',
	'error-must-accept' => 'موستقیم یوکله‌مگی داوام ائتمک اوچون گرک ایستیفاده شرطلرینی قبول ائده‌سینیز.',
	'error-tusc-failed' => 'TUSC دوغرولاماغی اوغورسوز اولدو: ایستیفاده‌چی آدی یا رمز، یانلیش‌دیر.',
	'description-license' => 'آچیقلاما و لیسانسی سئچین',
	'finalise' => 'بیلگیلری تاماملا',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'error-tryagain' => '$1 Ҡабатлау өсөн браузерҙың «Артҡа» төймәһенә баҫығыҙ.',
	'error-nothing' => 'Тәржемә итерлек бер нәмә лә юҡ.',
	'error-notsvg' => 'Был SVG-файл түгел.',
	'error-unexpected' => 'Уйламаған хата килеп сыҡты.',
	'error-notfound' => 'Бирелгән адрес буйынса SVG-файлын алып булманы.',
	'error-upload' => 'Тейәгән ваҡытта хата китте.',
	'begin-translation' => 'Тәржемә башы',
	'th-original' => 'Оригинал',
	'th-translation' => 'Тәржемә',
	'th-language' => 'Тел',
	'th-username' => 'Ҡатнашыусы исеме',
	'th-password' => 'Пароль',
	'th-method' => 'Ысул',
	'option-tusc' => 'TUSC (автоматик йөкләү)',
	'option-manual' => 'Ҡул менән йөкләү',
	'preview' => 'Алдан байҡау',
	'translate' => 'Тәржемә итергә',
	'translate-instructions' => 'Файлдың исемен (мәҫәлән,«$1») йәки тулы URL-адресые (мәҫәлән, «$2») яҙығыҙ. Әгәр беренсе вариантты һайлаһағыҙ Викиһаҡлағыс сығанаҡ була.  SVG башҡа сайттан йәки викинан күсереү өсөн тулы URL-адресты яҙығыҙ.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'Был ҡорамал $2 битенән $1 файлды күсереү өсөн файҙалынылды.',
	'uploading' => 'Тейәү',
	'upload-complete' => 'Тейәү тамамланда. Рәсемде $1 адресында ҡарарға мөмкин.',
	'editdescriptionpage' => 'Яңы тасуирлама битен үҙгәртергә',
	'disclaimer' => 'Ҡайһы бер аноним мәғлүмәттәр статистика маҡсаты өсөн яҙыласаҡ. Әгәр TUSC-исем яҙылған булһа, вандализмға ҡаршы ярҙам өсөн яҙыласаҡ. Парольдәр бер касан да яҙылмай.',
	'author-complete' => 'Зинһар өсөн, автор тураһында мәғлүмәт яҙығыҙ!',
	'preview-hide' => 'Ҡарап сығыуҙы йәшерергә',
	'preview-refresh' => 'Алдан ҡарауҙы яңыртырға',
	'error-must-accept' => 'Тура тейеүҙе дауат итеү өсөн, Ҡулланыу шарттарын ҡабул итергә кәрәк.',
	'error-tusc-failed' => ' TUSC тикшереүе өҙөлдө. Ҡулланыусының исеме йәки пароле дөрөҫ түгел.',
	'description-license' => 'Тасүирлама һәм лицензия һайлағыҙ.',
	'finalise' => 'Тулы йомғаҡлау',
);

/** Belarusian (беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'title' => 'Перакласці SVG',
	'error-tryagain' => '$1 Націсніце «Вярнуцца» ў браўзеры і паспрабуйце зноў.',
	'error-nothing' => 'Няма чаго перакладаць.',
	'error-notsvg' => 'Не SVG-файл',
	'error-unexpected' => 'Адбылася нечаканая памылка.',
	'error-notfound' => 'Немагчыма атрымаць SVG-файл з пададзенага URL-адрасу.',
	'error-upload' => 'Немагчыма загрузіць.',
	'begin-translation' => 'Распачаць пераклад',
	'th-original' => 'Арыгінал',
	'th-translation' => 'Пераклад',
	'th-language' => 'Мова',
	'th-username' => 'Імя ўдзельніка',
	'th-password' => 'Пароль',
	'th-method' => 'Метад',
	'option-tusc' => 'TUSC (аўтаматычная загрузка)',
	'option-manual' => 'Загрузка ўручную',
	'preview' => 'Папярэдні прагляд',
	'translate' => 'Перакласці',
	'translate-instructions' => 'Уведзеныя звесткі трактуюцца як назва файла (напрыклад, «$1»), ці як поўны URL-адрас (напрыклад, «$2»). Калі гэта файл, пад крыніцай файлу будзе меркавацца Wikimedia Commons. Для перакладу SVG-файла з іншага сайта ці вікі трэба ўвесці поўны URL-адрас.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'З $2 перакладзена каля $1 файлаў з дапамогай гэтай прылады.',
	'uploading' => 'Загрузка...',
	'upload-complete' => 'Загрузка завершаная паспяхова. Выява мусіць быць даступная па адрасе $1',
	'editdescriptionpage' => 'Змяніць новую старонку апісання',
	'disclaimer' => 'Некаторыя ананімныя звесткі будуць збірацца для статыстычных мэтаў. Калі будуць пададзеныя, імёны ўдзельнікаў TUSC будуць таксама запісаныя ў мэтах абароны ад вандалізму. Паролі ніколі не будуць запісвацца.',
	'author-complete' => 'Калі ласка, запоўніце інфармацыю пра аўтара!',
	'preview-hide' => 'Схаваць папярэдні прагляд',
	'preview-refresh' => 'Абнавіць папярэдні прагляд',
	'error-must-accept' => 'Каб працягнуць непасрэдную загрузку, Вы мусіце пагадзіцца з умовамі карыстання',
	'error-tusc-failed' => 'Праверка TUSC не атрымалася: няслушны пароль або імя ўдзельніка.',
	'description-license' => 'Абярыце апісанне і ліцэнзію',
	'finalise' => 'Завяршыце апісанне падрабязнасцяў',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'title' => 'Пераклад SVG-файлаў',
	'error-tryagain' => '$1 Націсьніце «Вярнуцца» ў браўзэры і паспрабуйце зноў.',
	'error-nothing' => 'Няма, што перакладаць.',
	'error-notsvg' => 'Гэта не SVG-файл.',
	'error-unexpected' => 'Адбылася нечаканая памылка.',
	'error-notfound' => 'Немагчыма атрымаць SVG-файл з пададзенага URL-адрасу.',
	'error-upload' => 'Немагчыма загрузіць.',
	'begin-translation' => 'Пачаць пераклад',
	'th-original' => 'Арыгінал',
	'th-translation' => 'Пераклад',
	'th-language' => 'Мова',
	'th-username' => 'Імя карыстальніка',
	'th-password' => 'Пароль',
	'th-method' => 'Мэтад',
	'option-tusc' => 'TUSC (аўтаматычная загрузка)',
	'option-manual' => 'Ручная загрузка',
	'preview' => 'Папярэдні прагляд',
	'translate' => 'Перакласьці',
	'translate-instructions' => 'Уведзеныя зьвесткі трактуюцца як назва файла (напрыклад, «$1»), ці як поўны URL-адрас (напрыклад, «$2»). Калі гэта файл, пад крыніцай файлу будзе меркавацца ВікіСховішча. Для перакладу SVG-файла зь іншага сайта ці вікі трэба ўвесьці поўны URL-адрас.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'З $2 перакладзена каля $1 файлаў з дапамогай гэтага інструмэнту.',
	'uploading' => 'Ідзе загрузка',
	'upload-complete' => 'Загрузка завершаная пасьпяхова. Выява мусіць быць даступная па адрасе $1',
	'editdescriptionpage' => 'Рэдагаваць старонку апісаньня',
	'disclaimer' => 'Некаторыя ананімныя зьвесткі будуць зьбірацца для статыстычных мэтаў. Калі будуць пададзеныя, імёны ўдзельнікаў TUSC будуць таксама запісаныя ў мэтах абароны ад вандалізму. Паролі ніколі не будуць запісвацца.',
	'author-complete' => 'Запоўніце зьвесткі пра аўтарства!',
	'preview-hide' => 'Схаваць папярэдні прагляд',
	'preview-refresh' => 'Абнавіць папярэдні прагляд',
	'error-must-accept' => 'Каб працягваць непасрэдную загрузку, Вам неабходна пагадзіцца з пададзенымі ўмовамі выкарыстаньня.',
	'error-tusc-failed' => 'Памылка праверкі TUSC: няслушны пароль ці імя карыстальніка.',
	'description-license' => 'Выберыце апісаньне і ліцэнзію',
	'finalise' => 'Падсумуйце апісаньне падрабязнасьцяў',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'error-nothing' => 'Няма нищо за превеждане.',
	'error-notsvg' => 'Не е SVG файл.',
	'error-unexpected' => 'Възникна неочаквана грешка.',
	'th-original' => 'Оригинал',
	'th-translation' => 'Превод',
	'th-language' => 'Език',
	'th-username' => 'Потребителско име',
	'th-password' => 'Парола',
	'th-method' => 'Метод',
	'translate' => 'Превеждане',
	'svginput-label' => 'SVG файл',
	'uploading' => 'Качване',
	'description-license' => 'Изберане на описание и лиценз',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Nasir8891
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'title' => 'এসভিজি অনুবাদ',
	'error-tryagain' => '$1 পুনরায় চেষ্টা করতে আপনার ব্রাউজারের ব্যাক বাটনে ক্লিক করুন।',
	'error-nothing' => 'অনুবাদ করার মতো কিছু নেই।',
	'error-notsvg' => 'এটি কোনো এসভিজি ফাইল নয়।',
	'error-unexpected' => 'একটি অনাকাঙ্ক্ষিত ত্রুটি দেখা দিয়েছে।',
	'error-notfound' => 'প্রদানকৃত ইউআরএল থেকে এসভিজি ফাইলটি সংগ্রহ করা সম্ভব হয়নি।',
	'error-upload' => 'আপলোডিং করতে একটি ত্রুটি দেখা দিয়েছে।',
	'begin-translation' => 'অনুবাদ শুরু করুন',
	'th-original' => 'মূল',
	'th-translation' => 'অনুবাদ',
	'th-language' => 'ভাষা',
	'th-username' => 'ব্যবহারকারী নাম',
	'th-password' => 'শব্দচাবি (Password)',
	'th-method' => 'পদ্ধতি',
	'option-tusc' => 'TUSC (স্বয়ংক্রিয় আপলোড)',
	'option-manual' => 'হাতে আপলোড',
	'preview' => 'প্রাকদর্শন',
	'translate' => 'অনুবাদ',
	'translate-instructions' => 'ইনপুট হিসেবে শুধুমাত্র ফাইলের নাম (যেমন: "$1") বা পূর্ণ ইউআরএল (যেমন: "$2") গ্রহণযোগ্য। যদি ফাইলের নাম ব্যবহার করেন, তবে উইকিমিডিয়া কমন্সকে ফাইলের উৎস হিসেবে ধরে নেওয়া হবে। অন্য কোনো সাইট বা উইকি থেকে এসভিজি ট্রান্সলেট করতে হলে আপনাকে অবশ্যই পূর্ণ ইউআরএল প্রবেশ করাতে হবে।',
	'svginput-label' => 'এসভিজি ফাইল',
	'stats-footer' => 'অনুবাদের জন্য এই সরঞ্জামটি $2 থেকে আনুমানিক $1টি ফাইল অনুবাদের কাজে ব্যবহৃত হয়েছে।',
	'uploading' => 'আপলোডিং',
	'upload-complete' => 'সফলভাবে আপলোড সম্পন্ন হয়েছে। চিত্রটি এখন যেখানে রয়েছে $1',
	'editdescriptionpage' => 'নতুন বিবরণ পাতা সম্পাদনা করুন',
	'author-complete' => 'অনুগ্রহ করে লেখকের তথ্য সম্পূর্ণ করুন!',
	'preview-hide' => 'প্রাকদর্শন আড়ালে রাখো',
	'preview-refresh' => 'পুনরায় প্রাকদর্শন দেখাও',
	'error-must-accept' => 'সরাসরি আপলোড পদ্ধতি ব্যবহার করে অগ্রসর হওয়ার জন্য আপনাকে অবশ্যই নীতিমালাটি মেনে নিতে হবে।',
	'description-license' => 'বিবরণ এবং লাইসেন্স নির্বাচন',
	'finalise' => 'বিস্তারিত চূড়ান্ত',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'title' => 'Troidigezh SVG',
	'error-tryagain' => '$1 Grit gant bouton Kent ho merdeer evit klask en-dro.',
	'error-nothing' => "N'eus netra da dreiñ.",
	'error-notsvg' => "N'eo ket ur restr SVG",
	'error-unexpected' => "Ur fazi dic'hortoz zo bet",
	'error-notfound' => "N'eus ket bet gallet adtapout ar restr SVG adalek an URL merket.",
	'error-upload' => 'Ur fazi zo bet e-ser enporzhiañ.',
	'begin-translation' => 'Kregiñ da dreiñ',
	'th-original' => 'Orin',
	'th-translation' => 'Troidigezh',
	'th-language' => 'Yezh',
	'th-username' => 'Anv implijer',
	'th-password' => 'Ger-tremen',
	'th-method' => 'Hentenn',
	'option-tusc' => 'TUSC (enporzh emgefre)',
	'option-manual' => 'Enporzh dre zorn',
	'preview' => 'Rakwelet',
	'translate' => 'Treiñ',
	'translate-instructions' => 'Degemeret e vez an enmontoù evel pa vefent anvioù restroù (da sk. "$1") pe URLoù klok (da sk. "$2"). Ma vez graet gant an dibarzh kentañ e vo sellet outañ evel pa vefe ur restr o tont eus Wikimedia Commons. Evit treiñ un SVG adalek ul lec\'hienn pe ur wiki all eo ret ober gant ar furmad URL klok.',
	'svginput-label' => 'Restr SVG',
	'stats-footer' => 'Graet ez eus bet gant an ostilh-mañ evit treiñ $1 restr well-wazh abaoe $2.',
	'uploading' => "Oc'h enporzhiañ",
	'upload-complete' => "Enporzhiet eo bet ar skeudenn ervat. Bez' e tlefe bezañ war $1 bremañ",
	'editdescriptionpage' => 'Embann deskrivadur nevez ar bajenn',
	'disclaimer' => "Roadennoù dianv zo a vo dastumet evit sevel stadegoù a chomo prevez. Ma vez resisaet an anvioù implijer evit TUSC e vint notennet ivez gant ar pal stourm a-enep d'ar vandalerezh. Ne vez ket enrollet ar gerioù-tremen gwezh ebet.",
	'author-complete' => 'Klokaat an titouroù diwar-benn an aozer !',
	'preview-hide' => 'Kuzhat ar rakweled',
	'preview-refresh' => 'Freskaat ar rakweled',
	'error-must-accept' => "Evit gallout kenderc'hel gant un enporzhiadenn war-eeun eo ret deoc'h bezañ asantet d'an termenoù implijout pourchaset.",
	'error-tusc-failed' => "C'hwitet eo bet gwiriekadenn TUSC : direizh eo an anv implijer pe ar ger-tremen.",
	'description-license' => 'Dibab an deskrivadur hag an aotre-implijout',
	'finalise' => 'Peurlipat ar munudoù',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'th-original' => 'Originalno',
	'th-language' => 'Jezik',
	'preview' => 'Pregled',
	'translate' => 'Prijevod',
	'translate-instructions' => 'Unosi su prihvaćeni kao imena datoteka (npr. "$1") ili puni URL (npr."$2"). Ako se koristi prva mogućnost, Wikimedia Commons će se pretpostaviti kao izvor. Da biste preveli SVG sa druge stranice ili wiki, morate koristiti puni format URL-a.',
	'finalise' => 'Dovršite detalje',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'title' => 'Traducció SVG',
	'error-tryagain' => '$1 Utilitzeu el botó Enrere del vostre navegador per a tornar-ho a intentar.',
	'error-nothing' => 'No hi ha res a traduir.',
	'error-notsvg' => 'No és un fitxer SVG.',
	'error-unexpected' => "S'ha produït un error inesperat.",
	'error-notfound' => "No s'ha pogut recuperar el fitxer SVG a partir de l'adreça URL indicada.",
	'error-upload' => 'Hi ha hagut un error en la càrrega.',
	'begin-translation' => 'Comença la traducció',
	'th-original' => 'Original',
	'th-translation' => 'Traducció',
	'th-language' => 'Idioma',
	'th-username' => "Nom d'usuari",
	'th-password' => 'Contrasenya',
	'th-method' => 'Mètode',
	'option-tusc' => 'TUSC (càrrega automàtica)',
	'option-manual' => 'Càrrega manual',
	'preview' => 'Vista prèvia',
	'translate' => 'Traducció',
	'translate-instructions' => "L'entrada s'accepta tant si és com a nom de fitxer (per exemple «$1») com si és a través de l'adreça URL completa (per exemple «$2»). Si s'opta per la primera opció s'entendrà que és un fitxer de Wikimedia Commons. Per a traduir un fitxer SVG des d'un altre lloc web heu d'utilitzar el format de URL completa.",
	'svginput-label' => 'Fitxer SVG',
	'stats-footer' => "Amb aquesta eina s'han traduït aproximadament $1 fitxers des de $2.",
	'uploading' => 'Càrrega en curs',
	'upload-complete' => "La càrrega s'ha completat amb èxit. La imatge hauria d'estar a l'adreça $1",
	'editdescriptionpage' => 'Modifica la nova pàgina de descripció',
	'disclaimer' => "Es recolliran de manera privada algunes dades anònimes amb una finalitat estadística. Quan s'hagin proporcionat, també es registraran els noms d'usuari de TUSC per assistir en cas de vandalisme. Les contrasenyes no es conserven en cap cas.",
	'author-complete' => "Completeu la informació de l'autor!",
	'preview-hide' => 'Amaga la vista prèvia',
	'preview-refresh' => 'Actualitza la vista prèvia',
	'error-must-accept' => "Per continuar amb la càrrega directa cal que accepteu les condicions d'ús establertes.",
	'error-tusc-failed' => "Error de validació de TUSC: nom d'usuari o contrasenya incorrectes.",
	'description-license' => 'Seleccioneu la descripció i la llicència',
	'finalise' => 'Conclusió dels detalls',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'title' => 'SVG гоч',
	'th-original' => 'ДӀадолалун йоза',
	'th-translation' => 'Гоч',
	'th-language' => 'Мотт',
	'th-username' => 'Декъашхочун цӀе',
	'preview' => 'Хьалха муха ю хьажа',
);

/** Sorani Kurdish (کوردی)
 * @author Diyar se
 */
$messages['ckb'] = array(
	'error-upload' => 'هەڵە هەبوو لە بارکردن',
	'begin-translation' => 'دەست بکە بە وەرگێڕان',
	'th-translation' => 'وەرگێڕان',
	'th-language' => 'زمان',
	'th-username' => 'ناوی بەکارهێنەر',
	'th-password' => 'تێپەڕوشە',
	'translate' => 'وەرگێڕە',
);

/** Czech (česky)
 * @author Chmee2
 * @author Jezevec
 * @author PSJG-Tyler
 * @author Vks
 */
$messages['cs'] = array(
	'error-tryagain' => '$1 Pro nový pokus stiskněte tlačítko "zpět" ve vašem prohlížeči.',
	'error-nothing' => 'Nic k překladu.',
	'error-notsvg' => 'Není SVG soubor.',
	'error-unexpected' => 'Došlo k neočekávané chybě.',
	'error-notfound' => 'Z poskytnuté URL nelze načíst SVG soubor.',
	'error-upload' => 'Při nahrávání došlo k chybě.',
	'begin-translation' => 'Nový překlad',
	'th-original' => 'Originál',
	'th-translation' => 'Překlad',
	'th-language' => 'Jazyk',
	'th-username' => 'Uživatelské jméno',
	'th-password' => 'Heslo',
	'th-method' => 'Metoda',
	'option-tusc' => 'TUSC (automatický upload)',
	'option-manual' => 'Ruční nahrávání',
	'preview' => 'Náhled',
	'translate' => 'Přeložit',
	'translate-instructions' => 'Jména souborů (e.g. "$1") nebo celé URL (e.g. "$2") jsou akceptovány jako vstupy. V případě použití jmén souborů se předpokládá jako zdroj Wikimedia Commons. Celé URL musíte použít, když chcete vložit SVG z jiné stránky nebo wiki.',
	'svginput-label' => 'SVG soubor',
	'stats-footer' => 'Tento nástroj byl použit pro přeložení přibližně $1 soborů od $2.',
	'uploading' => 'Uploadování',
	'upload-complete' => 'Upload proběhl úspěšně. Obrázek by měl být na $1',
	'editdescriptionpage' => 'Upravit novou popisnou stránku',
	'disclaimer' => 'Některá anonymní data budou sbírána pro statistické účely. Uživatelská jména TUSC budou zaznamenávána, pokud budou k dispozici, pro případ nutnosti řešit vandalismus. Hesla nebudou nikdy zaznamenávána.',
	'author-complete' => 'Prosím, vyplňte údaje o autorovi.',
	'preview-hide' => 'Skrýt náhled',
	'preview-refresh' => 'Aktualizovat náhled',
	'error-must-accept' => 'Abyste mohli uploadovat soubory, musíte přijmout přiložená pravidla použití.',
	'error-tusc-failed' => 'Validace TUSC selhala: Uživatelské jméno nebo heslo není správně.',
	'description-license' => 'Vyberte popis a licenci',
	'finalise' => 'Dokončit detaily',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'begin-translation' => 'Куҫарма пуҫла',
	'th-original' => 'Кӑк тексчӗ',
	'th-translation' => 'Куҫару',
	'th-language' => 'Чӗлхе',
	'th-username' => 'Усӑҫ ячӗ',
	'th-password' => 'Вӑрттӑн сӑмах',
	'th-method' => 'Меслет',
	'option-tusc' => 'TUSC (автоматла тиесе яни)',
	'option-manual' => 'Алӑпа тиесе яни',
	'preview' => 'Ум курӑм',
	'translate' => 'Куҫарма',
	'svginput-label' => 'SVG файлӗ',
	'uploading' => 'Тиесе ярать',
	'preview-hide' => 'Ум курӑма пытар',
	'preview-refresh' => 'Ум курӑма тӗпре тие',
);

/** Danish (dansk)
 * @author Christian List
 * @author Peter Alberti
 * @author Sarrus
 */
$messages['da'] = array(
	'title' => 'SVG-oversættelse',
	'error-tryagain' => '$1 Tryk på din browsers tilbageknap for at prøve igen.',
	'error-nothing' => 'Intet at oversætte.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet fejl opstod.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angivne URL-adresse.',
	'error-upload' => 'Der opstod en fejl under upload.',
	'begin-translation' => 'Begynd med at oversætte',
	'th-original' => 'Original',
	'th-translation' => 'Oversættelse',
	'th-language' => 'Sprog',
	'th-username' => 'Brugernavn',
	'th-password' => 'Adgangskode',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (automatisk upload)',
	'option-manual' => 'Manuel upload',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversæt',
	'translate-instructions' => 'Input accepteres som enten filnavne (f.eks. "$1") eller fuld URL (f.eks. "$2"). Hvis den første mulighed benyttes, antages det, at Wikimedia Commons er kilden. For at oversætte en SVG fra et andet websted eller wiki, skal du skrive den fulde URL-adresse.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette værktøj er blevet brugt til at oversætte ca. $1 filer siden $2.',
	'uploading' => 'Uploader',
	'upload-complete' => 'Upload fuldendt. Billedet burde nu være at finde på $1',
	'editdescriptionpage' => 'Rediger den nye beskrivelsesside',
	'disclaimer' => 'Nogle anonyme data vil blive indsamlet privat for at kunne føre statistik. Hvis det oplyses, vil TUSC-brugernavne også blive registreret til hjælp i tilfælde af hærværk. Adgangskoder vil aldrig blive registreret.',
	'author-complete' => 'Udfyld venligst oplysninger om forfattere!',
	'preview-hide' => 'Skjul forhåndsvisning',
	'preview-refresh' => 'Genopfrisk forhåndsvisning',
	'error-must-accept' => 'For at kunne fortsætte med direkte upload, skal du acceptere brugsvilkårene.',
	'error-tusc-failed' => 'TUSC-godkendelse lykkedes ikke: forkert brugernavn eller adgangskode.',
	'description-license' => 'Vælg beskrivelse og licens',
	'finalise' => 'Færdiggør detaljer',
);

/** German (Deutsch)
 * @author Giftpflanze
 * @author Kghbln
 */
$messages['de'] = array(
	'title' => 'SVG-Übersetzung',
	'error-tryagain' => '$1 Klicke auf die Schaltfläche „Eine Seite zurück“ deines Browsers, um es erneut zu versuchen.',
	'error-nothing' => 'Es ist nichts zum Übersetzen vorhanden.',
	'error-notsvg' => 'Das ist keine SVG-Datei.',
	'error-unexpected' => 'Es ist ein unerwarteter Fehler aufgetreten.',
	'error-notfound' => 'Die SVG-Datei konnte nicht unter der angegebenen URL abgerufen werden.',
	'error-upload' => 'Während des Hochladens ist ein Fehler aufgetreten.',
	'begin-translation' => 'Mit dem Übersetzen anfangen',
	'th-original' => 'Original',
	'th-translation' => 'Übersetzung',
	'th-language' => 'Sprache',
	'th-username' => 'Benutzername',
	'th-password' => 'Passwort',
	'th-method' => 'Methode',
	'option-tusc' => 'TUSC (automatisches Hochladen)',
	'option-manual' => 'Manuelles Hochladen',
	'preview' => 'Vorschau',
	'translate' => 'Übersetzen',
	'translate-instructions' => 'Eingaben werden entweder in Form von Dateinamen (z. B. „$1“) oder vollständiger URLs (z. B. „$2“) akzeptiert. Sofern die erste Variante genutzt wird, wird Wikimedia Commons als Dateirepositorium angenommen. Um eine SVG-Datei auf einer anderen Website oder einem anderen Wiki zu übersetzen, muss hingegen die vollständige URL angegeben werden.',
	'svginput-label' => 'SVG-Datei',
	'stats-footer' => 'Dieses Hilfsprogramm wurde bislang zur Übersetzung von ungefähr $1 Dateien seit $2 genutzt.',
	'uploading' => 'Am Hochladen …',
	'upload-complete' => 'Das Hochladen wurde erfolgreich abgeschlossen. Das Bild sollte jetzt unter $1 verfügbar sein.',
	'editdescriptionpage' => 'Die neue Beschreibungsseite bearbeiten',
	'disclaimer' => 'Einige anonymen Daten werden für statistische Zwecke erhoben. Sofern angegeben werden auch die TUSC-Benutzernamen aufgezeichnet, um im Fall von Vandalismus Abhilfe zu erleichtern. Passwörter werden niemals aufgezeichnet.',
	'author-complete' => 'Bitte die Angaben zum Autor vervollständigen.',
	'preview-hide' => 'Vorschau ausblenden',
	'preview-refresh' => 'Vorschau aktualisieren',
	'error-must-accept' => 'Um mit einem direkten Upload fortzufahren, musst du die angegebenen Nutzungsbedingungen annehmen.',
	'error-tusc-failed' => 'TUSC-Prüfung fehlgeschlagen: Benutzername oder Passwort fehlerhaft',
	'description-license' => 'Bitte Beschreibung und Lizenz auswählen',
	'finalise' => 'Angaben vervollständigen',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'error-nothing' => 'Theba çıniyo kê açerneyo.',
	'th-original' => 'Orcinal',
	'th-translation' => 'Çarnayış',
	'th-language' => 'Zıwan',
	'th-username' => 'Nameyê karberi',
	'th-password' => 'Parola',
	'th-method' => 'Metod',
	'option-tusc' => 'TUSC (otomatik barkerdış)',
	'option-manual' => 'Manuel barkerdış',
	'preview' => 'Verqayt',
	'translate' => 'Açarne',
	'svginput-label' => 'Dosyay SVG',
	'uploading' => 'Bar beno',
	'preview-hide' => 'Verqayti bınımnê',
	'preview-refresh' => 'Verqayti anewe kerê',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'error-tryagain' => '$1 Klikni na tłocašk "Slědk" swójogo wobglědowaka, aby hyšći raz wopytał.',
	'error-nothing' => 'Njejo nic za pśełožowanje.',
	'error-notsvg' => 'To njejo SVG-dataja.',
	'error-unexpected' => 'Njewócakowana zmólka jo nastała.',
	'error-notfound' => 'SVG-dataja njedajo se wót pódanego URL wótwołaś.',
	'error-upload' => 'Pśi nagrawanju jo zmólka nastała.',
	'begin-translation' => 'Pśełožowanje zachopiś',
	'th-original' => 'Original',
	'th-translation' => 'Pśełožk',
	'th-language' => 'Rěc',
	'th-username' => 'Wužywarske mě',
	'th-password' => 'Gronidło',
	'th-method' => 'Metoda',
	'option-tusc' => 'TUSC (awtomatiske nagraśe)',
	'option-manual' => 'Manuelne nagraśe',
	'preview' => 'Pśeglěd',
	'translate' => 'Pśełožyś',
	'translate-instructions' => 'Zapódaśa akceptěruju se pak ako datajowe mjenja (na pś. "$1")  pak ako dopołny URL (na pś. "$2"). Jolic se prědna opcija wužywa, buźo se Wikimedia Commons ako žrědło pśedpokładowaś.  Aby SVG z drugego sedła abo wikija pśełožył, musyš format z dopołnym URL wužywaś.',
	'svginput-label' => 'SVG-dataja',
	'stats-footer' => 'Toś ten rěd jo se wužył, aby se wokoło $1 datajow wót $2 pśełožyło.',
	'uploading' => 'Nagrawa se...',
	'upload-complete' => 'Nagraśe jo wuspěšnje dokóńcone. Wobraz by dejał něnto pód $1 k dispoziciji staś.',
	'editdescriptionpage' => 'Nowy wopisański bok wobźěłaś',
	'disclaimer' => 'Někotare anonymne daty zběraju se za statistiske zaměry. Jolic k dispoziciji, wužywarske mjenja TUSC so teke zapśimuju, ako pomocny srědk pśeśiwo wandalizmoju. Gronidła se nigda njezapśimuju.',
	'author-complete' => 'Pšosym wudopołni informacije wó awtorje!',
	'preview-hide' => 'Pśeglěd schowaś',
	'preview-refresh' => 'Pśeglěd aktualizěrowaś',
	'error-must-accept' => 'Aby z direktnym nagraśim pókšacował, musyš slědujuce wužywańske wuměnjenja akceptěrowaś.',
	'error-tusc-failed' => 'TUSC-pśeglědanje jo se njeraźiło: Wužywarske mě abo gronidło jo wopak.',
	'description-license' => 'Wopisanje a licencu wubraś',
	'finalise' => 'Drobnostki wudopołniś',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Glavkos
 */
$messages['el'] = array(
	'title' => 'Μετάφραση SVG',
	'error-tryagain' => '$1 Πατήστε το κουμπί πίσω του προγράμματος περιήγησης σας για να δοκιμάστε ξανά.',
	'error-nothing' => 'Δεν υπάρχει τίποτα για μετάφραση.',
	'error-notsvg' => 'Δεν είναι αρχείο SVG.',
	'error-unexpected' => 'Παρουσιάστηκε ένα απροσδόκητο σφάλμα.',
	'error-notfound' => 'Το αρχείο SVG δεν μπορούσε να ανακτηθεί από τη διεύθυνση που μας παρέχατε.',
	'error-upload' => 'Παρουσιάστηκε ένα σφάλμα κατά τη μεταφόρτωση.',
	'begin-translation' => 'Έναρξη μετάφρασης',
	'th-original' => 'Πρωτότυπο',
	'th-translation' => 'Μετάφραση',
	'th-language' => 'Γλώσσα',
	'th-username' => 'Όνομα χρήστη',
	'th-password' => 'Κωδικός',
	'th-method' => 'Μέθοδος',
	'option-tusc' => 'TUSC (αυτόματη μεταφόρτωση)',
	'option-manual' => 'Μη αυτόματη μεταφόρτωση',
	'preview' => 'Προεπισκόπηση',
	'translate' => 'Μετάφραση',
	'svginput-label' => 'Αρχείο SVG',
	'stats-footer' => 'Αυτό το εργαλείο έχει χρησιμοποιηθεί για την μετάφραση περίπου $1 αρχείων, από τις $2.',
	'uploading' => 'Μεταφόρτωση',
	'upload-complete' => 'Η μεταφόρτωση ολοκληρώθηκε με επιτυχία. Η εικόνα θα πρέπει τώρα να είναι στη διεύθυνση $1',
	'editdescriptionpage' => 'Επεξεργασία της νέας σελίδα περιγραφής',
	'author-complete' => 'Παρακαλούμε συμπληρώστε τις πληροφορίες σχετικά με το συντάκτη!',
	'preview-hide' => 'Απόκρυψη προεπισκόπησης',
	'preview-refresh' => 'Ανανέωση προεπισκόπησης',
	'description-license' => 'Επιλογή περιγραφής και άδειας',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'description-license' => 'Select description and licence',
	'finalise' => 'Finalise details',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Yekrats
 */
$messages['eo'] = array(
	'error-nothing' => 'Nenio por traduki.',
	'error-notsvg' => 'Ne estas dosiero SVG.',
	'begin-translation' => 'Ektraduki',
	'th-original' => 'Originalo',
	'th-translation' => 'Traduko',
	'th-language' => 'Lingvo',
	'th-username' => 'Salutnomo',
	'th-password' => 'Pasvorto',
	'th-method' => 'Metodo',
	'option-tusc' => 'TUSC (aŭtomate alŝuti)',
	'option-manual' => 'Permana alŝuto',
	'preview' => 'Antaŭvido',
	'translate' => 'Traduki',
	'svginput-label' => 'Dosiero SVG',
	'uploading' => 'Alŝutante',
	'editdescriptionpage' => 'Redaktu la novan priskriban paĝon',
	'preview-hide' => 'Kaŝi antaŭvidon',
	'preview-refresh' => 'Freŝigu antaŭmontro',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Platonides
 */
$messages['es'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Pulsa el botón Atrás de tu navegador para volver a intentarlo.',
	'error-nothing' => 'No hay nada que traducir.',
	'error-notsvg' => 'No es un archivo SVG.',
	'error-unexpected' => 'Ocurrió un error inesperado.',
	'error-notfound' => 'No se pudo recuperar el archivo SVG desde la dirección URL proporcionada.',
	'error-upload' => 'Se ha producido un error de carga.',
	'begin-translation' => 'Comenzar traducción',
	'th-original' => 'Original',
	'th-translation' => 'Traducción',
	'th-language' => 'Idioma',
	'th-username' => 'Nombre de usuario',
	'th-password' => 'Contraseña',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (carga automática)',
	'option-manual' => 'Carga manual',
	'preview' => 'Previsualización',
	'translate' => 'Traducir',
	'translate-instructions' => 'La entrada puede proporcionarse tanto como un nombre de archivo (como "$1") como usando una URL completa (como "$2"). En el primer caso se tomará como origen Wikimedia Commons. Para traducir una imagen SVG de otro sitio o wiki, es preciso usar una url completa.',
	'svginput-label' => 'Archivo SVG',
	'stats-footer' => 'Esta herramienta se ha utilizado para traducir aproximadamente $1 archivos desde $2 .',
	'uploading' => 'Subiendo',
	'upload-complete' => 'La carga ha finalizado correctamente. La imagen debe estar ahora en $1',
	'editdescriptionpage' => 'Editar la nueva página de descripción',
	'disclaimer' => 'Se recogerán de forma privada algunos datos anónimos para propósitos estadísticos. En caso de proporcionarse, los nombres de usuario de TUSC también se almacenarán como asistencia en caso de vandalismo. Las contraseñas no se almacenan en ningún caso.',
	'author-complete' => '¡Por favor, completa la información del autor!',
	'preview-hide' => 'Ocultar previsualización',
	'preview-refresh' => 'Actualizar previsualización',
	'error-must-accept' => 'Para continuar con una carga directa debes aceptar los términos de uso provistos.',
	'error-tusc-failed' => 'Error de validación de TUSC: nombre de usuario o contraseña incorrectos.',
	'description-license' => 'Selecciona la descripción y licencia',
	'finalise' => 'Finalizar detalles',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'error-tryagain' => "$1 – klõpsa võrgulehitseja ''tagasi''-nuppu ja proovi uuesti.",
	'error-nothing' => 'Pole midagi tõlkida.',
	'error-notsvg' => 'Pole SVG-fail.',
	'error-unexpected' => 'Ilmnes ootamatu tõrge.',
	'error-notfound' => 'Ette antud internetiaadressi kaudu ei saanud SVG-faili hankida.',
	'error-upload' => 'Tõrge üleslaadimisel.',
	'begin-translation' => 'Alusta tõlkimist',
	'th-original' => 'Algupärand',
	'th-translation' => 'Tõlge',
	'th-language' => 'Keel',
	'th-username' => 'Kasutajanimi',
	'th-password' => 'Parool',
	'th-method' => 'Viis',
	'option-tusc' => 'TUSC (automaatne üleslaadimine)',
	'option-manual' => 'Käsitsi üleslaadimine',
	'preview' => 'Eelvaade',
	'translate' => 'Tõlgi',
	'translate-instructions' => 'Sisend võib olla kas failinimi (nt "$1") või internetiaadress (nt "$2"). Kui kasutad esimest varianti, eeldatakse, et allikas on Wikimedia Commons. Et tõlkida teiselt saidilt või teisest vikist pärit SVG-fail, pead kasutama internetiaadressi.',
	'svginput-label' => 'SVG-fail',
	'stats-footer' => 'Selle tööriistaga on tõlgitud umbes $1 faili (kasutusel alates: $2).',
	'uploading' => 'Üleslaadimine',
	'upload-complete' => 'Edukalt üles laaditud. Pilt peaks olema nüüd asukohas $1.',
	'editdescriptionpage' => 'Redigeeri uut kirjelduslehekülge',
	'disclaimer' => 'Osa nimeta andmeid kogutakse isiklikuks kasutamiseks statistilistel eesmärkidel. Ka TUSC-kasutajanimi talletatakse, kui selle sisestad, sest see on abiks võimaliku vandalismi korral. Paroole ei talletata kunagi.',
	'author-complete' => 'Palun lisa autoriteave!',
	'preview-hide' => 'Peida eelvaade',
	'preview-refresh' => 'Uuenda eelvaade',
	'error-must-accept' => 'Et jätkata otsese üleslaadimisega, pead nõustuma toodud tingimustega.',
	'error-tusc-failed' => 'TUSC-kontroll ebaõnnestus: vale kasutajanimi või parool.',
	'description-license' => 'Kirjelduse ja litsentsi valimine',
	'finalise' => 'Üksikasjade lõplik vormistus',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'title' => 'SVG Itzulpena',
	'error-tryagain' => '$1 Sakatu zure nabigatzaileko atzera botoia berriz saiatzeko.',
	'error-nothing' => 'Ez dago itzultzeko ezer.',
	'error-notsvg' => 'Ez da SVG fitxategia.',
	'error-unexpected' => 'Ustekabeko errore bat gertatu da.',
	'error-notfound' => 'Ezin izan da SVG fitxategia lortu emandako URL-tik.',
	'error-upload' => 'Igotzerakoan errore bat egon da.',
	'begin-translation' => 'Itzulpena hasi',
	'th-original' => 'Jatorrizkoa',
	'th-translation' => 'Itzulpena',
	'th-language' => 'Hizkuntza',
	'th-username' => 'Erabiltzaile izena',
	'th-password' => 'Pasahitza',
	'th-method' => 'Metodoa',
	'option-tusc' => 'TUSC (igoera automatikoa)',
	'option-manual' => 'Eskuz igo',
	'preview' => 'Aurrebista',
	'translate' => 'Itzuli',
	'translate-instructions' => 'Sarrerak fitxategiaren izen (adib. "$1") edo URL oso (adib. "$2") bezala onartzen dira. Lehen aukera erabiltzen bada, Wikimedia Commonsek jatorri bezala onartuko du. SVG bat itzultzeko beste web edo wiki batetik, url formatu osoa erabili behar duzu.',
	'svginput-label' => 'SVG fitxategia',
	'stats-footer' => 'Tresna honekin gutxi gorabehera $1 fitxategi itzuli dira $2-(e)tik',
	'uploading' => 'Igotzen',
	'upload-complete' => 'Igoera arrakastatsua izan da. Irudiak $1-en egon beharko luke',
	'editdescriptionpage' => 'Deskribapen orri berria aldatu',
	'disclaimer' => 'Datu anonimo batzuk jasoko dira hainbat estatistika egiteko. TUSC erabiltzaile izenak ere gordeak izango dira bandalismo ekintzak ekiditeko. Pasahitzak ez dira inoiz gordeko.',
	'author-complete' => 'Mesedez egilearen informazioa bete!',
	'preview-hide' => 'Aurrebista ezkutatu',
	'preview-refresh' => 'Aurrebista eguneratu',
	'error-must-accept' => 'Zuzeneko igoerarekin jarraitzeko erabilera-baldintzak onartu behar dituzu.',
	'error-tusc-failed' => 'TUSC baieztapenak huts egin du: erabiltzaile izena edo pasahitza ez dira zuzenak.',
	'description-license' => 'Aukeratu deskribapena eta lizentzia',
	'finalise' => 'Xehetasunak amaitu',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Omidh
 * @author Wayiran
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'title' => 'ترجمهٔ اس‌وی‌جی',
	'error-tryagain' => '$1 اگر می‌خواهید دوباره امتحان کنید، دکمهٔ بازگشت را در مرورگرتان بفشارید.',
	'error-nothing' => 'چیزی برای ترجمه وجود ندارد.',
	'error-notsvg' => 'پرونده اس‌وی‌جی نیست.',
	'error-unexpected' => 'یک خطای غیرمنتظره رخ داد.',
	'error-notfound' => 'امکان بازیابی پروندهٔ اس‌وی‌جی از نشانی اینترنتی ارائه‌شده نبود.',
	'error-upload' => 'خطای بارگذاری وجود دارد.',
	'begin-translation' => 'آغاز ترجمه',
	'th-original' => 'اصلی',
	'th-translation' => 'ترجمه',
	'th-language' => 'زبان',
	'th-username' => 'نام کاربری',
	'th-password' => 'گذرواژه',
	'th-method' => 'روش',
	'option-tusc' => 'TUSC (بارگذاری خودکار)',
	'option-manual' => 'بارگذاری دستی',
	'preview' => 'پیش‌نمایش',
	'translate' => 'ترجمه',
	'translate-instructions' => 'ورودی‌ها یا به عنوان نام پرونده (مثلاً «$1») و یا نشانی کامل (مثلاً «$2») پذیرفته می‌شوند. اگر از حالت اول استفاده شود، ویکی‌انبار به عنوان منبع در نظر گرفته خواهد شد. برای ترجمهٔ اس‌وی‌جی از یک وب‌گاه یا ویکی دیگر، باید از حالت نشانی کامل استفاده کنید.',
	'svginput-label' => 'پروندهٔ اس‌وی‌جی',
	'stats-footer' => 'این ابزار از $2 برای ترجمهٔ حدود $1 پرونده استفاده شده‌است.',
	'uploading' => 'بارگذاری',
	'upload-complete' => 'بارگذاری با موفقیت انجام شد. نگاره اکنون باید در $1 باشد.',
	'editdescriptionpage' => 'ویرایش صفحهٔ توضیحات جدید',
	'disclaimer' => 'مقداری داده‌های ناشناس برای اهداف آماری جمع‌آوری خواهد شد. اگر ارائه شود، نام‌های کاربری TUSC برای کمک در هنگام خرابکاری ثبت خواهند شد. گذرواژه‌ها هیچ‌گاه ثبت نخواهند شد.',
	'author-complete' => 'لطفاً اطلاعات پدیدآور را کامل کنید!',
	'preview-hide' => 'پنهان‌سازی پیش‌نمایش',
	'preview-refresh' => 'تازه‌کردن پیش‌نمایش',
	'error-must-accept' => 'برای ادامه‌دادن یک بارگذاری مستقیم باید شرایط استفادهٔ ارائه‌شده را بپذیرید.',
	'error-tusc-failed' => 'اعتبارسنجی TUSC شکست خورد: نام کاربری یا گذرواژه نادرست است.',
	'description-license' => 'توضیحات و اجازه‌نامه را انتخاب کنید',
	'finalise' => 'نهایی‌سازی جزئیات',
);

/** Finnish (suomi)
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'title' => 'SVG-käännin',
	'error-tryagain' => '$1 Yritä uudelleen napsauttamalla selaimen takaisin-painiketta.',
	'error-nothing' => 'Ei käännettävää.',
	'error-notsvg' => 'Tiedosto ei ole SVG-tiedosto.',
	'error-unexpected' => 'Tuntematon virhe tapahtui.',
	'error-notfound' => 'SVG-tiedostoa ei voitu hakea annetusta osoitteesta.',
	'error-upload' => 'Tallennuksessa tapahtui virhe.',
	'begin-translation' => 'Aloita kääntäminen',
	'th-original' => 'Alkuperäinen',
	'th-translation' => 'Käännös',
	'th-language' => 'Kieli',
	'th-username' => 'Käyttäjätunnus',
	'th-password' => 'Salasana',
	'th-method' => 'Tapa',
	'option-tusc' => 'TUSC (automaattinen tallennus)',
	'option-manual' => 'Manuaalinen tallennus',
	'preview' => 'Esikatsele',
	'translate' => 'Käännä',
	'translate-instructions' => 'Voit syöttää joko tiedostonimen (esim. "$1") tai koko osoitteen (esim. "$2"). Jos käytät ensimmäistä vaihtoehtoa, oletetaan, että Wikimedia Commons on lähde. Jos haluat kääntää SVG-tiedoston toiselta sivustolta tai wikistä, sinun täytyy käyttää täydellistä osoitetta.',
	'svginput-label' => 'SVG-tiedosto',
	'stats-footer' => 'Tällä työkalulla on käännetty noin $1 tiedostoa $2 alkaen.',
	'uploading' => 'Tallennetaan',
	'upload-complete' => 'Lataus onnistui. Tiedoston pitäisi löytyä nyt osoitteesta $1',
	'editdescriptionpage' => 'Muokkaa uutta kuvaussivua',
	'disclaimer' => 'Joitakin nimettömiä tietoja kerätään tilastokäyttöön. Annetut TUSC-käyttäjätunnukset tallennetaan häiriköinnin tutkintaa varten. Salasanoja ei koskaan tallenneta.',
	'author-complete' => 'Täytä tekijän tiedot!',
	'preview-hide' => 'Piilota esikatselu',
	'preview-refresh' => 'Päivitä esikatselu',
	'error-must-accept' => 'Jatkaaksesi suoraa latausta sinun täytyy hyväksyä käyttöehdot.',
	'error-tusc-failed' => 'TUSC-tarkistus epäonnistui: käyttäjä tai salasana väärin.',
	'description-license' => 'Valitse kuvaus ja lisenssi',
	'finalise' => 'Viimeistele tiedot',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'error-tryagain' => '$1 Trýst á aftur-knøttin á tínum brovsara fyri at royna umaftur.',
	'error-nothing' => 'Onki at týða.',
	'error-notsvg' => 'Ikki ein SVG fíla.',
	'error-unexpected' => 'Ein óvæntaður feilur uppstóð.',
	'error-upload' => 'Ein feilur hendi undir útlegging.',
	'begin-translation' => 'Byrja týðing',
	'th-original' => 'Upprunaligt',
	'th-translation' => 'Týðing',
	'th-language' => 'Mál',
	'th-username' => 'Brúkaranavn',
	'th-password' => 'Loyniorð',
	'th-method' => 'Máti',
	'option-tusc' => 'TUSC (sjálvvirkandi útleggjan)',
	'option-manual' => 'Manuel útleggjan',
	'preview' => 'Forskoðan',
	'translate' => 'Týð',
	'svginput-label' => 'SVG fíla',
	'stats-footer' => 'Hetta tólið hevur verið brúkt til at týða umleið $1 fílur síðan $2.',
	'uploading' => 'Leggur út',
	'upload-complete' => 'Tað eydnaðist at leggja út. Myndin skuldi nú verið at finna á $1',
	'editdescriptionpage' => 'Rætta ta nýggju frágreiðingarsíðuna',
);

/** French (français)
 * @author Crochet.david
 * @author IAlex
 * @author Jean-Frédéric
 * @author Moyg
 * @author Od1n
 * @author Sherbrooke
 * @author Verdy p
 */
$messages['fr'] = array(
	'title' => 'SVG Traduction',
	'error-tryagain' => '$1 Utilisez le bouton Précédent de votre navigateur pour réessayer.',
	'error-nothing' => 'Rien à traduire.',
	'error-notsvg' => 'Pas un fichier SVG.',
	'error-unexpected' => "Une erreur inattendue s'est produite.",
	'error-notfound' => "Le fichier SVG n'a pas pu être récupéré depuis l'URL fournie.",
	'error-upload' => 'Il y a eu une erreur de téléchargement.',
	'begin-translation' => 'Commencer la traduction',
	'th-original' => 'Original',
	'th-translation' => 'Traduction',
	'th-language' => 'Langue',
	'th-username' => 'Nom d’utilisateur',
	'th-password' => 'Mot de passe',
	'th-method' => 'Méthode',
	'option-tusc' => 'TUSC (téléchargement automatique)',
	'option-manual' => 'Téléchargement manuel',
	'preview' => 'Prévisualiser',
	'translate' => 'Traduire',
	'translate-instructions' => 'Les entrées sont acceptées comme étant soit des noms de fichiers (par exemple : « $1 ») ou une URL complète (par exemple : « $2» ). Si la première option est utilisée, Wikimedia Commons sera assumée en tant que source. Pour traduire un SVG d’un autre site ou un wiki, vous devez utiliser le format URL complète.',
	'svginput-label' => 'Fichier SVG',
	'stats-footer' => 'Cet outil a été utilisé pour traduire environ {{PLURAL:$1|un fichier|$1 fichiers}} depuis $2.',
	'uploading' => 'Téléchargement',
	'upload-complete' => "Le téléchargement s'est terminé avec succès. L'image devrait maintenant se trouver à l'adresse $1.",
	'editdescriptionpage' => 'Modifier la nouvelle page de description',
	'disclaimer' => "Certaines données anonymes seront recueillies de façon privée à des fins statistiques. Si fournis, les noms d'usagers TUSC seront aussi notés dans le but d'aider à combattre le vandalisme. Les mots de passe ne sont jamais enregistrés.",
	'author-complete' => "Remplissez les informations sur l'auteur !",
	'preview-hide' => "Masquer l'aperçu",
	'preview-refresh' => 'Actualiser la prévisualisation',
	'error-must-accept' => "Pour continuer avec un téléversement direct, vous devez accepter les conditions d'utilisation prévues.",
	'error-tusc-failed' => "La validation TUSC a échoué : nom d'utilisateur ou mot de passe incorrect.",
	'description-license' => 'Sélectionnez la description et la licence',
	'finalise' => 'Finaliser les détails',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'error-nothing' => 'Ren a traduire.',
	'error-notsvg' => 'Pas un fichiér SVG.',
	'error-unexpected' => 'Na fôta emprèvua est arrevâye.',
	'th-original' => 'Originâl',
	'th-translation' => 'Traduccion',
	'th-language' => 'Lengoua',
	'th-username' => 'Nom d’utilisator',
	'th-password' => 'Contresegno',
	'th-method' => 'Mètoda',
	'option-tusc' => 'TUSC (tèlèchargement ôtomatico)',
	'option-manual' => 'Tèlèchargement manuèl',
	'preview' => 'Prèvisualisacion',
	'translate' => 'Traduire',
	'svginput-label' => 'Fichiér SVG',
	'uploading' => 'Tèlèchargement',
	'preview-hide' => 'Cachiér la prèvisualisacion',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'preview' => 'Réamhamharc',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Tradución SVG',
	'error-tryagain' => '$1 Prema no botón "Atrás" do seu navegador para intentalo de novo.',
	'error-nothing' => 'Non hai nada que traducir.',
	'error-notsvg' => 'Non é un ficheiro SVG.',
	'error-unexpected' => 'Houbo un erro inesperado.',
	'error-notfound' => 'Non se puido recuperar o ficheiro SVG desde o enderezo URL proporcionado.',
	'error-upload' => 'Houbo un erro de carga.',
	'begin-translation' => 'Comezar a tradución',
	'th-original' => 'Orixinal',
	'th-translation' => 'Tradución',
	'th-language' => 'Lingua',
	'th-username' => 'Nome de usuario',
	'th-password' => 'Contrasinal',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (carga automática)',
	'option-manual' => 'Carga manual',
	'preview' => 'Vista previa',
	'translate' => 'Traducir',
	'translate-instructions' => 'Acéptanse as entradas como nomes de ficheiro (por exemplo, "$1") ou enderezos URL completos (por exemplo, "$2"). En caso de empregar a primeira opción, a Wikimedia Commons usarase como fonte. Para traducir un SVG desde outro sitio ou wiki, debe utilizar o formato URL completo.',
	'svginput-label' => 'Ficheiro SVG',
	'stats-footer' => 'Esta ferramenta empregouse para traducir aproximadamente $1 ficheiros desde $2.',
	'uploading' => 'Cargando',
	'upload-complete' => 'A carga finalizou correctamente. A imaxe debería estar en $1',
	'editdescriptionpage' => 'Editar a nova páxina de descrición',
	'disclaimer' => 'Recolleranse de xeito privado algúns datos anónimos para fins estatísticos. Se se proporcionaron, os nomes de usuario TUSC tamén se rexistrarán para axudar a combater o vandalismo. Os contrasinais non se gardan en ningún caso.',
	'author-complete' => 'Complete a información do autor!',
	'preview-hide' => 'Agochar a vista previa',
	'preview-refresh' => 'Actualizar a vista previa',
	'error-must-accept' => 'Para continuar a carga directa ten que aceptar as condicións de uso.',
	'error-tusc-failed' => 'Fallou a validación TUSC: nome de usuario ou contrasinal incorrectos.',
	'description-license' => 'Seleccione a descrición e a licenza',
	'finalise' => 'Finalizar os detalles',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'th-language' => 'Γλῶττα',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'th-original' => 'મૂળ',
	'th-translation' => 'ભાષાંતર',
	'th-language' => 'ભાષા',
	'th-username' => 'સભ્ય નામ',
	'th-password' => 'પાસવર્ડ',
	'th-method' => 'પધ્ધતિ',
	'preview' => 'પૂર્વાવલોકન',
	'translate' => 'ભાષાંતર',
	'uploading' => 'અપલોડ કરી રહ્યા છે..',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title' => 'תרגום SVG',
	'error-tryagain' => '$1 לחצו על כפתור "חזרה" בדפדפן כדי לנסות שוב.',
	'error-nothing' => 'אין מה לתרגם.',
	'error-notsvg' => 'זה לא קובץ SVG.',
	'error-unexpected' => 'אירעה תקלה בלתי צפויה.',
	'error-notfound' => 'לא ניתן לאחזר את קובץ ה־SVG מהכתובת שניתנה',
	'error-upload' => 'שגיאה בהעלאה.',
	'begin-translation' => 'להתחיל לתרגם',
	'th-original' => 'מקור',
	'th-translation' => 'תרגום',
	'th-language' => 'שפה',
	'th-username' => 'שם משתמש',
	'th-password' => 'סיסמה',
	'th-method' => 'שיטה',
	'option-tusc' => 'TUSC (העלאה אוטומטית)',
	'option-manual' => 'העלאה ידנית',
	'preview' => 'תצוגה מקדימה',
	'translate' => 'לתרגם',
	'translate-instructions' => 'אפשר לתת בתור קלט שמות קבצים (למשל "$1") או כתובת מלאות (למשל "$2). במקרה הראשון ההנחה היא שהקובץ נמצא בוויקישיתוף. כדי לתרגם קובץ SVG מאתר אחר, יש לתת כתובת מלאה.',
	'svginput-label' => 'קובץ SVG',
	'stats-footer' => 'הכלי הזה שימש לתרגום של כ־$1 קבצים מאז $2.',
	'uploading' => 'ההעלאה מתבצעת',
	'upload-complete' => 'ההעלאה הושלמה בהצלחה. התמונה אמורה להיות עכשיו בכתובת $1',
	'editdescriptionpage' => 'עריכת דף התיאור החדש',
	'disclaimer' => 'נתונים אלמוניים מסוימים ייאספו באופן פרטי למטרות סטטיסטיקה. אם הם יינתנו, שמות משתמש ב־TUSC יירשמו גם כדי לעזור במקרה של השחתה. ססמאות לא תישמרנה לעולם.',
	'author-complete' => 'נא למלא את כל המידע שלך!',
	'preview-hide' => 'הסתרת תצוגה מקדימה.',
	'preview-refresh' => 'רענון תצוגה מקדימה',
	'error-must-accept' => 'כדי להמשיך עם העלאה ישירה יש לקבל את תנאי השימוש שניתנו.',
	'error-tusc-failed' => 'זיהוי ב־TUSC נכשל: שגיאה בשם משתמש או בססמה.',
	'description-license' => 'נא לבחור תיאור ורישיון',
	'finalise' => 'גימור פרטים',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'error-nothing' => 'अनुवाद के लिए कुछ भी नहीं मिला।',
	'error-notsvg' => 'ये SVG फ़ाइल नहीं है।',
	'error-unexpected' => 'एक अनपेक्षित त्रुटि उत्पन्न हुई।',
	'error-upload' => 'अपलोड करने के समय त्रुटि उत्पन्न हुई।',
	'begin-translation' => 'अनुवाद शुरू',
	'th-original' => 'मूल',
	'th-translation' => 'अनुवाद',
	'th-language' => 'भाषा',
	'th-username' => 'सदस्यनाम',
	'th-password' => 'पासवर्ड',
	'th-method' => 'पद्धती',
	'option-tusc' => 'TUSC (स्वतः अपलोड)',
	'option-manual' => 'मैनुअल अपलोड',
	'preview' => 'पूर्वावलोकन',
	'translate' => 'अनुवाद',
	'svginput-label' => 'SVG फ़ाइल',
	'uploading' => 'अपलोड हो रही है',
	'upload-complete' => 'अपलोड सफलतापूर्वक पूर्ण हुआ। छवि अब $1 में होनी चाहिए',
	'editdescriptionpage' => 'नया विवरण पृष्ठ संपादित करें',
	'author-complete' => 'कृपया रचयिता जानकारी पूर्ण करें!',
	'preview-hide' => 'पूर्वावलोकन छुपाएँ',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'title' => 'SVG Prevoditelj',
	'error-tryagain' => '$1 Kliknite na gumb „Nazad“ svog preglednika za ponovni postupak.',
	'error-nothing' => 'Ništa za prevođenje.',
	'error-notsvg' => 'Nije SVG datoteka.',
	'error-unexpected' => 'Pojavila se neočekivana pogreška.',
	'error-notfound' => 'SVG datoteku nije moguće dohvatiti iz URL-a.',
	'error-upload' => 'Došlo je do pogreške pri učitavanju.',
	'begin-translation' => 'Započnite prijevod',
	'th-original' => 'Izvorno',
	'th-translation' => 'Prijevod',
	'th-language' => 'Jezik',
	'th-username' => 'Suradničko ime',
	'th-password' => 'Lozinka',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (automatsko postavljanje)',
	'option-manual' => 'Ručno postavljanje',
	'preview' => 'Pregled',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Unosi su prihvaćeni kao nazivi datoteka (npr. "$1") ili puni URL (npr."$2"). Ako se rabi prva mogućnost, Zajednički poslužitelj će se pretpostaviti kao izvor. Da biste preveli SVG s druge stranice ili wiki, morate koristiti puni oblik URL-a.',
	'svginput-label' => 'SVG datoteka',
	'stats-footer' => 'Ova alat se rabi za prevođenje približno $1 datoteka od $2.',
	'uploading' => 'Postavljanje',
	'upload-complete' => 'Postavljanje uspješno završeno. Slika bi trebala sada biti na $1',
	'editdescriptionpage' => 'Uredi novu stranicu s opisom',
	'disclaimer' => 'Neki anonimni podaci će se prikupljati u statističke svrhe. Ako je navedeno, TUSC suradnička imena također će biti zapisana kao pomoć u slučaju vandalizma. Lozinke nikada neće biti snimljene.',
	'author-complete' => 'Molimo Vas da popunite informacije o autoru!',
	'preview-hide' => 'Sakrij pregled',
	'preview-refresh' => 'Osvježi pregled',
	'error-must-accept' => 'Da biste nastavili s izravnim postavljanjem morate prihvatiti uvjete uporabe kako su navedeni.',
	'error-tusc-failed' => 'TUSC provijera nije uspijela: suradničko ime ili lozinka su neispravni.',
	'description-license' => 'Odaberite opis i licenciju',
	'finalise' => 'Dovrši detalje',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'error-tryagain' => '$1 Klikń na tłóčatko "Wróćo" swojeho wobhladowaka, zo by hišće raz spytał.',
	'error-nothing' => 'Njeje ničo za přełožowanje.',
	'error-notsvg' => 'To SVG-dataja njeje.',
	'error-unexpected' => 'Njewočakowany zmylk je wustupił.',
	'error-notfound' => 'SVG-dataja njeda so wot podateho URL wotwołać.',
	'error-upload' => 'Při nahrawanju je zmylk wustupił.',
	'begin-translation' => 'Přełožowanje započeć',
	'th-original' => 'Original',
	'th-translation' => 'Přełožk',
	'th-language' => 'Rěč',
	'th-username' => 'Wužiwarske mjeno',
	'th-password' => 'Hesło',
	'th-method' => 'Metoda',
	'option-tusc' => 'TUSC (awtomatiske nahraće)',
	'option-manual' => 'Manuelne nahraće',
	'preview' => 'Přehlad',
	'translate' => 'Přełožić',
	'translate-instructions' => 'Zapodaća akceptuja so pak jako datajowe mjena (na př. "$1")  pak jako dospołny URL (na př. "$2"). Jeli so prěnja opcija wužiwa, budźe so Wikimedia Commons jako žórło předpokładować. Zo by SVG z druheho sydła abo wikija přełožił, dyrbiš format z dospołnym URL wužiwać.',
	'svginput-label' => 'SVG-dataja',
	'stats-footer' => 'Tutón nastroj je so wužił, zo by so na wšě $1 datajow wot $2 přełožiło.',
	'uploading' => 'Nahrawa so...',
	'upload-complete' => 'Nahraće je wuspěšnje zakónčene. Wobraz dyrbjał nětko pod $1 k dispoziciji stać.',
	'editdescriptionpage' => 'Nowu wopisansku stronu wobdźěłać',
	'disclaimer' => 'Někotre anonymne daty so za statistiske zaměry zběraja. Jeli k dispoziciji, wužiwarske mjena TUSC so tež zapřijimaja, jako pomocny srědk přećiwo wandalizmej. Hesła so ženje njezapřijimaja.',
	'author-complete' => 'Prošu wudospołń informacije wo awtorje!',
	'preview-hide' => 'Přehlad schować',
	'preview-refresh' => 'Přehlad aktualizować',
	'error-must-accept' => 'Zo by z direktnym nahraćom pokročował, dyrbiš slědowace wužiwanske wuměnjenja akceptować.',
	'error-tusc-failed' => 'TUSC-přepruwowanje je so njeporadźiło: Wužiwarske mjeno abo hesło je wopak.',
	'description-license' => 'Wopisanje a licencu wubrać',
	'finalise' => 'Podrobnosće wudospołnić',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'title' => 'SVG-fordítás',
	'error-tryagain' => '$1 Kattints a böngésződ vissza gombjára az újrapróbálkozáshoz.',
	'error-nothing' => 'Nincs lefordítandó szöveg.',
	'error-notsvg' => 'Nem SVG-fájl.',
	'error-unexpected' => 'Váratlan hiba történt.',
	'error-notfound' => 'Az SVG-fájlt nem sikerült letölteni megadott URL-címről.',
	'error-upload' => 'Hiba történt a feltöltés közben.',
	'begin-translation' => 'Fordítás indítása',
	'th-original' => 'Eredeti',
	'th-translation' => 'Fordítás',
	'th-language' => 'Nyelv',
	'th-username' => 'Felhasználónév',
	'th-password' => 'Jelszó',
	'th-method' => 'Módszer',
	'option-tusc' => 'TUSC (automatikus feltöltés)',
	'option-manual' => 'Feltöltés kézzel',
	'preview' => 'Előnézet',
	'translate' => 'Fordítás',
	'translate-instructions' => 'A bemenet vagy fájlnév (pl. „$1”) vagy teljes URL (pl. „$2”) legyen. Ha az első formát használod, akkor a Wikimedia Commons lesz a kép forrása. Ha más wikikről szeretnél képeket fordítani, akkor a teljes URL-es formátumot kell használnod.',
	'svginput-label' => 'SVG-fájl',
	'stats-footer' => 'Ezzel az eszközzel körülbelül $1 fájlt vittek át $2 óta.',
	'uploading' => 'Feltöltés',
	'upload-complete' => 'A feltöltés sikeresen befejeződött. A kép a következő címen érhető el: $1',
	'editdescriptionpage' => 'Az új leírólap szerkesztése',
	'disclaimer' => 'Néhány névtelen adat rögzítve lesz statisztikai célok miatt. Ha meg van adva, a TUSC felhasználónév is el lesz tárolva, arra az esetre, ha később vandalizmus merülne fel. A jelszavakat viszont soha nem mentjük el.',
	'author-complete' => 'Kérlek, add meg a szerzővel kapcsolatos információkat!',
	'preview-hide' => 'Előnézet elrejtése',
	'preview-refresh' => 'Előnézet frissítése',
	'error-must-accept' => 'A közvetlen feltöltés folytatásához el kell fogadnod a megadott használati feltételeket.',
	'error-tusc-failed' => 'TUSC érvényesítés nem sikerült: a felhasználónév vagy a jelszó helytelen.',
	'description-license' => 'Leírás és licenc kiválasztása',
	'finalise' => 'Részletek véglegesítése',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'Traduction SVG',
	'error-tryagain' => '$1 Preme le button Retro de tu navigator del web pro reprobar.',
	'error-nothing' => 'Nihil a traducer.',
	'error-notsvg' => 'Non es un file SVG.',
	'error-unexpected' => 'Un error inexpectate ha occurrite.',
	'error-notfound' => 'Le file SVG non poteva esser cargate del URL fornite.',
	'error-upload' => 'Un error occurreva durante le incargamento.',
	'begin-translation' => 'Comenciar traduction',
	'th-original' => 'Original',
	'th-translation' => 'Traduction',
	'th-language' => 'Lingua',
	'th-username' => 'Nomine de usator',
	'th-password' => 'Contrasigno',
	'th-method' => 'Methodo',
	'option-tusc' => 'TUSC (incargamento automatic)',
	'option-manual' => 'Incargamento manual',
	'preview' => 'Previsualisation',
	'translate' => 'Traducer',
	'translate-instructions' => 'Es possibile entrar un nomine de file (p.ex. "$1") o un URL complete (p.ex. "$2"). Si le prime option es usate, Wikimedia Commons es assumite como fonte. Pro traducer un file SVG de un altere sito o wiki, tu debe usar le URL complete.',
	'svginput-label' => 'File SVG',
	'stats-footer' => 'Iste instrumento ha essite usate pro traducer circa $1 files depost $2.',
	'uploading' => 'Incargamento in curso',
	'upload-complete' => 'Le incargamento ha succedite. Le imagine debe ora esser presente a $1',
	'editdescriptionpage' => 'Modificar le nove pagina de description',
	'disclaimer' => 'Certe datos anonyme essera colligite in private pro alimentar nostre statisticas. Si fornite, le nomines de usator de TUSC etiam essera registrate pro assister in caso de vandalismo. Le contrasignos nunquam essera registrate.',
	'author-complete' => 'Per favor completa le informationes del autor.',
	'preview-hide' => 'Celar previsualisation',
	'preview-refresh' => 'Refrescar previsualisation',
	'error-must-accept' => 'Pro continuar con un incargamento directe, es necessari acceptar le conditiones de uso pertinente.',
	'error-tusc-failed' => 'Validation TUSC fallite: nomine de usator o contrasigno incorrecte.',
	'description-license' => 'Selige description e licentia',
	'finalise' => 'Finalisar detalios',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'error-tryagain' => '$1 Tekan tombol back browser Anda untuk mencoba lagi.',
	'error-nothing' => 'Tak ada yang diterjemahkan',
	'error-notsvg' => 'Bukan berkas SVG.',
	'error-unexpected' => 'Terjadi kesalahan tak terduga.',
	'error-notfound' => 'Berkas SVG tidak bisa diambil dari URL yang diberikan.',
	'error-upload' => 'Ada kesalahan saat mengunggah.',
	'begin-translation' => 'Mulai terjemahkan',
	'th-original' => 'Asli',
	'th-translation' => 'Terjemahan',
	'th-language' => 'Bahasa',
	'th-username' => 'Nama pengguna',
	'th-password' => 'Kata sandi',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (unggah otomatis)',
	'option-manual' => 'Mengunggah manual',
	'preview' => 'Pratayang',
	'translate' => 'Terjemahkan',
	'translate-instructions' => 'Masukan diterima sebagai salah satu nama file (misalnya "$1") atau URL lengkap (misalnya "$2"). Jika opsi pertama digunakan, Wikimedia Commons akan dianggap sebagai sumber. Untuk menerjemahkan SVG dari situs atau wiki lain, anda harus menggunakan format url lengkap.',
	'svginput-label' => 'Berkas SVG',
	'stats-footer' => 'Alat ini telah digunakan untuk menerjemahkan sekitar $1 files sejak $2 .',
	'uploading' => 'Mengunggah',
	'upload-complete' => 'Pengunggahan selesai dengan sukses. Gambar sekarang harusnya ada di $1',
	'editdescriptionpage' => 'Sunting halaman deskripsi baru',
	'disclaimer' => 'Beberapa data anonim akan secara pribadi dikumpulkan untuk tujuan statistik. Jika disediakan, TUSC nama pengguna juga akan dicatat untuk membantu dalam peristiwa vandalisme. Kata sandi tidak akan disimpan.',
	'author-complete' => 'Mohon lengkapi informasi penulis!',
	'preview-hide' => 'Sembunyikan pratayang',
	'preview-refresh' => 'Perbarui pratayang',
	'error-must-accept' => 'Untuk melanjutkan mengunggah secara langsung, anda harus menerima persyaratan penggunaan yang disediakan.',
	'error-tusc-failed' => 'Validasi TUSC gagal: nama pengguna atau kata sandi salah.',
	'description-license' => 'Pilih deskripsi dan lisensi',
	'finalise' => 'Rincian akhir',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'th-language' => 'Ásụ̀sụ̀',
	'th-username' => "Áhà ọ'bànifé",
	'th-password' => 'Okwúngáfè',
	'preview' => 'Lètú',
	'translate' => 'Tụ̀wári ásụ̀sụ̀',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'th-translation' => 'Торжам',
	'th-language' => 'Мотт',
	'th-username' => 'Дакъалаьцархочунна цIи',
	'th-password' => 'КъайлдоагIа',
	'translate' => 'торжам де',
);

/** Italian (italiano)
 * @author Beta16
 * @author Mpitt
 */
$messages['it'] = array(
	'error-tryagain' => '$1 Premi il pulsante "Indietro" del tuo browser per riprovare.',
	'error-nothing' => 'Niente da tradurre.',
	'error-notsvg' => 'Non è un file SVG.',
	'error-unexpected' => 'Si è verificato un errore imprevisto.',
	'error-notfound' => "Il file SVG non può essere recuperato dall'URL fornito.",
	'error-upload' => 'Si è verificato un errore nel caricamento.',
	'begin-translation' => 'Comincia a tradurre',
	'th-original' => 'Originale',
	'th-translation' => 'Traduzione',
	'th-language' => 'Lingua',
	'th-username' => 'Nome utente',
	'th-password' => 'Password',
	'th-method' => 'Metodo',
	'option-tusc' => 'TUSC (caricamento automatico)',
	'option-manual' => 'Caricamento manuale',
	'preview' => 'Anteprima',
	'translate' => 'Traduci',
	'translate-instructions' => 'Gli input sono accettati sia come nomi di file (per esempio " $1 ") che come URL completi (ad esempio" $2 "). Se la prima opzione viene utilizzata, si assume che la fonte sia Wikimedia Commons. Per tradurre un SVG da un altro sito o wiki, è necessario utilizzare l\'URL completo.',
	'svginput-label' => 'File in formato SVG',
	'stats-footer' => 'Questo strumento è stato utilizzato per tradurre circa $1 file dal $2 .',
	'uploading' => 'Caricamento in corso',
	'upload-complete' => "Upload completato con successo. L'immagine dovrebbe essere all'indirizzo $1",
	'editdescriptionpage' => 'Modificare la nuova pagina di descrizione',
	'disclaimer' => 'Alcuni dati anonimi saranno privatamente raccolti per fini statistici. Inoltre gli username TUSC, se forniti, saranno memorizzati per eventuali casi di vandalismo. Le password non verranno mai memorizzate.',
	'author-complete' => "Completare le informazioni sull'autore!",
	'preview-hide' => 'Nascondi anteprima',
	'preview-refresh' => 'Aggiorna anteprima',
	'error-must-accept' => "Per continuare con un upload diretto è necessario accettare i termini d'uso.",
	'error-tusc-failed' => 'Convalida TUSC fallita: username o password non corretti.',
	'description-license' => 'Selezionare la descrizione e la licenza',
	'finalise' => 'Finalizza i dettagli',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Hmiyazaki
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'error-tryagain' => '$1 再試行するにはブラウザーの戻るボタンを押してください。',
	'error-nothing' => '翻訳できるものはありません。',
	'error-notsvg' => 'SVG ファイルではありません。',
	'error-unexpected' => '予期しないエラーが発生しました。',
	'error-notfound' => 'SVG ファイルを、入力された URL から取得できませんでした。',
	'error-upload' => 'アップロード中にエラーが発生しました。',
	'begin-translation' => '翻訳の開始',
	'th-original' => '翻訳元',
	'th-translation' => '翻訳後',
	'th-language' => '言語',
	'th-username' => '利用者名',
	'th-password' => 'パスワード',
	'th-method' => '方法',
	'option-tusc' => 'TUSC (自動アップロード)',
	'option-manual' => '手動アップロード',
	'preview' => 'プレビュー',
	'translate' => '翻訳',
	'translate-instructions' => 'ファイル名 (「$1」など)、完全な URL (「$2」など) のいずれも入力できます。前者の場合、翻訳元ファイルがウィキメディア・コモンズにあると想定します。他のサイトやウィキにある SVG ファイルを翻訳するには、完全な URL 形式を使用する必要があります。',
	'svginput-label' => 'SVG ファイル',
	'stats-footer' => 'このツールは、$2 以降これまでに約 $1 ファイルを翻訳しました。',
	'uploading' => 'アップロード中',
	'upload-complete' => 'アップロードが完了しました。画像は $1 にあります。',
	'editdescriptionpage' => '新しい説明ページを編集',
	'disclaimer' => '統計上の目的で、匿名のデータを非公開で収集します。If supplied, TUSC usernames will also be recorded to assist in the event of vandalism. パスワードを記録することは決してありません。',
	'author-complete' => '著者の情報を記入してください',
	'preview-hide' => 'プレビューを隠す',
	'preview-refresh' => 'プレビューを更新',
	'error-must-accept' => '直接アップロードを続行するには、利用規約に同意する必要があります。',
	'error-tusc-failed' => 'TUSC 検証に失敗しました: 利用者名またはパスワードが無効です。',
	'description-license' => '説明とライセンスの選択',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'error-tryagain' => '$1 Pencèt tombol balik nèng pramban Sampéyan kanggo njajal manèh.',
	'error-nothing' => 'Ora ana sing diterjemahaké.',
	'error-notsvg' => 'Udu berkas SVG.',
	'error-unexpected' => 'Ana kasalahan sing ora kinira.',
	'error-notfound' => 'Berkas SVG ora bisa dijupuk saka URL sing diawèhaké.',
	'error-upload' => 'Ana kasalahan nalika ngunggah.',
	'begin-translation' => 'Lekas terjemahaké',
	'th-original' => 'Asli',
	'th-translation' => 'Terjamahan',
	'th-language' => 'Basa',
	'th-username' => 'Jeneng panganggo',
	'th-password' => 'Tembung sandhi',
	'th-method' => 'Tata cara',
	'option-tusc' => 'TUSC (ngunggah otomatis)',
	'option-manual' => 'Ngunggah manual',
	'preview' => 'Pratayang',
	'translate' => 'Terjemahna',
	'svginput-label' => 'Berkas SVG',
	'stats-footer' => 'Piranti iki wis dianggo kanggo nerjemahaké kira-kira $1 berkas kawit $2.',
	'uploading' => 'Ngunggah',
	'upload-complete' => 'Pangunggahan rampung kanthi sukses. Gambar saiki kuduné nèng $1',
	'editdescriptionpage' => 'Sunting kaca dèskripsi anyar',
	'disclaimer' => 'Sebagéyan data anonim bakal diklempakaké sacara pribadi kanggo panjangka statistik. Yèn sumadhiya, jeneng panganggo TUSC uga bakal direkam kanggo ngéwangi yèn ana kadadéan pangrusakan. Tembung sandhi ora bakal direkam.',
	'author-complete' => 'Mangga lengkapi informasi panganggit!',
	'preview-hide' => 'Dhelikna pratayang',
	'preview-refresh' => 'Anyari pratayang',
	'error-must-accept' => 'Kanggo mbanjuraké mawa unggahan langsung, Sampéyan kudu nrima syarat panganggoan sing sumadhiya.',
	'error-tusc-failed' => 'Pangesahan TUSC ora kena: jeneng pengguna lan tembung sandhi salah.',
	'description-license' => 'Pilih dèskripsi lan lisènsi',
	'finalise' => 'Rampungaké rincian',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'error-nothing' => 'სათარგმნი არაფერია.',
	'error-notsvg' => 'ეს არ არის SVG ფაილი.',
	'begin-translation' => 'თარგმნის დაწყება',
	'th-original' => 'საწყისი',
	'th-translation' => 'თარგმანი',
	'th-language' => 'ენა',
	'th-username' => 'მომხმარებლის სახელი',
	'th-password' => 'პაროლი',
	'th-method' => 'მეთოდი',
	'preview' => 'წინასწარი გადახედვა',
	'translate' => 'თარგმნა',
	'svginput-label' => 'SVG ფაილი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'title' => 'SVG បកប្រែ',
	'error-tryagain' => '$1 ចុចប៊ូតុងត្រលប់ក្រោយរបស់ឧបករណ៍រាវរករបស់អ្នក ដើម្បីព្យាយាមម្ដងទៀត។',
	'error-nothing' => 'គ្មានអ្វីត្រូវបកប្រែ។',
	'error-notsvg' => 'មិនមែនជាឯកសារប្រភេទ SVG។',
	'error-unexpected' => 'មានកំហុសមិនបានព្រាងទុកមួយកើតឡើង។',
	'error-notfound' => 'ឯកសារ SVG នេះមិនអាចទាញយកបានពី URL នេះបានទេ។',
	'error-upload' => 'មានកំហុសក្នុងការផ្ទុកឡើង។',
	'begin-translation' => 'ចាប់ផ្ដើមបកប្រែ',
	'th-original' => 'ច្បាប់ដើម',
	'th-translation' => 'ការបកប្រែ',
	'th-language' => 'ភាសា',
	'th-username' => 'អត្តនាម',
	'th-password' => 'ពាក្យ​សម្ងាត់',
	'th-method' => 'វិធី',
	'option-tusc' => 'TUSC (ផ្ទុកឡើងដោយស្វ័យប្រវត្តិ)',
	'option-manual' => 'ផ្ទុកឡើងដោយដៃ',
	'preview' => 'ការមើលមុន',
	'translate' => 'បកប្រែ',
	'svginput-label' => 'ឯកសារ SVG',
	'stats-footer' => 'ឧបករណ៍នេះត្រូវបានប្រើសំរាប់បកប្រែឯកសារចំនួនប្រហែល $1 ​តាំងពី $2។',
	'uploading' => 'កំពុង​ផ្ទុកឡើង​',
	'upload-complete' => 'ការផ្ទុកឡើងសំរេចជាស្ថាពរ។ ពេលនេះ រូបភាពនេះគួរតែមាននៅ$1',
	'editdescriptionpage' => 'កែប្រែទំព័រពណ៌នាថ្មី',
	'disclaimer' => 'ទិន្នន័យខ្លះនឹងត្រូវបានប្រមូលទុកសំរាប់គោលបំណងខាងស្ថិតិ។ បើត្រូវបានផ្ដល់អោយ នោះអត្តនាម TUSC នឹងត្រូវបានកត់ត្រាទុកសំរាប់ការពារអំពើបំផ្លិចបំផ្លាញ​ជាសាធារណៈណាមួយ។ ពាក្យសំងាត់នឹងមិនត្រូវបានកត់ត្រាទុកជាដាច់ខាត។',
	'author-complete' => 'សូមបំពេញព័ត៌មានអ្នកនិពន្ធ!',
	'preview-hide' => 'លាក់ការមើលមុន',
	'preview-refresh' => 'ផ្ទុកការមើលមុនឡើងវិញ',
	'error-must-accept' => 'ដើម្បីបន្តដោយការផ្ទុកឡើងដោយផ្ទាល់ អ្នកត្រូវតែយល់ព្រមជាមួយនឹងល័ក្ខខ័ណ្ឌនៃការប្រើប្រាស់​ដែលបានផ្ដល់អោយ។',
	'error-tusc-failed' => 'សុពលកម្ម TUSC បរាជ័យ៖ អត្តនាមឬពាក្យសំងាត់មិនត្រឹមត្រូវ។',
	'description-license' => 'ជ្រើសរើសការពណ៌នានិងនិងអាជ្ញាបណ្ឌ។',
	'finalise' => 'ព័ត៌មានលំអិតចុងក្រោយ',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'error-tryagain' => '$1 ನಿಮ್ಮ ಜಾಲವೀಕ್ಷಕದ ಹಿಂದೆ ಗುಂಡಿಯನ್ನು ಒತ್ತಿ ಮತ್ತೆ ಪ್ರಯತ್ನಿಸಿ.',
	'error-nothing' => 'ಭಾಷಾಂತರಿಸಲು ಏನೂ ಇಲ್ಲ',
	'error-notsvg' => 'SVG ಕಡತವಲ್ಲ.',
	'error-unexpected' => 'ಅನಿರೀಕ್ಷಿತ ದೋಷ ಸಂಭವಿಸಿದೆ.',
	'error-notfound' => 'ಕೊಟ್ಟಿರುವ URL ನಿಂದ SVG ಕಡತವನ್ನು ತರಲಾಗಲಿಲ್ಲ.',
	'error-upload' => 'ನಕಲೆರಿಸುವಾಗ ದೋಷ ಸಂಭವಿಸಿದೆ.',
	'begin-translation' => 'ಅನುವಾದ ಶುರು ಮಾಡಿ',
	'th-original' => 'ಅಸಲು',
	'th-translation' => 'ಅನುವಾದಗಳು',
	'th-language' => 'ಭಾಷೆಗಳು',
	'th-username' => 'ಬಳಕೆದಾರ ಹೆಸರು',
	'th-password' => 'ಪ್ರವೇಶಪದ',
	'th-method' => 'ವಿಧಾನ',
	'option-tusc' => 'TUSC (ಸ್ವಯಂಚಾಲಿತ ನಕಲೇರಿಸುವಿಕೆ)',
	'option-manual' => 'ಕೈಯಾರೆ ನಕಲೇರಿಕೆ',
	'preview' => 'ಮುನ್ನೋಟ',
	'translate' => 'ಭಾಷಾಂತರಿಸಿ',
	'translate-instructions' => 'ಕಡತದ ಹೆಸರುಗಳು (ಉದಾ: "$1") ಅಥವಾ ಪೂರ್ಣ ಜಾಲದ URL (ಉದಾ: "$2") ರೀತಿಯಲ್ಲಿ ಆದಾನವನ್ನು ತೆಗೆದುಕೊಳ್ಳಲಾಗುವುದು. ಮೊದಲ ರೀತಿಯನ್ನು ಬಳಸಿದಲ್ಲಿ ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್ ಆಕರವೆಂದು ತಿಳಿಯಲಾಗುವುದು. ಬೇರೊಂದು ಜಾಲತಾಣ ಅಥವಾ ವಿಕಿಯಿಂದ SVG ಅನ್ನು ಅನುವಾದಿಸಲು ನೀವು ಪೂರ್ಣ ಜಾಲದ ರೀತಿಯನ್ನೇ ಬಳಸಬೇಕು.',
	'svginput-label' => 'SVG ಕಡತ',
	'stats-footer' => '$2 ನಂತರ $1 ಕಡತಗಳನ್ನು ಅನುವಾದಿಸಲು ಈ ಉಪಕರಣವು ಬಳಸಲ್ಪಟ್ಟಿದೆ.',
	'uploading' => 'ನಕಲೇರಿಸಲಾಗುತ್ತಿದೆ',
	'upload-complete' => 'ನಕಲೇರಿಸುವಿಕೆ ಸಫಲವಾಯಿತು. ಚಿತ್ರವು ಈಗ $1 ಅಲ್ಲಿ ಇರಬೇಕು.',
	'editdescriptionpage' => 'ವಿವರಣೆ ಪುಟವನ್ನು ಸಂಪಾದಿಸಿ',
	'disclaimer' => 'ಅಂಕಿ ಅಂಶಗಳಿಗಾಗಿ ಕೆಲವು ಅನಾಮಧೇಯ ದತ್ತಾಂಶಗಳನ್ನು ಖಾಸಗಿಯಾಗಿ ಕಲೆಹಾಕಲಾಗುವುದು. TUSC ಸದಸ್ಯತ್ವದ ಹೆಸರು ನೀಡಿದರೆ, ವಿಧ್ವಂಸಕ ಘಟನೆಗಳಲ್ಲಿ ಸಹಕರಿಸಲು ಅವುಗಳನ್ನೂ ದಾಖಲಿಸಲಾಗುವುದು. ಗುಪ್ತಪದಗಳನ್ನು ಎಂದಿಗೂ ದಾಖಲಿಸಲಾಗುವುದಿಲ್ಲ.',
	'author-complete' => 'ದಯವಿಟ್ಟು ಕರ್ತೃವಿನ ಮಾಹಿತಿ ಪೂರ್ತಿಗೊಳಿಸಿ!',
	'preview-hide' => 'ಮುನ್ನೋಟ ಅಡಗಿಸಿ',
	'preview-refresh' => 'ಮುನ್ನೋಟ ಮತ್ತೆ ನೋಡಿ',
	'error-must-accept' => 'ನೇರ ನಕಲೇರಿಸುವಿಕೆಯೊಂದಿಗೆ ಮುಂದುವರೆಯಲು ನೀವು ಬಳಕೆಯ ನಿಬಂಧನೆಗಳನ್ನು ಒಪ್ಪಲೇಬೇಕು.',
	'error-tusc-failed' => 'TUSC ದೃಢೀಕರಣ ವಿಫಲವಾಯಿತು: ಸದಸ್ಯತ್ವದ ಹೆಸರು ಅಥವಾ ಗುಪ್ತಪದ ತಪ್ಪಾಗಿದೆ.',
	'description-license' => 'ವಿವರಣೆ ಮತ್ತು ಪರವಾನಗಿ ಆಯ್ದುಕೊಳ್ಳಿ',
	'finalise' => 'ವಿವರಗಳನ್ನು ಅಂತಿಮಗೊಳಿಸಿ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'title' => 'SVG 번역',
	'error-tryagain' => '$1 다시 시도하려면 브라우저의 뒤로 버튼을 누르세요.',
	'error-nothing' => '번역할 것이 없습니다.',
	'error-notsvg' => 'SVG 파일이 아닙니다.',
	'error-unexpected' => '예기치 않은 오류가 발생했습니다.',
	'error-notfound' => '제공한 URL에서 SVG 파일을 찾을 수 없습니다.',
	'error-upload' => '올리는 데 오류가 났습니다.',
	'begin-translation' => '번역 시작',
	'th-original' => '원본',
	'th-translation' => '번역',
	'th-language' => '언어',
	'th-username' => '사용자 이름',
	'th-password' => '비밀번호',
	'th-method' => '방식',
	'option-tusc' => 'TUSC (자동 올리기)',
	'option-manual' => '수동 올리기',
	'preview' => '미리 보기',
	'translate' => '번역',
	'translate-instructions' => '파일 이름(예를 들어 "$1")이나 전체 URL(예를 들어 "$2") 중 하나를 입력하세요. 첫번째 설정을 사용할 경우 위키미디어 공용은 원본으로 간주합니다. 다른 사이트 또는 위키에서 SVG를 번역하려면 전체 url 형식을 사용해야 합니다.',
	'svginput-label' => 'SVG 파일',
	'stats-footer' => '이 도구는 $2 이후 파일 약 $1개를 변환하는 데 사용했습니다.',
	'uploading' => '올리는 중',
	'upload-complete' => '올리기를 성공적으로 완료했습니다. 그림은 $1에 있습니다.',
	'editdescriptionpage' => '새 설명 문서 편집',
	'disclaimer' => '일부 익명의 데이터는 개인 통계 목적으로만 수집됩니다. 제공할 경우 반달 행위를 할 경우 도움이 되도록 TUSC 사용자 이름도 기록합니다. 비밀번호는 기록하지 않습니다.',
	'author-complete' => '저자 정보를 완료하세요!',
	'preview-hide' => '미리 보기 숨기기',
	'preview-refresh' => '미리 보기 새로 고침',
	'error-must-accept' => '직접 올리기를 계속하려면 제공하는 이용 약관에 동의해야 합니다.',
	'error-tusc-failed' => 'TUSC 유효성 검사 실패: 사용자 이름이나 비밀번호가 잘못되었습니다.',
	'description-license' => '설명과 라이선스 선택',
	'finalise' => '자세한 정보 마무리',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => '<i lang="en">SVG</i> Övversäze',
	'error-tryagain' => '$1 Donn dä „Retuur“-Knopp en Dingem Brauser nämme, un dann versöhg_et norr_ens.',
	'error-nothing' => 'Nix zom Övversäze draan.',
	'error-notsvg' => 'Dat es jaa kein <i lang="en">SVG</i>-Dattei.',
	'error-unexpected' => 'Ene Fähler es opjetrodde, woh mer nit met jerääschnet hatte.',
	'error-notfound' => 'Onger däm aanjejovve <i lang="en">URL</i> ham_mer kein <i lang="en">SVG</i>-Dattei jefonge.',
	'error-upload' => 'Beim Huhlaade es ene Fähler opjetrodde.',
	'begin-translation' => 'Mem Övversäze aanfange',
	'th-original' => 'Ojinahl',
	'th-translation' => 'Övversäzong',
	'th-language' => 'Schprooch',
	'th-username' => 'Metmaacher Name',
	'th-password' => 'Paßwoot',
	'th-method' => 'Metood',
	'option-tusc' => '<i lang="en">TUSC</i> (automattesch Huhlaade)',
	'option-manual' => 'vun Hand huhlaade',
	'preview' => 'Vör-Aansich zeije',
	'translate' => 'Övversäze',
	'translate-instructions' => 'Enjangsdateije kam_mer met dänne iehr Name aanjävve (för e Beishpell „<code lang="en">$1</code>“) udder med enem kumplätte <i lang="en">URL</i> (för e Beishpell „<code lang="en">$2</code>“). Em eezde Fall looere mer op <i lang="en">Wikimedia Commons</i> donoh. Em zweite Fall kam_mer en <i lang="en">SVG</i>-Dattei fun ene ander ẞait udder uss_enem andere Wiki övversäze.',
	'svginput-label' => 'De <i lang="en">SVG</i>-Dattei',
	'stats-footer' => 'Heh dat Projramm es jebruch woode, öm ätwa {{PLURAL:$1|ein Dattei|$1 Datteije|noll Datteije}} zick $2 ze övversäze.',
	'uploading' => 'Aam Huhlaade',
	'upload-complete' => 'Dat Huhlaade hät jeflupp, un dat Beld sullt jäz onger „$1“ shtonn.',
	'editdescriptionpage' => 'Donn di Sigg övver dat Beld op der neue Shtand bränge!',
	'disclaimer' => 'E paa Daate wääde för en Schtatistik faßjehallde, ävver nit öffentlesch jemaat, un se donn sesch och ob keine beschtemmpte Metmaacher beträcke. Wann se aanjejovve sin, wääde em <i lang="en">TUSC</i> sing Metmaachername faßjehallde, öm ze hällefe, falls ens Eine jät kapott jemaat hät. Paßwööter wääde nimohls faßjehallde.',
	'author-complete' => 'Bes esu joot, un donn de Aanjabe övver der Maacher vum Beld kumplätt maaache!',
	'preview-hide' => 'Vör-Aansesch verschteische',
	'preview-refresh' => 'Donn de Vör-Aansesch op der neue Shtand bränge!',
	'error-must-accept' => 'Öm med em tiräk Huhlaade wiggger ze maache. moß De dä Bedengonge för der Jebruch zohshtemme.',
	'error-tusc-failed' => 'Dem <i lang="en">TUSC</i> sing Övverprööfung es donävve jejange: Dä Name als Metmaacher udder et Paßwoot hät nit jeshtemmp.',
	'description-license' => 'Donn die Dattei koot beschrieve un en Lizänz ußwähle',
	'finalise' => 'Donn de Einzelheite kumplätt maache',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'th-translation' => 'Werger',
	'th-language' => 'Ziman',
	'th-username' => 'Navê bikarhêner',
	'th-password' => 'Şîfre',
	'preview' => 'Pêşdîtin',
	'translate' => 'Wergerîne',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'th-language' => 'Lingua',
	'translate' => 'Transducere',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'title' => 'SVG Iwwersetzen',
	'error-tryagain' => "$1 Klickt op den 'Zréck'-Knäppche vun Ärem Browser fir nach emol ze probéieren.",
	'error-nothing' => "Näischt fir z'iwwersetzen.",
	'error-notsvg' => 'Keen SVG-Fichier.',
	'error-unexpected' => 'En onerwaarte Feeler ass geschitt.',
	'error-notfound' => 'Den SVG-Fichier konnt op der URL, déi ugi war, net fonnt ginn.',
	'error-upload' => 'Et gouf e Feeler beim Eroplueden.',
	'begin-translation' => 'Iwwersetzung ufänken',
	'th-original' => 'Original',
	'th-translation' => 'Iwwersetzung',
	'th-language' => 'Sprooch',
	'th-username' => 'Benotzernumm',
	'th-password' => 'Passwuert',
	'th-method' => 'Method',
	'option-tusc' => 'TUSC (automatesch Eroplueden)',
	'option-manual' => 'Manuell Eroplueden',
	'preview' => 'Weisen ouni ze späicheren',
	'translate' => 'Iwwersetzen',
	'translate-instructions' => 'D\'Entréeë ginn entweder als Fichiersnimm (z. Bsp. "$1") oder als komplett URL (z. Bsp. "$2") akzeptéiert. Wann déi éischt Optioun benotzt gëtt, gëtt ugeholl datt Wikimedia Commons d\'Quell ass. Fir en SVG vun engem anere Site oder enger anerer Wiki z\'iwwersetze muss de Format mat der kompletter URL benotzt ginn.',
	'svginput-label' => 'SVG-Fichier',
	'stats-footer' => "Dësen Tool gouf zënter dem $2 benotzt fir ongeféier $1 Fichieren z'iwwersetzen.",
	'uploading' => 'Eroplueden',
	'upload-complete' => "D'Eroplueden huet funktionéiert. D'Bild misst elo op $1 sinn",
	'editdescriptionpage' => 'Déi nei Beschreiwungssäit änneren',
	'disclaimer' => "E puer anonym Donnéeë gi fir statistesch Zwecker gesammelt. Wann dir en TUSC Benotzernumm ugitt, gëtt deen och gespäichert fir am Fall vu Vandalismus d'Recherchen ze vereinfachen. Passwierder ginn ni gespäichert.",
	'author-complete' => "Kompletéiert w.e.g. d'Informatiounen iwwer den Auteur!",
	'preview-hide' => 'Preview verstoppen',
	'preview-refresh' => 'Preview aktualiséieren',
	'error-must-accept' => "Fir mam direkten Eropluede virunzefuere musst Dir d'Konditioune vum Benotzen akzeptéieren.",
	'error-tusc-failed' => 'TUSC-Validatioun feelgeschlo: Benotzernumm oder Passwuert ass net richteg.',
	'description-license' => 'Beschreiwung a Lizenz eraussichen',
	'finalise' => 'Detailer kompletéieren',
);

/** Lezghian (лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'th-language' => 'Чlалар',
	'th-password' => 'Куьлег',
);

/** Lithuanian (lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'title' => 'SVG vertimas',
	'error-tryagain' => '$1 Paspauskite naršyklės perkrovimo mygtuką ir bandykite dar kartą.',
	'error-nothing' => 'Nėra, ko versti.',
	'error-notsvg' => 'Tai nėra SVG failas.',
	'error-unexpected' => 'Įvyko netikėta klaida.',
	'error-notfound' => 'SVG failas negali būti gautas iš nurodyto adreso.',
	'error-upload' => 'Įvyko klaida įkeliant.',
	'begin-translation' => 'Pradėti vertimą',
	'th-original' => 'Originalas',
	'th-translation' => 'Vertimas',
	'th-language' => 'Kalba',
	'th-username' => 'Vartotojo vardas',
	'th-password' => 'Slaptažodis',
	'th-method' => 'Metodas',
	'option-tusc' => 'TUSC (automatinis įkėlimas)',
	'option-manual' => 'Rankinis įkėlimas',
	'preview' => 'Peržiūra',
	'translate' => 'Versti',
	'translate-instructions' => 'Galite įvesti failo pavadinimą (pvz., "$1") ar pilną adresą (pvz., "$2"). Jei pirmasis variantas yra naudojamas, šaltiniu bus laikoma Wikimedia Commons. Norėdami versti iš kitos svetainės ar wiki, turite naudoti pilno adreso formatą.',
	'svginput-label' => 'SVG failas',
	'stats-footer' => 'Ši priemonė buvo naudojama išversti maždaug $1 failų nuo $2.',
	'uploading' => 'Įkeliama',
	'upload-complete' => 'Sėkmingai įkelta. Paveikslėlis dabar turėtų būti šiuo adresu: $1',
	'editdescriptionpage' => 'Redaguoti naują aprašymo puslapį',
	'disclaimer' => 'Kai kurie anoniminiai duomenys bus privačiai renkami statistikos tikslais. Jei pateikėte, TUSC vardai taip pat bus registruojami dėl galimo vandalizmo. Slaptažodžiai niekada nebus įrašyti.',
	'author-complete' => 'Prašome užpildyti autoriaus informaciją!',
	'preview-hide' => 'Slėpti peržiūrą',
	'preview-refresh' => 'Atnaujinti peržiūrą',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'th-username' => 'Lietotājvārds',
	'th-password' => 'Parole',
	'th-method' => 'Metode',
	'svginput-label' => 'SVG fails',
	'uploading' => 'Augšupielādē',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Преведување на SVG',
	'error-tryagain' => '$1 Обидете се повторно со копчето „Назад“ на  вашиот прелистувач.',
	'error-nothing' => 'Нема ништо за преведување.',
	'error-notsvg' => 'Ова не е SVG-податотека.',
	'error-unexpected' => 'Се појави неочекувана грешка.',
	'error-notfound' => 'Не можев да ја преземам SVG-податотеката од наведената URL-адреса.',
	'error-upload' => 'Се појави грешка при подигањето.',
	'begin-translation' => 'Почнете со преведување',
	'th-original' => 'Изворно',
	'th-translation' => 'Превод',
	'th-language' => 'Јазик',
	'th-username' => 'Корисничко име',
	'th-password' => 'Лозинка',
	'th-method' => 'Начин',
	'option-tusc' => 'TUSC (автоматско подигање)',
	'option-manual' => 'Рачно подигање',
	'preview' => 'Преглед',
	'translate' => 'Преведување',
	'translate-instructions' => 'Допуштено е да се внесуваат податотечни имиња (на пр. „$1“) или полни URL-адреси (на пр. „$2“). Ако го користите првото, за извор ќе се смета Заедничката Ризница. Ако сакате да преведете SVG од друго мрежно место или вики, ќе мора да ја наведете полната URL-адреса.',
	'svginput-label' => 'SVG-податотека',
	'stats-footer' => 'Со оваа алатка досега се преведени околу $1 податотеки од (започнувајќи од $2).',
	'uploading' => 'Подигам',
	'upload-complete' => 'Подигањето заврши успешно. Сликата сега треба да биде на $1',
	'editdescriptionpage' => 'Уредете ја новата страница за опис',
	'disclaimer' => 'Извесни анонимни податоци ќе се прибираат приватно за статистички цели. Ако се наведени, корисничките имиња од TUSC ќе се заведат за помош во случај на вандализам. Лозинките никогаш нема да се евидентираат.',
	'author-complete' => 'Пополнете го податокот за авторот!',
	'preview-hide' => 'Скриј преглед',
	'preview-refresh' => 'Превчитај приказ',
	'error-must-accept' => 'За да продолжите со непосредното подигање, ќе мора најпрвин да ги прифатите наведените услови на користење.',
	'error-tusc-failed' => 'Заверката на TUSC не успеа: погрешно корисничко име или лозинка.',
	'description-license' => 'Изберете опис и лиценца',
	'finalise' => 'Довршете ги податоците',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'title' => 'എസ്.വി.ജി. പരിഭാഷ',
	'error-tryagain' => '$1 വീണ്ടും ശ്രമിക്കാൻ ബ്രൗസറിന്റെ ബാക്ക് ബട്ടൺ അമർത്തുക.',
	'error-nothing' => 'പരിഭാഷപ്പെടുത്താൻ ഒന്നുമില്ല.',
	'error-notsvg' => 'എസ്.വി.ജി. പ്രമാണം അല്ല.',
	'error-unexpected' => 'അപ്രതീക്ഷിതമായ പിഴവ് ഉണ്ടായി.',
	'error-notfound' => 'നൽകിയ യൂ.ആർ.എല്ലിൽ നിന്നും എസ്.വി.ജി. പ്രമാണം എടുക്കാൻ കഴിഞ്ഞില്ല.',
	'error-upload' => 'അപ്‌ലോഡ് ചെയ്തതിൽ ഒരു പിഴവുണ്ടായി.',
	'begin-translation' => 'പരിഭാഷ തുടങ്ങുക',
	'th-original' => 'മൂലം',
	'th-translation' => 'പരിഭാഷ',
	'th-language' => 'ഭാഷ',
	'th-username' => 'ഉപയോക്തൃനാമം',
	'th-password' => 'രഹസ്യവാക്ക്',
	'th-method' => 'മാർഗ്ഗം',
	'option-tusc' => 'റ്റി.യു.എസ്.സി. (സ്വയം പ്രവർത്തിത അപ്‌ലോഡ്)',
	'option-manual' => 'നമ്മൾ ചെയ്യേണ്ട അപ്‌ലോഡ്',
	'preview' => 'എങ്ങനെയുണ്ടെന്നു കാണുക',
	'translate' => 'പരിഭാഷപ്പെടുത്തുക',
	'translate-instructions' => 'പ്രമാണത്തിന്റെ പേരായോ (ഉദാ: "$1") പൂർണ്ണ യൂ.ആർ.എൽ.(ഉദാ: "$2") ആയോ നൽകാവുന്നതാണ്. ആദ്യത്തെ ഐച്ഛികമാണ് ഉപയോഗിക്കുന്നതെങ്കിൽ, സ്രോതസ്സായി വിക്കിമീഡിയ കോമൺസിനെ ഉപയോഗിക്കുന്നതാണ്. മറ്റൊരു സൈറ്റിലേയോ വിക്കിയിലേയോ എസ്.വി.ജി. പരിഭാഷപ്പെടുത്താൻ പൂർണ്ണ യൂ.ആർ.എൽ. നൽകേണ്ടതാണ്.',
	'svginput-label' => 'എസ്.വി.ജി. പ്രമാണം',
	'stats-footer' => '$2 മുതലുള്ള കണക്കെടുത്താൽ ഈ ഉപകരണം ഏകദേശം $1 പ്രമാണങ്ങൾ പരിഭാഷപ്പെടുത്താൻ ഉപയോഗിച്ചിട്ടുണ്ട്.',
	'uploading' => 'അപ്‌ലോഡ് ചെയ്യുന്നു',
	'upload-complete' => 'അപ്‌ലോഡ് വിജയകരമായി പൂർത്തിയായി. ചിത്രം ഇപ്പോൾ $1 എന്ന വിലാസത്തിൽ ലഭ്യമാണ്.',
	'editdescriptionpage' => 'പുതിയ വിവരണ താൾ തിരുത്തുക',
	'disclaimer' => 'ആളെ തിരിച്ചറിയാനാകാത്ത വിധത്തിൽ ചില വിവരങ്ങൾ സ്ഥിതിവിവരോപയോഗങ്ങൾക്കായി സ്വകാര്യമായി ശേഖരിക്കുന്നുണ്ട്. നൽകിയിട്ടുണ്ടെങ്കിൽ, റ്റി.യു.എസ്.സി. അംഗത്വനാമം നശീകരണപ്രവർത്തനം നേരിടാനുള്ള മാർഗ്ഗമായി ശേഖരിക്കുന്നതാണ്. രഹസ്യവാക്ക് ഒരു കാരണവശാലും ശേഖരിക്കില്ല.',
	'author-complete' => 'ദയവായി രചയിതാവിന്റെ വിവരങ്ങൾ പൂർത്തീകരിക്കുക!',
	'preview-hide' => 'പ്രിവ്യൂ മറയ്ക്കുക',
	'preview-refresh' => 'പ്രിവ്യൂ പുതുക്കുക',
	'error-must-accept' => 'നേരിട്ടുള്ള അപ്‌ലോഡ് തുടരാൻ നൽകിയിരിക്കുന്ന ഉപയോഗനിബന്ധനകൾ താങ്കൾ അംഗീകരിക്കേണ്ടതാണ്.',
	'error-tusc-failed' => 'റ്റി.യു.എസ്.സി. പരിശോധന പരാജയം: ഉപയോക്തൃനാമമോ രഹസ്യവാക്കോ തെറ്റാണ്.',
	'description-license' => 'വിവരണവും അനുവാദപത്രവും തിരഞ്ഞെടുക്കുക',
	'finalise' => 'വിവരങ്ങളുടെ അന്തിമരൂപം തയ്യാറാക്കുക',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'error-tryagain' => "$1 पुन्हा प्रयत्न करण्यासाठी आपल्या न्याहाळकाच्या 'back 'कळीवर टिचकी मारा.",
	'error-nothing' => 'भाषांतरासाठी काहीच शिल्लक नाही',
	'error-notsvg' => 'ही SVG संचिका नाही.',
	'error-unexpected' => 'अनपेक्षित त्रूटी घडली.',
	'error-upload' => 'अपभारणामध्ये(अपलोड) त्रुटी आली.',
	'begin-translation' => 'भाषांतरास सुरूवात करा',
	'th-original' => 'मुळ',
	'th-translation' => 'भाषांतर',
	'th-language' => 'भाषा',
	'th-username' => 'सदस्यनाम',
	'th-password' => 'परवलीचा शब्द',
	'th-method' => 'पद्धत',
	'option-tusc' => 'TUSC (स्वयंमेव अपभारण)',
	'option-manual' => 'मानवीकृत अपभारण(मॅनूअल अपलोड)',
	'preview' => 'झलक',
	'translate' => 'भाषांतर करा',
	'svginput-label' => 'SVG संचिका',
	'stats-footer' => 'हे साधन,  $2 पासून अंदाजे $1 संचिका भाषांतरीत करण्यास वापरण्यात आले आहे.',
	'uploading' => 'अपभारण करीत आहे',
	'upload-complete' => 'अपभारण यशस्वीरित्या पूर्ण झाले.चित्र सध्या $1 येथे असेल',
	'editdescriptionpage' => 'नविन वर्णन-पान संपादा',
	'author-complete' => 'कृपया लेखकाची माहिती पूर्ण करा!',
	'preview-hide' => 'झलक लपवा',
	'preview-refresh' => 'झलक तरोताजी करा',
	'error-must-accept' => "थेट अपभारणासाठी,आपणास, येथे दिलेल्या 'वापरण्याच्या अटी' स्वीकृत असावयास हव्या.",
	'description-license' => 'वर्णन व परवाना निवडा',
	'finalise' => 'तपशील नक्की करा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'Penterjemahan SVG',
	'error-tryagain' => '$1 Tekan butang "←" (back) pelayar anda untuk mencuba semula.',
	'error-nothing' => 'Tiada apa untuk diterjemahkan.',
	'error-notsvg' => 'Bukan fail SVG.',
	'error-unexpected' => 'Berlakunya ralat luar jangkaan.',
	'error-notfound' => 'Fail SVG tidak dapat diambil daripada URL yang diberikan.',
	'error-upload' => 'Ralat dialami ketika memuat naik.',
	'begin-translation' => 'Mulakan penterjemahan',
	'th-original' => 'Asal',
	'th-translation' => 'Terjemahan',
	'th-language' => 'Bahasa',
	'th-username' => 'Nama pengguna',
	'th-password' => 'Kata laluan',
	'th-method' => 'Kaedah',
	'option-tusc' => 'TUSC (muat naik automatik)',
	'option-manual' => 'Muat naik manual',
	'preview' => 'Pralihat',
	'translate' => 'Terjemah',
	'translate-instructions' => 'Input diterima dalam bentuk nama fail (cth. "$1") atau URL penuh (cth. "$2"). Jika pilihan pertama digunakan, Wikimedia Commons akan dianggap sebagai sumbernya. Untuk menterjemahkan SVG dari tapak web atau wiki yang lain, anda mesti menggunakan format URL penuh.',
	'svginput-label' => 'Fail SVG',
	'stats-footer' => 'Alat ini telah digunakan untuk menterjemah kira-kira $1 fail sejak $2.',
	'uploading' => 'Sedang memuat naik',
	'upload-complete' => 'Muat naik berjaya disiapkan. Imej anda sepatutnya berada di $1',
	'editdescriptionpage' => 'Sunting laman penerangan baru',
	'disclaimer' => 'Sesetengah data tanpa nama akan dihimpunkan secara peribadi untuk tujuan statistik. Jika disediakan, nama pengguna TUSC juga akan dicatatkan sebagai bantuan sekiranya terjadi laku musnah. Kata laluan tidak akan dicatatkan sekali pun.',
	'author-complete' => 'Tolong lengkapkan maklumat pengarang!',
	'preview-hide' => 'Sorokkan pralihat',
	'preview-refresh' => 'Muat semula pralihat',
	'error-must-accept' => 'Untuk meneruskan muat naik terus, anda mesti menerima terma-terma penggunaan yang dinyatakan.',
	'error-tusc-failed' => 'Pengesahan TUSC gagal: nama pengguna atau kata laluan tidak betul.',
	'description-license' => 'Pilih keterangan dan lesen',
	'finalise' => 'Muktamadkan butiran',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'error-tryagain' => '$1 Agħfas il-buttuna "Lura" tal-browżer sabiex terġa\' tipprova.',
	'error-nothing' => "M'hemm xejn x'tittraduċi.",
	'error-notsvg' => 'Mhuwiex fajl SVG.',
	'error-unexpected' => 'Seħħ żball mhux mistenni.',
	'error-notfound' => 'Il-fajl SVG ma setax jiġi miksub mill-URL mogħti.',
	'error-upload' => 'Kien hemm żball fit-tlugħ tal-fajl.',
	'begin-translation' => 'Ibda t-traduzzjoni',
	'th-original' => 'Oriġinali',
	'th-translation' => 'Traduzzjoni',
	'th-language' => 'Lingwa',
	'th-username' => 'Isem tal-utent',
	'th-password' => 'Password',
	'th-method' => 'Metodu',
	'option-tusc' => 'TUSC (tlugħ awtomatiku)',
	'option-manual' => 'Tlugħ manwali',
	'preview' => 'Dehra proviżorja',
	'translate' => 'Ittraduċi',
	'svginput-label' => 'Fajl SVG',
	'stats-footer' => 'Din l-għodda ġiet użata sabiex tittraduċi bejn $1 fajls mill-$2',
	'uploading' => "Qed itella'",
	'upload-complete' => 'It-tlugħ tal-fajl irnexxa. L-istampa għandha tkun fl-indirizz $1',
	'editdescriptionpage' => "Immodifika l-paġna ta' diskussjoni l-ġdida",
	'author-complete' => 'Kompli l-informazzjoni dwar l-awtur!',
	'preview-hide' => 'Aħbi d-dehra proviżorja',
	'preview-refresh' => 'Aġġorna d-dehra proviżorja',
	'error-must-accept' => "Sabiex tkompli bi tlugħ dirett inti trid taċċetta t-termini ta' użu provduti.",
	'error-tusc-failed' => 'Il-validazzjoni TUSC falliet: l-isem tal-utent jew il-password huma ħżiena.',
	'description-license' => 'Agħżel deskrizzjoni u liċenzja',
	'finalise' => 'Iffinalizza d-dettalji',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'th-language' => 'زوون',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'title' => 'SVG-oversettelse',
	'error-tryagain' => '$1 Trykk på nettleserens tilbake-knapp for å prøve igjen.',
	'error-nothing' => 'Ingenting som kan oversettes.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet feil oppsto.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angitte adressen.',
	'error-upload' => 'Det oppsto en feil under opplasting.',
	'begin-translation' => 'Begynn oversettelsen',
	'th-original' => 'Original',
	'th-translation' => 'Oversettelse',
	'th-language' => 'Språk',
	'th-username' => 'Brukernavn',
	'th-password' => 'Passord',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (automatisk opplasting)',
	'option-manual' => 'Manuell opplasting',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversett',
	'translate-instructions' => 'Innputt godtas enten som filnavn (f.eks. «$1») eller fullstendige adresser (f.eks. «$2»). Om den første muligheten brukes vil Wikimedia Commons antas som kilde. For å oversette en SVG-fil fra et annet nettsted eller en annen wiki må du bruke den fullstendige adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette verktøyet har blitt brukt for å oversette omtrent $1 filer siden $2.',
	'uploading' => 'Opplasting',
	'upload-complete' => 'Opplastingen er fullført. Bildet bør nå være på $1',
	'editdescriptionpage' => 'Endre den nye beskrivelsessiden',
	'disclaimer' => 'Enkelte anonyme data vil samles inn privat for statistiske formål. Hvis oppgitt vil også TUSC-brukernavn bli registrert for å bistå i tilfelle hærverk. Passord vil aldri bli registrert.',
	'author-complete' => 'Fyll ut forfatterinformasjonen!',
	'preview-hide' => 'Skjul forhåndsvisning',
	'preview-refresh' => 'Oppdater forhåndsvisning',
	'error-must-accept' => 'For å fortsette med en direkte opplasting må du godta de oppgitte bruksvilkårene.',
	'error-tusc-failed' => 'TUSC-validering feilet: feil brukernavn eller passord.',
	'description-license' => 'Velg beskrivelse og lisens',
	'finalise' => 'Ferdigstill detaljer',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'th-translation' => 'Översetten',
	'th-language' => 'Spraak',
	'th-username' => 'Brukernaam',
	'th-password' => 'Passwoord',
	'th-method' => 'Methood',
	'preview' => 'Vörschau',
	'translate' => 'Översetten',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'title' => 'एस भी जी अनुवाद गर्ने',
	'error-tryagain' => '$1 पुनः प्रयास गर्न ब्राउजरको  back बटनमा थिच्नुहोस्।',
	'error-nothing' => 'अनुवाद गर्नु पर्ने केहि छैन।',
	'error-notsvg' => 'यो एस भी जी फाइल होइन।',
	'error-unexpected' => 'एउटा अप्रत्यसित त्रुटि भएको छ।',
	'error-notfound' => 'दिइएको URLबाट SVG फाइल पाइएन।',
	'error-upload' => 'उर्ध्वभरण(uploading)मा त्रुटि भयो।',
	'begin-translation' => 'अनुवाद सुरु गर्ने',
	'th-original' => 'मूल',
	'th-translation' => 'अनुवाद',
	'th-language' => 'भाषा',
	'th-username' => 'प्रयोगकर्ता-नाम',
	'th-password' => 'पासवर्ड',
	'th-method' => 'विधि',
	'option-tusc' => 'TUSC (स्वतः उर्ध्वभरण)',
	'option-manual' => 'हातद्वारा उर्ध्वभरण',
	'preview' => 'पूर्वावलोकन',
	'translate' => 'अनुवाद गर्ने',
	'svginput-label' => 'SVG फाइल',
	'stats-footer' => '$2देखि लगभग $1 फाइलहरुको अनुवादमा यस औजारको प्रयोग गरियो।',
	'uploading' => 'उर्ध्वभरण गरिँदै',
	'upload-complete' => 'उर्ध्वभरण सफलता पूर्वक सम्पन्न भयो। चित्र अहिले  $1मा हुनुपर्छ।',
	'editdescriptionpage' => 'नयाँ विवरण पृष्ठ सम्पादन गर्ने',
	'author-complete' => 'कृपया रचयिता जानकारी पूरा गर्नुहोस्!',
	'preview-hide' => 'पूर्वावलोकन लुकाउने',
	'preview-refresh' => 'पूर्वावलोकन ताजा पार्ने',
	'error-must-accept' => 'प्रत्यक्ष उर्ध्वभरण अघि बढाउन तपाईंले दिइएका प्रयोग शर्तहरु स्वीकार गर्नुपर्छ।',
	'error-tusc-failed' => 'TUSC सत्यापन असफल: प्रयोगकर्ता नाम अथवा पासवर्डमा त्रुटि।',
	'description-license' => 'विवरण र लाइसेन्स चुन्ने',
	'finalise' => 'विवरणहरुलाई अन्तिम रुप दिने',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'error-nothing' => 'भाय्हिलेत छुं हे मदु।',
	'error-notsvg' => 'थ्व SVG फाइल मखु।',
	'error-unexpected' => 'अप्रत्याशित इरर जुवन।',
	'error-notfound' => 'ब्युगु URLनं SVG फाइल लिकाये मफुत।',
	'error-upload' => 'अपलोद याबिले इरर वल।',
	'begin-translation' => 'भाय्‌हिला न्ह्यथनादिसँ',
	'th-original' => 'धाथेंया',
	'th-translation' => 'भाय्‌हिला',
	'th-language' => 'भाय्',
	'th-username' => 'छ्य्लामि नां',
	'th-password' => 'दुथखँग्वः (पासवर्द):',
	'th-method' => 'विधि',
	'option-tusc' => 'TUSC (स्वचालित अपलोद)',
	'option-manual' => 'म्यानुअल अपलोद',
	'preview' => 'पूर्वालोकन',
	'translate' => 'भाय्‌ हिलादिसँ',
	'svginput-label' => 'SVG फाइल',
	'stats-footer' => '$2निसें थ्व ज्याभः छ्य्ला $1 फाइलया भाय् हिलाबुला जूगुदु।',
	'uploading' => 'अपलोद जुयाच्वँगुदु',
	'upload-complete' => 'अपलोद सुथांलाक्क क्वचाल। किपा आः $1य् दयेमा।',
	'editdescriptionpage' => 'न्हुगु विवरण पौ सम्पादन यानादिसँ',
	'author-complete' => 'कृपया च्वमि सूचं पूवंकादिसँ!',
	'preview-hide' => 'पूर्वालोकन सुचुकादिसँ',
	'preview-refresh' => 'पूर्वालोकन रिफ्रेश यानादिसँ',
	'error-must-accept' => 'प्रत्यक्ष अपलोद यानाच्वनेत छिं बियातःगु छ्य्लाया शर्त (terms of use) स्वीकार यायेमा।',
	'error-tusc-failed' => 'TUSC प्रमाणीकरन बिफल जुल: छ्य्लामि नां वा पासवर्द मिलेमजु।',
	'description-license' => 'विवरण व लाइसन्स ल्ययादिसँ',
	'finalise' => 'विवरणयात पूर्णरुप बियादिसँ',
);

/** Dutch (Nederlands)
 * @author Gerard Meijssen
 * @author Krinkle
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'SVG-vertaling',
	'error-tryagain' => '$1 Klik op de knop "Terug" in uw browser om het opnieuw te proberen.',
	'error-nothing' => 'Er is niets om te vertalen.',
	'error-notsvg' => 'Dit is geen SVG-bestand.',
	'error-unexpected' => 'Er is een onverwachte fout opgetreden.',
	'error-notfound' => 'Het SVG-bestand kon niet opgehaald worden van de opgegeven URL.',
	'error-upload' => 'Er is een fout opgetreden tijdens het uploaden.',
	'begin-translation' => 'Vertalen',
	'th-original' => 'Origineel',
	'th-translation' => 'Vertaling',
	'th-language' => 'Taal',
	'th-username' => 'Gebruikersnaam',
	'th-password' => 'Wachtwoord',
	'th-method' => 'Methode',
	'option-tusc' => 'TUSC (automatische upload)',
	'option-manual' => 'Handmatige upload',
	'preview' => 'Voorvertoning',
	'translate' => 'Vertalen',
	'translate-instructions' => 'U kunt bestandsnamen (bijvoorbeeld "$1") of volledige URL\'s (bijvoorbeeld "$2") invoeren. In het eerste geval wordt Wikimedia Commons als bron gebruikt. Gebruik het tweede formaat om een SVG-bestand van een andere site te vertalen.',
	'svginput-label' => 'SVG-bestand',
	'stats-footer' => 'Via dit programma zijn sinds $2 ongeveer $1 bestanden vertaald.',
	'uploading' => 'bezig met uploaden',
	'upload-complete' => 'Het uploaden is voltooid. De afbeelding is nu te bekijken op $1',
	'editdescriptionpage' => 'De nieuwe beschrijvingspagina bewerken',
	'disclaimer' => 'Enkele anonieme gegevens worden niet-openbaar verzameld voor statistische doeleinden. Gebruikersnamen voor TUSC worden ook vastgelegd om in het geval van vandalisme te kunnen ingrijpen. Wachtwoorden worden nooit opgeslagen.',
	'author-complete' => 'Voer de volledige auteursgegevens in!',
	'preview-hide' => 'Voorvertoning verbergen',
	'preview-refresh' => 'Voorvertoning verversen',
	'error-must-accept' => 'Om door te gaan met een directe upload, moet u akkoord gaan met de voorwaarden voor gebruik.',
	'error-tusc-failed' => 'De TUSC-validatie is mislukt. De gebruikersnaam of het wachtwoord is onjuist.',
	'description-license' => 'Selecteer beschrijving en licentie',
	'finalise' => 'Rond de details af',
);

/** no (no)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'title' => 'SVG-oversettelse',
	'error-tryagain' => '$1 Trykk på nettleserens tilbake-knapp for å prøve igjen.',
	'error-nothing' => 'Ingenting som kan oversettes.',
	'error-notsvg' => 'Ikke en SVG-fil.',
	'error-unexpected' => 'En uventet feil oppsto.',
	'error-notfound' => 'SVG-filen kunne ikke hentes fra den angitte adressen.',
	'error-upload' => 'Det oppsto en feil under opplasting.',
	'begin-translation' => 'Begynn oversettelsen',
	'th-original' => 'Original',
	'th-translation' => 'Oversettelse',
	'th-language' => 'Språk',
	'th-username' => 'Brukernavn',
	'th-password' => 'Passord',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (automatisk opplasting)',
	'option-manual' => 'Manuell opplasting',
	'preview' => 'Forhåndsvisning',
	'translate' => 'Oversett',
	'translate-instructions' => 'Innputt godtas enten som filnavn (f.eks. «$1») eller fullstendige adresser (f.eks. «$2»). Om den første muligheten brukes vil Wikimedia Commons antas som kilde. For å oversette en SVG-fil fra et annet nettsted eller en annen wiki må du bruke den fullstendige adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Dette verktøyet har blitt brukt for å oversette omtrent $1 filer siden $2.',
	'uploading' => 'Opplasting',
	'upload-complete' => 'Opplastingen er fullført. Bildet bør nå være på $1',
	'editdescriptionpage' => 'Endre den nye beskrivelsessiden',
	'disclaimer' => 'Enkelte anonyme data vil samles inn privat for statistiske formål. Hvis oppgitt vil også TUSC-brukernavn bli registrert for å bistå i tilfelle hærverk. Passord vil aldri bli registrert.',
	'author-complete' => 'Fyll ut forfatterinformasjonen!',
	'preview-hide' => 'Skjul forhåndsvisning',
	'preview-refresh' => 'Oppdater forhåndsvisning',
	'error-must-accept' => 'For å fortsette med en direkte opplasting må du godta de oppgitte bruksvilkårene.',
	'error-tusc-failed' => 'TUSC-validering feilet: feil brukernavn eller passord.',
	'description-license' => 'Velg beskrivelse og lisens',
	'finalise' => 'Ferdigstill detaljer',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'begin-translation' => 'Començar la traduccion',
	'th-original' => 'Original',
	'th-translation' => 'Traduccion',
	'th-language' => 'Lenga',
	'th-username' => "Nom d'utilizaire",
	'th-password' => 'Senhal',
	'th-method' => 'Metòde',
	'preview' => 'Previsualizar',
	'translate' => 'Tradusir',
	'svginput-label' => 'Fichièr SVG',
	'uploading' => 'Telecargament',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'error-tryagain' => '$1 ଆଉଥରେ ଚେଷ୍ଟା କରିବା ପାଇଁ ଆପଣଙ୍କ ବ୍ରାଉଜରରେ ପଛ ବଟନ କ୍ଲିକ କରନ୍ତୁ ।',
	'error-nothing' => 'ଅନୁବାଦ କରିବା ପାଇଁ କିଛି ନାହିଁ ।',
	'error-notsvg' => 'SVG ଫାଇଲ ନୁହେଁ ।',
	'error-unexpected' => 'କିଛି ଗୋଟେ ଅଜଣା ଅସୁବିଧା ହେଲା ।',
	'error-notfound' => 'ଦିଆଯାଇଥିବା URLଟିରେ SVG ଫାଇଲଟି ମିଳୁନାହି ।',
	'error-upload' => 'ଅପଲୋଡ କଲାବେଳେ ଅସୁବିଧା ଦେଖା ଦେଲା ।',
	'begin-translation' => 'ଅନୁବାଦ ଆରମ୍ଭ କରିବେ',
	'th-original' => 'ପ୍ରକୃତ',
	'th-translation' => 'ଅନୁବାଦ',
	'th-language' => 'ଭାଷା',
	'th-username' => 'ବ୍ୟବହାରକାରୀ ନାମ',
	'th-password' => 'ପାସୱାର୍ଡ଼',
	'th-method' => 'ଧାରା',
	'option-tusc' => 'TUSC (ଆପେ ଆପେ ଅପଲୋଡ)',
	'option-manual' => 'ଆପଣ ନିଜଦ୍ଵାରା ଅପଲୋଡ କରିବେ',
	'preview' => 'ଦେଖଣା',
	'translate' => 'ଅନୁବାଦ',
	'svginput-label' => 'SVG ଫାଇଲ',
	'uploading' => 'ଅପଲୋଡ଼ ହେଉଛି',
	'upload-complete' => 'ଅପଲୋଡ ସଫଳ ହେଲା । ଛବିଟି ବର୍ତ୍ତମାନ $1ରେ ଅଛି ।',
	'editdescriptionpage' => 'ନୂଆ ବିବରଣୀ ପୃଷ୍ଠାଟିକୁ ବଦଳାଇବେ',
	'author-complete' => 'ଲେଖକଙ୍କ ବିଷୟରେ ଥିବା ତଥ୍ୟଗୁଡିକୁ ସମ୍ପୁର୍ଣ୍ଣ କରନ୍ତୁ !',
	'preview-hide' => 'ଦେଖଣାଟିକୁ ଲୁଚାଇବେ',
	'preview-refresh' => 'ଦେଖଣାଟିକୁ ରିଫ୍ରେସ କରିବେ',
	'error-must-accept' => 'ଆପଣଙ୍କୁ ସିଧାସଳଖ ଅପଲୋଡ କରିବା ପାଇଁ ଆପଣଙ୍କୁ ବ୍ୟବହାର ନିୟମ ମାନିବାକୁ ପଡିବ ।',
	'error-tusc-failed' => 'TUSC ବୈଧତା ବିଫଳ ହେଲା: ବ୍ୟବହାରକାରୀନାମ କିମ୍ବା ପାସୱାର୍ଡ ଭୁଲ ଅଛି ।',
	'description-license' => 'ବର୍ଣ୍ଣନା ଏବଂ ଲାଇସେନ୍ସ ବାଛନ୍ତୁ',
	'finalise' => 'ବିବରଣୀ ନିଶ୍ଚିତ କରନ୍ତୁ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'begin-translation' => 'Mit Iwwersetze schterdte',
	'th-translation' => 'Iwwersetzing',
	'th-language' => 'Schprooch',
	'th-username' => 'Yuuser-Naame',
	'th-password' => 'Paesswatt',
	'preview' => 'Aasicht',
	'translate' => 'Iwwersetze',
	'svginput-label' => 'SVG-Feil',
	'uploading' => 'Am ufflaade…',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'th-language' => 'Schbrooch',
	'translate' => 'Iwasedze',
);

/** Polish (polski)
 * @author Masti
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'Tłumaczenie SVG',
	'error-tryagain' => '$1 Naciśnij przycisk Wstecz w przeglądarce, aby spróbować ponownie.',
	'error-nothing' => 'Nie ma niczego wymagającego przetłumaczenia.',
	'error-notsvg' => 'To nie jest plik SVG.',
	'error-unexpected' => 'Wystąpił nieoczekiwany błąd.',
	'error-notfound' => 'Plik SVG nie może zostać pobrany z podanego adresu URL.',
	'error-upload' => 'Wystąpił błąd podczas przesyłania.',
	'begin-translation' => 'Rozpocznij tłumaczenie',
	'th-original' => 'Oryginał',
	'th-translation' => 'Tłumaczenie',
	'th-language' => 'Język',
	'th-username' => 'Nazwa użytkownika',
	'th-password' => 'Hasło',
	'th-method' => 'Metoda',
	'option-tusc' => 'TUSC (automatyczne przesyłanie)',
	'option-manual' => 'Przesyłanie ręczne',
	'preview' => 'Podgląd',
	'translate' => 'Tłumacz',
	'translate-instructions' => 'Plik można wybrać na dwa sposoby – podać nazwę pliku (np. „$1”) lub pełny adres URL (np. „$2”). W przypadku pierwszej metody przyjmuje się, że źródłem jest Wikimedia Commons. Aby przetłumaczyć SVG z innej strony lub wiki musisz użyć pełnego adresu URL.',
	'svginput-label' => 'Plik SVG',
	'stats-footer' => 'To narzędzie zostało użyte do przetłumaczenia około $1 plików od $2.',
	'uploading' => 'Przesyłanie',
	'upload-complete' => 'Przesyłanie powiodło się. Grafika powinna być na stronie $1',
	'editdescriptionpage' => 'Edytuj nową stronę opisu',
	'disclaimer' => 'Niektóre anonimowe dane będą gromadzone dla celów statystycznych. Jeśli podano nazwa użytkownika TUSC zostanie zapisana na potrzeby walki z wandalizmami. Hasła nigdy nie będą rejestrowane.',
	'author-complete' => 'Uzupełnij informacje o autorze',
	'preview-hide' => 'Ukryj podgląd',
	'preview-refresh' => 'Odśwież podgląd',
	'error-must-accept' => 'Kontynuowanie bezpośredniego przesyłania wymaga zaakceptowania warunków korzystania z usługi.',
	'error-tusc-failed' => 'TUSC – nieudana weryfikacja użytkownika – nazwa użytkownika lub hasło są nieprawidłowe.',
	'description-license' => 'Wybierz opis i licencję',
	'finalise' => 'Zapisz szczegóły',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'error-tryagain' => "$1 Ch'a sgnaca an sël boton andré ëd sò navigator për prové torna.",
	'error-nothing' => 'Gnente da volté.',
	'error-notsvg' => "Pa n'archivi SVG.",
	'error-unexpected' => "A l' capitaje n'eror pa spetà.",
	'error-notfound' => "L'archivi SVG a l'ha pa podù esse trovà da l'anliura dàita.",
	'error-upload' => "A-i é staje n'eror an cariand.",
	'begin-translation' => 'Ancaminé la tradussion',
	'th-original' => 'Original',
	'th-translation' => 'Tradussion',
	'th-language' => 'Lenga',
	'th-username' => 'Stranòm',
	'th-password' => 'Ciav',
	'th-method' => 'Métod',
	'option-tusc' => 'TUSC (cariament automàtich)',
	'option-manual' => 'Cariament manual',
	'preview' => 'Preuva',
	'translate' => 'Traduv',
	'translate-instructions' => "J'anseriment a son acetà o com nòm d'archivi (për esempi «$1») o tanme anliure complete (për esempi «$2»). Se un a deuvra la prima opsion, as dovrerà Wikimedia Commons com sorgiss. Për volté un SVG da n'àutr sit o wiki, a dev dovré ël formà con anliura completa.",
	'svginput-label' => 'Archivi SVG',
	'stats-footer' => "St'utiss a l'é stàit dovrà për volté apopré $1 archivi da $2.",
	'uploading' => 'Cariament',
	'upload-complete' => "Ël cariament a l'é stàit completà për da bin. La figura a dovrìa adess trovesse a $1",
	'editdescriptionpage' => 'Modifiché la neuva pàgina ëd descrission',
	'disclaimer' => "Chèich dat anònim a saran cujì ëd fasson privà për dij but statìstich. Se fornì, jë stranòm d'utent TUSC a saran ëdcò memorisà për giuté ant ij cas ëd vandalism. Le ciav a san mai memorisà.",
	'author-complete' => "Për piasì, ch'a completa j'anformassion an sl'autor!",
	'preview-hide' => 'Stërmé la previsualisassion',
	'preview-refresh' => 'Rinfrësché la preuva',
	'error-must-accept' => "Për continué con un cariament diret a dev aceté le condission d'utilisassion fornìe.",
	'error-tusc-failed' => "Falì la validassion TUSC: stranòm d'utent o ciav pa giust.",
	'description-license' => "Ch'a selession-a la descrission e la licensa",
	'finalise' => 'Finalisé ij detaj',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'error-nothing' => 'د ژباړلو څه نشته.',
	'begin-translation' => 'ژباړه پيلول',
	'th-original' => 'آرنی',
	'th-translation' => 'ژباړه',
	'th-language' => 'ژبه',
	'th-username' => 'کارن-نوم',
	'th-password' => 'پټنوم',
	'preview' => 'مخليدنه',
	'translate' => 'ژباړل',
	'svginput-label' => 'د SVG دوتنه',
	'uploading' => 'د برسېرېدلو په حال کې...',
	'preview-hide' => 'مخليدنه پټول',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Malafaya
 */
$messages['pt'] = array(
	'error-nothing' => 'Não há nada para traduzir.',
	'error-notsvg' => 'Não é um ficheiro SVG.',
	'error-unexpected' => 'Ocorreu um erro inesperado.',
	'error-notfound' => 'Não foi possível obter o ficheiro SVG na URL fornecida.',
	'begin-translation' => 'Começar a tradução',
	'th-original' => 'Original',
	'th-translation' => 'Tradução',
	'th-language' => 'Língua',
	'th-username' => 'Nome de utilizador',
	'th-password' => 'Palavra passe',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (upload automático)',
	'option-manual' => 'Upload manual',
	'preview' => 'Antevisão',
	'translate' => 'Traduzir',
	'svginput-label' => 'Ficheiro SVG',
	'stats-footer' => 'Esta ferramenta foi usada para traduzir aproximadamente {{PLURAL:$1|um ficheiro|$1 ficheiros}} desde $2.',
	'finalise' => 'Finalizar detalhes',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 * @author Luckas
 * @author Pedroca cerebral
 */
$messages['pt-br'] = array(
	'error-tryagain' => '$1 Aperte o botão Voltar do seu navegador para tentar novamente.',
	'error-nothing' => 'Não há nada para traduzir.',
	'error-notsvg' => 'Não é um arquivo SVG.',
	'error-unexpected' => 'Ocorreu um erro inesperado.',
	'error-notfound' => 'Não foi possível obter o arquivo SVG na URL fornecida.',
	'error-upload' => 'Ocorreu um erro ao carregar.',
	'begin-translation' => 'Começar a tradução',
	'th-original' => 'Original',
	'th-translation' => 'Tradução',
	'th-language' => 'Língua',
	'th-username' => 'Nome de usuário',
	'th-password' => 'Senha',
	'th-method' => 'Método',
	'option-tusc' => 'TUSC (upload automático)',
	'option-manual' => 'Upload manual',
	'preview' => 'Pré-visualização',
	'translate' => 'Traduzir',
	'translate-instructions' => 'São aceitas entradas tanto como um nome de arquivo (por exemplo, "$1") ou como uma URL completa (por exemplo, "$2"). Se o primeiro caso for utilizado, a fonte será o Wikimedia Commons. Para traduzir uma imagem SVG de outro site ou wiki, é preciso usar uma URL completa.',
	'svginput-label' => 'Arquivo SVG',
	'stats-footer' => 'Esta ferramenta foi utilizada para traduzir aproximadamente $1 arquivos desde $2.',
	'uploading' => 'Enviando',
	'upload-complete' => 'O envio foi concluído com sucesso. A imagem deve estar agora em $1',
	'editdescriptionpage' => 'Edite a nova página de descrição',
	'disclaimer' => 'Alguns dados anônimos serão coletados de forma privada para fins estatísticos. Se for fornecido, os nomes de usuário TUSC também será armazenado para auxílio em caso de vandalismo. As senhas nunca serão gravadas.',
	'author-complete' => 'Por favor, complete a informação do autor!',
	'preview-hide' => 'Esconder pré-visualização',
	'preview-refresh' => 'Atualizar pré-visualização',
	'error-must-accept' => 'Para continuar com um envio direto você deve aceitar os termos de uso fornecidos.',
	'error-tusc-failed' => 'A validação de TUSC falhou: nome de usuário ou senha incorretos.',
	'description-license' => 'Selecione a descrição e a licença',
	'finalise' => 'Finalizar detalhes',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'SVG Translate',
	'error-tryagain' => '$1 Apăsați butonul „Înapoi” al navigatorului dumneavoastră pentru a reîncerca.',
	'error-nothing' => 'Nimic de tradus.',
	'error-notsvg' => 'Nu este un fișier SVG.',
	'error-unexpected' => 'O eroare neașteptată a apărut.',
	'error-notfound' => 'Fișierul SVG nu a putut fi preluat de la URL-ul furnizat.',
	'error-upload' => 'A apărut o eroare în timpul încărcării.',
	'begin-translation' => 'Începeți traducerea',
	'th-original' => 'Original',
	'th-translation' => 'Traducere',
	'th-language' => 'Limbă',
	'th-username' => 'Nume de utilizator',
	'th-password' => 'Parolă',
	'th-method' => 'Metodă',
	'option-tusc' => 'TUSC (încărcare automată)',
	'option-manual' => 'Încărcare manuală',
	'preview' => 'Previzualizare',
	'translate' => 'Traducere',
	'translate-instructions' => 'Datele de intrare pot reprezenta fie nume de fișiere (ex.: „$1”), fie adrese URL complete (ex.: „$2”). Dacă se recurge la prima variantă, sursa asumată a fișierelor va fi Wikimedia Commons. Pentru a traduce un fișier SVG aflat pe alt site sau wiki, trebuie să introduceți adresa URL completă.',
	'svginput-label' => 'fișier SVG',
	'stats-footer' => 'Această unealtă a fost folosită la traducerea a aproximativ $1 fișiere, încă din $2.',
	'uploading' => 'Se încarcă',
	'upload-complete' => 'Încărcarea s-a finalizat cu succes. Imaginea ar trebui să se găsească la $1',
	'editdescriptionpage' => 'Modificați noua pagină descriptivă',
	'disclaimer' => 'Câteva informații anonime vor fi colectate în mod privat pentru statistici. Dacă sunt furnizate, numele de utilizator TUSC vor fi de asemenea contabilizate pentru ajutor în caz de vandalism. Parolele nu vor fi niciodată reținute.',
	'author-complete' => 'Vă rugăm să completați informațiile despre autor!',
	'preview-hide' => 'Ascunde previzualizarea',
	'preview-refresh' => 'Reîncarcă previzualizarea',
	'error-must-accept' => 'Pentru a continua cu încărcarea directă, trebuie să fiți de acord cu termenii de utilizare furnizați.',
	'error-tusc-failed' => 'Validarea TUSC a eșuat: nume de utilizator sau parolă incorecte.',
	'description-license' => 'Selectați descrierea și licența',
	'finalise' => 'Finalizează detaliile',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => "Traduzione de l'SVG",
	'error-tryagain' => "$1 Cazze 'u buttone d'u browser tune rrete pe pruvà 'n'otra vote.",
	'error-nothing' => 'Ninde da traducere.',
	'error-notsvg' => "Non g'è 'nu file SVG.",
	'error-unexpected' => "'N'errore inaspettate s'a verificate.",
	'error-notfound' => "'U file SVG non ge se pò pigghià da l'URL specificate.",
	'error-upload' => "S'a verificate 'n'errore sus a 'u carecamende.",
	'begin-translation' => "Accuminze 'a traduzione",
	'th-original' => 'Origgenale',
	'th-translation' => 'Traduzione',
	'th-language' => 'Lènghe',
	'th-username' => 'Nome utende',
	'th-password' => 'Passuord',
	'th-method' => 'Metode',
	'option-tusc' => 'TUSC (carecamende automateche)',
	'option-manual' => 'Carecamende a màne',
	'preview' => 'Andeprime',
	'translate' => 'Traduce',
	'translate-instructions' => 'Le date in ingresse sò accettatte sie cumme nome de file (pe esembie "$1") o cumme URL comblete (pe esembie "$2"). Ce \'a prime opzione avène ausate, Uicchimedia Commons avène assunde cumme fonde. Pe traducere \'nu SVG da \'n\'otre site o uicchi, jè necessarie ausà \'u formate d\'a URL indere.',
	'svginput-label' => 'File SVG',
	'stats-footer' => 'Stu strumende avène ausate pe traducere approssimativamende $1 file da $2.',
	'uploading' => 'Stoche a careche',
	'upload-complete' => "'U carecamende ha state fatte. L'immaggine avessa stà sus a $1",
	'editdescriptionpage' => "Cange 'a pàgena nove d'a descrizione",
	'disclaimer' => 'Quacche date anonime avènene cugghiute in mode private pe fine statistece. Ce fornite, le nome utinde TUSC avènene reggistrate pe le case de vandalisme. Le passuord non ge avènene reggistrate.',
	'author-complete' => "Pe piacere comblete le 'mbormaziune de l'autore!",
	'preview-hide' => "Scunne l'andeprime",
	'preview-refresh' => "Aggiorne l'andeprime",
	'error-must-accept' => "Pe condinuà cu 'nu carecamende dirette tu a accettà le termine de l'ause previste.",
	'error-tusc-failed' => 'Validazione TUSC fallite: Nome utende o passuord non ge sonde corrette.',
	'description-license' => 'Scacchie descrizione e licenze',
	'finalise' => 'Finalizze le dettaglie',
);

/** Russian (русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'title' => 'Перевод SVG',
	'error-tryagain' => '$1 Нажмите в вашем браузере «Назад» для повторения.',
	'error-nothing' => 'Нечего переводить.',
	'error-notsvg' => 'Это не SVG-файл.',
	'error-unexpected' => 'Произошла непредвиденная ошибка.',
	'error-notfound' => 'Не удалось получить SVG-файл по указанному адресу.',
	'error-upload' => 'Произошла ошибка при загрузке.',
	'begin-translation' => 'Начало перевода',
	'th-original' => 'Исходный текст',
	'th-translation' => 'Перевод',
	'th-language' => 'Язык',
	'th-username' => 'Имя участника',
	'th-password' => 'Пароль',
	'th-method' => 'Способ',
	'option-tusc' => 'TUSC (автоматическая загрузка)',
	'option-manual' => 'Ручная загрузка',
	'preview' => 'Предпросмотр',
	'translate' => 'Перевести',
	'translate-instructions' => 'Укажите имя файла (например,«$1») или полный URL-адрес (например, «$2»). Если используется первый вариант, источником будет считаться Викисклад. Чтобы перевести SVG с другого сайта или вики, следует использовать полный URL-адрес.',
	'svginput-label' => 'SVG-файл',
	'stats-footer' => 'Этот инструмент был использован для перевода примерно $1 файлов с $2 .',
	'uploading' => 'Загрузка',
	'upload-complete' => 'Загрузка завершена успешно. Изображение быть доступно по адресу $1',
	'editdescriptionpage' => 'Изменить новую страницу описания',
	'disclaimer' => 'Некоторые анонимные данные будут записываться для статистических целей. Если было указано TUSC-имя, то оно также будет записано, для оказания помощи в случае вандализма. Пароли никогда не записываются.',
	'author-complete' => 'Пожалуйста, заполните информацию об авторе!',
	'preview-hide' => 'Скрыть предпросмотр',
	'preview-refresh' => 'Обновить предпросмотр',
	'error-must-accept' => 'Чтобы продолжить прямую загрузку, следует принять Условия использования.',
	'error-tusc-failed' => 'Сбой проверки TUSC. Неправильное имя участникавателя или пароль.',
	'description-license' => 'Выберите описание и лицензию',
	'finalise' => 'Заключительные подробности',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'error-tryagain' => 'නැවත උත්සහ කිරීමට ඔබේ ගවේෂකයෙහි $1 ආපසු බොත්තම ඔබන්න.',
	'error-nothing' => 'පරිවර්තනය කිරීමට කිසිවක් නොමැත.',
	'error-notsvg' => 'SVG ගොනුවක් නොවේ.',
	'error-unexpected' => 'බලපොරොත්තු නොවූ දෝෂයක් හට ගැනුණි.',
	'error-notfound' => 'ලබා දුන් URL ලිපිනයෙන් SVG ගොනුව ලබා ගත නොහැක.',
	'error-upload' => 'එහි උඩුගත කිරීමේ දෝෂයක් තිබුණි.',
	'begin-translation' => 'පරිවර්තනය අරඹන්න',
	'th-original' => 'නියම',
	'th-translation' => 'පරිවර්තනය',
	'th-language' => 'භාෂාව',
	'th-username' => 'පරිශීලක නාමය',
	'th-password' => 'මුරපදය',
	'th-method' => 'ක්‍රමය',
	'option-tusc' => 'TUSC (ස්වයංක්‍රිය උඩුගත කිරීම)',
	'option-manual' => 'හස්තීය උඩුගතකෙරුම',
	'preview' => 'පෙරදසුන',
	'translate' => 'පරිවර්තනය කරන්න',
	'svginput-label' => 'SVG ගොනුව',
	'uploading' => 'උඩුගත කෙරෙමින් පවතී',
	'upload-complete' => 'උඩුගත කරීම සාර්ථකව සිදු කරන ලදී. පින්තූරය $1 හිදී ලබා ගත හැක',
	'editdescriptionpage' => 'නව විස්තර පිටුව සංස්කරණය කරන්න',
	'author-complete' => 'කරුණාකර කතෘ තොරතුරු සම්පූර්ණ කරන්න!',
	'preview-hide' => 'පෙරදසුන සඟවන්න',
	'preview-refresh' => 'පෙරදසුන ප්‍රතිපූරණය කරන්න',
	'error-must-accept' => 'ඍජු උඩුගත කිරීම සමඟ ඉදිරියට යාම සඳහා ඉදිරිපත් කරන ලද කොන්දේසි වලට ඔබ විසින් එකඟත්වය ප්‍රකාශ කල යුතුය.',
	'error-tusc-failed' => 'TUSC සත්‍යාපනය අසාර්ථකයි: පරිශීලක නාමය සහ මුරපදය වැරදියි.',
	'description-license' => 'විස්තරය සහ බලපත්‍රය තෝරාගන්න',
	'finalise' => 'අවසන් විස්තර',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'title' => 'Prevajanje SVG',
	'error-tryagain' => '$1 Za ponovni poskus v brskalniku kliknite gumb nazaj.',
	'error-nothing' => 'Ničesar ni za prevesti.',
	'error-notsvg' => 'Ni datoteka SVG.',
	'error-unexpected' => 'Prišlo je do nepričakovane napake.',
	'error-notfound' => 'Datoteke SVG ni bilo mogoče pridobiti z navedenega URL-a.',
	'error-upload' => 'Pri nalaganju je prišlo do napake.',
	'begin-translation' => 'Začni s prevajanjem',
	'th-original' => 'Izvirno',
	'th-translation' => 'Prevod',
	'th-language' => 'Jezik',
	'th-username' => 'Uporabniško ime',
	'th-password' => 'Geslo',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (samodejno nalaganje)',
	'option-manual' => 'Ročno nalaganje',
	'preview' => 'Predogled',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Za vnos so sprejemljiva tako imena datotek (npr. »$1«), kot tudi polni URL (npr. »$2«). Če je uporabljena prva možnost, bo kot vir predpostavljena Wikimedijina Zbirka. Za prevajanje SVG z druge strani ali wikija morate uporabiti obliko polnega URL.',
	'svginput-label' => 'Datoteka SVG',
	'stats-footer' => 'To orodje je bilo uporabljeno za prevajanje približno $1 datotek od $2.',
	'uploading' => 'Nalaganje',
	'upload-complete' => 'Nalaganje je uspešno dokončano. Slika bi morala biti na $1.',
	'editdescriptionpage' => 'Uredi novo opisno stran',
	'disclaimer' => 'Nekateri anonimni podatki se bodo zasebno zbirali v statistične namene. Če so na razpolago, bodo zabeležena tudi uporabniška imena TUSC za pomoč v primeru vandalizma. Gesla ne bodo nikoli zabeležena.',
	'author-complete' => 'Prosimo, dopolnite informacije o avtorju!',
	'preview-hide' => 'Skrij predogled',
	'preview-refresh' => 'Osveži predogled',
	'error-must-accept' => 'Če želite nadaljevati z neposrednim nalaganjem, morate sprejeti navedene pogoje uporabe.',
	'error-tusc-failed' => 'Preverjanje TUSC ni uspelo: uporabniško ime ali geslo je napačno.',
	'description-license' => 'Izberite opis in licenco',
	'finalise' => 'Dokončajte podrobnosti',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'error-tryagain' => '$1 guji batoonka browser ee noqoshada  si aad mar kale iskugu daydo.',
	'error-nothing' => 'Wax fasiraad ah ma leh.',
	'error-notsvg' => 'Ma lahan fileka SVG.',
	'error-unexpected' => 'Waxaa dhacay qalad aan lagu talo galin.',
	'error-notfound' => 'Fileka SVG la ma soo celin karo URL kaan hore.',
	'error-upload' => 'Waxaa dhacay qalad xilli aad wax galinaysay',
	'begin-translation' => 'Biloow fasiraad',
	'th-original' => 'Asli',
	'th-translation' => 'Fasiraad',
	'th-language' => 'Luqada',
	'th-username' => 'Magaca gudagalka',
	'th-password' => 'Eraysir:',
	'th-method' => 'Adeegsiga',
	'option-tusc' => 'TUSC (Galin iskeed ah)',
	'option-manual' => 'Gacan ku galin',
	'preview' => 'Horfiirin',
	'translate' => 'Fasir',
	'translate-instructions' => 'Waxaa la ogol yahay soo saaris ama magacyada filalka (Tusaale "$1") ama  URL oo buuxa (Tusaale "$2"). Hadii aad adeegsato tusaaleha koowaad, Wikimedia Commons waxa ay noqonayasaa xigasho fasiraad. hadii aad fasirto SVG website kale ama wiki, waa inaad adeegsataa URL ka oo buuxa.',
	'svginput-label' => 'File ka samaysan SVG',
	'stats-footer' => 'Qaybtaan fasiraada ah waxaa adeegsaday ku dhawaad $1 filal laga soo bilaabo $2.',
	'uploading' => 'Galin',
	'upload-complete' => 'Galintii waa lagu guuleeystay. sawirku waa in uu yaalaa $1',
	'editdescriptionpage' => 'Wxa kabadal cadaymaha cusub ee Bogga',
	'disclaimer' => 'Waa la uruurinayaa macluumaadka qaar ee aan la aqoon si gaar ah iyadoo loola jeedo tirakoob ahaan. sidoo kale waxaa la diiwaan galinayaa magacyada isticmaala TUSC si loo caawiyo hadii ay dhacdo wax qarbudaad ah. Eraysirtana lama kaydin doono sideedaba.',
	'author-complete' => 'Fadlan dhamaystir macluumaadka qoraaga',
	'preview-hide' => 'Qari Horfiirinta',
	'preview-refresh' => 'Cusbooneeysii Horfiirinta',
	'error-must-accept' => 'Si aad usii wadato galinta tooska ah waxaa lagaa rabaa inaad aqbasho shuruudaha adeegsiga ee aad dooneeyso.',
	'error-tusc-failed' => 'Waa lagu fashilmay dabagalka runta ah ee TUSC: Magaca adeegsadaha ama ereysirta ma saxna.',
	'description-license' => 'Dooro Caydayn iyo ruqsad',
	'finalise' => 'Dhamaadka faah faahinta',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Nikola Smolenski
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'SVG преводилац',
	'error-tryagain' => '$1 Кликните на дугме „Назад“ свог прегледача',
	'error-nothing' => 'Нема ништа за превођење.',
	'error-notsvg' => 'Није SVG датотека.',
	'error-unexpected' => 'Дошло је до неочекиване грешке.',
	'error-notfound' => 'SVG датотека није добављена из наведене адресе.',
	'error-upload' => 'Дошло је до грешке при отпремању.',
	'begin-translation' => 'Превођење',
	'th-original' => 'Изворно',
	'th-translation' => 'Превод',
	'th-language' => 'Језик',
	'th-username' => 'Корисничко име',
	'th-password' => 'Лозинка',
	'th-method' => 'Начин',
	'option-tusc' => 'TUSC (самоотпремање)',
	'option-manual' => 'Ручно отпремање',
	'preview' => 'Прикажи претпреглед',
	'translate' => 'Преведи',
	'translate-instructions' => 'Уноси се прихватају као називи датотека („$1“) или као цела адреса („$2“). Ако изаберете прву могућност, Викимедијина остава ће бити изабрана као извор. Да бисте превели SVG датотеку с другог мрежног места или викија, користите целу адресу.',
	'svginput-label' => 'SVG датотека',
	'stats-footer' => 'Ова алатка се користи за превођење приближно $1 датотека од $2.',
	'uploading' => 'Отпремање',
	'upload-complete' => 'Отпремање је завршено. Слика би требало да је у $1',
	'editdescriptionpage' => 'Уреди нову страницу за опис',
	'disclaimer' => 'Неки анонимни подаци ће бити скупљани у статистичке сврхе. Ако је наведено, TUSC корисничка имена ће такође бити забележена ради спречавања вандализма. Лозинке се неће бележити.',
	'author-complete' => 'Попуните све податке о аутору.',
	'preview-hide' => 'Сакриј преглед',
	'preview-refresh' => 'Освежи преглед',
	'error-must-accept' => 'Да бисте наставили с изравним отпремањем, морате прихватити услове коришћења.',
	'error-tusc-failed' => 'Не могу да извршим TUSC проверу: корисничко име или лозинка су неисправни.',
	'description-license' => 'Изаберите опис и лиценцу',
	'finalise' => 'Доврши детаље',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'SVG prevodilac',
	'error-tryagain' => '$1 Kliknite na dugme „Nazad“ svog pregledača',
	'error-nothing' => 'Nema ništa za prevođenje.',
	'error-notsvg' => 'Nije SVG datoteka.',
	'error-unexpected' => 'Došlo je do neočekivane greške.',
	'error-notfound' => 'SVG datoteka nije dobavljena iz navedene adrese.',
	'error-upload' => 'Došlo je do greške pri otpremanju.',
	'begin-translation' => 'Prevođenje',
	'th-original' => 'Izvorno',
	'th-translation' => 'Prevod',
	'th-language' => 'Jezik',
	'th-username' => 'Korisničko ime',
	'th-password' => 'Lozinka',
	'th-method' => 'Način',
	'option-tusc' => 'TUSC (samootpremanje)',
	'option-manual' => 'Ručno otpremanje',
	'preview' => 'Pregledaj',
	'translate' => 'Prevedi',
	'translate-instructions' => 'Unosi se prihvataju kao nazivi datoteka („$1“) ili kao cela adresa („$2“). Ako izaberete prvu mogućnost, Vikimedijina ostava će biti izabrana kao izvor. Da biste preveli SVG datoteku s drugog mrežnog mesta ili vikija, koristite celu adresu.',
	'svginput-label' => 'SVG datoteka',
	'stats-footer' => 'Ova alatka se koristi za prevođenje približno $1 datoteka od $2.',
	'uploading' => 'Otpremanje',
	'upload-complete' => 'Otpremanje je završeno. Slika bi trebalo da je u $1',
	'editdescriptionpage' => 'Uredi novu stranicu za opis',
	'disclaimer' => 'Neki anonimni podaci će biti skupljani u statističke svrhe. Ako je navedeno, TUSC korisnička imena će takođe biti zabeležena radi sprečavanja vandalizma. Lozinke se neće beležiti.',
	'author-complete' => 'Popunite sve podatke o autoru.',
	'preview-hide' => 'Sakrij pregled',
	'preview-refresh' => 'Osveži pregled',
	'error-must-accept' => 'Da biste nastavili s izravnim otpremanjem, morate prihvatiti uslove korišćenja.',
	'error-tusc-failed' => 'Ne mogu da izvršim TUSC proveru: korisničko ime ili lozinka su neispravni.',
	'description-license' => 'Izaberite opis i licencu',
	'finalise' => 'Dovrši detalje',
);

/** Swedish (svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'title' => 'SVG-översättning',
	'error-tryagain' => '$1 Tryck på webbläsarens tillbaka-knapp för att försöka igen.',
	'error-nothing' => 'Inget att översätta.',
	'error-notsvg' => 'Inte en SVG-fil.',
	'error-unexpected' => 'Ett oväntat fel uppstod.',
	'error-notfound' => 'SVG-filen kunde inte hämtas från den angivna adressen.',
	'error-upload' => 'Ett fel uppstod under uppladdningen.',
	'begin-translation' => 'Börja översättning',
	'th-original' => 'Original',
	'th-translation' => 'Översättning',
	'th-language' => 'Språk',
	'th-username' => 'Användarnamn',
	'th-password' => 'Lösenord',
	'th-method' => 'Metod',
	'option-tusc' => 'TUSC (automatisk uppladdning)',
	'option-manual' => 'Manuell uppladdning',
	'preview' => 'Förhandsgranska',
	'translate' => 'Översätt',
	'translate-instructions' => 'Indata accepteras som antingen filnamn (t.ex. "$1") eller fullständig URL-adress (t.ex. "$2"). Om det första alternativet används kommer Wikimedia Commons antas som källa. För att översätta en SVG-fil från en annan webbplats eller wiki, måste du använda det fullständiga URL-adressen.',
	'svginput-label' => 'SVG-fil',
	'stats-footer' => 'Detta verktyg har använts för att översätta cirka $1 filer sedan $2 .',
	'uploading' => 'Laddar upp',
	'upload-complete' => 'Uppladdningen har slutförts. Bilden bör nu finnas på $1',
	'editdescriptionpage' => 'Redigera den nya beskrivningssidan',
	'disclaimer' => 'Viss anonym data kommer att privat samlas in för statistiska ändamål. Om angivet, kommer TUSC-användarnamn också registreras för att hjälpa vid händelse av vandalism. Lösenord kommer aldrig registreras.',
	'author-complete' => 'Vänligen fyll i författarinformationen!',
	'preview-hide' => 'Göm förhandsgranskning',
	'preview-refresh' => 'Uppdatera förhandsvisningen',
	'error-must-accept' => 'För att fortsätta med en direkt uppladdning måste du acceptera användningsvilkoren.',
	'error-tusc-failed' => 'TUSC-valideringen misslyckades: användarnamn eller lösenordet är felaktigt.',
	'description-license' => 'Välj beskrivning och licens',
	'finalise' => 'Färdigställ detaljer',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'error-notsvg' => 'Sio faili ya SVG.',
	'error-upload' => 'Kulikuwa na hitilafu kupakia.',
	'begin-translation' => 'Anza tafsiri',
	'th-original' => 'Asili',
	'th-translation' => 'Tafsiri',
	'th-language' => 'Lugha',
	'th-username' => 'Jina la mtumiaji',
	'th-password' => 'Nywila',
	'th-method' => 'Mbinu',
	'option-manual' => 'Pakia kwa mikono',
	'preview' => 'Onyesha hakikisho',
	'translate' => 'Tafsiri',
	'svginput-label' => 'Faili ya SVG',
	'uploading' => 'Inapakia',
	'upload-complete' => 'Kupakia kumefaulu. Picha lazima iwe katika $1',
	'editdescriptionpage' => 'Hariri ukurasa mpya wa maelezo',
	'author-complete' => 'Tafadgali kamilisha habari ya mwandishi!',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Karthi.dr
 * @author செல்வா
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'error-tryagain' => '$1 மீண்டும் முயற்சிக்க உங்கள் மேலோடியின் பின்செல்லும் ஆளியைச் சொடுக்கவும்.',
	'error-nothing' => 'மொழிபெயர்க்க எதுவும் இல்லை',
	'error-notsvg' => 'SVG கோப்பு கிடையாது',
	'error-unexpected' => 'எதிர் பாராத தவறு நடந்தது',
	'error-notfound' => 'நீங்கள் கொடுத்த உரலியில் இருந்து SVG கோப்புகளை பெற முடியவில்லை',
	'error-upload' => 'பதிவேற்றுவதில் தவறு நடந்துள்ளது',
	'begin-translation' => 'மொழிபெயர்பை தொடங்கு',
	'th-original' => 'மூலம்',
	'th-translation' => 'மொழிபெயர்ப்பு',
	'th-language' => 'மொழி',
	'th-username' => 'பயனர் பெயர்',
	'th-password' => 'கடவுச்சொல்',
	'th-method' => 'செய்முறை',
	'option-tusc' => 'TUSC (தானியங்கி பதிவேற்றம்)',
	'option-manual' => 'கைமுறை பதிவேற்றம்',
	'preview' => 'முன்தோற்றம்',
	'translate' => 'மொழிமாற்று',
	'svginput-label' => 'SVG கோப்பு',
	'stats-footer' => '$2 என்ற திகதியிலிருந்து அண்ணளவாக $1 கோப்புகளை மொழிபெயர்க்க இக்கருவி பயன்படுத்தப்பட்டுள்ளது.',
	'uploading' => 'பதிவேற்றபடுகிறது',
	'upload-complete' => 'தரவேற்றம் வெற்றிகரமாக முடிந்தது. $1 இல் படம் இருக்கும்.',
	'editdescriptionpage' => 'புதிய விளக்க பக்கத்தை தொகு',
	'author-complete' => 'ஆசிரியர் விவரங்களை பூர்த்தி செய்க',
	'preview-hide' => 'முன்தோற்றத்தை மறைக்கவும்',
	'preview-refresh' => 'முன்தோற்றதை புதுப்பி',
	'description-license' => 'விளக்கவுரை மற்றும் உரிமத்தை தேர்வு செய்க',
	'finalise' => 'விவரங்களை இறுதியாக்குக',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'title' => 'SVG అనువాదం',
	'error-nothing' => 'అనువదించడానికి ఏమీలేదు.',
	'error-notsvg' => 'అది SVG దస్త్రం కాదు.',
	'error-unexpected' => 'ఏదో గుర్తుతెలియని పొరపాటు జరిగింది.',
	'error-upload' => 'ఎక్కించడంలో ఏదో పొరపాటు జరిగింది.',
	'begin-translation' => 'అనువాదం మొదలుపెట్టండి',
	'th-original' => 'అసలు',
	'th-translation' => 'అనువాదం',
	'th-language' => 'భాష',
	'th-username' => 'వాడుకరి పేరు',
	'th-password' => 'సంకేతపదం',
	'th-method' => 'పద్ధతి',
	'preview' => 'మునుజూపు',
	'translate' => 'అనువదించు',
	'svginput-label' => 'SVG దస్త్రం',
	'stats-footer' => '$2 నుండి దాదాపు $1 దస్త్రాలను అనువదించడానికి ఈ పనిముట్టుని ఉపయోగించారు.',
	'author-complete' => 'దయచేసి రచయిత సమాచారాన్ని పూరించండి!',
	'preview-hide' => 'మునుజూపును దాచు',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'th-original' => 'Orijinál',
	'th-translation' => 'Tradusaun',
	'th-language' => 'Lian',
	'th-username' => "Naran uza-na'in",
);

/** Thai (ไทย)
 * @author Horus
 * @author TMo3289
 */
$messages['th'] = array(
	'error-tryagain' => '$1 กดปุ่มถอยที่เบราว์เซอร์ของคุณ เพื่อลองอีกครั้ง',
	'error-nothing' => 'ไม่มีข้อมูลที่จะแปล',
	'error-notsvg' => 'ไม่ใช่ไฟล์ SVG',
	'error-unexpected' => 'มีข้อผิดพลาดที่ไม่ทราบสาเหตุ',
	'error-notfound' => 'ไฟล์ SVG ไม่สามารถหาได้จาก URL ที่ให้มา',
	'error-upload' => 'มีข้อผิดพลาดในการอัปโหลด',
	'begin-translation' => 'เริ่มการแปล',
	'th-original' => 'ต้นฉบับ',
	'th-translation' => 'การแปล',
	'th-language' => 'ภาษา',
	'th-username' => 'ชื่อผู้ใช้งาน',
	'th-password' => 'รหัสผ่าน',
	'th-method' => 'วิธีการ',
	'option-tusc' => 'TUSC (อัปโหลดโดยอัตโนมัติ)',
	'option-manual' => 'อัปโหลดด้วยตนเอง',
	'preview' => 'ดูตัวอย่าง',
	'translate' => 'แปล',
	'translate-instructions' => 'ไฟล์ที่ป้อนเข้าสามารถป้อนได้ทั้งชื่อไฟล์ (เช่น "$1") หรือที่อยู่ URL (เช่น "$2") ถ้าเลือกอย่างแรก วิกิมีเดียคอมมอนส์จะถือว่าไฟล์นั้นเป็นต้นฉบับ แต่ถ้าต้องการแปล SVG จากเว็บหรือวิกิอื่น คุณต้องใช้ที่อยู่ URL แทน',
	'svginput-label' => 'ไฟล์ SVG',
	'stats-footer' => 'เครื่องมือนี้ใช้ในการแปลประมาณ $1 ไฟล์ ตั้งแต่ $2',
	'uploading' => 'กำลังอัปโหลด',
	'upload-complete' => 'อัปโหลดเสร็จเรียบร้อยแล้ว ภาพควรอยู่ที่ $1',
	'editdescriptionpage' => 'แก้ไขหน้าคำอธิบายใหม่',
	'disclaimer' => 'ข้อมูลไม่ระบุตัวตน รวมไปถึงชื่อผู้ใช้งาน TUSC จะถูกเก็บรักษาเป็นความลับเพื่อประโยชน์ทางสถิติและป้องกันการก่อกวน อย่างไรก็ตามรหัสผ่านจะไม่มีการบันทึกแต่อย่างใด',
	'author-complete' => 'โปรดระบุรายละเอียดผู้สร้างสรรค์ให้ละเอียด',
	'preview-hide' => 'ซ่อนตัวอย่าง',
	'preview-refresh' => 'ปรับปรุงตัวอย่างให้เป็นปัจจุบัน',
	'error-must-accept' => 'คุณต้องยอมรับเงื่อนไขการใช้งานที่มีอยู่ ก่อนดำเนินการอัปโหลดโดยตรง',
	'error-tusc-failed' => 'การตรวจสอบ TUSC ล้มเหลวเนื่องจากชื่อผู้ใช้งานหรือรหัสผ่านผิด',
	'description-license' => 'เลือกคำอธิบายและสัญญาอนุญาต',
	'finalise' => 'ให้รายละเอียดนี้เป็นที่ถูกต้องและสิ้นสุด',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title' => 'Pagsasalinwika na SVG',
	'error-tryagain' => '$1 Patamaan ang pindutang pampabalik ng pantingin-tingin mo upang subukang muli.',
	'error-nothing' => 'Walang isasalinwika.',
	'error-notsvg' => 'Hindi isang talaksang SVG.',
	'error-unexpected' => 'Naganap ang isang hindi inaasahang kamalian.',
	'error-notfound' => 'Hindi makuhang muli ang talaksang SVG magmula sa ibinigay na URL.',
	'error-upload' => 'May isang suliranin sa pagkakargang papaitaas.',
	'begin-translation' => 'Simulan ang pagsasalinwika',
	'th-original' => 'Orihinal',
	'th-translation' => 'Salinwika',
	'th-language' => 'Wika',
	'th-username' => 'Pangalan ng tagagamit',
	'th-password' => 'Hudyat',
	'th-method' => 'Pamamaraan',
	'option-tusc' => 'TUSC (kusang pagkakarga na paitaas)',
	'option-manual' => 'Kinakamay na pagkakargang papaitaas',
	'preview' => 'Paunang pagtingin',
	'translate' => 'Isalinwika',
	'translate-instructions' => 'Ang mga ipinapasok ay tinatanggap bilang mga pangalan ng talaksan (iyon ay "$1") o buong URL (iyon ay "$2").  Kung ang unang pagpipilian ang ginamit, ipapalagay na ang Wikimedia Commons ang pinagmulan.  Upang maisalinwika ang isang SVG mula sa ibang lugar o wiki, dapat mong gamitin ang anyo ng buong URL.',
	'svginput-label' => 'Talaksang SVG',
	'stats-footer' => 'Ginamit ang kasangkapang ito upang isalinwika ang tinatayang $1 mga talaksan magmula noong $2.',
	'uploading' => 'Ikinakarga',
	'upload-complete' => 'Matagumpay na nabuo ang pagkakarga. Ang larawan ay dapat na nasa $1 na ngayon',
	'editdescriptionpage' => 'Baguhin ang bagong pahina ng paglalarawan',
	'disclaimer' => 'Ilang datong hindi nakikilala ang pribadong lilikumin para sa mga layuning pang-estadistika.  Kapag ibinigay, ang mga pangalan ng tagagamit ng TUSC ay maitatala rin upang makatulong kapag may naganap na pambababoy. Hindi kailanman maitalala ang mga hudyat.',
	'author-complete' => 'Mangyaring buuin ang kabatiran sa may-akda!',
	'preview-hide' => 'Itago ang paunang tanaw',
	'preview-refresh' => 'Sariwain ang paunang tanaw',
	'error-must-accept' => 'Upang magpatuloy sa isang tuwirang pagkakargang papaitaas dapat mong tanggapin ang ibinigay na mga tuntunin sa paggamit.',
	'error-tusc-failed' => 'Nabigo ang pagpapatunay ng TUSC: hindi tama ang pangalan ng tagagamit o hudyat.',
	'description-license' => 'Piliin ang paglalarawan at lisensiya',
	'finalise' => 'Buuin na ang mga detalye',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'error-notsvg' => 'Ым SVG фајл ни.',
	'th-translation' => 'Пегордыније',
	'th-language' => 'Зывон',
	'th-username' => 'Иштирокәкә ном',
	'th-password' => 'Парол',
	'preview' => 'Сыфтәнә нишо дој',
	'translate' => 'Пегордынијеј',
	'svginput-label' => 'SVG фајл',
	'uploading' => 'Бо карде',
	'upload-complete' => 'Бо жәј чок дәварде. Шикил бәбе быбу бы унвонәдә $1',
	'editdescriptionpage' => 'Тәсвири тожә сәһифә дәгиш кардеј',
	'preview-hide' => 'Сыфтәнә нишо дој нијо кардеј',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Khutuck
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'title' => 'SVG Çevir',
	'error-tryagain' => '$1 Yeniden denemek için tarayıcınızın geri düğmesine basın.',
	'error-nothing' => 'Çevirecek bir şey yok.',
	'error-notsvg' => 'Bir SVG dosyası değil.',
	'error-unexpected' => 'Beklenmedik bir hata meydana geldi.',
	'error-notfound' => "Verilen URL'den SVG dosyası alınamadı.",
	'error-upload' => 'Yüklemede hata oldu.',
	'begin-translation' => 'Çeviriye başla',
	'th-original' => 'Özgün',
	'th-translation' => 'Çeviri',
	'th-language' => 'Dil',
	'th-username' => 'Kullanıcı adı',
	'th-password' => 'Şifre',
	'th-method' => 'Yöntem',
	'option-tusc' => 'TUSC (otomatik yükleme)',
	'option-manual' => 'Manuel yükleme',
	'preview' => 'Ön izleme',
	'translate' => 'Çevir',
	'translate-instructions' => 'Girişler, ya dosya adı (örn: "$1") ya da tam URL (örn: "$2") olarak kabul edilmektedir. İlk seçeneğin kullanılması durumunda, Wikimedia Commons kaynak olarak varsayılacaktır. Diğer bir site ya da vikiden alınan bir SVG\'yi çevirmek istiyorsanız, tam URL formatını kullanmalısınız.',
	'svginput-label' => 'SVG dosyası',
	'stats-footer' => 'Bu araç, $2 tarihinden bu yana yaklaşık olarak $1 dosyanın çevrilmesi için kullanıldı.',
	'uploading' => 'Yükleniyor',
	'upload-complete' => 'Yükleme başarıyla tamamlandı. Görüntüyü şimdi $1 adresinde olmalı.',
	'editdescriptionpage' => 'Yeni açıklama sayfasını düzenle',
	'disclaimer' => 'İstatistiksel amaçlarla bazı anonim bilgiler kaydedilecektir. Eğer belirtilirse, TUSC kullanıcı adları vandalizme karşı mücadelede kullanılacaktır. Şifreler asla kaydedilmeyecektir.',
	'author-complete' => 'Lütfen yazar bilgilerini doldurunuz!',
	'preview-hide' => 'Önizleme gizle',
	'preview-refresh' => 'Önizleme görüntüsünü yenileyin',
	'error-must-accept' => 'Doğrudan yükleme ile devam etmek için kullanım koşullarını kabul etmeniz gerekir.',
	'error-tusc-failed' => 'TUSC doğrulanamadı: kullanıcı adı veya parola yanlış.',
	'description-license' => 'Açıklama ve lisans seçin',
	'finalise' => 'Ayrıntıları tamamlayın',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'th-password' => 'ⵜⴰⵡⴰⵍⵜ ⵓⵙⵉⴽⵍ',
	'translate' => 'ⵙⵙⵓⵖⵍ',
	'svginput-label' => 'ⴰⵙⴷⴰⵡ SVG',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 * @author Tel'et
 */
$messages['ug-arab'] = array(
	'title' => 'SVG تەرجىمە',
	'error-tryagain' => '$1 توركۆرگۈڭىزنىڭ قايت توپچىسىنى چېكىپ قايتا سىنايدۇ.',
	'error-nothing' => 'تەرجىمە قىلىدىغان ھېچنېمە يوق.',
	'error-notsvg' => 'SVG ھۆججىتى ئەمەس.',
	'error-unexpected' => 'ئويلاشمىغان خاتالىق كۆرۈلدى.',
	'error-notfound' => 'تەمىنلەنگەن URL دىن SVG ھۆججەتكە ئېرىشەلمەيدۇ.',
	'error-upload' => 'يۈكلەۋاتقاندا خاتالىق كۆرۈلدى.',
	'begin-translation' => 'تەرجىمە باشلاڭ',
	'th-original' => 'ئەسلى',
	'th-translation' => 'تەرجىمىسى',
	'th-language' => 'تىل',
	'th-username' => 'ئىشلەتكۈچى ئاتى',
	'th-password' => 'پارول',
	'th-method' => 'ئۇسۇل',
	'option-tusc' => 'TUSC (ئۆزلۈكىدىن يۈكلە)',
	'option-manual' => 'قولدا يۈكلە',
	'preview' => 'ئالدىن كۆزەت',
	'translate' => 'تەرجىمە',
	'translate-instructions' => 'ھۆججەت ئاتى (مەسىلەن، "$1") ياكى تولۇق URL (مەسىلەن، "$2")نى كىرگۈزۈشكە بولىدۇ. ئەگەر بىرىنچى تاللانما تاللانسا ۋىكى ۋاستە ھەمبەھىر مەنبە قىلىنىدۇ. ئەگەر باشقا تورتۇرا ياكى ۋىكىدىن SVG ھۆججەت تەرجخمە قىلىنسا چوقۇم تولۇق URL ئىشلىتىڭ.',
	'svginput-label' => 'SVG ھۆججەت',
	'stats-footer' => '$2 دىن باشلاپ، مەزكۇر قورالدا $1 ھۆججەت تەرجىمە قىلىندى.',
	'uploading' => 'يۈكلەۋاتىدۇ',
	'upload-complete' => 'مۇۋەپپەقىيەتلىك يۈكلەندى. بۇ سۈرەتنىڭ ھازىرقى ئورنى $1',
	'editdescriptionpage' => 'يېڭى  چۈشەندۈرۈش بېتىنى تەھرىر',
	'disclaimer' => 'بەزى ئاتسىز سانلىق مەلۇماتلارنى شەخسلەر سىتاتىستىكا ئېلىپ بېرىش مەقسىتىدە توپلايدۇ. ئەگەر TUSC ئىشلەتكۈچى ئاتى ئىشلىتىلسە ئۇمۇ خاتىرىلىنىپ بۇزغۇنچىلىق قىلمىشىنىڭ ئالدىنى ئېلىشقا ھەمدەم قىلىنىدۇ. ئىم مەڭگۈ خاتىرىلەنمەيدۇ.',
	'author-complete' => 'يازغۇچىنىڭ ئۇچۇرىنى تولدۇرۇڭ!',
	'preview-hide' => 'ئالدىن كۆزىتىشنى يوشۇر',
	'preview-refresh' => 'ئالدىن كۆزىتىشنى يېڭىلا',
	'error-must-accept' => 'ئەگەر بىۋاستە يۈكلىمەكچى بولسىڭىز تەمىنلىگەن ئىشلىتىش ماددىلىرىغا قوشۇلۇڭ.',
	'error-tusc-failed' => 'TUSC دەلىللىيەلمىدى: ئىشلەتكۈچى ئاتى ياكى ئىم خاتا.',
	'description-license' => 'چۈشەندۈرۈش ۋە ئىجازەتنامە تاللاڭ',
	'finalise' => 'تاماملاش تەپسىلاتى',
);

/** Ukrainian (українська)
 * @author Dim Grits
 * @author Тест
 */
$messages['uk'] = array(
	'error-tryagain' => '$1 Натисніть у вашому браузері «Назад» для повтору.',
	'error-nothing' => 'Нічого перекладати.',
	'error-notsvg' => 'Це не файл SVG.',
	'error-unexpected' => 'Сталася неочікувана помилка.',
	'error-notfound' => 'Не вдалося знайти файл SVG за цією адресою.',
	'error-upload' => 'Сталася помилка при завантаженні.',
	'begin-translation' => 'Почати переклад',
	'th-original' => 'Вихідний текст',
	'th-translation' => 'Переклад',
	'th-language' => 'Мова',
	'th-username' => "Ім'я користувача",
	'th-password' => 'Пароль',
	'th-method' => 'Метод',
	'option-tusc' => 'TUSC (автоматичне завантаження)',
	'option-manual' => 'Самостійне завантаження',
	'preview' => 'Попередній перегляд',
	'translate' => 'Перекласти',
	'translate-instructions' => "Вкажіть ім'я файлу (наприклад, «$1») або повний URL-адрес (наприклад, «$2»). Якщо використано перший варіант, джерелом буде вважатись Wikimedia Commons. Для того, щоб перекласти SVG-файл з іншого сайту, вікіпроекту, слід використовувати його повну інтернет адресу.",
	'svginput-label' => 'Файл SVG',
	'stats-footer' => 'Цей інструмент був використаний для перекладу приблизно $1 файлів з $2.',
	'uploading' => 'Завантаження',
	'upload-complete' => 'Завантаження успішно завершено. Зображення має тепер бути в $1',
	'editdescriptionpage' => 'Редагування нової сторінки опису',
	'disclaimer' => "Деякі анонімні дані можуть збиратися для статистичних цілей. Якщо було вказане TUSC-ім'я користувача, то воно також буде збережено для надання допомоги у випадку вандалізму. Паролі ніколи не зберігаються.",
	'author-complete' => 'Будь ласка, заповніть інформацію про автора!',
	'preview-hide' => 'Приховати попередній перегляд',
	'preview-refresh' => 'Оновити попередній перегляд',
	'error-must-accept' => 'Щоб продовжити завантаження, ви повинні прийняти Умови використання.',
	'error-tusc-failed' => "Помилка перевірки TUSC. Ім'я користувача або пароль невірні.",
	'description-license' => 'Виберіть опис і ліцензію',
	'finalise' => 'Прикінцеві подробиці',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'Dịch SVG',
	'error-tryagain' => '$1 Bấm nút Lùi của trình duyệt để thử lại.',
	'error-nothing' => 'Không có gì để dịch.',
	'error-notsvg' => 'Không phải là tập tin SVG.',
	'error-unexpected' => 'Đã xuất hiện lỗi bất ngờ.',
	'error-notfound' => 'Không thể lấy được tập tin SVG từ URL được cung cấp.',
	'error-upload' => 'Việc tải lên bị thất bại.',
	'begin-translation' => 'Bắt đầu dịch',
	'th-original' => 'Bản gốc',
	'th-translation' => 'Bản dịch',
	'th-language' => 'Ngôn ngữ',
	'th-username' => 'Tên người dùng',
	'th-password' => 'Mật khẩu',
	'th-method' => 'Phương thức',
	'option-tusc' => 'TUSC (tự động tải lên)',
	'option-manual' => 'Tải lên thủ công',
	'preview' => 'Xem trước',
	'translate' => 'Biên dịch',
	'translate-instructions' => 'Có thể cho vào tên tập tin (thí dụ “$1”) hoặc địa chỉ URL đầy đủ (thí dụ “$2”). Nếu chỉ cho vào tên tập tin, công cụ sẽ sử dụng Wikimedia Commons làm nguồn mặc định. Để dịch một tập tin SVG từ trang hoặc wiki khác, bạn phải cung cấp địa chỉ URL đầy đủ.',
	'svginput-label' => 'Tập tin SVG',
	'stats-footer' => 'Công cụ này đã được sử dụng để dịch vào khoảng $1 tập tin từ $2.',
	'uploading' => 'Đang tải lên',
	'upload-complete' => 'Hoàn tất tải lên tập tin. Hình có sẵn tại $1.',
	'editdescriptionpage' => 'Sửa đổi trang miêu tả mới',
	'disclaimer' => 'Một số dữ liệu vô danh sẽ được gửi một cách bảo mật cho mục đích thống kê. Nếu được cung cấp, các tên người dùng TUSC cũng được ghi lại để giúp tránh phá hoại. Các mật khẩu không bao giờ được ghi lại.',
	'author-complete' => 'Xin vui lòng điền thông tin tác giả!',
	'preview-hide' => 'Ẩn phần xem trước',
	'preview-refresh' => 'Làm mới phần xem trước',
	'error-must-accept' => 'Để tiếp tục tải lên trực tiếp, trước tiên bạn phải cấp nhận các điều khoản sử dụng được trình bày.',
	'error-tusc-failed' => 'Thất bại việc xác minh TUSC: tên người dùng hoặc mật khẩu không chính xác.',
	'description-license' => 'Chọn miêu tả và giấy phép',
	'finalise' => 'Hoàn tất các chi tiết',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'error-nothing' => 'נישטא וואס איבערצוזעצן',
	'error-notsvg' => 'נישט קיין SVG טעקע.',
	'begin-translation' => 'אנהייבן איבערזעצן',
	'th-original' => 'ארגינעל',
	'th-translation' => 'איבערזעצונג',
	'th-language' => 'שפראַך',
	'th-username' => 'באַניצער נאָמען',
	'th-password' => 'פאַסווארט',
	'th-method' => 'מעטאָד',
	'translate' => 'איבערזעצן',
	'svginput-label' => 'SVG טעקע',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Liangent
 * @author Shizhao
 * @author Xiaomingyan
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'title' => 'SVG 翻译',
	'error-tryagain' => '$1点击你的浏览器的返回按钮重试。',
	'error-nothing' => '没有要翻译的内容。',
	'error-notsvg' => '非SVG文件。',
	'error-unexpected' => '发生意外错误。',
	'error-notfound' => '不能从提供的 URL 中获取SVG 文件。',
	'error-upload' => '上传时出错。',
	'begin-translation' => '开始翻译',
	'th-original' => '原文',
	'th-translation' => '译文',
	'th-language' => '语言',
	'th-username' => '用户名',
	'th-password' => '密码',
	'th-method' => '方法',
	'option-tusc' => 'TUSC (自动上传)',
	'option-manual' => '手工上传',
	'preview' => '预览',
	'translate' => '翻译',
	'translate-instructions' => '可以输入文件名（例如“$1”）或完整的URL(例如 "$2")。如果选择第一个选项，维基共享资源会被作为来源。如果是从其他网站或wiki翻译SVG文件，你必须使用完整的url。',
	'svginput-label' => 'SVG文件',
	'stats-footer' => '自$2起，本工具已翻译约$1个文件。',
	'uploading' => '正在上传',
	'upload-complete' => '上传顺利完成。该图像现在应该位于$1',
	'editdescriptionpage' => '编辑新说明页面',
	'disclaimer' => '某些匿名数据将会被私人收集用于统计目的。如果使用TUSC用户名，它也将会被记录下来以用于协助应付破坏行为。密码永远不会被记录。',
	'author-complete' => '请填写作者信息！',
	'preview-hide' => '隐藏预览',
	'preview-refresh' => '刷新预览',
	'error-must-accept' => '若要继续直接上传，您必须接受提供的使用条款。',
	'error-tusc-failed' => 'TUSC验证失败：用户名或密码不正确。',
	'description-license' => '选择说明和授权协议',
	'finalise' => '敲定细节',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Cwlin0416
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'title' => 'SVG翻譯',
	'error-tryagain' => '$1點選瀏覽器中的返回按鈕重試',
	'error-nothing' => '目前沒有可翻譯的內容',
	'error-notsvg' => '不是SVG文件。',
	'error-unexpected' => '發生意外錯誤。',
	'error-notfound' => '不能從提供的URL中獲取SVG文件。',
	'error-upload' => '上傳時發生了錯誤。',
	'begin-translation' => '開始翻譯',
	'th-original' => '原文',
	'th-translation' => '翻譯',
	'th-language' => '語言',
	'th-username' => '用戶名',
	'th-password' => '密碼',
	'th-method' => '方法',
	'option-tusc' => 'TUSC（自動上傳）',
	'option-manual' => '手工上傳',
	'preview' => '預覽',
	'translate' => '翻譯',
	'translate-instructions' => '可以輸入文件名（例如"$1"）或完整的URL（例如"$2"）。如果選擇第一個選項，會將維基共享資源視為來源。如果是從其他網站或維基中翻譯SVG文件，你必須使用完整的URL。',
	'svginput-label' => 'SVG文件',
	'stats-footer' => '此工具自$2起已經翻譯了約$1個文件。',
	'uploading' => '上傳中',
	'upload-complete' => '上傳成功，該文件現在應該位於$1',
	'editdescriptionpage' => '編輯新的描述頁',
	'disclaimer' => '某些匿名數據會被私人收集以用於統計。如果使用TUSC上傳，用戶名會被記錄以防止破壞，唯密碼永遠都不會被記錄。',
	'author-complete' => '請填寫作者信息。',
	'preview-hide' => '隱藏預覽',
	'preview-refresh' => '重新整理預覽',
	'error-must-accept' => '如要繼續上傳，您必須接受提供的使用條款。',
	'error-tusc-failed' => 'TUSC驗証錯誤：用戶名或密碼不正確。',
	'description-license' => '選擇描述及條款',
	'finalise' => '敲定細節',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'error-tryagain' => '$1點選瀏覽器中的返回按鈕重試',
	'error-nothing' => '沒有要翻譯的內容',
	'error-notsvg' => '不是SVG文件。',
	'error-unexpected' => '發生意外錯誤。',
	'error-notfound' => '不能從提供的URL中獲取SVG文件。',
	'error-upload' => '上傳時發生錯誤。',
	'begin-translation' => '開始翻譯',
	'th-original' => '原文',
	'th-translation' => '翻譯',
	'th-language' => '語言',
	'th-username' => '用戶名',
	'th-password' => '密碼',
	'th-method' => '方法',
	'option-tusc' => 'TUSC（自動上載）',
	'option-manual' => '手動上載',
	'preview' => '預覽',
	'translate' => '翻譯',
	'translate-instructions' => '可以輸入文件名（例如"$1"）或完整的URL（例如"$2"）。如果選擇第一個選項，會將維基共享資源視為來源。如果是從其他網站或維基中翻譯SVG文件，你必須使用完整的URL。',
	'svginput-label' => 'SVG檔',
	'stats-footer' => '此工具自$2起已經翻譯了約$1個文件。',
	'uploading' => '上載中',
	'upload-complete' => '上傳成功，該文件現在應該位於$1',
	'editdescriptionpage' => '編輯新的描述頁',
	'disclaimer' => '某些匿名數據會被私人收集以用於統計。如果使用TUSC上傳，用戶名會被記錄以防止破壞，唯密碼永遠都不會被記錄。',
	'author-complete' => '請填寫作者信息！',
	'preview-hide' => '隱藏預覽',
	'preview-refresh' => '重新整理預覽',
	'error-must-accept' => '如要繼續上載，您必須接受提供的使用條款。',
	'error-tusc-failed' => 'TUSC驗証錯誤：用戶名或密碼不正確。',
	'description-license' => '選擇描述及條款',
	'finalise' => '決定細節',
);
