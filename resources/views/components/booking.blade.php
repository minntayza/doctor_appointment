@props(['doctor', 'hospital'])

<p class="text-sky-600 font-serif font-bold text-md">Available Dr. {{ $doctor->name }}'s Schedule</p>
<p class="font-bold text-black font-mono">Schedule Date:</p>

<div class="w-full bg-white rounded-lg shadow-sm">
    <div style="overflow-x: auto;">
        <div class="p-4 bg-white rounded-lg md:p-8" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <dl class=" grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 sm:p-8" style="min-width: max-content;">
                @forelse ($doctor->hospitalDoctors as $hospitalDoctor)
                    @if ($hospitalDoctor->schedule)
                        <form action="/doctors/{{ $doctor->id }}/bookings/{{ $hospitalDoctor->schedule->id }}" method="POST">
                            @csrf
                            <button type="submit" class="flex border border-cyan-500 px-5 rounded-lg py-2 flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">{{ $hospitalDoctor->schedule->day }}</dt>
                                <dd class="text-gray-700 text-xl font-bold">{{ $hospitalDoctor->schedule->time }} - {{ $hospitalDoctor->schedule->end_time }}</dd>
                            </button>
                        </form>
                    @endif
                @empty
                    <p>No schedules available for this doctor.</p>
                @endforelse
            </dl>
        </div>
    </div>
</div>
