<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Events\Dispatcher;

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

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar, Dispatcher $event)
	{
		$this->auth = $auth;
		$this->event = $event;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
			]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			\Mail::send('emails.welcome', ['key' => 'value'], function($message)
			{
				$message->to('anthonyrodriguez.itt@gmail.com', 'John Smith')->subject('Welcome!');
			});
			$this->event->fire(new \App\Events\UserWasRegistered); // Update last_login record
			return redirect()->intended($this->redirectPath());
		}

		return redirect($this->loginPath())
		->withInput($request->only('email', 'remember'))
		->withErrors([
			'email' => $this->getFailedLoginMessage(),
			]);
	}

}
