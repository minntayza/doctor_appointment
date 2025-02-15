<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Users</h1>

    <!-- Search Bar -->
    <div class="flex justify-between items-center mb-6">
        <input type="text" id="search" placeholder="Search users..." class="p-3 w-1/3 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
        <a href="" class="px-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-blue-700 shadow-md">+ Add User</a>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="min-w-full border-collapse w-full">
            <thead>
                <tr class="bg-sky-600 text-white">
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">#</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Role</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $user)
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4 items-center">
                        <span class="px-4 py-2 rounded-full text-white text-sm font-semibold
                            @if($user->is_admin)
                                bg-red-500
                            @elseif($user->is_doctor)
                                bg-blue-500
                            @else
                                bg-green-500
                            @endif">
                            @if($user->is_admin)
                            {{ucfirst('admin')}}
                            @else
                            {{ ucfirst('user') }}
                        @endif
                        </span>
                    </td>
                    <td class="px-6 py-4 flex justify-center gap-4">
                        <form action="/manage-users/edit">
                            <button type="submit" class="px-5 py-2 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 shadow-md">
                                Edit
                            </button>
                        </form>
                        <form action="/manage-users/delete" method="POST" onsubmit="return confirm('Are you sure?');">
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
