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
<div class="tw-flex tw-px-32 tw-py-12">
    {{-- Thong tin --}}
    <div class="tw-w-3/4 tw-pr-32">
        {{-- Delivery --}}
        <div class="tw-w-full">
            <div class="tw-py-3 tw-pl-10 tw-bg-black tw-text-2xl tw-text-white">
                Delivery
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5">
                <div class="tw-w-1/2 tw-pr-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Frist name">
                </div>
                <div class="tw-w-1/2 tw-pl-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Last name">
                </div>
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5">
                <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Address 1">
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5">
                <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Address 2">
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5">
                <div class="tw-w-1/2 tw-pr-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="District">
                </div>
                <div class="tw-w-1/2 tw-pl-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="City">
                </div>
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5">
                <div class="tw-w-1/2 tw-pr-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Country">
                </div>
                <div class="tw-w-1/2 tw-pl-6">
                    <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Postal code">
                </div>
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5 w-1/2">
                <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Email">
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5 w-1/2">
                <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Phone number">
            </div>
        </div>
        {{-- Payment --}}
        <div class="tw-w-full tw-pt-12">
            <div class="tw-py-3 tw-pl-10 tw-bg-black tw-text-2xl tw-text-white">
                Payment
            </div>
            <div class="tw-flex tw-pl-10 tw-pt-5 tw-w-1/2">
                <input type="text" class="tw-w-full tw-border-b-2 tw-border-gray-500 tw-outline-none" placeholder="Promo code">
            </div>
            <div class="tw-pl-10 tw-pt-5 tw-w-1/2">Select payment menthod</div>
            <div class="tw-pl-10 tw-pt-5 tw-flex tw-pb-10">
                <div class="tw-pr-6 tw-flex tw-w-1/2">
                    <div class="tw-w-2/3">Credit or Debit card</div>
                    <div class="tw-w-1/3 ttw-ext-right">
                        <input type="radio" name="check">
                    </div>
                </div>
                <div class="tw-pl-6 flex w-1/2">
                    <div class="tw-w-2/3">Paypal</div>
                    <div class="tw-w-1/3 tw-text-right">
                        <input type="radio" name="check">
                    </div>
                </div>
            </div>
            <div class="tw-h-32 tw-pl-10">
                <div class="tw-bg-purple-100 tw-h-full">
                    <div class="tw-flex">
                        <div class="tw-w-1/3 tw-pl-5 tw-pt-4">
                            <div class="tw-pl-1">Card number</div>
                            <div>
                                <input type="text" class="tw-border-2 tw-outline-none">
                            </div>
                        </div>
                        <div class="tw-w-1/3 tw-pl-5 tw-pt-4">
                            <div class="tw-pl-1">Expire date</div>
                            <div>
                                <input type="text" class="tw-border-2 tw-outline-none">
                            </div>
                        </div>
                        <div class="tw-w-1/3 tw-pl-5 tw-pt-4">
                            <div class="tw-pl-1">Secure code</div>
                            <div>
                                <input type="text" class="tw-w-5/6 tw-border-2 tw-outline-none">
                            </div>
                        </div>
                    </div>
                    <div class="tw-flex tw-pl-5 tw-pt-4">
                        <div> 
                            <input type="checkbox">
                        </div>
                        <div class="tw-pl-4">Save for later use</div>
                    </div>
                </div>
            </div> 
        </div>
        {{-- Write your felling --}}
        <div class="tw-w-full tw-pt-12">
            <div class="tw-py-3 tw-pl-10 tw-bg-black tw-text-2xl tw-text-white">
                Write your felling
            </div>
            <div class="tw-pl-10 tw-pt-4">Rate us</div>
            <div class="tw-pl-10 tw-flex">
                <div>
                    <svg onclick="color1()" id="sao1" width="30" height="30" fill="currentColor" class="tw-text-gray-600 tw-mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color2()" id="sao2" width="30" height="30" fill="currentColor" class="tw-text-gray-600 tw-mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color3()" id="sao3" width="30" height="30" fill="currentColor" class="tw-text-gray-600 tw-mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color4()" id="sao4" width="30" height="30" fill="currentColor" class="tw-text-gray-600 tw-mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color5()" id="sao5" width="30" height="30" fill="currentColor" class="tw-text-gray-600 tw-mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
            </div>
            <script>
                sao1 = document.getElementById("sao1");
                sao2 = document.getElementById("sao2");
                sao3 = document.getElementById("sao3");
                sao4 = document.getElementById("sao4");
                sao5 = document.getElementById("sao5");
                function color1()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "gray";
                    sao3.style.color = "gray"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color2()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "gray"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color3()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color4()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "orange"; 
                    sao5.style.color = "gray"; 
                }
                function color5()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "orange"; 
                    sao5.style.color = "orange"; 
                }
            </script>
            <div class="tw-pl-10 tw-pt-2">Comment</div>
            <div class="tw-pl-10">
                <input type="text" class="tw-border-2 tw-outline-none tw-w-full tw-h-12">
            </div>
        </div>
    </div>
    {{-- Tong tien --}}
    <div class="tw-w-1/4 tw-bg-purple-100 tw-px-10">
        <div class="tw-pt-6">ORDER SUMARY</div>
        <div class="tw-flex tw-pt-6">
            <div class="tw-w-1/2">Subtotal</div>
            <div class="tw-w-1/2 tw-text-right">200$</div>  
        </div>
        <div class="tw-flex tw-py-6">
            <div class="tw-w-1/2">Delivery</div>
            <div class="tw-w-1/2 tw-text-right">Free</div>
        </div>
        <div class="tw-flex tw-py-6 tw-border-t-2 tw-border-black mb-6">
            <div class="tw-w-1/2">Total</div>
            <div class="tw-w-1/2 tw-text-right">200$</div>
        </div>
        <button class="tw-w-full tw-py-2 tw-mb-2 tw-items-center tw-justify-center tw-rounded-md tw-bg-black tw-text-white hover:tw-bg-gray-800" type="submit">Checkout</button>
    </div>
</div>
@endsection