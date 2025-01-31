<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string| max:255',
            'mobile_no' => 'required|digits:10'
        ]);

        Lead::create([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no
        ]);

        return response()->json(['message' => 'Lead saved successfully']);
    }
}

