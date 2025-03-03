<div class="bg-white my-5 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/4 relative">
            <img class=" h-48 w-48 md:h-full object-cover"
                 src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png"
                 alt="Dr. {{$doctor->name}}">
        </div>

        <div class="flex-1 p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. {{$doctor->name}}</h3>
            <div class="space-y-2 mb-4">
                <p class="text-blue-600 font-semibold">{{$doctor->diploma}}</p>
                <p class="text-gray-600">{{$doctor->specialization}}</p>
                @foreach ($doctor->hospitals as $hospital)
                    <p class="text-gray-500 font-serif">{{$hospital->name}} Hospital</p>
                @endforeach
            </div>

            <a href="/doctors/{{$doctor->name}}"
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-full hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 transform hover:scale-105">
                <img class="w-5 h-5 mr-2 filter brightness-0 invert" src="/images/human.svg" alt="Book">
                <span>Book Appointment</span>
            </a>
        </div>
    </div>
</div>
