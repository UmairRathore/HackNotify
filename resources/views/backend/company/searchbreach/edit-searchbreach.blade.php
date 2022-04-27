@extends('.layouts.backend.master')


@section('content')

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
{{--                                <nav>--}}
{{--                                    <ol class="breadcrumb p-0 m-b-0">--}}
{{--                                        <li class="breadcrumb-item">--}}
{{--                                            <a href="index.html"><i class="ti ti-home"></i></a>--}}
{{--                                        </li>--}}

{{--                                                                        <li class="breadcrumb-item">--}}
{{--                                                                            Tables--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>--}}
{{--                                    </ol>--}}
{{--                                </nav>--}}
                <div class="col-md-12 m-b-30">

                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Edit Search Breach</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('searchbreach-list')}}" class="btn btn-primary ms-text-primary">Search Breach List</a>

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

                            <form method="POST" action="{{route('update-searchbreach',$searchbreach->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

{{--                                <div class="row ">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="company_id">Company ID</label>--}}
{{--                                        <div class="input-group">--}}
{{--                                            <select name="company_id" id="company_id"  class="form-control @error('company_id') is-invalid @enderror">--}}
{{--                                                <option disabled selected> {{$searchbreach->id}}</option>--}}
{{--                                                                                                {{dd($company)}}--}}
{{--                                                @foreach($company as $items)--}}
{{--                                                                                                                                                                                                                {{dd($items)}}--}}
{{--                                                    <option value="{{$items->id}}" @if($items->id==old('company_id')) selected @endif>{{$items->id}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            @error('company_id')--}}
{{--                                            <div class="invalid-feedback">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </div>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                                                        <div class="col-md-6 mb-3">--}}
{{--                                                                            <label for="company_id">Company_ID</label>--}}
{{--                                                                            <div class="input-group">--}}
{{--                                                                                <input type="text" name="company_id" class="form-control @error('company_id') is-invalid @enderror" value="{{ old('company_id') }}" placeholder="Enter  Company ID ">--}}
{{--                                                                                @error('company_id')--}}
{{--                                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                                    <strong>{{ $message }}</strong>--}}
{{--                                                                                </span>--}}
{{--                                                                                @enderror--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{ $searchbreach->email ,old('email') }}" placeholder="Enter Email ">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="phone">Phone</label>
                                    <div class="input-group">
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror bi-eye-slash" value="{{ $searchbreach->phone,old('phone') }}" placeholder="Enter Phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror " value="{{ $searchbreach->password ,old('password') }}" placeholder="Enter Password">
                                            @error('password')
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


@section('select2company')
    <script>
        $(document).ready(function () {
            $('.select2company').select2()({});
        });
    </script>
@endsection



