{{--{{dd($cards)}}--}}

<div class="recentBreachesContainer2">
    <div class="row">
                @foreach($cards as $key=>$card)
        <div class="col-sm-12 col-md-4 mb-3 colDesktopPadding">

            <div class="mainBox">
                    <div style="width: 80%; margin: 0px auto;">
                        <div style="display: flex; align-items: center; height: 50px;"><img
                                {{--                            src={{asset('frontend/assets/images/lock.6431a576.svg')}} class="mainBoxImage"--}}
                                src={{asset($card->card_image)}} class="mainBoxImage"
                                alt="Secure breached accounts instantly">
                        </div>

                        <p class="mainBoxText1">
                            {{$card->title}}



                            {{--                        Secure breached accounts instantly--}}
                        </p>

                        <p class="mainBoxText2">
                            {{$card->paragraph}}


                            {{--                        After Finding the results, You can secure each breached account--}}
                            {{--                        instantly without any hassle. Its just a&nbsp;click away.--}}
                        </p>
                    </div>
            @if($key==2)
                <div style="width: 80%; position: relative; margin: 0px auto;">
                    <input type="text" placeholder="You email" class="mainButtonText">
                    <img alt="subscribe" src={{asset('frontend/assets/images/subscribe.5b0a886f.svg')}} class="mainContainerImage1">
                </div>
            @endif
            </div>
        </div>
                        @endforeach




    </div>
</div>



