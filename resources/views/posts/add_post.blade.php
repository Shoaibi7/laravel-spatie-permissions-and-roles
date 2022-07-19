@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row justify-content-evenly">
                <div class="col-md-8">
                    <div class="py-2">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert" id="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                    </div>
                    <h3 class="py-4">Posts</h3>
                    <form action="{{ url('add_post') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                            <span class="text-danger">
                                @error('body')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Submit</button><br><br>
                    </form>

                    <a href="{{ route('show_posts') }}"> <button class="btn btn-black btn-sm">
                            Back</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
