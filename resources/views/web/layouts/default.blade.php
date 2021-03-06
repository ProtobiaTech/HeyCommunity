<!doctype html>
<html lang="en">

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <title>HeyCommunity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="HeyCommunity">
  <link rel="icon" href="{{ asset('favicon.png') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/night-mode.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/framework.css') }}">
  <style>
    .night-mode .main_sidebar {
      background-color: #08090f !important;
    }

    .collapse-sidebar #foot {
      display: none;
    }
  </style>

  <!-- icons
  ================================================== -->
  <link rel="stylesheet" href="{{ asset('assets/default-theme/css/icons.css') }}">

  <!-- Google font
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">
  <!-- sidebar -->
  @section('mainSidebar')
    @include('web.layouts._sidebar')
  @show

  <!-- header -->
  @section('mainHeader')
    @include('web.layouts._header')
  @show

  <!-- contents -->
  @yield('mainContent')
</div>

<!-- For Night mode -->
<script>
  (function (window, document, undefined) {
    'use strict';
    if (!('localStorage' in window)) return;
    var nightMode = localStorage.getItem('gmtNightMode');
    if (nightMode) {
      document.documentElement.className += ' night-mode';
    }
  })(window, document);

  (function (window, document, undefined) {
    'use strict';

    // Feature test
    if (!('localStorage' in window)) return;

    // Get our newly insert toggle
    var nightMode = document.querySelector('#night-mode');
    if (!nightMode) return;

    // When clicked, toggle night mode on or off
    nightMode.addEventListener('click', function (event) {
      event.preventDefault();
      document.documentElement.classList.toggle('night-mode');
      if (document.documentElement.classList.contains('night-mode')) {
        localStorage.setItem('gmtNightMode', true);
        return;
      }
      localStorage.removeItem('gmtNightMode');
    }, false);

  })(window, document);
</script>

<!-- javaScripts
================================================== -->
<script src="{{ asset('assets/default-theme/js/framework.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/simplebar.js') }}"></script>
<script src="{{ asset('assets/default-theme/js/main.js') }}"></script>

<script>
  let token = document.head.querySelector('meta[name="csrf-token"]');

  if (token) {
    // window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

    $(document).ready(function() {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': token.content}});
    });
  } else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
  }
</script>
<script src="{{ mix('js/app.js') }}"></script>

<!-- uk notification -->
@include('web.layouts._uk-notice')

<!-- footer Javascript -->
@yield('footerJavascript')

</body>
</html>
