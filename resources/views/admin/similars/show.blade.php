@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
similar
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
        <li class="active">similars</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    similar {{ $similar->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $similar->id }}</td></tr>
                     <tr><td>google_heading</td><td>{{ $similar['google_heading'] }}</td></tr>
					<tr><td>google_text</td><td>{{ $similar['google_text'] }}</td></tr>
					<tr><td>google_image</td><td>{{ $similar['google_image'] }}</td></tr>
					<tr><td>article1_heading</td><td>{{ $similar['article1_heading'] }}</td></tr>
					<tr><td>article1_detail</td><td>{{ $similar['article1_detail'] }}</td></tr>
					<tr><td>article1_link</td><td>{{ $similar['article1_link'] }}</td></tr>
					<tr><td>article1_image</td><td>{{ $similar['article1_image'] }}</td></tr>
					<tr><td>article2_heading</td><td>{{ $similar['article2_heading'] }}</td></tr>
					<tr><td>article2_detail</td><td>{{ $similar['article2_detail'] }}</td></tr>
					<tr><td>article2_link</td><td>{{ $similar['article2_link'] }}</td></tr>
					<tr><td>article2_image</td><td>{{ $similar['article2_image'] }}</td></tr>
					<tr><td>article3_heading</td><td>{{ $similar['article3_heading'] }}</td></tr>
					<tr><td>article3_detail</td><td>{{ $similar['article3_detail'] }}</td></tr>
					<tr><td>article3_link</td><td>{{ $similar['article3_link'] }}</td></tr>
					<tr><td>article3_image</td><td>{{ $similar['article3_image'] }}</td></tr>
					<tr><td>practicearea_heading</td><td>{{ $similar['practicearea_heading'] }}</td></tr>
					<tr><td>recipe_heading</td><td>{{ $similar['recipe_heading'] }}</td></tr>
					<tr><td>recipe_sub_heading</td><td>{{ $similar['recipe_sub_heading'] }}</td></tr>
					<tr><td>ingredient_heading</td><td>{{ $similar['ingredient_heading'] }}</td></tr>
					<tr><td>ingredient_text</td><td>{{ $similar['ingredient_text'] }}</td></tr>
					<tr><td>ingredient_image</td><td>{{ $similar['ingredient_image'] }}</td></tr>
					<tr><td>ingredient_link</td><td>{{ $similar['ingredient_link'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop