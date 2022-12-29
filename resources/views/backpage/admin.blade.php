<x-admin-layout>
    <h2 class="font-semibold  text-xl  text-gray-800  leading-tight">
        <!--  menampilkan  variabel  title  yang  dikirim  dari  controller-->
        {{$title}}
    </h2>
    <div>
        <div class="shadow  px-6  py-4  bg-white  rounded  sm:px-1  sm:py-1  ">
            <div class="grid  grid-cols-12">
                <div class="col-span-6 p-4">
                    <a href="{{route('admin.create')}}">
                        <button class="px-4  py-1  text-sm  rounded  text-purple-600  font-semibold    border  border-purple-200  hover:text-white  hover:bg-purple-600  hover:border-transparent  focus:outline- none">Tambah</button>
                    </a>
                    <button class="px-4  py-1  text-sm  rounded  text-red-600  font-semibold    border  border-red-200  hover:text-white  hover:bg-red-600  hover:border-transparent  focus:outline- none">Delete</button>
                </div>
                
                    <div class="col-span-6  p-4  flex  justify-end">
                        <form action="{{route('admin.index')}}" method="GET">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                            <div>
                                <select name="comunity_id" id="comunity_id" placeholder="Comunity" required class="px-4 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @foreach($comunities as $item)
            
                                      <option 
                                      value="{{$item->comunity_id}}"
                                      {{(isset($_GET['comunity_id'])&&$_GET['comunity_id']==$item->comunity_id)?'selected':''}}>{{$item->comunity_name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div>
                                <input type="text" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}"
                                class="px-4  py-2  focus:ring-indigo-500  focus:border-indigo-500    rounded- none  rounded-l-md  sm:text-sm  border-gray-300">
                                <button type="submit" class="rounded-r-md  border  border-l-0  px-4  py-1  border-gray-300  bg-gray-50  text-gray-500  text-blue-600  hover:text-white  hover:bg-blue-600"> Cari</button>
                            </div>
                        </div>
                        </form>
                    </div>
                
            </div>
            <div class="py-2  align-middle  inline-block  min-w-full  sm:px-4  lg:px-4">
                <div class="shadow  overflow-hidden  border-b  border-gray-200  sm:rounded-lg">
                    <table class="min-w-full  divide-y  divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6  py-3  text-centre  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Nama
                                </th>
                                <th scope="col" class="px-6  py-3  text-left  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Code
                                </th>
                                <th scope="col" class="px-6  py-3  text-left  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Desc
                                </th>
                                <th scope="col" class="px-6  py-3  text-right  text-xs  font-medium  text-gray-500  uppercase  tracking-wider"> Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white  divide-y  divide-gray-200">
                            @foreach ($package as $key=>$item)
                                <tr>
                                    <td class="px-6  py-4  whitespace-nowrap">
                                        <div class="flex  items-center"><input type="checkbox" name="" id="">
                                            <div class="flex-shrink-0  h-10  w-10">
                                                <img class="h-10  w-10  rounded-full" src"{{$item->feature_img}}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm  font-medium  text-gray-900">
                                                    {{$item->package_name}}
                                                </div>
                                                <div class="text-sm  text-gray-500">
                                                    {{$item->package_id}}
                                                </div>
                                                <div class="text-sm  text-gray-500">
                                                    {{$item->comunity->comunity_name}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap">
                                        <div class="text-sm  text-gray-900">{{$item->package_code}}</div>
                                        <div class="text-sm  text-gray-500"></div>
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap  text-sm  text-gray-500">
                                        {{$item->package_desc}}
                                    </td>
                                    <td class="px-6  py-4  whitespace-nowrap  text-right  text-sm  font-medium">
                                        <a href="{{route('admin.edit', $item->package_id)}}">Edit</a>
                                        <form action="{{route('admin.destroy', $item->package_id)}}" method="POST">
                                            <!--  Form  lengkap  dengan  token  csrf  untuk  method(DELETE)--> 
                                            @csrf @method('DELETE')
                                            <!--  button  action  untuk  delete-->
                                            <button class="text-red-600  hover:text-red-900" onclick="return  confirm('You Sure  ?')"
                                                type="submit">Del</button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </x-admin-layout>
