<div class="container">
    <div class="p-6 sm:ml-64 mx-auto">
        <div class="max-w-5xl mx-auto">
            <!-- Header Section -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-100 p-3 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Your Appointments</h2>
                            <p class="text-sm text-gray-500 mt-1">Manage your upcoming appointments</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointments List -->
            <div class="space-y-4">
                @forelse (auth()->user()->doctor->bookings as $booking)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200">
                        <div class="p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-start space-x-4">
                                    <!-- Patient Avatar -->
                                    <div class="bg-gray-100 rounded-full p-3">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>

                                    <!-- Appointment Details -->
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $booking->username }}</h3>
                                        <div class="mt-2 space-y-2">
                                            <!-- Date & Time -->
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                <span>{{ $booking->day }}, {{ $booking->date }}, {{ date('Y') }}</span>
                                            </div>

                                            <!-- Time Slot -->
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                <span>{{ $booking->time }} - {{ $booking->end_time }}</span>
                                            </div>

                                            <!-- Hospital -->
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                </svg>
                                                <span>{{ $booking->hospital }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Status Badge -->
                                <div>
                                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium {{ $booking->is_booked ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                        <span class="w-2 h-2 mr-2 rounded-full {{ $booking->is_booked ? 'bg-green-500' : 'bg-yellow-500' }}"></span>
                                        {{ $booking->is_booked ? 'Upcoming' : 'Pending' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-12">
                        <div class="text-center">
                            <div class="bg-gray-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No Appointments Found</h3>
                            <p class="text-gray-500">You currently don't have any appointments scheduled.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
