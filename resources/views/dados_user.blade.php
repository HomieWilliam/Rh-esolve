@extends('layouts.master')
@section('title')
    RHResolve - Dados de Utilizador
@endsection
@section('css')
    <style>
        .imagemPerfil{
            width: 150px;
            height: 150px;
            float: start;
            align-items: center;
            border-radius: 50%;
            margin-right: 25px;
            margin-bottom: 2px border black;
        }
    </style>
@endsection
@section('content')
    <!-- page content -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="">
                                        <div class="row">
                                            <div class="form-group">
                                                <a href="">
                                                    <img class="imagemPerfil" src="/img/avatars/addPhoto.png">
                                                </a>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="sel1" style="color: green">Data de Nascimento:</label>
                                                </div>

                                                <div class="col-md-2">
                                                    <select class="form-control" id="sel1" >
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="sel1" >
                                                        <option>Selecione Mes</option>
                                                        <option>Janeiro</option>
                                                        <option>Fevereiro</option>
                                                        <option>Marco</option>
                                                        <option>Abril</option>
                                                        <option>Maio</option>
                                                        <option>Junho</option>
                                                        <option>Julho</option>
                                                        <option>Agosto</option>
                                                        <option>Setembro</option>
                                                        <option>Outubro</option>
                                                        <option>Novembro</option>
                                                        <option>Dezembro</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="sel1" placeholder="1999">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" style="color: green">Sexo:</label>

                                                <div class="radio-inline">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">M
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">F
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input type="email" class="form-control" placeholder="Nacionalidade">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="password" class="form-control" placeholder="Cidade actual">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12" style="color: green">Contactos:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group col-md-2">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-earphone"></i>
                                            </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" placeholder="(+258) 840 000 000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-group col-md-2">
                                            <span class="input-group-addon">
                                                <i class="glyphicon-glyphicon-envelope"></i>
                                            </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" placeholder="exemplo@rhresolve.co.mz">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-group col-md-2">
                                            <span class="input-group-addon">
                                                <i class="glyphicon-glyphicon-link"></i>
                                            </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" placeholder="http://www.rhresolve.co.mz">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-row">
                                            <img src="/img/avatars/perfil.jpg" style="width: 150px; height: 150px; float: start; border-radius: 50%">
                                        </div>
                                        <div class="form-row">
                                            <label style="color: green; font-size: 24px;">Dados Pessoais</label>
                                            <label style="color: green; font-size: 12px;">afas sf sfasfasgsgsdgs sg  sa gsa gsd gs gsd gsd g sd</br></label>
                                        </div>
                                        <div class="form-group">
                                            <form role="form" method="POST" action="">
                                                <input type="submit" class="pull-right btn btn-sm btn-success" value="PROXIMO">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- page content -->
@endsection
@section('js')
    <script>
        $custom-file-text: (
            placeholder: (
            pt: "Seleccionar arquivoivo..."
        ),
        button-label: (
            pt: "Navegar"
        )
        );
    </script>
@endsection
