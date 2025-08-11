<?php
// Include configuration
require_once '../../config/config.php';

// Set page variables
$current_page = 'home';
$page_title = $site_pages['home']['title'];

// Include header
include 'includes/header.php';
include 'includes/navigation.php';
?>

<main>
  <section id="products" class="products">
    <?php foreach ($products as $product): ?>
      <div class="product">
        <img src="../../assets/img/nukes/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p><?php echo htmlspecialchars($product['description']); ?></p>
        <div class="price"><?php echo htmlspecialchars($product['price']); ?></div>
        <button>Buy Now</button>
      </div>
    <?php endforeach; ?>
  </section>
</main>

<?php include 'includes/footer.php'; ?> 