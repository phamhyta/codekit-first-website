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
            <button onclick="setImage1()">
                <div>
                    <img id="image1" class="tw-w-5/6  tw-mt-4 tw-mb-2 tw-object-contain" src="https://cdn.under.vn/wp-content/uploads/2020/03/balenciaga-triple-s-vang-xanh-replica-11-1.jpg" alt="" width="512" height="384">
                </div>
            </button>
            <button onclick="setImage2()">
                <div>
                    <img id="image2" class="tw-w-5/6  tw-mt-4 tw-mb-2 tw-object-contain" src="https://giaygiare.vn/upload/sanpham/large/balenciaga-triple-s-red-black-nam-nu.jpg" alt="" width="512" height="384">
                </div>
            </button>
            <button onclick="setImage3()">
                <div> 
                    <img id="image3" class="tw-w-5/6  tw-mt-4 tw-object-contain" src="https://giaygiare.vn/upload/sanpham/large/balenciaga-triple-s-trainers-den-bac-nam-nu.jpg" alt="" width="512" height="384">
                </div>
            </button>
        </div>
        <!-- Ảnh to để ở giữa trang -->
        <div class="tw-w-6/12">
            <img id="image" class="tw-pl-2 tw-pt-28 tw-h-5/6 tw-object-contain" src="https://giaygiare.vn/upload/sanpham/large/balenciaga-triple-s-red-black-nam-nu.jpg" alt="">
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
            <form class="tw-flex-auto">
                <!-- Thông tin -->
                <div class="tw-flex tw-flex-wrap tw-pt-10">
                    <h1 class="tw-flex-auto tw-text-3xl tw-font-semibold"> <!-- Tên sp -->
                        NIKE FAKE
                    </h1>
                    <div class="tw-text-xl tw-font-semibold tw-text-gray-700 tw-ml-1"> <!-- Giá sau khi giảm giá -->
                        $90.00
                    </div>
                    <div class="tw-text-sm tw-font-semibold tw-text-gray-500 tw-pl-2 tw-line-through"> <!-- Giá gốc -->
                        $110.00
                    </div>
                    <div class="tw-w-full tw-flex-none tw-text-sm tw-font-medium tw-text-gray-700"> <!-- Mô tả ngắn -->
                        Sản phẩm không chính hãng
                    </div>
                </div>
                <!-- Thanh chọn màu -->
                <div class="tw-flex tw-items-baseline tw-mt-4 tw-mb-6">
                    <div class="tw-px-2 tw-flex">                        
                        <button type="button">
                            <img id="color1" onclick="setColor1()" class="tw-object-contain tw-h-20 tw-p-1 tw-flex tw-items-center tw-justify-center tw-rounded-lg" src="https://giaygiare.vn/upload/sanpham/large/balenciaga-triple-s-trainers-den-bac-nam-nu.jpg" alt="">
                        </button>
                        <button type="button">
                            <img id="color2" onclick="setColor2()" class="tw-object-contain tw-h-20 tw-p-1 tw-flex tw-items-center tw-justify-center tw-rounded-lg" src="https://giaygiare.vn/upload/sanpham/large/balenciaga-triple-s-red-black-nam-nu.jpg" alt="">
                        </button>
                        <button type="button">
                            <img id="color3" onclick="setColor3()" class="tw-object-contain tw-h-20 tw-p-1 tw-flex tw-items-center tw-justify-center tw-rounded-lg" src="https://cdn.under.vn/wp-content/uploads/2020/03/balenciaga-triple-s-vang-xanh-replica-11-1.jpg" alt="">
                        </button>                 
                    </div>
                </div>
                <script>
                    var a = document.getElementById("color1");
                    var b = document.getElementById("color2");
                    var c = document.getElementById("color3");
                    var d = document.getElementById("color4");
                    function setColor1()
                    {
                        a.style.border = "solid"; 
                        b.style.border = "none";
                        c.style.border = "none";
                        d.style.border = "none";
                    }
                    function setColor2()
                    {
                        b.style.border = "solid"; 
                        a.style.border = "none";
                        c.style.border = "none";
                        d.style.border = "none";
                    }
                    function setColor3()
                    {
                        c.style.border = "solid"; 
                        b.style.border = "none";
                        a.style.border = "none";
                        d.style.border = "none";
                    }
                    function setColor4()
                    {
                        d.style.border = "solid"; 
                        b.style.border = "none";
                        c.style.border = "none";
                        a.style.border = "none";
                    }
                </script>
                <!-- Thanh chọn size -->
                <div class="tw-flex tw-items-baseline tw-mt-4 tw-mb-6 tw-flex-wrap tw-font-normal tw-justify-center tw-inline-block tw-relative">
                    <select class="tw-block tw-pl-2 tw-appearance-none tw-w-full tw-bg-white tw-border-b tw-border-gray-400 hover:tw-border-gray-700 tw-py-1 tw-rounded tw-shadow tw-leading-tight focus:tw-outline-none focus:tw-shadow-outline">
                        <option>Size:</option>
                        <option>37</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                    </select>
                    <div class="tw-flex tw-pointer-events-none tw-absolute tw-inset-y-0 tw-right-0 tw-flex tw-items-center tw-px-2 tw-text-gray-700">
                        
                        <svg class="tw-fill-current tw-h-4 tw-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <!-- Thanh thêm vào giỏ hàng, mua ngay -->
                <div class="tw-mb-2 tw-text-sm tw-font-medium">
                    <div class="">
                        <button class="tw-w-full tw-py-2 tw-mb-2 tw-items-center tw-justify-center tw-rounded-md tw-bg-black tw-text-white hover:tw-bg-gray-800" type="submit">Buy now</button>
                        <button class="tw-w-full tw-py-2 tw-mb-2 tw-items-center tw-justify-center tw-rounded-md tw-border tw-border-gray-900 hover:tw-bg-gray-50" type="button">Add to bag</button>
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
    {{-- <div class="tw-pt-20">
        <div class="tw-flex tw-justify-center tw-mb-2">
            <div class="tw-mx-10 tw-border-b-2 tw-border-yellow-500 tw-text-yellow-500">BEST SELLER</div>
            <div class="tw-mx-10">SALES</div>
        </div>
        <div class="splide" id="productSlide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                        for($i = 1; $i <= 8; $i++){
                            echo '<li class="splide__slide tw-p-2">
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
                                                        <div class="tw-text-sm tw-font-semibold tw-text-white tw-pl-2 tw-pr-2 tw-line-through tw-relative tw-float-left"> <!-- Giá gốc -->
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
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script> --}}
</div>
@endsection