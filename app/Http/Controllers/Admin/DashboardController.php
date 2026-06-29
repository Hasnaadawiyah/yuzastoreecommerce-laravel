<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan statistik admin.
     */
    public function index()
    {
        $totalOrders = Order::count();
        $newOrders = Order::where('status', 'pending')->count();
        $totalRevenue = Order::where('status', 'completed')->sum('total_amount');

        $totalProducts = Product::count();
        $totalUsers = User::where('role', 'user')->count();

        $recentOrders = Order::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalOrders',
            'newOrders',
            'totalRevenue',
            'totalProducts',
            'totalUsers',
            'recentOrders'
        ));
    }
}