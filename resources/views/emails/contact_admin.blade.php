<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>New Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin:0;padding:0;background:#f4f5f7;">
  <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f4f5f7;">
    <tr>
      <td align="center" style="padding:24px;">
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;background:#ffffff;border-radius:8px;overflow:hidden;">
          <!-- Header (LOGO CENTER) -->
          <tr>
            <td align="center" style="background:#e9e4e3;padding:20px 24px;text-align:center;">
              <a href="{{ $siteUrl }}" target="_blank" style="text-decoration:none;display:inline-block;">
                <img src="https://right-trademark.com/portal/storage/uploads/logo/right_trademark.png"
                     alt="Right Trademark" height="50"
                     style="display:inline-block;border:0;line-height:100%;outline:none;text-decoration:none;">
              </a>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:28px 24px 8px 24px;font-family:Arial,Helvetica,sans-serif;color:#111827;">
              <h2 style="margin:0 0 8px;font-size:20px;line-height:26px;">New Contact Enquiry</h2>

              <!-- SOURCE WEBSITE MENTION -->
              <p style="margin:0 0 16px;font-size:14px;line-height:20px;color:#374151;">
                You received a new message from the website contact form on
                <a href="{{ $siteUrl }}" style="color:#1d4ed8;text-decoration:underline;">
                  {{ $siteHost }}
                </a>
              </p>

              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="font-size:14px;border-collapse:collapse;">
                <tr>
                  <td width="140" style="padding:8px 0;color:#6b7280;">Name</td>
                  <td style="padding:8px 0;color:#111827;"><strong>{{ $contact->name }}</strong></td>
                </tr>
                <tr>
                  <td width="140" style="padding:8px 0;color:#6b7280;">Email</td>
                  <td style="padding:8px 0;color:#111827;">
                    <a href="mailto:{!! e($contact->email) !!}" style="color:#1d4ed8;text-decoration:underline;">
                      {{ $contact->email }}
                    </a>
                  </td>
                </tr>
                <tr>
                  <td width="140" style="padding:8px 0;color:#6b7280;">Phone</td>
                  <td style="padding:8px 0;color:#111827;">
                    @if(!empty($contact->phone))
                      <a href="tel:{{ preg_replace('/\s+/', '', $contact->phone) }}" style="color:#1d4ed8;text-decoration:underline;">
                        {{ $contact->phone }}
                      </a>
                    @else
                      —
                    @endif
                  </td>
                </tr>
                <tr>
                  <td width="140" style="padding:8px 0;color:#6b7280;vertical-align:top;">Message</td>
                  <td style="padding:8px 0;color:#111827;white-space:pre-line;">
                    {{ $contact->message ?: '—' }}
                  </td>
                </tr>
              </table>

              <!-- CTA -->
              <div style="margin:20px 0 6px;">
                <a href="https://right-trademark.com/portal"
                   style="display:inline-block;background:#8b0000;color:#ffffff;border-radius:6px;padding:10px 16px;
                          font-size:14px;text-decoration:none;">
                  Open Portal
                </a>
              </div>

              <!-- INTERNATIONAL TIME (UTC) -->
              <p style="margin:12px 0 0;font-size:12px;line-height:18px;color:#6b7280;">
                Sent on {{ $sentUtc }} ({{ config('app.name') }}).
                {{-- Optional: also show local --}}
                {{-- <br>Local time: {{ $sentLocal }} --}}
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f9fafb;padding:16px 24px;text-align:center;font-family:Arial,Helvetica,sans-serif;">
              <p style="margin:0;font-size:12px;color:#6b7280;">
                © {{ date('Y') }} Right Trademark. All Rights Reserved.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>





