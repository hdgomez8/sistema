Datos en comun entre create y edit
<br>

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
<br>

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}" id="ApellidoMaterno">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" id="Correo">
<br>

<label for="Foto"></label>
{{isset($empleado->Foto)?$empleado->Foto:''}}
<img src="{{asset('storage').'/'.(isset($empleado->Foto)?$empleado->Foto:'')}}" alt="">
<input type="file" name="Foto" id="Foto">
<br>

<input type="submit" value="Guardar Datos">
<br>