@props(['bookings'])

<div style="min-height: 100vh; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #dbeafe 100%); background-attachment: fixed;">
    <div class="container mx-auto px-6 py-12">
        @if($bookings->count() > 0)
            <div class="max-w-7xl mx-auto">
                <div class="flex items-center justify-between mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">
                        Your Appointments
                        <span class="block text-sm font-medium text-gray-500 mt-1">Manage your upcoming medical appointments</span>
                    </h1>
                    <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                        {{auth()->user()->bookings->count()}} Appointments
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($bookings as $booking)
                        @if($booking->username == auth()->user()->name)
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <div class="relative">
                                    <img class="w-full h-48 object-cover"
                                         src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png"
                                         alt="Dr. {{$booking->doc_name}}">
                                    <div class="absolute top-4 right-4">
                                        <span class="px-3 py-1 text-sm font-semibold rounded-full
                                            {{ $booking->is_booked ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $booking->is_booked ? 'Confirmed' : 'Pending' }}
                                        </span>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="mb-4">
                                        <h2 class="text-xl font-bold text-gray-900 mb-1">Dr. {{$booking->doc_name}}</h2>
                                        <p class="text-blue-600 font-medium text-sm">{{$booking->doc_skills}}</p>
                                    </div>

                                    <div class="space-y-3 mb-6">
                                        <div class="flex items-center text-gray-600">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            <span>{{$booking->doctor->hospitals->first()->name ?? 'N/A'}} Hospital</span>
                                        </div>

                                        <div class="flex items-center text-gray-600">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <span>{{$booking->day}}, {{$booking->date}}</span>
                                        </div>

                                        <div class="flex items-center text-gray-600">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span>{{$booking->time}} - {{$booking->end_time}}</span>
                                        </div>
                                    </div>

                                    <form action="/bookings/{{$booking->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="w-full px-4 py-3 bg-white border-2 border-red-100 text-red-600 rounded-lg hover:bg-red-50 transition-colors duration-200 flex items-center justify-center space-x-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                            <span>Cancel Appointment</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @else
            <div class="max-w-md mx-auto text-center py-12">
                <svg class="w-16 h-16 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <h3 class="mt-4 text-xl font-semibold text-gray-900">No appointments yet</h3>
                <p class="mt-2 text-gray-500">You haven't made any bookings. Start by finding a doctor and scheduling an appointment.</p>
            </div>
        @endif
    </div>
</div>
