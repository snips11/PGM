@extends('layouts.app')

@section('content')

@if(Session::has('success'))

<div class="alert alert-success" role="alert">
<strong>Success:</strong> {{Session::get('success')}}
</div>

@endif

<div class="alert alert-danger" role="alert">
<strong>Errors:</strong>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>

@endif