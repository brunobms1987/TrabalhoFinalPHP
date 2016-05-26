<script>
    $(document).ready(function () {
        $("#gerador").change(function () {
            if ($(this).is(":checked")) {
                $("#senha").prop("disabled", true);
                $("#senha").prop("required", false);
            }
            else {
                $("#senha").prop("disabled", false);
                $("#senha").prop("required", true);
            }
        });
    });

</script>

<div class="container-fluid">
    <div class="container">
        <form action="index.php?pag=6&acao=2" method="POST"  enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" required="">
                </div>
                <div class="col-md-4">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required="">
                </div>
            </div>   

            <div class="row">
                <div class="col-md-4" >
                    <label for="datanasc">Data de nasc</label>
                    <input type="date"  class="form-control" id="datanasc" name="datanasc" required="">
                </div> 
            </div>   
            <div class="row">
                <div class="col-md-4" >
                    <label for="email">Email</label>
                    <input type="email"  class="form-control" id="email" name="email" required="">    
                </div> 
            </div>   

            <div class="row">

                <div class="col-md-3" >
                    <label for="senha">Senha</label>
                    <input type="password"  class="form-control"  id="senha" name="senha" required="">
                </div>               
                <div class="col-md-4 " > 
                    <div class="checkbox">

                        <label for="gerador" >
                            <input type="checkbox" id="gerador" name="gerador" > Gerar automaticamente
                        </label>
                    </div>

                </div>               

            </div>   
            <div class="row">
                <div class="col-md-12">
                    <label for="tipo">Tipo de usuário</label>
                    <label for="tipo">Tipo de usuário</label> <br>
                    <label>  <input type="radio"  id="tipo" name="tipo"  value="1" > Administrador </label>
                    <label>   <input type="radio"  id="tipo" name="tipo" value="2" >  Comum </label>
                </div>                
            </div>   
            <div class="row">
                <div class="col-md-8">

                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" class="form-control" name="descricao">
                        
                    </textarea>   
                </div>                
            </div>   
            <div class="row">
                <div class="col-md-12">
                    <label for="arquivo">Arquivo</label>
                    <input type="file"  id="arquivo" name="arquivo" >    
                </div>                
            </div>  
    </div>
</div>
<br>
<br>
<a href="index.php" class="btn btn-danger"> Cancelar e Voltar </a>
<input type="submit"  class="btn btn-success" value="Cadastrar">

</form>
