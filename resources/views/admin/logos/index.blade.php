@extends('Layouts.admin')

@php $pageTitle = 'Trusted By Logos'; @endphp

@section('content')

{{-- Flash message --}}
@if(session('success'))
<div class="rtm-alert-success mb-4">
    <i class="bi bi-check-circle-fill fs-5"></i>
    {{ session('success') }}
</div>
@endif

{{-- Header row --}}
<div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
    <div>
        <h1 style="font-size:22px;font-weight:700;color:#111827;margin:0;">Trusted By Logos</h1>
        <p style="font-size:13px;color:#9ca3af;margin:4px 0 0;">Manage the scrolling logo strip on the homepage.</p>
    </div>
    <a href="{{ route('admin.logos.create') }}" class="btn-rtm">
        <i class="bi bi-plus-circle-fill"></i> Add New Logo
    </a>
</div>

{{-- Stats bar --}}
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card__icon"><i class="bi bi-collection"></i></div>
            <div>
                <div class="stat-card__label">Total</div>
                <div class="stat-card__value">{{ $logos->count() }}</div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-card__icon"><i class="bi bi-eye-fill"></i></div>
            <div>
                <div class="stat-card__label">Active</div>
                <div class="stat-card__value">{{ $logos->where('is_active', true)->count() }}</div>
            </div>
        </div>
    </div>
</div>

{{-- Table card --}}
<div class="rtm-card">
    <div class="rtm-card__body p-0">
        @if($logos->isEmpty())
            <div style="padding:60px;text-align:center;">
                <i class="bi bi-images" style="font-size:48px;color:#e5e7eb;"></i>
                <p style="margin:12px 0 4px;font-size:16px;font-weight:600;color:#374151;">No logos yet</p>
                <p style="font-size:14px;color:#9ca3af;">Upload your first trusted-by logo to get started.</p>
                <a href="{{ route('admin.logos.create') }}" class="btn-rtm">
                    <i class="bi bi-plus-circle-fill"></i> Add First Logo
                </a>
            </div>
        @else
            <div style="overflow-x:auto;">
                <table class="rtm-table">
                    <thead>
                        <tr>

                            <th>Logo</th>
                            <th>Alt Text</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logos as $logo)
                        <tr>

                            <td>
                                <img src="{{ $logo->image_url }}"
                                     alt="{{ $logo->alt_text }}"
                                     class="logo-thumb">
                            </td>
                            <td style="font-weight:500;">{{ $logo->alt_text ?: '—' }}</td>
                            <td>
                                <span style="background:#f3f4f6;border-radius:20px;padding:3px 10px;font-size:13px;font-weight:600;">
                                    {{ $logo->order }}
                                </span>
                            </td>
                            <td>
                                @if($logo->is_active)
                                    <span class="badge-active"><i class="bi bi-check-circle me-1"></i>Active</span>
                                @else
                                    <span class="badge-inactive"><i class="bi bi-dash-circle me-1"></i>Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div style="display:flex;gap:8px;align-items:center;">
                                    <a href="{{ route('admin.logos.edit', $logo) }}"
                                       class="btn-rtm-outline"
                                       style="padding:6px 12px;font-size:12px;">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.logos.destroy', $logo) }}" method="POST"
                                          onsubmit="return confirm('Delete this logo? The image file will also be removed permanently.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                style="background:#fff1f2;color:#b91c1c;border:1.5px solid #fca5a5;border-radius:8px;padding:6px 12px;font-size:12px;font-weight:600;cursor:pointer;display:inline-flex;align-items:center;gap:5px;transition:all .18s;"
                                                onmouseover="this.style.background='#b91c1c';this.style.color='#fff';"
                                                onmouseout="this.style.background='#fff1f2';this.style.color='#b91c1c';">
                                            <i class="bi bi-trash3"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

@endsection