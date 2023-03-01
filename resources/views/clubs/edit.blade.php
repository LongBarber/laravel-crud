@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header d-flex">
                    <h3 class="card-title">Edit member</h3>
                    <a href="{{route('clubs.index')}}" class="btn btn-warning btn-icon-text mb-2 mb-md-0 ml-auto">
                        All Members
                    </a>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$club->name}}" id="name" name="name" type="text" class="form-control" placeholder="Member Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputClub1">Club</label>
                            <input value="{{$club->club}}" id="club" name="club" type="text" class="form-control" placeholder="Club Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input value="{{$club->city}}" id="city" name="city" type="text" class="form-control" placeholder="City Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1">Number</label>
                            <input value="{{$club->telephone}}" id="number" name="number" type="text" class="form-control" placeholder="Member Name">
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" name="image" type="file" class="form-control">
                            <img class="mt-2" src="/images/{{ $club->image }}" width="300px">
                        </div>
                    </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    <!-- /.card -->

    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
