<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attorney;
use App\Practicearea;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class PracticeareasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$practiceareas = Practicearea::latest()->get();
		return view('admin.practiceareas.index', compact('practiceareas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{       $attorney = Attorney::lists('name', 'id');
		return view('admin.practiceareas.create',compact('attorney'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		practicearea::create($request->all());
		return redirect('admin/practiceareas')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$practicearea = Practicearea::findOrFail($id);
		return view('admin.practiceareas.show', compact('practicearea'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $attorney = Attorney::lists('name', 'id');
		$practicearea = Practicearea::findOrFail($id);
		return view('admin.practiceareas.edit', compact('practicearea','attorney'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$practicearea = Practicearea::findOrFail($id);
		$practicearea->update($request->all());
		return redirect('admin/practiceareas')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Practicearea.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.practiceareas.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Practicearea.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$practicearea = Practicearea::destroy($id);

            // Redirect to the group management page
            return redirect('admin/practiceareas')->with('success', Lang::get('message.success.delete'));

    	}

}