@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-danger">
                <div class="card-header d-flex">
                    <h3 class="card-title">Add a member</h3>
                    <a href="{{route('clubs.index')}}" class="btn btn-primary btn-icon-text mb-2 mb-md-0 ml-auto">
                        All Members
                    </a>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('clubs.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputClub1">Club</label>
                            <input name="club" type="text" class="form-control" id="exampleInputClub1" placeholder="Enter Club">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input name="city" type="text" class="form-control" id="exampleInputCity1" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1">Number</label>
                            <input name="telephone" type="text" class="form-control" id="exampleInputNumber1" placeholder="Enter Number">
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input id="image" name="image" type="file" class="form-control">
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
