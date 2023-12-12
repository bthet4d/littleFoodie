<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- create side bar --}}
                        {{-- it should have the ability to select, show, and edit --}}
                        {{-- it should have a link to the 'pantry' --}}
                </div>
                {{-- Main display; if nothing else this has the ability to create charts --}}
            </div>
        </div>
    </div>
</x-app-layout>



{{-- 
TODO:
- add side bar livewire component/view
- add pantry component/view
- add main display component/view    
    
    
--}}