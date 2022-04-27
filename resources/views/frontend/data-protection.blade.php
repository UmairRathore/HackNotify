@extends('layouts.frontend.master')
@section('content')
    <div class="">
        <div class="mainDPContainer">
            <div class="mainDPContainerInside1">
                <div class="heading mb-2">
                    <img src="{{asset('frontend/assets/images/back.d0386015.svg')}}" class="pr-2 hideMobile">

                    {{ $heading[0]->title}}
                    {{--                            Data Protection--}}
                </div>
                <div class="dataProtectionSubText1">

                    {{ $heading[0]->paragraph }}
                    {{--                            General Data Protection Regulation,--}}
                    {{--                            the&nbsp;EU&nbsp;data protection directive, will come into effect on&nbsp;May 25, 2018.--}}
                    {{--                            In&nbsp;a&nbsp;previous article, we&nbsp;discussed what GDPR is&nbsp;and the--}}
                    {{--                            responsibilities it&nbsp;places on&nbsp;website owners. Here, we&nbsp;provide guidelines--}}
                    {{--                            on&nbsp;specific steps you can take to&nbsp;move your site toward GDPR compliance.--}}
                </div>
                <div id="step0" class="dataProtectionSubText2">{{$count}} steps toward website GDPR compliance</div>
                <div class="dataProtectionSubText3">Take these steps to help ensure that your website is
                    GDPR-compliant:
                </div>
                <div class="dataProtectionContainer4">
                    @foreach($gdprcompliances as $gdprcompliance)
                        <div class="dataProtectionContainerInside4">
                            <div class="dataProtectionContainerImage4">
                                {{--                                    <img src="{{asset('frontend/assets/images/lock.4796aaae.svg')}}">--}}
                                <img src="{{asset($gdprcompliance->g_image)}}">
                            </div>
                            <div class="dataProtectionContainerInsideText4">
                                {{$gdprcompliance->title}}
                                {{--                                    Fine-tune your privacy policy--}}
                            </div>
                        </div>
                    @endforeach

{{--                    {{dd($gdprcompliances)}}--}}
                    @foreach($gdprcompliances as $key=>$gdprcompliance)
{{--                        {{dd(++$key)}}--}}
                        <div id="step{{$key}}">
                            <div class="blackContainer">
                                <div class="blackText">
                                    {{++$key.'. '.$gdprcompliance->title}}
                                    {{--                                    1. Fine-tune your privacy policy--}}
                                </div>
                            </div>
                            <div class="afterBlackText">
                                {!! $gdprcompliance->paragraph !!}

                                {{--                                Update your&nbsp;privacy policy&nbsp;to&nbsp;ensure that--}}
                                {{--                                it&nbsp;makes your collection and use of&nbsp;data transparent. This includes--}}
                                {{--                                detailing your data collection practices, cookie usage, and data privacy rules--}}
                                {{--                                regarding if&nbsp;and when user data may be&nbsp;shared. Make sure it&nbsp;includes--}}
                                {{--                                information about data that is&nbsp;collected by&nbsp;any plugins.--}}
                            </div>
                        </div>
                    @endforeach

                    <div style="margin-top: 62px; margin-bottom: 170px;">
                        <div class="conclusionText">
                            Conclusion
                        </div>
                        <div class="afterGreyText">
                            Website GDPR compliance isn’t a simple matter, but by taking
                            these steps, you’ll move substantially in the right direction. If you’re using a CMS
                            system, watch for changes to the core and plugins to help you reach full compliance.
                            In the meantime, it’s up to you to take the necessary steps to get as close as
                            possible.
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainDPContainerInside2">
                <div class="sideContainer">

                    <a href="#step0">
                        <p class="sideContainerTextSelected">
                            {{$count}} steps toward website GDPR compliance
                        </p>
                    </a>
                    @foreach($gdprcompliances as $key=>$gdprcompliance)
                        <a href="#step{{$key}}">
                            <p class="sideContainerText">
                                {{++$key.'.  '.$gdprcompliance->title}}
                                {{--                                1. Fine-tune your privacy policy--}}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>



@endsection









