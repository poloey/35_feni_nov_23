<?php
$message = '';

if (isset($_POST['name']) && isset($_POST['country'])) {
  $name = $_POST['name'];
  $country = $_POST['country'];
  City::insert([
    'name' => $name,
    'country' => $country
  ]);
  $message = 'City added successfully';
}




require 'views/add-city.view.php';