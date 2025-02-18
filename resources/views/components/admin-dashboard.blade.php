@props(['pendingBookingsCount','bookingsCount','bookings'])
<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow-md flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.style.display='none'" class="text-white font-bold">&times;</button>
    </div>
    @endif
    <!-- Main Content -->
    <div class="p-6">
        <h1 class="text-4xl font-bold text-gray-900">Welcome, Admin</h1>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2  gap-6 mt-8">
            <!-- Card: Total Users -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-700 p-6 rounded-2xl shadow-md text-white flex items-center">
                <div class="p-4 bg-white bg-opacity-20 rounded-full">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 10a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm5 1h-1a5 5 0 0 1-8 0H5a5 5 0 0 0-5 5v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1v-2a5 5 0 0 0-5-5Z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold">Total Users</h3>
                    <p class="text-3xl font-bold">{{ auth()->user()->all()->count() }}</p>
                </div>
            </div>

            <!-- Card: Total Bookings -->
            <div class="bg-gradient-to-r from-green-500 to-green-700 p-6 rounded-2xl shadow-md text-white flex items-center">
                <div class="p-4 bg-white bg-opacity-20 rounded-full">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377Z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold">Total Bookings</h3>
                    <p class="text-3xl font-bold">{{$bookings->count()}}</p>
                </div>
            </div>

            <!-- Card: Approvaled -->
            <div class="bg-gradient-to-r from-yellow-500 to-yellow-700 p-6 rounded-2xl shadow-md text-white flex items-center">
                <div class="p-4 bg-white bg-opacity-20 rounded-full">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold">Approved Bookings</h3>
                    <p class="text-3xl font-bold">{{ $pendingBookingsCount }}</p>
                </div>
            </div>

            <!-- Card: Pending Approvals -->
            <div class="bg-gradient-to-r from-red-500 to-red-700 p-6 rounded-2xl shadow-md text-white flex items-center">
                <div class="p-4 bg-white bg-opacity-20 rounded-full">
                    <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold">Pending Approvals</h3>
                    <p class="text-3xl font-bold">{{ $bookingsCount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
