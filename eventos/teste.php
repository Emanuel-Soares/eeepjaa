<!DOCTYPE html>
<html>
    <head>
        <title>materialize</title>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- materialize css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style type="text/css">
            p {
            margin-bottom: 0 }
            p + p {
            text-indent: 1.5em;
            margin-top: 0 }
            p{
            font-family: "Times New Roman", Times, serif;
            font-size:20px 
            }
            .loren{
            opacity: 0.6;
            width: 250px;
            height: 250px;
            transition: width 2s, height 2s, transform 5s;
            display: inline-block;
            position: relative;
            }
            .loren:hover {
            width:280px;
            height:280px;
            opacity: 1;
            }
            html, body {
            scroll-behavior: smooth;
            }
            .btn1 {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 10px;
    right: 10px;
    width: 50px;
    height: 50px;
    background-color: #000;
    text-decoration: none;
    border-radius:50% 
}
.btn1::after {
    content: "↑";
    font-size: 32px;
    font-weight: bold;
    color: aliceblue;
    transition: margin-top 250ms;
}
.btn1:hover::after {
    margin-top:-8px;
}
        </style>
    </head>
    <body class="indigo lighten-5">
        <!--cabeçalho-->
        <header>
            <!--barra com contato e email da escola-->
            <div class="teal darken-4 center  white-text ">
                <a class="white-text" href="tel:08531012072">
                <sub><i class="tiny material-icons white-text">phone</i></sub>
                (85) 3101-2072</a> |
                <a class="white-text" href="mailto:eeepjalbano@gmail.com"><sub><i class="tiny material-icons" style="position: relative;top: 50%;">email</i></sub> eeepjalbano@gmail.com</a>
            </div>
            <nav class="white z-depth-1 ">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo left orange-text text-darken-4"><img class="sidenav-trigger right" src="img/EEEPJAA.png" alt="EEEP JAA" title="EEEP JAA"></a>
                <!--icone-->
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right orange-text"><i class="material-icons"  id="sidenav" class="" >menu</i></a>
                <!--navbar desktop-->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="active"><a href="#l" class="orange-text text-darken-4">Home</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Cursos</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Base comum</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Gestão</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Eventos</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Sobre</a></li>
                </ul>
                <!--navbar mobile-->
                <ul id="mobile-demo" class="sidenav" class="sidenav">
                    <li class="active"><a href="#"class="orange-text text-darken-4">Home</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Cursos</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Base comum</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Gestão</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Eventos</a></li>
                    <li><a href="#" class="orange-text text-darken-4">Sobre</a></li>
                </ul>
            </div>
        </header>
        <!--corpo-->
        <main>
            <div class="section">
                <div class="row">
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#workshop"><img src="img/workshop.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center">
                        <div class="loren">
                            <span></span>
                            <a href="#simulados"><img src="img/simulados.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center ">
                        <div class="loren"><a href="#interclasse">
                            <img src="img/interclasses1.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#festas"><img src="img/interclasses2.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#palestrasE"><img src="img/palestras.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#sectec"><img src="img/sectec.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#eventos"><img src="img/eventos.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                    <div class="col l3 s12 m6 center" >
                        <div class="loren">
                            <a href="#eventosB"><img src="img/eventosb.jpg" style="width:100%;border-radius:3%;"></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="eventosB"><img src="img/eventosBeneficos.jpg" class="materialboxed"></a>
                            <span class="card-title">EVENTOS BENEFICIENTE</span>
                        </div>
                        <div class="card-content">
                            <p>Os eventos beneficentes não possuem fins lucrativos: todos os recursos arrecadados são doados para alguma instituição ou causa</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal1" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4>EVENTOS BENEFICIENTE</h4>
                                <p>Os eventos beneficentes não possuem fins lucrativos: todos os recursos arrecadados são doados para alguma instituição ou causa. Os tipos de eventos beneficentes mais realizados são jantares, shows, bazares e feiras, e tudo aquilo arrecadado com a realização do evento – como a venda de ingressos, de produtos e a doação de alimentos – é direcionado para alguma organização que atue em prol de algum segmento da sociedade.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="eventos"><img src="img/eventos1.jpg" class="materialboxed"></a>
                            <span class="card-title">EVENTOS</span>
                        </div>
                        <div class="card-content">
                            <p>Eventos escolares são ideais para estreitar laços entre a escola e as famílias dos alunos. Além disso, esses eventos são excelentes para desenvolver o estudante no contexto extraclasse</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal2" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <h4>EVENTOS</h4>
                                <p>Eventos escolares são ideais para estreitar laços entre a escola e as famílias dos alunos. Além disso, esses eventos são excelentes para desenvolver o estudante no contexto extraclasse. Diversas são as atividades que podem ser propostas, como a confecção de estandes, fantasias e decorações para o evento. Os pais e responsáveis também podem ser envolvidos durante as celebrações, já que esse é o momento em que muitos podem participar significativamente das atividades escolares dos filhos.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="workshop"><img src="img/workshop.jpeg" class="materialboxed"></a>
                            <span class="card-title">WORKSHOP</span>
                        </div>
                        <div class="card-content">
                            <p>Evento para cursos com intuito de ampliar o conhecimentos nas areas </p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal3" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal3" class="modal">
                            <div class="modal-content">
                                <h4>WORKSHOP</h4>
                                 <p>O workshop é um evento onde acontece uma reunião de pessoas interessadas em determinado assunto para aperfeiçoar técnicas por meio da explicação de palestrantes e de atividades práticas.</p>
                    <p>Cada curso terá um workshop voltada para a area com aulas praticas e teoricas de um certo conteudo, podendo ter ate gincanas. </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="interclasse"><img src="img/interclasse3.jpg" class="materialboxed"></a>
                            <span class="card-title">INTERCLASSE</span>
                        </div>
                        <div class="card-content">
                            <p>Jogos de interclasse são os jogos mais esperados de todas as escolas e no Joaquim albano não é diferente. Confira mais sobre o interclasse do J.A</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal4" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal4" class="modal">
                            <div class="modal-content">
                                <h4>INTERCLASSE</h4>
                                <p>Os jogos interclasses é um evento organizado e promovido no âmbito escolar entre as turmas e séries. Cada escola detém particularidades na organização do evento, o qual varia de acordo com a disponibilidade de espaço físico, recursos humanos, materiais e calendário. De modo geral, é uma época em que as atividades de sala de aula dão lugar às atividades esportivas. </p>
                                <h5>Os jogos são</h5>
                                <ul>
                                    <li>Futsal</li>
                                    <li>volei</li>
                                    <li>xadrez</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="simulados"><img src="img/simulados.jpeg" class="materialboxed"></a>
                            <span class="card-title">SIMULADOS</span>
                        </div>
                        <div class="card-content">
                            <p>Simulados preparatorios para os vestibulares</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal5" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal5" class="modal">
                            <div class="modal-content">
                                <h4>SIMULADOS</h4>
                                <p>Os simulados são nada menos do que questionários que reúnem perguntas semelhantes às apresentadas nos vestibulares. Um simulado do Enem é aquele para testar os conhecimentos dos participantes do exame. Com isso, é possível saber como está o seu rendimento em relação aos conteúdos cobrados e diagnosticar quais matérias precisam ser mais estudadas. geralemnte feitos no final de semana, como em um sabado letivo</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="festas"><img src="img/festas.jpg" class="materialboxed"></a>
                            <span class="card-title">FESTAS</span>
                        </div>
                        <div class="card-content">
                            <p>Na chegada de datas comemorativas como carnaval, São João, consciência Negra entre outros feriados, o Grêmio Estudantil do Joaquim Albano realizam atividades na quadra ou pátio</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal6" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal6" class="modal">
                            <div class="modal-content">
                                <h4>FESTAS</h4>
                                <p>Na chegada de datas comemorativas como carnaval, São João, consciência Negra entre outros feriados, o Grêmio Estudantil do Joaquim Albano realizam atividades na quadra ou pátio da escola para os alunos se desopilarem mais por causa das horas de aula serem muito longas e eles precisam se distrair mais para não ficarem com a cabeça lotada só nas aulas.
                        O Grêmio faz atividades ou brincadeiras em forma de competições entre as salas que no final a sala campeã recebe um prêmio que estão no seu alcance, essa atividades são mais para os alunos se divertirem mesmo dentro da escola.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="palestrasE"><img src="img/palestrasE.jpg" class="materialboxed"></a>
                            <span class="card-title">PALESTRAS EDUCATIVAS</span>
                        </div>
                        <div class="card-content">
                            <p>As palestras educativas são eventos que tem por objetivo ensinar os participantes a respeito de assuntos preferidos dos jovens ou temas específicos</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal7" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal7" class="modal">
                            <div class="modal-content">
                                <h4>PALESTRAS EDUCATIVAS</h4>
                                <p>As palestras educativas são eventos que tem por objetivo ensinar os participantes a respeito de assuntos preferidos dos jovens ou temas específicos de uma forma dinâmica e com diálogo eficiente.   
                        Sobre tudo, são eventos que geralmente abordam temas importantes da atualidade e a partir disso ajudam os participantes a entenderem o assunto. Acima de tudo, com  a profunda intenção de estimular as atitudes dos ouvintes, e leva-los a reflexões e outras medidas favoráveis para o seu desenvolvimento.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div class="row" ><div class="col l12 s12 m12 xl12" style="height:250px"></div></div>
            <div class="row">
                <div class="col s0 m2,5 l3"></div>
                <div class="col s12 m12 l6">
                    <div class="card longe">
                        <div class="card-image">
                            <a id="sectec"><img src="img/sectec3.jpeg" class="materialboxed"></a>
                            <span class="card-title">SECTEC</span>
                        </div>
                        <div class="card-content">
                            <p>Os eventos beneficentes não possuem fins lucrativos: todos os recursos arrecadados são doados para alguma instituição ou causa</p>
                        </div>
                        <div class="card-action">
                            <a href="#" data-target="modal8" class="modal-trigger">clique para ler mais</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal8" class="modal">
                            <div class="modal-content">
                                <h4>SECTECE</h4>
                                <p>A feira de ciências é uma oportunidade para os alunos divulgarem o conhecimento adquirido em sala de aula, além de desenvolver nos estudantes uma capacidade multidisciplinar, já que o evento costuma abordar diversos temas.
                        Em geral, são eventos já consolidados no ambiente escolar e que fazem parte do calendário anual dos colégios.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">SAIR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m2,5 l3"></div>
            </div>
            <div>
               <a href="#" class="btn1"></a>
            </div>
        </main>
        <!--  Rodapé -->
        <footer class="page-footer teal darken-4 ">
            <div class="container">
                <div class="row">
                    <div class="col l6 s4">
                        <h5 class="white-text">FEEEP Joaquim Antônio Albano</h5>
                        <p class="grey-text text-lighten-4">Rua Júlio Siqueira,390 - Dionísio Torres.</p>
                        <a href="https://www.facebook.com/eeepjalbano" target="_blank">
                        <img src="img/Facebook.svg" height="40px" style="filter:invert(100%)" title="Facebook"></a>
                        <a href="https://www.instagram.com/eeepjoaquimalbano/" target="_blank">
                        <img src="img/Instagram.svg" height="40px" style="filter:invert(100%); padding: 0 0 0 5px" title="Instagram">
                        </a>
                    </div>
                    <div class="col l3 s4">
                        <center>
                            <h5 class="white-text">Orientadores</h5>
                            <p class="white-text">Carlos Henrique</p>
                            <p class="white-text">Sidio Loiola - Davidson Alves</p>
                        </center>
                    </div>
                    <div class="col l3 s4">
                        <iframe style="position: absolute; width: 25%; height: 180px; margin-top:-20px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.115504220736!2d-38.5099877!3d-3.7493274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7eb2e63b55439b21!2sEEEP%20Professor%20Joaquim%20Ant%C3%B4nio%20Albano!5e0!3m2!1spt-BR!2sbr!4v1610156891468!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © EEEP Joaquim Antônio Albano, <span id="current_year"></span>
                    <a class="grey-text text-lighten-4 right" href="mailto:Franciscorobertotinfo@gmail.com">Feito pelo 3° Informática 2020</a>
                </div>
            </div>
        </footer>
        <!-- jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              $('.sidenav').sidenav();
            });
            
            $(document).ready(function(){
            $('.slider').slider();
            });
            M.AutoInit();
            $(document).ready(function(){
            $('.parallax').parallax();
            });
            
            
            $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
            });
            $(document).ready(function(){
            $('.materialboxed').materialbox();
            });
            $(document).ready(function(){
            $('.modal').modal();
            });
        </script>
    </body>
</html>