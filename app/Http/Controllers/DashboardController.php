<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $todaySales = Sale::whereDate('created_at', today())->sum('total_price');
        $yesterdaySales = Sale::whereDate('created_at', today())->sum('total_price');
        $thisMonthSales = Sale::whereMonth('created_at', today())->sum('total_price');
        $lastMonthSales = Sale::whereMonth('created_at', today()->subMonth())->sum('total_price');

        return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }
}
