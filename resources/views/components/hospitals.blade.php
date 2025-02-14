@props(['hospitals'])
<div class="container px-6 py-10 mx-auto">
<x-searchBarForHospital :hospitals="$hospitals"/>
@foreach($hospitals as $hospital)
<x-hospital-card :hospital="$hospital"/>
@endforeach
{{$hospitals->links()}}
</div>
