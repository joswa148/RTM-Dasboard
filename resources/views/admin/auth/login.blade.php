<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In — RTM Admin</title>
    <meta name="robots" content="noindex,nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon.webp') }}">

    <style>
        :root {
            --rtm-red:       #E51E25;
            --rtm-red-dark:  #b71c1c;
            --rtm-red-light: #fff0f0;
            --glass-bg:      rgba(255, 255, 255, 0.96);
            --glass-border:  rgba(255, 255, 255, 0.1);
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            min-height: 100vh;
            background: 
                radial-gradient(circle at 10% 20%, rgba(229, 30, 37, 0.08) 0%, transparent 25%),
                radial-gradient(circle at 90% 80%, rgba(229, 30, 37, 0.06) 0%, transparent 30%),
                #0a0a0c;
            color: #1a1a2e;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            overflow-x: hidden;
        }

        /* ── Dynamic background elements ── */
        .bg-glow {
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(229, 30, 37, 0.12) 0%, transparent 70%);
            z-index: -1;
            filter: blur(60px);
            animation: pulse-glow 8s infinite alternate;
        }
        .glow-1 { top: -200px; right: -100px; }
        .glow-2 { bottom: -200px; left: -100px; animation-delay: -4s; }

        @keyframes pulse-glow {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.2); opacity: 0.8; }
        }

        .login-shell {
            width: 100%;
            max-width: 440px;
            z-index: 10;
            animation: slide-up 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slide-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .login-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .login-brand img { 
            height: 48px; 
            filter: drop-shadow(0 4px 10px rgba(0,0,0,0.3));
        }

        .login-brand-text {
            color: #fff;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: .5px;
            line-height: 1.1;
        }

        .login-brand-text span {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #9ca3af;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 2px;
        }

        .login-card {
            background: var(--glass-bg);
            border-radius: 20px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.6);
            padding: 40px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--glass-border);
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--rtm-red), #ff5a5a);
        }

        .login-title {
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 8px;
            letter-spacing: -.5px;
        }

        .login-subtitle {
            font-size: 14px;
            color: #64748b;
            margin: 0 0 32px;
            line-height: 1.5;
        }

        .form-group { margin-bottom: 20px; }

        .form-label {
            font-size: 13px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 8px;
            display: block;
            letter-spacing: 0.2px;
        }

        .input-wrap { position: relative; }

        .input-wrap > i.bi {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 17px;
            transition: color 0.3s;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px 12px 48px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            font-size: 14.5px;
            font-family: 'Inter', sans-serif;
            color: #1e293b;
            background: #fff;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
        }

        .form-control::placeholder { color: #cbd5e1; }

        .form-control:focus {
            border-color: var(--rtm-red);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(229,30,37, 0.08);
        }

        .input-wrap:focus-within > i.bi { color: var(--rtm-red); }

        .form-control.is-invalid { border-color: #ef4444; }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            padding: 6px;
            font-size: 16px;
            transition: color 0.2s;
        }

        .toggle-password:hover { color: var(--rtm-red); }

        .invalid-feedback {
            display: block;
            font-size: 12.5px;
            color: #ef4444;
            margin-top: 8px;
            font-weight: 500;
        }

        .login-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 28px;
            font-size: 13.5px;
        }

        .remember-check {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            color: #475569;
            user-select: none;
            font-weight: 500;
        }

        .remember-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--rtm-red);
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-login {
            width: 100%;
            background: var(--rtm-red);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            background: var(--rtm-red-dark);
            box-shadow: 0 20px 40px rgba(229,30,37, 0.3);
            transform: translateY(-1px);
        }

        .btn-login:active { transform: translateY(1px); }

        .btn-login:disabled {
            opacity: .7;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }

        .btn-login .bi { font-size: 18px; }

        .alert {
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 24px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }

        .alert-error  { background: #fff1f2; border: 1px solid #fecaca; color: #991b1b; }
        .alert-success { background: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; }

        .login-footer {
            text-align: center;
            color: #64748b;
            font-size: 13px;
            margin-top: 30px;
        }

        .login-footer a { 
            color: #94a3b8; 
            text-decoration: none; 
            font-weight: 600;
            transition: color 0.2s;
        }
        .login-footer a:hover { color: #fff; }

        .secure-note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
            font-size: 12px;
            color: #94a3b8;
            font-weight: 500;
        }

        .secure-note i { color: #22c55e; }
    </style>
</head>
<body>

<div class="bg-glow glow-1"></div>
<div class="bg-glow glow-2"></div>

<div class="login-shell">

    <div class="login-brand">
        <img src="{{ asset('assets/images/RTMlogo.webp') }}" alt="Right Trademark">
        <div class="login-brand-text">
            Right Trademark
            <span>Admin Panel</span>
        </div>
    </div>

    <div class="login-card">
        <h1 class="login-title">Sign in to your account</h1>
        <p class="login-subtitle">Enter your credentials to access the admin dashboard.</p>

        @if(session('error'))
            <div class="alert alert-error" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <i class="bi bi-check-circle-fill"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" novalidate autocomplete="on">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <div class="input-wrap">
                    <i class="bi bi-envelope"></i>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="you@company.com"
                        required
                        autofocus
                        autocomplete="username"
                        inputmode="email"
                        maxlength="255">
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="input-wrap">
                    <i class="bi bi-lock"></i>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                        minlength="8"
                        maxlength="128">
                    <button type="button" class="toggle-password" aria-label="Show password" id="togglePwd">
                        <i class="bi bi-eye" id="togglePwdIcon"></i>
                    </button>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="login-meta">
                <label class="remember-check">
                    <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember me</span>
                </label>
            </div>

            <button type="submit" class="btn-login" id="submitBtn">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Sign in</span>
            </button>
        </form>

        <div class="secure-note">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Secured with TLS &amp; CSRF protection</span>
        </div>
    </div>

    <div class="login-footer">
        &copy; {{ date('Y') }} <a href="https://right-trademark.com/" target="_blank" rel="noopener">Right Trademark</a>. All rights reserved.
    </div>
</div>

<script>
    const pwd = document.getElementById('password');
    const toggleBtn = document.getElementById('togglePwd');
    const toggleIcon = document.getElementById('togglePwdIcon');

    toggleBtn?.addEventListener('click', () => {
        const show = pwd.type === 'password';
        pwd.type = show ? 'text' : 'password';
        toggleIcon.classList.toggle('bi-eye', !show);
        toggleIcon.classList.toggle('bi-eye-slash', show);
        toggleBtn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    });

    const form = document.querySelector('form');
    const submitBtn = document.getElementById('submitBtn');
    form?.addEventListener('submit', () => {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="bi bi-arrow-repeat"></i><span>Signing in…</span>';
    });
</script>

</body>
</html>
