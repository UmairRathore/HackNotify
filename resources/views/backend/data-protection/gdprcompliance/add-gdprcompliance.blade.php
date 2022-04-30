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
                            <h1> GDPR Compliance</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('gdprcompliance-list')}}" class="btn btn-primary ms-text-primary">GDPR Compliance List</a>

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

                            <form method="POST" action="{{route('add-gdprcompliance')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="title">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Type Title">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="paragraph">Paragraph</label>
                                        <div class="input-group">
                                            <textarea id="gdpr" class="form-control @error('paragraph') is-invalid @enderror"  style="height:150px" name="paragraph" placeholder="Type Paragraph">{{ old('paragraph') }}</textarea>
                                            @error('paragraph')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="form-group">
                                            <input type="file" name="g_image"  class="form-control @error('g_image') is-invalid @enderror">

                                            @error('g_image')
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



@section('gdpr')
<script>
    ClassicEditor
        .create( document.querySelector( '#gdpr' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
