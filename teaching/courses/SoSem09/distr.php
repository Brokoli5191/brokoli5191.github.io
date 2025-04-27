<?php
$pageTitle = "Distributionentheorie";
$currentPage = "courses";
include('../../../includes/header-courses.php');
?>


        <article>
          <section class="about-text">
            <header>
              <h2 class="h2 article-title">Courses</h2>
            </header>
            <article class="article-second">
              <h2 class="h3 article-title">Distributionentheorie</h2>
              <h3>Sommersemester 2009</h3>

              <p>
<b>Vortragende:</b> G&uuml;nther H&ouml;rmann, Roland Steinbauer<br>
<b>Lehrveranstaltungsnummer:</b>  250067<br>
<b>Lehrveranstaltungstyp:</b> VO<br>
<b>Stundenzahl:</b> 4<br>
<b>Zeit und Ort:</b> Mo 13:15-14:45 Seminarraum 2A310, UZA 2,
Mi 14:30-16:00 Seminarraum C2.07, UZA 4<br>
<b>Beginn:</b> 2.3.2009<br>
<b>Neuigkeiten:</b>
<ul>
<li>2009-07-10: Eine vorl&auml;ufige Version des Skripts zur Vorlesung gibt es
<a href="distrvo.pdf">hier</a>. (Kapitel 0 und 7 sind noch nicht inkludiert. 
Ebenso fehlen einige der Beweise, die in der Vorlesung ausgelassen wurden und 
auch einige Items, die wir noch umgestalten wollen. Kommentare willkommen!)
<br><br>


<li>2009-06-30: Skript zur Vorlesung:<br>
Eine vorl&auml;ufige Version des Skripts zur Vorlesung gibt es ab Mitte Juli 
hier zum download. Davor Ausdrucke auf Anfrage.<br><br>

<li>2009-06-29: Pr&uuml;fungsinformationen<br>
Zu folgenden Zeiten sind <i>keine</i> Pr&uuml;fungen m&ouml;glich:
13.--31.7., 26.8.--7.9. und 14.9--28.9.<br>

Beweise, die <i>nicht</i> im Detail gekonnt werden m&uuml;ssen: 
1.21, 1.22, 1.33, 1.47-50, 1.56, 1.60, 1.62, 1.66, 1.69;
2.26, 2.31;
3.2, 3.4, 3.7, 3.9, 3.16;
4.5(i), 4.9-11, 4.15, 4.18, 4.22, 4.23;
5.3, 5.8, 5.10, 5.14, 5.17, 5.31, 5.38, 5.39;
6.6, 6.13, 6.28; alle Beweise in Kap. 7(=8, "Fundamentall&ouml;sungen").<br>

Zur Terminvereinbarung bitte mit dem gew&uuml;nschten Pr&uuml;fer per E-Mail
Kontakt aufnehmen, also entweder <a href="mailto:guenther.hoermann@univie.ac.at">
mailto:guenther.hoermann@univie.ac.at</a> oder <a href="mailto:roland.steinbauer@univie.ac.at">mailto:roland.steinbauer@univie.ac.at</a>.
<br><br>
</ul>


<b>Allgemeines:</b>
Die Theorie der Distributionen---oft auch verallgemeinerte Funktionen
genannt---ist eine Erweiterung der klassischen Analysis, die Mitte des 
20. Jahrhunderts vor allem von Laurent Schwartz und Sergei Sobolev 
entwickelt wurde.<br>

In der Physik und den Ingenieurwissenschaften waren verallgemeinerte
Funktionen-Ideen in mehr oder weniger vager und exakter Form schon 
lange und weit verbreitet (Kirchhoff 1882, Heaviside 1898, Dirac 1926) aber 
erst die elegante (funktionalanalytische) Formulierung von Laurent Schwartz
(um 1945) brachte den ganz gro&szlig;en Erfolg. Binnen k&uuml;rzester Zeit nahm die
Theorie der Distributionen sowohl innerhalb der Funktionalanalysis, als auch 
in Anwendungen (partielle Differentialgleichungen, theoretische Physik) einen 
zentralen Platz ein.
<br>
Die Grundidee dieser Verallgemeinerung des Funktionsbegriffs ist es, 
statt der ''klassischen'' Zuordnung ${\mathbb R} \ni x \mapsto f(x)$
die Zuordnung  $\varphi \mapsto \int f(x) \varphi(x) dx$ zu betrachten, wobei 
$\varphi$ Element eines geeigneten Funktionenraums $\cal{D}$ ist; 
verallgemeinerte Funktionen sind also lineare, (stetige) Funktionale 
auf ${\cal D}$. Dieser Begriffsrahmen ist besonders gut 
geeignet, um f&uuml;r (klassisch)
nichtdifferenzierbare oder sogar unstetige Funktionen (etwa die 
Heaviside'sche Sprungfunktion oder die Dirac'sche Deltafunktion) einen 
Ableitungsbegriff zu entwickeln und eine reichhaltige Theorie 
verallgemeinerter Funktionen zu erm&ouml;glichen. 
<br>
Obwohl die gr&ouml;&szlig;te Triebkraft hinter der Entwicklung der Distributionentheore 
der Wunsch nach einer Erweiterung von L&ouml;sungskonzepten f&uuml;r partielle 
Differentialgleichungen (schwache L&ouml;sungen, Fundamentall&ouml;sungen)
war, erreichten die revolution&auml;ren Einwirkungen auf die Analysis von 
(linearen) partiellen Differentialoperatoren insbesondere durch L. H&ouml;rmander 
(seit Mitte der 1950er Jahre) unvorhergesehene Ausma&szlig;e. 

<br><br>

<b>Inhalt:</b> In der Vorlesung wird die Theorie der Distributionen auf 
''elementarem'' Niveau (also ohne Zugrundelegung der Theorie lokalkonvexer 
Vektorr&auml;ume) entwickelt---gem&auml;&szlig; der Rolle der Distributionentheorie als 
"analytische Technologie".
<br>
Als Hauptreferenz wird uns das Buch von F.G.
Friedlander und M. Joshi ("Introduction to the Theory of Distributions", 
2nd Edition, Cambridge Universtiy Press, 1998) dienen. 
Die Kerninhalte der Vorlesung sind
<ul>
<li> Testfunktionen und Distributionen
<li> Differentialoperatoren
<li> Faltung, Fundamentall&ouml;sungen
<li> Temperierte Distributionen, Fourier Transformation, Sobolev R&auml;ume
<li> Regularit&auml;t
</ul>
<!--Danach werden wir je nach Lust und Laune sowie Vorbildung 
der H&ouml;rerInnen einige der folgenden Themen mehr oder weniger 
ausf&uuml;hrlich besprechen.
<ul>
<li> Regularit&auml;t
<li> Operatorkerne
<li> Mikrolokale Analysis
<li> Ausbreitung von Singularit&auml;ten
<li> Distributionen auf Mannigfaltigkeiten.
</ul>
<br>
-->
<b>Literatur:</b> Eine kommentierte Literaturliste befindet sich
<a href="distr_lit.pdf">hier</a>.
<br><br>

<b>Bemerkung: </b> Diese Vorlesung bietet 
einen Einstieg in das Arbeitsgebiet der Forschungsgruppe <a 
href="http://www.mat.univie.ac.at/~diana" target="_blank">DiANA</a>
und kann so als Vorbereitung auf eine Diplom- oder Masterarbeit innerhalb
der Gruppe dienen.
<br><br>

<b>Voraussetzung</b> zum erfolgreichen Besuch der Lehrveranstaltung 
sind vor allem solide Analysis-Kenntnisse etwa im Umfang der 
Grundvorlesungen Analysis bzw. Analysis f&uuml;r Physik 1,2. Der
Besuch der Vorlesung ist daher schon ab dem 4. Semseter m&ouml;glich.
<br>
Etwas Toplogie ist w&uuml;nschenswert aber nicht unbedingt erforderlich.
Querbez&uuml;ge zur Funktionalanalysis (lokalkonvexe Vektorr&auml;ume) werden
je nach Publikumswunsch und Vorbildung der TeilnehmerInnen
mehr oder weniger eingebracht. Wer Kenntnisse aus partiellen 
Differentialgleichungen oder der theoretischen Physik mitbringt, 
wird die Anwendungsaspekte der Vorlesung mehr zu genie&szlig;en wissen.
<br><br>

<B>Zielpublikum:</B> Diplom- und Masterstudierende der Mathematik und 
insbesondere auch der (theoretischen) Physik; alle die Lust und Interesse
am Thema haben---etwa Lehramtsstudierende der Mathematik.
<br><br>

<B>Positionierung im Studienplan:</B>
Masterstudium Mathematik, Studienschwerpunkt Analysis, Code MANV, 
Diplomstudium Mathematik, 2. Abschnitt, Studienschwerpunkt Analysis. 
<br><br>

<b>Pr&uuml;fungen:</b> m&uuml;ndlich; individuelle Terminvereinbarung.<br><br>

<b>Zur Einstimmung</b> finden Sie <a href="history.pdf">hier</a>  
einen kleinen einschl&auml;gigen Text.

<br><br><br>
              
              
            </section>
          </article>
        </section>
      </article>

<?php
include('../../../includes/footer-courses.php');
?>