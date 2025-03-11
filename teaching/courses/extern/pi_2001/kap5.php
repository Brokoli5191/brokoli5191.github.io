<?php include "def.php";

 html_start("Kap.5 Kernel compilieren");
 make_header("5. Kernel compilieren");
?>

<ol>
<li> Installiere die Kernel Quellen in /usr/src/; das tgz-File liegt am Ftp-Server.
<br><br><li>Wechsle ins Verzeichnis /usr/src/linux und starte die graphische
Konfiguration mittels "make xconfig"; Gehe das Menü Schritt für Schritt durch.
Wenn du fertig bist speichere die die Konfiguration ab.
<br><br><li>Erzeuge die Abhängigkeitsdateien mittels "make dep".
<br><br><li>Compiliere den Kernel mittels "make bzImage".
<br><br><li>Compiliere die Module mittels "make modules".
<br><br><li>Installiere die Module mittels "make modules_install".
<br><br><li>Kopiere das neue Kernelimage nach "/boot/vmlinuz-versionsnr.".
<br><br><li>Konfiguriere den Bootloader und führe "lilo" aus.
<br><br><li>Boote das System mit dem neuen Kernel und achte genau auf Fehlermeldungen.
</ol>

<?php html_end();
?>

