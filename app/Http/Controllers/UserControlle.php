<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
   public function index (){
       return view ('หน้า User');
   }
   public function creat(){
       return view ('สร้าง User');
   }
   public function showname(){
       return view('name $name');
   }
   public function ShownameAndage(){
       return view('Age $age');
   }
}
