<body>
    <head>
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    </head>
    <div class="container">
    <img style="height: 100px; width:300px;" src="{{ asset('image/achtergrond.png') }}" alt="">
        <h1 style="color: white;">Overzicht <br> Uw bestelling</h1>
        @if (count($cartItems) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Hoeveelheid</th>
                        <th>Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $subtotaal = 0;
                    @endphp

                    @foreach ($cartItems as $cartItem)
                    <tr>
                        <td>{{ $cartItem->product->broodjesnaam }}</td>
                        <td>
                            <form method="post" action="{{ route('cart.update', $cartItem->id) }}">
                                @csrf
                                @method('patch')
                                <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="0">

                                <button type="submit" class="filter-btn">+</button>
                            </form>
                        </td>
                        <td>€{{ $cartItem->product->prijs }}</td>
                        <td>
                            <form method="post" action="{{ route('cart.remove', ['cartItem' => $cartItem->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="filter-btn">-</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="winkelmand-details" style="background-color: orange;">
    @foreach ($cartItems as $cartItem)
        <div class="cart-item">
            <p class="left">{{ $cartItem->product->broodjesnaam }}</p>
            <p class="center">{{ $cartItem->quantity }}</p>  
            <p class="right">€{{ $cartItem->product->prijs }}</p>
        </div>
    @endforeach
    <p class="total"><strong>Totaal bedrag:</strong> €{{ $subtotaal }}</p>
</div>

            <br>
            <br>
            <button class="rounded-button">plaats je bestelling</button>
        @else
            <p>Je winkelwagen is leeg.</p>
        @endif
    </div>
</body>
