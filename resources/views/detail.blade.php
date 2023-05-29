@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">

    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-lg-1"></div>

            <div class="col-lg-6">
                <div class="rectangle" style="background-color:#FEB200">
                    <h2 style="color:#000000">Book Detail</h2>
                </div>
                @foreach($b as $b)
                <h5>Title : {{ $b->title }}</h5>
                <h5>Author : {{ $b->author }}</h5>
                <h5>Publisher : {{ $b->publisher }}</h5>
                <h5>Year : {{ $b->year }}</h5>
                <h5>Description :</h5>
                <h5>{{ $b->description }}</h5>
                @endforeach
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-2">
                <div class="rectangle" style="background-color:#FEB200">
                    <h2 style="color:#000000">Category</h2>
                </div>
                @foreach($catnav as $c)
                    <a href="{{ route('category', $c->id) }}" class="" style="text-decoration:none; font-size:20px;color:#000000">{{ $c->category }} <br></a>
                @endforeach
            </div>

            <div class="col-lg-1"></div>
        </div>
    </div>

</div>
@endsection