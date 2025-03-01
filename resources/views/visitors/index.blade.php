@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Display Error Message -->
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Display Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Visitors Table -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Website Visitors</h2>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>IP Address</th>
                                        <th>User Agent</th>
                                        <th>Country</th>
                                        <th>Visited At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($visitors as $visitor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $visitor->ip_address }}</td>
                                            <td>{{ $visitor->user_agent }}</td>
                                            <td>{{ $visitor->country }}</td>
                                            <td>
                                                @if($visitor->created_at)
                                                    {{ $visitor->created_at->format('d M Y, h:i A') }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            
                                            {{-- <td>{{ $visitor->created_at->format('d M Y, h:i A') }}</td> --}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No visitors found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="card-footer">
                        {{ $visitors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
