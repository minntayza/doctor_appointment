<div class="p-4 sm:ml-64">
 <!-- Main Content -->
<div class="flex-1 p-10">
        <h1 class="text-3xl font-bold">Welcome, Admin</h1>
        <div class="grid grid-cols-3 gap-6 mt-6">
            <!-- Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold">Total Users</h3>
                <p class="text-2xl font-bold">{{ auth()->user()->all()->count() }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold">Total Bookings</h3>
                {{-- <p class="text-2xl font-bold">{{ $bookings_count }}</p> --}}
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold">Pending Approvals</h3>
                {{-- <p class="text-2xl font-bold">{{ $pending_count }}</p> --}}
            </div>
        </div>
</div>
</div>
