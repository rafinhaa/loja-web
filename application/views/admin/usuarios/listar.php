<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?= $title_h2 ?>
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?= $breadcrumb['home'] ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><?= $breadcrumb['this_page'] ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<?= getMsg('message') ?>
	<!-- Default box -->
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Usuários</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="width: 10px">#</th>
							<th>Usuário</th>
							<th>Email</th>
							<th>Status</th>
							<th>Opções</th>
						</tr>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $u) { ?>
							<tr>
								<td><?= $u->id ?></td>
								<td><?= $u->username ?></td>
								<td><?= $u->email ?></td>
								<td class="text-center"><?= ($u->active == 1)? '<small class="label bg-green">ativo</small>' : '<small class="label center bg-red">inativo</small>' ?></td>
								<td class="text-center">
									<div class="btn-group">
										<a href="<?= base_url('admin/usuarios/modulo/' . $u->id) ?>" type="button" class="btn btn-info">Editar</a>
										<?php createModelButton("modal-danger",'Apagar','#modal-danger') ?>
										<?php createModalMessage('modal-danger','modal-danger','Cuidado!','Tem certeza que deseja apagar esse usuário?', base_url('admin/usuarios/delete/'.$u->id)) ?>
									</div>
								</td>
							</tr>
						<?php } ?>
						</tbody>
						<tfoot>
						<tr>
							<th style="width: 10px">#</th>
							<th>Usuário</th>
							<th>Email</th>
							<th>Status</th>
							<th>Opções</th>
						</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
				<!-- box-footer -->
				<div class="box-footer clearfix">
					<a href="<?= base_url('admin/usuarios/modulo') ?>" type="button" class="btn btn-primary">Adicionar</a>              	
              		<a href="<?= base_url('admin/') ?>" class="btn btn-sm btn-default btn-flat pull-right">Voltar</a>
            	</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
