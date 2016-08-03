<div class="container">
{!! Form::open(array('route' => 'client.store', 'data-parsley-validate'=> '','files' => true, 'method' => 'post')) !!}
    {{ Form::label('name', 'Business Name')}}
    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '','maxlength'=>'255'))}}
    
    {{ Form::label('text', 'Text')}}
    {{ Form::textarea('main', null, ['size' => '30x5','class' => 'form-control', 'required' => '','maxlength'=>'255']) }}
    
    {{ Form::label('tag1', 'Tag 1')}}
    {{ Form::text('tag1', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    
    {{ Form::label('tag2', 'Tag 2')}}
    {{ Form::text('tag2', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    
    {{ Form::label('tag3', 'Tag 3')}}
    {{ Form::text('tag3', null, array('class' => 'form-control', 'maxlength'=>'255'))}}
    
    {{ Form::label('image', 'Image')}}
    {{Form::file('image')}}
    
    
    {{ Form::submit('Create Client Post', array('class' => 'btn btn-success', 'id' => 'create_btn'))}}
{!! Form::close() !!}
</div>
@endsection