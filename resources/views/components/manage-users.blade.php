<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Users</h1>

    <!-- Search Bar -->
    <div class="flex justify-between items-center mb-6">
        <form method="GET" action="/manage-users" class="relative w-1/3">
            <input type="text" name="search" value="{{ request('search') }}" id="search" placeholder="Search users..."
                   class="p-3 w-full rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            <button type="submit"
                    class="absolute right-0 top-0 p-3 rounded-r-lg bg-blue-950 text-white hover:bg-blue-900 focus:ring focus:ring-blue-300">
                Search
            </button>
        </form>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="min-w-full border-collapse w-full">
            <thead>
                <tr class="bg-sky-950 text-white">
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">#</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Email</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold uppercase">Admin Role</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold uppercase">Doctor Role</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $user)
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>

                    <!-- Admin Role Toggle -->
                    <td class="px-6 py-4 text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer role-toggle" data-id="{{ $user->id }}" data-role="admin" {{ $user->is_admin ? 'checked' : '' }}>
                            <div class="w-14 h-7 bg-red-500 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-7 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-1 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </td>

                    <!-- Doctor Role Toggle -->
                    <td class="px-6 py-4 text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer role-toggle" data-id="{{ $user->id }}" data-role="doctor" {{ $user->is_doctor ? 'checked' : '' }}>
                            <div class="w-14 h-7 bg-gray-500 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-7 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-1 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-500"></div>
                        </label>
                    </td>

                    <!-- Delete Button -->
                    <td class="px-6 py-4 flex justify-center gap-4">
                        <form action="/manage-users/delete/{{ $user->id }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('delete')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 shadow-md">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $users->links() }}
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.role-toggle').change(function() {
            var userId = $(this).data('id');
            var role = $(this).data('role'); // 'admin' or 'doctor'
            var isChecked = $(this).is(':checked') ? 1 : 0;

            $.ajax({
                url: "/manage-users/toggle-role/" + userId,
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    role: role,
                    status: isChecked
                },
                success: function(response) {
                    alert(response.message);
                },
                error: function() {
                    alert("Something went wrong!");
                }
            });
        });
    });
</script>
