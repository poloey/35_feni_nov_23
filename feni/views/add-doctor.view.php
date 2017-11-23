<?php require 'partials/header.php'; ?>
<div class="card mt-5">
  <div class="card-header">
    <h2>Add a doctor</h2>
    <?php if (!empty($message)): ?>
      <div class="alert alert-success"><?= $message ?></div>
    <?php endif ?>
  </div>
  <div class="card-body">
    <form action="" method="post">
      
      <div class="form-group">
        <label for="city">city</label>
        <select name="city" id="city" class="form-control">
          <?php foreach ($cities as $city): ?>
            <option value="<?= $city->id ?>"><?= $city->name ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" required="">
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" required>
      </div>
      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control" required>
      </div>
      <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" id="address" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <input class="btn btn-warning" type="submit" value="add a doctor">
      </div>
    
    </form>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
