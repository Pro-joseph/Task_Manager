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
                        "2xl": "3rem",
                        "3xl": "4rem",
                        "4xl": "6rem"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        "h1": ["Inter", "sans-serif"],
                        "h2": ["Inter", "sans-serif"],
                        "h3": ["Inter", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"], 
                        "body-sm": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "label-md": ["Inter", "sans-serif"],
                        "label-sm": ["Inter", "sans-serif"],
                        "caption": ["Inter", "sans-serif"]
                    },
                    fontSize: {
                        "h1": ["2.25rem", {
                            "lineHeight": "2.5rem",
                            "fontWeight": "700",
                            "letterSpacing": "-0.02em"
                        }],
                        "h2": ["1.875rem", {
                            "lineHeight": "2.25rem",
                            "fontWeight": "600",
                            "letterSpacing": "-0.01em"
                        }],
                        "h3": ["1.5rem", {
                            "lineHeight": "2rem",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["1.125rem", {
                            "lineHeight": "1.75rem",
                            "fontWeight": "400" 
                        }],
                        "body-md": ["1rem", {
                            "lineHeight": "1.5rem",
                            "fontWeight": "400"
                        }],
                        "body-sm": ["0.875rem", {
                            "lineHeight": "1.25rem",
                            "fontWeight": "400"
                        }],
                        "label-md": ["0.875rem", {
                            "lineHeight": "1",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["0.75rem", {
                            "lineHeight": "1",
                            "fontWeight": "500",
                            "letterSpacing": "0.02em"   
                        }],
                        "caption": ["0.75rem", {
                            "lineHeight": "1.25rem",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
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
