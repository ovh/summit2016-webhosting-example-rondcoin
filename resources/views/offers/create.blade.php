@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submit a new offer</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong> Some errors occurs:</strong>
                            <ul>
                              @foreach ( $errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/offer" enctype="multipart/form-data" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="title" />
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea name="text" class="form-control" id="text" placeholder="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="10.0" />
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" />
                        </div>
                        <button type="submit" class="btn btn-default">Send the offer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
