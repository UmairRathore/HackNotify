@extends('layouts.backend.master')


@section('content')

    <style type="text/css">
        td.myrow {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        th.therow {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>



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
                            <h1>Company</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('add-company')}}" class="btn btn-primary ms-text-primary">Add Company</a>

                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>


            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-lg-12">
                            @if(Session::has('message'))
                                <div class="alert @if(Session::has('message')) {!! session('message') !!} @endif alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {!! session('msg') !!}
                                </div>
                            @endif
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered">

                                    <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Industry</th>
                                    <th class="therow">Date of Data Breach</th>
                                    <th class="therow">Number of Leaked Accounts</th>
                                    <th>Website</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    {{--            {{dd($user)}}--}}
                                    @foreach($company as $items)
                                        {{--                                        {{dd($show)}}--}}
                                        <tr>
                                            <td>{{$items->id}}</td>
                                            <td >{{$items->name}}</td>
                                            <td class="myrow">{{$items->industry}}</td>
                                            <td class="myrow">{{$items->date_of_data_breach}}</td>
                                            <td class="myrow">{{$items->number_of_leaked_accounts}}</td>
                                            <td class="myrow">{{$items->website}}</td>
                                            <td class="myrow">{{$items->detail}}</td>
                                            <td>
                                                <a href="{{route('delete-company',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" class="ti ti-trash text-danger"> </a>
                                                <a href="{{route('edit-company',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" class="ti ti-pencil text-primary"> </a>
                                            </td>
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("td.myrow").mouseenter(function() {
                $(this).attr("title", $(this).html());
            });

        });
        $(function() {
            $("th.therow").mouseenter(function() {
                $(this).attr("title", $(this).html());
            });

        });
    </script>



@endsection
