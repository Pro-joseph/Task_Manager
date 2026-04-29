<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#4F46E5",
                        "primary-container": "#EDE9FE",
                        "secondary": "#6B7280",
                        "secondary-container": "#F3F4F6",
                        "tertiary": "#10B981",
                        "tertiary-container": "#D1FAE5",
                        "error": "#DC2626",
                        "error-container": "#FEE2E2",
                        "background": "#FFFFFF",
                        "surface": "#FFFFFF",
                        "on-primary": "#FFFFFF",
                        "on-secondary": "#111827",
                        "on-tertiary": "#065F46",
                        "on-error": "#B91C1C",
                        "on-background": "#111827",
                        "on-surface": "#111827"
                    },
                    spacing: {
                        "gutter": "1.5rem",
                        "xs": "0.25rem",
                        "sm": "0.5rem",
                        "md": "1rem",
                        "lg": "1.5rem",
                        "xl": "2rem",
                        "2xl": "3rem"
                    },
                    "color": {
                        "primary": "#1a146b",
                        "on-primary": "#ffffff",
                        "primary-container": "#dce9ff",             
    </head>

<body
    class="bg-background font-body-md text-on-background min-h-screen flex items-center justify-center overflow-x-hidden">
    <!-- Auth Shell Suppression Logic: Login/Signup pages exclude standard Shell components -->
    <main
        class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-2 min-h-[800px] shadow-2xl rounded-2xl overflow-hidden bg-surface-container-lowest mx-4 lg:mx-0 border border-outline-variant/30">
        <!-- Brand Visual Column -->
        <section class="hidden md:flex flex-col justify-between p-12 bg-primary-container relative overflow-hidden">
            <!-- Decorative Background Element -->
            <div class="absolute top-[-10%] right-[-10%] w-[400px] h-[400px] bg-primary/20 rounded-full blur-[80px]">
            </div>
            <div
                class="absolute bottom-[-5%] left-[-5%] w-[300px] h-[300px] bg-surface-tint/20 rounded-full blur-[60px]">
            </div>
            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-12">
                    <div class="w-10 h-10 bg-on-primary rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-container"
                            style="font-variation-settings: 'FILL' 1;">dataset</span>
                    </div>
                    <span class="font-h3 text-on-primary tracking-tight">Nexuess</span>
                </div>
                <h1 class="font-h1 text-on-primary mb-6 leading-tight">Empower your enterprise workflow.</h1>
                <p class="font-body-lg text-on-primary-container max-w-md opacity-90">
                    Join thousands of high-velocity teams managing complex projects with professional-grade clarity and
                    systematic efficiency.
                </p>
            </div>
            <div class="relative z-10 mt-20">
                <div class="bg-primary/40 backdrop-blur-md p-6 rounded-xl border border-on-primary/10 mb-8">
                    <p class="font-body-md italic text-on-primary opacity-80 mb-4">"Nexuess has completely transformed
                        how our engineering team tracks deliverables. The precision and speed of the UI is unmatched."
                    </p>
                    <div class="flex items-center gap-3">
                        <img class="w-10 h-10 rounded-full border-2 border-on-primary/20"
                            data-alt="Portrait of a professional software engineer in a modern office setting, soft professional lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAdPbUNRsQ-0q1U0PKcN670Tp3_i3-tvcsN2FjP2--yZ_nYjOI-z99oRh33PK2yJByHRm97qz8RX2DgUmDJMBtRvCR8frucek5Gn3GRPgXBfK4EvwvpkrURR0m6Kv7gExz5c12k_MbR_Ej1JW2P4P7CfSel7hqht4pfAJ015JPPnYXoxchA1nCuiFkaL_FZUOLeKFh66mVUQpc_4ofQDmD5HfGqSoSnW0Snsr_FZX_wgm0qKpptFXT1BaX1igbIwH5md1VWXXwkH7m" />
                        <div>
                            <p class="font-label-md text-on-primary">Sarah Chen</p>
                            <p class="font-caption text-on-primary-container">CTO, Velocity Systems</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative z-10 flex gap-6">
                <div class="flex -space-x-3">
                    <img class="w-8 h-8 rounded-full border-2 border-primary-container"
                        data-alt="Close up avatar of a smiling business professional"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiuRV0WbQWhCCgssKLYYpu8NfC_bZN4xP2Xr4h23Qy-wZyl5F7jTOTTmggQL0aJ_6Vp-0wrc23OyyB8Es_5LMpZFoXL5sF9fjGNCYC2Ttt0XhIlHM_gJqhVjNKSJftnN32Htt_6Dy6yVay92qPd0F7Ce9nYrh1YYPOzJX_4CbLN97aierRC16Xoy84K2XnFHo0PxRR7ye01baXeJcperGc5zWS52pIYtJPgs6Zg4uYmSnLSir-l0f1HXNdXsorFveyWiA72KgcBga_" />
                    <img class="w-8 h-8 rounded-full border-2 border-primary-container"
                        data-alt="Close up avatar of a young creative professional"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWqBy-PRj4YXVlkAABaQZ5oMhVms4yzpycfJbA5ZqLk1PZMn7Y2PpyGRwEuU4FR-lSrY3Sfg9C7mJE_XS78GWVo9DWA2ecmucudO4VywyMGRoRHK8WrWV0tV49AsP-7ZVMWlf548gVDCIHE6m9soPRNmc8wRRVTfe5BvPfI1fyowl43hpHOFJQ9KSyr03wZbYhqdQbIYt3gPmonYlrqsLn8Vh0r6bD6OKckm-GK0R_lIkI4elk2oaPpAQHhDC3fEQnpFNP9yDVJlbt" />
                    <img class="w-8 h-8 rounded-full border-2 border-primary-container"
                        data-alt="Close up avatar of a diverse team member"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqg58N-EXNcmwr48qB3gQw368aT-zOY5kJU20-ms4tnA6h8Q9OPrJqsB04ucVN2Nicm00CXlznlpoW1DFtMjfyI6R-9hfXBzUycHJH55_ePrYC4O4AtxpcHgs27JXqAa8S58WMAkme_wlqsoLIyriYOHWFKX5qGwxCm95m38J7yAKVaJjpbuI2Yiy8YMckMhyUqMQGogoaYEIe-w-ID5sIp_cQ8PqQrNlW4EDdnEg2HKnjHStJvJrQ-MCb5HrBvnI3UdpPrV8ayiT0" />
                </div>
                <p class="font-caption text-on-primary-container self-center">Joined by 12k+ professionals this month
                </p>
            </div>
        </section>
        <!-- Form Column -->
        <section class="flex flex-col justify-center px-8 py-12 md:px-16 lg:px-24">
            <div class="mb-10 text-center md:text-left">
                <div class="md:hidden flex justify-center gap-3 mb-8">
                    <span class="material-symbols-outlined text-primary text-4xl"
                        style="font-variation-settings: 'FILL' 1;">dataset</span>
                </div>
                <h2 class="font-h2 text-on-surface mb-2">Create your account</h2>
                <p class="font-body-sm text-on-surface-variant">Experience the future of enterprise task management.</p>
            </div>
            <form class="space-y-5" action="/signup" method="POST">
                @csrf
                <!-- Full Name Field -->
                <div class="space-y-1.5">
                    <label class="font-label-sm text-on-surface-variant ml-1" for="full-name" name="full-name">Full
                        Name</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                        <input
                            class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-body-sm transition-all duration-200"
                            id="full-name" placeholder="John Doe" type="text" name="full-name" />
                    </div>
                </div>
                <!-- Email Field -->
                <div class="space-y-1.5">
                    <label class="font-label-sm text-on-surface-variant ml-1" for="email" name="email">Email
                        Address</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                        <input
                            class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-body-sm transition-all duration-200"
                            id="email" placeholder="name@enterprise.com" type="email" name="email" />
                    </div>
                </div>
                <!-- Password Field -->
                <div class="space-y-1.5">
                    <label class="font-label-sm text-on-surface-variant ml-1" for="password"
                        name="password">Password</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                        <input
                            class="w-full pl-12 pr-12 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-body-sm transition-all duration-200"
                            id="password" placeholder="••••••••" type="password" name="password" />
                        <span
                            class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline text-[20px] cursor-pointer hover:text-on-surface">visibility</span>
                    </div>
                </div>
                <!-- Password Confirmation Field -->
                <div class="space-y-1.5">
                    <label class="font-label-sm text-on-surface-variant ml-1" for="password_confirmation"
                        name="password_confirmation">Confirm
                        Password</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock_reset</span>
                        <input
                            class="w-full pl-12 pr-12 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent font-body-sm transition-all duration-200"
                            id="password_confirmation" placeholder="••••••••" type="password" name="password_confirmation" />
                    </div>
                </div>

                <button
                    class="w-full bg-primary text-on-primary py-3.5 rounded-lg font-label-md flex items-center justify-center gap-2 hover:bg-primary/90 active:scale-[0.98] transition-all shadow-lg shadow-primary/20 mt-4"
                    type="submit">
                    Create Task Account
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </button>
            </form>
            <footer class="mt-10 text-center">
                <p class="font-body-sm text-on-surface-variant">
                    Already have an account? <a class="text-primary font-bold hover:underline" href="/login">Sign
                        In</a>
                </p>
            </footer>
        </section>
    </main>
    <!-- Support Link Decoration -->
    <div class="fixed bottom-8 right-8">
        <button
            class="w-12 h-12 bg-white dark:bg-slate-900 border border-outline-variant shadow-lg rounded-full flex items-center justify-center hover:bg-surface-container transition-all">
            <span class="material-symbols-outlined text-on-surface-variant">help_outline</span>
        </button>
    </div>
</body>

</html>
