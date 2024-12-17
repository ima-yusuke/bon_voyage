<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public $schools =[
        ["id"=>1,"name"=>"三重県立松阪高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>2,"name"=>"三重県立四日市高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>3,"name"=>"学校法人高田学苑高田中学校","category"=>"私立","type"=>"中学校"],
        ["id"=>4,"name"=>"三重県立鈴鹿高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>5,"name"=>"津市立久居中学校","category"=>"公立","type"=>"中学校"],
        ["id"=>6,"name"=>"三重県立桑名高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>7,"name"=>"三重県立伊賀高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>8,"name"=>"三重県立名張高等学校","category"=>"公立","type"=>"高校"],
        ["id"=>9,"name"=>"伊勢市立厚生中学校","category"=>"公立","type"=>"中学校"],
        ["id"=>10,"name"=>"三重県立熊野高等学校","category"=>"公立","type"=>"高校"],
    ];

    public $travels =[
        ["id"=>1,"agent"=>"JTB三重支店","leave_date"=>"2019-12-01","status"=>"精算済","direction"=>"東京","title"=>"2019-12/修旅","charge_person"=>"藤野"],
        ["id"=>2,"agent"=>"KNT三重支店","leave_date"=>"2020-12-03","status"=>null,"direction"=>"北海道","title"=>"2020-12/合宿","charge_person"=>null],
        ["id"=>3,"agent"=>"日本旅行津支店","leave_date"=>"2021-12-01","status"=>null,"direction"=>"北海道","title"=>"2021-12/修旅","charge_person"=>null],
        ["id"=>4,"agent"=>"JTB三重支店","leave_date"=>"2022-12-02","status"=>"実施済","direction"=>"北海道","title"=>"2022-12/修旅","charge_person"=>"今井"],
    ];

    public function render(){
        $schools = $this->schools;
        return view("tourist/dash-tourist-school",compact("schools"));
    }

    public function showDetail($id)
    {
        $travels = $this->travels;
        return view("tourist/dash-tourist-school-detail",compact("travels"));
    }
}
