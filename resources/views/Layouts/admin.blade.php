<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Admin' }} — RTM Admin</title>
    <meta name="robots" content="noindex,nofollow">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.webp') }}">

    <style>
        :root {
            --rtm-red:       #E51E25;
            --rtm-red-dark:  #b71c1c;
            --rtm-red-light: #fff0f0;
            --sidebar-w:     260px;
            --sidebar-bg:    #0f0f12;
            --sidebar-hover: rgba(229,30,37,.12);
            --sidebar-active-bg: rgba(229,30,37,.18);
            --topbar-h:      64px;
            --text-muted:    #9ca3af;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f3f4f8;
            margin: 0;
            color: #1a1a2e;
        }

        /* ── Sidebar ─────────────────────────────────── */
        .rtm-sidebar {
            position: fixed;
            top: 0; left: 0;
            width: var(--sidebar-w);
            height: 100vh;
            background: var(--sidebar-bg);
            display: flex;
            flex-direction: column;
            z-index: 1040;
            transition: transform .28s cubic-bezier(.4,0,.2,1);
            overflow: hidden;
        }

        .rtm-sidebar__brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 20px;
            height: var(--topbar-h);
            border-bottom: 1px solid rgba(255,255,255,.06);
            flex-shrink: 0;
        }

        .rtm-sidebar__brand img {
            height: 36px;
            object-fit: contain;
        }

        .rtm-sidebar__brand-text {
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            letter-spacing: .3px;
            line-height: 1.2;
        }

        .rtm-sidebar__brand-text span {
            display: block;
            font-size: 10px;
            font-weight: 400;
            color: var(--text-muted);
            letter-spacing: .5px;
            text-transform: uppercase;
        }

        .rtm-sidebar__nav {
            flex: 1;
            overflow-y: auto;
            padding: 16px 0;
            scrollbar-width: thin;
            scrollbar-color: rgba(255,255,255,.08) transparent;
        }

        .rtm-sidebar__section {
            padding: 20px 20px 8px;
            font-size: 10px;
            font-weight: 600;
            color: var(--text-muted);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .rtm-nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 20px;
            color: #c9cdd4;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-left: 3px solid transparent;
            transition: all .18s;
            cursor: pointer;
            white-space: nowrap;
        }

        .rtm-nav-item:hover {
            background: var(--sidebar-hover);
            color: #fff;
            text-decoration: none;
        }

        .rtm-nav-item.active {
            background: var(--sidebar-active-bg);
            border-left-color: var(--rtm-red);
            color: #fff;
        }

        .rtm-nav-item i {
            font-size: 17px;
            width: 20px;
            text-align: center;
            flex-shrink: 0;
        }

        .rtm-badge {
            margin-left: auto;
            background: var(--rtm-red);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 20px;
        }

        .rtm-sidebar__footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,.06);
            flex-shrink: 0;
        }

        .rtm-sidebar__footer a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 13px;
            transition: color .18s;
        }

        .rtm-sidebar__footer a:hover { color: #fff; }

        /* ── Topbar ──────────────────────────────────── */
        .rtm-topbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-w);
            right: 0;
            height: var(--topbar-h);
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            padding: 0 28px;
            z-index: 1030;
            gap: 16px;
        }

        .rtm-topbar__toggle {
            display: none;
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
            color: #374151;
            padding: 4px;
        }

        .rtm-topbar__breadcrumb {
            flex: 1;
            font-size: 14px;
            color: #6b7280;
        }

        .rtm-topbar__breadcrumb strong {
            color: #111827;
        }

        .rtm-topbar__actions { display: flex; align-items: center; gap: 12px; }

        .rtm-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--rtm-red);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }

        /* ── Main Content ────────────────────────────── */
        .rtm-main {
            margin-left: var(--sidebar-w);
            margin-top: var(--topbar-h);
            padding: 32px;
            min-height: calc(100vh - var(--topbar-h));
        }

        /* ── Cards ───────────────────────────────────── */
        .rtm-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 6px rgba(0,0,0,.04);
        }

        .rtm-card__header {
            padding: 20px 24px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .rtm-card__title {
            font-size: 16px;
            font-weight: 700;
            color: #111827;
            margin: 0;
        }

        .rtm-card__body { padding: 24px; }

        /* ── Buttons ─────────────────────────────────── */
        .btn-rtm {
            background: var(--rtm-red);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 9px 18px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            transition: background .18s, box-shadow .18s;
        }

        .btn-rtm:hover {
            background: var(--rtm-red-dark);
            color: #fff;
            box-shadow: 0 4px 14px rgba(229,30,37,.3);
            text-decoration: none;
        }

        .btn-rtm-outline {
            background: transparent;
            color: var(--rtm-red);
            border: 1.5px solid var(--rtm-red);
            border-radius: 8px;
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: all .18s;
        }

        .btn-rtm-outline:hover {
            background: var(--rtm-red);
            color: #fff;
            text-decoration: none;
        }

        /* ── Stat cards ──────────────────────────────── */
        .stat-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e5e7eb;
            padding: 22px 24px;
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .stat-card__icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: var(--rtm-red-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: var(--rtm-red);
            flex-shrink: 0;
        }

        .stat-card__label {
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .stat-card__value {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            line-height: 1.1;
        }

        /* ── Alerts ──────────────────────────────────── */
        .rtm-alert-success {
            background: #f0fdf4;
            border: 1px solid #86efac;
            color: #15803d;
            border-radius: 10px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        .rtm-alert-error {
            background: #fff1f2;
            border: 1px solid #fca5a5;
            color: #b91c1c;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 14px;
        }

        /* ── Table ───────────────────────────────────── */
        .rtm-table {
            width: 100%;
            border-collapse: collapse;
        }

        .rtm-table th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: .6px;
            border-bottom: 1px solid #f0f0f0;
            background: #fafafa;
        }

        .rtm-table td {
            padding: 14px 16px;
            border-bottom: 1px solid #f5f5f5;
            font-size: 14px;
            vertical-align: middle;
        }

        .rtm-table tbody tr:last-child td { border-bottom: none; }
        .rtm-table tbody tr:hover { background: #fafafa; }

        /* ── Form ────────────────────────────────────── */
        .rtm-form-label {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
            display: block;
        }

        .rtm-form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #e5e7eb;
            border-radius: 9px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            color: #111827;
            background: #fff;
            transition: border-color .18s, box-shadow .18s;
            outline: none;
        }

        .rtm-form-control:focus {
            border-color: var(--rtm-red);
            box-shadow: 0 0 0 3px rgba(229,30,37,.1);
        }

        .rtm-form-control.is-invalid { border-color: #ef4444; }
        .rtm-invalid-feedback { font-size: 12px; color: #ef4444; margin-top: 4px; }
        .rtm-form-text { font-size: 12px; color: #9ca3af; margin-top: 4px; }

        .rtm-check {
            display: flex;
            align-items: center;
            gap: 9px;
            cursor: pointer;
        }

        .rtm-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--rtm-red);
            cursor: pointer;
        }

        /* ── Badge ───────────────────────────────────── */
        .badge-active {
            background: #dcfce7;
            color: #15803d;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-inactive {
            background: #f3f4f6;
            color: #6b7280;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ── Image preview ───────────────────────────── */
        .logo-thumb {
            width: 90px;
            height: 46px;
            object-fit: contain;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 4px;
        }

        .logo-preview-box {
            background: #f9fafb;
            border: 1.5px dashed #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
        }

        /* ── Overlay (mobile) ────────────────────────── */
        .rtm-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.5);
            z-index: 1039;
        }

        /* ── Responsive ──────────────────────────────── */
        @media (max-width: 991px) {
            .rtm-sidebar { transform: translateX(-100%); }
            .rtm-sidebar.open { transform: translateX(0); }
            .rtm-overlay.open { display: block; }
            .rtm-topbar { left: 0; }
            .rtm-topbar__toggle { display: block; }
            .rtm-main { margin-left: 0; padding: 20px 16px; }
        }
    </style>
</head>
<body>

<!-- Sidebar Overlay (mobile) -->
<div class="rtm-overlay" id="rtmOverlay"></div>

<!-- ═══════════════ SIDEBAR ═══════════════ -->
<aside class="rtm-sidebar" id="rtmSidebar">

    <!-- Brand -->
    <div class="rtm-sidebar__brand">
        <img src="{{ asset('assets/images/RTMlogo.webp') }}" alt="RTM Logo">
        <div class="rtm-sidebar__brand-text">
            Right Trademark
            <span>Admin Panel</span>
        </div>
    </div>

    <!-- Nav -->
    <nav class="rtm-sidebar__nav">

        <div class="rtm-sidebar__section">Main</div>

        <a href="{{ route('admin.dashboard') }}"
           class="rtm-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i>
            Dashboard
        </a>

        <div class="rtm-sidebar__section">Content</div>

        <a href="{{ route('admin.logos.index') }}"
           class="rtm-nav-item {{ request()->routeIs('admin.logos.*') ? 'active' : '' }}">
            <i class="bi bi-images"></i>
            Trusted By Logos
            @php $logoCount = \App\Models\Logo::where('is_active', true)->count(); @endphp
            @if($logoCount)
                <span class="rtm-badge">{{ $logoCount }}</span>
            @endif
        </a>

        <div class="rtm-sidebar__section">Settings</div>

        <a href="https://right-trademark.com/" target="_blank" class="rtm-nav-item">
            <i class="bi bi-box-arrow-up-right"></i>
            View Website
        </a>

    </nav>

    <!-- Footer -->
    <div class="rtm-sidebar__footer">
        <a href="https://right-trademark.com/">
            <i class="bi bi-house-door"></i>
            Back to Website
        </a>
    </div>

</aside>

<!-- ═══════════════ TOPBAR ════════════════ -->
<header class="rtm-topbar">
    <button class="rtm-topbar__toggle" id="sidebarToggle" aria-label="Toggle Sidebar">
        <i class="bi bi-list"></i>
    </button>

    <div class="rtm-topbar__breadcrumb">
        @isset($breadcrumb)
            {{ $breadcrumb }}
        @else
            <strong>{{ $pageTitle ?? 'Admin' }}</strong>
        @endisset
    </div>

    <div class="rtm-topbar__actions">
        <a href="https://right-trademark.com/" target="_blank"
           style="font-size:13px;color:#6b7280;text-decoration:none;display:flex;align-items:center;gap:5px;">
            <i class="bi bi-globe2"></i> Live Site
        </a>

        @auth
            <div class="dropdown">
                <button class="rtm-avatar dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        title="{{ auth()->user()->name }}"
                        style="border:none;">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" style="min-width:220px;">
                    <li style="padding:10px 16px;border-bottom:1px solid #f0f0f0;">
                        <div style="font-size:13px;font-weight:700;color:#111827;">
                            {{ auth()->user()->name }}
                        </div>
                        <div style="font-size:12px;color:#6b7280;">
                            {{ auth()->user()->email }}
                        </div>
                    </li>
                    @if(auth()->user()->last_login_at)
                        <li style="padding:8px 16px;font-size:11.5px;color:#9ca3af;border-bottom:1px solid #f0f0f0;">
                            Last login: {{ auth()->user()->last_login_at->diffForHumans() }}
                        </li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}" style="margin:0;">
                            @csrf
                            <button type="submit" class="dropdown-item"
                                    style="color:#b91c1c;font-size:14px;padding:10px 16px;">
                                <i class="bi bi-box-arrow-right me-2"></i> Sign out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</header>

<!-- ═══════════════ MAIN ══════════════════ -->
<main class="rtm-main">
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script>
    // Sidebar toggle (mobile)
    const sidebar  = document.getElementById('rtmSidebar');
    const overlay  = document.getElementById('rtmOverlay');
    const toggle   = document.getElementById('sidebarToggle');

    function openSidebar()  { sidebar.classList.add('open');  overlay.classList.add('open'); }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('open'); }

    toggle?.addEventListener('click', () => sidebar.classList.contains('open') ? closeSidebar() : openSidebar());
    overlay?.addEventListener('click', closeSidebar);

    // Auto-dismiss alerts after 4s
    document.querySelectorAll('.rtm-alert-success').forEach(el => {
        setTimeout(() => el.style.opacity = '0', 4000);
        setTimeout(() => el.remove(), 4500);
        el.style.transition = 'opacity .5s';
    });
</script>

@stack('scripts')

</body>
</html>
