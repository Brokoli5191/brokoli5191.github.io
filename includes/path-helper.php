<?php
$scriptPath = $_SERVER['SCRIPT_NAME'];
$pathSegments = explode('/', ltrim($scriptPath, '/'));

$depth = count($pathSegments) - 2;

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
if (strpos($scriptPath, 'teaching/courses/') !== false && $depth >= 3) {
    $inCourseSemester = true;
    $teachingCoursesPath = $rootPath . 'teaching/courses/';
    
    $backToTeachingPath = $rootPath . 'teaching/';
}
?>