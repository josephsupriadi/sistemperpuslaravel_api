<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRespon;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::with('rak')->get();

        if ($data)
        {
            return ApiRespon::createApi(200,'Succes', $data);

        } else {
            return Apirespon::createApi(400,'Failed');
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
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'rak_id' => 'required',
                
            ]);

            $book = Book::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'rak_id' => $request->rak_id,
                
            ]);

            $data = Book::where('id','=', $book->id)->get();
            
        if ($data) {
            return Apirespon::createApi(200,'Succes', $data);

        } else {
            return Apirespon::createApi(400, 'Failde');
        }
    } catch (Exception $error) {
        return Apirespon::createApi(400, 'Failed');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Book::where('id', '=', $id)->get();

        if ($data) {
            return Apirespon::createApi(200, 'Success', $data);
        } else {
            return Apirespon::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
