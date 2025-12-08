<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
class HomeController extends Controller{
    public function index(){
        return redirect()->route("events.index");
    }
}
