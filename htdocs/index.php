<?php
include 'libs\load.php';
?>

<!doctype html>
<html lang="en">

<?php load('_head') ?>

<body>

  <header>
    <?php load('_header'); ?>
  </header>

  <main>
    <?php load('_sec1'); ?>
    <?php load('__photoup'); ?>
  </main>

  <footer class="text-muted py-5">
    <?php load('_footer'); ?>
  </footer>

  <script src="assets\dist\js\bootstrap.bundle.min.js"></script>

</body>

</html>