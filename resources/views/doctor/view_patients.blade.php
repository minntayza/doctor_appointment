<x-app-layout>

    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar/>

        <!-- Main Content -->
        <x-view-patients :bookings="$bookings"/>
    </div>

</x-app-layout>

