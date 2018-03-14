@extends('layouts.app')
@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Auth::check())

            @foreach(TCG\Voyager\Models\Category::all() as $category)
                <h1>{{$category->name}}</h1>
                <div class="row">
                    @foreach(App\Document::where('category_id',$category->id)->take(3)->get() as $document)
                        <div class="col-md-4 mb40">
                            <div class="icon-card-center2 text-center">
                                <i class="icon-document fa-4x" style="color: #0083FF"></i>
                                <div class="overflow-hiden">
                                    <h4 class="h6 font400 pt20">{{$document->Title}}</h4>
                                    <p>
                                        <a class="btn btn-primary btn-lg mb5"
                                           href="/storage/{{json_decode($document->path)[0]->download_link}}">
                                            Download</a>

                                </div>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <a class="font600 btn btn-underline" href="/category/{{$category->slug}}" style="    margin-left: auto;
    font-size: medium;">show all</a>
                </div>
            @endforeach
    </div>
    @else
        <h1>Documents public</h1>
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
                                   href="/storage/{{json_decode($document->path)[0]->download_link}}">Download</a>
                        </div>
                        </p>
                    </div>
                </div>

                @php
                    $rowCount++;
                    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                @endphp
            @endforeach
        </div>
        @endif
        </div>
@endsection