<?php require 'partials/header.php'; ?>
<div class="card mt-5">
  <div class="card-header">
    <h2>All cities</h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
      </tr>
      <?php foreach($cities as $city): ?>
        <tr>
          <td><?= $city->id ?></td>
          <td><?= $city->name ?></td>
          <td><?= $city->country ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
