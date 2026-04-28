<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Nexuess - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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

<body class="bg-background text-on-background min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center px-gutter py-2xl">
        <div class="w-full max-w-md">
            <div class="text-center mb-xl">
                <div class="flex justify-center items-center gap-2 mb-sm">
                    <div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center shadow-sm">
                        <span class="material-symbols-outlined text-on-primary"
                            style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    </div>
                    <span class="text-xl font-black tracking-tight text-indigo-900 dark:text-indigo-300">Nexuess</span>
                </div>
                <h1 class="font-h1 text-h1 text-on-surface">Welcome back</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mt-xs">Enterprise Task Manager</p>
            </div>
            <div
                class="bg-surface-container-lowest p-xl rounded-xl shadow-[0_10px_40px_-15px_rgba(49,46,129,0.06)] border border-outline-variant/30">
                <form action="/login" class="space-y-lg" method="POST">
                    @csrf
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-xs" for="email" name="email">Email
                            address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-md flex items-center pointer-events-none">
                                <span
                                    class="material-symbols-outlined text-outline text-body-md group-focus-within:text-primary transition-colors">mail</span>
                            </div>
                            <input
                                class="w-full pl-xl pr-md py-md bg-background border border-outline-variant rounded-lg font-body-sm text-body-sm focus:ring-2 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-outline/60"
                                id="email" name="email" placeholder="name@company.com" required=""
                                type="email" />
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-xs">
                            <label class="block font-label-md text-label-md text-on-surface"
                                for="password" name="password">Password</label>
                            <a class="font-label-sm text-label-sm text-primary hover:underline transition-all"
                                href="#">Forgot password?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-md flex items-center pointer-events-none">
                                <span
                                    class="material-symbols-outlined text-outline text-body-md group-focus-within:text-primary transition-colors">lock</span>
                            </div>
                            <input
                                class="w-full pl-xl pr-md py-md bg-background border border-outline-variant rounded-lg font-body-sm text-body-sm focus:ring-2 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-outline/60"
                                id="password" name="password" placeholder="••••••••" required="" type="password" />
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input
                            class="h-4 w-4 text-primary focus:ring-primary border-outline-variant rounded transition-all cursor-pointer"
                            id="remember-me" name="remember-me" type="checkbox" />
                        <label class="ml-sm block font-body-sm text-body-sm text-on-surface-variant cursor-pointer"
                            for="remember-me">
                            Keep me logged in
                        </label>
                    </div>
                    <button
                        class="w-full bg-primary text-on-primary py-md px-lg rounded-lg font-label-md text-label-md shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-200"
                        type="submit">
                        Login
                    </button>
                </form>
                <div class="relative my-xl">
                    <div class="absolute inset-0 flex items-center">
                        <span class="w-full border-t border-outline-variant/30"></span>
                    </div>
                </div>
                <p class="text-center mt-xl font-body-sm text-body-sm text-on-surface-variant">
                    Don't have an account?
                    <a class="text-primary font-semibold hover:underline" href="/signup">Sign up now</a>
                </p>
            </div>
    </main>
    <footer class="py-lg px-gutter">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-md">
            <div class="flex items-center gap-gutter">
                <span class="font-caption text-caption text-outline">© {{ now()->year }} Nexuess Enterprise</span>
                <nav class="flex gap-md">
                    <a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors"
                        href="#">Privacy</a>
                    <a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors"
                        href="#">Terms</a>
                    <a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors"
                        href="#">Security</a>
                </nav>
            </div>
            <div class="flex gap-md">
                <div class="flex items-center gap-xs text-on-surface-variant">
                    <span class="material-symbols-outlined text-body-sm">language</span>
                    <span class="font-label-sm text-label-sm">English (US)</span>
                </div>
            </div>
        </div>
    </footer>
    <div
        class="fixed top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-surface-tint to-primary-container opacity-50">
    </div>
    <div class="fixed -bottom-24 -left-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed -top-24 -right-24 w-64 h-64 bg-surface-tint/5 rounded-full blur-3xl pointer-events-none"></div>
</body>

</html>
