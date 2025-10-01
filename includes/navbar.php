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
          <li><a href="/CremeDeLa/customer/menu/menu.php">Menu</a></li>
          <li><a href="/CremeDeLa/about.php">About Us</a></li>

          <?php if(isset($_SESSION["user_id"])): ?>
            <li><a href="/CremeDeLa/cart.php">Cart</a></li>
            <li><a href="/CremeDeLa/orders.php">My Orders</a></li>
            <li><a href="/CremeDeLa/customer/authorization/logout.php">Logout</a></li>
          <?php else: ?>
            <li><a href="/CremeDeLa/customer/authorization/login.php">Login</a></li>
            <li><a href="/CremeDeLa/customer/authorization/signup.php">Signup</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </header>
</body>