@props(['status' => 'info'])

@php
if(session('status') === 'info'){$bgColor = 'bg-blue-300';}
if(session('status') === 'alert'){$bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
<div class="{{ $bgColor }} lg:w-2/3 w-full mx-auto p-2 text-white mb-4">
{{ session('message' )}} </div>
@endif
