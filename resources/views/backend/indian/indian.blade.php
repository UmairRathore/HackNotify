@extends('layouts.backend.master')


@section('content')
    {{--    --}}
    {{--    <div class="app-main" id="main">--}}
    {{--        <!-- begin container-fluid -->--}}
    {{--        <div class="container-fluid">--}}
    {{--            <!-- begin row -->--}}
    {{--            <div class="row">--}}
    {{--                --}}{{--                <nav>--}}
    {{--                --}}{{--                    <ol class="breadcrumb p-0 m-b-0">--}}
    {{--                --}}{{--                        <li class="breadcrumb-item">--}}
    {{--                --}}{{--                            <a href="index.html"><i class="ti ti-home"></i></a>--}}
    {{--                --}}{{--                        </li>--}}

    {{--                --}}{{--                                                        <li class="breadcrumb-item">--}}
    {{--                --}}{{--                                                            Tables--}}
    {{--                --}}{{--                                                        </li>--}}
    {{--                --}}{{--                                                        <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>--}}
    {{--                --}}{{--                    </ol>--}}
    {{--                --}}{{--                </nav>--}}
    {{--                <div class="col-md-12 m-b-30">--}}

    {{--                    <!-- begin page title -->--}}
    {{--                    <div class="d-block d-sm-flex flex-nowrap align-items-center">--}}
    {{--                        <div class="page-title mb-2 mb-sm-0">--}}
    {{--                            <h1>Indian Blood Donors</h1>--}}
    {{--                        </div>--}}
    {{--                        <div class="ml-auto d-flex align-items-center">--}}
    {{--                            <a href="{{route('add-indian-blood-donors')}}" class="btn btn-primary ms-text-primary">Add Indian Blood Donors</a>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- end page title -->--}}
    {{--                </div>--}}
    {{--            </div>--}}


    {{--            <!-- end row -->--}}
    {{--            <!-- begin row -->--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="card card-statistics">--}}
    {{--                        <div class="card-body">--}}
    {{--                            <div class="datatable-wrapper table-responsive">--}}
    {{--                                <table id="datatable" class="display compact table table-striped table-bordered">--}}

    {{--                                    <thead>--}}
    {{--                                    <th>ID</th>--}}
    {{--                                    <th>Company</th>--}}
    {{--                                    <th>logo</th>--}}
    {{--                                    <th>Industry</th>--}}
    {{--                                    <th>Phone Number</th>--}}
    {{--                                    <th>Email</th>--}}
    {{--                                    <th>Date of Data Breach</th>--}}
    {{--                                    <th>Number of Leaked Accounts</th>--}}
    {{--                                    <th>Website</th>--}}
    {{--                                    <th>Details</th>--}}
    {{--                                    <th>Action</th>--}}
    {{--                                    </thead>--}}
    {{--                                    <tbody>--}}
    {{--                                    --}}{{--            {{dd($user)}}--}}
    {{--                                    @foreach($data as $items)--}}
    {{--                                        --}}{{--                                        {{dd($show)}}--}}
    {{--                                        <tr>--}}
    {{--                                            <td>{{$items->id}}</td>--}}
    {{--                                            <td>{{$items->company}}</td>--}}
    {{--                                            <td>{{$items->logo}}</td>--}}
    {{--                                            <td>{{$items->industry}}</td>--}}
    {{--                                            <td>{{$items->phones}}</td>--}}
    {{--                                            <td>{{$items->emails}}</td>--}}
    {{--                                            <td>{{$items->date_of_data_breach}}</td>--}}
    {{--                                            <td>{{$items->number_of_leaked_accounts}}</td>--}}
    {{--                                            <td>{{$items->website}}</td>--}}
    {{--                                            <td>{{$items->detail}}</td>--}}
    {{--                                            <td>--}}
    {{--                                                <a href="{{route('delete-indian-blood-donors',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" class="ti ti-trash text-danger"> </a>--}}
    {{--                                                <a href="{{route('edit-indian-blood-donors',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" class="ti ti-pencil text-primary"> </a>--}}
    {{--                                            </td>--}}
    {{--                                        </tr>--}}
    {{--                                    @endforeach--}}
    {{--                                    </tbody>--}}
    {{--                                </table>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- end row -->--}}
    {{--        </div>--}}
    {{--        <!-- end container-fluid -->--}}
    {{--    </div>--}}



@endsection
