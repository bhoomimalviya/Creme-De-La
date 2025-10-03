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
            <img src="/Creme-De-La/assets/images/menu-items/choco-bliss-donut.jpeg" alt="Choco Bliss Donut">
            <h3>Choco Bliss Donut</h3>
            <p>₹450</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/lotus-donut.jpeg" alt="Lotus Donut">
            <h3>Lotus Donut</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/oreo-donut.jpeg" alt="Orea Donut">
            <h3>Orea Donut</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/pistachio-donut.jpeg" alt="Pistachio Donut">
            <h3>Pistachio Donut</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/rainbow-donut.jpeg" alt="Rainbow Donut">
            <h3>Rainbow Donut</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/Strawberry-donut.jpeg" alt="Strawberry Donut">
            <h3>Strawberry Donut</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
