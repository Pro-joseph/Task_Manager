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
                    <p class="font-body-md text-on-surface-variant">Welcome back, Alex. You have 4 high-priority tasks
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
                        <h3 class="font-h1 text-h1 text-on-surface">12</h3>
                        <span class="text-caption text-error font-semibold">+2 today</span>
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
                        <h3 class="font-h1 text-h1 text-on-surface">08</h3>
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
                        <h3 class="font-h1 text-h1 text-on-surface">45</h3>
                        <span class="text-caption text-primary font-semibold">↑ 12% vs last week</span>
                    </div>
                    <p class="text-body-sm text-on-surface-variant mt-2">Productivity target met</p>
                </div>
            </div>
            <!-- Task Focus Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Recent Tasks / Focus -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="font-h3 text-h3 text-on-surface">Upcoming Deadlines</h3>
                        <button class="text-label-sm font-bold text-primary hover:underline">View All Tasks</button>
                    </div>
                    <div class="space-y-4">
                        <!-- Task Item (Overdue) -->
                        <div
                            class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4 group hover:shadow-md transition-shadow">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg bg-error-container/20 flex flex-col items-center justify-center border border-error/10">
                                <span class="text-[10px] font-bold text-error uppercase">Oct</span>
                                <span class="text-xl font-bold text-error leading-none">24</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container text-[10px] font-bold uppercase">Overdue</span>
                                    <h4 class="font-label-md text-on-surface">Q3 Financial Reporting Review</h4>
                                </div>
                                <p class="text-caption text-on-surface-variant">Enterprise Ops • Last updated 2 hours
                                    ago</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="hidden sm:block">
                                    <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-error rounded-full w-3/4"></div>
                                    </div>
                                    <p class="text-[10px] text-right text-on-surface-variant mt-1">75% Complete</p>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </div>
                        </div>
                        <!-- Task Item -->
                        <div
                            class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4 group hover:shadow-md transition-shadow">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg bg-surface-container flex flex-col items-center justify-center border border-primary/5">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">Oct</span>
                                <span class="text-xl font-bold text-on-surface leading-none">28</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-surface-variant text-on-primary-fixed-variant text-[10px] font-bold uppercase">In
                                        Design</span>
                                    <h4 class="font-label-md text-on-surface">Nexuess UI System Audit</h4>
                                </div>
                                <p class="text-caption text-on-surface-variant">Product Design • Assinged to: Sarah M.
                                </p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="hidden sm:block">
                                    <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-tertiary-fixed-dim rounded-full w-1/4"></div>
                                    </div>
                                    <p class="text-[10px] text-right text-on-surface-variant mt-1">25% Complete</p>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </div>
                        </div>
                        <!-- Task Item -->
                        <div
                            class="bg-white rounded-xl p-md border border-slate-100 flex items-center gap-4 group hover:shadow-md transition-shadow">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-lg bg-surface-container flex flex-col items-center justify-center border border-primary/5">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">Oct</span>
                                <span class="text-xl font-bold text-on-surface leading-none">31</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase">Planning</span>
                                    <h4 class="font-label-md text-on-surface">Investor Pitch Deck Finalization</h4>
                                </div>
                                <p class="text-caption text-on-surface-variant">Strategy • Collaboration with CEO</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="hidden sm:block">
                                    <div class="w-24 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-slate-300 rounded-full w-[10%]"></div>
                                    </div>
                                    <p class="text-[10px] text-right text-on-surface-variant mt-1">Started</p>
                                </div>
                                <button class="p-2 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Activity Sidebar -->
                <div class="space-y-6">
                    <h3 class="font-h3 text-h3 text-on-surface">Activity Feed</h3>
                    <div class="bg-white rounded-xl p-lg shadow-[0_2px_10px_rgba(49,46,129,0.04)] h-full">
                        <div
                            class="relative space-y-8 before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[1px] before:bg-slate-100">
                            <!-- Feed Item -->
                            <div class="relative flex gap-4 pl-8">
                                <div
                                    class="absolute left-0 w-6 h-6 rounded-full bg-white border-2 border-indigo-500 flex items-center justify-center z-10">
                                    <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                </div>
                                <div>
                                    <p class="text-body-sm font-semibold text-on-surface">Sarah updated "UI Kit 2.0"
                                    </p>
                                    <p class="text-caption text-on-surface-variant">5 minutes ago</p>
                                    <div
                                        class="mt-2 p-3 bg-slate-50 rounded-lg border border-slate-100 text-[13px] text-slate-600 italic">
                                        "Added new variables for the dark mode transition palette."
                                    </div>
                                </div>
                            </div>
                            <!-- Feed Item -->
                            <div class="relative flex gap-4 pl-8">
                                <div
                                    class="absolute left-0 w-6 h-6 rounded-full bg-white border-2 border-slate-200 flex items-center justify-center z-10">
                                    <div class="w-2 h-2 rounded-full bg-slate-200"></div>
                                </div>
                                <div>
                                    <p class="text-body-sm text-on-surface"><span class="font-semibold">Michael
                                            J.</span> marked <span class="font-semibold">Task #402</span> as completed
                                    </p>
                                    <p class="text-caption text-on-surface-variant">1 hour ago</p>
                                </div>
                            </div>
                            <!-- Feed Item -->
                            <div class="relative flex gap-4 pl-8">
                                <div
                                    class="absolute left-0 w-6 h-6 rounded-full bg-white border-2 border-error flex items-center justify-center z-10">
                                    <div class="w-2 h-2 rounded-full bg-error"></div>
                                </div>
                                <div>
                                    <p class="text-body-sm text-on-surface font-semibold">Priority Escalation</p>
                                    <p class="text-caption text-on-surface-variant">3 hours ago</p>
                                    <p class="mt-1 text-body-sm text-on-surface-variant">"Mobile Auth Bug" is now
                                        blocking Development team.</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-8 py-3 border border-slate-100 rounded-xl text-label-sm font-bold text-slate-500 hover:bg-slate-50 transition-colors uppercase tracking-widest">
                            Load Full History
                        </button>
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
    <!-- FAB -->
    <button
        class="fixed bottom-8 right-8 w-14 h-14 bg-indigo-900 text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-50">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>
</body>

</html>
