<div style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);" class="rounded-3xl overflow-hidden shadow-2xl" id="find">
    <div class="max-w-2xl mx-auto py-12 px-6">
        <div class="text-center mb-8">
            <span class="inline-block px-4 py-1 rounded-full bg-white/20 text-white text-sm font-semibold mb-4">
                Find Your Doctor
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                Your Health Journey
                <span class="block text-blue-100">Starts Here</span>
            </h2>
            <p class="text-blue-100 text-lg max-w-xl mx-auto leading-relaxed">
                Connect with experienced healthcare professionals and book your appointment with just a few clicks.
            </p>
        </div>

        <form method="GET" action="/doctors" class="relative max-w-xl mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input
                    name="search"
                    value="{{request('search')}}"
                    type="search"
                    class="w-full pl-12 pr-32 py-4 text-gray-700 bg-white rounded-full border-none focus:ring-4 focus:ring-blue-300 shadow-lg text-base"
                    placeholder="Search for doctors by name or specialty..."
                    required
                />
                <button type="submit"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 px-6 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-full hover:from-blue-700 hover:to-indigo-700 transition-all duration-200 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-md">
                    Search
                </button>
            </div>
            <div class="mt-4 flex justify-center gap-4">
                <span class="inline-flex items-center text-sm text-blue-100">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                    Verified Doctors
                </span>
                <span class="inline-flex items-center text-sm text-blue-100">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"/>
                    </svg>
                    24/7 Available
                </span>
            </div>
        </form>
    </div>
</div>
