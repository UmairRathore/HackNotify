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
                            <h1> Cards</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('cards-list')}}" class="btn btn-primary ms-text-primary">Cards List</a>

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


                            <form method="POST" action="{{route('add-cards')}}" enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="title">title</label>
                                        <div class="input-group">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Enter Title" >
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="paragraph">paragraph</label>
                                        <div class="input-group">
                                            <input type="text" name="paragraph" class="form-control @error('paragraph') is-invalid @enderror" value="{{old('paragraph')}}"  placeholder="Type Paragraph" >
                                            @error('paragraph')
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
                                            <input type="file" name="card_image" value="{{old('card_image')}}" class="form-control @error('card_image') is-invalid @enderror">
                                            @error('card_image')
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





