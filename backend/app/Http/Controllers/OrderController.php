<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();

        // ha nincs hitelesített felhasználó (nincs vagy rossz token)
        if (!$user) {
            return response()->json([
                'message' => 'Nem található felhasználó ehhez a tokenhez'
            ], 401);
        }

        $order = Order::create([
            'user_id' => $user->id,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Rendelés sikeresen létrehozva',
            'order' => $order
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
