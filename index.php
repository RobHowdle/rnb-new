<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body>
    <?php include 'includes/nav.php'; ?>
    <?php 
    $current_url = $_SERVER['REQUEST_URI'];

    switch($current_url) {
      case '/':
        include('/includes/home_content.php');
        break;

      case '/archive.php':
        include('/includes/archive_content.php');
        break;

      case '/audio.php':
        include('/includes/audio_content.php');
        break;
      default:
        include('/includes/home_content.php');
        break;
    }
    ?>
    <?php include 'footer.php'; ?>
</body>

</html>