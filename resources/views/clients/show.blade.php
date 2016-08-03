 @extends('layouts.content')

@section('content')
<div class="container">
                    <div class="col-md-10 col-md-offset-1 " id="clientpage_main">
                        
                                <img src= "/images/9jpg.jpg" id="clientpage_image">
                                <h3>How we helped {{$client->name}}</h4>
                                    <p>{{$client->main}}</p>
                            <div class="panel-footer" id="client_footer"><i class="fa fa-tags" aria-hidden="true"></i> {{$client->tag1}} {{$client->tag2}} {{$client->tag3}}</div>
                            </div>
                        </div>
                        </div>
                        @endsection
