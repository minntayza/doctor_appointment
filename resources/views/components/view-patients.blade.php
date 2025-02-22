<div class="min-h-screen bg-gray-100 p-6 w-full">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Patients</h2>

        <div class="flex items-center gap-4 mb-4">
            <input type="text" placeholder="Search by name..." class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
            {{-- <select class="p-2 border rounded-lg">
                <option>Filter by Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select> --}}
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Search</button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Age</th>
                        <th class="p-3 text-left">Gender</th>
                        <th class="p-3 text-left">Contact</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->doctor->bookings as $booking)
                    <tr class="border-b">
                        <td class="p-3">{{$booking->username}}</td>
                        <td class="p-3">30</td>
                        <td class="p-3">Male</td>
                        <td class="p-3">+123456789</td>
                        <td class="p-3">
                            <button class="bg-green-500 text-white px-3 py-1 rounded-lg">View</button>
                            <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg ml-2">Edit</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded-lg ml-2">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- user pagination --}}
        <div class="flex justify-between items-center mt-4">
            <p class="text-gray-600">Showing 1 to 5 of 50 patients</p>
            <div class="flex gap-2">
                <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded-lg">Previous</button>
                <button class="bg-blue-500 text-white px-3 py-1 rounded-lg">1</button>
                <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded-lg">2</button>
                <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded-lg">Next</button>
            </div>
        </div>
    </div>
</div>
