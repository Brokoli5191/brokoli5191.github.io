<?php
require_once __DIR__ . '/../includes/app.php';

render_page([
    'title' => 'Research-Topics',
    'currentPage' => 'research',
    'currentSubPage' => 'research-topics',
    'header' => 'header-research.php',
    'footer' => 'footer.php',
    'content' => __DIR__ . '/../content/research/research-topics.phtml',
]);
