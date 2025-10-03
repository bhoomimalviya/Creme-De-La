<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /Creme-De-La/customer/auth/login.php");
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="category-page">
    <h2>Cheesecakes</h2>
    <div class="items-grid">
        
        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/blueberry-cheesecake.jpeg" alt="Blueberry Cheesecake">
            <h3>Blueberry Cheesecake</h3>
            <p>₹450</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/lime-cheesecake.jpeg" alt="Lime Cheesecake">
            <h3>Lime Cheesecake</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/oreo-cheesecake.jpeg" alt="Oreo Cheesecake">
            <h3>Oreo Cheesecake</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/raspberry-cheesecake.jpeg" alt="Raspberry Cheesecake">
            <h3>Raspberry Cheesecake</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/strawberry-cheesecake.jpeg" alt="Strawberry Cheesecake">
            <h3>Strawberry Cheesecake</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>

        <div class="item-card">
            <img src="/Creme-De-La/assets/images/menu-items/truffle-cheesecake.jpeg" alt="Truffle Cheesecake">
            <h3>Truffle Cheesecake</h3>
            <p>₹500</p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
