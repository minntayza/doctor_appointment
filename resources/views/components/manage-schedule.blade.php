<div class="p-6 sm:ml-64 min-h-screen w-full mx-auto">
    <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Manage Your Schedule</h2>

    <!-- Form to Add a New Schedule -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h3 class="text-xl font-bold text-gray-700 mb-4">Add a New Schedule</h3>
        <form action="/manage-schedule/add" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <select name="hospital_id" required class="border border-gray-300 rounded-lg p-3 w-full">
                    <option value="" disabled selected>Select Hospital</option>
                    @foreach($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                    @endforeach
                </select>

                <input type="date" name="date" id="dateInput" required class="border border-gray-300 rounded-lg p-3 w-full">

                <!-- Day selection dropdown (auto-updated based on date input) -->
                <select name="day" id="dayInput" required class="border border-gray-300 rounded-lg p-3 w-full">
                    <option value="" disabled selected>Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>

                <div>
                    <span>Start Time</span>
                    <input type="time" name="time" required class="border border-gray-300 rounded-lg p-3 w-full">
                </div>
                <div>
                    <span>End Time</span>
                    <input type="time" name="end_time" required class="border border-gray-300 rounded-lg p-3 w-full">
                </div>
            </div>

            <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition">
                + Add Schedule
            </button>
        </form>
    </div>

    <!-- List of Existing Schedules -->
    @foreach ($hospitals as $hospital)
        <div class="mb-6 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $hospital->name }} - Schedules</h3>

            @forelse ($schedules as $schedule)
                @if ($schedule->hospital_id == $hospital->id)
                    <div class="border border-gray-200 rounded-lg p-4 mb-4 bg-gray-50">
                        <div class="flex justify-between items-center mb-3">
                            <div>
                                <p class="text-gray-700 font-semibold">Date: {{ $schedule->schedule->date }}</p>
                                <p class="text-gray-700 font-semibold">Day: {{ $schedule->schedule->day }}</p>
                                <p class="text-gray-500">Time: {{ $schedule->schedule->time }} - {{ $schedule->schedule->end_time }}</p>
                            </div>

                            <div class="flex space-x-2 items-center justify-content-center">
                                <!-- Update Schedule Form -->
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
                                                <option value="Monday" {{ $schedule->schedule->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                <option value="Tuesday" {{ $schedule->schedule->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                <option value="Wednesday" {{ $schedule->schedule->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                <option value="Thursday" {{ $schedule->schedule->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                <option value="Friday" {{ $schedule->schedule->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                <option value="Saturday" {{ $schedule->schedule->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                <option value="Sunday" {{ $schedule->schedule->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
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

                                <!-- Delete Schedule Form -->
                                <form action="/manage-schedule/{{$schedule->schedule_id}}/delete" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="schedule_id" value="{{ $schedule->schedule_id }}">
                                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <p class="text-gray-500">No schedules available for this hospital.</p>
            @endforelse
        </div>
    @endforeach
</div>

<!-- JavaScript -->
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
