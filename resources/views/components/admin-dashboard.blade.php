@props(['pendingBookingsCount','bookingsCount','bookings'])
<div style="min-height: 100vh; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); background-attachment: fixed;">
    <div class="p-6 sm:ml-64">
        @if (session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-lg mb-6 shadow-sm flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-green-700">{{ session('success') }}</span>
            </div>
            <button onclick="this.parentElement.style.display='none'" class="text-green-600 hover:text-green-800 transition-colors">&times;</button>
        </div>
        @endif

        <!-- Main Content -->
        <div class="p-8">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">Admin Dashboard</h1>
                    <p class="mt-2 text-gray-600">Overview of your system's performance</p>
                </div>
                <div class="text-sm text-gray-600">
                    {{ now()->format('l, F j, Y') }}
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Card: Total Users -->
                <div style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);"
                     class="rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-white/20 rounded-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <span class="text-white/70 text-sm">Total Users</span>
                        </div>
                        <div class="text-white">
                            <p class="text-3xl font-bold">{{ auth()->user()->all()->count() }}</p>
                            <p class="text-xs mt-1 text-white/70">Registered accounts</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Total Bookings -->
                <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);"
                     class="rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-white/20 rounded-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-white/70 text-sm">Total Bookings</span>
                        </div>
                        <div class="text-white">
                            <p class="text-3xl font-bold">{{$bookings->count()}}</p>
                            <p class="text-xs mt-1 text-white/70">All time bookings</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Approved Bookings -->
                <div style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);"
                     class="rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-white/20 rounded-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-white/70 text-sm">Approved</span>
                        </div>
                        <div class="text-white">
                            <p class="text-3xl font-bold">{{ $pendingBookingsCount }}</p>
                            <p class="text-xs mt-1 text-white/70">Confirmed appointments</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Pending Approvals -->
                <div style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);"
                     class="rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-white/20 rounded-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-white/70 text-sm">Pending</span>
                        </div>
                        <div class="text-white">
                            <p class="text-3xl font-bold">{{ $bookingsCount }}</p>
                            <p class="text-xs mt-1 text-white/70">Awaiting approval</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
