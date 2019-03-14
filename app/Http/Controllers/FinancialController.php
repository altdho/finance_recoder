<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Financial;
class FinancialController extends Controller
{
    //
    public function index(){
      $financials = Financial::paginate(5);
      return view ('financial.index', compact('financials'))
             ->with('i', (request()-> input('page', 1)-1)*5);
    }

    public function create(){
      return view('financial.create');
    }
    public function store(Request $request){
      // $request->validate([
      //   'nama'=>$request->get('nama'),
      //   'katagori'=>$request->get('kategori'),
      //   'jumlah'=>$request->get('jumlah')
      // ]);
      //
      // Financial::create($request->all());

      $financial = new Financial(
        array(
          'nama'=>$request->get('nama'),
          'katagori'=>$request->get('katagori'),
          'jumlah'=>$request->get('jumlah')
        ));
        $financial->save();
      return redirect()->route('financial.index')
                      ->with('status','Add Financial Success');
    }

    public function destroy($id){
      $financial = Financial::where('id', $id)->delete();
      return redirect()->route('financial.index')
                      ->with('status','Financial Deleted');
    }

    public function show($id){
      $financial = Financial::find($id);
      return view('financial.detail', compact('financial'));
    }

    public function edit($id){
      $financial = Financial::find($id);
      return view('financial.edit', compact('financial'));
    }

    public function update(Request $request, $id){
      $request->validate([
        'nama'=>'required',
        'katagori'=>'required'
      ]);
      $financial = Financial::find($id);
      $financial ->nama = $request->get('nama');
      $financial ->katagori =$request->get('katagori');
      $financial ->jumlah =$request->get('jumlah');
      $financial->save();
      return redirect()->route('financial.index')
                      ->with('success', 'Your Finance has updated successfully');
    }
}
