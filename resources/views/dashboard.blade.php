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
            <div class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-error pl-3">
                <span class="text-label-sm font-bold text-error uppercase tracking-widest">To Do</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'todo')->count() }}</h3>
            </div>
            <div
                class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-tertiary-fixed-dim pl-3">
                <span class="text-label-sm font-bold text-tertiary-fixed-dim uppercase tracking-widest">In Progress</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'in_progress')->count() }}</h3>
            </div>
            <div class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-primary pl-3">
                <span class="text-label-sm font-bold text-primary uppercase tracking-widest">Completed</span>
                <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'completed')->count() }}</h3>
            </div>
        </div>
        <h3 class="font-h3 text-h3 text-on-surface">Upcoming Deadlines</h3>
        <div class="space-y-4">
            @foreach ($tasks as $task)
                <div class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4">

                    <div class="w-12 h-12 rounded-lg bg-error-container/20 flex items-center justify-center">
                        <span class="text-[10px] font-bold text-error">
                            {{ $task->due_date?->format('D/m') ?? 'N/A' }}
                        </span>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-label-md text-on-surface">
                            {{ $task->title }}
                        </h4>
                        <p class="text-caption text-on-surface-variant">
                            {{ $task->categorie?->nom ?? 'Uncategorized' }}
                        </p>
                    </div>
                    <button type="button" onclick="togglePreview({{ $task->id }})"
                        class="p-2 text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">visibility</span>
                    </button>
                </div>
            @endforeach
        </div>

        @foreach ($tasks->take(5) as $task)
            <div id="preview-{{ $task->id }}"
                class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center">
                <div class="bg-white rounded-xl p-6 max-w-md w-full mx-4 shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-h3 text-h3 text-on-surface">Task Details</h3>
                        <button type="button" onclick="togglePreview({{ $task->id }})"
                            class="p-1 text-slate-400 hover:text-slate-600">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Title</p>
                            <p class="font-label-md text-on-surface">{{ $task->title }}</p>
                        </div>
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Description</p>
                            <p class="text-body-sm text-slate-600">{{ $task->description ?? 'No description' }}</p>
                        </div>
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Category</p>
                            <p class="font-label-md text-on-surface">{{ $task->categorie->nom ?? 'Uncategorized' }}</p>
                        </div>
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Status</p>
                            <span
                                class="px-2 py-1 rounded-md font-label-sm
                                @if ($task->status === 'todo') bg-red-50 text-error
                                @elseif($task->status === 'in_progress') bg-amber-50 text-amber-700
                                @else bg-green-50 text-green-700 @endif">
                                @if ($task->status === 'todo')
                                    To Do
                                @elseif($task->status === 'in_progress')
                                    In Progress
                                @else
                                    Completed
                                @endif
                            </span>
                        </div>
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Due Date</p>
                            <p class="font-label-md text-on-surface">
                                {{ $task->due_date ? $task->due_date->format('M d, Y') : 'Not set' }}</p>
                        </div>
                        <div>
                            <p class="text-caption text-slate-500 uppercase">Progress</p>
                            <div class="w-full bg-slate-100 rounded-full h-2">
                                <div class="h-2 rounded-full @if ($task->progress === 100) bg-green-500 @elseif($task->progress > 0) bg-amber-500 @else bg-red-500 @endif"
                                    style="width: {{ $task->progress }}%"></div>
                            </div>
                            <p class="text-caption text-slate-500 mt-1">{{ $task->progress }}% complete</p>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('tasks.edit', $task->id) }}"
                            class="px-4 py-2 bg-primary text-white rounded-lg font-label-sm hover:opacity-90">Edit Task</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function togglePreview(id) {
            const modal = document.getElementById('preview-' + id);
            if (modal) modal.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('fixed') && event.target.classList.contains('bg-black/50')) {
                event.target.classList.add('hidden');
            }
        });
    </script>
@endsection
