var head = document.getElementsByTagName("head")[0];
// Nur den Regular-Stil laden
var link = document.createElement("link");
link.rel = "stylesheet";
link.type = "text/css";
link.href = "assets/icons/phosphor/regular-style.css";
head.appendChild(link);
