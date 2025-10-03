<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /Creme-De-La/customer/auth/login.php");
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>


<div class="category-page">
    <h2>Croissants</h2>
    <div class="items-grid">
        
        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/almond-kiss-croissant.jpeg" alt="Almond Croissant">
            <h3>Almond Croissant</h3>
            <p>₹450</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/cheddar-melt-croissant.jpeg" alt="Cheddar Melt Croissant">
            <h3>Cheddar Melt Croissant</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/chocolate-croissant.jpeg" alt="Chocolate Croissant">
            <h3>Chocolate Croissant</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/flaky-croissant.jpeg" alt="Flaky Croissant">
            <h3>Flaky Croissant</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/garlic-herb-croissant.jpeg" alt="Garlic Herb Croissant">
            <h3>Garlic Herb Croissant</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/hazelnut-croissant.jpg" alt="Hazelnut Croissant">
            <h3>Hazelnut Croissant</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
