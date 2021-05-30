<?php

namespace App\Http\Controllers;

use App\Models\cars;
use App\Models\clients;
use App\Models\drivers;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_user(Request $request)
    {
        $name = $request->name;
        $number = $request->number;
        $from = $request->from;
        $where = $request->where;
        $car_type = $request->option;
        $f = 0;
        $dict = ['v1' => "економ", 'v2' => "комфорт", 'v3' => "вантажне"];
        if ($number[0] == '0') {
            $number = "38" . $number;
        }
        if (!preg_match("/^[0-9]{12}$/", $number)) $f = 2;
        elseif ($name != null && $number != null && $from != null && $where != null && $car_type != null) {
            $f = 1;
            $user_to_add = DB::table('clients')->where(['name' => $name, 'phone_number' => $number])->first();
            $free_driver = DB::table('drivers')->where(['name' => "empty_value"])->first();
            if ($user_to_add == null) {
                $data = array('name' => $name, 'phone_number' => $number);
                DB::table('clients')->insert($data);
                $user_to_add = DB::table('clients')->where(['name' => $name, 'phone_number' => $number])->first();
            }
            $data2 = array('created_time' => now(),
                'departure' => $from, 'destination' => $where,
                'client_id' => $user_to_add->id,
                'driver_id' => $free_driver->id,
                'status' => "Очікує",
                'car_type' => $dict[$car_type]);
            DB::table('orders')->insert($data2);
        } else $f = 2;
        return view('web', ['flag' => $f]);
    }

    public function admin_clients() {
        $clients = clients::all();
        return view('adminClients', ['clients' => $clients]);
    }

    public function admin_orders() {
        $orders = orders::all();
        return view('adminOrders', ['orders' => $orders]);
    }

    public function admin_drivers() {
//        $drivers = drivers::all();
        $drivers = DB::table('drivers')->where('id', '<>', 1)->get();
        $cars = [];
        foreach ($drivers as $driver) {
            array_push($cars, DB::table('cars')->where(['id' => $driver->car_id])->first());
        }
        return view('adminDrivers', ['drivers' => $drivers, 'cars' => $cars]);
    }
}
