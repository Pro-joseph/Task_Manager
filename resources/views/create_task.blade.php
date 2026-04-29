<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Nexuess - Create Task</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
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

<body class="font-body-md antialiased text-on-background">
    <x-sidebar />
    <x-header />
    <main class="pl-64 min-h-screen">
        <div class="p-8">
            <div class="max-w-3xl mx-auto">
                <nav class="flex items-center gap-2 mb-8 text-slate-500 font-label-sm">
                    <a class="hover:text-primary transition-colors" href="{{ route('tasks.index') }}">Tasks</a>
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                    <span class="text-on-surface">Create Task</span>
                </nav>

                <div class="mb-8">
                    <h2 class="font-h1 text-h1 text-on-surface mb-2">Create New Task</h2>
                    <p class="font-body-md text-on-surface-variant">Add a new task to your workflow.</p>
                </div>

                @if($errors->any())
                    <div class="mb-6 p-4 bg-error-container border border-error/20 rounded-xl">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-error text-xl">error</span>
                            <span class="font-label-md text-error font-semibold">Please fix the following errors:</span>
                        </div>
                        <ul class="list-disc list-inside text-sm text-on-error-container space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-600 text-xl">check_circle</span>
                            <span class="font-label-md text-green-700">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-[0_2px_10px_rgba(49,46,129,0.04)]">
                    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label class="font-label-md text-label-md text-on-surface block mb-2" for="title">Task Title</label>
                            <input 
                                class="w-full px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-md text-on-surface @error('title') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                id="title" 
                                type="text" 
                                name="title" 
                                placeholder="Enter task title"
                                value="{{ old('title') }}"
                                required 
                            />
                            @error('title')
                                <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="font-label-md text-label-md text-on-surface block mb-2" for="description">Description</label>
                            <textarea 
                                class="w-full px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-md text-on-surface resize-none @error('description') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                id="description" 
                                name="description" 
                                rows="5"
                                placeholder="Describe the task..."
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="font-label-md text-label-md text-on-surface block mb-2" for="status">Status</label>
                                <div class="relative">
                                    <select 
                                        class="w-full appearance-none px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-sm text-on-surface cursor-pointer @error('status') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                        id="status" 
                                        name="status"
                                    >
                                        <option value="todo" {{ old('status') == 'todo' ? 'selected' : '' }}>To Do</option>
                                        <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
                                </div>
                                @error('status')
                                    <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="font-label-md text-label-md text-on-surface block mb-2" for="category_id">Category <span class="text-error">*</span></label>
                                <div class="relative">
                                    <select 
                                        class="w-full appearance-none px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-sm text-on-surface cursor-pointer @error('category_id') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                        id="category_id" 
                                        name="category_id"
                                        required
                                    >
                                        <option value="">Select category</option>
                                        <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>Work</option>
                                        <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>Personal</option>
                                        <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>Shopping</option>
                                        <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>Health</option>
                                        <option value="5" {{ old('category_id') == '5' ? 'selected' : '' }}>Education</option>
                                        <option value="6" {{ old('category_id') == '6' ? 'selected' : '' }}>Finance</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
                                </div>
                                @error('category_id')
                                    <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="font-label-md text-label-md text-on-surface block mb-2" for="due_date">Due Date</label>
                            <input 
                                class="w-full px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-sm text-on-surface @error('due_date') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                id="due_date" 
                                type="date" 
                                name="due_date"
                                value="{{ old('due_date') }}"
                            />
                            @error('due_date')
                                <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-4">
                            <button 
                                type="button"
                                onclick="window.location.href='{{ route('tasks.index') }}'"
                                class="px-6 py-3 rounded-xl font-label-md text-slate-600 hover:bg-slate-100 transition-all"
                            >
                                Cancel
                            </button>
                            <button 
                                type="submit"
                                class="px-6 py-3 rounded-xl font-label-md bg-primary text-white hover:opacity-90 shadow-md shadow-indigo-900/10 transition-all"
                            >
                                Create Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>