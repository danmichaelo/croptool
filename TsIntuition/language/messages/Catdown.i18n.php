<?php
/**
 * Interface messages for catdown tool.
 *
 * @toolowner platonides
 */

$url = '//toolserver.org/~platonides/catdown/';

$messages = array();

$messages['en'] = array(
	'title' => 'Download of images by category',
	'subtitle' => 'The easy way to download the images in a category',
	/* Labels */
	'project' => 'Project:',
	'category' => 'Category:',
	'thumbnailing' => 'Thumbnailing',
	'max-width' => 'Maximum width:',
	'max-height' => 'Maximum height:',

	/* Errors */
	'invalid-width' => 'Invalid width',
	'invalid-height' => 'Invalid height',
	'no-such-project' => "There's no such project",
	'no-images' => 'There are no images in that category',
	'category-is-url' => 'The given category name looks like a URL. You need to specify the category name, not its URL.',
	'category-contains-namespace' => 'You seem to have included the namespace along the category name. With the given name, the page would be available as [[Category:$1]].',
	'zip-failed' => 'Zip creation failed',
	'image-area-too-big' => '$1 is too big to create a thumbnail. Using full size.',

	'download-info' => "{{plural: $1|There is one image|There are $1 images}}, with an estimated size of $2",
	'download' => 'Download',

	'readme-contents' => 'The enclosing file $4 lists
the images at the $1 category ( $2 )$3.

== Instructions for downloading all the listed images ==
The download time may vary from a few minutes to several hours.

Windows:
 Extract all the files in the same folder and run $5
 $6
Linux/Mac OS:
 Extract all the files and open a terminal in that folder. Run sh $5',
	'non-bundled-wget' => "Note: This version doesn't include wget for Windows. You will need to decompress
to a folder with wget.exe or otherwise have wget in the PATH",
	'wget-info' => 'This file bundles a copy of wget $1 (for Windows platform). Wget is Free Software,
under the terms of the GNU GENERAL PUBLIC LICENSE version 3.
There is a copy of the license below, and it is also available at http://www.gnu.org/licenses/gpl-3.0.txt

In case you are interested in getting the source code for this program, you can download it from
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
or some other GNU Mirror, see
 http://www.gnu.org/prep/ftp.html',

	'scaling-none' => '', // Optional
	'scaling-width' => ', scaled to a maximum width of $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', scaled to a maximum height of $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', scaled to a maximum size of $1x$2 pixels',

	'script-filename' => 'download.bat', // Optional
	'readme-filename' => 'README.txt', // Optional
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Mormegil
 * @author Platonides
 * @author Purodha
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'title' => 'Title for the tool',
	'subtitle' => 'Subtitle for the tool',
	'project' => 'Caption for choosing the project domain.
{{Identical|Project}}',
	'category' => 'Label for the input to choose the category to dump. It is recommended to make it the same as the local NS_CATEGORY, with trailing :
{{Identical|Category}}',
	'thumbnailing' => 'Title for the inputs for max width and height',
	'max-width' => 'Label of the input to set the maximum width of the thumbnails.',
	'max-height' => 'Label of the input to set the maximum height of the thumbnails.',
	'invalid-width' => 'Shown when an invalid width is provided',
	'invalid-height' => 'Shown when an invalid height is provided',
	'no-such-project' => "Error given for wrong project (eg. 'qwerty.wikipedia')",
	'no-images' => "Shown when the category doesn't have any files",
	'category-is-url' => 'Shown when a full URL is given as category name',
	'category-contains-namespace' => 'Shown when a category with namespace is given as category. Paramters:
* $1: Given category name.',
	'zip-failed' => 'Generic error for when the zip creation failed',
	'image-area-too-big' => 'Shown when an image cannot be thumbnailed. See http://www.mediawiki.org/wiki/Manual:$wgMaxImageArea
Parameters: $1: Name of the image',
	'download-info' => 'Information shown on the download page. Parameters:
* $1: Number of images.
* $2: Estimated size of all the files in the system (in which unit?)',
	'download' => 'Big link to download the zip.
{{Identical|Download}}',
	'readme-contents' => "Contents of the README file. The result will be shown to the user as plain text (there's no wikitext parsing).
* $1: Category name
* $2: Category URL
* $3: Result of scaling restrictions (one of {{msg-toolserver|Catdown-scaling-none|notext=1}}, {{msg-toolserver|Catdown-scaling-width|notext=1}}, {{msg-toolserver|Catdown-scaling-height|notext=1}}, {{msg-toolserver|Catdown-scaling-both|notext=1}} messages). To keep the sentence meaningful, you probably not want to place a space before this. Remember to translate scaling-width, scaling-height, scaling-both, or the users may face with half sentence in another language.
* $4: Filename of the list.
* $5 Name of the .bat script to run (script-filename msg)
* $6: Note if wget for Windows was not bundled (contents of non-bundled-wget message if 'Bundle wget' was not checked)",
	'non-bundled-wget' => "Message added to the readme noting that the script won't work in Windows without a wget.exe (it is usually installed in other OS)",
	'wget-info' => 'Text appended to the readme explaining the rights you have on the wget binary.
* $1: Version of wget

The content of the gpl-3.0 is appended below this text (untranslated, as it is required by the license).',
	'scaling-none' => "{{optional}}

Added to readme-contents as $6 if there's no scaling",
	'scaling-width' => 'Added to {{Msg-toolserver|Catdown-readme-contents}} as $6 if the images are scaled down to a maximum width.
* $1: Maximum width in pixels',
	'scaling-height' => 'Added to readme-contents as $6 if the images are scaled to a maximum height.
$1: Maximum height in pixels',
	'scaling-both' => 'Added to readme-contents as $6 if the images are scaled to a maximum width and.
* $1: Maximum width in pixels
* $2: Maximum height in pixels',
	'script-filename' => '{{Optional}}
Name of the script which downloads the files.',
	'readme-filename' => '{{Optional}}
Name of the readme file',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'project' => 'Projek:',
	'category' => 'Kategorie:',
	'max-width' => 'Maksimum breedte:',
	'max-height' => 'Maksimum hoogte:',
	'invalid-width' => 'Ongeldige breedte',
	'invalid-height' => 'Ongeldige hoogte',
	'no-such-project' => "Daa is nie so 'n projek nie",
	'download' => 'Laai af',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'project' => 'ፕሮጀክት፦',
	'category' => 'መደብ፦',
	'download' => 'አውርድ',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author OsamaK
 * @author أحمد
 */
$messages['ar'] = array(
	'title' => 'تنزيل الصور حسب التصنيف',
	'subtitle' => 'أسهل طريقة لتنزيل الصور في تصنيف',
	'project' => 'المشروع:',
	'category' => 'التصنيف:',
	'thumbnailing' => 'توليد المُصَغَّرات',
	'max-width' => 'العرض الأقصى:',
	'max-height' => 'الطول الأقصى:',
	'invalid-width' => 'عرض غير مقبول',
	'invalid-height' => 'طول غير مقبول',
	'no-such-project' => 'لا وجود لهذا المشروع',
	'no-images' => 'لا توجد صور في ذلك التصنيف',
	'category-is-url' => 'اسم التصنيف المُعطى يبدو كأنه مسار إنترنت. ينبغي إدخال اسم التصنيف، لا مساره.',
	'category-contains-namespace' => 'يبدو أنك قد ضمَّنتَ فضاء تسمية مع اسم التصنيف. بهذا الاسم، ستُعرضُ الصفحة بالعنوان [[Category:$1]].',
	'zip-failed' => 'فشل إنشاء ملف Zip',
	'image-area-too-big' => 'الملف $1 حجمه أكبر مما يمكن توليد صورة مصغرة منه في هذا النظام. ستُعرض الصورة بأبعادها الأصلية.',
	'download-info' => '{{plural: $1|توجد ملف صورة واحدة|توجد ملفات $1 صور}}، حجمها مقداره $2',
	'download' => 'تنزيل',
	'readme-contents' => 'ملف الإرفاق $4 قوائم
صور من التصنيف $1 ( $2 )$3.

== تعليمات تنزيل كل الصور المدرجة ==
قد يتراوح وقت التنزيل ما بين بضع دقائق إلى عدة ساعات، حسب حجم الملفات و سرعة الاتصال بالإنترنت.

وِندوز:
 استخرج كل الملفات في نفس الدليل و شغِّل $5
 $6
لينُكس و ماك أوإس:
 استخرج كل الملفات وافتح طرفية في الدليل ثم شغِّل "sh $5"',
	'non-bundled-wget' => 'ملاحظة: هذه الإصدارة لا تضم برمجية wget لوندوز. ستحتاج لاستخراج الملفات من الأرشيف إلى دليل فيه wget.exe أو أن يكون wget في مسار التطبيقات المُعرَّف.',
	'wget-info' => 'يضُمُّ هذا الملف نسخة من wget $1 (لنظام ويندوز). Wget برمجية حُرَّة
منشورة برخصة GNU العمومية، الإصدارة 3.
توجد نسخة من نصِّ الترخيص فيما يلي، كما أنها منشورة على الموقع http://www.gnu.org/licenses/gpl-3.0.txt

إذا أردت الحصول على الكود المصدري لهذه البرمجية فيمكنك تنزيلها من أيِّ من المواقع التالية
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
أو مواقع مرآوات گنو غيرها، أنظر
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '، مُحَجّمة ليكون العرض الأقصى لكلِّ منها $1 {{plural:$1|pixel|بيكسل}}',
	'scaling-height' => '، مُحَجّمة ليكون الطول الأقصى لكلِّ منها $1 {{plural:$1|pixel|بيكسل}}',
	'scaling-both' => '، مُحجَّمة إلى الأبعاد القصوى $1x$2 عنصورة',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'project' => 'ܬܪܡܝܬܐ:',
	'category' => 'ܣܕܪܐ:',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Simbu123
 */
$messages['as'] = array(
	'title' => 'শ্রেণীভিত্তিক চিত্ৰ ডাউনল’ড',
	'subtitle' => 'কোনো শ্রেণীৰ চিত্ৰ ডাউনল’ডৰ সহজ উপায়',
	'project' => 'প্ৰকল্প:',
	'category' => 'শ্ৰেণী:',
	'thumbnailing' => 'ক্ষুদ্ৰ প্ৰতিকৃতি তৈয়াৰ হৈছে',
	'max-width' => 'সর্বোচ্চ প্ৰস্থ:',
	'max-height' => 'সর্বোচ্চ উচ্চতা:',
	'invalid-width' => 'অবৈধ প্রস্থ্',
	'invalid-height' => 'অবৈধ উচ্চতা',
	'no-such-project' => 'এনে কোনো প্রকল্প নাই',
	'no-images' => 'এই শ্রেণীত কোনো চিত্ৰ নাই',
	'download' => 'ডাউনল’ড',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title' => "Descarga d'imaxes por categoría",
	'subtitle' => "La manera fácil de descargar les imaxes d'una categoría",
	'project' => 'Proyeutu:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniatures',
	'max-width' => 'Anchor máximu:',
	'max-height' => 'Altor máximu:',
	'invalid-width' => 'Anchor inválidu',
	'invalid-height' => 'Altor inválidu',
	'no-such-project' => 'Esi proyeutu nun esiste',
	'no-images' => 'Nun hai imaxes nesa categoría',
	'category-is-url' => 'El nome de categoría conseñáu paez una URL. Tienes de dar el nome de la categoría, non la so URL.',
	'category-contains-namespace' => "Paez qu'incluísti l'espaciu de nomes xunto col nome de la categoría. Col nome dau, la páxina taría disponible como [[Category:$1]].",
	'zip-failed' => 'Falló la creación del Zip',
	'image-area-too-big' => '"$1" ye demasiao grande pa crear una miniatura. Usando\'l tamañu completu.',
	'download-info' => '{{plural: $1|Hai una imaxe|Hai $1 imaxes}}, con un tamañu estimáu de $2',
	'download' => 'Descargar',
	'readme-contents' => 'El ficheru contenedor "$4" llista
les imaxes de la categoría "$1" ($2)$3.

== Instrucciones pa descargar toles imaxes ==
El tiempu de descarga pue variar ente unos minutos y delles hores.

Windows:
 Estrái tolos ficheros nel mesmu direutoriu y executa $5
 $6
Linux/Mac OS
 Estrái tolos ficheros y abri un terminal nesi direutoriu. Executa sh $5',
	'non-bundled-wget' => "Nota: Esta versión nun inclúi wget pa Windows. Tendrás de descomprimir
a un direutoriu con wget.exe o, d'otra miente, tener wget nel PATH",
	'wget-info' => "Esti ficheru contién una copia de wget $1 (pa la plataforma Windows). Wget ye software llibre,
baxo los términos de la LLICENCIA PÚBLICA XENERAL GNU versión 3.
Mas abaxo hai una copia de la llicencia, que tamién ta disponible en http://www.gnu.org/licenses/gpl-3.0.txt

En casu de que t'interese consiguir el códigu fonte d'esti programa, pues descargalu de
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o en dalgún otru espeyu de GNU, visita
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', escalaes a un anchor máximu de $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', escalaes a un altor máximu de $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', escalaes a un tamañu máximu de $1x$2 pixels',
);

/** Azerbaijani (azərbaycanca)
 * @author Khan27
 */
$messages['az'] = array(
	'title' => 'Kateqoriya üzrə şakilləri yüklə',
	'subtitle' => 'Kateqoriyadakı şəkilləri asan yolla yüklə',
	'project' => 'Layihə:',
	'category' => 'Kateqoriya:',
	'thumbnailing' => 'Kiçik rəsim',
	'max-width' => 'Maksimum eni:',
	'max-height' => 'Maksimum hündürlüyü:',
	'invalid-width' => 'Yanlış en',
	'invalid-height' => 'Yanlış hündürlük',
	'no-such-project' => 'Belə layihə mövcud deyil',
	'no-images' => 'Bu kateqoriyada heç bir şəkil yoxdur',
	'category-is-url' => 'Kateqoriyanın adı URL ünvanı kimi görünür. Kateqoriyanın adını müəyyən edin, ancaq URL ünvanı kimi yox.',
	'zip-failed' => 'Zip yaradılması uğursuz oldu',
	'image-area-too-big' => '$1 miniatür yaratmaq üçün çox böyükdür. Tam ölçüdə istifadə et.',
	'download' => 'Yüklə',
);

/** South Azerbaijani (تورکجه)
 * @author E THP
 * @author Mousa
 */
$messages['azb'] = array(
	'title' => 'شکیل‌لری بؤلمه اوستوندن اندیرمک',
	'subtitle' => 'شکیل‌لری بؤلمه ایله اندیرمک اوچون راحات یول',
	'project' => 'پروژه:',
	'category' => 'بؤلمه:',
	'thumbnailing' => 'کیچیکله‌مک',
	'max-width' => 'ان چوخ ائنی:',
	'max-height' => 'ان چوخ بویو:',
	'invalid-width' => 'گئچرسیز ائن',
	'invalid-height' => 'گئچرسیز بوی',
	'no-such-project' => 'ائله بیر پروژه یوخدور',
	'no-images' => 'او بؤلمه‌ده هئچ بیر شکیل یوخدور',
	'category-is-url' => 'وئریلمیش بؤلمه آدی اینترنت آدرسینه بنزه‌ییز. سیز گرک اونون اینترنتی آدرسینی یوخ، بؤلمه آدینی وئره‌سینیز.',
	'category-contains-namespace' => 'نظره گلیر سیز آدفضاسینی بؤلمه آدی‌له وئرمیسینیز. او وئریلمیش آد ایله، صحیفه [[Category:$1]] کیمی ال‌ده اولاجاقدیر.',
	'zip-failed' => 'زیپ فایلی یارانانمادی.',
	'image-area-too-big' => '$1 کیچیک شکیل یاراتماق اوچون چوخ بؤیوکدور. بوتون اؤلچو ایشله‌دیلیر.',
	'download-info' => '$2 تخمینلنمیش اؤلچو ایله {{PLURAL:$1|بیر|$1}} شکیل واردیر.',
	'download' => 'اندیر',
	'readme-contents' => 'قویولموش $4 فایلی، $1 بؤلمه‌سینده اولان شکیل‌لری لیست ائدیر ( $2 )$3.

== لیست اولونموش شکیل‌لرین اندیرمه‌سینین تعلیماتی ==
اندیرمک واختی، نئچه دقیقه‌دن نئچه ساعاتا کیمی فرقلی اولا بیلر.

ویندوز:
 بوتون فایل‌لاری بیر فولدره چیخاردین و $5-ی چالیشدیرین
 $6
لینوکس/مک او‌اِس
 بوتون فایل‌لاری چیخاردین و او فولدرده بیر تِرمینال آچیب، $5-ی چالیشدیرین',
	'non-bundled-wget' => 'دیقت: بو نوسخه‌ده، ویندوز اوچون wget یوخدور. سیز گرک wget.exe اولان بیر فولدره سیخیشدیرماقدان آچاسینیز یادا wget-ی PATH-ه آرتیراسینیز',
	'wget-info' => 'بو فایلین ایچینده wget $1 (ویندوز اوچون) ده واردیر. Wget بیر پولسوز یازیلیم‌دیر، و جی‌اِن‌یو عمومی لیسانس نوسخه ۳ آلتیندادیر.
آشاغیدا بو لیسانسین بیر کوپی‌سی واردیر و هم‌ده http://www.gnu.org/licenses/gpl-3.0.txt -دا واردیر.

بو یازیلیمین قایناق کودونو اله گتیرماغا ماراقلی اولساز، اونو بوردان اندیره بیلرسینیز:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
یادا باشقا بیر جی‌اِن‌یو گوزگوسو، باخینیز:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '، ان چوخ {{PLURAL:$1|بیر|$1}} پیکسِل ائنینه اؤلچولنیب‌دیر',
	'scaling-height' => '، ان چوخ {{PLURAL:$1|بیر|$1}} پیکسِل بویونا اؤلچولنیب‌دیر',
	'scaling-both' => '، ان چوخ $1x$2 پیکسِل ائنینه اؤلچوسونه اؤلچولنیب‌دیر',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'title' => 'Категория буйынса рәсемдәр тейәү',
	'subtitle' => 'Категорияға рәсем тейәүҙең еңел ысулы',
	'project' => 'Проект:',
	'category' => 'Категория',
	'thumbnailing' => 'Миниатюралар',
	'max-width' => 'Максималь киңлек:',
	'max-height' => 'Максималь бейеклек:',
	'invalid-width' => 'Рөхсәт ителмәгән киңлек',
	'invalid-height' => 'Рөхсәт ителмәгән бейеклек',
	'no-such-project' => 'Бындай проект юҡ',
	'no-images' => 'Был категорияла рәсем юҡ',
	'category-is-url' => 'Был категорияның исеме URL-адрес адрес кеүек күренә. URL-адрес түгел, категория исемен яҙырға кәрәк.',
	'category-contains-namespace' => 'Һеҙ исемдәр арауығын категория исеменә яҙып ҡуйҙығыҙ. Һеҙ һайлаған иседәге битте [[Category:$1]] категорияһында ҡарарға мөмкин.',
	'zip-failed' => 'ZIP яһағанда хата китте',
	'image-area-too-big' => 'Эскиз өсөн $1 бик ҙур. Тулы үлсәме ҡулланыла.',
	'download-info' => 'Яҡынса $2 үлсәмендә {{plural: $1|бер рәсем бар|$1 рәсем бар}}',
	'download' => 'Тейәргә',
	'readme-contents' => '$1 ( $2 )$3 категорияһындағы $4 рәсемдәр исемлеге.

== Өҫтәге рәсемдәрҙе тейәү инструкцияһы ==
Тейәү ваҡыты бер нисә минуттан бер нисә сәғәткә тиклем булыуы мөмкин.

Windows:
 Бөтә файлдарҙы бер папка эсенә тағатығыҙ һәм $5 эшләтеп ебәрегеҙ
 $6
Linux/Mac OS
 Бөтә файлдарҙы тағатығыҙ һәм был папкалағы терминалды асығыҙ. sh $5 командаһын үтәгеҙ.',
	'non-bundled-wget' => 'Ихтибар итегеҙ: был юрамала Windows өсөн wget ҡаралмған. Һеҙгә wget.exe булған папкаға файлдарҙы күсерергә йәки PATH эсенә wget яҙып ҡуйырға кәрәк.',
	'wget-info' => 'Был файлда  wget $1 (Windows платформаһы өсөн)күсермәһе бар. GNU GENERAL PUBLIC LICENSE версия 3 лицензяһы шарттары буйынса Wget ирекле программа тәьминәте булып тора.
Түбәндә лицензия тексты бирелгән, уны шулай уҡ http://www.gnu.org/licenses/gpl-3.0.txt адресында уҡырға була.
Әгәр тәүге программаны алырға теләһәгеҙ, түбәндәге адрестарҙан тейәп алырға була:
http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
йәки түбәндә күренгән GNU күсрмәһенән:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '$1 максималь киңлегенә тиклем масштабланған {{plural:$1|pixel|pixels}}',
	'scaling-height' => '$1 максималь бейеклеккә тиклем масштабланған {{plural:$1|pixel|pixels}}',
	'scaling-both' => '$1x$2 максималь үлсәменә тиклем масштабланған',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'title' => 'Загрузка выяваў з катэгорыі',
	'subtitle' => 'Просты шлях загрузкі выяваў ў катэгорыі',
	'project' => 'Праект:',
	'category' => 'Катэгорыя:',
	'thumbnailing' => 'Мініятурызацыя',
	'max-width' => 'Максымальная шырыня:',
	'max-height' => 'Максымальная вышыня:',
	'invalid-width' => 'Няслушная шырыня',
	'invalid-height' => 'Няслушная вышыня',
	'no-such-project' => 'Няма такога праекту',
	'no-images' => 'У гэтай катэгорыі няма выяваў',
	'category-is-url' => 'Пададзеная назва катэгорыі выглядае як URL-адрас. Вам неабходна пазначыць назву катэгорыі а не URL-адрас.',
	'category-contains-namespace' => 'Выглядае, што назва катэгорыі зьмяшчае прастору назваў. З пададзенай назвай старонка будзе даступная як [[Category:$1]].',
	'zip-failed' => 'Немагчыма стварыць архіў у фармаце ZIP',
	'image-area-too-big' => '$1 занадта вялікая каб стварыць мініятуру. Будзе выкарыстоўвацца ў поўным памеры.',
	'download-info' => '{{plural: $1|Ёсьць $1 выява|Ёсьць $1 выявы|Ёсьць $1 выяваў}}, з меркаваным памерам $2',
	'download' => 'Загрузіць',
	'readme-contents' => 'Укладзены файл $4 утрымлівае сьпісы
выяваў, якія знаходзяцца ў катэгорыях $1 ( $2 )$3.

== Інструкцыі па загрузцы ўсіх файлаў са сьпісу ==
Час загрузкі можа вагацца ад некалькі хвілінаў да некалькіх гадзінаў.

Windows:
 Распакаваць усе файлы ў тую ж самую папку і запусьціць $5
 $6
Linux/Mac OS
 Распакаваць усе файлы і адкройце тэрмінал у той жа дырэкторыі. Запусьціце sh $5', # Fuzzy
	'non-bundled-wget' => 'Заўвага: Гэтая вэрсія не ўтрымлівае wget для Windows. Вам трэба будзе распакаваць у папку з wget.exe ці трэба мець шлях да wget у PATH',
	'wget-info' => 'Гэты файл утрымлівае копію wget $1 (для плятформы Windows). Wget — вольнае праграмнае забесьпячэньне, якое распаўсюджваецца на ўмовах ліцэнзіі GNU GENERAL PUBLIC вэрсіі 3.
Копія ліцэнзіі знаходзіцца ніжэй, і таксама даступная на http://www.gnu.org/licenses/gpl-3.0.txt

У выпадку, калі Вы жадаеце атрымаць крынічны код гэтай праграмы, Вы можаце загрузіць яго з
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ці з некаторых іншых люстэрках GNU, глядзіце
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', маштабаваны да максымальнай шырыні ў $1 {{plural:$1|піксэль|піксэлі|піксэляў}}',
	'scaling-height' => ', маштабаваны да максымальнай вышыні ў $1 {{plural:$1|піксэль|піксэлі|піксэляў}}',
	'scaling-both' => ', маштабаваны да максымальнага памеру ў $1×$2 {{plural:$2|піксэль|піксэлі|піксэляў}}',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Dimi z
 */
$messages['bg'] = array(
	'title' => 'Изтегляне на изображения по категория',
	'subtitle' => 'Лесният начин за изтегляне на изображения в дадена категория',
	'project' => 'Проект:',
	'category' => 'Категория:',
	'thumbnailing' => 'Минятуризиране',
	'max-width' => 'Максимална ширина:',
	'max-height' => 'Максимална височина',
	'invalid-width' => 'Невалидна ширина',
	'invalid-height' => 'Невалидна височина',
	'no-such-project' => 'Няма такъв проект',
	'no-images' => 'В тази категория няма изображения',
	'category-is-url' => 'Зададеното име на категория напомня URL адрес. Моля да бъде зададено име на категорията а не URL адреса.',
	'category-contains-namespace' => 'Изглежда сте добавили именното пространство към името на категорията. Със зададеното име страница ще бъде достъпна като [[Category:$1]].',
	'zip-failed' => 'Неуспешно създаване на ZIP',
	'image-area-too-big' => '$1е твърде голям, за да се създаде миниатюра. Използване на пълен размер.',
	'download-info' => '{{plural: $1|Има едно изображение|Има $1 изображения}}, с предполагаем размер от $2',
	'download' => 'Изтегляне',
	'readme-contents' => 'В съдържащия файл $4 са изброени
изображенията в категория  $1( $2 )$3.

== Указания за изтегляне на изборените изображнеия ==
Изтеглянето може да отнеме от минута до няколко часа.

Windows:
 Извличете всички файлове в същата папка и изпълнете  $5
 $6
Linux/Mac OS
 Извлечете всички файлове, отворете терминала в тази папка и изпълнете Run sh $5',
);

/** Banjar (Bahasa Banjar)
 * @author Riemogerz
 */
$messages['bjn'] = array(
	'project' => 'Pruyik',
	'category' => 'Tumbung',
	'download' => 'Unduh',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Nasir8891
 */
$messages['bn'] = array(
	'title' => 'বিষয়শ্রেণীর ভিত্তিতে চিত্র ডাউনলোড',
	'subtitle' => 'কোন বিষয়শ্রেণীর চিত্র ডাউনলোডের সহজ উপায়',
	'project' => 'প্রকল্প:',
	'category' => 'বিষয়শ্রেণী:',
	'thumbnailing' => 'থাম্বনেইল তৈরী হচ্ছে',
	'max-width' => 'সর্বোচ্চ প্রস্থ্য:',
	'max-height' => 'সর্বোচ্চ উচ্চতা:',
	'invalid-width' => 'অবৈধ প্রস্থ্য',
	'invalid-height' => 'অবৈধ উচ্চতা',
	'no-such-project' => 'এমন কোনো প্রকল্প নেই',
	'no-images' => 'এই বিষয়শ্রেণীতে কোনো ছবি নেই',
	'category-is-url' => 'বিষয়শ্রেণী নামটি একটি ইউআরএলের মত মনে হচ্ছে। ইউআরএলের পরিবর্তে আপনাকে নির্দিষ্ট করে বিষয়শ্রেণীর নাম লিখতে হবে।',
	'download' => 'ডাউনলোড',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Gwenn-Ael
 */
$messages['br'] = array(
	'title' => 'Pellgargañ skeudennoù dre rummadoù',
	'subtitle' => 'An doare aesañ da bellgargañ skeudennoù en ur rummad',
	'project' => 'Raktres :',
	'category' => 'Rummad :',
	'thumbnailing' => 'Munudiñ',
	'max-width' => 'Ledander brasañ :',
	'max-height' => 'Uhelder brasañ :',
	'invalid-width' => 'Ledander direizh',
	'invalid-height' => 'Uhelder direizh',
	'no-such-project' => "Ar raktres-mañ n'eus ket anezhañ",
	'no-images' => "N'eus skeudenn ebet er rummad-mañ",
	'category-is-url' => "Tres un URL zo gant anv ar rummad zo bet lakaet. Ret eo deoc'h merkañ anv ar rummad ha neket an URL anezhañ.",
	'category-contains-namespace' => "Evit doare eo bet lakaet ganeoc'h an esaouenn anv asambles gant anv ar rummad. Gant an anv roet e tlefe ar bajenn bezañ hegerz evel [[Category:$1]].",
	'zip-failed' => "C'hwitet eo bet krouiñ ar ZIP",
	'image-area-too-big' => 'Re vras eo $1 da grouiñ ur munud. Ober gant ar vent leun.',
	'download-info' => '{{plural: $1|Ur skeudenn zo dezhi|$1 skeudenn zo dezho}} ar vent a $2 pe war-dro',
	'download' => 'Pellgargañ',
	'readme-contents' => "Renabliñ a ra ar restr $4 enframmet
ar skeudennoù zo er rummad $1 ( $2 )$3.

== Kuzulioù evit pellgargañ an holl skeudennoù rollet ==
An amzer bellgargañ a c'hall bezañ cheñch-dicheñch, eus un nebeud munutennoù betek meur a eurvezh.

Windows :
 Eztennañ an holl restroù en hevelep renkell ha lañsañ $5
 $6
Linux/Mac OS
 Eztennañ an holl restroù ha digeriñ un dermenell er renkell-se. Lañsañ sh $5", # Fuzzy
	'non-bundled-wget' => "Notenn : N'eo ket skoret wget evit Windows er stumm-mañ. Ret e vo deoc'h diwaskañ
en ur c'havlec'h gant wget.exe pe neuze kaout wget er PATH",
	'wget-info' => "Un eilskrid eus wget $1 (evit savennoù Windows) zo er restr. Ur meziant frank eo Wget,
dindan termenoù ar GNU GENERAL PUBLIC LICENSE stumm 3.
Dindan ez eus un eilskrid eus an aotre-implijout a c'haller kavout ivez war http://www.gnu.org/licenses/gpl-3.0.txt

Mard oc'h dedennet da dapout kod tarzh ar programm-mañ e c'hallit e bellgargañ diwar
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
pe melezourioù GNU all, sellit ouzh
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ',skeuliaouet gant ul ledander brasañ a $1 {{plural:$1|pikse}}',
	'scaling-height' => ', skeuliaouet gant un uhelder brasañ a $1 {{plural:$1|piksel}}',
	'scaling-both' => ", skeuliaouet d'ur vent vrasañ a $1x$2 piksel",
);

/** Catalan (català)
 * @author Gemmaa
 * @author Vriullop
 */
$messages['ca'] = array(
	'title' => 'Descàrrega de les imatges per categoria',
	'subtitle' => 'La manera fàcil de descarregar les imatges en una categoria',
	'project' => 'Projecte:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniatures',
	'max-width' => 'Amplada màxima:',
	'max-height' => 'Altura màxima:',
	'invalid-width' => 'Amplada no és vàlida',
	'invalid-height' => 'Alçada no és vàlid',
	'no-such-project' => 'No hi ha cap tal projecte',
	'no-images' => 'No hi ha cap imatge en aquella Categoria',
	'category-is-url' => "El nom de la categoria determinada s'assembla a un URL. Heu d'especificar el nom de categoria, no l'URL.",
	'category-contains-namespace' => "Sembla que han d'incloure l'espai de nom en el nom de la categoria. Amb el nom, la pàgina estaria disponible com [[Category:$1]].",
	'zip-failed' => 'Creació de cremalleres ha fallat',
	'image-area-too-big' => '$1 és massa gran per crear una miniatura. Utilitzant la mida completa.',
	'download-info' => '{{plural:  $1 |Hi ha un image|Hi ha  $1  imatges}}, amb una mida aproximada de$2',
	'download' => 'Descarregar',
	'readme-contents' => "L'arxiu de enclosing  $4  en les llistes de
 les imatges a la  $1  Categoria (  $2  ) $3 .

 = = instruccions per descarregar totes les imatges que figuren = =
El temps de descàrrega pot variar des d'uns quants minuts a unes quantes hores.

Windows:
 Extreu tots els arxius a la mateixa carpeta i cursa  $5
 $6
Linux/Mac OS
 Extreu tots els arxius i obrir un terminal d'aquesta carpeta. Executar sh$5", # Fuzzy
	'non-bundled-wget' => 'Nota: Aquesta versió no inclou wget per a Windows. Vostè haurà de descomprimir
 a una carpeta amb wget. exe o en cas contrari han wget en el camí',
	'wget-info' => 'Aquest fitxer farcells una còpia de wget  $1  (per a plataforma de Windows). Wget és programari lliure
 sota els termes de la GNU GENERAL PUBLIC LICENSE version 3.
Hi ha una còpia de la llicència sota, i també està disponible a http://www.gnu.org/licenses/gpl-3.0.txt

En cas que vostè està interessat en obtenir el codi font per a aquest programa, pot descarregar des de
 http://toolserver.org/~platonides/catdown/wget-sources.php?version= $1
 http://FTP.GNU.org/GNU/wget/wget- $1 . tar.xz
 FTP://FTP.GNU.org/GNU/wget/wget- $1 . tar.xz
 o alguns altres GNU mirall, veure
 http://www.GNU.org/PReP/FTP.html',
	'scaling-width' => ', reduït a una màxima amplada de  $1  {{plural: $1 |pixel|pixels}}',
	'scaling-height' => ', reduït a una alçada màxima de  $1  {{plural: $1 |pixel|pixels}}',
	'scaling-both' => ', reduït a una mida màxima de  $1 x $2  píxels',
);

/** Sorani Kurdish (کوردی)
 * @author Muhammed taha
 */
$messages['ckb'] = array(
	'project' => 'پرۆژە:',
	'category' => 'پۆل:',
	'download' => 'دایبگرە',
);

/** Czech (česky)
 * @author Jezevec
 * @author Jkjk
 * @author Mormegil
 * @author Vks
 */
$messages['cs'] = array(
	'title' => 'Stahování obrázků podle kategorie',
	'subtitle' => 'Snadný způsob, jak stáhnout obrázky v kategorii',
	'project' => 'Projekt:',
	'category' => 'Kategorie:',
	'thumbnailing' => 'Náhledy',
	'max-width' => 'Maximální šířka:',
	'max-height' => 'Maximální výška:',
	'invalid-width' => 'Neplatná šířka',
	'invalid-height' => 'Neplatná výška',
	'no-such-project' => 'Takový projekt neexistuje',
	'no-images' => 'V této kategorii nejsou žádné obrázky',
	'category-is-url' => 'Zadaný název kategorie vypadá jako URL. Je třeba zadat název kategorie, nikoli její adresu.',
	'category-contains-namespace' => 'Vypadá to, že jste v názvu kategorie použili i jmenný prostor. S uvedeným jménem by stránka byla dostupná jako [[Category:$1]].',
	'zip-failed' => 'Nepodařilo se vytvořit ZIP',
	'image-area-too-big' => '$1 je příliš velký, než aby se dal vytvořit náhled. Bude použita plná velikost.',
	'download-info' => '{{plural:$1|Je to jeden obrázek|Jsou to $1 obrázky|Je to $1 obrázků}} o předpokládané velikosti $2',
	'download' => 'Stáhnout',
	'readme-contents' => 'Přibalený soubor $4 obsahuje seznam
obrázků v kategorii $1 ( $2 )$3.

== Instrukce pro stažení všech uvedených obrázků ==
Stahování může trvat od několika minut po mnoho hodin.

Windows:
 Rozbalte všechny soubory do stejného adresáře a spusťte $5
 $6
Linux/Mac OS
 Rozbalte všechny soubory a ve stejném adresáři otevřete terminál. Spusťte sh $5',
	'non-bundled-wget' => 'Poznámka: Tato verze neobsahuje wget pro Windows. Je nutné dekomprimovat do složky s wget.exe nebo mít wget v PATH',
	'wget-info' => 'Tento soubor obsahuje kopii wget $1 (pro Windows). Wget je svobodný software, zveřejněný za podmínek GNU GENERAL PUBLIC LICENSE verze 3.
Níže je uvedena kopie licence, která je také dostupná na http://www.gnu.org/licenses/gpl-3.0.txt

Pokud by vás zajímal zdrojový kód tohoto programu, můžete si ho stáhnout na
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
nebo jiném mirroru GNU, vizte
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', zmenšených na šířku maximálně $1 {{PLURAL:$1|pixel|pixely|pixelů}}',
	'scaling-height' => ', zmenšených na výšku maximálně $1 {{PLURAL:$1|pixel|pixely|pixelů}}',
	'scaling-both' => ', zmenšených na velikost maximálně $1×$2 pixelů',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'project' => 'Проект:',
	'download' => 'Тиесе ил',
);

/** Danish (dansk)
 * @author Christian List
 * @author Tjernobyl
 */
$messages['da'] = array(
	'title' => 'Download af billeder efter kategori',
	'subtitle' => 'Den nemme måde at hente billederne i en kategori',
	'project' => 'Projekt:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Miniaturer',
	'max-width' => 'Maksimal bredde:',
	'max-height' => 'Maksimal højde:',
	'invalid-width' => 'Ugyldig bredde',
	'invalid-height' => 'Ugyldig højde',
	'no-such-project' => 'Projektet eksisterer ikke',
	'no-images' => 'Der er ingen billeder i den kategori',
	'category-is-url' => 'Det angivne kategorinavn ligner en URL-adresse. Du skal angive navnet på en kategori, ikke dens URL.',
	'category-contains-namespace' => 'Du synes at have medtaget navnerummet i kategoriens navn. Med det angivne navn, vil siden være tilgængelig som [[Category:$1]].',
	'zip-failed' => 'Oprettelsen af ZIP mislykkedes',
	'image-area-too-big' => '$1 er for stor til at oprette en miniature. Anvender fuld størrelse.',
	'download-info' => '{{plural: $1|Der er et billede|Der er $1 billeder}} med en anslået størrelse på $2',
	'download' => 'Hent',
	'scaling-width' => ',skaleret til en maksimal bredde på $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ',skaleret til en maksimal højde på $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ',skaleret til en maksimal størrelse på $1x$2 pixels',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title' => 'Bilder nach Kategorie herunterladen',
	'subtitle' => 'Die einfache Möglichkeit die in einer Kategorie enthaltenen Bilder herunterzuladen',
	'project' => 'Projekt:',
	'category' => 'Kategorie:',
	'thumbnailing' => 'Miniaturbilderstellung',
	'max-width' => 'Maximale Breite:',
	'max-height' => 'Maximale Höhe:',
	'invalid-width' => 'Die Breite ist ungültig.',
	'invalid-height' => 'Die Höhe ist ungültig.',
	'no-such-project' => 'Das angegebene Projekt ist nicht vorhanden.',
	'no-images' => 'In dieser Kategorie sind keine Bilder enthalten.',
	'category-is-url' => 'Der angegebenen Kategorienamen scheint eine URL zu sein. Bitte den Kategorienamen und nicht dessen URL angeben.',
	'category-contains-namespace' => 'Du scheinst neben dem Kategorienamen auch die Namensraumbezeichnung angegeben zu haben. Mit dem angegebene Namen würde die Seite als [[Category:$1]] verfügbar sein.',
	'zip-failed' => 'ZIP-Erstellung fehlgeschlagen',
	'image-area-too-big' => '$1 ist zu groß, um eine Miniaturansicht erstellen zu können. Daher wird die volle Bildgröße genutzt.',
	'download-info' => '{{PLURAL:$1|Es ist ein Bild|Es sind $1 Bilder}} mit eine geschätzten Gesamtgröße von $2 vorhanden.',
	'download' => 'Herunterladen',
	'readme-contents' => 'Die Datei $4 listet die Bilder in der Kategorie $1 auf ($2) $3.

== Anleitung zum Herunterladen der aufgelisteten Bilder ==
Die für das Herunterladen benötigte Zeit kann zwischen wenigen Minuten und mehreren Stunden liegen.

Windows:
Alle Dateien in den selben Ordner entpacken und $5 ausführen.
$6
Linux/Mac OS:
Alle Dateien entpacken und ein Terminal öffnen. Danach sh $5 ausführen.',
	'non-bundled-wget' => 'Hinweis: Diese Version enthält nicht Wget für Windows. Du musst die Bilder mit wget.exe in einem Ordner
dekomprimieren oder Wget im Pfad bereitstellen.',
	'wget-info' => 'Diese Datei enthält eine Kopie von Wget $1 (für Windows). Wget ist Freie Software gemäß der
Lizenz „GNU GENERAL PUBLIC LICENSE“ in Version 3.
Eine Kopie der Lizenz befindet sich unten, ist aber auch unter der URL http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Sofern du daran interessiert bist den Quellcode dieses Programms zu bekommen, kannst du ihn an folgenden Stellen herunterladen:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
Es gibt auch andere GNU-Mirror. Siehe hierzu
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', auf eine maximale Breite von {{PLURAL:$1|einem Pixel|$1 Pixel}} skaliert',
	'scaling-height' => ', auf eine maximale Höhe von {{PLURAL:$1|einem Pixel|$1 Pixel}} skaliert',
	'scaling-both' => ', auf eine maximale Größe von $1x$2 Pixel skaliert',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'category-contains-namespace' => 'Sie scheinen neben dem Kategorienamen auch die Namensraumbezeichnung angegeben zu haben. Mit dem angegebene Namen würde die Seite als [[Category:$1]] verfügbar sein.',
	'wget-info' => 'Diese Datei enthält eine Kopie von Wget $1 (für Windows). Wget ist Freie Software gemäß der
Lizenz „GNU GENERAL PUBLIC LICENSE“ in Version 3.
Eine Kopie der Lizenz befindet sich unten, ist aber auch unter der URL http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Sofern Sie daran interessiert sind den Quellcode dieses Programms zu bekommen, können Sie ihn an folgenden Stellen herunterladen:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
Es gibt auch andere GNU-Mirror. Siehe hierzu
 http://www.gnu.org/prep/ftp.html',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'title' => 'Kategoriye ra resiman ronê',
	'project' => 'Proce:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Resimo verdı',
	'max-width' => 'En vesi herayey',
	'max-height' => 'En vesi berzey',
	'invalid-width' => 'Herayey ravêrdi niya',
	'invalid-height' => 'Dergey ravêrdi niya',
	'download' => 'Barkerdış',
	'scaling-width' => ', maksimum herayey rê sencen $1 {{plural:$1|piksel|pikseli}}',
	'scaling-height' => ', maksimum dergey rê sencen $1 {{plural:$1|piksel|pikseli}}',
	'scaling-both' => ', maksimum ebatê sencen $1x$2 piksela',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title' => 'Wobraze pó kategoriji ześěgnuś',
	'subtitle' => 'Jadnora móžnosć, aby wobraze w kategoriji ześěgnuło',
	'project' => 'Projekt:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Napóranje miniaturnego wobraza',
	'max-width' => 'Maksimalna šyrokosć:',
	'max-height' => 'Maksimalna wusokosć:',
	'invalid-width' => 'Njepłaśiwa šyrokosć',
	'invalid-height' => 'Njepłaśiwa wusokosć',
	'no-such-project' => 'Projekt njeeksistěrujo',
	'no-images' => 'W tej kategoriji wobraze njejsu',
	'category-is-url' => 'Pódanaa kategorija wuglěda kaž URL. Musyš mě kategorije pódaś, nic jeje URL.',
	'category-contains-namespace' => 'Zda se, až mjenjowy rum z mjenim kategorije zapśimjeł. Z pódanym mjenim by bok ako [[Category:$1]] k dispoziciji stał.',
	'zip-failed' => 'Zip-napóranje jo se njeraźiło',
	'image-area-too-big' => '$1 jo pśewjeliki, aby miniaturny wobraz napórał. Togodla se połna wjelilkosć wužywa.',
	'download-info' => '{{plural: $1|Jo jaden wobraz|Stej $1 wobraza|Su $1 wobraze|Jo $1 wobrazow}}, z pówobliconeju wjelilkosću $2',
	'download' => 'Ześěgnuś',
	'readme-contents' => 'Pśipołožona dataja $4 nalicy
wobraze w kategoriji $1 ( $2 )$3.

== Instrukcije za ześěgowanje wšych naliconych wobrazow ==
Ześěgowański cas móžo mjazy mało minutami  a někotarymi góźinami wariěrowaś.

Windows:
Zrozpakuj wšykne dataje do togo samego zarědnika a startuj $5
$6

Linux/Mac OS:
Zrozpakuj wšykne dataje a wócyń terminal w tom zarědniku. Startuj sh $5',
	'non-bundled-wget' => 'Glědaj: Toś ta wersija njewopśimujo wget za Windows. Musyš wobraze z wget.exe do zarědnika dekompriměrowaś abo wget hynac w SĆAŽCE k dispoziciji stajiś',
	'wget-info' => 'Toś ta dataja wopśimujo kopiju wót wget $1 (za Windows). Wget jo licha softwara pó licency „GNU GENERAL PUBLIC LICENSE“ we wersiji 3.
Kopija licency jo dołojce, stoj pak teke pód URL http://www.gnu.org/licenses/gpl-3.0.txt k dispoziciji.

Jolic sy na žrědłowem coźe toś togo programa zajmowany, móžoš jen wót slědujucych městnow ześěgnuś:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz

Su teke druge glědałkowe GNU-serwery, glědaj
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', na maksimalnu šyrokosć $1 {{plural:$1|piksela|pikselowu|pikselow}} skalěrowane',
	'scaling-height' => ', na maksimalnu wusokosć $1 {{plural:$1|piksela|pikselowu|pikselow}} skalěrowane',
	'scaling-both' => ', na maksimalnu wjelilkosć $1x$2 pikselow skalěrowane',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Glavkos
 */
$messages['el'] = array(
	'title' => 'Λήψη εικόνων ανά κατηγορία',
	'project' => 'Εγχείρημα:',
	'category' => 'Κατηγορία:',
	'thumbnailing' => 'Μικρογραφίες',
	'max-width' => 'Μέγιστο πλάτος:',
	'max-height' => 'Μέγιστο ύψος:',
	'invalid-width' => 'Μη έγκυρο πλάτος',
	'invalid-height' => 'Μη έγκυρο ύψος',
	'no-such-project' => 'Δεν υπάρχει τέτοιο εγχείρημα',
	'no-images' => 'Δεν υπάρχουν εικόνες σε αυτή την κατηγορία',
	'zip-failed' => 'Η δημιουργία ZIP απέτυχε',
	'download' => 'Λήψη',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'wget-info' => 'This file bundles a copy of wget $1 (for Windows platform). Wget is Free Software,
under the terms of the GNU GENERAL PUBLIC LICENCE version 3.
There is a copy of the licence below, and it is also available at http://www.gnu.org/licenses/gpl-3.0.txt

In case you are interested in getting the source code for this program, you can download it from
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
or some other GNU Mirror, see
 http://www.gnu.org/prep/ftp.html',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Objectivesea
 * @author Yekrats
 */
$messages['eo'] = array(
	'title' => 'Elŝuti de bildoj laŭ kategorio',
	'subtitle' => 'Facilo metodo por elŝuti la bildojn en kategorio',
	'project' => 'Projekto:',
	'category' => 'Kategorio:',
	'thumbnailing' => 'Malgrandigante',
	'max-width' => 'Maksimuma larĝaĵo:',
	'max-height' => 'Maksimuma altaĵo:',
	'invalid-width' => 'Nevalida larĝaĵo',
	'invalid-height' => 'Nevalida altaĵo',
	'no-such-project' => 'Estas nenia projekto',
	'no-images' => 'Ne estas bildoj en tiu kategorio',
	'category-is-url' => 'La nomo de la kategorio ŝajnas kiel URL. Vi devas specifigi la kategorio-nomo, ne la URL.',
	'category-contains-namespace' => 'Vi ŝajne inkluuzivis la nomspacon kune kun la kategorio-nomo. Kun la plena nomo, la paĝo estus atingebla kiel [[Category:$1]].',
	'zip-failed' => 'Kreado de Zip-arkivo malsukcesis',
	'image-area-too-big' => '$1 estas tro granda por krei eta versio. Uzante plenan grandecon.',
	'download-info' => '{{plural: $1|Estas unu bildo|Estas $1 bildoj}}, kun proksima grandeco $2',
	'download' => 'Elŝuti',
	'non-bundled-wget' => 'Ĉi tiu versio ne inkludas wget por Windows.
Vi bezonas malkompaktigi ĝin al dosierujo kun wget.exe aŭ alie havas wget-on en la PATH.',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'title' => 'Descarga de imágenes por categoría',
	'subtitle' => 'La forma más fácil de descargar las imágenes en una categoría',
	'project' => 'Proyecto:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniaturización',
	'max-width' => 'Anchura máxima:',
	'max-height' => 'Altura máxima:',
	'invalid-width' => 'Anchura no válida',
	'invalid-height' => 'Altura no válida',
	'no-such-project' => 'Ese proyecto no existe',
	'no-images' => 'No hay imágenes en esta categoría',
	'category-is-url' => 'El nombre de la categoría dada es parecida a una dirección URL. Es necesario especificar el nombre de la categoría, no su dirección URL.',
	'category-contains-namespace' => 'Al parecer ha incluido el espacio de nombres junto al nombre de la categoría. Con el nombre dado, la página estaría disponible como [[Category:$1]].',
	'zip-failed' => 'Error en la creación del ZIP',
	'image-area-too-big' => '«$1» es demasiado grande para crear una miniatura. Usando el tamaño completo.',
	'download-info' => '{{plural: $1|Hay un imagen|Hay $1 imágenes}}, con un tamaño estimado de $2',
	'download' => 'Descargar',
	'readme-contents' => 'El archivo "$4" incluido enumera
las imágenes en la categoría "$1" ($2)$3.

== Instrucciones para descargar todo la lista de imágenes ==
El tiempo de descarga puede variar desde unos minutos a varias horas.

Windows:
 Extraiga todos los archivos en la misma carpeta y ejecute $5
 $6
Linux/Mac OS:
 Extraiga todos los archivos y abra un  terminal en esa carpeta. Ejecute $5', # Fuzzy
	'non-bundled-wget' => 'Nota: Esta versión no incluye wget para Windows. Deberás descomprimir
en una carpeta con wget.exe o de lo contrario tener wget en la RUTA',
	'wget-info' => 'Este archivo contiene una copia de wget $1 (para la plataforma Windows). Wget es software libre,
bajo los términos de la LICENCIA PÚBLICA GENERAL DE GNU versión 3.
A continuación hay una copia de la licencia e también está disponible en http://www.gnu.org/licenses/gpl-3.0.txt

En caso de estar interesado en el código fuente de este programa, puede descargarlo en
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o en algún otro espejo de GNU, ver
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', escaladas a un ancho máximo de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-height' => ', escaladas a una altura máxima de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-both' => ', escaladas a un tamaño máximo de $1x$2 píxeles',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'title' => 'Piltide allalaadimine kategooria kaupa',
	'subtitle' => 'Lihtne moodus kategoorias olevate piltide allalaadimiseks',
	'project' => 'Projekt:',
	'category' => 'Kategooria:',
	'thumbnailing' => 'Pisipildistamine',
	'max-width' => 'Maksimaalne laius:',
	'max-height' => 'Maksimaalne kõrgus:',
	'invalid-width' => 'Sobimatu laius',
	'invalid-height' => 'Sobimatu kõrgus',
	'no-such-project' => 'Sellist projekti ei ole',
	'no-images' => 'Selles kategoorias ei ole pilte',
	'category-is-url' => 'Toodud kategooria nimi meenutab internetiaadressi. Määrata tuleb kategooria nimi, mitte selle internetiaadress.',
	'category-contains-namespace' => 'Paistab, et oled kategooria nime juurde lisanud nimeruumi. Sellise nimega asuks kategooria leheküljel [[Category:$1]].',
	'zip-failed' => 'ZIP-faili loomine nurjus',
	'image-area-too-big' => '$1 on pisipildi loomiseks liiga suur. Kasutatakse täissuurust.',
	'download-info' => '{{plural:$1|Üks pilt|$1 pilti}} hinnangulise suurusega $2',
	'download' => 'Laadi alla',
	'readme-contents' => 'Kaasasolev fail $4 loetleb
pildid kategoorias $1 ( $2 ). Need pildid on $3.

== Juhised loetletud piltide allalaadimiseks ==
Allalaadimis aeg võib ulatuda mõnest minutist mitme tunnini.

Windows:
 Paki kõik failid lahti samasse kausta ja käivita $5
 $6
Linux/Mac OS
 Paki kõik failid ja ava selles kaustas terminal. Käivita sh $5',
	'scaling-width' => 'mastaabitud maksimaalse laiuseni $1 {{plural:$1|piksel|pikslit}}',
	'scaling-height' => 'mastaabitud maksimaalse kõrguseni $1 {{plural:$1|piksel|pikslit}}',
	'scaling-both' => 'mastaabitud maksimaalse suuruseni $1x$2 pikslit',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'project' => 'Proiektua:',
	'category' => 'Kategoria:',
	'max-width' => 'Zabalera maximoa:',
	'max-height' => 'Altuera maximoa:',
	'zip-failed' => 'Ezin izan da Zip-a sortu',
	'download' => 'Jaitsi',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Leyth
 * @author Reza1615
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'title' => 'دریافت تصاویر بر اساس رده',
	'subtitle' => 'راهی آسان برای دانلود تصاویر در یک رده',
	'project' => 'پروژه:',
	'category' => 'رده:',
	'thumbnailing' => 'کوچک‌سازی',
	'max-width' => 'حداکثر پهنا:',
	'max-height' => 'حداکثر ارتفاع:',
	'invalid-width' => 'عرض نامعتبر',
	'invalid-height' => 'ارتفاع نامعتبر',
	'no-such-project' => 'چنین پروژه‌ای وجود ندارد',
	'no-images' => 'هیچ تصویری در این رده وجود ندارد',
	'category-is-url' => 'نام ردهٔ داده‌شده به نظر نشانی اینترنتی است. باید نام رده را مشخص کنید نه نشانی اینترنتی‌اش را.',
	'category-contains-namespace' => 'به نظر فضای‌نام را نیز پیش از نام رده قرار داده‌اید. با در نظرگیری این نام صفحهٔ مورد نظر [[رده:$1]] خواهد بود.', # Fuzzy
	'zip-failed' => 'زیپ ایجاد نشد',
	'image-area-too-big' => '$1 برای ایجاد تصویر بندانگشتی بیش از حد بزرگ است. استفاده از اندازهٔ کامل.',
	'download-info' => '{{plural: $1|یک تصویر وجود دارد|$1 تصویر وجود دارد}}، با اندازهٔ تخمینی $2',
	'download' => 'دریافت',
);

/** Finnish (suomi)
 * @author Olli
 * @author Samoasambia
 * @author Silvonen
 */
$messages['fi'] = array(
	'title' => 'Tallenna valokuvia luokan mukaan',
	'subtitle' => 'Helppo tapa tallentaa kuvia luokkaan',
	'project' => 'Projekti:',
	'category' => 'Luokka:',
	'thumbnailing' => 'Esikatselukuvat',
	'max-width' => 'Enimmäisleveys:',
	'max-height' => 'Enimmäiskorkeus:',
	'invalid-width' => 'Kelpaamaton leveys',
	'invalid-height' => 'Kelpaamaton korkeus',
	'no-such-project' => 'Projektia ei ole olemassa',
	'no-images' => 'Luokassa ei ole kuvia',
	'category-is-url' => 'Annettu luokan nimi vaikuttaa osoitteelta. Sinun tulee antaa luokan nimi, ei osoitetta.',
	'category-contains-namespace' => 'Näyttää siltä, että olet sisällyttänyt nimiavaruuden luokan nimen lisäksi. Annetulla nimellä, sivu olisi saatavilla [[Luokka:$1]].', # Fuzzy
	'zip-failed' => 'Zip-tiedoston luonti epäonnistui',
	'image-area-too-big' => '$1 on liian iso esikatselukuvan luomiseksi. Käytetään suurinta kokoa.',
	'download-info' => 'On {{plural: $1|yksi kuva, jonka arvioitu koko|$1 kuvaa, joiden arvioitu yhteiskoko}} on $2',
	'download' => 'Lataa',
	'non-bundled-wget' => 'Huomautus: Tämä versio ei sisällä wgetiä Windowsille. Sinun täytyy purkaa kansioon wget.exe:llä tai ottaa wge mukaan polkuun',
	'scaling-width' => ', skaalattu enimmäisleveyteen $1 {{plural:$1|pikseli|pikseliä}}',
	'scaling-height' => ', skaalattu enimmäiskorkeuteen $1 {{plural:$1|pikseli|pikseliä}}',
	'scaling-both' => ', skaalattu enimmäiskokoon $1x$2 pikseliä',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'title' => 'Download av myndum eftir bólki',
	'subtitle' => 'Tann lætti mátin at taka niður myndirnar í einum bólki',
	'project' => 'Verkætlan:',
	'category' => 'Bólkur:',
	'max-width' => 'Størst møguliga víddin',
	'max-height' => 'Mest loyvda hædd:',
	'invalid-width' => 'Ikki loyvd vídd',
	'invalid-height' => 'Ikki loyvd hædd',
	'no-such-project' => 'Tað er ongin sovorðin verkætlan',
	'no-images' => 'Tað eru ongar myndir í hasum bólkinum',
	'category-is-url' => "Navnið á bólkinum, ið tú skrivaði, líkist meira einum URL'i. Tú mást skriva nágreiniliga navnið á bólkinum, ikki internet adressuna.",
	'category-contains-namespace' => 'Tað sær út sum um tú hevur tikið navnaøkið við saman við bólkaheitinum. Við tí givna heitinum, so hevði síðan verði tøk sum [[Category:$1]].',
	'zip-failed' => 'Upprættan av ZIP miseydnaðist',
	'image-area-too-big' => '$1 er ov stór til at upprætta eina minimynd. Brúkar fulla stødd.',
	'download-info' => '{{plural: $1|Tað er ein mynd|Tað eru $1 myndir}}, við einari stødd á umleið $2',
	'download' => 'Tak niður',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Linedwell
 * @author VIGNERON
 */
$messages['fr'] = array(
	'title' => 'Téléchargement d’images par catégorie',
	'subtitle' => 'La manière simple pour télécharger les images dans une catégorie',
	'project' => 'Projet :',
	'category' => 'Catégorie :',
	'thumbnailing' => 'Vignettage',
	'max-width' => 'Largeur maximale :',
	'max-height' => 'Hauteur maximale :',
	'invalid-width' => 'Largeur non valide',
	'invalid-height' => 'Hauteur non valide',
	'no-such-project' => 'Ce projet n’existe pas',
	'no-images' => "Il n'y a pas d’images dans cette catégorie",
	'category-is-url' => 'Le nom de catégorie fourni ressemble à une URL. Vous devez spécifier le nom de la catégorie, non pas son URL.',
	'category-contains-namespace' => 'Il semble que vous avez inclus l’espace de nom avec le nom de la catégorie. Avec le nom fourni, la page serait disponible à [[Category:$1]].',
	'zip-failed' => 'Échec de la création du zip',
	'image-area-too-big' => '$1 est trop gros pour créer une vignette. Utilisez la taille réelle.',
	'download-info' => 'Il y a {{plural: $1|une image|$1 images}}, avec une taille estimée de $2',
	'download' => 'Télécharger',
	'readme-contents' => 'Le fichier conteneur $4 liste les images de la catégorie $1 ( $2 )$3.

== Instructions pour télécharger toutes les images listées ==
Le temps de téléchargement peut varier de quelques minutes à plusieurs heures.

Windows :
 Extraire tous les fichier dans le même répertoire et lancez $5
 $6
Linux/Mac OS :
 Extraire tous les fichiers et ouvrir un terminal dans ce répertoire. Lancez sh $5',
	'non-bundled-wget' => 'Note : Cette version ne comprend pas wget pour Windows. Vous devez décompresser dans un répertoire avec wget.exe ou avoir wget dans le PATH',
	'wget-info' => 'Le fichier comprend une copie de wget $1 (pour plateformes Windows). Wget est un logiciel libre, sous licence de la GNU GENERAL PUBLIC LICENSE version 3.
Vous trouverez une copie de cette licence ci-dessous, et elle est également disponible à http://www.gnu.org/licenses/gpl-3.0.txt

Si vous êtes intéressés par le code source de ce programme, vous pouvez le télécharger depuis
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ou un autre miroir GNU, voyez
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', mis à l’échelle avec une largeur maximale de $1 pixel{{plural:$1||s}}',
	'scaling-height' => ', mis à l’échelle avec une hauteur maximale de $1 pixel{{plural:$1||s}}',
	'scaling-both' => ', mis à l’échelle avec une taille maximale de $1x$2 pixels',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'title' => 'Tèlèchargement d’émâges per catègorie',
	'subtitle' => 'La maniére la ples simpla por tèlèchargiér les émâges dedens na catègorie',
	'project' => 'Projèt :',
	'category' => 'Catègorie :',
	'thumbnailing' => 'Figurâjo',
	'max-width' => 'Largior maximon :',
	'max-height' => 'Hôtior maximon :',
	'invalid-width' => 'Largior envalida',
	'invalid-height' => 'Hôtior envalida',
	'no-such-project' => 'Cél projèt ègziste pas',
	'no-images' => 'Y at gins d’émâge dedens cela catègorie',
	'zip-failed' => 'La crèacion du zip at pas reussia',
	'download' => 'Tèlèchargiér',
	'scaling-width' => ', betâ a l’èchiéla avouéc na largior maximon de $1 pixèl{{plural:$1||s}}',
	'scaling-height' => ', betâ a l’èchiéla avouéc n’hôtior maximon de $1 pixèl{{plural:$1||s}}',
	'scaling-both' => ', betâ a l’èchiéla avouéc na talye maximon de $1 x $2 pixèls',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'category' => 'Catagóir:',
	'download' => 'Íosluchtaigh',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Descarga de imaxes por categoría',
	'subtitle' => 'Un xeito doado de descargar as imaxes presentes nunha categoría',
	'project' => 'Proxecto:',
	'category' => 'Categoría:',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Ancho máximo:',
	'max-height' => 'Altura máxima:',
	'invalid-width' => 'Ancho incorrecto',
	'invalid-height' => 'Altura incorrecta',
	'no-such-project' => 'Ese proxecto non existe',
	'no-images' => 'Non hai imaxes na categoría',
	'category-is-url' => 'O nome da categoría especificado semella un enderezo URL. Cómpre especificar o nome da categoría, non o seu URL.',
	'category-contains-namespace' => 'Semella que incluíu o espazo de nomes xunto ao nome da categoría. Co nome dado, a páxina estaría dispoñible en [[Category:$1]].',
	'zip-failed' => 'Erro na creación do ZIP',
	'image-area-too-big' => '"$1" é grande de máis para crear unha miniatura. Emprégase o tamaño completo.',
	'download-info' => '{{plural: $1|Hai unha imaxe|Hai $1 imaxes}}, cun tamaño estimado de $2',
	'download' => 'Descargar',
	'readme-contents' => 'O ficheiro "$4" incluído lista
as imaxes na categoría "$1" ($2)$3.

== Instrucións para descargar todas as imaxes ==
O tempo de descarga pode variar duns minutos a varias horas.

Windows:
 Extraia todos os ficheiros no mesmo cartafol e execute $5
 $6
Linux/Mac OS:
 Extraia todos os ficheiros e abra un terminal nese cartafol. Execute sh $5',
	'non-bundled-wget' => 'Nota: Esta versión non inclúe wget para Windows. Terá que descomprimir
nun cartafol con wget.exe ou ter wget na RUTA',
	'wget-info' => 'Este ficheiro contén unha copia de wget $1 (para a plataforma Windows). Wget é software libre,
baixo os termos da LICENZA PÚBLICA XERAL DE GNU versión 3.
A continuación hai unha copia da licenza e tamén está dispoñible en http://www.gnu.org/licenses/gpl-3.0.txt

En caso de estar interesado en obter o código fonte deste programa, pode descargalo en
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ou nestoutro espello de GNU
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', escaladas a un ancho máximo de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-height' => ', escaladas a unha altura máxima de $1 {{plural:$1|píxel|píxeles}}',
	'scaling-both' => ', escaladas a un tamaño máximo de $1x$2 píxeles',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'title' => 'શ્રેણી પ્રમાણે ચિત્રો ડાઉનલોડ કરો',
	'project' => 'પરિયોજના:',
	'category' => 'શ્રેણી:',
	'max-width' => 'મહત્તમ પહોળાઇ',
	'max-height' => 'મહત્તમ ઉંચાઇ:',
	'invalid-width' => 'અયોગ્ય પહોળાઇ',
	'invalid-height' => 'અયોગ્ય ઉંચાઇ',
	'no-such-project' => 'જેવી કોઇ પરિયોજના નથી',
	'no-images' => 'તે શ્રેણીમાં કોઇ ચિત્ર નથી',
	'download' => 'ડાઉનલોડ',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'title' => 'הורדת תמונות לפי קטגוריה',
	'subtitle' => 'הדרך הקלה להוריד תמונות מקטגוריה מסוימת',
	'project' => 'מיזם:',
	'category' => 'קטגוריה:',
	'thumbnailing' => 'מזעור תמונות',
	'max-width' => 'הרוחב המרבי:',
	'max-height' => 'הגובה המרבי:',
	'invalid-width' => 'רוחב שגוי',
	'invalid-height' => 'גובה שגוי',
	'no-such-project' => 'אין מיזם כזה',
	'no-images' => 'אין תמונות בקטגוריה זו',
	'category-is-url' => 'הקטגוריה שצוינה נראית כמו כתובת. עליך לציין את שם הקטגוריה, לא את הכתובת שלה.',
	'category-contains-namespace' => 'מסתבר כי הכללת את שם המרחב בשם הקטגוריה. עקב השם שציינת, הדף יהיה זמין כ־[[Category:$1]].',
	'zip-failed' => 'יצירת קובץ ה־Zip נכשלה',
	'image-area-too-big' => 'התמונה $1 גדולה מכדי ליצור עבורה תמונה ממוזערת. ייעשה שימוש בגודלה המלא.',
	'download-info' => '{{plural: $1|יש תמונה אחת|יש $1 תמונות}}, בעלות נפח משוערך של $2',
	'download' => 'הורדה',
	'readme-contents' => 'קובץ הגימור $4 מציג
את התמונות בקטגוריה $1 ( $2 )$3.

== הנחיות להורדת כל התמונות המוצגות ==
זמן ההורדה עלול לנוע בין דקות ספורות למספר שעות.

Windows:
 יש לחלץ את כל הקבצים לאותה התיקייה ולהריץ $5
 $6
לינוקס/Mac OS
 יש לחלץ את כל הקבצים ולפתוח את המסוף באותה התיקייה. להריץ את הפקודה sh $5', # Fuzzy
	'non-bundled-wget' => 'הערה: גרסה זו אינה כוללת את wget לסביבת Windows. יהיה עליך לחלץ לתיקייה שיש בה כבר את wget.exe או שבמשתנה הסביבתי PATH שלך תהיה הכוונה למיקום של wget',
	'wget-info' => 'קובץ זה מאגד בתוכו את wget $1 (לסביבת Windows).‏ Wget הנה תכנה חופשית,
תחת תנאי הרישיון הציבורי הכללי של GNU GENERAL PUBLIC LICENSE בגרסה 3.
יש עותק של הרישיון להלן, והוא גם זמין בכתובת http://www.gnu.org/licenses/gpl-3.0.txt

במקרה שחשקה נפשך בהורדת קוד המקור של תכנית זו, ניתן להוריד אותו מהכתובות הבאות
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
או מכל אתר מראה אחר של GNU, לרשימה ניתן לבקר בכתובת הבאה
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', בהגדלה לרוחב מרבי של {{plural:$1|פיקסל אחד|$1 פיקסלים}}',
	'scaling-height' => ', בהגדלה לגובה מרבי של {{plural:$1|פיקסל אחד|$1 פיקסלים}}',
	'scaling-both' => ', בהגדלה לגודל מרבי של $1x$2 פיקסלים',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'project' => 'प्रकल्प:',
	'category' => 'श्रेणी:',
	'max-width' => 'अधिकतम चौड़ाई:',
	'max-height' => 'अधिकतम ऊँचाई:',
	'invalid-width' => 'अमान्य चौड़ाई',
	'invalid-height' => 'अमान्य ऊँचाई',
	'no-such-project' => 'ऐसा कोई प्रकल्प नहीं है',
	'no-images' => 'उस श्रेणी में कोई चित्र नहीं हैं',
	'zip-failed' => 'ज़िप नहीं बनाई जा सकी',
	'download' => 'डाउनलोड करें',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'project' => 'Projekt:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Minijaturizacija',
	'max-width' => 'Najveća širina:',
	'max-height' => 'Najveća visina:',
	'invalid-width' => 'Neispravna širina',
	'invalid-height' => 'Neispravna visina',
	'no-such-project' => 'Nema takvog projekta',
	'no-images' => 'Nema slika u toj kategoriji',
	'category-is-url' => 'Navedeni naziv kategorije čini se kao URL. Potrebno je navesti naziv kategorije, a ne njegov URL.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title' => 'Wobrazy po kategoriji sćahnyć',
	'subtitle' => 'Jednora móžnosć, zo by wobrazy w kategoriji sćahnyło',
	'project' => 'Projekt:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Wutworjenje miniaturneho wobraza',
	'max-width' => 'Maksimalna šěrokosć:',
	'max-height' => 'Maksimalna wysokosć:',
	'invalid-width' => 'Njepłaćiwa šěrokosć',
	'invalid-height' => 'Njepłaćiwa wysokosć',
	'no-such-project' => 'Projekt njeeksistuje',
	'no-images' => 'W tej kategoriji wobrazy njejsu',
	'category-is-url' => 'Podata kategorija wupada kaž URL. Dyrbiš mjeno kategorije podać, nic jeje URL.',
	'category-contains-namespace' => 'Zda so, zo mjenowy rum z mjenom kategorije zapřijał. Z podatym mjenom by strona jako [[Category:$1]] k dispoziciji stała.',
	'zip-failed' => 'Zip-wutworjenje je so njeporadźiło',
	'image-area-too-big' => '$1 je přewulki, zo by minaturny wobraz wutworił. Tohodla so połna wulkosć wužiwa.',
	'download-info' => '{{plural: $1|Je jedyn wobraz|Stej $1 wobrazaj|Su $1 wobrazy|Je $1 wobrazow}}, z powobličenej wulkosću $2',
	'download' => 'Sćahnyć',
	'readme-contents' => 'Připołožena dataja $4 nalistuje
wobrazy w kategoriji $1 ( $2 )$3.

== Instrukcije za sćahowanje wšěch nalistowanych wobrazow ==
Sćahowanski čas móže mjez mało mjeńšinami  a wjacorymi hodźinami wariěrować.

Windows:
Wotpakuj wšě dataje do samsneho rjadowaka a startuj $5
$6

Linux/Mac OS:
Wotpakuj wšě dataje a wočiń terminal w tym rjadowaku. Startuj sh $5',
	'non-bundled-wget' => 'Kedźbu: Tuta wersija wget za Windows njewobsahuje. Dyrbiš wobrazy z wget.exe do rjadowaka dekomprimować abo wget hinak w ŠĆEŽCE k dispoziciji stajić',
	'wget-info' => 'Tuta dataja wobsahuje kopiju wot wget $1 (za Windows). Wget je swobodna softwara po licency „GNU GENERAL PUBLIC LICENSE“ we wersiji 3.
Kopija licency je deleka, steji pak tež pod URL http://www.gnu.org/licenses/gpl-3.0.txt k dispoziciji.

Jeli sy na žórłowym kodźe tutoho programa zajimowany, móžeš jón wot slědowacych městnow sćahnyć:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz

Su tež druhe špihelowe GNU-serwery, hlej
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', na maksimalnu šěrokosć $1 {{plural:$1|piksela|pikselow|pikselow|pikselow}} skalowane',
	'scaling-height' => ', na maksimalnu wysokosć $1 {{plural:$1|piksela|pikselow|pikselow|pikselow}} skalowane',
	'scaling-both' => ', na maksimalnu wulkosć $1x$2 pikselow skalowane',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'title' => 'Kategória képeinek letöltése',
	'subtitle' => 'A kategóriában található képek letöltésének egy könnyű módja',
	'project' => 'Projekt:',
	'category' => 'Kategória:',
	'thumbnailing' => 'Bélyegkép készítés',
	'max-width' => 'Maximális szélesség:',
	'max-height' => 'Maximális magasság:',
	'invalid-width' => 'Érvénytelen szélesség',
	'invalid-height' => 'Érvénytelen magasság',
	'no-such-project' => 'Nincs ilyen projekt',
	'no-images' => 'Nincs kép a kategóriában',
	'category-is-url' => 'A megadott kategória név úgy néz ki, mint egy URL. Egy kategória nevet kell megadni, nem az URL-ét.',
	'category-contains-namespace' => 'Úgy tűnik, hogy a névteret is hozzávetted a kategória névhez. Az adott névvel a lap [[Category:$1]] módon lesz elérhető',
	'zip-failed' => 'Zip létrehozási hiba',
	'image-area-too-big' => '$1 túl nagy a bélyegkép létrehozásához. A teljes kép lesz használva.',
	'download-info' => '{{PLURAL:$1|Egy|$1}} kép, becsült összméret: $2',
	'download' => 'Letöltés',
	'readme-contents' => 'A mellékelt $4 fájl tartalmazz a
$1 kategória ( $2 )$3 képeinek listáját.

== Útmutató a listázott képek letöltéséhez ==
A letöltés ideje néhány perctől több óráig is tarthat.

Windows:
 Csomagold ki az összes fájlt ugyanabba a könyvtárba és futtasd le a $5 parancsfájlt!
 $6
Linux/Mac OS
 Csomagold ki az összes fájlt, nyissál egy terminált ablakot ebbe a könyvtárban. Futtasd le az sh $5 parancsot!', # Fuzzy
	'non-bundled-wget' => 'Megjegyzés: Ez a verzió nem tartalmazza a wget Windows-os verzióját. Csomagold ki a wget.exe programot az adott könyvtárba, vagy legyen wget elérhető a PATH-ben.',
	'wget-info' => 'Egy a csomag tartalmazza a wget $1 (Windows-os verzió). Wget egy ingyenes program, a GNU GENERAL PUBLIC LICENSE version 3 alatt. Alább megtalálható a licenc egy másolata, valamint hozzáférhető a http://www.gnu.org/licenses/gpl-3.0.txt címen.

Ha érdekelne a program forráskódja, az alábbi helyekről töltheted le:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
vagy valamelyik GNU Mirror oldalról, lásd
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', átméretezve a {{PLURAL:$1|egy|$1}} pixel maximális szélességre',
	'scaling-height' => ', átméretezve a {{PLURAL:$1|egy|$1}} pixel maximális magasságra',
	'scaling-both' => ', átméretezve a $1x$2 pixel maximális méretre',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title' => 'Discargamento de imagines per categoria',
	'subtitle' => 'Un maniera facile de discargar le imagines presente in un categoria',
	'project' => 'Projecto:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniaturisation',
	'max-width' => 'Latitude maxime:',
	'max-height' => 'Altitude maxime:',
	'invalid-width' => 'Latitude invalide',
	'invalid-height' => 'Altitude invalide',
	'no-such-project' => 'Iste projecto non existe',
	'no-images' => 'Il non ha imagines in iste categoria',
	'category-is-url' => 'Le nomine de categoria specificate resimila un adresse URL. Es necessari specificar le nomine del categoria, non su URL.',
	'category-contains-namespace' => 'Il sembla que tu ha includite le spatio de nomines con le nomine del categoria. Con le nomine specificate, le pagina esserea disponibile a [[Category:$1]].',
	'zip-failed' => 'Creation del archivo ZIP fallite',
	'image-area-too-big' => '$1 es troppo grande pro crear un miniatura. Le dimension complete es usate.',
	'download-info' => '{{plural: $1|Il ha un imagine|Il ha $1 imagines}}, con un dimension estimate de $2',
	'download' => 'Discargar',
	'readme-contents' => 'Le file $4 contine un lista
del imagines presente in le categoria $1 ( $2 )$3.

== Instructiones pro discargar tote le imagines listate ==
Le tempore de discargamento pote variar de qualque minutas a plure horas.

Windows:
 Extrahe tote le files in le mesme directoria e executa $5
 $6
Linux/Mac OS
 Extrahe tote le files e aperi un terminal in iste directorio. Executa sh $5', # Fuzzy
	'non-bundled-wget' => 'Nota: Iste version non include le programma "wget" pro Windows. Es necessari, o decomprimer le files
in un directorio que include wget.exe, o haber "wget" in le "PATH".',
	'wget-info' => 'Iste file contine un copia de wget $1 (pro Windows). Wget es software libere,
sub le terminos del LICENTIA PUBLIC GENERAL DE GNU version 3.
Hic infra es un copia de iste licentia; illo es disponibile tamben a http://www.gnu.org/licenses/gpl-3.0.txt

Si tu vole obtener le codice fonte de iste programma, tu pote discargar lo ab
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o de un altere speculo de GNU, vide
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', scalate a un latitude maxime de $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', scalate a un altitude maxime de $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', scalate a un dimension maxime de $1 × $2 pixels',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'title' => 'Pengunduhan gambar menurut kategori',
	'subtitle' => 'Cara mudah mengunduh gambar dalam sebuah kategori',
	'project' => 'Proyek:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Membuat gambar mini',
	'max-width' => 'Lebar maksimum:',
	'max-height' => 'Tinggi maksimum:',
	'invalid-width' => 'Lebar tidak sah',
	'invalid-height' => 'Tinggi tidak sah',
	'no-such-project' => 'Tidak ada proyek seperti itu',
	'no-images' => 'Tidak ada gambar di kategori tersebut',
	'category-is-url' => 'Nama kategori yang dimasukkan tampak seperti URL. Anda perlu memasukkan nama kategorinya, bukan URL-nya.',
	'category-contains-namespace' => 'Anda tampaknya memasukkan ruang sama beserta nama kategorinya. Dengan nama seperti itu, halaman ini akan tertampil sebagai [[Category:$1]].',
	'zip-failed' => 'Pembuatan zip gagal',
	'image-area-too-big' => '$1 terlalu besar untuk dijadikan gambar ini. Pakai ukuran penuh.',
	'download-info' => '{{plural: $1|Ada satu gambar|Ada $1 gambar}}, dengan ukuran kira-kira $2',
	'download' => 'Unduh',
	'readme-contents' => 'Berkas lampiran $4 berisi
gambar di kategori $1 ( $2 )$3.

== Cara mengunduh semua gambar terdaftar ==
Lama pengunduhan bisa bervariasi mulai dari beberapa menit hingga beberapa jam.

Windows:
 Ekstrak semua berkas di folder yang sama dan jalankan $5
 $6
Linux/Mac OS
 Ekstrak semua berkas dan buka sebuah terminal di folder tersebut. Jalankan sh $5',
	'non-bundled-wget' => 'Catatan: Versi ini tidak mencakup wget untuk Windows. Anda perlu melakukan dekompres ke sebuah folder berisi wget.exe atau pasang wget di PATH',
	'wget-info' => 'Berkas ini berisikan salinan wget $1 (untuk platform Windows). Wget adalah Perangkat Lunak Bebas,
di bawah persyaratan LISENSI PUBLIK UMUM GNU versi 3.
Ada salinan lisensi di bawah yang juga tersedia di http://www.gnu.org/licenses/gpl-3.0.txt

Jika Anda ingin mendapatkan kode sumber program ini, Anda bisa mengunduhnya dari
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
atau GNU Mirror lainnya, lihat
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', dibesarkan hingga lebar maksimum $1 {{plural:$1|piksel|piksel}}',
	'scaling-height' => ', dibesarkan hingga tinggi maksimum $1 {{plural:$1|piksel|piksel}}',
	'scaling-both' => ', dibesarkan hingga ukuran maksimum $1x$2 piksel',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'project' => 'Nzu:',
	'category' => 'Ébéonọr:',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author ZioNicco
 */
$messages['it'] = array(
	'title' => 'Scarica le immagini dalla categoria',
	'subtitle' => 'Il modo più semplice per scaricare le immagini in una categoria',
	'project' => 'Progetto:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniaturizzazione',
	'max-width' => 'Larghezza massima:',
	'max-height' => 'Altezza massima:',
	'invalid-width' => 'Larghezza non valida',
	'invalid-height' => 'Altezza non valida',
	'no-such-project' => 'Progetto inesistente',
	'no-images' => "Non c'è nessuna immagine nella categoria",
	'category-is-url' => 'Il nome proposto per la categoria somiglia a un URL. Devi specificare il nome della categoria, non il suo URL.',
	'category-contains-namespace' => 'Sembra che tu abbia incluso il namespace nel nome della categoria. Con il nome che hai proposto, la pagina sarebbe disponibile come [[Category:$1]].',
	'zip-failed' => 'Creazione Zip fallita',
	'image-area-too-big' => '$1 è troppo grande per crearne una miniatura. Verrà usata la dimensione reale.',
	'download-info' => "{{plural: $1|C'è un'immagine|Ci sono $1 immagini}}, per una dimensione stimata di $2",
	'download' => 'Download',
	'readme-contents' => 'Il file di inclusione $4 elenca
le immagini nella categoria $1 ( $2 )$3.

== Istruzioni per il download di tutte le immagini elencate ==
Il tempo di download può variare da pochi minuti a diverse ore.

Windows:
 Estrai tutti i file nella stessa directory ed esegui $5
 $6
Sistemi operativi Linux/Mac:
 Estrai tutti i file ed apri una finestra di terminale in quella directory. Esegui sh $5',
	'non-bundled-wget' => 'Nota: Questa versione non comprende wget per Windows. Dovrai decomprimere
in una directory con wget.exe o altrimenti avere wget nel PATH',
	'wget-info' => "Questo file include una copia di wget $1 (per piattaforma Windows). Wget è Software Libero, nei
termini di cui alla GNU GENERAL PUBLIC LICENSE versione 3.
C'è una copia della licenza più sotto, ed è anche disponibile a http://www.gnu.org/licenses/gpl-3.0.txt

Nel caso siate interessati ad ottenere il codice sorgente per questo programma, potete scaricarlo da
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o da altri Mirror GNU, vedi
 http://www.GNU.org/Prep/FTP.html",
	'scaling-width' => ', scalata ad una larghezza massima di $1 {{plural:$1|pixel|pixel}}',
	'scaling-height' => ', scalata ad una altezza massima di $1 {{plural:$1|pixel|pixel}}',
	'scaling-both' => ', scalata ad una dimensione massima di $1x$2 pixel',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'カテゴリ別に画像をダウンロード',
	'subtitle' => 'カテゴリ内の画像をダウンロードする簡単な方法',
	'project' => 'プロジェクト:',
	'category' => 'カテゴリ:',
	'thumbnailing' => 'サムネイル処理',
	'max-width' => '幅の最大値:',
	'max-height' => '高さの最大値:',
	'invalid-width' => '幅が無効',
	'invalid-height' => '高さが無効',
	'no-such-project' => 'そのようなプロジェクトはありません',
	'no-images' => 'そのカテゴリには画像がありません',
	'category-is-url' => '指定されたカテゴリ名は URL のようです。URL ではなくカテゴリ名を指定してください。',
	'category-contains-namespace' => 'カテゴリ名に名前空間が含まれているようです。指定の通りだと [[Category:$1]] というページになります。',
	'zip-failed' => 'ZIP の作成に失敗しました',
	'image-area-too-big' => '$1 は大きすぎるためサムネイルを作成できません。元の大きさを利用します。',
	'download-info' => '{{plural: $1|1個|$1個}}の画像があり、サイズの概算は$2です',
	'download' => 'ダウンロード',
	'readme-contents' => '同封したファイル $4 は
カテゴリ「$1」( $2 ) 内の画像を$3記載したものです。

== 記載した画像すべてをダウンロードする手順 ==
ダウンロード時間は2、3分で終わることもありますし、数時間かかることもあります。

Winsows:
 同じフォルダーにあるファイルをすべて展開し、$5 を実行してください
 $6
Linux/Mac OS:
 ファイルをすべて展開し、そのフォルダーで端末を開いてください。sh $5 を実行してください',
	'non-bundled-wget' => '注: このバージョンは Windows 用の wget を含んでいません。
wget.exe が存在するフォルダーに展開するか、wget を PATH が通ったところに置いておく必要があります。',
	'wget-info' => 'このファイルには wget $1 (Windows 用) が付属します。wget はフリーソフトウェアであり、
GNU GENERAL PUBLIC LICENSE version 3 の条項の下にあります。
そのライセンスのコピーを下部に示します。また、http://www.gnu.org/licenses/gpl-3.0.txt でも参照できます。

このプログラムのソースコードを入手する際には、以下の場所からダウンロードできます。
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
または、その他の GNU のミラーを利用できます。以下を参照してください。
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '幅の最大値$1{{plural:$1|ピクセル}}に拡大縮小し、',
	'scaling-height' => '高さの最大値$1{{plural:$1|ピクセル}}に拡大縮小し、',
	'scaling-both' => 'サイズの最大値 $1x$2ピクセルに拡大縮小し、',
	'script-filename' => 'download.bat',
	'readme-filename' => 'README.txt',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'title' => 'Ngundhuh gambar miturut katègori',
	'subtitle' => 'Cara mayar kanggo ngundhuh gambar saka sawiji katègori',
	'project' => 'Proyèk:',
	'category' => 'Katégori:',
	'thumbnailing' => 'Nggawé gambar mini',
	'max-width' => 'Ambané maksimum:',
	'max-height' => 'Dhuwuré maksimum:',
	'invalid-width' => 'Ambané ora sah',
	'invalid-height' => 'Dhuwuré ora sah',
	'no-such-project' => 'Ora ana proyèk kaya ngono',
	'no-images' => 'Ora ana gambar nèng katègori kuwi',
	'category-is-url' => 'Jeneng katègori sing diawèhaké kaya-kayané URL. Sampéyan kudu nglebokaké jeneng katègoriné, dudu URLé.',
	'category-contains-namespace' => 'Kaya-kayané Sampéyan nyartakaké bilik jenengé nèng jeneng katégoriné. Mawa jeneng kaya kuwi, kacané kuwi bakal sumadhiya dadi [[Category:$1]].',
	'zip-failed' => 'Gawé zip ora dadi',
	'image-area-too-big' => '$1 kagedhèn kanggo didadèkaké gambar mini. Nganggoa ukuran kebak.',
	'download-info' => '{{plural: $1|Ana sak gambar|Ana $1 gambar}}, sing gedhéné kira-kira $2',
	'download' => 'Undhuh',
	'readme-contents' => 'Berkas kalampiraké $4 kaisi
gambar-gambar nèng katégori $1 ( $2 )$3.

==Tata cara ngundhuh kabèh gambar sing kadaptar==
Wektuné ngundhuh mungkin béda-béda saka pirang-pirang menit tekan pirang-pirang jam.

Windows:
 Tokaké kabèh berkas nèng polder sing padha lan lakokaké $5
 $6
Linux/Mac OS
 Tokaké kabèh berkas lan bukak terminal nèng polder kuwi. Lakokaké sh $5',
	'non-bundled-wget' => 'Cathetan: Vérsi iki ora kalebu wget kanggo Windows. Sampéyan bakal kudu ndékomprès nèng polder mawa wget.exe utawa malah pasang waé wget nèng PATH',
	'scaling-width' => ', digedhékaké tekan jembar maksimum $1 {{plural:$1|piksel|piksel}}',
	'scaling-height' => ', digedhékaké tekan dhuwur maksimum $1 {{plural:$1|piksel|piksel}}',
	'scaling-both' => ', digedhékaké tekan gedhé maksimum $1x$2 piksel',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'project' => 'პროექტი:',
	'category' => 'კატეგორია:',
	'max-width' => 'მაქსიმალური სიგანე:',
	'max-height' => 'მაქსიმალური სიმაღლე:',
	'invalid-width' => 'არასწორი სიგანე',
	'invalid-height' => 'არასწორი სიმაღლე',
	'download' => 'ჩამოტვირთვა',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'project' => 'គម្រោង​៖',
	'category' => 'ចំណាត់ថ្នាក់ក្រុម៖',
	'download' => 'ទាញយក',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'title' => '
ವರ್ಗಗಳ ಪ್ರಕಾರ ಚಿತ್ರಗಳನ್ನು ಡೌನ್ ಲೋಡ್ ಮಾಡಿ',
	'subtitle' => 'ವರ್ಗಗಳ ಪ್ರಕಾರ ಚಿತ್ರಗಳನ್ನು ಡೌನ್ ಲೋಡ್ ಮಾಡಿ ಸುಲಭವಾದ ವಿಧಾನ',
	'project' => 'ಯೋಜನೆ:',
	'category' => 'ವರ್ಗ:',
	'thumbnailing' => 'ಅಡಕುಚಿತ್ರಣ',
	'max-width' => 'ಗರಿಷ್ಠ ಅಗಲ',
	'max-height' => 'ಗರಿಷ್ಠ ಎತ್ತರ',
	'invalid-width' => 'ಒಪ್ಪಲಾಗದ  ಅಗಲ',
	'invalid-height' => 'ಒಪ್ಪಲಾಗದ  ಎತ್ತರ',
	'no-such-project' => 'ಇಂಥಹ ಯಾವುದೇ ಯೋಜನೆ ಇಲ್ಲ',
	'no-images' => 'ಆ ವರ್ಗದಲ್ಲಿ ಯಾವುದೇ ಚಿತ್ರಗಳು ಇಲ್ಲ',
	'category-is-url' => 'ನಿಗದಿತ  ವರ್ಗದಲ್ಲಿ ಹೆಸರು ಬದಲು ಒಂದು URL ತೋರುತ್ತಿದೆ. ನೀವು ವರ್ಗದ ಹೆಸರನ್ನು, ಅದರ URL ಬದಲು ಸೂಚಿಸಲು ಅಗತ್ಯವಿದೆ.',
	'category-contains-namespace' => 'ನೀವು ವರ್ಗದ ಹೆಸರಿನೊಂದಿಗೆ ನಾಮವರ್ಗವನ್ನೂ ಸೇರಿಸಿದಂತಿದೆ. ನೀವು ನೀಡಿರುವ ಹೆಸರಿನಂತೆ, ಪುಟವು [[ವರ್ಗ:$1]] ಎಂದು ಲಭ್ಯವಾಗಿರುತ್ತದೆ.', # Fuzzy
	'zip-failed' => 'ಕುಗ್ಗಿಸುವಿಕೆ ವಿಫಲವಾಗಿದೆ',
	'image-area-too-big' => 'ಅಡಕಚಿತ್ರ ಮಾಡಲು $1 ಬಹಳ ದೊಡ್ಡದಾಗಿದೆ. ಪೂರ್ಣ ಗಾತ್ರವನ್ನು ಉಪಯೋಗಿಸಲಾಗುತ್ತದೆ.',
	'download-info' => 'ಸುಮಾರು $2 ಗಾತ್ರ ಹೊಂದಿದ {{plural: $1|ಒಂದು ಚಿತ್ರವಿದೆ|$1 ಚಿತ್ರಗಳಿವೆ}}',
	'download' => 'ನಕಲಿಳಿಸಿ',
	'readme-contents' => 'ಒಳಗೊಂಡಿರುವ $4 ಕಡತವು
$1 ವರ್ಗದ ( $2 )$3 ಚಿತ್ರಗಳನ್ನು ಪಟ್ಟಿ ಮಾಡುತ್ತದೆ.

== ಪಟ್ಟಿ ಮಾಡಲಾಗಿರುವ ಎಲ್ಲ ಚಿತ್ರಗಳನ್ನು ನಕಲಿಳಿಸಲು ಸೂಚನೆಗಳು ==
ನಕಲಿಳಿಸಲು ಕೆಲವೇ ನಿಮಿಷಗಳಿಂದ ಹಿಡಿದು ಹಲವು ಘಂಟೆಗಳವರೆಗಿನ ಸಮಯ ಹಿಡಿಯಬಹುದು.

ವಿಂಡೋಸ್:
 ಎಲ್ಲ ಕಡತಗಳನ್ನೂ ಒಂದು ಕಡತಕೋಶದಲ್ಲಿ ಹೊರತೆಗೆದು $5 ಜಾರಿಗೊಳಿಸಿ.
 $6
ಲಿನಕ್ಸ್/ಮ್ಯಾಕ್ ಓಎಸ್
 ಎಲ್ಲ ಕಡತಗಳನ್ನೂ ಒಂದು ಕಡತಕೋಶದಲ್ಲಿ ಹೊರತೆಗೆದು ಅದೇ ಕಡತಕೋಶದಲ್ಲಿ ಒಂದು ಟರ್ಮಿನಲ್ ತೆರೆದುಕೊಳ್ಳಿ. sh $5 ಜಾರಿಗೊಳಿಸಿ.', # Fuzzy
	'non-bundled-wget' => 'ಗಮನಿಸಿ: ಈ ಆವೃತ್ತಿಯು ವಿಂಡೋಸ್‌ಗಾಗಿ wget ಅನ್ನು ಹೊಂದಿಲ್ಲ. ನೀವು wget.exe ಹೊಂದಿರುವ ಕಡತಕೋಶಕ್ಕೆ ಹಿಗ್ಗಿಸಬೇಕು ಅಥವಾ wget ಅನ್ನು PATH ಗೆ ಸೇರಿಸಬೇಕು.',
	'wget-info' => 'ಈ ಕಡತವು wget $1 (ವಿಂಡೋಸ್‌ಗಾಗಿ) ನಕಲನ್ನು ಹೊಂದಿದೆ. Wget ಎಂಬುದು GNU GENERAL PUBLIC LICENSEನ ೩ನೇ ಆವೃತ್ತಿಯ ನಿಬಂಧನೆಗೊಳಪಟ್ಟಿರುವ ಒಂದು ಸ್ವತಂತ್ರ ತಂತ್ರಾಂಶ. ಈ ಪರವಾನಗಿಯ ನಕಲು ಕೆಳಗಿದೆ, ಮತ್ತು ಅದು http://www.gnu.org/licenses/gpl-3.0.txt ಎಂಬಲ್ಲಿ ಕೂಡ ಲಭ್ಯವಿದೆ.

ಒಂದು ವೇಳೆ ನೀವು ಈ ತಂತ್ರಾಂಶದ ಮೂಲ ಸಂಕೇತಗಳನ್ನು ಪಡೆಯಲಿಚ್ಛಿಸಿದಲ್ಲಿ ನೀವು ಅದನ್ನು
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ಅಥವಾ ಯಾವುದಾದರೂ GNU ಜಾಲದರ್ಪಣದಿಂದ ನಕಲಿಳಿಸಿಕೊಳ್ಳಬಹುದು.
 http://www.gnu.org/prep/ftp.html ನೋಡಿ.',
	'scaling-width' => ', $1 {{plural:$1|ಪಿಕ್ಸೆಲ್‌ನಷ್ಟು|ಪಿಕ್ಸೆಲ್‌ಗಳಷ್ಟು}} ಗರಿಷ್ಠ ಅಗಲಕ್ಕೆ ಸರಿಹೊಂದಿಸಲಾಗಿದೆ',
	'scaling-height' => ', $1 {{plural:$1|ಪಿಕ್ಸೆಲ್‌ನಷ್ಟು|ಪಿಕ್ಸೆಲ್‌ಗಳಷ್ಟು}} ಗರಿಷ್ಠ ಎತ್ತರಕ್ಕೆ ಸರಿಹೊಂದಿಸಲಾಗಿದೆ',
	'scaling-both' => ', $1x$2 ಪಿಕ್ಸೆಲ್‌ಗಳಷ್ಟು ಗರಿಷ್ಠ ಗಾತ್ರಕ್ಕೆ ಸರಿಹೊಂದಿಸಲಾಗಿದೆ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'title' => '분류의 그림 다운로드',
	'subtitle' => '분류에 있는 그림를 다운로드하는 쉬운 방법',
	'project' => '프로젝트:',
	'category' => '분류:',
	'thumbnailing' => '섬네일 기능',
	'max-width' => '최대 너비:',
	'max-height' => '최대 높이:',
	'invalid-width' => '잘못된 너비',
	'invalid-height' => '잘못된 높이',
	'no-such-project' => '비슷한 프로젝트가 없습니다',
	'no-images' => '이 분류에 속하는 그림이 없습니다',
	'category-is-url' => '주어진 분류 이름이 URL처럼 보입니다. 해당 URL이 아닌 특정한 분류 이름을 지정해야 합니다.',
	'category-contains-namespace' => '분류 이름에 따라 이름공간을 포함한 것 같습니다. [[Category:$1]]에 따라 주어진 이름을 가진 문서가 가능합니다.',
	'zip-failed' => 'Zip 만들기 실패',
	'image-area-too-big' => '$1(은)는 섬네일을 만드는 데 너무 큽니다. 최대 크기를 사용합니다.',
	'download-info' => '$2의 예상 크기와 같은 {{plural: $1|그림 1 개가 있습니다|그림 $1 개가 있습니다}}.',
	'download' => '다운로드',
	'readme-contents' => '인근 $4 파일 목록 $1 분류 ( $2 ) $3에서
그림을 표시합니다.

== 나열된 모든 이미지를 다운로드하기 위한 지침 ==
다운로드하는 데에는 몇 분에서 몇시간까지 다를 수 있습니다.

윈도:
같은 폴더에 있는 모든 파일의 압축을 풀고 $5(을)를 실행하세요.
$6
리눅스/맥 OS
모든 파일의 압축을 풀고 해당 폴더에서 터미널을 여세요. sh $5(을)를 실행하세요',
	'non-bundled-wget' => '참고: 이 버전에서는 wget이 포함되지 않습니다. wget.exe를 폴더에 압축을 풀거나 경로에서 wget을 지정해야 합니다',
	'wget-info' => 'wget $1 (윈도 플랫폼용) 의 복사본 파일이 들어있습니다. wget은 GNU 일반 공중 사용 허가서 버전 3의
조건에 따라 자유 소프트웨어입니다.
아래에는 라이선스 복사본이며 또한 http://www.gnu.org/licenses/gpl-3.0.txt 에서도 찾아볼 수 있습니다

이 프로그램에 대한 소스 코드를 받는 데 관심있을 경우 당신은
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
또는 일부 다른 GNU 미러에서 다운로드할 수 있습니다
 http://www.gnu.org/prep/ftp.html
을 참고하세요',
	'scaling-width' => ', $1 픽셀의 최대 너비로 조정함',
	'scaling-height' => ', $1 픽셀의 최대 높이로 조정함',
	'scaling-both' => ', $1x$2의 최대 크기로 조정함',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Belder pä Saachjrobb eronger laade',
	'subtitle' => 'Ene eijnfache Wääsch, de Belder en ene Saachjrobb eronger ze laade',
	'project' => 'Projäk:',
	'category' => 'Saachjropp:',
	'thumbnailing' => 'Minni-Belldsche',
	'max-width' => 'De jrüüßte Breide:',
	'max-height' => 'De jrüüßte Hühde:',
	'invalid-width' => 'Di Breide es nit jöltesch.',
	'invalid-height' => 'Di Hühde es nit jöltesch.',
	'no-such-project' => 'Esu e Projäk ham_mer nit.',
	'no-images' => 'En dä Saachjropp sinn_er kein Bellder.',
	'category-is-url' => 'Di aanjejovve Saachjropp süht wi ene URL uß, Donn dä Name vun dä Saachjropp aanjävve.',
	'category-contains-namespace' => 'Do häs ene Name vun enenm Apachtemang met dä Saachjropp zosamme aanjejovve. Met dämm Naame däät di Sigg [[Category:$1]] heiße.',
	'zip-failed' => 'Mer kunnte di ZIP-Dattei nit aanlääje.',
	'image-area-too-big' => 'Di Dattei $1 es zoh jruuß förr e Minnnibeldhsce druß ze maache. Mer nämme di Dattei wi se es.',
	'download-info' => 'Mer han {{PLURAL:$1|ei Beld|$1 Belder|kein Belder}} mem Jesampömfang vun $2',
	'download' => 'Eronger laade',
	'readme-contents' => 'En dä Dattei $4 heh sin de Belder uß dä Saachjropp $1 dren zosammejefaß$3.
Di Saachjropp fengk mer onger däm URL:
$2

== Wie mer di Belder eronger laade kann ==
Dat Eronger Laade kann e paa Menutte, ävver och e paa Schtonde doore.

Met <i lang="en">Windows</i>:
 Alle Dateije en et sällve Verzeichneß ußpacke un dann doh dren ußföhre:
 Doh dren ußföhre: <code>$5</code>
 $6
Met <i lang="en">Linux</i> udder <i lang="en">Mac OS</i>:
 Alle Dateije ußpacke un e <i lang="en">Terminal</i>-Finster op maache.
 Dabb ußföhre lohße: <code>sh $5</code>', # Fuzzy
	'non-bundled-wget' => 'Opjepaß: En heh dä Version es <code lang="en">wget</code> fö <i lang="en">Windows</i> nit derbei. Do moß se met <code lang="en">wget.exe</code> en enem Verzischneß ußpacke udder <code lang="en">wget</code> moß övver der Paad zom Projramme Söhke jefonge wääde künne.',
	'wget-info' => 'En dä Dattei es <code lang="en">wget</code> $1 för <i lang="en">Windows</i> met enjebonge. Wget es e frei Projramm un et es ze han onger dä Version 3 vun GNU General Public License (dä alljemeine öffentlesche Lizänz vun dä GNU)
Wigger onge kütt die Lizänz ob heh dä Sigg, ävver mer kann se och beloore op: http://www.gnu.org/licenses/gpl-3.0.txt verfügbar.

Wä däm Projramm singe Quällkood krijje well, kann dä eronger laade vun ongerscheidlijje Schtälle:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
udder och vun ander Schpeejel-ẞööver. Luuer op:
 http://www.gnu.org/prep/ftp.htmlt',
	'scaling-width' => ', obb ene jrüüßte Breide vun {{PLURAL:$1|einem Pixel|$1 Pixelle|keinem Pixel}} ömjeräschnet',
	'scaling-height' => ', obb ene jrüüßte Hühde vun {{PLURAL:$1|einem Pixel|$1 Pixelle|keinem Pixel}} ömjeräschnet',
	'scaling-both' => ', obb ene jrüüßte Ömfang vun $1x$2 Pixelle ömjeräschnet',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'project' => 'Proje:',
	'category' => 'Kategorî:',
	'download' => 'Daxîne',
);

/** Kyrgyz (Кыргызча)
 * @author Growingup
 * @author Викиней
 */
$messages['ky'] = array(
	'title' => 'Сүрөттөрдү категориялары боюнча жүктөө',
	'subtitle' => 'Категорияга сүрөт жүктөөнүн оңой жолу',
	'project' => 'Долбоор:',
	'category' => 'Категория:',
	'max-height' => 'Максималдуу бийиктиги:',
	'invalid-width' => 'Эни туура келбейт',
	'invalid-height' => 'Бийиктиги туура келбейт',
	'no-such-project' => 'Мындай долбоор жок',
	'no-images' => 'Бул категорияда сүрөт жок',
	'category-is-url' => 'Берилген категориянын аталышя URL-дарек сыяктуу. Категориянын URL-дарегин эмес, аталышын көрсөтүңүз.',
	'zip-failed' => 'ZIP түзүүдөгү ката',
	'download' => 'Жүктөп алуу',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'title' => 'Biller vun enger Kategorie eroflueden',
	'subtitle' => 'Déi einfach Manéier fir Biller aus enger Kategorie erofzelueden',
	'project' => 'Projet:',
	'category' => 'Kategorie:',
	'thumbnailing' => 'Miniaturbild gëtt gemaach',
	'max-width' => 'Maximal Breet:',
	'max-height' => 'Maximal Héicht:',
	'invalid-width' => "D'Breet ass net valabel",
	'invalid-height' => "D'Héicht ass net valabel",
	'no-such-project' => 'Sou e Projet gëtt et net',
	'no-images' => 'Et gëtt keng Biller an där Kategorie',
	'category-is-url' => "D'Kategorie déi ugi gouf gesäit wéi eng komplett URL aus. Dir musst den Numm vun der Kategorie uginn, an net hir URL.",
	'category-contains-namespace' => "Et schéngt wéi wann Dir den Nummraum bei den Numm vun der Kategorie derbäigesat hutt. Mam Numm den uginn ass wier d'Säit als [[Category:$1]] disponibel.",
	'zip-failed' => 'De ZIP-Fichier konnt net gemaach ginn',
	'image-area-too-big' => '$1 ass ze grouss fir e Miniatur-Bild ze generéieren. Déi komplett Gréisst gëtt benotzt.',
	'download-info' => 'Et {{plural: $1|ass 1 Bild|si(nn) $1 Biller}} mat enger geschater Gréisst vun $2 do',
	'download' => 'Eroflueden',
	'readme-contents' => "Am Fichier $4 stinn d'Biller déi an der Kategorie $1 dra sinn ($2) $3.

== Instruktioune fir d'Erofluede vun de Biller aus der Lëscht ==
D'Zäit déi Erofluede brauch kann tëscht e puer Minutten an a puer Stonne leien.

Windows:
All Fichieren an deeselwechte Repertoire erauszéien an $5 lancéieren.
$6
Linux/Mac OS

All Fichieren entpacken an een Terminal an deem Repertoire opmaachen. Duerno sh $5 lancéieren.",
	'non-bundled-wget' => "Informatioun: An dëser Versioun ass 'wget for Windows' net abegraff. Dir musst an e Repertoire mat wget.exe dekompriméieren oder wget op eng aner Manéier am 'PATH' hunn",
	'wget-info' => 'An dësem Fichier ass eng Kopie vun Wget $1 (fir Windows). Wget ass Fräi Software no der
Lizenz „GNU GENERAL PUBLIC LICENSE“ Versioun 3.
Eng Kopie vun der Lizenz steet hei drënner, an ass op der URL http://www.gnu.org/licenses/gpl-3.0.txt disponibel.

Wann Dir drun interesséiert sidd de Quellcode vun dësem Programm ze kréien, da kënntDir en op dëse Säiten eroflueden:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
Et gëtt och aner GNU-Mirror. Kuckt dofir
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', op eng maximal Breet vu(n) $1 {{plural:$1Pixel|Pixel}} skaléiert',
	'scaling-height' => ', op eng maximal Héicht vu(n) {{plural:$1Pixel|Pixel}} skaléiert',
	'scaling-both' => ', op eng maximal Gréisst vu(n) $1x$2 Pixel skaléiert',
);

/** لوری (لوری)
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'project' => 'پروجه:',
	'category' => 'دسه:',
	'invalid-width' => 'درازا بی اعتوار',
	'invalid-height' => 'بلنگی بی اعتوار',
	'no-such-project' => 'چنی پروجه ای نی',
	'no-images' => 'هیش عسکی د ای دسه نی',
	'zip-failed' => 'راس کردن زیپ شکست حرد',
	'download' => 'گرتن',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'project' => 'Projektas:',
	'category' => 'Kategorija:',
	'max-width' => 'Maksimalus plotis',
	'max-height' => 'Maksimalus aukštis:',
	'invalid-width' => 'Neleistinas plotis',
	'invalid-height' => 'Neleistinas aukštis',
	'no-such-project' => 'Nėra tokio projekto',
	'zip-failed' => 'Zip sukurti nepavyko',
	'download' => 'Atsisiųsti',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'title' => 'Lejupielādēt attēlus pēc kategorijas',
	'subtitle' => 'Viegls veids, kā lejupielādēt attēlus kategorijā',
	'project' => 'Projekts:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Sīktēli',
	'max-width' => 'Maksimālais platums:',
	'max-height' => 'Maksimālais augstums:',
	'invalid-width' => 'Nederīgs platums',
	'invalid-height' => 'Nederīgs augstums',
	'no-such-project' => 'Šāds projekts nepastāv',
	'no-images' => 'Šajā kategorijā nav attēlu',
	'category-is-url' => 'Ievadītais kategorijas nosaukums izskatās pēc URL. Jums jāievada kategorijas nosaukums, nevis tās URL.',
	'zip-failed' => 'Zip izveide neizdevās',
	'image-area-too-big' => '$1 ir pārāk liels, lai izveidotu sīktēlu. Izmanto pilnā izmērā.',
	'download' => 'Lejupielādēt',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'title' => 'Ngunduh gambar miturut kategori',
	'subtitle' => 'Cara gampang nggo ngunduh gambar nang kategori',
	'project' => 'Proyek:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Nggaweni gambar mini',
	'max-width' => 'Ambane maksimum:',
	'max-height' => 'Dhuwure maksimum:',
	'invalid-width' => 'Ambane salah',
	'invalid-height' => 'Dhuwure salah',
	'no-such-project' => 'Ora ana proyek kaya kuwe',
	'no-images' => 'Ora ana gambar nang kategori kuwe',
	'category-is-url' => 'Kategori sing diwehna ketone kaya anu URL. Rika kudu nglebokna jeneng kategori, dudu URL-e.',
	'category-contains-namespace' => 'Rika kayane anu nglebokna bilikjenenge bareng karo jeneng kategorine. Nganggo jeneng kaya kuwe, kacane mengko bakal dadi [[Category:$1]].',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Rancher
 */
$messages['mk'] = array(
	'title' => 'Преземање на слики по категории',
	'subtitle' => 'Лесен начин на преземање на сликите во некоја категорија',
	'project' => 'Проект:',
	'category' => 'Категорија:',
	'thumbnailing' => 'Минијатуризација',
	'max-width' => 'Макс. ширина:',
	'max-height' => 'Макс. висина:',
	'invalid-width' => 'Неважечка ширина',
	'invalid-height' => 'Неважечка висина',
	'no-such-project' => 'Нема таков проект',
	'no-images' => 'Во таа категорија нема слики',
	'category-is-url' => 'Зададеното име личи на URL-адреса. Треба да го наведете името на категоријата, а не адресата.',
	'category-contains-namespace' => 'Изгледа дека сте го навеле именскиот простор заедно со името на категоријата. Со зададеното име, страницата ќе биде достапна на [[Category:$1]].',
	'zip-failed' => 'Не успеав да создадам ZIP',
	'image-area-too-big' => 'Сликата $1 е преголема за да може да се минијатуризира. Ќе ја употребам полната големина.',
	'download-info' => '{{plural: $1|Има една слика|Има $1 слики}}, со проценета големина од $2',
	'download' => 'Преземи',
	'readme-contents' => 'Во податотеката $4 се наведени
сликите во категоријата $1 ( $2 )$3.

== Напатствија за преземање на сите наведени слики ==
Преземањето може да потрае од неколку минути до неколку часа.

Windows:
 Отпакувајте ги сите податотеки во иста папка и пуштете ја $5
 $6
Linux/Mac OS:
Отпакувајте ги сите податотеки и отворете терминал во таа папка. Пуштете ја $5',
	'non-bundled-wget' => 'Напомена: Оваа верзија не содржи wget за Windows. Отпакувањето ќе треба да
го извршите во папка со wget.exe или веќе да имате wget во патеката',
	'wget-info' => "Податотекава содржи примерок на wget $1 (за Windows). Wget е слободна програмска опрема,
и се нуди под условите на ГНУ-ОВАТА ОПШТА ЈАВНА ЛИЦЕНЦА (''GNU GENERAL PUBLIC LICENSE'') верзија 3.
Подолу е наведен примерок на лиценцата (достапен и на http://www.gnu.org/licenses/gpl-3.0.txt)

Доколку сакате да го добиете изворниот код на програмов, преземете го од
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
или некое друго огледало на ГНУ, вид.
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', со изменет размер до максимална ширина од $1 {{plural:$1|пиксел|пиксели}}',
	'scaling-height' => ', со изменет размер до максимална висина од $1 {{plural:$1|пиксел|пиксели}}',
	'scaling-both' => ', со изменет размер до максимална големина од $1 x $2 пиксели',
	'script-filename' => 'преземање.bat',
	'readme-filename' => 'ДОКУМЕНТАЦИЈА.txt',
);

/** Malayalam (മലയാളം)
 * @author Akhilan
 * @author Sreejithk2000
 */
$messages['ml'] = array(
	'title' => 'വർഗ്ഗത്തിലുള്ള ചിത്രങ്ങൾ ഇറക്കുമതി ചെയ്യൽ',
	'subtitle' => 'ഒരു വർഗ്ഗത്തിലുള്ള ചിത്രങ്ങൾ ഇറക്കുമതി ചെയ്യാനുള്ള എളുപ്പവഴി',
	'project' => 'പദ്ധതി:',
	'category' => 'വർഗ്ഗം:',
	'thumbnailing' => 'ലഘുചിത്രമുണ്ടാക്കുക',
	'max-width' => 'പരമാവധി വീതി:',
	'max-height' => 'പരമാവധി ഉയരം:',
	'invalid-width' => 'തെറ്റായ വീതി',
	'invalid-height' => 'തെറ്റായ ഉയരം',
	'no-such-project' => 'നിലവിലില്ലാത്ത വിക്കിമീഡിയ പദ്ധതി',
	'no-images' => 'ഈ വർഗ്ഗത്തിൽ ചിത്രങ്ങൾ ഇല്ല',
	'category-is-url' => 'വർഗ്ഗത്തിന്റെ പേര് ഒരു വെബ് വിലാസം പോലെ തോന്നിക്കുന്നു. താങ്കൾ മുഴുവൻ വിലാസം നൽകാതെ, വർഗ്ഗത്തിന്റെ പേര് മാത്രം നൽകിയാൽ മതിയാകും.',
	'zip-failed' => 'സിപ് പ്രമാണം ഉണ്ടാക്കുന്നത് പരാജയപ്പെട്ടു',
	'image-area-too-big' => '$1 തമ്പ്നെയിൽ ഉണ്ടാക്കാൻ പറ്റാത്തവിധം വലുതാണ്. മുഴുവൻ വലിപ്പവും ഉപയോഗിച്ചിരിക്കുന്നു',
	'download-info' => 'ഉദ്ദേശം $2 വലിപ്പം വരുന്ന {{plural: $1|ഒരു ചിത്രമുണ്ട്|$1 ചിത്രങ്ങൾ ഉണ്ട്}}',
	'download' => 'ഡൗൺലോഡ്',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'title' => 'वर्गानुसार संचिकांचे अपभारण(डाउनलोड)',
	'subtitle' => 'संचिकांचे विशिष्ट वर्गामध्ये अपभारण(डाउनलोड) करण्याचा सोपा मार्ग',
	'project' => 'प्रकल्प:',
	'category' => 'वर्ग:',
	'thumbnailing' => 'नखुलेकरण(थंबनेलिंग)',
	'max-width' => 'महत्तम रुंदी:',
	'max-height' => 'महत्तम उंची:',
	'invalid-width' => 'अवैध रुंदी',
	'invalid-height' => 'अवैध उंची',
	'no-such-project' => 'असा कोणताही प्रकल्प नाही.',
	'no-images' => 'त्या वर्गात कोणत्याही संचिका नाहीत',
	'category-is-url' => 'दिलेले वर्गनाव हे यूआरएल समान दिसते. आपणास वर्गाचे नाव नमूद करावयाचे आहे न कि त्याच्या यूआरएल चे.',
	'category-contains-namespace' => 'वर्ग नावासमवेत आपण नामविश्वही अंतर्भूत केले आहे.[[Category:$1]] म्हणून  हे पान उपलब्ध होईल.',
	'zip-failed' => "'झिप' तयार करणे अयशस्वी",
	'image-area-too-big' => 'नखुलेकरण(थंबनेल) करण्यास $1 बरीच मोठी आहे म्हणून मुळ आकार वापरत आहे.',
	'download-info' => '{{plural: $1|तेथे एक संचिका|तेथे $1 संचिका}} आहेत ज्यांचा अनुमानीत आकार $2 आहे.',
	'download' => 'अपभारण',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title' => 'Muat turun imej mengikut kategori',
	'subtitle' => 'Cara yang mudah untuk memuat turun imej dalam satu kategori',
	'project' => 'Projek:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Gambar kenit',
	'max-width' => 'Lebar maksimum:',
	'max-height' => 'Tinggi maksimum:',
	'invalid-width' => 'Lebar tidak sah',
	'invalid-height' => 'Tinggi tidak sah',
	'no-such-project' => 'Projek ini tidak wujud',
	'no-images' => 'Tiada imej dalam kategori itu',
	'category-is-url' => 'Nama kategori yang diberikan nampak seperti URL. Anda perlu menyatakan nama kategori itu, bukan URL-nya.',
	'category-contains-namespace' => 'Nampaknya anda telah menyertakan ruang nama dengan nama kategori. Dengan nama yang diberikan, laman itu tersedia sebagai [[Category:$1]].',
	'zip-failed' => 'Zip gagal dibuat',
	'image-area-too-big' => '$1 terlalu besar untuk membuat thumbnail. Saiz penuh digunakan.',
	'download-info' => 'Terdapat {{plural: $1|satu|$1}} imej dengan saiz kira-kira $2',
	'download' => 'Muat turun',
	'readme-contents' => 'Fail pelampir $4 menyenaraikan
imej-imej di kategori $1 ( $2 )$3.

== Arahan memuat turun semua imej tersenarai ==
Jangka masa muat turun mungkin antara beberapa minit dan beberapa jam.

Windows:
 Ekstrakkan semua fail dalam folder yang sama dan jalankan $5
 $6
Linux/Mac OS
 Ekstrakkan semua fail dan buka sebuah terminal dalam folder itu. Jalankan sh $5', # Fuzzy
	'non-bundled-wget' => 'Perhatian: Versi ini tidak menyertakan wget untuk Windows. Anda mungkin perlu menyahmampatkannya ke dalam folder dengan wget.exe, ataupun mempunyai wget dalam LALUAN',
	'wget-info' => 'Fail ini memberkaskan salinan wget $1 (untuk platform Windows). Wget ialah Perisian Bebas,
mengikut terma-terma LESEN AWAM AM GNU versi 3.
Di bawa adalah satu salinan lesen, dan ia juga didapati di http://www.gnu.org/licenses/gpl-3.0.txt

Sekiranya anda berminat untuk mendapatkan kod sumber untuk program ini, anda boleh memuat turunnya dari
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
atau mana-mana Cermin GNU yang lain, rujuk
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', dilaraskan kepada lebar maksimum $1 piksel',
	'scaling-height' => ', dilaraskan kepada tinggi maksimum $1 piksel',
	'scaling-both' => ', dilaraskan kepada saiz maksimum $1x$2 piksel',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'title' => 'Niżżel l-istampi mill-kategorija',
	'subtitle' => "L-iktar mod sempliċi biex tniżżel l-istampi f'kategorija",
	'project' => 'Proġett:',
	'category' => 'Kategorija:',
	'max-width' => 'Wisa massimu:',
	'max-height' => 'Tul massimu:',
	'invalid-width' => "Wisa' mhux valida",
	'invalid-height' => 'Tul mhux valida',
	'no-such-project' => 'Dan il-proġett ma jeżistix',
	'no-images' => "M'hemm l-ebda stampa f'din il-kategorija",
	'category-is-url' => 'L-isem mogħti għal din il-kategorija jidher qisu URL. Trid tispeċifika l-isem tal-kategorija, mhux il-URL tagħha.',
	'category-contains-namespace' => 'Jidher li daħħalt l-isem tal-ispazju flimkien mal-isem tal-kategorija. Flimkien mal-isem mogħti, il-paġna tkun disponibbli bħala [[Category:$1]].',
	'zip-failed' => 'Kreazzjoni taż-zip falliet',
	'image-area-too-big' => '$1 huwa wisq kbir biex isir minjatura. Id-daqs sħiħ se jiġi wżat.',
	'download-info' => "{{plural: $1|Hemm stampa waħda|Hemm $1 stampi}}, b'daqs stmat ta' $2",
	'download' => 'Niżżel',
	'non-bundled-wget' => "Nota: Din il-verżjoni ma tinkudix wget għal Windows. Hemm bżonn li tneħħi l-kompressjoni tal-folder b'wget.exe jew inkella jkollok wget fil-PATH",
	'scaling-width' => ", mqassra għal wisa' massima ta' $1 {{plural:$1|pixel|pixels}}",
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'title' => 'Last ned bilder etter kategori',
	'subtitle' => 'Den enkle måten å laste ned bilder fra en kategori',
	'project' => 'Prosjekt:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Miniatyrbilder',
	'max-width' => 'Maksimumbredde:',
	'max-height' => 'Maksimumhøyde:',
	'invalid-width' => 'Ugyldig bredde',
	'invalid-height' => 'Ugyldig høyde',
	'no-such-project' => 'Det finnes ikke noe slikt prosjekt',
	'no-images' => 'Det er ingen bilder i kategorien',
	'category-is-url' => 'Kategorinavnet du oppga ser ut som en URL. Du må fylle inn kategorinavnet, ikke URLen.',
	'category-contains-namespace' => 'Det ser ut som du har inkludert navnerommet sammen med kategorinavnet. Med det oppgitte navnet, vil siden være tilgjengelig som [[Category:$1]].',
	'zip-failed' => 'Opprettelsen av en ZIP-fil feilet',
	'image-area-too-big' => '$1 er for stor til at det kan lages miniatyrbilde. Bruker full størrelse.',
	'download-info' => 'Det finnes {{plural:$1|ett bilde|$1 bilder}}, med en estimert størrelse $2',
	'download' => 'Last ned',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'category' => 'Kategorie:',
);

/** Nepali (नेपाली)
 * @author Krish Dulal
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'project' => 'परियोजना:',
	'category' => 'श्रेणी:',
	'thumbnailing' => 'थम्बनेल',
	'max-width' => 'अधिकतम चौडाइ:',
	'max-height' => 'अधिकतम उचाइ:',
	'invalid-width' => 'अमान्य चौडाइ',
	'invalid-height' => 'अमान्य उचाइ',
	'no-such-project' => 'यहाँ त्यस्तो कुनै योजना छैन',
	'no-images' => 'त्यस श्रेणीमा कुनै चित्रहरू छैनन्',
	'category-is-url' => 'तपाईंले दिनुभएको श्रेणी वेब ठेगाना जस्तो देखिन्छ । वेब ठेगाना हैन श्रेणीको नाम दिनुहोला ।',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'title' => 'पुचःकथं किपा दाउनलोद',
	'subtitle' => 'पुचले दूगु किपात दाउनलोद यायेगु अःपूगु पहः',
	'project' => 'ज्याझ्वः:',
	'category' => 'पुचः:',
	'thumbnailing' => 'थम्बनेल यानाच्वंगु दु',
	'max-width' => 'दकले अप्व ब्याः:',
	'max-height' => 'दकले अप्वः जाः:',
	'invalid-width' => 'अमान्य ब्याः',
	'invalid-height' => 'अमान्य जाः',
	'no-such-project' => 'थन्याःगु ज्याझ्वः मदु',
	'no-images' => 'व पुचले किपा मदु',
	'category-is-url' => 'छिं बियादिगु पुचःया नां URLथें च्वं। छिं पुचःया नां बी मा, उकिया URLमखु।',
	'category-contains-namespace' => 'छिं पुचःया नां नाप नेपस्पेस ल्वाकज्यानादीगु थें च्वं। थ्व बियातःगु नां कथं पौया नां [[Category:$1]] जुवनि।',
	'zip-failed' => 'Zip दयेकेज्या बिफल जुल।',
	'image-area-too-big' => '$1 थम्बनेल दयेकेत सिक्क तधं। फुलसाइज छ्ह्येलिगु जुल।',
	'download-info' => 'करिब $2 साइजया {{plural: $1|छपा किपा|$1 किपात}} दु।',
	'download' => 'दाउनलोद',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'title' => 'Afbeeldingen in een categorie downloaden',
	'subtitle' => 'De gemakkelijke manier om afbeeldingen in een bepaalde categorie te downloaden',
	'project' => 'Project:',
	'category' => 'Categorie:',
	'thumbnailing' => 'Miniaturen',
	'max-width' => 'Maximale breedte:',
	'max-height' => 'Maximale hoogte:',
	'invalid-width' => 'Ongeldige breedte',
	'invalid-height' => 'Ongeldige hoogte',
	'no-such-project' => 'Er bestaat geen project met die naam',
	'no-images' => 'Er zijn geen afbeeldingen in die categorie',
	'category-is-url' => 'De opgegeven categorienaam lijkt een URL te zijn. U moet de categorienaam opgeven, niet de URL.',
	'category-contains-namespace' => 'U hebt de naamruimte opgenomen in de categorienaam. Met de opgegeven naam, komt de pagina beschikbaar als [[Category:$1|Categorie $1]].',
	'zip-failed' => 'Het maken van een zip-bestand is mislukt.',
	'image-area-too-big' => '$1 is te groot om een miniatuur maken. De volledige grootte wordt gebruikt.',
	'download-info' => '{{plural: $1|Er is één afbeelding|Er zijn $1 afbeeldingen}} met een geschatte grootte van $2',
	'download' => 'Downloaden',
	'readme-contents' => 'In het bestand $4 staat een lijst met
bestanden uit de categorie $1 ($2)$3.

== Instructie voor het downloaden van alle bestanden uit de lijst ==
De downloadtijd kan uiteen lopen van minuten tot uren.

Windows:
 Pak alle bestanden uit in dezelfde map en voer uit: $5
 $6
Linux/Mac OSX:
 Pak alle bestanden uit en open een terminalvenster in die map. Voer daarna uit: sh $5',
	'non-bundled-wget' => 'Let op: in deze versie is wget voor Windows niet opgenomen. U moet uitpakken
naar een map waarin wget.exe staat, of wget moet opgenomen zijn in de
omgevingsvariabele PATH.',
	'wget-info' => 'Dit bestand bundelt een kopie van wget $1 (voor het Windows-platform). Wget is vrije software,
onder de voorwaarden van de GNU GENERAL PUBLIC LICENSE versie 3.
Hieronder staat een kopie van de licentie en deze is ook beschikbaar op http://www.gnu.org/licenses/gpl-3.0.txt.

In het geval dat u geïnteresseerd bent in de broncode van dit programma, kunt u deze downloaden via:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
of een andere GNU-mirror, zie:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', geschaald naar een maximale breedte van $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', geschaald naar een maximale hoogte van $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', geschaald naar een maximale afmeting van $1 x $2 pixels',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'title' => 'Telecargament d’imatges per categoria',
	'project' => 'Projècte :',
	'category' => 'Categoria :',
	'thumbnailing' => 'Vinhetatge',
	'max-width' => 'Largor maximala :',
	'max-height' => 'Nautor maximala :',
	'invalid-width' => 'Largor invalida',
	'invalid-height' => 'Nautor invalida',
	'download' => 'Telecargar',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'title' => 'ବର୍ଗ ଅନୁଯାୟୀ ଛବିଗୁଡିକର ଡାଉନଲୋଡ',
	'subtitle' => 'ବର୍ଗ ଅନୁଯାୟୀ ଛବିଗୁଡିକୁ ଡାଉନଲୋଡ କରିବା ସବୁଠୁ ସହଜ ଉପାୟ',
	'project' => 'ପ୍ରକଳ୍ପ:',
	'category' => 'ଶ୍ରେଣୀ:',
	'thumbnailing' => 'ଛୋଟ ଛୋଟ କରିବା',
	'max-width' => 'ଅଧିକତମ ଓସାର:',
	'max-height' => 'ଅଧିକତମ ଉଚ୍ଚତା:',
	'invalid-width' => 'ଅକାମୀ ଓସାର',
	'invalid-height' => 'ଅକାମୀ ଉଚ୍ଚତା',
	'no-such-project' => 'ସେଠାରେ ସେହିପରି କିଛ ପ୍ରକଳ୍ପ ନାହିଁ',
	'no-images' => 'ସେଠାରେ ସେହି ଶ୍ରେଣୀର କୌଣସି ଛବି ନାହିଁ',
	'category-is-url' => 'ଦିଆଯାଇଥିବା ଶ୍ରେଣୀରେ ନାମଟି ଇଉଆରଏଲ(URL) ଭଳି ଲାଗୁଛି । ଆପଣଙ୍କୁ ଏହାର ଶ୍ରେଣୀ ନାମ ଦେବାକୁ ପଡିବ, ଇଉଆରଏଲ ନାମ ନୁହେଁ ।',
	'category-contains-namespace' => 'ଏହା ଲାଗୁଛି ଯେ ଆପଣ ଶ୍ରେଣୀ ନାମ ସହ ନାମଟି ମଧ୍ୟ ଯୋଡି ଦେଇଛନ୍ତି । ଦିଆଯାଇଥିବା ନାଁ ଅନୁସାରେ, ପୃଷ୍ଠାଟି [[Category:$1]] ଅନୁସାରେ ଉପଲବ୍ଧ ହେବ ।',
	'zip-failed' => 'ଜିପ କରିବାରେ ବିଫଳ',
	'image-area-too-big' => 'ଛୋଟ ଦେଖଣା ତିଆରି କରିବା ପାଇଁ $1 ବହୁତ ବଡ ହେଇ ଯାଉଛି । ପୁରା ସାଇଜ ବ୍ୟବହାର କରି ।',
	'download-info' => '{{plural: $1|ସେଠାରେ ଗୋଟିଏ ଛବି ଅଛି|ସେଠାରେ $1ଟି ଛବି ଅଛି}}, ଯାହାର ଆକାର ହରହାରି $2',
	'download' => 'ଡାଉନଲୋଡ଼',
	'scaling-width' => ', ଅଧିକତମ ଓସାର $1 {{plural:$1|pixel|pixels}} ଯାଏଁ ଲମ୍ବିଯାଇଛି',
	'scaling-height' => ', ଅଧିକତମ ଉଚ୍ଚତା $1 {{plural:$1|pixel|pixels}} ଯାଏଁ ଲମ୍ବିଗଲା',
	'scaling-both' => ',$1x$2 ପିକ୍ସେଲକୁ ଲମ୍ବି ଯାଇଛି ଯାହାକି ଅତ୍ୟଧିକ',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Aalam
 */
$messages['pa'] = array(
	'title' => 'ਵਰਗ ਰਾਹੀਂ ਚਿੱਤਰ ਡਾਊਨਲੋਡ',
	'subtitle' => 'ਇੱਕ ਵਰਗ ਵਿੱਚ ਚਿੱਤਰ ਡਾਊਨਲੋਡ ਕਰਨ ਦਾ ਸੌਖਾ ਢੰਗ',
	'project' => 'ਪਰੋਜੈਕਟ:',
	'category' => 'ਕੈਟਾਗਰੀ:',
	'thumbnailing' => 'ਥੰਮਨੇਲਿੰਗ',
	'max-width' => 'ਵੱਧ ਤੋਂ ਵੱਧ ਚੌੜਾਈ:',
	'max-height' => 'ਵੱਧ ਤੋਂ ਵੱਧ ਉਚਾਈ:',
	'invalid-width' => 'ਗਲਤ ਚੌੜਾਈ',
	'invalid-height' => 'ਗਲਤ ਉਚਾਈ',
	'no-such-project' => 'ਇੰਝ ਦਾ ਕੋਈ ਪਰੋਜੈਕਟ ਨਹੀਂ ਹੈ',
	'no-images' => 'ਉਸ ਕੈਟਾਗਰੀ ਵਿੱਚ ਕੋਈ ਚਿੱਤਰ ਨਹੀਂ ਹਨ',
	'zip-failed' => 'ਜ਼ਿੱਪ ਬਣਾਉਣ ਲਈ ਫੇਲ੍ਹ',
	'download' => 'ਡਾਊਨਲੋਡ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'project' => 'Projekt:',
	'category' => 'Abdeeling:',
	'download' => 'Runnerdraage',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'project' => 'Brojegd:',
	'category' => 'Kadegorie:',
	'max-width' => 'Gregschd Braid:',
	'max-height' => 'Glenschd Heeh:',
	'invalid-width' => 'Uugildischi Braid',
	'invalid-height' => 'Uugildischi Heeh',
	'no-such-project' => "S'Brojegd hods ned.",
	'download' => 'Runalaade',
);

/** Pali (पालि)
 * @author Anand Vivek Satpathi
 */
$messages['pi'] = array(
	'category' => 'विभाग',
);

/** Polish (polski)
 * @author Rezonansowy
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'title' => 'Pobieranie grafik ze względu na kategorię',
	'subtitle' => 'Prosta metoda na pobranie grafik znajdujących się w określonej kategorii',
	'project' => 'Projekt:',
	'category' => 'Kategoria:',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Maksymalna szerokość',
	'max-height' => 'Maksymalna wysokość',
	'invalid-width' => 'Nieprawidłowa szerokość',
	'invalid-height' => 'Nieprawidłowa wysokość',
	'no-such-project' => 'Brak takiego projektu',
	'no-images' => 'W wybranej kategorii nie ma grafik',
	'category-is-url' => 'Wybrana nazwa kategorii wygląda jak adres internetowy. Musisz podać nazwę kategorii, a nie jej adres w Internecie.',
	'category-contains-namespace' => 'Wygląda na to, że w nazwie kategorii jest nazwa przestrzeni nazw. Z zadaną nazwą strona byłaby dostępna jako [[Category:$1]].',
	'zip-failed' => 'Błąd utworzenia archiwum w formacie ZIP',
	'image-area-too-big' => 'Grafika $1 jest zbyt duża, aby utworzyć miniaturkę. Zostanie użyta w pełnym rozmiarze.',
	'download-info' => '{{PLURAL:$1|Jest jedna grafika|Są $1 grafiki|Jest $1 grafik}} o szacowanej wielkości $2',
	'download' => 'Pobierz',
	'readme-contents' => 'Załączony plik $4 zawiera listę
grafik znajdujących się w kategorii $1 ( $2 )$3.
the images at the $1 category ( $2 )$3.

== Instrukcja pobrania wszystkich plików z listy ==
Czas pobierania może się wahać od kilku minut do wielu godzin.

Windows:
 Rozpakuj wszystkie pliki w jednym folderze i uruchom $5
 $6
Linux lub Mac OS:
 Rozpakuj wszystkie pliki, a następnie otwórz terminal w tym folderze. Uruchom sh $5', # Fuzzy
	'non-bundled-wget' => 'Uwaga – ta wersja nie zawiera wget dla systemu Windows. Będziesz musiał rozpakować archiwum do folderu z programem wget.exe lub musisz mieć ten program na ścieżce wpisanej w PATH.',
	'wget-info' => 'W tym pliku znajduje się kopia programu wget $1 (dla platformy Windows). Wget jest  darmowym oprogramowaniem, dostępnym na zasadach licencji GNU GENERAL PUBLIC LICENSE w wersji 3.
Kopia licencji dostępna jest poniżej oraz pod adresem http://www.gnu.org/licenses/gpl-3.0.txt

Jeśli jesteś zainteresowany kodem źródłowym tego programu możesz pobrać go z
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
lub niektórych innych mirrorów GNU, zobacz
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', przeskalowanych do szerokości maksymalnie $1 {{PLURAL:$1|piksela|pikseli}}',
	'scaling-height' => ', przeskalowanych do wysokości maksymalnie $1 {{PLURAL:$1|piksela|pikseli}}',
	'scaling-both' => ', przeskalowanych do maksymalnego rozmiaru $1x$2 pikseli',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'title' => 'Dëscarié ëd figure për categorìa',
	'subtitle' => 'La manera sempia ëd dëscarié le figure ant na categorìa',
	'project' => 'Proget:',
	'category' => 'Categorìa:',
	'thumbnailing' => 'Miniaturisé',
	'max-width' => 'Larghëssa màssima:',
	'max-height' => 'Autëssa màssima:',
	'invalid-width' => 'Larghëssa nen bon-a',
	'invalid-height' => 'Autëssa pa bon-a',
	'no-such-project' => 'Ës proget a esist nen',
	'no-images' => 'A-i é pa ëd figure an sta categorìa',
	'category-is-url' => 'Ël nòm ëd categorìa fornì a smija na liura. A dev specifiché ël nòm ëd la categorìa, pa soa anliura.',
	'category-contains-namespace' => "A smija ch'a l'abie ancludù lë spassi nominal con ël nòm ëd la categorìa. Con ël nòm fornì, la pàgina a sarìa disponìbil com [[Category:$1]].",
	'zip-failed' => 'Creassion dël Zip falìa',
	'image-area-too-big' => "$1 a l'é tròp gròss për creé na miniadura. As deuvra la dimension pien-a.",
	'download-info' => '{{plural: $1|A-i é na figura|A-i son $1 figure}}, con na dimension stimà ëd $2',
	'download' => 'Dëscaria',
	'readme-contents' => "L'archivi contnidor $4 a lista
le figure ant la categorìa $1 ( $2 )$3

== Istrussion për dëscarié tute le figure listà ==
El temp ëd dëscaria a peul varié da pòche minute a vàire ore.

Windows:
 Tiré fòra tùit j'archivi ant ël midem dossié e fé marcé $5
 $6
Linus/Mac OS
 Tiré fòra tùit j'archivi e duverté un terminal an col dossié. Fà marcé sh $5",
	'non-bundled-wget' => 'Nòta: costa vërsion a anclud pa wget për Windows. A dev dëscomprime ant un dossié con wget.exe o dësnò avèj wget ant ël PATH',
	'wget-info' => "Cost archivi a comprend na còpia ëd wget $1 (për piataforma Windows). wget a l'é un programa Lìber,
sota le condission ëd la LICENSA GNU GENERAL PUBLIC version 3.
A-i é na còpia dla licensa sì-sota, e a l'é ëdcò disponìbil a http://www.gnu.org/licenses/gpl-3.0.txt

Dle vire ch'a sia anteressà a avèj ël còdes sorziss për cost programa, a peul dëscarielo da
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o chèich àutr ëspecc GNU, ch'a vëdda
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ', scalà a na larghëssa màssima ëd $1 {{plural:$1|pontin}}',
	'scaling-height' => ", scalà a n'autëssa màssima ëd $1 {{plural:$1|pontin}}",
	'scaling-both' => ', scalà a na dimension màssima ëd $1x$2 pontin',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'project' => 'پروژه:',
	'category' => 'وېشنيزه:',
	'download' => 'ښکته کول',
);

/** Portuguese (português)
 * @author Sarilho1
 */
$messages['pt'] = array(
	'project' => 'Projeto:',
	'category' => 'Categoria:',
	'max-width' => 'Máxima largura:',
	'max-height' => 'Máxima altura:',
	'invalid-width' => 'Largura inválida',
	'invalid-height' => 'Altura inválida',
	'no-such-project' => 'Esse projeto não existe',
	'no-images' => 'Não há imagens nesta categoria',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 * @author Luckas Blade
 * @author TheGabrielZaum
 */
$messages['pt-br'] = array(
	'title' => 'Download de imagens por categoria',
	'subtitle' => 'Um jeito fácil de baixar as imagens numa categoria',
	'project' => 'Projeto:',
	'category' => 'Categoria:',
	'thumbnailing' => 'Miniatura',
	'max-width' => 'Largura máxima:',
	'max-height' => 'Altura máxima:',
	'invalid-width' => 'Largura inválida',
	'invalid-height' => 'Altura inválida',
	'no-such-project' => 'Não existe tal projeto',
	'no-images' => 'Não há nenhuma imagem nessa categoria',
	'category-is-url' => 'O nome da categoria dado parece um URL. Você precisa especificar o nome da categoria, não seu URL.',
	'category-contains-namespace' => 'Parece que você incluiu o espaço de nomes junto com o nome da categoria. Com o nome dado, a página estará disponível como [[Category:$1]].',
	'zip-failed' => 'Falha na criação de Zip',
	'image-area-too-big' => '$1 é muito grande para criar uma miniatura. Usando o tamanho inteiro.',
	'download-info' => '{{plural: $1|Há uma imagem|Há $1 imagens}}, com um tamanho estimado em $2',
	'download' => 'Baixar',
	'readme-contents' => 'O arquivo incluído $4 lista as imagens na categoria $1 ( $2 )$3.

== Instruções para download de todas as imagens listadas ==
O tempo de download pode variar de alguns minutos à várias horas.

Windows:
Extraia todos os arquivos na mesma pasta e execute $5
$6

Linux/Mac OS:
Extraia todos os arquivos e abra um terminal nessa pasta. Execute sh $5',
	'non-bundled-wget' => 'Nota: Esta versão não inclui wget para Windows. Você deverá extrair em uma pasta com o wget.exe ou senão ter wget na  ROTA.',
	'wget-info' => 'Este arquivo contém uma cópia de wget $1 (para a plataforma Windows). Wget é um Software Gratuito,
sob os termos da LICENÇA PÚBLICA GERAL GNU versão 3.
Há uma cópia da licença abaixo, e está também disponível em http://www.gnu.org/licenses/gpl-3.0.txt

Caso você esteja interessado em ter o código-fonte para esse programa, você pode baixá-lo em
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ou ver outro Espelho GNU, veja
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', dimensionada para uma largura máxima de $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', dimensionada para uma altura máxima de $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', dimensionada para um tamanho máximo de $1x$2 pixels',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title' => 'Descărcare de imagini după categorie',
	'subtitle' => 'Calea ușoară de a descărca imaginile dintr-o categorie',
	'project' => 'Proiect:',
	'category' => 'Categorie:',
	'thumbnailing' => 'Miniaturizare',
	'max-width' => 'Lățime maximă:',
	'max-height' => 'Înălțime maximă:',
	'invalid-width' => 'Lățime incorectă',
	'invalid-height' => 'Înălțime incorectă',
	'no-such-project' => 'Nu există nici un astfel de proiect',
	'no-images' => 'Nu există imagini în acea categorie',
	'category-is-url' => 'Numele categoriei introduse arată ca un URL. Trebuie să specificați numele categoriei, nu adresa sa URL.',
	'zip-failed' => 'Crearea arhivei a eșuat',
	'image-area-too-big' => '$1 este prea mare pentru a i se crea o miniatură. Se va utiliza dimensiunea completă.',
	'download-info' => '{{plural: $1|Există o imagine|Există $1 imagini||Există $1 de imagini}} cu o dimensiune estimată la $2',
	'download' => 'Descărcare',
	'scaling-width' => ', scalată la o lățime maximă de $1 {{plural:$1|pixel|pixeli|de pixeli}}',
	'scaling-height' => ', scalată la o înălțime maximă de $1 {{plural:$1|pixel|pixeli|de pixeli}}',
	'scaling-both' => ', scalată la o dimensiune maximă de $1 x $2 pixeli',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title' => 'Scarecamende de le immaggine pe categorije',
	'subtitle' => "'U mode cchiù facile de scarecà le immaggine jndr'à 'na categorije",
	'project' => 'Pruggette:',
	'category' => 'Categorije:',
	'thumbnailing' => 'Miniature',
	'max-width' => 'Larghezza massime:',
	'max-height' => 'Iertezza massime:',
	'invalid-width' => 'Larghezza invalide',
	'invalid-height' => 'Iertezze invalide',
	'no-such-project' => 'Non ge stonne pruggette',
	'no-images' => "Non ge stonne immaggine jndr'à quedda categorije",
	'category-is-url' => "'U nome d'a categorije date pare 'n'URL. Tu è abbesogne de specificà 'u nome d'a categorije, non l'URL sue.",
	'category-contains-namespace' => "Pare ca tu è mise 'u nome d'u namespace jndr'à quidde d'a categorije. Cu stu nome ca è date, 'a pàgene pò essere disponibbele cumme [[Category:$1]].",
	'zip-failed' => "Ccrejazione d'u ZIP fallite",
	'image-area-too-big' => "$1 jè troppe granne pe ccrejà 'na miniature. Ause 'a dimenzione comblete.",
	'download-info' => "{{plural: $1|stè 'n'immaggine|Stonne $1 immaggine}}, cu 'na dimenzione stimate de $2",
	'download' => 'Scareche',
	'readme-contents' => "'U file $4 tène 'n'elenghe de immaggine jndr'à $1 categorije ( $2 )$3.

== 'Struziune pe scarecà tutte le immaggine elengate ==
'U tiembe de scarecamende pò cangià da quacche minue e adiverse ore.

Windows:
 Estraje tutte le file jndr'à stessa cartelle e lange $5
 $6
Linux/Mac:
 Estraje tutte le file e iapre 'nu terminale jndr'à quedda cartelle. Lange sh $5", # Fuzzy
	'non-bundled-wget' => "Note: Sta versione non ge 'nglude wget pe Windows. Tu puè avè abbesogne de decomprimere jndr'à 'na cartelle cu wget.exe oppure è wget jndr'à 'u PATH",
	'wget-info' => "Stu file tène 'na copie de wget $1 (pe piattaforme Windows). Wget jè 'nu Softuare libbere, sotte a le termine 'a GNU GENERAL PUBLIC LICENSE versione 3.
Stè 'na copie d'a licenze aqquà sotte, e jè pure disponibbele sus a http://www.gnu.org/licenses/gpl-3.0.txt

Ce tu si inderessate a pigghià 'u codece sorgende pe stu programma, tu 'u puè scarecà da
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o pe otre Copie de GNU, 'ndruche
 http://www.gnu.org/prep/ftp.html",
	'scaling-width' => ", scalate a 'a massime larghezze de $1 {{plural:$1:pixel|pixel}}",
	'scaling-height' => ", scalate a 'a massime altezze de $1 {{plural:$1:pixel|pixel}}",
	'scaling-both' => ", scalate a 'a massima dimenzione de $1x$2 pixel",
	'script-filename' => 'download.bat',
	'readme-filename' => 'README.txt',
);

/** Russian (русский)
 * @author DCamer
 * @author Eleferen
 * @author Haffman
 * @author Okras
 */
$messages['ru'] = array(
	'title' => 'Загрузка изображений по категориям',
	'subtitle' => 'Простой способ для загрузки изображения в категории',
	'project' => 'Проект:',
	'category' => 'Категория:',
	'thumbnailing' => 'Миниатюры',
	'max-width' => 'Максимальная ширина:',
	'max-height' => 'Максимальная высота:',
	'invalid-width' => 'Недопустимая ширина',
	'invalid-height' => 'Недопустимая высота',
	'no-such-project' => 'Такого проекта не существует',
	'no-images' => 'В этой категории нет изображений',
	'category-is-url' => 'Имя данной категории выглядит как URL-адрес. Необходимо указать название категории, а не его URL-адрес.',
	'category-contains-namespace' => 'Похоже, вы включили пространство имён в имя категории. С выбранным Вами названием страница будет доступна как [[Category:$1]].',
	'zip-failed' => 'Ошибка создания ZIP',
	'image-area-too-big' => '$1 слишком велико для создания эскиза. Будет использован полный размер.',
	'download-info' => '{{plural: $1|Есть одно изображение|Есть $1 изображения|Есть $1 изображений}}, с примерным размером $2',
	'download' => 'Загрузить',
	'readme-contents' => 'Список изображений $4 в категории $1 ( $2 )$3.

== Инструкции по загрузке всех перечисленных изображений ==
Время загрузки может варьироваться от нескольких минут до нескольких часов.

Windows:
 Распакуйте все файлы в одну папку и запустите $5
 $6
Linux/Mac OS:
 Распакуйте все файлы и откройте терминал в этой папке. Выполните команду sh $5',
	'non-bundled-wget' => 'Обратите внимание: Эта версия не включает wget для Windows. Вам необходимо извлечь файлы в папку с wget.exe или прописать wget в PATH',
	'wget-info' => 'Этот файл включает копию wget $1 (для платформы Windows). Wget является свободным программным обеспечением,
распространяемым на условиях лицензии GNU GENERAL PUBLIC LICENSE версии 3.
Ниже представлена копия текста лицензии, ее также можно прочитать по адресу http://www.gnu.org/licenses/gpl-3.0.txt

В случае, если вы желаете получить исходный код этой программы, вы можете загрузить его с:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
или с некоторых других зеркал GNU, которые можно увидеть здесь:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', масштабирован до максимальной ширины $1 {{plural:$1|пикселя|пикселей}}',
	'scaling-height' => ', масштабирован до максимальной высоты $1 {{plural:$1|пикселя|пикселей}}',
	'scaling-both' => ', масштабирован до максимального размера $1x$2 пикселей',
);

/** Sanskrit (संस्कृतम्)
 * @author Hemant wikikosh1
 */
$messages['sa'] = array(
	'title' => 'चित्राणां वर्गशः अवारोपणम्',
	'subtitle' => 'एकस्मिन् वर्गे विद्यमानानि चित्राणि अवारोपयितुं सरलो मार्गः',
	'project' => 'प्रकल्पम् :',
	'category' => 'वर्गः :',
	'download' => 'अवारोप्यताम्',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'title' => 'Ойуулары категорияларынан хачайдааһын',
	'subtitle' => 'Ойууну категорияҕа угарга судургу ньыма',
	'project' => 'Бырайыак:',
	'category' => 'Категория:',
	'thumbnailing' => 'Ойуучааннар',
	'max-width' => 'Кэтитин хааччаҕа:',
	'max-height' => 'Үрдүгүн хааччаҕа:',
	'invalid-width' => 'Сатаммат кэтиттээх',
	'invalid-height' => 'Сатаммат үрдүктээх',
	'no-such-project' => 'Маннык суох',
	'no-images' => 'Бу категорияҕа ойуу суох',
	'category-is-url' => 'Бу категория URL-аадырыс курдук. Категория аата атын буолуохтаах, URL-аадырыс буолуо суохтаах.',
	'zip-failed' => 'ZIP оҥоруутун алҕаһа',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'title' => 'ප්‍රවර්ගයන් ඔස්සේ පින්තූර බාගැනීම්',
	'subtitle' => 'ප්‍රවර්ගයක තිබෙන පින්තූර බාගැනීමට පහසුම මඟ',
	'project' => 'ව්‍යාපෘතිය:',
	'category' => 'ප්‍රවර්ගය:',
	'thumbnailing' => 'සංක්ෂිප්තකරණය',
	'max-width' => 'උපරිම පළල:',
	'max-height' => 'උපරිම උස:',
	'invalid-width' => 'වලංගු නොවන පළල',
	'invalid-height' => 'වලංගු නොවන උස',
	'no-such-project' => 'සැබෑ වශයෙන් එහි ව්‍යාපෘතියක් නොමැත',
	'no-images' => 'මෙම ප්‍රවර්ගයේ පින්තූර කිසිවක් නොමැත.',
	'zip-failed' => 'Zip තැනීම අසාර්ථකයි',
	'image-area-too-big' => '$1 සංක්ෂිප්තය තැනීමට විශාල වැඩියි. සම්පූර්ණ ප්‍රමාණය භාවිතා කරයි.',
	'download' => 'බාගන්න',
	'scaling-width' => ', {{plural:$1|පික්සල්}} $1 ක උපරිම පළලකට පරිමාණය කර ඇත',
	'scaling-height' => ', {{plural:$1|පික්සල්}} $1 ක උපරිම උසකට පරිමාණය කර ඇත',
	'scaling-both' => ', $1x$2 ක උපරිම ප්‍රමාණයකට පරිමාණය කර ඇත',
);

/** Slovak (slovenčina)
 * @author Wizzard
 */
$messages['sk'] = array(
	'download' => 'Stiahnuť',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'title' => 'Prenos slik po kategorijah',
	'subtitle' => 'Preprost način za prenos slik v kategoriji',
	'project' => 'Projekt:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Izdelava sličic',
	'max-width' => 'Največja širina:',
	'max-height' => 'Največja višina:',
	'invalid-width' => 'Neveljavna širina',
	'invalid-height' => 'Neveljavna višina',
	'no-such-project' => 'Takšen projekt ne obstaja',
	'no-images' => 'V tej kategoriji ni slik',
	'category-is-url' => 'Podano ime kategorije izgleda kot URL. Navesti morate ime kategorije, ne njen URL.',
	'category-contains-namespace' => 'Zdi se, da ste poleg imena kategorije vključili tudi imenski prostor. Z navedenim imenom bo stran na razpolago kot [[Category:$1]].',
	'zip-failed' => 'Ustvarjanje zipa je spodletelo',
	'image-area-too-big' => '$1 je prevelika za ustvarjanje sličice. Uporabljena bo polna velikost.',
	'download-info' => '{{PLURAL:$1|Obstaja $1 slika|Obstajata $1 sliki|Obstajajo $1 slike|Obstaja $1 slik}}, z velikostjo ocenjeno na $2',
	'download' => 'Prenesi',
	'readme-contents' => 'Vključena datoteka $4 navaja
slike v kategoriji $1 ($2)$3.

== Navodila za prenos vseh navedenih slik ==
Čas prenašanja se lahko giblje od nekaj minut do več ur.

Windows:
 Razširite vse datoteke v isto mapo in zaženite $5
 $6
OS Linux/Mac
 Razširite vse datoteke in odprite ukazno vrstico v tej mapi. Zaženite sh $5',
	'non-bundled-wget' => 'Opozorilo: Ta različica ne vsebuje wget za Windows. Morali boste razširiti
v mapo z wget.exe ali pa imeti wget v PATH',
	'wget-info' => 'Datoteka vključuje kopijo wget $1 (za programsko okolje Windows). Wget je prosto programje
pod pogoji SPLOŠNE JAVNE LICENCE GNU različica 3.
Kopija licence je na razpolago spodaj, prav tako pa tudi na naslovu http://www.gnu.org/licenses/gpl-3.0.txt

Če želite pridobiti izvorno kodo programa, jo lahko prenesete s:
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ali s katerega drugega zrcala GNU; glej
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', prilagojene na širino največ $1 {{PLURAL:$1|slikovne pike|slikovnih pik}}',
	'scaling-height' => ', prilagojene na višino največ $1 {{PLURAL:$1|slikovne pike|slikovnih pik}}',
	'scaling-both' => ', prilagojene na velikost največ $1x$2 slikovnih pik',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'title' => 'Soo deji sawirka hadba nuuca uu yahay',
	'subtitle' => 'Sida ugu fudud ee soo dejinta sawirada hab isku nuuc ah',
	'project' => 'Mashruuc:',
	'category' => 'Nuuc',
	'thumbnailing' => 'Yareynta',
	'max-width' => 'Aad u yareynta',
	'max-height' => 'Joogga ugu dheer',
	'invalid-width' => 'Ballac aan suura gal ahayn',
	'invalid-height' => 'Dherer aan la aqbali karin',
	'no-such-project' => 'Mashruuc aan jirin',
	'no-images' => 'Qaybtaan wax sawir ah kuma jiraan',
	'category-is-url' => 'Magacaan aad soo jeedisay ee qaybtan waxa uu shaabahaa URL. Waxaa lagaa doonayaa inaad magaca ku muujisid qaybta. Maya ULK kiisa',
	'category-contains-namespace' => 'Waxaa muuqata inaad ku dartay booska magaca mid Qayb kale ah. Magacaan, waxa uu noqonayaa sidaan [[Category:$1]].',
	'zip-failed' => 'Zip kii samayntiisa waa lagu suuroobi waysay',
	'image-area-too-big' => '$1 aad ayuu u wayn yahay si loo habeeyo sawir yar. waa in la adeegsadaa cabir dhamaystiran.',
	'download-info' => '{{plural: $1|Waa hal sawir|Waa $1 Sawirro}}, Qiyaastii cabir ah $2',
	'download' => 'Soo daji',
	'readme-contents' => 'Fileka la xiriira  $4 liiska
ee sawirada yaala $1 Qaybta ( $2 )$3.

== Dhismaha soo dajinta ee liiska sawirada ==
Way is gafi karaan waqtiga soo dajinta diqiiqado ilaa iyo saacado.

Windows:
 Ka soo dhaxsaar Garbadyada isla Fileka dhaxdiisa kadibna shid  $5
 $6
Linux/Mac OS
kasoo dhaxsaar dhamaan garbadyada kadibna fur daaqad kale . kadib shid sh $5',
	'non-bundled-wget' => 'Fiira gaar ah: Nuskhadaan kamid maaha wget ee Windows. Waxaad ubaahantahay inaad sii fur furto
garbadka sida wget.exe ama hadi kale sidaan wget u rog PATH',
	'wget-info' => 'Fileka waxa uu kulmiyaa wget $1 (ee Windows platform). Wget waa Software bilaash ah,
Waxa uu rabaa shuruud ah GNU nuskhad guud 3.
Nuqul ka mid ah waxaad ka heli kartaan hoostaan, Sidoo kale waxaad ka heli kartaa http://www.gnu.org/licenses/gpl-3.0.txt

Hadii aad ubaahato inaad heshid (source code) ee program kaan, Waxaad kasoo degsan kartaa halkaan
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
or some other GNU Mirror, see
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', Dooro ballaca ugu badan ee $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => ', Dooro joogga ugu dheer ee $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', Dooro muuqaalka ugu wayn $1x$2 pixels',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'title' => 'Shkarkimi i fotografive në bazë të kategorisë',
	'subtitle' => 'Rruga e lehtë për të shkarkuar fotografitë në një kategori',
	'project' => 'Projekti',
	'category' => 'Kategoria:',
	'thumbnailing' => 'Paraqitja',
	'max-width' => 'Gjerësia maksimale:',
	'max-height' => 'Lartësia maksimale:',
	'invalid-width' => 'Gjerësi jo e vlefshme',
	'invalid-height' => 'Lartësi jo e vlefshme',
	'no-such-project' => 'Nuk ka projekt të tillë',
	'no-images' => 'Nuk ka fotografi në atë kategori',
	'category-is-url' => 'Emri i dhënë i kategorisë duket të jetë një URL. Ju duhet të cekni emrin e kategorisë, jo URL-në e saj.',
	'category-contains-namespace' => 'Duket se ju keni përfshirë hapësirën së bashku me emrin e kategorisë. Me emrin e dhënë, faqja do të jetë në dispozicion si [[Kategoria:$1]].', # Fuzzy
	'zip-failed' => 'Krijimi në zip dështoi',
	'image-area-too-big' => '$1 është shumë i madh për të krijuar një pamje. Duke përdorur madhësinë e plotë.',
	'download-info' => '{{plural: $1|Është një fotografi|Janë $1 fotografi}}, me një madhësi të vlerësuar prej $2',
	'download' => 'Shkarko',
	'readme-contents' => 'Skedari i bashkëngjitur $4 liston
fotografitë në kategorinë $1 ($2) $3.', # Fuzzy
	'non-bundled-wget' => 'Shënim: Ky version nuk përfshin wget për Windows. Juve do të ju duhet që të shpërndani në një follder me wget.exe ose anasjelltas, të keni wget në RRUGË',
	'wget-info' => 'Ky skedar lidh një kopje të wget $1 (për platformën Windows). Wget është Softuer i Lirë, nën rregullat e Licencës së Përgjithshme Publike GNU versioni 3.
Është një kopje e licencës më poshtë dhe ajo është gjithashtu në dispozicion në http://www.gnu.org/licenses/gpl-3.0.txt

Në rast se jeni të interesuar që ta merrni kodin burimor për këtë program, ju mund ta shkarkoni atë nga
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ose nga ndonjë Pasqyrë tjetër GNU, shihni
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', shkallëzuar në një gjerësi maksimale prej $1 {{plural:$1|piksell|piksellë}}',
	'scaling-height' => ', shkallëzuar në një lartësi maksimale prej $1 {{plural:$1|piksell|piksellë}}',
	'scaling-both' => ', shkallëzuar në një madhësi maksimale prej $1x$2 piksellë',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'Преузимање слика по категорији',
	'subtitle' => 'Једноставан начин да преузмете слике у некој категорији',
	'project' => 'Пројекат:',
	'category' => 'Категорија:',
	'thumbnailing' => 'Минијатуризација',
	'max-width' => 'Највећа ширина:',
	'max-height' => 'Највећа висина:',
	'invalid-width' => 'Неисправна ширина',
	'invalid-height' => 'Неисправна висина',
	'no-such-project' => 'Нема таквог пројекта',
	'no-images' => 'У тој категорији нема слика',
	'category-is-url' => 'Наведени назив личи на адресу. Треба да унесете назив категорије, а не његову адресу.',
	'category-contains-namespace' => 'Изгледа да сте навели именски простор заједно с називом категорије. Са задатим називом, страница ће бити доступна као [[Category:$1]].',
	'zip-failed' => 'Не могу да направим архиву',
	'image-area-too-big' => 'Слика $1 је превелика да би могла да се минијатуризира. Користићу пуну величину.',
	'download-info' => '{{plural: $1|Постоји једна слика|Постоје $1 слике|Постоји $1 слика}}, с просечном величином од $2',
	'download' => 'Преузми',
	'readme-contents' => 'У датотеци $4 налазе се слике из категорије $1 ($2) $3.

== Упутства за преузимање свих наведених слика ==
Преузимање може потрајати од неколико минута до неколико часова.

Виндоус:
 Отпакујте све датотеке у исту фасциклу и покрените $5
 $6
Линукс/Мак ОС
Отпакујте све датотеке и отворите терминал у тој фасцикли. Покрените sh $5', # Fuzzy
	'non-bundled-wget' => 'Напомена: ово издање не садржи wget за виндоус. Треба да отпакујете
у фасциклу са wget.exe или да већ имате wget у путањи',
	'wget-info' => 'Датотека садржи примерак wget-а $1 (виндоус). Wget је слободан програм
који је објављен под условима ГНУ-ОВЕ ОПШТЕ ЈАВНЕ ЛИЦЕНЦЕ 3.
Испод се налази примерак лиценце (доступан је и на http://www.gnu.org/licenses/gpl-3.0.txt)

Ако сте заинтересовани за изворни код програма, преузмите га са
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
или користите друге резервне везе:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', с изменом размере до највеће ширине од $1 {{plural:$1|пиксел|пиксела|пиксела}}',
	'scaling-height' => ', с изменом размере до највеће висине од $1 {{plural:$1|пиксел|пиксела|пиксела}}',
	'scaling-both' => ', с изменом размере до највеће величине од $1 × $2 пиксела',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Preuzimanje slika po kategoriji',
	'subtitle' => 'Jednostavan način da preuzmete slike u nekoj kategoriji',
	'project' => 'Projekat:',
	'category' => 'Kategorija:',
	'thumbnailing' => 'Minijaturizacija',
	'max-width' => 'Najveća širina:',
	'max-height' => 'Najveća visina:',
	'invalid-width' => 'Neispravna širina',
	'invalid-height' => 'Neispravna visina',
	'no-such-project' => 'Nema takvog projekta',
	'no-images' => 'U toj kategoriji nema slika',
	'category-is-url' => 'Navedeni naziv liči na adresu. Treba da unesete naziv kategorije, a ne njegovu adresu.',
	'category-contains-namespace' => 'Izgleda da ste naveli imenski prostor zajedno s nazivom kategorije. Sa zadatim nazivom, stranica će biti dostupna kao [[Category:$1]].',
	'zip-failed' => 'Ne mogu da napravim arhivu',
	'image-area-too-big' => 'Slika $1 je prevelika da bi mogla da se minijaturizira. Koristiću punu veličinu.',
	'download-info' => '{{plural: $1|Postoji jedna slika|Postoje $1 slike|Postoji $1 slika}}, s prosečnom veličinom od $2',
	'download' => 'Preuzmi',
	'readme-contents' => 'U datoteci $4 nalaze se slike iz kategorije $1 ($2) $3.

== Uputstva za preuzimanje svih navedenih slika ==
Preuzimanje može potrajati od nekoliko minuta do nekoliko časova.

Vindous:
 Otpakujte sve datoteke u istu fasciklu i pokrenite $5
 $6
Linuks/Mak OS
Otpakujte sve datoteke i otvorite terminal u toj fascikli. Pokrenite sh $5', # Fuzzy
	'non-bundled-wget' => 'Napomena: ovo izdanje ne sadrži wget za vindous. Treba da otpakujete
u fasciklu sa wget.exe ili da već imate wget u putanji',
	'wget-info' => 'Datoteka sadrži primerak wget-a $1 (vindous). Wget je slobodan program
koji je objavljen pod uslovima GNU-OVE OPŠTE JAVNE LICENCE 3.
Ispod se nalazi primerak licence (dostupan je i na http://www.gnu.org/licenses/gpl-3.0.txt)

Ako ste zainteresovani za izvorni kod programa, preuzmite ga sa
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ili koristite druge rezervne veze:
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', s izmenom razmere do najveće širine od $1 {{plural:$1|piksel|piksela|piksela}}',
	'scaling-height' => ', s izmenom razmere do najveće visine od $1 {{plural:$1|piksel|piksela|piksela}}',
	'scaling-both' => ', s izmenom razmere do najveće veličine od $1 × $2 piksela',
);

/** Swedish (svenska)
 * @author Cybjit
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title' => 'Nedladdning av bild efter kategori',
	'subtitle' => 'Det enkla sättet att ladda ned bilder i en kategori',
	'project' => 'Projekt:',
	'category' => 'Kategori:',
	'thumbnailing' => 'Miniatyrbildsinställning',
	'max-width' => 'Maximal bredd:',
	'max-height' => 'Maximal höjd:',
	'invalid-width' => 'Ogiltig bredd',
	'invalid-height' => 'Ogiltig höjd',
	'no-such-project' => 'Det finns inget sådant projekt',
	'no-images' => 'Det finns inga bilder i den kategorin',
	'category-is-url' => 'Den angivna kategorinamnet ser ut som en URL. Du måste ange kategorinamnet, inte dess URL.',
	'category-contains-namespace' => 'Du verkar har inkluderat namnrymden tillsammans med kategorinamnet. Med det angivna namnet skulle sidan vara tillgänglig som [[Category:$1]].',
	'zip-failed' => 'Skapande av ZIP misslyckades',
	'image-area-too-big' => '$1 är för stor för att skapa en miniatyr. Använder full storlek.',
	'download-info' => '{{plural: $1|Det finns en bild|Det finns $1 bilder}} med en uppskattad storlek på $2',
	'download' => 'Ladda ned',
	'readme-contents' => 'Den omslutande filen $4-listor
bilderna i $1-kategorin ( $2 )$3.

== Instruktioner för att ladda ner alla listade bilder ==
Nedladdningstiden kan variera från några minuter till flera timmar.

Windows:
 Extrahera alla filer i samma mapp och kör $5
 $6
Linux/Mac OS
 Extrahera alla filer och öppna en terminal i mappen. Kör sh $5', # Fuzzy
	'non-bundled-wget' => 'OBS: Denna version inkluderar inte wget för Windows. Du måste expandera
till en mapp med wget.exe eller ha wget i PATH',
	'wget-info' => 'Denna fil buntar en kopia av wget $1 (för Windows-plattformen). Wget är fri programvara,
enligt villkoren i GNU GENERAL PUBLIC LICENSE version 3.
Det finns en kopia av licensen nedan, och den är också tillgänglig på http://www.gnu.org/licenses/gpl-3.0.txt

I fall du är intresserad av att få källkoden för det här programmet kan du ladda ned den från
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
eller några andra GNU-spegel, se
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', skalas till en maximal bredd av $1 {{plural:$1|pixel|pixlar}}',
	'scaling-height' => ', skalas till en maximal höjd av $1 {{plural:$1|pixel|pixlar}}',
	'scaling-both' => ', skalas till en maximal storlek av $1x$2 pixlar',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'title' => 'Pakua picha kwa jamii',
	'subtitle' => 'Njia rahisi ya kupakua picha katika jamii',
	'project' => 'Mradi:',
	'category' => 'Jamii:',
	'max-width' => 'Upeo wa upana:',
	'max-height' => 'Upeo wa urefu:',
	'invalid-width' => 'Upana batili',
	'invalid-height' => 'Urefu batili',
	'no-such-project' => 'Hakuna mradi kama huo',
	'no-images' => 'Hakuna picha katika jamii hiyo',
	'image-area-too-big' => '$1 ni kubwa sana kutengeneza kijipicha. Tumia saizi nzima.',
	'download' => 'Pakua',
	'scaling-width' => ', imepanuliwa hadi upeo wa upana wa $1 {{plural:$1|piseli|piseli}}', # Fuzzy
	'scaling-height' => ', imepanuliwa hadi upeo wa urefu wa $1 {{plural:$1|piseli|piseli}}', # Fuzzy
	'scaling-both' => ', imepanuliwa hadi upeo wa saizi wa piseli $1x$2.',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'title' => 'பகுப்புப்படி படங்களை பதிவிறக்கு',
	'subtitle' => 'ஒரு பகுப்பில் படங்களைத் தரவிறக்கம் செய்ய எளிய வழி',
	'project' => 'திட்டம்:',
	'category' => 'பகுப்பு:',
	'thumbnailing' => 'வில்லைபடமாக்கல்',
	'max-width' => 'அதிகபட்ச அகலம்:',
	'max-height' => 'அதிகபட்ச உயரம்:',
	'invalid-width' => 'செல்லாத அகலம்',
	'invalid-height' => 'செல்லாத உயரம்',
	'no-such-project' => 'அப்படிப்பட்ட திட்டம் ஒன்றுமில்லை',
	'no-images' => 'அந்த பகுப்பில் எந்த படமும் இல்லை',
	'category-is-url' => 'வழங்கப்பட்ட பகுப்பின் பெயர் ஓர் உரலியைப் போல் தோற்றமளிக்கின்றது. நீங்கள் பகுப்பின் பெயரையே குறிப்பிட வேண்டும், அதனுடைய உரலியை அல்ல.',
	'download' => 'பதிவிறக்கு',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'title' => 'వర్గాల వారీగా చిత్రాలను దించుకోండి',
	'project' => 'ప్రాజెక్టు:',
	'category' => 'వర్గం:',
	'max-width' => 'గరిష్ఠ వెడల్పు:',
	'max-height' => 'గరిష్ఠ ఎత్తు:',
	'invalid-width' => 'చెల్లని వెడల్పు',
	'invalid-height' => 'చెల్లని ఎత్తు',
	'no-such-project' => 'అటువంటి ప్రాజెక్టు లేదు',
	'no-images' => 'ఆ వర్గంలో బొమ్మలు ఏమీ లేవు',
	'download' => 'దింపుకోలు',
);

/** Tigrinya (ትግርኛ)
 * @author Tigrigna1
 */
$messages['ti'] = array(
	'max-width' => 'ዝሰፍሐ ጎኒ',
	'max-height' => 'ዝነውሐ ቁመት',
	'invalid-width' => 'ጌጋ ጎኒ',
	'invalid-height' => 'ጌጋ ቁመት',
	'no-such-project' => 'ዝመሳሰል ዕዮ ኣይተረኽበን',
	'no-images' => 'ኣብዚ ክፍሊ ዝኾነ ስእሊ ኣይተረኽበን',
	'download' => 'ጽዓን',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Nemo bis
 */
$messages['tl'] = array(
	'title' => 'Pagkakargang paibaba ng mga larawan ayon sa kategorya',
	'subtitle' => 'Ang maginhawang paraan upang makapagkargang paibaba ng mga larawan ng isang kategorya',
	'project' => 'Proyekto:',
	'category' => 'Kategorya:',
	'thumbnailing' => 'Pagkakagyat',
	'max-width' => 'Pinakamataas na lapad:',
	'max-height' => 'Pinakamataas na taas:',
	'invalid-width' => 'Hindi katanggap-tanggap na lapad',
	'invalid-height' => 'Hindi katanggap-tanggap na taas',
	'no-such-project' => 'Walang ganyang proyekto',
	'no-images' => 'Walang mga larawan sa loob ng kategoryang iyan',
	'category-is-url' => 'Ang ibinigay na pangalan ng kategorya ay tila isang URL. Kailangan mong tukuyin ang pangalan ng kategorya, hindi ang URL nito.',
	'category-contains-namespace' => 'Tila isinama mo ang puwang ng pangalan sa piling ng pangalan ng kategorya. Sa pamamagitan ng ibinigay na pangalan, ang pahina ay makukuha bilang [[Category:$1]].',
	'zip-failed' => 'Nabigo ang paglikha ng zip',
	'image-area-too-big' => 'Napakalaki ng $1 upang makalikha ng isang kagyat. Ginagamit ang buong sukat.',
	'download-info' => '{{plural: $1|Mayroong isang larawan|Mayroong $1 mga larawan}}, na tinatayang may sukat na $2',
	'download' => 'Ikargang pababa',
	'readme-contents' => 'Ang naglalakip na talaksang $4 ay nagtatala ng mga larawan sa kategoryang $1 ( $2 )$3.

== Mga tagubilin para sa pagkakargang paibaba ng lahat ng nakalistang mga larawan ==
Ang panahon ng pagkakargang paibaba ay maaaring magkakaiba mula ilang mga minuto hanggang sa ilang mga oras.

Windows:
 Hugutin ang lahat ng mga talaksan sa loob ng iisang tiklupan at patakbuhin ang $5
 $6
Linux/Mac OS
 Hugutin ang lahat ng mga talaksan at magbukas ng isang terminal sa loob ng tiklupang iyon. Patakbuhin ang sh $5', # Fuzzy
	'non-bundled-wget' => 'Paunawa: Hindi kabilang sa bersiyong ito ang wget na para sa Windows. Kakailanganin mong alisin ang pagkakasiksik sa isang tiklupan sa pamamagitan ng wget.exe o kaya ay magkaroon ng wget sa loob ng PATH',
	'wget-info' => 'Ibinubungkos ng talaksang ito ang isang kopya ng wget $1 (para sa plataporma ng Windows). Ang wget ay isang Malayang Sopwer,
na nasa ilalim ng mga kundisyon ng ika-3 bersiyon ng GNU GENERAL PUBLIC LICENSE.
Mayroong isang sipi ng lisensiya sa ibaba, at makukuha rin ito magmula doon sa http://www.gnu.org/licenses/gpl-3.0.txt

Kung nanaisin mong kunin ang kodigo ng pinagkunan para sa programang ito, maikakarga mong paibaba iyon magmula sa
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
o ilang iba pang mga Salamin ng GNU, tingnan ang
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', binawasan upang magkaroon ng pinakamataas na lapad na $1 {{plural:$1|piksel|mga piksel}}',
	'scaling-height' => ', binawasan upang magkaroon ng pinakamataas na taas na $1 {{plural:$1|piksel|mga piksel}}',
	'scaling-both' => ', binawasan upang magkaroon ng pinakamataas na sukat na $1x$2 mga piksel',
	'script-filename' => 'download.bat',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title' => 'Шикилон бо жәј бә категоријон',
	'project' => 'Нәхшә:',
	'category' => 'Тиспир:',
	'no-such-project' => 'Жәго нәхшә сохтә быәни',
	'no-images' => 'Бы категоријәдә шикилон нин',
	'download' => 'Бо жәј',
);

/** Turkish (Türkçe)
 * @author Emperyan
 */
$messages['tr'] = array(
	'project' => 'Proje:',
	'category' => 'Kategori:',
	'max-width' => 'En fazla genişlik:',
	'max-height' => 'En fazla yükseklik:',
	'download' => 'İndir',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'project' => 'ⴰⵙⵏⴼⴰⵔ:',
	'category' => 'ⵜⴰⴳⴳⴰⵢⵜ:',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'title' => 'سۈرەتنى تۈرى بوبيچە چۈشۈر',
	'subtitle' => 'بىر تۈر بويىچە سۈرەت چۈشۈرۈشنىڭ ئاددىي يولى',
	'project' => 'قۇرۇلۇش:',
	'category' => 'تۈرى:',
	'thumbnailing' => 'كىچىك سۈرەت',
	'max-width' => 'ئەڭ چوڭ كەڭلىكى:',
	'max-height' => 'ئەڭ چوڭ ئېگىزلىكى',
	'invalid-width' => 'ئىناۋەتسىز كەڭلىك',
	'invalid-height' => 'ئىناۋەتسىز ئېگىزلىك',
	'no-such-project' => 'بۇنداق قۇرۇلۇش يوق',
	'no-images' => 'بۇ تۈردە ھېچقانداق سۈرەت يوق',
	'category-is-url' => 'بېرىلگەن تۈرنىڭ ئاتى URL دەك تۇرىدۇ. سىز تۈرنىڭ URL ئەمەس، بەلكى تۈر ئاتىنى تەمىنلىشىڭىز كېرەك.',
	'category-contains-namespace' => 'تۈر ئاتى ئات بوشلۇقىنى ئۆز ئىچىگە ئالغاندەك تۇرىدۇ. بۇ خىل ئاتنى ئىشلەتكەندە بەت [[Category:$1]] كۆرۈنىدۇ.',
	'zip-failed' => 'Zip قۇرالمىدى',
	'image-area-too-big' => '$1 كىچىك سۈرەت قۇرۇشقا نىسبەتە بەك چوڭ. ئەمەلىي چوڭلۇقىنى ئىشلىتىڭ.',
	'download-info' => 'بۇ جايدا {{plural: $1|سۈرەت|$1 سۈرەت}} بار، مۆلچەرلەنگەن چوڭلۇقى $2',
	'download' => 'چۈشۈر',
	'readme-contents' => 'ھۆججەت $4 تۆۋەندىكى مەزمۇننى ئۆز ئىچىگە ئالىدۇ
$1 تۈردىكى ( $2 )$3 سۈرەتلەر.

==كۆرسىتىلگەن ھەممە سۈرەتلەرنى چۈشۈرۈش يېتەكچىسى==
چۈشۈرۈش جەريانىغا بىر قانچە مىنۇتتىن بىر قانچە سائەتكىچە ۋاقىت كېتىشى مۇمكىن.

Windows:
ھەممە ھۆججەتلەرنى ئوخشاش بىر قىسقۇچقا يېشىپ $5 نى ئىجرا قىلىدۇ

$6
Linux/Mac OS
ھەممە ھۆججەتلەرنى يېشىپ تېرمىنالنى شۇ قىسقۇچتا ئېچىپ تۆۋەندىكى بۇيرۇقنى ئىجرا قىلىدۇ
Run sh $5',
	'non-bundled-wget' => 'دىققەت: بۇ نەشرى Windows نەشرىنىڭ wget نى ئۆز ئىچىگە ئالمايدۇ. سىز ئۇلارنى wget.exe بار بىر مۇندەرىجىگە يېشىڭ ياكى PATH تە wget نى ئۆز ئىچىگە ئالسۇن.',
	'scaling-width' => '، ئەڭ چوڭ كەڭلىك $1 {{plural:$1|پىكسېل|پىكسېل}}غا چوڭايت',
	'scaling-height' => '، ئەڭ چوڭ ئېگىزلىك $1 {{plural:$1|پىكسېل|پىكسېل}}غا چوڭايت',
	'scaling-both' => '، ئەڭ چوڭ بولغاندا $1x$2 پىكسېلغا چوڭايت',
	'script-filename' => 'download.bat',
	'readme-filename' => 'README.txt',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author SteveR
 */
$messages['uk'] = array(
	'title' => 'Завантажити зображення за категоріями',
	'subtitle' => 'Простий шлях для завантаження зображень у категорії',
	'project' => 'Проект',
	'category' => 'Категорія',
	'thumbnailing' => 'Мініатюризація',
	'max-width' => 'Максимальна ширина:',
	'max-height' => 'Максимальна висота:',
	'invalid-width' => 'Неприпустима ширина',
	'invalid-height' => 'Неприпустима висота',
	'no-such-project' => 'Такого проекту не існує',
	'no-images' => 'У цій категорії немає зображень',
	'category-is-url' => 'Вказана назва категорії виглядає як URL-адреса. Вам слід вказати назву категорії, а не її URL-адресу.',
	'category-contains-namespace' => 'Схоже, Ви включили простір назв до назви категорії. З даною назвою сторінка буде доступна як [[Category:$1]].',
	'zip-failed' => 'Помилка створення ZIP',
	'image-area-too-big' => '$1 завелике для створення ескізу. Буде використаний повний розмір.',
	'download-info' => '{{plural: $1|Існує одне зображення|Існує $1 зображень}}, з приблизним розміром $2',
	'download' => 'Завантажити',
	'readme-contents' => 'Вкладений файл $4 заносить у список
зображення у категорії $1 ( $2 )$3.

== Вказівки щодо завантаження всіх перерахованих зображень ==
Час завантаження може варіюватися від декількох хвилин до декількох годин.

Windows:
 Розпакуйте усі файли у одну теку та запустіть $5
 $6
Linux/Mac OS
 Розпакуйте усі файли і відкрийте термінал у цій теці. Виконайте команду sh $5',
	'non-bundled-wget' => 'Примітка: Ця версія не включає wget для Windows. Вам потрібно буде розпакувати у теку з wget.exe або іншим чином вказати wget у PATH',
	'wget-info' => 'Цей файл містить копію wget $1 (для платформи Windows). Wget - це безкоштовне програмне забезпечення, яке розповсюджується на умовах Загальної публічної ліцензії GNU версії 3.
Нижче подано копію ліцензії, яка також доступна за адресою http://www.gnu.org/licenses/gpl-3.0.txt

Якщо ви зацікавлені отримати вихідний код цієї програми, то ви можете його завантажити з
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
або з деяких інших дзеркал GNU, список яких подано тут
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', масштабований до максимальної ширини $1 {{plural:$1|пікселі|пікселів}}',
	'scaling-height' => ', масштабований до максимальної висоти $1 {{plural:$1|пікселі|пікселів}}',
	'scaling-both' => ', масштабований до максимального розміру $1x$2 пікселів',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 * @author Sociologist
 */
$messages['uz'] = array(
	'title' => 'Rasmlarni turkumlar boʻyicha yuklash',
	'subtitle' => 'Turkumdagi rasmlarni yuklash uchun oddiy usul',
	'project' => 'Loyiha:',
	'category' => 'Turkum:',
	'thumbnailing' => 'Miniaturalar',
	'max-width' => 'Eng katta uzunlik:',
	'max-height' => 'Eng katta balandlik:',
	'invalid-width' => 'Mumkin boʻlmagan uzunlik',
	'invalid-height' => 'Mumkin boʻlmagan balandlik',
	'no-such-project' => 'Bunday loyiha mavjud emas',
	'no-images' => 'Bu turkumda rasmlar yoʻq',
	'category-is-url' => 'Ushbu turkumning nomi URL-manzil koʻrinishida. Turkumning nomi koʻrsatish zarur, uning URL-manzilini emas.',
	'category-contains-namespace' => 'Siz turkum nomiga nomfazoni qoʻshganga oʻxshaysiz. Siz tomondan tanlangan nom bilan sahifa [[Category:$1]] koʻrinishiga ega boʻladi.',
	'zip-failed' => 'Zip yaratishda xatolik',
	'image-area-too-big' => '$1 eskiz yaratish uchun juda katta. Toʻliq oʻlchamdan foydalaniladi.',
	'download-info' => 'Taxminiy oʻlchami $2 boʻlgan {{plural: $1|bitta tasvir|$1 ta tasvir}} mavjud',
	'download' => 'Yuklash',
	'scaling-both' => '$1x$2 pikselli eng katta oʻlchamgacha miqyoslandi',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Platonides
 */
$messages['vi'] = array(
	'title' => 'Tải về hình ảnh theo thể loại',
	'subtitle' => 'Cách dễ dàng để tải về tất cả các hình ảnh trong một thể loại',
	'project' => 'Dự án:',
	'category' => 'Thể loại:',
	'thumbnailing' => 'Hình nhỏ',
	'max-width' => 'Chiều rộng tối đa:',
	'max-height' => 'Chiều cao tối đa:',
	'invalid-width' => 'Chiều rộng không hợp lệ',
	'invalid-height' => 'Chiều cao không hợp lệ',
	'no-such-project' => 'Không tìm thấy dự án này.',
	'no-images' => 'Không tìm thấy hình ảnh trong thể loại này.',
	'category-is-url' => 'Hình như địa chỉ URL được cho vào thay vì tên thể loại. Xin cho vào tên thể loại.',
	'category-contains-namespace' => 'Hình như bạn đã bao gồm không gian tên cùng với tên thể loại. Với tên này, trang sẽ là [[Category:$1]].',
	'zip-failed' => 'Thất bại khi tạo ZIP',
	'image-area-too-big' => '$1 quá lớn để tạo ra hình thu nhỏ. Đang sử dụng kích cỡ gốc thay thế.',
	'download-info' => 'Có {{PLURAL:$1|hình ảnh|$1 hình ảnh}} với kích thước ước lượng là $2',
	'download' => 'Tải về',
	'readme-contents' => 'Tập tin kèm theo $4 liệt kê
các hình ảnh trong thể loại $1 ( $2 )$3.

== Hướng dẫn tải về tất cả các hình ảnh trong danh sách ==
Có thể cần vài phút đến vào tiếng để tải về xong.

Windows:
  Giải nén tất cả các tập tin vào cùng thư mục và chạy $5
  $6
Linux và Mac OS:
  Giải nén tất cả các tập tin vào cùng thư mục và chỉ dòng lệnh đến thư mục đó. Chạy sh $5',
	'non-bundled-wget' => 'Lưu ý: Phiên bản này không bao gồm wget cho Windows. Bạn sẽ cần phải giải nén các tập tin vào một thư mục có wget.exe hoặc có biến PATH chỉ đến wget.',
	'wget-info' => 'Tập tin này kèm theo wget $1 (dành cho nền Windows). Wget là Phần mềm Tự do,
theo các điều khoản của GIẤY PHÉP CÔNG CỘNG GNU phiên bản 3.
Giấy phép có sẵn ở dưới và tại http://www.gnu.org/licenses/gpl-3.0.txt

Trong trường hợp bạn muốn lấy mã nguồn của chương trình này, bạn có thể tải nó về từ
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
hoặc một Kho phần mềm GNU khác; xem
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => ', được chỉnh lại theo chiều rộng tối đa là $1 điểm ảnh',
	'scaling-height' => ', được chỉnh lại theo chiều cao tối đa là $1 điểm ảnh',
	'scaling-both' => ', được chỉnh lại theo kích cỡ tối đa là $1×$2 điểm ảnh',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'project' => 'פראיעקט:',
	'category' => 'קאַטעגאריע:',
	'max-width' => 'מאקסימום ברייט:',
	'max-height' => 'מאקסימום הייך:',
	'invalid-width' => 'אומגילטיקע ברייט',
	'invalid-height' => 'אומגילטיקע הייך',
	'download' => 'אראָפלאָדן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Linforest
 * @author Liuxinyu970226
 * @author Mys 721tx
 * @author Simon Shek
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'title' => '按分类下载图片',
	'subtitle' => '从一个分类中下载图片的简单方式',
	'project' => '项目：',
	'category' => '分类：',
	'thumbnailing' => '缩小图片',
	'max-width' => '最大宽度：',
	'max-height' => '最大高度：',
	'invalid-width' => '无效宽度',
	'invalid-height' => '无效高度',
	'no-such-project' => '此项目不存在',
	'no-images' => '该分类中没有图片',
	'category-is-url' => '所填写分类名称似乎是一个URL，您需要指明分类名称而不是其URL',
	'category-contains-namespace' => '您似乎在分类名称中包含了名字空间。使用此名称时页面将会显示为[[Category:$1]]',
	'zip-failed' => 'Zip创建失败',
	'image-area-too-big' => '$1 对于缩略图过大，使用其实际大小。',
	'download-info' => '{{plural: $1|有$1个图像}}，估计大小为$2',
	'download' => '下载',
	'readme-contents' => '文件$4包括下列内容：
分类$1<$2>$3中的图片。

==下载所有列出图片指南 ==

下载过程可能消耗几分钟至若干小时时间。

Windows:
将所有文件解压缩至相同文件夹，并运行$5
 $6
Linux/Mac OS
解压所有文件，并在终端中运行 sh $5',
	'non-bundled-wget' => '注： 此版本不包括Windows版本的wget。您需要解压缩到一个有wget.exe的文件夹，或在PATH中包含有wget。',
	'wget-info' => '此文件作为wget的副本$1（用于Windows平台）而打包。Wget是自由软件，
根据GNU通用公共许可证第3版授权。
这里有一个许可证副本，可在这个网站查看：http://www.gnu.org/licenses/gpl-3.0.txt

如果您有兴趣获得此程序的源代码，您可以在此下载
http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
或者其他GNU镜像，参见
http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '缩放到最大宽度 $1 {{plural:$1|pixel|pixels}}',
	'scaling-height' => '缩放到最大高度 $1 {{plural:$1|pixel|pixels}}',
	'scaling-both' => ', 缩放到最大尺寸 $1x$2 像素',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'title' => '按分類下載圖片',
	'subtitle' => '一個簡單方法從分類中下載圖片',
	'project' => '計畫：',
	'category' => '分類:',
	'thumbnailing' => '縮圖',
	'max-width' => '最大寛度：',
	'max-height' => '最大高度：',
	'invalid-width' => '寬度無效',
	'invalid-height' => '高度無效',
	'no-such-project' => '沒有此項目',
	'no-images' => '該分類中沒有圖片',
	'category-is-url' => '所填寫分類名稱似乎是一個URL。您需要指明分類名稱而不是其URL。',
	'category-contains-namespace' => '您似乎在分類名稱中包含了名字空間。使用此名稱時頁面將會顯示為[[Category:$1]]。',
	'zip-failed' => 'Zip建立失敗',
	'image-area-too-big' => '$1太大而無法建立其縮圖。使用其完整大小。',
	'download-info' => '這裡有{{plural: $1|一張|$1張}}大小為$2的圖片',
	'download' => '下載',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'title' => '按分類下載圖片',
	'subtitle' => '下載分類中圖像的簡單方法',
	'project' => '項目：',
	'category' => '分類：',
	'thumbnailing' => '縮小圖片',
	'max-width' => '最大寬度：',
	'max-height' => '最大高度：',
	'invalid-width' => '無效寬度',
	'invalid-height' => '無效高度',
	'no-such-project' => '此項目不存在',
	'no-images' => '該分類中沒有圖片',
	'category-is-url' => '您所填寫分類名稱似乎是一個URL，您需要指明分類名稱而不是其URL',
	'category-contains-namespace' => '您似乎在分類名稱中包含了名字空間。使用此名稱時頁面將會顯示為[[Category:$1]]',
	'zip-failed' => 'Zip創建失敗',
	'image-area-too-big' => '$1對於縮略圖過大，使用其實際大小。',
	'download-info' => '此處有$1張大小為$2的圖片',
	'download' => '下載',
	'readme-contents' => '文件$4包括下列內容：
分類$1<$2>$3中的圖片。

==下載所有列出圖片指南==

下載過程可能消耗幾分鐘至若干小時時間。

Windows：
將所有文件解壓縮至相同文件夾，並運行$5
$6
Linux/Mac OS：
解壓所有文件，並在終端中運行sh $5',
	'non-bundled-wget' => '注：此版本不包括適用於Windows的wget。您將需要解壓縮到有wget.exe的文件夾',
	'wget-info' => '該文件捆綁了wget的副本$1（Windows適用）。wget是一款免費軟件，其使用GNU通用公共許可證。下方有一個許可證副本，您也可以到http://www.gnu.org/licenses/gpl-3.0.txt 找到此許可證。

如你想獲得這個程序的源代碼，你可以從這裡下載
 http://toolserver.org/~platonides/catdown/wget-sources.php?version=$1
 http://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
 ftp://ftp.gnu.org/gnu/wget/wget-$1.tar.xz
或此鏡像
 http://www.gnu.org/prep/ftp.html',
	'scaling-width' => '縮放到最大寬度$1{{plural:$1|pixel|pixels}}',
	'scaling-height' => '縮放到最大高度$1{{plural:$1|pixel|pixels}}',
	'scaling-both' => '縮放到最大尺寸$1x$2像素',
);
