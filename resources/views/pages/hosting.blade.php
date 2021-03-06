@extends('layouts.content')

@section('content')
<div class="row" id="page_header">
        <div class="col-md-12 ">
            <img src="/images/ParsonsGreenPrint.jpg">
        </div>
</div>
<div class="container">
    <div class="row" id="con_head">
        <div class="col-xs-12 ">
            <h2>Print 	&amp; Design</h2>
        </div>
    </div>
    <div class="row" id="page_head">
        <div class="col-xs-12 col-md-8" >
            <div class="col-xs-12" id="page_con">
                <h4>Print</h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-cloud" aria-hidden="true"></i>
                </div>
                <p>We bring your thoughts into reality</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div>
                <p>our expericed team work to your timescale</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-desktop" aria-hidden="true" style="margin-top:18px;"></i>
                </div>
                <p>using the latest design tecnhology</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3" id="page_icons">
                <div class="page_icons_background">
                <i class="fa fa-newspaper-o" aria-hidden="true" style="margin-top:18px;"></i>
                </div>
                <p>before sourcing the best print prices</p>
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
<strong>Success:</strong> <?php echo Session::get('success');?>
        </div>
    </div>
</div>    
@endsection