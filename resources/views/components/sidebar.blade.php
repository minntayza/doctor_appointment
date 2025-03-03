<aside id="admin-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-fu bg-gradient-to-b from-blue-900 to-blue-950 border-r border-blue-800/30 sm:translate-x-0 shadow-xl" aria-label="Sidebar">
    <div class="h-full px-4 pb-4 overflow-y-auto">
        <ul class="space-y-1.5">
            <li>
                <a href="/admin-dashboard" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                    <div class="bg-blue-500/10 p-2 rounded-lg group-hover:bg-blue-500/20 transition-all duration-200">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/manage-users" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                    <div class="bg-indigo-500/10 p-2 rounded-lg group-hover:bg-indigo-500/20 transition-all duration-200">
                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Manage Users</span>
                </a>
            </li>
            <li>
                <a href="/manage-bookings" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                    <div class="bg-purple-500/10 p-2 rounded-lg group-hover:bg-purple-500/20 transition-all duration-200">
                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Manage Bookings</span>
                </a>
            </li>
            <li>
                <a href="/manage-doctors" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                    <div class="bg-green-500/10 p-2 rounded-lg group-hover:bg-green-500/20 transition-all duration-200">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Manage Doctors</span>
                </a>
            </li>
            <li>
                <a href="/manage-hospitals" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group">
                    <div class="bg-teal-500/10 p-2 rounded-lg group-hover:bg-teal-500/20 transition-all duration-200">
                        <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Manage Hospitals</span>
                </a>
            </li>

            <li class="mt-6 pt-6 border-t border-blue-800/30">
                <form action="/logout" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="flex items-center p-3 text-gray-100 rounded-xl transition-all duration-200 hover:bg-white/10 group w-full">
                        <div class="bg-red-500/10 p-2 rounded-lg group-hover:bg-red-500/20 transition-all duration-200">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
