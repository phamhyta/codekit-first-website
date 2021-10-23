@extends('layout.header') 
@section('content')
  <div class="tw-mx-5 tw-mt-16">
    <div class="tw-font-bold tw-text-3xl tw-pb-10 tw-text-center ">
        Kết quả tìm kiếm
    </div>
    <div class="tw-flex-col tw-justify-center tw-items-center">
        <ul class="tw-flex tw-flex-wrap tw-font-normal tw-w-full ">
          @foreach ($search_product as $product)
            <li class="tw-my-5 tw-pr-5 tw-ml-0 tw-w-1/4">
              <a href="/{{ $product->product_name }}/{{ $product->id_product }}/{{ $product->id_product_detail }}">
                  <div>
                      <img src="img/anh_giay_nam/{{ $product->thumbnail }}" alt="male shoes" class="tw-w-full tw-object-contain">
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
              </a>
            </li>
          @endforeach
        </ul>
    </div>
</div>

@endsection
