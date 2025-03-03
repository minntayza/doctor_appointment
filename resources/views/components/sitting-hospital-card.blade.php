@props(['hospital','doctor'])
<div class="transform hover:scale-[1.01] transition-all duration-300">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="md:flex">
            <!-- Hospital Image -->
            <div class="md:w-1/4 relative overflow-hidden">
                <img
                    class="w-full h-48 md:h-full object-cover transform hover:scale-105 transition-duration-500"
                    src="https://portalvhdslvb28rs1c3tmc.blob.core.windows.net/yammo/careme/hospital/7c5a9e6c-2865-4426-9ec1-37b389c2886d.png"
                    alt="{{$hospital->name}}"
                >
            </div>

            <!-- Hospital Information -->
            <div class="flex-1 p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-900">{{$hospital->name}} Hospital</h3>
                    <span class="mt-2 md:mt-0 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        Available for Booking
                    </span>
                </div>

                <div class="space-y-3 mb-6">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-50 rounded-full">
                            <img class="w-5 h-5" src="/images/phone.svg" alt="Phone">
                        </div>
                        <p class="text-gray-700 font-medium">{{$hospital->phone_num}}</p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-50 rounded-full">
                            <img class="w-5 h-5" src="/images/map.svg" alt="Location">
                        </div>
                        <p class="text-gray-600">{{$hospital->address}}</p>
                    </div>
                </div>

                <!-- Booking Section -->
                <div class="border-t pt-4">
                    <button
                        class="group w-full bg-white px-4 py-3 rounded-lg border-2 border-blue-100 hover:border-blue-500 transition-colors duration-300"
                        onclick="document.getElementById('booking-{{$hospital->id}}').classList.toggle('hidden')"
                    >
                        <div class="flex items-center justify-between">
                            <span class="text-blue-600 font-semibold group-hover:text-blue-700">
                                View Available Booking Schedule
                            </span>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </button>

                    <div id="booking-{{$hospital->id}}" class="hidden mt-4">
                        <x-booking :doctor="$doctor" :hospital="$hospital"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
