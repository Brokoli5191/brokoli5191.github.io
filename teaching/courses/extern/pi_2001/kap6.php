<?php include "def.php";

 html_start("Kap.6 Webserver");
 make_header("6. Webserver Konfigurieren");
?>

<ol>
<li>Vorarbeiten:<br>
Sichere das originale Konfigurationsfile deines Webservers /etc/http/httpd.conf;
ersetze es durch diese <A HREF="httpd.conf">Beispieldatei</A> und bearbeite sie, sodaß es
als neues Konfiguartionsfile des Servers dienen kann.<br>
Achtung die Datei ist recht lang. Um die Übersicht nicht zu verlieren beachte, daß die
globalen Optionen vor der Zeile<br>
# per-Directory-Konfig (r) ----------------------------------<br>
mit Ausnahme des Servernamens (diesen bitte ändern!) alle übernommen werden können.
Die eigentliche Arbeit beginnt unterhalb dieser Zeile...
<br><br>
Außerdem entferne alle bereits vorhandenen html-Dateien aus dem Document-root-Verzeichnis
<tt>/usr/local/httpd/htdocs</tt> (besser mv statt rm!). Lege stattdessen die beiden Testdateien
<A href="test1.html">test1.html</A> und <A href="test2.html">test2.html</A> 
in dieses Verzeichnis.
<br><br>
Die gesamte Apache Dokumentation inklusive Beschreibung aller Befehle steht auf
<A HREF="apache-manual">apache-manual</A> zur Verfügung.
<br><br>
Öffne zwei Fenster in denen du die Log-Dateien "/var/log/access_log" und
"error_log" während der ganzen Übung mitverfolgst. 

<br><br><li>Konfiguriere das Document-root-Verzeichnis für allgemeinen Zugang.
Stelle sicher, daß auch von anderen Rechnern beiden Test-Seiten angesehen werden können.
Konfiguriere den Server so, daß unter http://deinhostname statt des Listings der
Document-root die Datei <tt>test1.html</tt> angezeigt wird.
<br><br><li>Lege in der Document-root ein Verzeichnis namens "privat_net" an und lege
die Datei "test1.html" hinein. Konfiguriere das Directory, so
daß es nur von deinem System aus angesehen werden kann. Prüfe nach, ob du erfolgreich warst.
<br><br><li>Konfiguriere nun den Server so, daß nur die Rechner aus deiner vorigen Arbeitsgruppe zugriff
auf das Verzeichnis  "privat_net" haben. Überprüfe ob du erfolgreich warst.
<br><br><li>Konfiguriere nun den Server so, daß die Benutzer in ihren Homedirectories im Verzeichnis
"public_html" Webseiten anlegen können; wenn du die vorhandene (auskommentierte) Konfiguration
verwendest, versuche mittels Dokumentation zu verstehen, was die einzelnen Directiven bedeuten.
<br><br><li>Konfiguration eines Apache Benutzers (optional)<br>
Achtung die "normale" Konfiguration muß unter SuSE um einen Punkt ergänzt werden!
Unter <A HREF="http://httpd.apache.org/docs/misc/FAQ.html#suseFDN">http://httpd.apache.org/docs/misc/FAQ.html#suseFDN</A> findet man folgenden Hinweis:<br><br>
On a SuSE Linux system, I try and configure access control using basic authentication. Although I follow the example exactly, authentication fails, and an error message "admin: not a valid FDN: ...." is logged. 
<br>
 In the SuSE distribution, additional 3rd party authentication modules have been added and activated by default. These modules interfere with the Apache standard modules and cause Basic authentication to fail. Our recommendation is to comment all those modules in /etc/httpd/suse_addmodule.conf and /etc/httpd/suse_loadmodule.conf which are not actually required for running your server. 
<br><br>
Für uns besteht die Lösung also darin, alle Module mit "auth" im Namen in beiden Dateien auszukommentieren.

<br><br><li>(Optional) Erstelle einen Virtual Host namens "serverN.localnet", wobei
N eindeutig im PC-Raum sein muß. Achtung um den Virtual Host mit dem Browser erreichen zu könne
benötigst du einen Eintag in "/etc/hosts" mit deiner IP-Adresse und "serverN.localnet serverN".

</ol>

<?php html_end();
?>

