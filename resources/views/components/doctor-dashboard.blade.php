<main class="flex-1 p-8 bg-gray-100 overflow-auto">
    <div class="mb-6">
        <h2 class="text-3xl font-bold">Welcome, Dr. {{ auth()->user()->name }}</h2>
        <p class="text-gray-600 mt-1">Manage your schedule, patients, and profile here.</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-4 bg-white rounded-lg shadow text-center">
            <h3 class="text-lg font-semibold">Upcoming Appointments</h3>
            <p class="text-gray-600 mt-2">View and manage your upcoming appointments.</p>
            <a href="/view-appointments" class="inline-block mt-3 text-blue-500 hover:underline">View Appointments</a>
        </div>
        <div class="p-4 bg-white rounded-lg shadow text-center">
            <h3 class="text-lg font-semibold">Patient List</h3>
            <p class="text-gray-600 mt-2">Access and manage your patients' information.</p>
            <a href="/view-patients" class="inline-block mt-3 text-blue-500 hover:underline">View Patients</a>
        </div>
        <div class="p-4 bg-white rounded-lg shadow text-center">
            <h3 class="text-lg font-semibold">Manage Schedule</h3>
            <p class="text-gray-600 mt-2">Set your availability and manage your schedule.</p>
            <a href="/manage-schedule" class="inline-block mt-3 text-blue-500 hover:underline">Manage Schedule</a>
        </div>
    </div>
</main>
