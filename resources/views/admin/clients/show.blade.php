@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
client
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Clients</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>clients</li>
        <li class="active">clients</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    client {{ $client->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $client->id }}</td></tr>
                     <tr><td>name</td><td>{{ $client['name'] }}</td></tr>
					<tr><td>logo</td><td>{{ $client['logo'] }}</td></tr>
					<tr><td>year</td><td>{{ $client['year'] }}</td></tr>
					<tr><td>volume</td><td>{{ $client['volume'] }}</td></tr>
					<tr><td>banner</td><td>{{ $client['banner'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop