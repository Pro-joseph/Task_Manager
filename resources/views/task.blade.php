<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error": "#ba1a1a",
                        "tertiary": "#3e1a00",
                        "on-tertiary-container": "#de915e",
                        "tertiary-fixed": "#ffdbc7",
                        "secondary": "#5c5f61",
                        "on-surface": "#0b1c30",
                        "on-secondary-fixed-variant": "#444749",
                        "surface-variant": "#d3e4fe",
                        "on-primary-fixed": "#100563",
                        "secondary-container": "#e0e3e5",
                        "inverse-surface": "#213145",
                        "tertiary-container": "#5f2b00",
                        "surface-container-highest": "#d3e4fe",
                        "on-secondary-container": "#626567",
                        "surface-bright": "#f8f9ff",
                        "outline-variant": "#c8c5d3",
                        "primary-fixed": "#e2dfff",
                        "background": "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "on-primary-container": "#9c9af4",
                        "primary-container": "#312e81",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#3e3c8f",
                        "on-tertiary-fixed": "#311300",
                        "error-container": "#ffdad6",
                        "secondary-fixed-dim": "#c4c7c9",
                        "inverse-primary": "#c3c0ff",
                        "outline": "#777682",
                        "surface-container": "#e5eeff",
                        "secondary-fixed": "#e0e3e5",
                        "tertiary-fixed-dim": "#ffb688",
                        "on-tertiary-fixed-variant": "#70380b",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#c3c0ff",
                        "on-surface-variant": "#474651",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-container-low": "#eff4ff",
                        "surface-dim": "#cbdbf5",
                        "on-secondary-fixed": "#191c1e",
                        "surface": "#f8f9ff",
                        "surface-container-high": "#dce9ff",
                        "on-error": "#ffffff",
                        "primary": "#1a146b",
                        "on-tertiary": "#ffffff",
                        "on-background": "#0b1c30",
                        "surface-tint": "#5654a8"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin": "32px",
                        "base": "8px",
                        "xs": "4px",
                        "sm": "8px",
                        "md": "16px",
                        "lg": "24px",
                        "gutter": "24px",
                        "2xl": "48px",
                        "xl": "32px"
                    },
                    "fontFamily": {
                        "h3": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "h1": ["Inter"],
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "caption": ["Inter"]
                    },
                    "fontSize": {
                        "h3": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "h2": ["30px", {
                            "lineHeight": "1.3",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "h1": ["36px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "1",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "caption": ["12px", {
                            "lineHeight": "1.4",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background font-body-md text-on-background antialiased">
    <x-sidebar />
    <!-- Main Content Shell -->
    <main class="pl-64 min-h-screen">
        <x-header />
        <!-- Page Canvas -->
        <div class="p-margin max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-lg mb-xl">
                <div>
                    <h1 class="font-h1 text-primary mb-xs">My Tasks</h1>
                    <p class="text-body-md text-slate-500">Manage and track your active enterprise responsibilities.</p>
                </div>
                <div class="flex items-center gap-md">
                    <div class="flex p-1 bg-white border border-slate-200 rounded-lg shadow-sm">
                        <button class="px-4 py-1.5 bg-indigo-50 text-indigo-900 rounded font-label-sm">List</button>
                        <button
                            class="px-4 py-1.5 text-slate-500 hover:bg-slate-50 rounded font-label-sm">Board</button>
                        <button
                            class="px-4 py-1.5 text-slate-500 hover:bg-slate-50 rounded font-label-sm">Calendar</button>
                    </div>
                </div>
            </div>
            <!-- Filters Bar -->
            <div
                class="bg-white rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] p-md mb-lg flex flex-wrap items-center justify-between gap-md border border-slate-100">
                <div class="flex items-center gap-md flex-wrap">
                    <div class="flex items-center gap-sm">
                        <span class="font-label-sm text-slate-400 uppercase tracking-wider">Status:</span>
                        <select
                            class="border-slate-200 rounded-lg font-label-sm text-slate-600 focus:ring-primary focus:border-primary">
                            <option>All Statuses</option>
                            <option>To Do</option>
                            <option>In Progress</option>
                            <option>Review</option>
                            <option>Done</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-sm border-l border-slate-100 pl-md">
                        <span class="font-label-sm text-slate-400 uppercase tracking-wider">Category:</span>
                        <select
                            class="border-slate-200 rounded-lg font-label-sm text-slate-600 focus:ring-primary focus:border-primary">
                            <option>All Categories</option>
                            <option>Engineering</option>
                            <option>Design</option>
                            <option>Marketing</option>
                            <option>Operations</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-sm">
                    <button
                        class="flex items-center gap-2 text-slate-500 font-label-sm px-3 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined text-base">filter_list</span>
                        More Filters
                    </button>
                    <button
                        class="flex items-center gap-2 text-slate-500 font-label-sm px-3 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined text-base">sort</span>
                        Sort By
                    </button>
                </div>
            </div>
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
            <div
                class="bg-white rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] border border-slate-100 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50 border-b border-slate-100">
                            <th class="px-lg py-md font-label-sm text-slate-500 uppercase tracking-wider w-1/2">Title
                            </th>
                            <th class="px-md py-md font-label-sm text-slate-500 uppercase tracking-wider">Category</th>
                            <th class="px-md py-md font-label-sm text-slate-500 uppercase tracking-wider">Status</th>
                            <th class="px-md py-md font-label-sm text-slate-500 uppercase tracking-wider">Date Created
                            </th>
                            <th class="px-lg py-md font-label-sm text-slate-500 uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @forelse($tasks as $task)
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-lg py-md">
                                <div class="flex items-start gap-md">
                                    <div class="mt-1">
                                        <input class="rounded text-primary focus:ring-primary border-slate-300"
                                            type="checkbox" />
                                    </div>
                                    <div>
                                        <div class="font-label-md text-indigo-900">{{ $task->title }}</div>
                                        <div class="text-caption text-slate-400">{{ $task->description ?? 'No description' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-md">
                                <span
                                    class="px-2 py-1 bg-indigo-50 text-indigo-700 text-caption font-semibold rounded-md uppercase tracking-tight">{{ $task->categorie->nom ?? 'N/A' }}</span>
                            </td>
                            <td class="px-md py-md">
                                <div class="relative inline-block text-left">
                                    <button onclick="toggleStatus({{ $task->id }})"
                                        class="flex items-center gap-1.5 px-3 py-1.5 @if($task->status === 'todo') bg-red-50 text-error border border-red-100 @elseif($task->status === 'in_progress') bg-amber-50 text-amber-700 border border-amber-100 @else bg-green-50 text-green-700 border border-green-100 @endif rounded-lg font-label-sm hover:opacity-80">
                                        <span class="w-1.5 h-1.5 rounded-full @if($task->status === 'todo') bg-error @elseif($task->status === 'in_progress') bg-amber-500 animate-pulse @else bg-green-500 @endif"></span>
                                        @if($task->status === 'todo') To Do @elseif($task->status === 'in_progress') In Progress @else Completed @endif
                                        <span class="material-symbols-outlined text-sm">expand_more</span>
                                    </button>
                                    <div id="status-menu-{{ $task->id }}" class="hidden absolute left-0 mt-2 w-36 bg-white rounded-xl shadow-lg border border-slate-100 py-1 z-50">
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="todo">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-red-50 @if($task->status === 'todo') bg-red-50 text-error @endif">
                                                <span class="w-2 h-2 rounded-full bg-error"></span>
                                                To Do
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="in_progress">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-amber-50 @if($task->status === 'in_progress') bg-amber-50 text-amber-700 @endif">
                                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                                In Progress
                                            </button>
                                        </form>
                                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="title" value="{{ $task->title }}">
                                            <input type="hidden" name="description" value="{{ $task->description }}">
                                            <input type="hidden" name="category_id" value="{{ $task->category_id }}">
                                            <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                                            <input type="hidden" name="status" value="completed">
                                            <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 text-sm text-slate-700 hover:bg-green-50 @if($task->status === 'completed') bg-green-50 text-green-700 @endif">
                                                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                                Completed
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-md">
                                <div class="font-label-sm @if($task->status === 'todo') text-error flex items-center gap-1 @else text-slate-500 @endif">
                                    @if($task->status === 'todo')
                                        <span class="material-symbols-outlined text-sm">event_busy</span>
                                    @endif
                                    {{ $task->created_at->format('M d, Y') }}
                                </div>
                            </td>
                            <td class="px-lg py-md text-right">
                                <div class="relative inline-block text-left">
                                    <button onclick="toggleMenu({{ $task->id }})" class="p-1.5 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined">more_vert</span>
                                    </button>
                                    <div id="menu-{{ $task->id }}" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-lg border border-slate-100 py-1 z-50">
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center gap-2 w-full px-4 py-2 text-sm text-error hover:bg-red-50">
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
                            <td colspan="5" class="px-lg py-8 text-center text-slate-500">No tasks found. Create a new task!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="px-lg py-md bg-slate-50/30 flex items-center justify-between border-t border-slate-100">
                    <div class="text-caption text-slate-400">
                        Showing <span class="font-semibold text-slate-600">1 to {{ $tasks->count() }}</span> of <span
                            class="font-semibold text-slate-600">{{ $tasks->count() }}</span> tasks
                    </div>
                    <div class="flex items-center gap-xs">
                        <button
                            class="p-2 text-slate-400 hover:bg-white rounded border border-transparent hover:border-slate-200 transition-all disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-lg">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-primary text-white font-label-sm rounded shadow-sm">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">3</button>
                        <span class="px-1 text-slate-300">...</span>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-white text-slate-600 font-label-sm rounded border border-transparent hover:border-slate-200 transition-all">6</button>
                        <button
                            class="p-2 text-slate-400 hover:bg-white rounded border border-transparent hover:border-slate-200 transition-all">
                            <span class="material-symbols-outlined text-lg">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function toggleMenu(id) {
            document.querySelectorAll('[id^="menu-"]').forEach(menu => {
                if (menu.id !== 'menu-' + id) {
                    menu.classList.add('hidden');
                }
            });
            const menu = document.getElementById('menu-' + id);
            menu.classList.toggle('hidden');
        }

        function toggleStatus(id) {
            document.querySelectorAll('[id^="status-menu-"]').forEach(menu => {
                if (menu.id !== 'status-menu-' + id) {
                    menu.classList.add('hidden');
                }
            });
            const menu = document.getElementById('status-menu-' + id);
            menu.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            if (!event.target.closest('[onclick^="toggleMenu"]') && !event.target.closest('[id^="menu-"]')) {
                document.querySelectorAll('[id^="menu-"]').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
            if (!event.target.closest('[onclick^="toggleStatus"]') && !event.target.closest('[id^="status-menu-"]')) {
                document.querySelectorAll('[id^="status-menu-"]').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
        });
    </script>
</body>

</html>
