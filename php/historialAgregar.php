<?php

if ( isset($_POST['']) ){

	$nombre 	    = mysql_real_escape_string($_POST['nombre']);
	$correo 	    = mysql_real_escape_string($_POST['correo']);
	$nacimiento     = mysql_real_escape_string($_POST['nacimienti']);
	$sexo  	        = mysql_real_escape_string($_POST['sexo']);
	$edad  	        = mysql_real_escape_string($_POST['edad']);
	$domicilio  	= mysql_real_escape_string($_POST['domicilio']);
	$telefono  		= mysql_real_escape_string($_POST['telefono']);
	$colonia  	    = mysql_real_escape_string($_POST['Colonia']);
	$cp  		    = mysql_real_escape_string($_POST['cp']);
	$celular  	    = mysql_real_escape_string($_POST['celular']);
	$observacion  	= mysql_real_escape_string($_POST['observacion']);
	$credito  		= mysql_real_escape_string($_POST['credito']);
	$pfecha  		= mysql_real_escape_string($_POST['pfecha']);

	if ( mysql_query("") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>

<script type="text/javascript">
     $(function () {
     $('#datetimepicker2').datetimepicker({
           locale: 'ru'
        });
    });
</script>

		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=historial" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<label class="col-lg-12 control-label "><i class="pull-left">Datos personales</i></label>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Nombre</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Correo</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="correo" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Nacimiento</label>
								<div class="col-lg-9 col-md-9 "><input type="text" name="nacimiento" class="form-control" placeholder=""></div>
							</div>
							 <div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Sexo</label>
								<div class="col-lg-4 col-md-3">
									<select class="form-control" name="sexo">
										<option></option>
										<option>Masculino</option>
										<option>Femenino</option>
									</select>
								</div>
								<label class="col-lg-2 col-md-3 control-label">Edad</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="edad" class="form-control" placeholder=""></div>
							</div>
						</div>	
					</div>
					<div class="row">
						<label class="col-lg-12  control-label "><i class="pull-left">Datos de localizacion</i></label>
					</div>
					<div class="row">
						<div class="col-md-6" >
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Domicilio</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="domicilio" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Telefono</label>
								<div class="col-lg-9 col-md-9 "><input type="text" name="telefono" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
                            <div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Colonia</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="colonia" class="form-control" placeholder=""></div>
								<label class="col-lg-3 col-md-3 control-label">C.P.</label>
								<div class="col-lg-3 col-md-3"><input type="text" name="cp" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Celular</label>
								<div class="col-lg-9  col-md-9 "><input type="text" name="celular" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<label class="col-lg-12 control-label "><i class="pull-left">Datos de historial</i></label>
					</div>
					<div class="row">
						<div class="col-md-6" >
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Observacion</label>
								<div class="col-lg-9 col-md-9"><input type="text" name="observacion" class="form-control" placeholder=""></div>
							</div>
							
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 col-md-3 control-label">Credito</label>
								<div class="col-lg-3 col-md-3">
									<select class="form-control" name="credito">
										<option></option>
										<option>Si</option>
										<option>No</option>
									</select>
								</div>
								<label class="col-lg-3 col-md-3 control-label">Proximo Examen</label>
								<div class='col-lg-3 col-md-3 input-group date' id='datetimepicker2'>
                    				<input type='text' class="form-control" name="pfecha"/>
                  					 <span class="input-group-addon">
                       				    <span class="fa fa-calendar"></span>
                    				</span>
                                </div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
