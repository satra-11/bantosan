<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- 検索エンジンのクロールとインデックスを制御 -->
  <meta name="robots" content="noindex,follow"><!-- すべての検索エンジン用 -->
  <meta name="googlebot" content="noindex,follow"><!-- Google用 -->

  <meta name="format-detection" content="telephone=no"><!-- safari tel自動リンク無効化 -->
  <meta name="format-detection" content="email=no,address=no" />

  <!-- キャッシュ -->
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <!-- favicon -->
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="{{ asset('/assets/favicon/favicon.ico') }}">
  <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('/assets/favicon/favicon.ico') }}">

  <!-- CSS -->
  <link href="https://unpkg.com/ress/dist/ress.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('/assets/css/common.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/assets/css/output.css') }}" rel="stylesheet" type="text/css">

  <!-- Js -->
  <script src="{{ asset('/assets/js/async.js') }}" async></script>
  <script src="{{ asset('/assets/js/defer.js') }}" defer></script>
  <script src="{{ asset('/assets/js/ofi.min.js') }}"></script>

  <link href="{{ asset('/assets/css/page.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/assets/css/module.css') }}" rel="stylesheet" type="text/css">

  
  @yield('styles')

  @vite(['resources/js/app.js'])
  
  <script src="{{ asset('/assets/js/page.js') }}" defer></script>
  <script src="{{ asset('/assets/js/common.js') }}" defer></script>

  @yield('scripts')
  
  <!-- Styles -->
  <!-- ========== @livewireStyles ========== -->
  
</head>
<body id="{{ $body_id ?? 'index' }}" ontouchstart="">
  <div id="root"></div>

  <div class="wrapper">


    <!-- ========== HEADER ========== -->
    @include('layouts.header')


    <!-- ========== MAIN ========== -->
    <main id="main" class="" role="main">
      {{ $slot }}
    </main>

    <!-- ========== FOOTER ========== -->
    {{ $modal ?? '' }}
    {{ $footer ?? '' }}

  </div><!-- /.wrapper -->

  @livewireScripts
</body>
</html>
