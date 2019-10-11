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

    /*$result = mysqli_query($mydb, 'SELECT comments FROM users WHERE id = "'.mysqli_real_escape_string($mydb, $id).'"');
    if(mysqli_error($mydb))
        apidie('DB Error: '.mysqli_error($mydb), 500);
    if(mysqli_num_rows($result) <= 0)
        apidie('No such user (1)', 404);

    $row = mysqli_fetch_object($result);
    $row->comments .= "\n".$comments;

    mysqli_query($mydb, 'UPDATE users SET comments = "'.mysqli_real_escape_string($mydb, $row->comments).'"');
    return mysqli_error($mydb);*/
  }

}
