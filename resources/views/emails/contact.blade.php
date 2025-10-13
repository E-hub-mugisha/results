@component('mail::message')
{{-- Logo --}}

<img src="assets/img/logo/logo-rff.png" alt="Result Focused Fitness" style="width: 200px; height: auto;">

# {{ $data['subject'] }}

**Full Name:** {{ $data['fullName'] }}

**Email:** {{ $data['email'] }}

**Phone:** {{ $data['phone'] }}

**Subject:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}

{{-- Call Button --}}
@component('mail::button', ['url' => 'tel:' . $data['phone']])
Call {{ $data['phone'] }}
@endcomponent

{{-- Reply Button --}}
@component('mail::button', ['url' => 'mailto:' . $data['email']])
Reply
@endcomponent

Thanks,  
Result Focused Fitness
@endcomponent
