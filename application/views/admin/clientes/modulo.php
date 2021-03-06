<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?= $title_h2 ?>
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?= $breadcrumb['home'] ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?= $breadcrumb['previous_page'] ?>"></i> Clientes cadastrados</a></li>
		<li class="active"><?= $breadcrumb['this_page'] ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<?= $this->session->flashdata('message') ?>
	<!-- Default box -->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Formulário de Cadastro</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?= base_url('admin/clientes/core')?>" method="post">
					<div class="box-body">
						<?= errosValidacao('message') ?>
						<div class="form-group">
							<label>Nome</label>
							<input name="name" type="text" class="form-control" placeholder="Nome" value="<?= ($it_client != NULL) ? $it_client->nome : set_value('name')?>">
						</div>
						<div class="form-group">
							<label>CPF</label>
							<input name="cpf" type="text" class="form-control cpf" placeholder="CPF" value="<?= ($it_client != NULL) ? $it_client->cpf : set_value('cpf')?>">
						</div>
						<div class="form-group">
							<label>Data de nascimento</label>
							<input name="dt_nascimento" type="text" class="form-control date" placeholder="Data de nascimento" value="<?= ($it_client != NULL) ? $it_client->data_nascimento : set_value('dt_nascimento')?>">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-4">
									<label>CEP</label>
									<input name="CEP" type="text" class="form-control cep" placeholder="CEP" value="<?= ($it_client != NULL) ? $it_client->cep : set_value('CEP')?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Endereço</label>
							<input name="endereco" type="text" class="form-control" placeholder="Endereço" value="<?= ($it_client != NULL) ? $it_client->endereco : set_value('endereco')?>">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-4">
									<label>Número</label>
									<input name="numero" type="text" class="form-control" placeholder="Número" value="<?= ($it_client != NULL) ? $it_client->numero : set_value('numero')?>">
								</div>
								<div class="col-xs-4">
									<label>Bairro</label>
									<input name="bairro" type="text" class="form-control" placeholder="Bairro" value="<?= ($it_client != NULL) ? $it_client->bairro : set_value('bairro')?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Complemento</label>
							<input name="complemento" type="text" class="form-control" placeholder="Complemento" value="<?= ($it_client != NULL) ? $it_client->complemento : set_value('complemento')?>">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-4">
									<label>Cidade</label>
									<input name="cidade" type="text" class="form-control" placeholder="Cidade" value="<?= ($it_client != NULL) ? $it_client->cidade : set_value('cidade')?>">
								</div>
								<div class="col-xs-4">
									<label>Estado</label>
									<input name="estado" type="text" class="form-control" placeholder="Estado" value="<?= ($it_client != NULL) ? $it_client->estado : set_value('estado')?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">E-mail</label>
							<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?= ($it_client != NULL) ? $it_client->email : set_value('email')?>">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Senha</label>
							<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
						</div>
						<div class="form-group">
							<label>Ativar Cliente</label>
							<select name="active" class="form-control">
								<?php if ($it_client ) { ?>
									<option value="0" <?= ($it_client->ativo == 0 ? 'selected' : '') ?> >Não</option>
									<option value="1" <?= ($it_client->ativo == 1 ? 'selected' : '') ?> >Sim</option>
								<?php } else { ?>
									<option value="0" >Não</option>
									<option value="1" selected >Sim</option>
								<?php } ?>
							</select>
						</div>
						<?php if ($it_client ) { ?>
							<input type="hidden" name="id" value="<?= $it_client->id ?>"
						<?php } ?>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Enviar</button>
						<a href="<?= base_url('admin/clientes') ?>" class="btn btn-sm btn-default btn-flat pull-right">Voltar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- /.content -->
