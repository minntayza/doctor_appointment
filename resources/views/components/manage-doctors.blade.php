<div class="p-6 sm:ml-64 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Manage Doctors</h1>

        <!-- Search Bar -->
        <div class="flex justify-between items-center mb-6">
            <form method="GET" action="/manage-doctors" class="relative w-1/3">
                <input type="text" name="search" type="search" value="{{request('search')}}" id="search" placeholder="Search doctors..."
                       class="p-3 w-full  rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                <button type="submit"
                        class="absolute right-0 top-0 p-3 rounded-r-lg bg-blue-950 text-white hover:bg-blue-900 focus:ring focus:ring-blue-300">
                    Search
                </button>
            </form>
            <a href="/add-doctor" class="px-4 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-700 shadow-md">+ Add Doctor</a>
        </div>

        <!-- Doctors Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg shadow-md">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Specialty</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Hospital</th>
                        {{-- <th class="p-4 text-left">Status</th> --}}
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr class="border-b">
                        <td class="p-4">{{ $doctor->name }}</td>
                        <td class="p-4">{{ $doctor->specialization }}</td>
                        <td class="p-4">{{ $doctor->email }}</td>
                        <td class="p-4"><ul style="list-style-type:disc">
                            @foreach ($doctor->hospitals as $hospital)
                                <li>
                                    {{ $hospital->name }}<br>
                                </li>
                        @endforeach
                        </ul></td>
                        {{-- <td class="p-4">
                            @if($doctor->is_active)
                                <span class="px-3 py-1 text-sm font-semibold text-green-600 bg-green-200 rounded-full">
                                    Active
                                </span>
                            @else
                                <span class="px-3 py-1 text-sm font-semibold text-red-600 bg-red-200 rounded-full">
                                    Inactive
                                </span>
                            @endif
                        </td> --}}
                        <td class="p-4 flex space-x-2">
                            <a href="/manage-doctors/{{$doctor->id}}/edit"
                               class="px-5 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                                Edit
                            </a>
                            {{-- <form method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                    class="px-3 py-2 {{ $doctor->is_active ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-green-500 hover:bg-green-600' }} text-white rounded-lg shadow-md">
                                    {{ $doctor->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form> --}}
                            <form method="POST" action="/manage-doctors/{{$doctor->id}}/delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600">
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
            {{ $doctors->links() }}
        </div>
    </div>
</div>
