<?php include "def.php";

 html_start("Kap.6 Webserver");
 make_header("6. Webserver Konfigurieren");
?>

<ol>
<li>Vorarbeiten:<br>
Sichere das originale Konfigurationsfile deines Webservers /etc/http/httpd.conf;
ersetze es durch diese <A HREF="httpd.conf">Beispieldatei</A> und bearbeite sie, soda� es
als neues Konfiguartionsfile des Servers dienen kann.<br>
Achtung die Datei ist recht lang. Um die �bersicht nicht zu verlieren beachte, da� die
globalen Optionen vor der Zeile<br>
# per-Directory-Konfig (r) ----------------------------------<br>
mit Ausnahme des Servernamens (diesen bitte �ndern!) alle �bernommen werden k�nnen.
Die eigentliche Arbeit beginnt unterhalb dieser Zeile...
<br><br>
Au�erdem entferne alle bereits vorhandenen html-Dateien aus dem Document-root-Verzeichnis
<tt>/usr/local/httpd/htdocs</tt> (besser mv statt rm!). Lege stattdessen die beiden Testdateien
<A href="test1.html">test1.html</A> und <A href="test2.html">test2.html</A> 
in dieses Verzeichnis.
<br><br>
Die gesamte Apache Dokumentation inklusive Beschreibung aller Befehle steht auf
<A HREF="apache-manual">apache-manual</A> zur Verf�gung.
<br><br>
�ffne zwei Fenster in denen du die Log-Dateien "/var/log/access_log" und
"error_log" w�hrend der ganzen �bung mitverfolgst. 

<br><br><li>Konfiguriere das Document-root-Verzeichnis f�r allgemeinen Zugang.
Stelle sicher, da� auch von anderen Rechnern beiden Test-Seiten angesehen werden k�nnen.
Konfiguriere den Server so, da� unter http://deinhostname statt des Listings der
Document-root die Datei <tt>test1.html</tt> angezeigt wird.
<br><br><li>Lege in der Document-root ein Verzeichnis namens "privat_net" an und lege
die Datei "test1.html" hinein. Konfiguriere das Directory, so
da� es nur von deinem System aus angesehen werden kann. Pr�fe nach, ob du erfolgreich warst.
<br><br><li>Konfiguriere nun den Server so, da� nur die Rechner aus deiner vorigen Arbeitsgruppe zugriff
auf das Verzeichnis  "privat_net" haben. �berpr�fe ob du erfolgreich warst.
<br><br><li>Konfiguriere nun den Server so, da� die Benutzer in ihren Homedirectories im Verzeichnis
"public_html" Webseiten anlegen k�nnen; wenn du die vorhandene (auskommentierte) Konfiguration
verwendest, versuche mittels Dokumentation zu verstehen, was die einzelnen Directiven bedeuten.
<br><br><li>Konfiguration eines Apache Benutzers (optional)<br>
Achtung die "normale" Konfiguration mu� unter SuSE um einen Punkt erg�nzt werden!
Unter <A HREF="http://httpd.apache.org/docs/misc/FAQ.html#suseFDN">http://httpd.apache.org/docs/misc/FAQ.html#suseFDN</A> findet man folgenden Hinweis:<br><br>
On a SuSE Linux system, I try and configure access control using basic authentication. Although I follow the example exactly, authentication fails, and an error message "admin: not a valid FDN: ...." is logged. 
<br>
 In the SuSE distribution, additional 3rd party authentication modules have been added and activated by default. These modules interfere with the Apache standard modules and cause Basic authentication to fail. Our recommendation is to comment all those modules in /etc/httpd/suse_addmodule.conf and /etc/httpd/suse_loadmodule.conf which are not actually required for running your server. 
<br><br>
F�r uns besteht die L�sung also darin, alle Module mit "auth" im Namen in beiden Dateien auszukommentieren.

<br><br><li>(Optional) Erstelle einen Virtual Host namens "serverN.localnet", wobei
N eindeutig im PC-Raum sein mu�. Achtung um den Virtual Host mit dem Browser erreichen zu k�nne
ben�tigst du einen Eintag in "/etc/hosts" mit deiner IP-Adresse und "serverN.localnet serverN".

</ol>

<?php html_end();
?>

