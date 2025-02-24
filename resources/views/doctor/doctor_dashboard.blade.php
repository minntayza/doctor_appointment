<x-app-layout>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <x-side-bar/>

        <!-- Main Content -->
        <x-doctor-dashboard :upcomingAppointmentsCount="$upcomingAppointmentsCount" :patientsCount="$patientsCount"/>
    </div>

</x-app-layout>

