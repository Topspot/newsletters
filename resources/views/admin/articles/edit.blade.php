@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a article
@parent
@stop


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
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit article
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

                    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id],'files' => true]) !!}

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
                        <?php if (isset($article['article_image'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$article['article_image'] !!}" alt="profile pic">
                            <?php } ?>
                    </div>

					<div class="form-group">
                        {!! Form::label('article_link', 'Article Link: ') !!}
                        {!! Form::text('article_link', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                      {!! Form::label('attorney_id', 'Attorney Id: ') !!}
                        {!! Form::select('attorney_id', $attorney,null, ['class' => 'form-control select2']) !!}
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