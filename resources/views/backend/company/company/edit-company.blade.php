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
                            <h1>Edit Company</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <a href="{{route('company-list')}}" class="btn btn-primary ms-text-primary">Company List</a>

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

                            <form method="POST" action="{{route('update-company',$company->id)}}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                            <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ $company->name ,old('name') }}" placeholder="Enter Name ">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="industry">Industry</label>
                                        <div class="input-group">
                                            <input type="text" name="industry" class="form-control @error('industry') is-invalid @enderror bi-eye-slash" value="{{ $company->industry,old('industry') }}" placeholder="Enter industry">
                                            @error('industry')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="date_of_data_breach">Date Of Data Breach</label>
                                        <div class="input-group">
                                            <input type="date" id="date_of_data_breach" name="date_of_data_breach" value="{{ $company->date_of_data_breach ,old('date_of_data_breach') }}" class="form-control  @error('date_of_data_breach') is-invalid @enderror"  placeholder="06/06/2020">
                                            @error('date_of_data_breach')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="number_of_leaked_accounts">Number Of Leaked Accounts</label>
                                        <div class="input-group">
                                            <input type="text" name="number_of_leaked_accounts" class="form-control @error('number_of_leaked_accounts') is-invalid @enderror " value="{{ $company->number_of_leaked_accounts ,old('number_of_leaked_accounts') }}" placeholder="Enter number_of_leaked_accounts">
                                            @error('number_of_leaked_accounts')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="website">Website</label>
                                        <div class="input-group">
                                            <input type="text" name="website" class="form-control @error('website') is-invalid @enderror " value="{{ $company->website ,old('website') }}" placeholder="Enter website">
                                            @error('website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="detail">Detail</label>
                                        <div class="input-group">
                                            <textarea type="text" name="detail" class="form-control @error('detail') is-invalid @enderror "  placeholder="Enter detail">{{ $company->detail ,old('detail') }}</textarea>
                                            @error('detail')
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





