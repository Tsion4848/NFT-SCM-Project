<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function upload()
    {
        return view("/upload");
    }
    public function explore()
    {
        return view("/explore");
    }
    public function about()
    {
        return view("/about");
    }
    public function help()
    {
        return view("/help");
    }
    public function contact()
    {
        return view("/contact");
    }
    public function offer()
    {
        return view("/offer");
    }
    public function purchaseSuccess()
    {
        return view("/purchaseSuccess");
    }
}
