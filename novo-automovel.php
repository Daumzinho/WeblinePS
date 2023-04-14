<h1>Novo automovel</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="
		form-control">
	</div>
	<div class="mb-3">
		<label>placa</label>
		<input type="text" name="placa" class="form-control">
	</div>
	<div class="mb-3">
		<label>chassi</label>
		<input type="text" name="chassi" class="form-control">
	</div>
	<div class="mb-3">
		<label>montadora</label>
		<select name="montadora" id="montadora">
		<option value=1> Volkswagen </option>
		<option value=2> Fiat </option>
		<option value=3> Ford </option>
		<option value=4> Chevrolet </option>
	</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</div>
</form>