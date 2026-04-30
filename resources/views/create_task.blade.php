@extends('layouts.layout')
@section('title', 'Create Task')

@section('main')

        <div class="">
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

@endsection