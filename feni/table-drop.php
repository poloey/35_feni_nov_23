<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Tofael;

Tofael::schema()->dropIfExists('doctors');
Tofael::schema()->dropIfExists('cities');

