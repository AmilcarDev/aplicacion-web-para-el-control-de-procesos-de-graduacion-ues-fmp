    <div class="modal fade modal-slide-in-right" aria-hidden="true" 
    role="dialog" tabindex="-1" id="verpdfs1-<?php echo e($gs->idgrupsol); ?>">
  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background:#00a65a; color:white">
          <h4 class="modal-title">Aministrar documentación </h4>
        </div>
        <div class="modal-body">


              <div  hidden="" class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                <div class="form-group"> 
                <label>idgrupsol</label>
                    <div class="input-group">                   
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input readonly="" type="text" value="<?php echo e($gs->idgrupsol); ?>" name="idsolicitud" id="idsolicitud" class="form-control"  >
                    </div>          
                </div>
                </div>
                <div hidden="" class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
                <div class="form-group"> 
                <label>idgrupo</label>
                    <div class="input-group">                   
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input readonly="" type="text" value="<?php echo e($grupos->idgrupo); ?>" name="idgrupo" id="idgrupo" class="form-control"  >
                    </div>          
                </div>
                </div>

          
            
        
          
           <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
            <div class="form-group"> 
            <label>Documentos Disponibles</label>
                                 
                     <?php if($gs->solicitudcoor!=""): ?>   
                     
                  <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i><a href="<?php echo e(asset('storage/solicitudcoor/'.$gs->solicitudcoor)); ?>" target="_blank" >
                      <label>Solicitud Coordinador</label> </a></span>
                       <br />
                      <?php endif; ?>
                      <?php if($gs->solicituddir!=""): ?>   
                     
                  <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i><a href="<?php echo e(asset('storage/solicituddir/'.$gs->solicituddir)); ?>" target="_blank" >
                      <label>Solicitud Director</label> </a></span>
                       <br />
                      <?php endif; ?>
                  
                   <?php if($gs->pdf!=""): ?>   
                     
                  <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i><a href="<?php echo e(asset('storage/documentosenviados/'.$gs->pdf)); ?>" target="_blank" >
                      <label>Documento Adjunto</label> </a></span>
                       <br />
                      <?php endif; ?>

                  <?php if($gs->pdfrecibido!=""): ?> 
                    
                  <span class="input-group-addon"><i class="fa fa-file-pdf-o"></i><a href="<?php echo e(asset('storage/documentosrecibidos/'.$gs->pdfrecibido)); ?>" target="_blank" ><label>Acuerdo Junta Directiva</label></a></span>
                <br /> 
                   <?php endif; ?>     
              
                         
            </div>
            </div>
  <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" >
                <div class="form-group"> 
                <label>Número de Acuerdo</label>
                    <div class="input-group">                   
                        <span class="input-group-addon"><i class="fa fa-info"></i></span>
                        <input type="tex" readonly="" id="nacuerdo" name="nacuerdo" value="<?php echo e($gs->nacuerdo); ?>" placeholder="Número de acuerdo" class="form-control">
                    </div>          
                </div>
                </div>  

                             

               
                <div  class="col-lg-6 col-md-6 col-xs-6 col-sm-6" >
           <div class="form-group" > 
               <label>Estado (*)</label>          
             <div class="input-group">      
                         
                <span class="input-group-addon"><i class="fa fa-child"></i></span>
                    <select name="aprobado" id="aprobado" class="form-inline form-control">
                   <?php if($gs->estado==1 ): ?> 
                   <option value="0">Aprobado</option>
                   <?php else: ?>
                   <?php if($gs->estado==7 ): ?> 
                    <option value="1">Denegado</option>
                    <?php endif; ?>
                    <?php endif; ?>
                    </select>
                </div> 
                  </div>  
                </div>
              
              
           
       
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="rel();" data-dismiss="modal">Cerrar</button>
          
         
        </div>
      </div>
    </div>
   <?php echo e(Form::Close()); ?>

    </div>