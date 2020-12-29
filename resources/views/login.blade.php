<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fly Education</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>


<style>
  #username-error {
    display: none;
  }

  #password-error {
    display: none;
  }

  #form-error {
    display: none;
  }
</style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 border">
              <div class="brand-logo">
                <img
                  src="https://static.wixstatic.com/media/b73633_d70fe123ce904c00beb774c66cd71fd4~mv2.jpg/v1/fill/w_360,h_160,al_c,q_80,usm_0.66_1.00_0.01/LOGO%20IAAC.webp"
                  alt="logo">
              </div>
              <h4>Bienvenido a la plataforma educativa</h4>
              <h6 class="font-weight-light">Ingresa para continuar</h6>
              <form class="cmxform" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" id="username" class="form-control form-control-lg " name="username"
                    placeholder="Usuario" aria-invalid="true">
                  <label id="username-error" class="error mt-2 text-danger" for="username">Por favor ingrese su
                    usuario</label>
                </div>
                <div class="form-group ">
                  <input type="password" class="form-control  form-control-lg" name="password" id="password"
                    placeholder="Contraseña" aria-invalid="true">
                  <label id="password-error" class="error mt-2 text-danger" for="password">Por favor ingrese su
                    contraseña</label>
                </div>
                <div class="mt-3">
                  <input type="submit"
                    class=" btn-submit btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    value="INGRESAR">
                  <label id="form-error" class="error mt-2 text-danger">Credenciales erroneas</label>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Mantener ingreso
                      <i class="input-helper"></i></label>
                  </div>
                  <a href="#" class="auth-link text-black">Olvidaste tu contraseña?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  No tienes una cuenta? <a href="register.html" class="text-primary">Contactate</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- harcodeado -->
  <script src="js/user-login-validation.js"></script>
  <!-- end harcodeado -->

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/jquery-validation/jquery.validate.min.js"></script>
  <script src="vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="js/form-validation.js"></script>
  <script src="js/bt-maxLength.js"></script>

</body>

</html>