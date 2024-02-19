<body>
<head>

<div class="container">
<img style="height: 100px; width:300px;" src="{{ asset('image/achtergrond.png') }}" alt="">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/broodjes.js') }}"></script>

    <div class="text">
    <div style="text-align: left; margin-top:5px; border-radius:20px;">
    <h1 style="color: orange; font-size: 25px; font-weight: bold;">Waar heb je zin in?</h1>

        <div>
        <h1>We hebben ook <span style="color: green;">VEGAN!</span></h1>
   
    </div>
        <div class="filter-button">
            <button class="filter-btn" data-filter="baguettes">Baguettes</button>
            <button class="filter-btn" data-filter="luxurybuns">Luxury Buns</button>
            <button class="filter-btn" data-filter="bakeryhot">Bakery Hot</button>
        </div>
    </div>

    <div id="broodjes-container">
        @foreach ($BaguettesProducten as $broodje)
        <div class="bg-white p-4 rounded-lg shadow-md maaltijd" data-category="baguettes">
            <div class="broodje">
                <div class="broodje-info">
                    <div class="img-container">
                        <img class="broodjeimg" src="{{ asset('image/' . $broodje->broodjespng) }}" alt="{{ $broodje->broodjesnaam }}">
                    </div>
                    <div class="text-container">
                        <h3>{{ $broodje->broodjesnaam }}</h3>
                        <p class="prijs"> €{{ $broodje->prijs }}</p>
                    </div>
                </div>
                <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $broodje->id }}">
                <button style="color: black;" type="submit">+</button>
                </form>
            </div>
        </div>
        @endforeach

        @foreach ($LuxerybunsProducten as $broodje)
        <div class="bg-white p-4 rounded-lg shadow-md maaltijd" data-category="luxurybuns">
            <div class "broodje">
                <div class="broodje-info">
                    <div class="img-container">
                        <img class="broodjeimg" src="{{ asset('image/' . $broodje->broodjespng) }}" alt="{{ $broodje->broodjesnaam }}">
                    </div>
                    <div class="text-container">
                        <h3>{{ $broodje->broodjesnaam }}</h3>
                        <p class="prijs"> €{{ $broodje->prijs }}</p>
                    </div>
                </div>
                <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $broodje->id }}">
                <button style="color: black;" type="submit">+</button>
                </form>
            </div>
        </div>
        @endforeach

        @foreach ($HotProducten as $broodje)
        <div class="bg-white p-4 rounded-lg shadow-md maaltijd" data-category="bakeryhot">
            <div class "broodje">
                <div class="broodje-info">
                    <div class="img-container">
                        <img class="broodjeimg" src="{{ asset('image/' . $broodje->broodjespng) }}" alt="{{ $broodje->broodjesnaam }}">
                    </div>
                    <div class="text-container">
                        <h3>{{ $broodje->broodjesnaam }}</h3>
                    
                        <p class="prijs"> €{{ $broodje->prijs }}</p>
                    </div>
                </div>
                <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $broodje->id }}">
                <button style="color: black;" type="submit">+</button>
                </form>
            </div>
        </div>
        @endforeach 
        </div>
        <a href="{{ route('winkelwagen.index') }}" class="filter-btn">Zie Bestelling</a>
</div>
</head>
</body>

