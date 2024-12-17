<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelOrderController extends Controller
{
    //
    public $orders =[
        ["id"=>1,"date"=>"2023-12-01","school"=>"A学校","status"=>"受注済","students"=>30,"allergy"=>true,"substitute"=>false,"venue"=>true,"room"=>true,"agent"=>"JTB三重支店"],
        ["id"=>2,"date"=>"2023-2-12","school"=>"B学校","status"=>"精算済","students"=>250,"allergy"=>false,"substitute"=>true,"venue"=>true,"room"=>false,"agent"=>"KNT札幌支店"],
        ["id"=>3,"date"=>"2023-10-03","school"=>"C学校","status"=>"実施済","students"=>120,"allergy"=>true,"substitute"=>true,"venue"=>true,"room"=>true,"agent"=>"JTB東京支店"],
        ["id"=>4,"date"=>"2024-11-14","school"=>"D学校","status"=>"受注済","students"=>45,"allergy"=>false,"substitute"=>false,"venue"=>true,"room"=>true,"agent"=>"KNT大阪支店"],
        ["id"=>5,"date"=>"2023-4-5","school"=>"E学校","status"=>"精算済","students"=>320,"allergy"=>true,"substitute"=>true,"venue"=>false,"room"=>false,"agent"=>"日本旅行名古屋支店"],
        ["id"=>6,"date"=>"2024-7-6","school"=>"F学校","status"=>"受注済","students"=>150,"allergy"=>false,"substitute"=>false,"venue"=>true,"room"=>true,"agent"=>"名鉄観光京都支店"],
        ["id"=>7,"date"=>"2023-11-17","school"=>"G学校","status"=>"実施済","students"=>60,"allergy"=>false,"substitute"=>true,"venue"=>false,"room"=>false,"agent"=>"JTB神戸支店"],
        ["id"=>8,"date"=>"2023-11-28","school"=>"H学校","status"=>"実施済","students"=>280,"allergy"=>false,"substitute"=>false,"venue"=>true,"room"=>true,"agent"=>"JTB沖縄支店"],
        ["id"=>9,"date"=>"2022-8-29","school"=>"I学校","status"=>"精算済","students"=>120,"allergy"=>true,"substitute"=>true,"venue"=>false,"room"=>true,"agent"=>"日本旅行北海道支店"],
        ["id"=>10,"date"=>"2024-12-24","school"=>"J学校","status"=>"受注済","students"=>320,"allergy"=>false,"substitute"=>false,"venue"=>true,"room"=>false,"agent"=>"名鉄観光福岡支店"],
    ];

    public function render(){
        $orders = $this->orders;
        return view("hotel/dash-hotel-order",compact("orders"));
    }

    public function show($id)
    {
        $order = collect($this->orders)->firstWhere('id', $id);
        return view("hotel/dash-hotel-order-detail",compact("order"));
    }
}
