<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Hospitals</h1>

        <!-- Search Bar -->
        <div class="flex justify-between items-center mb-6">
            <form method="GET" action="/manage-users" class="relative w-1/3">
                <input type="text" name="search" type="search" value="{{request('search')}}" id="search" placeholder="Search users..."
                       class="p-3 w-full  rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                <button type="submit"
                        class="absolute right-0 top-0 p-3 rounded-r-lg bg-blue-950 text-white hover:bg-blue-900 focus:ring focus:ring-blue-300">
                    Search
                </button>
            </form>
            <a href="" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-700 shadow-md">+ Add Hospital</a>
        </div>

        <!-- Hospitals Table -->
        <div class="overflow-x-auto rounded-lg">
            <table class="min-w-full bg-white border rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Location</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Doctors</th>
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
                        <iframe class="w-30 h-30"
                        src="https://www.google.com/maps/embed?pb={{$hospital->location}}&disableDefaultUI=true"
                            allowfullscreen=""  loading="lazy">
                        </iframe>                        </td>
                        <td class="p-4">{{ $hospital->email }}</td>
                        <td>
                            <ul  style="list-style-type:disc">
                                <li>Aung Kaung Mon</li>
                                <li>Htet Myet Zaw</li>
                            </ul>
                        </td>
                        <td class="p-4 flex space-x-2">
                            <a
                               class="px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                                Edit
                            </a>
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
