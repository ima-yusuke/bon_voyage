<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolTravelDetailController extends Controller
{
    public $travels =[
        ["id"=>1,"agent"=>"JTB三重支店","leave_date"=>"2019-12-01","status"=>"精算済","direction"=>"東京","title"=>"2019-12/修旅","charge_person"=>"藤野"],
        ["id"=>2,"agent"=>"KNT三重支店","leave_date"=>"2020-12-03","status"=>null,"direction"=>"北海道","title"=>"2020-12/合宿","charge_person"=>null],
        ["id"=>3,"agent"=>null,"leave_date"=>"2021-12-01","status"=>null,"direction"=>"北海道","title"=>"2021-12/修旅","charge_person"=>null],
        ["id"=>4,"agent"=>"JTB三重支店","leave_date"=>"2022-12-02","status"=>"実施済","direction"=>"北海道","title"=>"2022-12/修旅","charge_person"=>"今井"],
    ];//

    public function render($id)
    {
        $order = collect($this->travels)->firstWhere('id', $id); // id に一致するデータを取得
        return view("tourist/dash-tourist-school-travel-detail",compact("order"));
    }
}
