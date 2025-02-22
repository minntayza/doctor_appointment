<div class="min-h-screen bg-gray-100 p-6 w-full">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">View Appointments</h2>
        {{--
            <form action="/view-appointments" method="GET" class="flex items-center mb-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by patient name..."
                   class="w-2/3 p-2 border rounded-lg focus:ring focus:ring-blue-300">

            <select name="status" class="w-1/4 p-2 border rounded-lg focus:ring focus:ring-blue-300 ml-2">
                <option value="">All Statuses</option>
                <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
            </select>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 ml-2">Search</button>
        </form> --}}

        <div class="space-y-4">
            @forelse (auth()->user()->doctor->bookings as $booking)
                <div class="flex items-center justify-between p-4 border rounded-lg bg-gray-50">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $booking->username }}</h3>
                        <p class="text-gray-600">{{ $booking->day }} {{ $booking->date }}, {{ date('Y') }} - {{ $booking->time }} : {{ $booking->end_time }}</p> {{-- Add year --}}
                        <p class="text-gray-600">Hospital: {{ $booking->hospital }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 text-sm font-medium text-white rounded-full
                            {{ $booking->is_booked ? 'bg-green-500' : 'bg-blue-500' }}">  {{-- Consistent colors --}}
                            {{ $booking->is_booked ? 'Upcoming' : 'Pending' }}
                        </span>
                        <button class="bg-red-500 text-white px-3 py-1 rounded-full">Cancel</button>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No appointments found.</p>  {{-- Display message if no appointments --}}
            @endforelse
        </div>

        {{-- <div class="mt-6 flex justify-between items-center">
            {{ auth()->user()->doctor->bookings->links() }}
        </div> --}}
    </div>
</div>
