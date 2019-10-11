<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  
  public function getUserById($id) {
    $users = Users::where('id', $id)->first();

    return $users;
  }

}
