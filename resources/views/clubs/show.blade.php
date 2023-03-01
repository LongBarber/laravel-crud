@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-secondary">
                <div class="card-header d-flex">
                    <h3 class="card-title">Member view</h3>
                    <a href="{{route('clubs.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0 ml-auto">
                        All Members
                    </a>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$club->name}}" disabled id="name" name="name" type="text" class="form-control" placeholder="Club Member Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputClub1">Club</label>
                            <input value="{{$club->club}}" disabled id="club" name="club" type="text" class="form-control" placeholder="Club Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input value="{{$club->city}}" disabled id="city" name="city" type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1">Number</label>
                            <input value="{{$club->telephone}}" disabled id="name" name="name" type="text" class="form-control" placeholder="Number">                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <img src="/images/{{ $club->image }}" alt="img" width="100px">
                            </div>
                        </div>

                        <div>
                            <a href="{{route('clubs.edit',$club->id)}}" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                                Edit Product
                            </a>
                        </div>
                    </div>
            </div>

        </div>
        <!-- /.card-body -->

        </form>
    </div>
    <!-- /.card -->

    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
