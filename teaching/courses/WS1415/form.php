<?
  session_start();
  $style_vorname = "";
  $style_nachname = "";
  $style_email = "";
  $style_MartikelNr = "";
  $style_stkz = "";
  $style_gruppe = "";
  $style_typ = "";
  $style_Fach1 =  "";
  $style_Fach2 =  "";
  $style_2abschnitt = "";
  $style_Analysis = "";
  $style_AnalysisNote1 = "";
  $style__AnalysisNote2  = "";
  $style__AnalysisNote3  = "";
  $style_motivation = "";
  $kopie = true;
  $check_code = $_POST['senden']=='Senden';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Your description goes here." />
    <meta name="keywords" content="your,keywords,goes,here" />
    <meta name="author" content="Your Name / Original design by Andreas Viklund - http://andreasviklund.com" />
    <meta name="generator" content="webgen - http://webgen.rubyforge.org" />
    <link rel="stylesheet" href="../../default.css" type="text/css" media="screen" />
    <title>Roland Steinbauer - Seminar f&uuml;r LAK: Die Geometrie von Kurven und Flächen</title>
  </head>


  <body>
    <div id="container">

      <div id="sitename">
        <h1>Home Page of Roland Steinbauer</h1>
      </div>

      <div id="mainmenu">
        <ul><li class="webgen-menu-level1"><a href="../../index.html">Home</a></li><li class="webgen-menu-level1 webgen-menu-submenu"><a href="../../research/index.html">Research</a></li><li class="webgen-menu-level1 webgen-menu-submenu webgen-menu-submenu-inhierarchy"><a href="../index.html">Teaching</a></li><li class="webgen-menu-level1"><a href="../../vita.html">Vita</a></li></ul>
      </div>

      <div id="wrap">
        <div id="leftside"><br><br><br>
        <h2>Seminar f&uuml;r LAK: Die Geometrie von Kurven und Flächen</h2>
        
         
         <div id="pagemenu"><br><br></div>
         
        
	</div>

        </div>

        <div id="rightside"><br><br><br>
         <h1>Links</h1>
          <ul class="linklist">
            
	    <li><a href="http://www.mat.univie.ac.at/~iagf" 
	           target="_blank">IAGF</a>   
		<img width="80" border="0" alt="A mollifier" 
		     src="../../images/molli.gif"><br></li>
            <li><a href="http://www.mat.univie.ac.at/~diana" 
	           target="_blank">DIANA</a></li>
	   <li><a href="http://www.mat.univie.ac.at/~nigsch/diana/" 
	                      target="_blank">Diana Seminar</a></li>		
            <li><a href="http://bibliothek.univie.ac.at/fb-mathematik_statistik/" 
	           target="_blank">Math Library</a></li>
            <li><a href="http://www.mat.univie.ac.at" 
	           target="_blank">Math Faculty</a></li>
            <li><a href="http://www.univie.ac.at" 
	           target="_blank">Vienna University</a></li><br><br>
            <!--<li><a href="http://unsereuni.at" target="_blank">
	      <img src="http://unsereuni.at/resources/img/Unsereuni-fix.gif" 
		   width="80" border="0">  -->
	  <!--</ul> 
	  <br><br><br>
	  
	  <ul>
            <ul class="linklist">
          -->
	  <br><br>
              <li><a href="http://lisamission.org" 
	             target="_blank">LISA</a></li>
              <li><a href="http://gravity.univie.ac.at/"
	             target="_blank">Gravitational Physics</a></li>
	  <!--</ul>
          <br><br><br><br><br><br><br><br><br>
          
	  <ul class="linklist">
	  -->
	  <br><br><br><br><br><br><br>
            <li><a href="http://www.asyl-in-not.org/"  
	           target="_blank">Asyl in Not</a>
	    <li><a href="http://www.purplesheep.at" 
	           target="_blank">Purple Sheep</a>
            <li><a href="http://www.gegen-unrecht.at:80/index.php" 
	           target="_blank">Kinder geh&ouml;ren nicht ins Gef&auml;ngnis</a>
            <li><a href="http://www.konfessionsfrei.at/" target="_blank">
	     <img src="../../images/laizitaet_fisch.gif" 
	          width="80" border="0"></a>
          <br><br><br>
          <li><a href="http://www.linux.org" target="_blank">
            <img align="bottom" alt="100% M$ free" 
	         src="../../images/msfree.gif" border="0">
            </a>
          </div>


        <div id="navbar" class="content">
          <span class="leftbox">Location: <a href="../../index.html">Home</a> / <a href="../index.html">Teaching</a> / <a href="./">Ws1415</a> / <span>Seminar f&uuml;r LAK: Die Geometrie von Kurven und Flächen</span></span>
          <!--<span class="rightbox">Language: <span>en</span></span>-->
          <div class="clearingdiv">&nbsp;</div>
        </div>

        <div id="content">


<b>Seminar f&uuml;r LAK (Analysis/Angewandte Mathematik):</b>
<center><h3>Die Geometrie von Kurven und Fächen</h3>
</center>

<p align="justify">
<b>LVA Leiter:</b> Roland Steinbauer
<br>
<b>LVA Nummer:</b> 250054/250055
<br>
<b>LVA Typ:</b> SE
<br>
<b>Semesterwochenstunden/ECTS:</b> 2/4
<br>
<b>Ort und Zeit:</b> Gruppe 1: Mi. 11.05-12.35 SR 12 (OMP 1); Gruppe 2: Mi. 14.30-16.00 SR 10 (OMP 1)<br>
<b>Beginn:</b> Mi. 1.10.2010 (Vorbesprechung)<br>

<br><br><br>
<h3>Anmeldeformular</h3>

<script language=JavaScript>
<!--
 function isValid() { 

   var msg = "";
   
   if (kontaktFormular.eMail.value.indexOf("@") < 1 ||
       kontaktFormular.eMail.value.indexOf(".") < 1) {
     msg += "- Die E-Mail-Adresse ist syntaktisch nicht korrekt.\n";
   }
   
   if(kontaktFormular.motivation.value == "") {
     msg += "- Leeres Feld: Motivation:\n";
   }

   if(msg == "") {
     return true;   
   }
   alert(msg);
   return false;
 }
-->
</script>

<?php
  include_once '../../securimage/securimage.php';
  $securimage = new Securimage();
 ?>



<?php

  $formularAnzeigen = false;
 
 if (!empty($_POST["senden"]) && (
      empty($_POST["vorName"]) ||
      empty($_POST["nachName"]) ||
      empty($_POST["eMail"]) ||
      empty($_POST["MatrikelNr"]) ||
      empty($_POST["stkz"]) ||
//      empty($_POST["gruppe "]) ||
//      empty($_POST["typ"]) ||
      empty($_POST["Fach1"]) ||
      empty($_POST["Fach2"]) ||
      empty($_POST["2abschnitt"]) ||
      empty($_POST["Analysis"]) ||
//      empty($_POST["AnalysisNote1"]) || 
//      empty($_POST["AnalysisNote2"]) ||
//      empty($_POST["AnalysisNote3"]) ||
      empty($_POST["motivation"]))) 
   {
     $formularAnzeigen = true;
      echo '<span style="color: #FF0000; font-size: 
         x-large;">Bitte f&uuml;lle(n sie) alle rot markierten Pflichtfelder 
 aus!</span><br><br/>';
     if(empty($_POST["vorName"])) {
      $style_vorname = "style=\"color: #FF0000;\"";
    } else {
      $style_vorname = "";
    }
    if(empty($_POST["nachName"])) {
      $style_nachname = "style=\"color: #FF0000;\"";
    } else {
      $style_nachname = "";
    }
    if(empty($_POST["eMail"])) {
      $style_email = "style=\"color: #FF0000;\"";
    } else {
      $style_email = "";
    }
    if(empty($_POST["MatrikelNr"])) {
      $style_MatrikelNr = "style=\"color: #FF0000;\"";
    } else {
      $style_MatrikelNr = "";
    }
    if(empty($_POST["stkz"])) {
      $style_stkz = "style=\"color: #FF0000;\"";
    } else {
      $style_stkz = "";
    }
    if(empty($_POST["Fach1"])) {
      $style_Fach1 = "style=\"color: #FF0000;\"";
    } else {
      $style_Fach1 = "";
    }
    if(empty($_POST["Fach2"])) {
      $style_Fach2 = "style=\"color: #FF0000;\"";
    } else {
      $style_Fach2 = "";
    }
   if(empty($_POST["2abschnitt"])) {
      $style_2abschnitt = "style=\"color: #FF0000;\"";
    } else {
      $style_2abschnitt = "";
    }
    if(empty($_POST["Analysis"])) {
      $style_Analysis = "style=\"color: #FF0000;\"";
    } else {
      $style_Analysis = "";
    }
    if(empty($_POST["motivation"])) {
      $style_motivation = "style=\"color: #FF0000;\"";
    } else {
      $style_motivation = "";
    }
  } 
  else if ($securimage->check($_POST['captcha_code']) == false) 
  {
    $formularAnzeigen = true;
    if($check_code) 
   {
    echo '<span style="color: #FF0000; font-size: 
    x-large;">Bitte gib/geben sie den korrekten Code ein!</span><br><br/>';
    }
  }
  else if (!empty($_POST["senden"]) &&
             !isEmail($_POST["eMail"])) 
  {
    $formularAnzeigen = true;  
    echo '<span style="color: #FF0000; font-size: x-large;">Die E-Mail-Adresse ist nicht korrekt!</span><br><br/>';
  } 
  else if (empty($_POST["senden"])) {
    $formularAnzeigen = true;  
  };
  
 
  if ($formularAnzeigen) {
?>


Bitte f&uuml;lle(n sie) das folgende Formular sorgf&auml;ltig aus. Alle Felder sind Pflichtfelder.
<br><br>


<form name="Anmeldeformular" method="post" action="/~stein/teaching/WS1415/form.php"
 onSubmit="return isValid()">
  <table width="90%" border="0">
<!--anfang vorName-->  
    <tr>
      <td <?=$style_vorname; ?> ><strong>
        Vorname:
      </strong></td>
      <td>
      <input name="vorName" type="text" value="<?=$_POST['vorName']; ?>" /></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende vorName-->
<!--anfang nachName-->    
    <tr>
      <td  <?=$style_nachname; ?> ><strong>
        Nachname:
      </strong></td>
      <td><input name="nachName" type="text" value="<?=$_POST['nachName']; ?>" /></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende nachName-->
<!--anfang eMail-->        
    <tr>
      <td  <?=$style_email; ?> ><strong>
        E-Mail:
      </strong></td>
      <td><input name="eMail" type="text" id="eMail" value="<?=$_POST['eMail']; ?>" /></td>
      <td>
        zB: name@gmx.net, ihrName@web.de
      </td>      
    </tr>
<!--ende eMail-->
<!--matrikelNr-->        
    <tr>
      <td  <?=$style_MatrikelNr; ?> ><strong>
        Matrikelnummer:
      </strong></td>
      <td><input name="MatrikelNr" type="text" value="<?=$_POST['MatrikelNr']; ?>" /></td>
      <td>
       zB: 8901023 
      </td>      
    </tr>
<!--ende matrikelNr-->
<!--anfang Stkz-->        
    <tr>
      <td  <?=$style_stkz; ?> ><strong>
        Studienkennzahl(en):
      </strong></td>
      <td><input name="stkz" type="text" value="<?=$_POST['stkz']; ?>" /></td>
      <td>
       zB: 190 405 406      
      </td>      
    </tr>
<!--ende Stkz-->
<!--anfang Studien-->
    <tr>
      <td ><strong>
        LA-F&auml;cher:
      </strong></td>
    <tr>
    <tr>
      <td  <?=$style_Fach1; ?> >&nbsp;&nbsp;1. Fach:</td>
      <td><input name="Fach1" type="text" value="<?=$_POST['Fach1']; ?>" /></td>
    </tr>
    <tr>
      <td <?=$style_Fach2; ?> >&nbsp;&nbsp;2. Fach:</td>
      <td><input name="Fach2" type="text" value="<?=$_POST['Fach2']; ?>" /></td>
    </tr>
<!--ende Studien-->
<br><br>
<!--anfang Seminargruppe-->
     <tr>
      <td ><strong>
        Gruppe:
      </strong></td>
      <td>Gruppe <select name="gruppe" id="gruppe" value="<?=$_POST['gruppe']; ?>" />
        <option  <?php if ($_POST["gruppe"] == "1") echo " selected=\"selected\" "; ?> />1</option>
        <option  <?php if ($_POST["gruppe"] == "2") echo " selected=\"selected\" "; ?> />2</option>
        <option  <?php if ($_POST["gruppe"] == "egal") echo " selected=\"selected\" "; ?> />egal</option> 
      </select></td>
      <td>Bitte w&auml;hle(n sie) eine Gruppe aus. Wenn du/sie "egal" w&auml;hlst/en erfolgt im Fall der Aufnahme ins Seminar gleichzeitig mit dieser 
        eine fixe(!) Zuteilung zu einer Gruppe durch den Seminarleiter.<br>
        Gruppe 1: Mi. 11.05-12.35 SR 12 (OMP 1)<br>
        Gruppe 2: Mi. 14.30-16.00 SR 10 (OMP 1) 
      </td>          
    </tr>
<!--ende Seminargruppe-->
<!--anfang Seminartyp-->    
     <tr>
      <td ><strong>
        Seminartyp:
      </strong></td>
      <td>Seminar f. LAK: <select name="typ" id="typ"  value="<?=$_POST['typ']; ?>" />
        <option  <?php if ($_POST["typ"] == "Analysis") echo " selected=\"selected\" "; ?> />Analysis</option>
        <option  <?php if ($_POST["typ"] == "Angewandte Mathematik") echo " selected=\"selected\" "; ?> />Angewandte Mathematik</option>
        <option  <?php if ($_POST["typ"] == "egal") echo " selected=\"selected\" "; ?> />egal</option> 
      </select></td>
      <td>
        Bitte w&auml;hle(n sie) einen Seminartyp aus.
      </td>          
    </tr>
<!--ende Seminartytyp-->
<!--2.Abschnitt-->      
 <tr>
      <td  <?=$style_2abschnitt; ?>  ><strong>
        Ich bin im 2.Studienabschnitt: 
      </strong></td>
      <td><select name="2abschnitt" id="abschnitt"  value="<?=$_POST['2abschnitt']; ?>" >
        <option <?php if ($_POST["2abschnitt"] == "Nein") echo " selected=\"selected\" "; ?> />Nein</option>
        <option <?php if ($_POST["2abschnitt"] == "Ja") echo " selected=\"selceted\" ";  ?> />Ja</option>
      </select></td>
      <td><? echo $_POST["2abschnitt"] ?>

        (Wird automatisch &uuml;berprüft.)
     </td>          
    </tr>
<!--ende 2.Abschnitt-->
<!--anfang Analysis-->      
  <tr>
      <td  <?=$style_Analysis; ?> ><strong>
        Den Analysis-Zyklus habe<br> ich absolviert bei:
      </strong></td>
      <td><input name="Analysis" type="text"  value="<?=$_POST['Analysis']; ?>" /></td>
      <td>   
      </td>      
    </tr>
    <tr>
      <td ><strong>
        Noten im Analysis-Zyklus:
      </strong></td>
      <td></td><td>(0=noch nicht kolloquiert)
    <tr>
      <td>&nbsp;&nbsp;EidA:</td>
      <td><select name="AnalysisNote1" id="Ana1" value="<?=$_POST['AnalysisNote1']; ?>" />
        <option  <?php if ($_POST["AnalysisNote1"] == "1") echo " selected=\"selected\" "; ?> />1</option>  
	<option  <?php if ($_POST["AnalysisNote1"] == "2") echo " selected=\"selected\" "; ?> />2</option>  
	<option  <?php if ($_POST["AnalysisNote1"] == "3") echo " selected=\"selected\" "; ?> />3</option>  
	<option  <?php if ($_POST["AnalysisNote1"] == "4") echo " selected=\"selected\" "; ?> />4</option>  
	<option  <?php if ($_POST["AnalysisNote1"] == "5") echo " selected=\"selected\" "; ?> />5</option> 
	<option  <?php if ($_POST["AnalysisNote1"] == "0") echo " selected=\"selected\" "; ?> />0</option>
      </select></td>
      <td>Einf&uuml;hrung i. d. Analysis</td
    </tr>
    <tr>
      <td>&nbsp;&nbsp;AieVfLAK:</td>
      <td><select name="AnalysisNote2" id="Ana2" value="<?=$_POST['AnalysisNote2']; ?>" >
        <option  <?php if ($_POST["AnalysisNote2"] == "1") echo " selected=\"selected\" "; ?> />1</option>       
        <option  <?php if ($_POST["AnalysisNote2"] == "2") echo " selected=\"selected\" "; ?> />2</option>       
	<option  <?php if ($_POST["AnalysisNote2"] == "3") echo " selected=\"selected\" "; ?> />3</option> 
	<option  <?php if ($_POST["AnalysisNote2"] == "4") echo " selected=\"selected\" "; ?> />4</option>  
	<option  <?php if ($_POST["AnalysisNote2"] == "5") echo " selected=\"selected\" "; ?> />5</option> 
	<option  <?php if ($_POST["AnalysisNote2"] == "0") echo " selected=\"selected\" "; ?> />0</option>
      </select></td>
      <td>Analysis in einer Variable f&uuml;r LAK</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;RAimukAieVfLAK:</td>
     <td><select name="AnalysisNote3" id="Ana3"  value="<?=$_POST['AnalysisNote3']; ?>" >
      <option  <?php if ($_POST["AnalysisNote3"] == "1") echo " selected=\"selected\" "; ?> />1</option>       
      <option  <?php if ($_POST["AnalysisNote3"] == "2") echo " selected=\"selected\" "; ?> />2</option>       
      <option  <?php if ($_POST["AnalysisNote3"] == "3") echo " selected=\"selected\" "; ?> />3</option> 
      <option  <?php if ($_POST["AnalysisNote3"] == "4") echo " selected=\"selected\" "; ?> />4</option>  
      <option  <?php if ($_POST["AnalysisNote3"] == "5") echo " selected=\"selected\" "; ?> />5</option> 
      <option  <?php if ($_POST["AnalysisNote3"] == "0") echo " selected=\"selected\" "; ?> />0</option>
     </select></td>
     <td>Reelle Analysis in mehreren und komplexe Anaylsis in einer Variable f&uuml;r LAK</td>
    </tr>
<!--ende Analysis-->
<!--anfanf motivation-->
    <tr>
      <td  <?=$style_motivation; ?>  ><strong>
        Es ist mir wichtig gerade<br> and diesem Seminar <br>teilzunehmen weil:
      </strong></td>
      <td><textarea name="motivation" cols="50" rows="10"><?=$_POST['motivation']; ?></textarea></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende motivation-->
<!--anfang kopie        
    <tr>
      <td><strong>
        Kopie der Nachricht:
      </strong></td>
      <td><input name="kopie" type="checkbox" value="checked" <?=$_POST['kopie']; ?> ></td>
      <td>
        Ich m&ouml;chte eine Kopie der nachricht per e-mail erhalten.
      </td>          
    </tr>
ende kopie-->
<!--anfang Captcha -->        
    <tr>
      <td>
	<img id="captcha" src="../../securimage/securimage_show.php" alt="CAPTCHA Image" />
        <a href="#" onclick="document.getElementById('captcha').src = '../../securimage/securimage_show.php?' + Math.random(); return false">Reload Image</a>
      </td>
      <td><input type="text" name="captcha_code" size="10" maxlength="6" /></td>
      <td>&Uuml;bertrage(n sie) bitte den Code (case sensitive).</td>          
    </tr>
<!--ende Captcha -->    

    <tr>
      <td colspan="3">
        <div align="center">
          <input name="senden" type="submit" value="Senden" />
        </div>
      </td>          
      <td>&nbsp;</td>          
    </tr>
  </table>
</form>

<?php
  echo'';
  }
  else {
    $eMail = '
    
    Bitte ueberpruefe(n sie) nochmals alle Angaben. Sollte ein Fehler aufgetreten sein,
    benachrichtige(n sie) bitte roland.steinbauer@univie.ac.at 

    Name: '.$_POST['vorName'].'  '.$_POST['nachName'].'
    EMail: '.$_POST['eMail'].'
    Matrnr: '.$_POST['MatrikelNr'].'
    Stkz: '.$_POST['stkz'].'
    Gruppe: '.$_POST['gruppe'].'
    Typ:'.$_POST['typ'].'
    
    Faecher: '.$_POST['Fach1'].' '.$_POST['Fach2'].'
    2.Abschn: '.$_POST['2abschnitt'].'
    Analysis bei: '.$_POST['Analysis'].'
    Analysis Noten: '.$_POST['AnalysisNote1'].'  '.$_POST['AnalysisNote2'].'  '.$_POST['AnalysisNote3'].'
    Motivation:  '.$_POST['motivation'].'
     ';
    
     $subject = '
     SemLAK Anm. Gr: '.$_POST['gruppe'].' '.$_POST['nachName'].'
     ';

     $headers = 'From: SemLAK Anmeldung <roland.steinbauer@univie.ac.at>' . "\r\n" .
                'Reply-To: roland.steinbauer@univie.ac.at' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    if (@mail("roland.steinbauer@univie.ac.at",
         $subject , $eMail, $headers)) {
      echo "Vielen Dank f&uuml;r die Anmeldung.<br />"; 
    } else {
      echo "E-Mail-Verkehr funktioniert zur Zeit nicht<br />";
    }
   if ( true ) {
      if (@mail($_POST['eMail'],
           "Kopie Seminaranmeldung",
           $eMail, $headers)) {
        echo "Eine Kopie der Anmeldung wurde an die angegeben eMail Adresse versendet.<br />";
      }
    }
}

 function isEmail($email) {
    $nonascii      = "\x80-\xff"; 
    $nqtext        = "[^\\$nonascii\015\012\"]";
    $qchar         = "\\[^$nonascii]";
    $protocol      = "(?:mailto:)";
    $normuser      = "[a-zA-Z0-9][a-zA-Z0-9_.-]*";
    $quotedstring  = "\"(?:$nqtext|$qchar)+\"";
    $user_part     = "(?:$normuser|$quotedstring)";
    $dom_mainpart  = "[a-zA-Z0-9][a-zA-Z0-9._-]*\.";
    $dom_subpart   = "(?:[a-zA-Z0-9][a-zA-Z0-9._-]*\.)*";
    $dom_tldpart   = "[a-zA-Z]{2,5}";
    $domain_part   = "$dom_subpart$dom_mainpart$dom_tldpart";
    $regex         = "$protocol?$user_part\@$domain_part";
    if (preg_match("/^$regex$/",$email)) {
      return true;
    }
    return false;
  }






?>
 



        </div>
        <div class="clearingdiv">&nbsp;</div>

      </div>
    </div>

    <div id="footer">&copy; 2014 roland steinbauer | generated by <a href="http://webgen.rubyforge.org" target="_blank">webgen</a> | design by <a href="http://andreasviklund.com" target="_blank">andreas viklund</a></div>
  </body>
</html>

