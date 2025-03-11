<?php include "def.php";

 html_start("Kap.7 Security");
 make_header("7. Security & Firewall");
?>


In diesem Abschnitt konfigurieren wir einen Paketfilter (aka Firewall)
auf allen lokalen Rechnern. Diese sollen (falls Kap. 4 schon
durchgearbeitet wurde) die verschiedenen NFS/NIS 
Domänen im PC-Raum voreinanderschützen. Die Services sollen
nur innerhalb der Domänen benutzbar sein, dort aber klaglos funktionieren!
Weiters soll der Webserver geschützt werden.
<ol>
<li>Vorabeiten<br>Schalte zunächst alle nicht benötigten Dienste auf deinem
System ab; Laufen sollen NFS/NIS nur auf dem Server; auf den Clients läuft nur
der Portmapper, auf allen Rechnern der sshd und der Webserver. 
Insbesondere schalte den inetd ab.

<br><br><li>Als ersten Schritt implementieren wir folgende Reglen:<br>
Die NFS/NIS-Clients und Server sollen jeweils aufeinander vollen Zugriff haben.
Der sshd soll von überall aus ereicht werden können; ebenso soll ICMP
von überall aus zugelassen werden. Der Webserver soll nur von
den Rechnern in der NIS-Domäne (falls Kap. 4 noch nicht durchgemacht: nur
von den Rechnern in deiner Reihe) zugänglich sein. (Nicht vergessen das Loopback braucht 
ebenfalls immer vollen Zugriff). Sonst sollen alle Verbindungen verboten sein.
<br>
Beginnen nun zunächst auf dem Papier zu planen, welche iptables-Regeln du
für dein Setup benötigst.
<br><br>
<b>Hinweis:</b> zunächst müssen die 3 Standard Chains INPUT, OUTPUT und FOWARD
neu initialisiert werden, dann setzte die Policies von INPUT und FORWARD auf
DROP. Die OUTPUT Policy kann ACCEPT sein; wir regeln alles über die 
INPUT Chain. <br>
Als erstes muß die Regel für das Loopback-Interface in die INPUT chain geschrieben
werden; dann die ICMP-Regel, die HTTP-Regel und die SSH-Regel. Dann folgen die (komplizierteren) 
Regeln für die NFS/NIS-Server Client-Verbindungen. Außerdem kannst du alle bestehenden Verbindungen
ebenfalls akzeptieren. Nähere Informationen gibts 
<A HREF="Packet-Filtering-HOWTO/Packet-Filtering-HOWTO.html">hier</a>.

<br><br><li>Beginne nun ein Skript zu schreiben und die oben angegebenen Regeln zu
implementieren. Wenn nötig greife auf die <A HREF="fw_scripts">Beispieldateien</A> zurück.
<br>Für den Fall, daß irgendetwas schiefgeht (blockierst du das Loopback-Interface, so
funktioniert die graphische Oberfläche unter Umständen nicht mehr richtig) hole dir das 
Beispielskript <tt>stop_fw.sh</tt>: Es löscht alle Chains und setzt die Default-Policy auf ACCEPT
(schaltet also die FW aus).
 
<br><br><li>Wenn das Skript fertig ist, führe es aus und überprüfe zunächst den
Output des Kommandos "iptables -L -n -v". Entspricht dieser deinen Erwartungen, so kannst
du daran gehen, deine Firewall zu testen; Mache das gemeinsam mit den anderen Teilnehmern
in deiner Domäne/Reihe. Verwendet den Portcsanner nmap (falls dieser nicht installiert
ist, dann findest du ihn <a href="suse">hier</a>). Wenn alles zur Zufriedenheit erledigt ist,
scannt eure Hosts auch von außerhalb der Domäne.

<br><br><li>Wenn alle Tests positiv verlaufen sind, kannst du darangehen die Regeln zu
verschärfen. Sichert den Server gegen die Clients ab, in dem nur die tatsächlich
benötigten Verbindungen erlaubt sind. (Die Clients gegen den Server abzusichern ist
nicht besonders sinnvoll; ist der Server gehackt, kommt es auf die Clients auch nicht mehr an...) 
<b>Praktischer Hinweis</b> Zunächst muß sicherlich der Portmapper zugelassen werden.
Dann versuche einen Mount und sieh im Logfile nach, welche Verbindungen geblockt werden.
Modifiziere das Skript, bis der Mount wirklich funktioniert. Wenn nötig greife auf 
die <A HREF="fw_scripts">Beispieldateien</A> zurück.
 

<!--<br><br><li>Erweitere deine Firewallkonfiguration. Starte den Webserver und füge eine
Regel zur Firewallkonfiguration hinzu, die den Webserver innerhalb der NIS/NFS Domäne
freigibt.-->

<br><br><li>Fortgeschrittener Security Test<br>
Installiere den Porscanner Nessus. Das rpm-Paket und die ebenfalls benötigten Bibliotheken
<tt>gmp.rpm</tt> findest du <a href="suse">hier</a>. Nessus verfügt über eine Client-Server
Architektur und verwendet eigene Nessus-Benutzer. Starte zunächst den Server mittles <tt>
rcnessusd start</tt>. Dann mußt du einen Nessus-Benutzer anlegen; verwende dazu das Kommando
<tt>nessus-adduser</tt>. Nun starte den Scanner mit dem Aufruf <tt>nessus</tt>. Zunächst mußt
du dich nun als der vorher eingerichtete Benutzer anmelden, dann folge dem Menü. Für den Scan
schließ dich mit deinem Nachbarn zusammen; scannt gegenseitig eure Rechner (um einen
Unterschied zu sehen stoppt eventuell auf einem Rechner die FW) und verfolgt
das Logfile <tt>/var/log/messages</tt>. Hinweis: Um die Zeit des Scans zu reduzieren, beschränkt
euch auf die interessanten Ports.

</ol>

<?php html_end();
?>
