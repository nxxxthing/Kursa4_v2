<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\drivers;
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
//        dd($request->all());

        $name = $request->name;
        $number = $request->number;
        $from = $request->from;
        $where = $request->where;
        $car_type = $request->option;
        $f = 0;
        $dict = ['v1' => "економ", 'v2' => "комфорт", 'v3' => "вантажне"];
        if ($name != null && $number != null && $from != null && $where != null && $car_type != null) {
            $f = 1;

            $clients = clients::all();
            $user_to_add = null;
            foreach ($clients as $client) {
                if ($client->name == $name && $client->number == $number) {
                    $user_to_add = $client;
                    break;
                }
            }
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
                'status' => "waiting",
                'car_type' => $dict[$car_type]);
            DB::table('orders')->insert($data2);
        } else $f = 2;
        return view('web', ['flag' => $f]);
    }
}
