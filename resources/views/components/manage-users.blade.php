<div style="min-height: 100vh; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); background-attachment: fixed;">
    <div class="p-6 sm:ml-64">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Manage Users</h1>
                    <p class="mt-2 text-gray-600">Manage user roles and permissions</p>
                </div>

                <!-- Search Bar -->
                <form method="GET" action="/manage-users" class="relative w-72">
                    <div class="relative">
                        <input type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Search users..."
                            class="w-full pl-10 pr-4 py-2 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200"
                        >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Users Table -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Details</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Roles</th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                                <span class="text-xl font-medium text-gray-600">{{ substr($user->name, 0, 1) }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center space-x-4">
                                        <!-- Admin Role Toggle -->
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" class="sr-only peer role-toggle" data-id="{{ $user->id }}" data-role="admin" {{ $user->is_admin ? 'checked' : '' }}>
                                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all border-2 border-gray-200"></div>
                                            </label>
                                            <span class="text-sm text-gray-600">Admin</span>
                                        </div>

                                        <!-- Doctor Role Toggle -->
                                        <div class="flex items-center space-x-2">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" class="sr-only peer role-toggle" data-id="{{ $user->id }}" data-role="doctor" {{ $user->is_doctor ? 'checked' : '' }}>
                                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-green-500 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all border-2 border-gray-200"></div>
                                            </label>
                                            <span class="text-sm text-gray-600">Doctor</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <form action="/manage-users/{{$user->id}}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div id="toast" class="fixed bottom-4 right-4 transform translate-y-full opacity-0 transition-all duration-300">
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center">
        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <span id="toastMessage" class="text-gray-700"></span>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function showToast(message) {
            $('#toastMessage').text(message);
            $('#toast').removeClass('translate-y-full opacity-0').addClass('translate-y-0 opacity-100');
            setTimeout(function() {
                $('#toast').addClass('translate-y-full opacity-0').removeClass('translate-y-0 opacity-100');
            }, 3000);
        }

        $('.role-toggle').change(function() {
            var userId = $(this).data('id');
            var role = $(this).data('role');
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
                    showToast(response.message);
                },
                error: function() {
                    showToast("Something went wrong!");
                }
            });
        });
    });
</script>
