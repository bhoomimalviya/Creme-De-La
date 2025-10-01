<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/db.php";

$message = ""; // Feedback message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email) {
        $message = "Please enter a valid email address.";
    } else {
        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                header("Location: /Creme-De-La/index.php");
                exit;
            } else {
                $message = "Incorrect password!";
            }
        } else {
            $message = "No account found with this email!";
        }
        $stmt->close();
    }
}

$conn->close();
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="auth-container">
    <h2>Login to Your Account</h2>

    <?php if(!empty($message)): ?>
        <div class="auth-message"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required>

        <button type="submit">Login</button>
    </form>

    <p class="auth-footer">Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/footer.php"; ?>
