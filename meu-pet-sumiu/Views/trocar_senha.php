<?php

require_once "cabecalho.php"

?>
  <div class="content">
    <div class="container">
      <h1 style="margin-top: 60px; margin-bottom: 20px">Trocar Senha</h1>
      <div class="col-md-6 text-danger">
        <?php echo $msg[2]; ?>
      </div>
      <form class="row g-3" action="#" method="post">
        <input type="hidden" name="id_usuario" value="<?php echo $id ?>">
        <div class="col-md-6">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="col-md-6">
          <label for="confirmarsenha" class="form-label">Confirme a senha</label>
          <input type="password" class="form-control" id="confirmarsenha" name="confirmarsenha">
        </div>
        <div class="col-md-6 text-danger">
          <?php echo $msg[0]; ?>
        </div>
        <div class="col-md-6 text-danger">
          <?php echo $msg[1]; ?>
        </div>
        
      </form>
    </div>
  </div>
</body>
</html>