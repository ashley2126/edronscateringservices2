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

    /**
     * Show the package create form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Show the package edit form.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $package_courses = $package->courses()->get();
        return view('admin.packages.edit',compact('package','package_courses'));
    }

    /**
     * Create new package.
     *
     * @param Requests\PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PackageRequest $request)
    {
        $package = Package::create($request->all());
        flash()->message('Successfully added new package: ' . $package->name,'success');
        return redirect('admin/packages');
    }


    /**
     * Updates the selected package.
     *
     * @param $id
     * @param PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id,PackageRequest $request)
    {
        $package = Package::findOrFail($id);
        $package->update($request->all());

        flash()->message('Successfully updated: ' . $package->name,'success');
        return redirect()->route('admin.packages.edit',[$package->id]);
    }

}
