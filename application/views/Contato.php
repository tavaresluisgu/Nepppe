<div class="container">
  <div class="row">
    <h1 class="red-text">Formulário para contato</h1>
    <?php
          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open_multipart('Contato/enviar_email');
    ?>
      <div class="row">
        <div class="input-field col s6">
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input id="assunto" type="text" class="validate">
          <label for="assunto">Assunto</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input id="texto" type="text" class="validate">
          <label for="texto">Mensagem</label>
        </div>
      </div>

    <button type="submit" class="btn btn-lg btn-success btn-block">Enviar</button>    
    <?php echo form_close(); ?>
  </div>

</div>