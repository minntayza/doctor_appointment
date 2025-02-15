@props(['user'])
<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">Edit User</h2>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-4 shadow-md flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.style.display='none'" class="text-white font-bold">&times;</button>
            </div>
        @endif

        <form action="/manage-user" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                    class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                    class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-medium">Role</label>
                <select name="role" id="role" class="w-full p-3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                    <option value="user">User</option>
                    <option value="admin" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
                    <option value="doctor" {{ $user->is_doctor ? 'selected' : '' }}>Doctor</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-between mt-6">
                <a href="/manage-users" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                    Update User
                </button>
            </div>
        </form>
    </div>
</div>

