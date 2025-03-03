<x-app-layout>
    <div style="min-height: 100vh; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); background-attachment: fixed;">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            @if(auth()->user()->is_doctor)
                <div class="lg:flex lg:gap-8">
                    <div class="lg:w-64">
                        <x-side-bar/>
                    </div>

                    <div class="flex-1 mt-8 lg:mt-0">
            @endif

            <div class="max-w-3xl mx-auto space-y-8">
                <!-- Profile Information -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center mb-6">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <h2 class="text-xl font-bold text-gray-900">Profile Information</h2>
                        </div>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Update Password -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center mb-6">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <h2 class="text-xl font-bold text-gray-900">Update Password</h2>
                        </div>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-center mb-6">
                            <svg class="w-6 h-6 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <h2 class="text-xl font-bold text-gray-900">Delete Account</h2>
                        </div>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

            @if(auth()->user()->is_doctor)
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
