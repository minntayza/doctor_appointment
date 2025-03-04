<aside class="fixed top-0 left-0 w-64 h-screen bg-gradient-to-b from-blue-900 to-blue-950 text-white shadow-xl">
    <!-- Logo and Title -->
    <div class="p-6">
        <a href="/doctor-dashboard" class="flex items-center space-x-3">
            <div class="bg-white/10 p-2.5 rounded-lg">
                <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold">Doctor Portal</h1>
                <p class="text-xs text-blue-300">Healthcare Management</p>
            </div>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="mt-6 px-4">
        <ul class="space-y-2">
            <li>
                <a href="/doctor-dashboard" class="flex items-center px-4 py-3 text-gray-300 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-200 group">
                    <div class="bg-white/10 p-2 rounded-lg group-hover:bg-white/20">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/view-appointments" class="flex items-center px-4 py-3 text-gray-300 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-200 group">
                    <div class="bg-white/10 p-2 rounded-lg group-hover:bg-white/20">
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Appointments</span>
                </a>
            </li>

            <li>
                <a href="/manage-schedule" class="flex items-center px-4 py-3 text-gray-300 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-200 group">
                    <div class="bg-white/10 p-2 rounded-lg group-hover:bg-white/20">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Schedule</span>
                </a>
            </li>

            <li>
                <a href="/profile" class="flex items-center px-4 py-3 text-gray-300 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-200 group">
                    <div class="bg-white/10 p-2 rounded-lg group-hover:bg-white/20">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <span class="ml-3 font-medium">Profile Settings</span>
                </a>
            </li>

            <!-- Divider -->
            <div class="my-6 border-t border-blue-800/30"></div>

            <li>
                <form action="/logout" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-3 text-gray-300 hover:text-white rounded-lg hover:bg-red-500/20 transition-all duration-200 group">
                        <div class="bg-white/10 p-2 rounded-lg group-hover:bg-red-500/20">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
