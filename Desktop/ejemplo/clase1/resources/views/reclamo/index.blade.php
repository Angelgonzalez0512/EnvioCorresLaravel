<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</head>
<body>
    <div class="container pt-4 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow p-2">

                <form action="{{route('reclamo.store')}}" autocomplete="off" method="post">
                    @csrf
                   <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form3Example1" name="nombre" class="form-control" />
                          <label class="form-label" for="form3Example1">Nombres</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form3Example2" name="apellido" class="form-control" />
                          <label class="form-label" for="form3Example2">Apellidos</label>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" name="email" class="form-control" />
                      <label class="form-label"  for="form3Example3">Correo Electronico</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example4" name="direccion" class="form-control" />
                      <label class="form-label"  for="form3Example4">Direccion</label>
                    </div>
                  
                    <!-- Checkbox -->
                    
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Registrar</button>
                  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                  
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>
                  
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>
                  
                      <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>