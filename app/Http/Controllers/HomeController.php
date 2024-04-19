<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $first_name = "List Karakter";
        $arr = [
            "Alok",
            "Kelly",
            "Hayato"
        ];

        return view("home", [
            "name" => $first_name,
            "karakter" => $arr
        ]);
    }
    public function learning() {
        return view("index");
    }
    public function welcome() {
        return view("welcome");
    }
}
