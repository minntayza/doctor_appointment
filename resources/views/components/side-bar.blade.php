<aside class="w-64 bg-gray-900 text-white p-6 space-y-8 h-screen fixed">
    <a href="/doctor-dashboard" class="flex items-center space-x-2">
        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 20l9-7-9-7-9 7 9 7z"></path>
        </svg>
        <h1 class="text-2xl font-bold">Doctor Dashboard</h1>
    </a>

    <nav>
        <ul class="space-y-4">
            <li>
                <a href="/view-appointments" class="flex items-center p-3 space-x-3 rounded-lg
                   hover:bg-blue-500 transition-all duration-200">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405M19 13V7a2 2 0 00-2-2H7a2 2 0 00-2 2v6m4 4h6"></path>
                    </svg>
                    <span>Appointments</span>
                </a>
            </li>
            <li>
                <a href="/manage-schedule" class="flex items-center p-3 space-x-3 rounded-lg
                   hover:bg-blue-500 transition-all duration-200">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m0 0l-4 4m4-4l-4-4m4 4H3"></path>
                    </svg>
                    <span>Schedule</span>
                </a>
            </li>
            <li>
                <a href="/profile" class="flex items-center p-3 space-x-3 rounded-lg
                   hover:bg-blue-500 transition-all duration-200">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    </svg>
                    <span>Profile Settings</span>
                </a>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="flex items-center w-full p-3 space-x-3 rounded-lg
                            hover:bg-red-500 transition-all duration-200">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4V4"></path>
                        </svg>
                        <span>Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
