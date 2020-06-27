<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', '') }}</title>
  <link href="../../components/core/img/favicon.png" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900" rel="stylesheet">

  <!-- VENDORS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/font-feathericons/dist/feather.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/font-linearicons/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/font-icomoon/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/chart.js/dist/Chart.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/c3/c3.min.css') }}" rel="stylesheet">

  <link type="text/css" href="{{ asset('theme/dist/vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/ionrangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/bootstrap-sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/summernote/dist/summernote.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/jquery-steps/demo/css/jquery.steps.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">

  {{-- Files Js --}}
  <script src="{{ asset('theme/dist/vendors/jquery/dist/jquery.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/popper.js/dist/umd/popper.js') }}" type="javascript" ></script>
  <script src="{{ asset('theme/dist/vendors/bootstrap/dist/js/bootstrap.js') }}" type="javascript" ></script>
  <script src="{{ asset('theme/dist/vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/chartist/dist/chartist.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/chart.js/dist/Chart.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/jqvmap/dist/jquery.vmap.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/jqvmap/dist/maps/jquery.vmap.usa.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}" type="javascript" ></script>
  <script src="{{ asset('theme/dist/vendors/d3/d3.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/d3-dsv/dist/d3-dsv.js ') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/d3-time-format/dist/d3-time-format.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/c3/c3.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/peity/jquery.peity.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/editable-table/mindmup-editabletable.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/moment/min/moment.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/fullcalendar/dist/fullcalendar.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/owl.carousel/dist/owl.carousel.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/nprogress/nprogress.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/summernote/dist/summernote.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/nestable/jquery.nestable.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/autosize/dist/autosize.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/bootstrap-show-password/dist/bootstrap-show-password.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/dropify/dist/js/dropify.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/html5-form-validation/dist/jquery.validation.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/jquery-steps/build/jquery.steps.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/select2/dist/js/select2.full.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/d3-dsv/dist/d3-dsv.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/d3-time-format/dist/d3-time-format.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/techan/dist/techan.min.js') }}" ></script>
  <script src="{{ asset('theme/dist/vendors/Stickyfill/dist/stickyfill.min.js') }}" ></script>

 {{-- Css Componentes --}}
  <link type="text/css" href="{{ asset('theme/dist/components/vendors/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/core/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/widgets/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/system/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/menu-left/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/menu-top/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/footer/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/footer-dark/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/topbar/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/topbar-dark/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/subbar/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/sidebar/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/chat/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/apps/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/apps/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/extra-apps/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/ecommerce/style.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('theme/dist/components/dashboards/crypto-terminal/style.css') }}" rel="stylesheet">

  <script src="{{ asset('theme/dist/components/core/index.js') }}"  ></script>
  <script src="{{ asset('theme/dist/components/menu-left/index.js') }}" ></script>
  <script src="{{ asset('theme/dist/components/menu-top/index.js') }}" ></script>
  <script src="{{ asset('theme/dist/components/sidebar/index.js') }}" ></script>
  <script src="{{ asset('theme/dist/components/topbar/index.js') }}" ></script>

  <!-- Scripts vue-->
 <script src="{{ asset('js/app.js') }}" defer ></script>


  <!-- PRELOADER STYLES-->
  <style>
    .air__initialLoading {
      position: fixed;
      z-index: 99999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      background-image: url('{{url('zamar/images/loading.svg')}}');
      background-color: #FF005C ;
    }
   </style>

  <script>
    $(document).ready(function () {
      $('.air__initialLoading').delay(200).fadeOut(400)
    })
  </script>


</head>
<body class="air__menu--flyout air__menu--dark air__menu__submenu--blue">
  <div class="air__initialLoading"></div>

  <div id='template'>
  <template-component></template-component>
  </div>

</body>
</html>
