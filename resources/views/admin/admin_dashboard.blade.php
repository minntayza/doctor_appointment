<x-app-layout>
<x-sidebar/>
<x-admin-dashboard :bookings="$bookings" :pendingBookingsCount="$pendingBookingsCount" :bookingsCount="$bookingsCount"/>
</x-app-layout>

