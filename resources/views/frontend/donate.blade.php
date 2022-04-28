@extends('layouts.frontend.master')

@section('content')
    <div class="">
        <div class="heading mb-4">
            <a href="{{route('index')}}">
            <img  src="{{asset('frontend/assets/images/back.d0386015.svg')}}" class="pr-2 hideMobile">
            </a>
            {{--           {{dd($donate)}}--}}
            {{$donate[0]->title}}
        </div>
        <div>
            <p class="donateText1">
                {{$donate[0]->paragraph}}
            </p>
            {{--            <p class="donateText1">Running a&nbsp;project as&nbsp;big as&nbsp;Hacknotify.com and keeping--}}
            {{--                up&nbsp;with its cost is&nbsp;quite something since we&nbsp;don’t&nbsp;use any 3rd-party--}}
            {{--                advertisements&nbsp;on&nbsp;the site.</p>--}}
            {{--            <p class="donateText1">HackNotify has partnered with Twilio&nbsp;to&nbsp;send email and SMS alerts--}}
            {{--                to&nbsp;victims of&nbsp;data breaches and since its launch, there have been millions of&nbsp;alerts--}}
            {{--                sent to&nbsp;respective victims.</p>--}}
            {{--            <p class="donateText1">Hacknotify uses cloud service to&nbsp;host the data while spending--}}
            {{--                on&nbsp;overall security is&nbsp;no&nbsp;mean feat both financially and physically. Therefore,--}}
            {{--                if&nbsp;interested, you can donate to&nbsp;Hacknotify and help us&nbsp;keep the project alive.</p>--}}
        </div>
        <div>
            <hr class="hr-donate">
        </div>
        <div>
            <div class="">
                <div class="mb-4">
                    <p class="donateText2">Following are the options to securely send your donations:</p>
                </div>

                <div class="row">
                    @foreach($paymentmethod as $key=>$payment)
                        <div class="col-md-6 col-sm-12 mb-3 colDesktopPadding">
                            <div class="iconContainer2">
                                <div class="iconContainer2Inside1">
                                    <div class="p-2 iconContainer2Inside11">
                                        {{--                                    <img src="{{asset('frontend/assets/images/bitcoin.41e2eae7.svg')}}">--}}
                                        <img src="{{asset($payment->currency_image)}}">
                                    </div>
                                    <div class="pt-2 iconContainer2Inside12">
                                        <div class="donateCoinTitle">
                                            {{--                                        {{dd($payment)}}--}}
                                            {{--                                    {{$payment[0]->currency}}--}}
                                            {{$payment->currency}}
                                            {{--                                        Bitcoin--}}
                                        </div>
                                        <div
                                            id="copy" class="donateCointWallet">
                                            {{--                                        {{$payment[0]->wallet_number}}--}}
                                            {{--                                        {{dd(++$key)}}--}}
                                            {{$payment->wallet_number}}
                                            {{--                                        bc1qfm3tla905l2x4x3mlj0tvzy6q5uqrk87vt95fl--}}
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: auto; margin-bottom: auto; display: flex; flex-direction: row; padding: 0 15px 0 0">
                                    @if($key!==3)
                                        @if($key!==5)
                                            <img src="{{asset('frontend/assets/images/barCodeIcon.6b3113d0.svg')}}" alt="barCode"
                                                 style="padding: 15px 0 15px 15px; cursor: pointer;" data-toggle="tooltip" title="Barcode">
                                        @endif

                                        <img  class="imageclipboard" id="copy" onclick="copyToClipboard('{{$payment->wallet_number}}')"
                                             src="{{asset('frontend/assets/images/copyIcon.7030ab9b.svg')}}" alt="copy"
                                             style="padding: 15px;cursor: pointer;" data-toggle="tooltip" title="Copy to Clipboard">

                                            <img class="copied d-none"
                                                 src="{{asset('frontend/assets/images/barCodeIcon.6b3113d0.svg')}}" alt="copied"
                                                 style="padding-right: 15px; cursor: pointer;" data-toggle="tooltip" title="Copied to Clipboard">
                                    @endif

                                    @if($key==3)
                                        <img src="{{asset('frontend/assets/images/rightArrowIcon.54991e02.svg')}}" alt="right arrow"
                                             style="padding: 15px; cursor: pointer;" data-toggle="tooltip" title="arrow">

                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--                {{dd($key)}}--}}


                {{--                        </div>--}}
            </div>
        </div>

    </div>
    @include('layouts.frontend.cards')


    <script>

        function copyToClipboard(text) {
            var sampleTextarea = document.createElement("textarea");
            document.body.appendChild(sampleTextarea);
            sampleTextarea.value = text; //save main text in it
            sampleTextarea.select(); //select textarea contenrs
            document.execCommand("copy");
            document.body.removeChild(sampleTextarea);
            alert('Copied : ' + text)

                if (text.status !== true) {
                    // $(".copied").removeClass('d-none');
                    // $(".imageclipboard").hide();

                }

        }



    </script>
@endsection

