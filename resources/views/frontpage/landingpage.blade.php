<x-home-layout>
  <div class="container flex flex-col">
    <!-- header -->
    <section id="header" class="w-full">
      <div class="no-repeat bg-cover bg-center h-screen" style="background-image: linear-gradient(rgba(0, 0, 0, .5),rgba(0, 0, 0, .5)), url('https://images.unsplash.com/photo-1666625628272-a1071f6f7173?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80');">
        <div class="text-center px-4 text-white flex flex-col items-center justify-center py-44">
          <h1 class="font-bold text-3xl px-4 mb-2 sm:text-5xl">Explore Bali with the best partner for you.</h1>
          <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ut.</p>
          <a href="service" class="bg-cyan-500 rounded px-3 py-2">Get Started</a>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- about -->
    <section id="about" class="bg-white py-5">
      <h1 class="font-bold text-3xl text-center my-3">About Us</h1>
      <hr class="w-40 mx-auto mb-10 border-cyan-500">
      <div class="flex flex-col mx-10 lg:flex-row">
        <div class="lg:pl-5">
          <h3 class="font-bold text-xl lg:text-3xl">Guide you to anywhere in Bali</h3>
          <p class="text-sm lg:text-lg lg:mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nulla mollitia hic quas incidunt voluptas.</p>
          <a href="" class="bg-cyan-500 py-1 px-3 rounded mt-3 text-xs shadow-md">View more...<i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <img src="https://images.unsplash.com/photo-1629165124903-2c45c975cc62?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" width="200" height="" class="rounded w-80 mx-auto my-5">
      </div>
    </section>
    <!-- end about -->

    <hr class="border-slate-300">

    <!-- services -->
    <section id="services" class="bg-white py-5">
      <h1 class="font-bold text-3xl text-center my-3">Best Guide</h1>
      <hr class="w-64 mx-auto mb-10 border-cyan-500">
      <div class="flex flex-col mx-10 justify-center items-center lg:flex-row lg:justify-evenly">
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
      <p class="text-center"><a href="service" class="bg-cyan-500 py-1 px-3 rounded mt-2 text-xs mx-auto">View more...<i class="fa-solid fa-arrow-right"></i></a></p>
    </section>
    <!-- end services -->

    <!-- <hr class="border-slate-300"> -->

    <!-- break -->
    <!-- end break -->

    <!-- footer -->
    <footer class="mt-10 bg-cyan-500 p-5">
      <div class="flex justify-around mb-3">
        <h1 class="my-auto">Logo</h1>
        <div>
          <h4 class="font-semibold text-lg">Contact Us</h4>
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
