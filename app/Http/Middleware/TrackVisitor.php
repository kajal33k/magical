<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class TrackVisitor
{
    // public function handle(Request $request, Closure $next)
    // {
    //     $ip = $request->ip();
    //     $location = Location::get($ip);

    //     Visitor::create([
    //         'ip_address' => $ip,
    //         'user_agent' => $request->header('User-Agent'),
    //         'country' => $location ? $location->countryName : 'Unknown',
    //     ]);

    //     return $next($request);
    // }


//     public function handle(Request $request, Closure $next)
// {
//     $ip = $request->ip();
//     $location = Location::get($ip);

//     Visitor::updateOrInsert(
//         ['ip_address' => $ip], // Unique identifier
//         [
//             'user_agent' => $request->header('User-Agent'),
//             'country' => $location ? $location->countryName : 'Unknown',
//             'updated_at' => now(),
//         ]
//     );

//     return $next($request);
// }



public function handle(Request $request, Closure $next)
{
    $ip = $request->ip();
    $location = Location::get($ip);

    Visitor::updateOrInsert(
        ['ip_address' => $ip], // Unique identifier
        [
            'user_agent' => $request->header('User-Agent'),
            'country' => $location ? $location->countryName : 'Unknown',
            'updated_at' => now(),
            'created_at' => DB::raw('IFNULL(created_at, NOW())') // Ensure created_at is set only on insert
        ]
    );

    return $next($request);
}

}
