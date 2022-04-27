@extends('.layouts.backend.master')


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
                            <h1>Add Company</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('company-list')}}" class="btn btn-primary ms-text-primary">List Company </a>

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


                            <form method="POST" action="{{route('add-company')}}" enctype="multipart/form-data">
                                @csrf

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 mb-3">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="file" name="rb_image" value="{{old('rb_image')}}" class="form-control @error('rb_image') is-invalid @enderror">--}}
{{--                                            @error('rb_image')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                <label for="file"> Choose CSV</label>
                                <input type="file" name="file" class="form-control">
                                <br>
                                <button type="Submit" class="btn btn-primary" value="Submit">Import User Data</button>
                                </div>


{{--                                <div class="row ">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="company_id">Company ID</label>--}}
{{--                                        <div class="input-group">--}}
{{--                                            <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror">--}}
{{--                                                <option disabled selected>Select Company ID</option>--}}
{{--                                                --}}{{--                                                {{dd($company)}}--}}
{{--                                                @foreach($company as $items)--}}
{{--                                                    --}}{{--                                                                                                                                                            {{dd($items)}}--}}
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
{{--                                    --}}{{--                                    <div class="col-md-6 mb-3">--}}
{{--                                    --}}{{--                                        <label for="company_id">Company_ID</label>--}}
{{--                                    --}}{{--                                        <div class="input-group">--}}
{{--                                    --}}{{--                                            <input type="text" name="company_id" class="form-control @error('company_id') is-invalid @enderror" value="{{ old('company_id') }}" placeholder="Enter  Company ID ">--}}
{{--                                    --}}{{--                                            @error('company_id')--}}
{{--                                    --}}{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                    --}}{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                    --}}{{--                                            </span>--}}
{{--                                    --}}{{--                                            @enderror--}}
{{--                                    --}}{{--                                        </div>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    <div class="col-md-6 mb-3">--}}
{{--                                        <label for="name">name</label>--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter name ">--}}
{{--                                            @error('name')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 mb-3">--}}
{{--                                        <label for="phone">Phone</label>--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror bi-eye-slash" value="{{ old('phone') }}" placeholder="Enter Phone">--}}
{{--                                            @error('phone')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 mb-3">--}}
{{--                                        <label for="password">Password</label>--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror " value="{{ old('password') }}" placeholder="Enter Password">--}}
{{--                                            @error('password')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <input type="Submit" class="btn btn-primary" value="Submit">--}}
{{--                                </div>--}}
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



