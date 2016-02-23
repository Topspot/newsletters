@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New attorney
@parent
@stop

{{-- Page content --}}
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
        <li class="active">Create New attorney</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

       <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new attorney
                    </h4>
                </div>

                <div class="panel-body border">
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif


                    {!! Form::open(['url' => 'admin/attorneys','files' => true,'class' => 'attorneyform form-horizontal form-bordered']) !!}


                    <div class="form-group striped-col">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Enter Attorney Name']) !!}                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Website</label>
                        <div class="col-md-6">
                            {!! Form::text('website', null, ['class' => 'form-control','placeholder' => 'Enter Website']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Which box do you want to show?</label>
                        <div class="col-md-9">
                            <label class="radio-inline " for="example-inline-radio1">
                                {!! Form::radio('google_yelp', 'google',true) !!} Google  
                            </label>
                            <label class="radio-inline" for="example-inline-radio2">
                                {!! Form::radio('google_yelp', 'yelp') !!} Yelp
                            </label>   

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Do you want to show recipe section?</label>
                        <div class="col-md-9">
                            <label class="radio-inline " for="example-inline-radio1">
                                {!! Form::radio('recipe_show', 'yes',true) !!} Yes  
                            </label>
                            <label class="radio-inline" for="example-inline-radio2">
                                {!! Form::radio('recipe_show', 'no') !!} No
                            </label>   

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Do you want to show Thank you section?</label>
                        <div class="col-md-9">
                            <label class="radio-inline " for="example-inline-radio1">
                                {!! Form::radio('thankyou_show', 'yes') !!} Yes  
                            </label>
                            <label class="radio-inline" for="example-inline-radio2">
                                {!! Form::radio('thankyou_show', 'no',true) !!} No
                            </label>   

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Thank you Heading</label>
                        <div class="col-md-6">
                            {!! Form::text('thankyou_heading', null, ['class' => 'form-control','placeholder' => 'Enter Heading']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Thank you Sub Heading</label>
                        <div class="col-md-6">
                            {!! Form::text('thankyou_subheading', null, ['class' => 'form-control','placeholder' => 'Enter Sub Heading']) !!}
                        </div>
                    </div>
                    <div class="field_wrapper3">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Thank you Text</label>
                            <div class="col-md-6">
                                {!! Form::text('thankyou_text[]', null, ['class' => 'form-control','placeholder' => 'Enter Thank you Text']) !!}
                                <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button3" type="button">Add</button>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Do you want to show Joke of the month section?</label>
                        <div class="col-md-9">
                            <label class="radio-inline " for="example-inline-radio1">
                                  {!! Form::radio('joke_show', 'yes') !!} Yes  
                               </label>
                            <label class="radio-inline" for="example-inline-radio2">
                             {!! Form::radio('joke_show', 'no',true) !!} No
                             </label>   
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Joke Heading</label>
                        <div class="col-md-6">
                            {!! Form::text('joke_heading', null, ['class' => 'form-control','placeholder' => 'Enter Heading']) !!}
                        </div>
                    </div>
                    
                     <div class="form-group striped-col ">
                            <label class="col-md-3 control-label" for="example-file-input">Joke of the month Image</label>
                            <div class="col-md-9 pad-top20 ">
                               {!! Form::file('joke_background', null, ['class' => 'form-control']) !!}
                        </div>
                     </div>
                     <div class="form-group striped-col ">
                            <label class="col-md-3 control-label" for="example-file-input">Banner Background Image</label>
                            <div class="col-md-9 pad-top20 ">
                               {!! Form::file('banner_background', null, ['class' => 'form-control']) !!}
                        </div>
                     </div>
                        {!! Form::hidden('url', null, ['class' => 'form-control']) !!}
                        
                    <div class="form-group">
                        <label class="col-md-3 control-label">Yelp link</label>
                        <div class="col-md-6">
                            {!! Form::text('yelp', null, ['class' => 'form-control','placeholder' => 'Enter Yelp Link']) !!}
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Google Link</label>
                        <div class="col-md-6">
                            {!! Form::text('google', null, ['class' => 'form-control','placeholder' => 'Enter Google Link']) !!}
                        </div>
                    </div>   
                    
                       <div class="form-group striped-col ">
                            <label class="col-md-3 control-label" for="example-file-input">Upload Logo</label>
                            <div class="col-md-9 pad-top20 ">
                               {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                        </div>
                     </div>   

                     <div class="form-group">
                        <label class="col-md-3 control-label">Phone Number</label>
                        <div class="col-md-6">
                            {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => 'Enter Phone number']) !!}
                        </div>
                    </div>     
                     <div class="form-group">
                        <label class="col-md-3 control-label">Year</label>
                        <div class="col-md-6">
                            {!! Form::text('year', null, ['class' => 'form-control','placeholder' => 'Enter month and year']) !!}
                        </div>
                    </div>     
                     <div class="form-group">
                        <label class="col-md-3 control-label">Volume Text</label>
                        <div class="col-md-6">
                            {!! Form::text('volume', null, ['class' => 'form-control','placeholder' => 'Enter Volume text']) !!}
                        </div>
                    </div>  
                      <div class="form-group">   
                        <label class="col-md-3 control-label">Banner Heading</label>
                        <div class="col-md-6">
                            {!! Form::text('banner_heading', null, ['class' => 'form-control','placeholder' => 'Enter Banner Heading']) !!}
                        </div>
                    </div>
                           <div class="form-group">
                        <label class="col-md-3 control-label">Do you banner text in as list or  as plain text?</label>
                        <div class="col-md-9">
                            <label class="radio-inline " for="example-inline-radio1">
                                 {!! Form::radio('check_banner', 'list' ,true) !!} List   
                               </label>
                            <label class="radio-inline" for="example-inline-radio2">
                             {!! Form::radio('check_banner', 'text') !!} Plain text
                             </label>   
                           
                        </div>
                    </div>
                    <div class="field_wrapper">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Text</label>
                            <div class="col-md-6">
                                {!! Form::text('banner_text[]', null, ['class' => 'form-control','placeholder' => 'Enter Banner Text']) !!}
                                <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button" type="button">Add</button>
                            </div>

                        </div>
                    </div>    
                       <div class="form-group striped-col ">
                            <label class="col-md-3 control-label" for="example-file-input">Upload Attorney Image</label>
                            <div class="col-md-9 pad-top20 ">
                               {!! Form::file('attorney_img', null, ['class' => 'form-control']) !!}
                        </div>
                     </div>     
                       <div class="form-group striped-col ">
                            <label class="col-md-3 control-label" for="example-file-input">Upload Footer Logo</label>
                            <div class="col-md-9 pad-top20 ">
                               {!! Form::file('footer_logo', null, ['class' => 'form-control']) !!}
                        </div>
                     </div>     
                             <div class="form-group">   
                        <label class="col-md-3 control-label">Footer Text</label>
                        <div class="col-md-6">
                            {!! Form::text('footer_text', null, ['class' => 'form-control','placeholder' => 'Enter Footer Text']) !!}
                        </div>
                    </div>
                    <div class="field_wrapper4">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer Phone Number</label>
                            <div class="col-md-6">
                                {!! Form::text('phone_number[]', null, ['class' => 'form-control','placeholder' => 'Enter Footer phone_number']) !!}
                                <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button4" type="button">Add</button>
                            </div>

                        </div>
                    </div>
                    <div class="field_wrapper5">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer Address</label>
                            <div class="col-md-6">
                                {!! Form::text('footer_address[]', null, ['class' => 'form-control','placeholder' => 'Enter Footer Address']) !!}
                                <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button5" type="button">Add</button>
                            </div>

                        </div>
                    </div>
                    <div class="field_wrapper6">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer Website</label>
                            <div class="col-md-6">
                                {!! Form::text('footer_website[]', null, ['class' => 'form-control','placeholder' => 'Enter Footer Website']) !!}
                                <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button6" type="button">Add</button>
                            </div>

                        </div>
                    </div>
                   <div class="form-group">   
                        <label class="col-md-3 control-label">Copyright</label>
                        <div class="col-md-6">
                            {!! Form::text('copyright', null, ['class' => 'form-control','placeholder' => 'Enter Copyright']) !!}
                        </div>
                    </div>   
                   <div class="form-group">   
                        <label class="col-md-3 control-label">Unsubscribe Link:</label>
                        <div class="col-md-6">
                            {!! Form::text('unsubscribe', null, ['class' => 'form-control','placeholder' => 'Enter Unsubscribe Link:']) !!}
                        </div>
                    </div> 



                    <div class="form-group form-actions">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.attorneys.index') }}">
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