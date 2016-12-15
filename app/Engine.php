<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
      /* Relationship Method */
      public function mustangs() {
         // Engine has many Mustangs
         // Defines a one-to-many relationship.
         return $this->hasMany('App\Mustang');
      }
}
