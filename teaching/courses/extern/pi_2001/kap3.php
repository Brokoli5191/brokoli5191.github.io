<?php include "def.php";

 html_start("Kap. 3 Einfache Internetdienste");
 make_header("3. Einfache Internetdienste");
?>

<ol>
<li>Konfiguration des Internetservers<br>
Konfiguriere den inetd-Internetserver, so daß ftp (in.ftpd), telnet, nettalk, finger und rlogin 
Zugang zu deinem Rechner möglich sind. Verwende dazu yast2 ("
Network/Basic", "Start/Stop Services", "on with custom configuration"; im Wesenlichen
editierst du dabei die Datei <tt>/etc/inetd.conf</TT>.) 

<br><br><li>Testen der Konfiguration<br>
Teste deine Konfiguration. Zunächst überprüfe, ob du die entsprechenden Services von deinem
lokalen Rechner aus nutzen kannst. Falls du erfolgreich warst, schließe dich mit deinem
Nachbarn zusammen und testet gegenseitig eure Konfigurationen.

<br><br><li>Die TCP-Wrapper<br>
Konfiguriere die TCP-Wrapper, so daß Zugriff auf das ftp-Service nur von deinem lokalen
Rechner aus erlaubt ist (<tt>etc/hosts.[allow,deny]</tt>, falls nötig: <tt>man hosts_options</tt>). 
). 
Teste diese Konfiguration (zunächst mittels tcdpmatch, dann wieder gemeinsam mit deinem Nachbarn).
Verfolge die Fehlermeldungen in <tt>/var/log/messages</tt>. (Zu diesem Zweck öffne ein neues root-Fenster
und gib <tt>tail -f /var/log/messages</tt> ein.) ACHTUNG: Nach jedem Editieren der Konfigurationsdateien muß
du den inetd zwingen diese neu einzulesen (rcinetd reload).
<br>
Optional: Konfiguriere die TCP-Wrapper, so daß root bei jedem unerlaubten Zugriff eine mail
erhält, die die Details des Zugriffsversuchs mitteilen.

<br><br><li>Der xinetd-Internetserver (optional)<br>
Installiere das <a href="suse/xinetd.rpm">xinetd</a>-Paket (<tt>rpm -ihv xinetd.rpm</tt>). 
Deaktiviere im yast2 den inetd, aktiviere dafür den xinetd (RC-Config-Editor). 
Konfiguriere dein System für telnet und ftp Zugang (editiere dazu <tt>/etc/xinetd.conf</tt>, 
falls nötig: <tt>man xinetd.conf</tt>)
).
<br><B>Achtung:</b> der xinetd verfügt war über eine eigene Zugangsbeschränkung, die in
<tt>/etc/xinetd.conf</tt> konfiguriert werden kann, liest aber auch <tt>etc/hosts.[allow,deny]</tt>
und verhält sich dementsprechend!

<br><br><li>(Un)-Verschlüßelte Paßwörter: Telnet und Secure Shell<br>
Um uns das Risiko unverschüßelter Paßwörter drastisch vor Augen zu führen installiere den Portsniffer
<a href="suse/">sniffit</a>. Starte Sniffit im interaktiven Modus (<tt>sniffit -i</tt>)
und mache dich mit der grundlegenden Bedienung vertraut. <br>
Gehe nun gemeinsam mit deinem Nachbarn vor. Öffnet eine Telnet-Verbindung von einem Rechner
zum anderen (Achtung: TCP-Wrapper entsprechend konfigurieren!) und verfolgt die Verbinung mit Sniffit.
Könnt ihr das Paßwort herausfinden? <br>
Startet (otional) eine FTP-Verbindung und verfolg sie mit.
(Falls der FTP-Client nicht installiert ist, findest du die Pakete ftp.rpm (Standard FTP-Client)
und ncftp.rpm (komfortablerer FTP-Client; vor allem für anonymes FTP) 
<a href="suse">hier</a>.) Wie stehts nun um die Paßwörter/den Rest der Verbindung? 
<br><br>
Zum Unterschied startet nun eine ssh und/oder eine sftp(Secure FTP-Client)-Verbindung.
(Vergewissere dich, daß der ssh-Dämon (sshd) läuft und im RC-Config-Editor als gestartet eingetragen ist
("Start-Variables", "Start Network").
<br><B>Achtung:</b> auch der sshd liest die Dateien <tt>etc/hosts.[allow,deny]</tt>
und verhält sich dementsprechend!
<br><br>
Wie stehts jetzt um die Paßwörter/den Rest der Verbindung?

<br><br><li>Secure Shell Keys<br>
Erzeuge nun (als normaler Benutzer) ein dsa-Keypaar und konfiguriere
den root-Account so, daß du ohne Passwortabfrage eine ssh-Verbindung auf den root-Account
machen kannst (<tt>man ssh</tt>). Konfiguriere die Initialisierung des KDE-Desktops so, daß der gesamte
KDE unter dem ssh-agent läuft. Optional: Erstelle dir ein KDE-Icon zum laden deines Keys.
<br><br>
Detaillierte Anleitung: Erstelle das Keypaar mit <TT>ssh-keygen -t dsa</tt>; akzeptiere das Defaultfile
zum Speichern der Keys und wähle nach Belieben eine Paßphrase. Im Verzeichnis <TT>.ssh</tt> erstelle 
einen Symlink namens <tt>identity</TT> auf den privaten Key <tt>id_dsa</tt>. 
Erstelle im Homedirectory von root ein Verzeichnis namens <tt>.ssh</tt> und kopiere den Public 
Key des Benutzers in das File <tt>/root/.ssh/authorized_keys2</tt>.
<br><B>Achtung:</b> diese Datei muß unbedingt Besitzer und Gruppenbesitzer root haben!!!
(der Midnightcommander übernimmt beim Kopieren (im Unterschied zum Standard-Unix cp-Befehl!!!)
nicht den Besitz einer Datei!!!)

<br><br>
Zum Testen öffne eine Terminalemulation unter deinem normalen Benutzeraccount. Gib <tt>ssh-agent bash</tt>
ein. Die bash, in der du dich befindest läuft nun unter dem ssh-agent. Daher kannst du mittels <tt>
ssh-add</tt> den eben erzeugten Key laden. Mittels <tt>ssh root@localhost</tt> solltest du nun ohne 
Paßwortabfrage in den root-Accont gelangen.
<br>
Wirklich bequem wird die Sache erst, wenn der ganze Dekstop unter dem ssh-agent läuft. Zu diesem Zweck
editiere die Datei <tt>~/.xsession</tt> in deinem Homeverzeichnis und setze den Eintrag 
"usessh" auf "yes". Logge dich nun aus der graphischen Oberfläche aus und wieder ein. 
Jetzt kannst du in einer beliebigen Terminalemulation <tt>ssh-add</tt> eingeben um den Key zu laden. 
Ein Icon-File zum Laden des Keys befindet sich <a href="ssh-add">hier</a>. 
Kopiere das File in das Directory <tt>KDesktop</tt> in deinem Homedirectory.
 
  





<?php html_end();
?>
