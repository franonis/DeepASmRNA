@extends('layouts.app')
@section('navbar')
  @include('partials.navbar')
@endsection
@section('content')
<div class="container content">
    <div class="row">
        <h2>Current Resources</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><i>Cucumis sativus</i> L. var. <i>sativus</i> cv. 9930</h3>
                </div>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Genome</h5>
                        @foreach($domgenemo as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach

                    <ul class="list-group"><h5>&nbsp;&nbsp;AS_events</h5>
                            @foreach($domas as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Isoform Features</h5>
                            @foreach($domiso as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Functions</h5>
                            @foreach($domfunc as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><i>Cucumis sativus</i> var. <i>hardwickii</i> PI 183967</h3>
                </div>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Genome</h5>
                           @foreach($wildgenemo as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    <ul class="list-group"><h5>&nbsp;&nbsp;AS_events</h5>
                            @foreach($wildas as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Isoform Features</h5>
                            @foreach($wildiso as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-group"><h5>&nbsp;&nbsp;Functions</h5>
                            @foreach($wildfunc as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Homologs</h3>
                </div>
                <ul class="list-group"><h5>&nbsp;&nbsp;Functions</h5>
                            @foreach($homologs as $name => $description)
                            <li class="list-group-item">File:
                                <a href="{{ url('download/file').'/' }}{{$name}}">
                                   {{$name}}
                                    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                                </a>
                                <small>{{$description}}</small>
                            </li>
                        @endforeach
                    </ul>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
@section('footer')
  @include('partials.footer')
@endsection
