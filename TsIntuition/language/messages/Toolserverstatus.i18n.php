<?php
/**
 * Interface messages for the ToolserverStatus class.
 *
 * @toolowner platonides
 */

$messages = array();

/**
 * English
 *
 * @author Platonides
 */
$messages['en'] = array(
	'toolserver-status-ok' => 'There are no problems in database cluster $1 $2',
	'toolserver-status-info' => 'Notice for users of cluster $1: $2',
	'toolserver-status-warn' => 'Warning for users of cluster $1: $2',
	'toolserver-status-down' => 'The database cluster $1 has been temporarily shutdown. $2',
	'toolserver-status-erro' => 'The database cluster $1 is down. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 does not exist',

	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Unknown',
	'toolserver-status-short-missing' => '$1: Missing',
);

/** Message documentation (Message documentation)
 * @author Platonides
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'toolserver-status-ok' => "Message formatting for when the cluster status is 'ok'. Params: cluster ($1) and informative text ($2), which should be empty",
	'toolserver-status-info' => "Message formatting for when the cluster status is 'info'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-warn' => "Message formatting for when the cluster status is 'warn'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-down' => "Message formatting for when the cluster status is 'down' (eg. a planned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-erro' => "Message formatting for when the cluster status is 'erro' (eg. a unplanned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-unknown' => "Message formatting for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster ($1) and empty informative text ($2)",
	'toolserver-status-missing' => "Message formatting for when the cluster name doesn't exist (invalid name passed by the calling program)",
	'toolserver-status-short-ok' => "A short status text for when the status is 'ok'. Params: cluster name ($1)",
	'toolserver-status-short-info' => "A short status text for when the status is 'info'. Params: cluster name ($1)",
	'toolserver-status-short-warn' => "A short status text for when the status is 'warn'. Params: cluster name ($1)",
	'toolserver-status-short-down' => "A short status text for when the status is 'down'. Params: cluster name ($1)",
	'toolserver-status-short-erro' => "A short status text for when the status is 'erro'. Params: cluster name ($1)",
	'toolserver-status-short-unknown' => "A short status text for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong).

Parameters:
* $1 - cluster name
{{Identical|Unknown}}",
	'toolserver-status-short-missing' => "A short status text for when the cluster name doesn't exist (invalid name passed by the calling program)",
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: info',
	'toolserver-status-short-warn' => '$1: waarskuwing',
	'toolserver-status-short-down' => '$1: nie beskikbaar nie',
	'toolserver-status-short-erro' => '$1: foutmelding',
	'toolserver-status-short-unknown' => '$1: onbekend',
	'toolserver-status-short-missing' => '$1: ontbreek',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author أحمد
 * @author ترجمان05
 */
$messages['ar'] = array(
	'toolserver-status-ok' => 'لا توجد مشاكل في عنقود قاعدة البيانات $1 $2',
	'toolserver-status-info' => 'تنبيه لمستخدمي العنقود $1: $2',
	'toolserver-status-warn' => 'تحذير لمستخدمي العنقود $1: $2',
	'toolserver-status-down' => 'ثم إيقاف عنقود قاعدة البيانات $1 مؤقتا. $2',
	'toolserver-status-erro' => 'عنقود قاعدة البيانات $1 متعطِّل عن العمل. $2',
	'toolserver-status-unknown' => 'حالة العنقود $1 غير معروفة',
	'toolserver-status-missing' => 'العنقود $1 غير موجود',
	'toolserver-status-short-ok' => '$1: بخير',
	'toolserver-status-short-info' => '$1: معلومات',
	'toolserver-status-short-warn' => '$1: حذر',
	'toolserver-status-short-down' => '$1: عاطل',
	'toolserver-status-short-erro' => '$1: خطأ',
	'toolserver-status-short-unknown' => '$1: مجهول',
	'toolserver-status-short-missing' => '$1: مفقود',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'toolserver-status-short-ok' => '$1: ঠিক',
	'toolserver-status-short-info' => '$1: তথ্য',
	'toolserver-status-short-warn' => '$1: সতৰ্কবাণী',
	'toolserver-status-short-down' => '$1: তললৈ',
	'toolserver-status-short-erro' => '$1: ভুল',
	'toolserver-status-short-unknown' => '$1: অজ্ঞাত',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'toolserver-status-ok' => 'Nun hai problema dalu nel piñu de la base de datos $1 $2',
	'toolserver-status-info' => 'Nota pa los usuarios del piñu $1: $2',
	'toolserver-status-warn' => 'Avisu pa los usuarios del piñu $1: $2',
	'toolserver-status-down' => 'El piñu de la base de datos $1 ta apagáu temporalmente.  $2',
	'toolserver-status-erro' => 'El piñu de la base de datos $1 ta caíu. $2',
	'toolserver-status-unknown' => 'Estáu desconocíu del piñu $1',
	'toolserver-status-missing' => 'El piñu "$1" nun esiste',
	'toolserver-status-short-ok' => '$1: Correutu',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Avisu',
	'toolserver-status-short-down' => '$1: Apagáu',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconocíu',
	'toolserver-status-short-missing' => '$1: Inesistente',
);

/** Azerbaijani (azərbaycanca)
 * @author AZISS
 */
$messages['az'] = array(
	'toolserver-status-short-info' => '$1: Informasiya',
	'toolserver-status-short-erro' => '$1: Xəta',
	'toolserver-status-short-unknown' => '$1: Naməlum',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'toolserver-status-ok' => '$1 دیتابیس سالخیمیندا بیر موشکول یوخدور $2',
	'toolserver-status-info' => '$1 سالخیمی ایستیفاده‌چیلرینه بیلدیریش: $2',
	'toolserver-status-warn' => '$1 سالخیمی ایستیفاده‌چیلرینه ایخطار: $2',
	'toolserver-status-down' => '$1 دیتابیس سالخیمی گئچیجی اولاراق چالیشماقدان دوردورولوب‌دور. $2',
	'toolserver-status-erro' => '$1 دیتابیس سالخیمی ایشلمیر. $2',
	'toolserver-status-unknown' => '$1 سالخیمینین وضعیتی بیلینمیر',
	'toolserver-status-missing' => '$1 سالخیمی یوخدور',
	'toolserver-status-short-ok' => '$1: یاخشی',
	'toolserver-status-short-info' => '$1: بیلگی',
	'toolserver-status-short-warn' => '$1: ایخطار',
	'toolserver-status-short-down' => '$1: ایشلَمیر',
	'toolserver-status-short-erro' => '$1: خطا',
	'toolserver-status-short-unknown' => '$1: بیلینمیر',
	'toolserver-status-short-missing' => '$1: ال‌دن گئدیب',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 * @author Sagan
 */
$messages['ba'] = array(
	'toolserver-status-ok' => ' $1 $2 кластер мәғлүмәтендә бер ниндәйҙә проблема юҡ.',
	'toolserver-status-info' => '$1 кластеры файҙаланыусыларына хәбәр ебәрергә:$2',
	'toolserver-status-warn' => '$1 кластеры файҙаланыусыларына хәбәр иҫкәртеү:$2',
	'toolserver-status-down' => ' $1 мәғлүмәт базаһы ваҡытлыса туҡтатылған. $2',
	'toolserver-status-erro' => ' $1 мәғлүмәт базаһы ваҡытлыса ҡыйынлыҡ кисерә. $2',
	'toolserver-status-unknown' => ' $1 кластерының билдәһеҙ торошо.',
	'toolserver-status-missing' => '$1 кластеры юҡ',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Мәғлүмәт',
	'toolserver-status-short-warn' => '$1: Иҫкәртеү',
	'toolserver-status-short-down' => '$1: Ябыҡ',
	'toolserver-status-short-erro' => '$1: Хата',
	'toolserver-status-short-unknown' => '$1: Билдәһеҙ',
	'toolserver-status-short-missing' => '$1: Юҡ',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'toolserver-status-ok' => 'Няма ніякіх праблемаў у клястэры базы зьвестак $1 $2',
	'toolserver-status-info' => 'Паведамленьне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-warn' => 'Папярэджаньне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-down' => 'Клястэр базы зьвестак $1 быў часовы адключаны. $2',
	'toolserver-status-erro' => 'Клястэр базы зьвестак $1 ня дзейнічае. $2',
	'toolserver-status-unknown' => 'Невядомы статус клястэру $1',
	'toolserver-status-missing' => 'Клястэр $1 не існуе',
	'toolserver-status-short-ok' => '$1: Добра',
	'toolserver-status-short-info' => '$1: Інфармацыя',
	'toolserver-status-short-warn' => '$1: Папярэджаньне',
	'toolserver-status-short-down' => '$1: Ня дзейнічае',
	'toolserver-status-short-erro' => '$1: Памылка',
	'toolserver-status-short-unknown' => '$1: Невядомая',
	'toolserver-status-short-missing' => '$1: Адсутнічае',
);

/** Bengali (বাংলা)
 * @author Nasir8891
 */
$messages['bn'] = array(
	'toolserver-status-short-ok' => '$1: ঠিকআছে',
	'toolserver-status-short-info' => '$1: ইনফো',
	'toolserver-status-short-warn' => '$1: সতর্কতা',
	'toolserver-status-short-down' => '$1: ডাউন',
	'toolserver-status-short-erro' => '$1: ত্রুটি',
	'toolserver-status-short-unknown' => '$1: অজানা',
	'toolserver-status-short-missing' => '$1: হারানো গেছে',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'toolserver-status-ok' => "N'eus kudenn ebet gant kluster an diaz roadennoù $1 $2",
	'toolserver-status-info' => "Notenn evit implijerien ar c'hluster $1: $2",
	'toolserver-status-warn' => "Kemenn diwall evit implijerien ar c'hluster $1: $2",
	'toolserver-status-down' => 'Evit ar poent eo serret kluster $1 an diaz roadennoù. $2',
	'toolserver-status-erro' => "Sac'het eo kluster $1 an diaz roadennoù. $2",
	'toolserver-status-unknown' => "Dianav eo statud ar c'hluster $1",
	'toolserver-status-missing' => "N'eus ket eus ar c'hluster $1.",
	'toolserver-status-short-ok' => '$1 : Mat eo',
	'toolserver-status-short-info' => '$1 : Keleier',
	'toolserver-status-short-warn' => '$1 : Diwall',
	'toolserver-status-short-down' => "$1 : Sac'het",
	'toolserver-status-short-erro' => '$1 : Fazi',
	'toolserver-status-short-unknown' => '$1 : Dianav',
	'toolserver-status-short-missing' => '$1: Ezvezant',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'toolserver-status-ok' => 'No hi ha cap problema amb el clúster de base de dades $1 $2',
	'toolserver-status-info' => 'Nota pels usuaris del clúster $1: $2',
	'toolserver-status-warn' => 'Advertiment pels usuari del clúster $1: $2',
	'toolserver-status-down' => 'El clúster de base de dades $1 està tancat temporalment. $2',
	'toolserver-status-erro' => 'El clúster de base de dades $1 ha caigut. $2',
	'toolserver-status-unknown' => 'Estat desconegut del clúster $1',
	'toolserver-status-missing' => 'El clúster $1 no existeix',
	'toolserver-status-short-ok' => '$1: Correcte',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avís',
	'toolserver-status-short-down' => '$1: Desconnectat',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconegut',
	'toolserver-status-short-missing' => '$1: Inexistent',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'toolserver-status-ok' => 'Databázový cluster $1 nemá žádné problémy $2',
	'toolserver-status-info' => 'Informace pro uživatele clusteru $1: $2',
	'toolserver-status-warn' => 'Upozornění pro uživatele clusteru $1: $2',
	'toolserver-status-down' => 'Databázový cluster $1 byl dočasně vypnut. $2',
	'toolserver-status-erro' => 'Databázový cluster $1 je mimo provoz. $2',
	'toolserver-status-unknown' => 'Neznámý stav clusteru $1',
	'toolserver-status-missing' => 'Cluster $1 neexistuje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informace',
	'toolserver-status-short-warn' => '$1: Upozornění',
	'toolserver-status-short-down' => '$1: Mimo provoz',
	'toolserver-status-short-erro' => '$1: Chyba',
	'toolserver-status-short-unknown' => '$1: Neznámý',
	'toolserver-status-short-missing' => '$1: Chybí',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'toolserver-status-ok' => '$1 $2 пӗлӗмлӗх кластерӗнче проблема ҫук',
	'toolserver-status-info' => '$1 кластерӑн усӑҫӗсен валли пӗлтерӳ: $2',
	'toolserver-status-warn' => '$1 кластерӑн усӑҫӗсен валли асӑрхаттару: $2',
	'toolserver-status-down' => '$1 пӗлӗмлӗх кластерӗ вӑхӑтлӑха ӗҫлемест. $2',
	'toolserver-status-erro' => '$1 пӗлӗмлӗх кластерӗ ӗҫлемест. $2',
	'toolserver-status-unknown' => '$1 кластерӑн тӑрӑмӗ паллӑ мар',
	'toolserver-status-missing' => '$1 кластер пулмасть',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Тӗплӗнрех',
	'toolserver-status-short-warn' => '$1: Асӑрхаттару',
	'toolserver-status-short-down' => '$1: Ӗҫлемест',
	'toolserver-status-short-erro' => '$1: Йӑнӑш',
	'toolserver-status-short-unknown' => '$1: Паллӑ мар',
	'toolserver-status-short-missing' => '$1: Ҫук',
);

/** Danish (dansk)
 * @author Christian List
 * @author Sarrus
 */
$messages['da'] = array(
	'toolserver-status-ok' => 'Der er ingen problemer i databaseklyngen $1 $2',
	'toolserver-status-info' => 'Bemærkning til brugere af klyngen $1: $2',
	'toolserver-status-warn' => 'Advarsel til brugere af klyngen $1: $2',
	'toolserver-status-down' => 'Databaseklyngen $1 er blevet midlertidigt lukket. $2',
	'toolserver-status-erro' => 'Databaseklyngen $1 er nede. $2',
	'toolserver-status-unknown' => 'Ukendt status af klyngen $1',
	'toolserver-status-missing' => 'Klyngen $1 findes ikke',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Advarsel',
	'toolserver-status-short-down' => '$1: Nede',
	'toolserver-status-short-erro' => '$1: Fejl',
	'toolserver-status-short-unknown' => '$1: Ukendt',
	'toolserver-status-short-missing' => '$1: Mangler',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'toolserver-status-ok' => 'Es gibt keine Probleme im Datenbankcluster $1 $2',
	'toolserver-status-info' => 'Information für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-warn' => 'Warnung für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-down' => 'Die Datenbankcluster $1 wurde vorübergehend herunterfahren. $2',
	'toolserver-status-erro' => 'Der Datenbankcluster $1 ist ausgefallen. $2',
	'toolserver-status-unknown' => 'Der Status des Datenbankclusters $1 ist unbekannt.',
	'toolserver-status-missing' => 'Der Datenbankcluster $1 ist nicht vorhanden.',
	'toolserver-status-short-ok' => '$1: In Ordnung',
	'toolserver-status-short-info' => '$1: Information',
	'toolserver-status-short-warn' => '$1: Warnung',
	'toolserver-status-short-down' => '$1: Heruntergefahren',
	'toolserver-status-short-erro' => '$1: Ausgefallen',
	'toolserver-status-short-unknown' => '$1: Unbekannt',
	'toolserver-status-short-missing' => '$1: Nicht vorhanden',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'toolserver-status-short-ok' => '$1: Temam',
	'toolserver-status-short-info' => '$1: Malumat',
	'toolserver-status-short-warn' => '$1: Şık berz cı',
	'toolserver-status-short-down' => '$1: Vınibyaye',
	'toolserver-status-short-erro' => '$1: Xırab',
	'toolserver-status-short-unknown' => '$1: Xeribo',
	'toolserver-status-short-missing' => '$1: kemiyo',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'toolserver-status-ok' => 'Problemy w clusterje $1 datoweje banki njejsu $2',
	'toolserver-status-info' => 'Powěźeńka za wužywarjow clustera $1: $2',
	'toolserver-status-warn' => 'Warnowanje za wužywarjow clustera $1: $2',
	'toolserver-status-down' => 'Cluster $1 datoweje banki jo se nachylu wušaltował. $2',
	'toolserver-status-erro' => 'Cluster $1 datoweje banki jo wupadnuł. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 njeeksistěrujo',
	'toolserver-status-short-ok' => '$1: W pórěźe',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warnowaś',
	'toolserver-status-short-down' => '$1: Wupadnjony',
	'toolserver-status-short-erro' => '$1: Zmólka',
	'toolserver-status-short-unknown' => '$1: Njeznaty',
	'toolserver-status-short-missing' => '$1: Felujo',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'toolserver-status-ok' => 'Δεν υπάρχουν προβλήματα στην συστοιχία βάσεων $1 $2',
	'toolserver-status-info' => 'Μήνυμα για χρήστες της συστοιχίας $1: $2',
	'toolserver-status-warn' => 'Προειδοποίηση για χρήστες της συστοιχίας $1: $2',
	'toolserver-status-down' => 'Στη συστοιχία βάσεων $1 έχει προσωρινά διακοπεί η λειτουργία. $2',
	'toolserver-status-erro' => 'Η συστοιχία βάσεων $1 είναι εκτός λειτουργίας. $2',
	'toolserver-status-unknown' => 'Άγνωστη κατάσταση της συστοιχίας $1',
	'toolserver-status-missing' => 'Η συστοιχία $1 δεν υπάρχει',
	'toolserver-status-short-ok' => '$1: Εντάξει',
	'toolserver-status-short-info' => '$1: Πληροφορίες',
	'toolserver-status-short-warn' => '$1: Προειδοποίηση',
	'toolserver-status-short-down' => '$1: Εκτός λειτουργίας',
	'toolserver-status-short-erro' => '$1: Σφάλμα',
	'toolserver-status-short-unknown' => '$1: Άγνωστο',
	'toolserver-status-short-missing' => '$1: Λείπει',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 * @author KuboF
 * @author Objectivesea
 */
$messages['eo'] = array(
	'toolserver-status-unknown' => 'Nekonata stato de fasko $1',
	'toolserver-status-missing' => 'La fasko $1 ne ekzistas.',
	'toolserver-status-short-ok' => '$1: Bone',
	'toolserver-status-short-info' => '$1: Informoj',
	'toolserver-status-short-erro' => '$1: Eraro',
);

/** Spanish (español)
 * @author Platonides
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'toolserver-status-ok' => 'No hay problemas en el cluster $1 $2',
	'toolserver-status-info' => 'Información para los usuarios del cluster $1: $2',
	'toolserver-status-warn' => 'Advertencia para usuarios del cluster $1: $2',
	'toolserver-status-down' => 'El cluster $1 no está disponible. $2',
	'toolserver-status-erro' => 'El cluster $1 está caído. $2',
	'toolserver-status-unknown' => 'Se desconoce el estado del cluster $1',
	'toolserver-status-missing' => 'El cluster "$1" no existe',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Advertencia',
	'toolserver-status-short-down' => '$1: Desconectado',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Desconocido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'toolserver-status-ok' => 'Andmebaasikobaras $1 pole probleeme $2',
	'toolserver-status-info' => 'Teadaanne kobara $1 kasutajatele: $2',
	'toolserver-status-warn' => 'Hoiatus kobara $1 kasutajatele: $2',
	'toolserver-status-down' => 'Andmebaasikobar $1 on ajutiselt välja lülitatud. $2',
	'toolserver-status-erro' => 'Andmebaasikobar $1 on maas. $2',
	'toolserver-status-unknown' => 'Kobara $1 tundmatu olek',
	'toolserver-status-missing' => 'Kobarat $1 pole olemas.',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Andmed',
	'toolserver-status-short-warn' => '$1: Hoiatus',
	'toolserver-status-short-down' => '$1: Alla',
	'toolserver-status-short-erro' => '$1: Viga',
	'toolserver-status-short-unknown' => '$1: Tundmatu',
	'toolserver-status-short-missing' => '$1: Puudub',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'toolserver-status-short-ok' => '$1: Ados',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Oharra',
	'toolserver-status-short-erro' => '$1: Errorea',
	'toolserver-status-short-unknown' => '$1: Ezezaguna',
	'toolserver-status-short-missing' => '$1: Faltan',
);

/** Persian (فارسی)
 * @author Hooshmand.hasannia
 * @author ZxxZxxZ
 * @author جواد
 */
$messages['fa'] = array(
	'toolserver-status-short-ok' => '$1: خوب',
	'toolserver-status-short-info' => '$1: اطلاعات',
	'toolserver-status-short-warn' => '$1: هشدار',
	'toolserver-status-short-down' => '$1: پایین',
	'toolserver-status-short-erro' => '$1: خطا',
	'toolserver-status-short-unknown' => '$1: ناشناخته',
	'toolserver-status-short-missing' => '$1: از دست رفته',
);

/** Finnish (suomi)
 * @author Olli
 */
$messages['fi'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Tiedot',
	'toolserver-status-short-warn' => '$1: Vaara',
	'toolserver-status-short-down' => '$1: Alas',
	'toolserver-status-short-erro' => '$1: Virhe',
	'toolserver-status-short-unknown' => '$1: Tuntematon',
	'toolserver-status-short-missing' => '$1: Puuttuu',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Kunning',
	'toolserver-status-short-warn' => '$1: Ávaring',
	'toolserver-status-short-erro' => '$1: Feilur',
	'toolserver-status-short-unknown' => '$1: Ókent',
	'toolserver-status-short-missing' => '$1: Manglar',
);

/** French (français)
 * @author Jean-Frédéric
 * @author Od1n
 */
$messages['fr'] = array(
	'toolserver-status-ok' => 'Il n’y a pas de problèmes dans le cluster de base de données $1 $2',
	'toolserver-status-info' => 'Avis aux utilisateurs du cluster  $1 : $2',
	'toolserver-status-warn' => 'Avertissement pour les utilisateurs du cluster  $1 : $2',
	'toolserver-status-down' => 'Le cluster de base de données $1  a été temporairement arrêté. $2',
	'toolserver-status-erro' => 'Le cluster de base de données $1 est en panne. $2',
	'toolserver-status-unknown' => 'Statut du cluster $1 inconnu',
	'toolserver-status-missing' => 'Le cluster $1 n’existe pas',
	'toolserver-status-short-ok' => '$1 : Ok',
	'toolserver-status-short-info' => '$1 : Info',
	'toolserver-status-short-warn' => '$1 : Avertissement',
	'toolserver-status-short-down' => '$1 : En panne',
	'toolserver-status-short-erro' => '$1 : Erreur',
	'toolserver-status-short-unknown' => '$1 : Inconnu',
	'toolserver-status-short-missing' => '$1 : Absent',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'toolserver-status-ok' => 'Non hai ningún problema no clúster da base de datos $1 $2',
	'toolserver-status-info' => 'Nota aos usuarios do clúster $1: $2',
	'toolserver-status-warn' => 'Aviso aos usuarios do clúster $1: $2',
	'toolserver-status-down' => 'O clúster $1 da base de datos está pechado temporalmente. $2',
	'toolserver-status-erro' => 'O clúster $1 da base de datos está caído. $2',
	'toolserver-status-unknown' => 'Descoñécese o estado do clúster $1',
	'toolserver-status-missing' => 'O clúster "$1" non existe',
	'toolserver-status-short-ok' => '$1: Ben',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Pechado',
	'toolserver-status-short-erro' => '$1: Erro',
	'toolserver-status-short-unknown' => '$1: Descoñecido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'toolserver-status-short-ok' => '$૧ : બરાબર', # Fuzzy
	'toolserver-status-short-info' => '$૧ : માહિતી', # Fuzzy
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'toolserver-status-ok' => 'אין בעיות בצביר מסד הנתונים $1 $2',
	'toolserver-status-info' => 'הודעה למשתמשי הצביר $1: <span dir="auto">$2</span>',
	'toolserver-status-warn' => 'אזהרה למשתמשי הצביר $1: <span dir="auto">$2</span>',
	'toolserver-status-down' => 'צביר מסד הנתונים $1 הורד זמנית. <span dir="auto">$2</span>',
	'toolserver-status-erro' => 'צביר מסד הנתונים $1 למטה. <span dir="auto">$2</span>',
	'toolserver-status-unknown' => 'מצב הצביר $1 אינו ידוע',
	'toolserver-status-missing' => 'צביר $1 אינו קיים',
	'toolserver-status-short-ok' => '$1: בסדר',
	'toolserver-status-short-info' => '$1: מידע',
	'toolserver-status-short-warn' => '$1: אזהרה',
	'toolserver-status-short-down' => '$1: למטה',
	'toolserver-status-short-erro' => '$1: שגיאה',
	'toolserver-status-short-unknown' => '$1: לא ידוע',
	'toolserver-status-short-missing' => '$1: חסר',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'toolserver-status-ok' => 'डाटाबेस क्लस्टर $1 में कोई समस्या नहीं हैं $2',
	'toolserver-status-info' => 'क्लस्टर $1 के प्रयोक्ताओं के लिये सूचना: $2',
	'toolserver-status-warn' => 'क्लस्टर $1 के प्रयोक्ताओं के लिये चेतावनी: $2',
	'toolserver-status-down' => 'डाटाबेस क्लस्टर $1 को अस्थायी रूप से बंद कर दिया गया है। $2',
	'toolserver-status-erro' => 'डाटाबेस क्लस्टर $1 बंद है। $2',
	'toolserver-status-unknown' => 'क्लस्टर $1 की स्थिति अज्ञात है',
	'toolserver-status-missing' => 'क्लस्टर $1 मौजूद नहीं है',
	'toolserver-status-short-ok' => '$1: ठीक है',
	'toolserver-status-short-info' => '$1: सूचना',
	'toolserver-status-short-warn' => '$1: चेतावनी',
	'toolserver-status-short-down' => '$1: बंद',
	'toolserver-status-short-erro' => '$1: त्रुटि',
	'toolserver-status-short-unknown' => '$1: अज्ञात',
	'toolserver-status-short-missing' => '$1: गायब',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'toolserver-status-ok' => 'Problemy w clusterje $1 datoweje banki njejsu $2',
	'toolserver-status-info' => 'Zdźělenka za wužiwarjow clustera $1: $2',
	'toolserver-status-warn' => 'Warnowanje za wužiwarjow clustera $1: $2',
	'toolserver-status-down' => 'Cluster $1 datoweje banki je so nachwilu wupinył. $2',
	'toolserver-status-erro' => 'Cluster $1 datoweje banki je wupadnył. $2',
	'toolserver-status-unknown' => 'Njeznaty status clustera $1',
	'toolserver-status-missing' => 'Cluster $1 njeeksistuje',
	'toolserver-status-short-ok' => '$1: W porjadku',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warnować',
	'toolserver-status-short-down' => '$1: Wupadnjeny',
	'toolserver-status-short-erro' => '$1: Zmylk',
	'toolserver-status-short-unknown' => '$1: Njeznaty',
	'toolserver-status-short-missing' => '$1: Faluje',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'toolserver-status-ok' => 'Minden rendben a $1 clusteren $2',
	'toolserver-status-info' => 'Üzenet $1 cluster felhasználóinak: $2',
	'toolserver-status-warn' => 'Figyelmeztetés $1 cluster felhasználóinak: $2',
	'toolserver-status-down' => '$1 cluster ideiglenesen leállítva: $2',
	'toolserver-status-erro' => '$1 cluster leállítva: $2',
	'toolserver-status-unknown' => '$1 cluster állapota ismeretlen',
	'toolserver-status-missing' => '$1 cluster nem létezik',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Figyelmeztetés',
	'toolserver-status-short-down' => '$1: Leállítva',
	'toolserver-status-short-erro' => '$1: Hiba',
	'toolserver-status-short-unknown' => '$1: Ismeretlen',
	'toolserver-status-short-missing' => '$1: Hiányzik',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'toolserver-status-ok' => 'Il non ha problemas in le gruppo de base de datos $1 $2',
	'toolserver-status-info' => 'Nota pro usatores del gruppo $1: $2',
	'toolserver-status-warn' => 'Advertimento pro usatores del gruppo $1: $2',
	'toolserver-status-down' => 'Le gruppo de base de datos $1 ha essite temporarimente disactivate. $2',
	'toolserver-status-erro' => 'Le gruppo de base de datos $1 es inactive. $2',
	'toolserver-status-unknown' => 'Stato incognite del gruppo $1',
	'toolserver-status-missing' => 'Le gruppo $1 non existe',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Inactive',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Incognite',
	'toolserver-status-short-missing' => '$1: Mancante',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 */
$messages['id'] = array(
	'toolserver-status-ok' => 'Tidak ada masalah di kluster basis data $1 $2',
	'toolserver-status-info' => 'Pemberitahuan untuk pengguna kluster $1: $2',
	'toolserver-status-warn' => 'Peringatan untuk pengguna kluster $1: $2',
	'toolserver-status-down' => 'Kluster basis data $1 dimatikan sementara. $2',
	'toolserver-status-erro' => 'Kluster basis data $1 mati. $2',
	'toolserver-status-unknown' => 'Status kluster $1 tidak diketahui',
	'toolserver-status-missing' => 'Kluster $1 tidak eksis',
	'toolserver-status-short-ok' => '$1: Oke',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Peringatan',
	'toolserver-status-short-down' => '$1: Mati',
	'toolserver-status-short-erro' => '$1: Galat',
	'toolserver-status-short-unknown' => '$1: Tidak dikenal',
	'toolserver-status-short-missing' => '$1: Hilang',
);

/** Italian (italiano)
 * @author Gianfranco
 * @author ZioNicco
 */
$messages['it'] = array(
	'toolserver-status-ok' => 'Non ci sono problemi nel cluster di database $1 $2',
	'toolserver-status-info' => 'Avviso per gli utenti del cluster $1: $2',
	'toolserver-status-warn' => 'Avvertenza per gli utenti del cluster $1: $2',
	'toolserver-status-down' => 'Il cluster $1 del database è stato temporaneamente arrestato. $2',
	'toolserver-status-erro' => 'Il cluster $1 del database è giù. $2',
	'toolserver-status-unknown' => 'Stato del cluster $1 non noto',
	'toolserver-status-missing' => 'Cluster $1 non esistente',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avvisi',
	'toolserver-status-short-down' => '$1: Fermo',
	'toolserver-status-short-erro' => '$1: Errori',
	'toolserver-status-short-unknown' => '$1: Non noto',
	'toolserver-status-short-missing' => '$1: Mancante',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'toolserver-status-missing' => 'クラスタ $1 は存在しません',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: 情報',
	'toolserver-status-short-warn' => '$1: 警告',
	'toolserver-status-short-down' => '$1: ダウン',
	'toolserver-status-short-erro' => '$1: エラー',
	'toolserver-status-short-unknown' => '$1: 不明',
	'toolserver-status-short-missing' => '$1: 見つかりません',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'toolserver-status-ok' => 'Ora ana masalah nèng klompok basis data $1 $2',
	'toolserver-status-info' => 'Wara-wara kanggo panganggo saka klompok $1: $2',
	'toolserver-status-warn' => 'Pèngetan kanggo panganggo saka klompok $1: $2',
	'toolserver-status-down' => 'Klompok basis data $1 mati sawetara wektu. $2',
	'toolserver-status-erro' => 'Klompok basis data $1 rendhet. $2',
	'toolserver-status-unknown' => 'Status klompok $1 ora dikenal',
	'toolserver-status-missing' => 'Klompok $1 ora ana',
	'toolserver-status-short-ok' => '$1: Oké',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Pèngetan',
	'toolserver-status-short-down' => '$1: Rendhet',
	'toolserver-status-short-erro' => '$1: Kasalahan',
	'toolserver-status-short-unknown' => '$1: Ora dingertèni',
	'toolserver-status-short-missing' => '$1: Ilang',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'toolserver-status-short-ok' => '$1: კარგი',
	'toolserver-status-short-info' => '$1: ინფორმაცია',
	'toolserver-status-short-warn' => '$1: გაფრთხილება',
	'toolserver-status-short-down' => '$1: ხელმიუწვდომელია',
	'toolserver-status-short-erro' => '$1: შეცდომა',
	'toolserver-status-short-unknown' => '$1: უცნობი',
	'toolserver-status-short-missing' => '$1: დაკარგული',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'toolserver-status-short-ok' => '$1: យល់ព្រម',
	'toolserver-status-short-info' => '$1: ព័ត៌មាន',
	'toolserver-status-short-warn' => '$1: ព្រមាន',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: កំហុស',
	'toolserver-status-short-unknown' => '$1: មិនស្គាល់',
	'toolserver-status-short-missing' => '$1: រកមិនមាន',
);

/** Kannada (ಕನ್ನಡ)
 * @author M G Harish
 */
$messages['kn'] = array(
	'toolserver-status-short-ok' => '$1: ಸರಿ',
	'toolserver-status-short-info' => '$1: ಮಾಹಿತಿ',
	'toolserver-status-short-warn' => '$1: ಎಚ್ಚರಿಕೆ',
	'toolserver-status-short-down' => '$1: ವಿಫಲ',
	'toolserver-status-short-erro' => '$1: ದೋಷ',
	'toolserver-status-short-unknown' => '$1: ಅಜ್ಞಾತ',
	'toolserver-status-short-missing' => '$1: ನಷ್ಟ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'toolserver-status-ok' => '$1 데이터베이스 클러스터에 문제가 없습니다 $2',
	'toolserver-status-info' => '$1 클러스터의 사용자에 대한 알림: $2',
	'toolserver-status-warn' => '$1 클러스터의 사용자에 대한 경고: $2',
	'toolserver-status-down' => '$1 데이터베이스 클러스터를 일시적으로 종료했습니다. $2',
	'toolserver-status-erro' => '$1 데이터베이스 클러스터는 down되었습니다. $2',
	'toolserver-status-unknown' => '$1 클러스터의 알 수 없는 상태',
	'toolserver-status-missing' => '$1 클러스터가 존재하지 않음',
	'toolserver-status-short-ok' => '$1: 완료',
	'toolserver-status-short-info' => '$1: 정보',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: 오류',
	'toolserver-status-short-unknown' => '$1: 알 수 없음',
	'toolserver-status-short-missing' => '$1: 잃음',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'toolserver-status-ok' => 'Mer han kein Probleeme em Daatebank-Knubbel $1 $2',
	'toolserver-status-info' => 'Henwieß för der Jebruch vom Daatebank-Knubbel $1: $2',
	'toolserver-status-warn' => 'Warnong för der Zohjreff op dä Daatebank-Knubbel $1: $2',
	'toolserver-status-down' => 'Dä Daatebank-Knubbel $1 wood för en Zigg eronger jefahre. $2',
	'toolserver-status-erro' => 'Dä Daatebank-Knubbel $1 es eronger jefahre, $2',
	'toolserver-status-unknown' => 'Mer han kein Aanjaabe övver dä Daatebank-Knubbel $1',
	'toolserver-status-missing' => 'Ene Daatebank-Knubbel $1 jidd_et nit.',
	'toolserver-status-short-ok' => '$1: Alles joot.',
	'toolserver-status-short-info' => '$1: Henwieß.',
	'toolserver-status-short-warn' => '$1: Oppaße!',
	'toolserver-status-short-down' => '$1: Läuf nit.',
	'toolserver-status-short-erro' => '$1: Fähler.',
	'toolserver-status-short-unknown' => '$1: Nit klohr.',
	'toolserver-status-short-missing' => '$1: Ham_mer nit.',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'toolserver-status-short-info' => '$1: Agahî',
	'toolserver-status-short-unknown' => '$1: Nenas',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'toolserver-status-ok' => 'Et gëtt keng Problemer mam Datebankcluster $1 $2',
	'toolserver-status-info' => "Informatioun fir d'Benotzer vum Datebankcluster $1: $2",
	'toolserver-status-warn' => "Warnung fir d'Benotzer vum Datebankcluster $1: $2",
	'toolserver-status-down' => 'Den Datebankcluster $1 gouf temporär ausgeschalt. $2',
	'toolserver-status-erro' => 'Den Datebankcluster $1 ass down. $2',
	'toolserver-status-unknown' => 'De Status vum Datebankcluster $1 ass onbekannt',
	'toolserver-status-missing' => 'Den Datebankcluster $1 gëtt et net',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Informatioun',
	'toolserver-status-short-warn' => '$1: Warnung',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Feeler',
	'toolserver-status-short-unknown' => '$1: Onbekannt',
	'toolserver-status-short-missing' => '$1: Net do',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'toolserver-status-short-ok' => '$1: Gerai',
	'toolserver-status-short-info' => '$1: Informacija',
	'toolserver-status-short-warn' => '$1: Įspėti',
	'toolserver-status-short-down' => '$1: Žemyn',
	'toolserver-status-short-erro' => '$1: Klaida',
	'toolserver-status-short-unknown' => '$1: Nežinomas',
	'toolserver-status-short-missing' => '$1: Trūksta',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'toolserver-status-ok' => 'Нема проблеми во гроздот $1 во базата $2',
	'toolserver-status-info' => 'Напомена за корисниците на гроздот $1: $2',
	'toolserver-status-warn' => 'Предупредување за корисниците на гроздот $1: $2',
	'toolserver-status-down' => 'Гроздот $1 во базата привремено е исклучен. $2',
	'toolserver-status-erro' => 'Гроздот $1 на базата падна. $2',
	'toolserver-status-unknown' => 'Состојбата на гроздот $1 е непозната',
	'toolserver-status-missing' => 'Гроздот $1 не постои',
	'toolserver-status-short-ok' => '$1: Во ред',
	'toolserver-status-short-info' => '$1: Инфо',
	'toolserver-status-short-warn' => '$1: Предупредување',
	'toolserver-status-short-down' => '$1: Паднат',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостасува',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'toolserver-status-ok' => 'Tiada masalah dalam kelompok pangkalan data $1 $2',
	'toolserver-status-info' => 'Pemberitahuan untuk pengguna kelompok $1 : $2',
	'toolserver-status-warn' => 'Amaran untuk pengguna kelompok $1 : $2',
	'toolserver-status-down' => 'Kelompok pangkalan data $1 telah ditutup buat sementara waktu. $2',
	'toolserver-status-erro' => 'Kelompok pangkalan data $1 tergendala. $2',
	'toolserver-status-unknown' => 'Status kelompok $1 tidak diketahui.',
	'toolserver-status-missing' => 'Kelompok $1 tidak wujud',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Maklumat',
	'toolserver-status-short-warn' => '$1: Amaran',
	'toolserver-status-short-down' => '$1: Tergendala',
	'toolserver-status-short-erro' => '$1: Ralat',
	'toolserver-status-short-unknown' => '$1: Tidak diketahui',
	'toolserver-status-short-missing' => '$1: Tiada',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avviżi',
	'toolserver-status-short-down' => '$1: Wieqaf',
	'toolserver-status-short-erro' => '$1: Żball',
	'toolserver-status-short-unknown' => '$1: Mhux magħruf',
	'toolserver-status-short-missing' => '$1: Nieqes',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'toolserver-status-ok' => 'Det er ingen problemer i databaseklyngen $1 $2',
	'toolserver-status-info' => 'Merknad for brukere av klyngen $1: $2',
	'toolserver-status-warn' => 'Advarsel for brukere av klyngen $1: $2',
	'toolserver-status-down' => 'Databaseklyngen $1 har midlertidig blitt skrudd av. $2',
	'toolserver-status-erro' => 'Databaseklyngen $1 er nede. $2',
	'toolserver-status-unknown' => 'Ukjent status for klyngen $1',
	'toolserver-status-missing' => 'Klyngen $1 eksisterer ikke',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Advarsel',
	'toolserver-status-short-down' => '$1: Nede',
	'toolserver-status-short-erro' => '$1: Feil',
	'toolserver-status-short-unknown' => '$1: Ukjent',
	'toolserver-status-short-missing' => '$1: Mangler',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'toolserver-status-short-erro' => '$1: Fähler',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'toolserver-status-missing' => 'क्लस्तर $1 अस्तित्त्व हे मदु',
	'toolserver-status-short-ok' => '$1: ज्यु',
	'toolserver-status-short-info' => '$1: सूचं',
	'toolserver-status-short-warn' => '$1: न्हेसूचं',
	'toolserver-status-short-down' => '$1: क्वे',
	'toolserver-status-short-erro' => '$1: इरर',
	'toolserver-status-short-unknown' => '$1: मस्यूगु',
	'toolserver-status-short-missing' => '$1: मलूगु',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'toolserver-status-ok' => 'Er zijn geen problemen in de databasecluster $1 $2',
	'toolserver-status-info' => 'Kennisgeving voor gebruikers van cluster $1: $2',
	'toolserver-status-warn' => 'Waarschuwing voor gebruikers van cluster $1: $2',
	'toolserver-status-down' => 'Het databasecluster  $1 is tijdelijk afgesloten. $2',
	'toolserver-status-erro' => 'Het databasecluster $1 is niet beschikbaar. $2',
	'toolserver-status-unknown' => 'Onbekend status van cluster $1',
	'toolserver-status-missing' => 'Cluster $1 bestaat niet',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: info',
	'toolserver-status-short-warn' => '$1: waarschuwing',
	'toolserver-status-short-down' => '$1: niet beschikbaar',
	'toolserver-status-short-erro' => '$1: foutmelding',
	'toolserver-status-short-unknown' => '$1: onbekend',
	'toolserver-status-short-missing' => '$1: ontbreekt',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'toolserver-status-short-ok' => '$1: ଠିକ ଅଛି',
	'toolserver-status-short-info' => '$1: ତଥ୍ୟ',
	'toolserver-status-short-warn' => '$1: ସତର୍କିତ',
	'toolserver-status-short-down' => '$1: ଖରାପ',
	'toolserver-status-short-erro' => '$1: ଭୁଲ',
	'toolserver-status-short-unknown' => '$1: ଅଜଣା',
	'toolserver-status-short-missing' => '$1: ମିଳୁନାହିଁ',
);

/** Polish (polski)
 * @author Grzechooo
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'toolserver-status-ok' => 'Brak jakichkolwiek problemów w klastrze bazy danych $1 $2',
	'toolserver-status-info' => 'Informacja dla użytkowników klastra $1: $2',
	'toolserver-status-warn' => 'Ostrzeżenie dla użytkowników klastra $1: $2',
	'toolserver-status-down' => 'Klaster bazy danych $1 został tymczasowo wyłączony. $2',
	'toolserver-status-erro' => 'Klaster bazy danych $1 jest wyłączony. $2',
	'toolserver-status-unknown' => 'Nieznany status klastra $1',
	'toolserver-status-missing' => 'Klaster $1 nie istnieje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informacje',
	'toolserver-status-short-warn' => '$1: Ostrzeżenie',
	'toolserver-status-short-down' => '$1: Wyłączony',
	'toolserver-status-short-erro' => '$1: Błąd',
	'toolserver-status-short-unknown' => '$1: Nieznany',
	'toolserver-status-short-missing' => '$1: Brak',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'toolserver-status-ok' => 'A-i é gnun problema ant ël sistema ëd base ëd dàit $1 $2',
	'toolserver-status-info' => "avis për j'utent dël sistema $1: $2",
	'toolserver-status-warn' => "Avis për j'utent dël sistema $1: $2",
	'toolserver-status-down' => "Ël sistema $1 ëd base ëd dàit a l'é stàit temporaneament sarà. $2",
	'toolserver-status-erro' => 'Ël sistema $1 ëd base ëd dàit a marcia nen. $2',
	'toolserver-status-unknown' => 'Statù dël sistema $1 pa conossù',
	'toolserver-status-missing' => 'El sistema $1 a esist pa',
	'toolserver-status-short-ok' => '$1: Va bin',
	'toolserver-status-short-info' => '$1: Anformassion',
	'toolserver-status-short-warn' => '$1: Avis',
	'toolserver-status-short-down' => '$1: Giù',
	'toolserver-status-short-erro' => '$1: Eror',
	'toolserver-status-short-unknown' => '$1: Pa conossù',
	'toolserver-status-short-missing' => '$1: Mancant',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'toolserver-status-short-ok' => '$1: ښه',
	'toolserver-status-short-info' => '$1: مالومات',
	'toolserver-status-short-warn' => '$1: گواښنه',
	'toolserver-status-short-erro' => '$1: تېروتنه',
	'toolserver-status-short-unknown' => '$1: ناڅرګند',
);

/** Portuguese (português)
 * @author Luckas
 */
$messages['pt'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Informação',
	'toolserver-status-short-erro' => '$1: Erro',
	'toolserver-status-short-unknown' => '$1: Desconhecido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 * @author Luckas
 */
$messages['pt-br'] = array(
	'toolserver-status-ok' => 'Não há problemas no cluster $1 $2',
	'toolserver-status-info' => 'Informação para os usuários do cluster $1: $2',
	'toolserver-status-warn' => 'Aviso para os usuários do cluster $1: $2',
	'toolserver-status-down' => 'O cluster $1 está temporariamente desligado. $2',
	'toolserver-status-erro' => 'O cluster $1 está desconectado. $2',
	'toolserver-status-unknown' => 'É desconhecido o status do cluster $1',
	'toolserver-status-missing' => 'O cluster $1 não existe',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Informação',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Desconectado',
	'toolserver-status-short-erro' => '$1: Erro',
	'toolserver-status-short-unknown' => '$1: Desconhecido',
	'toolserver-status-short-missing' => '$1: Não existe',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Avertizare',
	'toolserver-status-short-down' => '$1: Picat',
	'toolserver-status-short-erro' => '$1: Eroare',
	'toolserver-status-short-unknown' => '$1: Necunoscut',
	'toolserver-status-short-missing' => '$1: Lipsă',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'toolserver-status-ok' => "Non ge stonne probbleme sus a 'u cluster de l'archivije $1 $2",
	'toolserver-status-info' => "Notizie pe l'utinde d'u cluster $1: $2",
	'toolserver-status-warn' => "Avvise pe l'utinde d'u cluster $1: $2",
	'toolserver-status-down' => "'U cluster de l'archivije $1 ha state temboraneamende stutate. $2",
	'toolserver-status-erro' => "'U cluster de l'archivije $1 ste 'nderre. $2",
	'toolserver-status-unknown' => "State scanusciute d'u cluster $1",
	'toolserver-status-missing' => "Cluster $1 non g'esiste",
	'toolserver-status-short-ok' => '$1: Apposte',
	'toolserver-status-short-info' => "$1: 'Mbormaziune",
	'toolserver-status-short-warn' => '$1: Avvise',
	'toolserver-status-short-down' => "$1: 'Nderre",
	'toolserver-status-short-erro' => '$1: Errore',
	'toolserver-status-short-unknown' => '$1: Scanusciute',
	'toolserver-status-short-missing' => '$1: Perse',
);

/** Russian (русский)
 * @author Eleferen
 * @author Salam
 */
$messages['ru'] = array(
	'toolserver-status-ok' => 'Нет никаких проблем в кластере базы данных $1 $2',
	'toolserver-status-info' => 'Уведомление для пользователей кластера $1: $2',
	'toolserver-status-warn' => 'Предупреждение для пользователей кластера $1: $2',
	'toolserver-status-down' => 'Кластер базы данных $1 временно выключен. $2',
	'toolserver-status-erro' => 'Кластер базы данных $1 недоступен. $2',
	'toolserver-status-unknown' => 'Неизвестное состояние кластера $1',
	'toolserver-status-missing' => 'Кластер $1 не существует',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Информация',
	'toolserver-status-short-warn' => '$1: Предупреждение',
	'toolserver-status-short-down' => '$1: Недоступен',
	'toolserver-status-short-erro' => '$1: Ошибка',
	'toolserver-status-short-unknown' => '$1: Неизвестно',
	'toolserver-status-short-missing' => '$1: Отсутствует',
);

/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'toolserver-status-ok' => 'Nema problema u klasteru baze podataka $1 $2',
	'toolserver-status-info' => 'Napomena za korisnike klastera $1: $2',
	'toolserver-status-warn' => 'Upozorenje za korisnike klastera $1: $2',
	'toolserver-status-down' => 'Klaster baze podataka $1 je privremeno isključen. $2',
	'toolserver-status-erro' => 'Klaster baze podataka $1 je iznenada pao. $2',
	'toolserver-status-unknown' => 'Nepoznato stanje klastera $1',
	'toolserver-status-missing' => 'Klaster $1 ne postoji',
	'toolserver-status-short-ok' => '$1: U redu',
	'toolserver-status-short-info' => '$1: Informacije',
	'toolserver-status-short-warn' => '$1: Upozorenje',
	'toolserver-status-short-down' => '$1: Pad',
	'toolserver-status-short-erro' => '$1: Greška',
	'toolserver-status-short-unknown' => '$1: Nepoznato',
	'toolserver-status-short-missing' => '$1: Nedostaje',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'toolserver-status-ok' => 'ක්ලස්ටර් $1 $2 හි කිසිදු දෝෂයක් නොමැත',
	'toolserver-status-info' => '$1 ස්තබකයෙහි පරිශීලකයන් සඳහා නිවේදනය: $2',
	'toolserver-status-warn' => '$1 ස්තබකයෙහි පරිශීලකයන් සඳහා රැඳෙමින්: $2',
	'toolserver-status-down' => 'දත්ත සංචිත ස්තබකය $1 තාවකාලිකව වසා දමා ඇත. $2',
	'toolserver-status-erro' => 'දත්ත සංචිත ස්තබකය $1 මැඩ පවත්වා ඇත. $2',
	'toolserver-status-unknown' => '$1 ස්තබකයේ නොදන්නා තත්වය',
	'toolserver-status-missing' => '$1 ස්තබකය නොපවතියි',
	'toolserver-status-short-ok' => '$1: හරි',
	'toolserver-status-short-info' => '$1: තොරතුරු',
	'toolserver-status-short-warn' => '$1: අනතුරු හඟවනවා',
	'toolserver-status-short-down' => '$1: විරහිතයි',
	'toolserver-status-short-erro' => '$1: දෝෂය',
	'toolserver-status-short-unknown' => '$1: නොදත්',
	'toolserver-status-short-missing' => '$1: දක්නට නොමැත',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'toolserver-status-ok' => 'V gruči zbirke podatkov $1 ni težav $2',
	'toolserver-status-info' => 'Obvestilo za uporabnike gruče $1: $2',
	'toolserver-status-warn' => 'Opozorilo za uporabnike gruče $1: $2',
	'toolserver-status-down' => 'Gruča zbirke podatkov $1 je bila začasno zaustavljena. $2',
	'toolserver-status-erro' => 'Gruča zbirke podatkov $1 ne deluje. $2',
	'toolserver-status-unknown' => 'Neznano stanje gruče $1',
	'toolserver-status-missing' => 'Gruča $1 ne obstaja',
	'toolserver-status-short-ok' => '$1: V redu',
	'toolserver-status-short-info' => '$1: Informacija',
	'toolserver-status-short-warn' => '$1: Opozorilo',
	'toolserver-status-short-down' => '$1: Ne deluje',
	'toolserver-status-short-erro' => '$1: Napaka',
	'toolserver-status-short-unknown' => '$1: Neznano',
	'toolserver-status-short-missing' => '$1: Manjka',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'toolserver-status-ok' => 'Wax dhibaato ah ma jiraan guud ahaan Kaydka $1 $2',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'toolserver-status-ok' => 'Нема проблема у кластеру базе података $1 $2',
	'toolserver-status-info' => 'Напомена за кориснике кластера $1: $2',
	'toolserver-status-warn' => 'Упозорење за кориснике кластера $1: $2',
	'toolserver-status-down' => 'Кластер базе података $1 је привремено искључен. $2',
	'toolserver-status-erro' => 'Кластер базе података $1 је изненадно пао. $2',
	'toolserver-status-unknown' => 'Непознато стање кластера $1',
	'toolserver-status-missing' => 'Кластер $1 не постоји',
	'toolserver-status-short-ok' => '$1: У реду',
	'toolserver-status-short-info' => '$1: Подаци',
	'toolserver-status-short-warn' => '$1: Напомена',
	'toolserver-status-short-down' => '$1: Пад',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостаје',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'toolserver-status-ok' => 'Nema problema u klasteru baze podataka $1 $2',
	'toolserver-status-info' => 'Napomena za korisnike klastera $1: $2',
	'toolserver-status-warn' => 'Upozorenje za korisnike klastera $1: $2',
	'toolserver-status-down' => 'Klaster baze podataka $1 je privremeno isključen. $2',
	'toolserver-status-erro' => 'Klaster baze podataka $1 je iznenadno pao. $2',
	'toolserver-status-unknown' => 'Nepoznato stanje klastera $1',
	'toolserver-status-missing' => 'Klaster $1 ne postoji',
	'toolserver-status-short-ok' => '$1: U redu',
	'toolserver-status-short-info' => '$1: Podaci',
	'toolserver-status-short-warn' => '$1: Napomena',
	'toolserver-status-short-down' => '$1: Pad',
	'toolserver-status-short-erro' => '$1: Greška',
	'toolserver-status-short-unknown' => '$1: Nepoznato',
	'toolserver-status-short-missing' => '$1: Nedostaje',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'toolserver-status-ok' => 'Det finns inga problem i databaskluster $1 $2',
	'toolserver-status-info' => 'Meddelande för användare i klustret $1: $2',
	'toolserver-status-warn' => 'Varning för klusteranvändare $1: $2',
	'toolserver-status-down' => 'Databasklustret $1 har tillfälligt blivit avstängt. $2',
	'toolserver-status-erro' => 'Databasklustret $1 är nere. $2',
	'toolserver-status-unknown' => 'Okänd status för kluster $1',
	'toolserver-status-missing' => 'Klustret $1 finns inte',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Varning',
	'toolserver-status-short-down' => '$1: Nere',
	'toolserver-status-short-erro' => '$1: Fel',
	'toolserver-status-short-unknown' => '$1: Okänd',
	'toolserver-status-short-missing' => '$1: Saknas',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'toolserver-status-short-ok' => '$1: Sawa',
	'toolserver-status-short-info' => '$1: Habari',
	'toolserver-status-short-warn' => '$1: Onya',
	'toolserver-status-short-down' => '$1: Shuka',
	'toolserver-status-short-erro' => '$1: Hitilafu',
	'toolserver-status-short-unknown' => '$1: hazijulikani',
	'toolserver-status-short-missing' => '$1: Hazipatikani',
);

/** Tamil (தமிழ்)
 * @author Aswn
 */
$messages['ta'] = array(
	'toolserver-status-short-ok' => '$1: சரி',
	'toolserver-status-short-info' => '$1: தகவல்',
	'toolserver-status-short-warn' => '$1: எச்சரி',
	'toolserver-status-short-erro' => '$1: பிழை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'toolserver-status-short-ok' => '$1: సరే',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'toolserver-status-ok' => 'Walang mga suliranin sa kumpol na $1 $2 ng kalipunan ng dato',
	'toolserver-status-info' => 'Paunawa para sa mga tagagamit ng kumpol na $1: $2',
	'toolserver-status-warn' => 'Babala para sa mga tagagamit ng kumpol na $1: $2',
	'toolserver-status-down' => 'Pansamantalang itinigil at ipininid ang kumpol na $1 ng kalipunan ng dato. $2',
	'toolserver-status-erro' => 'Nakatigil ang kumpol na $1 ng kalipunan ng dato. $2',
	'toolserver-status-unknown' => 'Hindi napag-aalamang na katayuan ng kumpol na $1',
	'toolserver-status-missing' => 'Hindi umiiral ang kumpol na $1',
	'toolserver-status-short-ok' => '$1: Okey',
	'toolserver-status-short-info' => '$1: Kabatiran',
	'toolserver-status-short-warn' => '$1: Babala',
	'toolserver-status-short-down' => '$1: Hindi gumagana',
	'toolserver-status-short-erro' => '$1: Kamalian',
	'toolserver-status-short-unknown' => '$1: Hindi alam',
	'toolserver-status-short-missing' => '$1: Nawawala',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Мәлумот',
	'toolserver-status-short-erro' => '$1: Сәһв',
);

/** Turkish (Türkçe)
 * @author Emperyan
 */
$messages['tr'] = array(
	'toolserver-status-short-ok' => '$1: Tamam',
	'toolserver-status-short-info' => '$1: Bilgi',
	'toolserver-status-short-warn' => '$1: Uyar',
	'toolserver-status-short-erro' => '$1: Hata',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'toolserver-status-short-ok' => '$1: ⵡⴰⵅⵅⴰ',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'toolserver-status-ok' => 'ساندان توپلاشتۇرغۇچ $1 $2 دا مەسىلە يوق',
	'toolserver-status-info' => 'توپلاشتۇرغۇچنىڭ ئىشلەتكۈچى ئۈچۈن ئىزاھاتى $1: $2',
	'toolserver-status-warn' => 'توپلاشتۇرغۇچنىڭ ئىشلەتكۈچى ئۈچۈن ئاگاھلاندۇرۇشى $1: $2',
	'toolserver-status-down' => 'ساندان توپلاشتۇرغۇچ $1 ۋاقىتلىق تاقالدى. $2',
	'toolserver-status-erro' => 'ساندان توپلاشتۇرغۇچ $1 تاقالدى. $2',
	'toolserver-status-unknown' => 'توپلاشتۇرغۇچ $1 نىڭ يوچۇن ھالىتى',
	'toolserver-status-missing' => 'توپلاشتۇرغۇچ $1 مەۋجۇت ئەمەس',
	'toolserver-status-short-ok' => '$1: ياخشى',
	'toolserver-status-short-info' => '$1: ئۇچۇر',
	'toolserver-status-short-warn' => '$1: ئاگاھلاندۇرۇش',
	'toolserver-status-short-down' => '$1: توختىدى',
	'toolserver-status-short-erro' => '$1: خاتالىق',
	'toolserver-status-short-unknown' => '$1: يوچۇن',
	'toolserver-status-short-missing' => '$1: كەم',
);

/** Ukrainian (українська)
 * @author A1
 * @author Base
 */
$messages['uk'] = array(
	'toolserver-status-ok' => 'База даних у кластерах $1 $2 в порядку',
	'toolserver-status-info' => 'Повідомлення для користувачів кластерів  $1 :$2',
	'toolserver-status-warn' => 'Попередження для користувачів кластерів  $1 :$2',
	'toolserver-status-down' => 'База даних кластера $1 тимчасово відключена. $2',
	'toolserver-status-erro' => 'База даних кластера $1 недоступна. $2',
	'toolserver-status-unknown' => 'Невідомий стан кластера $1',
	'toolserver-status-missing' => 'Кластер  $1 не існує',
	'toolserver-status-short-ok' => '$1: Гаразд',
	'toolserver-status-short-info' => '$1: Інформація',
	'toolserver-status-short-warn' => '$1: Попередження',
	'toolserver-status-short-down' => '$1: Вниз',
	'toolserver-status-short-erro' => '$1: Помилка',
	'toolserver-status-short-unknown' => '$1: Невідомо',
	'toolserver-status-short-missing' => '$1: Відсутній',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'toolserver-status-ok' => 'Không có vấn đề trong cụm cơ sở dữ liệu $1 $2',
	'toolserver-status-info' => 'Thông báo cho những người dùng cụm $1: $2',
	'toolserver-status-warn' => 'Cảnh báo cho những người dùng cụm $1: $2',
	'toolserver-status-down' => 'Cụm cơ sở dữ liệu $1 đã bị tắt tạm thời. $2',
	'toolserver-status-erro' => 'Cụm cơ sở dữ liệu $1 đang tắt: $2',
	'toolserver-status-unknown' => 'Trạng thái của cụm $1 không rõ',
	'toolserver-status-missing' => 'Cụm $1 không tồn tại',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Thông báo',
	'toolserver-status-short-warn' => '$1: Cảnh báo',
	'toolserver-status-short-down' => '$1: Tắt',
	'toolserver-status-short-erro' => '$1: Lỗi',
	'toolserver-status-short-unknown' => '$1: Không rõ',
	'toolserver-status-short-missing' => '$1: Không có',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hzy980512
 * @author Liuxinyu970226
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'toolserver-status-ok' => '数据库集群中没有任何问题$1 $2',
	'toolserver-status-info' => '集群$1用戶通知：$2',
	'toolserver-status-warn' => '集群$1用户警告：$2',
	'toolserver-status-down' => '数据库集群$1已被暂时关闭。$2',
	'toolserver-status-erro' => '数据库集群$1已关闭。$2',
	'toolserver-status-unknown' => '集群$1状态未知',
	'toolserver-status-missing' => '集群$1不存在',
	'toolserver-status-short-ok' => '$1: 良好',
	'toolserver-status-short-info' => '$1: 讯息',
	'toolserver-status-short-warn' => '$1：警告',
	'toolserver-status-short-down' => '$1: 停止工作',
	'toolserver-status-short-erro' => '$1: 错误',
	'toolserver-status-short-unknown' => '$1: 未知',
	'toolserver-status-short-missing' => '$1: 丢失',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'toolserver-status-ok' => '數據庫集群沒有任何問題$1 $2',
	'toolserver-status-info' => '集群$1用戶通知：$2',
	'toolserver-status-warn' => '集群$1用戶警告：$2',
	'toolserver-status-down' => '數據庫集群$1已被暫時關閉。$2',
	'toolserver-status-erro' => '數據庫集群$1已關閉。$2',
	'toolserver-status-unknown' => '集群$1狀態未知',
	'toolserver-status-missing' => '集群$1不存在',
	'toolserver-status-short-ok' => '$1：正常',
	'toolserver-status-short-info' => '$1：資訊',
	'toolserver-status-short-warn' => '$1：警告',
	'toolserver-status-short-down' => '$1：暫停工作',
	'toolserver-status-short-erro' => '$1：錯誤',
	'toolserver-status-short-unknown' => '$1：未知',
	'toolserver-status-short-missing' => '$1：丟失',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'toolserver-status-ok' => '資料庫群集$1中沒有任何問題$2',
	'toolserver-status-down' => '資料庫群集$1已被暫時關閉。$2',
	'toolserver-status-erro' => '資料庫群集$1已關閉。$2',
	'toolserver-status-unknown' => '群集$1的狀態未知',
	'toolserver-status-missing' => '群集$1不存在',
	'toolserver-status-short-ok' => '$1:良好',
	'toolserver-status-short-info' => '$1:資訊',
	'toolserver-status-short-warn' => '$1:警告',
	'toolserver-status-short-down' => '$1:停止工作',
	'toolserver-status-short-erro' => '$1:錯誤',
	'toolserver-status-short-unknown' => '$1:未知',
	'toolserver-status-short-missing' => '$1:丢失',
);
