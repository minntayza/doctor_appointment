<aside class="w-64 bg-gray-800 text-white p-4 space-y-6">
    <a href="/doctor-dashboard">
        <h1 class="text-2xl font-bold mb-6">Doctor Dashboard</h1>
    </a>
    <nav>
        <ul class="space-y-4">
            <li class=" p-3 flex items-center space-x-2  hover:bg-gray-700 w-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20l9-7-9-7-9 7 9 7z"></path></svg>
                <a href="/view-appointments" class="hover:text-blue-400">Appointments</a>
            </li>
            {{-- <li class=" p-3 flex items-center space-x-2  hover:bg-gray-700 w-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M8 16l-4-4m0 0l4-4m-4 4h16"></path></svg>
                <a href="/view-patients" class="hover:text-blue-400">Patients</a>
            </li> --}}
            <li class=" p-3 flex items-center space-x-2  hover:bg-gray-700 w-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <a href="/manage-schedule" class="hover:text-blue-400">Schedule</a>
            </li>
            <li class=" p-3 flex items-center space-x-2  hover:bg-gray-700 w-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                <a href="" class="hover:text-blue-400">Profile Settings</a>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="flex items-center p-3 text-white rounded-lg hover:bg-gray-700 w-full">
                        <svg class="w-6 h-6 text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="ml-3 hover:text-blue-400">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
