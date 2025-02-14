@props(['doctor','doctors'])
<div class="container px-6 py-10 mx-auto">
    <x-searchBarForDoctor/>
        <x-doctor-profile :doctor="$doctor"/>
        <div>
            <p class="py-3 text-black lg:text-3xl font-bold font-mono"><span class=" text-gray-600">Recommended</span> Doctors</p>
        @foreach($doctors as $recommendDoctor)
        @if($recommendDoctor->specialization == $doctor->specialization && $recommendDoctor->name != $doctor->name)
        <x-doctor-card :doctor="$recommendDoctor"/>
        @endif
        @endforeach
        </div>
</div>
