@props(['doctor'])
<div class="max-w-4xl mx-auto">
    <!-- Doctor's Profile Card -->
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <div class="md:flex">
            <!-- Doctor's Image -->
            <div class="md:w-1/3 relative">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10"></div>
                <img
                    class="w-full h-80 md:h-full object-cover transform hover:scale-105 transition-duration-500"
                    src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png"
                    alt="Dr. {{$doctor->name}}"
                >
            </div>

            <!-- Doctor's Information -->
            <div class="md:w-2/3 p-8">
                <div class="flex items-center mb-4">
                    <h1 class="text-3xl font-bold text-gray-900">Dr. {{$doctor->name}}</h1>
                    <span class="ml-4 px-4 py-1 bg-blue-100 text-blue-800 text-sm font-semibold rounded-full">
                        {{$doctor->specialization}}
                    </span>
                </div>

                <div class="space-y-4 mb-6">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <p class="text-gray-700 font-medium">{{$doctor->diploma}}</p>
                    </div>

                    @foreach ($doctor->hospitals as $hospital)
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="text-gray-700">{{$hospital->name}} Hospital</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Sitting Hospitals Section -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            Practicing Hospitals
        </h2>

        <div class="grid gap-6">
            @foreach ($doctor->hospitals->unique('id') as $hospital)
                <x-sitting-hospital-card :hospital="$hospital" :doctor="$doctor"/>
            @endforeach
        </div>
    </div>
</div>
