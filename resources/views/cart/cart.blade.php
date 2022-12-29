<x-home-layout>
    <div class="container p-8 mx-auto mt-12 bg-white">
        <div class="w-full overflow-x-auto">
          <div class="my-2">
            <h3 class="text-xl font-bold tracking-wider"></h3>
          </div>
          <table class="w-full shadow-inner">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-6 py-3 font-bold whitespace-nowrap">Product and Price</th>
                <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($package as $key=>$item)
              <tr>
                
                <td class="flex items-center justify-center p-4 px-6">
                    <div>
                        <img src="https://3.bp.blogspot.com/-Znzu-6FT16s/WG5r3cknMdI/AAAAAAAADRU/6IeehlFni1ECyf7tyuw8-hxdXeIWZ3b1QCEw/s1600/Tari%2BKecak%2BUbud%2B1.png" class="h-48 w-full ml-36 mr md:h-full md:w-56 inset-0 w-full h-full mr-10 object-cover rounded-lg">
                    </div>
                    <div class="flex flex-wrap ml-3">
                        <h1 class="flex-auto font-medium text-xl font-bold text-slate-900">
                          {{$item->package_name}}
                        </h1>
                        <div class="w-full flex-none mt-2 order-1 text-gray-500">
                            Adult
                        </div>
                        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                          {{$item->package_price}}
                        </div>
                    </div>
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <div>
                    <input
                      type="number"
                      name="qty"
                      value="0"
                      class="w-12 p-2 text-center bg-gray-100 outline-none"/>
                  </div>
                </td>
              </tr> 
              @endforeach
              
            </tbody>
          </table>
          <div class="flex justify-end mt-4 space-x-2">
            <a href="/ticket">
                <button class="px-6 py-3 text-sm text-gray-800 bg-gray-200 hover:bg-gray-400">
                    Cancel
                </button>
            </a>
            <form action="/checkout" method="POST">
              <button type="submit"
              class="px-6 py-3 text-sm text-white bg-indigo-500 hover:bg-indigo-600">
                  Proceed to Checkout
              </button>
            </form>
            
          </div>
        </div>
      </div>
</x-home-layout>