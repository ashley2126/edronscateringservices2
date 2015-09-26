<?php

namespace App\Http\Controllers\Admin;



use App\Package;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{


    /**
     * List all the packages
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',compact('packages'));
    }

    
}
