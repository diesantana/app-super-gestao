@props(['motivos', 'classeBorda'])
<form action="{{ route('site.salvar') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classeBorda }}" name="nome" value="{{ old('nome') }}">
    @error('nome')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <input type="text" placeholder="Telefone" class="{{ $classeBorda }}" name="telefone"
        value="{{ old('telefone') }}">
    @error('telefone')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <input type="text" placeholder="E-mail" class="{{ $classeBorda }}" name="email" value="{{ old('email') }}">
    @error('email')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <select class="{{ $classeBorda }}" name="motivo">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo') == $motivo->id ? 'selected' : '' }}>
                {{ $motivo->motivo_contato }}
            </option>
        @endforeach
    </select>
    @error('motivo')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <textarea class="{{ $classeBorda }}" name="mensagem" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') }}</textarea>
    @error('mensagem')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
