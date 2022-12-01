@section('title')
  {{ 'Guide List' }}
@endsection
<x-service-layout>
  <div class="container flex flex-col">
    <!-- search bar -->
    <div class="no-repeat bg-cover bg-center h-screen" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(https://images.unsplash.com/photo-1606820854416-439b3305ff39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);">
      <div class="my-auto py-56 text-white flex flex-col items-center">
        <h1 class="text-2xl mb-2 sm:text-5xl sm:mb-8">Find Guide To Guide You.</h1>
        <form action="">
          <div class="relative">
            <input type="text" class="w-72 h-8 rounded pl-9 text-xs focus:outline-none focus:border-0 text-slate-700 sm:w-96 lg:w-[500px] lg:h-10 cursor-pointer" placeholder="What's next place?">
            <i class="fa-solid fa-magnifying-glass absolute top-2 left-2 text-slate-500 lg:top-3"></i>
            <button type="submit" class="bg-cyan-500 rounded py-1 px-3 absolute top-0 right-0 cursor-pointer lg:py-2 lg:px-5">Search</button>
          </div>
        </form>
      </div>
    </div>
    <!-- end search bar -->

    <!-- tour guide list -->
    <section class="py-10 mx-auto">
      <div class="">
        <h1 class="text-center mb-5 font-bold text-2xl sm:text-5xl sm:mb-10">Find your guide</h1>
        <div class="flex flex-col sm:flex-row sm:flex-wrap justify-center">
          @foreach($data as $d)
          <div class="card w-80 rounded-md flex flex-col justify-center shadow-lg border mb-7 mx-5 cursor-pointer">
            <div class="img rounded-t-md overflow-hidden relative">
              <img src="{{ asset('assets/img/'.$d->image) }}" alt="" class="w-full h-56">
              <p class="pl-3 pr-5 py-1 rounded-bl-lg absolute bg-cyan-500 top-0 right-0 text-white font-semibold">Rp{{ $d->price }}/h</p>
            </div>
            <div class="p-3">
              <h3 class="font-semibold text-lg">{{ $d->name }}</h3>
              <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, possimus.</p>
            </div>
            <div class="flex justify-around pb-3 pt-1 border-t-2 mt-3">
              <div class="flex flex-col items-center">
                <h3 class="">Review</h3>
                <p>4</p>
              </div>
              <div class="">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="text-center">5</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- end tour guide list -->

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
</x-service-layout>
