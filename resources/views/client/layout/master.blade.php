<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @include('client.layout.partials.css')
  </head>
  <body>
    <div class="container">
        <header>
            @include('client.layout.partials.headertop')
            @include('client.layout.partials.headernav')
            
        </header>
        {{-- @foreach ($listloais as $loai)
    <p>{{ $loai->ten_loai }}</p>
@endforeach --}}
        <main class=" container mt-3">
            @yield('content')
        </main>

        
        <footer>
          @include('client.layout.partials.footertop')
          @include('client.layout.partials.footerend')
        </footer>               
    </div>

    @include('client.layout.partials.js')
  </body>
</html>