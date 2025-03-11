<?php include "def.php";

 html_start("Kap. 2 Netzwerkkonfiguration");
 make_header("2. Netzwerkkonfiguration");
?>

<OL>
<!--<LI>Melde dich als root an (Aus einem Konsole-Fenster als normaler User
gib "ssh root@localhost" ein.).-->

<li>Feststellen der Netzwerkkonfiguration.
<br><br>
Ohne Verwendung des yast oder von root-Privilegien versuche möglichst viel
Information über die gegenwärtige Netzwerkkonfiguration herauszufinden (verwende
das ifconfig-Kommando; es befindet sich in /sbin, das nicht(!) im Pfad von normalen Benutzern ist)
<ol>
<br><br><li>Was ist deine IP-Adresse, die Broadcast Adresse, die Netzmaske?
In welcher Klasse von Netzwerk befindest du dich also?
<br><br><li>Was ist die MAC-Adresse deines Rechners (genauer deiner Netzwerkkarte)?
Notiere sie in der Datei <TT>macadr</TT>! (Verwende dazu die Ausgabeumleitung der Shell; 
eine einfache Lösung ist  <tt>/sbin/ifconfig | grep Hardware > macadr</tt>. Um wirklich nur
die MAC Adresse in die Date zu schreiben verwende: <tt>/sbin/ifconfig | grep Hardware | 
cut -c 48-64  > macadr</tt>.)
<br><br><li>Um welchen Typ von Netzwerkkarte handelt es sich? Welche Netzwerkinterfaces sind
noch konfiguriert?
<br><br><LI>Welche Routen sind für dein System definiert? (Verwende das route-Kommando; ebenfalls in /sbin!)
<br><br><LI>Welche IP-Adresse hat dein Gateway? Welches Device ist dein Gateway-Device?
<br><br><LI>Welche Nameserver verwendet dein System (/etc/resolv.conf)? Was sind deine Suchdomänen?
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
<br><br><LI>Gib <TT>traceroute allspice.lcs.mit.edu</TT> ein. Über wieviele Stationen 
verläuft die Route? Warum endet die Route bei mercury.lcs.mit.edu?
Wie ist die IP-Adresse von allspice.lcs.mit.edu?
<br><br><LI>Über wie viele Stationen (Hops) geht ein Paket an <TT>www.orf.at</TT>?
</ol>

<br><br><br>
<li>Ändern der Netzwerkkonfiguration.
<br><br>
Wir ändern nun die Konfiguration der Ethernetkarte. Wir werden für den Rest des Kurses statische IP-Adressen
im privaten Klasse C-Netzwerk 192.168.1.0 verwenden. Das wird unter Suse am einfachsten
über den yast gemacht. Starte aus dem KDE-Menü den yast2.
<ol>
<br><br><li>Öffne den Menüpunkt "Network/Basic", "Network card configuration", "Interface",
"no. 0". Mittels welchen Bootprotokolls bezieht dein System gegenwärtig seine IP-Adresse?
<br><br><li>Ändere die IP-Adresse auf "192.168.1.10+Nr deines Arbeistplatzes" und gib die
einem Klasse C Netzwerk entsprechende Netzmaske ein.
<br><br><li>Im Menüpunkt "Hostname & Name Server Configuration" gib als Hostname "linux10+Nr deines 
Arbeistplatzes" an. Als Domänennamen verwenden wir "localnet". Das Nameserverfeld laß unverändert; 
wir benötigen es erst später. Auch den Punkt "Routing" benötigen wir erst später.
<br><br><li>Speichere die neue Konfiguration ab.
<br><br><li>Nachdem yast2 seine Arbeit beendet hat teste die neue Konfiguration.
Stimmt die IP-Adresse und Netzmaske (ifconfig). Welche Routen sind definiert?
Kannst du dich auf deiner eigenen IP-Adresse pingen?
Kannst das System deines Nachbarn (erfrage die IP-Adresse) pingen?
Mache erst dann mit der nächsten Aufgabe weiter, wenn alle diese Punkte positiv erledigt sind; sonst 
stelle die Konfiguration mittels yast2 richtig.
<br><br><li>Da wir im Moment keinen Zugang zu einem Nameserver haben, modifizieren wir
die /etc/hosts Datei, so, daß wir alle Rechner im PC-Labor erreichen können. Zunächst müssen
wir aber sicherstellen, daß yast2 diese Datei nicht überschreibt. Setze dazu die Variablen
"CHECK_ETC_HOSTS" und "BEAUTIFY_ETC_HOSTS" im Menü  "MISC", "RC-Config-Editor" unter
"Network", "Base", "etc_hosts" auf "no". <br>
Nun editiere (als root) die Datei /etc/hosts. Füge folgende Einträge hinzu: 
"192.168.1.N linuxN.localnet linuxN", wobei N von
1 bis 30 läuft. Am einfachsten geht die mit einer Schleife an der Kommandozeile, z.B.
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

