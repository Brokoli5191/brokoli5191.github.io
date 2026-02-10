<?php
if (!isset($rootPath)) {
    include(__DIR__ . '/path-helper.php');
}
include($includesPath . 'sidebar.php');
?>
      <div class="main-content">
        <nav class="navbar">
          <ul class="navbar-list">
            <a href="<?php echo $aboutPath; ?>about.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'about') ? 'navbar-active' : 'navbar-link'; ?>">About</button>
            </a>

            <a href="<?php echo $pinboardPath; ?>pinboard.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'pinboard') ? 'navbar-active' : 'navbar-link'; ?>">Pinboard</button>
            </a>

            <a href="<?php echo $researchPath; ?>research-topics.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'research') ? 'navbar-active' : 'navbar-link'; ?>">Research</button>
            </a>

            <a href="<?php echo $teachingPath; ?>teaching.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'teaching') ? 'navbar-active' : 'navbar-link'; ?>">Teaching</button>
            </a>

            <a href="<?php echo $vitaPath; ?>vita.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'vita') ? 'navbar-active' : 'navbar-link'; ?>">Vita</button>
            </a>

            <a href="<?php echo $contactPath; ?>contact.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'contact') ? 'navbar-active' : 'navbar-link'; ?>">Contact</button>
            </a>

            <label class="switch" title="Theme">
              <input id="theme-toggle" type="checkbox" checked />
              <div class="slider round"></div>
            </label>
          </ul>

