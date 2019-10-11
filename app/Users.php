<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  
  public function getUserById($id) {
    $users = Users::where('id', $id)->first();

    return $users;
  }

  public function append_user_comments($id, $new_comments){
    global $mydb;

    $users = Users::where('id', $id)->first();

    if (!$users)  apidie('No such user (1)', 404);

    $comments = $users->comments;

    $comments .= $new_comments;

    Users::where('id', $id)->update(['comments' => $comments]);
  }
}
