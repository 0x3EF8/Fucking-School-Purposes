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
  <link rel="stylesheet" href="../../assets/css/original.css" />
</head>
<body>
  <header>
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

  <nav class="nav">
    <ul>
      <?php foreach ($navigation as $key => $nav_item): ?>
        <li><a href="<?php echo $nav_item['url']; ?>" class="<?php echo ($current_page == $key) ? 'active' : ''; ?>">
          <?php echo $nav_item['icon']; ?> <?php echo $nav_item['text']; ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
  </nav> 