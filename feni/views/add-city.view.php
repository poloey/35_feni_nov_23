<?php require 'partials/header.php'; ?>

<div class="card mt-5">
  <div class="card-header">

    <h2>Add a city</h2>
    <?php if (!empty($message)): ?>
      <div class="alert alert-success"><?= $message; ?></div>
    <?php endif; ?>

    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
          <label for="country">Country</label>
          <input type="text" name="country" id="country" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info">
      </div>
      
    </form>
  </div>
</div>


<?php require 'partials/footer.php'; ?>
