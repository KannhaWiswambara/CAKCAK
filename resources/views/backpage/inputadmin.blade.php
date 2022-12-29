<x-admin-layout>
    <h2 class="font-semibold  text-xl  text-gray-800  leading-tight">
        <!--  menampilkan  variabel  title  yang  dikirim  dari  controller-->
        {{$title}}
    </h2>
              <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0">
                  <form enctype="multipart/form-data" action"{{(isset($package))?route('admin.update',$package->package_id):route('admin.store')}}" method="POST">
                    @CSRF
                    @if(isset($package))@method('PUT')@endif
                    <div class="overflow-hidden shadow sm:rounded-md">
                      <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                          
                          <div class="col-span-6 sm:col-span-4">
                            <label for="package_name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="package_name" id="package_name" value="{{(isset($package))?$package->package_name:old('package_name')}}"
                            placeholder="name" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('package_name')
                            <div class="text-xs text-red-800">{{$message}}</div>
                            @enderror
                          </div>
            
                          <div class="col-span-6">
                            <label for="package_code" class="block text-sm font-medium text-gray-700">Code</label>
                            <input type="text" name="package_code" id="package_code" value="{{(isset($package))?$package->package_code:old('package_code')}}"
                            placeholder="code" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('package_code')
                            <div class="text-xs text-red-800">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="col-span-6">
                            <label for="comunities" class="block text-sm font-medium text-gray-700">Comunity</label>
                            <select name="comunities" id="comunity_id" placeholder="Comunity" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              @foreach($comunities as $item)

                                <option 
                                {{((isset($package)&&$package->comunity_id==$item->comunity_id)||old('comunity_id')==$item->comunity_id)?'selected':''}}
                                value="{{$item->comunity_id}}">{{$item->comunity_id}}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="col-span-6">
                            <label for="comunities" class="block text-sm font-medium text-gray-700">DESC</label>
                            <textarea name="package_desc" id="DESC" cols="50" rows="2" placeholder="name" required>
                              {{(isset($package))?$package->package_desc:old('package_desc')}}
                            </textarea>
                          </div>

                        </div>
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                              <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                  <label for="feature_img" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input type="file" name="feature_img" value="{(isset($package))?$package->feature_img:old('feature_img')}}" id="foto" placeholder="name">
                                  </label>
                                  <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                      </div>
                    </div>
                    
                  </form>
            </div>
        </div>

</x-admin-layout>