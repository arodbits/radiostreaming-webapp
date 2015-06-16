<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\EventService;
use Illuminate\Http\Request;
use App\Event;


class EventController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::paginate(10);

		return view('event.list_event', ['events'=>$events]);
	}	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('event.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, EventService $event)
	{
		$data = $request->all();
		$validator = $event->validate($data);

		if ($validator->fails()){
			return \Redirect::to('events/create')->withInput()->withErrors($validator);
		}
		else{	
			$event->save($data);
			return \Redirect::to('events');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::find($id);
		
		return view('event.edit_event', ['event'=>$event]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request, EventService $event)
	{
		$data = $request->all();
		$validator = $event->validate($data);

		if ($validator->fails()){
			return \Redirect::to("events/$id/edit")->withInput()->withErrors($validator);
		}

		else{	
			if($event->update($id,$data))
			return \Redirect::to("events");		
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = Event::find($id);
		$event->delete();
		return redirect('/events');
	}

}
