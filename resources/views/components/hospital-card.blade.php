@props(['hospital'])
<div class="mt-12">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <div class="flex flex-col md:flex-row">
            <!-- Hospital Image -->
            <div class="md:w-1/4 relative overflow-hidden">
                <img
                    class="w-full h-64 md:h-full object-cover transform hover:scale-105 transition-transform duration-500"
                    src="https://portalvhdslvb28rs1c3tmc.blob.core.windows.net/yammo/careme/hospital/7c5a9e6c-2865-4426-9ec1-37b389c2886d.png"
                    alt="{{$hospital->name}}"
                >
            </div>

            <!-- Hospital Info -->
            <div class="md:w-2/3 p-3">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">{{$hospital->name}} Hospital</h3>

                <div class="space-y-4 mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-50 rounded-full">
                            <img class="w-6 h-6" src="/images/phone.svg" alt="Phone">
                        </div>
                        <p class="text-gray-700 font-medium">{{$hospital->phone_num}}</p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-blue-50 rounded-full">
                            <img class="w-6 h-6" src="/images/map.svg" alt="Location">
                        </div>
                        <p class="text-gray-600">{{$hospital->address}}</p>
                    </div>
                </div>

                <a href="/hospitals/{{$hospital->name}}"
                   class="inline-flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-semibold rounded-full hover:from-blue-600 hover:to-indigo-600 transition-all duration-200 transform hover:scale-105">
                    <img class="w-5 h-5 filter brightness-0 invert" src="/images/human.svg" alt="Doctors">
                    <span>Find Doctors</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
