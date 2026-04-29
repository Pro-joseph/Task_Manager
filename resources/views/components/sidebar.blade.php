<div>
    <!-- SideNavBar -->
    <aside
        class="h-screen w-64 border-r fixed left-0 top-0 bg-white dark:bg-slate-900 border-slate-100 dark:border-slate-800 shadow-[2px_0_10px_rgba(49,46,129,0.04)] z-50 flex flex-col h-full p-4 overflow-y-auto">
        <div class="flex items-center gap-3 mb-8 px-2">
            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                <span class="material-symbols-outlined text-white text-lg">layers</span>
            </div>
            <span class="text-xl font-black tracking-tight text-indigo-900 dark:text-indigo-300">Nexuess</span>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-4 py-2.5 text-slate-500 dark:text-slate-400 hover:text-indigo-700 dark:hover:text-indigo-300 transition-all hover:bg-slate-50 dark:hover:bg-slate-800/50 duration-200 ease-in-out active:scale-[0.98]"
                href="/dashboard">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2.5 bg-indigo-50 dark:bg-indigo-950/30 text-indigo-900 dark:text-indigo-300 font-semibold rounded-lg border-r-4 border-indigo-900 dark:border-indigo-400 duration-200 ease-in-out active:scale-[0.98]"
                href="/tasks">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-label-md">My Tasks</span>
            </a>

        </nav>
        <div class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-800 space-y-1">
            <a href="/create_task">
                <button
                    class="w-full mb-4 bg-primary text-white font-label-md py-2.5 rounded-lg flex items-center justify-center gap-2 shadow-lg shadow-indigo-200 hover:opacity-90 active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-sm">add</span>
                    Create Task
                </button>
            </a>
            <a class="flex items-center gap-3 px-4 py-2.5 text-slate-500 dark:text-slate-400 hover:text-indigo-700 dark:hover:text-indigo-300 transition-all hover:bg-slate-50 dark:hover:bg-slate-800/50 duration-200 ease-in-out active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-md">Settings</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 px-4 py-2.5 text-slate-500 dark:text-slate-400 hover:text-indigo-700 dark:hover:text-indigo-300 transition-all hover:bg-slate-50 dark:hover:bg-slate-800/50 duration-200 ease-in-out active:scale-[0.98] w-full text-left">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="material-outlined">logout</span>
                </button>
            </form>
        </div>
    </aside>
</div>
