@extends('layouts.backend.master')
@section('content')






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
                                        <td>{{$items->id}}</td>
                                        <td>{{$items->questions}}</td>
{{--                                        <td>{{$items->answers}}</td>--}}
                                        <td>{{$items->answers}}</td>

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

@endsection

{{--<script>--}}
{{--    $(function() {--}}
{{--        $('.toggle-class').change(function() {--}}
{{--            var status = $(this).prop('checked') === true ? 1 : 0;--}}
{{--            var id = $(this).data('id');--}}
{{--            console.log(status);--}}
{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                dataType: "json",--}}
{{--                url: '/userChangeStatus',--}}
{{--                data: {'status': status, 'id': id},--}}
{{--                success: function(data){--}}
{{--                    console.log(data.success)--}}
{{--                }--}}
{{--            });--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}








{{--<label class="toggle-switch">--}}
{{--                                                <input type="checkbox" id="status" class="checkbox checkbox_list" data-id="{{ $items->id }}" value="{{ ($items->status == 1) ? 0 : 1 }}" data-url="{{route('status-user',$items->id)}}" name="status" {{ ($items->status == 1) ? 'checked' : '' }}>--}}
{{--                                                <span class="switch-btn"></span>--}}
{{--                                            </label>--}}
{{--                                            <span style="display: none">{{ ($items->status == 1) ? 'Active' : 'false' }}</span>--}}
{{--                                        </td>--}}

{{--<script>--}}
{{--$('#inputStateRes').on('change', function () {--}}
{{--if (this.value == 'Active') {--}}
{{--$(".dataTable").DataTable().column(4).search('Active').draw();--}}
{{--} else if (this.value == 'InActive') {--}}
{{--$(".dataTable").DataTable().column(4).search('false').draw();--}}
{{--} else if (this.value == 'All') {--}}
{{--$(".dataTable").DataTable().column(4).search('').draw();--}}
{{--} else {--}}
{{--$(".datatable").DataTable().search(this.value).draw();--}}
{{--}--}}
{{--});--}}
{{--</script>--}}
