<?php include "def.php";

 html_start("Kap.8 Masquerading & Proxy");
 make_header("8 Masquerading und Proxy");
?>

<ol>
<li>Konfiguration eines Masquerading-Gateways:<br>
Schreibe ein IP-Tables Skript f�r ein Masquerading-Gateway. Wenn das Skript fertig ist
teste es auf deinem lokalen Rechner auf korrekte Syntax; danach testen wir es an den
Rechnern, die tats�chlich �ber 2 Netzwerkkarten verf�gen. Wenn n�tig greife auf
die folgende Dokumentation oder die <a href="ipfwd_scripts">Beispieldateien</a> zur�ck:
<ul>
 <li><A Href="http://netfilter.samba.org/unreliable-guides/NAT-HOWTO/index.html">NAT-HOWTO (html)</a>
 (<a href="NAT-HOWTO/NAT-HOWTO.html">lokale Kopie</a>)
 <li><A href="http://www.linuxdoc.org/HOWTO/Masquerading-Simple-HOWTO/index.html">Masquerading-Simple-HOWTO</a>
 (<a href="HOWTO/Masquerading-Simple-HOWTO/index.html">lokale Kopie</a>)
 <li><A HREF="http://www.linuxdoc.org/HOWTO/HOWTO-INDEX/networking.html">IP-Masquerade-HOWTO</A>
 (<A HREF=" HOWTO/IP-Masquerade-HOWTO.html">lokale Kopie</a>)
 <li><A href="http://www.linuxdoc.org/LDP/nag/nag.html">The Linux Network Administrator's Guide, Second Edition</A>
 (<a href="nag2">lokale Kopie</a>)
</ul>
<br><br>

Gehe von folgender Situation aus: Das Gatweway verf�gt �ber zwei Netzwerkkarten eth0 und eth1.
eth0 ist mit dem "inneren" Netzwerk 192.168.1.0/24 verbunden, eth1 mit dem
"�u�erem" Netzwerk ???.???.???.???/24.
<ol>
<li>Zun�chst sollen alle Rechner im inneren Netzwerk uneingeschr�nkten Zugang
zum �u�eren Netzwerk (und somit ins Internet) bekommen. Du mu�t also SNAT
verwenden.  
<br><br><li>Beschr�nke nun den Zugriff vom inneren Netz aufs Internet auf folgende
Protokolle: www, ftp und ssh. 
<br><br><li>Kombiniere nun das Masquerading-Gateway mit einem Paketfilter, um so das
Gateway gegen Angriffe abzusichern. Lasse vom inneren Netzwerk nur ssh-Verbindungen, vom
�u�eren Netzwerk nur ssh-Verbindungen von "trusted Hosts" zu.
</ol>


<br><br><br><li>Der Squid-Proxyserver<br>
<ol>
<li>Installiere den Proxyserver Squid und sein Redirector- und Access-Controller-Plugin
SquidGuard. Die RPMs befinden sich <a href="suse">hier</a>.
<br><br><li>Konfiguriere den Squid-Server. Er verf�gt
�ber eine zentrale Konfigurationsdatei <tt>/etc/squid.conf</tt>. Versuche
anhand der Dokumentation in <tt>/usr/share/doc/packages/squid/QUICKSTART</tt>
eine funktionierende Basiskonfiguration zu erstellen. Starte nun der Server mittels
des rc-Skripts. Vergi� nicht die Cache-Verzeichnisse zu initialisieren (<tt>squid -z</tt>).
Wenn n�tig greif auf die <a href="squidconf">Beispieldatei</a> der Standardinstallation zur�ck.
Teste den Server indem du deinen Webbrowser entsprechend konfigurierst.
<br><br><li>Konfiguriere nun den SquidGuard. Eine Beispieldatei findest du <a href="squidconf">hier
</a>.
</ol>
</ol>

<!--In diesem Abschnitt kann nurmehr ein kurzer �berblick gew�hrt werden.<br><br>
Zwei Beispieldateien befinden sich diesem <a href="ipfwd_scripts">Verzeichnis</A>.<br><br><ul>
Sehr gute Dokumantation zu Thema findet sich im
<li><A href="http://www.linuxdoc.org/guides.html">
The Linux Network Administrator's Guide, Second Edition</A>,
in den
<li><A HREF="http://www.linuxdoc.org/HOWTO/HOWTO-INDEX/networking.html">IP-Masquerade-HOWTO</A> und im Masquerading-Simple-HOWTO und in den 
<li>HOWTOS auf <A href="http://netfilter.samba.org">netfilter.samba.org</A>.
</ul>
-->

<?php html_end();
?>
