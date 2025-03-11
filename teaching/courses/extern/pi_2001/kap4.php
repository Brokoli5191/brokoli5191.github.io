<?php include "def.php";

 html_start("Kap.4 NFS und NIS");
 make_header("4. NFS und NIS");
?>


<ul>
<li>Kofiguration des NFS Servers<br>
Erstelle ein Verzeichnis namens "/nfstest", leg ein Testfile (z.B. /etc/hosts) hinein 
und gib dieses über NFS für das gesamte lokale Netzt frei. 
Konfiguriere den NFS Server mit Hilfe von yast2. Das Directory soll so exportiert werden, 
daß root auf den Clients nicht root-Rechte am NFS Directory hat (man exports) 
außerdem soll das Directory über
NFS nicht schreibbar sein. Teste, ob du erfolgreich warst (showmount -e, mounte das Directory auf
deine lokale Maschine, dann gegenseitige Mounts mit dem Nachbarn). Sieh dir das
exports-File und das Masterlogfile /var/log/messages an.<br><br>
Lösche den Exporteintrag wieder.
<br><br>

<li>Arbeit ab jetzt in Kleingruppen: Ziel der nächsten Punkte ist es, eine kleine
NIS-Domäne mit einem NIS Server, (optional: einem Slave Server) und einigen Clients
zu konfigurieren. Außerdem soll der NIS Server gleichzeitig auch NFS Server sein und
die Clients sollen mittels Automounter (autofs) die Homedirectories der NIS Benutzer mounten.
<br><br>
Weitere Informationen gibts in <A HREF="HOWTO/NFS-HOWTO/">NFS-HOWTO</A> 
und im <A HREF="HOWTO/NIS-HOWTO">NIS-HOWTO</A>.
<br><br>

<ol>
<li>Konfiguration des NIS Servers<br>
Lege einen NIS Domänennamen fest (dieser sollte unbedingt verschieden von den Domänennamen der anderen
Gruppen sein!) und setze ihn mittels nisdomainname-Kommandos (er wird esrst später in die 
Konfiguratonsdateien eingetragen). Starte nun den Nis Server mittels "rcypserv start".<br>
Nun wird der NIS Server mittels Aufruf von "/usr/lib/yp/ypinit -m"
initialisiert. (Falls die Domäne auch einen Slave Server erhalten soll so muß dieser nun nach Aufforderung
angegeben werden.) Sieh dir nun die Konfiguartionsdatei des NIS Servers "/etc/ypserv.conf" an; diese
muß in den meisten Fällen nicht editiert werden.<br>
Die Clients müssen nun in der Datei "/var/yp/securentes" eingetragen weden. Der Server selbts
muß auch einen Eintrag erhalten, da er auch mittels Clientdämon in die Domäne eingebunden werden muß.
(Achte darauf nur den Clients und nicht anderen Rechnern im LAN den Zugriff auf den Server zu
geben!) Als Test sieh dir den Output von "rpcinfo -p servername" an; der ypserv-Prozeß muß
angezeigt werden. Setzte nun in yast2 die entsprechende rc-Variable für den NIS Server auf "on".<br> 
Nun muß der NIS Server selbst als NIS Client in der Domäne angemeldet werden. Dazu muß die
Konfiguration des NIS Clients in "/etc/yp.conf" angepaßt werden. Verwende dazu yast2; sieh
dir aber auch das Konfigurationsfile und dessen Manpage an. Teste nun mittels der Kommandos
"ypwhich" und "ypcat", daß der NIS Server und die NIS Maps wirklich verfügbar sind.

<br><br><li>Konfiguration der NIS Clients<br>
Die NIS Clients können nun einfach mit dem yast2 konfiguriert werden.
Führe dieselben Tests durch wie zuvor für den Server.

<br><br><li>Konfiguration des Slave Servers (optional)<br>
Der Slave Server muß zunächst als Client in die NIS Domäne eingebunden sein.
Starte nun den NIS Server mittels "rcypserv start" und initialiesere die NIS Maps
mittels "/usr/lib/yp/ypinit -s masterserver". (Ignoriere die Warnungen bzgl. des ypxfrd-Services;
es wird nur für sehr große Maps benötigt!). Am NIS Master editiere das Makefile in "/var/yp"; setze
die Option "NOPUSH" auf "false" und trage den Hostname des Slaves in die Datei "/etc/yp/ypservers" ein.
<br>
Auf den Clients trage nun mittels yast2 den Slaveserver ein.<br>
Test nun den Slave Server indem du am Master server den Serverprozeß stoppts. Die Clients
müssen nach wie vor die Maps (zb. über ypcat) anzeigen können.

<br><br><li>Anlegen der NIS Benutzer<br>
Lege nun am NIS Server Benutzer für die NIS Domäne an. Lege zunächst lokale Benutzer mittels
yast2 an (die UID darf noch auf keinem der Clientsysteme existieren!!! benutze als Homedirectory
"/nfshome/username"!!!) und führe dann "make" in "/var/yp" aus um die Maps zu aktualisieren.<br>
Starte auf dem NIS Masterserver den yppasswdd-Dämon und trage auch die enstprechende RC-Config Variable ein.
<br>
Teste deine Installation indem du als neuer Benutzer auf den Clients einloggst (Ignoriere die Fehlermeldung
bzgl. des fehlenden Homedirectories; darum kümmern wir uns sofort!) und mit "yppasswd" das
Paßwort änderst.

<br><br><li>Konfiguration des NFS Servers<br>
Analog zum obigen ersten Punkt konfiguriere den NIS Master auch als NFS Server. Exportiere
das NFS Homedirectory "/nfshome" "read-write" und "no_root_squash" an alle Rechner in der NIS Domäne.


<br><br><li>Konfiguration der NFS Clients<br>
Einfache Variante: Konfiguriere die NFS Clients mittels yast2; so werden alle NIS/NFS Homedirectories hart
gemountet.<br>
Elegante Variante: Konfiguriere "autofs" für die NFS/NIS Homedirectories auf den NIS/NFS Clients.
Dazu mußt du eine Mastermap "/etc/auto.master" anlegen und eine Map für die eigentlichen Mountpoints anlegen.
(Beispieldateien befinden sich <a href="auto">hier</A>.) Dann starte den autofs-Dämon mittels
"rcautofs start" und vergiß nicht, die entsprechende RC-Config Variable zu setzen. 

<br><br><li>Teste deine Installation<br>
Die NIS Benutzer müssen nun auf beliebigen Clients einloggen können und ihr Homedirectory zur Verfügung
haben.
   



<?php html_end();
?>
