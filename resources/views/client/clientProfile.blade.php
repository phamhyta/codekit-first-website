@extends('layout.clientHeader')
@section('content')
<div class=" tw-h-screen">
    
    <div x-data="{show: false}" @click.away="show = false">
        <button @click="show = ! show" class="tw-block tw-text-black tw-overflow-hidden">
            <div class="tw-flex tw-justify-between">
                <div class=" tw-flex tw-items-center">
                    <img class="tw-inline tw-object-cover tw-w-10 tw-h-10 tw-mr-2 tw-rounded-full" src="img/avatar.jpeg" alt="Profile image"/>
                    Hi, Tien
                    <svg class="tw-fill-current tw-text-black" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M7 10l5 5 5-5z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </div> 
                
            </div>
        </button>
        <div x-show="show" class="tw-mt-2 tw-py-2 tw-bg-white tw-rounded-lg tw-shadow-xl">
            <a href="#" class="tw-block tw-px-4 tw-py-2 tw-text-gray-600  hover:tw-text-black">Profile</a> 
            <a href="/logout" class="tw-block tw-px-4 tw-py-2 tw-text-gray-600  hover:tw-text-black">Sign out</a>
        </div>
    </div>
</div>

@endsection