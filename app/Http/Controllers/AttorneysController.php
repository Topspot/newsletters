<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Thumbnail;
use App\Http\Requests\FileUploadRequest;
use App\Attorney;
use File;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class AttorneysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attorneys = Attorney::latest()->get();
		return view('admin.attorneys.index', compact('attorneys'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.attorneys.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            
        $input_values=$request->all();
       
        $input_values['banner_text']=json_encode($input_values['banner_text']);
        $input_values['phone_number']=json_encode($input_values['phone_number']);
        $input_values['footer_address']=json_encode($input_values['footer_address']);
        $input_values['footer_website']=json_encode($input_values['footer_website']);
        $input_values['thankyou_text']=json_encode($input_values['thankyou_text']);
        
               $i = 0;
                $tmp = mt_rand(1,9);
                do {
                    $tmp .= mt_rand(0, 9);
                } while(++$i < 14);
        
        $input_values['url']= url()."/newsletter/".$tmp;
//        print_r($input_values['banner_text']);exit();
          $uploads=array('logo','attorney_img','footer_logo','joke_background','banner_background');
        $destinationPath = public_path() . '/uploads/files/';

//---------------------------------------------- uploading images
        for($i=0;$i<5;$i++){     
        if(isset($request->file($uploads[$i]))){
        $file_temp = $request->file($uploads[$i]);
        $extension       = $file_temp->getClientOriginalExtension() ?: 'png';
        $safeName        = str_random(10).'.'.$extension;
        $input_values[$uploads[$i]]=$safeName;      
         $file_temp->move($destinationPath, $safeName);
        Thumbnail::generate_image_thumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);
        }
        }
//         print_r($input_values);exit();
//---------------------------------------------- creating new attorney
		attorney::create($input_values);
		return redirect('admin/attorneys')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$attorney = Attorney::findOrFail($id);
		return view('admin.attorneys.show', compact('attorney'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$attorney = Attorney::findOrFail($id);
		return view('admin.attorneys.edit', compact('attorney'));
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
            $input_values=$request->all();
             $input_values['banner_text']=json_encode($input_values['banner_text']);
             $input_values['phone_number']=json_encode($input_values['phone_number']);
             $input_values['footer_address']=json_encode($input_values['footer_address']);
             $input_values['footer_website']=json_encode($input_values['footer_website']);
             $input_values['thankyou_text']=json_encode($input_values['thankyou_text']);
//            print_r($input_values['name']);exit();
            $uploads=array('logo','attorney_img','footer_logo','joke_background','banner_background');
            $destinationPath = public_path() . '/uploads/files/';
            $attorney = Attorney::findOrFail($id);
                
                // is new image uploaded?
            for($i=0;$i<5;$i++){
            if (!empty($request->file($uploads[$i]))) {
                $file = $request->file($uploads[$i]);
                $extension = $file->getClientOriginalExtension() ?: 'png';
                $safeName = str_random(10) . '.' . $extension;
                $file->move($destinationPath, $safeName);
                //delete old pic if exists
                if($uploads[$i] == 'logo'){
                    if (File::exists(public_path() . '/uploads/files/'. $attorney->logo)) {
                        File::delete(public_path() . '/uploads/files/'. $attorney->logo);
                    }
                }else if($uploads[$i] == 'attorney_img'){
                     if (File::exists(public_path() . '/uploads/files/'. $attorney->attorney_img)) {
                        File::delete(public_path() . '/uploads/files/'. $attorney->attorney_img);
                    }
                }else if($uploads[$i] == 'joke_background'){
                     if (File::exists(public_path() . '/uploads/files/'. $attorney->joke_background)) {
                        File::delete(public_path() . '/uploads/files/'. $attorney->joke_background);
                    }
                }else if($uploads[$i] == 'banner_background'){
                     if (File::exists(public_path() . '/uploads/files/'. $attorney->banner_background)) {
                        File::delete(public_path() . '/uploads/files/'. $attorney->banner_background);
                    }
                }else{
                     if (File::exists(public_path() . '/uploads/files/'. $attorney->footer_logo)) {
                        File::delete(public_path() . '/uploads/files/'. $attorney->footer_logo);
                    }
                }

                //save new file path into db
                $input_values[$uploads[$i]]=$safeName;

            }else{
                unset($input_values[$uploads[$i]]);
            }
            }
                
//                print_r($request->all());exit();
		$attorney->update($input_values);
		return redirect('admin/attorneys')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Attorney.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.attorneys.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Attorney.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$attorney = Attorney::destroy($id);

            // Redirect to the group management page
            return redirect('admin/attorneys')->with('success', Lang::get('message.success.delete'));

    	}

}