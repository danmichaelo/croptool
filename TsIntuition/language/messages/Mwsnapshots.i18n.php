<?php
/**
 * Interface messages for tool "mwSnapshots".
 *
 * @toolowner krinkle
 */

$url = '//toolserver.org/~krinkle/mwSnapshots/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Error',
	'title-updatelog' => 'Update log',
	'updatelog-intro' => 'The update script is scheduled to run every hour. Below is the console output of the last run.',
	'updatelog-active' => 'The update script is currently running. Come back later for the complete log.',
	'title-download' => '$1', // Do not translate
	'download-button' => 'Download $1',
	'download-directlink' => 'direct link',
	'title-downloadpage' => 'Download: $1',
	'downloadpage-directlink' => 'Download the snapshot.',
	'err-snapshotindex' => 'Snapshot index temporarily unavailable. Please try again later.',
	'err-invalid-repo' => 'Unknown repository: "$1".',
	'err-invalid-branch' => 'Unknown branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'The snapshots are generated every few hours. While generating the snapshot for "$1", an error occurred. Please try again later.',
	'err-noupdatelog' => 'No update log was found.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Browse repository',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => 'Get it!',
	'updatelog-link' => 'update log',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'File size',
	'tablehead-hash' => 'Checksums',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Purodha
 * @author Shirayuki
 * @author Siebrand
 * @author Toliño
 */
$messages['qqq'] = array(
	'title-overview' => 'Heading of overview page listing all repositories and branches.
{{Identical|Snapshot}}',
	'title-error' => 'Heading of page if action failed.
{{Identical|Error}}',
	'title-updatelog' => 'Used as section heading.
{{Identical|Update log}}',
	'download-button' => 'Label of the download button. Text is outputted below a down-arrow.

Parameters:
* $1 - branch name. e.g. "master", "REL1_22"',
	'download-directlink' => 'Link displayed in parentheses below the download button.',
	'title-downloadpage' => 'Heading of download page where the file is ready to be downloaded by the user

* $1: File name',
	'downloadpage-directlink' => 'Clickable link shown under the heading, links to the file directly',
	'err-snapshotindex' => 'If the information manifest (Index) can not be found on the server, this error is shown.',
	'err-invalid-repo' => 'Used as error message. Parameters:
* $1 - repository name
See example: https://toolserver.org/~krinkle/mwSnapshots/index.php#!/test/master',
	'err-invalid-branch' => 'Used as error message. Parameters:
* $1 - branch name
* $2 - repository name
See example: https://toolserver.org/~krinkle/mwSnapshots/index.php#!/mediawiki-core/test',
	'err-nosnapshot' => 'The snapshots are generated every few hours. If during the generation the selected branch had a problem. Then trying to download it will show this error.

Parameters:
* $1 - branch name',
	'repo-site-link' => 'Used as text for the link which points to the repository website.
{{Identical|Website}}',
	'repo-browse-link' => 'Used as text for the link which points to gerrit.wikimedia.org. e.g. https://gerrit.wikimedia.org/r/gitweb?p=mediawiki/core.git;a=tree',
	'repo-branches-label' => 'Used as label for the "Branch" select box.
{{Identical|Branch}}',
	'repo-lastmoddate-label' => 'Used as label for timestamp (time and date).
{{Identical|Date}}',
	'branches-submit-button' => 'Used as label for the Submit button.

Preceded by the Branch select box.',
	'updatelog-link' => 'Used as link text.
{{Identical|Update log}}',
	'tablehead-repo' => 'Used as table row header.

Followed by repository name which is currently selected.
{{Identical|Repository}}',
	'tablehead-snapshots' => 'Used as table column header.

Followed by the list of snapshots.
{{Identical|Snapshot}}',
	'tablehead-branch' => 'Used as table row header.

Followed by branch name which is currently selected.
{{Identical|Branch}}',
	'tablehead-filesize' => 'Used as table row header.

Followed by file size. e.g. "3.21 MB (3370522 bytes)"
{{Identical|File size}}',
	'tablehead-hash' => 'Used as table row header.

Followed by MD5 and SHA1 checksums. e.g. "MD5: 1d3a979b3c6e90c4300b6950a9d4db89<br/>
SHA1: 1ee0f37197ffbc2ed7ba6bac30be6a65c8a757a9"',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'title-error' => 'Fout',
	'download-button' => 'Laai $1 af',
	'download-directlink' => 'direkte skakel',
	'title-downloadpage' => 'Laai af: $1',
	'repo-site-link' => 'Webtuiste',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Kry dit!',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author أحمد
 */
$messages['ar'] = array(
	'title-overview' => 'لقطات',
	'title-error' => 'خطأ',
	'title-updatelog' => 'سجل التحديث',
	'updatelog-intro' => 'سكربت التحديث مُجدوَل ليشتغل كل ساعة. المسرود أدناه مخرجات آخر تشغيلة.',
	'updatelog-active' => 'سكربت التحديث قيد التشغيل حاليا. عد لاحقا لمطالعة سِجِلِّ الشغل كاملا.',
	'download-button' => 'نزِّل $1',
	'download-directlink' => 'رابط مباشر',
	'title-downloadpage' => 'تنزيل: $1',
	'downloadpage-directlink' => 'انقر هنا لتنزيل اللقطة.',
	'err-snapshotindex' => 'فهرس اللقطات غير متاح مؤقتا. حاول لاحقا.',
	'err-invalid-repo' => 'مستودع غير معروف: "$1".',
	'err-invalid-branch' => 'فرع غير معروف: "$1" في مستودع "$2".',
	'err-nosnapshot' => 'يتم إنشاء لقطات الصور كل بضع ساعات. حدث خطأ عند أنشاء لقطة "$1". الرجاء إعادة المحاولة لاحقا.',
	'err-noupdatelog' => 'لم يتم العثور على سجل التحديث.',
	'repo-site-link' => 'موقع الوب',
	'repo-browse-link' => 'تصفح المستودع',
	'repo-branches-label' => 'الفروع:',
	'repo-lastmoddate-label' => 'التاريخ:',
	'branches-submit-button' => 'احصل عليه!',
	'updatelog-link' => 'سِجِلُّ التحديث',
	'tablehead-repo' => 'المستودع',
	'tablehead-snapshots' => 'اللقطات',
	'tablehead-branch' => 'الفرع',
	'tablehead-filesize' => 'حجم الملف',
	'tablehead-hash' => 'تدقيق المجاميع',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'title-error' => 'ܦܘܕܐ',
	'title-updatelog' => 'ܚܕܬ ܣܓܠܐ',
	'repo-lastmoddate-label' => 'ܣܝܩܘܡܐ:',
	'tablehead-filesize' => 'ܥܓܪܐ ܕܠܦܦܐ',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'title-error' => 'ভুল',
	'title-updatelog' => 'আপডেট অভিলেখ',
	'download-button' => '$1 ডাউনল’ড',
	'download-directlink' => 'পোণপটীয়া সংযোগ',
	'title-downloadpage' => 'ডাউনল’ড: $1',
	'repo-site-link' => 'ৱেবছাইট',
	'repo-branches-label' => 'শাখাসমূহ:',
	'repo-lastmoddate-label' => 'তাৰিখ:',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title-overview' => 'Instantánees',
	'title-error' => 'Error',
	'title-updatelog' => "Rexistru d'anovamientu",
	'updatelog-intro' => "El script d'anovamientu ta programáu pa executase cada hora. Más abaxo ta la salida de terminal de la cabera execución.",
	'updatelog-active' => "El script d'anovamientu ta executandose anguaño. Torna más sero pa ver el rexistru completu.",
	'download-button' => 'Descargar $1',
	'download-directlink' => 'enllaz direutu',
	'title-downloadpage' => 'Descargar: $1',
	'downloadpage-directlink' => 'Calca equí pa descargar la instantánea.',
	'err-snapshotindex' => "L'índiz de instantánees nun ta disponible temporalmente. Intentalo otra vuelta más sero.",
	'err-invalid-repo' => 'Repositoriu desconocíu: «$1».',
	'err-invalid-branch' => 'Rama desconocida: «$1» nel repositoriu «$2».',
	'err-nosnapshot' => 'Les instantánees xenerense cada poques hores. Al xenerar la instantánea pa «$1» hebo un error. Intentalo otra vuelta más sero.',
	'err-noupdatelog' => "Nun s'alcontró dengún rexistru de anovamientu.",
	'repo-site-link' => 'Sitiu web',
	'repo-browse-link' => 'Esaminar el repositoriu',
	'repo-branches-label' => 'Rames:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => '¡Consiguilo!',
	'updatelog-link' => "rexistru d'anovamientu",
	'tablehead-repo' => 'Repositoriu',
	'tablehead-snapshots' => 'Instantánees',
	'tablehead-branch' => 'Rama',
	'tablehead-filesize' => 'Tamañu del ficheru',
	'tablehead-hash' => 'Sumes de comprobación',
);

/** Azerbaijani (azərbaycanca)
 * @author AZISS
 */
$messages['az'] = array(
	'title-error' => 'Xəta',
	'download-directlink' => 'Birbaşa link',
	'repo-site-link' => 'Vebsayt',
	'repo-lastmoddate-label' => 'Tarix:',
	'tablehead-filesize' => 'Faylın ölçüsü',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'title-overview' => 'شکیل‌لر',
	'title-error' => 'خطا',
	'title-updatelog' => 'گونجل‌لمک قئیدلری',
	'updatelog-intro' => 'گونجل‌لمک اسکریپتی هر ساعات‌دا بیر دفعه چالیشماغا پلانلانیب‌دیر. آشاغیدا اونون سون چالیشماسینین کونسول چیختیسینی گؤرونور.',
	'updatelog-active' => 'گونجل‌لمک اسکریپتی ایندی چالیشماقدادیر. بوتون قئیدلر اوچون سنرا قاییتین.',
	'download-button' => '$1-ی اندیر',
	'download-directlink' => 'موستقیم باغلانتی',
	'title-downloadpage' => 'اندیر: $1',
	'downloadpage-directlink' => 'شکیلی اندیرمک اوچون بورانی تیکلایین.',
	'err-snapshotindex' => 'شکیل ایندِکسی گئچیجی اولاراق ال‌ده دئییل. لوطفاً سونرا یئنی‌دن چالیشین.',
	'err-invalid-repo' => 'تانیلمایان آنبار: «$1».',
	'err-invalid-branch' => 'تانیلمایان بوداق: «$2» آنباریندا «$1».',
	'err-nosnapshot' => 'شکیل‌لر هر نئچه ساعاتدان بیر یارادیلیرلار. «$1»-ه شکیل یاراداندا، بیر خطا قاباغا گلدی. لوطفاً سونرا یئنی‌دن چالیشین.',
	'err-noupdatelog' => 'هئچ گونجل‌لمک قئدی تاپیلمادی.',
	'repo-site-link' => 'سایت',
	'repo-browse-link' => 'گزماق آنباری',
	'repo-branches-label' => 'بوداقلار:',
	'repo-lastmoddate-label' => 'تاریخ:',
	'branches-submit-button' => 'اونو گؤتور!',
	'updatelog-link' => 'گونجل‌لمک قئیدلری',
	'tablehead-repo' => 'آنبار',
	'tablehead-snapshots' => 'شکیل‌لر',
	'tablehead-branch' => 'بوداق',
	'tablehead-filesize' => 'فایل اؤلچو',
	'tablehead-hash' => 'ساغلاما توپلاملاری',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'title-overview' => 'Фотоһүрәт',
	'title-error' => 'Хата',
	'title-updatelog' => 'яңыртыу яҙмаһы',
	'updatelog-intro' => 'Сәғәт һайын яңыртыла.Түбәндә һуңғы яңыртыу отчёты бирелгән.',
	'updatelog-active' => 'Әлеге ваҡытта яңыртыу башҡарыла. Бөтә журналды ҡарау өсөн һуңыраҡ керегеҙ.',
	'download-button' => '$1 файлын тейәп аларғы',
	'download-directlink' => 'туры һылтанма',
	'title-downloadpage' => 'Тейәп алырға: $1',
	'downloadpage-directlink' => 'Әлеге рәсемде тейәп алыу өсөн ошонда баҫығыҙ.',
	'err-snapshotindex' => 'Фотоһүрәт индексы ваҡытлыса ҡатмарлы. Зинһар өсөн, һуңырыҡ ҡабатлап ҡарағыҙ.',
	'err-invalid-repo' => 'Билдәһеҙ һаҡлағыс: "$1"',
	'err-invalid-branch' => '"$2" һаҡлағысында билдәһеҙ тармаҡ "$1".',
	'err-nosnapshot' => 'Фоторәсемдәр бер нисә сәғәт һайын даими эшләнә. "$1" өсөн сираттағы фоторәсемде эшләгән ваҡытта хата китте. Зинһар өсөн, һыңарыҡ кабатлап ҡарағыҙ.',
	'err-noupdatelog' => 'Яңыртыу яҙмалары табылманы.',
	'repo-site-link' => 'Веб-сайт',
	'repo-browse-link' => 'Репозиторийҙы байҡау',
	'repo-branches-label' => 'Тармаҡтар:',
	'repo-lastmoddate-label' => 'Дата:',
	'branches-submit-button' => 'Алырға!',
	'updatelog-link' => 'яңыртыу яҙмаһы',
	'tablehead-repo' => 'Репозиторий',
	'tablehead-snapshots' => 'Фотоһүрәт',
	'tablehead-branch' => 'Тармаҡ',
	'tablehead-filesize' => 'Файл күләме',
	'tablehead-hash' => 'Тикшереү суммаһы',
);

/** Bengali (বাংলা)
 * @author Nasir8891
 */
$messages['bn'] = array(
	'title-overview' => 'ছবি',
	'title-error' => 'ত্রুটি',
	'title-updatelog' => 'আপডেট লগ',
	'download-button' => '$1 ডাউনলোড',
	'download-directlink' => 'সরাসরি লিংক',
	'title-downloadpage' => 'ডাউনলোড: $1',
	'downloadpage-directlink' => 'স্ন্যাপশট ডাউনলোডের জন্য এখানে ক্লিক করুন।',
	'err-snapshotindex' => 'স্ন্যাপশট ইনডেক্সটি সাময়িকভাবে পাওয়া যাচ্ছে না। অনুগ্রহ করে পুনরায় চেষ্টা করুন।',
	'err-invalid-repo' => 'অপরিচিত রিপোজিটরী: "$1".',
	'err-invalid-branch' => '"$2" রিপোজিটরীতে অপরিচিত ব্রাঞ্চ: "$1"।',
	'err-noupdatelog' => 'কোনো আপডেট লগ পাওয়া যায়নি।',
	'repo-site-link' => 'ওয়েবসাইট',
	'repo-browse-link' => 'রিপোজিটরী ব্রাউজ',
	'repo-branches-label' => 'ব্রাঞ্চসমূহ:',
	'repo-lastmoddate-label' => 'তারিখ:',
	'branches-submit-button' => 'পাওয়া গেছে!',
	'updatelog-link' => 'আপডেট লগ',
	'tablehead-repo' => 'রিপোজিটরি',
	'tablehead-snapshots' => 'স্ন্যপশট',
	'tablehead-branch' => 'ব্রাঞ্চ',
	'tablehead-filesize' => 'ফাইলের আকার',
	'tablehead-hash' => 'চেকসাম',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'title-overview' => 'Tapadennoù prim',
	'title-error' => 'Fazi',
	'title-updatelog' => 'Hizivaat ar marilh',
	'updatelog-intro' => "Programmet eo ar skript hizivaat evit treiñ bep eurvezh. Dindan emañ ezvont ar penell war-lerc'h an erounezadur diwezhañ.",
	'updatelog-active' => "Emañ ar skript hizivaat o treiñ. Deuit en-dro diwezhatoc'hik evit gwelet ar marilh klok.",
	'download-button' => 'Pellgargañ $1',
	'download-directlink' => 'Liamm eeun',
	'title-downloadpage' => 'Pellgargañ : $1',
	'downloadpage-directlink' => 'Klikañ amañ evit pellgargañ an dabadenn brim.',
	'err-snapshotindex' => 'Dihegerz eo ar meneger tapadennoù prim evit ar poent. Klaskit en-dro a-benn ur pennadig bihan.',
	'err-invalid-repo' => 'Kavlec\'h dianav: "$1".',
	'err-invalid-branch' => 'Skourr dianav: "$1" er c\'havlec\'h "$2".',
	'err-nosnapshot' => 'Bep un nebeud eurvezhioù e vez ganet an tapadennoù prim. Ur fazi zo bet e-ser genel an dapadenn brim evit "$1". Klaskit en-dro a-benn ur pennadig bihan.',
	'err-noupdatelog' => "N'eus bet kavet hizivadenn ebet",
	'repo-site-link' => "Lec'hienn Genrouedad",
	'repo-browse-link' => "Furchal er c'havlec'h",
	'repo-branches-label' => 'Skourroù :',
	'repo-lastmoddate-label' => 'Deiziad :',
	'branches-submit-button' => 'Pakañ anezhi !',
	'updatelog-link' => 'hizivaat ar marilh',
	'tablehead-repo' => "Kavlec'h",
	'tablehead-snapshots' => 'Tapadennoù prim',
	'tablehead-branch' => 'Skourr',
	'tablehead-filesize' => 'Ment ar restr',
	'tablehead-hash' => 'Hacherezh',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'downloadpage-directlink' => 'Preuzmite snimku.',
);

/** Catalan (català)
 * @author Arnaugir
 */
$messages['ca'] = array(
	'title-overview' => 'Instantànies',
	'title-error' => 'Error',
	'title-updatelog' => 'Actualitza el registre',
	'updatelog-intro' => "L'escriptura d'actualització es planifica per executar cada hora. A continuació es mostra la sortida de la consola de l'última execució.",
	'updatelog-active' => "L'escriptura d'actualització s'està executant. Torna més tard pel registre complet.",
	'download-button' => 'Descarrega $1',
	'download-directlink' => 'enllaç directe',
	'title-downloadpage' => 'Descarrega $1',
	'downloadpage-directlink' => 'Fes clic aquí per descarregar la instantània.',
	'err-snapshotindex' => "Índex d'instantània no disponible temporalment. Si us plau prova-ho més tard.",
	'err-invalid-repo' => 'Repositori desconegut: "$1".',
	'err-invalid-branch' => 'Branca desconeguda: "$1" al repositori "$2".',
	'err-nosnapshot' => 'Les instantànies es generen cada poques hores. Mentre es generava la de  "$1" s\'ha produït un error. Si us plau, prova-ho de nou més tard.',
	'err-noupdatelog' => "No s'ha trobat cap registre d'actualització.",
	'repo-site-link' => 'Lloc web',
	'repo-browse-link' => 'Navega pel repositori',
	'repo-branches-label' => 'Branques:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Aconsegueix-ho!',
	'updatelog-link' => "Registre d'actualitzacions",
	'tablehead-repo' => 'Repositori',
	'tablehead-snapshots' => 'Instantànies',
	'tablehead-branch' => 'Branca',
	'tablehead-filesize' => 'Mida del fitxer',
	'tablehead-hash' => 'Controls per addició',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'download-directlink' => 'дуьхьала хьажораг',
);

/** Czech (česky)
 * @author Chmee2
 * @author PSJG-Tyler
 * @author Vks
 */
$messages['cs'] = array(
	'title-overview' => 'Snapshoty',
	'title-error' => 'Chyba',
	'title-updatelog' => 'Protokol změn',
	'updatelog-intro' => 'Aktualizační skript je vykonáván každou hodinu. Níže je vypsán výstup z posledního spuštění.',
	'updatelog-active' => 'Aktualizační skript běží. Pro kompletní protokol si zobrazte stránku později.',
	'download-button' => 'Stáhnout $1',
	'download-directlink' => 'Přímý odkaz',
	'title-downloadpage' => 'Stažení: $1',
	'downloadpage-directlink' => 'Klikněte sem pro stažení snapshotu.',
	'err-snapshotindex' => 'Index snapshotu je dočasně nedostupný. Zkuste to prosím později.',
	'err-invalid-repo' => 'Neznámé úložiště: "$1".',
	'err-invalid-branch' => 'Neznámá větev: "$1" v úložišti "$2".',
	'err-nosnapshot' => 'Snapshoty se generují každých několi hodin. Během generování snapshotu pro "$1" nastala chyba. Zkuste to prosím později.',
	'err-noupdatelog' => 'Nebyl nalezen žádný protokol o aktualizaci.',
	'repo-site-link' => 'Webová stránka',
	'repo-browse-link' => 'Procházet úložiště',
	'repo-branches-label' => 'Větve:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Stáni si!',
	'updatelog-link' => 'Protokol změn',
	'tablehead-repo' => 'Úložiště',
	'tablehead-snapshots' => 'Snapshoty',
	'tablehead-branch' => 'Větev',
	'tablehead-filesize' => 'Velikost souboru',
	'tablehead-hash' => 'Kontrolní součty',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'title-overview' => 'Самантлӑ сӑнсем',
	'title-error' => 'Йӑнӑш',
	'title-updatelog' => 'Ҫӗнетни журналӗ',
	'download-button' => '$1 тиесе ил',
	'download-directlink' => 'тӳрӗ каҫӑ',
	'title-downloadpage' => 'Тиесе ил: $1',
	'downloadpage-directlink' => 'Самантлӑ сӑна тиесе илесшӗн кунта пусӑр.',
	'err-invalid-repo' => 'Паллӑ мар репозитори: "$1".',
	'err-invalid-branch' => '"$2" репозиторире "$1" тӗрӗс мар турат.',
	'err-noupdatelog' => 'Ҫӗнетни журналӗ тупӑнмарӗ.',
	'repo-site-link' => 'Сайт',
	'repo-browse-link' => 'Репозиторие курасси',
	'repo-branches-label' => 'Туратсем:',
	'repo-lastmoddate-label' => 'Дата:',
	'branches-submit-button' => 'Ил!',
	'updatelog-link' => 'ҫӗнетни журналӗ',
	'tablehead-repo' => 'Репозитори',
	'tablehead-snapshots' => 'Самантлӑ сӑнсем',
	'tablehead-branch' => 'Турат',
	'tablehead-filesize' => 'Файл виҫи',
	'tablehead-hash' => 'Тӗрӗслев хушӑнчӑкӗ',
);

/** Danish (dansk)
 * @author Christian List
 * @author Sarrus
 * @author Tjernobyl
 */
$messages['da'] = array(
	'title-overview' => 'Øjebliksbilleder',
	'title-error' => 'Fejl',
	'title-updatelog' => 'Opdateringslog',
	'updatelog-intro' => 'Opdateringsskriptet er planlagt til at køre hver time. Nedenfor er konsol outputtet af den seneste kørsel.',
	'updatelog-active' => 'Opdateringsskriptet kører i øjeblikket. Kom tilbage senere for den fuldstændige log.',
	'download-button' => 'Download $1',
	'download-directlink' => 'direkte link',
	'title-downloadpage' => 'Download: $1',
	'downloadpage-directlink' => 'Klik her for at hente øjebliksbillede.',
	'err-noupdatelog' => 'Ingen opdateringslog blev fundet.',
	'repo-site-link' => 'Hjemmeside',
	'repo-lastmoddate-label' => 'Dato:',
	'branches-submit-button' => 'Skaf den!',
	'updatelog-link' => 'opdateringslog',
	'tablehead-snapshots' => 'Øjebliksbilleder',
	'tablehead-filesize' => 'Filstørrelse',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title-overview' => 'Schnappschüsse',
	'title-error' => 'Fehler',
	'title-updatelog' => 'Aktualisierungsprotokoll',
	'updatelog-intro' => 'Das Aktualisierungsskript wird einmal pro Stunde ausgeführt. Hier kann man Informationen zur letzten Ausführung des Skripts einsehen.',
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuche diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'download-button' => '$1 herunterladen',
	'download-directlink' => 'direkter Link',
	'title-downloadpage' => 'Herunterladen von $1',
	'downloadpage-directlink' => 'Hier klicken, um den Schnappschuss herunterzuladen.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuche es später erneut.',
	'err-invalid-repo' => 'Unbekanntes Repositorium: „$1“',
	'err-invalid-branch' => 'Unbekannter Versionszweig: „$1“ im Repositorium „$2“.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuche es später erneut.',
	'err-noupdatelog' => 'Das Aktualisierungsprotokoll wurde nicht gefunden.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repositorium durchsuchen',
	'repo-branches-label' => 'Versionszweige:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Herunterladen',
	'updatelog-link' => 'Aktualisierungsprotokoll',
	'tablehead-repo' => 'Repositorium',
	'tablehead-snapshots' => 'Schnappschüsse',
	'tablehead-branch' => 'Versionszweig',
	'tablehead-filesize' => 'Dateigröße',
	'tablehead-hash' => 'Hash',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuchen Sie diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuchen Sie es später erneut.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Xırab',
	'title-updatelog' => 'Qeydan anewen ke',
	'download-button' => "$1'i Ron",
	'title-downloadpage' => "$1'i Ron:",
	'repo-site-link' => 'Websita',
	'repo-lastmoddate-label' => 'Deme:',
	'branches-submit-button' => 'Şo ri!',
	'tablehead-branch' => 'Şobe',
	'tablehead-filesize' => 'Ebatê dosyayî',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title-overview' => 'Njezjapke bildki',
	'title-error' => 'Zmólka',
	'title-updatelog' => 'Aktualizěrowański protokol',
	'updatelog-intro' => 'Aktualizěrowański skript wuwjeźo se kuždu góźinu. Dołojce jo wudaśe konsole za slědny běg.',
	'updatelog-active' => 'Aktualizěrowański skript tuchylu běžy. Wroś se pšosym pózdźej, aby se dopołny protokol woglědał.',
	'download-button' => '$1 ześěgnuś',
	'download-directlink' => 'direktny wótkaz',
	'title-downloadpage' => 'Ześěgnjenje: $1',
	'downloadpage-directlink' => 'Klikni how, aby njezjapku bildku ześěgnuł.',
	'err-snapshotindex' => 'Indeks njezjapkich bildkow njestoj k dispoziciji. Pšosym wopytaj pózdźej hyšći raz.',
	'err-invalid-repo' => 'Njeznaty repozitorium: "$1".',
	'err-invalid-branch' => 'Njeznata gałuza: "$1" w repozitoriumje "$2".',
	'err-nosnapshot' => 'Njezjapka bildka generěrujo se kužde pór góźin. Za generěrowanje njezjapkeje bildki za "$1" jo zmólka nastała. Pšosym wopytaj pózdźej hyšći raz.',
	'err-noupdatelog' => 'Aktualizowański protokol njejo se namakał.',
	'repo-site-link' => 'Websedło',
	'repo-browse-link' => 'Repozitorium pśepytaś',
	'repo-branches-label' => 'Gałuzki:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Ześěgnuś',
	'updatelog-link' => 'aktualizěrowański protokol',
	'tablehead-repo' => 'Repozitorium',
	'tablehead-snapshots' => 'Njezjapke bildki',
	'tablehead-branch' => 'Gałuza',
	'tablehead-filesize' => 'Wjelikosć dataje',
	'tablehead-hash' => 'Testowańske sumy',
);

/** Greek (Ελληνικά)
 * @author Evropi
 * @author Glavkos
 */
$messages['el'] = array(
	'title-error' => 'Σφάλμα',
	'title-updatelog' => 'Ενημέρωση αρχείου καταγραφής',
	'download-directlink' => 'άμεσος σύνδεσμος',
	'repo-site-link' => 'Ιστότοπος',
	'repo-lastmoddate-label' => 'Ημερομηνία:',
	'tablehead-filesize' => 'Μέγεθος αρχείου',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author Yekrats
 */
$messages['eo'] = array(
	'title-overview' => 'Arkivoj',
	'title-error' => 'Eraro',
	'title-updatelog' => 'Ĝisdatigi protokolon',
	'download-button' => 'Elŝuti $1',
	'download-directlink' => 'rekta ligilo',
	'title-downloadpage' => 'Elŝuti: $1',
	'downloadpage-directlink' => 'Alklaku ĉi tien por elŝuti la ekrankopion.',
	'err-invalid-repo' => 'Nekonata dosierujon: "$1".',
	'err-noupdatelog' => 'Neniu protokolo de ĝisdatigoj estis trovita.',
	'repo-site-link' => 'Retejo',
	'repo-browse-link' => 'Foliumi dosierujon',
	'repo-branches-label' => 'Branĉoj:',
	'repo-lastmoddate-label' => 'Dato:',
	'branches-submit-button' => 'Akiru ĝin!',
	'updatelog-link' => 'ĝisdatigi protokolon',
	'tablehead-repo' => 'Dosierujo',
	'tablehead-snapshots' => 'Arkivoj',
	'tablehead-branch' => 'Branĉo',
	'tablehead-filesize' => 'Dosiergrandeco',
	'tablehead-hash' => 'Kontrolsumoj',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Invadinado
 */
$messages['es'] = array(
	'title-overview' => 'Instantáneas',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualización',
	'updatelog-intro' => 'La secuencia de comandos (script) de actualización está programada para ejecutarse cada hora. A continuación está el resultado de la consola tras la última ejecución.',
	'updatelog-active' => 'La secuencia de comandos (script) de actualización se está ejecutando actualmente. Vuelve más tarde para ver el registro completo.',
	'download-button' => 'Descargar $1',
	'download-directlink' => 'enlace directo',
	'title-downloadpage' => 'Descargar: $1',
	'downloadpage-directlink' => 'Haz clic aquí para descargar la instantánea.',
	'err-snapshotindex' => 'Índice de instantáneas no disponible temporalmente. Inténtalo de nuevo más tarde.',
	'err-invalid-repo' => 'Repositorio desconocido: "$1".',
	'err-invalid-branch' => 'Rama desconocida: "$1" en el repositorio "$2".',
	'err-nosnapshot' => 'Las instantáneas se generan cada pocas horas. Mientras se generaba la instantánea para "$1", se produjo un error. Inténtalo de nuevo más tarde.',
	'err-noupdatelog' => 'No se ha encontrado ningún registro de actualización.',
	'repo-site-link' => 'Sitio Web',
	'repo-browse-link' => 'Examinar el repositorio',
	'repo-branches-label' => 'Ramas:',
	'repo-lastmoddate-label' => 'Fecha:',
	'branches-submit-button' => '¡Consíguelo!',
	'updatelog-link' => 'registro de actualización',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantáneas',
	'tablehead-branch' => 'Rama',
	'tablehead-filesize' => 'Tamaño del archivo',
	'tablehead-hash' => 'Hash',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'title-error' => 'Viga',
	'download-button' => 'Laadi $1 alla',
	'title-downloadpage' => 'Laadi alla: $1',
	'repo-site-link' => 'Veebileht',
	'repo-lastmoddate-label' => 'Kuupäev:',
	'tablehead-filesize' => 'Faili suurus',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'title-error' => 'خطا',
	'title-updatelog' => 'سیاهه به روز رسانی',
	'download-button' => 'دریافت $1',
	'download-directlink' => 'پیوند مستقیم',
	'title-downloadpage' => 'دریافت: $1',
	'err-invalid-repo' => 'مخزن ناشناخته «$1».',
	'err-invalid-branch' => 'شاخهٔ ناشناخته: «$1» در مخزن «$2».',
	'err-noupdatelog' => 'هیچ سیاهه به روز رسانی یافت نشد.',
	'repo-site-link' => 'تارنما',
	'repo-browse-link' => 'مرور مخزن',
	'repo-branches-label' => 'شاخه‌ها:',
	'repo-lastmoddate-label' => 'تاریخ:',
	'branches-submit-button' => 'آن را دریافت کنید!',
	'updatelog-link' => 'سیاهه به روز رسانی',
	'tablehead-repo' => 'مخزن',
	'tablehead-branch' => 'شاخه',
	'tablehead-filesize' => 'اندازهٔ پرونده',
);

/** Finnish (suomi)
 * @author Nike
 * @author Olli
 * @author Silvonen
 * @author Stryn
 */
$messages['fi'] = array(
	'title-overview' => 'Tilannekuvat',
	'title-error' => 'Virhe',
	'title-updatelog' => 'Päivitysloki',
	'updatelog-intro' => 'Päivitysohjelma ajetaan joka tunti. Alla on viimeisimmän kerran konsolin tiedot.',
	'updatelog-active' => 'Päivitysohjelma on käynnissä. Palaa myöhemmin saadaksesi tietää koko lokin.',
	'download-button' => 'Lataa $1',
	'download-directlink' => 'suora linkki',
	'title-downloadpage' => 'Lataa: $1',
	'downloadpage-directlink' => 'Napsauta ladataksesi tilannevedoksen.',
	'err-snapshotindex' => 'Tilannevedos ei tällä hetkellä ole käytettävissä. Yritä myöhemmin uudelleen.',
	'err-invalid-repo' => 'Tuntematon kirjasto: "$1".',
	'err-noupdatelog' => 'Päivityslokia ei löytynyt.',
	'repo-site-link' => 'Verkkosivusto',
	'repo-browse-link' => 'Selaa kirjastoa',
	'repo-branches-label' => 'Haarat:',
	'repo-lastmoddate-label' => 'Päiväys:',
	'branches-submit-button' => 'Lataa!',
	'updatelog-link' => 'päivitysloki',
	'tablehead-repo' => 'Koodivaranto',
	'tablehead-snapshots' => 'Tilannekuvat',
	'tablehead-branch' => 'Haara',
	'tablehead-filesize' => 'Tiedostokoko',
	'tablehead-hash' => 'Tarkisteet',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'title-overview' => 'Løtumyndir',
	'title-error' => 'Feilur',
	'title-updatelog' => 'Dagfør loggin',
	'download-button' => 'Tak niður $1',
	'download-directlink' => 'beinleiðis leinkja',
	'title-downloadpage' => 'Tak niður: $1',
	'downloadpage-directlink' => 'Tak niður løtumyndina.',
	'err-invalid-repo' => 'Ókendur dátugrunnur: "$1".',
	'repo-site-link' => 'Heimasíða',
	'repo-browse-link' => 'Leita í dátugrunninum',
	'repo-branches-label' => 'Greinar:',
	'repo-lastmoddate-label' => 'Dagur:',
	'branches-submit-button' => 'Skaffa tað!',
	'updatelog-link' => 'dagføringsloggur',
	'tablehead-repo' => 'Dátugrunnur',
	'tablehead-snapshots' => 'Løtumyndir',
	'tablehead-branch' => 'Grein',
	'tablehead-filesize' => 'Fílustødd',
);

/** French (français)
 * @author Gomoko
 * @author Tititou36
 */
$messages['fr'] = array(
	'title-overview' => 'Instantanés',
	'title-error' => 'Erreur',
	'title-updatelog' => 'Mettre à jour le journal',
	'updatelog-intro' => "Le script de mise à jour est programmé pour s'exécuter toutes les heures. Voici ci-dessous la sortie de la console de la dernière exécution.",
	'updatelog-active' => "Le script de mise à jour est en cours d'exécution. Revenez plus tard pour le journal complet.",
	'download-button' => 'Télécharger $1',
	'download-directlink' => 'lien direct',
	'title-downloadpage' => 'Télécharger : $1',
	'downloadpage-directlink' => 'Cliquez ici pour télécharger la copie.',
	'err-snapshotindex' => "Index d'instantané temporairement indisponible. Veuillez réessayer ultérieurement.",
	'err-invalid-repo' => 'Dépôt inconnu: "$1".',
	'err-invalid-branch' => 'Branche inconnue: "$1" dans le dépôt "$2".',
	'err-nosnapshot' => 'Les instantanés sont générés toutes les quelques heures. Lors de la génération de l\'instantané pour "$1", une erreur s\'est produite. Veuillez réessayer ultérieurement.',
	'err-noupdatelog' => "Aucun journal de mise à jour n'a été trouvé.",
	'repo-site-link' => 'Site web',
	'repo-browse-link' => 'Naviguer dans le dépôt',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => "L'obtenir!",
	'updatelog-link' => 'mettre à jour le journal',
	'tablehead-repo' => 'Dépôt',
	'tablehead-snapshots' => 'Instantanés',
	'tablehead-branch' => 'Branche',
	'tablehead-filesize' => 'Taille de fichier',
	'tablehead-hash' => 'Hachage',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'title-error' => 'Fôta',
	'download-button' => 'Tèlèchargiér $1',
	'download-directlink' => 'lim drêt',
	'title-downloadpage' => 'Tèlèchargiér : $1',
	'err-invalid-repo' => 'Dèpôt encognu : « $1 ».',
	'err-invalid-branch' => 'Branche encognua : « $1 » dedens lo dèpôt « $2 ».',
	'repo-site-link' => 'Seto vouèbe',
	'repo-branches-label' => 'Branches :',
	'repo-lastmoddate-label' => 'Dâta :',
	'branches-submit-button' => 'L’obtegnir !',
	'tablehead-repo' => 'Dèpôt',
	'tablehead-branch' => 'Branche',
	'tablehead-filesize' => 'Talye du fichiér',
	'tablehead-hash' => 'Chaplâjo',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'title-error' => 'Earráid',
	'repo-lastmoddate-label' => 'Dáta:',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title-overview' => 'Instantáneas',
	'title-error' => 'Erro',
	'title-updatelog' => 'Rexistro de actualizacións',
	'updatelog-intro' => 'A escritura de actualización está programada para executarse cada hora. A continuación está o resultado que mostrou a consola na última execución.',
	'updatelog-active' => 'A escritura de actualización está executándose nestes intres. Volva máis tarde para ollar o rexistro completo.',
	'download-button' => 'Descargar "$1"',
	'download-directlink' => 'ligazón directa',
	'title-downloadpage' => 'Descargar: $1',
	'downloadpage-directlink' => 'Prema aquí para descargar a instantánea.',
	'err-snapshotindex' => 'O índice de instantáneas non está dispoñible temporalmente. Inténteo de novo máis tarde.',
	'err-invalid-repo' => 'Repositorio descoñecido: "$1".',
	'err-invalid-branch' => 'Ramificación descoñecida: "$1" no repositorio "$2".',
	'err-nosnapshot' => 'As instantáneas xéranse cada poucas horas. Houbo un erro durante a xeración da instantánea de "$1". Inténteo de novo máis tarde.',
	'err-noupdatelog' => 'Non se atopou ningún rexistro de actualización.',
	'repo-site-link' => 'Páxina web',
	'repo-browse-link' => 'Explorar o repositorio',
	'repo-branches-label' => 'Ramificacións:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Obtéñao!',
	'updatelog-link' => 'rexistro de actualizacións',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantáneas',
	'tablehead-branch' => 'Ramificación',
	'tablehead-filesize' => 'Tamaño do ficheiro',
	'tablehead-hash' => 'Sumas de verificación',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'title-error' => 'ક્ષતિ',
	'repo-site-link' => 'વેબસાઇટ',
	'repo-lastmoddate-label' => 'તારીખ:',
	'tablehead-snapshots' => 'સ્નેપશોટ',
	'tablehead-branch' => 'શાખા',
	'tablehead-filesize' => 'ફાઇલનું કદ',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title-overview' => 'קובצי מאגרים',
	'title-error' => 'שגיאה',
	'title-updatelog' => 'יומן עדכונים',
	'updatelog-intro' => 'תסריט עדכון מתוזמן לרוץ מדי שעה. להלן הפלט של הריצה האחרונה.',
	'updatelog-active' => 'תסריט העדכון רץ עכשיו. בואו בהמשך לראות את היומן המלא.',
	'download-button' => 'הורדת $1',
	'download-directlink' => 'קישור ישיר',
	'title-downloadpage' => 'הורדה: $1',
	'downloadpage-directlink' => 'לחצו כאן כדי להוריד את הקובץ.',
	'err-snapshotindex' => 'מפתח קובצי המאגרים אינו זמין כעת. נא לנסות מאוחר יותר.',
	'err-invalid-repo' => 'מאגר בלתי־יודע: „$1”.',
	'err-invalid-branch' => 'ענף בלתי־ידוע: „$1” במאגר „$2”.',
	'err-nosnapshot' => 'קובצי המאגרים מיוצרים מדי כמה שעות. בעת יצירת הקובץ עבור „$1” התרחשה שגיאה. נא לנסות שוב מאוחר יותר.',
	'err-noupdatelog' => 'לא נמצא יומן עדכון.',
	'repo-site-link' => 'אתר האינטרנט',
	'repo-browse-link' => 'עיון במאגר',
	'repo-branches-label' => 'ענפים:',
	'repo-lastmoddate-label' => 'תאריך:',
	'branches-submit-button' => 'לקבל את זה!',
	'updatelog-link' => 'יומן עדכון',
	'tablehead-repo' => 'מאגר',
	'tablehead-snapshots' => 'קובצי מאגרים',
	'tablehead-branch' => 'ענף',
	'tablehead-filesize' => 'גודל הקובץ',
	'tablehead-hash' => 'סיכומי ביקורת',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'title-overview' => 'स्नैपशॉट्स',
	'title-error' => 'त्रुटि',
	'title-updatelog' => 'अद्यतन लॉग',
	'download-button' => '$1 डाउनलोड करें',
	'download-directlink' => 'सीधा लिंक',
	'title-downloadpage' => 'डाउनलोड: $1',
	'downloadpage-directlink' => 'स्नैपशॉट डाउनलोड करने के लिए यहाँ क्लिक करें।',
	'err-snapshotindex' => 'स्नैपशॉट सूचकांक अस्थायी रूप से अनुपलब्ध। कृपया बाद में पुनः प्रयास करें।',
	'err-invalid-repo' => 'अज्ञात भंडारघर: "$1"',
	'err-noupdatelog' => 'कोई अद्यतन लॉग नहीं मिली।',
	'repo-site-link' => 'वेबसाइट',
	'repo-browse-link' => 'भण्डार ब्राउज़ करें',
	'repo-branches-label' => 'शाखाएँ:',
	'repo-lastmoddate-label' => 'दिनांक:',
	'updatelog-link' => 'अद्यतन लॉग',
	'tablehead-repo' => 'भण्डार',
	'tablehead-snapshots' => 'स्नैपशॉट्स',
	'tablehead-branch' => 'शाखा',
	'tablehead-filesize' => 'फ़ाइल आकार',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title-overview' => 'Njejapke fota',
	'title-error' => 'Zmylk',
	'title-updatelog' => 'Aktualizowanski protokol',
	'updatelog-intro' => 'Aktualizowanski skript so kóždu hodźinu wuwjedźe. Deleka je wudaće konsole za posledni běh.',
	'updatelog-active' => 'Aktualizowanski skript tuchwilu běži. Wróć so prošu pozdźišo, zo by sej dospołny protokol wobhladał.',
	'download-button' => '$1 sćahnyć',
	'download-directlink' => 'direktny wotkaz',
	'title-downloadpage' => 'Sćehnjenje: $1',
	'downloadpage-directlink' => 'Klikń tu, zo by njejapke foto sćahnył',
	'err-snapshotindex' => 'Indeks njejapkich fotow nachwilu k dispoziciji njesteji. Prošu spytaj pozdźišo hišće raz.',
	'err-invalid-repo' => 'Njeznaty repozitorij: "$1".',
	'err-invalid-branch' => 'Njeznata hałuza: "$1" w repozitoriju "$2".',
	'err-nosnapshot' => 'Njejapke foto so kóžde por hodźin generuja. Za generowanje njejapkeho fota za "$1" je zmylk wustupił. Prošu spytaj pozdźišo hišće raz.',
	'err-noupdatelog' => 'Aktualizowanski protokol njeje so namakał.',
	'repo-site-link' => 'Websydło',
	'repo-browse-link' => 'Repozitorij přepytać',
	'repo-branches-label' => 'Hałuzy:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Sćahnyć',
	'updatelog-link' => 'aktualizowanski protokol',
	'tablehead-repo' => 'Repozitorij',
	'tablehead-snapshots' => 'Njejapke fota',
	'tablehead-branch' => 'Hałuza',
	'tablehead-filesize' => 'Wulkosć dataje',
	'tablehead-hash' => 'Hash',
);

/** Hungarian (magyar)
 * @author Dj
 * @author Sucy
 */
$messages['hu'] = array(
	'title-overview' => 'Pillanatfelvételek',
	'title-error' => 'Hiba',
	'title-updatelog' => 'Frissítési naplófájl',
	'updatelog-intro' => 'A frissítést végző parancsfájl óránként fut le. Alább megtalálod a legutóbbi futtatás konzol outputját.',
	'updatelog-active' => 'A frissítést végző parancsfájl jelenleg fut. Gyere vissza később a teljes naplóért.',
	'download-button' => '$1 letöltése',
	'download-directlink' => 'közvetlen hivatkozás',
	'title-downloadpage' => 'Letöltés:$1',
	'downloadpage-directlink' => 'Kattints ide a pilanatfelvétel letöltéséhet',
	'err-snapshotindex' => 'A pillantfelvétel index iőlegesen nem áll rendelkezésre. Kérjük próbáld meg később!',
	'err-invalid-repo' => 'Ismeretlen adattár: "$1".',
	'err-invalid-branch' => 'Ismeretlen ág: "$1" az adattárban: "$2".',
	'err-nosnapshot' => 'A pillanatfelvételek néhány óránként készülnek. A "$1" pillanatfelvétel generálása során hiba történt. Kérjük próbálja meg később!',
	'err-noupdatelog' => 'Nem található frissítési napló.',
	'repo-site-link' => 'Weboldal',
	'repo-browse-link' => 'Adattár naplózása',
	'repo-branches-label' => 'Ág:',
	'repo-lastmoddate-label' => 'Dátum:',
	'branches-submit-button' => 'Gyerünk!',
	'updatelog-link' => 'frissítési napló',
	'tablehead-repo' => 'Adattár',
	'tablehead-snapshots' => 'Pillanatfelvételek',
	'tablehead-branch' => 'Ág',
	'tablehead-filesize' => 'Fájlméret',
	'tablehead-hash' => 'Ellenőrzőösszegek',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title-overview' => 'Instantaneos',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualisation',
	'updatelog-intro' => 'Le script de actualisation es programmate pro esser executate cata hora. Ecce le resultato de consola del ultime execution.',
	'updatelog-active' => 'Le script de actualisation es actualmente in execution. Reveni plus tarde pro le registro complete.',
	'download-button' => 'Discargar $1',
	'download-directlink' => 'ligamine directe',
	'title-downloadpage' => 'Discargar: $1',
	'downloadpage-directlink' => 'Clicca hic pro discargar le instantaneo.',
	'err-snapshotindex' => 'Indice de instantaneos temporarimente indisponibile. Per favor reproba plus tarde.',
	'err-invalid-repo' => 'Repositorio incognite: "$1".',
	'err-invalid-branch' => 'Branca incognite: "$1" in repositorio "$2".',
	'err-nosnapshot' => 'Le instantaneos es generate cata poc horas. Durante le generation del instantaneo "$1" occurreva un error. Per favor reproba plus tarde.',
	'err-noupdatelog' => 'Nulle registro de actualisation ha essite trovate.',
	'repo-site-link' => 'Sito web',
	'repo-browse-link' => 'Explorar repositorio',
	'repo-branches-label' => 'Brancas:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Obtene lo!',
	'updatelog-link' => 'registro de actualisation',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantaneos',
	'tablehead-branch' => 'Branca',
	'tablehead-filesize' => 'Dimension del file',
	'tablehead-hash' => 'Summas de controlo',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'title-overview' => 'Cuplikan',
	'title-error' => 'Kesalahan',
	'title-updatelog' => 'Log pemutakhiran',
	'updatelog-intro' => 'Skrip pemutakhiran dijadwalkan beroperasi setiap jam. Berikut adalah keluaran konsol operasi terakhir.',
	'updatelog-active' => 'Skrip pemutakhiran sedang berjalan. Silakan kembali lagi nanti untuk log lengkapnya.',
	'download-button' => 'Unduh $1',
	'download-directlink' => 'tautan langsung',
	'title-downloadpage' => 'Unduhan: $1',
	'downloadpage-directlink' => 'Klik di sini untuk mengunduh cuplikan.',
	'err-snapshotindex' => 'Indeks cuplikan sementara  tidak tersedia. Silakan coba lagi nanti.',
	'err-invalid-repo' => 'Penyimpanan tidak dikenal: "$1".',
	'err-invalid-branch' => 'Cabang tidak dikenal: "$1" di penyimpanan "$2".',
	'err-nosnapshot' => 'Cuplikan dibuat beberapa jam sekali. Ketika membuat cuplikan untuk "$1", kesalahan terjadi. Silakan coba lagi nanti.',
	'err-noupdatelog' => 'Log pemutakhiran tidak ditemukan.',
	'repo-site-link' => 'Situs web',
	'repo-browse-link' => 'Cari penyimpanan',
	'repo-branches-label' => 'Cabang:',
	'repo-lastmoddate-label' => 'Tanggal:',
	'branches-submit-button' => 'Dapatkan!',
	'updatelog-link' => 'log pemutakhiran',
	'tablehead-repo' => 'Penyimpanan',
	'tablehead-snapshots' => 'Cuplikan',
	'tablehead-branch' => 'Cabang',
	'tablehead-filesize' => 'Ukuran berkas',
	'tablehead-hash' => 'Checksums',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'title-error' => 'Nsogbú',
	'repo-lastmoddate-label' => 'Ubọchị:',
	'branches-submit-button' => 'Wèté ya!',
	'tablehead-filesize' => 'Ívù usòrò',
);

/** Italian (italiano)
 * @author Beta16
 * @author Ximo17
 */
$messages['it'] = array(
	'title-overview' => 'Istantanee',
	'title-error' => 'Errore',
	'title-updatelog' => 'Aggiorna etichetta',
	'updatelog-intro' => "L'aggiornamento avviene ogni ora. Di seguito è presente l'output della console della ultima corsa.",
	'updatelog-active' => "L'aggiornamento è attualmente in esecuzione. Torna più tardi per il registro completo.",
	'download-button' => 'Scarica $1',
	'download-directlink' => 'link diretto',
	'title-downloadpage' => 'Scarica: $1',
	'downloadpage-directlink' => 'Clicca qui per scaricare lo snapshot.',
	'err-snapshotindex' => 'Indice delle istantanee temporaneamente non disponibile. Si prega di riprovare più tardi.',
	'err-invalid-repo' => 'Deposito sconosciuto: "$1".',
	'err-invalid-branch' => 'Sezione sconosciuta: "$1" nel deposito "$2".',
	'err-nosnapshot' => 'Le istantanee vengono generate ogni poche ore. Durante la generazione dello snapshot di "$1", si è verificato un errore. Riprova più tardi.',
	'err-noupdatelog' => 'Non è stato trovato alcun registro di aggiornamento.',
	'repo-site-link' => 'Sito web',
	'repo-browse-link' => 'Sfoglia nel deposito',
	'repo-branches-label' => 'Sezioni:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Ottienilo!',
	'updatelog-link' => 'Aggiornamento registro',
	'tablehead-repo' => 'Deposito',
	'tablehead-snapshots' => 'Istantanee',
	'tablehead-branch' => 'Sezione',
	'tablehead-filesize' => 'Dimensione del file',
	'tablehead-hash' => 'Checksum',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title-overview' => 'スナップショット',
	'title-error' => 'エラー',
	'title-updatelog' => '更新記録',
	'updatelog-intro' => '更新スクリプトを毎時間実行するようスケジュールされています。下記は前回の実行でのコンソール出力です。',
	'updatelog-active' => '更新スクリプトを現在実行中です。あとで完了記録を確認してください。',
	'download-button' => '$1 をダウンロード',
	'download-directlink' => '直接リンク',
	'title-downloadpage' => 'ダウンロード: $1',
	'downloadpage-directlink' => 'スナップショットをダウンロードする。',
	'err-snapshotindex' => 'スナップショットのインデックスは一時的に利用できません。あとでもう一度やり直してください。',
	'err-invalid-repo' => '不明なリポジトリ:「$1」',
	'err-invalid-branch' => '不明なブランチ: リポジトリ「$2」内の「$1」',
	'err-nosnapshot' => 'スナップショットは数時間ごとに生成されます。「$1」のスナップショット生成中にエラーが発生しました。あとでもう一度やり直してください。',
	'err-noupdatelog' => '更新記録が見つかりませんでした。',
	'repo-site-link' => 'ウェブサイト',
	'repo-browse-link' => 'リポジトリを参照',
	'repo-branches-label' => 'ブランチ:',
	'repo-lastmoddate-label' => '日時:',
	'branches-submit-button' => '取得する',
	'updatelog-link' => '更新記録',
	'tablehead-repo' => 'リポジトリ',
	'tablehead-snapshots' => 'スナップショット',
	'tablehead-branch' => 'ブランチ',
	'tablehead-filesize' => 'ファイル サイズ',
	'tablehead-hash' => 'チェックサム',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'title-overview' => 'Cuplikan',
	'title-error' => 'Kasalahan',
	'title-updatelog' => 'Anyari log',
	'updatelog-intro' => 'Skrip anyar dijadwalaké lumangsung pendhak jam. Ngisor iki weton konsol saka gawéan pungkasan.',
	'updatelog-active' => 'Skrip anyar lagi lumangsung. Mangga mréné manèh mengko kanggo log jangkepé.',
	'download-button' => 'Undhuh $1',
	'download-directlink' => 'pranala langsung',
	'title-downloadpage' => 'Undhuhan: $1',
	'downloadpage-directlink' => 'Klik kènè kanggo ngundhuh cuplikan.',
	'err-invalid-repo' => 'Panyimpenan ora dikenal: "$1".',
	'err-invalid-branch' => 'Pang ora dikenal: "$1" nèng panyimenan "$2".',
	'err-noupdatelog' => 'Log anyar ora ditemokaké.',
	'repo-site-link' => 'Situs wèb',
	'repo-browse-link' => 'Tlusur panyimpenan',
	'repo-branches-label' => 'Pang:',
	'repo-lastmoddate-label' => 'Tanggal:',
	'branches-submit-button' => 'Éntokaké!',
	'updatelog-link' => 'anyari log',
	'tablehead-repo' => 'Panyimpenan',
	'tablehead-snapshots' => 'Cuplikan',
	'tablehead-branch' => 'Pang',
	'tablehead-filesize' => 'Gedhéné berkas',
	'tablehead-hash' => 'Checksum',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'title-error' => 'შეცდომა',
	'repo-site-link' => 'ვებ-გვერდი',
	'repo-lastmoddate-label' => 'თარიღი:',
	'tablehead-filesize' => 'ფაილის ზომა',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'title-error' => 'កំហុស',
	'tablehead-filesize' => 'ទំហំឯកសារ',
);

/** Kannada (ಕನ್ನಡ)
 * @author Akoppad
 * @author M G Harish
 */
$messages['kn'] = array(
	'title-overview' => 'ಮುನ್ನೋಟಗಳು',
	'title-error' => 'ದೋಷ',
	'title-updatelog' => 'ದಿನಚರಿ ನವೀಕರಿಸಿ',
	'updatelog-intro' => 'ನವೀಕರಣವು ಪ್ರತಿ ಘಂಟೆ ಜಾರಿಗೊಳ್ಳುವಂತೆ ವ್ಯವಸ್ಥೆ ಮಾಡಲಾಗಿದೆ. ಕೆಳಗಿರುವುದು ಕೊನೆಯ ಬಾರಿ ಜಾರಿಗೊಂಡಾಗಿನ ಫಲಿತಾಂಶ.',
	'updatelog-active' => 'ನವೀಕರಣವು ನಡೆಯುತ್ತಿದೆ. ಸಂಪೂರ್ಣ ದಿನಚರಿಗಾಗಿ ನಂತರ ಬನ್ನಿ.',
	'download-button' => '$1 ನಕಲಿಳಿಸಿ',
	'download-directlink' => 'ನೇರ ಕೊಂಡಿ',
	'title-downloadpage' => 'ನಕಲಿಳಿಸಿ: $1',
	'downloadpage-directlink' => 'ಮುನ್ನೋಟ ನಕಲಿಳಿಸಲು ಇಲ್ಲಿ ಕ್ಲಿಕ್ಕಿಸಿ.',
	'err-snapshotindex' => 'ಮುನ್ನೋಟಗಳ ಪರಿವಿಡಿ ತಾತ್ಕಾಲಿಕವಾಗಿ ಲಭ್ಯವಿಲ್ಲ. ದಯವಿಟ್ಟು ನಂತರ ಪ್ರಯತ್ನಿಸಿ.',
	'err-invalid-repo' => 'ಅಪರಿಚಿತ ಸಂಪುಟ: "$1".',
	'err-invalid-branch' => '"$2" ಸಂಪುಟದಲ್ಲಿ ಅಪರಿಚಿತ ಶಾಖೆ: "$1"',
	'err-nosnapshot' => 'ಪ್ರತಿ ಘಂಟೆಯೂ ಮುನ್ನೋಟಗಳನ್ನು ನಿರ್ಮಿಸಲಾಗುತ್ತದೆ. "$1"ಗಾಗಿ ಮುನ್ನೋಟವನ್ನು ನಿರ್ಮಿಸುವಾಗ ಒಂದು ದೋಷವುಂಟಾಗಿದೆ. ದಯವಿಟ್ಟು ನಂತರ ಪ್ರಯತ್ನಿಸಿ.',
	'err-noupdatelog' => 'ನವೀಕರಣ ದಿನಚರಿ ಸಿಗಲಿಲ್ಲ.',
	'repo-site-link' => 'ಜಾಲತಾಣ',
	'repo-browse-link' => 'ಉಗ್ರಾಣ ಶೋಧ ಮಾಡು',
	'repo-branches-label' => 'ಶಾಖೆಗಳು',
	'repo-lastmoddate-label' => 'ದಿನಾಂಕ:',
	'branches-submit-button' => 'ಅದನ್ನು ಪಡೆ',
	'updatelog-link' => 'ದಿನಚರಿ ನಕಲೆರಿಸು',
	'tablehead-repo' => 'ಉಗ್ರಾಣ',
	'tablehead-snapshots' => 'ಮುನ್ನೋಟ',
	'tablehead-branch' => 'ಶಾಖೆ',
	'tablehead-filesize' => 'ಕಡತದ ಗಾತ್ರ',
	'tablehead-hash' => 'ತಾಳೆಮೊತ್ತಗಳು',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'title-overview' => '스냅샷',
	'title-error' => '오류',
	'title-updatelog' => '올리기 기록',
	'updatelog-intro' => '업데이트 스크립트는 매 시간마다 실행하도록 예약합니다. 다음은 마지막 실행의 콘솔 출력입니다.',
	'updatelog-active' => '업데이트 스크립트는 현재 실행하고 있습니다. 나중에 완료 기록을 확인하세요.',
	'download-button' => '$1 다운로드',
	'download-directlink' => '직접 링크',
	'title-downloadpage' => '다운로드: $1',
	'downloadpage-directlink' => '스냅샷을 다운로드하려면 여기를 클릭하세요.',
	'err-snapshotindex' => '스냅샷 색인을 일시적으로 사용할 수 없습니다. 나중에 다시 시도하세요.',
	'err-invalid-repo' => '알 수 없는 저장소: "$1".',
	'err-invalid-branch' => '알 수 없는 지점: "$2" 저장소의 "$1"',
	'err-nosnapshot' => '스냅샷은 몇 시간마다 생성합니다. "$1"에 대한 스냅샷을 생성하는 동안 오류가 발생했습니다. 나중에 다시 시도하세요.',
	'err-noupdatelog' => '올리기 기록을 찾을 수 없습니다.',
	'repo-site-link' => '웹사이트',
	'repo-browse-link' => '저장소 찾아보기',
	'repo-branches-label' => '지점:',
	'repo-lastmoddate-label' => '날짜:',
	'branches-submit-button' => '얻기!',
	'updatelog-link' => '올리기 기록',
	'tablehead-repo' => '저장소',
	'tablehead-snapshots' => '스냅샷',
	'tablehead-branch' => '지점',
	'tablehead-filesize' => '파일 크기',
	'tablehead-hash' => '체크섬',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title-overview' => 'Schnappschöß',
	'title-error' => 'Fähler',
	'title-updatelog' => 'Logbooch',
	'updatelog-intro' => 'Dat Projramm för der neue Schtand leuf jeede Schtund.
Heh kütt, wat dat Projramm op de Konsole jeschrevve hät.',
	'updatelog-active' => 'Dat Projramm es em Momang aam loufe un brängk heh di Sigg op der neuste Schtand.
Schpääder kanns De heh dann et kumplätte Protokoll dovun beloore.',
	'download-button' => '$1 eronger laade',
	'download-directlink' => 'tiräkte Lenk',
	'title-downloadpage' => '$1 eronger laade',
	'downloadpage-directlink' => 'Donn heh klecke, öm dä Schnapschos eronger ze laade.',
	'err-snapshotindex' => 'Et Verzeijschneß met de Schnapschöß es em Momang nit ze bruche.
Versöhg_et schpääder widder.',
	'err-invalid-repo' => 'En Sammlong „$1“kenne mer nit.',
	'err-invalid-branch' => 'En Afdeilong „$1“kenne mer nit en dä Sammlong „$2“',
	'err-nosnapshot' => 'Schnapschöß wääde alle paa Schtond jemaat.
Wi mer dä Schnapschoß för „$1“jemaat han, es jät scheif jeloufe.
Versöhg_et schpääder norr_ens.',
	'err-noupdatelog' => 'Mer han kei Protokoll jefonge.',
	'repo-site-link' => 'Wäbßaijt',
	'repo-browse-link' => 'En dä Sammlong bläddere',
	'repo-branches-label' => 'Zweije vun dä Versione:',
	'repo-lastmoddate-label' => 'Dattum:',
	'branches-submit-button' => 'Lohß Jonn!',
	'updatelog-link' => 'Logbooch',
	'tablehead-repo' => 'Sammlong',
	'tablehead-snapshots' => 'Schnappschöß',
	'tablehead-branch' => 'Zweisch vun dä Version',
	'tablehead-filesize' => 'Datteiömfang',
	'tablehead-hash' => 'Prööfsumme',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'title-error' => 'Çewtî',
	'repo-site-link' => 'Malper',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'title-overview' => 'Schnappschëss',
	'title-error' => 'Feeler',
	'title-updatelog' => 'Logbuch vun den Aktualisatiounen',
	'updatelog-intro' => "Den Aktualisatiounsscript ass fir all Stonn programméiert. Hei drënner stinn d'Informatiounen iwwer déi lescht Kéier wou dat funktionéiert huet,",
	'updatelog-active' => 'Den Aktualisatiouns-Script leeft elo. Kommt méi spéit zréck fir de komplette Log ze gesinn.',
	'download-button' => '$1 eroflueden',
	'download-directlink' => 'direkte Link',
	'title-downloadpage' => '$1 eroflueden',
	'downloadpage-directlink' => 'Klickt hei fir de Snapshot erofzelueden.',
	'err-nosnapshot' => 'Snapshots ginn all puer Stonne generéiert. Wéi de Snapshot fir "$1" generéiert gouf ass e Feeler geschitt. Probéiert méi w.e.g. nach eng Kéier.',
	'err-noupdatelog' => "D'Logbuch vun den Aktualisatioune gouf net fonnt",
	'repo-site-link' => 'Internetsite',
	'repo-branches-label' => 'Famillje vu Versiounen:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Eroflueden!',
	'updatelog-link' => 'Logbuch aktualiséieren',
	'tablehead-snapshots' => 'Schnappschëss',
	'tablehead-branch' => 'Versiouns-Famill',
	'tablehead-filesize' => 'Gréisst vum Fichier',
	'tablehead-hash' => 'Kontrollzuelen',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'title-error' => 'Klaida',
	'title-updatelog' => 'Atnaujinimų įrašai',
	'download-button' => 'Atsisiųsti $1',
	'download-directlink' => 'tiesioginė nuoroda',
	'title-downloadpage' => 'Atsisiųsti: $1',
	'repo-site-link' => 'Tinklalapis',
	'repo-lastmoddate-label' => 'Data:',
	'tablehead-filesize' => 'Failo dydis',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'title-error' => 'Kļūda',
	'download-button' => 'Lejupielādēt $1',
	'download-directlink' => 'tieša saite',
	'title-downloadpage' => 'Lejupielādēt: $1',
	'tablehead-repo' => 'Repozitorijs',
	'tablehead-filesize' => 'Faila izmērs',
	'tablehead-hash' => 'Kontrolsummas',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title-overview' => 'Снимки',
	'title-error' => 'Грешка',
	'title-updatelog' => 'Дневник на подновувања',
	'updatelog-intro' => 'Скриптата врши поднова на секој час. Подолу е прикажан конзолниот извод од последната поднова.',
	'updatelog-active' => 'Скриптата моментално врши поднова. Навратете се подоцна за целосниот дневник.',
	'download-button' => 'Преземи $1',
	'download-directlink' => 'директна врска:',
	'title-downloadpage' => 'Преземање: $1',
	'downloadpage-directlink' => 'Стиснете тука за да ја преземете снимката.',
	'err-snapshotindex' => 'Индексот на снимки е привремено недостапен. Обидете се подоцна.',
	'err-invalid-repo' => 'Непознато складиште: „$1“.',
	'err-invalid-branch' => 'Непозната гранка: „$1“ во складиштето „$2“.',
	'err-nosnapshot' => 'Снимките се создаваат на секои неколку часа. Се појави грешка при создавањето на снимка на „$1“. Обидете се подоцна.',
	'err-noupdatelog' => 'Не пронајдов дневник на подновувања.',
	'repo-site-link' => 'Мреж. место',
	'repo-browse-link' => 'Прелистајте го складиштето',
	'repo-branches-label' => 'Гранки:',
	'repo-lastmoddate-label' => 'Датум:',
	'branches-submit-button' => 'Преземи',
	'updatelog-link' => 'дневник на подновувања',
	'tablehead-repo' => 'Складиште',
	'tablehead-snapshots' => 'Снимки',
	'tablehead-branch' => 'Гранка',
	'tablehead-filesize' => 'Големина',
	'tablehead-hash' => 'Тараба',
);

/** Malayalam (മലയാളം)
 * @author Akhilan
 * @author Anoopan
 * @author Praveenp
 */
$messages['ml'] = array(
	'title-overview' => 'ലഘുചിത്രം',
	'title-error' => 'പിഴവ്',
	'download-button' => '$1 ആയി ഡൗൺലോഡ് ചെയ്യുക',
	'download-directlink' => 'നേർ കണ്ണി',
	'title-downloadpage' => 'ഡൗൺലോഡ്: $1',
	'downloadpage-directlink' => 'തത്സമയചിത്രം ഡൗൺലോഡ് ചെയ്യുക',
	'repo-site-link' => 'വെബ്‌സൈറ്റ്:',
	'repo-branches-label' => 'ശാഖകൾ:',
	'repo-lastmoddate-label' => 'തീയതി:',
	'tablehead-repo' => 'റെപ്പോസിറ്ററി:',
	'tablehead-branch' => 'ശാഖ',
	'tablehead-filesize' => 'പ്രമാണത്തിന്റെ വലിപ്പം',
	'tablehead-hash' => 'ചെൿസമ്മുകൾ',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title-overview' => 'Snapshot',
	'title-error' => 'Ralat',
	'title-updatelog' => 'Log kemas kini',
	'updatelog-intro' => 'Skrip kemas kini ini dijadualkan untuk berjalan setiap jam sekali. Yang berikut ialah keluaran konsol pada jalanan yang terbaru.',
	'updatelog-active' => 'Skrip kemas kini sedang berjalan. Sila datang balik nanti untuk log yang lengkap.',
	'download-button' => 'Muat turun $1',
	'download-directlink' => 'pautan terus',
	'title-downloadpage' => 'Muat turun: $1',
	'downloadpage-directlink' => 'Klik di sini untuk memuat turun snapshot.',
	'err-snapshotindex' => 'Indeks snapshot tidak tersedia buat sementara waktu. Sila cuba lagi nanti.',
	'err-invalid-repo' => 'Repositori tidak dikenali: "$1".',
	'err-invalid-branch' => 'Cabang tidak dikenali: "$1" dalam repositori "$2".',
	'err-nosnapshot' => 'Snapshot-snapshot ini dijana sekali setiap beberapa jam. Ketika menjana snapshot "$1", berlakunya ralat. Sila cuba lagi nanti.',
	'err-noupdatelog' => 'Tiada log kemas kini yang dijumpai.',
	'repo-site-link' => 'Tapak web',
	'repo-browse-link' => 'Semak seimbas repositori',
	'repo-branches-label' => 'Cabang:',
	'repo-lastmoddate-label' => 'Tarikh:',
	'branches-submit-button' => 'Dapatkannya!',
	'updatelog-link' => 'log kemas kini',
	'tablehead-repo' => 'Repositori',
	'tablehead-snapshots' => 'Snapshot',
	'tablehead-branch' => 'Cabang',
	'tablehead-filesize' => 'Saiz fail',
	'tablehead-hash' => 'Hash',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'title-overview' => 'Ritratti istantanji',
	'title-error' => 'Żball',
	'title-updatelog' => 'Aġġorna r-reġistru',
	'updatelog-intro' => "L-aġġornament iseħħ kull siegħa. Hawn taħt hemm ir-riżultat tal-''console'' tal-aħħar aġġornament.",
	'updatelog-active' => 'L-aġġornament qiegħed isir bħalissa. Ejja iktar tard għar-reġistru sħiħ.',
	'download-button' => 'Niżżel $1',
	'download-directlink' => 'ħolqa diretta',
	'title-downloadpage' => 'Niżżel: $1',
	'downloadpage-directlink' => 'Agħfas hawnhekk sabiex tniżżel ir-ritratt istantanju.',
	'err-snapshotindex' => "Indiċi tar-ritratt istantanju attwalment mhuwiex disponibbli. Jekk jogħġbok erġa' pprova iktar tard.",
	'err-invalid-repo' => 'Repożitorju mhux magħruf: "$1".',
	'err-invalid-branch' => 'Sezzjoni mhux magħrufa: "$1" fir-repożitorju "$2".',
	'err-nosnapshot' => 'Ir-ritratti istantanji huma ġenerati kull ftit sigħat. Waqt il-ġenerazzjoni tar-ritratti istantanji għal "$1", inqalgħet problema. Erġa\' pprova iktar tard.',
	'err-noupdatelog' => 'L-ebda reġistru tal-aġġornament ma nstab.',
	'repo-site-link' => 'Sit elettroniku',
	'repo-browse-link' => 'Qalleb fir-repożitorju',
	'repo-branches-label' => 'Sezzjonijiet:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Iksbu!',
	'updatelog-link' => 'reġistru tal-aġġornament',
	'tablehead-repo' => 'Repożitorju',
	'tablehead-snapshots' => 'Ritratti istantanji',
	'tablehead-branch' => 'Sezzjoni',
	'tablehead-filesize' => 'Daqs tal-fajl',
	'tablehead-hash' => 'Checksums',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'tablehead-hash' => 'Kontrollsummer',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'title-error' => 'Fähler',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'title-overview' => 'किपात',
	'title-error' => 'इरर',
	'title-updatelog' => 'अपदेत धलः',
	'downloadpage-directlink' => 'किपा दाउनलोद यायेत थन तियादिसँ।',
	'err-noupdatelog' => 'अपदेत धलः मलूगु।',
	'repo-site-link' => 'जाःथाय्',
	'repo-branches-label' => 'कचात:',
	'repo-lastmoddate-label' => 'तिथि',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Fout',
	'title-updatelog' => 'Updatelogboek',
	'updatelog-intro' => 'Het updatescript wordt volgens planning ieder uur uitgevoerd. Hieronder is de uitvoer van de console van de laatste uitvoering te bekijken.',
	'updatelog-active' => 'Het updatescript wordt op het moment uitgevoerd. Kom op een later moment terug voor het complete logboek.',
	'download-button' => '$1 downloaden',
	'download-directlink' => 'directe koppeling',
	'title-downloadpage' => 'Downloaden: $1',
	'downloadpage-directlink' => 'Klik hier om het snapshot te downloaden.',
	'err-snapshotindex' => 'De snapshotindex is tijdelijk niet beschikbaar. Probeer het later opnieuw.',
	'err-invalid-repo' => 'Onbekende repository: "$1".',
	'err-invalid-branch' => 'Onbekende branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'De snapshots worden iedere paar uur aangemaakt. Tijdens het aanmaken van het snapshot voor "$1" is een fout opgetreden. Probeer het later opnieuw.',
	'err-noupdatelog' => 'Er is geen updatelogboek beschikbaar.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repository bekijken',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Downloaden!',
	'updatelog-link' => 'updatelogboek',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'Bestandsgrootte',
	'tablehead-hash' => 'Hash',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'title-overview' => 'Instantanèus',
	'title-error' => 'Error',
	'title-updatelog' => 'Metre a jorn lo jornal',
	'repo-site-link' => 'Site web',
	'repo-branches-label' => 'Brancas :',
	'repo-lastmoddate-label' => 'Data :',
	'branches-submit-button' => "L'obténer !",
	'updatelog-link' => 'metre a jorn lo jornal',
	'tablehead-repo' => 'Depaus',
	'tablehead-snapshots' => 'Instantanèus',
	'tablehead-branch' => 'Branca',
	'tablehead-filesize' => 'Talha del fichièr',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'title-overview' => 'ପ୍ରତିଛବି',
	'title-error' => 'ଭୁଲ',
	'title-updatelog' => 'ତାଲିକା ଅପଡେଟ କରିବେ',
	'updatelog-active' => 'ଅପଡେଟ ସ୍କ୍ରିପ୍ଟଟି ବର୍ତ୍ତମାନ ଚାଲୁଛି । ସମ୍ପୂର୍ଣ ତାଲିକା ପାଇଁ ଆଉ କିଛି ସମୟ ପରେ ଆସନ୍ତୁ ।',
	'download-button' => '$1 ଡାଉନଲୋଡ କରିବେ',
	'download-directlink' => 'ସିଧା ଲିଙ୍କ',
	'title-downloadpage' => 'ଡାଉନଲୋଡ କରିବେ :$1',
	'downloadpage-directlink' => 'ପ୍ରତିଛବିଟିକୁ ଡାଉନଲୋଡ କରିବା ପାଇଁ ଏଠାରେ କ୍ଲିକ କରନ୍ତୁ ।',
	'err-snapshotindex' => 'ପ୍ରତିଛବି ସୂଚୀ ଏବେ ଉପଲବ୍ଧ ନାହିଁ । ଦୟାକରି କିଛି ସମୟ ପରେ ପୁନର୍ବାର ଚେଷ୍ଟା କରନ୍ତୁ ।',
	'err-invalid-repo' => 'ଅଜଣା ଭଣ୍ଡାର : "$1" ।',
	'err-invalid-branch' => '"$2" ଭଣ୍ଡାର ମଧ୍ୟରେ ଅଜଣା ଶାଖା :"$1" ।',
	'err-nosnapshot' => 'ପ୍ରତିଛବିଗୁଡିକ ପ୍ରତି ଘଣ୍ଟାରେ ବାହାରେ । "$1" ପାଇଁ ପ୍ରତିଛବି ବାହାର ହେଉଥିବା ସମୟରେ କିଛି ଅସୁବିଧା ହେଲା । ଦୟାକରି ଆଉ କିଛି ସମୟ ପରେ ପୁନର୍ବାର ଚେଷ୍ଟା କରନ୍ତୁ ।',
	'err-noupdatelog' => 'କୌଣସି ଅପଡେଟ ତାଲିକା ମିଳିଲା ନାହିଁ',
	'repo-site-link' => 'ୱେବସାଇଟ',
	'repo-browse-link' => 'ଭଣ୍ଡାରରେ ଖୋଜିବେ',
	'repo-branches-label' => 'ଶାଖାଗୁଡ଼ିକ:',
	'repo-lastmoddate-label' => 'ତାରିଖ:',
	'branches-submit-button' => 'ଏହାକୁ ନେବେ !',
	'updatelog-link' => 'ତାଲିକା ଅପଡେଟ କରିବେ',
	'tablehead-repo' => 'ଭଣ୍ଡାର',
	'tablehead-snapshots' => 'ପ୍ରତିଛବି',
	'tablehead-branch' => 'ଶାଖା',
	'tablehead-filesize' => 'ଫାଇଲ ଆକାର',
	'tablehead-hash' => 'ଚେକସମ',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'title-error' => 'Fehla',
);

/** Polish (polski)
 * @author Przemub
 * @author Woytecr
 */
$messages['pl'] = array(
	'title-overview' => 'Migawki',
	'title-error' => 'Błąd',
	'title-updatelog' => 'Rejestr aktualizacji',
	'updatelog-intro' => 'Ten skrypt aktualizacji został zaplanowany tak, aby uruchamiał się co godzinę. Poniżej znajduje się wyjście konsoli podczas ostatniego uruchomienia.',
	'updatelog-active' => 'Skrypt aktualizacyjny jest aktualnie uruchomiony. Zobacz później aby zobaczyć gotowy rejestr.',
	'download-button' => 'Pobierz $1',
	'download-directlink' => 'link bezpośredni',
	'title-downloadpage' => 'Pobierz: $1',
	'downloadpage-directlink' => 'Kliknij tutaj, aby pobrać migawkę.',
	'err-snapshotindex' => 'Indeks migawek tymczasowo niedostępny. Spróbuj ponownie później.',
	'err-invalid-repo' => 'Nieznane repozytorium: "$1".',
	'err-invalid-branch' => 'Nieznany branch: "$1" w repozytorium "$2".',
	'err-nosnapshot' => 'Migawki są generowane co kilka godzin. Podczas generowania migawki "$1" wystąpił błąd. Spróbuj ponownie później.',
	'err-noupdatelog' => 'Rejestr aktualizacji nie został znaleziony.',
	'repo-site-link' => 'Strona internetowa',
	'repo-browse-link' => 'Przeglądaj repozytorium',
	'repo-branches-label' => 'Branch:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Pobierz ją!',
	'updatelog-link' => 'rejestr aktualizacji',
	'tablehead-repo' => 'Repozytorium',
	'tablehead-snapshots' => 'Migawki',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'Rozmiar pliku',
	'tablehead-hash' => 'Sumy kontrolne',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'title-overview' => 'Fòto',
	'title-error' => 'Eror',
	'title-updatelog' => 'Agiorné ël registr',
	'updatelog-intro' => "Ël copion d'agiornament a l'é programà për marcé tute j'ore. Sì-sota a-i é la surtìa dla plancia dl'ùltima esecussion.",
	'updatelog-active' => "Ël copion d'agiornament a l'é an camin ch'a marcia. Ch'a torna pi tard për ël registr complet.",
	'download-button' => 'Dëscaria $1',
	'download-directlink' => 'liura direta',
	'title-downloadpage' => 'Dëscaria: $1',
	'downloadpage-directlink' => 'Sgnaca sì për dëscarié la fòto.',
	'err-snapshotindex' => "Tàula dle fòto al moment nen disponìbij. Për piasì, ch'a preuva torna pi tard.",
	'err-invalid-repo' => 'Depòsit pa conossù: "$1".',
	'err-invalid-branch' => 'Session pa conossùa: "$1" ant ël depòsit "$2".',
	'err-nosnapshot' => "Le plance a son generà minca pòche ore. Antramentre ch'as generavo le plance për «$1», a l'é capitaje n'eror. Për piasì, ch'a preuva torna pi tard.",
	'err-noupdatelog' => 'Gnun agiornament ëd registr a son stàit trovà.',
	'repo-site-link' => "Sit dl'aragnà",
	'repo-browse-link' => 'Navighé ant ël depòsit',
	'repo-branches-label' => 'Session:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Otenlo!',
	'updatelog-link' => 'agiorné el registr',
	'tablehead-repo' => 'Depòsit',
	'tablehead-snapshots' => 'Fòto',
	'tablehead-branch' => 'Session',
	'tablehead-filesize' => "Amzure dl'archivi",
	'tablehead-hash' => 'Gifre ëd contròl',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'title-overview' => 'انځورټوټې',
	'title-error' => 'تېروتنه',
	'download-button' => 'ښکته کول $1',
	'download-directlink' => 'نېغه تړنه',
	'title-downloadpage' => 'ښکته کول: $1',
	'repo-site-link' => 'وېبځی',
	'repo-branches-label' => 'څانګې:',
	'repo-lastmoddate-label' => 'نېټه:',
	'branches-submit-button' => 'ترلاسه يې کړه!',
	'tablehead-snapshots' => 'انځورټوټې',
	'tablehead-branch' => 'څانګه',
	'tablehead-filesize' => 'د دوتنې کچه',
);

/** Portuguese (português)
 * @author Luckas
 * @author Sarilho1
 */
$messages['pt'] = array(
	'title-error' => 'Erro',
	'repo-lastmoddate-label' => 'Data:',
	'tablehead-filesize' => 'Tamanho do arquivo',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 * @author Luckas
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'title-overview' => 'Instantâneas',
	'title-error' => 'Erro',
	'title-updatelog' => 'Registro da atualização',
	'updatelog-intro' => 'O script de atualização está programado para ser executado a cada hora. A seguir, o resultado do console após a última execução.',
	'updatelog-active' => 'O script de atualização está sendo executado. Volte mais tarde para ver o registro completo.',
	'download-button' => 'Baixar $1',
	'download-directlink' => 'link direto',
	'title-downloadpage' => 'Baixar: $1',
	'downloadpage-directlink' => 'Clique aqui para baixar a instantânea.',
	'err-snapshotindex' => 'O índice de instantâneas está temporariamente indisponível. Tente novamente mais tarde.',
	'err-invalid-repo' => 'Repositório desconhecido: "$1"',
	'err-invalid-branch' => 'Ramo desconhecido: "$1" no repositório "$2".',
	'err-nosnapshot' => 'As instantâneas são geradas a cada poucas horas. Ao gerar a instantânea para "$1", ocorreu um erro. Tente novamente mais tarde.',
	'err-noupdatelog' => 'Nenhum registro de atualização foi encontrado.',
	'repo-site-link' => 'Sítio Web',
	'repo-browse-link' => 'Examinar repositório',
	'repo-branches-label' => 'Ramos:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Conseguiu!',
	'updatelog-link' => 'registro de atualização',
	'tablehead-repo' => 'Repositório',
	'tablehead-snapshots' => 'Instantâneas',
	'tablehead-branch' => 'Ramo',
	'tablehead-filesize' => 'Tamanho do arquivo',
	'tablehead-hash' => 'Somas de verificação',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'title-overview' => 'Instantanee',
	'title-error' => 'Eroare',
	'title-updatelog' => 'Jurnal actualizări',
	'updatelog-intro' => 'Scriptul de actualizare este programat să ruleze în fiecare oră. Mai jos se află consola de ieșire a ultimei rulări.',
	'updatelog-active' => 'Scriptul de actualizare se află în execuție. Reveniți mai târziu pentru jurnalul complet.',
	'download-button' => 'Descărcare $1',
	'download-directlink' => 'legătură directă',
	'title-downloadpage' => 'Descărcare: $1',
	'downloadpage-directlink' => 'Faceți clic aici pentru a descărca instantaneul.',
	'err-snapshotindex' => 'Indexul instantaneilor este temporar indisponibil. Vă rugăm să reîncercați mai târziu.',
	'err-invalid-repo' => 'Depozit necunoscut: „$1”.',
	'err-invalid-branch' => 'Ramură necunoscută: „$1” în depozitul „$2”.',
	'err-nosnapshot' => 'Instantaneele sunt generate la fiecare câteva ore. În timpul generării instantaneului pentru „$1” a apărut o eroare. Vă rugăm să reîncercați mai târziu.',
	'err-noupdatelog' => 'Nu s-a găsit niciun jurnal al actualizărilor.',
	'repo-site-link' => 'Site web',
	'repo-browse-link' => 'Răsfoire depozit',
	'repo-branches-label' => 'Ramuri:',
	'repo-lastmoddate-label' => 'Dată:',
	'branches-submit-button' => 'Ia-l!',
	'updatelog-link' => 'actualizare jurnal',
	'tablehead-repo' => 'Depozit',
	'tablehead-snapshots' => 'Instantanee',
	'tablehead-branch' => 'Ramură',
	'tablehead-filesize' => 'Mărime fișier',
	'tablehead-hash' => 'Sume de control',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'title-overview' => 'Istandenèe',
	'title-error' => 'Errore',
	'title-updatelog' => 'Archivije de le carecaminde',
	'updatelog-intro' => "'U script de aggiornamende jè schedulate pe essere eseguite ogne ore. Sotte ste 'u resultate de l'urtema esecuzione.",
	'updatelog-active' => "'U script de aggiornamende jndr'à stu mumende jè in esecuzione. Tuèrne cchiù tarde pe l'archivije comblete.",
	'download-button' => 'Scareche $1',
	'download-directlink' => 'collegamende dirette',
	'title-downloadpage' => 'Scareche: $1',
	'downloadpage-directlink' => "Cazze aqquà pe scarecà l'istandanèe.",
	'err-snapshotindex' => "Indice de l'istandanèe non gè disponibbele temboraneamende. Pe piacere pruève arrete cchiù tarde.",
	'err-invalid-repo' => 'Archivije scanusciute: "$1".',
	'err-invalid-branch' => 'Rame scanusciute; "$1" jndr\'à l\'archivije "$2".',
	'err-nosnapshot' => "Le istandanèe avènene generate ogne picche ore. Mendre ca avène generate l'istandanèe pe \"\$1\", s'ha verificate 'n'errore. Pe piacere pruève arrete cchiù tarde.",
	'err-noupdatelog' => 'Nisciune archivije de le carecaminde ha state acchiate.',
	'repo-site-link' => 'Site web',
	'repo-browse-link' => "Sfoglie l'archivije",
	'repo-branches-label' => 'Rame:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => 'Pigghiale!',
	'updatelog-link' => "careche l'archivije",
	'tablehead-repo' => 'Archivije',
	'tablehead-snapshots' => 'Istandenèe',
	'tablehead-branch' => 'Rame',
	'tablehead-filesize' => "Dimenzione d'u file",
	'tablehead-hash' => 'Condrolle',
);

/** Russian (русский)
 * @author DCamer
 * @author Salam
 */
$messages['ru'] = array(
	'title-overview' => 'Снимки',
	'title-error' => 'Ошибка',
	'title-updatelog' => 'Журнал обновления',
	'updatelog-intro' => 'Сценарий обновления запускается каждый час. Ниже приводится отчет из консоли последнего прогона.',
	'updatelog-active' => 'В настоящее время выполняется сценарий обновления. Зайдите позже чтобы увидеть весь журнал.',
	'download-button' => 'Скачать $1',
	'download-directlink' => 'прямая ссылка',
	'title-downloadpage' => 'Скачать: $1',
	'downloadpage-directlink' => 'Нажмите здесь, чтобы скачать моментальный снимок.',
	'err-snapshotindex' => 'Индекс снимка временно недоступен. Пожалуйста, повторите попытку позже.',
	'err-invalid-repo' => 'Неизвестный репозиторий: "$1".',
	'err-invalid-branch' => 'Неизвестная ветвь: "$1" в репозитарии "$2".',
	'err-nosnapshot' => 'Снимки создаются каждые несколько часов. Во время создания моментального снимка для "$1" произошла ошибка. Пожалуйста, повторите попытку позже.',
	'err-noupdatelog' => 'Журнал обновления не найден.',
	'repo-site-link' => 'Веб-сайт',
	'repo-browse-link' => 'Обзор репозитория',
	'repo-branches-label' => 'Ветви:',
	'repo-lastmoddate-label' => 'Дата:',
	'branches-submit-button' => 'Заполучить!',
	'updatelog-link' => 'журнал обновления',
	'tablehead-repo' => 'Репозиторий',
	'tablehead-snapshots' => 'Снимки',
	'tablehead-branch' => 'Ветвь',
	'tablehead-filesize' => 'Размер файла',
	'tablehead-hash' => 'Контрольные суммы',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'title-overview' => 'ක්ෂණික ඡායාරූප',
	'title-error' => 'දෝෂය',
	'title-updatelog' => 'යාවත්කාලීන ලඝු සටහන',
	'download-button' => '$1 බාගන්න',
	'download-directlink' => 'සෘජු සබැඳිය',
	'title-downloadpage' => 'බාගන්න: $1',
	'downloadpage-directlink' => 'ක්ෂණික ඡායාරූපය බාගැනීමට මෙතන ක්ලික් කරන්න.',
	'err-snapshotindex' => 'Snapshot සුචිය තාවකාලිකව ලබා ගත නොහැක. කරුණාකර පසුව උත්සහ කරන්න.',
	'err-invalid-repo' => 'නොදන්නා කෝෂ්ඨාගාරය: "$1".',
	'err-invalid-branch' => 'නොදන්නා ශාඛාව: "$1" "$2" කෝෂ්ඨාගාරයෙහි.',
	'err-noupdatelog' => 'කිසිදු යාවත්කාලීන ලඝු සටහනක් හමු නොවුණි.',
	'repo-site-link' => 'වෙබ් අඩවිය',
	'repo-browse-link' => 'කෝෂ්ඨාගාරය ගවේෂණය කරන්න',
	'repo-branches-label' => 'ශාඛා:',
	'repo-lastmoddate-label' => 'දිනය:',
	'branches-submit-button' => 'එය ලබාගන්න!',
	'updatelog-link' => 'යාවත්කාලීන ලඝු සටහන',
	'tablehead-repo' => 'කෝෂ්ඨාගාරය',
	'tablehead-snapshots' => 'ක්ෂණික ඡායාරූප',
	'tablehead-branch' => 'ශාඛාව',
	'tablehead-filesize' => 'ගොනුවේ විශාලත්වය',
	'tablehead-hash' => 'අවේක්ෂා ඓක්‍ය',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'title-overview' => 'Posnetki',
	'title-error' => 'Napaka',
	'title-updatelog' => 'Dnevnik posodobitev',
	'download-button' => 'Prenesi $1',
	'download-directlink' => 'neposredna povezava',
	'title-downloadpage' => 'Prenesi: $1',
	'repo-site-link' => 'Spletna stran',
	'repo-branches-label' => 'Podveje:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Pridobi!',
	'updatelog-link' => 'dnevnik posodobitev',
	'tablehead-branch' => 'Podveja',
	'tablehead-filesize' => 'Velikost datoteke',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'title-overview' => 'Ka qaadis',
	'title-error' => 'Qalad',
	'title-updatelog' => 'Dib u howl galin astaanta',
	'updatelog-intro' => 'Dib u howl galinta script si uu saacad walba ushaqeeyo. Hoos waxaa ka heli kartaa wax lagu soo saaro ka shaqayn siintii ugu dambaysay.',
	'updatelog-active' => 'Dib u howl galin script waa kan shaqaynaya hadda. Soo laabo hadhoow si aad isu diiwaan galiso.',
	'download-button' => 'Soo daji $1',
	'download-directlink' => 'Link toos ah',
	'title-downloadpage' => 'Soo daji $1',
	'downloadpage-directlink' => 'Giji halkaan si aad ugaliso wixii la duubay',
	'err-snapshotindex' => 'Tilmaame qaade lama heli karo hadda. isku day mar kale fadlan.',
	'err-invalid-repo' => 'kayd aan la aqoon: "$1".',
	'err-invalid-branch' => 'Farac aan la aqoon: "$1" ee kayd "$2".',
	'err-nosnapshot' => 'Saacada yar kasta waxaa la qaadaa sawiro. waxaa dhacday cilad markii la sameeynayey qaadidda "$1", fadlan isku day mar kale.',
	'err-noupdatelog' => 'lama helin wax diiwaan gashay ee dub u howl galin ah.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Browse kaydka',
	'repo-branches-label' => 'Faracyada:',
	'repo-lastmoddate-label' => 'Taariikh:',
	'branches-submit-button' => 'Hel!',
	'updatelog-link' => 'Dib u howl galin astaanta',
	'tablehead-repo' => 'Kaydka',
	'tablehead-snapshots' => 'Ka qaadis',
	'tablehead-branch' => 'Farac',
	'tablehead-filesize' => 'Cabirka fileka',
	'tablehead-hash' => 'Lagu kalsoonaan karo',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'title-overview' => 'Pamje',
	'title-error' => 'Gabim',
	'title-updatelog' => 'Përditëso shënimin',
	'download-button' => 'Shkarko $1',
	'download-directlink' => 'Lidhja e drejtpërdrejtë',
	'title-downloadpage' => 'Shkarko: $1',
	'downloadpage-directlink' => 'Kliko këtu për të shkarkuar pamjen.',
	'err-invalid-repo' => 'Depo e panjohur: "$1".',
	'err-invalid-branch' => 'Degë e panjohur: "$1" në depon "$2".',
	'err-noupdatelog' => 'Nuk u gjet ndonjë përditësim.',
	'repo-site-link' => 'Uebfaqja',
	'repo-browse-link' => 'Depoja e shfletuesit',
	'repo-branches-label' => 'Degët:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Merreni atë!',
	'updatelog-link' => 'përditëso shënimin',
	'tablehead-repo' => 'Depoja',
	'tablehead-snapshots' => 'Pamje',
	'tablehead-branch' => 'Dega',
	'tablehead-filesize' => 'Madhësia e skedarit',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title-overview' => 'Снимци',
	'title-error' => 'Грешка',
	'title-updatelog' => 'Дневник ажурирања',
	'updatelog-intro' => 'Скрипт ажурира сваког сата. Испод је приказан извод конзоле од последњег ажурирања.',
	'updatelog-active' => 'Скрипт је тренутно покренут. Навратите касније за целокупан дневник.',
	'download-button' => 'Преузми $1',
	'download-directlink' => 'директна веза',
	'title-downloadpage' => 'Преузимање: $1',
	'downloadpage-directlink' => 'Кликните овде да преузмете снимак.',
	'err-snapshotindex' => 'Попис снимака је привремено недоступан. Покушајте касније.',
	'err-invalid-repo' => 'Непозната ризница: „$1“.',
	'err-invalid-branch' => 'Непозната грана: „$1“ у ризници „$2“.',
	'err-nosnapshot' => 'Снимци се стварају сваких неколико сати. Дошло је до грешке при стварању снимка „$1“. Покушајте касније.',
	'err-noupdatelog' => 'Не могу да пронађем дневник ажурирања.',
	'repo-site-link' => 'Сајт',
	'repo-browse-link' => 'Прегледај ризницу',
	'repo-branches-label' => 'Гране:',
	'repo-lastmoddate-label' => 'Датум:',
	'branches-submit-button' => 'Преузми',
	'updatelog-link' => 'дневник ажурирања',
	'tablehead-repo' => 'Ризница',
	'tablehead-snapshots' => 'Снимци',
	'tablehead-branch' => 'Грана',
	'tablehead-filesize' => 'Величина датотеке',
	'tablehead-hash' => 'Контролни збир',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title-overview' => 'Snimci',
	'title-error' => 'Greška',
	'title-updatelog' => 'Dnevnik ažuriranja',
	'updatelog-intro' => 'Skript ažurira svakog sata. Ispod je prikazan izvod konzole od poslednjeg ažuriranja.',
	'updatelog-active' => 'Skript je trenutno pokrenut. Navratite kasnije za celokupan dnevnik.',
	'download-button' => 'Preuzmi $1',
	'download-directlink' => 'direktna veza',
	'title-downloadpage' => 'Preuzimanje: $1',
	'downloadpage-directlink' => 'Kliknite ovde da preuzmete snimak.',
	'err-snapshotindex' => 'Popis snimaka je privremeno nedostupan. Pokušajte kasnije.',
	'err-invalid-repo' => 'Nepoznata riznica: „$1“.',
	'err-invalid-branch' => 'Nepoznata grana: „$1“ u riznici „$2“.',
	'err-nosnapshot' => 'Snimci se stvaraju svakih nekoliko sati. Došlo je do greške pri stvaranju snimka „$1“. Pokušajte kasnije.',
	'err-noupdatelog' => 'Ne mogu da pronađem dnevnik ažuriranja.',
	'repo-site-link' => 'Sajt',
	'repo-browse-link' => 'Pregledaj riznicu',
	'repo-branches-label' => 'Grane:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Preuzmi',
	'updatelog-link' => 'dnevnik ažuriranja',
	'tablehead-repo' => 'Riznica',
	'tablehead-snapshots' => 'Snimci',
	'tablehead-branch' => 'Grana',
	'tablehead-filesize' => 'Veličina datoteke',
	'tablehead-hash' => 'Kontrolni zbir',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'title-overview' => 'Ögonblicksbilder',
	'title-error' => 'Fel',
	'title-updatelog' => 'Uppdatera logg',
	'updatelog-intro' => 'Uppdateringsskriptet har schemalagts att köra varje timme. Nedan är konsolproduktionen från den senaste körningen.',
	'updatelog-active' => 'Uppdateringsskriptet körs för närvarande. Kom tillbaka senare för den kompletta loggen.',
	'download-button' => 'Ladda ned $1',
	'download-directlink' => 'direkt länk',
	'title-downloadpage' => 'Ladda ned: $1',
	'downloadpage-directlink' => 'Klicka här för att ladda ned ögonblicksbilden.',
	'err-snapshotindex' => 'Indexet över ögonblicksbilder är tillfälligt otillgänligt. Vänligen försök igen senare.',
	'err-invalid-repo' => 'Okänd databas: "$1".',
	'err-invalid-branch' => 'Okänd gren: "$1" i databasen "$2".',
	'err-nosnapshot' => 'Ögonblicksbilder genereras varannan timme. Samtidigt som de skapade ögonblicksbilden för "$1" uppstod ett fel. 
Vänligen försök igen senare.',
	'err-noupdatelog' => 'Ingen uppdateringslogg hittades.',
	'repo-site-link' => 'Webbplats',
	'repo-browse-link' => 'Bläddra i databasen',
	'repo-branches-label' => 'Grenar:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Skaffa det!',
	'updatelog-link' => 'uppdateringslogg',
	'tablehead-repo' => 'Databas',
	'tablehead-snapshots' => 'Ögonblicksbilder',
	'tablehead-branch' => 'Gren',
	'tablehead-filesize' => 'Filstorlek',
	'tablehead-hash' => 'Kontrollsummor',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'repo-site-link' => 'Tovuti',
	'repo-lastmoddate-label' => 'Tarehe:',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'title-overview' => 'நிழற்பட நொடிப்பெடுப்புகள்',
	'title-error' => 'பிழை',
	'title-updatelog' => 'புதுப்பித்தல் பதிவு',
	'download-button' => '$1 ஐத் தரவிறக்கு',
	'download-directlink' => 'நேரடி இணைப்பு',
	'title-downloadpage' => 'தரவிறக்கவும்: $1',
	'downloadpage-directlink' => 'நிழற்பட நொடிப்பெடுப்பைத் தரவிறக்க இங்கே சொடுக்கவும்.',
	'err-noupdatelog' => 'புதுப்பித்தல் பதிவு எதுவும் கண்டுபிடிக்கப்படவில்லை.',
	'repo-site-link' => 'இணையத்தளம்',
	'repo-branches-label' => 'கிளைகள்:',
	'repo-lastmoddate-label' => 'நாள்:',
	'branches-submit-button' => 'அதைப் பெறுக!',
	'updatelog-link' => 'புதுப்பித்தல் பதிவு',
	'tablehead-snapshots' => 'நிழற்பட நொடிப்பெடுப்புகள்',
	'tablehead-branch' => 'கிளை',
	'tablehead-filesize' => 'கோப்பு அளவு',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'title-error' => 'పొరపాటు',
	'download-directlink' => 'నేరు లంకె',
	'repo-site-link' => 'జాలగూడు',
	'repo-lastmoddate-label' => 'తేది:',
	'updatelog-link' => 'తాజాకరణల చిట్టా',
	'tablehead-filesize' => 'దస్త్రపు పరిమాణం',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'title-overview' => 'Mga kuha ng kamera',
	'title-error' => 'Kamalian',
	'title-updatelog' => 'Isapanahon ang talaan',
	'updatelog-intro' => 'Ang panitik ng pagsasapanahon ay nakatakdang umandor tuwing isang oras. Nasa ibaba ang lumabas sa entrepanyo mula sa huling pag-andar.',
	'updatelog-active' => 'Kasalukuyang umaandar ang panitik na pangpagsasapanahon. Bumalik mamaya para sa buong pagtatala.',
	'download-button' => 'Ikargang paibaba ang $1',
	'download-directlink' => 'tuwirang kawing',
	'title-downloadpage' => 'Ikargang paibaba: $1',
	'downloadpage-directlink' => 'Pindutin dito upang ikargang paibaba ang kuha ng kamera.',
	'err-snapshotindex' => 'Pansamantalang hindi makuha ang talatuntunan ng kuha ng kamera. Subukan na lang ulit mamaya.',
	'err-invalid-repo' => 'Hindi nakikilalang taguan: "$1".',
	'err-invalid-branch' => 'Hindi nakikilalang sangay: "$1" na nasa loob ng taguang "$2".',
	'err-nosnapshot' => 'Ang mga kuha ng kamera ay nalilikha tuwing ilang mga oras. Naganap ang isang kamalian habang nililikha ang kuha ng kamera para sa "$1". Subukan ulit mamaya.',
	'err-noupdatelog' => 'Walang natagpuang tala ng pagsasapanahon.',
	'repo-site-link' => 'Websayt',
	'repo-browse-link' => 'Tumingin-tingin sa repositoryo',
	'repo-branches-label' => 'Mga sangay:',
	'repo-lastmoddate-label' => 'Petsa:',
	'branches-submit-button' => 'Kunin iyan!',
	'updatelog-link' => 'isapanahon ang talaan',
	'tablehead-repo' => 'Repositoryo',
	'tablehead-snapshots' => 'Mga kuha ng kamera',
	'tablehead-branch' => 'Sangay',
	'tablehead-filesize' => 'Sukat ng talaksan',
	'tablehead-hash' => 'Suriin ang mga suma',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title-error' => 'Сәһв',
	'repo-lastmoddate-label' => 'Тарых:',
	'tablehead-filesize' => 'Фајли памјә',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'title-error' => 'Error',
	'repo-lastmoddate-label' => 'ⴰⴽⵓⴷ:',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'title-overview' => 'كەسمە سۈرەت',
	'title-error' => 'خاتالىق',
	'title-updatelog' => 'كۈندىلىك خاتىرىنى يېڭىلا',
	'updatelog-intro' => 'بۇ يېڭىلاش قوليازمىسىنى ھەر سائەتتە بىر قېتىم ئىجرا قىلىدۇ. تۆۋەندىكىسى ئەڭ ئاخىرقى قېتىم ئىجرا قىلغان تىزگىن سۇپىسى چىقىرىشى.',
	'updatelog-active' => 'بۇ يېڭىلاش قوليازمىسى ئىجرا قىلىنىۋاتىدۇ. سەل تۇرۇپ قايتىپ كېلىپ تولۇق كۈندىلىك خاتىرىنى كۆرۈڭ.',
	'download-button' => '$1 چۈشۈر',
	'download-directlink' => 'بىۋاستە ئۇلانما',
	'title-downloadpage' => 'چۈشۈر: $1',
	'downloadpage-directlink' => 'بۇ جاي چېكىلسە كەسمە سۈرەتنى چۈشۈرىدۈ.',
	'err-snapshotindex' => 'كەسمە سۈرەت ئىندېكىسىنى ۋاقتىنچە ئىشلەتكىلى بولمايدۇ. سەل تۇتۇپ قايتا سىناڭ.',
	'err-invalid-repo' => 'يوچۇن خەزىنە: "$1".',
	'err-invalid-branch' => 'خەزىنە "$2" دىكى يوچۇن تارماق: "$1"',
	'err-nosnapshot' => 'كەسمە سۈرەت ھەر بىر قانچە سائەتتە بىر قېتىم ھاسىل قىلىنىدۇ. "$1" ئۈچۈن كەسمە سۈرەت ھاسىل قىلىۋاتقاندا خاتالىق كۆرۈلدى. سەل تۇرۇپ قايتا سىناڭ.',
	'err-noupdatelog' => 'ھېچقانداق يېڭىلاش خاتىرىسى تېپىلمىدى.',
	'repo-site-link' => 'تورتۇرا',
	'repo-browse-link' => 'خەزىنەگە كۆز يۈگۈرت',
	'repo-branches-label' => 'تارماقلار:',
	'repo-lastmoddate-label' => 'چېسلا:',
	'branches-submit-button' => 'ئۇنىڭغا ئېرىش!',
	'updatelog-link' => 'كۈندىلىك خاتىرىنى يېڭىلا',
	'tablehead-repo' => 'خەزىنە',
	'tablehead-snapshots' => 'كەسمە سۈرەت',
	'tablehead-branch' => 'تارماق',
	'tablehead-filesize' => 'ھۆججەت چوڭلۇقى',
	'tablehead-hash' => 'تەكشۈرۈش يىغىندا',
);

/** Ukrainian (українська)
 * @author A1
 * @author Base
 * @author SteveR
 * @author Ua2004
 */
$messages['uk'] = array(
	'title-overview' => 'Знімки',
	'title-error' => 'Помилка',
	'title-updatelog' => 'Журнал оновлень',
	'updatelog-intro' => 'Сценарій оновлення запускається щогодини. Нижче наведений звіт з консолі останнього запуску.',
	'updatelog-active' => 'Виконується сценарій оновлення. Зайдіть пізніше, щоб отримати весь журнал.',
	'download-button' => 'Завантажити $1',
	'download-directlink' => 'прямі посилання',
	'title-downloadpage' => 'Завантажити:$1',
	'downloadpage-directlink' => 'Натисніть тут, щоб завантажити знімок.',
	'err-snapshotindex' => 'Індекс знімка тимчасово недоступний. Будь ласка, повторіть спробу пізніше.',
	'err-invalid-repo' => 'Невідомий репозиторій: "$1".',
	'err-invalid-branch' => 'Невідома гілка: "$1" у репозиторії "$2".',
	'err-nosnapshot' => 'Знімки створюються кожні кілька годин. Під час створення знімка для "$1" сталася помилка. Будь ласка, повторіть спробу пізніше.',
	'err-noupdatelog' => 'Журнал оновлень не знайдено.',
	'repo-site-link' => 'Веб-сайт',
	'repo-browse-link' => 'Переглянути репозиторій',
	'repo-branches-label' => 'Гілки:',
	'repo-lastmoddate-label' => 'Дата:',
	'branches-submit-button' => 'Отримати!',
	'updatelog-link' => 'журнал оновлень',
	'tablehead-repo' => 'репозиторій',
	'tablehead-snapshots' => 'Знімки',
	'tablehead-branch' => 'Гілка',
	'tablehead-filesize' => 'Розмір файлу',
	'tablehead-hash' => 'Контрольні суми',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 * @author Sociologist
 */
$messages['uz'] = array(
	'title-overview' => 'Suratlar',
	'title-error' => 'Xato',
	'title-updatelog' => 'Yangilash qaydlari',
	'download-button' => '$1ni yuklash',
	'download-directlink' => 'toʻgʻridan-toʻgʻri havola',
	'title-downloadpage' => 'Yuklash: $1',
	'downloadpage-directlink' => 'Bir lahzada tayyor boʻladigan suratni yuklash uchun bu yerga bosing.',
	'err-snapshotindex' => 'Surat indeksiga vaqtincha ruxsat yoʻq. Iltimos, keyinroq urinib koʻring.',
	'err-invalid-repo' => 'Nomaʼlum repozitoriy: "$1".',
	'err-invalid-branch' => 'Noʼmalum tarmoq: "$2" repozitoriyasida "$1".',
	'err-noupdatelog' => 'Yangilash qaydlari topilmadi.',
	'repo-site-link' => 'Vebsayt',
	'repo-branches-label' => 'Tarmoqlar:',
	'repo-lastmoddate-label' => 'Sana:',
	'branches-submit-button' => 'Arang olmoq!',
	'updatelog-link' => 'yangilash qaydlari',
	'tablehead-snapshots' => 'Suratlar',
	'tablehead-branch' => 'Tarmoq',
	'tablehead-filesize' => 'Fayl oʻlchami',
	'tablehead-hash' => 'Nazorat summalari',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title-overview' => 'Ảnh chụp nhanh',
	'title-error' => 'Lỗi',
	'title-updatelog' => 'Cập nhật nhật trình',
	'updatelog-intro' => 'Kịch bản cập nhật được dự định để chạy mỗi giờ một lần. Dưới đây là kết quả trên bảng kiểm soát từ lần chạy vừa rồi.',
	'updatelog-active' => 'Kịch bản hiện đang chạy. Hãy trở lại sau để xem nhật trình đầy đủ.',
	'download-button' => 'Tải về $1',
	'download-directlink' => 'liên kết trục tiếp',
	'title-downloadpage' => 'Tải về: $1',
	'downloadpage-directlink' => 'Nhấn vào đây để tải về ảnh chụp nhanh.',
	'err-snapshotindex' => 'Chỉ mục ảnh chụp nhanh tạm không hoạt động. Xin vui lòng thử lại sau.',
	'err-invalid-repo' => 'Kho không rõ: “$1”.',
	'err-invalid-branch' => 'Chi nhánh không rõ: “$1” trong kho “$2”.',
	'err-nosnapshot' => 'Các ảnh chụp nhanh được tạo ra vài giờ một lần. Xuất hiện lỗi khi tạo ảnh chụp nhanh cho “$1”. Xin vui lòng thử lại sau.',
	'err-noupdatelog' => 'Không tìm thấy nhật trình cập nhật.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Duyệt kho',
	'repo-branches-label' => 'Các chi nhánh:',
	'repo-lastmoddate-label' => 'Ngày giờ:',
	'branches-submit-button' => 'Lấy nó!',
	'updatelog-link' => 'nhật trình cập nhật',
	'tablehead-repo' => 'Kho',
	'tablehead-snapshots' => 'Ảnh chụp nhanh',
	'tablehead-branch' => 'Chi nhánh',
	'tablehead-filesize' => 'Kích thước tập tin',
	'tablehead-hash' => 'Giá trị băm',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Liangent
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'title-overview' => '快照',
	'title-error' => '错误',
	'title-updatelog' => '更新日志',
	'updatelog-intro' => '更新脚本每小时运行一次。下面是最后一次运行的控制台输出。',
	'updatelog-active' => '更新脚本正在运行。稍后回来查看完整日志。',
	'download-button' => '下载$1',
	'download-directlink' => '直接链接',
	'title-downloadpage' => '下载：$1',
	'downloadpage-directlink' => '下载快照。',
	'err-snapshotindex' => '快照索引暂时不可用。请稍后再试。',
	'err-invalid-repo' => '未知的版本库：“$1”。',
	'err-invalid-branch' => '版本库“$2”中未知的分支：“$1”。',
	'err-nosnapshot' => '快照每隔几个小时生成一次。在为“$1”生成快照时出现了一个错误。请稍后再试。',
	'err-noupdatelog' => '没有找到更新日志。',
	'repo-site-link' => '网站',
	'repo-browse-link' => '浏览版本库',
	'repo-branches-label' => '分支：',
	'repo-lastmoddate-label' => '日期：',
	'branches-submit-button' => '获取它！',
	'updatelog-link' => '更新日志',
	'tablehead-repo' => '版本库',
	'tablehead-snapshots' => '快照',
	'tablehead-branch' => '分支',
	'tablehead-filesize' => '文件大小',
	'tablehead-hash' => '校验和',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liflon
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'title-error' => '錯誤',
	'title-updatelog' => '更新日誌',
	'download-button' => '下載$1',
	'download-directlink' => '直接鏈接',
	'title-downloadpage' => '下載：$1',
	'downloadpage-directlink' => '下載快照。',
	'err-noupdatelog' => '沒有找到更新日誌。',
	'repo-site-link' => '網站:',
	'repo-browse-link' => '瀏覽儲存庫',
	'repo-branches-label' => '分支：',
	'repo-lastmoddate-label' => '日期：',
	'branches-submit-button' => '取得！',
	'updatelog-link' => '更新日誌',
	'tablehead-repo' => '儲存庫',
	'tablehead-branch' => '分支',
	'tablehead-filesize' => '檔案大小',
);
