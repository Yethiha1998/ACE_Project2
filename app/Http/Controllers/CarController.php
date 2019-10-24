<?php

namespace App\Http\Controllers;

use App\Car;
use carseeder;
use Illuminate\Http\Request;
use Auth;
use DB;






class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('car.index');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('herewego');
        if (Auth::check()) {
            return view('car.create');
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_all = $request->all();
        
        $this->validate($request,[
            'brand'=>'required',
            'name'=>'required',
            'type'=>'required',
            'price'=>'required|integer|max:2147483647',
            'car_no'=>'required',
            'status'=>'required',
            'img1'=>'required',
            'img2'=>'required',
            'img3'=>'required',
            ]);

        $owner_id=$request->input('owner_id'); 
        $brand = $request->input('brand');
        $name = $request->input('name');
        $type = $request->input('type');
        $price = $request->input('price');
        $car_no = $request->input('car_no');
        $status = $request->input('status');
        $img1 = $request_all['img1']->getOriginName();
        $img2 = $request->input('img2');
        $img3 = $request->input('img3');

        dd($img1);

        
$cars = new Car;
$cars->owner_id=$owner_id;
$cars->brand = $brand;
$cars->name = $name;
$cars->type = $type;
$cars->price= $price;
$cars->car_no= $car_no;
$cars->status= $status;
$cars->image1= $img1;
$cars->image2= $img2;
$cars->image3= $img3;

dd($img2);

$cars->save();
return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
