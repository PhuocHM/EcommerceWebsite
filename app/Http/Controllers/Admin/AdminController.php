<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Orders;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __invoke()
    {

        $labels = [];
        $data = [];
        $order_data = [];
        $orders = Orders::where('created_at', '>', 'DATE_SUB(CURDATE(), INTERVAL 5 MONTH)')->orderBy('created_at', 'ASC')->get();
        foreach ($orders as $key => $order) {
            $datetime = new DateTime($order->created_at);
            $datetime = $datetime->format('m');
            if (isset($order_data[$datetime])) {
                $order_data[$datetime] += $order->total_price;
            } else {
                $order_data[$datetime] = $order->total_price;
            }
        }
        foreach ($order_data as $key => $value) {
            array_push($labels, $key);
            array_push($data, $value);
        }
        $statics = [];
        $pending_percent = Orders::where('status', 0)->count();
        $delivery_percent = Orders::where('status', 1)->count();
        $success_percent = Orders::where('status', 2)->count();
        array_push($statics, $pending_percent, $delivery_percent, $success_percent);

        // 
        $current_orders = Orders::whereMonth('created_at', Carbon::now()->month)->count('id');
        $current_sales = Orders::whereMonth('created_at', Carbon::now()->month)->sum('total_price');
        $params = [
            "labels" => json_encode($labels),
            "data" => json_encode($data),
            "statics" => json_encode($statics),
            "current_sales" => $current_sales,
            "current_orders" => $current_orders
        ];
        // 
        return view('admin.dashboard.home', $params);
    }
}
