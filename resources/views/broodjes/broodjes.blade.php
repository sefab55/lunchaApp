<!-- resources/views/broodjes/broodjes.blade.php -->

@foreach($broodjes as $broodje)
    <div class="broodje">
        <img src="{{ asset('afbeeldingen/' . $broodje->afbeelding) }}" alt="{{ $broodje->naam }}">
        <h2>{{ $broodje->naam }}</h2>
        <p>Prijs: {{ $broodje->prijs }} euro</p>
        <a href="{{ route('broodjes.edit', $broodje->id) }}">Bewerken</a>
        <form method="POST" action="{{ route('broodjes.destroy', $broodje->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Verwijderen</button>
        </form>
    </div>
@endforeach
