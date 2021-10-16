@extends('layout.header')
@section('content')
<div class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
            <img src="img/home-poster-1.jpg" alt="">
        </li>
        <li class="splide__slide">
            <img src="img/home-poster-2.jpg" alt="">
        </li>
        <li class="splide__slide">
            <img src="img/home-poster-3.jpg" alt="">
        </li>
      </ul>
    </div>
</div>

<div class="tw-pt-10 tw-flex tw-flex-row tw-justify-around">
    <div class="tw-w-1/2 tw-relative tw-mx-3">
        <img src="img/nike-summer.jpeg" alt="" class=" tw-h-full tw-w-full tw-object-contain">
        <div class=" tw-absolute tw-top-5 tw-left-0 tw-flex tw-flex-col tw-justify-center tw-items-center">
            <div class="tw-text-center tw-text-2xl tw-font-black">OUR SUMMER COLECTION</div>
            <button class="tw-mt-2 tw-border-2 tw-border-gray-800  tw-bg-gray-800 tw-text-center tw-text-white tw-py-2 tw-px-8 hover:tw-bg-white hover:tw-text-black hover:tw-border-white">Discover</button>
        </div>
    </div>
    <div class="tw-w-1/2 tw-relative tw-mx-3">
        <img src="img/basketball.jpeg" alt="" class=" tw-h-full tw-w-full tw-object-contain">
        <div class=" tw-absolute tw-top-5 tw-left-5 tw-flex tw-flex-col tw-justify-center tw-items-center">
            <div class="tw-text-center tw-text-2xl tw-font-black tw-text-white">MORE BASKETBALL SHOES</div>
            <button class="tw-mt-2 tw-border-2 tw-border-gray-800  tw-bg-gray-800 tw-text-center tw-text-white tw-py-2 tw-px-8 hover:tw-bg-white hover:tw-text-black hover:tw-border-white">Discover</button>
        </div>
    </div>
</div>

<div class="tw-pt-16 tw-flex tw-flex-row tw-justify-around">
    <div class="tw-relative tw-w-1/2 tw-mx-3">
        <img src="img/anh_giay_nam/male_shoes(100).jpg" alt="" class="tw-h-full tw-w-full tw-object-contain">
        <div class="tw-absolute  tw-bottom-5 tw-left-0 tw-right-0 tw-mx-auto tw-flex tw-flex-col tw-justify-center tw-items-center">
            <div class="tw-text-center tw-text-3xl tw-font-black">MEN SHOES</div>
            <a href="/men">
                <button class="tw-mt-2 tw-border-2 tw-border-gray-800  tw-bg-gray-800 tw-text-center tw-text-white tw-py-2 tw-px-8 hover:tw-bg-white hover:tw-text-black hover:tw-border-white">Discover</button>
            </a>
        </div>
    </div>
    <div class="tw-relative tw-w-1/2 tw-mx-3">
        <img src="img/anh_giay_nam/male_shoes(110).jpg" alt="" class="tw-h-full tw-w-full tw-object-contain">
        <div class="tw-absolute  tw-bottom-5 tw-left-0 tw-right-0 tw-mx-auto tw-flex tw-flex-col tw-justify-center tw-items-center">
            <div class="tw-text-center tw-text-3xl tw-font-black">WOMEN SHOES</div>
            <a href="/women">
                <button class="tw-mt-2 tw-border-2 tw-border-gray-800  tw-bg-gray-800 tw-text-center tw-text-white tw-py-2 tw-px-8 hover:tw-bg-white hover:tw-text-black hover:tw-border-white">Discover</button>
            </a>
        </div>
    </div>
</div>

<div class="tw-pt-20">
    <div class="tw-flex tw-justify-center tw-mb-10">
        <div class="tw-mx-10 tw-border-b-2 tw-border-yellow-500 tw-text-yellow-500">BEST SELLER</div>
        <div class="tw-mx-10">SALES</div>
    </div>
    <div class="splide" id="productSlide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($products as $product)
                    <li class="splide__slide tw-px-5">
                        <a href="/{{ $product->product_name }}/{{ $product->id_product }}/{{ $product->id_product_detail }}">
                            <div class="tw-h-64 tw-w-full">
                                <img src="img/anh_giay_nam/{{ $product->thumbnail }}" alt="male shoes" class="tw-h-full tw-w-full">
                            </div>
                            <div class="tw-bg-gray-700 tw-flex tw-justify-between tw-w-full">
                              <ul class="tw-w-full">
                                <li class="tw-pt-4 tw-w-full">
                                    <div class="tw-flex">
                                        <h1 class="tw-flex-auto tw-text-l tw-font-semibold tw-text-white tw-pl-2"> <!-- Tên sp -->
                                            <p>{{ $product->product_name }}</p>
                                        </h1>
                                        <div class="tw-text-l tw-font-semibold tw-text-white tw-pl-8 tw-pr-1"> <!-- Giá sau khi giảm giá -->
                                            {{ $product->discount }}$
                                        </div>
                                        <div class="tw-text-sm tw-font-semibold tw-text-white tw-pl-2 tw-pr-2 tw-line-through tw-relative tw-float-left"> <!-- Giá gốc -->
                                            {{ $product->price }}$
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
</div>

<div class="tw-flex tw-flex-row tw-py-20">
    <div class="tw-w-1/2 tw-mx-5">
        <div class=" tw-font-semibold tw-text-4xl">Kyrie Irving</div>
        <img src="img/irving-nike.jpeg" alt="" class="tw-w-full tw-h-full tw-object-contain">
    </div>
    <div class="tw-w-1/2 tw-mx-5">
        <div class=" tw-font-semibold tw-text-4xl">Giannis Antetokounmpo</div>
        <img src="img/giannis-nike.jpeg" alt="" class="tw-w-full tw-h-full tw-object-contain">
    </div>
</div>

<div class="splide px-20" id="nikadas-new">
    <div class="splide__track">
        <ul class="splide__list">
            <?php
                for($i = 1; $i <= 8; $i++){
                    echo '<li class="splide__slide tw-px-5">
                        <div>
                            <div>
                                <img src="img/nikadas-new-'.$i.'.jpeg" alt="" class="tw-mb-2 tw-h-full tw-w-full tw-object-contain">
                                <div class="tw-flex tw-flex-row tw-justify-center tw-absolute tw-left-0 tw-right-0 tw-mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="tw-h-6 tw-w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <div class="tw-ml-1 tw-text-gray-800">
                                        10/09/2021
                                    </div>
                                    <div class="tw-ml-2 tw-text-gray-800">
                                        Đăng bởi:
                                    </div>
                                    <div class=" tw-text-gray-700 tw-font-semibold">
                                        Tiến
                                    </div>
                                </div>
                            </div>
                            <div class="tw-bg-gray-200 tw-mt-10">
                                <div class=" tw-text-center tw-font-bold tw-text-2xl tw-my-5 tw-pt-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                                <div class=" tw-text-center tw-mb-10 mx-5 tw-pb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum exercitationem voluptatem corrupti deserunt magni.</div>
                            </div>
                        </div>
                    </li>';    
                }
            ?>
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide( '.splide', {
            perPage    : 1,
            height     : '100vh',
            cover      : true,
            type        : 'loop',
            autoplay    : true,
            pauseOnHover: false,
        } ).mount();
    });

    document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#productSlide',{
            perPage: 4,
	        rewind : true,
        } ).mount();
	} );

    document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#nikadas-new',{
            perPage: 3,
	        rewind : true,
        } ).mount();
	} );
</script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
@endsection