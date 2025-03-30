<?php
if (!isset($rootPath)) {
    include(__DIR__ . '/path-helper.php');
}

$backToTeachingPath = $rootPath . 'teaching/';

include($includesPath . 'header.php');
?>
          <ul class="filter-list-research">
            <a href="<?php echo $backToTeachingPath; ?>teaching.php" class="navbar-item">
              <button class="navbar-link">Teaching Activities</button>
            </a>

            <a href="<?php echo $backToTeachingPath; ?>teaching-courses.php" class="navbar-item">
              <button class="navbar-active">Courses</button>
            </a>

            <a href="<?php echo $backToTeachingPath; ?>teaching-lecturenotes.php" class="navbar-item">
              <button class="navbar-link">Lecture Notes</button>
            </a>

            <a href="<?php echo $backToTeachingPath; ?>teaching-students.php" class="navbar-item">
              <button class="navbar-link">Students</button>
            </a>
          </ul>
          
          <?php if (isset($semestersList) && is_array($semestersList)): ?>
          <!-- Optional: Navigation für verschiedene Semester -->
          <ul class="filter-list-research" style="margin-top: 10px;">
            <?php foreach ($semestersList as $semCode => $semData): ?>
              <a href="<?php echo $backToTeachingPath; ?>courses/<?php echo $semData['path']; ?>" 
                 class="<?php echo (isset($currentSemester) && $currentSemester === $semCode) ? 'research1 active' : 'research1'; ?>">
                <?php echo $semData['title']; ?>
              </a>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </nav>
