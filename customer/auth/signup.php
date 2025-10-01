<?php
session_start();

// Use absolute path for db.php
require $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/db.php";

$message = ""; // Feedback message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!$email) {
        $message = "Please enter a valid email address.";
    } elseif ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $message = "Email is already registered.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt_insert = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt_insert->bind_param("sss", $name, $email, $hashed_password);
            if ($stmt_insert->execute()) {
                $_SESSION['user_id'] = $stmt_insert->insert_id;
                $_SESSION['user_name'] = $name;
                header("Location: /Creme-De-La/index.php");
                exit;
            } else {
                $message = "Signup failed: " . $conn->error;
            }
            $stmt_insert->close();
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!-- Use absolute paths for boilerplate/footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/boilerplate.php"; ?>

<div class="auth-container">
    <h2>Create an Account</h2>
    <?php if(!empty($message)): ?>
        <div class="auth-message"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Your Name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>

        <button type="submit">Sign Up</button>
    </form>

    <p class="auth-footer">Already have an account? <a href="login.php">Login</a></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/Creme-De-La/includes/footer.php"; ?>
