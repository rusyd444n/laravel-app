<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "Nama"=>"abdul ghani",
            "Alamat"=>"Bandung",
            "Agama"=>"islam",
            "Jk"=>"l",
            "Hobi"=> [
                "mancing","ngurek"
            ],
        ];
        return view('latihan.perkenalan',compact('data'));
    }
    public function animals()
    {
        $animal =  [
             "Lion","Crocodile","Rabbit","eagle",
        ];
        return view('latihan.animal',['Hewan' => $animal]);
    }
}
