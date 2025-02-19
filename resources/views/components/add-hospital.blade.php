<div class="p-6 sm:ml-64 flex justify-center">
    <div class="max-w-4xl w-full bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Add Hospital</h1>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/store-hospital">
            @csrf
            <!-- Hospital Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Hospital Name</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Address</label>
                <input type="text" name="address" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" name="phone_num" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <!-- Google Maps Location -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Location</label>
                <input type="text" name="location" id="location" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 mb-2" placeholder="Enter Google Maps URL" required>
                <iframe id="map-frame" class="w-full h-64 border rounded-lg" src="https://www.google.com/maps/embed?pb=" allowfullscreen></iframe>
            </div>

            <script>
                document.getElementById('location').addEventListener('input', function() {
                    document.getElementById('map-frame').src = "https://www.google.com/maps/embed?pb="+this.value;
                });
            </script>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
                    Add Hospital
                </button>
            </div>
        </form>
    </div>
</div>
