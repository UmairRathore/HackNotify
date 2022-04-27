@extends('layouts.backend.master')
@section('content')






    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                {{--                <nav>--}}
                {{--                    <ol class="breadcrumb p-0 m-b-0">--}}
                {{--                        <li class="breadcrumb-item">--}}
                {{--                            <a href="index.html"><i class="ti ti-home"></i></a>--}}
                {{--                        </li>--}}

                {{--                                                        <li class="breadcrumb-item">--}}
                {{--                                                            Tables--}}
                {{--                                                        </li>--}}
                {{--                                                        <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>--}}
                {{--                    </ol>--}}
                {{--                </nav>--}}
                <div class="col-md-12 m-b-30">

                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Payment Method</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('paymentmethod-list')}}" class="btn btn-primary ms-text-primary">Payment Method List</a>

                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert @if(Session::has('message')) {!! session('message') !!} @endif alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {!! session('msg') !!}
                                </div>
                            @endif

                            <form method="POST" action="{{route('update-paymentmethod' , $paymentmethod->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="currency">Currency</label>
                                        <div class="input-group">
                                            <input type="text" name="currency" class="form-control @error('currency') is-invalid @enderror" value="{{$paymentmethod->currency}}" placeholder="Enter Currency">
                                            @error('currency')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="wallet_number">Detail</label>
                                        <div class="input-group">
                                            <input type="text" name="wallet_number" class="form-control @error('wallet_number') is-invalid @enderror" value="{{$paymentmethod->wallet_number}}" placeholder="Enter Wallet Number">
                                            @error('wallet_number')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            @if($paymentmethod->currency_image)
                                                <img src="{{ asset($paymentmethod->currency_image) }}" width="70px" height="70px" class="img-thumbnail img-fluid blog-img" alt="Image">
                                            @else
                                                <img src="default_image.jpg" width="70px" height="70px" class="img-thumbnail img-fluid blog-img" alt="no image">
                                            @endif

                                            <label for="currency_image">Currency Image</label>
                                            <input type="file" name="currency_image" class="form-control @error('currency_image') is-invalid @enderror">
                                            @error('currency_image')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <input type="Submit" class="btn btn-primary" value="Submit">
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

@endsection





