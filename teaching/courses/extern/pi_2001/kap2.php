<?php include "def.php";

 html_start("Kap. 2 Netzwerkkonfiguration");
 make_header("2. Netzwerkkonfiguration");
?>

<OL>
<!--<LI>Melde dich als root an (Aus einem Konsole-Fenster als normaler User
gib "ssh root@localhost" ein.).-->

<li>Feststellen der Netzwerkkonfiguration.
<br><br>
Ohne Verwendung des yast oder von root-Privilegien versuche m�glichst viel
Information �ber die gegenw�rtige Netzwerkkonfiguration herauszufinden (verwende
das ifconfig-Kommando; es befindet sich in /sbin, das nicht(!) im Pfad von normalen Benutzern ist)
<ol>
<br><br><li>Was ist deine IP-Adresse, die Broadcast Adresse, die Netzmaske?
In welcher Klasse von Netzwerk befindest du dich also?
<br><br><li>Was ist die MAC-Adresse deines Rechners (genauer deiner Netzwerkkarte)?
Notiere sie in der Datei <TT>macadr</TT>! (Verwende dazu die Ausgabeumleitung der Shell; 
eine einfache L�sung ist  <tt>/sbin/ifconfig | grep Hardware > macadr</tt>. Um wirklich nur
die MAC Adresse in die Date zu schreiben verwende: <tt>/sbin/ifconfig | grep Hardware | 
cut -c 48-64  > macadr</tt>.)
<br><br><li>Um welchen Typ von Netzwerkkarte handelt es sich? Welche Netzwerkinterfaces sind
noch konfiguriert?
<br><br><LI>Welche Routen sind f�r dein System definiert? (Verwende das route-Kommando; ebenfalls in /sbin!)
<br><br><LI>Welche IP-Adresse hat dein Gateway? Welches Device ist dein Gateway-Device?
<br><br><LI>Welche Nameserver verwendet dein System (/etc/resolv.conf)? Was sind deine Suchdom�nen?
<br><br><LI>Wie lautet die MAC-Adresse deines Gateways (/sbin/arp)?
</ol>


<br><br><br>
<li>Verwenden einfacher Netzwerktools
<br><br>
<ol>
<li>Pinge dein Gateway. Pinge www.orf.at.
<br><br><LI>Welche IP-Adresse hat www.mat.univie.ac.at? Welchen Hostnamen hat 131.130.14.50?
(host-Kommando)
<br><br><LI>Welche IP-Adresse haben radon und diana (jeweils .mat.univie.ac.at)?
Welche IP-Adresse hat <TT>www.orf.at</TT>? Versuche, diese Ausgaben von host
zu interpretieren!
<br><br><LI>Gib <TT>traceroute allspice.lcs.mit.edu</TT> ein. �ber wieviele Stationen 
verl�uft die Route? Warum endet die Route bei mercury.lcs.mit.edu?
Wie ist die IP-Adresse von allspice.lcs.mit.edu?
<br><br><LI>�ber wie viele Stationen (Hops) geht ein Paket an <TT>www.orf.at</TT>?
</ol>

<br><br><br>
<li>�ndern der Netzwerkkonfiguration.
<br><br>
Wir �ndern nun die Konfiguration der Ethernetkarte. Wir werden f�r den Rest des Kurses statische IP-Adressen
im privaten Klasse C-Netzwerk 192.168.1.0 verwenden. Das wird unter Suse am einfachsten
�ber den yast gemacht. Starte aus dem KDE-Men� den yast2.
<ol>
<br><br><li>�ffne den Men�punkt "Network/Basic", "Network card configuration", "Interface",
"no. 0". Mittels welchen Bootprotokolls bezieht dein System gegenw�rtig seine IP-Adresse?
<br><br><li>�ndere die IP-Adresse auf "192.168.1.10+Nr deines Arbeistplatzes" und gib die
einem Klasse C Netzwerk entsprechende Netzmaske ein.
<br><br><li>Im Men�punkt "Hostname & Name Server Configuration" gib als Hostname "linux10+Nr deines 
Arbeistplatzes" an. Als Dom�nennamen verwenden wir "localnet". Das Nameserverfeld la� unver�ndert; 
wir ben�tigen es erst sp�ter. Auch den Punkt "Routing" ben�tigen wir erst sp�ter.
<br><br><li>Speichere die neue Konfiguration ab.
<br><br><li>Nachdem yast2 seine Arbeit beendet hat teste die neue Konfiguration.
Stimmt die IP-Adresse und Netzmaske (ifconfig). Welche Routen sind definiert?
Kannst du dich auf deiner eigenen IP-Adresse pingen?
Kannst das System deines Nachbarn (erfrage die IP-Adresse) pingen?
Mache erst dann mit der n�chsten Aufgabe weiter, wenn alle diese Punkte positiv erledigt sind; sonst 
stelle die Konfiguration mittels yast2 richtig.
<br><br><li>Da wir im Moment keinen Zugang zu einem Nameserver haben, modifizieren wir
die /etc/hosts Datei, so, da� wir alle Rechner im PC-Labor erreichen k�nnen. Zun�chst m�ssen
wir aber sicherstellen, da� yast2 diese Datei nicht �berschreibt. Setze dazu die Variablen
"CHECK_ETC_HOSTS" und "BEAUTIFY_ETC_HOSTS" im Men�  "MISC", "RC-Config-Editor" unter
"Network", "Base", "etc_hosts" auf "no". <br>
Nun editiere (als root) die Datei /etc/hosts. F�ge folgende Eintr�ge hinzu: 
"192.168.1.N linuxN.localnet linuxN", wobei N von
1 bis 30 l�uft. Am einfachsten geht die mit einer Schleife an der Kommandozeile, z.B.
<br>
$ for i in `seq 30`; do <br>
> echo "192.168.1.$i linux$i.localnet linux$i" >> /etc/hosts<br>
> done
<br>
<br><br><LI>Test deine <tt>/etc/hosts</tt> Datei indem du das System von oben nun mit seine
Hostnamen pingst. Mit welcher Option (von <TT>ping</TT>) kann man angeben, wie oft ein Rechner 
gepingt werden soll (man ping)?
</ol>
</OL>

<?php html_end();
?>

