<div class="row clearfix">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="header">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-12">
						<h2>SOLICITUD</h2>
					</div>
				</div>

			</div>
			<div class="body">
				<div class="row clearfix">
                       <div class="col-sm-3">
                                
                                   <label>Numero de la Solicitud</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['id']); ?>
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Nombre Solicitante</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['NombreSolicitante']); ?>
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Fecha Solicitud</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['FechaSolicitud']); ?>
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Proceso</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['Proceso']); ?>
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Tipo Solicitud</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['TipoSolicitud']); ?>
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Codigo</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['Codigo']); ?>
			&nbsp;
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Versión Cambiar</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['VersionCambiar']); ?>
			&nbsp;
			                              
                        </div>
                        <div class="col-sm-3">
                                
                                   <label>Tipo Documento</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['TipoDocumento']); ?>
			&nbsp;
			                              
                        </div>
                        
                        <div class="col-sm-3">
                                
                                   <label>Ejecucion Cambio</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['EjecucionCambio']); ?>
			&nbsp;
			                              
                        </div>
                        <div class="col-sm-3">
                        	 <label>Aprobado</label> <br>
                             <?php echo h($solicitude['Solicitude']['Aprobado']); ?>
			&nbsp;
		                  
                        </div>
                        <div class="col-sm-12">
                                
                                   <label>Descripción</label> <br>
		
			                     <?php echo h($solicitude['Solicitude']['Descripcion']); ?>
			&nbsp;
			                              
                        </div>
                        <div class="col-sm-12">
                        <label>Observaciones</label><br>
                             <?php echo h($solicitude['Solicitude']['Observaciones']); ?>&nbsp;
		                  
                        </div>

                </div>
			</div>
		</div>
	</div>
</div>
