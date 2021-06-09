<div class="row">
    <div class=" d-inline-flex col-md-4 container ">
        <fieldset>
            <legend style="text-align:center; font-family:AppleGothic;"> <strong> Marcar Consulta </strong></legend>
            <form method="POST" action="<?php echo DIRPAGE . 'RegAdmin/Registrar'; ?>" name="formReg" id="formReg">
                <div class=" row g-2">
                    <div class=" col-auto">
                        <label for="Nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>

                    </div>
                    <div class=" col-auto">
                        <label for="SobreNome" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                    </div>
                </div>
                <div class="mb-3 mt-2 col-md-11">
                    <label class="form-check-label" for="">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class=" row g-2 mb-3">
                    <div class=" col-auto">
                        <label class="form-check-label" for="">Password</label>
                        <input type="password" class="form-control" id="pass1" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-auto">
                        <label class="form-check-label" for="exampleCheck1"></label>
                        <input type="password" class="form-control" id="pass2" onblur=validarSenha() placeholder="Confirmar Password" required>
                    </div>
                </div>
                <div class="">
                    <div class=" col-md-3 container" style=" float:left;">
                        <a href="" class="btn btn-outline-danger">Voltar</a>
                    </div>
                    <div class=" col-md-3 container" style=" float:right;">
                        <button type="submit" class="btn btn-outline-danger">Continuar</button>
                    </div>

                </div>


            </form>
        </fieldset>
    </div>
    <div class=" d-inline-flex col-md-4 container ">
        <fieldset>
            <legend style="text-align:center; font-family:AppleGothic;"> <strong> Consultas Marcadas</strong></legend>
            
        </fieldset>
    </div>
</div>