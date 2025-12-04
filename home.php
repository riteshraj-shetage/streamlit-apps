<?php include 'config.php'; include 'header.php'; ?>
<?php if (!isset($_SESSION['user'])) { header("Location: login.php"); exit; } ?>

<div class="text-center">
  <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
  <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>

<?php include 'footer.php'; ?>