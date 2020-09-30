@extends('layouts.app.auth')

@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Content -->
        <div class="mt-8">

            @php
                $year = \Carbon\Carbon::now()->format('Y');
            @endphp

            @livewire('admin.nisab', ['year' => $year])
        </div>
    </main>
@endsection
