@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Welcome {{Auth::user()->name}}!</h1>
        <h2>Announcements</h2>
        @foreach($announcements as $announcement)
            <div class="alert alert-primary" role="alert">
                <h1 class="text-white">{{$announcement->Title}}</h1>
                <p class="text-white text-muted">{{$announcement->Content}}</p>
            </div>
        @endforeach
        <h2>Shared Documents</h2>
        <div class="row">
            @php
                $numOfCols = 3;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols;
            @endphp
            @foreach($documents as $document)
                <div class="col-md-{{$bootstrapColWidth}} ?> mb40">
                    <div class="icon-card-center2 text-center">
                        <i class="icon-document fa-4x" style="color: #0083FF"></i>
                        <div class="overflow-hiden">
                            <h4 class="h6 font400 pt20">{{$document->Title}}</h4>
                            <p>
                                <a class="btn btn-primary btn-lg mb5"
                                   href="/storage/{{json_decode($document->path)[0]->download_link}}">Download</a></div>
                        </p>
                    </div>
                </div>

        @php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
        @endphp
        @endforeach
        </div>
        <h2>Hotlinks</h2>
        <div class="row">
            <div class="col-md-4 mb40">
                <div class="icon-card-center text-center">
                    <i class="icon-envelope text-white bg-primary icon-round-60"></i>
                    <div class="overflow-hiden">
                        <h4 class="h6 font400 pt20">Google Mail for business</h4>
                        <p class="mb20">

                        </p>
                        <a href="https://mail.google.com" class="btn btn-underline">Google Mail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb40">
                <div class="icon-card-center text-center">
                    <i class="far fa-id-card text-white bg-primary icon-round-60"></i>
                    <div class="overflow-hiden">
                        <h4 class="h6 font400 pt20">Membership card</h4>
                        <p class="mb20">
                        </p>
                        <a href="/card" class="btn btn-underline">Generate membership card</a>
                    </div>
                </div>
            </div>
        </div>
        <h2>Member only pages</h2>
        @foreach($pages as $page)
            <a href="/pages/{{$page->slug}}">{{$page->title}}</a>
        @endforeach
    </div>
@endsection