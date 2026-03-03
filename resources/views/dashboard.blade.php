<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-900">Welcome to the Dashboard</h1>
            </div>

            @if(session('error'))
                <div class="mb-4 rounded-lg border border-red-400 bg-red-100 text-red-700 px-4 py-3">
                    {{ session('error') }}
                </div>
            @endif
            <div class="flex flex-row flex-wrap gap-8 max-w-4xl py-2">
                {{-- Teams tile --}}
                <a href="{{ route('teams.index') }}" class="flex-1 min-w-[280px] group relative flex flex-col bg-white rounded-xl border-2 border-gray-200 shadow-sm hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:ring-offset-2 hover:border-indigo-300 transition-all duration-200 overflow-hidden m-1 p-1">
                    <div class="p-8 flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-2xl bg-transparent text-black flex items-center justify-center mb-5 group-hover:scale-105 transition-all duration-200">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">Teams</h3>
                        <p class="text-gray-500 text-sm mt-1.5">View and manage teams</p>
                        <span class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity">
                            Open
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </span>
                    </div>
                </a>

                {{-- Agents tile --}}
                <a href="{{ route('agents.index') }}" class="flex-1 min-w-[280px] group relative flex flex-col bg-white rounded-xl border-2 border-gray-200 shadow-sm hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-emerald-300 focus:ring-offset-2 hover:border-emerald-300 transition-all duration-200 overflow-hidden m-1 p-1">
                    <div class="p-8 flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-2xl bg-transparent text-black flex items-center justify-center mb-5 group-hover:scale-105 transition-all duration-200">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-emerald-600 transition-colors">Agents</h3>
                        <p class="text-gray-500 text-sm mt-1.5">View and manage agents</p>
                        <span class="inline-flex items-center gap-1 mt-4 text-sm font-medium text-emerald-600 opacity-0 group-hover:opacity-100 transition-opacity">
                            Open
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
