<html>
    <head>
       <title>formulario de registro</title>
    </head>
           
        <body>
            <h1>formulario de registro</h1>
            <form method="POST" action=""/>
            <table>
                <tr><td>NOMBRE:</td><td><input type="name" name="nombre"placeholder="escribe tu nombre"/></td></tr>
                <tr><td>APELLIDO M:</td><td><input type="name" name="apellidom" placeholder="apellido materno "/></td></tr>
                <tr><td>APELLIDO P:</td><td><input type="name" name="apellidop" placeholder="apellido paterno"/></td></tr>
                <tr><td>EDAD:</td><td><input type="num" name="edad" placeholder="escribe tu edad"/></td></tr>
                <tr><td>DIRECCION:</td><td><input type="name" name="direccion" placeholder="escribe tu direccion"/></td></tr>
                <tr><td>PROFESION:</td><td><input type="name" name="profesion"/></td></tr>
<select name="profesion">
<option>ingeniería </option>                
<option>ingenieria</option>
                <option>licenciatura</option>
                <option>arquitectura</option>
</select>
            </table>
            <input type="submit" name="submit" value="registrarme"/><input type="reset"/>
        </body>

</html>