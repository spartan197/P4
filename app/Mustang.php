<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mustang extends Model
{
  /* Relationship Method */
  public function engine() {
     // Mustang belongs to Engine
     // Define an inverse one-to-many relationship.
     return $this->belongsTo('App\Engine');
 }
}
