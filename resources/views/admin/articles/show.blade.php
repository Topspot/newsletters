@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
article
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
        <li class="active">articles</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    article {{ $article->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $article->id }}</td></tr>
                     <tr><td>article_title</td><td>{{ $article['article_title'] }}</td></tr>
					<tr><td>article_detail</td><td>{{ $article['article_detail'] }}</td></tr>
					<tr><td>article_image</td><td>{{ $article['article_image'] }}</td></tr>
					<tr><td>article_link</td><td>{{ $article['article_link'] }}</td></tr>
					<tr><td>attorney_id</td><td>{{ $article['attorney_id'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop