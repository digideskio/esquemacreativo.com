

<div class="modal fade" id="myModalLeads">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">¿Desea obtener un presupuesto para su proyecto?</h4>
            </div>
            <div class="modal-body">
                <form class="leads" id="myFormLeads" name="myFormLeads" novalidate="novalidate">
                    <div class="form-group">
                        <label>
                        Nombre<span style="color:red">*</span>
                        </label>
                        <input type="text" required="" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                        Apellido<span style="color:red">*</span>
                        </label>
                        <input type="text" required="" id="last_name" name="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                        Email<span style="color:red">*</span>
                        </label>
                        <input type="email" required="" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                        Empresa<span style="color:red">*</span>
                        </label>
                        <input type="text" required="" id="company" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                        Teléfono de Contacto<span style="color:red">*</span>
                        </label>
                        <input type="text" required="" id="phone" name="phone" class="form-control">
                    </div>
                    <input type="hidden" value="planificacion-estrategica" id="url" name="url">
                    <input type="hidden" value="0" id="referral" name="referral">
                    
                </form>
            </div>
            <div class="modal-footer">
               <button class="btn btn-primary" type="submit">Descargar Planes y Paquetes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

