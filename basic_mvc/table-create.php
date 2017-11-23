<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->create('cities', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('country');
  $t->timestamps();
});

Manager::schema()->create('doctors', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->string('email')->unique();
  $table->string('phone');
  $table->text('address');
  $table->integer('city_id')->unsigned();
  $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
  $table->timestamps();
});


