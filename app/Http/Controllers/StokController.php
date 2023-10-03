<?php

namespace App\Http\Controllers;

use App\Exports\ProdukExport;
use App\Models\stok;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;
use App\Models\Produk;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;  
use PDOException;
use PDF;

class StokController extends Controller
{    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        try{
            $data['produk'] = Produk::orderBy('created_at','DESC')->get();
            
            return view('stok.index', compact('data'));
        }catch (QueryException | Exception | PDOException $error){ 
            // $this->failResponse($error->getMessage(), $error->getCode());
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestokRequest $request)
    {
        //error handling 
        try{ 
            DB::beginTransaction(); //mulai transaksi 
            Produk::create($request->all()); // query input ke table 
            
            DB::commit(); //nyimpan data ke database 
            
            //untuk merefresh ke halaman itu kembali untuk melihat hasil input  
            return redirect()->back()->with('success', "input data berhasil!"); 
       }catch (QueryException | Exception | PDOException $error){ 
           DB::rollBack(); //undo perubahan query/table 
           $this->failResponse($error->getMessage(), $error->getCode());
       }
    }

    private function failResponse($message, $code) {
        return redirect()->back()->withErrors('message => $message');
    }

    /**
     * Display the specified resource.
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   
        public function update(UpdatestokRequest $request, $product)
        {
            try {
                DB::beginTransaction();
                $produk = Produk::findOrFail($product);
                $validate = $request->validated();
                $produk->update($validate);
                DB::commit();
                return redirect()->back()->with('success', 'data berhasil di ubah');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
            }
          
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok $stok)
    {
        //
    }

    public function download(){
        $data['produk'] = Produk::get();
      
        $pdf = PDF::loadView('stok.data', compact('data'));
    
        // //dwonloadpdf file with download method 
        // $date = date ('YMD');
        // return $pdf->stream();
      return $pdf->download('test.pdf');
    
    }
    public function exporData(){
        $fileName = date('YMD').'_stok.xlsx';
        return Excel::download(new ProdukExport, $filename);
    }
}


