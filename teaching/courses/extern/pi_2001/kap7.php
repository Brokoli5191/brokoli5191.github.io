<?php include "def.php";

 html_start("Kap.7 Security");
 make_header("7. Security & Firewall");
?>


In diesem Abschnitt konfigurieren wir einen Paketfilter (aka Firewall)
auf allen lokalen Rechnern. Diese sollen (falls Kap. 4 schon
durchgearbeitet wurde) die verschiedenen NFS/NIS 
Dom�nen im PC-Raum voreinandersch�tzen. Die Services sollen
nur innerhalb der Dom�nen benutzbar sein, dort aber klaglos funktionieren!
Weiters soll der Webserver gesch�tzt werden.
<ol>
<li>Vorabeiten<br>Schalte zun�chst alle nicht ben�tigten Dienste auf deinem
System ab; Laufen sollen NFS/NIS nur auf dem Server; auf den Clients l�uft nur
der Portmapper, auf allen Rechnern der sshd und der Webserver. 
Insbesondere schalte den inetd ab.

<br><br><li>Als ersten Schritt implementieren wir folgende Reglen:<br>
Die NFS/NIS-Clients und Server sollen jeweils aufeinander vollen Zugriff haben.
Der sshd soll von �berall aus ereicht werden k�nnen; ebenso soll ICMP
von �berall aus zugelassen werden. Der Webserver soll nur von
den Rechnern in der NIS-Dom�ne (falls Kap. 4 noch nicht durchgemacht: nur
von den Rechnern in deiner Reihe) zug�nglich sein. (Nicht vergessen das Loopback braucht 
ebenfalls immer vollen Zugriff). Sonst sollen alle Verbindungen verboten sein.
<br>
Beginnen nun zun�chst auf dem Papier zu planen, welche iptables-Regeln du
f�r dein Setup ben�tigst.
<br><br>
<b>Hinweis:</b> zun�chst m�ssen die 3 Standard Chains INPUT, OUTPUT und FOWARD
neu initialisiert werden, dann setzte die Policies von INPUT und FORWARD auf
DROP. Die OUTPUT Policy kann ACCEPT sein; wir regeln alles �ber die 
INPUT Chain. <br>
Als erstes mu� die Regel f�r das Loopback-Interface in die INPUT chain geschrieben
werden; dann die ICMP-Regel, die HTTP-Regel und die SSH-Regel. Dann folgen die (komplizierteren) 
Regeln f�r die NFS/NIS-Server Client-Verbindungen. Au�erdem kannst du alle bestehenden Verbindungen
ebenfalls akzeptieren. N�here Informationen gibts 
<A HREF="Packet-Filtering-HOWTO/Packet-Filtering-HOWTO.html">hier</a>.

<br><br><li>Beginne nun ein Skript zu schreiben und die oben angegebenen Regeln zu
implementieren. Wenn n�tig greife auf die <A HREF="fw_scripts">Beispieldateien</A> zur�ck.
<br>F�r den Fall, da� irgendetwas schiefgeht (blockierst du das Loopback-Interface, so
funktioniert die graphische Oberfl�che unter Umst�nden nicht mehr richtig) hole dir das 
Beispielskript <tt>stop_fw.sh</tt>: Es l�scht alle Chains und setzt die Default-Policy auf ACCEPT
(schaltet also die FW aus).
 
<br><br><li>Wenn das Skript fertig ist, f�hre es aus und �berpr�fe zun�chst den
Output des Kommandos "iptables -L -n -v". Entspricht dieser deinen Erwartungen, so kannst
du daran gehen, deine Firewall zu testen; Mache das gemeinsam mit den anderen Teilnehmern
in deiner Dom�ne/Reihe. Verwendet den Portcsanner nmap (falls dieser nicht installiert
ist, dann findest du ihn <a href="suse">hier</a>). Wenn alles zur Zufriedenheit erledigt ist,
scannt eure Hosts auch von au�erhalb der Dom�ne.

<br><br><li>Wenn alle Tests positiv verlaufen sind, kannst du darangehen die Regeln zu
versch�rfen. Sichert den Server gegen die Clients ab, in dem nur die tats�chlich
ben�tigten Verbindungen erlaubt sind. (Die Clients gegen den Server abzusichern ist
nicht besonders sinnvoll; ist der Server gehackt, kommt es auf die Clients auch nicht mehr an...) 
<b>Praktischer Hinweis</b> Zun�chst mu� sicherlich der Portmapper zugelassen werden.
Dann versuche einen Mount und sieh im Logfile nach, welche Verbindungen geblockt werden.
Modifiziere das Skript, bis der Mount wirklich funktioniert. Wenn n�tig greife auf 
die <A HREF="fw_scripts">Beispieldateien</A> zur�ck.
 

<!--<br><br><li>Erweitere deine Firewallkonfiguration. Starte den Webserver und f�ge eine
Regel zur Firewallkonfiguration hinzu, die den Webserver innerhalb der NIS/NFS Dom�ne
freigibt.-->

<br><br><li>Fortgeschrittener Security Test<br>
Installiere den Porscanner Nessus. Das rpm-Paket und die ebenfalls ben�tigten Bibliotheken
<tt>gmp.rpm</tt> findest du <a href="suse">hier</a>. Nessus verf�gt �ber eine Client-Server
Architektur und verwendet eigene Nessus-Benutzer. Starte zun�chst den Server mittles <tt>
rcnessusd start</tt>. Dann mu�t du einen Nessus-Benutzer anlegen; verwende dazu das Kommando
<tt>nessus-adduser</tt>. Nun starte den Scanner mit dem Aufruf <tt>nessus</tt>. Zun�chst mu�t
du dich nun als der vorher eingerichtete Benutzer anmelden, dann folge dem Men�. F�r den Scan
schlie� dich mit deinem Nachbarn zusammen; scannt gegenseitig eure Rechner (um einen
Unterschied zu sehen stoppt eventuell auf einem Rechner die FW) und verfolgt
das Logfile <tt>/var/log/messages</tt>. Hinweis: Um die Zeit des Scans zu reduzieren, beschr�nkt
euch auf die interessanten Ports.

</ol>

<?php html_end();
?>
