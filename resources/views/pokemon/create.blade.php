<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome Pokemon" required>
    <input type="text" name="type" placeholder="Tipo" required>
    <input type="number" name="strength" placeholder="Nivel Poder" required>
    <button type="submit">Create Pokemon</button>
</form>


