@component('mail::message')
# Order Conformation

Your order submitted successfully. Thank you for submitting order to us. We are start processing your order. We will inform you farther information about your order.

@component('mail::button', ['url' => config('app.url').'/myaccount/order/'.$order->id])
View Order Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}<br/>
@endcomponent
