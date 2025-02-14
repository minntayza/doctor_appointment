@props(['hospital'])
<div class=" container px-6 py-10 mx-auto">
    <div class="pt-5 pb-2 flex gap-0 mx-auto justify-center">
        <!-- Doctor's Information Section -->
        <div  class="flex gap-8 flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://portalvhdslvb28rs1c3tmc.blob.core.windows.net/yammo/careme/hospital/7c5a9e6c-2865-4426-9ec1-37b389c2886d.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$hospital->name}} Hospital</h5>
                <p class=" text-gray-500 font-bold font-mono">{{$hospital->doctors->count()}} Available Doctors</p>
                <div class=" flex">
                    <img class="w-5 h-5" src="/images/phone.svg">
                    <p class="text-gray-700 font-normal">{{$hospital->phone_num}}</p>
                </div>
                <div class="flex">
                <img class="w-5 h-5" src="/images/map.svg">
                <p class="mb-3 font-normal text-gray-700">{{$hospital->address}}</p>
                </div>
            </div>
        </div>
    <p class=" mx-5"><iframe src="https://www.google.com/maps/embed?pb={{$hospital->location}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
    <div class="py-3">
        <p class=" text-gray-800 font-bold font-mono text-xl">{{$hospital->doctors->count()}} Available Doctors</p>
        @foreach ( $hospital->doctors as $doctor )
        <x-doctor-card :doctor="$doctor"/>
        @endforeach
    </div>

</div>
