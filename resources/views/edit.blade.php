@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>Edit Image2</h1>
            <img src="/image.jpg" alt="" class="img-thumbnail gallery-image">
            <form action="" method="post">
                <div class="form-control">
                    <input type="file">
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection