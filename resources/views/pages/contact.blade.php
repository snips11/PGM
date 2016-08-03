@extends('layouts.content')

@section('content')
<div class="row" id="map">
        <div class="col-md-12 ">
            
        </div>
    </div> 
<div class="container">
    <div class="row" id="con_head">
        <div class="col-md-12 ">
            <h2>Get in touch with us</h2>
        </div>
    </div>
    <div class="row" id="con_con">
        <div class="col-sm-6 ">
            <p style="line-height:24px;">
                    <strong>Parsons Green Media</strong></br>
                    Third Floor, 1 Old Market Avenue</br>
                    Chichester</br>
                    West Sussex</br>
                    PO19 1SP</br>
                    </br>
                    <a href="tel:02036933769"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 020 3693 3769</a></br>
                    <a href="mailto:info@parsonsgreenmedia.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; info@parsonsgreenmedia.com</a>
                    </br>
                    </br>
                    <a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true" id="con_soc"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true" id="con_soc"></i></a>
                </p>
        </div>
  
        <div class="col-sm-6 " id="con_form">
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
@if(Session::has('success'))
<!-- Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="memberModalLabel">Thank you for message, we will be in touch soon!</h4>

            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
<strong>Success:</strong> <?php echo Session::get('success');?>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endif
        </div>
    </div>
</div>       
@endsection