@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New article
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Articles</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>articles</li>
        <li class="active">Create New article</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new article
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

                    {!! Form::open(['url' => 'admin/articles','files' => true]) !!}

                    <div class="form-group">
                        {!! Form::label('article_title', 'Article Title: ') !!}
                        {!! Form::text('article_title', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article_detail', 'Article Detail: ') !!}
                        {!! Form::textarea('article_detail', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article_image', 'Article Image: ') !!}
                        {!! Form::file('article_image', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('article_link', 'Article Link: ') !!}
                        {!! Form::text('article_link', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('attorney_id', 'Attorney Id: ') !!}
                        {!! Form::select('attorney_id', $attorney,null, ['class' => 'form-control select2' ,'placeholder'=> ' Select Attorney Name']) !!}
                    </div>

					

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.articles.index') }}">
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