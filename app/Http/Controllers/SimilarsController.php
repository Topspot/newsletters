<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Similar;
use Illuminate\Http\Request;
use App\Helpers\Thumbnail;
use App\Http\Requests\FileUploadRequest;
use Carbon\Carbon;
use Lang;
use File;

class SimilarsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $similars = Similar::latest()->get();
        return view('admin.similars.index', compact('similars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('admin.similars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $input_values = $request->all();
        $input_values['ingredient_text'] = json_encode($input_values['ingredient_text']);
        $uploads = array('google_image','yelp_image', 'article1_image', 'article2_image', 'article3_image', 'ingredient_image');

        $destinationPath = public_path() . '/uploads/files/';

        for ($i = 0; $i < 6; $i++) {
            $file_temp = $request->file($uploads[$i]);
            $extension = $file_temp->getClientOriginalExtension() ? : 'png';
            $safeName = str_random(10) . '.' . $extension;
            $input_values[$uploads[$i]] = $safeName;
            $file_temp->move($destinationPath, $safeName);
            Thumbnail::generate_image_thumbnail($destinationPath . $safeName, $destinationPath . 'thumb_' . $safeName);
        }
        similar::create($input_values);
        return redirect('admin/similars')->with('success', Lang::get('message.success.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $similar = Similar::findOrFail($id);
        return view('admin.similars.show', compact('similar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $similar = Similar::findOrFail($id);
        return view('admin.similars.edit', compact('similar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        $input_values = $request->all();
        $input_values['ingredient_text'] = json_encode($input_values['ingredient_text']);
//            print_r($input_values['name']);exit();
        $uploads = array('google_image','yelp_image', 'article1_image', 'article2_image', 'article3_image', 'ingredient_image');

        $destinationPath = public_path() . '/uploads/files/';
        $similar = Similar::findOrFail($id);
        // is new image uploaded?
        for ($i = 0; $i < 6; $i++) {
            if (!empty($request->file($uploads[$i]))) {
                $file = $request->file($uploads[$i]);
                $extension = $file->getClientOriginalExtension() ? : 'png';
                $safeName = str_random(10) . '.' . $extension;
                $file->move($destinationPath, $safeName);
                //delete old pic if exists
                if ($uploads[$i] == 'google_image') {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->google_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->google_image);
                    }
                } else if ($uploads[$i] == 'yelp_image') {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->yelp_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->yelp_image);
                    }
                } else if ($uploads[$i] == 'article1_image') {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->article1_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->article1_image);
                    }
                } else if ($uploads[$i] == 'article2_image') {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->article2_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->article2_image);
                    }
                } else if ($uploads[$i] == 'article3_image') {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->article3_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->article3_image);
                    }
                } else {
                    if (File::exists(public_path() . '/uploads/files/' . $similar->ingredient_image)) {
                        File::delete(public_path() . '/uploads/files/' . $similar->ingredient_image);
                    }
                }

                //save new file path into db
                $input_values[$uploads[$i]] = $safeName;
            } else {
                unset($input_values[$uploads[$i]]);
            }
        }

        $similar->update($input_values);
        return redirect('admin/similars')->with('success', Lang::get('message.success.update'));
    }

    /**
     * Delete confirmation for the given Similar.
     *
     * @param  int      $id
     * @return View
     */
    public function getModalDelete($id = null) {
        $error = '';
        $model = '';
        $confirm_route = route('admin.similars.delete', ['id' => $id]);
        return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
    }

    /**
     * Delete the given Similar.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function getDelete($id = null) {
        $similar = Similar::destroy($id);

        // Redirect to the group management page
        return redirect('admin/similars')->with('success', Lang::get('message.success.delete'));
    }

}
