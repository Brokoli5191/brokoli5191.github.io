<?php
// Set general stuff

// Variables
$project = "Linux als Internetserver";
$uname = "stein";
$author = "Roland Steinbauer";
$authormail = "roland.steinbauer@univie.ac.at";
$wwwmath="www.mat.univie.ac.at/";
$wwwhome="www.univie.ac.at/~stein";

// Functions
function html_start($title)
{
 echo "<html>\n";
 echo "<head>\n";
 echo "<title> $title </title>\n";
 echo "<link rel=\"STYLESHEET\" href=\"style.css\" type=\"text/css\">\n";
 echo "<BASE TARGET=\"_top\">\n";
 echo "</head>\n";
 echo "<body>\n";
 make_navigation_bar();
 echo "<br>";
}

function make_header($htext)
{
 echo "<br>\n<h2>$htext</h2>\n";
}

function answer($text)
{
 echo "<br><b>Antwort:</b> <i>$text</i>\n";
}

function make_navigation_bar()
{
 echo "<A HREF=\"index.php\">[Home]</A> ";
 echo "<A Href=\"kap1.php\">[1.]</A> ";
 echo "<A Href=\"kap2.php\">[2.]</A> ";
 echo "<A href=\"kap3.php\">[3.]</A> ";
 echo "<A href=\"kap4.php\">[4.]</A> ";
 echo "<A href=\"kap5.php\">[5.]</A> ";
 echo "<A href=\"kap6.php\">[6.]</A> ";
 echo "<A href=\"kap7.php\">[7.]</A> ";
 echo "<A href=\"kap8.php\">[8.]</A> ";

 echo "\n"; 
 echo "<hr>";
}

function make_footer()
{
 global $author;
 global $authormail;
 echo "<Font Size=\"-1\">";
 echo "Last modified ". date ("F j, Y ", getlastmod())." by </font>";
 make_author_ref();
 echo "</Font>";
 }  

function make_author_ref()
{
 global $author;
 global $authormail;
 echo "<a href=\"mailto:$authormail\">$author</a>";
}

function html_end()
{
 echo "<br><br><br>";
 make_navigation_bar();
 make_footer();
  echo "</body>\n</html>";
  }   
?>
