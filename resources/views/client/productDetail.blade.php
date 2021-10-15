@extends('layout.header')
@section('content')
{{-- slider --}}
<div class="tw-w-full tw-h-96">
    <img id="img" class="tw-w-full tw-h-full" src="https://giayhiendai.com/upload/hinhanh/slider-19801.jpg" alt="">
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
    <!-- Sản phẩm chi tiết -->
    <div class="tw-flex tw-justify-between tw-w-full">
        <!--!!-->
        <div class="tw-w-3/12">
            <!-- 3 ảnh (để chạy) mẫu khác của sản phẩm -->
            @for ($i = 0; $i < count(json_decode($products[0]->url_image, true)); $i++) <!-- Mặc dù kết quả trả về chỉ có 1 thôi nma vì 1 lý do gì đó mà $products ở đây lại trả về dưới dạng array nên phải thêm index 0 để hoặt động!-->
                <button onclick="setImage{{ $i+1 }}()">
                    <div>
                        <img id="image{{ $i+1 }}" class="tw-w-5/6  tw-mt-4 tw-mb-2 tw-object-contain" src="/img/anh_giay_nam/{{ json_decode($products[0]->url_image, true)[$i]  }}" alt="" width="512" height="384">
                    </div>
                </button>
            @endfor
        </div>
        <!-- Ảnh to để ở giữa trang -->
        <div class="tw-w-6/12">
            <img id="image" class="tw-pl-2 tw-pt-28 tw-h-5/6 tw-object-contain" src="/img/anh_giay_nam/{{ json_decode($products[0]->url_image, true)[0] }}" alt="">
        </div>
        <script>
            var a1 = document.getElementById("image");
            var b1 = document.getElementById("image1");
            var c1 = document.getElementById("image2");
            var d1 = document.getElementById("image3");
            function setImage1() {
                a1.src = b1.src;
            }
            function setImage2() {
                a1.src = c1.src;
            }
            function setImage3() {
                a1.src = d1.src;
            }
        </script>
        <!-- Phần thông tin sản phẩm -->
        <div class="tw-w-4/12 tw-pl-8">
            <!-- Thông tin -->
            <div class="tw-flex tw-flex-wrap tw-pt-10">
                <h1 class="tw-flex-auto tw-text-3xl tw-font-semibold"> <!-- Tên sp -->
                    {{ $productName }}
                </h1>
                <div class="tw-text-xl tw-font-semibold tw-text-gray-700 tw-ml-1"> <!-- Giá sau khi giảm giá -->
                    {{ $products[0]->discount }}$
                </div>
                <div class="tw-text-sm tw-font-semibold tw-text-gray-500 tw-pl-2 tw-line-through"> <!-- Giá gốc -->
                    {{ $products[0]->price }}$
                </div>
                <div class="tw-w-full tw-flex-none tw-text-sm tw-font-medium tw-text-gray-700"> <!-- Mô tả ngắn -->
                    {{ $products[0]->description }}
                </div>
            </div>
            <form action="{{ URL::to('/client/cart') }}" method="POST">
                {{ csrf_field() }}
                <!-- Thanh chọn màu -->
                <div class="tw-flex tw-items-baseline tw-mt-4 tw-mb-6">
                    <div class="tw-px-2 tw-flex">      
                        @foreach ($componentList as $component)
                            <a  href="/{{ $productName }}/{{ $component->id_product }}/{{ $component->id_product_detail }}/{{ $component->color_name }}">
                                <img src="/img/anh_giay_nam/{{ $component->thumbnail }}" alt="" class="tw-p-1">
                            </a>
                            <input type="hidden" value="{{$component->color_name}}" name="color" class="form-control">
                            <input type="hidden" value="{{$component->id_product}}" name="id_product" class="form-control">
                            <input type="hidden" value="{{$component->id_product_detail}}" name="id_product_detail" class="form-control">
                        @endforeach
                    </div>
                </div>
                <?php
                    $id_cus = Session::get('id_cus');
                    echo'
                    <input type="hidden" value="'.$id_cus.'" name="id_cus" class="form-control">'
                ?>
                
                <!-- Thanh chọn size -->
                <div class="tw-flex tw-items-baseline tw-mt-4 tw-mb-6 tw-flex-wrap tw-font-normal tw-justify-center tw-inline-block tw-relative">
                    <select name="size" class="tw-block tw-pl-2 tw-appearance-none tw-w-full tw-bg-white tw-border-b tw-border-gray-400 hover:tw-border-gray-700 tw-py-1 tw-rounded tw-shadow tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                        <option>Size:</option>
                        @foreach ($componentList as $component)
                            <option>{{ $component->product_size }}</option>
                        @endforeach
                    </select>
                    <div class="tw-flex tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-items-center tw-px-2 tw-text-gray-700">
                        <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>

                {{-- Chọn số lượng --}}
                <div class="custom-number-input tw-h-10 tw-w-32 tw-pb-32">
                    <label for="custom-input-number" class="tw-w-full tw-text-gray-700 tw-text-sm tw-font-semibold">Số lượng:
                    </label>
                    <div class="tw-flex tw-flex-row tw-h-10 tw-w-full tw-rounded-lg tw-relative tw-bg-transparent tw-mt-1">
                        <button data-action="decrement" type="button" class=" tw-bg-gray-50 tw-text-gray-600 hover:tw-text-gray-700 hover:tw-bg-gray-400 tw-h-full tw-w-20 tw-rounded-l tw-cursor-pointer tw-outline-none">
                            <span class="tw-m-auto tw-text-2xl tw-font-thin">−</span>
                        </button>
                        <input type="number" class="tw-outline-none focus:tw-outline-none tw-text-center tw-w-full tw-bg-gray-50 tw-font-semibold tw-text-md hover:tw-text-black focus:tw-text-black  md:tw-text-basecursor-default tw-flex tw-items-center tw-text-gray-700" name="amount" value="0">
                        <button data-action="increment" type="button" class="tw-bg-gray-50 tw-text-gray-600 hover:tw-text-gray-700 hover:tw-bg-gray-400 tw-h-full tw-w-20 tw-rounded-r tw-cursor-pointer tw-outline-none">
                            <span class="tw-m-auto tw-text-2xl tw-font-thin">+</span>
                        </button>
                    </div>
                </div> 
                  <style>
                    input[type='number']::-webkit-inner-spin-button,
                    input[type='number']::-webkit-outer-spin-button {
                      -webkit-appearance: none;
                      margin: 0;
                    }
                  
                    .custom-number-input input:focus {
                      outline: none !important;
                    }
                  
                    .custom-number-input button:focus {
                      outline: none !important;
                    }
                  </style>
                  
                  <script>
                    function decrement(e) {
                      const btn = e.target.parentNode.parentElement.querySelector(
                        'button[data-action="decrement"]'
                      );
                      const target = btn.nextElementSibling;
                      let value = Number(target.value);
                      value--;
                      target.value = value;
                    }
                  
                    function increment(e) {
                      const btn = e.target.parentNode.parentElement.querySelector(
                        'button[data-action="decrement"]'
                      );
                      const target = btn.nextElementSibling;
                      let value = Number(target.value);
                      value++;
                      target.value = value;
                    }
                  
                    const decrementButtons = document.querySelectorAll(
                      button[data-action="decrement"]
                    );
                  
                    const incrementButtons = document.querySelectorAll(
                      button[data-action="increment"]
                    );
                  
                    decrementButtons.forEach(btn => {
                      btn.addEventListener("click", decrement);
                    });
                  
                    incrementButtons.forEach(btn => {
                      btn.addEventListener("click", increment);
                    });
                  </script>
                {{-- <div class="tw-pb-8">
                    <label for="amount">Số lượng:</label>
                    <input class="tw-block tw-pl-2 tw-appearance-none tw-w-full tw-bg-white tw-border-b tw-border-gray-400 hover:tw-border-gray-700 tw-py-1 tw-rounded tw-shadow tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline" type="number" name="amount" id="amount" value="1">
                </div> --}}
                <!-- Thanh thêm vào giỏ hàng, mua ngay -->
                <div class="tw-mb-2 tw-text-sm tw-font-medium">
                    <div class="">
                        <form action="{{ URL::to('/client/pay') }}" method="GET"> 
                            <?php
                                $id_cus = Session::get('id_cus');
                                echo $id_cus;
                                //<input type="hidden" value="'.$id_cus.'" name="id_cus" class="form-control">
                            ?>
                        <button class="tw-w-full tw-py-2 tw-mb-2 tw-items-center tw-justify-center tw-rounded-md tw-bg-black tw-text-white hover:tw-bg-gray-800" type="submit">Buy now</button> </form>
                        <form action="{{ URL::to('/client/cart') }}" method="GET"> 
                        <button class="tw-w-full tw-py-2 tw-mb-2 tw-items-center tw-justify-center tw-rounded-md tw-border tw-border-gray-900 hover:tw-bg-gray-50" type="submit">Add to bag</button> </form>
                    </div>
                    <!-- Nút thêm vào yêu thích -->
                    <div>
                        <button onclick="setColor()" id="btn" class="tw-flex tw-items-center tw-justify-center tw-w-full tw-h-9 tw-rounded-md tw-text-gray-400 tw-border tw-border-pink-900 tw-bg-white hover:tw-bg-gray-50" type="button" aria-label="like">
                            <svg width="20" height="20" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>
                        <script>
                            var count = 1;
                            function setColor() {
                                var property = document.getElementById("btn");
                                if (count == 0) {
                                    property.style.color = "gray" 
                                    count = 1;        
                                }
                                else {
                                    property.style.color = "red"
                                    count = 0;
                                }
                            }
                        </script>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Phần đánh giá, mô tả -->
    <div class="tw-pt-10 tw-border-t-2">
        <div class="tw-flex">
            <div class="tw-w-1/2">
                <img class="tw-object-contain" src="https://giaynamvip.com/upload/product/gnk103/giay-boot-nam-co-cao-da-bo-that-chat-choi-5.jpg">
            </div>
            <div class="tw-w-1/2">
                <div class="tw-pl-8">
                    <div class="tw-text-3xl tw-font-semibold tw-float-left tw-pb-16">
                        <p>GIÀY STAN SMITH <br></p>
                        <p>STAN SMITH, MÃI MÃI. ĐẬM CHẤT BIỂU TƯỢNG. GIỜ ĐÂY CÀNG BỀN VỮNG HƠN.</p>   
                    </div>
                    <div class="tw-text-sm tw-font-semibold tw-float-rights tw-w-full tw-text-gray-500">
                            Vẻ đẹp kinh điển. Phong cách vốn dĩ. Đa năng hàng ngày. 
                            Suốt hơn 50 năm qua và chưa dừng ở đó, giày adidas Stan Smith luôn giữ vững vị trí là một biểu tượng. 
                            Đôi giày này là phiên bản cải biên mới mẻ, thể hiện cam kết của adidas hướng tới chỉ sử dụng polyester tái chế bắt đầu từ năm 2024. 
                            Thêm vào đó, đế ngoài làm từ cao su phế liệu càng tôn lên phong cách kinh điển.   
                            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. 
                            Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-flex">
            <div class="tw-w-1/2">
                <div class="tw-pt-4 tw-pb-6 tw-border-b-2 tw-border-gray-50">
                    <div class="ttw-ext-xl tw-font-medium tw-text-gray-700">
                        Thông số:
                    </div>
                    <div class="ftw-lex">
                        <div class="tw-h-full tw-w-1/2 tw-ml-4 tw-list-inside">
                            <li>Dánh regular fit</li>
                            <li>Có dây buộc</li>
                            <li>Chất liệu tổng hợp</li>
                        </div>
                        <div class="tw-h-full tw-w-1/2 tw-list-inside tw-pr-4">
                            <li>Đế ngoài bằng cao su</li>
                            <li>Primegreen</li>
                            <li>Mã sản phẩm: FX0511</li>
                        </div>
                    </div>
                </div>
                <div class="tw-flex tw-mr-2 tw-mt-6">
                    <div class="tw-text-xl tw-font-medium tw-text-gray-700 tw-w-2/3">
                        Xếp hạng và đánh giá
                    </div>
                    <div class="tw-flex tw-w-1/3">
                        <svg width="20" height="20" fill="currentColor" class="tw-text-yellow-600">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="tw-ml-1">
                            <span class="tw-text-black">4.94</span>
                            <span class="sm:tw-hidden md:tw-inline">(128)</span>
                        </div>
                    </div>
                </div>
                <div class="tw-flex tw-text-sm tw-font-medium tw-text-gray-700 tw-w-2/3 tw-mt-2">
                    20/07/2020 <!-- Ngày đánh giá -->
                    <div class="tw-ml-32 tw-flex">
                        <svg width="20" height="20" fill="currentColor" class="tw-text-yellow-600 tw-mr-0">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="tw-ml-1">
                            <span class="tw-text-black">4.5</span> <!-- Vote ../5 -->
                        </div>
                    </div>
                </div>
                <div class="tw-col-start-1 tw-row-start-3 tw-space-y-3 tw-pr-4 tw-pt-2"> <!-- Thông tin người mua -->
                    <p class="tw-flex tw-items-center tw-text-black tw-text-sm tw-font-medium">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="tw-w-6 tw-h-6 tw-rounded-full tw-mr-2 tw-bg-gray-100">
                        Trần Xuân Hương
                    </p>
                </div>
                <p class="tw-w-2/3">Sản Phẩm dùng tốt</p> <!-- Comment -->
                <div class="tw-flex tw-text-sm tw-font-medium tw-text-gray-700 tw-w-2/3 tw-mt-2">
                    26/03/2021
                    <div class="tw-ml-32 tw-flex">
                        <svg width="20" height="20" fill="currentColor" class="tw-text-yellow-600 mr-0">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="tw-ml-1">
                            <span class="tw-text-black">4.0</span>
                        </div>
                    </div>
                </div>
                <div class="tw-col-start-1 tw-row-start-3 tw-space-y-3 tw-pr-4 tw-pt-2">
                    <p class="tw-flex tw-items-center tw-text-black tw-text-sm tw-font-medium">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="tw-w-6 tw-h-6 tw-rounded-full tw-mr-2 tw-bg-gray-100">
                        Lê Hưng
                    </p>
                </div>
                <p class="tw-w-2/3">Sản Phẩm dùng tạm được</p>
                <div class="tw-flex tw-text-sm tw-font-medium tw-text-gray-700 tw-w-2/3 tw-mt-2">
                    12/06/2021
                    <div class="tw-ml-32 tw-flex">
                        <svg width="20" height="20" fill="currentColor" class="tw-text-yellow-600 mr-0">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="tw-ml-1">
                            <span class="tw-text-black">5.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
                    <p class="flex items-center text-black text-sm font-medium">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="tw-w-6 tw-h-6 tw-rounded-full tw-mr-2 tw-bg-gray-100">
                        Lê Minh Tiến
                    </p>
                </div>
                <p class="tw-w-2/3">Amazingg goodd chóp</p>
                <div class="tw-flex tw-text-sm tw-font-medium tw-text-gray-700 tw-w-2/3 tw-mt-2">
                    13/05/2021
                    <div class="tw-ml-32 tw-flex">
                        <svg width="20" height="20" fill="currentColor" class="tw-text-yellow-600 mr-0">
                            <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                        </svg>
                        <div class="tw-ml-1">
                            <span class="tw-text-black">4.5</span>
                        </div>
                    </div>
                </div>
                <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
                    <p class="flex items-center text-black text-sm font-medium">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="tw-w-6 tw-h-6 tw-rounded-full tw-mr-2 tw-bg-gray-100">
                        Lê Ngọc Văn
                    </p>
                </div>
                <p class="">Sản phẩm nên mua</p>
            </div>
            <div class="tw-w-1/2 tw-float-left">
                <img class="tw-object-contain" src="https://cf.shopee.vn/file/6428eb140b43d0904b6466cdd81489e1">
            </div>
        </div>
    </div>
    {{-- YOU MIGHT LIKE --}}
    <div class="tw-pt-20">
        <div class="tw-flex tw-justify-center tw-mb-10">
            <div class="tw-mx-10 tw-border-b-2 tw-border-yellow-500 tw-text-yellow-500">BEST SELLER</div>
            <div class="tw-mx-10">SALES</div>
        </div>
        <div class="splide" id="productSlide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($productList->unique('id_product') as $product)
                        <li class="splide__slide tw-px-2">
                            <a href="/{{ $product->product_name }}/{{ $product->id_product }}/{{ $product->id_product_detail }}">
                                <div class="tw-h-64 tw-w-full">
                                    <img src="/img/anh_giay_nam/{{ $product->thumbnail }}" alt="male shoes" class="tw-w-full tw-h-full">
                                </div>
                                <div class="tw-bg-gray-700 tw-flex tw-justify-between tw-w-full">
                                    <ul class="tw-w-full">
                                        <li class="tw-pt-4 tw-w-full">
                                            <div class="tw-flex">
                                                <h1 class="tw-flex-auto tw-text-l tw-font-semibold tw-text-white tw-pl-2"> <!-- Tên sp -->
                                                    <p>{{ $product->product_name }}</p>
                                                </h1>
                                                <div class="tw-text-l tw-font-semibold tw-text-white tw-pr-3"> <!-- Giá sau khi giảm giá -->
                                                    {{ $product->discount }}$
                                                </div>
                                                <div class="tw-text-sm tw-font-semibold tw-text-white tw-pr-2 tw-pl-2 tw-line-through tw-relative tw-float-left"> <!-- Giá gốc -->
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
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#productSlide',{
                perPage: 4,
                rewind : true,
            } ).mount();
        } );
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</div>
@endsection