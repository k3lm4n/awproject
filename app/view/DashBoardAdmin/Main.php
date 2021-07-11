<div class="container-fluid row justify-content-md-center">

    <nav id="sidebarMenu" class=" col-2 col-md-2 sidebar d-lg-block bg-gray-800 text-white collapse" style="margin-top:55px;" data-simplebar>
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
                <a href="" target="_blank" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                        </span>
                        <span class="sidebar-text">Medico</span>
                    </span>

                </a>
            </li>

            <li class="nav-item">
                <a href="" target="_blank" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">

                        </span>
                        <span class="sidebar-text">Especialidades</span>
                    </span>

                </a>
            </li>
            <li class="nav-item">
                <a href="" target="_blank" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">

                        </span>
                        <span class="sidebar-text">Analises</span>
                    </span>

                </a>
            </li>
            <li class="nav-item">
                <span class=" nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon">
                        </span>
                        <span class="sidebar-text">Gerir Consultas</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-text">Orientados e N/ a Analise</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-text">Determinar Analise</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-text">Busca por Idade/Em Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-text">Percentagens</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="sidebar-text">Consultas Sem Analise</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </nav>


    <div id="gereMed" class="col-auto col-md-auto ms-10">
        <div class="row">
            <div class="col-12">
                <div class=" row mb-4 card">
                    <div class="card-header py-3 bg-primary bg-dark">
                        <p class=" text-primary text-danger m-0 font-weight-bold font-base">
                            Adicionar Medico
                        </p>
                    </div>
                    <div class=" card-body shadow">
                        <div class="">
                            <form id="AddMed">
                                <div class=" row g-2 ">
                                    <div class=" col-md-6">
                                        <label for="Nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nomemed" name="nome" required>

                                    </div>
                                    <div class=" col-md-6">
                                        <label for="SobreNome" class="form-label">Sobrenome</label>
                                        <input type="text" class="form-control" id="sobrenomemed" name="sobrenome" required>
                                    </div>
                                </div>
                                <div class="row mb-md-4 mt-md-2">
                                    <div class="col-md-2"></div>
                                    <div class=" col-md-4">
                                        <label class="form-check-label" for="">Genero</label>
                                        <select id="sexomed" class="form-select" aria-label="Default select example">
                                            <option selected>Sexo</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="">Experiencia</label>
                                        <input type="date" id="exper" class=" form-control" name="dataexp" id="" required>
                                    </div>

                                </div>
                                <div class="row mb-md-2 mt-md-2">
                               
                                    <div class=" col-md-6">
                                        <label class="form-check-label" for="">Centro Registrado</label>
                                        <input type="text" id="centro" class="form-control" id="centReg" name="endereco" placeholder="" required>
                                    </div>
                                    <div class=" col-md-6">
                                        <label class="form-check-label" for="">Especialidade</label>
                                        <input type="text" class="form-control" id="espe" name="espe" placeholder="Especialidade" required>
                                    </div>

                                </div>
                                <div class="row mb-md-4">
                                    <div class=" col-md-4">
                                        <label class="form-check-label" for="">Username</label>
                                        <input type="text" name="user" id="user" class=" form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="">Password</label>
                                        <input type="password" class=" form-control" name="" id="pass1" placeholder="Digite uma Password" required>
                                    </div>
                                    <div class=" col-md-4 mt-2">
                                        <label class="form-check-label" for=""></label>
                                        <input type="password" class="form-control" id="pass2"  name="pass1" placeholder="Repita a sua Password" required>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" col-md-3 container" style=" float:left;">
                                        <button type="reset" class=" btn btn-outline-danger"> Voltar</button>
                                    </div>
                                    <div class=" col-md-3 container" style=" float:right;">
                                        <button type="submit" id="dadomed" class="btn btn-outline-danger">Continuar</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row card mb-4 shadow">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary m-0 font-weight-bold">Medicos</p>
            </div>
            <div class="card-body px-6">
                <div class="row col-auto">
                    <div class="col-md-10 text-nowrap">
                    </div>
                    <div class="col-md-2">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter">
                            <label><input type="search" id="buscaMed" onkeyup="showHint(this.value)" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Procurar" /></label>
                        </div>
                    </div>
                </div>
                <div class=" mt-2 table-responsive" id="dataTable">
                    <table class=" table table-hover px-md-10" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Experiencia</th>
                                <th>Sexo</th>
                                <th>Especialidade</th>
                                <th>Centro Registrado</th>
                                <th>Accao</th>
                            </tr>
                        </thead>
                        
                        <tbody id="GetMedicos">
                           
                           

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Experiencia</th>
                                <th>Sexo</th>
                                <th>Especialidade</th>
                                <th>Centro Registrado</th>
                                <th>Accao</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>


    </div>
    <div id="gereEsp" class="col-auto col-md-auto ms-10">
        <div class=" row mb-4 card">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary text-danger m-0 font-weight-bold">
                    Adicionar Especialidade
                </p>
            </div>
            <div class=" card-body card-body px-6 ">
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
                        <input type="text" value="" class="form-control" placeholder="DIA/MES/ANO" required />

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
        <div class="row card mb-4 shadow">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary m-0 font-weight-bold">Especialidades</p>
            </div>
            <div class="card-body px-md-10">
                <div class="row col-auto">
                    <div class="col-md-10 text-nowrap">
                    </div>
                    <div class="col-md-2">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter">
                            <label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Procurar" /></label>
                        </div>
                    </div>
                </div>
                <div class=" mt-2 table-responsive" id="dataTable">
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
    <div id="gereAnl" class="col-auto col-md-auto ms-10">
        <div class=" row mb-4 card">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary text-danger m-0 font-weight-bold">
                    Adicionar Analises
                </p>
            </div>
            <div class=" card-body ">
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
                        <input type="text" value="" class="form-control" placeholder="DIA/MES/ANO" required />

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
        <div class="row card shadow mb-4">
            <div class="card-header py-3 bg-primary bg-dark">
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
                <div class=" mt-2 table-responsive" id="dataTable">
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
    <div id="gereConsultas" class="col-auto col-md-auto ms-10">
        <div class="row card shadow mb-4">
            <div class="card-header py-3 bg-primary bg-dark">
                <p class="text-primary m-0 font-weight-bold">Consultas</p>
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
                <div class=" mt-2 table-responsive" id="dataTable">
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