@extends('layouts.frontend.master')
@section('content')

    <div class="">
        <div class="heading mb-4">
            <img src="{{asset('frontend/assets/images/back.d0386015.svg')}}" class="pr-2 hideMobile">
            About</div>

{{--        {{dd($about)}}--}}

            @foreach($about as $items)
        <div class="aboutBoxes mb-4">

            <div class="subHeading mb-2">
                {{$items->questions}}
{{--                What is Hacknotify?--}}
            </div>
            <div class="paraIntroText">
                {{$items->answers}}

{{--                Hacknotify is a data breach search engine where anyone can check whether--}}
{{--                their email account has been involved in a data breach. It is also a tool for users to check if--}}
{{--                their phone number has been leaked online so they can be on alert against sim swapping attacks.--}}
            </div>
        </div>
            @endforeach


{{--        <div class="aboutBoxes mb-4">--}}
{{--            <div class="subHeading mb-2">What does Hacknotify do?</div>--}}
{{--            <div class="paraIntroText">Along with the search for the data breach, phone numbers and password;--}}
{{--                Hacknotify constantly looks for new data breaches and send alerts to users in form of email and SMS--}}
{{--                alert directly on their phone numbers.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="aboutBoxes mb-4">--}}
{{--            <div class="subHeading mb-2">What technology does Hacknotify utilize to collect its data?</div>--}}
{{--            <div class="paraIntroText">Hacknotify uses exclusive tools/technology to scan clear web and dark web for--}}
{{--                data breach and other leaked data. We also scan Shodan, a search engine for vulnerable and exposed--}}
{{--                devices to collect exposed data including large misconfigured and exposed databases. Along with--}}
{{--                Hacknotify, we also run Hackread.com, a cybersecurity news website with a flawless reputation since--}}
{{--                2011. Our reputation precedes us and therefore we are contacted by high-profile security researchers--}}
{{--                with their findings of exposed data which, with their permission, the data is indexed in our search--}}
{{--                engine directory.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="aboutBoxes mb-4">--}}
{{--            <div class="subHeading mb-2">How efficiently can Hacknotify inform users of a breach?</div>--}}
{{--            <div class="paraIntroText">It depends on the size of the database. It takes some hours to extract emails--}}
{{--                from a database, compiles their list, and send alerts. However, in the case of a small data set such--}}
{{--                as 10 million accounts, it merely takes an hour to send alerts right to victims’ inbox. In case the--}}
{{--                breach is sensitive for example dating sites, military contractors, or involves political or media--}}
{{--                figures we send alerts right on their phone as an emergency SMS alert.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="aboutBoxes mb-4">--}}
{{--            <div class="subHeading mb-2">What is the size of database access and how does Hacknotify plan to scale--}}
{{--                it?--}}
{{--            </div>--}}
{{--            <div class="paraIntroText">It is unlimited. The size can be 1GB to unlimited. We have dealt with a--}}
{{--                database that was 4TB in size without any inconvenience.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="aboutBoxes mb-4">--}}
{{--            <div class="subHeading mb-2">What areas of a breach will Hacknotify be able to inform users of? i.e--}}
{{--                email, phone number, etc.--}}
{{--            </div>--}}
{{--            <div class="paraIntroText">Emails and phone numbers are our primary means of sending alerts but if the--}}
{{--                targeted company involves a financial institution, we get in touch with them over the phone call and--}}
{{--                their social media channels for quick alert and response.--}}
{{--            </div>--}}
        </div>


    @include('layouts.frontend.cards')
@endsection

