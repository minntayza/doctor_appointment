<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-8">
    @forelse ($doctor->hospitalDoctors->where('hospital_id', $hospital->id) as $hospitalDoctor)
        @if ($hospitalDoctor->schedule)
            <form action="/doctors/{{ $doctor->id }}/bookings/{{ $hospitalDoctor->schedule->id }}" method="POST">
                @csrf
                <button type="submit">
                    <div class="bg-white border-2 border-gray-100 rounded-xl p-4 transition-all duration-200 hover:border-blue-500 hover:shadow-md">
                        <div class="text-center">
                            <span class="block text-2xl font-bold text-gray-900 mb-1">
                                {{ $hospitalDoctor->schedule->day }}
                            </span>
                            <div class="flex items-center justify-center space-x-1 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm font-semibold">
                                    {{ $hospitalDoctor->schedule->time }}
                                </span>
                            </div>
                            <span class="block text-xs text-gray-500 mt-2">
                                Until {{ $hospitalDoctor->schedule->end_time }}
                            </span>

                            <div class="mt-3 py-1 px-2 bg-blue-50 rounded-full text-xs font-medium text-blue-600 group-hover:bg-blue-100 transition-colors duration-200">
                                Available
                            </div>
                        </div>
                    </div>
                </button>
            </form>
        @endif
    @empty
        <div class="col-span-full py-8 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No schedules available</h3>
            <p class="mt-1 text-sm text-gray-500">Currently, there are no available time slots for this doctor at this hospital.</p>
        </div>
    @endforelse
</div>
