<x-mail::message>



# 📩 New Contact Message

Hello Admin,
You have received a new inquiry from your website contact form.

---

## 👤 Sender Details

**Name:** {{ $data['name'] }}
---
**Email:** {{ $data['email'] }}
---
**Phone:** {{ $data['phone'] ?? 'N/A' }}
---
**Subject:** {{ $data['subject'] ?? 'N/A' }}

---

## 📝 Message
{{ $data['comment'] }}

---

<x-mail::panel>
If this message looks suspicious, please verify the sender’s email before responding.
</x-mail::panel>

<br>

<x-mail::button :url="'http://localhost:8000'">
Visit Website
</x-mail::button>

<br><br>

Thanks,<br>
**MightyBreeze**

</x-mail::message>
