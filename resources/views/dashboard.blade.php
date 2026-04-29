@extends('layouts.layout')
@section('title', 'Dashboard')

@section('main')

    <div class="p-8 space-y-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-h1 text-h1 text-on-surface">Dashboard Overview</h2>
                <p class="font-body-md text-on-surface-variant">Welcome back, {{ $currentUser->name ?? 'User' }}. You have
                    {{ $tasks->where('status', 'todo')->count() }} high-priority tasks due today.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-error">
                <span class="text-label-sm font-bold text-error uppercase tracking-widest">To Do</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'todo')->count() }}</h3>
            </div>
            <div
                class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-tertiary-fixed-dim">
                <span class="text-label-sm font-bold text-tertiary-fixed-dim uppercase tracking-widest">In Progress</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'in_progress')->count() }}</h3>
            </div>
            <div class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-primary">
                <span class="text-label-sm font-bold text-primary uppercase tracking-widest">Completed</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'completed')->count() }}</h3>
            </div>
        </div>
        <h3 class="font-h3 text-h3 text-on-surface">Upcoming Deadlines</h3>
        <div class="space-y-4">
            @foreach ($tasks->take(5) as $task)
                <div class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-lg bg-error-container/20 flex items-center justify-center">
                        <span
                            class="text-[10px] font-bold text-error">{{ $task->due_date ? $task->due_date->format('M') : 'N/A' }}</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-on-surface">{{ $task->title }}</h4>
                        <p class="text-caption text-on-surface-variant">{{ $task->categorie->name ?? 'Uncategorized' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </main>
    <button
        class="fixed bottom-8 right-8 w-14 h-14 bg-indigo-900 text-white rounded-full shadow-2xl flex items-center justify-center z-50">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>

@endsection
