<?php include "def.php";

 html_start("1. Einrichten der Arbeitsumgebung");
 make_header("1. Einrichten der Arbeistumgebung");
?>


In diesem kurzen Abschnitt richten wir uns zun�chst etwas am System ein.

<ol>
<li> Anlegen eines Benutzeraccounts <br>
<P>
Es ist aus Sicherheitsgr�nden und um Fehler zu vermeiden besser, nur dann unter
dem Administratoraccount (root) zu arbeiten, wenn es wirklich erforderlich ist; 
insbesondere sollte sich root nicht auf der graphischen Oberfl�che anmelden (siehe
auch entsprechende Warnung in der Standardinstallation)!
Daher erstellen wir zun�chste einen normalen Useraccount.
<br>
Starte (als root auf der graphischen Oberfl�che) yast2 und f�ge einen Benutzeraccount hinzu.
(Men�punkt "Security&Users", "Edit and Create Users" "Add" .)

<br><br><li> Logge dich (als root) aus und unter dem neu erstellten Benutzeraccount (auf der graphischen
Oberfl�che) wieder ein.

<br><br><li> Um nun in einer Terminalemulation (konsole) als root arbeiten zu k�nnen, m�ssen wir das su-Kommando (switch user) verwenden. Starte ein Konsole-Fenster (Symbol Bildschirm und Muschel) und wechsle mit dem Kommando "su -" auf den root Account (das "-" bedeute hier, da� in eine Loginshell gewechselt wird; es steht
also die Arbeitumgebung (Shellvariablen, etc.) von root zur Verf�gung).
<br><br>
In diesem root-Fenster nehmen wir nun einige Konfigurationarbeiten vor, um das System etwas komfortabler zu 
gestalten.

<br><br><li> Konfiguration des vi(m)-Editors
<br>
Editiere (mit dem vim-Editor; Aufruf vim) die Konfigurationsdatei /etc/vimrc. Schalte das Syntax-Highlighting durch Entfernen des Kommentarzeichens (") in der Zeile " " so ${VIMRUNTIME}/syntax/syntax.vim" ein. 
(Bewege mit den Cursortasten den Cursor bis zum "-Zeichen; zum Entfernen dr�cke die x-Taste).
Aktiviere die Benutzung der Backspace-Taste durch hinzuf�gen des Eintrags "set bs=2" (an beliebiger Stelle, 
I f�r insert, dann editieren).
Speichere die Datei ab (ESC : x) und �berzeuge dich davon, da� du alles richtig gemacht hast (duch erneutes
Aufrufen von von /etc/vimrc; NICHT nocheinmal eingeben sondern Pfeil-Taste!)
<br><br>
Um diese systemweite Einstellung auch f�r den neu erstellten Benutzeraccount verf�gbar zu machen l�sche
(als dieser Benutzer) die Datei ~.vimrc (~ steht f�r das Homedirectory des Benutzers) oder �ndere
den Eintrag: let color = "false" auf "true").
<br><br>
Installation des gvim-Editors (optional): <br>
Wenn du dich auf das "Abenteuer" den vi-Editor zu verwenden
einlassen willst (vi resp. seine Erweiterung vim ist DER Standardeditor in der Unix-Welt, 
sehr m�chtig aber etwas gew�hnungsbed�rftig) ist es g�nstig die sanfte "Einsteigervariante", den
gvim zu Verwenden; dieser ist ein graphischer Editor der �ber Men�s bedient werden kann, aber
vollst�ndig r�ckw�rtskompatibel zum vi(m) ist. Dieser ist allerdings nicht in der Standarsinstallation
enthalten. Lade das rpm-Paket von unter diesem <a href="suse/gvim.rpm">Url</a> herunter und installiere 
es; als root gib auf der Kommandozeile ein: rpm -ihv gvim.rpm. Starte gvim um zu sehen, 
ob du erfolgreich warst.


<br><br><li> Konfiguration des Secure Shell (ssh) Clients<br>
Um den ssh-Client etwas komfortabler verwenden zu k�nnen, editiere die Datei /etc/ssh/ssh_config.
�ndere im Eintrag "Protocol 1,2" die Reihenfolge auf 2,1 um standardm��ig die Protokollversion 2 zu 
verwenden. F�ge den Eintrag "ForwardX11 yes" hinzu (du kannst daf�r den vorhandenen aber auskommentierten
ForwardX11-Eintrag verwenden), um das Forwarden des X-Display zu automatisieren. Speichere die Datei ab.
<br>
Um zu testen ob du erfolgreich warst, verbinde dich aus einem neuen Konsole-Fenster mittels ssh mit
dem root account auf deinem Rechner (Eingabe "ssh -l root localhost" oder "ssh root@localhost"). 
Nach Eingabe des Pa�worts m�ssen sich graphische Anwendungen (z.B. xterm) starten lassen. Im folgenden
werden wir h�ufig diesen Weg verwenden, um als root zu arbeiten!
 
</ol>

<?php html_end();
?>

