@extends('layout.header')
@section('content')
{{-- slider --}}
<div class="tw-w-full tw-h-96">
  <img id="img" class="tw-w-full tw-h-full" src="https://giayhiendai.com/upload/hinhanh/slider-19801.jpg" alt="" width="512" height="384">
  <script type="text/javascript">
      var img = document.getElementById("img");
      var currentPos = 0;
      var imgs = ["https://giayhiendai.com/upload/hinhanh/slider-19801.jpg",
      "https://htstore87.com/wp-content/uploads/2021/04/slider_2.png",];
      function volgendefoto()
      {
          if(++currentPos > 1)
              currentPos = 0;
          img.src = imgs[currentPos];
      }
      setInterval(volgendefoto, 5000);
  </script>
</div>
<div class="tw-px-32 tw-py-5">
  <!-- Chon mau giay -->
  <div class="tw-mx-5">
    <div class="tw-font-bold tw-text-5xl tw-pb-10">
        Shoes selector
    </div>
    <div class="tw-flex tw-flex-row tw-flex-wrap tw-pr-5">
        <img src="{{asset("img/anh_giay_nam/male_shoes(1).jpg")}}" alt="" class="tw-w-1/3 tw-h-full tw-object-contain">
        
        <div class="tw-bg-gray-300 tw-w-4/6 tw-pt-14">
            <ul class="tw-flex tw-flex-wrap tw-font-normal tw-justify-center tw-w-full">
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Category</option>
                          <option>Football</option>
                          <option>Tennis</option>
                          <option>Basketball</option>
                          <option>Running</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Size</option>
                          <option>37</option>
                          <option>39</option>
                          <option>40</option>
                          <option>41</option>
                          <option>42</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Material</option>
                          <option>Cotton</option>
                          <option>Leather</option>
                          <option>Nilon</option>
                          <option>Plastic</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
            </ul>
            <ul class="tw-flex tw-flex-wrap tw-font-normal tw-justify-center">
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Price</option>
                          <option>Low</option>
                          <option>Expensive</option>
                          <option>On sale</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Brand</option>
                          <option>Nikadas Original</option>
                          <option>Nikadas F1</option>
                          <option>Bitis</option>
                          <option>Thuong Dinh</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Surface</option>
                          <option>Smooth</option>
                          <option>Spike</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
            </ul>
            <ul class="tw-flex tw-flex-wrap tw-font-normal tw-justify-center">
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Color</option>
                          <option>Yellow</option>
                          <option>Red</option>
                          <option>Blue</option>
                          <option>Black</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Shoes height</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
                <li class=" tw-w-1/3 tw-p-5">
                    <div class="tw-inline-block tw-relative tw-w-full">
                        <select class="tw-block tw-appearance-none tw-w-full tw-bg-gray-300 tw-border-b-2 tw-border-black tw-px-4 tw-py-2 tw-pr-8 tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                          <option>Athletes</option>
                          <option>Giannis Antetokounmpo</option>
                          <option>Russell Westbrook</option>
                          <option>Anthony Davis</option>
                          <option>Duncan Robinson</option>
                        </select>
                        <div class="tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                          <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </li>
            </ul>
        </div>
    </div>
  </div>
  <!-- Chon mau giay -->
  <div class="tw-mx-5 tw-mt-16">
      <div class="tw-font-bold tw-text-5xl tw-pb-10 ">
          Men shoes
      </div>
      <div class="tw-flex-col tw-justify-center tw-items-center">
          <ul class="tw-flex tw-flex-wrap tw-font-normal tw-w-full ">
            @foreach ($products->unique('id_product') as $product)
            <li class="tw-my-5 tw-pr-5 tw-ml-0 tw-w-1/4">
              <div>
                  <div>
                      <img src="img/anh_giay_nam/{{ json_decode($products[0]->url_image, true)[0] }}" alt="male shoes" class="tw-w-full tw-object-contain">
                  </div>
                  <div class="tw-bg-gray-700 tw-flex tw-justify-between tw-w-full">
                    <ul class="tw-w-full">
                    <li class="tw-pt-4 tw-w-full">
                        <div class="tw-flex">
                            <h1 class="tw-flex-auto tw-text-l tw-font-semibold tw-text-white tw-pl-2"> <!-- Tên sp -->
                                <p>{{ $product->product_name }}</p>
                            </h1>
                            <div class="tw-text-l tw-font-semibold tw-text-white tw-pl-8"> <!-- Giá sau khi giảm giá -->
                                {{ $product->discount }}
                            </div>
                            <div class="tw-text-sm tw-font-semibold tw-text-white tw-pl-2 tw-pr-2 tw-line-through tw-relative tw-float-left"> <!-- Giá gốc -->
                                {{ $product->price }}
                            </div>
                        </div>
                    </li>
                    <li class="tw-w-full tw-text-sm tw-font-medium tw-text-white tw-pb-4 tw-pl-2">
                        {{ $product->description }}
                    </li>
                </ul>
                </div>
              </div>
              </li>
            @endforeach
          </ul>
          <div class=" tw-text-center">
            {{ $products->links() }}
          </div>
          <style>
            .w-5{
              display: none;
            }
          </style>
      </div>
  </div>
</div>
@endsection