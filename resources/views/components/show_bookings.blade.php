@props(['bookings'])

@if($bookings->count() > 0)
    <div class="container mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Your Booked Doctors</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($bookings as $booking)
                @if($booking->username == auth()->user()->name)
                    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/fffd9126-dda4-430c-a18d-fb33c6493c57/de210368-9622-4654-b8c7-a7f24673cb00.png" alt="Doctor Image">
                        <div class="p-5">
                            <h2 class="text-xl font-semibold text-gray-900">Dr. {{$booking->doc_name}}</h2>
                            <p class="text-gray-600 text-sm">{{$booking->doc_skills}}</p>
                            <p class="text-gray-700 mt-2">{{$booking->doc_diploma}}</p>
                            <p class="text-blue-600 font-semibold mt-2">{{$booking->doctor->hospitals->first()->name ?? 'N/A'}} Hospital</p>
                            <p class="text-gray-800 mt-2">Booked for: <span class="font-bold">{{$booking->day}}, {{$booking->date}} ({{$booking->time}} - {{$booking->end_time}})</span></p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="px-4 py-2 text-sm font-bold rounded-lg {{ $booking->is_booked ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }}">
                                    {{ $booking->is_booked ? 'Confirmed' : 'Pending' }}
                                </span>
                                <form action="/bookings/{{$booking->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-red-500 hover:bg-red-600 rounded-lg">
                                        Cancel Booking
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <p class="text-xl text-center text-red-500 font-semibold">You haven't made any bookings!</p>
@endif
