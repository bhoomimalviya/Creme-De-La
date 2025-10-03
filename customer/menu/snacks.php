<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /Creme-De-La/customer/auth/login.php");
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="category-page">
    <h2>Snacks</h2>
    <div class="items-grid">
        
        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/burger-snacks.jpeg" alt="Burger">
            <h3>Burger</h3>
            <p>₹450</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/cheeseBalls-snacks.jpeg" alt="Cheese Balls">
            <h3>Cheese Balls</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/fries-snacks.jpeg" alt="Peri Peri Fries">
            <h3>Peri Peri Fries</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/grilledCheeseSandwich-snacks.jpeg" alt="Grilled Cheese Sandwich">
            <h3>Grilled Cheese Sandwich</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/loadedNachos-snacks.jpeg" alt="Loaded Nachos">
            <h3>Loaded Nachos</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/paneer-roll-snacks.jpeg" alt="Paneer Roll">
            <h3>Paneer Roll</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
