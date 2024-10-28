<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Contact;


class TemplateController extends Controller
{
    public function index()
    {
        return View('frontend.home');
    }
    public function about()
    {
        return View('frontend.about');
    }
    public function service()
    {
        return View('frontend.service');
    }
}
