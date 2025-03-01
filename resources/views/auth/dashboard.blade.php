@extends('layouts.aap')

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>

    @elseif(session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalOrders ?? 0 }}</h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $todayOrders}}</h3>
                            <p>Today's Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
                
                @php
                    $contact=\App\Models\Lead::count();
                @endphp
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $contact }}</h3>
                            <p>Total Contacts</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>



                
                
                @php
                $counterVisitor = \App\Models\Visitor::count();
            @endphp
            
            
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card shadow-sm border-0 bg-warning text-white">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="mb-0">{{ $counterVisitor }}</h3>
                                <p class="mb-0">Total Visitors</p>
                               
                            </div>
                            <div class="icon">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                           
                        </div>
                        <a href="{{ route('visitors.index') }}" class="btn btn-danger w-100">GetMoreDetails

                        </a>
                    </div>
                </div>
            
            

                
                
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
