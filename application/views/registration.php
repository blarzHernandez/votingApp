<div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">User Registration</h4>
        <div id="oculto"></div>
      </div>

    <form role="form"  id="userRegistration" method="POST" class="form-horizontal" action="">
  <fieldset> 
     <div class="modal-body">
           
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Names</label>
                                    <div class="col-md-8">
                                    <input class="form-control" placeholder="names" data-bv-notempty="true"                                    
                                           name="names" id="names" type="text" required>
                                    </div>                                    
                                </div>   
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Surnames</label>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="Surnames" name="surnames" id="surnames" type="text" required >
                                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="username" name="username" id="username" type="text" required >
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-md-8">
                                        <input class="form-control" placeholder="password" name="password" type="password" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Confirm Password:</label>
                                    <div class="col-md-8">
                                     <input class="form-control" placeholder="Repetir Clave" name="confirmPassword" id="confirmPassword" type="password" required >
                                    </div>
                                </div>
                                 
      </div>
    </fieldset>
</form>
      <div class="modal-footer">
         
            <button type="button" id="sign-up" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-off"></span> Salir</button>
            <button type="button" id="btn1" class="btn btn-success ladda-button" data-style="expand-left"  ><span class="glyphicon glyphicon-send"></span> Enviar</button>
        
      </div>
      <script type="text/javascript">

      $(document).ready(function(){
        
        //---------Event Click-----------------
        $("#sign-up").click(function (e) {
            e.preventDefault();
            console.log(e);
            //Call AJAX
          /*  $.ajax({
                url     :"<?php echo base_url("home/userRegister");?>",
                type    :"POST",
                datatype:'json',
                data    :$("form#userRegistration").serialize(),            
                success :function(data){
                   var obj = JSON.parse(data);//Parser data

                    if(obj.response === 'error'){//Response Error                    

                         mensajeError("oculto",obj.respuesta);
                    }
                    else{
                       //Success
                       sendMailAdmin();
                       mensajeOk("oculto",obj.respuesta);
                       $("form#registerUserNew").resetForm();
                    }
                    load.stop();//stop loading
                },
                error   : function(jqXHR,codStatus,textThrow){
                    //Call function 
                    var mensa = catchError(jqXHR.status,textThrow);
                    mensajeError("oculto",mensa);
                    load.stop();//stop loading
                }
            });*///end AJAx
            
            
        });//End event click
     
        var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};

    });//End DOM
      </script>