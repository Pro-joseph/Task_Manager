<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Nexuess - Edit Task</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="stylesheet" href="css/styles.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#4F46E5",
                        "on-primary": "#FFFFFF",
                        "primary-container": "#E0E0FF",
                        "on-primary-container": "#1A1B4B",
                        "secondary": "#6B7280",
                        "on-secondary": "#FFFFFF",
                        "secondary-container": "#E5E7EB",
                        "on-secondary-container": "#11181C",
                        "background": "#F9FAFB",
                        "on-background": "#11181C",
                        "surface": "#FFFFFF",
                        "on-surface": "#11181C",
                        "error": "#B00020",
                        "on-error": "#FFFFFF",
                        "error-container": "#FDECEA",
                        "on-error-container": "#410001",
                        "outline-variant": "#D1D5DB",
                        "outline-variant-dark": "#374151"
                    },
                    borderRadius: {
                        "none": "0px",
                        "sm": "0.125rem",
                        "md": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        "body": ["Inter", "sans-serif"],
                        "h1": ["Inter", "sans-serif"],
                        "h2": ["Inter", "sans-serif"],
                        "h3": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    },
                    fontSize: {
                        "h1": ["2.25rem", { lineHeight: "2.5rem", fontWeight: "700" }],
                        "h2": ["1.875rem", { lineHeight: "2.25rem", fontWeight: "700" }],
                        "h3": ["1.5rem", { lineHeight: "2rem", fontWeight: "700" }],
                        "body-lg": ["1.125rem", { lineHeight: "1.75rem", fontWeight: "400" }],
                        "body-md": ["1rem", { lineHeight: "1.5rem", fontWeight: "400" }],
                        "body-sm": ["0.875rem", { lineHeight: "1.25rem", fontWeight: "400" }],
                        "label-lg": ["0.875rem", { lineHeight: "1.25rem", fontWeight: "500" }],
                        "label-md": ["0.75rem", { lineHeight: "1rem", fontWeight: "500" }],
                        "label-sm": ["0.625rem", { lineHeight: "0.875rem", fontWeight: "500" }],
                        "caption": ["0.75rem", {    lineHeight: "1rem", fontWeight: "400" }]
                    },
                    spacing: {
                        "gutter": "1.5rem"
                    }
                }
            }
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
                    <span class="text-on-surface">Edit Task</span>
                </nav>

                <div class="mb-8 flex items-end justify-between">
                    <div>
                        <h2 class="font-h1 text-h1 text-on-surface mb-2">Edit Task</h2>
                        <p class="font-body-md text-on-surface-variant">Update the task details.</p>
                    </div>
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
                    <form method="POST" action="{{ route('tasks.update', $task->id ?? 1) }}" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="font-label-md text-label-md text-on-surface block mb-2" for="title">Task Title</label>
                            <input 
                                class="w-full px-4 py-3 rounded-xl border bg-white focus:ring-2 transition-all font-body-md text-on-surface @error('title') border-error focus:border-error focus:ring-error/10 @else border-outline-variant focus:border-primary focus:ring-primary/10 @enderror" 
                                id="title" 
                                type="text" 
                                name="title" 
                                value="{{ old('title', $task->title ?? '') }}"
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
                            >{{ old('description', $task->description ?? '') }}</textarea>
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
                                        <option value="todo" {{ old('status', $task->status ?? '') == 'todo' ? 'selected' : '' }}>To Do</option>
                                        <option value="in_progress" {{ old('status', $task->status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ old('status', $task->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
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
                                        <option value="1" {{ old('category_id', $task->category_id ?? '') == '1' ? 'selected' : '' }}>Work</option>
                                        <option value="2" {{ old('category_id', $task->category_id ?? '') == '2' ? 'selected' : '' }}>Personal</option>
                                        <option value="3" {{ old('category_id', $task->category_id ?? '') == '3' ? 'selected' : '' }}>Shopping</option>
                                        <option value="4" {{ old('category_id', $task->category_id ?? '') == '4' ? 'selected' : '' }}>Health</option>
                                        <option value="5" {{ old('category_id', $task->category_id ?? '') == '5' ? 'selected' : '' }}>Education</option>
                                        <option value="6" {{ old('category_id', $task->category_id ?? '') == '6' ? 'selected' : '' }}>Finance</option>
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
                                value="{{ old('due_date', $task->due_date ? $task->due_date->format('Y-m-d') : '') }}"
                            />
                            @error('due_date')
                                <p class="mt-1 text-sm text-error font-label-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between gap-4 pt-4">
                            <button 
                                type="button"
                                onclick="window.location.href='{{ route('tasks.index') }}'"
                                class="flex items-center gap-2 text-error hover:bg-error/10 px-4 py-2 rounded-xl transition-colors font-label-sm"
                            >
                                <span class="material-symbols-outlined text-sm">delete</span>
                                Delete Task
                            </button>
                            <div class="flex items-center gap-4">
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
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>