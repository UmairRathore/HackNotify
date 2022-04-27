<div class="footerContainer">
    <div class="footerContainerInside1">
        <p class="footerText1">
            {{--            {{dd($footer)}}--}}
            {{$footer[0]->paragraph}}


            {{--            Hacknotify is a free and handy tool that lets you find whether your account--}}
            {{--            has been compromised. See if your email address, password and/or phone number has been leaked--}}
            {{--            online or became part of a data breach.--}}
        </p>
    </div>
    <div class="footerContainerInside2">
        <div class="">
            <div class="footer1-ul">
                <a href="{{route('about')}}"><span class="footerText2 cussor-pointer">About</span></a>
                <a href="{{route('donate')}}"><span class="footerText2 cussor-pointer">Donate</span></a>
                <a href="{{route('data-protection')}}"><span class="footerText2 cussor-pointer">Data Protection</span></a>
            </div>
            <div class="my-2">
                <img src={{asset('frontend/assets/images/mail.99db3d7b.svg')}} class="cussor-pointer iconImage">
                <img src={{asset('frontend/assets/images/twitter.eaf4fe1c.svg')}} class="cussor-pointer iconImage">
                <img src={{asset('frontend/assets/images/facebook.10decf45.svg')}} class="cussor-pointer iconImage">
            </div>
        </div>
    </div>
</div>

<div class="footerContainer2">
    <p class="footerText1">© 2022 Hacknotify</p>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('https://code.jquery.com/jquery-1.12.4.min.js')}}" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js')}}" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<!--JQuery (Ajax get request) -->
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>


{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $("img").click(function(){--}}
{{--            $.get("https://hacknotify.com/api/searchEmailProvider", function(data, status){--}}
{{--                // alert("Data: " + data + "\nStatus: " + status);--}}
{{--            console.warn(data)--}}

{{--            //    https://hacknotify.com/api/search--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $("img").click(function(){--}}
{{--            $.get("https://hacknotify.com/api/searchPhone", function(data, status){--}}
{{--                alert("Data: " + data + "\nStatus: " + status);--}}
{{--            // console.warn(data)--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<script>
    // $(document).ready(function(){
    //     $("#img").click(function(e) {
    //         alert('hello');
    //         e.preventDefault();
    //         $.ajax({
    //             type: "POST",
    //             url: "/pages/test/",
    //             data: {
    //                 id: $(this).val(), // < note use of 'this' here
    //                 access_token: $("#access_token").val()
    //             },
    //             success: function(result) {
    //                 alert('ok');
    //             },
    //             error: function(result) {
    //                 alert('error');
    //             }
    //         });
    //     });
        //
        // $("img").click(function(){
        //     $.get("https://hacknotify.com/api/searchPassword", function(data, status){
        //         alert("Data: " + data + "\nStatus: " + status);
        //     console.warn(data)
        //     });
        // });
    });
</script>


{{--</body>--}}

{{--</html>--}}


















<script>
    const tabs = document.querySelectorAll('[data-role="tab"]'),
        tabContents = document.querySelectorAll(".tab-panel");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            const target = document.querySelector(tab.dataset.target);

            tabContents.forEach((tc) => {
                tc.classList.remove("is-active");
            });
            target.classList.add("is-active");

            tabs.forEach((t) => {
                t.classList.remove("is-active");
            });
            tab.classList.add("is-active");
        });
    });
</script>
