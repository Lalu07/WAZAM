<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungZakatController extends Controller
{
    public function HitungZakat(Request $request)
    {
        $gaji = $request->input('box1');
        $bonus = $request->input('box2');
        $result = ($gaji + $bonus) * 0.025;
        
        // echo $result;
        // return redirect('zakatmal')->with('info','Jumlah zakat mal anda sejumlah :'.$result);
        return redirect('/zakatmal')->with('info','Total zakat mal anda sejumlah :Rp'.$result);

    }
}
