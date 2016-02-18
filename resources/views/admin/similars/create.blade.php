@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New similar
@parent
@stop

{{-- Page content --}}
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
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new similar
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

                    {!! Form::open(['url' => 'admin/similars','files' => true]) !!}

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
                    </div>
		     <div class="form-group">
                        {!! Form::label('yelp_image', 'Yelp Image: ') !!}
                        {!! Form::file('yelp_image', null, ['class' => 'form-control']) !!}
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
                                <div>
                                   {!! Form::label('ingredient_text', 'Ingredient Text: ') !!}
                                   {!! Form::text('ingredient_text[]', null, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_buttonn" type="button">Add</button>
                                </div>
                            </div>
					<div class="form-group">
                        {!! Form::label('ingredient_image', 'Ingredient Image: ') !!}
                         {!! Form::file('ingredient_image', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('ingredient_link', 'Ingredient Link: ') !!}
                        {!! Form::text('ingredient_link', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.similars.index') }}">
                                @lang('button.cancel')
                            </a>
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop