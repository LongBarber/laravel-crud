@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-auto">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Club Members') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 d-flex align-items-center justify-content-end">
                <div class="ml-auto">
                    <a href="{{route('clubs.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                        <i data-feather="plus"></i> Add New Member
                    </a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- /.content-header -->

<div class="card">
    <div class="card-body p-0">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0 ">
                    <thead>
                    <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Name</th>
                        <th class="pt-0">Image</th>
                        <th class="pt-0">Club</th>
                        <th class="pt-0">City</th>
                        <th class="pt-0">Number</th>
                        <th class="pt-0">      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clubs as $club)
                        <tr>
                            <td>{{$club->id}}</td>
                            <td>{{$club->name}}</td>
                            <td><img alt="img" src="images/{{ $club->image }}" width="100px" height="100px"></td>
                            <td>{{$club->club}}</td>
                            <td>{{$club->city}}</td>
                            <td>{{$club->telephone}}</td>

                            <td>
                                <form action="{{ route('clubs.destroy',$club->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{route('clubs.show', $club->id)}}"><i data-feather="eye"></i> Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('clubs.edit', $club->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
