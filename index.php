
<?php
include("header.php");
require_once("ControleRemoto.php");

// echo "<h1>Projeto Controle Remoto</h1>";

$c = new ControleRemonto();
$c->ligar();
$c->maisVolume();
$c->abrirMenu();
$c->menosVolume();
$c->abrirMenu();

?>



<body>
    <div id="controle">

    </div>



    <section class="container my-5 d-flex justify-content-center">
    <div class="controle-remoto w-25">
    
    <button type="button" class="btn btn-danger py-1 my-2  m-auto w-50 d-block" id="btnLigar">Ligar</button>
    <button type="button" class="btn btn-info w-50 my-3" id="btn-menu">Menu</button>
    <div class="d-flex justify-content-center flex-1">
    <div class="mx-3 my-3">
    <button type="button" class="btn btn-secondary w-100" id="btn-mais"> &plus; </button>
    <button type="button" class="btn btn-secondary w-100" id="btn-menos">&minus;</button>
    </div>
    <div class="mx-3 my-3">
    <button type="button" class="btn btn-secondary w-100" id="btn-mais">&and;</button>
    <button type="button" class="btn btn-secondary w-100" id="btn-menos">&or;</button>
    </div>
    </div>

    <button type="button" class="btn btn-secondary w-50">Mudo</button>
    <button type="button" class="btn btn-secondary w-50">Play</button>
    <button type="button" class="btn btn-secondary w-50">Pause</button>

    </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>