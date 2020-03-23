@component('mail::message')
# Introduction
 Tong tien :{{$order->grand_total}}
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
