@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a similar
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Similars</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>similars</li>
        <li class="active">Create New similar</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit similar
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($similar, ['method' => 'PATCH', 'action' => ['SimilarsController@update', $similar->id],'files' => true,'class' => 'similarform']) !!}

                    <div class="form-group">
                        {!! Form::label('google_heading', 'Google Heading: ') !!}
                        {!! Form::text('google_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('google_text', 'Google Text: ') !!}
                        {!! Form::text('google_text', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('google_image', 'Google Image: ') !!}
                       {!! Form::file('google_image', null, ['class' => 'form-control']) !!}
                        <?php if (isset($similar['google_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['google_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>
                     <div class="form-group">
                        {!! Form::label('yelp_image', 'Yelp Image: ') !!}
                        {!! Form::file('yelp_image', null, ['class' => 'form-control']) !!}
                         <?php if (isset($similar['yelp_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['yelp_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('article1_heading', 'Article1 Heading: ') !!}
                        {!! Form::text('article1_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article1_detail', 'Article1 Detail: ') !!}
                        {!! Form::textarea('article1_detail', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article1_link', 'Article1 Link: ') !!}
                        {!! Form::text('article1_link', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article1_image', 'Article1 Image: ') !!}
                       {!! Form::file('article1_image', null, ['class' => 'form-control']) !!}
                        <?php if (isset($similar['article1_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['article1_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('article2_heading', 'Article2 Heading: ') !!}
                        {!! Form::text('article2_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article2_detail', 'Article2 Detail: ') !!}
                        {!! Form::textarea('article2_detail', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article2_link', 'Article2 Link: ') !!}
                        {!! Form::text('article2_link', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article2_image', 'Article2 Image: ') !!}
                        {!! Form::file('article2_image', null, ['class' => 'form-control']) !!}
                           <?php if (isset($similar['article2_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['article2_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('article3_heading', 'Article3 Heading: ') !!}
                        {!! Form::text('article3_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article3_detail', 'Article3 Detail: ') !!}
                        {!! Form::textarea('article3_detail', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article3_link', 'Article3 Link: ') !!}
                        {!! Form::text('article3_link', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article3_image', 'Article3 Image: ') !!}
                        {!! Form::file('article3_image', null, ['class' => 'form-control']) !!}
                          <?php if (isset($similar['article3_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['article3_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('practicearea_heading', 'Practicearea Heading: ') !!}
                        {!! Form::text('practicearea_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('recipe_heading', 'Recipe Heading: ') !!}
                        {!! Form::text('recipe_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('recipe_sub_heading', 'Recipe Sub Heading: ') !!}
                        {!! Form::text('recipe_sub_heading', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ingredient_heading', 'Ingredient Heading: ') !!}
                        {!! Form::text('ingredient_heading', null, ['class' => 'form-control']) !!}
                    </div>

                     <div class="field_wrapper">

                        <?php
                        $bannertext = array();
                        $bannertext = json_decode($similar['ingredient_text']);
//                                print_r($bannertext);exit();
                        $i = 0;
                        foreach ($bannertext as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('ingredient_text', 'Banner Text: ') !!}
                                    {!! Form::text('ingredient_text[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('ingredient_text[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        ?>


                    </div>

					<div class="form-group">
                        {!! Form::label('ingredient_image', 'Ingredient Image: ') !!}
                        {!! Form::file('ingredient_image', null, ['class' => 'form-control']) !!}
                              <?php if (isset($similar['ingredient_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$similar['ingredient_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('ingredient_link', 'Ingredient Link: ') !!}
                        {!! Form::text('ingredient_link', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop