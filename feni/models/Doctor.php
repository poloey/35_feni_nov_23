<?php
use Illuminate\Database\Eloquent\Model;
class Doctor extends Model {
  protected $table = 'doctors';
  protected $guarded = [];
  public function city () {
    return $this->belongsTo(City::class);
  }
} 