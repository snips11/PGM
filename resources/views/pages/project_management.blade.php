@extends('layouts.content')
@section('title', 'Project Management')
@section('description', 'Project Management')
@section('content')
<div class="row" id="page_header">
        <div class="col-md-12 ">
            <img src="/images/ParsonsGreenManagement.jpg">
        </div>
</div>
<div class="container">
    <div class="row" id="con_head">
        <div class="col-xs-12 ">
            <h2 style="font-weight:300">Project Management</h2>
        </div>
    </div>
    <div class="row" id="page_head">
        <div class="col-xs-12 col-md-8" >
            <div class="col-xs-12" id="page_con">
                <h4>Do you have an idea that you need some guidance to get off the ground?</br></br> We can advise and manage the processes including using our network of third party suppliers when needed, everything from specialist hosting solutions to e-commerce and payment handling.</br></br><strong>Basically you supply us with a plan and we make it happen in the most cost effective way for your business.</strong></h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </div>
                <p>We bring your thoughts into reality</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div>
                <p>Save time and increase efficeincy</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <p>Use our established network</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-phone" aria-hidden="true" style="margin-top:18px;"></i>
                </div>
                <p>Easily contactable</p>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            {!! Form::open(array('route' => 'contact.store', 'data-parsley-validate'=> '', 'method' => 'post')) !!}
    {{ Form::label('name', 'Name')}}
    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    
    {{ Form::label('email', 'Email')}}
    {{ Form::email('email', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    
    {{ Form::label('number', 'Contact Number')}}
    {{ Form::tel('number', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    
    {{ Form::label('message', 'Message')}}
    {{ Form::textarea('main', null, ['size' => '30x5','class' => 'form-control', 'required' => '','maxlength'=>'255']) }}
    </br>
    {{ Form::submit('SEND MESSAGE', array('class' => 'btn btn-default', 'id' => 'create_btn'))}}
{!! Form::close() !!}
</br>
<?php echo Session::get('success');?>
        </div>
    </div>
</div>    
@endsection