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
                            <a href="{{route('aboutus-list')}}" class="btn btn-primary ms-text-primary">About List</a>

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

                            <form method="POST" action="{{route('update-aboutus',$Aboutus->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="questions">Questions</label>
                                        <div class="input-group">
                                            <input type="text" name="questions" value="{{$Aboutus->questions}}" class="form-control  @error('questions') is-invalid @enderror" value="{{old('questions')}}" placeholder="Enter questions">
                                            @error('questions')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="answers">Answer</label>
                                        <div class="input-group">
                                            <textarea class="form-control @error('answers') is-invalid @enderror"   style="height:150px" name="answers" placeholder="answers">{{ $Aboutus->answers , old('answers') }} </textarea>
                                            @error('answers')
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





{{--<script>--}}
{{--    $(function() {--}}
{{--        $('.toggle-class').change(function() {--}}
{{--            var status = $(this).prop('checked') == true ? 1 : 0;--}}
{{--            var id = $(this).data('id');--}}

{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                dataType: "json",--}}
{{--                url: '/changeStatus',--}}
{{--                data: {'status': status, 'id': id},--}}
{{--                success: function(data){--}}
{{--                    console.log(data.success)--}}
{{--                }--}}
{{--            });--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
