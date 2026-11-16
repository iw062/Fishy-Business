
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$navLinks = [
    "Home" => "MainPage.php",
    "Store" => "FishProducts.php",
    "About Us" => "AboutUs.php",
    "Contact" => "contact.php"
];

$currentPage = basename($_SERVER['SCRIPT_NAME']);
$loggedIn = isset($_SESSION['user_id']);

$cartCount = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $quantity) {
        if (is_numeric($quantity) && $quantity > 0) {
            $cartCount += (int)$quantity;
        }
    }
}
?>

<header class="site-header">
    <div class="header-content">
        <div class="branding">
            <div class="fish-icons">𓆟 𓆟 𓆟 𓆟 𓆟</div>
            <div class="fish-icons2">𓆟 𓆟 𓆟 𓆟 𓆟</div>
            <h1>Fishy Business</h1>
        </div>

        <div class="header-actions">
            <?php if ($loggedIn): ?>
                <a href="account.php">My Account</a>
            <?php else: ?>
                <a href="login.php">Log In</a>
            <?php endif; ?>

            <a href="cart.php">
                🛒 Cart (<?php echo $cartCount; ?>)
            </a>
        </div>
    </div>
</header>

<nav class="navbar">
    <div class="nav-links">
        <?php foreach ($navLinks as $label => $url): ?>
            <a href="<?php echo htmlspecialchars($url); ?>"
               class="<?php echo ($currentPage === $url) ? 'active' : ''; ?>">
                <?php echo htmlspecialchars($label); ?>
            </a>
        <?php endforeach; ?>
    </div>

    <?php if (!in_array($currentPage, ['cart.php', 'checkout.php'])): ?>
        <form class="search-form" action="FishProducts.php" method="GET">
            <input type="text"
                   name="search"
                   placeholder="Search for fish, products, or supplies..."
                   value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
            <button type="submit">Search</button>
        </form>
    <?php endif; ?>
</nav>
