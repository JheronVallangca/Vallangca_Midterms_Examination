<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function gadgets(){
        $gadget = [
        'phone' => 'Infinix Note 12g',
        'console' => 'Play Station 5',
        'laptops' => 'Asus Zenbook 14 OLED',
        'tablet' => 'Cherry Mobile Superion Tab Pro',
        'apple' => 'Ipad' ];
        
        return view('gadget', ['data' => $gadget]);
}
}