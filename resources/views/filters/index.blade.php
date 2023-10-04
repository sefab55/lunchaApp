<!-- resources/views/filter/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Filterresultaten</h1>
            <div class="filter-buttons">
                <button class="filter-button" data-filter="maaltijd">Maaltijd</button>
                <button class="filter-button" data-filter="Tussendoor">Tussendoor</button>
                <button class="filter-button" data-filter="warm">Warm</button>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Hier worden de gefilterde resultaten weergegeven -->
        <div class="filtered-items">
            @foreach($items as $item)
                <!-- Toon hier de gegevens van $item -->
            @endforeach
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-button')
    const filteredItems = document.querySelector('.filtered-items')

    // Event listeners voor filterknoppen
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter')

            // Stuur een AJAX-verzoek om te filteren
            axios.post('/filter', { filterValue: filterValue })
                .then(response => {
                    // Toon de gefilterde resultaten
                    const filteredData = response.data;
                    // Werk de weergave van gefilterde items bij
                    // Hier kun je de DOM bijwerken met de gefilterde gegevens
                })
                .catch(error => {
                    console.error(error);
                });
        })
    });
});
</script>
@endsection

