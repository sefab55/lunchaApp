<!-- resources/views/broodjes/edit.blade.php -->

<form method="POST" action="{{ route('broodjes.update', $broodje->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" value="{{ $broodje->naam }}" required>
    
    <label for="afbeelding">Afbeelding:</label>
    <input type="file" name="afbeelding" id="afbeelding" accept="image/*">
    
    <label for="prijs">Prijs:</label>
    <input type="number" name="prijs" id="prijs" value="{{ $broodje->prijs }}" step="0.01" required>
    
    <button type="submit">Opslaan</button>
</form>
