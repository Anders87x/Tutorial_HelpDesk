<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
  <!DOCTYPE html>
  <html>
  <?php require_once("../MainHead/head.php"); ?>
  <title>AnderCode</>::Detalle Ticket</title>
  </head>

  <body class="with-side-menu">

    <?php require_once("../MainHeader/header.php"); ?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php"); ?>

    <!-- Contenido -->
    <div class="page-content">
      <div class="container-fluid">

        <header class="section-header">
          <div class="tbl">
            <div class="tbl-row">
              <div class="tbl-cell">
                <h3>Detalle Ticket</h3>
                <ol class="breadcrumb breadcrumb-simple">
                  <li><a href="#">Home</a></li>
                  <li class="active">Detalle Ticket</li>
                </ol>
              </div>
            </div>
          </div>
        </header>
        
        <div class="box-typical box-typical-padding">
          <div class="row">
              <div class="col-lg-6">
                <fieldset class="form-group">
                  <label class="form-label semibold" for="tick_titulo">Titulo</label>
                  <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
                </fieldset>
              </div>
            </form>
          </div>

        </div>

        <section class="activity-line" id="lbldetalle">

        </section>
      </div>
    </div>
    <!-- Contenido -->

    <?php require_once("../MainJs/js.php"); ?>

    <script type="text/javascript" src="detalleticket.js"></script>

  </body>

  </html>
<?php
} else {
  header("Location:" . Conectar::ruta() . "index.php");
}
?>