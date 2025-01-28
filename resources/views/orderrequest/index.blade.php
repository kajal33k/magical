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
                            <h1>OrderRequest</h1>
                            {{-- <a href="{{ route('orderRequest.create') }}" class="btn btn-light">Create new orderRequest</a> --}}
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
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>House/Village</th>
                                        <th>Area/Landmark</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Pin Code</th>
                                        <th>Color</th>
                                        <th>Created At</th>
                                        {{-- <th>Updated At</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orderRequestData as $orderRequest)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $orderRequest->name }}</td>
                                            <td>{{ $orderRequest->email }}</td>
                                            <td>{{ $orderRequest->mobile_number }}</td>
                                            <td>{{ $orderRequest->house_village_name }}</td>
                                            <td>{{ $orderRequest->area_landmark }}</td>
                                            <td>{{ $orderRequest->state }}</td>
                                            <td>{{ $orderRequest->city }}</td>
                                            <td>{{ $orderRequest->pin_code }}</td>
                                            <td>{{ ucfirst($orderRequest->color) }}</td>
                                            <td>{{ $orderRequest->created_at->format('d-m-Y H:i:s') }}</td>
                                            {{-- <td>{{ $orderRequest->updated_at->format('d-m-Y H:i:s') }}</td> --}}
                                            <td>
                                                <a href="{{ route('orderRequest.delete', $orderRequest->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="13" class="text-center">No orders found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                        {{ $orderRequestData->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
