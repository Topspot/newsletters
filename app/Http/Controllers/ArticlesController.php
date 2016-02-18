<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Attorney;
use App\Helpers\Thumbnail;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use File;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest()->get();
		return view('admin.articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            
            $attorney = Attorney::lists('name', 'id');
		return view('admin.articles.create', compact('attorney'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//            print_r($request->all());exit();
            
        $input_values=$request->all();
        $file_temp = $request->file('article_image');
        $extension       = $file_temp->getClientOriginalExtension() ?: 'png';
        $safeName        = str_random(10).'.'.$extension;
        $input_values['article_image']=$safeName;      
        $destinationPath = public_path() . '/uploads/files/';
         $file_temp->move($destinationPath, $safeName);
        Thumbnail::generate_image_thumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);
	
        article::create($input_values);
        return redirect('admin/articles')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::findOrFail($id);
		return view('admin.articles.show', compact('article'));
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
		$article = Article::findOrFail($id);
		return view('admin.articles.edit', compact('article','attorney'));
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
            $article = Article::findOrFail($id);
             $destinationPath = public_path() . '/uploads/files/';
            $input_values=$request->all();
            if (!empty($request->file('article_image'))) {
                $file = $request->file('article_image');
                $extension = $file->getClientOriginalExtension() ?: 'png';
                $safeName = str_random(10) . '.' . $extension;
                $file->move($destinationPath, $safeName);
                //delete old pic if exists
                    if (File::exists(public_path() . '/uploads/files/'. $article->article_image)) {
                        File::delete(public_path() . '/uploads/files/'. $article->article_image);
                    }


                    
                //save new file path into db
                $input_values['article_image']=$safeName;

            }else{
                unset($input_values['article_image']);
            }
		
		$article->update($input_values);
		return redirect('admin/articles')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Article.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.articles.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Article.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$article = Article::destroy($id);
            // Redirect to the group management page
            return redirect('admin/articles')->with('success', Lang::get('message.success.delete'));

    	}

}