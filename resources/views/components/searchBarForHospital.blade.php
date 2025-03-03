<div class="relative bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl overflow-hidden" id="find">
    <div class="absolute inset-0 bg-pattern opacity-10"></div>
    <div class="max-w-2xl mx-auto py-16 px-8 relative z-10">
        <h1 class="text-3xl font-bold text-white mb-4">Find the Best Hospitals</h1>
        <h2 class="text-5xl font-bold text-white mb-6">
            Your Health Journey
            <span class="block text-blue-200">Starts Here</span>
        </h2>
        <p class="text-lg text-blue-100 mb-8 leading-relaxed max-w-xl">
            Discover top-rated healthcare facilities and expert medical professionals all in one place.
            Your well-being is our priority.
        </p>

        <!-- Search Form -->
        <form method="GET" action="/hospitals" class="relative max-w-xl">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input
                    name="search"
                    value="{{request('search')}}"
                    type="search"
                    class="w-full pl-12 pr-32 py-4 text-gray-700 bg-white rounded-full border-none focus:ring-2 focus:ring-blue-400 shadow-lg"
                    placeholder="Search hospitals..."
                    required
                />
                <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 px-6 py-2.5 bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-medium rounded-full hover:from-blue-600 hover:to-indigo-600 transition-all duration-200 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Search
                </button>
            </div>
        </form>
    </div>
</div>
