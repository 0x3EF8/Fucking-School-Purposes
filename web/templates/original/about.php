<?php
// Include configuration
require_once 'config/config.php';

// Set page variables
$current_page = 'about';
$page_title = $site_pages['about']['title'];

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<main class="about-page">
  <h2>About <?php echo SITE_NAME; ?></h2>
</main>

<?php include 'includes/footer.php'; ?> 