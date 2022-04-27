<!--        //bad news container according to api response hidden for now-->

{{--{{print_r($emailbreach)}}--}}
<div class="row">
    <div class="col-md-6">
        <div class="badNewsContainer ">
            <div class="row">
                <div class="mr-1"><img src="/static/media/badnews.ca3d9507.svg" alt="badnews"></div>
                <div class="badNewsText">Bad news</div>
            </div>
            <div class="badNewsDesc">Your email address has been found in <span style="font-weight: 600;">1 data breach</span>.</div>
            <div class="badNewsList mt-4">
                <div>
                    <div>
                        <div class="badNewsListTitle">Blood Bank <img alt="verified" src="/static/media/verified.78915310.svg" style="height: 20px; width: 20px;"></div>
                        <div class="badNewsInfo">
                            <div class="row zebraStrip rowPadding">
                                <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Website</div>
                                <div class="badNewsNormalText col-md-9 col-sm-12">bloodbank.com</div>
                            </div>
                            <div class="row rowPadding">
                                <div class="badNewsNormalText bold col-md-3 col-sm-12 boldMobile">Types of data exposed</div>
                                <div class="badNewsNormalText col-md-9 col-sm-12">Phone Numbers, Passwords, Email Addresses</div>
                            </div>
                            <div class="row zebraStrip rowPadding">
                                <div class="badNewsNormalText col-md-3 col-sm-12 boldMobile">Details</div>
                                <div class="badNewsNormalText col-md-9 col-sm-12">In September 2015, the US-based credit bureau and consumer data broker Experian suffered a data breach that impacted 27 million customers.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        @endif--}}
{{--        @endphp--}}
        <div class="noLeakContainer d-none"><img alt="done" src="/static/media/done.5255612b.svg" class="noLeakImage">
            <p class="noLeakText">Looks like no leak has been found in the database</p>
        </div>


    </div>
</div>

