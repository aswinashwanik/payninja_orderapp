<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Jobs\ProcessOrderJob;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $order = Order::create([
                'customer_name' => $request->customer_name,
                'amount' => $request->amount,
                'status' => 'pending',
            ]);

            ProcessOrderJob::dispatch($order);

            DB::commit();

            return response()->json(['message' => 'Order created and job dispatched.'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to create order'], 500);
        }
    }

    // Optional for web form route
    public function webStore(Request $request)
    {
        return $this->store($request);
    }
}
