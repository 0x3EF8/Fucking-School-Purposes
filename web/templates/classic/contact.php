<?php
// Include configuration
require_once '../../config/config.php';

// Set page variables
$current_page = 'contact';
$page_title = $site_pages['contact']['title'];

// Include header
include 'includes/header.php';
?>

<div class="content-wrapper">
  <!-- Main Content Area -->
  <div class="content-main">
    <div class="contact-page">
      <h2><?php echo $contact['title']; ?></h2>
      <p><?php echo $contact['description']; ?></p>
    </div>
  </div>

  <!-- Right Sidebar - Ads -->
  <aside class="ads-sidebar">
    <div class="ad-section">
      <h3><?php echo $contact['contact_info']['title']; ?></h3>
      <div class="ad-card">
        <div class="ad-badge"><?php echo $contact['contact_info']['badge']; ?></div>
        <h4><?php echo $contact['contact_info']['title_text']; ?></h4>
        <p><?php echo $contact['contact_info']['description']; ?></p>
      </div>
    </div>

    <div class="ad-section">
      <h3><?php echo $contact['quick_contact']['title']; ?></h3>
      <div class="newsletter-card">
        <p><?php echo $contact['quick_contact']['description']; ?></p>
        <input type="email" placeholder="<?php echo $contact['quick_contact']['placeholder']; ?>" class="newsletter-input">
        <button class="newsletter-btn"><?php echo $contact['quick_contact']['button']; ?></button>
      </div>
    </div>
  </aside>
</div>

<?php include 'includes/footer.php'; ?>
