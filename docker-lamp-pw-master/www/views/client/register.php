<h2>Cadastro de cliente</h2>
<form action="?controller=client&action=registerView" method="post">
    <div class="mt-3 mb-3">
        <label class="form-label" for="">Nome</label>
        <input class="form-control" type="text" name="name" id="" required>
    </div>

    <div class="mt-3 mb-3">
        <label class="form-label" for="">Email</label>
        <input class="form-control" type="email" name="email" id="" required>
    </div>
    <br>

    <h4>Gênero:</h4>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="female" checked>
        <label class="form-check-label" for="html">Feminino</label>
        <br>

        <input class="form-check-input" type="radio" name="gender" value="male">
        <label class="form-check-label" for="html">Masculino</label>
        <br>

        <input class="form-check-input" type="radio" name="gender" value="others">
        <label class="form-check-label" for="html">Outro</label>
    </div>
    <br>

    <h4>Selecione seus interesses:</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="option1" value="option1">
        <label class="form-check-label" for="html">Musica</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="option2" value="option2">
        <label class="form-check-label" for="html">Teatro</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="option3" value="option3">
        <label class="form-check-label" for="html">Pinturas</label>
    </div>
    <br>

    <h4>Telefone:</h4>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone">
    </div>
    <br>

    <h4>Observações:</h4>

    <textarea name="comment" rows="5" cols="40"></textarea>

    <div class="checkbox">
        <label>
            <input type="checkbox" name="accept"> Desejo receber os comunicados do site.
        </label>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>
</form>