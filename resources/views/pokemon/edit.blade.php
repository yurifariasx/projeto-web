<form action="{{ url('pokemon/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name}}" required>
    <input type="text" name="type" placeholder="Type" value="{{ $pokemon->type}}" required>
    <input type="text" name="strength" placeholder="Strength" value="{{ $pokemon->strength}}" required>
    <button type="submit">Update Pokemon</button>
</form>