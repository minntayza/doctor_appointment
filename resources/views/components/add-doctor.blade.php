@props(['hospitals', 'doctors'])

<div style="min-height: 100vh; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); background-attachment: fixed;">
    <div class="p-6 sm:ml-64">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100">
                <!-- Header -->
                <div class="flex items-center mb-8">
                    <div class="bg-blue-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900 ml-4">Add New Doctor</h1>
                </div>

                @if(session('success'))
                    <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-green-700">{{ session('success') }}</span>
                    </div>
                @endif

                <form method="POST" action="/store-doctor" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text"
                                name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Dr. John Doe"
                                required
                            >
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email"
                                name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="doctor@example.com"
                                required
                            >
                        </div>

                        <!-- Specialization -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Specialization</label>
                            <input type="text"
                                name="specialization"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="e.g., Cardiology, Pediatrics"
                                required
                            >
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel"
                                name="phone"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Enter contact number"
                                required
                            >
                        </div>
                    </div>

                    <!-- Diploma -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Qualifications & Diplomas</label>
                        <input type="text"
                            name="diploma"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                            placeholder="e.g., MBBS, MD, Ph.D."
                        >
                    </div>

                    <!-- Multiple Hospitals -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Associated Hospitals</label>
                        <div class="relative">
                            <select name="hospital_id[]"
                                multiple
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 min-h-[160px]"
                                required
                            >
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}" class="py-2">
                                        {{ $hospital->name }} Hospital
                                    </option>
                                @endforeach
                            </select>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Hold Command (⌘) to select multiple hospitals
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3 pt-6">
                        <a href="/manage-doctors"
                           class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-200">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200">
                            Add Doctor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
