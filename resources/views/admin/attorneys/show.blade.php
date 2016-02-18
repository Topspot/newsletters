@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
attorney
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Attorneys</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>attorneys</li>
        <li class="active">attorneys</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    attorney {{ $attorney->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $attorney->id }}</td></tr>
                     <tr><td>name</td><td>{{ $attorney['name'] }}</td></tr>
					<tr><td>website</td><td>{{ $attorney['website'] }}</td></tr>
					<tr><td>url</td><td>{{ $attorney['url'] }}</td></tr>
					<tr><td>yelp</td><td>{{ $attorney['yelp'] }}</td></tr>
					<tr><td>google</td><td>{{ $attorney['google'] }}</td></tr>
					<tr><td>logo</td><td>{{ $attorney['logo'] }}</td></tr>
					<tr><td>phone</td><td>{{ $attorney['phone'] }}</td></tr>
					<tr><td>year</td><td>{{ $attorney['year'] }}</td></tr>
					<tr><td>volume</td><td>{{ $attorney['volume'] }}</td></tr>
					<tr><td>banner_heading</td><td>{{ $attorney['banner_heading'] }}</td></tr>
					<tr><td>banner_text</td><td>{{ $attorney['banner_text'] }}</td></tr>
					<tr><td>attorney_img</td><td>{{ $attorney['attorney_img'] }}</td></tr>
					<tr><td>footer_logo</td><td>{{ $attorney['footer_logo'] }}</td></tr>
					<tr><td>footer_text</td><td>{{ $attorney['footer_text'] }}</td></tr>
					<tr><td>footer_address</td><td>{{ $attorney['footer_address'] }}</td></tr>
					<tr><td>footer_website</td><td>{{ $attorney['footer_website'] }}</td></tr>
					<tr><td>copyright</td><td>{{ $attorney['copyright'] }}</td></tr>
					<tr><td>unsubscribe</td><td>{{ $attorney['unsubscribe'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop