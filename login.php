<?php include 'config.php'; include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['username'];
            header("Location: home.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">Invalid password.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">No user found.</div>';
    }
}
?>

<div class="card mx-auto" style="max-width:400px;">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    <form method="post">
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Login</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>