<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nikah;
use App\Models\Chart;
use Illuminate\Support\Facades\DB;
 
class NikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function nikah()
    {
        $data = Nikah::all();
         // $keyword = $request->keyword;
        // $data = Nikah::where('kecamatan', 'LIKE', '%'.$keyword.'$')
        //     ->orWhere('jumlah', 'LIKE', '%'.$keyword.'$')
        //     ->paginate();
      
        $kecamatan = [];
        $jumlah = [];
        
        foreach($data as $d){
        $kecamatan[]=$d->kecamatan;
        $jumlah[]=$d->jumlah;
        }

        // dd($jumlah); 
        return view('nikah/nikah')->with([
             'data' => $data,
             'kecamatan' => $kecamatan,
             'jumlah' => $jumlah

        ]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nikah/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->except(['_token']);
        Nikah::insert($data);
        return redirect('/nikah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nikah::findOrFail($id);
        return view('nikah/edit')->with([
             'data' => $data
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
    public function update(Request $request, $id)
    {
        $item = Nikah::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/nikah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = Nikah::findOrFail($id);
        $item->delete();
        return redirect('/nikah');
       
    }
}
