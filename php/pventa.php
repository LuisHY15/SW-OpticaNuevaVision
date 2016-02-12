<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa  "></i> Stock </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-xs">
			<a href="admin.php?m=pventaAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Registrar Objeto </a>
		</div>
		<div class="col-sm-7 m-b-xs text-center">
			<a href="" class="btn btn-default btn-sm"><i class="fa fa-file" > Historial de Requisiciones</i></a>
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Articulo</th>
					<th>Marca</th>
					<th>Tipo</th>
					<th>Stock</th>
					<th>Precio</th>
					<th>Precio Venta</th>
					<th width="180"></th>
				</tr>
			</thead>
			<tbody>
<?php
/*
			if ( isset($_GET['del']) ){
				$del = mysql_real_escape_string($_GET['del']);
				mysql_query("DELETE FROM stock WHERE idstock='".$del."'");
			}

			if ( isset($_GET['buscar']) ){
				$buscar = mysql_real_escape_string($_GET['buscar']);
				$consulta  = "SELECT * FROM stock WHERE 
					(articulo LIKE '%".$buscar."%' OR 
						marca LIKE '%".$buscar."%' OR 
						tipo LIKE '%".$buscar."%' OR 
						stock LIKE '%".$buscar."%' OR 
						observaciones LIKE '%".$buscar."%') 
					ORDER BY articulo ASC";
					$url = "admin.php?m=stock&buscar=".$buscar;
			} else {
				$consulta  = "SELECT * FROM stock ORDER BY articulo ASC";
				$url = "admin.php?m=stock";
			}

##### PAGINADOR #####
$rows_per_page = 20;

if(isset($_GET['pag']))
	$page = mysql_real_escape_string($_GET['pag']);
else if (@$_GET['pag'] == "0")
	$page = 1;
else 
	$page = 1;

$num_rows 		= mysql_num_rows(mysql_query($consulta));
$lastpage		= ceil($num_rows / $rows_per_page);    		
$page     = (int)$page;
if($page > $lastpage){
	$page = $lastpage;
}
if($page < 1){
	$page = 1;
}
$limit 		= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
$consulta  .=" $limit";

$consulta = mysql_query($consulta);
##### PAGINADOR #####

			while($q = mysql_fetch_object($consulta)){ */
?>
				<tr>
					<td>Columna1</td>
					<td>Columna2</td>
					<td>Columna3</td>
					<td>Columna4</td>
					<td>Columna5</td>
					<td>Columna6</td>
					<td>
						<a href="admin.php?m=pventaModificar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
					    <a href="" class="btn btn-sm btn-info"><i class="fa fa-file"></i></a> &nbsp;
						<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>			

			</tbody>
		</table>
	</div>
	<footer class="panel-footer">
		<div class="row">
			<div class="col-sm-12 text-right text-center-xs">
				<ul class="pagination pagination-sm m-t-none m-b-none">
<?php
/*
	if($num_rows != 0){
		$nextpage = $page + 1;
		$prevpage = $page - 1;

		if ($page == 1) {
			echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>';
			
			echo '<li class="active"><a href="">1</a></li>';
			
			for($i= $page+1; $i<= $lastpage ; $i++){
				echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
			}

			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			}else{	
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		} else {
			echo '<li><a href="'.$url.'&pag='.$prevpage.'"><i class="fa fa-chevron-left"></i></a></li>';
			
			for($i= 1; $i<= $lastpage ; $i++){
				if($page == $i){
					echo '<li class="active"><a href="#">'.$i.'</a></li>';
				} else {
					echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
				}
			}
         
			if($lastpage >$page ){
				echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
			} else {
				echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
			}
		}
	} */
?> 
				</ul>
			</div>
		</div>
	</footer>
</section>