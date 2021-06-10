<div class="row">
    <div class=" d-inline-flex col-md-4 container ">
        <fieldset>
            <legend style="text-align:center; font-family:AppleGothic;"> <strong> Marcar Consulta</strong></legend>
            <form method="POST" action="<?php echo DIRPAGE . 'RegAdmin/Registrar'; ?>" name="formReg" id="formReg">
            <div class="mb-3 mt-2 col-md-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Paciente</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-check-label" for="">Data de Marcacao</label>
                    <input type="text" value="" class="form-control" placeholder="DIA/MES/ANO" required />

                </div>
                <div class="mb-3 mt-2 col-md-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Especialidade</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-3 mt-2 col-md-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Medico</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
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
    <div class=" d-inline-flex col-md-5 container ">
        <fieldset>
            <legend style="text-align:center; font-family:AppleGothic;"> <strong> Pacientes no Sistema</strong></legend>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Endereco</th>
                    </tr>
                </thead>
                <tbody>

                    
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
</div>