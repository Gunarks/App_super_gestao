{{ $slot }}
<form action="{{ route('site.contact') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{ $class }}">
    <input type="text" name="telefone" placeholder="Telefone" class="{{ $class }}">
    <input type="email" name="email" placeholder="E-mail" class="{{ $class }}">
    <select name="motivo_contato" class="{{ $class }}">
        <option value="">Motivo do contato</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogios</option>
        <option value="3">Reclamação</option>
    </select>
    <textarea name="msg" cols="50" rows="7" class="{{ $class }}">Preencha aqui a sua mensagem</textarea>
    <button type="submit">Enviar</button>
</form>