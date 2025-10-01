<?php 
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<body>
  <header>
    <nav>
      <div class="nav-container">
        <div class="logo">CremeDeLa</div>
        <ul class="nav-links">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/Creme-De-La/customer/menu/menu.php">Menu</a></li>
          <li><a href="/Creme-De-La/about.php">About Us</a></li>

          <?php if(isset($_SESSION["user_id"])): ?>
            <li><a href="/Creme-De-La/cart.php">Cart</a></li>
            <li><a href="/Creme-De-La/orders.php">My Orders</a></li>
            <li><a href="/Creme-De-La/customer/auth/logout.php">Logout</a></li>
          <?php else: ?>
            <li><a href="/Creme-De-La/customer/auth/login.php">Login</a></li>
            <li><a href="/Creme-De-La/customer/auth/signup.php">Signup</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </header>
</body>