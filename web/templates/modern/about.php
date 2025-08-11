<?php
// Include configuration
require_once '../../config/config.php';

// Set page variables
$current_page = 'about';
$page_title = $site_pages['about']['title'];

// Include header
include 'includes/header.php';
?>

<div class="content-wrapper">
  <!-- Main Content Area -->
  <div class="content-main">
    <div class="about-page">
      <h2><?php echo $about['title']; ?></h2>
      <p><?php echo $about['description']; ?></p>
    </div>
  </div>

  <!-- Right Sidebar - Ads -->
  <aside class="ads-sidebar">
    <div class="ad-section">
      <h3><?php echo $about['why_choose_us']['title']; ?></h3>
      <div class="ad-card">
        <div class="ad-badge"><?php echo $about['why_choose_us']['badge']; ?></div>
        <h4><?php echo $about['why_choose_us']['title_text']; ?></h4>
        <p><?php echo $about['why_choose_us']['description']; ?></p>
      </div>
    </div>

    <div class="ad-section">
      <h3><?php echo $about['mission']['title']; ?></h3>
      <div class="review-card">
        <p><?php echo $about['mission']['text']; ?></p>
        <small>- <?php echo $about['mission']['author']; ?></small>
      </div>
    </div>
  </aside>
</div>

<?php include 'includes/footer.php'; ?>
