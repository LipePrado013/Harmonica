@extends('Layouts.main')

@section('nav')

<div class='nav'>
    <div class='logo'>
        <img src='img/logo-ferdi.png' width='100%' />
    </div>

    <button class='menu' id="openMenuLateral">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class='navegacao '>
        <ul class='list-nav'>
            <li class='links-nav ativo'><a href='#'>HOME</a></li>
            <li class='links-nav'><a href='#'>SOBRE NÓS</a></li>
            <li class='links-nav'><a href='#'>PEÇAS</a></li>
            <li class='links-nav'><a href='#'>SERVIÇOS</a></li>
            <li class='links-nav'><a href='#'>CONTATO</a></li>
        </ul>
    </div>

</div>

<div class="menuHide" id="fundoMenuLateral"></div>

<div class=" menuHide" id="menuLateral">
    <button id="closeMenuLateral" class="btn-fechar">Fechar &times;</button>
    <li class='menu-links-nav ativo'><a href='#'>HOME</a></li>
    <li class='menu-links-nav'><a href='#'>SOBRE NÓS</a></li>
    <li class='menu-links-nav'><a href='#'>PEÇAS</a></li>
    <li class='menu-links-nav'><a href='#'>SERVIÇOS</a></li>
    <li class='menu-links-nav'><a href='#'>CONTATO</a></li>
</div>

@endsection


@section('content')

<div class='box-text'>

    <h1>
        Soluções em Consertos de Módulos eletrônicos
    </h1>

    <p>
        A Harmônica oferece uma garantia de serviço confiável e abrangente aos seus clientes para determinados padrões de qualidade, confiabilidade e desempenho e ainda oferecemos uma garantia de 6 meses no reparo dos módulos/placas/joystick tendo suporte total para o cliente atendido.

    </p>

    <a href='#'><button class='btn-orcamento'>SOLICITAR ORÇAMENTO</button></a>

</div>

<div class='faixaRed'></div>

@endsection


@section('content2')



<div class='box-cont-2'>
    <h1>Soluções para sua Maquina Portuária</h1>
    <div class='linhaVermalha'></div>
</div>

<div class='boxMaquina'>

    <div class='boxImg'>
        <img src='img/maquinas-ferd.jpeg' width='100%'>
    </div>

    <div class='box-informativo'>
        <div>
            <h1>MÓDULOS DE TODA LINHA REACH STARKER PELO BRASIL</h1>
        </div>

        <div class="informacao">


            <div class="infoBox">
                <div class="cap-box">
                    <h3>xxxx xxxx xxxx xxxx felipe</h3>
                    <p>xxx xxx xxx 1</p>
                    <p>xxx xxx xxx 1</p>
                </div>

                <div class="box1"><img src="img/tempo.png" width="80px" height='80px'></div>

            </div>

            <div class="infoBox">
                <div class="cap-box">
                    <h3>xxxx xxxx xxxx xxxx lucas</h3>
                    <p>xxx xxx xxx 2</p>
                    <p>xxx xxx xxx 2</p>
                </div>
                <div class="box2"><img src="img/config.png" width="80px" height='80px'></div>
            </div>

            <div class="infoBox">
                <div class="cap-box">
                    <h3>xxxx xxxx xxxx xxxx gabriel</h3>
                    <p>xxx xxx xxx 3</p>
                    <p>xxx xxx xxx 3</p>
                </div>
                <div class="box3"><img src="img/check.png" width="80px" height='80px'></div>
            </div>

        </div>

    </div>

    @endsection

    @section('content3')

    <div class='faixaRed2'></div>

    <div class="filtroBlack"></div>
    <div class="cap-conteudo3">
        <div class="box-red">
            <h1>Porquê <br> Harmonica Automação?</h1>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
        </div>
        <div class='boxImg2'></div>

    </div>
    @endsection

    @section('content4')

    <div class='titulo-cont4'>
        <h1>MAQUINAS QUE TRABALHAMOS </h1>
    </div>

    <div class="patrocinios">
        <img src="img/logo-ferdi.png" width="250em">
        <img src="img/logo-ferdi.png" width="250em">
        <img src="img/logo-ferdi.png" width="250em">
        <img src="img/logo-ferdi.png" width="250em">
        <img src="img/logo-ferdi.png" width="250em">
    </div>

    <div class="cap-slide">
        <a href='https://www.youtube.com/'>
            <img class="imgSlide" src="img/maquinas-ferd.jpeg"></a>
        <img class="imgSlide" src="img/maquinas1.png">
        <img class="imgSlide" src="img/porto.jpeg">
        <div class="box-btnSlide">
            <button class="btn-voltar" onclick="plusDivs(-1)">&#10094;</button>
            <button class="btn-avancar" onclick="plusDivs(1)">&#10095;</button>
        </div>


    </div>

    <!-- 
    <h2 class="w3-center">Automatic Slideshow</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img_la.jpg" style="width:100%">
  <img class="mySlides" src="img_ny.jpg" style="width:100%">
  <img class="mySlides" src="img_chicago.jpg" style="width:100%">
</div> -->



    <!-- <div class="cap-slide">
        <img class="imgSlide" src="img/maquinas-ferd.jpeg">
        <img class="imgSlide" src="img/maquinas1.png">
        <img class="imgSlide" src="img/porto.jpeg">
    </div> -->

    @endsection

    @section('content5')

    <div class="box-info-cont5">
        <img src="img/maquinas-ferd.jpeg" width="150px">
        <p>Garantir o desenvolvimento de nossos clientes através das inovações e tecnologia dos nossos serviços. </p>
    </div>
    <div class="box-info-cont5"><img src="img/maquinas-ferd.jpeg" width="150px">
        <p>Garantir o desenvolvimento de nossos clientes através das inovações e tecnologia dos nossos serviços. </p>
    </div>
    <div class="box-info-cont5"><img src="img/maquinas-ferd.jpeg" width="150px">
        <p>Garantir o desenvolvimento de nossos clientes através das inovações e tecnologia dos nossos serviços. </p>
    </div>

    @endsection

    @section('content6')

    <div class="box-estoque">
        <h1>PEÇAS DE ESTOQUE </h1>

        <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
        <br />

        <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
        <br />

        <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
    </div>
    <div class="box-book">
        <img src="img/book.png" width="120%">
        <p>Portofilio Harmonica <br />sobre as peças</p>
        <button type="dowload">DOWNLOAD</button>
    </div>

    @endsection

    @section('content7')

    <div class="text-red">
        <h1>Como nós Trabalhamos</h1>
    </div>

    <div class="cards-info">
        <div class="card-1">
            <div class="circu-card"><img src="img/brunin-note.jpg"></div>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>

        </div>
        <div class="card-2">
            <div class="circu-card"><img src="img/ferdi-brunin.jpg" alt=""></div>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>

        </div>
        <div class="card-3">
            <div class="circu-card"><img src="img/povo-papiando.jpg" alt=""></div>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>

        </div>
    </div>


    @endsection

    <!-- @section('content8')

    <div class='titulo-cont8'>
        <h1>SOBRE NÓS</h1>
    </div>

    <div class="box-cont8">
        <div class="descricao-cont8">
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>
            <p>A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos Módulos dela, Contando com uma Equipe de Técnicos para realizar o Diaginostico e Reparo para Entregar com Eficiência e Garantia de Funcionamento para o Cliente.</p>

        </div>

        <div class="img-box-cont8">
            <img class="img1-cont8" src="img/trator-cont.png" width="130em">
            <img class="img2-cont8" src="img/trator-cont.png" width="350em">
        </div>
    </div>
    @endsection -->

    @section('content9')

    <div class="rodape">

        <div class="box-info">

            <div class='title-rodape'>
                <h1>Harmonica Automação</h1>
            </div>



            <div class="box-Info-rodape">

                <p> A Harmônica automação tem a Solução Perfeita para sua Maquina parada ou até mesmo com alguma falha nos</p>

            </div>

            <div class="box-Info-rodape">
                <div style=" display: flex; padding: 5px; ">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACZklEQVR4nO2XS2xNURSGT9qQCpVWFBXCiAglcY0oEwbaxE1Mr4lQjxEpkTDtRAwrKCkarSmJ14RKQ26IiKlEOxEGHoNSj6Aen6zkP8lJs92zz9nHiD/Zycle/7/Wf/bZd699o+g/MgLYAPQBT4GPGvZ8xmJ/s/AC4DrpuAbML7r4cuC5CrwDeoASMFOjpLn34hh3WVHFm4BnSjwCtNTgzgPuiWuapiIMnFLCJ8AMD34D8Eia3tDiC4FvwHf7DBl0K4Af0raGGNivN7niiHUCLzU6HPGr0u4NMTCkJF2OmBWO8cIR71JsMMTAsJJszmFgi2J3QgzcVZKyI9ZhhTW2OuJlaYdDDAwoydEc2mPSXggxsEtJHuTQPpR2Z4iB2cBnJVqZQbdKmk9AY24DBuCSkg1FngAuSzPgq0nrA5PAT2CtB3+NuJNF9oPTeqP7QF0NXh1QFfdkIcUNwFzgjRIfiP4A4KA4r4A5UZEAtiu5bco2R7wtsWHLRRZuBabr+aIKjCZbrVr2mGL9mptml5iQwtvU/21DHU+02scqdAOo17Bn1IYbxD2hjjiSaUWAxilXry/ALWCW4osT++EscE7Pr4FFiRW5rXYc46bXmQD0S2DXq8N2GDk4m/Qzi2GFNjp4ZuQIMCHeeR8DH0QupfAq+jw2Kincdco54WNgTOSKB7fTdRlx8HbEm9fHwD6Rf+kYXp0qqn0qDiqXYY+vsHvKBhrVH4/dQDuwBGhO/AqaNdcuTp80Mb7aIZXV/VI7ToG35Idpe81czkWMIr3heuCQ7ohV3YLGE5twXHNVLXm3NPW5C0f/Cn4Dfghq/EQlCWoAAAAASUVORK5CYII=">
                    <p>R. Dona Luiza Macuco, 110 - vila Matias</p>
                </div>

                <div style=" display: flex;  padding: 5px; ">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB5klEQVR4nO3WTYiOURjG8cfHGEOSKUqZlCmKlA2jsVMWUizsFCtlN81GyMbsKHY2hoUa+VgI5asUGyULpGzkq1iMfC+sDH46zT2c3p6iPOddvf/ldZ6e6zrn3Oc+p6o61ICZOImBqt1gBs6Y5AvWt3vm58P8RxaiPSuB05npYBamfAhsD7OvU2YtK1I2BK6E0VCL3p4Q+Bgmi2rGdvjD/lIB3ofBghZ9KyZi7FAR8wTuh8nOKgPXQj9VlQS7w+gl5mT6ntCfY3bpBvQwzI60FOHj0I8WC5DAutjv1IQ2ZvoAvuEntlQlwcGY7TiWZvre0D9hZemtuB5mTzA/9Gm4GPprLCkZYl6273fQE3oP7ob+DP0lQ/ThTZjdRHfovXgQ+tu6zogDqZ6aCLE8aiFxGV3ZCqVQojj3YXqMjYT+uakQq/AufppqYFboXTgWJyPxCCeylt1oiDX4ED+9mjckbMKrzHQi7o4L2QXWSIjVseeJW5ibjXVjGDewrdgtihVZYaYl7/uHIz3W6PMOy/A06wdr//L9YPa8G/3vANlRvJ3t+UjdRRUtPM08cS5tS9UUJk/BYXwPgxfYhYVYHDWRnneJs2k7GjPPwYasa9ZxvJj5FFHx6T1xLy6r9Lq6hM2/P+rQoarnFx9kbSqJCQEoAAAAAElFTkSuQmCC">
                    <p> Telefone (13) 3323-2532</p>
                </div>

                <div style="display: flex; padding: 5px; ">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABNUlEQVR4nO3WL0/DQBjH8RL+JBhIMAj0JA43Bw4LDsJbQGLQDByWt4DE8QrQGBwCsoFAIEhIyBI+5LJbcmm6rdu6GfpNLr30uXt+vz53bS/LamoiWMEV3syODi6DVpZHLzAvWkUGOjHYxTmWsooIuWLObr8SRYP6/MbrAxoViDdirjS3YQaaeI79b5xiYULxE3zFXC/YHWkg6/XXcJOYusfWGMKbuEvm32IjrzPQQHLvAB8x9InjEuKHuTlHo3SGBoY9TW7cepmqjW1gwHq+Yz+J7eG1zL6Z2MCAHX0dW+k3ZyoDASziDD9JubvxQ7acjWBqA32wjUc8YScrSWUGAlgNLRuDSg1MQm1AvQSR8ptjjgY6MdasWjTRCL/6QLso2DI/LgYdSltJJWZBO4gXHkprav4tf1sELhF4fLIQAAAAAElFTkSuQmCC">
                    <p>Harmonicaautomação@Outlook.com</p>
                </div>


                <div class="box-maps border: 1px solid black;">


                    <div class="box-Info-rodape-img">
                        <img src="img/trator-cont.png" width="100%">
                    </div>


                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://maps.google.com/maps?q=R. Dona Luiza Macuco, 110 - vila Matias&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe><br>
                        </div>
                    </div>
                </div>



            </div>






        </div>



    </div>

    @endsection