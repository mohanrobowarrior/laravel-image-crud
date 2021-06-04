@extends('layouts.app')
@section('title', 'Celebrity Profile')
@section('content')

    <div class="c-wrapper c-fixed-components">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-dark">
                                    <img class="img-thumbnail rounded" src="/image/{{$celebrity->image}}" alt="{{$celebrity->image}}">
                                    <a href="{{route('celebrities.index')}}" class="btn btn-primary">Home</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card bg-dark p-3">
                                    <h1 class="text-danger m-2 display-4">{{$celebrity->celebrity}}</h1>
                                    <h3 class="text-danger m-2">RESIDENCE: {{$celebrity->residence}}</h3>
                                    <h3 class="text-danger m-2">CITIZENSHIP: {{$celebrity->citizenship}}</h3>
                                </div>
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
