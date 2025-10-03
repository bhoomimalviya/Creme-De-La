<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /Creme-De-La/customer/auth/login.php");
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="category-page">
    <h2>Donuts</h2>
    <div class="items-grid">
        
        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/blueberry-lemon-drink.jpeg" alt="Blueberry Lemon Drink">
            <h3>Blueberry Lemon Drink</h3>
            <p>₹450</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/iced-coffee-drink.jpeg" alt="Iced Coffee">
            <h3>Iced Coffee</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/matcha-drink.jpeg" alt="Matcha Drink">
            <h3>Matcha Drink</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/mocha-drink.jpeg" alt="Mocha Drink">
            <h3>Mocha Drink</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/vanilla-chai-latte[special].jpeg" alt="Vanilla Chai Latte [Special]">
            <h3>Vanilla Chai Latte [Special]</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/violet-drink.jpeg" alt="Violet Drink">
            <h3>Violet Drink</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
