<?php
if (!isset($page_title)) {
    $page_title = SITE_NAME . ' - Premium Nuclear Solutions';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="../../assets/css/modern.css" />
</head>
<body>
  <div class="layout">
    <!-- Left Sidebar -->
    <aside class="sidebar">
      <nav class="sidebar-nav">
        <ul>
          <?php foreach ($navigation as $key => $nav_item): ?>
            <li><a href="<?php echo $nav_item['url']; ?>" class="<?php echo ($current_page == $key) ? 'active' : ''; ?>">
              <span class="nav-icon"><?php echo $nav_item['icon']; ?></span>
              <span><?php echo $nav_item['text']; ?></span>
            </a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div class="sidebar-info">
        <h3><?php echo $sidebar['title']; ?></h3>
        <p><?php echo $sidebar['description']; ?></p>
        <div class="contact-info">
          <p><strong><?php echo $sidebar['contact_label']; ?></strong> <?php echo SITE_EMAIL; ?></p>
          <p><strong><?php echo $sidebar['year_label']; ?></strong> <?php echo SITE_YEAR; ?></p>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header class="main-header">
        <div class="logo">
          <img src="../../assets/img/logo.png" alt="<?php echo SITE_NAME; ?> Logo">
          <div>
            <h1><?php echo SITE_NAME; ?></h1>
            <div class="tagline">
              <p class="text"><?php echo SITE_TAGLINE; ?></p>
              <p class="owner"><?php echo SITE_OWNER; ?></p>
            </div>
          </div>
        </div>
      </header>
