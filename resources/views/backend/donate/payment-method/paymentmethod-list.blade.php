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
                            <h1>Payment-Method</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('add-paymentmethod')}}" class="btn btn-primary ms-text-primary">Add Payment-Method</a>

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
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered" >

                                    <thead>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Currency</th>
                                    <th>Wallet Number</th>
{{--                                                                    <th>Status</th>--}}
                                    <th>Action</th>
                                    </thead>
                                    <tbody>

                                    @foreach($paymentmethod as $items)
                                        <tr>

                                            <td>{{$items->id}}</td>

                                            <td>
                                                @if($items->currency_image)
{{--                                                    {{dd($items->currency_image)}}--}}
                                                    <img src="{{ asset($items->currency_image) }}" width="70px" height="70px"
                                                         class="img-thumbnail img-fluid blog-img" alt="Image">
                                                @else
                                                    <img src="default_image.png" width="70px" height="70px"
                                                         class="img-thumbnail img-fluid blog-img" alt="no image">
                                                @endif
                                            </td>

                                            <td>{{$items->currency}}</td>
                                            <td>{{$items->wallet_number}}</td>
                                            {{--                                        <td>{{$items->answers}}</td>--}}

                                            <td>
                                                <a href="{{route('delete-paymentmethod',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" class="ti ti-trash text-danger"> </a>

                                                <a href="{{route('edit-paymentmethod',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" class="ti ti-pencil text-primary"> </a>
                                            </td>
                                            {{--                                                    <td><input data-id="{{$items->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $items->status ? 'checked' : '' }}></td>--}}

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

@endsection
