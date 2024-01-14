<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminDashboardController extends Controller
{


    public function index(): Response
    {
        return response()
            ->view("admin.dashboard", [
                "title" => "Beranda Admin"
            ]);
    }
}
