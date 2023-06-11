<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourGuide;
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
        $items = TourGuide::all();
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
        return view('pages.admin.guide-package.create');
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
        $data['slug'] = str::slug($request->title);
        $data['image'] = $request->file('image')->store('assets/guide','public');
        TourGuide::create($data);

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
        return view('pages.admin.guide-package.edit',[
            'item'=>$item
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
