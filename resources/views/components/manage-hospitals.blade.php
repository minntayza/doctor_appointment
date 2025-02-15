<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Hospitals</h1>

        <!-- Search Bar -->
        <form method="GET" class="mb-6 flex">
            <input type="text" name="search" placeholder="Search hospitals by name or location..."
                class="p-3 w-1/3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                Search
            </button>
        </form>

        <!-- Hospitals Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Location</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hospitals as $hospital)
                    <tr class="border-b">
                        <td class="p-4">{{ $hospital->name }}</td>
                        <td class="p-4">
                            @php
                            $encodedLocation = urlencode($hospital->location);
                        @endphp
                        <iframe class="w-20 h-20"
                        src="https://www.google.com/maps/embed?pb={{$hospital->location}}"
                            allowfullscreen="" loading="lazy">
                        </iframe>                        </td>
                        <td class="p-4">{{ $hospital->email }}</td>
                        <td class="p-4">
                            @if($hospital->is_active)
                                <span class="px-3 py-1 text-sm font-semibold text-green-600 bg-green-200 rounded-full">
                                    Active
                                </span>
                            @else
                                <span class="px-3 py-1 text-sm font-semibold text-red-600 bg-red-200 rounded-full">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="p-4 flex space-x-2">
                            <a
                               class="px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                                Edit
                            </a>
                            <form method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                    class="px-3 py-2 {{ $hospital->is_active ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-green-500 hover:bg-green-600' }} text-white rounded-lg shadow-md">
                                    {{ $hospital->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>
                            <form method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this hospital?');">
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
            {{ $hospitals->links() }}
        </div> --}}
    </div>
</div>
