<?php

namespace App\Http\Controllers;

use App\Models\InvoiceItem;
use App\Models\Order;
use Illuminate\Http\Request;

class FixItemsController extends Controller
{
    public function fixItems(Request $request)
    {
        $technician = $request->user();

        if (!$technician) {
            return response()->json(['error' => 'Technician Not exist'], 404);
        }

        $orders = InvoiceItem::get();

        return response()->json(['fixItems' => $orders], 200);
    }
}