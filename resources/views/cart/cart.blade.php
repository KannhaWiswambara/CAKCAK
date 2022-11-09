<x-home-layout>
    <div class="container p-8 mx-auto mt-12 bg-white">
        <div class="w-full overflow-x-auto">
          <div class="my-2">
            <h3 class="text-xl font-bold tracking-wider">Shopping Cart 2 item</h3>
          </div>
          <table class="w-full shadow-inner">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-6 py-3 font-bold whitespace-nowrap">Product</th>
                <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
                <th class="px-6 py-3 font-bold whitespace-nowrap">Price</th>
                <th class="px-6 py-3 font-bold whitespace-nowrap">Remove</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="flex items-center justify-center p-4 px-6">
                    <div>
                        <img src="https://3.bp.blogspot.com/-Znzu-6FT16s/WG5r3cknMdI/AAAAAAAADRU/6IeehlFni1ECyf7tyuw8-hxdXeIWZ3b1QCEw/s1600/Tari%2BKecak%2BUbud%2B1.png" class="h-48 w-full ml-36 mr md:h-full md:w-56 inset-0 w-full h-full mr-10 object-cover rounded-lg">
                    </div>
                    <div class="flex flex-wrap ml-3">
                        <h1 class="flex-auto font-medium text-xl font-bold text-slate-900">
                            Kecak Fire Gianyar
                        </h1>
                        <div class="w-full flex-none mt-2 order-1 text-gray-500">
                            Adult
                        </div>
                        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                            Rp. 120.000
                        </div>
                    </div>
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <div>
                    <button class="px-2 py-0 shadow">-</button>
                    <input
                      type="text"
                      name="qty"
                      value="1"
                      class="w-12 text-center bg-gray-100 outline-none"/>
                    <button class="px-2 py-0 shadow">+</button>
                  </div>
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">Rp. 120.000</td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                    x
                  </button>
                </td>
              </tr>
              <tr>
                <td class="flex items-center justify-center p-4 px-6">
                    <div>
                        <img src="https://www.rentalmobilbali.net/wp-content/uploads/2020/01/Tari-Kecak-Uluwatu-Bali-Feature-Image.jpg" class="h-48 w-full md:h-full md:w-56 inset-0 w-full h-full object-cover mr-10 rounded-lg">
                    </div>
                    <div class="flex flex-wrap ml-3">
                        <h2 class="flex-auto w-8 mt-3 font-medium text-xl font-bold text-slate-900">
                            Kecak Kecak Fire & Trance Dance (Pura Dalem Taman Kaja)
                        </h2>
                        <div class="w-full flex-none mt-2 order-1 text-gray-500">
                            Adult
                        </div>
                        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                            Rp. 150.000
                        </div>
                    </div>
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <div>
                    <button class="px-2 py-0 shadow">-</button>
                    <input
                      type="text"
                      name="qty"
                      value="1"
                      class="w-12 text-center bg-gray-100 outline-none"
                    />
                    <button class="px-2 py-0 shadow">+</button>
                  </div>
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">Rp. 150.000</td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                    x
                  </button>
                </td>
              </tr>
              <tr>
                <td class="p-4 px-6 text-center whitespace-nowrap"></td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <div class="font-bold">Total Qty - 2</div>
                </td>
                <td class="p-4 px-6 font-extrabold text-center whitespace-nowrap">
                  Total - Rp. 270.000
                </td>
                <td class="p-4 px-6 text-center whitespace-nowrap">
                  <button class="px-4 py-1 text-red-600 bg-red-100">
                    Clear All
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="flex justify-end mt-4 space-x-2">
            <a href="index">
                <button class="px-6 py-3 text-sm text-gray-800 bg-gray-200 hover:bg-gray-400">
                    Cancel
                </button>
            </a>
            <button
            class="px-6 py-3 text-sm text-white bg-indigo-500 hover:bg-indigo-600">
                Proceed to Checkout
            </button>
          </div>
        </div>
      </div>
</x-home-layout>