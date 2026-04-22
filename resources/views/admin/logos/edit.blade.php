@extends('Layouts.admin')

@php $pageTitle = 'Edit Logo #' . $logo->id; @endphp

@section('content')

<div class="d-flex align-items-center gap-3 mb-4">
    <a href="{{ route('admin.logos.index') }}"
       style="background:#f3f4f6;border:none;border-radius:8px;width:36px;height:36px;display:flex;align-items:center;justify-content:center;color:#374151;text-decoration:none;font-size:18px;">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div>
        <h1 style="font-size:22px;font-weight:700;color:#111827;margin:0;">Edit Logo #{{ $logo->id }}</h1>
        <p style="font-size:13px;color:#9ca3af;margin:0;">Update metadata or toggle visibility.</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="rtm-card">
            <div class="rtm-card__header">
                <h2 class="rtm-card__title">Logo Details</h2>
            </div>
            <div class="rtm-card__body">

                @if($errors->any())
                <div class="rtm-alert-error mb-4">
                    <strong><i class="bi bi-exclamation-circle me-1"></i>Please fix the following:</strong>
                    <ul style="margin:8px 0 0;padding-left:20px;">
                        @foreach($errors->all() as $error)
                            <li style="font-size:13px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('admin.logos.update', $logo) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="rtm-form-label" for="image">Replace Image (Optional)</label>
                        <input type="file"
                               id="image" name="image"
                               class="rtm-form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                               accept="image/*">
                        <div class="rtm-form-text">Leave empty to keep the current image. Max 2MB.</div>
                        @error('image')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="rtm-form-label" for="alt_text">Alt Text</label>
                        <input type="text"
                               id="alt_text" name="alt_text"
                               class="rtm-form-control {{ $errors->has('alt_text') ? 'is-invalid' : '' }}"
                               value="{{ old('alt_text', $logo->alt_text) }}"
                               placeholder="e.g. Acme Corp logo"
                               maxlength="255">
                        <div class="rtm-form-text">Used for accessibility and SEO.</div>
                        @error('alt_text')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="rtm-form-label" for="order">Display Order</label>
                        <input type="number"
                               id="order" name="order"
                               class="rtm-form-control {{ $errors->has('order') ? 'is-invalid' : '' }}"
                               value="{{ old('order', $logo->order) }}"
                               min="0" style="max-width:140px;">
                        <div class="rtm-form-text">Lower numbers appear first in the scroll strip.</div>
                        @error('order')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4" style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                        <label class="rtm-check">
                            <input type="checkbox" name="is_active" id="is_active"
                                   {{ $logo->is_active ? 'checked' : '' }}>
                            <div>
                                <div style="font-size:14px;font-weight:600;color:#111827;">Active — Visible on homepage</div>
                                <div style="font-size:12px;color:#9ca3af;margin-top:2px;">
                                    Uncheck to hide this logo from the "Trusted By" strip without deleting it.
                                </div>
                            </div>
                        </label>
                    </div>

                    <div style="display:flex;gap:12px;padding-top:4px;">
                        <button type="submit" class="btn-rtm">
                            <i class="bi bi-floppy-fill"></i> Save Changes
                        </button>
                        <a href="{{ route('admin.logos.index') }}" class="btn-rtm-outline">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        {{-- Current image --}}
        <div class="rtm-card mb-4">
            <div class="rtm-card__header">
                <h2 class="rtm-card__title">Current Image</h2>
            </div>
            <div class="rtm-card__body">
                <div class="logo-preview-box">
                    <img src="{{ $logo->image_url }}"
                         alt="{{ $logo->alt_text }}"
                         style="max-height:120px;object-fit:contain;">
                </div>
                <p style="font-size:12px;color:#9ca3af;margin-top:10px;margin-bottom:0;">
                    <i class="bi bi-info-circle me-1"></i>
                    To replace the image, delete this logo and upload a new one.
                </p>
            </div>
        </div>

        {{-- Danger zone --}}
        <div class="rtm-card" style="border-color:#fca5a5;">
            <div class="rtm-card__header" style="background:#fff8f8;border-bottom-color:#fca5a5;">
                <h2 class="rtm-card__title" style="color:#b91c1c;">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Danger Zone
                </h2>
            </div>
            <div class="rtm-card__body">
                <p style="font-size:13px;color:#6b7280;margin-bottom:16px;">
                    Permanently removes this logo and its image file from storage. This cannot be undone.
                </p>
                <form action="{{ route('admin.logos.destroy', $logo) }}" method="POST"
                      onsubmit="return confirm('Are you sure? This will permanently delete the logo and its image file.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            style="background:#b91c1c;color:#fff;border:none;border-radius:8px;padding:10px 18px;font-size:14px;font-weight:600;cursor:pointer;display:inline-flex;align-items:center;gap:7px;width:100%;justify-content:center;transition:background .18s;"
                            onmouseover="this.style.background='#7f1d1d';"
                            onmouseout="this.style.background='#b91c1c';">
                        <i class="bi bi-trash3-fill"></i> Delete This Logo
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection