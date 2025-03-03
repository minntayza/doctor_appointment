@props(['doctor','doctors'])
<div style="min-height: 100vh; background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 50%, #BFDBFE 100%); background-attachment: fixed;">
    <div class="container px-6 py-10 mx-auto">
        <!-- Search Bar Component -->
        <div class="mb-12">
            <x-searchBarForDoctor/>
        </div>

        <!-- Doctor Profile Section -->
        <div class="max-w-5xl mx-auto mb-16">
            <div class="relative">
                <div style="background: linear-gradient(to right, rgba(59, 130, 246, 0.05), rgba(99, 102, 241, 0.05)); border-radius: 1.5rem; position: absolute; inset: 0;"></div>
                <x-doctor-profile :doctor="$doctor"/>
            </div>
        </div>

        <!-- Recommended Doctors Section -->
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between mb-8 space-y-4 md:space-y-0">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Similar Specialists
                        <span class="ml-3 px-3 py-1 text-sm font-medium text-blue-600 bg-blue-50 rounded-full">
                            {{$doctor->specialization}}
                        </span>
                    </h2>
                    <p class="mt-2 text-gray-600">Find more experienced doctors in {{$doctor->specialization}}</p>
                </div>

                <div class="flex items-center space-x-2">
                    <span style="background: linear-gradient(to right, #3B82F6, #6366F1); padding: 0.5rem 1rem; color: white; border-radius: 9999px; font-size: 0.875rem; font-weight: 500; box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.1), 0 2px 4px -1px rgba(59, 130, 246, 0.06);">
                        Recommended For You
                    </span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($doctors as $recommendDoctor)
                    @if($recommendDoctor->specialization == $doctor->specialization && $recommendDoctor->name != $doctor->name)
                        <div class="transform hover:scale-[1.02] transition-all duration-300">
                            <x-doctor-card :doctor="$recommendDoctor"/>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- No Recommendations State -->
            @if(!$doctors->contains('specialization', $doctor->specialization))
                <div class="text-center py-16 bg-white rounded-2xl shadow-sm">
                    <div class="bg-blue-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">No Similar Specialists Found</h3>
                    <p class="text-gray-500 max-w-md mx-auto">
                        We couldn't find any other doctors specializing in {{$doctor->specialization}} at the moment.
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
