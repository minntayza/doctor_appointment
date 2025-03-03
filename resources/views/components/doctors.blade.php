<div style="min-height: 100vh; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #dbeafe 100%); background-attachment: fixed;">
    <div class="container px-6 py-10 mx-auto">
        <!-- Search Bar Component -->
        <div class="mb-12">
            <x-searchBarForDoctor/>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Specialty Filter Sidebar -->
            <div class="md:w-64">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Specialties</h3>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <form id="specialityForm" action="/doctors" method="GET">
                        <div class="divide-y divide-gray-100">
                            @foreach ($specialities as $specialty)
                            <div class="flex items-center p-4 hover:bg-gray-50 transition-colors duration-150">
                                <input
                                    id="specialty-{{$loop->index}}"
                                    type="radio"
                                    value="{{$specialty}}"
                                    name="specialty"
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 cursor-pointer"
                                    onchange="document.getElementById('specialityForm').submit();"
                                >
                                <label
                                    for="specialty-{{$loop->index}}"
                                    class="ml-3 block text-sm font-medium text-gray-700 cursor-pointer hover:text-blue-600"
                                >
                                    {{$specialty}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>

            <!-- Doctors List -->
            <div class="flex-1">
                <div class="grid gap-6">
                    @forelse($doctors as $doctor)
                        <x-doctor-card :doctor="$doctor"/>
                    @empty
                        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01"></path>
                            </svg>
                            <p class="mt-4 text-lg font-semibold text-gray-900">No doctors found</p>
                            <p class="mt-2 text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
                        </div>
                    @endforelse

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{$doctors->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
