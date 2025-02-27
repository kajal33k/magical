@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Appointment</h1>
                            <a href="{{ route('appointment.create') }}" class="btn btn-light">Create new appointment</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>name</th>
                                    <th>email</th>
                                    <th>number</th>
                                    <th>msg</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($appointmentData as $appointment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{$appointment->name}}</td>
                                        <td>{{$appointment->email}}</td>
                                        <td>{{$appointment->number}}</td>
                                        <td>{!! $appointment->msg !!}</td>
{{--                                        <td>{{ $appointment->date ? $appointment->date->format('Y-m-d') : 'Not specified' }}</td>--}}

                                        <td>
{{--                                            <a href="{{ route('banner.edit', $appointment->id) }}" class="btn btn-primary">Edit</a>--}}
                                            <a href="{{ route('appointment.delete', $appointment->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('appointment.duplicate', $appointment->id) }}" class="btn btn-warning">Duplicate</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
