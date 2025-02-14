@props(['doctor'])
<div class="py-5 lg:flex-row gap-0 mx-auto justify-center">
    <!-- Doctor's Information Section -->
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Dr. {{$doctor->name}}</h5>
            <p class="text-black">
                {{$doctor->diploma}} <br>
                 <span class="text-bold text-lg">
                    @foreach ($doctor->hospitals as $hospital)
                    <span class="text-bold font-serif">
                        {{$hospital->name}} Hospital
                    </span>
                    @endforeach
                </span>
            </p>
            <p class="text-black">{{$doctor->specialization}}</p>
        </div>
    </div>
  <!-- Form Section -->
</div>
<p class="py-3 text-black lg:text-3xl font-bold font-mono"><span class=" text-gray-600">Sitting </span> Hospitals</p>
@foreach ($doctor->hospitals as $hospital)
<x-sitting-hospital-card :hospital="$hospital" :doctor="$doctor"/>
@endforeach
