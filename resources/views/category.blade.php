@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">

    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-lg-1"></div>

            <div class="col-lg-6">
                <div class="rectangle" style="background-color:#FEB200">
                    <h2 style="color:#000000">{{ $cat->category }}</h2>
                </div>
                <table class="table">
                    <thead style="background-color:#d3d3d3">
                        <tr>
                            <th scope="col" class="fw-bold">Title</th>
                            <th scope="col" class="fw-bold">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if($c->first()->{'count(books.id)'} == 0)
                        <tr class="bg-light" style="font-size:20px;"><td>No Data</td></tr>
                        @else
                        @foreach($books as $b)
                        <tr class="bg-light" style="font-size:20px;">
                            <td><a href="{{ route('detail', $b->id_book) }}" class="" style="text-decoration:none; color:#000000">{{ $b->title }}</a></td>
                            <td>{{ $b->author }}</td>
                        </tr>
                        @endforeach
                        @endif
                        
                    </tbody>
                </table>

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