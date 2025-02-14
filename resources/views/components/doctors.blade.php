
<div class="container px-6 py-10 mx-auto">
    <x-searchBarForDoctor/>
<div class="flex gap-5">
    <div class=" mx-5">
        <h3 class="mb-4 font-semibold text-sky-800 dark:text-white">Select Specialist</h3>
    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
        <form id="specialityForm" action="/doctors" method="GET">
        <div class="w-full border-b border-gray-200 rounded-t-lg">

            @foreach ($specialities as $specialty)
            <div class="flex items-center ps-3">
                <input id="vue-checkbox" type="radio" value="{{$specialty}}" name="specialty" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm" onchange="document.getElementById('specialityForm').submit();">
                <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{$specialty}}</label>
            </div>
        @endforeach
        </div>
        </form>
    </ul>
    </div>

    <div>
        @forelse($doctors as $doctor)
        <x-doctor-card :doctor="$doctor"/>
        @empty
        <p class="text-bold text-lg font-serif">no doctors found</p>
        @endforelse
        {{$doctors->links()}}
    </div>
</div>
    </div>
