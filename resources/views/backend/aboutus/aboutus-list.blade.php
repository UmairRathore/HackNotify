@extends('layouts.backend.master')
@section('content')




    <style type="text/css">
        td.myrow {
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

            <div class="col-md-12 m-b-30">

                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1> About</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <a href="{{route('add-aboutus')}}" class="btn btn-primary ms-text-primary">Add About</a>

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
                            <table id="datatable" class="display compact table table-striped table-bordered" >

                                <thead>
                                <th>ID</th>
                                <th>Questions</th>
                                <th>Answers</th>
{{--                                <th>Status</th>--}}
                                <th>Action</th>
                                </thead>
                                <tbody>

                                @foreach($Aboutus as $items)
                                    <tr>
                                        <td class="mrow">{{$items->id}}</td>
                                        <td class="myrow">{{$items->questions}}</td>
{{--                                        <td>{{$items->answers}}</td>--}}
                                        <td class="myrow">{{$items->answers}}</td>

                                        <td>
                                            <a href="{{route('delete-aboutus',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Delete" class="ti ti-trash text-danger"> </a>

                                            <a href="{{route('edit-aboutus',$items->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" class="ti ti-pencil text-primary"> </a>
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

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("td.myrow").mouseenter(function() {
                $(this).attr("title", $(this).html());
            });
       
        });
    </script>
@endsection

{{--@section('aboutustable')--}}
{{--<script type="text/javascript"--}}
{{--            src="'https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js')}}">--}}
{{--    $('#aboutustable').DataTable( {--}}
{{--        columnDefs: [ {--}}
{{--            targets: 0,--}}
{{--            render: function ( data, type, row ) {--}}
{{--                return data.substr( 0, 20 );--}}
{{--            }--}}
{{--        } ]--}}
{{--    } );--}}
{{--</script>--}}

{{--@endsection--}}


