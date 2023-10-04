<!-- resources/views/broodjes/create.blade.php -->

<form method="POST" action="{{ route('broodjes.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required>
    
    <label for="afbeelding">Afbeelding:</label>
    <input type="file" name="afbeelding" id="afbeelding" accept="image/*" required>
    
    <label for="prijs">Prijs:</label>
    <input type="number" name="prijs" id="prijs" step="0.01" required>
    
    <button type="submit">Opslaan</button>
</form>
