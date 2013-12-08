<?php
/**
 * Interface messages for tool "CommonsHelper2".
 *
 * @toolowner jan
 */

$url = '//toolserver.org/~commonshelper2/';

$messages = array();

/**
 * English
 *
 * @author Jan Luca
 */
$messages['en'] = array(
	'title' => 'CommonsHelper 2', // Ignore

	'attention' => 'Attention',
	'commonshelper2' => 'CommonsHelper 2', // Optional
	'description' => 'A tool to transfer files from Wikimedia projects to Wikimedia Commons',
	'change_meta' => 'Change the $1category and template settings$2 for $3',
	'jira_link' => 'Report a bug or suggest a feature',

	// Main form
	'language' => 'Language',
	'project' => 'Project',
	'source_file' => 'Source file',
	'target_file' => 'Target file',
	'commons_username' => 'Wikimedia Commons username',
	'commons_to_project' => 'Wikimedia Commons to project',
	'move_file_from_com' => 'Move file from Wikimedia Commons to project',
	'categories' => 'Categories',
	'remove_cats' => 'Remove existing categories',
	'checkusage' => 'CheckUsage', // Optional
	'use_checkusage' => 'Use $1CommonSense$2 to suggest new categories',
	'tusc' => 'TUSC', // Ignore
	'use_tusc' => 'Use $1TUSC$2 to authenticate and transfer the file directly',
	'tusc_user' => 'TUSC username',
	'tusc_pass' => 'TUSC password',
	'do_it' => 'Do it',

	// Error
	'error_transfer_usr' => 'You have not set a Wikimedia Commons username',
	'error_not_exists' => 'Source file does not exist!',
	'error_on_commons' => 'Source file already on $1!',
	'error_file_exists' => 'File already exists on $3 as "$1$4$2"!',
	'error_diff_exists' => 'A different target file exists on the target wiki under the same name!',
	'error_no_meta' => 'No metadata found about the source wiki! $1Please add/update the metadata for the project$2',	
	'error_meta_no_good' => 'Metadata: No good templates found! $1Please add/update the metadata for the project$2',	
	'error_meta_bad' => 'Metadata: Bad template found! $1Please add/update the metadata for the project$2',	

	// Output
	'original_wikitext' => 'Original wiki text',
	'new_wikitext' => 'New wiki text',
	'new_filename' => 'New filename:',
	'output_information' => 'For manual upload, edit the above text (if necessary), save $1the file$2 on your computer, then $3upload it$4.',
	'upload_submit' => 'Upload!',

	// Misc
	'target_wiki' => 'the target wiki',

	// Standard values in Latin chars (for Maindesk and Metadata-Links)
	'standard_project' => 'wikipedia', // Optional

	//Upload
	'error_bot_blocked' => 'Upload bot is blocked on Wikimedia Commons.',
	'error_upload_meta' => 'Cannot upload directly because there is a problem with the meta data (see above)!',
	'error_tusc_failed' => 'TUSC verification failed!',
	'error_only_commons' => 'Direct upload works only at Wikimedia Commons!',
	'upload_control_text'=> 'Please check the new wiki text and click "$1" if all is OK!',
	'error_commons_user' => 'To identify the transfer user, your Wikimedia Commons username has to be in the description!',
	'error_upload_users' => 'The upload function is only available to some users during the test period!',
	'error_upload_file' => 'The original file cannot be downloaded.',
	
	//Help
	'help_intro' => 'When you want to report a bug, suggest a feature or have a question, you can use one of the contact types below:',
	'help_jira' => '$1JIRA (you need an account)$2 (Project: Commonshelper2)',
	'help_mail' => 'Send a mail to $1',
	'help_commons' => '$1Add a post on Commons$2'
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jan Luca
 * @author Krinkle
 * @author Kwj2772
 * @author Purodha
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'commonshelper2' => '{{Optional}}',
	'change_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.',
	'language' => '{{Identical|Language}}',
	'project' => '{{Identical|Project}}',
	'categories' => '{{Identical|Category}}',
	'checkusage' => '{{Optional}}',
	'use_checkusage' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).',
	'tusc' => '{{Ignore}}

{{hint-TUSC}}',
	'use_tusc' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

{{hint-TUSC}}',
	'tusc_user' => '
{{hint-TUSC}}',
	'tusc_pass' => '
{{hint-TUSC}}',
	'error_file_exists' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).

$3 is target wiki name.

$4 is the name of the file',
	'error_no_meta' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of [[m:CommonsHelper2]].',
	'error_meta_no_good' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of [[m:CommonsHelper2]].',
	'error_meta_bad' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is a subpage of [[m:CommonsHelper2]].',
	'output_information' => '$1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link).
	
$3 and $4 are for a clickable link ($3 is the start of the link, $4 the end of the link).',
	'upload_submit' => 'Please see {{msg-toolserver|Commonshelper2-upload_control_text}} for context
{{Identical|Upload}}',
	'standard_project' => '{{Optional}} The biggest project (e.g. "wikipedia") in this language. Used for standard values in maindesk and metadata-links.',
	'error_tusc_failed' => '
{{hint-TUSC}}',
	'upload_control_text' => '$1 is be the same as in the message {{msg-toolserver|Commonshelper2-upload_submit}}',
	'help_jira' => 'Parameters:
* $1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is https://jira.toolserver.org/secure/CreateIssue!default.jspa.',
	'help_mail' => '$1 is the mail address.',
	'help_commons' => 'Parameters:
* $1 and $2 are for a clickable link ($1 is the start of the link, $2 the end of the link). The target of the link is http://commons.wikimedia.org/wiki/Commons_talk:CommonsHelper_2.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'attention' => 'Let op',
	'jira_link' => "Rapporteer 'n fout of stel 'n verbetering voor",
	'language' => 'Taal',
	'project' => 'Project',
	'source_file' => 'Bronlêer',
	'target_file' => 'Doellêer',
	'categories' => 'Kategorieë',
	'remove_cats' => 'Verwyder bestaande kategorieë',
	'tusc_user' => 'TUSC-gebruikersnaam',
	'tusc_pass' => 'TUSC-wagwoord',
	'do_it' => 'Doen dit',
	'error_not_exists' => 'Die bronlêer bestaan ​​nie!',
	'error_on_commons' => 'Die bronlêer is reeds op $1!',
	'original_wikitext' => 'Oorspronklike wikiteks',
	'new_wikitext' => 'Nuwe wikiteks',
	'new_filename' => 'Nuwe lêernaam:',
	'upload_submit' => 'Laai op!',
	'error_upload_file' => 'Die oorspronklike lêer kan nie afgelaai word nie.',
	'help_mail' => 'Stuur e-pos aan $1',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'language' => 'ቋንቋ',
	'project' => 'ፕሮጀክት',
	'source_file' => 'መነሻ ፋይል',
	'categories' => 'መደቦች',
	'upload_submit' => 'ለመላክ',
);

/** Arabic (العربية)
 * @author Abanima
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author Tarawneh
 * @author Zaher kadour
 * @author أحمد
 */
$messages['ar'] = array(
	'attention' => 'تنبيه',
	'description' => 'أداة لنقل الملفات من مشروعات ويكيميديا إلى ويكيميديا كومونز',
	'change_meta' => 'غيّر $1إعدادات التصنيفات و القوالب$2 لأجل $3',
	'jira_link' => 'بلغ عن علة أو اقترح وظيفة',
	'language' => 'اللغة',
	'project' => 'المشروع',
	'source_file' => 'الملف المصدر',
	'target_file' => 'الملف الهدف',
	'commons_username' => 'اسم مستخدم ويكيميديا كومنز',
	'commons_to_project' => 'ويكيميديا كومنز للمشروع',
	'move_file_from_com' => 'انقل الملف من ويكيميديا كومنز للمشروع',
	'categories' => 'تصنيفات',
	'remove_cats' => 'أزل التصنيفات الموجودة',
	'use_checkusage' => 'استخدم $1CommonSense$2 لاقتراح تصنيفات جديدة',
	'use_tusc' => 'استخدم $1TUSC$2 للمصادقة ونقل الملف مباشرة',
	'tusc_user' => 'اسم مستخدم TUSC',
	'tusc_pass' => 'كلمة سر TUSC',
	'do_it' => 'افعلها',
	'error_transfer_usr' => 'أنت لم تضبط اسم مستخدم ويكيميديا كومنز',
	'error_not_exists' => 'الملف المصدر غير موجود!',
	'error_on_commons' => 'الملف المصدر موجود مسبقا على $1!',
	'error_file_exists' => 'الملف موجود حالياً في $3 باسم "$1$4$2"!',
	'error_diff_exists' => 'يوجد ملف مستهدف مختلف على ويكي الهدف تحت نفس الاسم!',
	'error_no_meta' => 'تعذر العثور على البيانات الفوقية للويكي المصدر! $1أضف/حدث البيانات الفوقية للمشروع$2',
	'error_meta_no_good' => 'البيانات الفوقية: لم يتم العثور على قوالب جيدة! $1أضف/حدث البيانات الفوقية للمشروع$2',
	'error_meta_bad' => 'البيانات الفوقية: تم العثور على قالب سيئ! $1 رجاء أضف\\حدث البيانات الفوقية للمشروع$2',
	'original_wikitext' => 'نص الويكي الأصلي',
	'new_wikitext' => 'نص الويكي الجديد',
	'new_filename' => 'اسم الملف الجديد:',
	'output_information' => 'للرفع اليدوي عدِّل النص أعلاه (إن دعت الحاجة لذلك) ثم احفظ $1الملف$2 على جهازك، ثم $3ارفعه$4.',
	'upload_submit' => 'ارفع!',
	'target_wiki' => 'الويكي الهدف',
	'error_bot_blocked' => 'بوت الرفع محظور في ويكيميديا كومنز.',
	'error_upload_meta' => 'لا يمكن الرَّفع مباشرة بسبب وجود مشكلة في البيانات الفوقية (انظر أعلاه) !',
	'error_tusc_failed' => 'فشل التحقق من TUSC!',
	'error_only_commons' => 'الرفع المباشرة يعمل فقط على ويكيميديا كومنز.',
	'upload_control_text' => 'تفقد نص الويكي الجديد ثم اضغط "$1" إن كان كل شيء على ما يُرام!',
	'error_commons_user' => 'لتعريف المستخدم الناقل ينبغي أن تذكر اسم مستخدم ويكيميديا كومنز في الوصف!',
	'error_upload_users' => 'وظيفة الرَّف متاحة لبعض المستخدمين فقط خلال فترة الاختبار!',
	'error_upload_file' => 'الملف الأصلي لم يمكن تنزيله.',
	'help_intro' => 'إن أردت رفع تقرير بعلِّة ما، أو اقتراح وظيفة أو طرح سؤال فاستخدام إحدى وسائل الاتصال المسرودة أدناه:',
	'help_jira' => '$1JIRA (أنت في حاجة إلى حساب)$2 (المشروع: Commonshelper2)',
	'help_mail' => 'أرسل بريدا إلكترونيا إلى $1',
	'help_commons' => '$1أضف تعليقا على كومنز$2',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'language' => 'ܠܫܢܐ',
	'project' => 'ܬܪܡܝܬܐ',
	'source_file' => 'ܠܦܦܐ ܡܒܘܥܝܐ',
	'target_file' => 'ܠܦܦܐ ܢܘܦܝܐ',
	'categories' => 'ܣܕܪ̈ܐ',
	'new_filename' => 'ܫܡܐ ܕܠܦܦܐ ܚܕܬܐ:',
	'upload_submit' => 'ܐܣܩ!',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Simbu123
 */
$messages['as'] = array(
	'attention' => 'লক্ষ্য কৰক',
	'language' => 'ভাষা',
	'project' => 'প্ৰকল্প',
	'source_file' => 'উৎস ফাইল',
	'target_file' => 'লক্ষ্য ফাইল',
	'commons_username' => 'ৱিকিমিডিয়া কমন্স সদস্যনাম',
	'commons_to_project' => 'ৱিকিমিডিয়া কমন্সৰ পৰা প্রকল্পলৈ',
	'categories' => 'শ্ৰেণীসমূহ',
	'remove_cats' => 'বর্তমানৰ শ্ৰেণীসমূহ বিলোপ কৰক',
	'tusc_user' => 'TUSC সদস্যনাম',
	'tusc_pass' => 'TUSC গুপ্তশব্দ',
	'do_it' => 'সম্পন্ন কৰক',
	'error_transfer_usr' => 'আপুনি ৱিকিমিডিয়া কমন্সৰ ব্যৱহাৰকাৰী নাম প্ৰদান কৰা নাই',
	'error_not_exists' => 'উৎস পৃষ্ঠৰ অস্তিত্ব নাই ।',
	'error_file_exists' => 'ফাইল $3 ইতিমধ্যে "$1 $4 $2" হিচাপে আছেই !',
	'original_wikitext' => 'মূল ৱিকি পাঠ্য',
	'new_wikitext' => 'নতুন ৱিকি পাঠ্য',
	'new_filename' => 'নতুন ফাইলনাম:',
	'upload_submit' => 'আপল’ড কৰক !',
	'target_wiki' => 'লক্ষ্য ৱিকি',
	'error_bot_blocked' => 'আপল’ড বট ৱিকিমিডিয়া কমন্সত ব্লক কৰা হৈছে।',
	'error_tusc_failed' => 'TUSC সত্যাপন বিফল হৈছে',
	'error_upload_file' => 'মূল ফাইল ডাউনল’ড কৰিব নোৱাৰি ।',
	'help_jira' => '$1JIRA (আপোনাক এটা একাউন্টৰ প্ৰয়োজন)$2 (Project: Commonshelper2)',
	'help_mail' => '$1ক ই-মেইল প্ৰেৰণ কৰক',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'attention' => 'Atención',
	'description' => 'Ferramienta pa tresferir ficheros de los proyeutos Wikimedia a Wikimedia Commons',
	'change_meta' => 'Camudar les $1preferencies de categoría y plantía$2 pa $3',
	'jira_link' => "Informar d'un fallu o suxerir una carauterística",
	'language' => 'Llingua',
	'project' => 'Proyeutu',
	'source_file' => 'Ficheru orixe',
	'target_file' => 'Ficheru destín',
	'commons_username' => "Nome d'usuariu en Wikimedia Commons",
	'commons_to_project' => 'De Wikimedia Commons al proyeutu',
	'move_file_from_com' => 'Mover ficheru de Wikimedia Commons al proyeutu',
	'categories' => 'Categoríes',
	'remove_cats' => 'Desaniciar categoríes esistentes',
	'checkusage' => 'ComprobarUsu',
	'use_checkusage' => 'Usa $1CommonSense$2 pa suxerir categoríes nueves',
	'use_tusc' => "Usa $1TUSC$2 p'autenticate y tresferir el ficheru direutamente",
	'tusc_user' => "Nome d'usuariu TUSC",
	'tusc_pass' => 'Conseña TUSC',
	'do_it' => 'Facelo',
	'error_transfer_usr' => "Nun conseñasti un nome d'usuariu de Wikimedia Commons",
	'error_not_exists' => "¡El ficheru d'orixe nun esiste!",
	'error_on_commons' => "¡El ficheru d'orixe yá ta en $1!",
	'error_file_exists' => '¡El ficheru yá esiste en $3 como "$1$4$2"!',
	'error_diff_exists' => '¡Un ficheru destín diferente col mesmu nome yá esiste na wiki destín!',
	'error_no_meta' => "¡Nun s'alcontraron metadatos pa la wiki d'orixe! $1Por favor, amiesta/anueva los metadatos del proyeutu$2",
	'error_meta_no_good' => "Metadatos: ¡Nun s'alcontró denguna plantía afayadiza! $1Enllaz a los metadatos$2",
	'error_meta_bad' => "Metadatos: ¡S'alcontró una plantía mala! $1Por favor, amiesta/anueva los metadatos del proyeutu$2",
	'original_wikitext' => 'Testu wiki orixinal',
	'new_wikitext' => 'Testu wiki nuevu',
	'new_filename' => 'Nuevu nome de ficheru:',
	'output_information' => "Pa xubilu a mano, edita'l testu d'arriba (si ye necesario), guarda $1el ficheru$2 nel ordenador y, darréu, $3xúbilu$4.",
	'upload_submit' => '¡Xubir!',
	'target_wiki' => 'la wiki destín',
	'error_bot_blocked' => 'El bot de xubes ta bloquiáu en Wikimedia Commons.',
	'error_upload_meta' => '¡Nun se pue xubir direutamente porque hai un problema colos metadatos (ver más arriba)!',
	'error_tusc_failed' => '¡Falló la comprobación TUSC!',
	'error_only_commons' => '¡La xuba direuta namái funciona en Wikimedia Commons!',
	'upload_control_text' => "¡Comprueba'l nuevu testu wiki y calca «$1» si ta too bien!",
	'error_commons_user' => "Para identificar al usuariu de la tresferencia, el to nome d'usuariu de Wikimedia Commons tien de tar na descripción.",
	'error_upload_users' => "La función de xuba solo ta disponible para dellos usuarios mentanto'l periodu de pruebes.",
	'error_upload_file' => 'El ficheru orixinal nun se pue descargar.',
	'help_intro' => "Cuando quieras informar d'un fallu, proponer una carauterística o tengas una entruga, puedes usar unu de los medios de contautu darréu:",
	'help_jira' => '$1JIRA (necesites tener una cuenta)$2 (Proyeutu: Commonshelper2)',
	'help_mail' => 'Unvia un corréu a $1',
	'help_commons' => '$1Escribi un mensaxe en Commons$2',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Khan27
 * @author Vago
 */
$messages['az'] = array(
	'attention' => 'Diqqət',
	'language' => 'Dil',
	'project' => 'Layihə',
	'source_file' => 'Mənbə faylı',
	'target_file' => 'Hədəf faylı',
	'commons_username' => 'Vikimedia Commons istifadəçi adı',
	'commons_to_project' => 'Vikimedia Commons-dan layihəyə',
	'move_file_from_com' => 'Faylı Vikimedia Commons-dan proyektə köçürün',
	'categories' => 'Kateqoriyalar',
	'remove_cats' => 'Mövcud kateqoriyaları silin',
	'tusc_user' => 'TUSC istifadəçi adı',
	'tusc_pass' => 'TUSC parolu',
	'do_it' => 'Bunu et',
	'original_wikitext' => 'Orijinal viki mətn',
	'new_wikitext' => 'Yeni viki mətn',
	'new_filename' => 'Yeni fayl adı:',
	'error_upload_file' => 'Orijinal faylı yükləmək mümkün olmur.',
	'help_intro' => 'Əgər siz səhv haqqında bildirmək, funksiyanı təklif etmək və ya sual vermək istəyirsinizsə, sşsğıdakı əlaqə yollarından istifadə edə bilərsiniz:',
	'help_jira' => '$1JIRA (hesaba ehtiyacın var)$2 (Proyekt: Commonshelper2)',
	'help_mail' => '$1 ünvanına bir e-poçt göndərin.',
	'help_commons' => '$1Commons-da yazı əlavə et$2',
);

/** South Azerbaijani (تورکجه)
 * @author E THP
 * @author Mousa
 */
$messages['azb'] = array(
	'attention' => 'دیقت',
	'description' => 'فایل‌لاری ویکی‌مئدیا پروژه‌لریندن ویکی‌مئدیا اورتاقلار داشیماق اوچون بیر آراج',
	'change_meta' => '$3 اوچون $1بؤلمه و شابلون تنظیملری$2نی دَییشدیر',
	'jira_link' => 'بیر خطا بیلدیر ویا بیر اؤزل‌لیک ایسته',
	'language' => 'دیل',
	'project' => 'پروژه',
	'source_file' => 'قایناق فايلی',
	'target_file' => 'هدف فایلی',
	'commons_username' => 'ویکی‌مئدیا اورتاقلار ایستیفاده‌چی آدی',
	'commons_to_project' => 'ویکی‌مئدیا اورتاقلاردان پروژه‌یه',
	'move_file_from_com' => 'فایلی ویکی‌مئدیا اورتاقلاردان پروژه‌یه آپار',
	'categories' => 'بؤلمه‌لر',
	'remove_cats' => 'اولان بؤلمه‌لری سیل',
	'use_checkusage' => 'یئنی بؤلمه‌لر اؤنریله‌مک اوچون $1CommonSense$2 ایشلت',
	'use_tusc' => 'دوغرولاماق و فایلی موستقیم داشیماق اوچون $1TUSC$2-ی ایشلدین',
	'tusc_user' => 'TUSC ایستیفاده‌چی آدی',
	'tusc_pass' => 'TUSC رمزی',
	'do_it' => 'بونو ائت',
	'error_transfer_usr' => 'سیز بو ویکی‌مئدیا اورتاقلار ایستیفاده‌چی آدی قویمامیسینیز',
	'error_not_exists' => 'قایناق فایل یوخدور!',
	'error_on_commons' => 'قایناق فایل قاباقجادان $1-ده‌دیر!',
	'error_file_exists' => 'فایل قاباقجادان «$1$4$2» آدی ایله $3-ده‌دیر!',
	'error_diff_exists' => 'هدف ویکی‌ده بیر فرقلی فایل عینی آددا واردیر!',
	'error_no_meta' => 'قایناق ویکی‌یه گؤره هئچ بیر مِتابیلگی تاپیلمادی! $1لوطفاً پروژه اوچون مِتابیلگیلری آرتیرین/گونجل‌له‌یین$2',
	'error_meta_no_good' => 'مٍتابیلگی: هئچ بیر یاخشی شابلون تاپیلمادی! $1لوطفاً پروژه اوچون مِتابیلگیلری آرتیرین/گونجل‌له‌یین$2',
	'error_meta_bad' => 'مٍتابیلگی: پیس شابلون تاپیلدی! $1لوطفاً پروژه اوچون مِتابیلگیلری آرتیرین/گونجل‌له‌یین$2',
	'original_wikitext' => 'ایلکین ویکی یازیسی',
	'new_wikitext' => 'یئنی ویکی یازیسی',
	'new_filename' => 'یئنی فایل آدی:',
	'output_information' => 'ال ایله یوکله‌مک اوچون، اوست‌ده‌کی یازینی دَییشدیرین (اگر لازیم اولسا)، $1فایلی$2 بیلگی‌سایارینیزدا قئید ائدین، سونرا $3اونو یوکله‌یین$4.',
	'upload_submit' => 'یوکله!',
	'target_wiki' => 'هدف ویکی',
	'error_bot_blocked' => 'یوکله‌مک روبوتو ویکی‌مئدیا اورتاقلاردا باغلانیلیب‌دیر.',
	'error_upload_meta' => 'موستقیم یوکله‌مک اولمور، نییه‌کی مِتابیلگی‌یه گؤره بیر موشکول وار (اوسته باخین)!',
	'error_tusc_failed' => 'TUSC دوغرولاماغی اولانمادی!',
	'error_only_commons' => 'موستقیم یوکله‌مک یالنیز ویکی‌مئدیا اورتاقلاردا اولا بیلر!',
	'upload_control_text' => 'هر شئی یاخشی اولسا، یئنی ویکی یازیسینی یوخلایین و «$1»-ی تیکلایین!',
	'error_commons_user' => 'داشییان ایستیفاده‌چینی بیلدیرمک اوچون، سیزین ویکی‌مئدیا اورتاقلار ایستیفاده‌چی آدینیز گرک آچیقلامادا اولسون!',
	'error_upload_users' => 'تِست دؤنمینده یوکله‌مک یالنیز بعضی ایستیفاده‌چیلره آچیقدیر!',
	'error_upload_file' => 'ایلکین فایلی اندیرمک اولمور.',
	'help_intro' => 'بیر خطا بیلدیرنده، اؤزل‌لیک ایسته‌ینده، یا سوال سوروشاندا، بو ایلگی قورماق یول‌لارینین بیرینی سئچه بیلرسینیز:',
	'help_jira' => '$1JIRA (سیزه حساب گرکلی‌دیر)$2 (پروژه: Commonshelper2)',
	'help_mail' => '$1-ه بیر ایمیل گؤندر',
	'help_commons' => '$1اورتاقلارا بیر یازی آرتیر$2',
);

/** Bashkir (башҡортса)
 * @author Sagan
 */
$messages['ba'] = array(
	'attention' => 'Ихтибар',
	'description' => 'Викимедия пректынан Викиһаҡлағысҡа файлдар күсереү ҡорамалы',
	'change_meta' => '$3 өсөн  $1 категория һәм  $2 ҡалып көйләүҙәрен үҙгәртегеҙ.',
	'jira_link' => 'Проблема тураһында хәбәр итегеҙ йәки сисеү юлын тәҡдим итегеҙ.',
	'language' => 'Тел',
	'project' => 'Проект',
	'source_file' => 'Тәүге файл',
	'target_file' => 'Маҡсатлы файл',
	'commons_username' => 'Викиһаҡлағыстағы ҡулланыусы исеме',
	'commons_to_project' => 'Викиһаҡлағыстан проеҡтҡа',
	'move_file_from_com' => 'Викиһаҡлағыстан файлды проектҡа күсерергә',
	'categories' => 'Категориялар',
	'remove_cats' => 'Барлыҡ категорияларҙы юйыу',
	'use_checkusage' => 'Яңы категория тәҡдим итеү өсөн $1CommonSense$2 ҡулланығыҙ',
	'use_tusc' => 'Танылыу һәм файлдарҙы тураға күсереү өсөн $1TUSC$2 ҡулланығыҙ',
	'tusc_user' => 'TUSC ҡатнашыусы исеме',
	'tusc_pass' => ' TUSC пароле',
	'do_it' => 'Ошоно эшлә',
	'error_transfer_usr' => 'Викиһаҡлағыста һеҙҙең исем юҡ',
	'error_not_exists' => 'Тәүге файл юҡ!',
	'error_on_commons' => 'Тәүге файл $1 битендә инде!',
	'error_file_exists' => 'Был файл $3 битендә  "$1$4$2" исеме менән бар!',
	'error_diff_exists' => 'Маҡсатлы викила ошо исемдәге башҡа файл бар!',
	'error_no_meta' => 'Маҡсатли вики тураһында метамәғлүмәт табылманы! $1 өҫтәгеҙ йәки $2 проекты метамәғлүмәнен яңыртығыҙ.',
	'error_meta_no_good' => 'Метамәғлүмәт: яраҡлы ҡалыптар табылмана!  $1 өҫтәгеҙ йәки  $2 пректы метамәғлүмәтен яңыртығыҙ.',
	'error_meta_bad' => 'Метамәғлүмәт: яраҡһыҙ ҡалыптар табылды!  $1 өҫтәгеҙ йәки  $2 пректы метамәғлүмәтен яңыртығыҙ.',
	'original_wikitext' => 'Вики текстың төп нөхсәһе',
	'new_wikitext' => 'Яңы вики текст',
	'new_filename' => 'Файлдың яңы исеме',
	'output_information' => 'Файлды ҡулдан тейәү өсөн өҫтәге тексты төҙәтегеҙ (әгәр кәрәк булһа), $1файл$2 компьютерҙа һаҡлағыҙ, һуңынан $3тейәгеҙ $4',
	'upload_submit' => 'Тейәргә',
	'target_wiki' => 'Маҡсатлы вики',
	'error_bot_blocked' => 'Викиһаҡлағыста тейәүсе робот бикләнгән.',
	'error_upload_meta' => 'Туоаға тейәй алмайым, метамәғлүмәт менән проблема бар (өҫтә карағыҙ).',
	'error_tusc_failed' => 'TUSC тикшереүҙе башкарып булманы!',
	'error_only_commons' => 'Турыға тейәү тик Викиһаҡлағыс өсөн эшләй!',
	'upload_control_text' => 'Яңы вики-тексты тикшереп ҡарағыҙ, әгәр барыһы ла дөрөҫ булһа "$1" төймәһенә баҫығыҙ!',
	'error_commons_user' => 'Танылыу өсөн һеҙҙең иҫәп яҙмаһы Wikimedia Commons яҙмаһында яҙылған булырға тейеш.',
	'error_upload_users' => 'Һынап ҡару ваҡытында тик ҡайһы бер ҡатнашыусыларҙың ғына тейәү рөхсәте бар.',
	'error_upload_file' => 'Тәүге файлды ксереп булманы',
	'help_intro' => 'Хата тураһында хебәр итергә, функция тәҡдим итергә йәки һорау бирергә теләһәгеҙ, түбәндәге бәйләнеш менән файҙаланығыҙ:',
	'help_jira' => '$1JIRA (һеҙҙең иҫәп яҙмаһы талап ителә)$2  (проект: Commonshelper2)',
	'help_mail' => '$1 хат ебәрергә',
	'help_commons' => '$1 Commons$2 хәбәр өҫтәргә',
);

/** Batak Toba (Batak Toba)
 * @author Aldnonymous
 */
$messages['bbc-latn'] = array(
	'attention' => 'Goit',
	'description' => 'parhohas tu paorothon siboanon sian proyek Wikimedia tu Wikimedia Commons',
);

/** Belarusian (беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'attention' => 'Увага',
	'description' => 'Прылада для перадачы файлаў з праектаў Wikimedia ў Wikimedia Commons',
	'change_meta' => 'Змяніць $1 катэгорыю і наладкі шаблону $2 для $3',
	'jira_link' => 'Паведаміць пра памылку ці прапанаваць новую функцыю',
	'language' => 'Мова',
	'project' => 'Праект',
	'source_file' => 'Зыходны файл',
	'target_file' => 'Мэтавы файл',
	'commons_username' => 'Імя ўдзельніка Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons у праект',
	'move_file_from_com' => 'Перанесці файл з Wikimedia Commons у праект',
	'categories' => 'Катэгорыі',
	'remove_cats' => 'Выдаліць існуючыя катэгорыя',
	'checkusage' => 'Праверка (CheckUsage)',
	'use_checkusage' => 'Выкарыстоўваць $1CommonSense$2, каб прапанаваць новыя катэгорыі',
	'use_tusc' => 'Выкарыстоўвайце $1 TUSC $2 для непасрэднай перадачы файлаў і аўтэнтыфікацыі',
	'tusc_user' => 'Імя карыстальніка TUSC',
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Зрабіце гэта',
	'error_transfer_usr' => 'Вы не задалі імя ўдзельніка Wikimedia Commons',
	'error_not_exists' => 'Файл-крыніца не існуе!',
	'error_file_exists' => 'Файл ужо існуе ў $3 , як " $1 $4 $2 "!',
	'error_diff_exists' => 'Розныя мэтавыя файлы існуюць у Вікі пад адною назвай!',
	'error_no_meta' => '$1Метададзеныя$2 не знойдзеныя ў зыходнай Вікі!', # Fuzzy
	'error_meta_no_good' => 'Метададзеныя: Не знойдзена слушных шаблонаў! $1Спасылка на метададзеныя $2',
	'error_meta_bad' => 'Метададзеныя: Знойдзены $1няслушны шаблон!$2', # Fuzzy
	'original_wikitext' => 'Арыгінальны тэкст Вікі',
	'new_wikitext' => 'Новы wiki-тэкст',
	'new_filename' => 'Новае імя файла:',
	'output_information' => 'Для загрузкі ўручную адрэдагуйце тэкст, калі гэта неабходна (гл. вышэй), захавайце $1файл$2 на сваім кампутары, а потым $3загрузіце яго на сервер$4',
	'upload_submit' => 'Загрузіць!',
	'target_wiki' => 'мэтавая вікі',
	'error_bot_blocked' => 'Загрузачны бот заблакаваны ў праекце Wikimedia Commons',
	'error_upload_meta' => 'Не магу загрузіць непасрэдна, паколькі маецца праблема з метададзенымі (гл. вышэй)!',
	'error_tusc_failed' => 'Не атрымалася праверыць TUSC!',
	'error_only_commons' => 'Непасрэдная загрузка працуе толькі ў Wikimedia Commons!',
	'upload_control_text' => 'Калі ласка, праверце новы тэкст і націсніце "$1", калі ўсё добра!',
	'error_commons_user' => 'Для вызначэння карыстальніка, які перадае файлы, Вашае імя ўдзельніка мусіць быць пазначана ў апісанні!',
	'error_upload_users' => 'Функцыя загрузкі даступная некаторым удзельнікам падчас тэставага перыяду!',
	'error_upload_file' => 'Арыгінальны файл не можа быць загружаны.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'attention' => 'Увага',
	'description' => 'Інструмэнты пераносу файлаў з праектаў Вікімэдыі ў ВікіСховішча',
	'change_meta' => 'Зьмяніць $1катэгорыю і налады шаблёну$2 для $3',
	'jira_link' => 'Паведаміць пра памылку ці прапанаваць магчымасьць',
	'language' => 'Мова',
	'project' => 'Праект',
	'source_file' => 'Крынічны файл',
	'target_file' => 'Мэтавы файл',
	'commons_username' => 'Імя ўдзельніка ў ВікіCховішчы',
	'commons_to_project' => 'Напрамак',
	'move_file_from_com' => 'Перанесьці файл зь ВікіСховішча ў праект',
	'categories' => 'Катэгорыі',
	'remove_cats' => 'Выдаліць існуючыя катэгорыі',
	'use_checkusage' => 'Выкарыстоўваць $1CommonSense$2, каб прапанаваць новыя катэгорыі',
	'use_tusc' => 'Выкарыстоўваць $1TUSC$2 для непасрэднай аўтэнтыфікацыі і перадачы файлаў',
	'tusc_user' => 'Імя карыстальніка TUSC',
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Далей',
	'error_transfer_usr' => 'Вы не пазначылі імя ўдзельніка ў ВікіСховішчы',
	'error_not_exists' => 'Крынічны файл не існуе!',
	'error_on_commons' => 'Крынічны файл ужо ёсьць у $1!',
	'error_file_exists' => 'Файл ужо існуе ў $3 як «$1$4$2»!',
	'error_diff_exists' => 'Файл з пазначанай назвай у мэтавай вікі ўжо існуе!',
	'error_no_meta' => 'Мэтазьвестак пра крынічную вікі ня знойдзена! $1Калі ласка, дадайце/абнавіце мэтазьвесткі для праекту$2',
	'error_meta_no_good' => 'Мэтазьвесткі: слушныя шаблёны ня знойдзеныя! $1Спасылка$2',
	'error_meta_bad' => 'Мэтазьвесткі: знойдзены няслушны шаблён! $1Калі ласка, дадайце/абнавіце мэтазьвесткі для праекту$2',
	'original_wikitext' => 'Арыгінальны вікі-тэкст',
	'new_wikitext' => 'Новы вікі-тэкст',
	'new_filename' => 'Новая назва файла:',
	'output_information' => 'Для ручной загрузкі, адрэдагуйце тэкст пададзены ніжэй (калі трэба), захавайце $1файл$2 на Вашым кампутары, потым $3яго загрузіце$4.',
	'upload_submit' => 'Загрузіць!',
	'target_wiki' => 'мэтавая вікі',
	'error_bot_blocked' => 'Робат загрузкі заблякаваны ў Wikimedia Commons.',
	'error_upload_meta' => 'Немагчыма загрузіць непасрэдна з-за праблемы з мэтазьвесткамі (глядзіце вышэй)!',
	'error_tusc_failed' => 'Памылка вэрыфікацыі TUSC!',
	'error_only_commons' => 'Непасрэдная загрузка працуе толькі ў ВікіСховішчы!',
	'upload_control_text' => 'Калі ласка, праверце новы вікі-тэкст і націсьніце «$1», калі ўсё добра!',
	'error_commons_user' => 'Для вызначэньня карыстальніка, які перадае файлы, Вашае імя ўдзельніка ў ВікіСховішчы павінна быць у апісаньні!',
	'error_upload_users' => 'У час тэставага пэрыяду функцыя загрузкі даступная толькі некаторым удзельнікам!',
	'error_upload_file' => 'Арыгінальны файл ня можа быць загружаны.',
	'help_intro' => 'Калі Вы жадаеце паведаміць пра памылку, прапанаваць магчымасьць ці маеце пытаньне, Вы можаце скарыстацца адным са спосабаў сувязі пададзенымі ніжэй:',
	'help_jira' => '$1JIRA (Вам неабходна мець рахунак)$2 (Праект: Commonshelper2)',
	'help_mail' => 'Даслаць электронны ліст на адрас $1',
	'help_commons' => '$1Дадаць паведамленьне на Commons$2',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'attention' => 'Внимание',
	'description' => 'Инструмент за прехвърляне на файлове от проектите на Уикимедия в Общомедия',
	'language' => 'Език',
	'project' => 'Проект',
	'source_file' => 'Изходен файл',
	'target_file' => 'Целеви файл',
	'categories' => 'Категории',
	'remove_cats' => 'Премахване на съществуващите категории',
	'tusc_user' => 'TUSC потребителско име',
	'tusc_pass' => 'TUSC парола',
	'error_not_exists' => 'Изходният файл не съществува!',
	'error_file_exists' => 'Файлът вече съществува в $3 като "$1$4$2"!',
	'error_only_commons' => 'Директното качване работи само в Общомедия!',
);

/** Banjar (Bahasa Banjar)
 * @author Riemogerz
 */
$messages['bjn'] = array(
	'attention' => 'Parhatian',
	'language' => 'Bahasa',
	'project' => 'Pruyik',
	'source_file' => 'Sumbar barakas',
	'target_file' => 'Tujuan barakas',
	'categories' => 'Tumbung',
	'new_filename' => 'Ngaran barakas hanyar:',
	'upload_submit' => 'Unggah',
	'target_wiki' => 'wiki targit',
	'error_only_commons' => 'Unggah karya sacara langsung di Wikimedia Commons haja!',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Nasir8891
 */
$messages['bn'] = array(
	'attention' => 'লক্ষ্য করুন',
	'description' => 'টুলটি উইকিমিডিয়া প্রকল্প থেকে উইকিমিডিয়া কমন্সে ফাইল স্থানান্তর করে',
	'jira_link' => 'কোন বৈশিষ্ট্য সম্পর্কে পরামর্শ দিতে বাগ রিপোর্ট করুন',
	'language' => 'ভাষা',
	'project' => 'প্রকল্প',
	'source_file' => 'উৎস ফাইল',
	'target_file' => 'লক্ষ্য ফাইল',
	'commons_username' => 'উইকিমিডিয়া কমন্স ব্যবহারকারীনাম',
	'commons_to_project' => 'উইকিমিডিয়া কমন্স থেকে প্রকল্পে',
	'move_file_from_com' => 'উইকিমিডিয়া কমন্স থেকে প্রকল্পে ফাইল স্থানান্তর করো',
	'categories' => 'বিষয়শ্রেণীসমূহ',
	'remove_cats' => 'বর্তমান বিষয়শ্রেণীসমূহ অপসারণ',
	'tusc_user' => 'TUSC ব্যবহারকারীনাম',
	'tusc_pass' => 'TUSC শব্দচাবি',
	'do_it' => 'সম্পন্ন করো',
	'error_transfer_usr' => 'আপনি উইকিমিডিয়া কমন্সের ব্যবহারকারী নাম প্রদান করেননি',
	'error_not_exists' => 'উৎস ফাইল পাওয়া যায়নি!',
	'error_on_commons' => 'সোর্স ফাইল পূর্বেই $1 এ রয়েছে',
	'error_file_exists' => 'ফাইল $3 এ ইতিমধ্যে "$1 $4 $2" হিসাবে বিদ্যমান!',
	'error_diff_exists' => 'ভিন্ন লক্ষ্য ফাইল একই নামের অধীনে লক্ষ্য উইকিতে বিদ্যমান!',
	'original_wikitext' => 'মূল উইকি টেক্সট',
	'new_wikitext' => 'নতুন উইকি টেক্সট',
	'new_filename' => 'নতুন ফাইলনাম:',
	'upload_submit' => 'আপলোড!',
	'target_wiki' => 'লক্ষ্য উইকি টেক্সট',
	'error_bot_blocked' => 'আপলোড বট উইকিমিডিয়া কমন্সে ব্লক করা হয়েছে।',
	'error_upload_meta' => 'মেটা ডাটায় সমস্যার কারণে সরাসরি আপলোড হচ্ছে না (উপরে দেখুন)!',
	'error_tusc_failed' => 'TUSC যাচাইকরণ ব্যর্থ!',
	'error_only_commons' => 'শুধুমাত্র উইকিমিডিয়া কমন্সে সরাসরি আপলোড কাজ করে!',
	'upload_control_text' => 'অনুগ্রহ করে নতুন উইকি টেক্সট পরীক্ষা করুন এবং "$1" এ ক্লিক করুন যদি সব ঠিক থাকে!',
	'error_commons_user' => 'স্থানান্তর ব্যবহারকারীকে চিহ্নিত করতে, বর্ণনায় আপনার উইকিমিডিয়া কমন্স ইউজারনেম থাকতে হবে!',
	'error_upload_users' => 'আপলোড ফাংশন শুধুমাত্র কিছু ব্যবহারকারীদের পরীক্ষার সময় পাওয়া যায়!',
	'error_upload_file' => 'মূল ফাইল ডাউনলোড করা যাবে না।',
	'help_mail' => '$1 কে ইমেইল পাঠান',
	'help_commons' => '$2 কমন্সে $1 একটি পোস্ট করেছেন',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'attention' => 'Diwallit',
	'description' => 'Un ostilh da dreuzkas restroù eus raktresoù Wikimedia war-du Wikimedia Commons',
	'change_meta' => 'Kemmañ $1ar rummad hag arventennoù ar patrom$2 evit $3',
	'jira_link' => 'Kas keloù eus un draen pe kinnig ur perzh heverk',
	'language' => 'Yezh',
	'project' => 'Raktres',
	'source_file' => 'Restr orin',
	'target_file' => 'Restr da vukañ',
	'commons_username' => 'Anv implijer evit Wikimedia Commons',
	'commons_to_project' => "Wikimedia Commons d'ar raktres",
	'move_file_from_com' => "Treuzkas a ra ar restr eus Wikimedia Commons d'ar raktres",
	'categories' => 'Rummadoù',
	'remove_cats' => 'Diverkañ a ra ar rummadoù zo anezho',
	'use_checkusage' => 'Implijout $1CommonSense$2 da ginnig rummadoù nevez',
	'use_tusc' => 'Implijout $1TUSC$2 da zilesañ ha da dreuzkas ar restr war-eeun',
	'tusc_user' => 'Anv implijer TUSC',
	'tusc_pass' => 'Ger-tremen TUSC',
	'do_it' => "Bec'h de'i",
	'error_transfer_usr' => "N'hoc'h eus ket termenet a anv implijer evit Wikimedia Commons",
	'error_not_exists' => "N'eus ket eus ar restr orin !",
	'error_on_commons' => 'Emañ ar restr orin war $1 dija !',
	'error_file_exists' => 'Bez\' ez eus c\'hoazh eus ar restr war $3 evel "$1$4$2" !',
	'error_diff_exists' => "Bez'ez eus c'hoazh eus ur restr da vukañ disheñvel war ar wiki da vukañ gant an hevelep anv !",
	'error_no_meta' => "N'eus ket bet kavet a vetaroadennoù evit ar wiki orin ! $1Ouzhpennit/hizivait ar vetaroadenn evit ar raktres$2",
	'error_meta_no_good' => "Metaroadennoù : n'eus ket bet kavet a batrom mat ! $1Ouzhpennit/hizivait ar vetaroadenn evit ar raktres$2",
	'error_meta_bad' => 'Metaroadennoù : patrom fall kavet ! $1Ouzhpennit/hizivait ar vetaroadenn evit ar raktres$2',
	'original_wikitext' => 'Wikitestenn orin',
	'new_wikitext' => 'Wikitestenn nevez',
	'new_filename' => 'Anv restr nevez :',
	'output_information' => 'Evit an enporzhiañ dre zorn, cheñchit an destenn a-us (mar bez ret), enrollit $1ar restr$2 war ho urzhiataer hag $3enporzhit anezhi$4',
	'upload_submit' => 'Enporzhiañ !',
	'target_wiki' => 'ar wiki buket',
	'error_bot_blocked' => 'Stanket eo ar robot enporzhiañ war Wikimedia Commons.',
	'error_upload_meta' => "N'eus ket bet gallet enporzhiañ war-eeun abalamour d'ur gudenn gant ar metaroadennoù (sellit a-us) !",
	'error_tusc_failed' => 'Fazi gwiriañ TUSC !',
	'error_only_commons' => "Ne'z a an enporzhiañ eeun en-dro nemet war Wikimedia Commons !",
	'upload_control_text' => 'Gwiriit ar wikitestenn nevez ha klikit war "$1" mard eo mat pep tra !',
	'error_commons_user' => "Evit anaout an implijer a gas an treuzkas da benn e rank hoc'h anv implijer evit Wikimedia Commons bezañ merket en deskrivadenn !",
	'error_upload_users' => "N'eo hegerz an arc'hwel enporzhiañ nemet evit implijerien zo e-pad ar prantad esae !",
	'error_upload_file' => "N'eus ket bet gallet pellgagañ ar restr orin.",
	'help_intro' => "Pa fell deoc'h kemenn deomp ur gudenn, ur welladenn pe sevel ur goulenn tra ken, e c'hellit implijout unan deus an doareoù da-heul :",
	'help_jira' => '$1JIRA (ur gont a rankit kaout)$2 (Raktres : Commonshelper2)',
	'help_mail' => 'Kas ur postel da $1',
	'help_commons' => '$1Ouzhpennañ ur gemennadenn war Commons$2',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'attention' => 'Atenció',
	'description' => 'Un instrument per a transferir fitxers des dels diferents projectes de Wikimedia a Wikimedia Commons',
	'change_meta' => 'Canvia la $1categoria i paràmetres de plantilla$2 per $3',
	'jira_link' => "Avisa d'un error o suggereix una característica",
	'language' => 'Idioma',
	'project' => 'Projecte',
	'source_file' => "Fitxer d'origen",
	'target_file' => 'Fitxer de destinació',
	'commons_username' => "Nom d'usuari de Wikimedia Commons",
	'commons_to_project' => 'De Wikimedia Commons al projecte',
	'move_file_from_com' => 'Trasllada el fitxer des de Wikimedia Commons cap al projecte',
	'categories' => 'Categories',
	'remove_cats' => 'Treu les categories existents',
	'use_checkusage' => 'Utilitza $1CommonSense$2 per suggerir noves categories',
	'use_tusc' => "Utilitza $1TUSC$2 per l'autenticació i transfereix el fitxer directament",
	'tusc_user' => "Nom d'usuari TUSC",
	'tusc_pass' => 'Contrasenya TUSC',
	'do_it' => 'Fes-ho',
	'error_transfer_usr' => "No heu establert un nom d'usuari de Wikimedia Commons",
	'error_not_exists' => "El fitxer d'origen no existeix!",
	'error_on_commons' => "El fitxer d'origen ja apareix a $1!",
	'error_file_exists' => 'El fitxer ja existeix a $3 com a «$1$4$2»!',
	'error_diff_exists' => 'Un altre fitxer existeix al wiki de destinació amb el mateix nom!',
	'error_no_meta' => "No s'han trobat les metadades del wiki d'origen! $1Si us plau, afegiu o actualitzeu les metadades pel projecte$2",
	'error_meta_no_good' => "Metadades: No s'han trobat bones plantilles! $1Si us plau, afegiu o actualitzeu les metadades pel projecte$2",
	'error_meta_bad' => "Metadades: S'ha trobat una mala plantilla! $1Si us plau, afegiu o actualitzeu les metadades pel projecte$2",
	'original_wikitext' => 'text wiki original',
	'new_wikitext' => 'nou text wiki',
	'new_filename' => 'Nou nom de fitxer:',
	'output_information' => 'Per carregar-ho manualment, modifiqueu el text anterior (si és necessari), deseu $1el fitxer$2 al vostre ordinador i $3carregueu-lo$4.',
	'upload_submit' => 'Carrega!',
	'target_wiki' => 'el wiki de destinació',
	'error_bot_blocked' => 'El bot per a fer la càrrega està blocat a Wikimedia Commons.',
	'error_upload_meta' => 'No es pot fer la càrrega directament perquè hi ha problemes amb les metadades (vegeu-ho a dalt)!',
	'error_tusc_failed' => 'Error amb la verificació TUSC!',
	'error_only_commons' => 'La càrrega directa només funciona a Wikimedia Commons!',
	'upload_control_text' => 'Comproveu el nou wikitext i feu clic a «$1» si tot és correcte.',
	'error_commons_user' => "Per a identificar l'usuari de la transferència, el vostre nom d'usuari de Wikimedia Commons ha d'estar a la descripció!",
	'error_upload_users' => 'La funció de càrrega només està disponible per alguns usuaris durant el període de prova!',
	'error_upload_file' => 'No es pot descarregar el fitxer original.',
	'help_intro' => "Quan vulgueu informar d'un error, suggerir una nova característica o posar una qüestió, podeu usar un dels següents mètodes de contacte:",
	'help_jira' => '$1JIRA (es necessita un compte)$2 al projecte Commonshelper2',
	'help_mail' => 'Envia un missatge de correu a $1',
	'help_commons' => '$1Afegeix un missatge a Commons$2',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'language' => 'Мотт',
	'new_filename' => 'Файлан керла цӀе:',
);

/** Sorani Kurdish (کوردی)
 * @author Muhammed taha
 */
$messages['ckb'] = array(
	'language' => 'زمان',
	'project' => 'پرۆژە',
	'source_file' => 'پەڕگەی سەرچاوە',
	'categories' => 'پۆلەكان',
	'upload_submit' => 'بارکرا!',
);

/** Czech (česky)
 * @author Jezevec
 * @author Jkjk
 * @author Vks
 */
$messages['cs'] = array(
	'attention' => 'Upozornění',
	'description' => 'Nástroj pro přenos souboru z projektů nadace Wikimedia na Wikimedia Commons',
	'change_meta' => 'Změnit $1nastavení kategorií a šablon$2 pro $3',
	'jira_link' => 'Nahlásit chybu nebo navrhnout funkce',
	'language' => 'Jazyk',
	'project' => 'Projekt',
	'source_file' => 'Zdrojový soubor',
	'target_file' => 'Cílový soubor',
	'commons_username' => 'Uživatelské jméno na Commons',
	'commons_to_project' => 'Z Commons na projekt',
	'move_file_from_com' => 'Přesune soubor z Wikimedia Commons na projekt',
	'categories' => 'Kategorie',
	'remove_cats' => 'Odstraní existující kategorie',
	'use_checkusage' => 'Použije $1CommonSense$2 pro navržení nových kategorií',
	'use_tusc' => 'Použije $1TUSC$2 pro ověření a samotný přenos souboru',
	'tusc_user' => 'uživatelské jméno (TUSC)',
	'tusc_pass' => 'heslo (TUSC)',
	'do_it' => 'Udělej to',
	'error_transfer_usr' => 'Nebylo zadáno uživatelské jméno na Wikimedia Commons',
	'error_not_exists' => 'Zdrojový soubor neexistuje!',
	'error_on_commons' => 'Zdrojový soubor už je na $1!',
	'error_file_exists' => 'Soubor již existuje na $3 jako "$1$4 $2"',
	'error_diff_exists' => 'Pod stejným jménem je na cílové wiki jiný soubor',
	'error_no_meta' => 'Nenalezena žádná metadata o zdrojové wiki! $1Prosím, přidejte/aktualizujte metadata pro projekt$2',
	'error_meta_no_good' => 'Metadata: Použitelné šablony nenalezeny. $1 řidat/aktualizovat metadata pro projekt$2',
	'error_meta_bad' => 'Metadata: Nalezeny špatné šablony nenalezeny. $1Přidat/aktualizovat metadata pro projekt$2',
	'original_wikitext' => 'Původní text wiki',
	'new_wikitext' => 'Nový text wiki',
	'new_filename' => 'Nový název souboru:',
	'output_information' => 'Pro ruční nahrávání upravte výše uvedený text (pokud je to potřeba), uložte $1soubor$2 do počítač a pak ho $3nahrajte$4 .',
	'upload_submit' => 'Nahrát!',
	'target_wiki' => 'cílová wiki',
	'error_bot_blocked' => 'Nahrávací bot je zablokován na Wikimedia Commons.',
	'error_upload_meta' => 'Není možné nahrát soubor přímo, protože je probém s metadaty (viz výše)!',
	'error_tusc_failed' => 'TUSC ověření se nezdařilo.',
	'error_only_commons' => 'Přímé nahrávaní funguje jen na Wikimedia Commons.',
	'upload_control_text' => 'Zkontrolujte nový wikitext a klepněte na "$1", pokud je vše v pořádku.',
	'error_commons_user' => 'Pro identifikaci uživatele, který provedl převod, musí být vaše uživatelské jméno na Commons v popisku.',
	'error_upload_users' => 'Funkci nahrávání je dostupná pouze pro některé uživatele během zkušebního období.',
	'error_upload_file' => 'Zdrojový soubor nelze stáhnout.',
	'help_intro' => 'Pokud chcete nahlásit chybu, navrhnout vylepšení nebo je na něco zeptat, můžete použít jeden z níže uvedených konkaktů:',
	'help_jira' => '$1JIRA (vyžaduje účet)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Poslat e-mail na $1',
	'help_commons' => '$1Přidat zprávu na Commons$2',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'language' => 'Чӗлхе',
	'project' => 'Проект',
	'source_file' => 'Кӑк файлӗ',
	'target_file' => 'Тӗллевлӗ файл',
	'do_it' => 'Куна ту',
	'new_wikitext' => 'Ҫӗнӗ вики-текст',
	'new_filename' => 'Ҫӗнӗ файл ячӗ:',
	'upload_submit' => 'Тиесе яр!',
	'help_mail' => '$1 патне ҫыру яр',
);

/** Danish (dansk)
 * @author Christian List
 * @author Peter Alberti
 */
$messages['da'] = array(
	'attention' => 'Bemærk',
	'description' => 'Et værktøj til at overføre filer fra Wikimedia projekter til Wikimedia Commons',
	'change_meta' => 'Ændring af $1kategori og skabelonindstillinger$2 for $3',
	'jira_link' => 'Rapporter en fejl eller foreslå en funktion',
	'language' => 'Sprog',
	'project' => 'Projekt',
	'source_file' => 'Kildefil',
	'target_file' => 'Destinationsfil',
	'commons_username' => 'Brugernavn på Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons til projekt',
	'move_file_from_com' => 'Flyt fil fra Wikimedia Commons til projekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Fjern eksisterende kategorier',
	'use_checkusage' => 'Brug $1CommonSense$2 til at foreslå nye kategorier',
	'use_tusc' => 'Brug $1TUSC$2 til at godtgøre din identitet og overføre filen direkte',
	'tusc_user' => 'TUSC brugernavn',
	'tusc_pass' => 'TUSC adgangskode',
	'do_it' => 'Gør det',
	'error_transfer_usr' => 'Du har ikke angivet et Wikimedia Commons brugernavn',
	'error_not_exists' => 'Kildefilen findes ikke!',
	'error_on_commons' => 'Kildefilen er allerede på $1!',
	'error_file_exists' => 'Filen findes allerede på $3 som "$1$4$2"!',
	'error_diff_exists' => 'En anden fil med samme navn findes allerede på destinationswikien!',
	'error_no_meta' => 'Ingen metadata fundet om kildewikien! $1Vær venlig at tilføje/opdatere metadataene for projektet$2',
	'error_meta_no_good' => 'Metadata: Ingen gode skabeloner fundet! $1Vær venlig at tilføje/opdatere metadataene for projektet$2',
	'error_meta_bad' => 'Metadata: Problematisk skabelon fundet! $1Vær venlig at tilføje/opdatere metadataene for projektet$2',
	'original_wikitext' => 'Oprindelig wikitekst',
	'new_wikitext' => 'Ny wikitekst',
	'new_filename' => 'Nyt filnavn:',
	'output_information' => 'For at uploade manuelt, rediger teksten ovenfor (om nødvendigt), gem $1filen$2 på din computer, og $3upload den$4.',
	'upload_submit' => 'Upload!',
	'target_wiki' => 'destinationswikien',
	'error_bot_blocked' => 'Upload-botten er blokeret på Wikimedia Commons.',
	'error_upload_meta' => 'Kan ikke overføre direkte, fordi der er problemer med metadata (se ovenfor)!',
	'error_tusc_failed' => 'TUSC verifikation mislykkedes!',
	'error_only_commons' => 'Direkte upload fungerer kun på Wikimedia Commons!',
	'upload_control_text' => 'Tjek venligst den nye wikitekst og klik på "$1" hvis alt er OK!',
	'error_commons_user' => 'Dit Wikimedia Commons brugernavn skal være i beskrivelsen, så brugeren, der udførte overførslen, kan identificeres!',
	'error_upload_users' => 'Uploadfunktionen er kun tilgængelig for nogle brugere i forsøgsperioden!',
	'error_upload_file' => 'Den originale fil kan ikke hentes.',
	'help_intro' => 'Hvis du vil melde en fejl, foreslå ny funktionalitet eller stille et spørgsmål, kan du bruge en af nedenstående metoder:',
	'help_jira' => '$1JIRA (du skal bruge en konto)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Send en e-mail til $1',
	'help_commons' => '$1Tilføj et indlæg på Commons$2',
);

/** German (Deutsch)
 * @author Jan Luca
 * @author Kghbln
 * @author Purodha
 */
$messages['de'] = array(
	'attention' => 'Achtung',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'Ein Hilfsprogramm, um Dateien von einzelnen Wikimedia-Projekten nach Wikimedia Commons zu übertragen',
	'change_meta' => 'Die $1Kategorien- und Vorlageneinstellungen$2 für $3 ändern',
	'jira_link' => 'Einen Fehler melden oder eine Funktion wünschen',
	'language' => 'Sprache',
	'project' => 'Projekt',
	'source_file' => 'Quelldatei',
	'target_file' => 'Zieldatei',
	'commons_username' => 'Benutzername auf Wikimedia Commons',
	'commons_to_project' => 'Von Wikimedia Commons zum Wikimedia-Projekt',
	'move_file_from_com' => 'Die Datei von Wikimedia Commons zum Wikimedia-Projekt verschieben',
	'categories' => 'Kategorien',
	'remove_cats' => 'Die vorhandenen Kategorien entfernen',
	'checkusage' => 'Dateiverwendung prüfen',
	'use_checkusage' => '$1CommonSense$2 nutzen, um neue Kategorien vorgeschlagen zu bekommen',
	'use_tusc' => '$1TUSC$2 nutzen, um dich direkt zu authentifizieren und die Datei zu übertragen',
	'tusc_user' => 'Benutzername bei TUSC',
	'tusc_pass' => 'Passwort bei TUSC',
	'do_it' => 'Ausführen',
	'error_transfer_usr' => 'Es wurde kein Benutzername für Wikimedia Commons festgelegt',
	'error_not_exists' => 'Die Quelldatei ist nicht vorhanden.',
	'error_on_commons' => 'Die Quelldatei ist bereits auf $1 vorhanden.',
	'error_file_exists' => 'Die Datei ist bereits auf $3 als „$1$4$2“ vorhanden.',
	'error_diff_exists' => 'Eine andere Datei gleichen Namens ist bereits auf den Zielwiki vorhanden.',
	'error_no_meta' => 'Zum Quellwiki wurden keine Metadaten gefunden. $1Bitte die Metadaten hinzufügen/aktualisieren$2',
	'error_meta_no_good' => 'Metadaten: Es wurden keine nutzbaren Vorlagen gefunden. $1Link zu den Metadaten$2',
	'error_meta_bad' => 'Metadaten: Es wurde eine unbrauchbare Vorlage gefunden. $1Bitte die Metadaten des Projekts hinzufügen/aktualisieren$2',
	'original_wikitext' => 'Beschreibung auf dem ursprünglichen Wiki',
	'new_wikitext' => 'Neue Beschreibung',
	'new_filename' => 'Neuer Dateiname:',
	'output_information' => 'Zum manuellen Hochladen, sofern notwendig, bitte den obenstehenden Text bearbeiten, $1die Datei$2 auf dem lokalen Rechner speichern und sie dann $3hochladen$4.',
	'upload_submit' => 'Hochladen',
	'target_wiki' => 'Das Zielwiki',
	'error_bot_blocked' => 'Der Bot zum Hochladen ist auf Wikimedia Commons gesperrt.',
	'error_upload_meta' => 'Es kann nicht direkt hochgeladen werden, da es Probleme mit den Metadaten gibt (siehe oben).',
	'error_tusc_failed' => 'Die TUSC-Prüfung ist fehlgeschlagen.',
	'error_only_commons' => 'Das direkte Hochladen funktioniert nur bei Wikimedia Commons.',
	'upload_control_text' => 'Bitte die neue Beschreibung prüfen und auf „$1“ klicken, sofern alles in Ordnung ist.',
	'error_commons_user' => 'Um den Benutzer identifizieren zu können, der die Übertragung vornimmt, muss der Beschreibung dein Benutzername auf Wikimedia Commons hinzugefügt werden.',
	'error_upload_users' => 'Die Funktion zum Hochladen ist während der Testphase nur für bestimmte Benutzer verfügbar.',
	'error_upload_file' => 'Die Quelldatei kann nicht heruntergeladen werden.',
	'help_intro' => 'Sofern du einen Softwarefehler melden bzw. eine neue Funktion vorschlagen möchtest oder eine Frage hast, kannst du eine der nachfolgend angegebene Kontaktmöglichkeiten nutzen:',
	'help_jira' => '$1JIRA (Du benötigst ein Konto)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Eine E-Mail an $1 senden',
	'help_commons' => '$1Eine Nachricht auf Commons hinterlassen$2',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'error_commons_user' => 'Um den Benutzer identifizieren zu können, der die Übertragung vornimmt, muss der Beschreibung Ihr Benutzername auf Wikimedia Commons hinzugefügt werden.',
	'help_intro' => 'Sofern Sie einen Softwarefehler melden bzw. eine neue Funktion vorschlagen möchten oder eine Frage haben, können Sie eine der nachfolgend angegebene Kontaktmöglichkeiten nutzen:',
	'help_jira' => '$1JIRA (Sie benötigen ein Konto)$2 (Projekt: Commonshelper2)',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'attention' => 'Diqet',
	'language' => 'Zıwan',
	'project' => 'Proce',
	'source_file' => 'Çıme dosya',
	'target_file' => 'Hedef dosya',
	'commons_username' => 'Namey karber dê Wikimedia Commonsi',
	'commons_to_project' => 'Proceyê Wikimedia Commonsi',
	'categories' => 'Kategoriy',
	'tusc_user' => 'TUSC namey qarwani',
	'tusc_pass' => 'Parolay TUSC',
	'do_it' => 'Bıke',
	'error_not_exists' => 'Çıme dosya çıniya!',
	'error_on_commons' => 'Çıme dosyay wanayışê  $1!',
	'original_wikitext' => 'Orcinal metne wiki',
	'new_wikitext' => 'wiki metino newe',
	'new_filename' => 'Newe namey dosya:',
	'upload_submit' => 'Bar ke!',
	'target_wiki' => 'Menzil wiki',
	'help_mail' => 'Adres de $1 rê e-posta bırşê',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'attention' => 'Glědaj',
	'description' => 'Rěd za pśenošowanje datajow z Wikimedijowych projektow do Wikipedia Commons',
	'change_meta' => '$1Nastajenja za kategorije a pśedłogi$2 za $3 změniś',
	'jira_link' => 'Zmólku k wěsći daś abo funkciju žycyś',
	'language' => 'Rěc',
	'project' => 'Projekt',
	'source_file' => 'Žrědłowa dataja',
	'target_file' => 'Celowa dataja',
	'commons_username' => 'Wužywarske mě na Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons k projektoju',
	'move_file_from_com' => 'Dataju z Wikimedia Commons do projekta pśesunuś',
	'categories' => 'Kategorije',
	'remove_cats' => 'Eksistěrujuce kategorije wótpóraś',
	'use_checkusage' => 'Wužyj $1CommonSense$2, aby nowe kategorije naraźił',
	'use_tusc' => 'Wužyj $1TUSC$2, aby dataju direktnje awtentificěrował a pśenošował',
	'tusc_user' => 'TUSC - wužywarske mě',
	'tusc_pass' => 'TUSC-gronidło',
	'do_it' => 'Wuwjasć',
	'error_transfer_usr' => 'Njejsy žedno wužywarske mě za Wikimedia Commons póstajił',
	'error_not_exists' => 'Žrědłowa dataja njeeksistěrujo!',
	'error_on_commons' => 'Žrědłowa dataja eksistěrujo južo na $1!',
	'error_file_exists' => 'Dataja eksistěrujo južo na $3 ako "$1$4$2"!',
	'error_diff_exists' => 'Na celowem wikiju rozdźělna celowa dataja eksistěrujo pód tym samym mjenim!',
	'error_no_meta' => 'Žedne metadaty wó žrědłowem wikiju njenamakane! $1Pšosym pśidaj/zaktualizěruj metadaty za projekt$2',
	'error_meta_no_good' => 'Metadaty: Žedne dobre pśedłogi njenamakane! $1Pšosym pśidaj/zaktualizěruj metadaty za projekt$2',
	'error_meta_bad' => 'Metadaty: Špatna pśedłoga njenamakana! $1Pšosym pśidaj/zaktualizěruj metadaty za projekt$2',
	'original_wikitext' => 'Spócetny wikitekst',
	'new_wikitext' => 'Nowy wikitekst',
	'new_filename' => 'Nowe datajowe mě:',
	'output_information' => 'Za manuelne nagraśe, wobźěłaj tekst górjejce (jolic to jo trěbne), składuj $1dataju$2 na swójom licadle a $3nagraj ju$4 pótom.',
	'upload_submit' => 'Nagraś!',
	'target_wiki' => 'celowy wiki',
	'error_bot_blocked' => 'Nagrawański bot jo na Wikimedia Commons zablokěrowany.',
	'error_upload_meta' => 'Direktne nagraśe njejo móžno, dokulaž jo problem z metadatami (glědaj górjejce)!',
	'error_tusc_failed' => 'TUSC-pśeglědanje jo se njeraźiło!',
	'error_only_commons' => 'Direktne nagraśe funkcioněrujo jano na Wikimedia Commons!',
	'upload_control_text' => 'Pśosym pśeglědaj nowy wikitekst a klikni na "$1", joli wšykno jo w pórěźe!',
	'error_commons_user' => 'Aby pśenošowańskego wužywarja identificěrował, musy twójo wužywarske mě za Wikimedia Commons we wopisanju byś!',
	'error_upload_users' => 'Nagrawańska funkcija stoj jano někotarym wužywarjam za testowu periodu k dispoziciji!',
	'error_upload_file' => 'Originalna dataja njedajo se ześěgnuś.',
	'help_intro' => 'Jolic coš zmólku k wěsći daś, funkciju naraźiś abo jolic maš pšašanje, móžoš jaden ze slědujucych kontaktowych typow wužywaś:',
	'help_jira' => '$1JIRA (trjebaš konto)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'E-mail na $1 pósłaś',
	'help_commons' => '$1Powěsć na Commons zawóstajiś$2',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Glavkos
 */
$messages['el'] = array(
	'attention' => 'Προσοχή',
	'description' => 'Ένα εργαλείο για τη μεταφορά αρχείων από τα εγχειρήματα του Wikimedia στα Κοινά',
	'jira_link' => 'Αναφέρετε ένα σφάλμα ή να προτείνετε ένα χαρακτηριστικό',
	'language' => 'Γλώσσα',
	'project' => 'Έργο',
	'source_file' => 'Αρχείο προέλευσης',
	'target_file' => 'Αρχείο προορισμού',
	'commons_username' => 'Όνομα χρήστη στο Wikimedia Commons',
	'commons_to_project' => 'από τα Κοινά στο εγχείρημα',
	'move_file_from_com' => 'Μετακίνηση αρχείου από τα Wikimedia Commons στο εγχείρημα',
	'categories' => 'Κατηγορίες',
	'remove_cats' => 'Απομάκρυνση υπαρχουσών κατηγοριών',
	'use_checkusage' => 'Χρησιμοποιήστε το $1CommonSense$2 για να προτείνει νέες κατηγορίες',
	'use_tusc' => 'Χρησιμοποιήστε το $1TUSC$2 για πιστοποίηση και άμεση μεταφορά του αρχείου',
	'tusc_user' => 'όνομα χρήστη TUSC',
	'tusc_pass' => 'κωδικός TUSC',
	'do_it' => 'Κάντο',
	'error_transfer_usr' => 'Δεν έχετε ορίσει ένα όνομα χρήστη στο Wikimedia Commons',
	'error_not_exists' => 'Το αρχείο προέλευσης δεν υπάρχει!',
	'error_on_commons' => 'Το αρχείο προέλευσης υπάρχει ήδη στο  $1!',
	'error_file_exists' => 'Το αρχείο υπάρχει ήδη στο $3 ως "$1$4$2"!',
	'original_wikitext' => 'Αρχικό κείμενο wiki',
	'new_wikitext' => 'Νέο κείμενο wiki',
	'new_filename' => 'Νέο όνομα αρχείου:',
	'upload_submit' => 'Φόρτωση!',
	'target_wiki' => 'το wiki προορισμού',
	'error_upload_file' => 'Το αρχικό αρχείο δεν μπορεί να ληφθεί.',
	'help_mail' => 'Αποστείλατε email στο $1',
	'help_commons' => '$1Προσθέστε μια ανάρτηση στα Commons$2',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Objectivesea
 * @author Yekrats
 */
$messages['eo'] = array(
	'attention' => 'Atentu',
	'description' => 'Ilo por transloki dosierojn el vikimediajn projektojn al Vikimedia Komunejo',
	'change_meta' => 'Ŝanĝu la $agordojn de kategorioj kaj ŝablonoj$2 por $3', # Fuzzy
	'language' => 'Lingvo',
	'project' => 'Projekto',
	'source_file' => 'Fonta dosiero',
	'target_file' => 'Cela dosiero',
	'commons_username' => 'Uzantnomo je Vikimedia Komunejo',
	'commons_to_project' => 'Vikimedia Komunejo al projekto',
	'move_file_from_com' => 'Transloku dosieron el Vikimedia Komunejo al projekto',
	'categories' => 'Kategorioj',
	'remove_cats' => 'Forigi ekzistantajn kategoriojn',
	'use_checkusage' => 'Uzu $1CommonSense$2-on por proponi novajn kategoriojn',
	'use_tusc' => 'Uzu $1TUSC$2-on por kontroli kaj transloki rekte la dosieron',
	'tusc_user' => 'Salutnomo de TUSC',
	'tusc_pass' => 'Pasvorto de TUSC',
	'do_it' => 'Faru',
	'error_transfer_usr' => 'Vi ne elektis uzantnomon pri la Vikimedia Komunumo',
	'error_not_exists' => 'Fonta dosiero ne ekzistas!',
	'error_on_commons' => 'Fonta dosiero jam estas en $1!',
	'error_file_exists' => 'La dosiero jam ekzistas en $3 kiel "$1$4$2"!',
	'error_diff_exists' => 'La diferenca celdosiero kun sama nomo ekzistas en la celvikio!',
	'original_wikitext' => 'Originala vikiteksto',
	'new_wikitext' => 'Nova vikiteksto',
	'new_filename' => 'Nova dosier-nomo:',
	'upload_submit' => 'Alŝuti!',
	'target_wiki' => 'la cela vikio',
	'error_bot_blocked' => 'Alŝutroboto estas malpermesita en Vikimedia Komunejo.',
	'error_tusc_failed' => 'Kontrolo de TUSC nefaris!',
	'error_only_commons' => 'Rekte alŝutu verkojn nur en Vikimedia Komunejo!',
	'help_mail' => 'Sendi retpoŝton al $1',
	'help_commons' => '$1Aldoni afiŝo en Komunejo$2',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Dalton2
 * @author Fitoschido
 * @author Platonides
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'attention' => 'Atención',
	'description' => 'Una herramienta para transferir archivos de proyectos Wikimedia a Wikimedia Commons',
	'change_meta' => 'Cambiar $1category y las configuraciones de plantilla $2 a $3',
	'jira_link' => 'Informar de un fallo o sugerir una función',
	'language' => 'Idioma',
	'project' => 'Proyecto',
	'source_file' => 'Archivo origen',
	'target_file' => 'Archivo de destino',
	'commons_username' => 'Nombre de usuario de Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons a proyecto',
	'move_file_from_com' => 'Trasladar un archivo de Wikimedia Commons al proyecto',
	'categories' => 'Categorías',
	'remove_cats' => 'Quitar categorías existentes',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Usa $1CommonSense$2 para sugerir nuevas categorías',
	'use_tusc' => 'Usa $1TUSC$2 para autenticarte y transferir el archivo directamente',
	'tusc_user' => 'Usuario de TUSC',
	'tusc_pass' => 'Contraseña de TUSC',
	'do_it' => 'Hacerlo',
	'error_transfer_usr' => 'No ha definido un nombre de usuario de Wikimedia Commons',
	'error_not_exists' => 'El archivo de origen no existe.',
	'error_on_commons' => 'El archivo de origen ya se encuentra en $1.',
	'error_file_exists' => 'El archivo ya existe en $3 como «$1$4$2».',
	'error_diff_exists' => '¡Un archivo de destino diferente existe en el wiki de destino con el mismo nombre!',
	'error_no_meta' => 'No se encontraron metadatos del wiki de origen. $1Añade/actualiza los metadatos del proyecto$2',
	'error_meta_no_good' => 'Metadatos: ¡No se hallaron plantillas buenas! $1Por favor agregar/actualizar los metadatos para el proyecto$2',
	'error_meta_bad' => 'Metadatos: Se encontró una plantilla inadecuada. $1Añade/actualiza los metadatos para el proyecto$2',
	'original_wikitext' => 'Texto original de wiki',
	'new_wikitext' => 'Nuevo texto de wiki',
	'new_filename' => 'Nuevo nombre de archivo:',
	'output_information' => 'Para la carga manual, edita el texto anterior (si es necesario), guarda $1el archivo$2 en tu equipo, luego $3cárgalo$4.',
	'upload_submit' => '¡Subir!',
	'target_wiki' => 'el wiki de destino',
	'error_bot_blocked' => 'El bot de carga está bloqueado en Wikimedia Commons.',
	'error_upload_meta' => 'No se puede cargar directamente porque hay un problema con los metadatos (véase más arriba).',
	'error_tusc_failed' => 'Error de verificación de TUSC',
	'error_only_commons' => 'La carga directa funciona solo en Wikimedia Commons.',
	'upload_control_text' => 'Comprueba el nuevo texto wiki y haz clic en «$1» si todo está bien.',
	'error_commons_user' => 'Para identificar al usuario de transferencia, tu nombre de usuario de Wikimedia Commons tiene que estar en la descripción.',
	'error_upload_users' => 'La función de carga solo está disponible para algunos usuarios durante el período de prueba.',
	'error_upload_file' => 'No se puede descargar el archivo original.',
	'help_intro' => 'Si desea informar de un error, sugerir una nueva característica o realizar una pregunta, puedes usar una de las siguientes formas de contacto:',
	'help_jira' => '$1A través de JIRA (necesita una cuenta)$2  (proyecto: Commonshelper2)',
	'help_mail' => 'Enviando un correo electrónico a $1',
	'help_commons' => '$1Dejando un mensaje en Commons$2',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'attention' => 'Tähelepanu',
	'description' => 'Teistest Wikimedia projektidest failide Wikimedia Commonsisse edastamise tööriist',
	'change_meta' => 'Muuda viki $3 jaoks $1kategooriate ja mallide sätteid$2',
	'jira_link' => 'Teata veast või soovita funktsiooni',
	'language' => 'Keel',
	'project' => 'Projekt',
	'source_file' => 'Lähtefail',
	'target_file' => 'Sihtfail',
	'commons_username' => 'Wikimedia Commonsi kasutajanimi',
	'commons_to_project' => 'Wikimedia Commonsist projekti',
	'move_file_from_com' => 'Teisalda fail Wikimedia Commonsist teise projekti',
	'categories' => 'Kategooriad',
	'remove_cats' => 'Eemalda olemasolevad kategooriad',
	'use_checkusage' => "Kasuta $1CommonSense$2'i, et soovitada uusi kategooriaid",
	'use_tusc' => 'Kasuta $1TUSC$2-i, et autentida ja edastada fail otse',
	'tusc_user' => 'TUSC-kasutajanimi',
	'tusc_pass' => 'TUSC-parool',
	'do_it' => 'Tee seda',
	'error_transfer_usr' => 'Sa pole määranud Wikimedia Commonsi kasutajanime',
	'error_not_exists' => 'Lähtefaili pole olemas!',
	'error_on_commons' => 'Lähtefail on juba võrgukohas $1!',
	'error_file_exists' => 'Fail on võrgukohas $3 juba olemas nimega "$1$4$2"!',
	'error_diff_exists' => 'Sihtvikis on juba olemas sama nimega sihtfailist erinev fail!',
	'error_no_meta' => 'Lähteviki kohta ei leidu metaandmeid. $1Palun lisa projektile metaandmed või uuenda neid$2',
	'error_meta_no_good' => 'Metaandmed: Sobivat malli ei leidu! $1Palun lisa projektile metaandmed või uuenda neid$2',
	'error_meta_bad' => 'Metaandmed: Leiti sobimatu mall! $1Palun lisa projektile metaandmed või uuenda neid$2',
	'original_wikitext' => 'Algupärane vikitekst',
	'new_wikitext' => 'Uus vikitekst',
	'new_filename' => 'Uus failinimi:',
	'output_information' => 'Et käsitsi üles laadida, redigeeri ülalolevat teksti (kui vaja), salvesta $1fail$2 oma arvutisse ja seejärel $3laadi see üles$4.',
	'upload_submit' => 'Laadi üles!',
	'target_wiki' => 'sihtviki',
	'error_bot_blocked' => 'Üleslaadimisrobot on Wikimedia Commonsis blokeeritud.',
	'error_upload_meta' => 'Ei saa laadida otse, sest ilmnes probleem metaandmetes (vt eespool)!',
	'error_tusc_failed' => 'TUSC-kontroll ebaõnnestus!',
	'error_only_commons' => 'Otse üleslaadimine töötab ainult Wikimedia Commonsis!',
	'upload_control_text' => 'Palun kontrolli uut vikiteksti ja klõpsa "$1", kui kõik on korras.',
	'error_commons_user' => 'Et edastanud kasutaja kindlaks teha, peab sinu Wikimedia Commonsi kasutajanimi olema kirjelduses!',
	'error_upload_users' => 'Katseajal on saavad üleslaadimisfunktsiooni kasutada vaid mõned kasutajad.',
	'error_upload_file' => 'Algset faili ei saa alla laadida.',
	'help_intro' => 'Kui tahad teatada veast, uut funktsiooni soovitada või küsimuse esitada, saad ühendust võtta ühel järgnevatest viisidest:',
	'help_jira' => '$1JIRA (tarvis kontot)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Saada e-kiri aadressile $1',
	'help_commons' => '$1Lisa sõnum Commonsisse$2',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'attention' => 'Erne',
	'description' => 'Wikimedia proiektuetatik Wikimedia Commonsera fitxategiak pasatzeko tresna',
	'jira_link' => 'Akatsa jakinarazi edo ezaugarri bat iradoki',
	'language' => 'Hizkuntza',
	'project' => 'Proiektua',
	'source_file' => 'Jatorrizko fitxategia',
	'target_file' => 'Helburu fitxategia',
	'commons_username' => 'Wikimedia Commonseko erabiltzaile izena',
	'categories' => 'Kategoriak',
	'remove_cats' => 'Kendu existitzen diren kategoriak',
	'tusc_user' => 'TUSC erabiltzaile izena',
	'tusc_pass' => 'TUSC pasahitza',
	'do_it' => 'Egin',
	'error_not_exists' => 'Jatorrizko fitxategia ez da existitzen!',
	'original_wikitext' => 'Jatorrizko wiki testua',
	'new_wikitext' => 'Wiki testu berria',
	'new_filename' => 'Fitxategiaren izen berria:',
	'upload_submit' => 'Igo!',
	'error_tusc_failed' => 'TUSC baieztapenak huts egin du!',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Mjbmr
 * @author Omidh
 * @author Reza1615
 */
$messages['fa'] = array(
	'attention' => 'توجه',
	'description' => 'یک ابزار برای انتقال پرونده‌ها از پروژه‌های ویکی‌مدیا به ویکی‌انبار',
	'change_meta' => 'تغییر $1category و تنظیمات الگوی$2 برای $3',
	'jira_link' => 'گزارش یک اشکال یا پیشنهاد یک ویژگی',
	'language' => 'زبان',
	'project' => 'پروژه',
	'source_file' => 'پرونده منبع',
	'target_file' => 'پرونده مقصد',
	'commons_username' => 'نام کاربری ویکی‌انبار',
	'commons_to_project' => 'ویکی‌انبار به پروژه',
	'move_file_from_com' => 'انتقال پرونده از ویکی‌انبار به پروژه',
	'categories' => 'رده‌ها',
	'remove_cats' => 'حذف رده‌های موجود',
	'use_checkusage' => 'استفاده از $1CommonSense$2 برای پیشنهاد رده‌های جدید',
	'use_tusc' => 'استفاده از $1TUSC$2 برای تأیید و انتقال مستقیم پرونده',
	'tusc_user' => 'نام کاربری TUSC',
	'tusc_pass' => 'گذرواژهٔ TUSC',
	'do_it' => 'انجامش بده',
	'error_transfer_usr' => 'شما نام کاربری ویکی‌انبار را تنظیم نکرده‌اید',
	'error_not_exists' => 'پرونده منبع وجود ندارد!',
	'error_on_commons' => 'پرونده منبع در حال حاضر در $1!',
	'error_file_exists' => 'پرونده در حال حاضر در $3 به عنوان «$1$4$2» وجود دارد!',
	'error_diff_exists' => 'یک پروندهٔ مقصد متفاوت در ویکی مقصد تحت نام مشابه موجود است!',
	'error_no_meta' => 'هیچ فراداده‌ای دربارهٔ ویکی منبع یافت نشده! $1لطفاً فراداده برای پروژه اضافه/به‌روزکنید$2',
	'error_meta_no_good' => 'فراداده: الگوهای خوبی یافت نشد! $1لطفاً فرادادهٔ پروژه را اضافه/به‌روز کنید$2',
	'error_meta_bad' => 'فراداده: الگوی بدی یافت شد! $1لطفاً فرادادهٔ پروژه را اضافه/به‌روز کنید$2',
	'original_wikitext' => 'متن اصلی ویکی',
	'new_wikitext' => 'متن جدید ویکی',
	'new_filename' => 'نام پروندهٔ جدید:',
	'output_information' => 'برای بارگذاری دستی، متن بالا را ویرایش کنید (اگر نیاز است)، $1پرونده$2 را در رایانه‌یتان ذخیره کنید، سپس $3بارگذاری‌اش کنید$4.',
	'upload_submit' => 'بارگذاری!',
	'target_wiki' => 'ویکی مقصد',
	'error_bot_blocked' => 'ربات بارگذاری در ویکی‌انبار بسته شده‌است.',
	'error_upload_meta' => 'نمی‌تواند مستقیم بارگذاری کنید کند به این دلیل که مشکلاتی با فراداده موجود است (زیر را ببینید)!',
	'error_tusc_failed' => 'بازبینی TUSC شکست خورد!',
	'error_only_commons' => 'بارگذاری مستقیم فقط در ویکی‌انبار کار می‌کند!',
	'upload_control_text' => 'لطفاً متن جدید ویکی را بررسی کنید و «$1» را کلیک اگر همه چیز صحیح بود!',
	'error_commons_user' => 'برای شناسایی انتقال کاربر، نام کاربری ویکی‌انبار شما می‌بایست در توضیحات باشد!',
	'error_upload_users' => 'عملکرد بارگذاری فقط برای بعضی از کاربران در طول مدت آزمایشی موجود است!',
	'error_upload_file' => 'پروندهٔ اصلی نمی‌تواند بارگیری شود.',
	'help_intro' => 'برای اعلام پیشنهاد یا مشکلات نرم‌افزار از یکی از تماس‌های زیر استفاده کنید:',
	'help_jira' => '$1JIRA (نیاز مند به اشتراک)$2 (Project: Commonshelper2)',
	'help_mail' => 'ارسال پست الکترونیکی به $1',
	'help_commons' => '$1 یک پست در ویکی‌انبار اضافه کرد $2',
);

/** Finnish (suomi)
 * @author Avjoska
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'attention' => 'Huomio',
	'description' => 'Työkalu tiedostojen siirtoon Wikimedian projekteista Wikimedia Commonsiin',
	'change_meta' => 'Vaihda wikin $3 $1luokka- ja mallineasetuksia$2',
	'jira_link' => 'Ilmoita virheestä tai ehdota uutta ominaisuutta',
	'language' => 'Kieli',
	'project' => 'Projekti',
	'source_file' => 'Lähdetiedosto',
	'target_file' => 'Kohdetiedosto',
	'commons_username' => 'Kasutajanimi Wikimedia Commonsis',
	'commons_to_project' => 'Wikimedia Commonsista projektiin',
	'move_file_from_com' => 'Siirrä tiedosto Wikimedia Commonsista toiseen projektiin',
	'categories' => 'Luokat',
	'remove_cats' => 'Poista nykyiset luokat',
	'use_checkusage' => 'Käytä $1CommonSenseä$2 ehdottamaan uusia luokkia',
	'use_tusc' => 'Käytä $1TUSC:ia$2 tunnistautumiseen ja tiedoston siirtämiseen suoraan',
	'tusc_user' => 'TUSC-käyttäjätunnus',
	'tusc_pass' => 'TUSC-salasana',
	'do_it' => 'Aloita',
	'error_transfer_usr' => 'Et ole asettanut Wikimedia Commonsin käyttäjätunnusta',
	'error_not_exists' => 'Lähdetiedostoa ei löydy!',
	'error_on_commons' => 'Lähdetiedosto on jo $1!',
	'error_file_exists' => 'Tiedosto löytyy jo wikistä $3 nimellä "$1$4$2"!',
	'error_diff_exists' => 'Eri kohdetiedosto löytyy kohdewikistä samalla nimellä!',
	'error_no_meta' => 'Lähdewikille ei löytynyt meta-tietoja! $1Ole hyvä ja lisää/päivitä projektin metatiedot$2',
	'error_meta_no_good' => 'Metatiedot: Hyviä mallineita ei löytynyt! $1Ole hyvä ja lisää/päivitä tämän projektin metatiedot$2',
	'error_meta_bad' => 'Metatiedot: Kelpaamaton malline löytyi! $1Ole hyvä ja lisää/päivitä tämän projektin metatiedot$2',
	'original_wikitext' => 'Alkuperäinen wikiteksti',
	'new_wikitext' => 'Uusi wikiteksti',
	'new_filename' => 'Uusi tiedostonimi:',
	'output_information' => 'Tallentaaksesi tiedoston itse, muokkaa yllä olevaa tekstiä (jos tarpeen), $1tallenna tiedosto$2 tietokoneellesi ja sitten $3tallenna se projektiin$4.',
	'upload_submit' => 'Tallenna!',
	'target_wiki' => 'kohdewiki',
	'error_bot_blocked' => 'Latausbotti on estetty Wikimedia Commonsissa.',
	'error_upload_meta' => 'Suora lataus epäonnistui, koska metatietojen kanssa oli ongelmia (katso yllä)!',
	'error_tusc_failed' => 'TUSC-vahvistus epäonnistui!',
	'error_only_commons' => 'Suora lataus toimii vain Wikimedia Commonsissa!',
	'upload_control_text' => 'Tarkista uusi wikiteksti ja napsauta "$1" jos kaikki on ok!',
	'error_commons_user' => 'Jotta siirtänyt käyttäjä voidaan tunnistaa, Wikimedia Commons -käyttäjätunnuksesi täytyy olla kuvauksessa!',
	'error_upload_users' => 'Lataustoiminto on saatavilla vain joillekin käyttäjille testijakson aikana!',
	'error_upload_file' => 'Alkuperäistä tiedostoa ei voida ladata.',
	'help_intro' => 'Jos haluat ilmoittaa ohjelmavirheestä, ehdottaa ominaisuutta tai sinulla on kysymys, voit käyttää jotakin allaolevista yhteydenottotavoista:',
	'help_jira' => '$1JIRA (tarvitset tilin)$2 (Projekti: Commonshelper2)',
	'help_mail' => 'Lähetä sähköpostia osoitteeseen $1',
	'help_commons' => '$1Lisää viesti Commonsiin$2',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'attention' => 'Legg til merkis',
	'description' => 'Eitt tók til at flyta fílur frá Wikimedia verkætlanum til Wikimedia Commons',
	'language' => 'Mál',
	'project' => 'Verkætlan',
	'source_file' => 'Keldufíla',
	'commons_username' => 'Wikimedia Commons brúkaranavn',
	'commons_to_project' => 'Wikimedia Commons til verkætlanina',
	'move_file_from_com' => 'Flyt fílur frá Wikimedia Commons til verkætlanina',
	'categories' => 'Bólkar',
	'remove_cats' => 'Tak burtur verandi bólkar',
	'use_checkusage' => 'Nýt $1CommonSense$2 til uppskot um nýggir bólkar',
	'tusc_user' => 'TUSC brúkaranavn',
	'tusc_pass' => 'TUSC loyniorð',
	'do_it' => 'Ger tað',
	'error_transfer_usr' => 'Tú hevur ikki valt eitt Wikimedia Commons brúkaranavn',
	'error_not_exists' => 'Keldufílan er ikki til!',
	'error_on_commons' => 'Keldufílan er longu á $1!',
	'error_file_exists' => 'Fílan er longu til á $3 sum "$1$4$2"!',
	'error_meta_no_good' => 'Metadáta: Ongar góðar fyrimyndir funnar! $1Vinarliga innset/dagfør metadáta fyri verkætlan$2',
	'original_wikitext' => 'Upprunaligur wikitekstur',
	'new_wikitext' => 'Nýggjur wikitekstur',
	'new_filename' => 'Nýtt fílunavn:',
	'upload_submit' => 'Legg út!',
	'target_wiki' => 'málwikiin',
	'error_bot_blocked' => 'Útleggingar-botturin er sperraður á Wikimedia Commons.',
	'help_mail' => 'Send ein meyl til $1',
	'help_commons' => '$1Legg eitt innslag á Commons$2',
);

/** French (français)
 * @author Coyau
 * @author Crochet.david
 * @author Hashar
 * @author IAlex
 * @author Od1n
 * @author Sherbrooke
 * @author Wyz
 */
$messages['fr'] = array(
	'attention' => 'Attention',
	'description' => 'Un outil pour transférer des fichiers des projets Wikimedia vers Wikimedia Commons',
	'change_meta' => 'Modifie la $1catégorie et les paramètres du modèle$2 pour $3',
	'jira_link' => 'Signaler un bug ou suggérer une fonctionnalité',
	'language' => 'Langue',
	'project' => 'Projet',
	'source_file' => 'Fichier source',
	'target_file' => 'Fichier cible',
	'commons_username' => 'Nom d’utilisateur Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons au projet',
	'move_file_from_com' => 'Déplace le fichier de Wikimedia Commons vers le projet',
	'categories' => 'Catégories',
	'remove_cats' => 'Supprime les catégories existantes',
	'use_checkusage' => 'Utiliser $1CommonSense$2 pour suggérer les nouvelles catégories',
	'use_tusc' => 'Utiliser $1TUSC$2 pour authentifier et transférer le fichier directement',
	'tusc_user' => 'Nom d’utilisateur TUSC',
	'tusc_pass' => 'Mot de passe TUSC',
	'do_it' => 'Le faire',
	'error_transfer_usr' => "Vous n’avez pas défini un nom d'utilisateur Wikimedia Commons",
	'error_not_exists' => 'Le fichier source n’existe pas !',
	'error_on_commons' => 'Fichier source déjà sur $1 !',
	'error_file_exists' => 'Le fichier existe déjà sur $3 en tant que « $1$4$2 » !',
	'error_diff_exists' => 'Un fichier cible différent existe sur le wiki cible avec le même nom !',
	'error_no_meta' => "Aucune métadonnée trouvée pour le wiki d’origine ! $1Prière d'ajouter/mettre à jour la métadonnée pour le projet$2",
	'error_meta_no_good' => 'Métadonnées : pas de bon modèle trouvé ! $1Prière d’ajouter/mettre à jour la métadonnée pour le projet$2',
	'error_meta_bad' => 'Métadonnées : mauvais modèle trouvé ! $1Prière d’ajouter/mettre à jour la métadonnée pour le projet$2',
	'original_wikitext' => 'Wikitexte original',
	'new_wikitext' => 'Nouveau wikitexte',
	'new_filename' => 'Nouveau nom de fichier :',
	'output_information' => 'Pour le téléversement manuel, modifier le texte ci-dessus (si nécessaire), enregistrez $1le fichier$2 sur votre ordinateur, puis $3le télécharger$4.',
	'upload_submit' => 'Téléverser',
	'target_wiki' => 'le wiki cible',
	'standard_project' => 'Wikipédia',
	'error_bot_blocked' => 'Le robot de téléversement est bloqué sur Wikimedia Commons.',
	'error_upload_meta' => 'Impossible de téléverser directement parce qu’il y a problème avec les métadonnées (voir ci-dessus) !',
	'error_tusc_failed' => 'La vérification TUSC a échoué !',
	'error_only_commons' => 'Le téléversement direct ne fonctionne que sur Wikimedia Commons !',
	'upload_control_text' => 'Veuillez vérifier le nouveau wikitexte et cliquer sur « $1 » si tout est OK !',
	'error_commons_user' => 'Pour identifier l’utilisateur qui effectue le transfert, votre nom d’utilisateur de Wikimedia Commons doit figurer dans la description !',
	'error_upload_users' => 'La fonction de téléversement est uniquement disponible pour certains utilisateurs durant la période d’essai !',
	'error_upload_file' => 'Le fichier original ne peut être pas être téléchargé.',
	'help_intro' => "Que vous souhaitiez nous communiquer un dysfonctionnement, une amélioration ou simplement poser une question, vous pouvez utiliser l'un des moyens suivant :",
	'help_jira' => '$1JIRA (vous devez avoir un compte)$2 (Projet : Commonshelper2)',
	'help_mail' => 'Envoyer un courriel à $1',
	'help_commons' => '$1Ajouter un message sur Commons$2',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'attention' => 'Atencion',
	'language' => 'Lengoua',
	'project' => 'Projèt',
	'source_file' => 'Fichiér sôrsa',
	'target_file' => 'Fichiér ciba',
	'commons_username' => 'Nom d’utilisator de Wikimedia Commons',
	'commons_to_project' => 'De Wikimedia Commons u projèt',
	'categories' => 'Catègories',
	'remove_cats' => 'Enlevar les catègories ègzistentes',
	'tusc_user' => 'Nom d’utilisator TUSC',
	'tusc_pass' => 'Contresegno TUSC',
	'do_it' => 'Lo fâre',
	'error_not_exists' => 'Lo fichiér sôrsa ègziste pas !',
	'error_on_commons' => 'Fichiér sôrsa ja dessus $1 !',
	'error_file_exists' => 'Lo fichiér ègziste ja dessus $3 coment « $1$4$2 » !',
	'original_wikitext' => 'Vouiquitèxto originâl',
	'new_wikitext' => 'Vouiquitèxto novél',
	'new_filename' => 'Novél nom de fichiér :',
	'upload_submit' => 'Tèlèchargiér !',
	'target_wiki' => 'lo vouiqui ciba',
	'error_bot_blocked' => 'Lo robot de tèlèchargement est blocâ dessus Wikimedia Commons.',
	'error_tusc_failed' => 'Lo contrôlo TUSC at pas reussi !',
	'error_only_commons' => 'Lo tèlèchargement drêt fonccione ren que dessus Wikimedia Commons !',
	'error_upload_file' => 'Lo fichiér originâl pôt pas étre tèlèchargiê.',
	'help_jira' => '$1JIRA (vos dête avêr un compto)$2 (Projèt : Commonshelper2)',
	'help_mail' => 'Mandar un mèssâjo a $1',
	'help_commons' => '$1Apondre un mèssâjo dessus Commons$2',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'language' => 'Teanga',
	'categories' => 'Catagóirí',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'attention' => 'Atención',
	'description' => 'Unha ferramenta para transferir ficheiros de proxectos da Wikimedia á Wikimedia Commons',
	'change_meta' => 'Cambiar a $1categoría e configuración do modelo$2 por $3',
	'jira_link' => 'Informar dun erro ou suxerir unha funcionalidade',
	'language' => 'Lingua',
	'project' => 'Proxecto',
	'source_file' => 'Ficheiro de orixe',
	'target_file' => 'Ficheiro de destino',
	'commons_username' => 'Nome de usuario na Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons ao proxecto',
	'move_file_from_com' => 'Mover o ficheiro da Wikimedia Commons ao proxecto',
	'categories' => 'Categorías',
	'remove_cats' => 'Eliminar as categorías existentes',
	'use_checkusage' => 'Empregue $1CommonSense$2 para suxerir novas categorías',
	'use_tusc' => 'Usar $1TUSC$2 para autenticar e transferir o ficheiro directamente',
	'tusc_user' => 'Nome de usuario TUSC',
	'tusc_pass' => 'Contrasinal TUSC',
	'do_it' => 'Facelo',
	'error_transfer_usr' => 'Non definiu un nome de usuario para a Wikimedia Commons',
	'error_not_exists' => 'O ficheiro de orixe non existe!',
	'error_on_commons' => 'O ficheiro de orixe xa está en $1!',
	'error_file_exists' => 'O ficheiro xa existe en $3 como "$1$4$2"!',
	'error_diff_exists' => 'Xa existe un ficheiro diferente co mesmo nome no wiki de destino!',
	'error_no_meta' => 'Non se atoparon metadatos sobre o wiki de orixe! $1Engada ou actualice os metadatos do proxecto$2',
	'error_meta_no_good' => 'Metadatos: Non se atoparon modelo correctos! $1Ligazón aos metadatos$2',
	'error_meta_bad' => 'Metadatos: Atopouse un modelo erróneo! $1Engada ou actualice os metadatos do proxecto$2',
	'original_wikitext' => 'Texto wiki orixinal',
	'new_wikitext' => 'Novo texto wiki',
	'new_filename' => 'Novo nome de ficheiro:',
	'output_information' => 'Se quere facer unha carga manual, edite o texto superior (se fose necesario), garde $1o ficheiro$2 no seu ordenador e logo $3cárgueo$4.',
	'upload_submit' => 'Cargar!',
	'target_wiki' => 'o wiki de destino',
	'error_bot_blocked' => 'O bot de cargas está bloqueado na Wikimedia Commons.',
	'error_upload_meta' => 'Non se pode cargar directamente porque hai un problema cos metadatos (véxase enriba)!',
	'error_tusc_failed' => 'Erro na comprobación TUSC!',
	'error_only_commons' => 'A carga directa funciona soamente na Wikimedia Commons!',
	'upload_control_text' => 'Comprobe o novo texto wiki e prema sobre "$1" se todo está ben!',
	'error_commons_user' => 'Para identificar o usuario que efectúa a transferencia, cómpre que o seu nome de usuario da Wikimedia Commons estea presente na descrición!',
	'error_upload_users' => 'A función de cargas só está dispoñible para algúns usuarios durante o período de probas!',
	'error_upload_file' => 'O ficheiro orixinal non se pode descargar.',
	'help_intro' => 'Se quere informar dun erro, facer unha suxestión ou resolver unha dúbida, pode empregar calquera dos medios de contacto que hai a continuación:',
	'help_jira' => '$1JIRA (necesita unha conta)$2 (Proxecto: Commonshelper2)',
	'help_mail' => 'Enviar un correo electrónico a $1',
	'help_commons' => '$1Engadir un comentario en Commons$2',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'language' => 'Γλῶττα',
);

/** Gujarati (ગુજરાતી)
 * @author Ashok modhvadia
 */
$messages['gu'] = array(
	'attention' => 'ધ્યાન આપો',
	'description' => 'વિકિમીડિયા પ્રકલ્પથી વિકિમીડિયા કૉમન્સ પર ફાઇલ બદલવાનું સાધન',
	'change_meta' => '$3 માટે શ્રેણી$1 અને ઢાંચો સેટિંગ્સ$2 બદલો',
	'jira_link' => 'બગ નોંધાવો અથવા રૂપક સૂચવો',
	'language' => 'ભાષા',
	'project' => 'પરિયોજના',
	'source_file' => 'સ્રોત ફાઇલ',
	'target_file' => 'લક્ષ્ય ફાઇલ',
	'commons_username' => 'વિકિમીડિયા કૉમન્સ સભ્યનામ',
	'commons_to_project' => 'વિકિમીડિયા કૉમન્સથી પરિયોજના પર',
	'move_file_from_com' => 'વિકિમીડિયા કૉમન્સ પરથી પરિયોજના પર ફાઇલ ખસેડો',
	'categories' => 'શ્રેણીઓ',
	'remove_cats' => 'હાજર શ્રેણીઓ હટાવો',
	'use_checkusage' => 'નવી શ્રેણીઓ સૂચવવા માટે $1CommonSense$2 વાપરો',
	'use_tusc' => 'પ્રમાણભૂતતા પ્રસ્થાપિત કરવા અને સીધેસીધી ફાઇલ ખસેડવા $1TUSC$2 વાપરો',
	'tusc_user' => 'TUSC સભ્યનામ',
	'tusc_pass' => 'TUSC ગુપ્તસંજ્ઞા',
	'do_it' => 'આ કરો',
	'error_transfer_usr' => 'તમે વિકિમીડિયા સભ્યનામ ગોઠવ્યું નથી',
	'error_not_exists' => 'સ્રોત ફાઇલ અસ્તિત્વમાં નથી !',
	'error_on_commons' => 'સ્રોત ફાઇલ $1 પર અગાઉથી છે જ !',
	'error_file_exists' => 'ફાઇલ $3 પર "$1$4$2" તરીકે અગાઉથી છે જ !',
	'error_diff_exists' => 'લક્ષ્ય વિકિ પર સમાન નામે એક અલગ લક્ષ્ય ફાઇલ અગાઉથી છે જ !',
	'error_no_meta' => 'સ્રોત વિકિ બાબતે મેટાડૅટા મળતો નથી ! $1કૃપયા પરિયોજના માટે મેટાડૅટા ઉમેરો/સુધારો$2',
	'error_meta_no_good' => 'મેટાડૅટા:ઉપયુક્ત ઢાંચો મળતો નથી ! $1કૃપયા પરિયોજના માટે મેટાડૅટા ઉમેરો/સુધારો$2',
	'error_meta_bad' => 'મેટાડૅટા:નકામો ઢાંચો મળ્યો ! $1કૃપયા પરિયોજના માટે મેટાડૅટા ઉમેરો/સુધારો$2',
	'original_wikitext' => 'મૂળ વિકિ લખાણ',
	'new_wikitext' => 'નવું વિકિ લખાણ',
	'new_filename' => 'નવું ફાઇલનામ :',
	'output_information' => 'જાતે ચઢાવવા માટે, ઉપરોક્ત લખાણનું સંપાદન કરો (જરૂરી હોય તો), $1ફાઇલ$2 તમારા કૉમ્પ્યુટર પર સાચવો, પછી $3ચઢાવો$4.',
	'upload_submit' => 'ફાઇલ ચઢાવો',
	'target_wiki' => 'લક્ષ્ય વિકિ',
	'error_bot_blocked' => 'વિકિમીડિયા કૉમન્સ પર અપલૉડ બોટ અવરુદ્ધ છે.',
	'error_upload_meta' => 'સીધેસીધું ચઢાવી નહીં શકો કારણ કે ત્યાં મેટાડૅટા સાથે કશીક સમસ્યા છે (ઉપર જુઓ) !',
	'error_tusc_failed' => 'TUSC ખરાઈ નિષ્ફળ !',
	'error_only_commons' => 'કાર્ય સીધેસીધું માત્ર વિકિમીડિયા કૉમન્સ પર ચડાવો !',
	'upload_control_text' => 'કૃપયા નવું વિકિ લખાણ ચકાશો અને બધું બરાબર હોય તો "$1" પર ક્લિક કરો !',
	'error_commons_user' => 'ખસેડનાર સભ્યની ઓળખ માટે, તમારૂં વિકિમીડિયા કૉમન્સ સભ્યનામ વર્ણન (description)માં લખો !',
	'error_upload_users' => 'ચકાસણી સમય દરમિયાન માત્ર અમૂક સભ્યો માટે જ ચઢાવો કાર્ય ઉપલબ્ધ રહેશે !',
	'error_upload_file' => 'મૂળ ફાઇલ ડાઉનલોડ થયેલી નથી.',
	'help_jira' => '$1JIRA (ખાતું જરૂરી)$2 (પરિયોજના: કૉમન્સહેલ્પર ૨)',
	'help_mail' => '$1ને મેઇલ મોકલો',
	'help_commons' => '$1કૉમન્સ પર લેખ ઉમેરો$2',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author YaronSh
 */
$messages['he'] = array(
	'attention' => 'לתשומת לבך',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'כלי להעברת קבצים ממיזמים של קרן ויקימדיה לוויקישיתוף',
	'change_meta' => 'לשנות את $1הגדרות הקטגוריות והתבניות$2 עבור $3',
	'jira_link' => 'דיווח באג או הצעת שיפור',
	'language' => 'שפת המיזם',
	'project' => 'שם המיזם',
	'source_file' => 'קובץ מקור',
	'target_file' => 'קובץ יעד',
	'commons_username' => 'שם משתמש בוויקישיתוף',
	'commons_to_project' => 'מוויקישיתוף למיזם',
	'move_file_from_com' => 'העברת קובץ מוויקישיתוף למיזם מקומי',
	'categories' => 'קטגוריות',
	'remove_cats' => 'מחיקת קטגוריות קיימות',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'להשתמש ב־$1CheckUsage$2 כדי לאתר קטגוריות',
	'use_tusc' => 'להשתמש ב־$1TUSC$2 כדי להזדהות ולהעביר את הקובץ ישירות',
	'tusc_user' => 'שם משתמש ב־TUSC',
	'tusc_pass' => 'ססמה ב־TUSC',
	'do_it' => 'העברה',
	'error_transfer_usr' => 'לא יצרת שם משתמש בוויקישיתוף',
	'error_not_exists' => 'קובץ המקור אינו קיים!',
	'error_on_commons' => 'קובץ המקור כבר נמצא באתר $1!',
	'error_file_exists' => 'הקובץ כבר קיים ב־$3 בשם "$1$4$2"!',
	'error_diff_exists' => 'קובץ שונה קיים באתר היעד באותו שם!',
	'error_no_meta' => 'לא נמצאו מטא־נתונים על ויקי המקור! $1נא להוסיף או לעדכן את המטא־נתונים עבור המיזם$2',
	'error_meta_no_good' => 'מטא־נתונים: לא נמצאו תבניות קבילות! $1נא להוסיף או לעדכן את המטא־נתונים עבור המיזם$2',
	'error_meta_bad' => 'מטא־נתונים: נמצאה תבנית לא קבילה! $1נא להוסיף או לעדכן את המטא־נתונים עבור המיזם$2',
	'original_wikitext' => 'תיאור מקורי',
	'new_wikitext' => 'תיאור חדש',
	'new_filename' => 'שם קובץ חדש:',
	'output_information' => 'לשם העלאה ידנית יש לערוך את הטקסט למעלה (אם זה נחוץ), לשמור את $1הקובץ$2 במחשבך ואז $3להעלות אותו$4.',
	'upload_submit' => 'להעלות!',
	'target_wiki' => 'ויקי היעד',
	'error_bot_blocked' => 'בוט ההעלאה חסום בוויקישיתוף.',
	'error_upload_meta' => 'אין אפשרות להעלות ישירות כי יש בעיה עם המטא־נתונים (ר׳ לעיל)!',
	'error_tusc_failed' => 'הזדהות ב־TUSC נכשלה!',
	'error_only_commons' => 'העלאה ישירה עובדת רק בוויקישיתוף!',
	'upload_control_text' => 'נא לבדוק את קוד הוויקי החדש וללחוץ "$1" אם הכול בסדר!',
	'error_commons_user' => 'כדי לזהות את המשתמש המעביר, שם המשתמש שלכם בוויקישיתוף צריך להיות בתיאור!',
	'error_upload_users' => 'פעולת ההעלאה זמינה רק למשתמשים מסוימים בזמן הבדיקות!',
	'error_upload_file' => 'לא ניתן להוריד את הקובץ המקורי.',
	'help_intro' => 'אם אתם רוצים לדווח באג, להציע תכונה או לשאול שאלה, אפשר ליצור קשר בדרכים הבאות:',
	'help_jira' => '$1JIRA (יש צורך בחשבון)$2 (Project: Commonshelper2)',
	'help_mail' => 'שליחת דואר ל־$1',
	'help_commons' => '$1הוספת רשומה בוויקישיתוף$2',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'attention' => 'सूचना',
	'description' => 'विकिमीडिया परियोजनाओं से विकिमीडिया कॉमन्स पर फ़ाइलें भेजने के लिये एक टूल',
	'jira_link' => 'बग जानकारी दें या फ़ीचर सुझाएँ',
	'language' => 'भाषा',
	'project' => 'परियोजना',
	'source_file' => 'स्रोत फ़ाइल',
	'target_file' => 'लक्ष्य फ़ाइल',
	'commons_username' => 'विकिमीडिया कॉमन्स सदस्यनाम',
	'commons_to_project' => 'विकिमीडिया कॉमन्स से परियोजना',
	'move_file_from_com' => 'फ़ाइल विकिमीडिया कॉमन्स से परियोजना को भेजें',
	'categories' => 'श्रेणियाँ',
	'remove_cats' => 'मौजूदा श्रेणियाँ हटाएँ',
	'tusc_user' => 'TUSC सदस्यनाम',
	'tusc_pass' => 'TUSC कूटशब्द',
	'do_it' => 'कार्य करें',
	'error_transfer_usr' => 'आपने विकिमीडिया कॉमन्स सदस्यनाम नहीं बताया है',
	'error_not_exists' => 'स्रोत फ़ाइल मौजूद नहीं है!',
	'error_on_commons' => 'स्रोत फ़ाइल पहले से $1 पर है!',
	'error_file_exists' => 'फ़ाइल $3 पर पहले से "$1$4$2" नाम से मौजूद है!',
	'error_diff_exists' => 'लक्ष्य विकि पर इस नाम से कोई अन्य फ़ाइल पहले से मौजूद है।',
	'error_no_meta' => 'स्रोत विकि के बारे में कोई मेटाडाटा नहीं मिला! $1कृपया परियोजना के लिये मेटाडाटा जोड़ें/अद्यतित करें$2',
	'original_wikitext' => 'मूल विकि पाठ',
	'new_wikitext' => 'नया विकि पाठ',
	'new_filename' => 'फ़ाइल का नया नाम:',
	'upload_submit' => 'अपलोड!',
	'target_wiki' => 'लक्ष्य विकि',
	'error_bot_blocked' => 'अपलोड बॉट विकिमीडिया कॉमन्स पर अवरोधित है।',
	'error_upload_meta' => 'सीधे अपलोड नहीं किया जा सकता क्योंकि मेटाडाटा में समस्या है (उपर्लिखित)!',
	'error_tusc_failed' => 'TUSC सत्यापन विफल!',
	'error_only_commons' => 'सीधा अपलोड केवल विकिमीडिया कॉमन्स पर किया जा सकता है!',
	'upload_control_text' => 'कृपया नया विकि पाठ जाँचें और सही होने पर "$1" पर क्लिक करें!',
	'error_commons_user' => 'स्थानान्तरणकर्ता की पहचान हेतु आपका विकिमीडिया कॉमन्स सदस्यनाम विवरण में होना चाहिये!',
	'error_upload_users' => 'अपलोड फ़ंक्शन परीक्षण अवधि के दौरान केवल कुछ ही सदस्यों को उपलब्ध है!',
	'error_upload_file' => 'मूल फ़ाइल डाउनलोड नहीं की जा सकी।',
	'help_intro' => 'आप बग की जानकारी देने, फ़ीचर सुझाने अथवा प्रश्न पूछने के लिये निम्न सम्पर्क-सूत्रों में से किसी का प्रयोग कर सकते हैं:',
	'help_mail' => '$1 को ई-मेल भेजें',
	'help_commons' => '$1कॉमन्स पर टिप्पणी जोड़ें$2',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'attention' => 'Pažnja',
	'description' => 'Alat za prijenos datoteka s projekata Wikimedije na Zajednički poslužitelj',
	'change_meta' => 'Promijenite postavke $1kategorija i predložaka$2 za  $3',
	'jira_link' => 'Prijavite grešku ili predložite novu mogućnost',
	'language' => 'Jezik',
	'project' => 'Projekt',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Odredišna datoteka',
	'commons_username' => 'Suradničko ime na Zajedničkom poslužitelju',
	'commons_to_project' => 'Sa Zajedničkog poslužitelja na projekt',
	'move_file_from_com' => 'Premjestite datoteku sa Zajedničkog poslužitelja na projekt',
	'categories' => 'Kategorije',
	'remove_cats' => 'Ukloni postojeće kategorije',
	'use_checkusage' => 'rabite $1CommonSense$2 za prijedlog novih kategorija',
	'use_tusc' => 'Rabite $1TUSC$2 za izravan prijenos datoteka', # Fuzzy
	'tusc_user' => 'TUSC suradničko ime',
	'tusc_pass' => 'Lozinka za TUSC',
	'do_it' => 'Učini',
	'error_transfer_usr' => 'Niste postavili suradničko ime sa Zajedničkog poslužitelja',
	'error_not_exists' => 'Izvorna datoteka ne postoji!',
	'error_on_commons' => 'Izvorna datoteka je već na $1.',
	'error_file_exists' => 'Datoteka već postoji na $3 kao "$1$4$2"!',
	'error_diff_exists' => 'Drugačija odredišna datoteka postoji na navedenom wikiju pod istim imenom!',
	'error_no_meta' => 'Metapodaci nisu pronađeni na izvornom wikiju. $1Poveznica$2', # Fuzzy
	'error_meta_no_good' => 'Metapodaci: nisu pronađeni dobri predlošci! $1Poveznica$2', # Fuzzy
	'error_meta_bad' => 'Metapodaci: pronađen loš predložak! $1Poveznica$2', # Fuzzy
	'original_wikitext' => 'Izvorni wiki tekst',
	'new_wikitext' => 'Novi wiki tekst',
	'new_filename' => 'Novi naziv datoteke:',
	'output_information' => 'Za ručno postavljanje, uredite gornji tekst (ukoliko je potrebno), spremite $1datoteka$2 na svoje računalo, zatim', # Fuzzy
	'upload_submit' => 'Postavi!',
	'target_wiki' => 'odredišni wiki',
	'error_bot_blocked' => 'Bot za postavljanje je blokiran na Zajedničkom poslužitelju.',
	'error_upload_meta' => 'Izravno postavljanje nije moguće jer je došlo do problema s metapodacima (pogledajte iznad)!',
	'error_tusc_failed' => 'TUSC provjera nije uspjela!',
	'error_only_commons' => 'Izravno postavljanje radi samo na Zajedničkom poslužitelju!',
	'upload_control_text' => 'Molimo vas da provjerite novi wiki tekst i kliknite na "$1" ako je sve u redu!',
	'error_commons_user' => 'Za identifikaciju suradnika koji prenosi datoteke, Vaše suradničko ime na Zajedničkom poslužitelju mora biti u opisu!',
	'error_upload_users' => 'Mogućnost postavljanja je dostupna samo nekim suradnicima tijekom testnog razdoblja.',
	'error_upload_file' => 'Izvorna datoteka ne može biti preuzeta.',
	'help_mail' => 'Pošaljite poruku na $1',
	'help_commons' => '$1Dodajte poruku na Zajedničkom poslužitelju$2',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'attention' => 'Kedźbu',
	'description' => 'Nastroj za přenošowanje datajow z Wikimedijowych projektow do Wikipedia Commons',
	'change_meta' => '$1Nastajenja za kategorije a předłohi$2 za $3 změnić',
	'jira_link' => 'Zmylk zdźělić abo funkciju sej přeć',
	'language' => 'Rěč',
	'project' => 'Projekt',
	'source_file' => 'Žórłowa dataja',
	'target_file' => 'Cilowa dataja',
	'commons_username' => 'Wužiwarske mjeno na Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons k projektej',
	'move_file_from_com' => 'Dataju z Wikimedia Commons do projekta přesunyć',
	'categories' => 'Kategorije',
	'remove_cats' => 'Eksistowace kategorije wotstronić',
	'use_checkusage' => 'Wužij $1CommonSense$2, zo by nowe kategorije namjetował',
	'use_tusc' => 'Wužij $1TUSC$2, zo by dataju direktnje awtentifikował a přenošował',
	'tusc_user' => 'TUSC - wužiwarske mjeno',
	'tusc_pass' => 'TUSC-hesło',
	'do_it' => 'Wuwjesć',
	'error_transfer_usr' => 'Njejsy žane wužiwarske mjeno za Wikimedia Commons postajił',
	'error_not_exists' => 'Žórłowa dataja njeeksistuje!',
	'error_on_commons' => 'Žórłowa dataja hižo na $1 eksistuje!',
	'error_file_exists' => 'Dataja hižo na $3 jako "$1$4$2" eksistuje!',
	'error_diff_exists' => 'Na cilowym wikiju rozdźělna cilowa dataja pod samsnym mjenom eksistuje!',
	'error_no_meta' => 'Žane metadaty wo žórłowym wikiju njenamakane! $1Prošu přidaj/zaktualizuj metadaty za projekt$2',
	'error_meta_no_good' => 'Metadaty: Žane dobre předłohi njenamakane! $1Prošu přidaj/zaktualizuj metadaty za projekt$2',
	'error_meta_bad' => 'Metadaty: Špatna předłoha njenamakana! $1Prošu přidaj/zaktualizuj metadaty za projekt$2',
	'original_wikitext' => 'Prěnjotny wikitekst',
	'new_wikitext' => 'Nowy wikitekst',
	'new_filename' => 'Nowe datajowe mjeno:',
	'output_information' => 'Za manuelne nahraće, wobdźěłaj tekst horjeka (jeli to je trěbne), składuj $1dataju$2 na swojim ličaku a $3nahraj ju$4 potom.',
	'upload_submit' => 'Nahrać!',
	'target_wiki' => 'cilowy wiki',
	'error_bot_blocked' => 'Nahrawanski bot je na Wikimedia Commons zablokowany.',
	'error_upload_meta' => 'Direktne nahraće njeje móžno, dokelž je problem z metadatami (hlej horjeka)!',
	'error_tusc_failed' => 'TUSC-přepruwowanje je so njeporadźiło!',
	'error_only_commons' => 'Direktne nahraće jenož na Wikimedia Commons funguje!',
	'upload_control_text' => 'Prošu přepruwuj nowy wikitekst a klikń na "$1", jeli wšitko je  w porjadku!',
	'error_commons_user' => 'Zo by přenošowanskeho wužiwarja identifikował, dyrbi twoje wužiwarske mjeno za Wikimedia Commons we wopisanju być!',
	'error_upload_users' => 'Nahrawanska funkcija jenož někotrym wužiwarjam za testowu periodu k dispoziciji steji!',
	'error_upload_file' => 'Originalna dataja njeda so sćahnyć.',
	'help_intro' => 'Jeli chceš zmylk zdźělić, funkciju namjetować abo jeli maš prašenje, móžeš jedyn ze slědowacych kontaktowych typow wužiwać:',
	'help_jira' => '$1JIRA (trjebaš konto)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'E-mejl na $1 pósłać',
	'help_commons' => '$1Powěsć na Commons zawostajić$2',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 */
$messages['hu'] = array(
	'attention' => 'Figyelem',
	'description' => 'Eszköz fájlok Wikimedia-projektekből a Wikimedia Commonsba másolásához',
	'change_meta' => '$3 $1kategória- és sablonbeállításainak$2 módosítása',
	'jira_link' => 'Hiba vagy fejlesztési ötlet jelentése',
	'language' => 'Nyelv',
	'project' => 'Projekt',
	'source_file' => 'Forrásfájl',
	'target_file' => 'Célfájl',
	'commons_username' => 'Wikimedia Commons felhasználünév',
	'commons_to_project' => 'Wikimedia Commonsból egy projektbe',
	'move_file_from_com' => 'Fájl áthelyezése a Wikimedia Commonsból egy projektbe',
	'categories' => 'Kategóriák',
	'remove_cats' => 'Létező kategóriák eltávolítása',
	'use_checkusage' => '$1CommonSense$2 használata kategóriajavaslatokhoz',
	'use_tusc' => 'Fájl átvitele közvetlenül a $1TUSC$2 használatával',
	'tusc_user' => 'TUSC felhasználónév',
	'tusc_pass' => 'TUSC jelszó',
	'do_it' => 'Csináld',
	'error_transfer_usr' => 'Nem adtad meg a Wikimedia Commons felhasználónevet',
	'error_not_exists' => 'A forrásfájl nem létezik!',
	'error_on_commons' => 'A forrásfájl már a  $1 helyen van!',
	'error_file_exists' => 'A fájl már létezik a(z) $3 oldalon, „$1$4$2” néven!',
	'error_diff_exists' => 'A célwikin már létezik egy másik fájl ugyanezen a néven!',
	'error_no_meta' => 'A forráswikiről nincs metaadat. $1Vedd fel/frissítsd a projekt metaadatait!$2',
	'error_meta_no_good' => 'Metaadat: egyetlen megfelelő sablon sem található a lapon. $1Vedd fel/frissítsd a projekt metaadatait!$2',
	'error_meta_bad' => 'Metaadat: hibás sablont található a lapon. $1Vedd fel/frissítsd a projekt metaadatait!$2',
	'original_wikitext' => 'Eredeti wikiszöveg',
	'new_wikitext' => 'Új wikiszöveg',
	'new_filename' => 'Új fájlnév:',
	'output_information' => 'Kézi feltöltés esetén szerkeszd a fenti szöveget (amennyiben szükséges), mentsd el $1a fájlt$2 a számítógépedre, majd $3töltsd fel$4.',
	'upload_submit' => 'Feltöltés!',
	'target_wiki' => 'a célwikire',
	'error_bot_blocked' => 'A feltöltőbot blokkolva van a WIkimedia Commonson.',
	'error_upload_meta' => 'Nem lehet közvetlenül feltölteni, mert problémák vannak a metaadatokkal (lásd fentebb)!',
	'error_tusc_failed' => 'A TUSC ellenőrzés nem sikerült!',
	'error_only_commons' => 'A közvetlen feltöltés csak a Wikimedia Commons esetén működik!',
	'upload_control_text' => 'Ellenőrizd az új wikiszöveget, majd kattints a „$1” gombra, ha minden rendben van!',
	'error_commons_user' => 'Az átvitelt végző szerkesztő azonosítása miatt a Wikimedia Commons-felhasználónevednek szerepelnie kell a leírásban!',
	'error_upload_users' => 'A tesztidőszak alatt a feltöltés funkció csak néhány felhasználó számára érhető el!',
	'error_upload_file' => 'Nem sikerült letölteni az eredeti fájlt.',
	'help_intro' => 'Ha hibát akarsz bejelenteni, új szolgáltatást kérni vagy kérdésed van, használd az alábbi kapcsoltba lépési típusokat:',
	'help_jira' => '$1JIRA (fiókra van szükséged)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'A levelek küldése $1 részére',
	'help_commons' => '$1Üzenet küldése a Commons-ra$2',
);

/** Armenian (Հայերեն)
 * @author Համլետ
 */
$messages['hy'] = array(
	'language' => 'Լեզու',
	'project' => 'Նախագիծ',
	'source_file' => 'Ելատեքստային ֆայլ',
	'target_file' => 'Նպատակային ֆայլի',
	'categories' => 'Կատեգորիաներ',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'attention' => 'Attention',
	'description' => 'Un instrumento pro transferer files ex projectos de Wikimedia a Wikimedia Commons',
	'change_meta' => 'Modificar le $1configurationes de categoria e de patrono$2 pro $3',
	'jira_link' => 'Reportar un defecto o suggerer un function',
	'language' => 'Lingua',
	'project' => 'Projecto',
	'source_file' => 'File de origine',
	'target_file' => 'File de destination',
	'commons_username' => 'Nomine de usator de Wikimedia Commons',
	'commons_to_project' => 'Ex Wikimedia Commons al projecto',
	'move_file_from_com' => 'Displaciar file ex Wikimedia Commons al projecto',
	'categories' => 'Categorias',
	'remove_cats' => 'Remover categorias existente',
	'checkusage' => 'VerificarUsage',
	'use_checkusage' => 'Usar $1CommonSense$2 pro suggerer nove categorias',
	'use_tusc' => 'Usar $1TUSC$2 pro authenticar e transferer le file directemente',
	'tusc_user' => 'Nomine de usator de TUSC',
	'tusc_pass' => 'Contrasigno de TUSC',
	'do_it' => 'Face lo',
	'error_transfer_usr' => 'Tu non ha specificate un nomine de usator de Wikimedia Commons',
	'error_not_exists' => 'Le file de origine non existe!',
	'error_on_commons' => 'Le file de origine es ja presente in $1!',
	'error_file_exists' => 'Le file jam existe in $3 como "$1$4$2"!',
	'error_diff_exists' => 'Un altere file de destination existe in le wiki de destination sub le mesme nomine!',
	'error_no_meta' => 'Nulle metadatos trovate super le wiki de origine! $1Per favor adde/actualisa le metadatos pro le projecto$2',
	'error_meta_no_good' => 'Metadatos: Nulle bon patronos trovate! $1Per favor adde/actualisa le metadatos pro le projecto$2',
	'error_meta_bad' => 'Metadatos: Mal patrono trovate! $1Per favor adde/actualisa le metadatos pro le projecto$2',
	'original_wikitext' => 'Texto wiki original',
	'new_wikitext' => 'Texto wiki nove',
	'new_filename' => 'Nove nomine de file:',
	'output_information' => 'Pro incargamento manual, modifica le texto hic supra (si necessari), salveguarda $1le file$2 in tu computator, postea $3incarga lo$4.',
	'upload_submit' => 'Incargar!',
	'target_wiki' => 'le wiki de destination',
	'error_bot_blocked' => 'Le robot de incargamento es blocate in Wikimedia Commons.',
	'error_upload_meta' => 'Non pote incargar directemente proque il ha problemas con le metadatos (vice hic supra)!',
	'error_tusc_failed' => 'Verification TUSC fallite!',
	'error_only_commons' => 'Le incargamento directe functiona solmente in Wikimedia Commons!',
	'upload_control_text' => 'Per favor verifica le nove texto wiki e clicca "$1" si toto es in ordine!',
	'error_commons_user' => 'Pro identificar le usator transferente, tu nomine de usator de Wikimedia Commons debe figurar in le description!',
	'error_upload_users' => 'Le function de incargamento es solmente disponibile a certe usatores durante le periodo de test!',
	'error_upload_file' => 'Le file original non pote esser discargate.',
	'help_intro' => 'Pro reportar un error, suggerer functionalitate o poner un question, usa un del modos de contacto sequente:',
	'help_jira' => '$1JIRA (es necessari haber un conto)$2 (Projecto: Commonshelper2)',
	'help_mail' => 'Inviar un message electronic a $1',
	'help_commons' => '$1Adder un message in Commons$2',
);

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 * @author Kenrick95
 */
$messages['id'] = array(
	'attention' => 'Perhatian',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'Alat untuk mentransfer berkas dari proyek-proyek Wikimedia ke Wikimedia Commons',
	'change_meta' => 'Ubah $1pengaturan kategori dan templat$2 untuk $3',
	'jira_link' => 'Laporkan kutu (bug) atau sarankan fitur',
	'language' => 'Bahasa',
	'project' => 'Proyek',
	'source_file' => 'Berkas sumber',
	'target_file' => 'Berkas tujuan',
	'commons_username' => 'Nama pengguna Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons ke proyek',
	'move_file_from_com' => 'Pindahkan berkas dari Wikimedia Commons ke proyek',
	'categories' => 'Kategori',
	'remove_cats' => 'Hapus kategori yang ada',
	'checkusage' => 'Periksa penggunaan',
	'use_checkusage' => 'Gunakan $1CommonSense$2 untuk menyarankan kategori baru',
	'use_tusc' => 'Gunakan $1TUSC$2 untuk langsung mengotentikasi dan mentransfer berkas',
	'tusc_user' => 'Nama pengguna TUSC',
	'tusc_pass' => 'Kata sandi TUSC',
	'do_it' => 'Lakukan',
	'error_transfer_usr' => 'Anda belum menetapkan nama pengguna Wikimedia Commons',
	'error_not_exists' => 'Berkas sumber tidak ada.',
	'error_on_commons' => 'Berkas sumber telah ada di $1!',
	'error_file_exists' => 'Berkas telah ada di $3 dengan nama "$1$4$2"!',
	'error_diff_exists' => 'Sebuah berkas target yang berbeda telah ada di wiki target dengan nama yang sama!',
	'error_no_meta' => 'Tidak ada metadata yang ditemukan tentang wiki sumber! $1Silakan tambahkan/perbarui metadata untuk proyek ini$2',
	'error_meta_no_good' => 'Metadata: Tidak ada templat yang baik ditemukan! $1Silakan tambah/perbarui metadata untuk proyek tersebut$2',
	'error_meta_bad' => 'Metadata: Templat yang buruk ditemukan! $1Silakan tambah/perbarui metadata untuk proyek tersebut$2',
	'original_wikitext' => 'Teks wiki asli',
	'new_wikitext' => 'Teks wiki baru',
	'new_filename' => 'Nama berkas baru:',
	'output_information' => 'Untuk pengunggahan secara manual, sunting teks di atas (jika diperlukan), simpan $1berkas$2 di komputer Anda, lalu $3unggah berkas tersebut$4.',
	'upload_submit' => 'Unggah!',
	'target_wiki' => 'wiki target',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => 'Bot pengunggah diblokir di Wikimedia Commons.',
	'error_upload_meta' => 'Tidak bisa langsung mengunggah karena ada masalah dengan meta data (lihat di atas)!',
	'error_tusc_failed' => 'Verifikasi TUSC gagal!',
	'error_only_commons' => 'Unggah karya secara langsung hanya di Wikimedia Commons!',
	'upload_control_text' => 'Silakan cek teks wiki baru dan klik "$1" jika semua sudah OK!',
	'error_commons_user' => 'Untuk mengidentifikasi pengguna yang mentransfer, nama pengguna Wikimedia Commons Anda harus ada dalam deskripsi!',
	'error_upload_users' => 'Fungsi pengunggahan ini hanya tersedia bagi beberapa pengguna ketika periode pengujian!',
	'error_upload_file' => 'Berkas asli tidak dapat diunduh.',
	'help_intro' => 'Ketika Anda melaporkan bug, mengusulkan fitur, atau memiliki pertanyaan, Anda dapat menggunakan satu di antara jenis kontak berikut:',
	'help_jira' => '$1JIRA (Anda perlu sebuah akun)$2 (Proyek: Commonshelper2)',
	'help_mail' => 'Kirim surel ke $1',
	'help_commons' => '$1Tambahkan post di Commons$2',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'attention' => 'Anyá gị!',
	'language' => 'Ásụ̀sụ̀',
	'project' => 'Nzu',
	'source_file' => 'Usòrò mkpọlógwù',
	'target_file' => 'Usòrò ọ chọ',
	'categories' => 'Ébéanọr',
	'do_it' => 'Mẹ ya',
	'upload_submit' => 'Tinyénélú!',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'attention' => 'Зем бакха!',
	'language' => 'Мотт',
	'project' => 'Хьахьоадайтам',
	'categories' => 'Цатегаш',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Nemo bis
 * @author Rippitippi
 */
$messages['it'] = array(
	'attention' => 'Attenzione',
	'description' => 'Strumento per trasferire file da progetti Wikimedia a Wikimedia Commons',
	'change_meta' => 'Cambia le $1impostazioni di categoria e template$2 per $3',
	'jira_link' => 'Segnala un errore o suggerisci una modifica',
	'language' => 'Lingua',
	'project' => 'Progetto',
	'source_file' => 'File originario',
	'target_file' => 'File di destinazione',
	'commons_username' => 'Il nome utente che usi in Wikimedia Commons',
	'commons_to_project' => 'Da Wikimedia Commons al progetto',
	'move_file_from_com' => 'Spostare il file da Wikimedia Commons al progetto',
	'categories' => 'Categorie',
	'remove_cats' => 'Rimuovere le categorie esistenti',
	'use_checkusage' => 'Usa $1CommonSense$2 per suggerire le categorie',
	'use_tusc' => 'Usa $1TUSC$2 per autenticarsi e trasferire il file direttamente',
	'tusc_user' => 'Nome utente TUSC',
	'tusc_pass' => 'Password TUSC',
	'do_it' => 'Invia',
	'error_transfer_usr' => 'Non hai impostato il tuo nome utente di Wikimedia Commons',
	'error_not_exists' => 'Il file di origine non esiste!',
	'error_on_commons' => 'File di origine già in $1!',
	'error_file_exists' => 'Il file esiste già su $3 con il nome "$1$4$2"!',
	'error_diff_exists' => 'Sulla wiki di destinazione esiste già un file con lo stesso nome!',
	'error_no_meta' => 'Nessun metadato trovato circa il wiki di origine! $1Per favore aggiungi o aggiorna i metadati per il progetto$2',
	'error_meta_no_good' => 'Metadati: Nessun template idoneo trovato! $1Per favore aggiungi o aggiorna i metadati per il progetto$2',
	'error_meta_bad' => 'Metadati: Trovato un template non idoneo! $1Per favore aggiungi o aggiorna i metadati per il progetto$2',
	'original_wikitext' => 'Wikitesto originale',
	'new_wikitext' => 'Nuovo wikitesto',
	'new_filename' => 'Nuovo nome del file:',
	'output_information' => 'Per il caricamento manuale, modifica il testo sopra (se necessario), salva il $1file$2 sul tuo computer, poi $3caricalo$4.',
	'upload_submit' => 'Carica!',
	'target_wiki' => 'wiki di destinazione',
	'error_bot_blocked' => 'Il bot di caricamento è bloccato su Wikimedia Commons.',
	'error_upload_meta' => "Non è possibile caricare direttamente perché c'è un problema con i metadati (vedi sopra)!",
	'error_tusc_failed' => 'Autenticazione TUSC fallita!',
	'error_only_commons' => 'Il trasferimento diretto funziona solo per  Wikimedia Commons!',
	'upload_control_text' => 'Per favore controlla il nuovo wikitesto e clicca "$1" se è tutto a posto!',
	'error_commons_user' => 'Per identificare chi ha trasferito il file, il tuo nome utente su Wikimedia Commons deve essere inserito nella descrizione!',
	'error_upload_users' => 'La funzione di caricamento file è disponibile solo per alcuni utenti durante il periodo di prova!',
	'error_upload_file' => 'Il file originale non può essere scaricato.',
	'help_intro' => 'Per segnalare un bug, suggerire una modifica o porre una domanda, puoi utilizzare uno dei seguenti modi di contatto:',
	'help_jira' => '$1JIRA (devi avere attivato un account)$2 (Project: Commonshelper2)',
	'help_mail' => 'Manda una mail a $1',
	'help_commons' => '$1Aggiungi un messaggio su Commons$2',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'attention' => '注意',
	'commonshelper2' => 'コモンズヘルパー 2',
	'description' => 'ウィキメディア プロジェクトからウィキメディア コモンズにファイルを転送するツール',
	'change_meta' => '$3 の$1カテゴリとテンプレートの設定$2を変更',
	'jira_link' => 'バグを報告または新機能を提案',
	'language' => '言語',
	'project' => 'プロジェクト',
	'source_file' => '転送元ファイル',
	'target_file' => '転送先ファイル',
	'commons_username' => 'ウィキメディア コモンズでの利用者名',
	'commons_to_project' => 'コモンズからプロジェクトへ',
	'move_file_from_com' => 'ウィキメディア コモンズからプロジェクトにファイルを移動',
	'categories' => 'カテゴリ',
	'remove_cats' => '既存のカテゴリを除去',
	'use_checkusage' => '$1CommonSense$2 を使用して新しいカテゴリを探す',
	'use_tusc' => '$1TUSC$2 を使用して認証し、ファイルを直接転送',
	'tusc_user' => 'TUSC 利用者名',
	'tusc_pass' => 'TUSC パスワード',
	'do_it' => '実行',
	'error_transfer_usr' => 'ウィキメディア コモンズでの利用者名を入力していません',
	'error_not_exists' => '転送元ファイルが存在しません',
	'error_on_commons' => '転送元ファイルは既に $1 にあります',
	'error_file_exists' => 'ファイルは $3 に既に「$1$4$2」として存在します',
	'error_diff_exists' => '転送先のウィキには同じ名前で別のファイルが存在します',
	'error_no_meta' => '転送元ウィキに関するメタデータが見つかりませんでした。$1このプロジェクトのメタデータを追加・更新してください$2',
	'error_meta_no_good' => 'メタデータ: 許可済みテンプレートが見つかりませんでした。$1このプロジェクトのメタデータを追加・更新してください$2',
	'error_meta_bad' => 'メタデータ: 不許可テンプレートが見つかりました。$1このプロジェクトのメタデータを追加・更新してください$2',
	'original_wikitext' => '元のウィキテキスト',
	'new_wikitext' => '新しいウィキテキスト',
	'new_filename' => '新しいファイル名:',
	'output_information' => '手動アップロードを行うには、(必要であれば) 上記のテキストを編集し、$1このファイル$2をあなたのコンピューターに保存し、$3それをアップロードします$4。',
	'upload_submit' => 'アップロード',
	'target_wiki' => '転送先ウィキ',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => 'ウィキメディア コモンズでアップロード用ボットがブロックされています。',
	'error_upload_meta' => 'メタデータに問題点がある (上記参照) ため、直接アップロードすることができません。',
	'error_tusc_failed' => 'TUSC の検証が失敗しました。',
	'error_only_commons' => '直接アップロードはウィキメディア コモンズでのみ実行できます。',
	'upload_control_text' => '新しいウィキテキストを確認して、何も問題がなければ「$1」をクリックしてください。',
	'error_commons_user' => '転送を行った利用者を識別するため、あなたのウィキメディア コモンズでの利用者名を説明文に含める必要があります。',
	'error_upload_users' => '試験期間中は一部の利用者のみがアップロード機能を利用できます。',
	'error_upload_file' => '元ファイルをダウンロードできません。',
	'help_intro' => 'バグ報告、新機能の提案、または質問をする際には、以下の連絡方法から一つを選んでください。',
	'help_jira' => '$1JIRA (アカウントが必要)$2 (プロジェクト: Commonshelper2)',
	'help_mail' => '$1 にメールを送信',
	'help_commons' => '$1コモンズに投稿を追加$2',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'attention' => 'Gatèkaké',
	'language' => 'Basa',
	'project' => 'Proyèk',
	'source_file' => 'Berkas sumber',
	'target_file' => 'Berkas tinuju',
	'commons_username' => 'Jeneng panganggo Wikimèdia Commons',
	'commons_to_project' => 'Wikimèdia Commons mroyèkaké',
	'categories' => 'Katègori',
	'remove_cats' => 'Singkiraké katégori sing ana',
	'tusc_user' => 'Jeneng panganggo TUSC',
	'tusc_pass' => 'Tembung sandhi TUSC',
	'do_it' => 'Lakoni',
	'error_transfer_usr' => 'Sampéyan durung nyetèl jeneng panganggo Wikimedia Commons',
	'error_not_exists' => 'Berkas sumber ora ana!',
	'error_on_commons' => 'Berkas sumber wis nèng $1!',
	'original_wikitext' => 'Tèks wiki asli',
	'new_wikitext' => 'Tèks wiki anyar',
	'new_filename' => 'Jeneng berkas anyar:',
	'upload_submit' => 'Unggah!',
	'target_wiki' => 'wiki patujon',
	'error_bot_blocked' => 'Bot pangunggah diblokir nèng Wikimedia Commons.',
	'error_tusc_failed' => 'Pangesahan TUSC ora dadi!',
	'error_only_commons' => 'Unggah langsung karya mung nèng Wikimedia Commons!',
	'error_upload_file' => 'Berkas asli ora bisa diundhuh.',
	'help_jira' => '$1JIRA (Sampéyan mbutuhaké akun)$2 (Proyek: Commonshelper2)',
	'help_mail' => 'Kirim layang nèng $1',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'attention' => 'ყურადღება',
	'language' => 'ენა',
	'project' => 'პროექტი',
	'commons_username' => 'მომხმარებლის სახელი ვიკისაწყობში',
	'categories' => 'კატეგორიები',
	'tusc_user' => 'TUSC-ის მომხმარებლის სახელი',
	'tusc_pass' => 'TUSC-ის პაროლი',
	'do_it' => 'გააკეთე',
	'upload_submit' => 'ატვირთვა!',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'language' => 'ភាសា',
	'project' => 'គម្រោង​',
	'upload_submit' => 'ផ្ទុកឡើង!',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'attention' => 'ಗಮನಿಸಿ',
	'description' => 'ವಿಕಿಮೀಡಿಯ ಯೋಜನೆಗಳಿಂದ ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್‌ಗೆ ಕಡತಗಳನ್ನು ವರ್ಗಾಯಿಸಲು ಒಂದು ಉಪಕರಣ',
	'change_meta' => '$3 ಗಾಗಿ $1ವರ್ಗ ಮತ್ತು ಮಾದರಿ ಸಂಯೋಜನೆ$2 ಬದಲಾಯಿಸಿ',
	'jira_link' => 'ಒಂದು ದೋಷ ವರದಿಯನ್ನು  ಅಥವಾ ಒಂದು ಲಕ್ಷಣವನ್ನು ಸೂಚಿಸಿ',
	'language' => 'ಭಾಷೆ',
	'project' => 'ಯೋಜನೆ',
	'source_file' => 'ಮೂಲ ಕಡತ',
	'target_file' => 'ಗುರಿ ಕಡತ',
	'commons_username' => 'ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್ ಸದಸ್ಯತ್ವದ ಹೆಸರು',
	'commons_to_project' => 'ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್‌ನಿಂದ ಯೋಜನೆಗೆ',
	'move_file_from_com' => 'ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್‌ನಿಂದ ಯೋಜನೆಗೆ ಕಡತ ವರ್ಗಾಯಿಸಿರಿ',
	'categories' => 'ವರ್ಗಗಳು',
	'remove_cats' => 'ಅಸ್ತಿತ್ವದಲ್ಲಿರುವ ವಿಭಾಗಗಳು ತೆಗೆದುಹಾಕಿ',
	'use_checkusage' => 'ಹೊಸ ವಿಭಾಗಗಳು ಸೂಚಿಸಲು $1CommonSense $2 ಬಳಸಿ',
	'use_tusc' => 'ದೃಢೀಕರಿಸಲು ಮತ್ತು ನೇರವಾಗಿ ಕಡತವನ್ನು ವರ್ಗಾಯಿಸಲು $1TUSC$2 ಉಪಯೋಗಿಸಿ',
	'tusc_user' => 'TUSC ಸದಸ್ಯತ್ವದ ಹೆಸರು',
	'tusc_pass' => 'TUSC ಗುಪ್ತಪದ',
	'do_it' => 'ಮಾಡು',
	'error_transfer_usr' => 'ನೀವು ವಿಕಿಮೀಡಿಯ ಕಣಜದಲ್ಲಿ ಬಳಕೆದಾರಹೆಸರು ಹೊಂದಿಸಿಲ್ಲ',
	'error_not_exists' => 'ಮೂಲ ಪುಟ ಅಸ್ಥಿತ್ವದಲ್ಲಿ ಇಲ್ಲ.',
	'error_on_commons' => 'ಮೂಲ ಪುಟ $1 ರಲ್ಲಿ ಅಸ್ಥಿತ್ವದಲ್ಲಿ',
	'error_file_exists' => 'ಕಡತವು ಈಗಾಗಲೇ $3 ಅಲ್ಲಿ "$1$4$2" ಎಂದು ಅಸ್ತಿತ್ವದಲ್ಲಿದೆ!',
	'error_diff_exists' => 'ಒಂದು ವಿಭಿನ್ನ ಕಡತ ಈಗಾಗಲೇ ಇದೆ ಹೆಸರಿನಡಿ ಗುರಿ ವಿಕಿ ಮೇಲೆ ಅಸ್ತಿತ್ವದಲ್ಲಿದೆ!',
	'error_no_meta' => 'ಆಕರ ವಿಕಿಯ ಬಗ್ಗೆ ದತ್ತಾಂಶ ಅಲಭ್ಯ! $1ದಯವಿಟ್ಟು ಯೋಜನೆಗೆ ದತ್ತಾಂಶ ಸೇರಿಸಿ/ಬದಲಾಯಿಸಿ$2',
	'error_meta_no_good' => 'ದತ್ತಾಂಶ: ಉತ್ತಮವಾದ ಮಾದರಿಗಳು ಸಿಗಲಿಲ್ಲ! $1ದಯವಿಟ್ಟು ಯೋಜನೆಗೆ ದತ್ತಾಂಶ ಸೇರಿಸಿ/ಬದಲಾಯಿಸಿ$2',
	'error_meta_bad' => 'ದತ್ತಾಂಶ: ಉತ್ತಮವಲ್ಲದ ಮಾದರಿಗಳು! $1ದಯವಿಟ್ಟು ಯೋಜನೆಗೆ ದತ್ತಾಂಶ ಸೇರಿಸಿ/ಬದಲಾಯಿಸಿ$2',
	'original_wikitext' => 'ಮೂಲ ವಿಕಿ ಪಠ್ಯ',
	'new_wikitext' => 'ಹೊಸ ವಿಕಿ ಪಠ್ಯ',
	'new_filename' => 'ಹೊಸ ಕಡತದ ಹೆಸರು:',
	'output_information' => 'ನೀವೇ ನಕಲೇರಿಸಲು, ಮೇಲೆ ನೀಡಿರುವ ಪಠ್ಯವನ್ನು (ಅಗತ್ಯವಿದ್ದಲ್ಲಿ) ತಿದ್ದಿ,  $1ಕಡತವನ್ನು$2 ನಿಮ್ಮ ಗಣಕದಲ್ಲಿ ಉಳಿಸಿ, ನಂತರ $3ನಕಲೇರಿಸಿ$4.',
	'upload_submit' => 'ನಕಲೇರಿಸಿ!',
	'target_wiki' => 'ಲಕ್ಷ್ಯ ವಿಕಿ',
	'error_bot_blocked' => 'ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್‌ನಲ್ಲಿ ನಕಲೇರಿಸುವ ಬಾಟ್ ಅನ್ನು ಬ್ಲಾಕ್ ಮಾಡಲಾಗಿದೆ.',
	'error_upload_meta' => 'ದತ್ತಾಂಶದಲ್ಲಿ ಸಮಸ್ಯೆ ಇರುವುದರಿಂದ ನೇರವಾಗಿ ನಕಲೇರಿಸಲಾಗುವುದಿಲ್ಲ (ಮೇಲೆ ನೋಡಿ)!',
	'error_tusc_failed' => 'TUSC ದೃಢೀಕರಣ ವಿಫಲವಾಗಿದೆ!',
	'error_only_commons' => 'ನೇರ ನಕಲೇರಿಸುವಿಕೆ ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್‌ನಲ್ಲಿ ಮಾತ್ರ ಕಾರ್ಯನಿರ್ವಹಿಸುತ್ತದೆ!',
	'upload_control_text' => 'ದಯವಿಟ್ಟು ಹೊಸ ವಿಕಿ ಪಠ್ಯವನ್ನು ಪರೀಕ್ಷಿಸಿ ಹಾಗೂ ಎಲ್ಲವೂ ಸರಿಯಿದ್ದರೆ "$1" ಕ್ಲಿಕ್ಕಿಸಿ!',
	'error_commons_user' => 'ವರ್ಗಾವಣೆ ಸದಸ್ಯರನ್ನು ಗುರುತಿಸಲು, ನಿಮ್ಮ ವಿಕಿಮೀಡಿಯ ಕಾಮನ್ಸ್ ಸದಸ್ಯತ್ವದ ಹೆಸರು ವಿವರಣೆಯಲ್ಲಿರಬೇಕು!',
	'error_upload_users' => 'ಪರೀಕ್ಷಣಾ ಅವಧಿಯಲ್ಲಿ ನಕಲೇರಿಸುವಿಕೆಯ ಕ್ರಿಯೆಯು ಕೆಲವೇ ಬಳಕೆದಾರರಿಗೆ ಲಭ್ಯವಿದೆ!',
	'error_upload_file' => 'ಮೂಲ ಕಡತವನ್ನು ನಕಲಿಳಿಸಲಾಗುವುದಿಲ್ಲ.',
	'help_intro' => 'ನೀವು ದೋಷ ವರದಿ ಮಾಡಲು, ವೈಶಿಷ್ಟ್ಯ ಕೋರಲು ಅಥವಾ ಪ್ರಶ್ನೆ ಕೇಳಲು, ಕೆಳಗಿನ ಸಂಪರ್ಕ ರೀತಿಯಲ್ಲಿ ಒಂದನ್ನು ಬಳಸಬಹುದು:',
	'help_jira' => '$1ಜಿರಾ (ಖಾತೆ ಅಗತ್ಯವಿದೆ)$2 (ಯೋಜನೆ: Commonshelper2)',
	'help_mail' => '$1 ಗೆ ಮಿಂಚಂಚೆ ಕಳಿಸಿ',
	'help_commons' => '$1ಕಾಮನ್ಸ್‌ನಲ್ಲಿ ಒಂದು ಪ್ರಕಟಣೆ ಸೇರಿಸಿ$2',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'attention' => '주의',
	'description' => '위키미디어 프로젝트의 파일을 위키미디어 공용에 올리는 도구',
	'change_meta' => '$3 위키에 대한 $1분류와 틀에 관한 설정$2 바꾸기',
	'jira_link' => '버그 신고 및 기능 제안하기',
	'language' => '언어',
	'project' => '프로젝트',
	'source_file' => '원본 파일',
	'target_file' => '올릴 파일의 이름',
	'commons_username' => '위키미디어 공용 사용자 이름',
	'commons_to_project' => '공용에서 다른 프로젝트로 보내기',
	'move_file_from_com' => '공용에서 다른 프로젝트로 보내기',
	'categories' => '분류',
	'remove_cats' => '기존 분류를 제거',
	'use_checkusage' => '새 분류 제안을 위해 $1커먼센스$2 사용',
	'use_tusc' => '$1TUSC$2 인증을 하고 즉시 파일을 올리기',
	'tusc_user' => 'TUSC 사용자 이름',
	'tusc_pass' => 'TUSC 비밀번호',
	'do_it' => '시작',
	'error_transfer_usr' => '위키미디어 공용의 계정 이름을 입력하지 않았습니다.',
	'error_not_exists' => '원본 파일이 없습니다!',
	'error_on_commons' => '원본 파일이 이미 $1에 있습니다!',
	'error_file_exists' => '$3에 "$1$4$2"로 파일이 이미 올라와 있습니다!',
	'error_diff_exists' => '파일을 올릴 위키에 똑같은 이름의 다른 파일이 있습니다!',
	'error_no_meta' => '원본 위키에 대한 메타데이터를 찾지 못했습니다! $1해당 프로젝트에 대한 메타데이터를 추가/업데이트해주세요.$2',
	'error_meta_no_good' => '메타데이터: 허용되는 틀이 없습니다! $1해당 프로젝트에 대한 메타데이터를 추가/업데이트해주세요.$2',
	'error_meta_bad' => '메타데이터: 허용되지 않는 틀이 붙어 있습니다! $1해당 프로젝트에 대한 메타데이터를 추가/업데이트해주세요.$2',
	'original_wikitext' => '원문',
	'new_wikitext' => '새로 쓸 위키텍스트',
	'new_filename' => '새 파일 이름:',
	'output_information' => '수동 올리기의 경우, (필요하다면) 위의 글을 편집하고, 당신의 컴퓨터에 $1파일을 저장$2해 두었다가 $3파일을 올리십시오$4.',
	'upload_submit' => '올리기!',
	'target_wiki' => '올릴 위키',
	'standard_project' => '위키백과',
	'error_bot_blocked' => '올리기 봇이 위키미디어 공용에서 차단되어 있습니다.',
	'error_upload_meta' => '메타데이터에 문제가 있어 파일을 즉시 올릴 수 없습니다! (위를 참고하세요)',
	'error_tusc_failed' => 'TUSC 인증 실패!',
	'error_only_commons' => '즉시 파일 올리기는 위키미디어 공용에서만 가능합니다!',
	'upload_control_text' => '새 위키텍스트를 확인한 후 이상이 없다면 "$1"을 클릭하세요!',
	'error_commons_user' => '파일을 옮긴 사용자를 판별하기 위해 당신의 공용 계정 이름이 설명에 들어있어야 합니다!',
	'error_upload_users' => '테스트 기간 중 올리기 기능은 일부 사용자만이 사용할 수 있습니다!',
	'error_upload_file' => '원본 파일을 다운로드할 수 없습니다.',
	'help_intro' => '버그를 보고하거나 기능을 제안하거나 질문이 있으면 아래에 문의 유형 중 하나를 사용할 수 있습니다:',
	'help_jira' => '$1JIRA (계정 필요)$2 (Project: Commonshelper2)',
	'help_mail' => '$1한테 메일 보내기',
	'help_commons' => '$1공용에 게시물 추가$2',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'attention' => 'Opjepaß!',
	'description' => 'E Projramm, wat hellef, Datteije vun Wikis vun de Wikimedija Shtefftong noh <i lang="en">Wikimedia Commons</i> ze övverdraare.',
	'change_meta' => 'Donn de $1Saachjroppe un Schabloone$2 för $3 aanpaße.',
	'jira_link' => 'Donn ene Fähler mälde udder ene Vörschlaach zom Verbäßere maache',
	'language' => 'Schprooch',
	'project' => 'Projäk',
	'source_file' => 'De Dattei zom Övverdraare',
	'target_file' => 'De Ziel_Dattei',
	'commons_username' => 'Dä Metmaacher_Naame op <i lang="en">Wikimedia Commons</i>',
	'commons_to_project' => 'Vun <i lang="en">Wikimedia Commons</i> noh enem Wiki vun de Wikimedia Shteftong övverdraare',
	'move_file_from_com' => 'Donn en Dattei vun <i lang="en">Wikimedia Commons</i> noh enem Wiki vun de Wikimedia Shteftong övverdraare',
	'categories' => 'Saachjroppe',
	'remove_cats' => 'Donn de Saachjroppe fottnämme, di ald doh sin.',
	'checkusage' => 'Donn eruß fenge, woh di Dattei all en Jebruch es.',
	'use_checkusage' => 'Lohß <i lang="en">$1CommonSense$2</i> neu Saachjroppe för die Dattei vörschlonn',
	'use_tusc' => 'Nämm $1<i lang="en">TUSC</i>$2 för Desch enzelogge, un di Dattei tiräk huhzelaade.',
	'tusc_user' => 'Dä Metmaacher_Name beim <i lang="en">TUSC</i>',
	'tusc_pass' => 'Et Paßwoot för et <i lang="en">TUSC</i>',
	'do_it' => 'Lohß jonn!',
	'error_transfer_usr' => 'Et es keine Metmaacher_Name för de <i lang="en">Wikimedia Commons</i> aanjejovve.',
	'error_not_exists' => 'Esu en Ursprungs_Dattei jidd_et nit.',
	'error_on_commons' => 'Di Quälldattei es ald op $1 ze fenge.',
	'error_file_exists' => 'Di Dattei jidd_et ald op {{GRAMMAR:Dativ|$3}} onger däm Naame "$1$4$2"!',
	'error_diff_exists' => 'En ongerscheidlijje Dattei mem sellve Name es ald em Wiki!',
	'error_no_meta' => 'Kein Mettadaate övver et Wiki jefonge. $1Donn di Mettadaate aanpaße udder eets ens dobei$2.',
	'error_meta_no_good' => 'Mettadaate: Kein joode Schabloon jefonge. $1Donn di Mettadaate aanpaße udder eets ens dobei$2.',
	'error_meta_bad' => 'Mettadaate: De Schabloon es esu nit ze bruche. $1Donn di Mettadaate aanpaße udder eets ens endraare$2.',
	'original_wikitext' => 'Dä Ojinaal_Wiki_Täx doh drövver:',
	'new_wikitext' => 'Dä neue Wiki_Täx drövver:',
	'new_filename' => 'Dä neue Name fö di Dattei:',
	'output_information' => 'För et Huhlaade vun Hand, donn bovve dä Täx aanpaße, wann nüüdesh, donn di $1Dattei$2 op Dingem Rääschner aflääje, un dann $3huhlaade$4.',
	'upload_submit' => 'Lohß Jonn!',
	'target_wiki' => 'Et Ziel_Wiki',
	'standard_project' => 'Wikipedija',
	'error_bot_blocked' => 'Däm Bot singe Zohjang op <i lang="en">Wikimedia Commons</i> es jraad jeshperrt.',
	'error_upload_meta' => 'Dat künne mer nit tiräk huhlaade weit et Ärjer met de Metta-Daate jitt. Loor bovve noh!',
	'error_tusc_failed' => 'De Pröfung vum <i lang="en">TUSC</i> es donävve jajange.',
	'error_only_commons' => 'Tiräk huh laade jeiht bloß bei de <i lang="en">Wikimedia Commons</i>.',
	'upload_control_text' => 'Donn dä neue Wikitäx prööfe, un wann dä jood esu es, donn „$1“ klecke.',
	'error_commons_user' => 'Öm kloh ze maache, wä di Dattei övvverdraare hät, donn Dinge Metmaacher-Name op Wikimedia Commons em Täx övver di Dattei ongerbränge.',
	'error_upload_users' => 'Huh laade künne bloß e paa Metmacher en der Prööf_Zigg!',
	'error_upload_file' => 'De Ojinaal Dattei kam_mer nit eronger laade.',
	'help_intro' => 'Wann De ene Fähler mälde wells, en Verbäßerong vörschlonn, udder en Frooch loßß wääde, häß De heh di Müjjeleschkeite:',
	'help_jira' => '$1<i lang="en">JIRA</i> (Doh bruchs De ene Zohjang för)$2 (Projäk: <i lang="en">Commonshelper2</i>)',
	'help_mail' => 'Schegg en <i lang="en">e-mail</i> aan &lt;$1>',
	'help_commons' => 'Donn en  $1Noheesch op Commons schrieve$2',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'language' => 'Ziman',
	'project' => 'Proje',
	'categories' => 'Kategorî',
	'do_it' => 'Pêk bîne',
	'new_filename' => 'Navê pelê yê nû:',
	'upload_submit' => 'Bar bike!',
	'help_mail' => 'Ji $1 re e-namekî bişîne',
);

/** Kyrgyz (Кыргызча)
 * @author Growingup
 * @author Викиней
 */
$messages['ky'] = array(
	'attention' => 'Көңүл буруңуз',
	'jira_link' => 'Көйгөйдү билдирүү же жакшыртууну сунуштоо',
	'language' => 'Тили',
	'project' => 'Долбоор',
	'source_file' => 'Баштапкы файл',
	'categories' => 'Категориялар',
	'do_it' => 'Муну аткаруу',
	'new_filename' => 'Файлдын жаңы аты:',
	'upload_submit' => 'Жүктөө!',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'language' => 'Lingua',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'attention' => 'Opgepasst',
	'description' => 'En Tool fir Fichieren vu Wikimedia-Projeten op Wikimedia Commons ze transferéieren',
	'change_meta' => "D' $1Kategorien- a Schablounenastellungen$2 fir $3 änneren",
	'jira_link' => 'E Feeler mellen oder eng Fonctioun virschloen',
	'language' => 'Sprooch',
	'project' => 'Projet',
	'source_file' => 'Quell-Fichier',
	'target_file' => 'Zil-Fichier',
	'commons_username' => 'Benotzernumm op Wikimedia Commons',
	'commons_to_project' => 'Vu Wikimedia Commons op de Projet',
	'move_file_from_com' => 'De Fichier vu Wikimedia Commons op de Projet réckelen',
	'categories' => 'Kategorien',
	'remove_cats' => 'Déi Kategorien déi et gëtt ewechhuelen',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Benotzt $1ÄreVerstand$2 fir nei Kategorie virzeschloen',
	'use_tusc' => "Benotzt $1TUSC$2 fir z'authentifizéieren a fir de Fichier direkt ze transferéieren",
	'tusc_user' => 'TUSC-Benotzernumm',
	'tusc_pass' => 'TUSC-Passwuert',
	'do_it' => 'Maacht et',
	'error_transfer_usr' => 'Dir hutt kee Wikimedia Commons Benotzernumm festgeluecht',
	'error_not_exists' => 'Quell-Fichier gëtt et net!',
	'error_on_commons' => 'Quellfichier schonn op $1!',
	'error_file_exists' => 'Et gëtt de Fichier schonn op $3 als "$1$4$2"!',
	'error_diff_exists' => 'Et gëtt schonn en anere Fichier mat deem selwechten Numm op der Zilwiki',
	'error_no_meta' => "Keng Metadaten iwwer d'Quell-Wiki fonnt! $1D'Metadate fir de Projet w.e.g. aginn/aktualiséieren$2",
	'error_meta_no_good' => "Metadonnéeën: Et gouf keng gutt Schabloun fonnt! $1Setzt w.e.g. d'Metadonnéeë fir de Projet derbäi respektiv aktualiséiert se$2",
	'error_meta_bad' => 'Metadonnéeën: Et gouf eng falsch Schabloun fonnt! $1Et musse Metadonnéeë fir de Projet derbäigesat respektiv aktualiséiert ginn$2',
	'original_wikitext' => 'Originale Wiki-Text',
	'new_wikitext' => 'Neie Wiki-Text',
	'new_filename' => 'Neien Numm vum Fichier:',
	'output_information' => 'Fir manuell Eropzelueden, den Text uewendriwwer änneren (wann néideg), späichert $1de Fichier$2 op Ärem Computer, deen Dir dann $3eroplued$4.',
	'upload_submit' => 'Eroplueden!',
	'target_wiki' => "d'Zilwiki",
	'standard_project' => 'Wikipedia',
	'error_bot_blocked' => 'De bot fir erofzelueden ass op Wikimedia Commons gespaart.',
	'error_upload_meta' => 'Et kann net direkt eropgeluede ginn, well et Problemer mat de Metadonnéeë gëtt (kuckt uewen)!',
	'error_tusc_failed' => 'TUSC Kontroll ass feelgeschloe!',
	'error_only_commons' => 'Direkt Eropluede funktionéiert nëmme bei Wikimedia Commons',
	'upload_control_text' => 'Kuckt w.e.g. den neie Wiki-Text no a klickt "$1" wann alles an der Rei ass!',
	'error_commons_user' => "Fir de Benotzer z'identifizéieren deen den Transfert mécht, muss de Benotzernumm vu Wikimedia Commons an der Beschreiwung dra sinn!",
	'error_upload_users' => "D'Funktioun vum Eroplueden ass während der Testphas nëmme fir e puer Benotzer disponibel!",
	'error_upload_file' => 'De Quell-Fichier kann net erofgeluede ginn.',
	'help_intro' => "Wann Dir e Software-Feeler melle wëllt, eng Funktioun virschloe wëllt oder eng Fro hutt, da kënnt Dir d'Kontaktmethoden hei drënner benotzen:",
	'help_jira' => '$1JIRA (Dir braucht e Benotzerkont)$2 (Projet: Commonshelper2)',
	'help_mail' => 'Eng Mail op $1 schécken',
	'help_commons' => '$1Eng Noriicht op Commons hannerloossen$2',
);

/** Lezghian (лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'project' => 'Хакъидай',
	'new_wikitext' => 'Цlийи вики кхьин',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'attention' => 'Dėmesio',
	'description' => 'Įrankis, skirtas failų perkėlimui iš Vikimedijos projektų į Vikiteką',
	'change_meta' => 'Pakeisti $1kategorijos ir šablono nustatymus$2 $3',
	'jira_link' => 'Pranešk apie klaidą arba pasiūlyti funkcija',
	'language' => 'Kalba',
	'project' => 'Projektas',
	'source_file' => 'Šaltinio failas',
	'target_file' => 'Tikslinis failas',
	'commons_username' => 'Wikimedia Commons vartotojo vardas',
	'commons_to_project' => 'Iš Vikitekos į projektą',
	'move_file_from_com' => 'Perkelti failą iš Vikitekos į projektą',
	'categories' => 'Kategorijos',
	'remove_cats' => 'Pašalinti esamas kategorijas',
	'use_checkusage' => 'Naudoti $1CommonSense$2 naujų kategorijų pasiūlymams',
	'use_tusc' => 'Naudoti $1TUSC$2 tiesioginio failo perkėlimo autorizacijai',
	'tusc_user' => 'TUSC vartotojo vardas',
	'tusc_pass' => 'TUSC slaptažodis',
	'do_it' => 'padaryk tai',
	'error_transfer_usr' => 'Nenustatėte Wikimedia Commons vartotojo vardo',
	'error_not_exists' => 'Šaltinio failas neegzistuoja!',
	'error_on_commons' => 'Šaltinio failas jau $1 !',
	'error_file_exists' => 'Failas jau egzistuoja $3 kaip " $1 $4 $2 "!',
	'error_diff_exists' => 'Šiuo pavadinimu jau yra kitas tikslinis failas!',
	'error_no_meta' => 'Nerasta jokios metadatos apie pradinę wiki! $1Prašome pridėti/atnaujinti projekto metadatą$2',
	'error_meta_no_good' => 'Metadata: nerasta tinkamų šablonų! $1Prašome pridėti/atnaujinti projekto metadatą$2',
	'error_meta_bad' => 'Metadata: rastas netinkamas šablonas! $1Prašome pridėti/atnaujinti projekto metadatą$2',
	'original_wikitext' => 'Originalus Wiki tekstas',
	'new_wikitext' => 'Naujas wiki tekstas',
	'new_filename' => 'Naujas pavadinimas:',
	'output_information' => 'Rankiniam įkėlimui pakoreguokite aukščiau esantį tekstą (jei reikia), išsaugokite $1failą$2 savo kompiuteryje ir $3jį įkelkite$4.',
	'upload_submit' => 'Įkelti!',
	'target_wiki' => 'tikslinė wiki',
	'error_bot_blocked' => 'Įkėlimo robotas Vikitekoje užblokuotas.',
	'error_upload_meta' => 'Tiesioginis įkėlimas neįmanomas dėl metaduomenų problemos (žiūrėkite aukščiau)!',
	'error_tusc_failed' => 'TUSC patikra nepavyko!',
	'error_only_commons' => 'Tiesioginė failų perkėla tik Vikitekoje!',
	'upload_control_text' => 'Patikrinkite naują wiki tekstą ir, jei viskas tvarkoje, spauskite "$1"!',
	'error_commons_user' => 'Perkėlos vykdytojo identifikacijos reikmėms, jūsų Vikitekos naudotojo vardas turi būti apraše!',
	'error_upload_users' => 'Įkėlimo funkcija yra galima tik keletui naudotojų bandomuoju laikotarpiu!',
	'error_upload_file' => 'Originalus failas negali būti atsiųstas.',
	'help_intro' => 'Kuomet norite pranešti klaidą, pateikti pasiūlymus ar klausimus, galite pasinaudoti vienu iš žemiau nurodytų kontaktų:',
	'help_jira' => '$1JIRA (jums reikalinga paskyra)$2 (Projektas: Commonshelper2)',
	'help_mail' => 'Siųsti laišką $1',
	'help_commons' => '$1Pridėti įrašą Vikitekoje$2',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'attention' => 'Uzmanību',
	'jira_link' => 'Ziņot par kļūdu vai ieteikt funkcionalitāti',
	'language' => 'Valoda',
	'project' => 'Projekts',
	'source_file' => 'Izejas fails',
	'target_file' => 'Mērķa fails',
	'commons_username' => 'Wikimedia Commons lietotājvārds',
	'categories' => 'Kategorijas',
	'tusc_user' => 'TUSC lietotājvārds',
	'tusc_pass' => 'TUSC parole',
	'do_it' => 'Darīt to',
	'original_wikitext' => 'Sākotnējais vikiteksts',
	'new_wikitext' => 'Jaunais vikiteksts',
	'new_filename' => 'Jaunais faila nosaukums:',
	'upload_submit' => 'Augšupielādēt!',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'language' => 'Basa',
	'project' => 'Proyek',
	'source_file' => 'Berkas sumber',
	'target_file' => 'Berkas tujuan',
	'commons_username' => 'Jeneng panganggo Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons ming proyek',
	'move_file_from_com' => 'Mindah berkas sekang Wikimedia Commons ming proyek',
	'categories' => 'Kategori',
	'remove_cats' => 'Busek kategori sing wis ana',
	'use_checkusage' => 'Gunakna $1CommonSense$2 kanggo ngusulna kategori anyar',
	'tusc_user' => 'Jeneng panganggo TUSC',
	'tusc_pass' => 'Tembung sandhi TUSC',
	'do_it' => 'Kerjakna',
	'error_transfer_usr' => 'Rika durung nyetel jeneng panganggo Wikimedia Commons',
	'error_not_exists' => 'Berkas sumber ora ana!',
	'error_on_commons' => 'Berkas sumber anu wis ana nang $1!',
	'error_file_exists' => 'Berkas wis ana nang $3 nganggo jeneng "$1$4$2"!',
	'error_diff_exists' => 'Wis ana berkas target sejen nang wiki target sing nganggo jeneng sing padha!',
	'original_wikitext' => 'Teks wiki aslihttp://translatewiki.net/wiki/Special:Translate/tsint-0-all#',
	'new_wikitext' => 'Teks wiki anyar',
	'new_filename' => 'Jeneng berkas anyar:',
	'upload_submit' => 'Unggah!',
	'target_wiki' => 'wiki target',
	'error_bot_blocked' => 'Bot pangunggah wis diblokir nang Wikimedia Commons.',
	'error_tusc_failed' => 'Pangesahan TUSC ora dadi!',
	'help_mail' => 'Kirim layang ming $1',
	'help_commons' => '$1Tambahna post nang Commons$2',
);

/** Minangkabau (Baso Minangkabau)
 * @author Rahmatdenas
 */
$messages['min'] = array(
	'attention' => 'Pangumuaman',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'attention' => 'Внимание',
	'commonshelper2' => 'Помошник со Ризницата 2',
	'description' => 'Алатка за пренос на податотеки од проектите на Викимедија во Заедничката Ризница',
	'change_meta' => 'Смени $1категориски и шаблонски нагодувања$2 за $3',
	'jira_link' => 'Пријави грешка или предложи функција',
	'language' => 'Јазик',
	'project' => 'Проект',
	'source_file' => 'Изворна податотека',
	'target_file' => 'Целна податотека',
	'commons_username' => 'Корисничко име на Ризницата',
	'commons_to_project' => 'Корисничко име на Ризницата',
	'move_file_from_com' => 'Премести податотека од Ризницата во проект',
	'categories' => 'Категории',
	'remove_cats' => 'Отстрани постоечки категории',
	'checkusage' => 'ПровериУпотреба',
	'use_checkusage' => 'Користи го $1CommonSense$2 за предлагање на нови категории',
	'use_tusc' => 'Користи го $1TUSC$2 за заверка и непосредно префрлање на податотеката',
	'tusc_user' => 'Корисничко име на TUSC',
	'tusc_pass' => 'Лозинка на TUSC',
	'do_it' => 'Изврши',
	'error_transfer_usr' => 'Немате зададено корисничко име на Ризницата',
	'error_not_exists' => 'Изворната податотека не постои!',
	'error_on_commons' => 'Изворната податотека веќе е на $1!',
	'error_file_exists' => 'Податотеката веќе постои на $3 под името „$1$4$2“!',
	'error_diff_exists' => 'На целното вики постои поинаква целна податотека со истото име!',
	'error_no_meta' => 'Не пронајдов метаподатоци за изворното вики! $1Додајте/подновите метаподатоци за проектот$2',
	'error_meta_no_good' => 'Метаподатоци: Не пронајдов соодветни шаблони! $1Врска до метаподатоците$2',
	'error_meta_bad' => 'Метаподатоци: Пронајдов лош шаблон! $1Додајте/подновите метаподатоци за проектот$2',
	'original_wikitext' => 'Изворен викитекст',
	'new_wikitext' => 'Нов викитекст',
	'new_filename' => 'Ново име на податотеката:',
	'output_information' => 'За да подигете рачно - уредете го горенаведениот текст (ако треба), зачувајте ја $1податотеката$2 на вашиот сметач, а потоа $3подигнете ја$4.',
	'upload_submit' => 'Подигни!',
	'target_wiki' => 'целното вики',
	'standard_project' => 'википедија',
	'error_bot_blocked' => 'Ботот за подигање е блокиран на Ризницата.',
	'error_upload_meta' => 'Не можам да подигам непосредно бидејќи се појави проблем со метаподатоците (видете погоре)!',
	'error_tusc_failed' => 'Заверката на TUSC не успеа!',
	'error_only_commons' => 'Непосредното подигање работи само на Ризницата!',
	'upload_control_text' => 'Проверете го новиот викитест, и ако ако сè е во ред, стиснете на „$1“!',
	'error_commons_user' => 'За да се прикаже корисникот на префрлањето, вашето корисничко име на Ризницата мора да се содржи во описот!',
	'error_upload_users' => 'Функцијата за подигање во пробниот период е достапна само за извесни корисници!',
	'error_upload_file' => 'Изворната податотека не може да се преземе.',
	'help_intro' => 'Кога сакате да пријавите бубачка, предложите функција или ако имате прашање, послужете се со една од долунаведените можнсоти за контакт:',
	'help_jira' => '$1JIRA (ќе ви треба сметка)$2 (Проект: Commonshelper2)',
	'help_mail' => 'Испрати е-пошта на $1',
	'help_commons' => '$1Стави објава на Ризницата$2',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'attention' => 'ശ്രദ്ധിക്കുക',
	'description' => 'വിക്കിമീഡിയ സംരംഭങ്ങളിൽ നിന്നും വിക്കിമീഡിയ കോമൺസിലേയ്ക്ക് പ്രമാണങ്ങൾ മാറ്റാനുള്ള ഉപകരണം',
	'change_meta' => '$3 വിക്കിയിലേക്ക് $1വർഗ്ഗ ഫലക സജ്ജീകരണങ്ങൾ$2 മാറ്റുക',
	'jira_link' => 'ബഗ് അല്ലെങ്കിൽ വിശേഷഗുണം അറിയിക്കുക',
	'language' => 'ഭാഷ',
	'project' => 'പദ്ധതി',
	'source_file' => 'സ്രോതസ്സ് പ്രമാണം',
	'target_file' => 'ലക്ഷ്യമിടുന്ന പ്രമാണം',
	'commons_username' => 'വിക്കിമീഡിയ കോമൺസ് ഉപയോക്തൃനാമം',
	'commons_to_project' => 'വിക്കിമീഡിയ കോമൺസിൽ നിന്ന് പദ്ധതിയിലേക്ക്',
	'move_file_from_com' => 'വിക്കിമീഡിയ കോമൺസിൽ നിന്നും മറ്റൊരു പദ്ധതിയിലേക്ക് പ്രമാണം മാറ്റുക',
	'categories' => 'വർഗ്ഗങ്ങൾ',
	'remove_cats' => 'നിലവിലുള്ള വർഗ്ഗങ്ങൾ നീക്കം ചെയ്യുക',
	'use_checkusage' => 'പുതിയ വർഗ്ഗങ്ങൾ നിർദ്ദേശിക്കാൻ $1കോമൺസെൻസ്$2 ഉപയോഗിക്കുക',
	'use_tusc' => 'നേരിട്ട് പ്രമാണം മാറ്റുന്നതിനായുള്ള അംഗീകാരത്തിനായി $1റ്റി.യു.എസ്.സി.$2 ഉപയോഗിക്കുക',
	'tusc_user' => 'റ്റി.യു.എസ്.സി. ഉപയോക്തൃനാമം',
	'tusc_pass' => 'റ്റി.യു.എസ്.സി. രഹസ്യവാക്ക്',
	'do_it' => 'ചെയ്യുക',
	'error_transfer_usr' => 'താങ്കൾ വിക്കിമീഡിയ കോമൺസിലെ ഉപയോക്തൃനാമം സജ്ജമാക്കിയിട്ടില്ല',
	'error_not_exists' => 'സ്രോതസ്സ് പ്രമാണം നിലവിലില്ല!',
	'error_on_commons' => 'സ്രോതസ്സ് പ്രമാണം $1-ൽ മുമ്പേയുണ്ട്!',
	'error_file_exists' => '$3 വിക്കിയിൽ "$1$4$2" എന്ന പേരിൽ പ്രമാണം മുമ്പേയുണ്ട്!',
	'error_diff_exists' => 'ലക്ഷ്യമിട്ട പേരിൽ ലക്ഷ്യമിട്ട വിക്കിയിൽ മറ്റൊരു പ്രമാണം ഉണ്ട്!',
	'error_no_meta' => 'സ്രോതസ്സ് വിക്കിയെക്കുറിച്ച് യാതൊരു മെറ്റാഡേറ്റയും ഇല്ല! $1ദയവായി പദ്ധതിയിൽ മെറ്റഡേറ്റ ചേർക്കുക/പുതുക്കുക$2',
	'error_meta_no_good' => 'മെറ്റാഡേറ്റ: ഉപയോഗ്യങ്ങളായ ഫലകങ്ങൾ കണ്ടെത്താനായില്ല! $1ദയവായി പദ്ധതിയിൽ മെറ്റഡേറ്റ ചേർക്കുക/പുതുക്കുക$2',
	'error_meta_bad' => 'മെറ്റാഡേറ്റ: ഉപയോഗ്യമല്ലാത്ത ഫലകമാണ് ലഭിച്ചത്! $1ദയവായി പദ്ധതിയിൽ മെറ്റഡേറ്റ ചേർക്കുക/പുതുക്കുക$2',
	'original_wikitext' => 'യഥാർത്ഥ വിക്കി എഴുത്ത്',
	'new_wikitext' => 'പുതിയ വിക്കി എഴുത്ത്',
	'new_filename' => 'പ്രമാണത്തിന്റെ പുതിയ പേര്:',
	'output_information' => 'താങ്കൾ തന്നെ അപ്‌ലോഡ് ചെയ്യാനായി, മുകളിൽ നൽകിയിരിക്കുന്ന എഴുത്ത് തിരുത്തുക (ആവശ്യമെങ്കിൽ), താങ്കളുടെ കമ്പ്യൂട്ടറിൽ $1പ്രമാണം$2 സേവ് ചെയ്യുക, എന്നിട്ട് $3അപ്‌ലോഡ് ചെയ്യുക$4.',
	'upload_submit' => 'അപ്‌ലോഡ് ചെയ്യുക!',
	'target_wiki' => 'ലക്ഷ്യമിടുന്ന വിക്കി',
	'error_bot_blocked' => 'അപ്‌ലോഡ് ബോട്ട് വിക്കിമീഡിയയിൽ തടയപ്പെട്ടിരിക്കുകയാണ്.',
	'error_upload_meta' => 'മെറ്റാഡേറ്റയിൽ പ്രശ്നങ്ങളുള്ളതിനാൽ നേരിട്ട് അപ്‌ലോഡ് ചെയ്യാൻ കഴിയില്ല (മുകളിൽ കാണുക)!',
	'error_tusc_failed' => 'റ്റി.യു.എസ്.സി. സാധുതാപരിശോധന പരാജയപ്പെട്ടു!',
	'error_only_commons' => 'നേരിട്ടുള്ള അപ്‌ലോഡിങ് വിക്കിമീഡിയ കോമൺസിൽ മാത്രമേ പ്രവർത്തിക്കൂ!',
	'upload_control_text' => 'പുതിയ വിക്കി എഴുത്തുകൾ പരിശോധിച്ച് എല്ലാം ശരിയെങ്കിൽ "$1" അമർത്തുക!',
	'error_commons_user' => 'സ്ഥാനമാറ്റം ചെയ്യുന്ന ഉപയോക്താവിനെ തിരിച്ചറിയാൻ, താങ്കളുടെ വിക്കിമീഡിയ കോമൺസ് ഉപയോക്തൃനാമത്തിന് വിശദീകരണം ആവശ്യമാണ്!',
	'error_upload_users' => 'പരിശോധനാ വേളയിൽ അപ്‌ലോഡ് സൗകര്യം ചില ഉപയോക്താക്കൾക്കു മാത്രമായി പരിമിതപ്പെടുത്തിയിരിക്കുന്നു!',
	'error_upload_file' => 'യഥാർത്ഥ പ്രമാണം ഡൗൺലോഡ് ചെയ്യേണ്ടതില്ല.',
	'help_intro' => 'താങ്കൾക്ക് ബഗ് അറിയിക്കാനോ, ഒരു സവിശേഷത ആവശ്യപ്പെടാനോ, അല്ലെങ്കിൽ ചോദ്യം ചോദിക്കാനോ, താഴെക്കൊടുത്തിരിക്കുന്ന സമ്പർക്ക രീതികളിലേതെങ്കിലും ഉപയോഗിക്കുക:',
	'help_jira' => '$1ജിറ (അംഗത്വമാവശ്യമാണ്)$2 (Project: Commonshelper2)',
	'help_mail' => '$1 എന്ന വിലാസത്തിൽ എഴുത്ത് അയയ്ക്കുക',
	'help_commons' => '$1കോമൺസിൽ ഒരു കുറിപ്പിടുക$2',
);

/** Marathi (मराठी)
 * @author Htt
 * @author V.narsikar
 */
$messages['mr'] = array(
	'attention' => 'लक्ष',
	'description' => 'विकीमीडिया प्रकल्पांतून संचिका विकीमीडिया कॉमन्स येथे स्थानांतरित करण्याचे एक साधन',
	'language' => 'भाषा',
	'project' => 'प्रकल्प',
	'source_file' => 'स्रोत संचिका',
	'categories' => 'वर्ग',
	'remove_cats' => 'सध्या असलेले वर्ग हटवा',
	'use_checkusage' => 'नविन वर्ग सुचविण्यास $1सामान्यज्ञान$2 वापरा',
	'do_it' => 'करा',
	'error_transfer_usr' => 'आपण विकिमिडिया कॉमन्सचे सदस्यनाव स्थापित केले नाही.',
	'error_not_exists' => 'स्रोत संचिका अस्तित्वात नाही',
	'error_on_commons' => 'स्रोत संचिका पूर्वीच $1 वर आहे!',
	'error_file_exists' => '"$1$4$2"  म्हणून संचिका पूर्वीच $3 वर अस्तित्वात आहे.',
	'original_wikitext' => 'मुळ विकि मजकूर',
	'new_wikitext' => 'नविन विकि मजकूर',
	'new_filename' => 'नविन संचिकानाम',
	'upload_submit' => 'पुनर्भारीत करा!',
	'target_wiki' => 'लक्ष्य विकि',
	'error_only_commons' => 'थेट पुनर्भारण(अपलोड) फक्त विकिमिडिया कॉमन्सवरच काम करते!',
	'upload_control_text' => 'कृपया नविन विकि-मजकूर तपासा व जर सर्व आलबेल असेल तर "$1" टिचका!',
	'error_upload_users' => 'चाचणी कालावधीत,पुनर्भारण फक्त मर्यादित सदस्यांनाच उपलब्ध आहे!',
	'error_upload_file' => 'मुळ संचिकेचे अधिभारण(डाउनलोड) करता आले नाही.',
	'help_mail' => ' $1 ला विपत्र पाठवा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'attention' => 'Perhatian',
	'description' => 'Alat untuk memindahkan fail dari projek Wikimedia ke Wikimedia Commons',
	'change_meta' => 'Tukar $1tetapan kategori dan templat $2 untuk $3',
	'jira_link' => 'Laporkan pepijat atau sarankan ciri-ciri baru',
	'language' => 'Bahasa',
	'project' => 'Projek',
	'source_file' => 'Fail sumber',
	'target_file' => 'Fail sasaran',
	'commons_username' => 'Nama pengguna Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons ke projek',
	'move_file_from_com' => 'Pindahkan fail dari Wikimedia Commons ke projek',
	'categories' => 'Kategori',
	'remove_cats' => 'Gugurkan kategori sedia ada',
	'checkusage' => 'Semak Penggunaan',
	'use_checkusage' => 'Gunakan $1Akal Budi$2 untuk menyarankan kategori baru',
	'use_tusc' => 'Gunakan $1TUSC$2 untuk mengesahkan dan memindahkan fail secara terus',
	'tusc_user' => 'Nama pengguna TUSC',
	'tusc_pass' => 'Kata laluan TUSC',
	'do_it' => 'Lakukannya',
	'error_transfer_usr' => 'Anda belum menetapkan nama pengguna Wikipedia Commons',
	'error_not_exists' => 'Fail sumber tidak wujud.',
	'error_on_commons' => 'Fail sumber sudah ada di $1!',
	'error_file_exists' => 'Fail sudah wujud di $3 sebagai "$1$4$2"!',
	'error_diff_exists' => 'Fail sasaran yang berlainan wujud di wiki sasaran dengan nama yang sama!',
	'error_no_meta' => 'Tiada metadata yang dijumpai untuk wiki sumber! $1Sila isikan/kemas kini metadata untuk projek ini$2',
	'error_meta_no_good' => 'Metadata: Tiada templat elok yang dijumpai! $1Sila isikan/kemas kini metadata untuk projek ini$2',
	'error_meta_bad' => 'Metadata: Templat tak elok dijumpai! $1Sila isikan/kemas kini metadata untuk projek ini$2',
	'original_wikitext' => 'Teks wiki asal',
	'new_wikitext' => 'Teks wiki baru',
	'new_filename' => 'Nama fail baru:',
	'output_information' => 'Untuk muat naik manual, sunting teks di atas (jika perlu), simpan $1fail itu$2 dalam komputer anda, kemudian $3muat naiknya$4.',
	'upload_submit' => 'Muat naik!',
	'target_wiki' => 'wiki sasaran',
	'error_bot_blocked' => 'Bot muat naik disekat di Wikimedia Commons.',
	'error_upload_meta' => 'Tidak boleh memuat naik secara terus kerana metadata bermasalah (lihat di atas)!',
	'error_tusc_failed' => 'Pengesahan TUSC gagal!',
	'error_only_commons' => 'Muat naik terus hanya berkesan di Wikimedia Commons!',
	'upload_control_text' => 'Sila semak teks wiki baru dan klik "$1" jika segalanya sempurna!',
	'error_commons_user' => 'Untuk mengenal pasti pengguna yang membuat pemindahan itu, nama pengguna Wikimedia Commons anda haruslah ada dalam keterangan!',
	'error_upload_users' => 'Fungsi muat naik hanya boleh digunakan oleh beberapa pengguna ketika tempoh ujian!',
	'error_upload_file' => 'Fail asal tidak boleh dimuat turun.',
	'help_intro' => 'Apabila ingin melaporkan pepijat, mencadangkan ciri-ciri baru atau menanyakan soalan, anda boleh menggunakan salah satu kaedah berhubung yang berikut:',
	'help_jira' => '$1JIRA (anda memerlukan akaun)$2 (Project: Commonshelper2)',
	'help_mail' => 'Hantar e-mel kepada $1',
	'help_commons' => '$1Catatkan pesanan di Commons$2',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'attention' => 'Attenzjoni',
	'description' => 'Għodda sabiex titrasferixxi fajls mill-proġetti Wikimedia għal Wikimedia Commons',
	'change_meta' => 'Biddel il-$1konfigurazzjoni tal-kategorija u l-mudell$2 għal $3',
	'jira_link' => 'Irrapporta żball jew issuġġerixxi xi modifika',
	'language' => 'Lingwa',
	'project' => 'Proġett',
	'source_file' => 'Fajl oriġinali',
	'target_file' => "Fajl ta' destinazzjoni",
	'commons_username' => 'Isem tal-utent tal-Wikimedia Commons',
	'commons_to_project' => 'Minn Wikimedia Commons għal proġett',
	'move_file_from_com' => 'Mexxi fajl minn Wikimedia Commons għal proġett',
	'categories' => 'Kategoriji',
	'remove_cats' => 'Neħħi kategoriji eżistenti',
	'use_checkusage' => 'Uża $1CommonSense$2 sabiex tissuġġerixxi kategoriji ġodda',
	'use_tusc' => 'Uża $1TUSC$2 sabiex tawtentika u titrasferixxi l-fajl direttament',
	'tusc_user' => 'Isem tal-utent tat-TUSC',
	'tusc_pass' => 'Password tat-TUSC',
	'do_it' => 'Ibgħat',
	'error_transfer_usr' => 'Għadek ma għażilt l-isem tal-utent tal-Wikimedia Commons',
	'error_not_exists' => 'Il-fajl oriġinali ma jeżistix!',
	'error_on_commons' => 'Il-fajl oriġinali diġà fuq $1!',
	'error_file_exists' => 'Il-fajl diġà jeżisti fuq $3 bħala "$1$4$2"!',
	'error_diff_exists' => "Fuq il-wiki ta' destinazzjoni jeżisti diġà fajl bl-istess isem!",
	'error_no_meta' => 'L-ebda <i>metadata</i> ma nstabet dwar il-wiki oriġinali! $1Jekk jogħġbok żid/aġġorna l-<i>metadata</i> għall-proġett$2',
	'original_wikitext' => 'Test tal-wiki oriġinali',
	'new_wikitext' => 'Test tal-wiki ġdid',
	'new_filename' => 'Isem tal-fajl ġdid:',
	'output_information' => "Għal tlugħ manwali, immodifika t-test t'hawn fuq (jekk huwa neċessarju), salva l-$1fajl$2 fuq il-kompjuter tiegħek, u $3tellgħu$4.",
	'upload_submit' => "Tella'!",
	'target_wiki' => "wiki ta' destinazzjoni",
	'error_bot_blocked' => 'Il-bot tat-tlugħ huwa mblukkat fuq Wikimedia Commons.',
	'error_tusc_failed' => 'L-awtentikazzjoni TUSC falliet!',
	'error_only_commons' => 'It-trasferiment dirett jaħdem biss għal Wikimedia Commons!',
	'error_upload_file' => 'Il-fajl oriġinali ma jistax jitniżżel.',
	'help_intro' => "Meta trid tirrapporta ''bug'', tagħti suġġeriment jew għandek mistoqsija, tista' tuża' wieħed mill-modi differenti ta' kuntatt:",
	'help_jira' => '$1JIRA (irid ikollok kont)$2 (Project: Commonshelper2)',
	'help_mail' => 'Ibgħat ittre lil $1',
	'help_commons' => '$1Żid messaġġ fuq Commons$2',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'language' => 'ဘာသာ',
	'project' => 'Project',
	'source_file' => 'ရင်းမြစ်ဖိုင်',
	'categories' => 'အမျိုးအစားများ',
	'error_not_exists' => 'ရင်းမြစ်စာမျက်နှာ မတည်ရှိပါ။',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'attention' => 'توجه',
	'description' => 'اتا ابزار دمبدائن عکسون مدیاویکی وسه به ویکی‌تلمبار',
	'change_meta' => 'تغییرهدائن $1category و تنظیمات شابلون$2 ، $3 وسّه',
	'jira_link' => 'گوزارش یتا اشکال یا اتا پیشنهاد هدائن',
	'language' => 'زوون',
	'project' => 'پروژه',
	'source_file' => 'منبع ِپرونده',
	'target_file' => 'مقصد پرونده',
	'commons_username' => 'کاروری نوم ِویکی‌تلمبار',
	'commons_to_project' => 'ویکی‌تلمبار به پروژه',
	'move_file_from_com' => 'انتقال پرونده ویکی‌تلمبار جه به پروژه',
	'categories' => 'رج‌ئون',
	'remove_cats' => 'پاک هاکردن ِرج‌ئونی که درنه',
	'use_checkusage' => 'استفاده $1CommonSense$2 جه پیشنهاد ترنه رج‌ئون وسّه',
	'use_tusc' => 'استفاده $1TUSC$2 جه تأیید و انتقال مستقیم پرونده وسّه',
	'tusc_user' => 'کاروری نوم TUSC',
	'tusc_pass' => 'رمز TUSC',
	'do_it' => 'انجوم هاده',
	'error_transfer_usr' => 'شِما کاروری نوم ویکی‌تلمبار ره تنظیم نکاردی',
	'error_not_exists' => 'پرونده منبع وجود ندانّه!',
	'error_file_exists' => 'پرونده اسا $3 دله به عنوان «$1$4$2» دَره!',
	'error_diff_exists' => 'اتا پروندهٔ مقصد متفاوت ویکی دله مقصد تحت نوم مشابه دَره!',
	'error_no_meta' => 'هیچ فراداده‌ای ویکی ِدرباره منبع دله پیدانیّه! $1لطفاً فراداده پروژه وسّه اضافه/به‌روز هاکنین$2',
	'error_meta_no_good' => 'فراداده: خار شابلون پیدا نیّه! $1لطفاً فرادادهٔ پروژه ره اضافه/به‌روز هاکنین$2',
	'error_meta_bad' => 'فراداده: بد شابلون پیدا نیّه! $1لطفاً فرادادهٔ پروژه ره اضافه/به‌روز هاکنین$2',
	'original_wikitext' => 'ویکی ِراس‌راسکی بنویشته',
	'new_wikitext' => 'ویکی ِترنه بنویشته',
	'new_filename' => 'پروندهٔ ترنه نوم:',
	'output_information' => 'بارگذاری دستی وسّه، متن بالا ره دچینین (اگر نیاز هسته)، $1پرونده$2 ره شه کامپیوتر دله دمبدین، سپس $3باربی‌یلینش$4.',
	'upload_submit' => 'باربی‌یشتن!',
	'target_wiki' => 'ویکی مقصد',
	'error_bot_blocked' => 'ربات باربی‌یشتن ویکی‌تلمبار دله دَوسته بیّه.',
	'error_upload_meta' => 'ننشنه مستقیم باربی‌یلین به این دلیل که مشکلاتی با فراداده وجود دانّه (زیر ره هارشین)!',
	'error_tusc_failed' => 'بازبینی TUSC شکست بخارده!',
	'error_only_commons' => 'باربی‌یشتن مستقیم فقط ویکی‌تلمبار دله کار کانده!',
	'upload_control_text' => 'لطفاً ویکی ِترنه بنویشته ره بررسی هاکنین و «$1» ره کلیک اگر همه چی درست بی‌یه!',
	'error_upload_file' => 'اصلی پرونده باربی‌یشته نوانه.',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'attention' => 'Merk',
	'description' => 'Et verktøy for å overføre filer fra Wikimedia-prosjekter til Wikimedia Commons',
	'change_meta' => 'Endre $1kategori- og malinnstillinger$2 for $3',
	'jira_link' => 'Rapporter en feil eller foreslå en funksjon',
	'language' => 'Språk',
	'project' => 'Prosjekt',
	'source_file' => 'Kildefil',
	'target_file' => 'Målfil',
	'commons_username' => 'Wikimedia Commons-brukernavn',
	'commons_to_project' => 'Wikimedia Commons til prosjekt',
	'move_file_from_com' => 'Flytt fil fra Wikimedia Commons til prosjekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Fjern eksisterende kategorier',
	'use_checkusage' => 'Bruk $1CommonSense$2 til å foreslå nye kategorier',
	'use_tusc' => 'Bruk $1TUSC$2 til å autentisere og overføre filen direkte',
	'tusc_user' => 'TUSC-brukernavn',
	'tusc_pass' => 'TUSC-passord',
	'do_it' => 'Gjør det',
	'error_transfer_usr' => 'Du har ikke satt et Wikimedia Commons-brukernavn',
	'error_not_exists' => 'Kildefil finnes ikke!',
	'error_on_commons' => 'Kildefil allerede på $1!',
	'error_file_exists' => 'Filen finnes allerede på $3 som «$1$4$2»!',
	'error_diff_exists' => 'En annen målfil finnes allerede på målwikien under samme navn!',
	'error_no_meta' => 'Ingen metadata funnet om kildewikien! $1Legg til/oppdater metadataene for prosjektet$2',
	'error_meta_no_good' => 'Metadata: Ingen gode maler funnet! $1Lenke til metadata$2',
	'error_meta_bad' => 'Metadata: Dårlig mal funnet! $1Legg til/oppdater metadataene for prosjektet$2',
	'original_wikitext' => 'Opprinnelig wikitekst',
	'new_wikitext' => 'Ny wikitekst',
	'new_filename' => 'Nytt filnavn:',
	'output_information' => 'For manuell opplasting, endre teksten ovenfor (om nødvendig), lagre $1filen$2 på din datamaskin, og så $3last den opp$4.',
	'upload_submit' => 'Last opp!',
	'target_wiki' => 'målwikien',
	'error_bot_blocked' => 'Opplastingsbotten er blokkert på Wikimedia Commons.',
	'error_upload_meta' => 'Kan ikke laste opp direkte fordi det er problemer med metadataene (se ovenfor)!',
	'error_tusc_failed' => 'TUSC-verifisering mislyktes!',
	'error_only_commons' => 'Direkte opplasting virker kun på Wikimedia Commons!',
	'upload_control_text' => 'Sjekk den nye wikiteksten og klikk på «$1» hvis alt er OK!',
	'error_commons_user' => 'Brukernavnet ditt på Wikimedia Commons må være i beskrivelsen for at brukeren som gjør overføringen skal kunne identifiseres!',
	'error_upload_users' => 'Opplastingsfunksjonen er kun tilgjengelig for enkelte brukere under testperioden!',
	'error_upload_file' => 'Den opprinnelige filen kan ikke lastes ned.',
	'help_intro' => 'Når du vil rapportere en feil, foreslå en funksjon eller har et spørsmål, kan du bruke en av kontaktmetodene nedenfor:',
	'help_jira' => '$1JIRA (du trenger en konto)$2 (Project: Commonshelper2)',
	'help_mail' => 'Send en e-post til $1',
	'help_commons' => '$1Legg til et innlegg på Commons$2',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'language' => 'Spraak',
	'categories' => 'Kategorien',
);

/** Nepali (नेपाली)
 * @author Krish Dulal
 */
$messages['ne'] = array(
	'source_file' => 'स्रोत फाइल',
	'target_file' => 'लक्ष्य फाइल',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'description' => 'विकिमिदिया ज्याझ्वलं विकिमिदिया कमन्सय् फाइल छ्वयेगु ज्याभः',
	'jira_link' => 'बग विवरण व फिचर्स इनाप',
	'language' => 'भाय्',
	'project' => 'ज्याझ्वः',
	'source_file' => 'स्रोत फाइल',
	'target_file' => 'तार्गेत फाइल',
	'commons_username' => 'विकिमिदिया कमन्स छ्येलामिनां',
	'commons_to_project' => 'विकिमिदिया कमन्सं ज्याझ्वलय्',
	'move_file_from_com' => 'फाइल विकिमिदिया कमन्सं ज्याझ्वले यंकादिसँ',
	'categories' => 'पुचःत',
	'remove_cats' => 'दूगु पुचःत खारेज यानादिसँ',
	'use_checkusage' => '$1CommonSense$2 छ्येला न्हूगु पुचःत प्रस्त्ताव यानादिसँ',
	'use_tusc' => '$1TUSC$2 छ्येला फाइल प्रमाणिकरण यानादिसँ व फाइल छकलं हस्तान्तरण यानादिसँ',
	'tusc_user' => 'TUSC छ्यलामि नां',
	'tusc_pass' => 'TUSC दुथखँग्वः (पासवर्ड)',
	'do_it' => 'थ्व यानादिसँ',
	'error_transfer_usr' => 'छिं विकिमिदिया कमन्स छ्यलामि नां सेत यानामदिनि',
	'error_not_exists' => 'स्रोत फाइल अस्तित्त्व हे मदु!',
	'error_on_commons' => 'स्रोत फाइल न्हापा हे $1य् दु!',
	'error_file_exists' => 'फाइल न्हापा हे $3स "$1$4$2"या रुपय् दु!',
	'error_diff_exists' => 'तार्तेत विकिइ थ्व हे नामं छगू मेगु हे फाइल दु।',
	'error_no_meta' => 'स्रोत विकिया मेतादाता मलु! $1कृपया ज्याझ्वः$2या निंतिं मेतादाता तनादिसँ/अपदेत यानादिसँ।',
	'error_meta_no_good' => 'मेतादाता: बांलाःगु तेम्प्लेत मलु! $1कृपया ज्याझ्वः$2या निंतिं मेतादाता तनादिसँ/अपदेत यानादिसँ।',
	'error_meta_bad' => 'मेतादाता: बांमलाःगु तेम्प्लेत लुत! $1कृपया ज्याझ्वः$2या निंतिं मेतादाता तनादिसँ/अपदेत यानादिसँ',
	'original_wikitext' => 'धाथेंया विकि पाठ',
	'new_wikitext' => 'न्हुगु विकि पाठ',
	'new_filename' => 'न्हुगु फाइलनां',
	'upload_submit' => 'अपलोद!',
	'target_wiki' => 'गंतव्य विकि',
	'error_bot_blocked' => 'विकिमिदिया कमन्सय् अपलोद बोत पनातःगु दु।',
	'error_upload_meta' => 'मेतादाता (च्वे स्वयादिसँ)या समस्यां याना प्रत्यक्ष कथं अपलोद यायेमछिंना च्वंगुदु!',
	'error_tusc_failed' => 'TUSC प्रमाणिकरण विफल जुल!',
	'error_only_commons' => 'प्रत्यक्ष अपलोद विकिमिदिया कमन्सय् जक्क छिं!',
	'upload_control_text' => 'न्हुगु विकि पाठ स्वयादिसँ व दक्वं पाय्छि जुसाः "$1"स तियादिसँ!',
	'error_commons_user' => 'त्रान्सफर छ्य्लामियात म्हसीकेयात छिगु विकिमिदिया कमन्स छ्य्लामि नां विवरणय् दयेमा!',
	'error_upload_users' => 'निरिक्षण कालय् अपलोद फंक्सन निश्चित छ्य्लामितयेत जक्क उपलब्ध दु।',
	'error_upload_file' => 'धाथेंया फाइल दाउनलोद याये मछिं।',
	'help_mail' => '$1य् पौ छ्वयादिसँ',
	'help_commons' => 'कमन्स$2य् पोस्त $1तनादिसँ',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tjcool007
 */
$messages['nl'] = array(
	'attention' => 'Let op',
	'description' => 'Een hulpprogramma om bestanden van Wikimediaprojecten naar Wikimedia Commons over te halen',
	'change_meta' => 'De $1categorie- en sjablooninstellingen$2 voor $3 wijzigen',
	'jira_link' => 'Een bug of suggestie melden',
	'language' => 'Taal',
	'project' => 'Project',
	'source_file' => 'Bronbestand',
	'target_file' => 'Doelbestand',
	'commons_username' => 'Gebruikersnaam op Wikimedia Commons',
	'commons_to_project' => 'Van Wikimedia Commons naar project',
	'move_file_from_com' => 'Bestand van Wikimedia Commons naar project verplaatsen',
	'categories' => 'Categorieën',
	'remove_cats' => 'Bestaande categorieën verwijderen',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => '$1CommonSense$2 gebruiken om suggesties voor nieuwe categorieën te maken',
	'use_tusc' => '$1TUSC$2 gebruiken om aan te melden en het bestand direct over te brengen',
	'tusc_user' => 'TUSC-gebruikersnaam',
	'tusc_pass' => 'TUSC-wachtwoord',
	'do_it' => 'Uitvoeren',
	'error_transfer_usr' => 'U hebt geen gebruikersnaam voor Wikimedia Commons ingesteld',
	'error_not_exists' => 'Het bronbestand bestaat niet!',
	'error_on_commons' => 'Het bronbestand is al aanwezig op $1!',
	'error_file_exists' => 'Het bestand bestaat al op $3 als "$1$4$2"!',
	'error_diff_exists' => 'Er bestaat al een ander doelbestand op de doelwiki met dezelfde naam!',
	'error_no_meta' => 'Er is geen metadata aangetroffen voor de bronwiki! $1Voeg de metadata voor het project toe of werk deze bij$2',
	'error_meta_no_good' => 'Metadata: geen correcte sjablonen aangetroffen! $1Koppeling naar metadata$2',
	'error_meta_bad' => 'Metadata: incorrecte sjabloon aangetroffen! $1Voeg de metadata voor het project toe of werk deze bij$2',
	'original_wikitext' => 'Oorspronkelijke wikitekst',
	'new_wikitext' => 'Nieuwe wikitekst',
	'new_filename' => 'Nieuwe bestandsnaam:',
	'output_information' => 'Om handmatig te uploaden doet u het volgende: bewerk de bovenstaande tekst (als nodig), sla $1het bestand$2 op op uw computer om het daarna te $3uploaden$4.',
	'upload_submit' => 'Uploaden',
	'target_wiki' => 'de doelwiki',
	'error_bot_blocked' => 'De uploadrobot is geblokkeerd op Wikimedia Commons.',
	'error_upload_meta' => 'Het is niet mogelijk direct te uploaden omdat er een probleem is met de metadata (zie hierboven)!',
	'error_tusc_failed' => 'De TUSC-controle is mislukt.',
	'error_only_commons' => 'Directe upload is alleen mogelijk naar Wikimedia Commons!',
	'upload_control_text' => 'Controleer de wikitekst en klik op "$1" als alles in orde is.',
	'error_commons_user' => 'Om de gebruiker die het bestand overdraagt te kunnen identificeren, moet uw gebruikersnaam bij Wikimedia Commons in de beschrijving voorkomen.',
	'error_upload_users' => 'Tijdens de testperiode is de uploadfunctionaliteit is alleen beschikbaar voor een selecte groep gebruikers.',
	'error_upload_file' => 'Het oorspronkelijke bestand kan niet gedownload worden.',
	'help_intro' => 'Als u een probleem wilt rapporteren, een nieuwe functie wilt aanvragen of een vraag hebt, dan kunt u de onderstaande contacttypen gebruiken:',
	'help_jira' => '$1JIRA (u hebt een gebruiker nodig)$2 (Project: Commonshelper2)',
	'help_mail' => 'Mail sturen aan $1',
	'help_commons' => '$1Bericht toevoegen op Wikimedia Commons$2',
);

/** no (no)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'attention' => 'Merk',
	'description' => 'Et verktøy for å overføre filer fra Wikimedia-prosjekter til Wikimedia Commons',
	'change_meta' => 'Endre $1kategori- og malinnstillinger$2 for $3',
	'jira_link' => 'Rapporter en feil eller foreslå en funksjon',
	'language' => 'Språk',
	'project' => 'Prosjekt',
	'source_file' => 'Kildefil',
	'target_file' => 'Målfil',
	'commons_username' => 'Wikimedia Commons-brukernavn',
	'commons_to_project' => 'Wikimedia Commons til prosjekt',
	'move_file_from_com' => 'Flytt fil fra Wikimedia Commons til prosjekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Fjern eksisterende kategorier',
	'use_checkusage' => 'Bruk $1CommonSense$2 til å foreslå nye kategorier',
	'use_tusc' => 'Bruk $1TUSC$2 til å autentisere og overføre filen direkte',
	'tusc_user' => 'TUSC-brukernavn',
	'tusc_pass' => 'TUSC-passord',
	'do_it' => 'Gjør det',
	'error_transfer_usr' => 'Du har ikke satt et Wikimedia Commons-brukernavn',
	'error_not_exists' => 'Kildefil finnes ikke!',
	'error_on_commons' => 'Kildefil allerede på $1!',
	'error_file_exists' => 'Filen finnes allerede på $3 som «$1$4$2»!',
	'error_diff_exists' => 'En annen målfil finnes allerede på målwikien under samme navn!',
	'error_no_meta' => 'Ingen metadata funnet om kildewikien! $1Legg til/oppdater metadataene for prosjektet$2',
	'error_meta_no_good' => 'Metadata: Ingen gode maler funnet! $1Lenke til metadata$2',
	'error_meta_bad' => 'Metadata: Dårlig mal funnet! $1Legg til/oppdater metadataene for prosjektet$2',
	'original_wikitext' => 'Opprinnelig wikitekst',
	'new_wikitext' => 'Ny wikitekst',
	'new_filename' => 'Nytt filnavn:',
	'output_information' => 'For manuell opplasting, endre teksten ovenfor (om nødvendig), lagre $1filen$2 på din datamaskin, og så $3last den opp$4.',
	'upload_submit' => 'Last opp!',
	'target_wiki' => 'målwikien',
	'error_bot_blocked' => 'Opplastingsbotten er blokkert på Wikimedia Commons.',
	'error_upload_meta' => 'Kan ikke laste opp direkte fordi det er problemer med metadataene (se ovenfor)!',
	'error_tusc_failed' => 'TUSC-verifisering mislyktes!',
	'error_only_commons' => 'Direkte opplasting virker kun på Wikimedia Commons!',
	'upload_control_text' => 'Sjekk den nye wikiteksten og klikk på «$1» hvis alt er OK!',
	'error_commons_user' => 'Brukernavnet ditt på Wikimedia Commons må være i beskrivelsen for at brukeren som gjør overføringen skal kunne identifiseres!',
	'error_upload_users' => 'Opplastingsfunksjonen er kun tilgjengelig for enkelte brukere under testperioden!',
	'error_upload_file' => 'Den opprinnelige filen kan ikke lastes ned.',
	'help_intro' => 'Når du vil rapportere en feil, foreslå en funksjon eller har et spørsmål, kan du bruke en av kontaktmetodene nedenfor:',
	'help_jira' => '$1JIRA (du trenger en konto)$2 (Project: Commonshelper2)',
	'help_mail' => 'Send en e-post til $1',
	'help_commons' => '$1Legg til et innlegg på Commons$2',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'attention' => 'Atencion',
	'language' => 'Lenga',
	'project' => 'Projècte',
	'source_file' => 'Fichièr font',
	'target_file' => 'Fichièr cibla',
	'categories' => 'Categorias',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'attention' => 'ଧ୍ୟାନ ଦିଅନ୍ତୁ',
	'description' => 'ଉଇକିମେଡିଆ ପ୍ରକଳ୍ପରୁ ଉଇକିମେଡିଆ କମନ୍ସକୁ ଫାଇଲ ସ୍ଥାନାନ୍ତର କରିବା ପାଇଁ ଏକ ସରଞ୍ଜାମ',
	'change_meta' => '$3 ପାଇଁ $1ଶ୍ରେଣୀ ଏବଂ $2ଟେମ୍ପଲେଟକୁ ବଦଳାଇବେ',
	'jira_link' => 'ଗୋଟିଏ ଅସୁବିଧା ଜଣାନ୍ତୁ କିମ୍ବା ଗୋଟିଏ ବିଶେଷତ୍ଵ ପ୍ରସ୍ତାବ ଦିଅନ୍ତୁ',
	'language' => 'ଭାଷା',
	'project' => 'ପ୍ରକଳ୍ପ',
	'source_file' => 'ଆଧାର ଫାଇଲ',
	'target_file' => 'ଲକ୍ଷସ୍ଥଳରେ ଥିବା ଫାଇଲ',
	'commons_username' => 'ଉଇକିମେଡିଆ କମନ୍ସ ବ୍ୟବହାରକାରୀ ନାମ',
	'commons_to_project' => 'ଉଇକିମେଡିଆ କମନ୍ସରୁ ପ୍ରକଳ୍ପକୁ',
	'move_file_from_com' => 'ଫାଇଲଗୁଡିକୁ ଉଇକିମେଡିଆ କମନ୍ସରୁ ପ୍ରକଳ୍ପକୁ ଘୁଞ୍ଚାନ୍ତୁ',
	'categories' => 'ଶ୍ରେଣୀଗୁଡିକ',
	'remove_cats' => 'ଆଗରୁଥିବା ଶ୍ରେଣୀଗୁଡିକୁ କାଢିଦିଅନ୍ତୁ',
	'use_checkusage' => 'ନୂଆ ଶ୍ରେଣୀ ପ୍ରସ୍ତାବ ଦେବା ପାଇଁ $1CommonSense$2 ବ୍ୟବହାର କରନ୍ତୁ',
	'use_tusc' => 'ଅନୁମତି ପାଇଁ ଓ ଫାଇଲଗୁଡିକୁ ସିଧା ସ୍ଥାନାନ୍ତର କରିବା ପାଇଁ $1TUSC$2 ବ୍ୟବହାର କରନ୍ତୁ',
	'tusc_user' => 'TUSC ବ୍ୟବହାରକାରୀନାମ',
	'tusc_pass' => 'TUSC ପାସୱାର୍ଡ',
	'do_it' => 'ଏହାକୁ କରନ୍ତୁ',
	'error_transfer_usr' => 'ଆପଣ ଉଇକିମେଡିଆ କମନ୍ସରେ କୌଣସି ବ୍ୟବହାରକାରୀନାମ ଦେଇ ନାହାନ୍ତି',
	'error_not_exists' => 'ମୂଳ ପୃଷ୍ଠାଟି ନାହିଁ !',
	'error_on_commons' => 'ମୂଳ ଫାଇଲଟି $1ରେ ଆଗରୁ ଅଛି !',
	'error_file_exists' => '$3 ଫାଇଲଟି ଆଗରୁ "$1$4$2" ଭାବେ ଅଛି !',
	'error_diff_exists' => 'ଲକ୍ଷସ୍ଥଳ ଉଇକିରେ ସମାନ ନାମରେ ଆଉ ଗୋଟିଏ ଅଲଗା ଫାଇଲଅଛି !',
	'error_meta_no_good' => 'ମେଟାଡାଟା: କୌଣସି ଟେମ୍ପଲେଟ ମିଳିଲା ନାହି ! $1 ଦୟାକରି $2 ପ୍ରକଳ୍ପ ପାଇଁ ମେଟାଡାଟା ଯୋଡନ୍ତୁ/ଅପଲୋଡ କରନ୍ତୁ',
	'error_meta_bad' => 'ମେଟାଡାଟା: ଖରାପ ଟେମ୍ପଲେଟ ମିଳିଲା ! $1 ଦୟାକରି $2 ପ୍ରକଳ୍ପ ପାଇଁ ମେଟାଡାଟା ଯୋଡନ୍ତୁ/ଅପଲୋଡ କରନ୍ତୁ',
	'original_wikitext' => 'ମୂଳ ଉଇକି ଲେଖା',
	'new_wikitext' => 'ନୂଆ ଉଇକି ଲେଖା',
	'new_filename' => 'ନୂଆ ଫାଇଲନାମ :',
	'upload_submit' => 'ଅପଲୋଡ଼ !',
	'target_wiki' => 'ଲକ୍ଷସ୍ଥଳ ଉଇକିଟି',
	'error_bot_blocked' => 'ଉଇକିମେଡିଆ କମନ୍ସରେ ଅପଲୋଡ ବଟଟି ବନ୍ଦ ହେଇ ଯାଇଛି ।',
	'error_upload_meta' => 'ମେଟାଡାଟାରେ ଅସୁବିଧା ଥିବାରୁ ପ୍ରତ୍ୟେକ୍ଷ ଭାବେ ଅପଲୋଡ ହୋଇ ପାରୁନାହିଁ (ଉପରକୁ ଦେଖନ୍ତୁ) !',
	'error_tusc_failed' => 'TUSC ଯାଞ୍ଚ ବିଫଳ ହେଲା !',
	'error_only_commons' => 'ସିଧାସଳଖ ଅପଲୋଡଟି କେବଳ ଉଇକିମେଡିଆ କମନ୍ସରେ କାମ କରେ !',
	'upload_control_text' => 'ଦୟାକରି ନୂଆ ଉଇକି ଲେଖାଟିକୁ ଯାଞ୍ଚ କରିଦିଅନ୍ତୁ ଏବଂ ଯଦି ସବୁ ଠିକ ଅଛି ତାହେଲେ $1ରେ କ୍ଲିକ କରନ୍ତୁ !',
	'error_upload_users' => 'ଅପଲୋଡତି କେବଳ ପରୀକ୍ଷା କରାଯାଉଥିବା ବେଳେ କିଛି ବ୍ୟବହାରକାରୀମାନଙ୍କ ପାଇଁ ଉପଲବ୍ଧ ହୋଇଥାଏ !',
	'error_upload_file' => 'ପ୍ରକୃତ ଫାଇଲଟି ଡାଉନଲୋଡ ହୋଇ ପାରିବ ନାହିଁ ।',
	'help_jira' => '$1JIRA (ଆପଣଙ୍କର ଖାତା ଖୋଲିବା ଦରକାର)$2 (ପ୍ରକଳ୍ପ: Commonshelper2)',
	'help_mail' => '$1କୁ ଗୋଟିଏ ମେଲ ପଠେଇବେ',
	'help_commons' => '$2 କମନ୍ସରେ $1 ପୋଷ୍ଟ ଯୋଡନ୍ତୁ',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Aalam
 */
$messages['pa'] = array(
	'attention' => 'ਧਿਆਨ ਦਿਓ',
	'language' => 'ਭਾਸ਼ਾ',
	'project' => 'ਪਰੋਜੈਕਟ',
	'source_file' => 'ਸਰੋਤ ਫਾਇਲ',
	'target_file' => 'ਟਾਰਗੇਟ ਫਾਇਲ',
	'commons_username' => 'ਵਿਕਿਮੀਡਿਆ ਕਾਮਨਜ਼ ਯੂਜ਼ਰ-ਨਾਂ',
	'categories' => 'ਕੈਟਾਗਰੀਆਂ',
	'remove_cats' => 'ਮੌਜੂਦਾ ਕੈਟਾਗਰੀਆਂ ਹਟਾਓ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'language' => 'Schprooch',
	'categories' => 'Abdeelinge',
	'upload_submit' => 'Ufflaade!',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'attention' => 'Uffbasse',
	'language' => 'Schbrooch',
	'project' => 'Brojegd',
	'categories' => 'Klasse',
	'do_it' => 'Mags',
	'upload_submit' => 'Nufflaade!',
);

/** Pali (पालि)
 * @author Anand Vivek Satpathi
 */
$messages['pi'] = array(
	'language' => 'भाषा',
);

/** Polish (polski)
 * @author Sp5uhe
 * @author Woytecr
 */
$messages['pl'] = array(
	'attention' => 'Uwaga',
	'description' => 'Narzędzie do przesyłania plików z projektów Wikimedia do Wikimedia Commons',
	'change_meta' => 'Zmień $1kategorię i ustawienia szablonu$2 dla $3',
	'jira_link' => 'Zgłoś błąd lub zaproponuj nową funkcję',
	'language' => 'Język',
	'project' => 'Projekt',
	'source_file' => 'Plik źródłowy',
	'target_file' => 'Plik docelowy',
	'commons_username' => 'Nazwa użytkownika w Wikimedia Commons',
	'commons_to_project' => 'Z Wikimedia Commons do projektu',
	'move_file_from_com' => 'Przenieś plik z Wikimedia Commons do projektu',
	'categories' => 'Kategorie',
	'remove_cats' => 'Usuń istniejące kategorie',
	'use_checkusage' => 'Użyj $1CommonSense$2 sugerującego nowe kategorie',
	'use_tusc' => 'Skorzystaj z $1TUSC$2 aby uwierzytelnić się i przesłać plik bezpośrednio,',
	'tusc_user' => 'Nazwa użytkownika TUSC',
	'tusc_pass' => 'Hasło TUSC',
	'do_it' => 'Zrób to',
	'error_transfer_usr' => 'Nie podałeś nazwy użytkownika na Wikimedia Commons',
	'error_not_exists' => 'Brak pliku źródłowego!',
	'error_on_commons' => 'Plik źródłowy już jest na $1!',
	'error_file_exists' => 'Plik już istnieje na $3 pod nazwą „$1$4$2“!',
	'error_diff_exists' => 'Na docelowej wiki istnieje już inny plik o tej samej nazwie!',
	'error_no_meta' => 'Nie odnaleziono metadanych źródłowej wiki! $1Dodaj lub uaktualnij matadane projektu$2',
	'error_meta_no_good' => 'Metadane – nie odnaleziono dobrych szablonów! $1Dodaj lub uaktualnij metadane projektu$2',
	'error_meta_bad' => 'Metadane – odnaleziono zły szablon! $1Dodaj lub uaktualnij metadane projektu$2',
	'original_wikitext' => 'Oryginalny tekst wiki',
	'new_wikitext' => 'Nowy tekst wiki',
	'new_filename' => 'Nowa nazwa pliku',
	'output_information' => 'Jeśli chcesz ręcznie przesłać plik, zmodyfikuj powyższy tekst (jeśli to konieczne), zapisz $1plik$2 na swoim komputerze, a następnie $3prześlij go$4.',
	'upload_submit' => 'Prześlij!',
	'target_wiki' => 'docelowa wiki',
	'error_bot_blocked' => 'Robot przesyłający pliki został zablokowany na Wikimedia Commons.',
	'error_upload_meta' => 'Nie można przesłać bezpośrednio ponieważ wystąpił problem z danymi meta (sprawdź powyżej)!',
	'error_tusc_failed' => 'Weryfikacja TUSC nie powiodła się!',
	'error_only_commons' => 'Bezpośrednie przesyłanie działa tylko na Wikimedia Commons!',
	'upload_control_text' => 'Sprawdź nowy tekst w formacie wiki, a następnie jeżeli wszystko jest w porządku kliknij „$1“!',
	'error_commons_user' => 'Identyfikacja kto przesłał plik wymaga abyś podał w opisie swoją nazwę użytkownika na Wikimedia Commons!',
	'error_upload_users' => 'W okresie testowania przesyłanie jest dostępne tylko dla niektórych użytkowników!',
	'error_upload_file' => 'Oryginalny plik nie może zostać pobrany.',
	'help_intro' => 'Jeśli chcesz zgłosić błąd, zaproponować coś nowego lub masz pytanie, możesz użyć jednego z poniższych sposobów kontaktu:',
	'help_jira' => '$1JIRA (musisz posiadać konto)$2 (Projekt Commonshelper2)',
	'help_mail' => 'Wyślij e‐mail do $1',
	'help_commons' => '$1Dodaj wiadomość na Commons$2',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'attention' => 'Atension',
	'description' => "N'utiss për tramudé dj'archivi dai proget Wikimedia a Wikimedia Commons",
	'change_meta' => 'Modifiché la $1categorìa e lë stamp dël model$2 për $3',
	'jira_link' => "Arpòrta n'eror o sugeriss na funsion",
	'language' => 'Lenga',
	'project' => 'Proget',
	'source_file' => 'Archivi sorgiss',
	'target_file' => 'Archivi destinassion',
	'commons_username' => "Stranòm d'utent ëd Wikimedia Commons",
	'commons_to_project' => 'Da Wikimedia Commons al proget',
	'move_file_from_com' => "Tramudé l'archivi da Wikimedia Commons al proget",
	'categories' => 'Categorìe',
	'remove_cats' => 'Gavé le categorìe esistente',
	'use_checkusage' => 'Dovré $1CommonSense$2 për sugerì le neuve categorìe',
	'use_tusc' => "Dovré $1TUSC$2 për autentiché e tramudé l'archivi diretament",
	'tusc_user' => "Stranòm d'utent TUSC",
	'tusc_pass' => 'Ciav TUSC',
	'do_it' => 'Falo',
	'error_transfer_usr' => "A l'ha nen ampostà në stranòm d'utent Wikimedia Commons",
	'error_not_exists' => "L'archivi sorgiss a esist pa!",
	'error_on_commons' => "L'archivi sorgiss a l'é già dzor $1!",
	'error_file_exists' => 'L\'archivi a esist già dzor $3 com "$1$4$2"!',
	'error_diff_exists' => "N'archivi destinassion diferent a esist an sla wiki destinassion con ël midem nòm!",
	'error_no_meta' => 'Gnun metadat trovà për da wiki sorgiss! $1Për piasì, gionté/agiorné ij metadat për ël proget$2',
	'error_meta_no_good' => 'Metadat: Gnun stamp bon trovà! $1Për piasì gionta/agiorna ij metadat për ël proget$2',
	'error_meta_bad' => 'Metadat: Në stamp pa bon trovà! $1Për piasì gionta/agiorna ij metadat për ël proget$2',
	'original_wikitext' => 'Test original dla wiki',
	'new_wikitext' => 'Test neuv dla wiki',
	'new_filename' => "Neuv nòm d'archivi:",
	'output_information' => "Për ël cariagi manual, modifiché ël test sì-dzora (se necessari), ch'a argistra $1l'archivi$2 su sò ordinator, peui $3ch'a lo caria$4.",
	'upload_submit' => 'Carié!',
	'target_wiki' => 'la wiki destinassion',
	'error_bot_blocked' => "Ël trigomiro ëd cariament a l'é blocà dzor Wikimedia Commons.",
	'error_upload_meta' => 'As peul pa cariesse diretament përchè a-i é un problema con ij metadat (vëdde sì-dzora)!',
	'error_tusc_failed' => 'Verìfica TUSC falìa!',
	'error_only_commons' => 'Ël cariagi diret a travaja mach su Wikimedia Commons!',
	'upload_control_text' => 'Për piasì contròla ël neuv test wiki e sgnaca "$1" se tut a và bin!',
	'error_commons_user' => "Për identifiché l'utent ch'a fa ël trasferiment, sò stranòm d'utent ëd Wikimedia Commons a dev essie ant la descrission!",
	'error_upload_users' => "Le funsion ëd cariament a l'é mach disponìbil për chèich utent durant ël perìod ëd preuva!",
	'error_upload_file' => "L'archivi original a peul pa esse dëscarià.",
	'help_intro' => 'Quand a veul arporté un givo, sugerì na funsion o fé na domanda, a peul dovré un-a dle sòrt ëd contat sì-sota:',
	'help_jira' => '$1JIRA (at serv un cont)$2 (Project: Commonshelper2)',
	'help_mail' => 'Mandé un mëssagi a $1',
	'help_commons' => '$1Gionta un mëssagi dzor Commons$2',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'attention' => 'پاملرنه',
	'language' => 'ژبه',
	'project' => 'پروژه',
	'source_file' => 'سرچينيزه دوتنه',
	'target_file' => 'د موخې دوتنه',
	'categories' => 'وېشنيزې',
	'tusc_user' => 'TUSC کارن نوم',
	'tusc_pass' => 'TUSC پټنوم',
	'do_it' => 'ترسره يې کړه',
	'new_wikitext' => 'نوی ويکي متن',
	'new_filename' => 'د نوې دوتنې نوم:',
	'upload_submit' => 'پورته کول:',
	'target_wiki' => 'د موخې ويکي',
);

/** Portuguese (português)
 * @author Analuisa
 * @author Luckas
 */
$messages['pt'] = array(
	'attention' => 'Atenção',
	'language' => 'Língua',
	'project' => 'Projeto',
	'categories' => 'Categorias',
	'remove_cats' => 'Remover categorias existentes',
	'new_filename' => 'Novo nome do arquivo:',
	'upload_submit' => 'Upload!',
	'target_wiki' => 'o wiki alvo',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Helder.wiki
 * @author Luckas
 * @author TheGabrielZaum
 * @author 555
 */
$messages['pt-br'] = array(
	'attention' => 'Atenção',
	'description' => 'Uma ferramenta para transferir arquivos de projetos da Wikimedia para o Wikimedia Commons',
	'change_meta' => 'Alterar a $1categoria e as configurações da predefinição$2 para a $3',
	'jira_link' => 'Relatar um bug ou sugerir uma funcionalidade',
	'language' => 'Idioma',
	'project' => 'Projeto',
	'source_file' => 'Arquivo de origem',
	'target_file' => 'Arquivo de destino',
	'commons_username' => 'Nome de usuário no Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons para projeto',
	'move_file_from_com' => 'Mover arquivo do Wikimedia Commons para o projeto',
	'categories' => 'Categorias',
	'remove_cats' => 'Remover categorias existentes',
	'use_checkusage' => 'Usar $1CommonSense$2 para sugerir novas categorias',
	'use_tusc' => 'Usar $1TUSC$2 para autenticar e transferir o arquivo diretamente',
	'tusc_user' => 'Nome de usuário no TUSC',
	'tusc_pass' => 'Senha no TUSC',
	'do_it' => 'Faça isso',
	'error_transfer_usr' => 'Você não definiu um nome de usuário do Wikimedia Commons',
	'error_not_exists' => 'O arquivo de origem não existe!',
	'error_on_commons' => 'Arquivo de origem já se encontra em $1!',
	'error_file_exists' => 'O arquivo já existe na $3 como "$1$4$2"!',
	'error_diff_exists' => 'Um arquivo de destino diferente existe na wiki de destino com o mesmo nome!',
	'error_no_meta' => 'Não foram encontrados metadados sobre a wiki de origem! $1Por favor, adicione/atualize os metadados para o projeto$2',
	'error_meta_no_good' => 'Metadados: Não foram encontradas boas predefinições! $1Por favor, adicione/atualize os metadados para o projeto$2',
	'error_meta_bad' => 'Metadados: Foi encontrada uma predefinição ruim! $1Por favor, adicione/atualize os metadados para o projeto$2',
	'original_wikitext' => 'Código wiki original',
	'new_wikitext' => 'Novo código wiki',
	'new_filename' => 'Novo nome de arquivo:',
	'output_information' => 'Para fazer o carregamento manual, edite o texto acima (se necessário), salve $1o arquivo$2 no seu computador, em seguida, $3carregue-o$4.',
	'upload_submit' => 'Enviar!',
	'target_wiki' => 'a wiki de destino',
	'error_bot_blocked' => 'O robô de carregamento está bloqueado no Wikimedia Commons.',
	'error_upload_meta' => 'Não é possível fazer upload diretamente, pois há problema com os metadados (veja acima)!',
	'error_tusc_failed' => 'Falha na verificação do TUSC!',
	'error_only_commons' => 'O upload direto funciona somente no Wikimedia Commons!',
	'upload_control_text' => 'Por favor, verifique o novo código wiki e clique em "$1" se tudo estiver OK!',
	'error_commons_user' => 'Para identificar o usuário da transferência, o seu nome de usuário no Wikimedia Commons tem que estar na descrição!',
	'error_upload_users' => 'A função de upload só está disponível para alguns usuários durante o período de teste!',
	'error_upload_file' => 'O arquivo original não pode ser baixado.',
	'help_intro' => 'Caso queire reportar um bug, sugerir uma função ou tenha uma dúvida, você pode usar uma das formas de contato abaixo:',
	'help_jira' => '$1JIRA (você precisa de uma conta)$2 (Projeto: Commonshelper2)',
	'help_mail' => 'Enviar um e-mail a $1',
	'help_commons' => '$1Inserir uma mensagem no Commons$2',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'attention' => 'Atenție',
	'description' => 'Un instrument pentru transferul fișierelor de la alte proiecte ale Wikimediei către Wikimedia Commons',
	'change_meta' => 'Schimbați $1categoria și setările formatului$2 pentru $3',
	'jira_link' => 'Raportați o eroare sau sugerați îmbunătățiri',
	'language' => 'Limbă',
	'project' => 'Proiect',
	'source_file' => 'Fișier sursă',
	'target_file' => 'Fișier țintă',
	'commons_username' => 'Numele de utilizator de la Wikimedia Commons',
	'commons_to_project' => 'De la Wikimedia Commons la proiect',
	'move_file_from_com' => 'Mută fișierul de la Wikimedia Commons la proiectul indicat',
	'categories' => 'Categorii',
	'remove_cats' => 'Elimină categoriile existente',
	'use_checkusage' => 'Utilizează $1CommonSense$2 pentru sugestii de noi categorii',
	'use_tusc' => 'Utilizează $1TUSC$2 pentru autentificare și transfer direct al fișierului',
	'tusc_user' => 'Numele de utilizator TUSC',
	'tusc_pass' => 'Parola TUSC',
	'do_it' => 'Execută',
	'error_transfer_usr' => 'Nu ați setat un nume de utilizator pentru Wikimedia Commons',
	'error_not_exists' => 'Fișierul sursă nu există!',
	'error_on_commons' => 'Fișierul sursă se află deja pe $1 !',
	'error_file_exists' => 'Fișierul există deja la $3 cu numele „$1$4$2”!',
	'error_diff_exists' => 'Alt fișier țintă există deja pe wikiul țintă sub același nume!',
	'error_no_meta' => 'Nu s-au găsit metadate despre wikiul sursă! $1Vă rugăm să adăugați/actualizați metadatele pentru proiectul în cauză$2',
	'error_meta_no_good' => 'Metadate: nu s-a găsit niciun format bun! $1Legătură către metadate$2',
	'error_meta_bad' => 'Metadate: s-a găsit un format nepotrivit! $1Vă rugăm să adăugați/actualizați metadatele pentru proiectul în cauză$2',
	'original_wikitext' => 'Text wiki original',
	'new_wikitext' => 'Text wiki nou',
	'new_filename' => 'Noul nume al fișierului:',
	'output_information' => 'Pentru încărcare manuală, modificați textul de mai sus (dacă este necesar), salvați $1fișierul$2 pe calculatorul dumneavoastră, după care $3încărcați-l$4.',
	'upload_submit' => 'Încarcă!',
	'target_wiki' => 'wikiul țintă',
	'error_bot_blocked' => 'Robotul care efectuează încărcarea este blocat pe Wikimedia Commons.',
	'error_upload_meta' => 'Nu se poate încărca direct, deoarece există probleme cu metadatele (vedeți mai sus)!',
	'error_tusc_failed' => 'Verificarea TUSC nu a reușit!',
	'error_only_commons' => 'Încărcarea directă funcționează numai la Wikimedia Commons!',
	'upload_control_text' => 'Vă rugăm să verificați noul text wiki și să apăsați pe „$1” dacă totul este în regulă!',
	'error_commons_user' => 'Pentru a identifica utilizatorul care a efectuat transferul, numele dumneavoastră de utilizator de la Wikimedia Commons trebuie să se afle în descriere!',
	'error_upload_users' => 'Funcția de încărcare este disponibilă doar pentru unii utilizatori în timpul perioadei de testare!',
	'error_upload_file' => 'Fișierul original nu poate fi descărcat.',
	'help_intro' => 'Dacă doriți să raportați o eroare, să sugerați o caracteristică sau să adresați o întrebare, puteți folosi una din metodele de contact de mai jos:',
	'help_jira' => '$1JIRA (aveți nevoie de un cont)$2 (Project: Commonshelper2)',
	'help_mail' => 'Trimite un e-mail către $1',
	'help_commons' => '$1Adaugă un comentariu la Commons$2',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'attention' => 'Attenzione',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => "'Nu strumende pe trasferì le file da le proggette Wikimedia a Wikimedia Common",
	'change_meta' => "Cange le 'mbostaziune $2 de le $1 categorije e template pe $3",
	'jira_link' => "Comuneche 'nu bug o suggerisce 'na funzionalità",
	'language' => 'Lènghe',
	'project' => 'Proggette',
	'source_file' => 'File sorgende',
	'target_file' => 'File de destinazione',
	'commons_username' => "Nome de l'utende de Uicchimedia Commons",
	'commons_to_project' => "Uicchimedia Common a 'u proggette",
	'move_file_from_com' => "Spuèste 'u file da Uicchimedia Common a 'u proggette",
	'categories' => 'Categorije',
	'remove_cats' => 'Live le categorije ca esistene',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => 'Ause $1CommonSense$2 pe suggerì categorije nove',
	'use_tusc' => 'Ause $1TUSC$2 pe autendicà e trasferì le file direttamende',
	'tusc_user' => 'Nome utende TUSC',
	'tusc_pass' => 'Passuord TUSC',
	'do_it' => 'Falle',
	'error_transfer_usr' => "Tu non g'è 'mbostate 'nu nome utende sus a UicchiMedia Commons",
	'error_not_exists' => "'U file sorgende non g'esiste!",
	'error_on_commons' => "'U file sorgende stè ggià sus a $1!",
	'error_file_exists' => '\'U file già esiste sus a $3 cumme "$1$4$2"!',
	'error_diff_exists' => "'Nu file de destinazione diverse esiste sus 'a uicchi de destinazione sotte a 'u stesse nome!",
	'error_no_meta' => 'Nisciune metadata acchiate sus a uicchi de origgene! $1Pe piacere aggiunge/aggiorne le metadata pu proggette$2',
	'error_meta_no_good' => "Metadata: Nisciune template bbuène ha state acchiate! $1Pe piacere aggiunge/agggiorne 'u metadata pu proggette$2",
	'error_meta_bad' => "Metadata: Template sbagliate acchiate!  $1Pe piacere aggiunge/agggiorne 'u metadata pu proggette$2",
	'original_wikitext' => 'Teste de Uicchi origgenale',
	'new_wikitext' => 'Teste de Uicchi nuève',
	'new_filename' => "Nome d'u file nuève:",
	'output_information' => "Pe carecaminde manuale, cange 'u teste de sus (ce serve), reggistre $1'u file$2 sus a 'u combiuter tue, allore $3carecale$4.",
	'upload_submit' => 'Careche!',
	'target_wiki' => "'a uicchi de destinazione",
	'standard_project' => 'uicchipèdie',
	'error_bot_blocked' => "'U bot de le carecaminde jè bloccate sus a Wikimedia Commons.",
	'error_upload_meta' => "Non ge pozze carecà direttamende purcé ste 'nu probbleme cu 'u meta date ('ndruche sus)!",
	'error_tusc_failed' => 'verifiche de TUSC fallite!',
	'error_only_commons' => "'U carecamende dirette fatìe sulamende sus a UicchiMedia Commons!",
	'upload_control_text' => 'Pe piacere verifeche \'u teste nuève e cazze "$1" ce jè tutte apposte!',
	'error_commons_user' => "Pe idendificà l'utende ca trasferisce, 'u cunde utende tune de Uicchimedia Commons addà stà jndr'à descrizione!",
	'error_upload_users' => "'A funzione de carecamende jè sulamende disponibbele pe certe utinde duranne 'u periode de test!",
	'error_upload_file' => "'U file origgenale non ge pò essere scarecate.",
	'help_intro' => "Quanne tu vuè cu signale 'nu bochere, consiglià 'na funzionalità o fà 'na domande, tu puè ausà une de le tipe de condatte aqquà sotte:",
	'help_jira' => "$1JIRA (tu è abbesogne de 'nu cunde utende)$2 (Project: Commonshelper2)",
	'help_mail' => "Manne 'n'email a $1",
	'help_commons' => "$1 Aggiunge 'nu messagge sus a Commons$2",
);

/** Russian (русский)
 * @author Askarmuk
 * @author DarkSTALKER
 * @author Lvova
 */
$messages['ru'] = array(
	'attention' => 'Внимание',
	'description' => 'Инструмент для передачи файлов из проектов Викимедиа на Викисклад',
	'change_meta' => 'Измените $1настройки категории и шаблона$2 для $3',
	'jira_link' => 'Сообщить о проблеме или предложить улучшение',
	'language' => 'Язык',
	'project' => 'Проект',
	'source_file' => 'Исходный файл',
	'target_file' => 'Целевой файл',
	'commons_username' => 'имя пользователя на Викискладе',
	'commons_to_project' => 'из Викисклада в проект',
	'move_file_from_com' => 'Переместить файл с Викисклада в проект',
	'categories' => 'Категории',
	'remove_cats' => 'Удалить существующие категории',
	'use_checkusage' => 'Используйте $1CommonSense$2, чтобы предложить новые категории',
	'use_tusc' => 'Используйте $1TUSC$2 для авторизации и переноса файла напрямую',
	'tusc_user' => 'имя пользователя в TUSC',
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Сделать это',
	'error_transfer_usr' => 'Не задано имя пользователя на Викискладе',
	'error_not_exists' => 'Исходный файл не существует!',
	'error_on_commons' => 'Исходный файл уже на $1!',
	'error_file_exists' => 'Файл уже существует в $3 как "$1$4$2"!',
	'error_diff_exists' => 'Существует другой файл на целевой вики под таким же именем!',
	'error_no_meta' => 'Не обнаружены метаданные об исходной вики! $1Добавьте или обновите метаданные проекта$2',
	'error_meta_no_good' => 'Метаданные: не найдены подходящие шаблоны! $1Добавьте или обновите метаданные проекта$2',
	'error_meta_bad' => 'Метаданные: найдены неподходящие шаблоны! $1Добавьте или обновите метаданные проекта$2',
	'original_wikitext' => 'Оригинальный вики-текст',
	'new_wikitext' => 'Новый вики-текст',
	'new_filename' => 'Новое имя файла:',
	'output_information' => 'Для ручной загрузки исправьте текст сверху (если требуется), сохраните $1файл$2 на свой компьютер, потом $3загрузите его$4.',
	'upload_submit' => 'Загрузить',
	'target_wiki' => 'целевая вики',
	'error_bot_blocked' => 'Загружающий бот заблокирован на Викискладе',
	'error_upload_meta' => 'Не могу загрузить напрямую, потому что есть проблема с метаданными (см. выше)!',
	'error_tusc_failed' => 'Не удалось выполнить проверку TUSC!',
	'error_only_commons' => 'Прямая загрузка работает только для Викисклада!',
	'upload_control_text' => 'Проверьте новый вики-текст и нажмите кнопку "$1", если всё в порядке!',
	'error_commons_user' => 'Для идентификации ваша учетная запись на Wikimedia Commons должна быть в описании!',
	'error_upload_users' => 'На время тестового периода функция загрузки доступна только для некоторых пользователей!',
	'error_upload_file' => 'Не удается загрузить исходный файл.',
	'help_intro' => 'Если вы хотите сообщить об ошибке, предложить функцию или задать вопрос, вы можете использовать один из следующих контактов:',
	'help_jira' => '$1JIRA (требуется аккаунт)$2  (проект: Commonshelper2)',
	'help_mail' => 'Отправить письмо на $1',
	'help_commons' => '$1Добавить сообщение на Commons$2',
);

/** Sanskrit (संस्कृतम्)
 * @author Hemant wikikosh1
 */
$messages['sa'] = array(
	'attention' => 'अवधानम्',
	'description' => 'विकिमीडियाप्रकल्पेभ्यः विकिमीडिया-कौमन्स् इति यावत् सञ्चिकाप्रेषणार्थम् उपकरणम्',
	'language' => 'भाषा',
	'project' => 'प्रकल्पः',
	'source_file' => 'स्रोतःसञ्चिका',
	'target_file' => 'लक्ष्यसञ्चिका',
	'commons_username' => 'विकिमीडियाकौमन्स् सदस्यनाम',
	'commons_to_project' => 'विकिमीडिया-कौमन्स् इत्यतः प्रकल्पं प्रति',
	'move_file_from_com' => 'विकिमीडिया-कौमन्स् इत्यतः प्रकल्पं प्रति सञ्चिका चाल्यताम्',
	'categories' => 'वर्गाः',
	'remove_cats' => 'विद्यमानान् वर्गान् निष्कासयतु',
	'do_it' => 'क्रियताम्',
	'error_transfer_usr' => 'भवता विकिमीडिया-कौमन्स् इत्यत्र सदस्यनाम न संस्थापितमस्ति',
	'error_not_exists' => 'स्रोतःसञ्चिका न विद्यते!',
	'error_on_commons' => 'स्रोतःसञ्चिका $1 इत्यत्र पूर्वे एव विद्यते!',
	'error_file_exists' => 'सञ्चिका तु $3 इत्यत्र "$1$4$2" इति रूपेण पूर्वे एव विद्यते!',
	'error_diff_exists' => 'लक्ष्यविक्याम् अनेनैव नाम्ना भिन्नैका लक्ष्यसञ्चिका विद्यते!',
	'error_no_meta' => 'स्रोतःविकिविषये प्रदत्तांशः न लब्धः! $1कृपया प्रकल्पविषये प्रदत्तांशः युज्यताम्/नवीनीक्रियताम्$2',
	'original_wikitext' => 'मौलिकः विकिपाठः',
	'new_wikitext' => 'नूतनः विकिपाठः',
	'new_filename' => 'नूतनं सञ्चिकानाम :',
	'upload_submit' => 'उद्भार्यताम् !',
	'target_wiki' => 'लक्ष्यविकि',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'attention' => 'අවධානය',
	'jira_link' => 'ද්‍යෝෂයක් වාර්තා කරන්න හෝ විශේෂාංගයක් යෝජනා කරන්න',
	'language' => 'භාෂාව',
	'project' => 'ව්‍යාපෘතිය',
	'source_file' => 'මූලාශ්‍ර ගොනුව',
	'target_file' => 'ඉලක්කගත ගොනුව',
	'commons_username' => 'විකිමාධ්‍ය පොදුජන පරිශීලක නාමය',
	'commons_to_project' => 'ව්‍යාපෘතිය වෙත විකිමීඩියා කොමන්ස්',
	'move_file_from_com' => 'විකිමාධ්‍ය කොමන්ස් වෙතින් ව්‍යාපෘතිය වෙත ගොනුව ගෙනයන්න',
	'categories' => 'ප්‍රවර්ගයන්',
	'remove_cats' => 'පවත්නා ප්‍රවර්ගයන් ඉවත් කරන්න',
	'use_checkusage' => 'නව ප්‍රවර්ගයන් යෝජනා කිරීම සඳහා $1CommonSense$2 භාවිතා කරන්න',
	'tusc_user' => 'TUSC පරිශීලක නාමය',
	'tusc_pass' => 'TUSC මුරපදය',
	'do_it' => 'එය කරන්න',
	'error_transfer_usr' => 'ඔබ විකිමාධ්‍ය කොමන්ස් පරිශීලක නාමයක් සකසා නොමැත',
	'error_not_exists' => 'මූලාශ්‍ර ගොනුව නොපවතියි!',
	'error_on_commons' => 'මූලාශ්‍ර ගොනුව $1 මත දැනටමත් පවතී!',
	'error_file_exists' => '"$1$4$2" ලෙස $3 මත ගොනුව දැනටමත් පවතී!',
	'error_diff_exists' => 'එකම නාමයෙන් ඉලක්කගත විකියේ වෙනස් ඉලක්කගත ගොනුව පවතී!',
	'original_wikitext' => 'මුල් විකි පාඨය',
	'new_wikitext' => 'නව විකි පාඨය',
	'new_filename' => 'නව ගොනුනාමය:',
	'upload_submit' => 'උඩුගත කරන්න!',
	'target_wiki' => 'ඉලක්කගත විකිය',
	'error_bot_blocked' => 'විකිමාධ්‍ය කොමන්සි හී උඩුගත කිරීම් රොබෝ වාරණය කර ඇත.',
	'error_tusc_failed' => 'TUSC සත්‍යාපනය අසාර්ථකයි!',
	'error_only_commons' => 'ඍජු උඩුගත කිරීම් විකිමාධ්‍ය කොමන්සි හී පමණක් වැඩ කරයි!',
	'error_upload_file' => 'මුල් ගොනුව බාගත කල නොහැක.',
	'help_jira' => '$1JIRA (ඔබට ගිණුමක් අවශ්‍ය වේ)$2 (Project: Commonshelper2)',
	'help_mail' => '$1 වෙත තැපෑලක් යවන්න',
	'help_commons' => '$1කොමන්ස්$2 හී හසුනක් එක් කරන ලදී',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'attention' => 'Pozor',
	'description' => 'Orodje za prenos datotek iz projektov Wikimedie v Wikimediino Zbirko',
	'change_meta' => 'Spremeni $1nastavitve kategorije in predloge$2 za $3',
	'jira_link' => 'Prijavite hrošča ali predlagajte funkcijo',
	'language' => 'Jezik',
	'project' => 'Projekt',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Ciljna datoteka',
	'commons_username' => 'Uporabniško ime Wikimediine Zbirke',
	'commons_to_project' => 'Iz Zbirke Wikimedia v projekt',
	'move_file_from_com' => 'Prestavi datoteko iz Zbirke Wikimedia v projekt',
	'categories' => 'Kategorije',
	'remove_cats' => 'Odstrani obstoječe kategorije',
	'use_checkusage' => 'Uporabi $1CommonSense$2 za predlaganje novih kategorij',
	'use_tusc' => 'Uporabi $1TUSC$2 za overitev in neposredni prenos datoteke',
	'tusc_user' => 'Uporabniško ime TUSC',
	'tusc_pass' => 'Geslo TUSC',
	'do_it' => 'Izvedi',
	'error_transfer_usr' => 'Niste določili uporabniškega imena Wikimediine Zbirke',
	'error_not_exists' => 'Izvorna datoteka ne obstaja!',
	'error_on_commons' => 'Izvorna datoteka je že na $1!',
	'error_file_exists' => 'Datoteka že obstaja na $3 kot »$1$4$2«!',
	'error_diff_exists' => 'Različna ciljna datoteka obstaja na ciljnem wikiju pod enakim imenom!',
	'error_no_meta' => 'Za izvorni wiki ni bilo najdenih metapodatkov! $1Dodajte/posodobite metapodatke projekta$2',
	'error_meta_no_good' => 'Metapodatki: Najdena ni bila nobena dobra predloga! $1Povezava do metapodatkov$2',
	'error_meta_bad' => 'Metapodatki: Najdena je bila slaba predloga! $1Dodajte/posodobite metapodatke projekta$2',
	'original_wikitext' => 'Izvirno wikibesedilo',
	'new_wikitext' => 'Novo wikibesedilo',
	'new_filename' => 'Novo ime datoteke:',
	'output_information' => 'Za ročno nalaganje uredite zgornje besedilo (če je potrebno), shranite $1datoteko$2 na vaš računalnik in jo nato $3naložite$4.',
	'upload_submit' => 'Naloži!',
	'target_wiki' => 'ciljni wiki',
	'error_bot_blocked' => 'Nalagalni robot je na Wikimediini Zbirki blokiran.',
	'error_upload_meta' => 'Ne morem naložiti neposredno, ker so težave z metapodatki (glej zgoraj)!',
	'error_tusc_failed' => 'Preverjanje TUSC ni uspelo!',
	'error_only_commons' => 'Neposredno nalaganje deluje samo na Wikimediini Zbirki!',
	'upload_control_text' => 'Prosimo, preverite novo wikibesedilo in kliknite »$1«, če je vse v redu.',
	'error_commons_user' => 'Za ugotavljanje uporabnika, ki je izvedel prenos, mora biti vaše uporabniško ime na Wikimediini Zbirki navedeno v opisu.',
	'error_upload_users' => 'V preizkusnem obdobju lahko nalagajo datoteke samo nekateri uporabniki!',
	'error_upload_file' => 'Izvorne datoteke ni mogoče prenesti.',
	'help_intro' => 'Ko želite prijaviti hrošč, predlagati funkcijo ali imate vprašanje, lahko uporabite eno od spodnjih vrst stika z nami:',
	'help_jira' => '$1JIRA (potrebujete račun)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Pošljite sporočilo na $1',
	'help_commons' => '$1Dodaj objavo na Zbirko$2',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'attention' => 'Iska jir',
	'description' => 'Qalabka lagu gudbiyo File lasha mashruuca Wikimedia ee Wikimedia',
	'change_meta' => 'Badal $1Qaybta iyo template qooqyada$2 ee $3',
	'jira_link' => 'Calaameey qalad ama soo saar badalid',
	'language' => 'Luqad',
	'project' => 'Mashruuc',
	'source_file' => 'Asalka fileka',
	'target_file' => 'Ujeedka fileka',
	'commons_username' => 'Wikimedia Commons adeegsadaha',
	'commons_to_project' => 'Wikimedia Commons ee mashruuca',
	'move_file_from_com' => 'Ka saar fileka Wikimedia Commons ee mashruuca',
	'categories' => 'Qaybaha',
	'remove_cats' => 'Ka saar qaybaha jira',
	'use_checkusage' => 'Adeegso $1CommonSense$2 ee hoos usheegid qayb cusub',
	'use_tusc' => 'Adeegso $1TUSC$2 xaqiijinta iyo gudbinta fileka si toos ah',
	'tusc_user' => 'TUSC Adeegsade',
	'tusc_pass' => 'TUSC Eray sir',
	'do_it' => 'Dir',
	'error_transfer_usr' => 'Ma lihid Wikimedia Commons magac adeegsade',
	'error_not_exists' => 'Asalka fileka lama helin!',
	'error_on_commons' => 'Asalka fileka waa jiraa $1!',
	'error_file_exists' => 'Fileka wuu jiraa $3 sida "$1$4$2"!',
	'error_diff_exists' => 'Waa ku jiraa wiki fileka aad dooneysid isla magacaan',
	'error_no_meta' => 'Cudurdaar helidda ku saabsan cadaynta ku saabsan asalka wiki! $1fadlan ku dar/dib u howl gali cadaynta ku saabsan asalka mashruuca$2',
	'error_meta_no_good' => 'cadaymaha biloowga: lama helin templates! $1fadlan ku dar/dib u howl geli cadaynta ku saabsan asalka mashruuca$2',
	'error_meta_bad' => 'adaymaha biloowga: template xun ayaa la helay! $1fadlan ku dar/dib u howl gali adaynta ku saabsan asalka mashruuca$2',
	'original_wikitext' => 'Asalka qoraalka ee wiki',
	'new_wikitext' => 'Qoraal cusub ee wiki',
	'new_filename' => 'Magaca fileka cusub',
	'output_information' => 'Gacan ku galin, qoraalka sare wax kabadal (hadii loo baahdo), kaydi $1fileka$2 compuyuter kaada, kadib $3gali$4.',
	'upload_submit' => 'Gali!',
	'target_wiki' => 'Ujeedada wiki',
	'error_bot_blocked' => 'Galinta Bot ayaa mamnuucay ee Wikimedia Commons.',
	'error_upload_meta' => 'Ma galin kartid maxaa yeelay waxaa jirta dhibaato la xiriirta xagga cadaymaha biloowga (Kor fiiri)!',
	'error_tusc_failed' => 'Fashil ka yimid dabagal ee TUSC !',
	'error_only_commons' => 'Galinta si toos ah waxa uu ku shaqaynayaa oo kaliya Wikimedia Commons!',
	'upload_control_text' => 'Fadlan iska hubi wiki cusub  qoraalka hadana guji "$1" hadii dhamaan ay ok tahay!',
	'error_commons_user' => 'Si aad u qeexdo qofkii file soo wareejiyey, magacaada adeegsiga ee Wikimedia Commons waa in uu ku jiraa cadaymaha',
	'error_upload_users' => 'Howsha galinta waxaa loo ogol yahay oo kaliya qaar ka mid ah adeegsada yaasha taasina waxa ay ku agtahay xiliga tijaabada!',
	'error_upload_file' => 'Filekii asalka ahaa ma suuroobin laa dajintiisa',
	'help_intro' => "Markii aad doonaysid inaad gudbisid xog waran! qaladaad uun ee tilmaamaya wax gaar ah ama su'aal waxaad adeegsan kartaa mid ka mid ah qaybaha xiriirka",
	'help_jira' => '$1JIRA (waxaad ubaahantahay akoon)$2 (mashruuca: Commonshelper2)',
	'help_mail' => 'U dir E-mail', # Fuzzy
	'help_commons' => '$1ku dar faallo Commons$2',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'attention' => 'Vëmendje',
	'description' => 'Një vegël për të bartur skedarët nga projektet e Wikimedias në Wikimedia Commons',
	'change_meta' => 'Ndryshoni cilësimet e $kategorisë dhe ndërfaqes$2 për $3', # Fuzzy
	'jira_link' => 'Raportoni një vrimë ose sugjeroni një veçori',
	'language' => 'Gjuha',
	'project' => 'Projekti',
	'source_file' => 'Burimi i skedarit',
	'target_file' => 'Skedari i synimit',
	'commons_username' => 'Emri i përdoruesit në Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons në projekt',
	'move_file_from_com' => 'Lëvizni skedarin nga Wikimedia Commons në projekt',
	'categories' => 'Kategori',
	'remove_cats' => 'Largoni kategoritë ekzistuese',
	'use_checkusage' => 'Përdorni $1CommoSense$ për të sugjeruar për kategori të reja.', # Fuzzy
	'use_tusc' => 'Përdorni $1TUSC$2 për të vërtetuar dhe bartuar drejtpërdrejt skedarin',
	'tusc_user' => 'Emri i përdoruesit të TUSC',
	'tusc_pass' => 'Fjalëkalimi në TUSC',
	'do_it' => 'Bëjeni',
	'error_transfer_usr' => 'Ju nuk keni vendosur një emër përdoruesi të Wikimedia Commons',
	'error_not_exists' => 'Skedari burimor nuk ekziston!',
	'error_on_commons' => 'Skedari burimor tashmë në $1!',
	'error_file_exists' => 'Skedari tashmë ekziston në $3 si "$1$4$2"!',
	'error_diff_exists' => 'Një skedar tjetër i synimit ekziston nën wikin e synimit me të njëjtin emër!',
	'original_wikitext' => 'Teksti origjinal wiki',
	'new_wikitext' => 'Teksti i ri wiki',
	'new_filename' => 'Emri i ri i skedarit:',
	'output_information' => 'Për ngarkim manual, ndryshoni tekstin më sipër (nëse është e nevojshme), ruani $1 skedarin $2 në kompjuterin tuaj, pastaj $3ngarkojeni atë$4.',
	'upload_submit' => 'Ngarko!',
	'target_wiki' => 'wiki i synimit',
	'error_bot_blocked' => 'Boti i ngarkimit është bllokuar në Wikimedia Commons',
	'error_upload_meta' => 'Nuk mund të ngarkojë drejtpërdrejt sepse atje është një problem me të dhënat meta (shikoni më sipër)!',
	'error_tusc_failed' => 'Verifikimi TUSC dështoi!',
	'error_only_commons' => 'Ngarkimi i drejtpërdrejt funksionon vetëm në Wikimedia Commons!',
	'upload_control_text' => 'Ju lutemi kontrolloni tekstin e ri wiki dhe klikoni "$1" nëse çdo gjë është në rregull!',
	'error_commons_user' => 'Për të identifikuar përdoruesit e bartjes, emri juaj i përdoruesit në Wikimedia Commons duhet të jetë në përshkrim!',
	'error_upload_users' => 'Funksioni për ngarkim është në dispozicion vetëm për disa përdorues gjatë periudhës së testimit!',
	'error_upload_file' => 'Skedari origjinal nuk mund të shkarkohet.',
	'help_intro' => 'Kur ju dëshironi të raportoni një vrimë, sugjeroni një veçori ose keni një pyetje, ju mund të përdorni një nga llojet e kontaktet më poshtë:',
	'help_mail' => 'Dërgoni një letër te $1',
	'help_commons' => '$1Shtoni një postim në Commons$2',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'attention' => 'Пажња',
	'commonshelper2' => 'Помоћник с оставом 2',
	'description' => 'Алатка за пренос датотека из Викимедијиних пројеката у Викимедијину оставу',
	'change_meta' => 'Промените поставке $1категорија и шаблона$2 за викију $3',
	'jira_link' => 'Пријавите грешку или предложите нову могућност',
	'language' => 'Језик',
	'project' => 'Пројекат',
	'source_file' => 'Изворна датотека',
	'target_file' => 'Одредишна датотека',
	'commons_username' => 'Корисничко име (Викимедијина остава)',
	'commons_to_project' => 'Из Викимедијине оставе у пројекат',
	'move_file_from_com' => 'Премести датотеку из Викимедијине оставе у пројекат',
	'categories' => 'Категорије',
	'remove_cats' => 'Уклони постојеће категорије',
	'checkusage' => 'Провера употребе',
	'use_checkusage' => 'Користи $1Комон сенс$2 за предлагање нових категорија',
	'use_tusc' => 'Користи $1TUSC$2 за потврду идентитета и пренос датотека',
	'tusc_user' => 'Корисничко име (TUSC)',
	'tusc_pass' => 'Лозинка (TUSC)',
	'do_it' => 'Изврши',
	'error_transfer_usr' => 'Нисте поставили корисничко име Викимедијине оставе',
	'error_not_exists' => 'Изворна датотека не постоји.',
	'error_on_commons' => 'Изворна датотека је већ на $1.',
	'error_file_exists' => 'Датотека већ постоји на викију $3 као „$1$4$2“.',
	'error_diff_exists' => 'Другачија одредишна датотека постоји на наведеном викију под истим именом.',
	'error_no_meta' => 'Метаподаци нису пронађени на изворном викију. $1Додајте их или их ажурирајте за пројекат$2',
	'error_meta_no_good' => 'Метаподаци: нису пронађени добри шаблони. $1Додајте или ажурирајте метаподатке за пројекат$2',
	'error_meta_bad' => 'Метаподаци: пронађен је лош шаблон. $1Додајте или ажурирајте метаподатке за пројекат$2',
	'original_wikitext' => 'Изворни текст викија',
	'new_wikitext' => 'Нови текст викија',
	'new_filename' => 'Нови назив датотеке:',
	'output_information' => 'За ручно отпремање, уредите горњи текст (ако је потребно), сачувајте $1датотеку$2 на рачунар и $3отпремите је$4.',
	'upload_submit' => 'Отпреми',
	'target_wiki' => 'одредишна викија',
	'standard_project' => 'Википедија',
	'error_bot_blocked' => 'Бот за отпремање је блокиран на Викимедијиној остави.',
	'error_upload_meta' => 'Не могу да отпремим непосредно јер је дошло до проблема с метаподацима (погледајте изнад).',
	'error_tusc_failed' => 'Не могу да извршим TUSC проверу.',
	'error_only_commons' => 'Изравно отпремање ради само на Викимедијиној остави.',
	'upload_control_text' => 'Проверите нови текст викија и кликните на „$1“ ако је све у реду.',
	'error_commons_user' => 'Да бисмо препознали корисника који преноси датотеке, ваше корисничко име на Викимедијиној остави мора бити у опису.',
	'error_upload_users' => 'Могућност отпремања је доступна само неким корисницима током пробног периода.',
	'error_upload_file' => 'Изворна датотека не може бити преузета.',
	'help_intro' => 'Ако желите да пријавите грешку, предложите нову могућност или поставите питање, користите доленаведене начине за контакт:',
	'help_jira' => '$1JIRA (потребан налог)$2 (Пројекат: Commonshelper2)',
	'help_mail' => 'Пошаљите поруку на $1',
	'help_commons' => '$1Додајте поруку у оставу$2',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'attention' => 'Pažnja',
	'commonshelper2' => 'Pomoćnik s ostavom 2',
	'description' => 'Alatka za prenos datoteka iz Vikimedijinih projekata u Vikimedijinu ostavu',
	'change_meta' => 'Promenite postavke $1kategorija i šablona$2 za vikiju $3',
	'jira_link' => 'Prijavite grešku ili predložite novu mogućnost',
	'language' => 'Jezik',
	'project' => 'Projekat',
	'source_file' => 'Izvorna datoteka',
	'target_file' => 'Odredišna datoteka',
	'commons_username' => 'Korisničko ime (Vikimedijina ostava)',
	'commons_to_project' => 'Iz Vikimedijine ostave u projekat',
	'move_file_from_com' => 'Premesti datoteku iz Vikimedijine ostave u projekat',
	'categories' => 'Kategorije',
	'remove_cats' => 'Ukloni postojeće kategorije',
	'checkusage' => 'Provera upotrebe',
	'use_checkusage' => 'Koristi $1Komon sens$2 za predlaganje novih kategorija',
	'use_tusc' => 'Koristi $1TUSC$2 za potvrdu identiteta i prenos datoteka',
	'tusc_user' => 'Korisničko ime (TUSC)',
	'tusc_pass' => 'Lozinka (TUSC)',
	'do_it' => 'Izvrši',
	'error_transfer_usr' => 'Niste postavili korisničko ime Vikimedijine ostave',
	'error_not_exists' => 'Izvorna datoteka ne postoji.',
	'error_on_commons' => 'Izvorna datoteka je već na $1.',
	'error_file_exists' => 'Datoteka već postoji na vikiju $3 kao „$1$4$2“.',
	'error_diff_exists' => 'Drugačija odredišna datoteka postoji na navedenom vikiju pod istim imenom.',
	'error_no_meta' => 'Metapodaci nisu pronađeni na izvornom vikiju. $1Dodajte ih ili ih ažurirajte za projekat$2',
	'error_meta_no_good' => 'Metapodaci: nisu pronađeni dobri šabloni. $1Dodajte ili ažurirajte metapodatke za projekat$2',
	'error_meta_bad' => 'Metapodaci: pronađen je loš šablon. $1Dodajte ili ažurirajte metapodatke za projekat$2',
	'original_wikitext' => 'Izvorni tekst vikija',
	'new_wikitext' => 'Novi tekst vikija',
	'new_filename' => 'Novi naziv datoteke:',
	'output_information' => 'Za ručno otpremanje, uredite gornji tekst (ako je potrebno), sačuvajte $1datoteku$2 na računar i $3otpremite je$4.',
	'upload_submit' => 'Otpremi',
	'target_wiki' => 'odredišna vikija',
	'standard_project' => 'Vikipedija',
	'error_bot_blocked' => 'Bot za otpremanje je blokiran na Vikimedijinoj ostavi.',
	'error_upload_meta' => 'Izravno otpremanje nije moguće jer je došlo do problema s metapodacima (pogledajte iznad).',
	'error_tusc_failed' => 'Ne mogu da izvršim TUSC proveru.',
	'error_only_commons' => 'Izravno otpremanje radi samo na Vikimedijinoj ostavi.',
	'upload_control_text' => 'Izaberite novi tekst vikija i kliknite na „$1“ ako je sve u redu.',
	'error_commons_user' => 'Da bismo prepoznali korisnika koji prenosi datoteke, vaše korisničko ime na Vikimedijinoj ostavi mora biti u opisu.',
	'error_upload_users' => 'Mogućnost otpremanja je dostupna samo nekim korisnicima tokom probnog perioda.',
	'error_upload_file' => 'Izvorna datoteka ne može biti preuzeta.',
	'help_intro' => 'Ako želite da prijavite grešku, predložite novu mogućnost ili postavite pitanje, koristite dolenavedene načine za kontakt:',
	'help_jira' => '$1JIRA (potreban nalog)$2 (Projekat: Commonshelper2)',
	'help_mail' => 'Pošaljite poruku na $1',
	'help_commons' => '$1Dodajte poruku u ostavu$2',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Liftarn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'attention' => 'Uppmärksamhet',
	'description' => 'Ett verktyg för att överföra filer från Wikimedia-projekten till Wikimedia Commons',
	'change_meta' => 'Ändra $1kategori och mallinställningar$2 för $3',
	'jira_link' => 'Rapportera fel eller föreslå en funktion',
	'language' => 'Språk',
	'project' => 'Projekt',
	'source_file' => 'Källfil',
	'target_file' => 'Målfil',
	'commons_username' => 'Wikimedia Commons användarnamn',
	'commons_to_project' => 'Wikimedia Commons till projektet',
	'move_file_from_com' => 'Flytta fil från Wikimedia Commons till projekt',
	'categories' => 'Kategorier',
	'remove_cats' => 'Ta bort befintliga kategorier',
	'use_checkusage' => 'Använd $1CommonSense$2 för att föreslå nya kategorier',
	'use_tusc' => 'Använd $1TUSC$2 för att autentisera och överföra filen direkt',
	'tusc_user' => 'TUSC användarnamn',
	'tusc_pass' => 'TUSC lösenord',
	'do_it' => 'Gör det',
	'error_transfer_usr' => 'Du har inte angett ett Wikimedia Commons användarnamn',
	'error_not_exists' => 'Källfilen finns inte!',
	'error_on_commons' => 'Källfilen är redan på $1!',
	'error_file_exists' => 'Filen finns redan på $3 som "$1$4$2"!',
	'error_diff_exists' => 'En annan målfil finns på målwiki under samma namn!',
	'error_no_meta' => 'Ingen metadata hittades om ursprungs-wikin! $1Vänligen lägg till/uppdatera metadata för projektet$2',
	'error_meta_no_good' => 'Metadata: Inga bra mallar hittades! $1Var vänlig lägg till/uppdatera metadata för projektet$2',
	'error_meta_bad' => 'Metadata: Dålig mall hittades! $1Var vänlig lägg till/uppdatera metadata för projektet$2',
	'original_wikitext' => 'Ursprunglig wikitext',
	'new_wikitext' => 'Ny wikitext',
	'new_filename' => 'Nytt filnamn:',
	'output_information' => 'För att ladda upp filen manuellt, redigera texten ovan (om nödvändigt), spara $1filen$2 på din dator, och $3ladda sedan upp$4 den.',
	'upload_submit' => 'Ladda upp!',
	'target_wiki' => 'målwikin',
	'error_bot_blocked' => 'Upload-botten är blokerad på Wikimedia Commons.',
	'error_upload_meta' => 'Kan inte ladda upp direkt eftersom det finns problem med metadata (se ovan)!',
	'error_tusc_failed' => 'TUSC-verifiering misslyckades!',
	'error_only_commons' => 'Direktuppladdning fungerar bara på Wikimedia Commons!',
	'upload_control_text' => 'Vänligen kontrollera den nya wiki texten och klicka på "$1" om allt är OK!',
	'error_commons_user' => 'Ditt användarnamn på  Wikimedia Commons ska anges i beskrivningen, så att användaren, som utfört överföringen, kan identifieras!',
	'error_upload_users' => 'Uppladdningsfunktionen är endast tillgänglig för vissa användare under testperioden!',
	'error_upload_file' => 'Den ursprungliga filen kan inte laddas ner.',
	'help_intro' => 'När du vill rapportera ett fel, föreslå en funktion eller har en fråga kan du använda en av kontaktmetoderna nedan:',
	'help_jira' => '$1JIRA (du behöver ett konto)$2 (Projekt: Commonshelper2)',
	'help_mail' => 'Skicka en e-post till $1',
	'help_commons' => '$1Lägg till ett inlägg på Commons$2',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'attention' => 'Tahadhari',
	'description' => 'Chombo cha kuhamisha faili kutoka kwa miradi ya Wikimedia hadi Wikimedia Commons',
	'jira_link' => 'Ripoti hitilafu au toa maoni ya kipekee',
	'language' => 'Lugha',
	'project' => 'Mradi',
	'source_file' => 'Faili ya chanzo',
	'commons_username' => 'Jina la mtumiaji la Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons hadi mradi',
	'move_file_from_com' => 'Hamisha faili kutoka Wikimedia commons hadi mradi',
	'categories' => 'Jamii',
	'remove_cats' => 'Toa jamii zilizoko',
	'tusc_user' => 'Jina la mtumiaji la TUSC',
	'tusc_pass' => 'Nywila ya TUSC',
	'do_it' => 'Fanya',
	'error_transfer_usr' => 'Haujaweka jina kla mtumiaji la Wikimedia commons',
	'error_not_exists' => 'Chanzo cha faili hakipo!',
	'new_filename' => 'NJina lipya la faili:',
	'upload_submit' => 'Pakia!',
	'help_mail' => 'Tuma barua pepe kwa $1',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Fahimrazick
 * @author Karthi.dr
 * @author Logicwiki
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'attention' => 'கவனிக்க',
	'description' => 'விக்கிமீடியா திட்டங்களிலிருந்து விக்கிமீடியா பொதுவிற்கு கோப்புக்களைப் பரிமாற்றுவதற்கான ஒரு கருவி',
	'change_meta' => '$1பகுப்பு மற்றும் வார்ப்புரு நிருணயங்களை$2 பின்வருமாறு மாற்று$3',
	'jira_link' => 'ஒரு வழுவை முறையிடுக அல்லது ஒரு வசதியைப் பரிந்துரைக்க',
	'language' => 'மொழி',
	'project' => 'திட்டம்',
	'source_file' => 'மூலக்கோப்பு',
	'target_file' => 'இலக்கு கோப்பு',
	'commons_username' => 'விக்கிமீடியா காம்ன்ஸ் பயனர் பெயர்',
	'commons_to_project' => 'விக்கிமீடியாப் பொதுவிலிருந்து திட்டம்',
	'move_file_from_com' => 'கோப்பை விக்கிமீடியாப் பொதுவிலிருந்து திட்டத்துக்கு நகர்த்துக',
	'categories' => 'பகுப்புகள்',
	'remove_cats' => 'இருக்கும் பகுப்புகளை நீக்கு',
	'tusc_user' => 'TUSC பயனர் பெயர்',
	'tusc_pass' => 'TUSC கடவுச்சொல்',
	'do_it' => 'செய்க',
	'error_not_exists' => 'மூலக்கோப்பு இல்லை !',
	'error_on_commons' => '$1 ஏற்கனவே மூலக் கோப்பைக் கொண்டுள்ளது!',
	'error_file_exists' => '$3 "$1$4$2" என்றவாறு ஏற்கனவே கோப்பைக் கொண்டுள்ளது.',
	'original_wikitext' => 'மூல விக்கி உரை',
	'new_wikitext' => 'புதிய விக்கி உரை',
	'new_filename' => 'புதிய கோப்பு-பெயர்:',
	'upload_submit' => 'தரவேற்று!',
	'target_wiki' => 'இலக்கு விக்கி',
	'error_bot_blocked' => 'விக்கிமீடியாப் பொதுவில் தரவேற்றும் தானியங்கி தடுக்கப்பட்டுள்ளது.',
	'error_tusc_failed' => 'TUSC சரிபார்பு தோல்வி அடைந்தது!',
	'error_only_commons' => 'விக்கிமீடியாப் பொதுவில் மட்டுமே நேரடித் தரவேற்றம் வேலை செய்யும்.',
	'upload_control_text' => 'தயவு செய்து புதிய விக்கி உரையைச் சரிபார்த்து, அனைத்தும் சரியெனின் "$1" என்பதைச் சொடுக்குங்கள்!',
	'error_upload_users' => 'சோதனைக் காலத்தில்போது சில பயனர்களுக்கு மட்டுமே தரவேற்றும் வசதி கிடைக்கும்!',
	'error_upload_file' => 'உண்மையான கோப்பைத் தரவிறக்க இயலாது.',
	'help_mail' => '$1க்கு ஒரு மின்னஞ்சல் அனுப்பு',
	'help_commons' => '$1பொதுவில் ஒரு பதிவை இணைக்கவும்$2',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'language' => 'భాష',
	'project' => 'ప్రాజెక్టు',
	'source_file' => 'మూల దస్త్రం',
	'target_file' => 'లక్ష్యిత దస్త్రం',
	'commons_username' => 'వికీమీడియా కామన్స్ వాడుకరి పేరు',
	'categories' => 'వర్గాలు',
	'tusc_user' => 'TUSC వాడుకరిపేరు',
	'tusc_pass' => 'TUSC సంకేతపదం',
	'error_not_exists' => 'మూల దస్త్రం లేనే లేదు!',
	'error_on_commons' => 'మూల దస్త్రం ఇప్పటికే $1లో ఉంది!',
	'original_wikitext' => 'అసలు వికీ పాఠ్యం',
	'new_wikitext' => 'కొత్త వికీ పాఠ్యం',
	'new_filename' => 'కొత్త దస్త్రపు పేరు:',
	'upload_submit' => 'ఎక్కించు!',
	'target_wiki' => 'లక్ష్యిత వికీ',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'language' => 'Lian',
	'commons_username' => "Naran uza-na'in iha Wikimedia Commons",
	'commons_to_project' => 'Husi Wikimedia Commons ba projetu',
	'tusc_user' => "Naran uza-na'in iha TUSC",
	'do_it' => 'Halo',
);

/** Tigrinya (ትግርኛ)
 * @author Tigrigna1
 */
$messages['ti'] = array(
	'attention' => 'ኣስተውዕል',
	'jira_link' => 'ጸገም ሓብር ወይ  ዝሓሸ ምርጫ ሓብር',
	'language' => 'ቋንቋ',
	'project' => 'ወፍሪ\\ ዕዮ',
	'source_file' => 'ምንጪ ፋይል',
	'target_file' => 'ዕላማ፣ፋይል',
	'move_file_from_com' => 'ፋይል ካብ ዊኪመድያ ኮሞንስ ናብ ወፍሪ/ዕዮ/ፕሮጀክት የሕላፍ',
	'categories' => 'ክፋላት/ምቃላት',
	'remove_cats' => 'ዝጸንሑ ክፍልታት/ክፋላት ኣልግሶም',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Nemo bis
 */
$messages['tl'] = array(
	'attention' => 'Pansinin',
	'description' => 'Isang kasangkapan upang maglipat ng mga talaksan mula sa mga proyekto ng Wikimedia papunta sa Wikimedia Commons',
	'change_meta' => 'Baguhin ang $1kategorya at mga katakdaan$2 ng suleras para sa $3',
	'jira_link' => 'Mag-ulat ng isang sira o magmungkahi ng isang tampok',
	'language' => 'Wika',
	'project' => 'Proyekto',
	'source_file' => 'Pinagmulang talaksan',
	'target_file' => 'Pinupukol na talaksan',
	'commons_username' => 'Pangalan ng tagagamit ng Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons papunta sa proyekto',
	'move_file_from_com' => 'Ilipat ang talaksan mula sa Wikimedia Commons papunta sa proyekto',
	'categories' => 'Mga kategorya',
	'remove_cats' => 'Alisin ang umiiral na mga kategorya',
	'checkusage' => 'Suriin ang Paggamit',
	'use_checkusage' => 'Gamitin ang $1CommonSense$2 upang magmungkahi ng bagong mga kategorya',
	'use_tusc' => 'Gamitin ang $1TUSC$2 upang mapatunayan at tuwirang mailipat ang talaksan',
	'tusc_user' => 'Pangalan ng tagagamit ng TUSC',
	'tusc_pass' => 'Hudyat sa TUSC',
	'do_it' => 'Gawin ito',
	'error_transfer_usr' => 'Hindi ka pa nagtatakda ng isang pangalan ng tagagamit ng Wikimedia Commons',
	'error_not_exists' => 'Hindi umiiral ang pagmumulang talaksan!',
	'error_on_commons' => 'Ang talaksang napagkunan ay nasa $1 na!',
	'error_file_exists' => 'Umiiral na ang talaksan sa $3 bilang "$1$4$2"!',
	'error_diff_exists' => 'Umiiral na ang ibang pinupukol na talaksan sa pinupukol na wiki na ganoon din ang pangalan!',
	'error_no_meta' => 'Walang natagpuang metadato para sa pinagmumulang wiki! $1Mangyaring magdagdag/isapanahon ang metadato para sa proyekto$2',
	'error_meta_no_good' => 'Metadato: Walang natagpuang mabubuting mga suleras! $1Mangyaring magdagdag/isapanahon ang metadato para sa proyekto$2',
	'error_meta_bad' => 'Metadato: Nakatagpo ng masamang suleras! $1Mangyaring magdagdag/isapanahon ang metadato para sa proyekto$2',
	'original_wikitext' => 'Orihinal na teksto ng wiki',
	'new_wikitext' => 'Bagong teksto ng wiki',
	'new_filename' => 'Bagong pangalan ng talaksan:',
	'output_information' => 'Para sa kinakamay na pagkakargang papaitaas, baguhin ang tekstong nasa itaas (kung kinakailangan), sagipin $1ang talaksan$2 sa kompyuter mo, pagkaraan ay $3ikarga itong papaitaas$4.',
	'upload_submit' => 'Ikargang papaitaas!',
	'target_wiki' => 'ang pinupukol na wiki',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => 'Ang bot ng pagkakargang papaitaas ay hinahadlangan sa Wikimedia Commons.',
	'error_upload_meta' => 'Hindi maaaring tuwirang magkargang papaitaas dahil may mga suliranin sa dato ng meta (tingnan ang nasa itaas)!',
	'error_tusc_failed' => 'Nabigo ang pagpapatunay ng TUSC!',
	'error_only_commons' => 'Tanging tuwirang mga pagkakargang papaitaas ng mga akda lamang doon sa Wikimedia Commons!',
	'upload_control_text' => 'Mangyaring tabanan ang bagong teksto ng wiki at pindutin ang "$1" kung ayos naman ang lahat!',
	'error_commons_user' => 'Upang makilala ang tagagamit ng paglilipat, ang iyong pangalan ng tagagamit sa Wikimedia Commons ay dapat na nasa loob ng paglalarawan!',
	'error_upload_users' => 'Ang tungkulin ng pagkakargang papaitaas ay makukuha lamang ng ilang mga tagagamit habang nasa panahon ng pagsusubok!',
	'error_upload_file' => 'Hindi maikakargang paibaba ang orihinal talaksan.',
	'help_intro' => 'Kapag nais mong magsumbong ng isang sira, magmungkahi ng isang tampok o magtanong, magagamit mo ang isa sa mga uri ng pakikipag-ugnayang nasa ibaba:',
	'help_jira' => '$1JIRA (kailangan mo ng isang akawnt)$2 (Project: Commonshelper2)',
	'help_mail' => 'Magpadala ng isang liham kay $1',
	'help_commons' => '$1Magdagdag ng isang paskil sa Commons$2',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'attention' => 'Дығғәт',
	'language' => 'Зывон',
	'project' => 'Нәхшә',
	'categories' => 'Категоријон',
	'remove_cats' => 'Ијр быә категоријон рәдд кардеј',
	'tusc_user' => 'TUSC иштирокәкә ном',
	'tusc_pass' => 'Парол TUSC',
	'do_it' => 'Ыми кардеј',
	'error_file_exists' => 'Фајл һәни һесте бә $3 бәнә "$1$4$2"!',
	'new_wikitext' => 'Тожә вики мәтн',
	'new_filename' => 'Фајли тожә ном:',
	'upload_submit' => 'Бо жәј!',
	'help_mail' => 'Номә вығәнде бә $1',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Suelnur
 */
$messages['tr'] = array(
	'attention' => 'Dikkat',
	'description' => "Wikimedia projelerinden Wikimedia Commons'a dosya taşımada kolaylık sağlayan bir araç",
	'language' => 'Dil',
	'project' => 'Proje',
	'source_file' => 'Kaynak dosya',
	'target_file' => 'Hedef dosya',
	'commons_username' => 'Wikimedia Commons kullanıcı adı',
	'categories' => 'Kategoriler',
	'tusc_user' => 'TUSC kullanıcı adı',
	'tusc_pass' => 'TUSC şifresi',
	'original_wikitext' => 'Özgün viki metni',
	'new_wikitext' => 'Yeni wiki metni',
	'new_filename' => 'Yeni dosya adı:',
	'upload_submit' => 'Yükle!',
	'target_wiki' => 'hedef viki',
	'help_mail' => '$1 adresine bir e-posta gönderin.',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'language' => 'ⵜⵓⵜⵍⴰⵢⵜ',
	'project' => 'ⴰⵙⵏⴼⴰⵔ',
	'source_file' => 'ⴰⵖⴱⴰⵍⵓ ⵓⵙⴷⴰⵡ',
	'categories' => 'ⵜⴰⴳⴳⴰⵢⵉⵏ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 * @author Tel'et
 */
$messages['ug-arab'] = array(
	'attention' => 'دىققەت',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => 'ھۆججەتنى ۋىكى ۋاستە قۇرۇلۇشىدىن ۋىكى ۋاستە ھەمبەھىرگە يوللايدىغان بىر خىل قورال',
	'change_meta' => '$3 نىڭ $1 تۈرى ۋە قېلىپ تەڭشىكى $2 نى ئۆزگەرتىدۇ',
	'jira_link' => 'مەسىلە دوكلات قىلىڭ ياكى ئىقتىداردىن بىرنى تەكلىپ بېرىڭ',
	'language' => 'تىل',
	'project' => 'قۇرۇلۇش',
	'source_file' => 'مەنبە ھۆججەت',
	'target_file' => 'نىشان ھۆججەت',
	'commons_username' => 'ۋىكى ۋاستە ھەمبەھىر ئىشلەتكۈچى ئاتى',
	'commons_to_project' => 'ۋىكى ۋاستە ھەمبەھىر قۇرۇلۇشى',
	'move_file_from_com' => 'ھۆججەتنى ۋىكى ۋاستە ھەمبەھىردىن قۇرۇلۇشقا يۆتكەيدۇ',
	'categories' => 'تۈرلەر',
	'remove_cats' => 'مەۋجۇت تۈرلەرنى چىقىرىۋەت',
	'use_checkusage' => '$1CommonSense$2 ئارقىلىق يېڭى تۈر ئىلتىماس قىلىدۇ.',
	'use_tusc' => '$1TUSC$2 ئارقىلىق ھۆججەتنى بىۋاستە دەلىللەيدۇ ياكى يوللايدۇ',
	'tusc_user' => 'TUSC ئىشلەتكۈچى ئاتى',
	'tusc_pass' => 'TUSC پارولى',
	'do_it' => 'ئىجرا قىل',
	'error_transfer_usr' => 'سىز تېخى ۋىكى ۋاستە ھەمبەھىر ئىشلەتكۈچى ئاتىنى تەڭشىمىدىڭىز.',
	'error_not_exists' => 'مەنبە ھۆججەت مەۋجۇت ئەمەس!',
	'error_on_commons' => 'مەنبە ھۆججەت ئاللىبۇرۇن $1 دا بار!',
	'error_file_exists' => '"$1$4$2" ئاتلىق ھۆججەت $3 دا مەۋجۇت!',
	'error_diff_exists' => 'نىشان ۋىكىدا ئوخشاش ئاتتا پەرقلىق نىشان ھۆججەت مەۋجۇت!',
	'error_no_meta' => 'مەنبە ۋىكىغا ئائىت مېتا سانلىق مەلۇمات تېپىلمىدى! $1 بۇ قۇرۇلۇش ئۈچۈن مېتا سانلىق مەلۇمات قوشۇڭ/يېڭىلاڭ$2',
	'error_meta_no_good' => 'مېتا سانلىق مەلۇمات: مۇۋاپىق قېلىپ تېپىلمىدى! $1 بۇ قۇرۇلۇش ئۈچۈن مېتا سانلىق مەلۇمات قوشۇڭ/يېڭىلاڭ$2',
	'error_meta_bad' => 'مېتا سانلىق مەلۇمات: بۇزۇلغان قېلىپ تېپىلدى! $1 بۇ قۇرۇلۇش ئۈچۈن مېتا سانلىق مەلۇمات قوشۇڭ/يېڭىلاڭ$2',
	'original_wikitext' => 'ئەسلى ۋىكى تېكىستى',
	'new_wikitext' => 'يېڭى ۋىكى تېكىستى',
	'new_filename' => 'يېڭى ھۆججەت ئاتى:',
	'output_information' => 'قولدا يۈكلەش ئۈچۈن، ئۈستىدىكى تېكىست (ئەگەر زۆرۈر بولسا) نى تەھرىرلەڭ، كومپيۇتېرىڭىزدىكى $1بۇ ھۆججەت$2نى ساقلاپ ئاندىن $3ئۇنى يۈكلەڭ$4.',
	'upload_submit' => 'يۈكلە!',
	'target_wiki' => 'نىشان ۋىكى',
	'standard_project' => 'ۋىكىپېدىيە',
	'error_bot_blocked' => 'ۋىكى ۋاستە ھەمبەھىردە يۈكلەش ماشىنا ئادەمى توسۇلغان.',
	'error_upload_meta' => 'بىۋاستە يۈكلىيەلمەيدۇ چۈنكى بەزى مېتا سانلىق مەلۇمات (ئۈستىگە قاراڭ) مەسىلىسى بار!',
	'error_tusc_failed' => 'TUSC دەلىللىيەلمىدى!',
	'error_only_commons' => 'بىۋاستە يوللاش پەقەت ۋىكى ۋاستە ھەمبەھىردىلا ئىشلەيدۇ!',
	'upload_control_text' => 'يېڭى ۋىكى تېكىستىنى تەكشۈرۈپ، ئەگەر ھېچقانداق مەسىلە بولمىسا "$1"نى چېكىڭ.',
	'error_commons_user' => 'يوللايدىغان ئىشلەتكۈچىنىڭ سالاھىيىتىنى دەلىللەش ئۈچۈن، چۈشەندۈرۈشتە چوقۇم ۋىكى ۋاستە ھەمبەھىر ئىشلەتكۈچى ئاتى بولۇشى كېرەك!',
	'error_upload_users' => 'سىناق مەزگىلىدە پەقەت قىسمەن ئىشلەتكۈچىلەرلا يۈكلەش ئىقتىدارىنى ئىشلىتەلەيدۇ!',
	'error_upload_file' => 'ئەسلى ھۆججەتنى چۈشۈرەلمىدى.',
	'help_intro' => 'خاتالىق دوكلات قىلماقچى، يېڭى ئىقتىدار قوشۇشنى تەۋسىيە قىلغاندا ياكى مەسىلە سۈرۈشتۈرمەكچى بولغاندا، تۆۋەندىكى ئالاقە ئۇسۇللىرىدىن بىرنى تاللىيالايسىز:',
	'help_jira' => '$1JIRA (بىر ھېساباتىڭىز بولۇشى زۆرۈر)$2 (قۇرۇلۇش: Commonshelper2)',
	'help_mail' => '$1 غا ئېلخەت يوللاڭ',
);

/** Ukrainian (українська)
 * @author A1
 * @author Andriykopanytsia
 * @author Base
 * @author Dim Grits
 * @author Olvin
 * @author RLuts
 * @author Steve.rusyn
 * @author SteveR
 * @author Тест
 */
$messages['uk'] = array(
	'attention' => 'Увага',
	'description' => 'Інструмент для перенесення файлів з проектів Вікімедіа до Вікісховища',
	'change_meta' => 'Змінити $1 налаштування категорії та шаблону $2 для $3',
	'jira_link' => 'Повідомити про помилку або запропонувати нову функцію',
	'language' => 'Мова',
	'project' => 'Проект',
	'source_file' => 'Вихідний файл',
	'target_file' => 'Цільовий файл',
	'commons_username' => "Ім'я користувача на Вікісховищі",
	'commons_to_project' => 'із ВікіСховища в проект',
	'move_file_from_com' => 'Перемістити файлу з ВікіСховища до проекту',
	'categories' => 'Категорії',
	'remove_cats' => 'Вилучити наявні категорії',
	'use_checkusage' => 'Використовуйте $1CommonSense$2, щоб запропонувати нові категорії',
	'use_tusc' => 'Використовуйте $1TUSC$2 для авторизації та безпосередньої передачі файла',
	'tusc_user' => "Ім'я користувача TUSC",
	'tusc_pass' => 'Пароль TUSC',
	'do_it' => 'Зробити це',
	'error_transfer_usr' => "Ви повинні вказати ім'я користувача Вікісховища",
	'error_not_exists' => 'Вихідний файл не існує!',
	'error_on_commons' => 'Вихідний файл уже на $1!',
	'error_file_exists' => 'Файл уже існує у $3 як «$1$4$2»!',
	'error_diff_exists' => 'Інший файл в цільовій вікі має таку ж назву!',
	'error_no_meta' => 'Жодних метаданих не знайдено у вихідному вікі! $1Додайте або оновіть метадані проекту$2',
	'error_meta_no_good' => 'Метадані: не знайдено належних шаблонів! $1Оновіть або додайте метадані проекту$2',
	'error_meta_bad' => 'Метадані: знайдено неналежний шаблон! $1Додайте або оновіть метадані проекту$2',
	'original_wikitext' => 'Вихідний вікі-текст',
	'new_wikitext' => 'Новий вікі-текст',
	'new_filename' => 'Нова назва файлу:',
	'output_information' => "Для ручного вивантаження відредагуйте текст вгорі (якщо потрібно), збережіть $1файл$2 на вашому комп'ютері, потім  $3вивантажте його$4.",
	'upload_submit' => 'Завантажити!',
	'target_wiki' => 'цільова вікі',
	'error_bot_blocked' => 'Завантажуючого бота заблоковано на Вікісховищі.',
	'error_upload_meta' => 'Не можна вивантажити безпосередньо, бо існує проблема з метаданими (див. вище)!',
	'error_tusc_failed' => 'Помилка TUSC-верифікації!',
	'error_only_commons' => 'Прямі завантаження працюють лише на Вікісховищі!',
	'upload_control_text' => 'Перевірте новий вікі-текст і натисніть "$1", якщо все добре!',
	'error_commons_user' => "Для визначення хто передав файл, ваше ім'я користувача Wikimedia Commons має бути в описі!",
	'error_upload_users' => 'Функція вивантаження доступна лише для деяких користувачів протягом тестового періоду!',
	'error_upload_file' => 'Не вдається завантажити вихідний файл.',
	'help_intro' => 'Якщо ви хочете повідомити про помилку, запропонувати нову функцію або маєте питання, то ви можете використовувати один з контактів нижче:',
	'help_jira' => '$1JIRA (вам потрібний обліковий запис)$2 (Проект: Commonshelper2)',
	'help_mail' => 'Надіслати електронного листа на адресу $1',
	'help_commons' => '$1Додати повідомлення на Commons$2',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 */
$messages['uz'] = array(
	'attention' => 'Diqqat',
	'description' => 'Vikimedia loyihalaridan VikiOmborga fayllarni oʻtkazish uchun asbob',
	'change_meta' => '$3 uchun $1turkum va andoza moslamalari$2ni oʻzgartiring',
	'jira_link' => 'Muammo haqida xabar qilish yoki yaxshilashni taklif etish',
	'language' => 'Til',
	'project' => 'Loyiha',
	'source_file' => 'Manba fayl',
	'target_file' => 'Moʻljal fayl',
	'commons_username' => 'VikiOmbordagi foydalanuvchi nomi',
	'commons_to_project' => 'VikiOmbordan loyihaga',
	'move_file_from_com' => 'Faylni VikiOmbordan loyihaga koʻchirish',
	'categories' => 'Turkumlar',
	'remove_cats' => 'Mavjud turkumlarni oʻchirish',
	'use_checkusage' => 'Yangi turkumlarni taklif etish uchun $1CommonSense$2dan foydalanish',
	'use_tusc' => 'Kirish va fayllarni toʻgʻridan-toʻgʻri oʻtkazish uchun $1TUSC$2dan foydalaning',
	'tusc_user' => 'TUSCdagi foydalanuvchi nomi',
	'tusc_pass' => 'TUSC paroli',
	'do_it' => 'Buni bajarish',
	'error_transfer_usr' => 'VikiOmborda foydalanuvchi nomi berilmadi',
	'error_not_exists' => 'Manba fayli mavjud emas!',
	'error_on_commons' => 'Manba fayli allaqachon $1da!',
	'error_file_exists' => 'Fayl allaqachon $3da "$1$4$2" sifatida mavjud!',
	'original_wikitext' => 'Asl vikimatn',
	'new_wikitext' => 'Yangi vikimatn',
	'new_filename' => 'Yangi fayl nomi:',
	'output_information' => 'Qoʻlda yuklash uchun yuqoridagi matnni toʻgʻrilang (agar zarur boʻlsa), $1fayl$2ni oʻz komputeringizga saqlang, keyin $3uni yuklang$4.',
	'upload_submit' => 'Yuklash!',
	'target_wiki' => 'moʻljal viki',
	'error_tusc_failed' => 'TUSC tekshiruvini bajarishning iloji boʻlmadi!',
	'error_upload_file' => 'Asl faylni yuklash iloji boʻlmadi.',
	'help_jira' => '$1JIRA (hisob talab etiladi)$2  (Loyiha: Commonshelper2)',
	'help_mail' => '$1ga maktub joʻnatish',
	'help_commons' => '$1Commonsga xabar qoʻshish$2',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'attention' => 'Chú ý',
	'description' => 'Công cụ chuyển tập tin từ các dự án Wikimedia đến Wikimedia Commons',
	'change_meta' => 'Thay đổi $1cấu hình thể loại và bản mẫu$2 của $3',
	'jira_link' => 'Báo cáo lỗi hoặc đề nghị một tính năng',
	'language' => 'Ngôn ngữ',
	'project' => 'Dự án',
	'source_file' => 'Tập tin gốc',
	'target_file' => 'Tập tin đích',
	'commons_username' => 'Tên người dùng tại Wikimedia Commons',
	'commons_to_project' => 'Wikimedia Commons sang dự án',
	'move_file_from_com' => 'Chuyển tập tin từ Wikimedia Commons sang một dự án',
	'categories' => 'Thể loại',
	'remove_cats' => 'Gỡ thể loại hiện có',
	'checkusage' => 'Kiểm tra sử dụng',
	'use_checkusage' => 'Sử dụng $1CommonsSense$2 để gợi ý thêm thể loại',
	'use_tusc' => 'Sử dụng $1TUSC$2 để xác thực và chuyển tập tin trực tiếp',
	'tusc_user' => 'Tên người dùng TUSC',
	'tusc_pass' => 'Mật khẩu TUSC',
	'do_it' => 'Chuyển',
	'error_transfer_usr' => 'Bạn chưa định rõ tên người dùng Wikimedia Commons',
	'error_not_exists' => 'Tập tin gốc không tồn tại!',
	'error_on_commons' => 'Tập tin nguồn đã tồn tại trên $1!',
	'error_file_exists' => 'Tập tin đã tồn tại trên $3 dưới tên “$1$4$2”!',
	'error_diff_exists' => 'Một tập tin khác cùng tên đã tồn tại trên wiki đích!',
	'error_no_meta' => 'Không tìm thấy siêu dữ liệu về wiki nguồn! $1Xin hãy bổ sung hoặc cập nhật siêu dữ liệu của dự án.$2',
	'error_meta_no_good' => 'Siêu dữ liệu: Không tìm thấy bản mẫu hợp! $1Liên kết đến siêu dữ liệu$2',
	'error_meta_bad' => 'Siêu dữ liệu: Tìm thấy bản mẫu không phù hợp! $1Xin hãy bổ sung hoặc cập nhật siêu dữ liệu của dự án.$2',
	'original_wikitext' => 'Mã wiki gốc',
	'new_wikitext' => 'Mã wiki mới',
	'new_filename' => 'Tên tập tin mới:',
	'output_information' => 'Để tải lên thủ công, sửa đổi văn bản ở trên (nếu cần), lưu giữ $1tập tin này$2 vào máy cu/a bạn, rồi $3tải lên nó$4.',
	'upload_submit' => 'Tải lên!',
	'target_wiki' => 'wiki đích',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => 'Bot tải lên đã bị cấm tại Wikimedia Commons.',
	'error_upload_meta' => 'Không thể tải lên trực tiếp vì lỗi trong siêu dữ liệu (xem bên trên)!',
	'error_tusc_failed' => 'TUSC thất bại xác minh!',
	'error_only_commons' => 'Chỉ có thể tải trực tiếp lên Wikimedia Commons!',
	'upload_control_text' => 'Xin hãy kiểm tra mã wiki mới và bấm nút “$1” nếu đâu vào đấy!',
	'error_commons_user' => 'Miêu tả cần phải có tên người dùng Wikimedia Commons của bạn để xác định được người chuyển!',
	'error_upload_users' => 'Chức năng tải lên chỉ có sẵn cho một số người trong thời gian thử nghiệm!',
	'error_upload_file' => 'Không thể tải về tập tin gốc.',
	'help_intro' => 'Để báo cáo lỗi, gợi ý tính năng, hoặc đặt câu hỏi, liên lạc với chúng tôi dùng một trong những cách ở dưới:',
	'help_jira' => '$1JIRA (cần tài khoản)$2 (Dự án: Commonshelper2)',
	'help_mail' => 'Gửi thư điện tử cho $1',
	'help_commons' => '$1Thảo luận tại Commons$2',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'language' => 'שפראַך:',
	'project' => 'פראיעקט',
	'source_file' => 'קוואל טעקע',
	'target_file' => 'ציל טעקע',
	'commons_username' => 'וויקיפעדיע קאמאנס באניצער נאמען',
	'commons_to_project' => 'וויקיפעדיע קאמאנס פראיעקט',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Hzy980512
 * @author Linforest
 * @author Littletung
 * @author Mys 721tx
 * @author Qiyue2001
 * @author Xiaomingyan
 * @author Zhuyifei1999
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'attention' => '关注',
	'description' => '一种工具将文件从维基媒体项目转移到维基共享资源',
	'change_meta' => '更改$3的$1类别和模板设置$2',
	'jira_link' => '报告漏洞（bug）或建议特性',
	'language' => '语言',
	'project' => '项目',
	'source_file' => '源文件',
	'target_file' => '目标文件',
	'commons_username' => '维基共享资源用户名',
	'commons_to_project' => '维基共享资源到项目',
	'move_file_from_com' => '将文件从维基共享资源移至项目',
	'categories' => '分类',
	'remove_cats' => '删除现有分类',
	'use_checkusage' => '使用$1CommonSense$2建议新分类。',
	'use_tusc' => '使用 $1TUSC$2 来直接验证和传输该文件',
	'tusc_user' => 'TUSC 用户名',
	'tusc_pass' => 'TUSC 密码',
	'do_it' => '做吧',
	'error_transfer_usr' => '您未输入您的维基共享资源用户名',
	'error_not_exists' => '源文件不存在！',
	'error_on_commons' => '原文件已存在于 $1 ！',
	'error_file_exists' => '文件已经在$3上存在，文件名为$1$4$2',
	'error_diff_exists' => '根据同名的目标维基上存在不同的目标文件！',
	'error_no_meta' => '未找到关于该来源维基的元数据！$1请为该项目添加/更新元数据$2',
	'error_meta_no_good' => '元数据： 找不到合适模板 ！ $1请添加或更新改项目的元数据$2',
	'error_meta_bad' => '元数据：找到不合适模板！$1请添加或更新改项目的元数据$2',
	'original_wikitext' => '原始维基文本',
	'new_wikitext' => '新的维基文本',
	'new_filename' => '新的文件名：',
	'output_information' => '对于手动上载，编辑上述文本 （如果需要），保存 $1 文件 $2 到您的计算机，然后 $3 将其上传 $4 。',
	'upload_submit' => '上传！',
	'target_wiki' => '目标维基',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => '上传机器维基共享资源上被阻止。',
	'error_upload_meta' => '不能直接上载，因为有的元数据的问题（见上文）！',
	'error_tusc_failed' => 'TUSC 验证失败！',
	'error_only_commons' => '只能在维基共享资源直接上传作品！',
	'upload_control_text' => '请检查新的wiki代码，如无问题请点击 $1。',
	'error_commons_user' => '为识别传输用户的身份，描述中必须包括您的维基共享资源用户名！',
	'error_upload_users' => '测试期间仅有部分用户可以使用上传功能！',
	'error_upload_file' => '无法下载原始文件。',
	'help_intro' => '当您希望报告bug、提议增加新功能或咨询问题时，您可以使用下列联系方式中的一种。',
	'help_jira' => '$1JIRA（你需要一个帐户）$2 （项目：Commonshelper2）',
	'help_mail' => '发送邮件给$1',
	'help_commons' => '$1在维基共享资源上提出意见$2',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Lauhenry
 * @author Littletung
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'attention' => '注意',
	'commonshelper2' => 'CommonsHelper 2',
	'description' => '由維基媒體項目轉移檔案到維基共享資源的工具',
	'change_meta' => '更改$3的$1分類和模板設定$2',
	'jira_link' => '報告問題或建議一項功能',
	'language' => '語言',
	'project' => '計劃',
	'source_file' => '來源檔案',
	'target_file' => '目標檔案',
	'commons_username' => '維琪共用資源的用戶名',
	'commons_to_project' => '維基共享資源到項目',
	'move_file_from_com' => '由維基共享資源轉移檔案到項目',
	'categories' => '分類',
	'remove_cats' => '刪除現有的分類',
	'checkusage' => 'CheckUsage',
	'use_checkusage' => '使用$1CommonSense$2導入新分類',
	'use_tusc' => '使用$1TUSC$2來直接驗證和傳輸該文件',
	'tusc_user' => 'TUSC用戶名',
	'tusc_pass' => 'TUSC密碼',
	'do_it' => '開始',
	'error_transfer_usr' => '您未輸入您的維基共享資源用戶名',
	'error_not_exists' => '原始檔案不存在 ！',
	'error_on_commons' => '原始檔案已在 $1 ！',
	'error_file_exists' => '檔案已經在$3上存在，檔案名為「$1$4$2」！',
	'error_diff_exists' => '根據同名的目標維基上存在不同的目標文件！',
	'error_no_meta' => '未找到關於該來源維基的元數據！ $1請為該項目添加/更新元數據$2',
	'error_meta_no_good' => '元數據：找不到合適模板！$1請添加或更新改項目的元數據$2',
	'error_meta_bad' => '元數據：找到不合適模板！$1請添加或更新改項目的元數據$2',
	'original_wikitext' => '原始維基文本',
	'new_wikitext' => '新的維基文本',
	'new_filename' => '新檔案名稱：',
	'output_information' => '對於手動上載，編輯上述文本（如果需要），儲存 $1檔案$2 到您的電腦，然後 $3將其上傳$4。',
	'upload_submit' => '上傳！',
	'target_wiki' => '目標維基',
	'standard_project' => 'wikipedia',
	'error_bot_blocked' => '上載機器人在維基共享資源上被封禁。',
	'error_upload_meta' => '元數據出現錯誤（見上文），不能直接上載！',
	'error_tusc_failed' => 'TUSC驗證失敗！',
	'error_only_commons' => '只能在維基共享資源直接上載！',
	'upload_control_text' => '請檢查新的維基文本，如一切妥當，按" $1 "',
	'error_commons_user' => '為了識別轉移檔案的使用者，您的維基共享資源使用者名稱必須在描述中顯示！',
	'error_upload_users' => '上傳功能在測試期間僅供某些用戶使用！',
	'error_upload_file' => '無法下載原始檔案。',
	'help_intro' => '當您需要報告問題、建議新功能或提出疑問時，您可以使用以下聯繫方法：',
	'help_jira' => '$1JIRA（你需要一個帳戶）$2（Project: Commonshelper2）',
	'help_mail' => '發送電郵到$1',
	'help_commons' => '$1在維基共享資源中提出意見$2',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'attention' => '注意',
	'description' => '一種將文件從維基媒體項目轉移到維基共享資源的工具',
	'change_meta' => '為$3改變$1分類及$2模板設定',
	'jira_link' => '報告錯誤或建議新功能',
	'language' => '語言',
	'project' => '項目',
	'source_file' => '原始檔案',
	'target_file' => '目的檔案',
	'commons_username' => '維基共享資源用戶名',
	'commons_to_project' => '維基共享資源至項目',
	'move_file_from_com' => '將檔案從維基共享資源移動到項目',
	'categories' => '分類',
	'remove_cats' => '刪除現有分類',
	'use_checkusage' => '使用$1CommonSense$2來建議新類別',
	'use_tusc' => '使用$1TUSC$2來驗證和直接傳輸檔案',
	'tusc_user' => 'TUSC用戶名',
	'tusc_pass' => 'TUSC密碼',
	'do_it' => '做吧',
	'error_transfer_usr' => '您還沒有設置一個維基共享資源的用戶名',
	'error_not_exists' => '原始檔案不存在！',
	'error_on_commons' => '原始檔案已經在$1！',
	'error_file_exists' => '檔案已於$3以"$1$4$2"存在！',
	'error_diff_exists' => '目標wiki上已有相同名稱的檔案！',
	'error_no_meta' => '源wiki沒有發現中繼資料！$1請為$2項目添加或更新中繼資料。',
	'original_wikitext' => '原始維基文字',
	'new_wikitext' => '新維基文字',
	'new_filename' => '新檔案名：',
	'upload_submit' => '上載！',
	'target_wiki' => '目標wiki',
	'error_bot_blocked' => '上傳機械人被維基共享資源封禁。',
	'error_tusc_failed' => 'TUSC驗證失敗 ！',
	'error_only_commons' => '直接上載只能用於維基共享資源 ！',
	'upload_control_text' => '請檢查新的wiki文字，如果確定請按$1！',
	'error_upload_users' => '測試期間上傳功能僅對某些用戶開放 ！',
	'error_upload_file' => '原始檔不能下載。',
	'help_intro' => '如果您要報告錯誤、建議新功能或要詢問問題，您可以使用下方的任一聯繫類型：',
	'help_mail' => '發送電子郵件到$1',
);
