<?php
namespace App\Http\Controllers;

use App\Models\lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('keyword');

    $leads = Lead::when($keyword, function ($query, $keyword) {
        return $query->where('name', 'like', "%{$keyword}%")
                     ->orWhere('mobile_no', 'like', "%{$keyword}%");
    })->paginate(10); // Use paginate() instead of all()

    return view('contact.index', compact('leads'));
}

    // public function index()
    // {
    //     $leads = Lead::all();
    //     return view('contact.index', compact('leads'));
    // }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:15',
        ]);
        

        $lead = Lead::create($request->all());

        return response([
            'status' => 200,
            'message' => 'Successfully submit',
            'lead' => $lead,
        ]);
    }
}
