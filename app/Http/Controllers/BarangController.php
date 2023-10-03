<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\Produk;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use PDOException;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $barang = Barang::latest()->get();
            $produk = Produk::pluck('nama_prodks', 'id');
            $users = User::pluck('name', 'id');
            return view('barang.index', compact('barang', 'produk', 'users'));
        } catch (QueryException | Exception | PDOException $error) {
            dd($error->getMessage());
            return redirect()->back()->withErrors(['message' => 'Terjadi error']);
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
    public function store(StoreBarangRequest $request)
    {
        // Produk::create($request->all());
        // return redirect('produk')->with('success', 'Data produk berhasil ditambahkan');
        try {

            DB::beginTransaction();
            $validated = $request->validated();
            Barang::create($validated);

            DB::commit();
        } catch (QueryException | Exception | PDOException $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
        return redirect('barang')->with('success', 'Data barangberhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, barang $barang)
    {
        try {
            DB::beginTransaction();
            $barang = Barang::findOrFail($barang);
            $validate = $request->validated();
            $barang->update($validate);
            DB::commit();
            return redirect()->back()->with('success', 'data berhasil di ubah');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => 'terjadi kesalahan']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {

        try {
            $barang->delete();
            return redirect('barang')->with('success', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }
}
