@extends('layout.header')
@section('content')
<div class="tw-flex tw-flex-row tw-pt-10">
    <div class="tw-w-3/4 tw-ml-5 tw-mr-20">
        <div class="tw-flex tw-flex-row tw-justify-center">
            <div class="tw-w-1/3 tw-bg-gray-200 tw-text-center tw-relative">
                <div class="tw-uppercase tw-italic tw-absolute tw-top-8 tw-bottom-0 tw-left-0 tw-right-0 tw-m-auto">Free Delivery</div>
            </div>
            <div class="tw-w-2/3 tw-bg-black tw-text-white">
                <ul class="tw-ml-5 tw-my-2">
                    <li>Applies to orders of 300$ or more .</li>
                    <li>Elite member.</li>
                    <li>2km around  our nearest store.</li>
                </ul>
            </div>
        </div>
        <div class="tw-py-7 tw-font-black tw-text-4xl">Your bag</div>
                
        <div class="tw-pb-5">
            <div class=" tw-flex tw-flex-row tw-bg-gray-200">
                @foreach ( $product_info as $key => $pro_inf)
                <div class="tw-w-1/4 tw-p-5">
                    <img src="img/anh_giay_nam/male_shoes(1).png" alt="" class="tw-border tw-border-black tw-object-contain">
                </div>
                <div class="tw-w-3/4 tw-px-10 tw-py-5">
                    <div class="tw-flex tw-flex-row tw-justify-between">
                        <ul>
                            <li class="tw-pb-1 tw-font-bold tw-text-lg">{{ $pro_inf-> product_name }}</li>
                            <li class="tw-pb-3 tw-text-sm">{{ $pro_inf-> category_name }}</li>
                            <li class="tw-pb-2 tw-text-sm opacity-50">Color: {{$color}} </li>
                            <li class="tw-pb-2 tw-text-sm opacity-50">Size: {{$size}}</li>
                            <li class="tw-pb-4 tw-text-sm opacity-50">Quantity: {{$amount}}</li>
                        </ul>
                        <div class=" tw-underline tw-font-bold tw-text-lg">{{ $pro_inf-> discount }}$</div>
                    </div>
                    <div>
                        <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Add to whislist</button>
                        <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Change</button>
                        <button class=" hover:tw-text-gray-400">Remove</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
    <div class="tw-w-1/4 tw-flex tw-flex-col tw-mr-20 tw-pt-20">
        <div class="tw-flex tw-flex-row tw-pb-5">
            <div class="w-1/2">
                ORDER SUMMARY
            </div>
            <div class="border-b border-black h-0 w-1/2 pt-3"></div>
        </div>
        <div class="tw-flex tw-flex-row tw-justify-between tw-pb-5">
            <div>
                Subtotal
            </div>
            <div>
                320$
            </div>
        </div>
        <div class="tw-flex tw-flex-row tw-justify-between tw-pb-5">
            <div>
                Delivery
            </div>
            <div>
                FREE
            </div>
        </div>
        <div class="tw-border-b tw-border-black">
        </div>
        <div class="tw-flex tw-flex-row tw-justify-between tw-pt-3 tw-pb-10">
            <div>
                Total
            </div>
            <div>
                320$
            </div>
        </div>

        <button class="tw-py-4 tw-px-2 tw-border-black tw-text-white tw-bg-black hover:tw-bg-gray-200 hover:tw-text-black hover:tw-border-gray-200">CHECK OUT</button>
    </div>
</div>

<div class="tw-w-2/3 tw-pt-20 tw-pl-5 tw-pr-20">
    <div class=" tw-text-4xl tw-font-bold tw-pb-8">
        Wishlist
    </div>
    <div class="tw-pb-5">
        <div class=" tw-flex tw-flex-row tw-bg-gray-200">
            <div class="tw-w-1/4 tw-p-4">
                <img src="img/anh_giay_nam/male_shoes(1).jpg" alt="" class="tw-border tw-border-black tw-object-contain">
            </div>
            <div class="tw-w-3/4 tw-px-10 tw-py-5">
                <div class="tw-flex tw-flex-row tw-justify-between">
                    <ul>
                        <li class="tw-pb-1 tw-font-bold tw-text-lg">NIKE AIR MAX 90</li>
                        <li class="tw-pb-3 tw-text-sm">Men Shoes</li>
                        <li class="tw-pb-2 tw-text-sm tw-opacity-50">Color White</li>
                        <li class="tw-pb-2 tw-text-sm tw-opacity-50">Size 41</li>
                        <li class="tw-pb-4 tw-text-sm tw-opacity-50">Quantity 1</li>
                    </ul>
                    <div class=" tw-underline tw-font-bold tw-text-lg">160$</div>
                </div>
                <div>
                    <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Add to whislist</button>
                    <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Change</button>
                    <button class=" hover:tw-text-gray-400">Remove</button>
                </div>
            </div>
        </div>
    </div>
    <div class="tw-bg-gray-200 tw-w-full tw-h-32 tw-relative">
        <div class="tw-underline tw-mt-5 tw-ml-5 tw-absolute">
            You have no wishlist items
        </div>
    </div>
</div>
<div class="tw-border-b tw-border-gray-100 tw-pt-5"></div>

<div class="tw-py-10">
    <div class="tw-flex tw-justify-center tw-mb-10">
        <div class="tw-mx-10 tw-border-b-2 tw-border-yellow-500 tw-text-yellow-500">YOU MIGHT LIKE</div>
        <div class="tw-mx-10">SALES</div>
    </div>
    <div class="splide" id="productSlide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                    for($i = 1; $i <= 9; $i++){
                        echo '<li class="splide__slide tw-px-5">
                                <div>
                                    <div>
                                        <img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'" alt="male shoes" class="tw-w-full tw-object-contain">
                                        </div>
                                        <div class="tw-bg-gray-700 tw-flex tw-justify-between tw-w-full">
                                        <ul class="tw-w-full">
                                            <li class="tw-pt-4 tw-w-full">
                                                <div class="tw-flex">
                                                    <h1 class="tw-flex-auto tw-text-l tw-font-semibold tw-text-white tw-pl-2"> <!-- Tên sp -->
                                                        <p>NIKE FAKE</p>
                                                    </h1>
                                                    <div class="tw-text-l tw-font-semibold tw-text-white tw-pl-8"> <!-- Giá sau khi giảm giá -->
                                                        $90.00
                                                    </div>
                                                    <div class="tw-text-sm tw-font-semibold tw-text-white tw-pl-2 tw-line-through tw-relative tw-float-left"> <!-- Giá gốc -->
                                                        $110.00
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="tw-w-full tw-text-sm tw-font-medium tw-text-white tw-pb-4 tw-pl-2">
                                                Sản phẩm không chính hãng
                                            </li>
                                        </ul>
                                    </div>
                                </div>                      
                            </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#productSlide',{
                perPage: 4,
                rewind : true,
            } ).mount();
        } );
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
@endsection




<?php
        //   for($i = 1; $i <= 2; $i++){
        //         echo '<div class="tw-pb-5">
        //                 <div class=" tw-flex tw-flex-row tw-bg-gray-200">
        //                     @foreach ( $product_info as $key => $pro_inf)
        //                     <div class="tw-w-1/4 tw-p-5">
        //                         <img src="img/anh_giay_nam/male_shoes('.$i.').png" alt="" class="tw-border tw-border-black tw-object-contain">
        //                     </div>
        //                     <div class="tw-w-3/4 tw-px-10 tw-py-5">
        //                         <div class="tw-flex tw-flex-row tw-justify-between">
        //                             <ul>
        //                                 <li class="tw-pb-1 tw-font-bold tw-text-lg">{{ $pro_inf-> product_name }}</li>
        //                                 <li class="tw-pb-3 tw-text-sm">{{ $pro_inf-> category_name }}</li>
        //                                 <li class="tw-pb-2 tw-text-sm opacity-50">Color: $color </li>
        //                                 <li class="tw-pb-2 tw-text-sm opacity-50">Size: </li>
        //                                 <li class="tw-pb-4 tw-text-sm opacity-50">Quantity 1</li>
        //                             </ul>
        //                             <div class=" tw-underline tw-font-bold tw-text-lg">160$</div>
        //                         </div>
        //                         <div>
        //                             <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Add to whislist</button>
        //                             <button class="tw-border-r tw-border-black tw-pr-3 tw-mr-2 hover:tw-text-gray-400">Change</button>
        //                             <button class=" hover:tw-text-gray-400">Remove</button>
        //                         </div>
        //                     </div>
        //                     @endforeach
        //                 </div>
        //             </div>';
        //     }
        // ?>