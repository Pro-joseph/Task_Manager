<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Nexuess Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
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

<body class="font-body-md text-on-background">
    <!-- SideNavBar Shell -->
    <x-sidebar />
    <!-- Main Canvas -->
    <main class="pl-64 min-h-screen">
        <x-header />
        <!-- Content Area -->
        <div class="p-8 space-y-8">
            <!-- Welcome Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="font-h1 text-h1 text-on-surface">Dashboard Overview</h2>
                    <p class="font-body-md text-on-surface-variant">Welcome back, Alex. You have {{ $tasks->where('status', 'todo')->count() }} high-priority tasks
                        due today.</p>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-white"
                            data-alt="close up headshot of a smiling woman in a professional creative studio"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVdHYO88klR6JJx0O-85QZ6AbE26kBhfuLjaNfwP0asCqjWgkSJV9LjaiAZJC-w35XAGX6gkt6n06If1ebj8LjkbmJg9kC0uJY-m4Zf1_GisFdAV8VkuOOmfkOP5EjBkh074tX-ueTZMkmYhgxLcduECZXiFL5zt98N3CR36zKLkUHI4CN8fB3PKeMMqsUVkV7hErKDbJoLLNTp0sgc87pXkCYsbcnKjPwgftPAgO4KuP5c79v67bKPBu4jUl4ZxnYtN6NVhyVo5DD" />
                        <img class="w-8 h-8 rounded-full border-2 border-white"
                            data-alt="headshot of a smiling man with glasses in a professional setting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6opAxR35E1TT7giJ_8tlqgJVdloPZSZ5pymPZP6b43Y1quES_hIKcCvtSF3X7LOBVS6-t6jWcEl2yFy8_smWomEAYhQ2Hbsh8u-bXPgS8THT6aqrn2u29_3sydAsrNh5_h52k2odh1uFLs3oDMVuk0Rh2ZS95q8Ub0vgElszHSGNDwuKgzTFAb074XizMd0ueNH1qwD5p-tIXpd9Abkk5krojsBxbMwNBPojcduyAvmYEX2K_t0VisuqJaT9RACTvF3Gb4IbuPP6G" />
                        <img class="w-8 h-8 rounded-full border-2 border-white"
                            data-alt="headshot of a woman with curly hair looking confident in an office"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1YZK04mPlfRSRjR3ylRtdeyEIzbAREMq62pSf_k67sye75hsls9Bpv6er7GdRejU_6W6JkDtTGAA7QHuQbyILkdO9e7sNRrHrA5i258vo9YS1etkvYtm2Y6VEPK1fb26RsFhnG9e7nj56pTybtJMx-blYZvL3WCR2I3B_sGiRZf5cY41aeTK50-LcHZ-LgxlZAbtIYd_AcQsYxdRGevhYY-fAmun7A3oEBnOgyfpKcDBCgsXjeKWKQcNlrwD5CPIj_V1v_Sv02LjI" />
                        <div
                            class="w-8 h-8 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-[10px] font-bold text-slate-500">
                            +12</div>
                    </div>
                    <span class="text-caption text-slate-400">Team Active</span>
                </div>
            </div>
            <!-- Bento Summary Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- To Do Card -->
                <div
                    class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-error relative overflow-hidden group">
                    <div
                        class="absolute right-[-20px] top-[-20px] opacity-5 transition-transform group-hover:scale-110 duration-500">
                        <span class="material-symbols-outlined text-8xl">pending_actions</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-sm font-bold text-error uppercase tracking-widest">To Do</span>
                        <div class="p-2 bg-error-container rounded-lg">
                            <span class="material-symbols-outlined text-on-error-container text-md">assignment</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'todo')->count() }}</h3>
                        <span class="text-caption text-error font-semibold">{{ $tasks->where('status', 'todo')->count() }} tasks</span>
                    </div>
                    <p class="text-body-sm text-on-surface-variant mt-2">Requires immediate attention</p>
                </div>
                <!-- In Progress Card -->
                <div
                    class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-tertiary-fixed-dim relative overflow-hidden group">
                    <div
                        class="absolute right-[-20px] top-[-20px] opacity-5 transition-transform group-hover:scale-110 duration-500">
                        <span class="material-symbols-outlined text-8xl">sync</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-sm font-bold text-tertiary-fixed-dim uppercase tracking-widest">In
                            Progress</span>
                        <div class="p-2 bg-tertiary-fixed rounded-lg">
                            <span
                                class="material-symbols-outlined text-on-tertiary-fixed-variant text-md">trending_up</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'in_progress')->count() }}</h3>
                        <span class="text-caption text-tertiary-fixed-dim font-semibold">Active now</span>
                    </div>
                    <p class="text-body-sm text-on-surface-variant mt-2">Steady momentum maintained</p>
                </div>
                <!-- Completed Card -->
                <div
                    class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] border-l-4 border-primary relative overflow-hidden group">
                    <div
                        class="absolute right-[-20px] top-[-20px] opacity-5 transition-transform group-hover:scale-110 duration-500">
                        <span class="material-symbols-outlined text-8xl">verified</span>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-label-sm font-bold text-primary uppercase tracking-widest">Completed</span>
                        <div class="p-2 bg-primary-fixed rounded-lg">
                            <span class="material-symbols-outlined text-primary text-md">check_circle</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="font-h1 text-h1 text-on-surface">{{ $tasks->where('status', 'completed')->count() }}</h3>
                        <span class="text-caption text-primary font-semibold">Completed</span>
                    </div>
                    <p class="text-body-sm text-on-surface-variant mt-2">Productivity target met</p>
                </div>
            </div>
            <!-- Task Focus Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Recent Tasks / Focus -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="font-h3 text-h3 text-on-surface">Upcoming Deadlines</h3>
                        <button class="text-label-sm font-bold text-primary hover:underline">View All Tasks</button>
                    </div>
<div class="space-y-4">
                        @foreach($tasks->take(5) as $task)
                        <div
                            class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4 group hover:shadow-md transition-shadow">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg bg-error-container/20 flex flex-col items-center justify-center border border-error/10">
                                <span class="text-[10px] font-bold text-error uppercase">{{ $task->due_date ? $task->due_date->format('M') : 'N/A' }}</span>
                                <span class="text-xl font-bold text-error leading-none">{{ $task->due_date ? $task->due_date->format('d') : '-' }}</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container text-[10px] font-bold uppercase">{{ $task->status }}</span>
                                    <h4 class="font-label-md text-on-surface">{{ $task->title }}</h4>
                                </div>
                                <p class="text-caption text-on-surface-variant">{{ $task->categorie->name ?? 'Uncategorized' }} • Last updated {{ $task->updated_at->diffForHumans() }}
                                    ago</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="hidden sm:block">
                                    <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-error rounded-full" style="width: {{ $task->progress ?? 0 }}%"></div>
                                    </div>
                                    <p class="text-[10px] text-right text-on-surface-variant mt-1">{{ $task->progress ?? 0 }}% Complete</p>
                                </div>
                                <button onclick="openTaskModal({{ $task->id }})" class="p-2 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- Team Projects / Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                <div class="bg-primary rounded-2xl p-lg text-white overflow-hidden relative">
                    <div class="relative z-10">
                        <h4 class="text-h3 font-h3 mb-2">Team Productivity</h4>
                        <p class="text-body-md opacity-80 mb-6">Your team is 15% more active this week than average.
                        </p>
                        <div class="flex items-end gap-2 h-32">
                            <div class="flex-1 bg-white/20 rounded-t-lg h-[40%]"></div>
                            <div class="flex-1 bg-white/20 rounded-t-lg h-[60%]"></div>
                            <div class="flex-1 bg-white/40 rounded-t-lg h-[80%]"></div>
                            <div class="flex-1 bg-white/20 rounded-t-lg h-[50%]"></div>
                            <div class="flex-1 bg-white/60 rounded-t-lg h-[95%]"></div>
                            <div class="flex-1 bg-white/30 rounded-t-lg h-[70%]"></div>
                            <div class="flex-1 bg-white/20 rounded-t-lg h-[45%]"></div>
                        </div>
                    </div>
                    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-white/5 rounded-full blur-3xl"></div>
                </div>
                <div class="bg-white rounded-2xl p-lg border border-slate-100 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="text-label-md font-bold text-on-surface uppercase tracking-widest">Recent
                                Project</h4>
                            <span class="material-symbols-outlined text-slate-400">arrow_outward</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center">
                                <span class="material-symbols-outlined text-indigo-600 text-3xl">rocket_launch</span>
                            </div>
                            <div>
                                <h5 class="text-h3 font-h3 text-on-surface">Nova 2.0 Launch</h5>
                                <p class="text-body-sm text-on-surface-variant">Global rollout phase • 12 active
                                    contributors</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="flex justify-between text-caption font-bold mb-2 uppercase">
                            <span>Project Completion</span>
                            <span>82%</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full w-[82%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Task Detail Modal -->
    <div id="taskModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center" onclick="closeTaskModal(event)">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg mx-4" onclick="event.stopPropagation()">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-xl font-bold text-on-surface" id="modalTitle">Task Details</h3>
                <button onclick="closeTaskModal()" class="p-2 hover:bg-slate-100 rounded-lg transition-colors">
                    <span class="material-symbols-outlined text-slate-400">close</span>
                </button>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="text-caption text-slate-500 uppercase tracking-wider">Title</label>
                    <p class="text-on-surface font-medium" id="modalTaskTitle"></p>
                </div>
                <div>
                    <label class="text-caption text-slate-500 uppercase tracking-wider">Description</label>
                    <p class="text-on-surface-variant" id="modalTaskDescription"></p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-caption text-slate-500 uppercase tracking-wider">Category</label>
                        <p class="text-on-surface" id="modalTaskCategory"></p>
                    </div>
                    <div>
                        <label class="text-caption text-slate-500 uppercase tracking-wider">Status</label>
                        <span id="modalTaskStatus" class="inline-block px-2 py-1 rounded-md text-xs font-semibold mt-1"></span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-caption text-slate-500 uppercase tracking-wider">Due Date</label>
                        <p class="text-on-surface" id="modalTaskDueDate"></p>
                    </div>
                    <div>
                        <label class="text-caption text-slate-500 uppercase tracking-wider">Progress</label>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="w-16 h-2 bg-slate-100 rounded-full overflow-hidden">
                                <div id="modalTaskProgress" class="h-full bg-primary rounded-full"></div>
                            </div>
                            <span id="modalTaskProgressText" class="text-xs text-on-surface-variant"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="text-caption text-slate-500 uppercase tracking-wider">Created</label>
                    <p class="text-on-surface-variant" id="modalTaskCreated"></p>
                </div>
            </div>
            <div class="p-6 border-t border-slate-100 flex justify-end gap-3">
                <a href="#" id="modalEditLink" class="px-4 py-2 bg-primary text-white rounded-lg font-label-sm hover:opacity-90 transition-colors">Edit Task</a>
                <button onclick="closeTaskModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg font-label-sm transition-colors">Close</button>
            </div>
        </div>
    </div>

    <script>
        const tasks = @json($tasks);

        function openTaskModal(id) {
            const task = tasks.find(t => t.id === id);
            if (!task) return;

            document.getElementById('modalTitle').textContent = task.title;
            document.getElementById('modalTaskTitle').textContent = task.title;
            document.getElementById('modalTaskDescription').textContent = task.description || 'No description';
            document.getElementById('modalTaskCategory').textContent = task.categorie?.nom || 'Uncategorized';
            document.getElementById('modalTaskDueDate').textContent = task.due_date || 'No due date';
            document.getElementById('modalTaskCreated').textContent = new Date(task.created_at).toLocaleDateString();
            document.getElementById('modalTaskProgress').style.width = (task.progress || 0) + '%';
            document.getElementById('modalTaskProgressText').textContent = (task.progress || 0) + '%';

            const statusEl = document.getElementById('modalTaskStatus');
            if (task.status === 'todo') {
                statusEl.textContent = 'To Do';
                statusEl.className = 'inline-block px-2 py-1 rounded-md text-xs font-semibold bg-red-50 text-error';
            } else if (task.status === 'in_progress') {
                statusEl.textContent = 'In Progress';
                statusEl.className = 'inline-block px-2 py-1 rounded-md text-xs font-semibold bg-amber-50 text-amber-700';
            } else {
                statusEl.textContent = 'Completed';
                statusEl.className = 'inline-block px-2 py-1 rounded-md text-xs font-semibold bg-green-50 text-green-700';
            }

            document.getElementById('modalEditLink').href = '/tasks/' + task.id + '/edit';
            document.getElementById('taskModal').classList.remove('hidden');
        }

        function closeTaskModal(event) {
            if (!event || event.target === document.getElementById('taskModal')) {
                document.getElementById('taskModal').classList.add('hidden');
            }
        }
    </script>
    <!-- FAB -->
    <button
        class="fixed bottom-8 right-8 w-14 h-14 bg-indigo-900 text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-50">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>
</body>

</html>
