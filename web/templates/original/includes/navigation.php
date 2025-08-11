<?php
if (!isset($current_page)) {
    $current_page = 'home';
}
?>
<nav class="nav">
  <ul>
    <li><a href="index.php#products" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Premium Products</a></li>
    <li><a href="about.php" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">About Us</a></li>
    <li><a href="contact.php" class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contacts</a></li>
  </ul>
</nav> 