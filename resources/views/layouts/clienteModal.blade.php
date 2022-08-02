         <div class="modal fade modal" tabindex="-1" role="dialog" id="add_clientes">
            <div class="modal-dialog" role="document"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <p class="modal-title" >Solicitar una cita</p><br>
                        <p class="glyphicon glyphicon-hand-right">Recuerda guardar tu folio, POR FAVOR</p>
                    </div>
                    <div class="modal-body">
                        {{-- folio --}}
 
                          {{-- <input type="text" name="" placeholder="Folio" class="form-control" v-model="folio">  --}}
                    

                        <label>Tú # folio es: </label ><span>@{{ofolios}} </span><span class="glyphicon glyphicon-tags"></span>
                        

                         {{-- folio --}}
                        <input type="text" name="" placeholder="Nombre" class="form-control" v-model="nombre"> 
                       
                        <input type="text" name="" placeholder="Apellido Paterno" class="form-control" v-model="apellidop"> 
                        <input type="text" name="" placeholder="Apellido Materno" class="form-control" v-model="apellidom"> 
                        <input type="text" name="" placeholder="Número Teléfonico" class="form-control" v-model="numero_tel"> 
                        <input type="e-mail" name="" placeholder="E-mail" class="form-control" v-model="correo">
                        <input type="text" name="" placeholder="País" class="form-control" v-model="pais"> 
                        <input type="text" name="" placeholder="Estado" class="form-control" v-model="estado"> 
                        <input type="text" name="" placeholder="Localidad" class="form-control" v-model="localidad">  
                         <input type="text" name="" placeholder="Comentario" class="form-control" v-model="comentario"> 

                    

                  </div>

                  <div class="modal-footer"> 

                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>

                         <button class="btn btn-success" v-on:click="agregarCliente()"><span class="glyphicon glyphicon-send"></span> Enviar</button>

                 </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

        </div><!-- /.modal --> 