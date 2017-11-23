<?php
$cities = City::all();

$message = '';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']) )
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  Doctor::insert([
    'name' => $name,
    'email' => $email,
    'address' => $address,
    'city_id' => $city,
    'phone' => $phone
  ]);
  $message = 'Doctor added successfully';
}


require 'views/add-doctor.view.php';