<?php 
namespace App\Middleware;
use Illuminate\Http\Middleware;
use Closure;

class Administrator extends Middleware{

	public function handle($request, Closure $next){
		if ($request->user()->type() != "Admin"){
			return redirect('/');
		}
		return $next($request);
	}

}
?>