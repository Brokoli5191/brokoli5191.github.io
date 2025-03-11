<?php
// Functions

function mk_title($LVA_TITLE)
{ echo "<br><br>\n";
  echo "<H3> Ergebnisse der Lehrveranstaltungsevaluation<BR>
        $LVA_TITLE</H3>\n";
  echo "<br><br>\n";
}
	     
function load_img_portrait($img_title,$title)
{ echo "<IMG SRC=\"$img_title\" ALT=\"$title\" BORDER=\"0\" HSPACE=\"20\" 
	VSPACE=\"30\">";
}

function load_img_landscape($img_title,$title)
{ echo "<IMG SRC=\"$img_title\" ALT=\"$title\" BORDER=\"0\">";
}

function mk_eval_page($lva_title,$lva_url)
{html_start("LVA Evaluation: $lva_title");

mk_title($lva_title);

echo "Übersicht<br>\n";
echo "<A HREF=\"#details\" TARGET=\"main\">Details</A>\n";
echo "<br><br>\n";


load_img_portrait($lva_url . "_summary.jpg",$lva_title . " Übersicht");

echo "<P>\n";
echo "<A NAME=\"details\">\n";

for ($i = 1; $i <= 4; $i++) 
{
load_img_landscape($lva_url . "_" . $i . ".jpg",$lva_title . " Detail " . $i );
echo "<BR><BR>";
}


html_end();

}


?>
