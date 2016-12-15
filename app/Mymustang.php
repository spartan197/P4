<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyMustang extends Model
{
    /* Relationship Method */
    public function user() {
      // MyMustang belongs to User
      // Define an inverse one-to-many relationship.
      return $this->belongsTo('App\User');
    }
}
