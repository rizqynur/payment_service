<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        return Wallet::all();
    }

    public function store(Request $request)
    {
        $wallet = Wallet::create($request->all());
        return response()->json($wallet, 201);
    }

    public function show($id)
    {
        return Wallet::find($id);
    }

    public function update(Request $request, $id)
    {
        $wallet = Wallet::find($id);
        $wallet->update($request->all());
        return response()->json($wallet, 200);
    }

    public function destroy($id)
    {
        Wallet::destroy($id);
        return response()->json(null, 204);
    }
}
