@props(['hospital','doctor'])
<div class="pt-5 pb-2">
    <div class=" bg-white border border-gray-200 rounded-lg shadow ">
    <div  class="flex gap-8 flex-col items-centermd:flex-row">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://portalvhdslvb28rs1c3tmc.blob.core.windows.net/yammo/careme/hospital/7c5a9e6c-2865-4426-9ec1-37b389c2886d.png" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$hospital->name}} Hospital</h5>
            <div class=" flex">
                <img class="w-5 h-5" src="/images/phone.svg">
                <p class="text-black">{{$hospital->phone_num}}</p>
            </div>
            <div class="flex">
            <img class="w-5 h-5" src="/images/map.svg">
            <p class="mb-3 font-normal text-gray-700">{{$hospital->address}}</p>
            </div>
        </div>
    </div>
    <a href="" class=" text-blue-500 font-bold">Available Booking Schedule</a>
    <x-booking :doctor="$doctor" :hospital="$hospital"/>
    </div>
</div>
