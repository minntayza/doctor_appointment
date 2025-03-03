<div class="min-h-screen bg-gray-100 p-6 w-full">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-lg border border-gray-200">
        <h2 class="text-3xl font-extrabold mb-6 text-gray-800">Appointments</h2>

        <div class="space-y-4">
            @forelse (auth()->user()->doctor->bookings as $booking)
                <div class="flex items-center justify-between p-4 border rounded-xl bg-gray-50 hover:shadow-md transition-all">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">{{ $booking->username }}</h3>
                        <p class="text-gray-500">{{ $booking->day }} {{ $booking->date }}, {{ date('Y') }} - {{ $booking->time }} to {{ $booking->end_time }}</p>
                        <p class="text-gray-500">Hospital: <span class="font-medium">{{ $booking->hospital }}</span></p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-4 py-1 text-sm font-medium text-white rounded-full shadow-md
                            {{ $booking->is_booked ? 'bg-green-600' : 'bg-yellow-500' }}">
                            {{ $booking->is_booked ? 'Upcoming' : 'Pending' }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="text-center py-10">
                    <p class="text-gray-500 text-lg">No appointments found.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
