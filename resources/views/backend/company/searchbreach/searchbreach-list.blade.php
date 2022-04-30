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
                            <h1>Search Breach</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                                                        <a href="{{route('add-searchbreach')}}" class="btn btn-primary ms-text-primary">Add Search Breach</a>

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
                                <table id="searchbreachtable" class="display compact table table-striped table-bordered">

                                    <thead>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    {{--            {{dd($user)}}--}}
{{--                                    @foreach($searchbreach as $items)--}}
{{--                                        --}}{{--                                        {{dd($show)}}--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$items->id}}</td>--}}
{{--                                            <td>{{$items->company_id}}</td>--}}
{{--                                            <td>{{$items->phone}}</td>--}}
{{--                                            <td>{{$items->email}}</td>--}}
{{--                                            <td>{{$items->password}}</td>--}}
{{--                                            <td>--}}
{{--                                                <a href="{{route('delete-searchbreach',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" class="ti ti-trash text-danger"> </a>--}}
{{--                                                --}}{{--                                                <a href="{{route('edit-searchbreach',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" class="ti ti-pencil text-primary"> </a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
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

@section('searchbreachtable')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>

        // alert(plan_cat);

        $('#searchbreachtable').DataTable().destroy();
        var dataTable = $('#searchbreachtable').DataTable({
            'processing': true,
            'serverSide': true,
            //'searching': false, // Remove default Search Control
            'ajax': {
                "dataType": "json",
                "type": "POST",
                "data":{ _token: "{{csrf_token()}}"},
                'url': "{{route('ajaxSearchBreachList')}}",

            },
            "columns": [
                { "data": "id" },
                { "data": "company" },
                { "data": "phone" },
                { "data": "email" },
                { "data": "password" },
                { "data": "action" }
            ]

        });
        $('#searchdata').keyup(function () {
            dataTable.draw();
        });


        $(document).ready(function () {
            // $('#searchbreachtable').DataTable(
            //     {
            //         serverSide: true,
            //         processing: true,
            //         ordering: true,
            //         searching: true,
            //         ajax: {
            //             url: '/searchbreach-list',
            //             type: 'POST'
            //         }
            //     });
        });
    </script>
@endsection

