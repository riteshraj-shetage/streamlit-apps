<?php include 'config.php'; include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($conn->query("INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')")) {
        echo '<div class="alert alert-success">Registered successfully. <a href="login.php">Login</a></div>';
    } else {
        echo '<div class="alert alert-danger">Error: '.$conn->error.'</div>';
    }
}
?>

<div class="card mx-auto" style="max-width:400px;">
  <div class="card-body">
    <h5 class="card-title">Register</h5>
    <form method="post">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>