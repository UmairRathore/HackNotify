
<script src="{{asset('backend/assets/js/app.js')}}"></script>

<!-- plugins -->

<script src="{{asset('backend/assets/js/vendors.js')}}"></script>

<!-- custom app -->


<!-- Ck Editor 5  -->
<script src="{{asset('https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js')}}"></script>

<!--SELECT2-->
<script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>

<!--Datatable-->
{{--<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>--}}

{{------------------------------------------------Tool_tips-------------------------------------------------}}

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


{{-----------------------------------------------DATA-TABLES-------------------------------------------------}}
{{--gdpr Compliances Table--}}
@yield('gdpr')
@yield('searchbreachtable')




