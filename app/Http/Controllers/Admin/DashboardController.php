<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Entrepreneur;
use App\Models\DigitalSkill;
use App\Models\WorkspaceBooking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Sales Performance
        $totalRevenue = Order::where('payment_status', 'paid')->sum('total_amount');
        $monthlyRevenue = Order::where('payment_status', 'paid')
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('total_amount');
        
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        
        // Inventory Levels
        $totalProducts = Product::count();
        $lowStockProducts = Product::where('manage_stock', true)
            ->where('stock_quantity', '<=', 10)
            ->count();
        $outOfStockProducts = Product::where('manage_stock', true)
            ->where('stock_quantity', 0)
            ->count();
        
        // Other Metrics
        $totalEntrepreneurs = Entrepreneur::count();
        $pendingEntrepreneurs = Entrepreneur::where('status', 'pending')->count();
        $totalDigitalSkills = DigitalSkill::count();
        $totalWorkspaceBookings = WorkspaceBooking::count();
        $totalUsers = User::count();
        
        // Recent Activities
        $recentOrders = Order::with('user')->latest()->take(5)->get();
        $recentEntrepreneurs = Entrepreneur::latest()->take(5)->get();
        $recentBookings = WorkspaceBooking::latest()->take(5)->get();
        
        // Charts Data
        $salesChart = $this->getSalesChartData();
        $ordersChart = $this->getOrdersChartData();
        $topProducts = $this->getTopProducts();
        
        return view('admin.dashboard', compact(
            'totalRevenue',
            'monthlyRevenue',
            'totalOrders',
            'pendingOrders',
            'totalProducts',
            'lowStockProducts',
            'outOfStockProducts',
            'totalEntrepreneurs',
            'pendingEntrepreneurs',
            'totalDigitalSkills',
            'totalWorkspaceBookings',
            'totalUsers',
            'recentOrders',
            'recentEntrepreneurs',
            'recentBookings',
            'salesChart',
            'ordersChart',
            'topProducts'
        ));
    }
    
    private function getSalesChartData()
    {
        $data = Order::where('payment_status', 'paid')
            ->selectRaw('DATE(created_at) as date, SUM(total_amount) as total')
            ->where('created_at', '>=', Carbon::now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            
        return [
            'labels' => $data->pluck('date')->map(fn($date) => Carbon::parse($date)->format('M d')),
            'data' => $data->pluck('total')
        ];
    }
    
    private function getOrdersChartData()
    {
        $data = Order::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', Carbon::now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            
        return [
            'labels' => $data->pluck('date')->map(fn($date) => Carbon::parse($date)->format('M d')),
            'data' => $data->pluck('count')
        ];
    }
    
    private function getTopProducts()
    {
        return Product::select('products.*', DB::raw('SUM(order_items.quantity) as total_sold'))
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->where('orders.payment_status', 'paid')
            ->groupBy('products.id')
            ->orderByDesc('total_sold')
            ->take(5)
            ->get();
    }
}