<?php include 'header.php'; ?>

<div class="card mx-auto" style="max-width:400px;">
  <div class="card-body">
    <h5 class="card-title">Register</h5>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>