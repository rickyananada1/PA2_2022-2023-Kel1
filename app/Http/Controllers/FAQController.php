<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('pages.web.faq.main');
    }
}
