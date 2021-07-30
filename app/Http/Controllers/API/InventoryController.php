<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
    return view('inventory.index');
    }

    public function store(Request $request)
    {
        $url = 'http://api-training.test/api/inventory/create';
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzVlNDg0MjhlMmRmNTYwNjVjNjBjODNmOGM3Y2JhN2I2MGJlODExYWMwZmJkNzQyNjZiNDI0Zjc4M2IyZjgzODVhNWIyMjE4NzM5Zjg4MDciLCJpYXQiOjE2Mjc0NTg3NjUuMjE5MzQzLCJuYmYiOjE2Mjc0NTg3NjUuMjE5MzQ3LCJleHAiOjE2NTg5OTQ3NjUuMjE0ODQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.SuaFzz0IwWRi3_KU_F7UUUVw2lre-kKdE69TDHrRhRK6aCoKgqXMn4uOsbiTuTw7y_eVNlbhTOQ741uEUxsoONhQlWRFf8NLKLjgsVuHbOjyvEJPBXYrPYswY958rZE76f_-VpSs9Vm5fbpPSotjyaoL4dWB_LWgt_xWbr_p4gnBYL1Jw1CJf0iCBQNiiPxBC2zwLHJ2j6jX4-eaYzqCUIRGlW8B1soDPP2s9O4kHrXjEEz-5otbKjrpQu5Sts_rUKULH9dVzEljU0RpiyzFZzZYYJOcVuRzlh4gPxcJ1-aed6dnckoEakP2VxkBPwaRER5DOZZ6qaBixlX3wYMirdgOA2zkJHRSvYklVvgHbFlJohUyd6mEjtjJKlvf5x3BfenB5idM6Z1kGwMB4KlVdhT0_93sHmG_jTMp2gvDkfM9ZvvgbMWGvmxG3KvMYjU79y0iqeu7v6Ag3GQNTxAesDSPUiKmkZ0mf_KjIO4KXbeC7wAff4n1_ZzA2Y9b-KliMY4GgGXyXIGStocQPNumRuE_JNAu5rHiSEDs6PElw6JuQcgH_yissmHgo0-lixz6HcYjzFwPoZLaZ5ScsjZSVefsrTjr--zCx3fihoLy2O0smQ-DaXjPYdr2OpQdMR-Je1Ndk8ei2bVHBZwFM7dHHBeY-hO8qiLq452MgiEu4Dk',
        ])->post($url,[
            'name' => $request->name,
            'serialnumber' => $request->serialnumber,
            'type' => $request->type
        ]);

        return view('inventory.index');
    }

    public function show($id)
    {
        $url = 'http://api-training.test/api/inventory/show/'.$id;

        $response = Http::get($url);

        $user = $response->object()->data;
        return view('inventory.show',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $url = 'http://api-training.test/api/inventory/update/'.$id;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzVlNDg0MjhlMmRmNTYwNjVjNjBjODNmOGM3Y2JhN2I2MGJlODExYWMwZmJkNzQyNjZiNDI0Zjc4M2IyZjgzODVhNWIyMjE4NzM5Zjg4MDciLCJpYXQiOjE2Mjc0NTg3NjUuMjE5MzQzLCJuYmYiOjE2Mjc0NTg3NjUuMjE5MzQ3LCJleHAiOjE2NTg5OTQ3NjUuMjE0ODQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.SuaFzz0IwWRi3_KU_F7UUUVw2lre-kKdE69TDHrRhRK6aCoKgqXMn4uOsbiTuTw7y_eVNlbhTOQ741uEUxsoONhQlWRFf8NLKLjgsVuHbOjyvEJPBXYrPYswY958rZE76f_-VpSs9Vm5fbpPSotjyaoL4dWB_LWgt_xWbr_p4gnBYL1Jw1CJf0iCBQNiiPxBC2zwLHJ2j6jX4-eaYzqCUIRGlW8B1soDPP2s9O4kHrXjEEz-5otbKjrpQu5Sts_rUKULH9dVzEljU0RpiyzFZzZYYJOcVuRzlh4gPxcJ1-aed6dnckoEakP2VxkBPwaRER5DOZZ6qaBixlX3wYMirdgOA2zkJHRSvYklVvgHbFlJohUyd6mEjtjJKlvf5x3BfenB5idM6Z1kGwMB4KlVdhT0_93sHmG_jTMp2gvDkfM9ZvvgbMWGvmxG3KvMYjU79y0iqeu7v6Ag3GQNTxAesDSPUiKmkZ0mf_KjIO4KXbeC7wAff4n1_ZzA2Y9b-KliMY4GgGXyXIGStocQPNumRuE_JNAu5rHiSEDs6PElw6JuQcgH_yissmHgo0-lixz6HcYjzFwPoZLaZ5ScsjZSVefsrTjr--zCx3fihoLy2O0smQ-DaXjPYdr2OpQdMR-Je1Ndk8ei2bVHBZwFM7dHHBeY-hO8qiLq452MgiEu4Dk',

        ])
        ->post($url, 
        [
            'name' => $request->name,
            'serialnumber' => $request->serialnumber,
            'type' => $request->type
        ]);

        return redirect()->route('inventory.index');
    }
    
    public function delete($id)
    {
        $url = 'http://api-training.test/api/inventory/'.$id;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYzVlNDg0MjhlMmRmNTYwNjVjNjBjODNmOGM3Y2JhN2I2MGJlODExYWMwZmJkNzQyNjZiNDI0Zjc4M2IyZjgzODVhNWIyMjE4NzM5Zjg4MDciLCJpYXQiOjE2Mjc0NTg3NjUuMjE5MzQzLCJuYmYiOjE2Mjc0NTg3NjUuMjE5MzQ3LCJleHAiOjE2NTg5OTQ3NjUuMjE0ODQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.SuaFzz0IwWRi3_KU_F7UUUVw2lre-kKdE69TDHrRhRK6aCoKgqXMn4uOsbiTuTw7y_eVNlbhTOQ741uEUxsoONhQlWRFf8NLKLjgsVuHbOjyvEJPBXYrPYswY958rZE76f_-VpSs9Vm5fbpPSotjyaoL4dWB_LWgt_xWbr_p4gnBYL1Jw1CJf0iCBQNiiPxBC2zwLHJ2j6jX4-eaYzqCUIRGlW8B1soDPP2s9O4kHrXjEEz-5otbKjrpQu5Sts_rUKULH9dVzEljU0RpiyzFZzZYYJOcVuRzlh4gPxcJ1-aed6dnckoEakP2VxkBPwaRER5DOZZ6qaBixlX3wYMirdgOA2zkJHRSvYklVvgHbFlJohUyd6mEjtjJKlvf5x3BfenB5idM6Z1kGwMB4KlVdhT0_93sHmG_jTMp2gvDkfM9ZvvgbMWGvmxG3KvMYjU79y0iqeu7v6Ag3GQNTxAesDSPUiKmkZ0mf_KjIO4KXbeC7wAff4n1_ZzA2Y9b-KliMY4GgGXyXIGStocQPNumRuE_JNAu5rHiSEDs6PElw6JuQcgH_yissmHgo0-lixz6HcYjzFwPoZLaZ5ScsjZSVefsrTjr--zCx3fihoLy2O0smQ-DaXjPYdr2OpQdMR-Je1Ndk8ei2bVHBZwFM7dHHBeY-hO8qiLq452MgiEu4Dk',
        ])
        ->delete($url);

        return redirect()->route('inventory.index');
    }
}
