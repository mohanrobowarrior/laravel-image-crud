@extends('layouts.app')
@section('title', 'Celebrity Profile')
@section('content')
<div class="c-wrapper c-fixed-components">
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="bg-dark text-secondary px-4 py-5 text-center">
                        <div class="py-5">
                            <h1 class="display-5 fw-bold text-white">Celebrity Only</h1>
                            <div class="col-lg-6 mx-auto">
                                <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                    <a type="button" href="{{ route('celebrities.index') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">See Celebrities<a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
@endsection