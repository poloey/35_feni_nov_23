<?php
use Illuminate\Database\Eloquent\Model;
class City extends Model {
  protected $table = 'cities';
  protected $guarded = [];
  public function doctors () {
    return $this->hasMany(Doctor::class);
  }
}