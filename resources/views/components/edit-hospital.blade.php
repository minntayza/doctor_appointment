<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Edit Hospital</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="/manage-hospitals/{{$hospital->id}}/update" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $hospital->name) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Address</label>
            <input type="text" name="address" value="{{ old('address', $hospital->address) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $hospital->email) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Phone Number</label>
            <input type="text" name="phone_num" value="{{ old('phone_num', $hospital->phone_num) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Location (Google Maps Embed Link)</label>
            <input type="text" name="location" id="location" value="{{ old('location', $hospital->location) }}"
                   class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 mb-2"
                   placeholder="Paste full Google Maps embed link" required>

            <!-- Google Maps iFrame -->
            <iframe id="map-frame" class="w-full h-64 border rounded-lg"
                    src="{{ $hospital->location ? 'https://www.google.com/maps/embed?pb=' . $hospital->location : '' }}"
                    allowfullscreen></iframe>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let locationInput = document.getElementById('location');
                let mapFrame = document.getElementById('map-frame');

                locationInput.addEventListener('input', function() {
                    mapFrame.src = "https://www.google.com/maps/embed?pb=" + this.value;
                });
            });
        </script>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
