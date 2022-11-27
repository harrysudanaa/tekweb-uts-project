<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Guidy - @yield('title')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Flowbite Plugin --}}
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

  {{-- styling --}}
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}"> --}}

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- Jquery cdn --}}
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".add-cart").click(function() {
        // alert($(".name-packet").text());
        let data = 
        `
        <div class="your-packet">
          <ul class="checkout">
            <li class="flex justify-between">
              <p>- Private Packet</p>
              <p class="mr-3">Rp<span class="price-cost">750000</span>,-</p>
            </li>
          </ul>
        </div>
        `
        $(".your-packet").after(data);
        let namePacket = $(".name-packet").text();
        let price = parseInt($(".price").text());
        let total = price + price;
        let totalCost = $(".total-cost").text("" + total);
        // alert(price);
      })
    });
  </script>

</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.navigationhome')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
  {{-- Flowbite Plugin --}}
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
