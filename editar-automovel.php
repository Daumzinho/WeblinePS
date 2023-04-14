<h1>Editar Usuario</h1>
<?php
	$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="
		form-control">
	</div>
	<div class="mb-3">
		<label>placa</label>
		<input type="text" name="placa" value="<?php print $row->placa; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>chassi</label>
		<input type="text" name="chassi" value="<?php print $row->chassi; ?>"class="form-control">
	</div>
	<div class="mb-3">
		<label>montadora</label>
		<input type="text" name="montadora" value="<?php print $row->montadora; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>