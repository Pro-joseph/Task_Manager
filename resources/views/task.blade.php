@extends('layouts.layout')
@section('title', 'Tasks')

@section('main')

    <div class="p-8 max-w-7xl mx-auto">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div>
                <h1 class="font-h1 text-primary mb-2">My Tasks</h1>
                <p class="text-body-md text-slate-500">Manage and track your active enterprise responsibilities.</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex p-1 bg-white border border-slate-200 rounded-lg shadow-sm">
                    <button class="px-4 py-1.5 bg-indigo-50 text-indigo-900 rounded font-label-sm">List</button>
                    <button class="px-4 py-1.5 text-slate-500 hover:bg-slate-50 rounded font-label-sm">Board</button>
                    <button class="px-4 py-1.5 text-slate-500 hover:bg-slate-50 rounded font-label-sm">Calendar</button>
                </div>
            </div>
        </div>

        <!-- Filters Bar -->
        <form method="GET" action="{{ route('tasks.index') }}" class="bg-white rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] p-4 mb-6 flex flex-wrap items-center justify-between gap-4 border border-slate-100">
            <div class="flex items-center gap-4 flex-wrap">
                <div class="flex items-center gap-2">
                    <span class="font-label-sm text-slate-400 uppercase tracking-wider">Status:</span>
                    <select name="status" onchange="this.form.submit()" class="border-slate-200 rounded-lg font-label-sm text-slate-600 focus:ring-primary focus:border-primary">
                        <option value="">All Statuses</option>
                        <option value="todo" {{ request('status') === 'todo' ? 'selected' : '' }}>To Do</option>
                        <option value="in_progress" {{ request('status') === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
                <div class="flex items-center gap-2 border-l border-slate-100 pl-4">
                    <span class="font-label-sm text-slate-400 uppercase tracking-wider">Category:</span>
                    <select name="category" onchange="this.form.submit()" class="border-slate-200 rounded-lg font-label-sm text-slate-600 focus:ring-primary focus:border-primary">
                        <option value="">All Categories</option>
                        @foreach($categories ?? [] as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>{{ $cat->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('tasks.index') }}" class="flex items-center gap-2 text-slate-500 font-label-sm px-3 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-base">filter_list</span>
                    Clear
                </a>
            </div>
        </form>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-xl p-4 border border-red-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-error text-2xl">warning</span>
                </div>
                <div>
                    <p class="text-caption text-slate-500 uppercase">Overdue Tasks</p>
                    <p class="text-2xl font-bold text-on-surface">{{ $tasks->where('status', 'todo')->count() }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-4 border border-amber-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-amber-600 text-2xl">pending</span>
                </div>
                <div>
                    <p class="text-caption text-slate-500 uppercase">In Progress</p>
                    <p class="text-2xl font-bold text-on-surface">{{ $tasks->where('status', 'in_progress')->count() }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-4 border border-green-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-green-600 text-2xl">task_alt</span>
                </div>
                <div>
                    <p class="text-caption text-slate-500 uppercase">Completed Today</p>
                    <p class="text-2xl font-bold text-on-surface">{{ $tasks->where('status', 'completed')->count() }}</p>
                </div>
            </div>
        </div>

        <!-- Task List Table -->
        <div class="bg-white rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] border border-slate-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-6 py-4 font-label-sm text-slate-500 uppercase tracking-wider w-1/2">Title</th>
                        <th class="px-4 py-4 font-label-sm text-slate-500 uppercase tracking-wider">Category</th>
                        <th class="px-4 py-4 font-label-sm text-slate-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 py-4 font-label-sm text-slate-500 uppercase tracking-wider">Date Created</th>
                        <th class="px-6 py-4 font-label-sm text-slate-500 uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($tasks as $task)
                        <tr class="hover:bg-slate-50/50 transition-colors group" style="z-index: 1; position: relative;">
                            <td class="px-6 py-4">
                                <div class="flex items-start gap-4">
                                    <div class="mt-1">
                                        <input class="rounded text-primary focus:ring-primary border-slate-300" type="checkbox" />
                                    </div>
                                    <div>
                                        <div class="font-label-md text-indigo-900">{{ $task->title }}</div>
                                        <div class="text-caption text-slate-400">{{ $task->description ?? 'No description' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 bg-indigo-50 text-indigo-700 text-caption font-semibold rounded-md uppercase tracking-tight">
                                    {{ $task->categorie->nom ?? 'N/A' }}
                                </span>
                            </td>
                            <td class="px-4 py-4" style="position: static;">
                                <div class="relative inline-block text-left">
                                    <button type="button" onclick="toggleStatus({{ $task->id }})" style="position: relative; z-index: 50;"
                                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg font-label-sm hover:opacity-80 cursor-pointer
                                        @if($task->status === 'todo') bg-red-50 text-error border border-red-100
                                        @elseif($task->status === 'in_progress') bg-amber-50 text-amber-700 border border-amber-100
                                        @else bg-green-50 text-green-700 border border-green-100 @endif">
                                        <span class="w-1.5 h-1.5 rounded-full
                                            @if($task->status === 'todo') bg-error
                                            @elseif($task->status === 'in_progress') bg-amber-500 animate-pulse
                                            @else bg-green-500 @endif">
                                        </span>
                                        @if($task->status === 'todo') To Do
                                        @elseif($task->status === 'in_progress') In Progress
                                        @else Completed @endif
                                        <span class="material-symbols-outlined text-sm">expand_more</span>
                                    </button>
                                    <div id="status-menu-{{ $task->id }}" class="hidden absolute left-0 mt-2 w-36 bg-white rounded-xl shadow-lg border border-slate-100 py-1" style="z-index: 100;">
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="todo">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-red-50 @if($task->status === 'todo') bg-red-50 text-error @endif">
                                                <span class="w-2 h-2 rounded-full bg-error"></span> To Do
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="in_progress">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-amber-50 @if($task->status === 'in_progress') bg-amber-50 text-amber-700 @endif">
                                                <span class="w-2 h-2 rounded-full bg-amber-500"></span> In Progress
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="completed">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-green-50 @if($task->status === 'completed') bg-green-50 text-green-700 @endif">
                                                <span class="w-2 h-2 rounded-full bg-green-500"></span> Completed
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="font-label-sm @if($task->status === 'todo') text-error flex items-center gap-1 @else text-slate-500 @endif">
                                    @if($task->status === 'todo')
                                        <span class="material-symbols-outlined text-sm">event_busy</span>
                                    @endif
                                    {{ $task->created_at->format('M d, Y') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right" style="position: static;">
                                <div class="relative inline-block text-left">
                                    <button type="button" onclick="toggleMenu({{ $task->id }})" class="p-1.5 text-slate-400 hover:text-primary transition-colors cursor-pointer" style="position: relative; z-index: 60;">
                                        <span class="material-symbols-outlined">more_vert</span>
                                    </button>
                                    <div id="menu-{{ $task->id }}" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-lg border border-slate-100 py-1" style="z-index: 100;">
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" onsubmit="return confirm('Are you sure?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="flex items-center gap-2 w-full px-4 py-2 text-sm text-error">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-slate-500">No tasks found. Create a new task!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-slate-50/30 flex items-center justify-between border-t border-slate-100">
                <div class="text-caption text-slate-400">
                    Showing <span class="font-semibold text-slate-600">1 to {{ $tasks->count() }}</span> of
                    <span class="font-semibold text-slate-600">{{ $tasks->count() }}</span> tasks
                </div>
                <div class="flex items-center gap-1">
                    <button class="p-2 text-slate-400 hover:bg-white rounded border border-transparent hover:border-slate-200 transition-all disabled:opacity-50" disabled>
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center bg-primary text-white font-label-sm rounded shadow-sm">1</button>
                    <button class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">2</button>
                    <button class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">3</button>
                    <span class="px-1 text-slate-300">...</span>
                    <button class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">6</button>
                    <button class="p-2 text-slate-400 hover:bg-white rounded border border-transparent hover:border-slate-200 transition-all">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <script>
        function toggleMenu(id) {
            console.log('toggleMenu called for:', id);
            document.querySelectorAll('[id^="menu-"]').forEach(menu => {
                if (menu.id !== 'menu-' + id) menu.classList.add('hidden');
            });
            const el = document.getElementById('menu-' + id);
            if (el) el.classList.toggle('hidden');
        }

        function toggleStatus(id) {
            console.log('toggleStatus called for:', id);
            document.querySelectorAll('[id^="status-menu-"]').forEach(menu => {
                if (menu.id !== 'status-menu-' + id) menu.classList.add('hidden');
            });
            const el = document.getElementById('status-menu-' + id);
            if (el) el.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            const toggleMenuBtn = event.target.closest('[onclick^="toggleMenu"]');
            const toggleStatusBtn = event.target.closest('[onclick^="toggleStatus"]');
            const menuEl = event.target.closest('[id^="menu-"]');
            const statusMenuEl = event.target.closest('[id^="status-menu-"]');
            
            if (!toggleMenuBtn && !menuEl) {
                document.querySelectorAll('[id^="menu-"]').forEach(menu => menu.classList.add('hidden'));
            }
            if (!toggleStatusBtn && !statusMenuEl) {
                document.querySelectorAll('[id^="status-menu-"]').forEach(menu => menu.classList.add('hidden'));
            }
        });
    </script>
</div>

@endsection