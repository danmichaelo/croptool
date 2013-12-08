<?php
/**
 * Interface messages for tool "templatecount"
 *
 * @toolowner jarry
 */

$url = '//toolserver.org/~jarry/templatecount/';

$messages = array();

/** English
 * @author Jarry1250
 */
$messages['en'] = array(
	'title' => 'Template transclusion count', // Optional
	'enter-details' => 'Enter details',
	'introduction' => "Type in the name of a template (Wikipedias only at the moment) and press go. It's as simple as that. There is some caching (remembering of results), but that is unfortunately outside of the control of this tool and its owner.",
	'language-label' => 'Language',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Page name (excluding namespace)',
	'transclusion-count-label' => 'Number of transclusions',
	'transclusion-count' => '$1 transclusion(s) found.',
	'error-suggestion' => 'Perhaps you misspelt (or incorrectly capitalized) the name of the page?',
	'time-label' => 'Time taken to execute command',
);

/** Message documentation (Message documentation)
 * @author Jarry1250
 * @author Krinkle
 */
$messages['qqq'] = array(
	'title' => 'The title of the tool.
{{Optional}}',
	'enter-details' => 'A heading inviting users to complete a form directly below',
	'introduction' => 'A basic introduction to the tool, illustrating its key facets.',
	'language-label' => '{{Identical|Language}}
The label for a textbox where users enter the language they wish to work with.',
	'namespace-label' => '{{Identical|Namespace}}
The label for a textbox where users enter the namespace they wish to work with.',
	'pagename-label' => 'The label for a textbox where users enter the name of the page they wish to work with, with extra note.',
	'transclusion-count-label' => 'The heading introducing the final result (the number of transclusions fount)',
	'transclusion-count' => '$1 is a number (1 or more), the number of transclusions of an article the tool found.',
	'error-suggestion' => 'A suggestion to the user when no transclusions are found of their chosen page, indicating that they  may have made a mistake in their input.',
	'time-label' => 'The label for the duration representing the time their query took to perform.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'enter-details' => 'Verskaf besonderhede',
	'introduction' => 'Verskaf die naam van \'n sjabloon (slegs vir Wikipedia\'s op die oomblik) en kliek op "OK". Dit is so eenvoudig. Daar word van kasgeheue gebruik gemaak (onthou vorige resultate), maar dit is buite die program en sy eienaar se beheer.',
	'language-label' => 'Taal',
	'namespace-label' => 'Naamruimte',
	'pagename-label' => 'Bladsynaam (sonder die naamruimte)',
	'transclusion-count-label' => 'Aantal sjablone',
	'transclusion-count' => '$1 sjablo(o)n(e) gevind.',
	'error-suggestion' => 'Miskien het u die bladsynaam verkeerd ingevoer (dink aan hoofletters en dergelike)?',
	'time-label' => 'Tyd geneem om opdrag uit te voer',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author أحمد
 */
$messages['ar'] = array(
	'enter-details' => 'أدخل التفاصيل',
	'introduction' => 'أدخل اسم القالب (حاليا "ويكيبيديا" فقط المسموح) ثم أضغط "اذهب"، بكل بساطة. يجري بعض التخزين المخبئي (لتذكر النتائج) وهو خارج عن نطاق تحكم هذه الأداة و مالكها.',
	'language-label' => 'اللغة',
	'namespace-label' => 'فضاء التسمية',
	'pagename-label' => 'اسم الصفحة (باستثناء فضاء التسمية)',
	'transclusion-count-label' => 'عدد التضمينات',
	'transclusion-count' => 'تم العثور على $1 تضمين(ات).',
	'error-suggestion' => 'لربما أخطأت في كتابة اسم الصفحة (أو لم تراع الأحرف اللاتينية الكبيرة)؟',
	'time-label' => 'الوقت المستغرق في تنفيذ الأمر',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'language-label' => 'ܠܫܢܐ',
	'namespace-label' => 'ܚܩܠܐ',
	'transclusion-count-label' => 'ܡܢܝܢܐ ܕܡܬܚܪ̈ܙܢܘܬܐ',
	'transclusion-count' => '$1 ܡܬܚܪ̈ܙܢܘܬܐ ܐܫܬܟܚ.',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'language-label' => 'ভাষা',
	'namespace-label' => 'নামস্থান',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'enter-details' => 'Amiesta los datos',
	'introduction' => "Escribi'l nome d'una plantía (namái Wikipedies de momentu) y calca Dir. Ye tan cenciello como eso. Hai dalgo de caché (recordar los resultaos), pero por desgracia eso ta fuera del control d'esta ferramienta y del so propietariu.",
	'language-label' => 'Llingua',
	'namespace-label' => 'Espaciu de nomes',
	'pagename-label' => 'Nome de la páxina (ensin espaciu de nomes)',
	'transclusion-count-label' => 'Númberu de tresclusiones',
	'transclusion-count' => "S'atoparon $1 tresclusiones.",
	'error-suggestion' => '¿Escribiríes mal (o coles mayúscules incorreutes) el nome de la páxina?',
	'time-label' => 'Tiempu necesariu pa executar el comandu',
);

/** Azerbaijani (azərbaycanca)
 * @author Wertuose
 */
$messages['az'] = array(
	'language-label' => 'Dil',
	'namespace-label' => 'Adlar fəzası',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'enter-details' => 'بیلگیلری وئرین',
	'introduction' => 'بیر شابلون آدینی یازین (بو آن‌دا یالنیز ویکی‌پئدیا) و گئت-ی وورون. بو راحاتلیقدادیر. بیر آز کَش ائتمک واردیر (نتیجه‌لری یاددا ساخلاماق)، اما تأسف‌له بو آراج و اونون یییه‌سینین گوجونون ائشیگینده‌دیر.',
	'language-label' => 'دیل',
	'namespace-label' => 'آدفضاسی',
	'pagename-label' => 'صحیفه آدی (آدفضاسینی چیخاراق)',
	'transclusion-count-label' => 'گؤرونتولمه سایی',
	'transclusion-count' => '$1 گؤرونتولمه تاپیلدی.',
	'error-suggestion' => 'بلکه صحیفه‌نین آدینین ایملاسینی یانلیش یازدینیز (یا دا یانلیشجا حرفلری بؤیوک یازدینیز)؟',
	'time-label' => 'دستورو چالیشدیرماغا گئچن واخت',
);

/** Bashkir (башҡортса)
 * @author Sagan
 */
$messages['ba'] = array(
	'enter-details' => 'Ентекле мәғлүмәт яҙығыҙ',
	'introduction' => 'Ҡалып исемен яҙығыҙ (әлеге ваҡытта тик Википедия өсөн мөмкин) һәм күсеү төймәһен баҫығыҙ. Был ябай ғына. Шулай уҡ кешлау (caching) (эҙләү нәтижәләрен һаклау) эшләй.',
	'language-label' => 'Тел',
	'namespace-label' => 'Исемдәр арауығы',
	'pagename-label' => 'Бит исеме (исемдәр арауығыҡһыҙ)',
	'transclusion-count-label' => 'Башлап ебәреү һаны',
	'transclusion-count' => '$1 башлап ебәреү табылды.',
	'error-suggestion' => 'Бәлки биттең исемен яҙғанда хата ебәргәнһеғеҙҙер йәки хәреф регистры дөрөҫ түгелдер.',
	'time-label' => 'Команданы үтәү өсөн бирелгән ваҡыт',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'enter-details' => 'Увесьці падрабязнасьці',
	'introduction' => 'Увядзіце назву шаблёну (прабачце, у цяперашні момант даступны толькі Вікіпэдыі) і націсьніце «Далей». Гэта нескладана. Існуе кэшаваньне (запамінаньне вынікаў), але гэта, на жаль, па за кантролем гэтага інструмэнту і яго ўладальніка.',
	'language-label' => 'Мова',
	'namespace-label' => 'Прасторы назваў',
	'pagename-label' => 'Назва старонкі (без прасторы назваў)',
	'transclusion-count-label' => 'Колькасьць трансклюзіяў',
	'transclusion-count' => 'Колькасьць знойдзеных трансклюзіяў: $1.',
	'error-suggestion' => 'Верагодна Вы зрабілі артаграфічную памылку ці не супадае рэгістар літар у назьве старонкі?',
	'time-label' => 'Час, які спатрэбіўся на выкананьня каманды',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'language-label' => 'Език',
	'namespace-label' => 'Именно пространство',
	'pagename-label' => 'Име на страницата (без именно пространство)',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Nasir8891
 */
$messages['bn'] = array(
	'enter-details' => 'বিস্তারিত লিখুন',
	'language-label' => 'ভাষা',
	'namespace-label' => 'নামস্থান',
	'pagename-label' => 'পাতার নাম (নামস্থান বাদে)',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'enter-details' => 'Merkañ an titouroù',
	'introduction' => "Merkañ anv ur patrom (Wikipediaoù hepken evit ar mare, hon digarezit) ha pouezañ war Mont. Ken aes ha tra eo. Tammoù krubuilhadennoù zo (memoriñ an disoc'hoù) siwazh, met an dra-se n'emañ ket e dalc'h an ostilh-mañ nag e dalc'h ar perc'henn anezhañ.",
	'language-label' => 'Yezh',
	'namespace-label' => 'Esaouenn anv',
	'pagename-label' => 'Anv ar bajenn (hep an esaouenn anv)',
	'transclusion-count-label' => 'Niver a dreuzkluzadurioù',
	'transclusion-count' => 'Kavez ez eus bet $1 treuzkluzadur.',
	'error-suggestion' => "Marteze eo bet kammskrivet (pe faziet war ar pennlizherennoù) anv ar bajenn ganeoc'h ?",
	'time-label' => 'Amzer lakaet evit seveniñ an urzh',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'error-suggestion' => 'Možda ste pogrešno napisali (ili koristili velika ili mala slova) u nazivu stranice?',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'enter-details' => 'Introduïu les dades',
	'introduction' => "Senzillament, escriviu el nom de la plantilla (de moment només funciona per viquipèdies) i premeu el botó. Existeix una memòria cau que repeteix la llista de resultats, però per desgràcia això està fora del control d'aquesta eina i del seu propietari.",
	'language-label' => 'Idioma',
	'namespace-label' => 'Espai de noms',
	'pagename-label' => "Nom de la pàgina (sense l'espai de noms)",
	'transclusion-count-label' => 'Nombre de transclusions',
	'transclusion-count' => "S'han trobat $1 inclusions.",
	'error-suggestion' => 'Potser heu escrit malament (o amb majúscules no coincidents) el nom de la pàgina.',
	'time-label' => 'Temps necessari per executar les ordres',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'language-label' => 'Мотт',
);

/** Czech (česky)
 * @author Chmee2
 * @author Gaj777
 * @author Jezevec
 * @author Vks
 */
$messages['cs'] = array(
	'enter-details' => 'Vložit podrobnosti',
	'introduction' => 'Zadejte název šablony (zatím pouze z Wikipedie) a pokračujte. Je to velmi jednoduché. Některé informace mohou být zapamatovány, je to ale bohužel mimo kontrolu tohoto nástroje a jeho autora.',
	'language-label' => 'Jazyk',
	'namespace-label' => 'Jmenný prostor',
	'pagename-label' => 'Jméno stránky (bez jmenného prostoru)',
	'transclusion-count-label' => 'Počet transkluzí',
	'transclusion-count' => '$1 transkluzí nalezeno',
	'error-suggestion' => 'Možná jste zadali chybný název stránky? Ověřte také velikost písmen.',
	'time-label' => 'Čas vykonávání příkazu',
);

/** Chuvash (Чӑвашла)
 * @author Salam
 */
$messages['cv'] = array(
	'enter-details' => 'Вакки-тӗвеккине кӗртӗр',
	'language-label' => 'Чӗлхе',
	'namespace-label' => 'Ятсен уҫлӑхӗ',
	'pagename-label' => 'Страница ячӗ (ятсен уҫлӑхӗсӗр)',
);

/** Danish (dansk)
 * @author Christian List
 * @author Erisos
 * @author Sarrus
 */
$messages['da'] = array(
	'enter-details' => 'Indtast detaljer',
	'introduction' => 'Skriv navnet på en skabelon (kun Wikipediaer i øjeblikket) og tryk på go. Så simpelt er det. Der er noget caching (resultaterne huskes), men det er desværre uden for kontrol af dette værktøj og dens ejer.',
	'language-label' => 'Sprog',
	'namespace-label' => 'Navnerum',
	'pagename-label' => 'Sidenavn (uden navnerum)',
	'transclusion-count-label' => 'Antallet af indlejringer',
	'transclusion-count' => '$1 indlejring(er) fundet.',
	'error-suggestion' => 'Måske har du stavet navnet på siden forkert (eller skrevet med stort)?',
	'time-label' => 'Tid det tog at udføre kommandoen',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Steef389
 */
$messages['de'] = array(
	'enter-details' => 'Details eingeben',
	'introduction' => 'Gib den Namen einer Vorlage an (aktuell nur von Wikipedias) und klicke „Ausführen“ – so einfach ist das. Es kann sein, dass gecachte Ergebnisse (ältere Vorlagenversionen) ausgegeben werden. Dies liegt leider außerhalb des Einflussbereichs dieses Hilfsprogramms.',
	'language-label' => 'Sprache',
	'namespace-label' => 'Namensraum',
	'pagename-label' => 'Seitenname (ohne Namensraum)',
	'transclusion-count-label' => 'Anzahl der Vorlageneinbindungen',
	'transclusion-count' => '$1 Vorlageneinbindung(en) wurden ermittelt.',
	'error-suggestion' => 'Vielleicht wurde der Name der Seite falsch geschrieben (Schreibung und/oder großer Anfangsbuchstabe)?',
	'time-label' => 'Benötigte Zeit zur Ausführung der Anweisung',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'introduction' => 'Geben Sie den Namen einer Vorlage an (aktuell nur die Wikipedias) und klicken Sie „Los“ – so einfach ist das. Es kann sein, dass gecachte Ergebnisse (ältere Vorlagenversionen) ausgegeben werden. Dies liegt leider außerhalb des Einflussbereichs dieses Hilfsprogramms.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'language-label' => 'Zıwan',
	'namespace-label' => 'Cayê namey',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'enter-details' => 'Drobnostki zapódaś',
	'introduction' => 'Zapiš mě pśedłogi (tuchylu jano Wikipedije) a klikni na "Pytaś", Tak jadnore to jo.  Su pufrowane wuslědki, ale to njepódlažy bóžko pód wliwom rěda a jogo wobsejźerja.',
	'language-label' => 'Rěc',
	'namespace-label' => 'Mjenjowy rum',
	'pagename-label' => 'Mě boka (bźez mjenjowego ruma)',
	'transclusion-count-label' => 'Licba transkluzijow',
	'transclusion-count' => '{{PLURAL:$1|1 transkluzija jo se namakała|$1 transkluziji stej se namakałej|$1 transkluzije su se namakali|$1 transkluzijow jo se namakało}}.',
	'error-suggestion' => 'Snaź sy mě boka wopak (abo z wopacnym wjelikopisanim) napisał?',
	'time-label' => 'Trěbny cas za wuwjeźenje pśikaza',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'enter-details' => 'Καταχωρήστε λεπτομέρειες',
	'introduction' => 'Γράψτε το όνομα του πρότυπο (μόνο Βικιπαίδειες προς το παρόν) και πατήστε ΟΚ. Είναι τόσο απλό. Υπάρχει κάποια λανθάνουσα μνήμη (αποθήκευση των αποτελεσμάτων), αλλά αυτό δυστυχώς είναι εκτός του ελέγχου αυτού του εργαλείου και του ιδιοκτήτη του.',
	'language-label' => 'Γλώσσα',
	'namespace-label' => 'Ομάδα σελίδων',
	'pagename-label' => 'Τίτλος σελίδα (εκτός της ομάδας σελίδων)',
	'transclusion-count-label' => 'Αριθμός ενσωματώσεων',
	'transclusion-count' => '$1 ενσωματώσεις βρέθηκαν.',
	'error-suggestion' => 'Ίσως γράψατε λάθος (ή λάθος πεζά-κεφαλαία) τον τίτλο της σελίδας;',
	'time-label' => 'Χρόνος που πέρασε για την εκτέλεση της εντολής',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'error-suggestion' => 'Perhaps you misspelt (or incorrectly capitalised) the name of the page?',
);

/** Esperanto (Esperanto)
 * @author Anakmalaysia
 */
$messages['eo'] = array(
	'language-label' => 'Lingvo',
	'namespace-label' => 'Nomspaco',
	'pagename-label' => 'Paĝnomo (escepti nomspaco)',
	'time-label' => 'Tempo bezonata por ekzekuti komando',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'enter-details' => 'Introduce los datos',
	'introduction' => 'Escribe el nombre de una plantilla (solo Wikipedias por el momento, lo siento) y pulsa Ir. Es tan simple como eso. Hay algo de caché (recordar los resultados), pero eso lamentablemente está fuera del control de esta herramienta y de su propietario.',
	'language-label' => 'Idioma',
	'namespace-label' => 'Espacio de nombres',
	'pagename-label' => 'Nombre de la página (sin el espacio de nombres)',
	'transclusion-count-label' => 'Número de transclusiones',
	'transclusion-count' => '$1 transclusión(es) encontradas.',
	'error-suggestion' => 'Quizás has escrito mal el nombre de la página.',
	'time-label' => 'Tiempo necesario para ejecutar la orden',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'enter-details' => 'Üksikasjade sisestamine',
	'introduction' => 'Sisesta malli nimi (praegu ainult Vikipeediatele) ja klõpsa "Mine". Nii lihtne ongi. Mõned tulemused võivad jääda vahemällu, aga sellest hoidumine pole paraku selle tööriista abil võimalik ega tööriista arendaja võimuses.',
	'language-label' => 'Keel',
	'namespace-label' => 'Nimeruum',
	'pagename-label' => 'Lehekülje nimi (nimeruumita)',
	'transclusion-count-label' => 'Kasutamiste arv',
	'transclusion-count' => 'Kasutamisi leitud: $1.',
	'error-suggestion' => 'Võib-olla kirjutasid või suurtähestasid lehekülje nime valesti?',
	'time-label' => 'Käsu täitmiseks kulunud aeg',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'enter-details' => 'Xehetasunak idatzi',
	'language-label' => 'Hizkuntza',
	'namespace-label' => 'Izen-tartea',
);

/** Persian (فارسی)
 * @author Ebraminio
 */
$messages['fa'] = array(
	'enter-details' => 'واردکردن مشخصات',
	'language-label' => 'زبان',
	'namespace-label' => 'فضای نام',
	'pagename-label' => 'نام صفحه (به استثنای فضای نام)',
	'transclusion-count-label' => 'تعداد تراگنجانش‌ها',
	'transclusion-count' => '$1 تراگنجانش یافت شد',
	'error-suggestion' => 'شاید شما نام صفحه را از نظر املائی (یا در حروف بزرگ و کوچک) اشتباه کرده‌اید؟',
	'time-label' => 'زمان طول کشیده برای اجرای دستور',
);

/** Finnish (suomi)
 * @author Silvonen
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'enter-details' => 'Kirjoita tiedot',
	'introduction' => 'Kirjoita mallineen nimi (tällä hetkellä vain Wikipedioiden mallineet) ja paina Siirry. Niin yksinkertaista se on. Välimuistiin jää jälkiä (tulokset muistetaan), mutta siihen ei tämä työkalu tai sen omistaja voi valitettavasti vaikuttaa.',
	'language-label' => 'Kieli',
	'namespace-label' => 'Nimiavaruus',
	'pagename-label' => 'Sivun nimi (ilman nimiavaruutta)',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'enter-details' => 'Greið frá smálutum',
	'language-label' => 'Mál',
	'namespace-label' => 'Navnarúm',
	'pagename-label' => 'Síðunavn (tó ikki navnarúm)',
	'transclusion-count-label' => 'Tal av innsetingum',
	'transclusion-count' => '$1 innseting(ar) funnar.',
	'error-suggestion' => 'Manst tú hava stava síðuheitið skeivt (ella av misgáum skrivað við stórum)?',
	'time-label' => 'Tann tíð ið tað tók at útføra fyrispurningin',
);

/** French (français)
 * @author Jean-Frédéric
 * @author Od1n
 * @author Seb35
 */
$messages['fr'] = array(
	'title' => 'Compteur de transclusions de modèles',
	'enter-details' => 'Entrez les détails',
	'introduction' => 'Entrez le nom d’un modèle (Wikipédias seulement pour l’instant, désolé), et appuyez sur go. C’est aussi simple que cela. Il y a quelques mise en cache (mémorisation de résultats), mais c’est malheureusement hors du contrôle de cet outil et de son propriétaire.',
	'language-label' => 'Langue',
	'namespace-label' => 'Espace de noms',
	'pagename-label' => 'Nom de la page (sans l’espace de noms)',
	'transclusion-count-label' => 'Nombre de tranclusions',
	'transclusion-count' => '$1 transclusion(s) trouvées.',
	'error-suggestion' => 'Peut-être avez-vous mal épelé (ou mal capitalisé) le nom de la page ?',
	'time-label' => 'Temps pris pour exécuter la commande',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'enter-details' => 'Buchiéd los dètalys',
	'language-label' => 'Lengoua',
	'namespace-label' => 'Èspâço de noms',
	'pagename-label' => 'Nom de la pâge (sen l’èspâço de noms)',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'language-label' => 'Teanga',
	'namespace-label' => 'Ainmspás:',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title' => 'Contador das transclusións de modelos',
	'enter-details' => 'Insira os detalles',
	'introduction' => 'Escriba o nome dun modelo (sentímolo, nestes intres só para wikipedias) e prema no botón para continuar. É así de sinxelo. Hai problemas de memoria caché (que lembra os resultados), pero desgraciadamente isto está fóra do control da ferramenta e mais do seu dono.',
	'language-label' => 'Lingua',
	'namespace-label' => 'Espazo de nomes',
	'pagename-label' => 'Nome da páxina (sen o espazo de nomes)',
	'transclusion-count-label' => 'Número de inclusións',
	'transclusion-count' => 'Atopáronse $1 inclusións.',
	'error-suggestion' => 'Poida que escribise mal o nome da páxina.',
	'time-label' => 'Tempo necesario para executar o comando',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'language-label' => 'Γλῶττα',
);

/** Gujarati (ગુજરાતી)
 * @author Harsh4101991
 */
$messages['gu'] = array(
	'language-label' => 'ભાષા',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'enter-details' => 'הזנת פרטים',
	'introduction' => 'יש להזין את שם התבנית (כעת רק ויקיפדיה נתמכת, סליחה) וללחוץ "הפעלה". זה פשוט מאוד. יש קצת הטמנה (זכירת תוצאות), אבל זה מחוץ לשליטת הכלי הזה ושל מחברו.',
	'language-label' => 'שפה',
	'namespace-label' => 'מרחב שם',
	'pagename-label' => 'שם הדף (ללא מרחב השם)',
	'transclusion-count-label' => 'מספר ההכללות',
	'transclusion-count' => 'מספר ההכללות שנמצאו: $1',
	'error-suggestion' => 'אולי לא כתבת נכות את שם הדף? יש לכתוב במדויק אותיות קטנות ורישיות.',
	'time-label' => 'כמה זמן לקח להריץ את הפקודה',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'enter-details' => 'विवरण दें',
	'introduction' => 'एक साँचे का नाम लिखें (इस समय केवल विकिपीडियाओं पर साँचों का) और go दबाएँ। बस इतना ही करना है। परिणाम कुछ हद तक याद रखे जाते हैं (कैश मेमोरी में), परंतु वह इस उपकरण और इसके मालिक के नियंत्रण से बाहर है।',
	'language-label' => 'भाषा',
	'namespace-label' => 'नामस्थान',
	'pagename-label' => 'पृष्ठ का नाम (नामस्थान के बिना)',
	'transclusion-count-label' => 'ट्रांस्क्लूज़न संख्या',
	'transclusion-count' => '$1 ट्रांस्क्लूज़न मिले',
	'error-suggestion' => 'शायद आपने पृष्ठ के नाम की वर्तनी गलत लिखी (या गलत केस में लिखी)?',
	'time-label' => 'कार्य करने में लगा समय',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'enter-details' => 'Podrobnosće zapodać',
	'introduction' => 'Zapisaj mjeno předłohi (tuchwilu jenož Wikipedije) a klikń na "Pytać", Tak jednore to je.  Su pufrowane wuslědki, ale to bohužel pod wliwom nastroja a jeho wobsedźerja njepodleži.',
	'language-label' => 'Rěč',
	'namespace-label' => 'Mjenowy rum',
	'pagename-label' => 'Mjeno strony (bjez mjenoweho ruma)',
	'transclusion-count-label' => 'Ličba transkluzijow',
	'transclusion-count' => '{{PLURAL:$1|1 transkluzija je so namakała|$1 transkluziji stej so namakałoj|$1 transkluzije su so namakali|$1 transkluzijow je so namakało}}.',
	'error-suggestion' => 'Snano sy mjeno strony wopak (abo z wopačnym wulkopisanjom) napisał?',
	'time-label' => 'Trěbny čas za wuwjedźenje přikaza',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'enter-details' => 'Részletek megadása',
	'introduction' => 'Add meg a sablon nevét (bocsi, egyelőre csak Wikipédiák esetén működik), majd kattints a Menj gombra. Ilyen egyszerű. Van némi gyorsítótárazás (az eredmények eltárolása), de ez sajnos az eszköz és az eszköz készítőjének hatáskörén kívülre esik.',
	'language-label' => 'Nyelv',
	'namespace-label' => 'Névtér',
	'pagename-label' => 'Lap neve (névtér nélkül)',
	'transclusion-count-label' => 'Beillesztések száma',
	'transclusion-count' => '$1 beillesztés található.',
	'error-suggestion' => 'Talán elgépelted a lap nevét, vagy rossz helyen használtál kis- és nagybetűket?',
	'time-label' => 'A parancs végrehajtásához szükséges idő',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'enter-details' => 'Entra detalios',
	'introduction' => 'Entra le nomine de un patrono (functiona solmente pro le Wikipedias) e preme sur "ir". Es tanto simple. Le datos pote esser recuperate del cache (memorisation de resultatos), ma isto es infortunatemente foras del influentia de iste instrumento e de su proprietario.',
	'language-label' => 'Lingua',
	'namespace-label' => 'Spatio de nomines',
	'pagename-label' => 'Nomine del pagina (sin spatio de nomines)',
	'transclusion-count-label' => 'Numero de transclusiones',
	'transclusion-count' => '$1 transclusion(es) trovate.',
	'error-suggestion' => 'Forsan tu ha mal orthographiate le nomine del pagina (o usate majusculas/minusculas incorrecte)?',
	'time-label' => 'Tempore prendite pro executar le commando',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 * @author Farras
 */
$messages['id'] = array(
	'enter-details' => 'Masukan detail',
	'introduction' => 'Ketikkan nama templat (Wikipedia saja untuk saat ini) dan tekan cari. Simpel sekali. Terjadi penyinggahan (pengingatan hasil), namun hal ini berada di luar kontrol alat ini dan pemiliknya.',
	'language-label' => 'Bahasa',
	'namespace-label' => 'Ruang nama',
	'pagename-label' => 'Judul halaman (tidak termasuk ruang nama)',
	'transclusion-count-label' => 'Jumlah transklusi',
	'transclusion-count' => '$1 transklusi ditemukan.',
	'error-suggestion' => 'Apakah Anda salah mengeja (atau salah menempatkan huruf kapital) judul halaman?',
	'time-label' => 'Waktu yang dibutuhkan untuk melaksanakan perintah',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'language-label' => 'Ásụ̀sụ̀',
	'namespace-label' => 'Ámááhà',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'language-label' => 'Мотт',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 */
$messages['it'] = array(
	'title' => 'Conteggio delle transclusioni dei template',
	'enter-details' => 'Precisa i dettagli',
	'introduction' => "Scrivi il nome di un template (solo versioni di Wikipedia, al momento) e premi su vai. È davvero semplice, proprio così. C'è qualche memorizzazione nella cache (memoria di precedenti risultati), ma questo purtroppo va oltre la capacità di controllo di questo tool e del suo gestore.",
	'language-label' => 'Lingua',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Nome della pagina (escluso il namespace)',
	'transclusion-count-label' => 'Numero di inclusioni',
	'transclusion-count' => '$1 inclusioni trovate.',
	'error-suggestion' => 'Per caso hai sbagliato a scrivere il nome della pagina (o le maiuscole)?',
	'time-label' => "Tempo impiegato per eseguire l'operazione",
);

/** Japanese (日本語)
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title' => 'テンプレートの参照読み込み回数計算',
	'enter-details' => '詳細を入力',
	'language-label' => '言語',
	'namespace-label' => '名前空間',
	'pagename-label' => 'ページ名 (名前空間を除く)',
	'transclusion-count-label' => '参照読み込みの回数',
	'transclusion-count' => '$1 件の参照読み込みが見つかりました。',
	'error-suggestion' => 'ページ名の綴りが正しいか、誤って大文字にしていないか、確認してください。',
	'time-label' => 'コマンドの実行に要した時間',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'enter-details' => 'Lebokaké rincian',
	'introduction' => 'Tulisaké jeneng tèmplat (Wikipédia waé kanggo saiki) lan pencèt golèk. Mayar banget ta. Ana panyinggahan (ngéling-éling asil), ning sajabaning pangawasan piranti iki sarta sing nduwèni.',
	'language-label' => 'Basa',
	'namespace-label' => 'Bilik jeneng',
	'pagename-label' => 'Jeneng kaca (kajaba bilik jeneng)',
	'transclusion-count-label' => 'Cacahé transklusi',
	'transclusion-count' => '$1 transklusi ditemokaké.',
	'error-suggestion' => 'Apa Sampéyan salah ngeja (utawa salah nganggo hurup gedhé) jeneng kacané?',
	'time-label' => 'Wektu sing dibutuhaké kanggo nglakokaké prèntah',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'language-label' => 'ენა',
	'namespace-label' => 'სახელთა სივრცე',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'language-label' => 'ភាសា',
	'namespace-label' => 'លំហឈ្មោះ',
);

/** Kannada (ಕನ್ನಡ)
 * @author M G Harish
 */
$messages['kn'] = array(
	'enter-details' => 'ವಿವರಣೆಗಳನ್ನು ತುಂಬಿ',
	'language-label' => 'ಭಾಷೆ',
	'namespace-label' => 'ನಾಮವರ್ಗ',
	'pagename-label' => 'ಪುಟದ ಹೆಸರು (ನಾಮವರ್ಗ ಹೊರತುಪಡಿಸಿ)',
	'transclusion-count-label' => 'ಅಡಕಗೊಳ್ಳುವಿಕೆಗಳ ಸಂಖ್ಯೆ',
	'transclusion-count' => '$1 ಅಡಕಗೊಳ್ಳುವಿಕೆ(ಗಳು) ಸಿಕ್ಕಿವೆ.',
	'error-suggestion' => 'ನೀವು ಹೆಚ್ಚಾಗಿ ಪುಟದ ಹೆಸರನ್ನು ತಪ್ಪಾಗಿ (ಅಥವಾ ತಪ್ಪು ಕಾಗುಣಿತ) ನಮೂದಿಸಿದ್ದೀರಿ',
	'time-label' => 'ಆಣತಿಯನ್ನು ನೆರವೇರಿಸಲು ತೆಗೆದುಕೊಂಡ ಸಮಯ',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'title' => '틀 트랜스클루전 수',
	'enter-details' => '자세한 정보 입력',
	'introduction' => '틀 이름(현재 위키백과만)을 입력하고 가기를 누르세요. 간단합니다. 몇 가지 캐시(결과 기억)를 하지만, 불행히도 도구와 도구 소유자의 통제 밖입니다.',
	'language-label' => '언어',
	'namespace-label' => '이름공간',
	'pagename-label' => '문서 이름 (이름공간 제외)',
	'transclusion-count-label' => '틀을 포함하는 횟수',
	'transclusion-count' => '$1회의 틀 포함을 확인했습니다.',
	'error-suggestion' => '아마도 문서 이름(또는 대소문자)을 잘못 입력했습니까?',
	'time-label' => '명령을 실행하는 데 걸린 시간',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'title' => 'Enjebonge Schabloone-Zahl',
	'enter-details' => 'Jiv de Ennzelheite en',
	'introduction' => 'Jiv dä Name vun ene Schablohn aan — em Momang allein uß de Wikipedias — un scheck Ding Ennjaabe af. Et weed e beßje zweschejeschpeischert, wat heh dat Projramm fengk, ävver dat kann weeder heh dat Projramm noch singe Schriever ändere.',
	'language-label' => 'Schprooch',
	'namespace-label' => 'Appachtemang',
	'pagename-label' => 'Name för di Sigg, der ohne Appachtemang',
	'transclusion-count-label' => 'De Aanzahl enjebonge Schablohne es',
	'transclusion-count' => '$1 jefonge.',
	'error-suggestion' => 'Velleich häß De Desch vertipp udder jät verkeht jruß udder klein jeschrevve?',
	'time-label' => 'De Zigg, di dat Projramm jebruch hät',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'language-label' => 'Ziman',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'language-label' => 'Lingua',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'enter-details' => 'Detailer aginn',
	'introduction' => "Gitt den Numm vun enger Schabloun an (elo nëmmen op Wikipedia) a klickt 'Lass'. Et ass sou einfach wéi dat. Et ka sinn datt Resultater aus dem Tëschespäicher gewise ginn, awer dat kann net vun dësem Tool oder sengem Besëtzer kontrolléiert ginn.",
	'language-label' => 'Sprooch',
	'namespace-label' => 'Nummraum',
	'pagename-label' => 'Numm vun der Säit (ouni Nummraum)',
	'transclusion-count-label' => 'Zuel vun den agebonnene Schablounen',
	'transclusion-count' => '$1 agebonne Schabloune goufe fonnt',
	'error-suggestion' => 'Vläicht hutt Dir den Numm vun der Säit falsch geschriwwen (oder just grouss a kleng Buschtawe verwiesselt).',
	'time-label' => "Zäit déi gebraucht gouf fir d'Aufgab ze maachen",
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'enter-details' => 'Įveskite detales',
	'language-label' => 'Kalba',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title' => 'Број на превметнувања на шаблон',
	'enter-details' => 'Внесете податоци',
	'introduction' => 'Внесете го името на шаблонот (нажалост, засега само за Википедии) и стиснете на „Оди“. Толку. Ќе се изврши извесно кеширање (за да се запаметат резултатите), но тоа е нажалост вон контролата на алаткава и нејзиниот сопственик.',
	'language-label' => 'Јазик',
	'namespace-label' => 'Именски простор',
	'pagename-label' => 'Име на страницата (без именскиот простор)',
	'transclusion-count-label' => 'Број на превметнувања',
	'transclusion-count' => 'Пронајдени се $1 превметнувања.',
	'error-suggestion' => 'Можеби погрешно сте го напишале името на страницата?',
	'time-label' => 'Наредбата е извршена за:',
);

/** Malayalam (മലയാളം)
 * @author Akhilan
 */
$messages['ml'] = array(
	'enter-details' => 'വിവരങ്ങൾ ചേർക്കുക',
	'language-label' => 'ഭാഷ',
	'namespace-label' => 'നാമമേഖല',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'enter-details' => 'माहिती भरा',
	'introduction' => "साच्याचे नाव टंका(सध्या विकिपिडिया) व 'जा' टिचका. हे ईतके सोपे आहे.येथे काही 'सयीकरण' आहे(निकाल स्मृती)परंतु ते, दुर्दैवाने, या साधनाच्या व त्याचे मालकाच्या आवाक्याबाहेर आहे.",
	'language-label' => 'भाषा',
	'namespace-label' => 'नामविश्वे',
	'pagename-label' => 'पाननाम(नामविश्वारहीत)',
	'transclusion-count-label' => 'एकुण आंतरविन्यासाची संख्या',
	'transclusion-count' => '$1 आंतरविन्यास सापडले.',
	'error-suggestion' => 'बहुतेक काय आपण या पानाचे नाव चुकिचे टाकले?',
	'time-label' => 'आदेश कार्यवाहीस लागलेला वेळ',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'enter-details' => 'Isikan butiran',
	'introduction' => 'Taipkan nama templat (kegunaan Wikipedia sahaja buat masa ini), kemudian tekan Pergi. Mudah sahaja. Nanti ia akan di-cache-kan (hasil carian akan diingati), tetapi ini adalah di luar kawalan alatan ini dan pemiliknya.',
	'language-label' => 'Bahasa',
	'namespace-label' => 'Ruang nama',
	'pagename-label' => 'Nama laman (tidak termasuk ruang nama)',
	'transclusion-count-label' => 'Bilangan transklusi',
	'transclusion-count' => '$1 transklusi dijumpai.',
	'error-suggestion' => 'Mungkin anda tersalah eja (atau tersalah letak huruf besar) nama halaman itu.',
	'time-label' => 'Masa yang diambil untuk melaksanakan perintah',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'enter-details' => 'Daħħal id-dettalji',
	'language-label' => 'Lingwa',
	'namespace-label' => 'Spazju tal-isem',
	'pagename-label' => 'Isem tal-paġna (barra l-ispazju tal-isem)',
	'transclusion-count-label' => "Numru ta' inklużjonijiet",
	'transclusion-count' => '$1 inklużjonijiet misjuba.',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'language-label' => 'زوون',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'enter-details' => 'Skriv inn detaljer',
	'introduction' => 'Skriv inn navnet på en mal (kun fra Wikipedia for øyeblikket, beklager) og trykk start. Det er så enkelt som det. Det er noe hurtiglagring (husking av resultater), men det er beklageligvis utenfor vår og verktøyets kontroll.',
	'language-label' => 'Språk',
	'namespace-label' => 'Navnerom',
	'pagename-label' => 'Sidenavn (ekskludert navnerom)',
	'transclusion-count-label' => 'Antall transklusjoner',
	'transclusion-count' => '$1 transklusjon(er) funnet.',
	'error-suggestion' => 'Kanskje du stavet navnet på siden feil (eller bommet på små og store bokstaver)?',
	'time-label' => 'Tiden det tar å utføre kommandoen',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'language-label' => 'Spraak',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'enter-details' => 'विवरण दर्ता यानादिसँ',
	'language-label' => 'भाय्',
	'namespace-label' => 'नेमस्पेस:',
	'pagename-label' => 'पौया नां (नेमस्पेस मतसें)',
	'transclusion-count-label' => 'त्रान्सक्लुसनतयेगु ल्या',
	'transclusion-count' => '$1 त्रान्सक्लुसन लुत।',
	'time-label' => 'ब्वःगु ज्या यायेत काःगु ई',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'enter-details' => 'Gegevens invoeren',
	'introduction' => 'Geef de naam in van een sjabloon (werkt alleen voor Wikipedia\'s op het moment) en klik op "OK". Zo eenvoudig is het. Er wordt gebruik gemaakt van cachen (onthouden van resultaten), maar daar heeft dit hulpprogramma geen invloed op.',
	'language-label' => 'Taal',
	'namespace-label' => 'Naamruimte',
	'pagename-label' => 'Paginanaam (zonder de naamruimte)',
	'transclusion-count-label' => 'Aantal sjablonen',
	'transclusion-count' => '$1 sjablo(o)n(en) gevonden.',
	'error-suggestion' => 'Misschien hebt u de paginanaam verkeerd ingevoerd (denk aan hoofdletters en dergelijke)?',
	'time-label' => 'Uitvoertijd van het commando',
);

/** no (no)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'enter-details' => 'Skriv inn detaljer',
	'introduction' => 'Skriv inn navnet på en mal (kun fra Wikipedia i øyeblikket, beklager) og trykk start. Det er så enkelt som det. Det er noe hurtiglagring (husking av resultater), men det er beklageligvis utenfor vår og verktøyets kontroll.',
	'language-label' => 'Språk',
	'namespace-label' => 'Navnerom',
	'pagename-label' => 'Sidenavn (ekskludert navnerom)',
	'transclusion-count-label' => 'Antall transklusjoner',
	'transclusion-count' => '$1 transklusjon(er) funnet.',
	'error-suggestion' => 'Kanskje du stavet navnet på siden feil (eller bommet på små og store bokstaver)?',
	'time-label' => 'Tiden det tar å utføre kommandoen',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'language-label' => 'Lenga',
	'namespace-label' => 'Espaci de noms',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'enter-details' => 'ବିବରଣୀ ଦିଅନ୍ତୁ',
	'language-label' => 'ଭାଷା',
	'namespace-label' => 'ନେମସ୍ପେସ',
	'pagename-label' => 'ପୃଷ୍ଠାନାମ (ନେମସ୍ପେସକୁ ଛାଡି)',
	'error-suggestion' => 'ଆପଣ ବୋଧହୁଏ ପୃଷ୍ଠାର ଭୁଲ ବନାନ (କିମ୍ବା ଭୁଲ ସାନବଡ ଅକ୍ଷର) କରିଛନ୍ତି ?',
	'time-label' => 'କମାଣ୍ଡ କାମ କରିବାଲାଗି ନେଉଥିବା ସମୟ',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'language-label' => 'Æвзаг',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'language-label' => 'Schprooch',
	'namespace-label' => 'Blatznaame',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'language-label' => 'Schbrooch',
);

/** Polish (polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'enter-details' => 'Podaj szczegóły',
	'introduction' => 'Wpisz nazwę szablonu (w tej chwili wyłącznie z Wikipedii), a następnie kliknij dalej. To banalnie proste. Niektóre informacje mogą być buforowane (zapamiętane wyniki), ale niestety odbywa się to poza kontrolą tego narzędzia i jego autora.',
	'language-label' => 'Język',
	'namespace-label' => 'Przestrzeń nazw',
	'pagename-label' => 'Nazwa strony (bez przestrzeni nazw)',
	'transclusion-count-label' => 'Liczba transclusion (zaciągnięć treści innej strony)',
	'transclusion-count' => 'Odnaleziono $1 zaciągnięć treści innej strony.',
	'error-suggestion' => 'Możliwe, że zrobiłeś literówkę w nazwie strony (sprawdź wielkość liter).',
	'time-label' => 'Czas wykonywania polecenia',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'enter-details' => "Ch'a anserissa ij detaj",
	'introduction' => "Ch'a scriva ël nòm ëd në stamp (mach për Wikipedia al moment) e ch'a sgnaca andé. A basta mach parèj. A-i é cheicòs an memòria (memòria dj'arzultà), ma lòn a l'é për maleur fòra dël contròl dë st'utiss e dij sò gestor.",
	'language-label' => 'Lenga',
	'namespace-label' => 'Spassi nominal',
	'pagename-label' => 'Nòm ëd la pàgina (sensa lë spassi nominal)',
	'transclusion-count-label' => "Nùmer d'anclusion",
	'transclusion-count' => '$1 anclusion trovà.',
	'error-suggestion' => "Miraco a l'ha fàit un boro (o sbalià le majùscole) ant ël nòm ëd la pàgina?",
	'time-label' => 'Temp butà për eseguì ël comand.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'language-label' => 'ژبه',
	'namespace-label' => 'نوم-تشيال',
);

/** Portuguese (português)
 * @author Sarilho1
 */
$messages['pt'] = array(
	'language-label' => 'Língua',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 */
$messages['pt-br'] = array(
	'enter-details' => 'Inserir detalhes',
	'introduction' => 'Digite o nome de uma predefinição (somente as Wikipédia, no momento) e clique em Ir. É tão simples como isso. Há algo da cache (recorde os resultados), mas está infelizmente fora do controle desta ferramenta e de seu proprietário.',
	'language-label' => 'Idioma',
	'namespace-label' => 'Namespace',
	'pagename-label' => 'Nome da página (sem o namespace)',
	'transclusion-count-label' => 'Número de transclusões',
	'transclusion-count' => '$1 transclusão(ões) encontrada(s).',
	'error-suggestion' => 'Será que você escreveu mal o nome da página?',
	'time-label' => 'Tempo necessário para executar o comando',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'enter-details' => 'Introduceți detalii',
	'introduction' => 'Introduceți numele unui format (pentru moment funcționează doar pentru Wikipedia, ne pare rău) și apăsați Du-te. Atât de simplu. Trebuie spus că se rețin și informații în memoria cache (date care țin de rezultate), dar, din păcate, acest lucru nu poate fi controlat de către această unealtă sau de către deținătorul ei.',
	'language-label' => 'Limbă',
	'namespace-label' => 'Spațiu de nume',
	'pagename-label' => 'Numele paginii (fără spațiul de nume)',
	'transclusion-count-label' => 'Număr de transcluderi',
	'transclusion-count' => '$1 transcluderi(e) găsite(ă).',
	'error-suggestion' => 'Poate că ați ortografiat greșit numele paginii (sau ați folosit în mod eronat majuscula/minuscula inițială)?',
	'time-label' => 'Timpul necesar executării comenzii',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'enter-details' => 'Mitte le dettaglie',
	'introduction' => "Scrive 'u nome d'e 'nu modelle (Uicchipedie sulamende pe mò) e cazze ''veje''. Jè probbie facile facile. Ste quacche cache (arrecorde de le resultate), ma ca comungue jè fore da 'u condrolle de stu strumende e 'u probbietarie sue.",
	'language-label' => 'Lènghe',
	'namespace-label' => 'Namespace',
	'pagename-label' => "Nome d'a pàgene (escluse 'u namespace)",
	'transclusion-count-label' => "Numere de 'nglusiune",
	'transclusion-count' => "$1 'nglusiune acchiate.",
	'error-suggestion' => "Pò essere ca tu è scritte male (o è ausate 'u maiuscole) pu nome d'a pàgene?",
	'time-label' => "Tiembe pigghiate pe eseguì 'u comande",
);

/** Russian (русский)
 * @author DarkSTALKER
 * @author Eleferen
 * @author Lvova
 */
$messages['ru'] = array(
	'enter-details' => 'Введите подробности',
	'introduction' => 'Введите имя шаблона (на данный момент доступно только для Википедии) и нажмите кнопку перехода. Это так просто. Так же существует кэширование (хранение результатов поиска), но, к сожалению, оно не контролируется данным инструментом и его владельцем.',
	'language-label' => 'Язык',
	'namespace-label' => 'Пространство имён',
	'pagename-label' => 'Имя страницы (без пространства имён)',
	'transclusion-count-label' => 'Количество включений',
	'transclusion-count' => 'Найдено $1 включение(я).',
	'error-suggestion' => 'Быть может, вы опечатались в названии страницы или использовали неверный регистр букв?',
	'time-label' => 'Время, необходимое для выполнения команды',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'enter-details' => 'විස්තර ඇතුළුකරන්න',
	'language-label' => 'බස',
	'namespace-label' => 'නාමාවකාශය:',
	'pagename-label' => 'පිටුවේ නම (නාමඅවකාශය නැතුව)',
	'transclusion-count-label' => 'transclusions ගණන',
	'transclusion-count' => '$1 transclusion(s) හමුවුණි.',
	'time-label' => 'විධානය ක්‍රියාත්මක කිරීමට ගත කාලය',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'enter-details' => 'Vnesite podrobnosti',
	'introduction' => 'Vnesite ime predloge (trenutno samo Wikipedije, oprostite) in pritisnite Pojdi. Tako preprosto je. Nekaj je predpomnjenja (spomina rezultatov), vendar je to žal izven nadzora tega orodja in njenega lastnika.',
	'language-label' => 'Jezik',
	'namespace-label' => 'Imenski prostor',
	'pagename-label' => 'Naslov strani (brez imenskega prostora)',
	'transclusion-count-label' => 'Število vključitev',
	'transclusion-count' => 'Najdeno $1 preusmeritev.',
	'error-suggestion' => 'Morda ste narobe črkovali (ali uporabili napačne začetnice) naslov strani?',
	'time-label' => 'Čas, porabljen za izvršitev ukaza',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 */
$messages['so'] = array(
	'enter-details' => 'Gali Faah faahinta',
	'introduction' => 'Qor magaca  template (ee Wikipedias hadda) kadibna guji soco. waa iska tusaale uun. Waxaa jirta kaydin si kumeel gaar ah (natiijo xasuusin), Laakiin waa wax ka baxsan awooda maamulkaan iyo lahaanshaheeda waana ka xunahay.',
	'language-label' => 'Luqada',
	'namespace-label' => 'Meesha banaan',
	'pagename-label' => 'Magaca bogga (Waxay gooni utahay meel banaan ee wax lagu qoro)',
	'transclusion-count-label' => 'Tirada damiinaha',
	'transclusion-count' => '$1 Waa la helay damaanad.',
	'error-suggestion' => 'Waxaa laga yaabaa inaad qoraalka qaladay (ama aad uqortay si aan haboonayn) magaca bogga?',
	'time-label' => 'Waqtiga howsha oo ku dhow gabagabo',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title' => 'Број укључивања шаблона',
	'enter-details' => 'Унос података',
	'introduction' => 'Унесите назив шаблона и кликните на дугме „Иди“. Има и мало привременог меморисања, али то је ван досега ове алатке и његовог власника.',
	'language-label' => 'Језик',
	'namespace-label' => 'Именски простор',
	'pagename-label' => 'Назив странице (без именског простора)',
	'transclusion-count-label' => 'Број укључивања',
	'transclusion-count' => 'Пронађено укључивања: $1.',
	'error-suggestion' => 'Можда сте погрешно унели назив странице.',
	'time-label' => 'Време за извршавање наредбе',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title' => 'Broj transkluzija šablona',
	'enter-details' => 'Unos podataka',
	'introduction' => 'Unesite naziv šablona i kliknite na dugme „Idi“. Ima i malo privremenog memorisanja, ali to je van dosega ove alatke i njegovog vlasnika.',
	'language-label' => 'Jezik',
	'namespace-label' => 'Imenski prostor',
	'pagename-label' => 'Naziv stranice (bez imenskog prostora)',
	'transclusion-count-label' => 'Broj transkluzija',
	'transclusion-count' => 'Pronađeno transkluzija: $1.',
	'error-suggestion' => 'Možda ste pogrešno uneli naziv stranice.',
	'time-label' => 'Vreme za izvršavanje naredbe',
);

/** Swedish (svenska)
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'enter-details' => 'Skriv in detaljer',
	'introduction' => 'Skriv in namnet på en mall (Wikipedior endast just nu, tyvärr) och tryck på start. Det är så enkelt som det. Det finns viss cachelagring (minne av resultat), men det är tyvärr utanför verktygets och dess ägares kontroll.',
	'language-label' => 'Språk',
	'namespace-label' => 'Namnrymd',
	'pagename-label' => 'Sidans namn (exklusive namnrymd)',
	'transclusion-count-label' => 'Antal mallinkluderingar',
	'transclusion-count' => '$1 mallinkludering(ar) hittades.',
	'error-suggestion' => 'Kanske du felstavade (eller fel-versaliserade) namnet på sidan?',
	'time-label' => 'Tid det tog att utföra kommandot',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'enter-details' => 'Ingiza maelezo',
	'language-label' => 'Lugha',
	'namespace-label' => 'Eneo la wiki',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'enter-details' => 'தகவல்களை உள்ளிடு',
	'language-label' => 'மொழி',
	'namespace-label' => 'பெயர்வெளி',
	'pagename-label' => 'பக்கத்தின் பெயர் (பெயர்வெளிகளைத் தவிர்த்து)',
	'error-suggestion' => 'பக்கத்தின் பெயரை நீங்கள் தவறுதலாக எழுதியதாகத் (அல்லது தவறாகப் பேரெழுத்துகளாக்கியதாக) தோன்றுகிறது?',
	'time-label' => 'ஆனையை செயல்படுத்த எடுத்துக்கொண்ட நேரம்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'enter-details' => 'వివరాలను ఇవ్వండి',
	'language-label' => 'భాష',
	'namespace-label' => 'పేరుబరి',
	'pagename-label' => 'పుట పేరు (పేరుబరి లేకుండా)',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'enter-details' => 'Ipasok ang mga detalye',
	'introduction' => 'Makinilyahing papasok ang pangalan ng isang suleras (Mga wikipedia lamang sa ngayon, paumanhin) at pindutin ang gawin. Ganyang lang kapayak ito. May ilang mga pagtatanda (pag-alala ng mga resulta), subalit sa kasamaang palad ay nasa labas ng pagtaban ng kasangkapang ito at ng may-ari nito.',
	'language-label' => 'Wika',
	'namespace-label' => 'Puwang ng pangalan',
	'pagename-label' => 'Pangalan ng pahina (hindi kasama ang puwang ng pangalan)',
	'transclusion-count-label' => 'Bilang ng mga paglilipat at pagsasama',
	'transclusion-count' => '$1 natagpuang (mga) transklusyon.',
	'error-suggestion' => 'Marahil ay mali ang pagbabaybay mo (o hindi sinasadyang napalaki ang titik) ng pangalan ng pahina?',
	'time-label' => 'Panahong nagamit upang maisagawa ang utos',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'language-label' => 'Зывон',
	'namespace-label' => 'Номон мәкон',
	'pagename-label' => 'Сәһифә ном (бе номон мәкон)',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Khutuck
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'enter-details' => 'Detayları girin',
	'introduction' => 'Şablon adını yazın (şu an sadece Vikipediler) ve Gönder düğmesine basın. Bu kadar basit. Önbellek kullanımı (sonuçların hatırlanması) söz konusu; ancak bu, işbu araç ve sahibinin kontrolü dışında bir durum.',
	'language-label' => 'Dil',
	'namespace-label' => 'Alan adı',
	'pagename-label' => 'Sayfa adı (alan adı hariç)',
	'transclusion-count-label' => 'Görüntüleme sayısı',
	'transclusion-count' => '$1 görüntüleme bulundu.',
	'error-suggestion' => 'Belki de sayfanın adını yanlış yazdınız (ya da büyük-küçük harf kullanımında hata var)?',
	'time-label' => 'Komutu yürütmek için geçen süre',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'title' => 'قېلىپ سىڭدۈرۈش سانى',
	'enter-details' => 'تەپسىلاتىنى كىرگۈزۈڭ',
	'language-label' => 'تىل',
	'namespace-label' => 'ئات بوشلۇقى',
	'pagename-label' => 'بەت ئاتى (ئات بوشلۇقى بۇنىڭ سىرتىدا)',
	'transclusion-count-label' => 'سىڭدۈرگەن قېلىپ سانى',
	'transclusion-count' => '$1 سىڭدۈرگەن قېلىپ تېپىلدى.',
	'error-suggestion' => 'بۇ بەتنىڭ ئاتىنى ئۇنۇت (ياكى چوڭ يېزىلىشنى خاتا ئىشلەت) تىڭىزمۇ قانداق؟',
	'time-label' => 'بۇيرۇق ئىجرا قىلىشقا كېرەكلىك ۋاقىت',
);

/** Ukrainian (українська)
 * @author AS
 * @author Olvin
 */
$messages['uk'] = array(
	'enter-details' => 'Вкажіть подробиці',
	'introduction' => "Введіть назву шаблону (поки що працює тільки для Вікіпедій) і натисніть кнопку переходу. Простіше нікуди. Працює кешування (запам'ятовування результатів), але, на жаль, воно непідконтрольне цьому інструменту та його власнику.",
	'language-label' => 'Мова',
	'namespace-label' => 'Простір назв',
	'pagename-label' => 'Назва сторінки',
	'transclusion-count-label' => 'Кількість включень',
	'transclusion-count' => 'Знайдено включень: $1.',
	'error-suggestion' => 'Можливо, Ви помилилися або використали неправильний регістр у назві сторінки?',
	'time-label' => 'Час, витрачений на виконання команди',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title' => 'Số lần nhúng bản mẫu',
	'enter-details' => 'Nhập chi tiết',
	'introduction' => 'Nhập tên của một bản mẫu (rất tiếc, lúc này chỉ hỗ trợ Wikipedia) và nhấn Xem. Chỉ có vậy thôi. Kết quả sẽ được ghi vào bộ nhớ đệm, nhưng bộ nhớ đệm nằm bên ngoài sự kiểm soát của công cụ này và người chủ của nó.',
	'language-label' => 'Ngôn ngữ',
	'namespace-label' => 'Không gian tên',
	'pagename-label' => 'Tên trang (trừ không gian tên)',
	'transclusion-count-label' => 'Số trang nhúng',
	'transclusion-count' => 'Tìm thấy $1 trang nhúng.',
	'error-suggestion' => 'Có lẽ bạn đã nhập sai chính tả hoặc cần phân biệt chữ hoa/thường trong tên trang?',
	'time-label' => 'Thời gian thực hiện lệnh',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Qiyue2001
 * @author Shizhao
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'title' => '模板嵌入包含计数',
	'enter-details' => '输入详细信息',
	'introduction' => '输入模板的名称（现时只限维基百科），然后按提交。就是这么简单。可能有些缓存问题（结果回忆），但这不是此工具和其主人可控制的范围。',
	'language-label' => '语言',
	'namespace-label' => '名字空间',
	'pagename-label' => '页面名称（不包括命名空间）',
	'transclusion-count-label' => '使用数目',
	'transclusion-count' => '找到在$1页面上使用。',
	'error-suggestion' => '可能你输入了错误的页面标题？',
	'time-label' => '执行命令所需的时间',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'enter-details' => '輸入詳細資訊',
	'introduction' => '輸入模板的名稱（現時只限維基百科），然後按提交。就是這麼簡單。可能有些緩存問題（結果回憶），但這不是此工具和其主人可控制的範圍。',
	'language-label' => '語言',
	'namespace-label' => '名字空間',
	'pagename-label' => '頁面名稱 （不包括名字空間）',
	'transclusion-count-label' => '使用數目',
	'transclusion-count' => '找到在$1頁上使用。',
	'error-suggestion' => '可能你打錯頁面的標題？',
	'time-label' => '執行命令所需的時間',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'enter-details' => '輸入詳細資訊',
	'language-label' => '語言',
	'namespace-label' => '名字空間',
	'pagename-label' => '頁面名稱 （不包括名字空間）',
	'transclusion-count-label' => '包含數目',
	'transclusion-count' => '發現$1個包含。',
	'error-suggestion' => '也許您把頁面名稱錯誤拼寫（如錯誤大小寫）了？',
	'time-label' => '執行命令所需時間',
);
