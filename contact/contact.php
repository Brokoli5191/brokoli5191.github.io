<?php
require_once __DIR__ . '/../includes/app.php';

render_page([
    'title' => 'Contact',
    'currentPage' => 'contact',
    'header' => 'header.php',
    'footer' => 'footer.php',
    'content' => __DIR__ . '/../content/contact/contact.phtml',
]);
