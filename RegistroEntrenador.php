<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="RegistroEntrenador.css">
  <title>Formulario Registro</title>
</head>

<body>
  <form action="regentrenador.php" method="POST">
  <section class="form-register">
    <h4>Registra tu Entrenador</h4>
    <input class="controls" type="text" name="peso" id="peso" placeholder="Ingrese su peso">
    <input class="controls" type="text" name="estatura" id="estatura" placeholder="Ingrese su estatura en cm">
    <select required class="controls" name="entrenador">
      <option disabled selected>Elige un entrenador...</option>
      <option value="John Deo">John Deo</option> 
      <option value="Adam Phillips">Adam Phillips</option>
      <option value="James Alien">James Alien</option>
      <option value="Daddy Aoli">Daddy Aoli</option>
    </select>
    <select required class="controls" name="horario">
      <option disabled selected>Elige un horario...</option>
      <option value="7 - 9 hrs">7 - 9 hrs</option>
      <option value="9 - 11 hrs">9 - 11 hrs</option>
      <option value="11 - 13 hrs">11 - 13 hrs</option>
      <option value="13 - 15 hrs">13 - 15 hrs</option>
      <option value="15 - 17 hrs">15 - 17 hrs</option>
      <option value="17 - 19 hrs">17 - 19 hrs</option>
      <option value="19 - 21 hrs">19 - 21 hrs</option>
    </select>
    <select required class="controls" name="rutina">
      <option disabled selected>Elige tu rutina...</option>
      <option value="completa">completa</option>
      <option value="dividida">dividida</option>
      <option value="media">media</option>
      <option value="dura">dura</option>
    </select>
    <button type="submit" class="controls">Registrar</button>
    <br><br>
  </section>
  </form>
</body>
</html>