<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="">
            @if(auth()->user()->isAdmin())
                @include('dashboard.admin')
            @else
                @include('dashboard.user')
            @endif
        </div>
    </div>
</x-app-layout>
