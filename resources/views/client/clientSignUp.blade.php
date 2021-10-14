@extends('layout.header')
@section('content')
<div class="tw-flex tw-items-center tw-justify-center">
    <div class="tw-bg-white tw-p-16 tw-rounded tw-shadow-2xl tw-w-1/3">
        <h2 class="tw-text-3xl tw-font-bold tw-text-black tw-text-center">Create Your Account</h2>
        <div class=" tw-text-center tw-text-sm tw-text-gray-500 tw-mb-5">We gives you an extraordinary access to a world of products.</div>
    
        <form class="tw-space-y-3" method="POST" action="/signup">
          @csrf
            <div>
                <div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Name</label>
                        <input type="text" name="fullname" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Gender</label>
                        <select name="gender" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Address</label>
                        <input type="text" name="address" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Phone number</label>
                        <input type="text" name="phone_number" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                </div>
            
                <div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Email</label>
                        <input type="text" name="email" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                    <div class=" tw-py-1">
                        <label class="tw-block tw-mb-1 tw-font-bold tw-text-gray-500">Username</label>
                        <input type="text" name="username" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                    <div class=" tw-pt-1 tw-pb-5">
                        <label class="tw-block mb-1 tw-font-bold tw-text-gray-500">Password</label>
                        <input type="password" name="cus_password" class="tw-w-full tw-border-2 tw-border-gray-200 tw-p-3 tw-rounded tw-outline-none focus:tw-border-black">
                    </div>
                </div>
            </div>
            <div class="tw-flex tw-items-center">
                <input type="checkbox" id="agree">
                <label for="agree" class="tw-ml-2 tw-text-gray-700 tw-text-sm">I agree to the terms and privacy.</label>
            </div>
    
            <button class="tw-block tw-w-full tw-bg-black tw-text-white tw-font-bold tw-py-2 tw-rounded tw-shadow-lg hover:tw-shadow-xl tw-transition tw-duration-200" type="submit">
                SIGN UP
            </button>
        </form>
        <div class="tw-max-w-lg tw-mx-auto tw-text-center tw-mt-12 tw-mb-6">
            <p class="tw-text-black tw-font-medium">
                Already a Member?
                <a href="/signin" class="tw-font-bold hover:tw-underline tw-outline-none sign-in">
                    Sign in
                </a>
            </p>
        </div>
    </div>
</div>
@endsection