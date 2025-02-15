<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Bookings</h1>

        <!-- Search Bar -->
        <form method="GET" class="mb-6 flex">
            <input type="text" name="search" placeholder="Search bookings..."
                class="p-3 w-1/3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                Search
            </button>
        </form>

        <!-- Bookings Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-4 text-left">User</th>
                        <th class="p-4 text-left">Date</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr class="border-b">
                        <td class="p-4">{{ $booking->user->name }}</td>
                        <td class="p-4">{{ $booking->created_at->format('Y-m-d') }}</td>
                        <td class="p-4">
                            @if($booking->is_approved)
                                <span class="px-3 py-1 text-sm font-semibold text-green-600 bg-green-200 rounded-full">
                                    Approved
                                </span>
                            @elseif($booking->is_pending)
                                <span class="px-3 py-1 text-sm font-semibold text-yellow-600 bg-yellow-200 rounded-full">
                                    Pending
                                </span>
                            @else
                                <span class="px-3 py-1 text-sm font-semibold text-red-600 bg-red-200 rounded-full">
                                    Canceled
                                </span>
                            @endif
                        </td>
                        <td class="p-4 flex space-x-2">
                            @if(!$booking->is_approved)
                                <form method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="px-3 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                                        Approve
                                    </button>
                                </form>
                            @endif
                            <form method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="px-3 py-2 bg-yellow-500 text-white rounded-lg shadow-md hover:bg-yellow-600">
                                    Cancel
                                </button>
                            </form>
                            <form method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
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
