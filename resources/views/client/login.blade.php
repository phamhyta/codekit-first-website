@extends('layout.header')
@section('content')

<?php
    $message = Session::get('login_noti_client');
    if($message){
        echo "<script>alert('$message');</script>";
        session::put('login_noti_client', null);
    }
?>

<main class="tw-bg-transparent tw-max-w-lg tw-mx-auto tw-p-8 md:tw-p-12 tw-my-10 tw-rounded-lg tw-shadow-2xl">
    <section>
        <h3 class="tw-font-bold tw-text-3xl">Welcome to Nikadas</h3>
        <p class="tw-text-black tw-font-bold tw-pt-2">Sign in to your account.</p>
    </section>

    <section class="tw-mt-10">
        <form class="tw-flex tw-flex-col" method="POST" action="{{ URL::to('/signin') }}">
            @csrf
            <div class="tw-mb-6 tw-pt-3 tw-rounded tw-bg-gray-300 tw-bg-opacity-50">
                <label class="tw-block tw-text-black tw-text-sm tw-font-bold tw-mb-2 tw-ml-3" for="email">Email</label>
                <input type="text" id="email" name="email" class="tw-bg-transparent tw-rounded tw-w-full tw-text-black focus:tw-outline-none tw-border-b-4 tw-border-transparent focus:tw-border-black tw-transition tw-duration-500 tw-px-3 tw-pb-3">
            </div>
            <div class="tw-mb-6 tw-pt-3 tw-rounded tw-bg-gray-300 tw-bg-opacity-50">
                <label class="tw-block tw-text-black tw-text-sm tw-font-bold tw-mb-2 tw-ml-3" for="password">Password</label>
                <input type="password" id="password" name="cus_password" class="tw-bg-transparent tw-rounded tw-w-full tw-text-black focus:tw-outline-none tw-border-b-4 tw-border-transparent focus:tw-border-black tw-transition tw-duration-500 tw-px-3 tw-pb-3">
            </div>
            <div class="tw-flex tw-justify-end">
                <a href="#" class=" tw-text-base tw-text-black tw-font-semibold hover:tw-text-black hover:tw-underline tw-mb-6">Forgot your password?</a>
            </div>
            <button class="tw-bg-black hover:tw-bg-white tw-text-white hover:tw-text-black tw-font-bold tw-py-2 tw-rounded tw-shadow-lg hover:tw-shadow-xl tw-transition tw-duration-200" type="submit">Sign In</button>
        </form>
    </section>
</main>        

<div class="tw-max-w-lg tw-mx-auto tw-text-center tw-mt-12 tw-mb-6">
    <p class="tw-text-black tw-font-medium">
        Don't have an account?
        <a href="/signup" class="tw-font-bold hover:tw-underline tw-outline-none sign-up">
            Sign up
        </a>
    </p>
</div>
@endsection