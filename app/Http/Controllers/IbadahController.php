<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibadah;
use App\Models\Chart;
use Illuminate\Support\Facades\DB;

class IbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function ibadah()
    {
        $ibadah = Ibadah::all();
      
        $kecamatan = [];
        $jumlah = [];
        
        foreach($ibadah as $i){
        $kecamatan[]=$i->kecamatan;
        $jumlah[]=$i->jumlah;
        }

        // dd($jumlah); 
        return view('tempat_ibadah/tempat_ibadah')->with([
             'ibadah' => $ibadah,
             'kecamatan' => $kecamatan,
             'jumlah' => $jumlah

        ]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        return view('tempat_ibadah/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        
        $ibadah = $request->except(['_token']);
        Ibadah::insert($ibadah);
        return redirect('/tempat_ibadah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show1($id)
    {
        $ibadah = Ibadah::findOrFail($id);
        return view('tempat_ibadah/edit')->with([
             'ibadah' => $ibadah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $item = Ibadah::findOrFail($id);
        $ibadah = $request->except(['_token']);
        $item->update($ibadah);
        return redirect('/tempat_ibadah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        
        $item = Ibadah::findOrFail($id);
        $item->delete();
        return redirect('/tempat_ibadah');
       
    }
}
