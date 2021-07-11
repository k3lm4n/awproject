<div class="container-fluid row justify-content-md-center">
    <div class="shadow">
        <nav id="sidebarMenu" class="col-2 col-md-2 sidebar d-lg-block bg-gray-800 text-white collapse" style="margin-top:55px;" data-simplebar>
            <div class="sidebar-inner px-4 pt-3">
                <div class="
            user-card
            d-flex d-md-none
            align-items-center
            justify-content-between justify-content-md-center
            pb-4
          ">
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item active">
                    <a href="" class="nav-link">
                        <span class="sidebar-icon">


                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="gereConsultas" target="_blank" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                            </span>
                            <span class="sidebar-text">Consultas</span>
                        </span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="gereAnl" target="_blank" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">

                            </span>
                            <span class="sidebar-text">Historico</span>
                        </span>

                    </a>
                </li>

            </ul>

        </nav>
    </div>

    <div id="gereConsultas" class="norma col-auto col-md-auto ms-10">

        <div class="row card mb-4 shadow">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary m-0 font-weight-bold">Pacientes</p>
            </div>
            <div class="card-body px-md-8">
                <div class="row col-auto">
                    <div class="col-md-8 text-nowrap">
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter">
                            <label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Procurar" /></label>
                        </div>
                    </div>
                </div>
                <div class=" mt-2 table-responsive" id="dataTable">
                    <table class=" table table-hover px-md-10" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Office</th>
                                <th scope="col">Age</th>
                                <th scope="col">Start date</th>
                                <th scope="col">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"> Airi Satou </td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Position</strong></td>
                                <td><strong>Office</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Start date</strong></td>
                                <td><strong>Salary</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>


    </div>

    <div id="gereAnl" class="norma col-auto col-md-auto ms-10">
        <div class=" row mb-4 card shadow">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary text-danger m-0 font-weight-bold">
                    Adicionar Analises
                </p>
            </div>
            <div class=" card-body px-md-10">
                <legend style="text-align:center;"> <strong> </strong></legend>
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
                    <div class="mb-3 mt-2 col-md-12">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="">Data de Nascimento</label>
                        <input type="" value="" class="form-control" placeholder="DIA/MES/ANO" required />

                    </div>
                    <div class=" mb-3">
                        <label class="form-check-label" for="">Endereco</label>
                        <input type="Endereco" class="form-control" id="endereco" name="endereco" placeholder="Provincia, Municipio, Barirro, Rua" required>
                    </div>


                    <div class="">
                        <div class=" col-md-3 container" style=" float:left;">
                            <button type="reset" class=" btn btn-outline-danger"> Voltar</button>
                        </div>
                        <div class=" col-md-3 container" style=" float:right;">
                            <button type="submit" class="btn btn-outline-danger">Continuar</button>
                        </div>

                    </div>
                </form>


            </div>
        </div>



    </div>
    <div class="norma col-auto col-md-auto ms-10">
        <div class="row card shadow mb-4">
            <div class="card-header py-3 bg-primary bg-dark ">
                <p class="text-primary m-0 font-weight-bold">Analises</p>
            </div>
            <div class="card-body px-md-8">
                <div class="row col-auto">
                    <div class="col-md-10 text-nowrap">
                    </div>
                    <div class="col-md-2">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter">
                            <label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Procurar" /></label>
                        </div>
                    </div>
                </div>
                <div class="     mt-2 table-responsive" id="dataTable">
                    <table class=" table table-hover px-md-10" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Airi Satou
                                </td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><strong>Position</strong></td>
                                <td><strong>Office</strong></td>
                                <td><strong>Age</strong></td>
                                <td><strong>Start date</strong></td>
                                <td><strong>Salary</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>


</div>