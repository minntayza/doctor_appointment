@props(['hospitals', 'doctors'])

<div class="p-6 sm:ml-64 flex justify-center">
    <div class="max-w-4xl w-full bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Add New Doctor</h1>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="/store-doctor" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Enter doctor's name" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Enter email" required>
            </div>

            <!-- Specialization -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Specialization</label>
                <input type="text" name="specialization" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Enter specialization" required>
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" name="phone" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Enter phone number" required>
            </div>

            <!-- Diploma -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Diploma</label>
                <input type="text" name="diploma" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Enter diploma(s)">
            </div>

            <!-- Multiple Hospitals -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Hospitals</label>
                <select name="hospital_id[]" multiple class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" size="5" required>
                    @foreach($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->name }} Hospital</option>
                    @endforeach
                </select>
                <p class="text-gray-500 text-sm">Hold Ctrl (Windows) or Command (Mac) to select multiple hospitals.</p>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
                    Add Doctor
                </button>
            </div>
        </form>
    </div>
</div>
