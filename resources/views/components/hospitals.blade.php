@props(['hospitals'])
<div style="min-height: 100vh; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #dbeafe 100%); background-attachment: fixed;" class="dark:from-gray-900 dark:to-gray-800">
<div class="container px-6 py-16 mx-auto">
<x-searchBarForHospital :hospitals="$hospitals"/>
@foreach($hospitals as $hospital)
<x-hospital-card :hospital="$hospital"/>
@endforeach
<div class=" my-5">
    {{$hospitals->links()}}
</div>
</div>
</div>
