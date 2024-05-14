<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class AdminController extends Controller
{
    
    public function showLogin() {
        return view('admin.login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function addNewUser() {
        return view('admin.mobileuser.addNewUser');
    } 
    public function approveNewUser() {
        return view('admin.mobileuser.approveNewUser');
    } 
    public function activeUser() {
        return view('admin.mobileuser.activeUser');
    }
    
    public function addNewBussiness() {
        return view('admin.bussinessunit.addNewBussiness');
    }

    public function allBussinessUnit() {
        return view('admin.bussinessunit.allBussinessUnit');
    }

    public function approveBussinessUnit() {
        return view('admin.bussinessunit.approveBussinessUnit');
    }


    public function addNewPlantLocation() {
        return view('admin.plantlocation.addNewPlantLocation');
    }

    public function allPlantLocation() {
        return view('admin.plantlocation.allPlantLocation');
    }

    public function approvePlantLocation() {
        return view('admin.plantlocation.approvePlantLocation');
    }
  

}
