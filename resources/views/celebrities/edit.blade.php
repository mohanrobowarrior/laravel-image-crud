@extends('layouts.app')
@section('title', 'Edit Celebrity')
@section('content')

    <div class="c-wrapper c-fixed-components">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Add New Celebrity</h3>
                                        <a href="{{route('celebrities.index')}}" class="btn btn-outline-primary">Back</a>
                                    </div>
                                    <form class="form-horizontal" action="{{route('celebrities.update', $celebrity->id)}}" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="celebrity">Celebrity Name</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="celebrity" class="@error('celebrity') is-invalid @enderror" value="{{$celebrity->celebrity}}" placeholder="Enter celebrity name..">
                                                    @error('celebrity')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="residence">Residence</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="residence" class="@error('residence') is-invalid @enderror" value="{{$celebrity->residence}}" placeholder="Enter celebrity residence..">
                                                    @error('residence')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="citizenship">Citizenship</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="citizenship" class="@error('citizenship') is-invalid @enderror" value="{{$celebrity->citizenship}}" placeholder="Enter celebrity citizenship..">
                                                    @error('citizenship')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="image">Image</label>
                                                <div class="col-md-9">
                                                    <input type="file" name="image" class="@error('image') is-invalid @enderror">
                                                    <img src="/image/{{$celebrity->image}}" alt="" width="200px">
                                                    @error('image')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
