<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::select('ip_address', 'user_agent', 'country', 'created_at')
            ->latest()
            ->paginate(10);
    
        return view('visitors.index', compact('visitors'));
    }
    

}
