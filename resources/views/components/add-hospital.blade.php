<div style="min-height: 100vh; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); background-attachment: fixed;">
    <div class="p-6 sm:ml-64">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100">
                <!-- Header -->
                <div class="flex items-center mb-8">
                    <div class="bg-blue-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900 ml-4">Add New Hospital</h1>
                </div>

                @if(session('success'))
                    <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-green-700">{{ session('success') }}</span>
                    </div>
                @endif

                <form method="POST" action="/store-hospital" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Hospital Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Hospital Name</label>
                            <input type="text"
                                name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Enter hospital name"
                                required
                            >
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email"
                                name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="hospital@example.com"
                                required
                            >
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel"
                                name="phone_num"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Enter phone number"
                                required
                            >
                        </div>

                        <!-- Address -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                            <input type="text"
                                name="address"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Enter full address"
                                required
                            >
                        </div>
                    </div>

                    <!-- Google Maps Location -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Google Maps Location</label>
                        <div class="space-y-3">
                            <input type="text"
                                name="location"
                                id="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Paste Google Maps embed code here"
                                required
                            >
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <iframe id="map-frame"
                                    class="w-full h-[300px] rounded-lg"
                                    src="https://www.google.com/maps/embed?pb="
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3 pt-6">
                        <a href="/manage-hospitals"
                           class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-200">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-all duration-200">
                            Add Hospital
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const locationInput = document.getElementById('location');
        const mapFrame = document.getElementById('map-frame');

        locationInput.addEventListener('input', function() {
            mapFrame.src = "https://www.google.com/maps/embed?pb=" + this.value;
        });
    });
</script>
