<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow-md flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.style.display='none'" class="text-white font-bold">&times;</button>
    </div>
    @endif
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Bookings</h1>

        {{-- <div class="flex justify-between items-center mb-6">
            <form method="GET" action="/manage-users" class="relative w-1/3">
                <input type="text" name="search" type="search" value="{{request('search')}}" id="search" placeholder="Search users..."
                       class="p-3 w-full  rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                <button type="submit"
                        class="absolute right-0 top-0 p-3 rounded-r-lg bg-blue-950 text-white hover:bg-blue-900 focus:ring focus:ring-blue-300">
                    Search
                </button>
            </form>
        </div> --}}

        <!-- Bookings Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-4 text-left">User</th>
                        <th class="p-4 text-left">Doctor</th>
                        <th class="p-4 text-left">Date</th>
                        <th class="p-4 text-left">Booking Date</th>
                        <th class="p-4 text-left">Booking Time</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr class="border-b">
                        <td class="p-4">{{ $booking->user->name }}</td>
                        <td class="p-4">{{$booking->doctor->name}}</td>
                        <td class="p-4">{{ $booking->created_at->format('Y-m-d') }}</td>
                        <td class="p-4">{{ $booking->day}} | {{$booking->date}}</td>
                        <td class="p-4">{{$booking->time}} - {{$booking->end_time}}</td>
                        <td class="p-4">
                            @if($booking->is_booked)
                                <span class="px-3 py-1 text-sm font-semibold text-green-600 bg-green-200 rounded-full">
                                    Approved
                                </span>
                            @else
                                <span class="px-3 py-1 text-sm font-semibold text-yellow-600 bg-yellow-200 rounded-full">
                                    Pending
                                </span>
                            @endif
                        </td>
                        <td class="p-4 flex space-x-2">
                            @if(!$booking->is_booked)
                                <form method="POST" action="/manage-bookings/{{$booking->id}}/approve">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="px-3 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                                        Approve
                                    </button>
                                </form>
                                <form action="/manage-bookings/{{$booking->id}}/delete" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-red-500 hover:bg-red-600 rounded-lg">
                                        Delete
                                    </button>
                                </form>
                            @else
                            <form method="POST" action="/manage-bookings/{{$booking->id}}/cancel">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="px-3 py-2 bg-yellow-500 text-white rounded-lg shadow-md hover:bg-yellow-600">
                                    Cancel
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {{-- <div class="mt-6">
            {{ $bookings->links() }}
        </div> --}}
    </div>
</div>
