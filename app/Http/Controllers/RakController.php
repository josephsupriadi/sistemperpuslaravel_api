<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Rak;
use App\Helpers\Apirespon;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rak::all();

        if ($data)
        {
            return Apirespon::createApi(200,'Succes', $data);

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
                'rak'=>'required',
                'kategori'=>'required',
            ]);

            $rak = Rak::create([
                'rak' =>$request->rak,
                'kategori' => $request->kategori,
            ]);
            $data = Rak::where('id','=', $rak->id)->get();

            if ($data)
            {
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
        //
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
