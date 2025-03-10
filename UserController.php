<?php

namespace  App\Http\Controllers;

//

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Users;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\Validator;
use Closure;

class UserController extends Controller
{
  public function showUsers()
  {
    $users = Users::Paginate(5);
    //return $users;
    //dd($users);

    return view('allusers', compact('users'));
  }

  public function singleUser(string $id)
  {
    $user = Users::where('id', $id)->get();
    return $user;
    dd($users);
    return view('user', compact('user'));
  }

  public function addUser(UserRequest $req)
  {

    $req->validate(
      [
        'username' => [
          'required',
          function (string $attribute, mixed $value, Closure $fail) {

            if (strtoupper($value) !== $value) {
              $fail('The: attribute must be uppercase. ');
            }
          }
        ],

        'useremail' => 'required|email',
        'userage' => 'required|numeric|min:18',
        'usercity' => 'required'
      ],
      [
        "username.required" => "user name is required!",
        "useremail.required" => "user email is required!",
        "userage.required" => "user age is required!",
        "usercity.required" => "user city is required!"
      ]
    );

    // return $req->all();
    //  return $req->only(['username', 'usercity']);
    echo $validate['username'];

    return $req->except(['username', 'usercity']);


    $user = Users::insert(
      [
        'name' => $req->username,
        'email' => $req->useremail,
        'age' => $req->userage,
        'city' => $req->usercity
      ],

    );

    if ($user) {
      return redirect()->route('home');
    } else {
      echo "<h1>Data Not Added.</h1>";
    }
  }
  public function updatePage(string $id)
  {
    $user = Users::find($id);
    return view('allusers', compact('user'));
  }

  public function updateUser(Request $req, $id)
  {
    $user = Users::where('id', $id)->update([
      'name' => $req->username,
      'email' => $req->useremail,
      'age' => $req->userage,
      'city' => $req->usercity
    ]);

    if ($user) {
      return redirect()->route('home');
    } else {
      echo "<h1>Data Not Updated.</h1>";
    }
  }
  public function deleteUser(string $id)
  {
    $user = Users::where('id', $id)->delete();
    if ($user) {
      return redirect()->route('home');
    }
  }

  public function deleteAllUser()
  {
    $user = Users::truncate();
  }
}
