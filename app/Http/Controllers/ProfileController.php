<?php

namespace App\Http\Controllers;



class ProfileController extends Controller
{
    
    function index($id){
        $name="Donal Trump";
        $age="75";

        $data=[
            'id'=>$id,
            'name'=>$name,
            'age'=>$age

        ];
        $cookie_name='access_token';
        $cookie_value='123-XYZ';
        $minutes=1;
        $path='/';
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;

        
        $cookie=cookie($cookie_name,$cookie_value,$minutes,$path,$domain, $secure,$httpOnly);
        return response()->json($data, 200)->cookie($cookie);
    }
    
}
