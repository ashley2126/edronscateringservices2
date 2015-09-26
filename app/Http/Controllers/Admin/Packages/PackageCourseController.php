<?php
/**
 * Created by PhpStorm.
 * User: Mikro
 * Date: 9/5/2015
 * Time: 2:46 PM
 */

namespace App\Http\Controllers\Admin\Packages;

use App\Package;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PackageCourseRequest;
use App\Http\Controllers\Controller;

class PackageCourseController extends Controller{


    public function store(PackageCourseRequest $request)
    {
        dd($request->all());
    }

}