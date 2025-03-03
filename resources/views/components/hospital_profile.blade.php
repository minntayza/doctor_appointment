@props(['hospital'])
<div style="min-height: 100vh; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #dbeafe 100%); background-attachment: fixed;">
    <div class="container px-6 py-10 mx-auto">
        <!-- Hospital Information Card -->
        <div style="background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.95)); backdrop-filter: blur(10px);" class="max-w-4xl mx-auto rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
                <!-- Hospital Image -->
                <div class="relative h-64 md:h-full">
                    <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition-duration-500"
                         src="https://portalvhdslvb28rs1c3tmc.blob.core.windows.net/yammo/careme/hospital/7c5a9e6c-2865-4426-9ec1-37b389c2886d.png"
                         alt="{{$hospital->name}}">
                </div>

                <!-- Hospital Details -->
                <div class="md:col-span-2 p-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{$hospital->name}} Hospital</h1>
                    <div class="flex items-center mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                            {{$hospital->doctors->count()}} Available Doctors
                        </span>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-100 rounded-full">
                                <img class="w-5 h-5" src="/images/phone.svg" alt="Phone">
                            </div>
                            <p class="text-gray-700">{{$hospital->phone_num}}</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-gray-100 rounded-full">
                                <img class="w-5 h-5" src="/images/map.svg" alt="Location">
                            </div>
                            <p class="text-gray-700">{{$hospital->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="max-w-4xl mx-auto mt-8 rounded-2xl overflow-hidden shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb={{$hospital->location}}"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full">
            </iframe>
        </div>

        <!-- Available Doctors Section -->
        <div class="max-w-4xl mx-auto mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-4 py-2 rounded-full mr-3">
                    {{$hospital->doctors->count()}}
                </span>
                Available Doctors
            </h2>

        @foreach ( $hospital->doctors as $doctor )
        <x-doctor-card :doctor="$doctor"/>
        @endforeach
    </div>
</div>
