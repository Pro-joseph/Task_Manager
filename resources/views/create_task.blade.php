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
    <!-- SideNavBar Component -->
    <x-sidebar />
    <!-- Main Content Shell -->
    <!-- TopNavBar Component -->
    <x-header />
    <!-- Main Content Area -->
    <main class="ml-64 p-margin">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-lg text-slate-500 font-label-sm">
                <a class="hover:text-primary transition-colors" href="/tasks">Tasks</a>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
                <span class="text-on-surface">Edit Task</span>
            </nav>
            <!-- Header Section -->
            <div class="mb-xl flex items-end justify-between">
                <div>
                    <h2 class="font-h1 text-h1 text-on-surface mb-xs">Edit System Architecture</h2>
                    <p class="font-body-md text-body-md text-slate-500">Update details for the high-priority engineering
                        task.</p>
                </div>
                <div
                    class="flex items-center gap-sm bg-surface-container-low px-md py-sm rounded-lg border border-outline-variant/30">
                    <span class="material-symbols-outlined text-indigo-600 text-base"
                        style="font-variation-settings: 'FILL' 1;">history</span>
                    <span class="font-label-sm text-slate-600">Last updated 2 hours ago</span>
                </div>
            </div>
            <!-- Bento Layout Form Container -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Main Form Section (Left) -->
                <div class="col-span-12 lg:col-span-8 space-y-gutter">
                    <div
                        class="bg-surface-container-lowest p-xl rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] border border-slate-100/50">
                        <form class="space-y-lg">
                            <!-- Title Field -->
                            <div class="space-y-xs">
                                <label class="font-label-md text-label-md text-on-surface block" for="title">Task
                                    Title</label>
                                <input
                                    class="w-full px-md py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-on-surface"
                                    id="title" type="text" value="Redesign System Architecture" />
                            </div>
                            <!-- Description Field -->
                            <div class="space-y-xs">
                                <label class="font-label-md text-label-md text-on-surface block"
                                    for="description">Description</label>
                                <textarea
                                    class="w-full px-md py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-on-surface resize-none"
                                    id="description" rows="8">The goal is to modernize the current monolithic structure into a microservices-based approach. We need to focus on scalability, maintainability, and reducing the deployment cold-start times. 

Key objectives:
- Identify service boundaries
- Define API contracts (OpenAPI)
- Plan database migration strategy
- Ensure backward compatibility</textarea>
                            </div>
                        </form>
                    </div>
                    <!-- File/Attachment Placeholder Section -->
                    <div
                        class="bg-surface-container-lowest p-xl rounded-xl border border-dashed border-outline-variant flex flex-col items-center justify-center text-center py-2xl group hover:bg-slate-50/50 transition-colors cursor-pointer">
                        <div
                            class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center mb-md group-hover:bg-indigo-100 transition-colors">
                            <span
                                class="material-symbols-outlined text-slate-400 group-hover:text-primary transition-colors">cloud_upload</span>
                        </div>
                        <h4 class="font-label-md text-on-surface">Upload attachments</h4>
                        <p class="font-caption text-slate-500 mt-1">Drag and drop or click to browse files (PDF, JPG,
                            PNG)</p>
                    </div>
                </div>
                <!-- Settings/Metadata Section (Right) -->
                <div class="col-span-12 lg:col-span-4 space-y-gutter">
                    <!-- Form Controls Sidebar -->
                    <div
                        class="bg-surface-container-lowest p-xl rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] border border-slate-100/50 space-y-lg">
                        <!-- Category Dropdown -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-on-surface block"
                                for="category">Category</label>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none px-md py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-sm text-on-surface cursor-pointer"
                                    id="category">
                                    <option selected="" value="engineering">Engineering</option>
                                    <option value="design">Product Design</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="legal">Legal &amp; Compliance</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
                            </div>
                        </div>
                        <!-- Status Dropdown -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-on-surface block"
                                for="status">Status</label>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none px-md py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-sm text-on-surface cursor-pointer"
                                    id="status">
                                    <option value="todo">To Do</option>
                                    <option selected="" value="inprogress">In Progress</option>
                                    <option value="review">Under Review</option>
                                    <option value="completed">Completed</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
                            </div>
                        </div>
                        <!-- Due Date -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-on-surface block" for="date">Due
                                Date</label>
                            <div class="relative">
                                <input
                                    class="w-full px-md py-3 rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-sm text-on-surface"
                                    id="date" type="date" value="2024-12-24" />
                            </div>
                        </div>
                        <!-- Priority Selection -->
                        <div class="space-y-xs">
                            <label class="font-label-md text-label-md text-on-surface block">Priority</label>
                            <div class="grid grid-cols-3 gap-2">
                                <button
                                    class="py-2 border border-outline-variant rounded-md font-label-sm text-slate-600 hover:bg-slate-50"
                                    type="button">Low</button>
                                <button
                                    class="py-2 border border-outline-variant rounded-md font-label-sm text-slate-600 hover:bg-slate-50"
                                    type="button">Medium</button>
                                <button
                                    class="py-2 bg-error-container text-on-error-container border border-error/20 rounded-md font-label-sm font-bold"
                                    type="button">High</button>
                            </div>
                        </div>
                    </div>
                    <!-- Assignee Card -->
                    <div
                        class="bg-surface-container-lowest p-xl rounded-xl shadow-[0_2px_10px_rgba(49,46,129,0.04)] border border-slate-100/50">
                        <h4 class="font-label-md text-label-md text-on-surface mb-md">Assignees</h4>
                        <div class="space-y-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img class="w-8 h-8 rounded-full"
                                        data-alt="Portrait of a male developer with glasses and a friendly expression in a brightly lit modern workspace"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBL2dNL-ALcMWPQatHHYINlXSbLiBCm1SovsIOW1SaAhMl8XSmHWHmY3mNbaD8MKIO_3DFbdrfbMWbQLi1SSxApClaTq656IBID88qsBV8fZZjq43pY2DTgSdtgRMZJueQYkMypRwAwXjwsK2_QB2A1lLosX2hyWAVDCINYTw0vObdFWqSys-5ldjseii-V_SRnYRLCPmMsWUImZql82rIfC-i9GGf32C-vLoFFeq8Uf4mcmO3aLGRzKPL4uzvp3FLzxZUpbrbBFBm" />
                                    <span class="font-body-sm font-medium text-on-surface">David Chen</span>
                                </div>
                                <button class="text-error hover:bg-error/10 p-1 rounded transition-colors">
                                    <span class="material-symbols-outlined text-base">close</span>
                                </button>
                            </div>
                            <button
                                class="w-full py-2 border-2 border-dashed border-outline-variant rounded-lg flex items-center justify-center gap-2 text-slate-500 hover:text-primary hover:border-primary/50 transition-all font-label-sm">
                                <span class="material-symbols-outlined text-base">add</span>
                                Add Collaborator
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sticky Footer Actions -->
                <div class="col-span-12 mt-lg">
                    <div
                        class="bg-white/90 backdrop-blur-sm border border-slate-100 rounded-2xl p-md flex items-center justify-between shadow-lg">
                        <div class="flex items-center gap-md text-slate-500">
                            <button
                                class="flex items-center gap-2 hover:text-error transition-colors px-md py-2 rounded-lg hover:bg-error/5"
                                type="button">
                                <span class="material-symbols-outlined text-sm">delete</span>
                                <span class="font-label-sm">Delete Task</span>
                            </button>
                        </div>
                        <div class="flex items-center gap-md">
                            <button
                                class="px-xl py-3 rounded-lg font-label-md text-slate-600 hover:bg-slate-100 transition-all active:scale-[0.98]"
                                onclick="window.location.href='/tasks'">
                                Cancel
                            </button>
                            <button
                                class="px-xl py-3 rounded-lg font-label-md bg-primary text-white hover:opacity-90 shadow-md shadow-indigo-900/10 transition-all active:scale-[0.98]"
                                type="submit">
                                Save Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Project Decorative Element -->
    <div class="fixed bottom-12 right-12 -z-10 opacity-5 pointer-events-none">
        <span class="material-symbols-outlined text-[320px]">task_alt</span>
    </div>
</body>

</html>
