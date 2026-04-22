@extends('Layouts.admin')

@php $pageTitle = 'Add New Logo'; @endphp

@section('content')

<div class="d-flex align-items-center gap-3 mb-4">
    <a href="{{ route('admin.logos.index') }}"
       style="background:#f3f4f6;border:none;border-radius:8px;width:36px;height:36px;display:flex;align-items:center;justify-content:center;color:#374151;text-decoration:none;font-size:18px;">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div>
        <h1 style="font-size:22px;font-weight:700;color:#111827;margin:0;">Add New Logo</h1>
        <p style="font-size:13px;color:#9ca3af;margin:0;">Upload a new trusted-by logo for the homepage.</p>
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

                <form action="{{ route('admin.logos.store') }}" method="POST" enctype="multipart/form-data"
                      id="logoCreateForm">
                    @csrf

                    <div class="mb-4">
                        <label class="rtm-form-label" for="image">
                            Logo Image <span style="color:#E51E25;">*</span>
                        </label>

                        {{-- Drop zone --}}
                        <div class="logo-preview-box" id="dropZone"
                             style="cursor:pointer;transition:border-color .2s;"
                             onclick="document.getElementById('image').click()">
                            <div id="dropPlaceholder">
                                <i class="bi bi-cloud-arrow-up" style="font-size:36px;color:#d1d5db;"></i>
                                <p style="margin:8px 0 4px;color:#6b7280;font-size:14px;font-weight:500;">
                                    Click to upload or drag & drop
                                </p>
                                <p style="margin:0;color:#9ca3af;font-size:12px;">
                                    JPEG, PNG, WebP, GIF — max 2MB
                                </p>
                            </div>
                            <img id="previewImg" src="" alt="Preview"
                                 style="display:none;max-height:100px;object-fit:contain;border-radius:8px;">
                        </div>

                        <input type="file" id="image" name="image"
                               accept="image/jpeg,image/png,image/webp,image/gif"
                               required style="display:none;"
                               class="{{ $errors->has('image') ? 'is-invalid' : '' }}">
                        @error('image')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="rtm-form-label" for="alt_text">Alt Text</label>
                        <input type="text"
                               id="alt_text" name="alt_text"
                               class="rtm-form-control {{ $errors->has('alt_text') ? 'is-invalid' : '' }}"
                               value="{{ old('alt_text') }}"
                               placeholder="e.g. Acme Corp logo"
                               maxlength="255">
                        <div class="rtm-form-text">Describe the logo for accessibility and SEO.</div>
                        @error('alt_text')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="rtm-form-label" for="order">Display Order</label>
                        <input type="number"
                               id="order" name="order"
                               class="rtm-form-control {{ $errors->has('order') ? 'is-invalid' : '' }}"
                               value="{{ old('order', 0) }}"
                               min="0" style="max-width:140px;">
                        <div class="rtm-form-text">Lower numbers appear first in the scroll (0 = first).</div>
                        @error('order')
                            <div class="rtm-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="display:flex;gap:12px;padding-top:8px;">
                        <button type="submit" class="btn-rtm">
                            <i class="bi bi-cloud-upload-fill"></i> Upload Logo
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
        <div class="rtm-card">
            <div class="rtm-card__header">
                <h2 class="rtm-card__title">Tips</h2>
            </div>
            <div class="rtm-card__body">
                <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:14px;">
                    <li style="display:flex;gap:10px;font-size:13px;color:#374151;">
                        <i class="bi bi-check-circle-fill" style="color:#22c55e;font-size:16px;margin-top:1px;flex-shrink:0;"></i>
                        Use <strong>WebP</strong> format for best performance and smallest file size.
                    </li>
                    <li style="display:flex;gap:10px;font-size:13px;color:#374151;">
                        <i class="bi bi-check-circle-fill" style="color:#22c55e;font-size:16px;margin-top:1px;flex-shrink:0;"></i>
                        Recommended size: <strong>200–400px wide</strong>, transparent background (PNG/WebP).
                    </li>
                    <li style="display:flex;gap:10px;font-size:13px;color:#374151;">
                        <i class="bi bi-check-circle-fill" style="color:#22c55e;font-size:16px;margin-top:1px;flex-shrink:0;"></i>
                        Always fill in <strong>alt text</strong> for accessibility compliance.
                    </li>
                    <li style="display:flex;gap:10px;font-size:13px;color:#374151;">
                        <i class="bi bi-check-circle-fill" style="color:#22c55e;font-size:16px;margin-top:1px;flex-shrink:0;"></i>
                        Set <strong>Display Order</strong> to control the sequence in the scroll strip.
                    </li>
                    <li style="display:flex;gap:10px;font-size:13px;color:#374151;">
                        <i class="bi bi-info-circle-fill" style="color:#E51E25;font-size:16px;margin-top:1px;flex-shrink:0;"></i>
                        The homepage <strong>cache clears automatically</strong> after you save.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const input       = document.getElementById('image');
    const previewImg  = document.getElementById('previewImg');
    const placeholder = document.getElementById('dropPlaceholder');
    const dropZone    = document.getElementById('dropZone');

    function showPreview(file) {
        if (!file || !file.type.startsWith('image/')) return;
        const reader = new FileReader();
        reader.onload = e => {
            previewImg.src = e.target.result;
            previewImg.style.display = 'block';
            placeholder.style.display = 'none';
            dropZone.style.borderColor = '#E51E25';
        };
        reader.readAsDataURL(file);
    }

    input.addEventListener('change', () => showPreview(input.files[0]));

    // Drag & drop
    dropZone.addEventListener('dragover', e => { e.preventDefault(); dropZone.style.borderColor = '#E51E25'; });
    dropZone.addEventListener('dragleave', () => { dropZone.style.borderColor = '#e5e7eb'; });
    dropZone.addEventListener('drop', e => {
        e.preventDefault();
        const file = e.dataTransfer.files[0];
        if (file) {
            const dt = new DataTransfer();
            dt.items.add(file);
            input.files = dt.files;
            showPreview(file);
        }
    });
</script>
@endpush

@endsection