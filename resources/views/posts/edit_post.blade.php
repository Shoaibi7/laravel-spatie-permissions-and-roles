<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
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
                    <form action="{{ url('update_post', $datas->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $datas->title }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <input class="form-control" id="body" name="body" value="{{ $datas->body }}">
                            <span class="text-danger">
                                @error('body')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Update</button><br><br>
                    </form>

                    <a href="{{ route('show_posts') }}"> <button class="btn btn-black btn-sm">
                            Back</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
