<?php
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$pathSegments = array_values(array_filter(explode('/', ltrim($scriptName, '/')), 'strlen'));

// Project is typically hosted under a base folder (e.g. /site/about/about.php).
// We want paths relative to that base folder, not necessarily the webserver document root.
// Example: /site/contact/contact.php -> depth 1 (need "../" once to reach /site/)
$depth = max(count($pathSegments) - 2, 0);

$rootPath = '';
for ($i = 0; $i < $depth; $i++) {
    $rootPath .= '../';
}

$assetsPath = $rootPath . 'assets/';
$includesPath = $rootPath . 'includes/';

$aboutPath = $rootPath . 'about/';
$pinboardPath = $rootPath . 'pinboard/';
$researchPath = $rootPath . 'research/';
$teachingPath = $rootPath . 'teaching/';
$vitaPath = $rootPath . 'vita/';
$contactPath = $rootPath . 'contact/';

$scriptPath = $assetsPath . 'js/script.js';

$inCourseSemester = false;
if (strpos($scriptName, 'teaching/courses/') !== false && $depth >= 2) {
    $inCourseSemester = true;
    $teachingCoursesPath = $rootPath . 'teaching/courses/';

    $backToTeachingPath = $rootPath . 'teaching/';
}
?>
