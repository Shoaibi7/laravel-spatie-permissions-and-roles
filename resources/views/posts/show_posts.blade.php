@extends('layouts.app')
@section('content')
    <!-- Main content -->

    <div class="container">

        <div class="row justify-content-evenly">
            <div class="col-lg-12">

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert" id="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif


            </div>
        </div>




        <table class="table">
            <thead>
                <h3 class="py-4">Posts:
                    @can('write post')
                        <a href="{{ url('post') }}"><button class="btn btn-primary btn-sm">
                                New</button></a>
                    @endcan
                </h3>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data['id'] }}</th>

                        <td>{{ $data['title'] }}</td>
                        <td>{{ $data['body'] }}</td>

                        <td>
                            @can('edit post')
                                <a type="button" href="{{ url('edit_posts', $data->id) }}"
                                    class="btn btn-success btn-sm">Edit</a>
                            @endcan
                            {{-- <a href=""><button class="btn btn-danger btn-sm"
                                    onclick="return confirm ('Are you sure!')">Delete</button></a> --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>

    </div>


    </table>
    <div class="d-flex">
        {{ $datas->links() }}
    </div>
@endsection
