<div class="w-full" style="min-height: 100vh;">
    <div class="p-6 mx-auto sm:ml-64">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="flex items-center mb-8">
                <div class="bg-blue-100 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 ml-4">Manage Your Schedule</h2>
            </div>

            <!-- Add New Schedule Form -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8 border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="bg-green-100 p-2 rounded-lg">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 ml-3">Add New Schedule</h3>
                </div>

                <form action="/manage-schedule/add" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Select Hospital</label>
                            <select name="hospital_id" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                <option value="" disabled selected>Choose a hospital</option>
                                @foreach(auth()->user()->doctor->hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" name="date" id="dateInput" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Day</label>
                            <select name="day" id="dayInput" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                <option value="" disabled selected>Select day</option>
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Start Time</label>
                            <input type="time" name="time" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">End Time</label>
                            <input type="time" name="end_time" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Add Schedule
                        </button>
                    </div>
                </form>
            </div>

            <!-- Existing Schedules -->
            @foreach (auth()->user()->doctor->hospitals as $hospital)
                <div class="bg-white rounded-xl shadow-sm p-6 mb-6 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-2 rounded-lg">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 ml-3">{{ $hospital->name }} - Schedules</h3>
                    </div>

                    @if($schedules->isNotEmpty())
                    @forelse ($schedules as $schedule)
                        @if ($schedule->hospital_id == $hospital->id)
                            <div class="bg-gray-50 rounded-lg p-6 mb-4 border border-gray-200">
                                <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
                                    <div class="flex items-center space-x-4">
                                        <div class="bg-white p-3 rounded-lg shadow-sm">
                                            <div class="text-sm font-medium text-gray-900">{{ $schedule->schedule->day }}</div>
                                            <div class="text-xs text-gray-500">{{ $schedule->schedule->date }}</div>
                                        </div>
                                        <div class="bg-white p-3 rounded-lg shadow-sm">
                                            <div class="text-sm font-medium text-gray-900">{{ $schedule->schedule->time }} - {{ $schedule->schedule->end_time }}</div>
                                            <div class="text-xs text-gray-500">Working Hours</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <form action="/manage-schedule/{{$schedule->schedule_id}}/update" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="flex items-center space-x-4">
                                                <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">

                                                <div class="flex flex-col">
                                                    <label class="text-sm font-medium text-gray-700">Date</label>
                                                    <input type="date" name="date" id="updateDateInput-{{ $schedule->id }}" value="{{ $schedule->schedule->date }}" required
                                                        class="border border-gray-300 rounded-lg p-2 w-32 text-sm focus:ring focus:ring-blue-200">
                                                </div>

                                                <div class="flex flex-col">
                                                    <label class="text-sm font-medium text-gray-700">Day</label>
                                                    <select name="day" id="updateDayInput-{{ $schedule->id }}" required class="border border-gray-300 rounded-lg p-2 w-32 text-sm focus:ring focus:ring-blue-200">
                                                        <option value="Monday" {{ $schedule->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                        <option value="Tuesday" {{ $schedule->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                        <option value="Wednesday" {{ $schedule->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                        <option value="Thursday" {{ $schedule->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                        <option value="Friday" {{ $schedule->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                        <option value="Saturday" {{ $schedule->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                        <option value="Sunday" {{ $schedule->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                    </select>
                                                </div>

                                                <div class="flex flex-col">
                                                    <label class="text-sm font-medium text-gray-700">Start Time</label>
                                                    <input type="time" name="time" value="{{ $schedule->schedule->time }}" required
                                                        class="border border-gray-300 rounded-lg p-2 w-32 text-sm focus:ring focus:ring-blue-200">
                                                </div>

                                                <span class="text-gray-600 font-medium">to</span>

                                                <div class="flex flex-col">
                                                    <label class="text-sm font-medium text-gray-700">End Time</label>
                                                    <input type="time" name="end_time" value="{{ $schedule->schedule->end_time }}" required
                                                        class="border border-gray-300 rounded-lg p-2 w-32 text-sm focus:ring focus:ring-blue-200">
                                                </div>

                                                <button type="submit"
                                                    class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition text-sm ">
                                                    Update
                                                </button>
                                            </div>
                                        </form>

                                        <form action="/manage-schedule/{{$schedule->schedule_id}}/delete" method="POST" class="inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="schedule_id" value="{{ $schedule->schedule_id }}">
                                            <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-700 bg-red-100 rounded-lg hover:bg-red-200 focus:ring-2 focus:ring-red-500 transition-all duration-200">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Edit Form (Hidden by default) -->
                                <div id="schedule-{{ $schedule->id }}" class="hidden mt-4 pt-4 border-t border-gray-200">
                                    <form action="/manage-schedule/{{$schedule->schedule_id}}/update" method="POST" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                                            <input type="date" name="date" id="updateDateInput-{{ $schedule->id }}"
                                                value="{{ $schedule->date }}" required
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Day</label>
                                            <select name="day" id="updateDayInput-{{ $schedule->id }}" required
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                                    <option value="{{ $day }}" {{ $schedule->day == $day ? 'selected' : '' }}>
                                                        {{ $day }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Start Time</label>
                                            <input type="time" name="time" value="{{ $schedule->time }}" required
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">End Time</label>
                                            <input type="time" name="end_time" value="{{ $schedule->end_time }}" required
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                                        </div>

                                        <div class="md:col-span-4 flex justify-end">
                                            <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-200 transition-all duration-200">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                Update Schedule
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="text-center py-8">
                            <div class="bg-gray-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <p class="text-gray-500">No schedules available for this hospital.</p>
                        </div>
                    @endforelse
                    @endif
                </div>
            @endforeach
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    let today = new Date().toISOString().split("T")[0];
                    document.getElementById("dateInput").setAttribute("min", today);

                    // Automatically select the correct day when a date is chosen
                    document.getElementById("dateInput").addEventListener("change", function () {
                        let date = new Date(this.value);
                        let dayName = date.toLocaleDateString('en-US', { weekday: 'long' });
                        document.getElementById("dayInput").value = dayName;
                    });

                    // Auto-update day in the update form
                    @foreach ($schedules as $schedule)
                        document.getElementById("updateDateInput-{{ $schedule->id }}").addEventListener("change", function () {
                            let date = new Date(this.value);
                            let dayName = date.toLocaleDateString('en-US', { weekday: 'long' });
                            document.getElementById("updateDayInput-{{ $schedule->id }}").value = dayName;
                        });
                    @endforeach
                });
            </script>
