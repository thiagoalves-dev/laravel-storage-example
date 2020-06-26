@component('mail::message')

    # Olá, {{ $order->user->name }}

    Seu pedido, no valor de R$ {{ $order->total_price }}, foi confirmado!

    @component('mail::button', ['url' => 'mastercode.dev/pedido/' . $order->id])
        Ver pedido
    @endcomponent

@endcomponent