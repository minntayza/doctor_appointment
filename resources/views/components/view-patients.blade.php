<div class="min-h-screen bg-gray-100 p-6 w-full">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-3xl font-extrabold mb-6 text-gray-800">Patients</h2>

        <div class="flex items-center gap-4 mb-6">
            <input type="text" placeholder="Search by name..." class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            <button class="bg-blue-600 text-white px-5 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Search</button>
        </div>

        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-blue-50 text-gray-700 font-semibold">
                        <th class="p-4">Name</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Gender</th>
                        <th class="p-4">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->doctor->bookings as $booking)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="p-4 text-gray-800">{{$booking->username}}</td>
                        <td class="p-4 text-gray-600">{{$booking->user_email}}</td>
                        <td class="p-4 text-gray-600">Male</td>
                        <td class="p-4 text-gray-600">+123456789</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

                {{ $bookings->links() }}
    </div>
</div>
