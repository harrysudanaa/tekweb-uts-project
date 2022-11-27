@section('title')
  {{ 'Booking' }}
@endsection
<x-cart-layout>
  <div class="relative">
    <div class="absolute bg-white rounded-md shadow-lg top-40 right-10 w-64 overflow-hidden">
      <div class="">
        <i class="fa-solid fa-xmark absolute top-3 right-3"></i>
      </div>
      <div class="mt-3 ml-5">
        <h1 class="text-lg font-semibold">Booking</h1>
        <div class="your-packet">
          <ul class="checkout">
            <li class="flex justify-between">
              <p>- Private Packet</p>
              <p class="mr-3">Rp<span class="price-cost">750000</span>,-</p>
            </li>
          </ul>
        </div>
        <div class="mt-20 flex items-center justify-between">
          <h3>Total Cost</h3>
          <p class="mr-5">Rp<span class="total-cost">750.000</span>,-</p>
        </div>
      </div>
      <button class="bg-cyan-500 w-full py-1 px-3 mt-5">CHECKOUT</button>
    </div>
    <div class="max-w-64 pt-28">
      <h1 class="font-bold text-3xl ml-14 mb-3">Booking Guide</h1>
      <hr class="border-slate-300">
    </div>
    {{-- Guide List Packet --}}
    <div class="ml-8 mt-8">
      <div class="card w-[450px] rounded-md flex shadow-lg border mb-7 cursor-pointer box-border">
        <div class="img rounded-md overflow-hidden w-56">
          <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-full h-56">
        </div>
        <div class="">
          <div class="p-3">
            <h3 class="name-packet font-semibold text-2xl">Privat Packet</h3>
            <ul class="text-sm text-slate-600">
              <li>
                <p class="detail-packet">- 1 Guide Tour</p>
              </li>
              <li>
                <p class="detail-packet">- 1 Day</p>
              </li>
            </ul>
            <div class="mt-24 flex items-center">
              <p class="text-xl text-slate-900 font-semibold">Rp<span class="price">750000</span>,-</p>
              <i class="fa-solid fa-cart-plus ml-20 text-xl add-cart cursor-pointer"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-cart-layout>
