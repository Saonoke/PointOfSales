<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CashierDashboardController extends Controller
{

    public function index(): Response
    {
        return response()
            ->view("cashier.dashboard", [
                "title" => "Beranda Admin"
            ]);
    }
}
