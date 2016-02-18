@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a attorney
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
        <li class="active">Create New attorney</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit attorney
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

                    {!! Form::model($attorney, ['method' => 'PATCH', 'action' => ['AttorneysController@update', $attorney->id],'files' => true, 'class' => 'attorney-form']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('website', 'Website: ') !!}
                        {!! Form::text('website', null, ['class' => 'form-control']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::radio('google_yelp', 'google',true) !!} Google  
                        {!! Form::radio('google_yelp', 'yelp') !!} Yelp
                    </div>
                         <div class="form-group">
                        {!! Form::label('recipe_show', 'Do you want to show recipe section?: ') !!}
                        {!! Form::radio('recipe_show', 'yes',true) !!} Yes  
                        {!! Form::radio('recipe_show', 'no') !!} No
                    </div>
                     <div class="form-group">
                        {!! Form::label('thankyou_show', 'Do you want to show Thank you section?: ') !!}
                        {!! Form::radio('thankyou_show', 'yes') !!} Yes  
                        {!! Form::radio('thankyou_show', 'no',true) !!} No
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('thankyou_heading', 'Thank you Heading: ') !!}
                        {!! Form::text('thankyou_heading', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('thankyou_subheading', 'Thank you Sub Heading: ') !!}
                        {!! Form::text('thankyou_subheading', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="field_wrapper3">

                        <?php
//                        print_r($attorney['thankyou_text']);exit();
                        $thankyou_text = array();
                        $thankyou_text = json_decode($attorney['thankyou_text']);
//                                 
                        $i = 0;
                        if(isset($thankyou_text)){
                        foreach ($thankyou_text as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('thankyou_text', 'Thankyou Text: ') !!}
                                    {!! Form::text('thankyou_text[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button3" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('thankyou_text[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        }
                        ?>


                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('joke_show', 'Do you want to show Thank you section?: ') !!}
                        {!! Form::radio('joke_show', 'yes') !!} Yes  
                        {!! Form::radio('joke_show', 'no',true) !!} No
                    </div>
                     <div class="form-group">
                        {!! Form::label('joke_heading', 'Joke Heading: ') !!}
                        {!! Form::text('joke_heading', null, ['class' => 'form-control']) !!}
                    </div>
                     <div class="form-group">
                        {!! Form::label('joke_background', 'Joke of the month Image: ') !!}
                        {!! Form::file('joke_background', null, ['class' => 'form-control']) !!}
                         <div>
                            <?php if (isset($attorney['logo'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$attorney['joke_background'] !!}" alt="profile pic">
                            <?php } ?>

                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('banner_background', 'Banner Background Image: ') !!}
                        {!! Form::file('banner_background', null, ['class' => 'form-control']) !!}
                        <div>
                            <?php if (isset($attorney['logo'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$attorney['banner_background'] !!}" alt="profile pic">
                            <?php } ?>

                        </div>
                     </div>
                    <div class="form-group">
                        
                        <!--{!! Form::label('url', 'Url: ') !!}-->
                        {!! Form::hidden('url', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('yelp', 'Yelp: ') !!}
                        {!! Form::text('yelp', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('google', 'Google: ') !!}
                        {!! Form::text('google', null, ['class' => 'form-control']) !!}
                    </div>
                    

                    <div class="form-group">
                        {!! Form::label('logo', 'Logo: ') !!}
                        {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                        <div>
                            <?php if (isset($attorney['logo'])) { ?>
                                <img src="{!! url('/').'/uploads/files/'.$attorney['logo'] !!}" alt="profile pic">
                            <?php } ?>

                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('phone', 'Phone: ') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('year', 'Year: ') !!}
                        {!! Form::text('year', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('volume', 'Volume: ') !!}
                        {!! Form::text('volume', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('banner_heading', 'Banner Heading: ') !!}
                        {!! Form::text('banner_heading', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('check_banner', 'Do you banner text in as list or  as plain text?: ') !!}
                        {!! Form::radio('check_banner', 'list' ,true) !!} List  
                        {!! Form::radio('check_banner', 'text') !!} Plain text
                    </div>
                    <div class="field_wrapper">

                        <?php
                        $bannertext = array();
                        $bannertext = json_decode($attorney['banner_text']);
//                                print_r($bannertext);exit();
                        $i = 0;
                        foreach ($bannertext as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('banner_text', 'Banner Text: ') !!}
                                    {!! Form::text('banner_text[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('banner_text[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        ?>


                    </div>

                    <div class="form-group">
                        {!! Form::label('attorney_img', 'Attorney Img: ') !!}
                        {!! Form::file('attorney_img', null, ['class' => 'form-control']) !!}
                        <?php if (isset($attorney['attorney_img'])) { ?>
                            <img src="{!! url('/').'/uploads/files/'.$attorney['attorney_img'] !!}" alt="profile pic">
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        {!! Form::label('footer_logo', 'Footer Logo: ') !!}
                        {!! Form::file('footer_logo', null, ['class' => 'form-control']) !!}
                        <?php if (isset($attorney['footer_logo'])) { ?>
                            <img src="{!! url('/').'/uploads/files/'.$attorney['footer_logo'] !!}" alt="profile pic">
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        {!! Form::label('footer_text', 'Footer Text: ') !!}
                        {!! Form::text('footer_text', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="field_wrapper4">

                        <?php
                        $phone_number = array();
                        $phone_number = json_decode($attorney['phone_number']);
//                                print_r($bannertext);exit();
                        $i = 0;
                        foreach ($phone_number as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('phone_number', 'Phone Number: ') !!}
                                    {!! Form::text('phone_number[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button4" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('phone_number[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        ?>


                    </div>
                      <div class="field_wrapper5">

                        <?php
                        $footer_address = array();
                        $footer_address = json_decode($attorney['footer_address']);
//                                print_r($bannertext);exit();
                        $i = 0;
                        foreach ($footer_address as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('footer_address', 'Footer Address: ') !!}
                                    {!! Form::text('footer_address[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button5" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('footer_address[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        ?>


                    </div>
                    <div class="field_wrapper6">

                        <?php
                        $footer_website = array();
                        $footer_website = json_decode($attorney['footer_website']);
//                                print_r($bannertext);exit();
                        $i = 0;
                        foreach ($footer_website as $value) {

                            if ($i == 0) {
                                ?>
                                <div>
                                    {!! Form::label('footer_website', 'Footer Website: ') !!}
                                    {!! Form::text('footer_website[]', $value, ['class' => 'form-control']) !!}
                                    <button data-toggle="button" style="margin-bottom:7px;" class="btn btn-responsive button-alignment btn-Primary add_button6" type="button">Add</button>
                                </div>                            
                                <?php } else {
                                ?>
                                <div>
                                    {!! Form::text('footer_website[]', $value, ['class' => 'form-control']) !!}
                                    <button class="btn btn-responsive button-alignment btn-Primary remove_button" type="button" style="margin-bottom:7px;" data-toggle="button">Remove</button>
                                </div> 
                                <?php
                            }
                            $i++;
                        }
                        ?>


                    </div>

                    <div class="form-group">
                        {!! Form::label('copyright', 'Copyright: ') !!}
                        {!! Form::text('copyright', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('unsubscribe', 'Unsubscribe: ') !!}
                        {!! Form::text('unsubscribe', null, ['class' => 'form-control']) !!}
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