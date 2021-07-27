<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    public function index(Request $request)
    {
    return view('index');
    }

    public function store(Request $request)
    {
        $url = 'http://api-training.test/api/users/create';
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post($url,[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // dd($response->object());
        return view('index');
    }

    public function show($id)
    {
        $url = 'http://api-training.test/api/users/show/'.$id;
        $response = Http::get($url);
        // dd($response->object()->data);
        $user = $response->object()->data;
        return view('show',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $url = 'http://api-training.test/api/users/update/'.$id;
        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])
        ->post($url, 
        [
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('index');
    }
    
    public function delete($id)
    {
        $url = 'http://api-training.test/api/users/'.$id;
        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])
        ->delete($url);

        return redirect()->route('index');
    }
}
