@extends('layouts.frontend.master')

@section('content')

{{--    {{dd($data)}}--}}


    <div class="">
        <div class="inner-flex">
            <div class="main-inner-container1">


                <!--Heading-->
                <div class="main-inner-container1-para1">

                    {{$heading[0]->paragraph}}
                    {{--                    Data breaches are taking place every&nbsp;day.--}}

                </div>
                <!--Heading-->

                {{--                <div class="main-inner-container1-para1">Last year alone, billions of&nbsp;accounts were</div>--}}
                {{--                <div class="main-inner-container1-para1">hacked and the number will only Increase.</div>--}}

                <div class="main-inner-container1 col-md-12 col-sm-12 mt-4">

                    <div class="mainButtonsContainer mt-0">
                    <!--tabs-->

                        <div class="tabs-wrapper">
                            <ul class="nav-tabs" role="tablist">
                                <li class="nav-item tab is-active" data-role="tab" data-target="#tabs-home3">Email
                                </li>

                                <li class="nav-item tab" data-role="tab" data-target="#tabs-profile3">Phone
                                </li>

                                <li class="nav-item tab" data-role="tab" data-target="#tabs-messages3">Password
                                </li>
                            </ul>

                            <div class="tab-content p-0">
                                <div class="tab-panel is-active" id="tabs-home3" role="tabpanel">
                                    <div>
                                        <div class="col-sm-12 col-md-9" style="position: relative;">
                                            <input type="text" id="email" name="email" placeholder="Your Email" class="mainButtonText" value="">
                                            <img id="searchemailimg" alt="searchInactive" src={{asset('frontend/assets/images/searchInactive.b5847a06.svg')}} class="mainContainerImage">
{{--                                            <button id="img">Button</button>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tabs-profile3" role="tabpanel">
                                    <div>
                                        <div class="col-sm-12 col-md-9" style="position: relative;">
                                            <input type="text" id="phone" name="phone" placeholder="Your Phone" class="mainButtonText" value="">
                                            <img  id="searchphoneimg" alt="searchInactive" src={{asset('frontend/assets/images/searchInactive.b5847a06.svg')}} class="mainContainerImage">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tabs-messages3" role="tabpanel">
                                    <div>
                                        <div class="col-sm-12 col-md-9" style="position: relative;">
                                            <input type="text" id="password" name="password" placeholder="Your Password" class="mainButtonText" value="">
                                            <img id="searchpassimg" alt="searchInactive" src={{asset('frontend/assets/images/searchInactive.b5847a06.svg')}} class="mainContainerImage">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--tabs-->
                    </div>
                </div>
            </div>


            <div class="main-inner-container2">
                <div class="main-inner-container2-inside1"><p class="main-inner-container2-para1">13,355,474,152</p>
                    <p class="main-inner-container2-para2">Data leaked</p></div>
                <div class="main-inner-container2-inside2"><p class="main-inner-container2-para1">102,157</p>
                    <p class="main-inner-container2-para2">Checks</p></div>
            </div>
        </div>

        <!--        //bad news container according to api response hidden for now-->
        <div class="row">
            <div class="col-md-6">
{{--                <div class="badNewsContainer d-none">--}}
{{--                    <div class="row">--}}
{{--                        <div class="mr-1"><img src="/static/media/badnews.ca3d9507.svg" alt="badnews"></div>--}}
{{--                        <div class="badNewsText">Bad news</div>--}}
{{--                    </div>--}}
{{--                    <div class="badNewsDesc">Your email address has been found in <span style="font-weight: 600;">1 data breach</span>.</div>--}}
{{--                    <div class="badNewsList mt-4">--}}
{{--                        <div>--}}
{{--                            <div>--}}
{{--                                <div class="badNewsListTitle">Blood Bank <img alt="verified" src="/static/media/verified.78915310.svg" style="height: 20px; width: 20px;"></div>--}}
{{--                                <div class="badNewsInfo">--}}
{{--                                    <div class="row zebraStrip rowPadding">--}}
{{--                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Website</div>--}}
{{--                                        <div class="badNewsNormalText col-md-9 col-sm-12">bloodbank.com</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row rowPadding">--}}
{{--                                        <div class="badNewsNormalText bold col-md-3 col-sm-12 boldMobile">Types of data exposed</div>--}}
{{--                                        <div class="badNewsNormalText col-md-9 col-sm-12">Phone Numbers, Passwords, Email Addresses</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row zebraStrip rowPadding">--}}
{{--                                        <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Details</div>--}}
{{--                                        <div class="badNewsNormalText col-md-9 col-sm-12">In September 2015, the US-based credit bureau and consumer data broker Experian suffered a data breach that impacted 27 million customers.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="noLeakContainer "><img alt="done" src="/static/media/done.5255612b.svg" class="noLeakImage">--}}
{{--                    <p class="noLeakText">Looks like no leak has been found in the database</p>--}}
{{--                </div>--}}

                <div id="msg"></div>

            </div>
        </div>




        {{--                    @if( '')--}}
{{--        @include('frontend.frontend.badnews')--}}
{{--                    @endif--}}


        <div class="row">

        </div>
        <div class="recentBreachesContainer1">
            <div>
                <p class="recentBreachesText">Recent breaches</p>
            </div>

            <div class="row">
                @foreach($recentbranches as $recentbranch)

{{--                    {{dd($recentbranches)}}--}}
                    <div class="col-md-3 col-sm-12 mb-3 colDesktopPadding">
                        <div class="iconContainer row">
                            <div class="p-2">
                                {{--<img src={{asset('frontend/assets/images/ledger.00e1d4b2.svg')}} alt="Ledgeraccounts"></div>--}}
                                <img src={{asset($recentbranch->rb_image)}} alt="{{$recentbranch->paragraph}}">
                            </div>
                            <div class="pt-2">
                                <div class="countText">
                                    {{$recentbranch->title}}
                                    {{--4,227,907--}}
                                </div>
                                <div class="companyText">
                                    {{$recentbranch->paragraph}}
                                    {{--Ledger accounts--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


            @include('layouts.frontend.cards')


{{--            <script>--}}
{{--                $(document).ready(function () {--}}
{{--                    $("button").click(function () {--}}
{{--                        $.get("https://hacknotify.com/api/searchPassword", function (result) {--}}
{{--                            console.warn(result)--}}
{{--                        });--}}
{{--                    });--}}
{{--                });--}}
{{--            </script>--}}

                <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>

                <script type="text/javascript">
                    // $(document).ready(function(){--}}
                    {{--        $("img").click(function(){--}}

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $(document).ready(function() {
                        $("#searchemailimg").click(function (e) {
                            // alert('hello');
                            let email = document.getElementById("email").value;
                            // alert(email);
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "{{route('searchemail')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",

                                    email : email, // < note use of 'this' here
                                    // access_token: $("#access_token").val()
                                },
                                success: function (result) {
                                    // alert(result);

                                    // $("#msg").html(result);
                                    document.getElementById("msg").innerHTML = result;
                                    // alert('ok');
                                    // if(result == 1)
                                    // {
                                    //
                                    // }
                                    // else
                                    // {
                                    //
                                    // }
                                },
                                error: function (result) {
                                    alert('error');
                                }
                            });
                        });
                    });


                    $(document).ready(function() {
                        $("#searchphoneimg").click(function (e) {
                            // alert('hello');
                            let phone = document.getElementById("phone").value;
                            // alert(email);
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "{{route('searchphone')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",

                                    phone : phone, // < note use of 'this' here
                                    // access_token: $("#access_token").val()
                                },
                                success: function (result) {
                                    // alert(result);

                                    // $("#msg").html(result);
                                    document.getElementById("msg").innerHTML = result;
                                    // alert('ok');
                                    // if(result == 1)
                                    // {
                                    //
                                    // }
                                    // else
                                    // {
                                    //
                                    // }
                                },
                                error: function (result) {
                                    alert('error');
                                }
                            });
                        });
                    });

                    $(document).ready(function() {
                        $("#searchpassimg").click(function (e) {
                            // alert('hello');
                            let password = document.getElementById("password").value;
                            // alert(email);
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "{{route('searchpass')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",

                                    password : password, // < note use of 'this' here
                                    // access_token: $("#access_token").val()
                                },
                                success: function (result) {
                                    // alert(result);

                                    // $("#msg").html(result);
                                    document.getElementById("msg").innerHTML = result;
                                    // alert('ok');
                                    // if(result == 1)
                                    // {
                                    //
                                    // }
                                    // else
                                    // {
                                    //
                                    // }
                                },
                                error: function (result) {
                                    alert('error');
                                }
                            });
                        });
                    });



                    {{--$("#img").click(function(e) {--}}
                    {{--    alert('hello');--}}
                    {{--    e.preventDefault();--}}
                    {{--    $.ajax({--}}
                    {{--        type: "POST",--}}
                    {{--        url: "/pages/test/",--}}
                    {{--        data: {--}}
                    {{--            id: $(this).val(), // < note use of 'this' here--}}
                    {{--            access_token: $("#access_token").val()--}}
                    {{--        },--}}
                    {{--        success: function(result) {--}}
                    {{--            alert('ok');--}}
                    {{--        },--}}
                    {{--        error: function(result) {--}}
                    {{--            alert('error');--}}
                    {{--        }--}}
                    {{--    });--}}
                    {{--});--}}

                    {{--jQuery(document).ready(function() {--}}

                    {{--    $("#img").click(function (e) {--}}
                    {{--        alert('hello');--}}
                    {{--        e.preventDefault();--}}

                    {{--        // var name = $("input[name=name]").val();--}}
                    {{--        // var password = $("input[name=password]").val();--}}

                    {{--        var email = $("input[name=email]").val();--}}
                    {{--        alert('email');--}}
                    {{--        $.ajax({--}}
                    {{--            type: 'POST',--}}
                    {{--            url: "{{ route('AJAX.post') }}",--}}
                    {{--            data: {name: name, password: password, email: email},--}}
                    {{--            success: function (data) {--}}
                    {{--                alert(data.success);--}}
                    {{--            }--}}
                    {{--        });--}}

                    {{--    });--}}

                    {{--});--}}
                </script>
@endsection








