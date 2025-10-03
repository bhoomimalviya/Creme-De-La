<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /Creme-De-La/customer/auth/login.php");
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="menu-container">
    <h1>Menu Categories</h1>
    <div class="category-grid">
        <a href="cheesecake.php" class="category-card">
            <img src="/Creme-De-La/assets/images/menu-categories/cheesecake-category.jpeg" alt="Cheesecake">
            <h3>Cheesecake</h3>
        </a>

        <a href="croissant.php" class="category-card">
            <img src="/Creme-De-La/assets/images/menu-categories/croissants-category.jpeg" alt="Croissant">
            <h3>Croissant</h3>
        </a>

        <a href="donut.php" class="category-card">
            <img src="/Creme-De-La/assets/images/menu-categories/donuts-category.jpeg" alt="Donut">
            <h3>Donut</h3>
        </a>

        <a href="colddrinks.php" class="category-card">
            <img src="/Creme-De-La/assets/images/menu-categories/drinks-category.jpeg" alt="Cold Drinks">
            <h3>Cold Drinks</h3>
        </a>
        <a href="snacks.php" class="category-card">
            <img src="/Creme-De-La/assets/images/menu-categories/snacks-category.jpeg" alt="Snacks">
            <h3>Snacks</h3>
        </a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/footer.php"; ?>
