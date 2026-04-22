@extends('Layouts.admin')

@php $pageTitle = 'Dashboard'; @endphp

@section('content')

{{-- Stat row --}}
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="stat-card">
            <div class="stat-card__icon"><i class="bi bi-images"></i></div>
            <div>
                <div class="stat-card__label">Total Logos</div>
                <div class="stat-card__value">{{ $totalLogos }}</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="stat-card">
            <div class="stat-card__icon"><i class="bi bi-eye-fill"></i></div>
            <div>
                <div class="stat-card__label">Active Logos</div>
                <div class="stat-card__value">{{ $activeLogos }}</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="stat-card">
            <div class="stat-card__icon" style="background:#fff7ed;color:#ea580c;"><i class="bi bi-eye-slash-fill"></i></div>
            <div>
                <div class="stat-card__label">Inactive Logos</div>
                <div class="stat-card__value">{{ $totalLogos - $activeLogos }}</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="stat-card">
            <div class="stat-card__icon" style="background:#f0fdf4;color:#16a34a;"><i class="bi bi-globe2"></i></div>
            <div>
                <div class="stat-card__label">Homepage Section</div>
                <div class="stat-card__value" style="font-size:16px;font-weight:600;">Live</div>
            </div>
        </div>
    </div>
</div>

{{-- Quick actions --}}
<div class="row g-4">
    <div class="col-lg-7">
        <div class="rtm-card">
            <div class="rtm-card__header">
                <h2 class="rtm-card__title">Recent Logos</h2>
                <a href="{{ route('admin.logos.index') }}" class="btn-rtm-outline">
                    <i class="bi bi-grid-3x2-gap"></i> Manage All
                </a>
            </div>
            <div class="rtm-card__body p-0">
                @if($recentLogos->isEmpty())
                    <p style="padding:24px;color:#9ca3af;font-size:14px;">No logos yet. <a href="{{ route('admin.logos.create') }}" style="color:#E51E25;">Add your first logo →</a></p>
                @else
                <table class="rtm-table">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Alt Text</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentLogos as $logo)
                        <tr>
                            <td>
                                <img src="{{ $logo->image_url }}"
                                     alt="{{ $logo->alt_text }}"
                                     class="logo-thumb">
                            </td>
                            <td>{{ $logo->alt_text ?: '—' }}</td>
                            <td>{{ $logo->order }}</td>
                            <td>
                                @if($logo->is_active)
                                    <span class="badge-active">Active</span>
                                @else
                                    <span class="badge-inactive">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.logos.edit', $logo) }}"
                                   style="color:#6b7280;font-size:16px;" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="rtm-card h-100">
            <div class="rtm-card__header">
                <h2 class="rtm-card__title">Quick Actions</h2>
            </div>
            <div class="rtm-card__body d-flex flex-column gap-3">
                <a href="{{ route('admin.logos.create') }}" class="btn-rtm" style="justify-content:center;padding:14px;">
                    <i class="bi bi-plus-circle-fill fs-5"></i> Upload New Logo
                </a>
                <a href="{{ route('admin.logos.index') }}" class="btn-rtm-outline" style="justify-content:center;padding:13px;">
                    <i class="bi bi-list-ul fs-5"></i> View All Logos
                </a>
                <a href="https://right-trademark.com/" target="_blank" class="btn-rtm-outline" style="justify-content:center;padding:13px;border-color:#e5e7eb;color:#6b7280;">
                    <i class="bi bi-box-arrow-up-right fs-5"></i> Preview Homepage
                </a>
                <div style="background:#fff8f8;border:1px solid #fca5a5;border-radius:10px;padding:14px;">
                    <div style="font-size:12px;font-weight:700;color:#b91c1c;margin-bottom:6px;">
                        <i class="bi bi-info-circle me-1"></i>Cache Note
                    </div>
                    <p style="font-size:12px;color:#6b7280;margin:0;line-height:1.6;">
                        Logo changes are cached for 24 hours.
                        The cache clears <strong>automatically</strong> whenever you add, edit, or delete a logo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
