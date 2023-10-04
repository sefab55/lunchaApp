<div class="container">
    <body>
<x-app-layout>
    
      
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
        <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('../css/dashboard.css') }}" rel="stylesheet">
        <script src="{{ asset('../js/app.js')}}"></script>
        <script src="{{ asset('../js/broodjes.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
</x-slot>
        <h1>waar heb je zin in?</h1>
        <br>
        <h1>we hebben ook vega</h1>
        <div class="filter">
        <button class="filter-button" data-filter="maaltijd">Baguettes</button>
        <button class="filter-button" data-filter="Tussendoor">Luxery buns</button>
        <button class="filter-button" data-filter="warm">Bakery hot</button>
    </div>

    <table class="table">

    <div class="bg-white p-4 rounded-lg shadow-md" id="maaltijdImage">
            <!-- Content for maaltijd -->
            <img class="broodjeimg" src="{{ asset('image/broodje-gezond.png') }}" alt="Broodje Gezond Afbeelding" width="150" height="250"
                class="broodimg" />

            <span class="product-price">€ 2,70</span>
            <button type="button" id="maaltijdToggleButton" class="toggle-button" data-target="maaltijd">   
                   </div>
            </button>
        </div>
        <div id="TussendoorImage"
            class="bg-white p-4 rounded-lg shadow-md">
            <!-- Content for Tussendoor -->
            <img class="broodjeimg" src="{{ asset('image/hummus.png ') }}" alt="Fanta Afbeelding" width="150" height="250" />
            <span class="product-price">€ 1,80</span>
            <button type="button" id="TussendoorToggleButton" class="toggle-button" data-target="Tussendoor">
                </div>
            </button>
        </div>
        <div id="warmImage" style="display: none;" class="bg-white p-4 rounded-lg shadow-md">
            <!-- Content for warm -->
            <img class="broodjeimg" src="{{ asset('image/tosti.png') }}" alt= "" width="150" height="250" />
            <span class="product-price">€ 5,00</span>
            <button type="button" id="warmToggleButton" class="toggle-button" data-target="warm">
            <div class="icons-container">
                <div class="icons-container">
                    <i id="maaltijdPlusIcon" class="fa-solid fa-circle-plus"
                        style="color: #00FF7F; font-size: 50px; position: relative; left: -100px;"></i>
                    <i id="maaltijdCheckIcon" class="fa-solid fa-circle-check"
                        style="color: #00FF7F; font-size: 50px; position: relative; left: -100px; display: none;"></i>
                </div>
            </button>
        </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
             
                </div>
            </div>
        </div>
    </div>
    </table>
    
    </body>
</x-app-layout>
</div>
