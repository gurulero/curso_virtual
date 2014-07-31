<?php

class courses_controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses=Course::all();
		return View::make('superadmin.courses')->with(array('courses'=>$courses));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories=Category::all();
		return View::make('superadmin.course_create')->with(array('categories'=>$categories));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),
		    array(
		        'name' => 'required',
		        'category' => 'required',
		        'description' => 'required',
		    )
		);
		if ($validator->fails())
		{
		    return Redirect::back()->with('msg', '2');
		}else{
			$course=new Course();
			$course->name=Input::get('name');
			$course->user_id=1;
			$course->description=Input::get('description');
			$course->tags();
			$course->save();
			return Redirect::back()->with('msg', '1');
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
