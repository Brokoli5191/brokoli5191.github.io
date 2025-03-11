<?php
// Set general stuff

// Variables
$project = "Praxis der Computersysteme";
$uname = "praxis";
$author1 = "Roland Steinbauer"; 
//$author2 = "Martin Piskernig";
$author1mail = "roland.steinbauer@univie.ac.at";
//$author2mail = "martin.piskernig@univie.ac.at";
$wwwmath="http://www.mat.univie.ac.at/";
$wwwuni="http://www.univie.ac.at/";
$wwwhome="www.univie.ac.at/praxis";
$countbegin = "Feb. 19, 2001";
$mit = "null";

// Functions

function html_start($title)
{
echo "<html>\n";
echo "<head>\n";
echo "<title>$title</title>\n";
echo "<link rel=\"STYLESHEET\" href=\"style.css\" type=\"text/css\">\n";
echo "<BASE TARGET=\"_top\">\n";
echo "</head>\n";
echo "<body>\n";
}

function make_header($htext)
{
echo "<br>\n<h2>$htext</h2>\n";
}

function make_footer()
{
global $author1;
global $author2;
global $author1mail;
global $author2mail;    
echo "<hr>\n<font>";
echo "Last modified ". date ("F j, Y ", getlastmod())." by </font>";
make_author_ref();
echo ".\n";
}  

function make_author_ref()
{
global $author1;
global $author2;
global $author1mail;
global $author2mail; 
echo "<a href=\"mailto:$author1mail\">$author1</a>";// and ";
//echo "<a href=\"mailto:$author2mail\">$author2</a>";
}

function html_end()
{
make_footer();
echo "</body>\n</html>";
}   

function make_menu_item($itext,$ref,$frame)
{
echo "<br><a href=\"$ref\" target=\"$frame\">$itext</a><br>";
}

function make_menu_subitem($itext,$ref,$target)
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$ref\" target=\"$target\">$itext</a><br>";
}

function make_menu_subitem_off($itext,$ref)
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$ref\" target=\"_blank\">$itext</a><br>";
}

function create_menu()
{
global $wwwmath;
global $countbegin;
global $mit;

html_start("menu2");
// echo "<br><br>";

echo "<br>";
echo "<A HREF=\"home.php\" TARGET=\"main\">Home</A><br>\n";
#echo "<SPACER SIZE=\"7\" TYPE=\"vertical\">\n";   

if($mit == "ws0102")
{
make_menu_item("Wintersemester 2001/01","off.php","menu");
make_menu_subitem("Home","ws0102_home.php","main");
}
else
{
make_menu_item("Wintersemester 2001/02","ws0102_index.php","");
}


if($mit == "ss")
{
make_menu_item("Sommersemester 2001","off.php","menu");
make_menu_subitem("Home","sosem01_home.php","main");
make_menu_subitem("Prüfungsanmeldung","sosem01_exam","main");
#make_menu_subitem("Inhalt","../SoSem01/praxis/inhalt.php","main");
#make_menu_subitem("Termine","../SoSem01/praxis/termine.php","main");
#make_menu_subitem("Block 1","../SoSem01/praxis/block1.php","main");
#make_menu_subitem("Skriptum","../SoSem01/praxis/script.php","main");
make_menu_subitem("Übungen 1","sosem01_ue/node1.html","main");
#make_menu_subitem("Block 2","../SoSem01/praxis/block2","main");
make_menu_subitem("Übungen 2","sosem01_ue2/node1.html","main");
make_menu_subitem("Miniprojekte","sosem01_projekte/","main");
make_menu_subitem("Miniprojekte 2","sosem01_projekte2/","main");
make_menu_subitem("PC-Labors","sosem01_labors.php","main");
#make_menu_subitem("Übungen(bash)","../SoSem01/praxis/bashue/index.html","main");
}
else
{
make_menu_item("Sommersemester 2001","sosem01_index.php","");
}

if($mit == "ws")
{
make_menu_item("Wintersemester 2000/01","off.php","menu");
make_menu_subitem("Home","ws0001_home.php","main");
make_menu_subitem("Prüfungsanmeldung","ws0001_exam","main");
make_menu_subitem("LVA Evaluation","../WS0001/eval/p.php","main");
#make_menu_subitem("Skriptum", "../WS0001/skript.php3","main");
make_menu_subitem("Übungsbeispiele","ws0001_ue/" ,"main");
}
else
{
make_menu_item("Wintersemester 2000/01","ws0001_index.php","");
}

echo "<br>";
echo "<A HREF=\"links.php\" TARGET=\"main\">Links</A><br>\n";

#if($mit == "links")
#{
#make_menu_item("Links","off.php");
#}
#else
#{
#make_menu_item("Links","links.php");
#}

echo "<SPACER SIZE=\"7\" TYPE=\"vertical\">\n";
}									    
?>
