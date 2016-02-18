<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Template;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class TemplatesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$templates = Template::latest()->get();
		return view('admin.templates.index', compact('templates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.templates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		template::create($request->all());
		return redirect('admin/templates')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$template = Template::findOrFail($id);
		return view('admin.templates.show', compact('template'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$template = Template::findOrFail($id);
		return view('admin.templates.edit', compact('template'));
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
		$template = Template::findOrFail($id);
		$template->update($request->all());
		return redirect('admin/templates')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Template.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.templates.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Template.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$template = Template::destroy($id);

            // Redirect to the group management page
            return redirect('admin/templates')->with('success', Lang::get('message.success.delete'));

    	}

}