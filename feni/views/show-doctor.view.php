<?php require 'partials/header.php'; ?>
<div class="card mt-5">
  <div class="card-header">
    <h2>All doctors</h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>city</th>
        <th>country</th>
      </tr>
      <?php foreach($doctors as $doctor): ?>
        <tr>
          <td><?= $doctor->id ?></td>
          <td><?= $doctor->name ?></td>
          <td><?= $doctor->email ?></td>
          <td><?= $doctor->city->name ?></td>
          <td><?= $doctor->city->country ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<?php require 'partials/footer.php'; ?>

