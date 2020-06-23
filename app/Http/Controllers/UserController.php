<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
    //    $user=new User();
    //    $user->name="Poxos3";
    //    $user->email="poxos3@mail.ru";
    //    $user->password=bcrypt("111111");
    //    $user->save();
    $data=[
        'name'=>"gevorg", 
        'email'=>'gev@mail.ru',
        'password'=>444,
        'testfield'=>121212
    ];
    
    User::create($data);

    // User::where('id', '2')->update(['name'=>'Peto']);
    // User::where('id', '2')->update(['password'=>bcrypt("111111")]);
    
    $user=User::all();
    // User::where('id', '1')->delete();
    // var_dump($user);
    //    return "I'm in User Controller!";
    // DB::insert('insert into users (name,email,password) values (?, ?, ?)', [
    //     'sahak', 'sahak@gmail.com', '123456'
    // ]);
    // $users=DB::select('select name, email,password from users');
    
    return  $user;
   }
}
