<?php include '_header.php' ?>


<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=><?php
echo date("d-m-Y H:i:s");
?></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
          	<div class="pull-right">
		        	<form class="navbar-form navbar-right" role="search">
        				<div class="form-group">
          					<input type="text" class="form-control" placeholder="Buscar usuario">
       					</div>
        				<button type="submit" class="btn btn-success glyphicon glyphicon-search"></button>
				    </form>
			</div> 
            <div class="panel-heading" style="padding-bottom:25px">
              <h3 class="panel-title">Usuario</h3>
            </div>
            
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
               
                <div class=" col-md-9 col-lg-9 "> 
                <form action="procesadatos.php" method="post">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Año de Nacimiento:</td>
                        <td><input type="text" name="añonacimiento" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Dirección</td>
                        <td><input type="text" name="direccion" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Población</td>
                        <td><input type="text" name="poblacion" value="" class="form-control" /></td>
                      </tr>
                   
                      <tr>
                        <td>Provincia</td>
                        <td><input type="text" name="provincia" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Teléfono</td>
                        <td><input type="text" name="telefono" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="" class="form-control" /></td>
                      </tr>
                      <tr>
                        <td>Contraseña</td>
                        <td><input type="password" name="password" value="" class="form-control" placeholder="password" /></td>
                      </tr>
                      <tr>
                        <td> </td>
                        <td><input type="password" name="password" value="" class="form-control" placeholder="confirmar password" /></td>
                      </tr>

				</form>
                                                  
                                         
                    </tbody>
                  </table>
                  <input type="checkbox" name="condiciones" value="1"> Aceptar condiciones de uso<br><br>
                  <button type="submit" class="btn btn-warning text-centre" style="margin-right:1px">Nuevo usuario</a>
                  <button type="submit" class="btn btn-primary text-centre" style="margin-left:2px">Guardar usuario</a>
                   
                </div>
              </div>
            </div>
            <div class= "col-md-5 col-md-offset-3">
             <!--  <form action="index.php" method="post">
                    <input type="checkbox" name="condiciones" value="1"> Aceptar condiciones de uso<br><br>
                    <input type="submit" name="enviar" value="Enviar"/>
              </form>
 -->
            </div>
             <br> 
             <br> 
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
   

<?php include '_footer.php' ?>