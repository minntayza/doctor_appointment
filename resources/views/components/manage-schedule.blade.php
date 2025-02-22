<div class="p-4 sm:ml-64 min-h-screen">
    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Your Sitting Days</h2>

    <a href="/edit-days" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Add Your Sitting Days
    </a>

    @if(session('success'))
        <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-300 rounded-lg dark:bg-green-900 dark:text-green-300">
            {{ session('success') }}
        </div>
    @endif

    @forelse (auth()->user()->doctor->bookings as $time)  {{-- Use @forelse for empty check --}}
        <div class="my-5 shadow-lg p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 text-xl font-normal text-gray-700 dark:text-gray-400">
                <span class="font-bold tracking-tight text-gray-900 dark:text-white">
                    Sitting on Day: {{ $time->day }} at {{ $time->time }}
                </span>
            </p>
            <div class="flex items-center gap-5">
                <form action="" method="POST">  {{-- Use route helper --}}
                    @csrf
                    @method('PUT')  {{-- Use PUT method for updates --}}
                    <input type="text" name="day" value="{{ $time->day }}" class="border rounded px-3 py-1" required>  {{-- Added required --}}
                    <input type="time" name="time" value="{{ $time->time }}" class="border rounded px-3 py-1" required>  {{-- Input type time --}}
                    <input type="date" name="date" value="{{$time->date}}" class="border rounded px-3 py-1" required>  {{-- Added required --}}
                    <button type="submit" class="px-3 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                        Update
                    </button>
                </form>

                <form action="" method="POST">  {{-- Use route helper --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancel
                        <img class="rtl:rotate-180 w-3.5 h-3.5 ms-2" src="{{ asset('images/cancel.svg') }}" alt="">
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-gray-600 dark:text-gray-400">No sitting days found.</p>  {{-- Improved empty message --}}
    @endforelse
</div>
