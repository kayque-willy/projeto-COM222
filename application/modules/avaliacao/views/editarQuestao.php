<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco de questões</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<!-- Navibar -->
	<link rel="stylesheet" href="/assets/css/side.css">
	<!-- jQuery library -->
	<script src="/assets/js/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="/assets/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Sidebar -->
	<div id="wrapper">
		<div class="overlay"></div>

	  <!--Sidebar-->
		<?php $this->load->view('layout/sidebar'); ?>
	  <!--Sidebar-->
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper" style="margin-bottom: 150px;">
			
			<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
    		<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
      </button>
			
			<div class="container">
				<div class="row">
					<!--Formulario de cadastro -->
					<div class="col-lg-8 col-lg-offset-2">
						<h1 class="page-header text-center">Atualização de questões</h1>
						<!--Formulario de cadastro -->
						<?php if(!empty($questao)){ 
										foreach($questao as $quest){ ?>
										<form action="<?php echo base_url('avaliacao/editarQuestao/').'/'.$idQuestao ?>" method="post">
										  <!--idQuestao-->
											<input type="hidden" name="idQuestao" value="<?php echo $idQuestao ?>">
											<!--idQuestao-->
											<!--idDisciplina-->
												<div class="form-group">
													<label for="idDisciplina">Disciplina:</label>
													<input readonly type="text" class="form-control" id="idDisciplina" name="idDisciplina" value="<?php echo $quest->idDisciplina ?>">
												</div>
												<!--idDisciplina-->
												<!--Enunciado-->
												<div class="form-group">
													<label for="id">Enunciado:</label>
													<textarea required type="text" class="form-control" id="enunciado" name="enunciado"><?php echo $quest->enunciado ?></textarea>
												</div>
												<!--Enunciado-->
												<!--Resp1-->
												<div class="form-group">
													<label for="r1">Resposta 1:</label>
													<input required type="text" class="form-control" id="r1" name="r1" value="<?php echo $quest->r1 ?>">
												</div>
												<!--Resp1-->
												<!--Resp2-->
												<div class="form-group">
													<label for="r2">Resposta 2:</label>
													<input required type="text" class="form-control" id="r2" name="r2" value="<?php echo $quest->r2 ?>">
												</div>
												<!--Resp2-->
												<!--Resp3-->
												<div class="form-group">
													<label for="r3">Resposta 3:</label>
													<input required type="text" class="form-control" id="r3" name="r3" value="<?php echo $quest->r3 ?>">
												</div>
												<!--Resp3-->
												<!--Resp4-->
												<div class="form-group">
													<label for="r4">Resposta 4:</label>
													<input required type="text" class="form-control" id="r4" name="r4" value="<?php echo $quest->r4 ?>">
												</div>
												<!--Resp4-->
												<!--Reposta correta-->
												<div class="form-group">
													<label for="respostaCerta">Resposta correta:</label>
													<select required class="form-control" id="respostaCerta" name="respostaCerta">
														<option selected="true" disabled="disabled">Selecione</option>
														<option value="r1" <?php if($quest->respostaCerta=='r1') echo 'selected' ?>>Respota 1</option>
														<option value='r2' <?php if($quest->respostaCerta=='r2') echo 'selected' ?>>Respota 2</option>
														<option value='r3' <?php if($quest->respostaCerta=='r3') echo 'selected' ?>>Respota 3</option>
														<option value='r4' <?php if($quest->respostaCerta=='r4') echo 'selected' ?>>Respota 4</option>
													</select>
												</div>
												<!--Reposta correta-->
												<button type="submit" class="btn btn-primary">Atualizar</button>
												<a href="<?php echo base_url('avaliacao/questao') ?>" type="submit" class="btn btn-default">Cancelar</a>
											</form>
						<?php } 
										} ?>
						<!--Formulario de cadastro -->
					</div>
					<!--Formulario de cadastro -->
				</div>
			</div>
			
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#sidebar-wrapper -->
  <!--Footer-->
	<?php $this->load->view('layout/footer'); ?>
	<!--Footer-->
</body>

</html>