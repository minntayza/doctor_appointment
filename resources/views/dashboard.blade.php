<x-app-layout>
    <div class="relative w-full bg-center bg-cover h-[42rem]" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1538108149393-fbbd81895907?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2800&q=80');">
        <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%);"></div>

        <div class="container relative z-10 mx-auto px-8 h-full flex items-center">
            <div class="max-w-3xl">
                <div class="inline-block px-6 py-2 rounded-full bg-blue-500/20 backdrop-blur-sm border border-blue-400/30 mb-6">
                    <span class="text-blue-200 font-medium">Welcome to Healthcare Hub</span>
                </div>

                <h1 class="text-6xl font-bold leading-tight mb-6">
                    <span class="text-white">Your Health,</span>
                    <br>
                    <span style="background: linear-gradient(to right, #3b82f6, #2dd4bf); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        Our Priority
                    </span>
                </h1>

                <p class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl">
                    Experience world-class healthcare services with our team of dedicated professionals.
                    Your well-being is our commitment to excellence.
                </p>

                <div class="flex flex-wrap gap-6">
                    <a href="#find" class="group relative px-8 py-4 bg-white rounded-xl font-semibold transition-all duration-300 hover:translate-y-[-2px]">
                        <div class="relative z-10 flex items-center">
                            <span class="text-blue-600 mr-2">Find Doctors</span>
                            <svg class="w-5 h-5 text-blue-600 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-blue-50 rounded-xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    </a>

                    <a href="/doctors" class="group relative px-8 py-4 rounded-xl font-semibold transition-all duration-300 hover:translate-y-[-2px]" style="background: linear-gradient(to right, #3b82f6, #2dd4bf);">
                        <div class="relative z-10 flex items-center">
                            <span class="text-white mr-2">Book Appointment</span>
                            <svg class="w-5 h-5 text-white transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-white/10 rounded-xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    </a>
                </div>

                <div class="mt-16 flex items-center space-x-8">
                    <div class="flex items-center space-x-2">
                        <div class="w-12 h-12 bg-blue-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <div class="text-2xl font-bold">100%</div>
                            <div class="text-sm text-gray-300">Secure Platform</div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="w-12 h-12 bg-blue-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <div class="text-2xl font-bold">24/7</div>
                            <div class="text-sm text-gray-300">Expert Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-about></x-about>
</x-app-layout>
