<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Radio;
use Illuminate\Http\Request;
use App\Services\RadioService;
class RadioController extends Controller {
	
	protected $service;

	public function __construct(RadioService $service){
		$this->middleware('auth');
		$this->service = $service;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$radio = Radio::find($id);
		return view('radio.detail', ['radio'=>$radio]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$radio = Radio::find($id);
		return view('radio.edit', ['radio' => $radio]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$radio = $request->all();
		$validator = $this->service->validate($radio);
		if ($validator->fails()){
			return \Redirect::to("radio/$id/edit")->withInput()->withErrors($validator);
		}
		else if ($this->service->update($id, $radio))
			return redirect("radio/$id");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
