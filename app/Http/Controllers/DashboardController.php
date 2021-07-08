<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Charts\OrderChart;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customersCount = Customer::count();
        $categoriesCount = Category::count();
        $productsCount = Product::count();

        $ordersCount = Order::count();
        $pendingCount = Order::where('status', Order::PENDING)->count();
        $inProgressCount = Order::where('status', Order::IN_PROGRESS)->count();
        $canceledCount = Order::where('status', Order::CANCELED)->count();
        $rejectedCount = Order::where('status', Order::REJECTED)->count();
        $deliveredCount = Order::where('status', Order::DELIVERED)->count();
        $earnings = Order::where('status', Order::DELIVERED)->sum('total');

        $orders = Order::latest()->where('status', Order::PENDING)->paginate();

        $data = collect([]); // Could also be an array

        for ($days_backwards = 6; $days_backwards >= 0; $days_backwards--) {
            // Could also be an array_push if using an array rather than a collection.
            $data->push(Order::whereDate('created_at', today()->subDays($days_backwards))->count());
        }

        $ordersChart = new OrderChart;
        $ordersChart->labels([__('orders.7daysago'), __('orders.6daysago'), __('orders.5daysago'), __('orders.4daysago'), __('orders.3daysago'), __('orders.2daysago'), __('orders.yesterday'), __('orders.today')]);
        $ordersChart->dataset(__('orders.number'), 'bar', $data)
        ->color("rgb(255, 99, 132)");
        return view('dashboard.home', get_defined_vars());

    }
}
