<?php
// Include configuration
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo SITE_NAME; ?> - Template Selection</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background-color: #0d0d0d;
      color: #eaeaea;
      font-family: system-ui, sans-serif;
      font-size: 16px;
      line-height: 1.6;
      min-height: 100vh;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .logo-section {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1.5rem;
      margin-bottom: 1rem;
    }

    .logo {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #ffcc00;
    }

    .brand-info h1 {
      font-size: 2.5rem;
      font-weight: 800;
      color: #ffcc00;
      margin-bottom: 0.5rem;
      line-height: 1.1;
    }

    .tagline {
      color: #ffcc00;
      font-style: italic;
      font-size: 0.95rem;
      margin-bottom: 0.5rem;
    }

    .owner {
      color: #808080;
      font-size: 0.80rem;
      font-style: italic;
    }

    .selection-card {
      background-color: #121212;
      border: 2px solid #ffcc00;
      border-radius: 12px;
      padding: 3rem;
      box-shadow: 0 0 20px rgba(255, 204, 0, 0.2);
    }

    .selection-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .selection-title {
      font-size: 1.8rem;
      font-weight: 800;
      color: #ffcc00;
      margin-bottom: 0.5rem;
    }

    .selection-subtitle {
      color: #eaeaea;
      font-size: 1rem;
    }

    .templates-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .template-card {
      background-color: #181818;
      border: 1px solid #292929;
      border-radius: 12px;
      padding: 2rem;
      text-decoration: none;
      color: #eaeaea;
      transition: 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .template-card:hover {
      border-color: #ffcc00;
      box-shadow: 0 0 10px rgba(255, 204, 0, 0.2);
      transform: translateY(-4px);
    }

    .template-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .template-icon {
      width: 60px;
      height: 60px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      font-weight: 600;
      border: 2px solid #ffcc00;
    }

    .template-name {
      font-size: 1.3rem;
      font-weight: 600;
      color: #ffcc00;
    }

    .template-desc {
      color: #ccc;
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 1.5rem;
      flex-grow: 1;
    }

    .template-features {
      list-style: none;
      margin-bottom: 1.5rem;
    }

    .template-features li {
      color: #888;
      font-size: 0.85rem;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .template-features li::before {
      content: '✓';
      color: #ffcc00;
      font-weight: bold;
    }

    .template-cta {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: #ffcc00;
      font-weight: 600;
      font-size: 0.9rem;
      transition: gap 0.2s ease;
    }

    .template-card:hover .template-cta {
      gap: 0.75rem;
    }

    /* Template-specific colors */
    .original .template-icon {
      background-color: #ffcc00;
      color: #000;
    }

    .modern .template-icon {
      background-color: #1e40af;
      color: white;
    }

    .minimal .template-icon {
      background-color: #000000;
      color: white;
    }

    .classic .template-icon {
      background-color: #8b4513;
      color: white;
    }

    .footer {
      text-align: center;
      margin-top: 2rem;
      padding-top: 2rem;
      border-top: 2px solid #ffcc00;
    }

    .footer p {
      color: #888;
      font-size: 0.9rem;
      margin-bottom: 0.25rem;
    }

    .footer .owner {
      color: #808080;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .container {
        padding: 1rem;
      }

      .selection-card {
        padding: 2rem 1.5rem;
      }

      .templates-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      .brand-info h1 {
        font-size: 2rem;
      }

      .logo-section {
        flex-direction: column;
        gap: 1rem;
      }
    }

    @media (max-width: 480px) {
      .selection-card {
        padding: 1.5rem 1rem;
      }

      .template-card {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <header class="header">
      <div class="logo-section">
        <img src="assets/img/logo.png" alt="<?php echo SITE_NAME; ?> Logo" class="logo">
        <div class="brand-info">
          <h1><?php echo SITE_NAME; ?></h1>
          <div class="tagline"><?php echo SITE_TAGLINE; ?></div>
          <div class="owner"><?php echo SITE_OWNER; ?></div>
        </div>
      </div>
    </header>

    <main class="selection-card">
      <div class="selection-header">
        <h2 class="selection-title"><?php echo $template_selector['title']; ?></h2>
        <p class="selection-subtitle"><?php echo $template_selector['subtitle']; ?></p>
      </div>

      <div class="templates-grid">
        <?php foreach ($template_selector['templates'] as $key => $template): ?>
          <a href="templates/<?php echo $key; ?>/index.php" class="template-card <?php echo $key; ?>">
            <div class="template-header">
              <div class="template-icon"><?php echo $template['icon']; ?></div>
              <div class="template-name"><?php echo $template['name']; ?></div>
            </div>
            <p class="template-desc"><?php echo $template['description']; ?></p>
            <ul class="template-features">
              <?php foreach ($template['features'] as $feature): ?>
                <li><?php echo $feature; ?></li>
              <?php endforeach; ?>
            </ul>
            <span class="template-cta">
              View Template
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </span>
          </a>
        <?php endforeach; ?>
      </div>
    </main>

    <footer class="footer">
      <p>&copy; <?php echo SITE_YEAR; ?> <?php echo SITE_NAME; ?>. <?php echo $footer['copyright']; ?></p>
      <p class="owner"><?php echo SITE_OWNER; ?></p>
    </footer>
  </div>
</body>
</html>
