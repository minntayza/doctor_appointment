<x-app-layout>

    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar/>

        <!-- Main Content -->
        <x-manage-schedule :schedules="$schedules" :doctor="$doctor" :hospitals="$hospitals" :doctorHospitals="$doctorHospitals"/>
    </div>

</x-app-layout>

