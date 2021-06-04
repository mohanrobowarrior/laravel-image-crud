@extends('layouts.app')
@section('title', 'Top Celebrity')
@section('content')

    <div class="c-wrapper c-fixed-components">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <h1 class="text-info text-center mb-3 display-4">World Top Class Celebrity</h1>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="{{route('celebrities.create')}}" class="btn btn-primary">Add New Celebrity</a>
                                    </div>

                                    <div class="card-body">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                        <table class="table table-responsive-sm table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Celebrity Image</th>
                                                <th>Celebrity Name</th>
                                                <th>Residence</th>
                                                <th>Citizenship</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($celebrities as $celebrity)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><img src="/image/{{ $celebrity->image }}" alt="{{ $celebrity->celebrity }}" width="100px"></td>
                                                    <td>{{ $celebrity->celebrity }}</td>
                                                    <td>{{ $celebrity->residence }}</td>
                                                    <td>{{ $celebrity->citizenship }}</td>
                                                    <td>
                                                        <form action="{{route('celebrities.destroy', $celebrity->id)}}" method="post">
                                                            <a href="{{route('celebrities.show', $celebrity->id)}}" class="btn btn-info">Show</a>
                                                            <a href="{{route('celebrities.edit', $celebrity->id)}}" class="btn btn-success">Edit</a>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        {{ $celebrities->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
