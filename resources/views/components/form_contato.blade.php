<form action="{{ route('site.contact') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classeBorda }}" name="name">
    <br>
    <input type="text" placeholder="Telefone" class="{{ $classeBorda }}" name="phone">
    <br>
    <input type="text" placeholder="E-mail" class="{{ $classeBorda }}" name="email1">
    <br>
    <select class="{{ $classeBorda }}" name="motivo">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $classeBorda }}" name="message">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
