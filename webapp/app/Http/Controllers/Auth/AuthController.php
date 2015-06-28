<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Events\Dispatcher;
use App\Services\SubscriptionService;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	protected $redirectTo = '/events';
	protected $event;
	protected $subscription;

	use AuthenticatesAndRegistersUsers;
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Dispatcher $event, SubscriptionService $subscription)
	{
		$this->subscription = $subscription;
		$this->auth = $auth;
		$this->event = $event;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function postRegister(Request $request)
	{
		$data = $request->all();

		$validation = $this->subscription->validate($data);
        if ($validation->fails()){
			return redirect($request->path())->withErrors($validation)->withInput();
		}

		$user = $this->subscription->save($data);

		$this->auth->login($user);
		//Fire the userWasRegistered event
		// App\Events\UserWasRegistered
		$this->event->fire(new \App\Events\UserWasRegistered($this->auth->user()));

		return redirect($this->redirectPath());
	}

}
