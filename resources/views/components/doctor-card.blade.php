@props(['doctor'])
<div class="pt-5 pb-2">
    <div  class="flex gap-8 flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h1 class="mb-2 text-2xl font-bold">Dr. {{$doctor->name}}</h1>
            <p class="text-black">
                {{$doctor->diploma}} <br>
                    @foreach ($doctor->hospitals as $hospital)
                    <span class="text-bold font-serif">
                        {{$hospital->name}} Hospital
                    </span>
                    @endforeach
            </p>
            <p class="text-black">{{$doctor->specialization}}</p>
        </div>
        <a  href="/doctors/{{$doctor->name}}"  class="text-black flex items-center gap-3 shadow-lg text-bold bg-gray-300 hover:bg-gray-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
            <img class="w-5 h-5" src="/images/human.svg">
            <p>Book Appointment</p>
        </a>
    </div>
</div>
