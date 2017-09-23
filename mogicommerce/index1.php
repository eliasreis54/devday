<?php include "header.html" ?>

<!-- Modal -->
<div id="login-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form>
        	<label for="usuario-tipo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Tipo de usuário</label>
        	<select id="usuario-tipo" class="custom-select col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  <option selected>Consumidor</option>
			  <option value="1">Comerciante</option>
			  <option value="2">Associação</option>
			</select>

			<label for="usuario" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Usuário</label>
			<input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="usuario"/>

			<label for="senha" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Senha</label>
			<input type="password" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="senha"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success col-lg-5 col-md-5 col-sm-5 col-xs-12" data-dismiss="modal">Logar</button>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <button type="button" class="btn btn-danger col-lg-5 col-md-5 col-sm-5 col-xs-12" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Busque por um comércio</span>
  <input type="text" class="form-control" placeholder="Digite a informação aqui" aria-label="Username" aria-describedby="basic-addon1">
</div>

<br>

<div class="bootstrap-table">
	<table data-toggle="table" data-pagination="true" data-page-size="13">
		<thead>
			<tr>
				<th data-align="center" data-sortable="true">Sua pontuação</th>
				<th data-align="center" data-sortable="true">Comerciante</th>
				<th data-align="center" data-sortable="true">Categoria</th>
				<th data-align="center" data-sortable="true">Distância</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
			<tr>
				<td>Pontuação</td>
				<td>Nome</td>
				<td>Categoria</td>
				<td>Distância</td>
			</tr>
		</tbody>
	</table>
</div>

<br>
<br>

<?php include "footer.html" ?>