@section('title')
  {{ 'Landing Page' }}
@endsection
<x-home-layout>
  <div class="container flex flex-col">
    <!-- header -->
    <section id="home" class="bg-white">
      <div class="no-repeat bg-center bg-cover h-screen text-white flex flex-col items-center justify-center max-w-screen-xl" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(https://images.unsplash.com/photo-1528127269322-539801943592?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);">
        <div class="flex flex-col items-center justify-center -mt-10">
          <h1 class="text-3xl text-center px-10 mb-2 font-bold md:text-4xl md:px-20 lg:text-5xl animate__animated animate__fadeInDown">Explore Bali With The Best Partner For You</h1>
          <p class="text-center lg:w-[800px] mb-7 px-5 text-xs md:text-sm md:px-10 lg:text-lg animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, reiciendis. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="service" class="bg-blue-700 py-1 px-3 rounded-md shadow hover:bg-blue-800 lg:px-4 lg:py-2 lg:text-lg animate__animated animate__fadeIn">Get Started</a>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- about -->
    <section id="about" class="bg-white py-10 animatedParent">
      <h1 class="font-bold text-3xl text-center my-3 animate__animated animate__slow   animate__bounce">About Us</h1>
      <hr class="w-40 mx-auto mb-10 border-blue-500">
      <div class="flex flex-col mx-10 lg:flex-row">
        <div class="lg:pl-5">
          <h3 class="font-bold text-xl lg:text-3xl">Guide you to anywhere in Bali</h3>
          <p class="text-sm lg:text-lg lg:mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nulla mollitia hic quas incidunt voluptas.</p>
          <a href="about" class="mt-3 mb-1 text-xs relative after:block after:absolute after:left-0 after:bottom-0 after:w-full after:h-[1px] after:rounded-md after:bg-slate-400 after:scale-x-100 hover:text-blue-500 after:hover:bg-blue-500 text-slate-400">View more...<i class="fa-solid fa-arrow-right ml-2"></i></a>
        </div>
        <div class="w-[700px]">
          <img src="https://images.unsplash.com/photo-1629165124903-2c45c975cc62?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" width="200" height="" class="rounded w-[400px] mx-auto">
        </div>
      </div>
    </section>
    <!-- end about -->

    <hr class="border-slate-300">

    <!-- services -->
    <section id="services" class="bg-white py-10">
      <h1 class="font-bold text-3xl text-center my-3">Best Guide</h1>
      <hr class="w-64 mx-auto mb-10 border-blue-500">
      <div class="flex flex-col mx-10 justify-center items-center lg:flex-row lg:justify-evenly">
        <div class="card w-80 rounded-md flex flex-col justify-center shadow-lg border mb-7">
          <div class="img rounded-t-md overflow-hidden">
            <img src="{{ asset('assets/img/profile-photo.png') }}" alt="" class="w-full h-56">
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-lg">John Smith</h3>
            <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, possimus.</p>
          </div>
        </div>
        <div class="card w-80 rounded-md flex flex-col justify-center shadow-lg border mb-7">
          <div class="img rounded-t-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-full h-56">
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-lg">John Smith</h3>
            <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, possimus.</p>
          </div>
        </div>
        <div class="card w-80 rounded-md flex flex-col justify-center shadow-lg border mb-7">
          <div class="img rounded-t-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-full h-56">
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-lg">John Smith</h3>
            <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, possimus.</p>
          </div>
        </div>
      </div>
      <p class="text-center"><a href="service" class="mt-3 mb-1 text-xs relative after:block after:absolute after:left-0 after:bottom-0 after:w-full after:h-[1px] after:rounded-md after:bg-slate-400 after:scale-x-100 hover:text-blue-500 after:hover:bg-blue-500 text-slate-400">View more...<i class="fa-solid fa-arrow-right ml-2"></i></a></p>
    </section>
    <!-- end services -->

    <!-- <hr class="border-slate-300"> -->

    <!-- break -->
    <!-- end break -->

    <!-- footer -->
    <footer class="mt-10 bg-blue-500 text-white p-5">
      <div class="flex justify-around mb-3">
        <a href="/" class="flex items-center">
          {{-- <img src="{{ asset('assets/img/guidyLogo.png') }}" class="mr-3 h-6 sm:h-32" alt="Guidy Logo"> --}}
          <span class="self-center text-4xl font-semibold whitespace-nowrap">Guidy.</span>
        </a>
        <div>
          <h4 class="font-semibold text-lg ">Contact Us</h4>
          <div class="flex flex-col">
            <a href=""><i class="text-lg fa-brands fa-instagram mb-2 mr-3"></i>guidy.id</a>
            <a href=""><i class="fa-brands fa-facebook mb-2 mr-3"></i>guidy.id</a>
            <a href=""><i class="fa-brands fa-twitter mb-2 mr-3"></i>guidy.id</a>
          </div>
        </div>
      </div>
      <hr class="border-slate-500">
      <p class="text-center pt-3 text-xs">Copyright © 2022 GuidyID</p>
    </footer>
    <!-- end footer -->
  </div>
</x-home-layout>
