<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuide;
use App\Models\TravelPackage;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\TourGuideRequest;

class TourGuidePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TourGuide::with(['travel_package'])->get();
        return view('pages.admin.guide-package.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::all();
        return view('pages.admin.guide-package.create',[
            'travel_packages'=>$travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourGuideRequest $request)
    {
        $data = $request->all();

        $data['slug'] = str::slug($request->name);
        $data['image'] = $request->file('image')->store('assets/guide','public');
        $guide = TourGuide::create($data);

        $guide -> slug = str::slug($request->name.$guide->id);
        $guide -> save();

        return redirect()->route('guide-package.index');
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
        $item = TourGuide::findOrFail($id);
        $travel_packages = TravelPackage::all();
        return view('pages.admin.guide-package.edit',[
            'item'=>$item,
            'travel_packages'=>$travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourGuideRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/guide', 'public'
        );

        $item = TourGuide::findOrFail($id);

        $item->update($data);

        return redirect()->route('guide-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TourGuide::findOrFail($id);
        $item -> delete();
        return redirect()->route('guide-package.index');
    }
}
