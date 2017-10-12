@extends('layouts.master')
@section('title')
    RHResolve - Inicial
@endsection
@section('css')

    <style>
        #rodape{position:absolute; top: 427%; z-index: 2;}
        #Lua{position: absolute; top: 200px;}
        #scrollD{ position: absolute; top:-80px; left: 50%; width: 2.5%; height:10px; z-index: 4;}
        #scrollD:hover{background : linear-gradient(to right, #11998e  , #38ef7d); transition: all .4s linear; cursor: pointer; border-radius: 15px;}
        .containerr{position: relative; } #Cont{   margin-top: 0; height: 100px;}
        #Meialua{position: absolute; top:-180px; height: 100px; width: 100px; left: 1%;}
        #Cont img{height: 60px; width: 40px;}
        #Lua{margin-top: 10%;}
        #Lua img:hover{ color: black; width: 120px; height: 190px; transition: all .4s linear;}
        #Lua img{height: 180px; }
        #SlideText{position:absolute; top: 29%; left: 7%;}
        #SlideText h4{font-family:"Segoe UI regular";  color: white; line-height: 25px; letter-spacing: 0.1em;}
        #scrolTop{ position: absolute; height: 50px; width: 50px;  top: 95%; left: 89%;}


    </style>

@endsection
@section('content')
    <div id="Lua">

    </div>
    <!-- page content -->
    <div class="Corpo">

        <div id="Slide1">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="container" style="margin-left:95%; ">

                </div>

                <div class="carousel-inner" role="listbox">

                    <div class="item active" id="contt">
                        <img class="img-responsive" src="img/fundos/01.jpg" alt="Slider Image">
                        <div class="containerr" id="Cont">
                            <a href="#vagas" class="scroll"><img src="img/icons/Scrolldown.png" id="scrollD"></a>
                            <div class="carousel-centered">

                            </div>
                        </div>
                        <div id="Lua">
                            <img src="img/icons/MeiaLua.png" id="Meialua" class="Meialua" for="check">
                            <input type="checkbox" id="check">
                        </div>

                        <div id="SlideText" class="main">
                            <h4 class="demo1">All <span class="rotate">you get is this text and a mostly barebones HTML</span> document</h4>
                            <h4 class="demo2"> get <span class="rotate">is this text and a mostly barebones HTML </span>document.</h4>
                            <h4 class="demo3">All <span class="rotate">you get is this text and a mostly barebones HTML </span> document</h4>
                        </div>

                    </div>
                    <div class="item">
                        <img class="img-responsive" src="img/fundos/02.jpg" alt="Slider Image">
                        <div class="containerr" id="Cont">
                            <a href="#vagas" class="scroll"><img src="img/icons/Scrolldown.png" id="scrollD"></a>
                            <img src="img/icons/MeiaLua.png">
                            <div class="carousel-centered">

                            </div>
                        </div>

                        <div id="Lua">
                            <img src="img/icons/MeiaLua.png" id="Meialua" class="Meialua">
                        </div>
                        <div id="SlideText">
                            <h4>All you get is this text and a mostly barebones HTML document</h4>
                            <h4> get is this text and a mostly barebones HTML document.</h4>
                        </div>
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="img/fundos/03.jpg" alt="Slider Image">
                        <div class="containerr" id="Cont">
                            <a href="#vagas" class="scroll"><img src="img/icons/Scrolldown.png" id="scrollD"></a>
                            <img src="img/icons/MeiaLua.png">
                            <div class="carousel-centered">

                            </div>
                        </div>
                        <div id="Lua">
                            <img src="img/icons/MeiaLua.png" id="Meialua" class="Meialua">
                        </div>
                        <div id="SlideText">
                            <h4>All you get is this text and a mostly barebones HTML document</h4>
                            <h4>Document.</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Recrutamento">

        <div id="centro">
            <li>
                <div class="modalidade">
                    <div class="circulo"> <img src="img/icons/Recurtamento.png" class="iconImg"></div>
                </div>

                <div class="ModalidadeTexto">
                    <h3 class="titulo">Recrutamento</h3>
                    <p class="texto">This is a great space to write long text about your company and your services.
                        You can use this space to go into a little more detail about company.
                        Talk about your team and what.</p>
                </div>

                <div class="Mais">
                    <a href="" id="LerMais">Ler Mais</a>
                </div>
            </li>

            <li>
                <div class="modalidade">
                    <div class="circulo"><img src="img/icons/Formacao.png" class="iconImg"></div>
                </div>

                <div class="ModalidadeTexto">
                    <h3 class="titulo">Formação</h3>
                    <p class="texto">This is a great space to write long text about your company and your services.
                        You can use this space to go into a little more detail about company.
                        Talk about your team and what.</p>
                </div>

                <div class="Mais">
                    <a href="" id="LerMais">Ler Mais</a>
                </div>
            </li>

            <li>
                <div class="modalidade">
                    <div class="circulo"><img src="img/icons/Selecao.png" class="iconImg"></div>
                </div>

                <div class="ModalidadeTexto">
                    <h3 class="titulo">Seleção</h3>
                    <p class="texto">This is a great space to write long text about your company and your services.
                        You can use this space to go into a little more detail about company.
                        Talk about your team and what.</p>
                </div>

                <div class="Mais">
                    <a href="" id="LerMais">Ler Mais</a>
                </div>
            </li>
        </div>
    </div>

    <div id="vagas">

        <a href="#Recrutamento" class="scroll" id="scrolTop"> <img src="img/icons/ScrollUp.png" > </a>
    </div>


    <!-- page content -->
@endsection
@section('js')
    <script>

        $(document).ready(function(){
            $(".demo1 .rotate").textrotator({
                animation: "fade",
                speed: 1000
            });
            $(".demo2 .rotate").textrotator({
                animation: "flip",
                speed: 1250
            });
            $(".demo3 .rotate").textrotator({
                animation: "flipCube",
                speed: 1500
            });

        });

    </script>
@endsection
