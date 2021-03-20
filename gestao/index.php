<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php include '../common/headContent.php' ?>
  <link rel="stylesheet" href="../assets/js/gestao.js">
  <link rel="stylesheet" href="../assets/css/gestao/styles.css">
  <title>EEEPJAA - Quem Somos?</title>
</head>

<body>
  <?php include '../common/header.php' ?>
  <main>

    <div style="margin-left: 10%;">
      <h3>Quem Somos?</h3>
      <h4>E.E.E.P. Joaquim Antônio Albano</h4>
      <p class="red-text"><i class="tiny material-icons">info_outline</i> Clique nas fotos para abrir as informações.</p>
    </div>



    <div class="centralizer z-depth-4">

      <div class="row grey lighten-4 center-align">
        <div class="col s12">
          <ul class="tabs grey lighten-4">
            <li class="tab col s2 m4"><a href="#gest" class="teal-text">Núcleo Gestor</a></li>
            <li class="tab col s2 m4"><a href="#prof_all" class="teal-text">Professores</a></li>
            <li class="tab col s2 m4"><a href="#func" class="teal-text">Funcionários</a></li>
          </ul>
        </div>
      </div>

      <div class="big-card-content center-align">
        <div id="gest" class="col s12">
          <h4 class="left-align">Coordenação</h4>
          <div class="row">
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalMar">
                  <img class="activator" src="../assets/img/management/margareth.jpg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Margareth de Oliveira</p>
                    <p class="teal-text">Diretora</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalMar" class="modal">
                  <div class="modal-content">
                    <h3>Margareth de Oliveira</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Graduação em Licenciatura Plena em Geografia, <br>
                      Especialista em Planejamento Escolar e Especialista em Gestão Escolar.</p>
                    <h5>Função na Escola</h5>
                    <p>Diretora da escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalMon">
                  <img class="activator" src="../assets/img/management/monique.jpg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Monique Marambaia</p>
                    <p class="teal-text">Coordenadora</p>
                  </span>
                </div>
                <hr>
                <!-- Modal Structure -->
                <div id="modalMon" class="modal">
                  <div class="modal-content">
                    <h3>Monique Marambaia</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Especialista.</p>
                    <h5>Função na Escola</h5>
                    <p>Coordenadora Financeira.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalEdu">
                  <img class="activator" src="../assets/img/management/eduardo.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>João Eduardo</p>
                    <p class="teal-text">Coordenador</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalEdu" class="modal">
                  <div class="modal-content">
                    <h3>João Eduardo</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Graduado em História.</p>
                    <h5>Função na Escola</h5>
                    <p>Coordenador e acompanha as turmas de 1° ano do Ensino Médio.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalLuc">
                  <img class="activator" src="../assets/img/management/lucilene.jpg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Lucilene Gomes</p>
                    <p class="teal-text">Coordenadora</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalLuc" class="modal">
                  <div class="modal-content">
                    <h3>Lucilene Gomes</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Gruduada em Letras pela e pós graduada em Educação Emocional e Ecologia humana.</p>
                    <h5>Função na Escola</h5>
                    <p>Coordenadora de Estágio.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <h4 class="left-align">Secretaria</h4>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalRos">
                  <img class="activator" src="../assets/img/management/rosa.jpg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Rosa Godoi</p>
                    <p class="teal-text">Secretária</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalRos" class="modal">
                  <div class="modal-content">
                    <h3>Rosa Godoi</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>...</p>
                    <h5>Função na Escola</h5>
                    <p>Secretária Escolar.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalGil">
                  <img class="activator" src="../assets/img/management/gilmara.png">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Gilmara dos Reis</p>
                    <p class="teal-text">Secretária</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalGil" class="modal">
                  <div class="modal-content">
                    <h3>Gilmara dos Reis</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Ensino Médio.</p>
                    <h5>Função na Escola</h5>
                    <p>Secretária Escolar.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <h4 class="left-align">Administração</h4>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalAli">
                  <img class="activator" src="../assets/img/management/alisson.png">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Allison Felix</p>
                    <p class="teal-text">Auxiliar</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalAli" class="modal">
                  <div class="modal-content">
                    <h3>Allison Felix</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Graduado em Educação Física.</p>
                    <h5>Função na Escola</h5>
                    <p>Auxiliar Administravo.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalRob">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>João Robério</p>
                    <p class="teal-text">Multimeios</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalRob" class="modal">
                  <div class="modal-content">
                    <h3>João Robério</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p>Especialista em Geografia.</p>
                    <h5>Função na Escola</h5>
                    <p>Cuida do Multimeios/Biblioteca da escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- ---------------------------------------- -->
        <div id="prof_all" class="col s12">
          <div class="row grey lighten-4 center-align">
            <div class="col s12">
              <ul class="tabs grey lighten-4">
                <li class="tab col s2 m2 disabled"><a href="#" class="teal-text"></a></li>
                <li class="tab col s2 m2"><a href="#base" class="active teal-text">Base Comum</a></li>
                <li class="tab col s2 m2"><a href="#enf" class="teal-text">Enfermagem</a></li>
                <li class="tab col s2 m2"><a href="#inf" class="teal-text">Informática</a></li>
                <li class="tab col s2 m2"><a href="#sbc" class="teal-text">Saúde Bucal</a></li>
                <li class="tab col s2 m2"><a href="#sdt" class="teal-text">Seg. do Trabalho</a></li>
              </ul>
            </div>
          </div>

          <div id="base" class="col s12">
            <h4 class="left-align">Base Comum</h4>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalRod">
                    <img class="activator" src="../assets/img/management/rodrigo.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Rodrigo Percevalli</p>
                      <p class="teal-text">Biologia</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalRod" class="modal">
                    <div class="modal-content">
                      <h3>Rodrigo Percevalli</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciatura, Bacharelado em Ciências Biológicas e Especialista em ensino de Biologia.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor de Biologia.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalWil">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Wilton Lima</p>
                      <p class="teal-text">Ed. Física</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalWil" class="modal">
                    <div class="modal-content">
                      <h3>Wilton Lima</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em Educação Física.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor de Educação Física e Projetos.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalIvo">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Maria Ivonete</p>
                      <p class="teal-text">Filosofia</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalIvo" class="modal">
                    <div class="modal-content">
                      <h3>Maria Ivonete</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciada em Filosofia e História. Especialista em Filosofia e Administração escolar.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Filosofia.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalPed">
                    <img class="activator" src="../assets/img/management/pedro.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Pedro Camelo</p>
                      <p class="teal-text">Física</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalPed" class="modal">
                    <div class="modal-content">
                      <h3>Pedro Camelo</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em licenciatura e bacharelado em Fisica e especialista.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Física.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalAle">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Francisco Alexandre</p>
                      <p class="teal-text">Geografia</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalAle" class="modal">
                    <div class="modal-content">
                      <h3>Francisco Alexandre</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciado e Mestre em Geografia.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Geografia.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalRon">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Ronaldo Herley</p>
                      <p class="teal-text">História</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalRon" class="modal">
                    <div class="modal-content">
                      <h3>Ronaldo Herley</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciatura Plena em Historia.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de História.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalNoe">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Noeme Paz</p>
                      <p class="teal-text">Inglês</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalNoe" class="modal">
                    <div class="modal-content">
                      <h3>Noeme Paz</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Pós graduação em Inglês.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Inglês, Artes, e Ingles Técnico.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalAlv">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>José Alves</p>
                      <p class="teal-text">Matemática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalAlv" class="modal">
                    <div class="modal-content">
                      <h3>José Alves</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciatura Plena em Matemática.</p>
                      <h5>Função na Escola</h5>
                      <p>Responsável pelo Laboratório de Matemática na condição de Professor adaptado.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalEdn">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>José Ednaldo</p>
                      <p class="teal-text">Matemática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalEdn" class="modal">
                    <div class="modal-content">
                      <h3>José Ednaldo</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Licenciatura em Matemática e mestrado no ensino de Ciências e Matemática.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor de Matemática.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalSam">
                    <img class="activator" src="../assets/img/management/samarony.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Samarony Juda</p>
                      <p class="teal-text">Matemática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalSam" class="modal">
                    <div class="modal-content">
                      <h3>Samarony Juda</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Pós graduado em Matemática.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor de Matemática.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalCri">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Cristina Oliveira</p>
                      <p class="teal-text">Português</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalCri" class="modal">
                    <div class="modal-content">
                      <h3>Cristina Oliveira</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Letras.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Português, Projetos e Corretora de Redação.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalLiv">
                    <img class="activator" src="../assets/img/management/livia.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Lívia Nara</p>
                      <p class="teal-text">Português</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalLiv" class="modal">
                    <div class="modal-content">
                      <h3>Lívia Nara</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Letras e Turismo.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Portuguesa, Oficina de Redação e responsável pelo Laboratório de Redação.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalMRo">
                    <img class="activator" src="../assets/img/management/mara.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Maria Rosemary</p>
                      <p class="teal-text">Quimica</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalMRo" class="modal">
                    <div class="modal-content">
                      <h3>Maria Rosemary</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Quimica.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora de Quimica.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalThi">
                    <img class="activator" src="../assets/img/management/thiago.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Thiago Ribeiro</p>
                      <p class="teal-text">Sociologia</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalThi" class="modal">
                    <div class="modal-content">
                      <h3>Thiago Ribeiro</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em Ciências Sociais.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor de Sociologia, Mundo do Trabalho e Empreendedorismo.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalCla">
                    <img class="activator" src="../assets/img/management/claudio.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Claudio Albano</p>
                      <p class="teal-text">Informática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalCla" class="modal">
                    <div class="modal-content">
                      <h3>Claudio Albano</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em Geografia, Especialista em Gestão Educacional, Superior Técnico em Microinformática.</p>
                      <h5>Função na Escola</h5>
                      <p>Chefe do LEI e Professor de Informática Básica.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="enf" class="col s12">
            <h4 class="left-align">Curso Téc. de Enfermagem</h4>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalQui">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Quitéria Régia</p>
                      <p class="teal-text">Enfermagem</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalQui" class="modal">
                    <div class="modal-content">
                      <h3>Quitéria Régia</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Enfermagem.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e orientadora de estágio do Curso Técnico em Enfermagem.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalAlb">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Albertina Alves</p>
                      <p class="teal-text">Enfermagem</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalAlb" class="modal">
                    <div class="modal-content">
                      <h3>Albertina Alves</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Enfermagem.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e orientadora de estágio do Curso Técnico em Enfermagem.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalVan">
                    <img class="activator" src="../assets/img/management/vanessa.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Vanessa Santos</p>
                      <p class="teal-text">Enfermagem</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalVan" class="modal">
                    <div class="modal-content">
                      <h3>Vanessa Santos</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Enfermagem.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e coordenadora do Curso Técnico em Enfermagem.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalTam">
                    <img class="activator" src="../assets/img/management/tamara.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Tamara Davylla</p>
                      <p class="teal-text">Enfermagem</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalTam" class="modal">
                    <div class="modal-content">
                      <h3>Tamara Davylla</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Enfermagem.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e Orientadora de estágio do Curso Técnico em Enfermagem.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div id="inf" class="col s12">
            <h4 class="left-align">Curso Téc. de Informática</h4>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalCaH">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Carlos Henrique</p>
                      <p class="teal-text">Informática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalCaH" class="modal">
                    <div class="modal-content">
                      <h3>Carlos Henrique</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em Análises e Desenvolvimento de Sistemas.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor e coordenador do Curso Técnico em Informática.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalDav">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Davidson Alves</p>
                      <p class="teal-text">Informática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalDav" class="modal">
                    <div class="modal-content">
                      <h3>Davidson Alves</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Análise e Desenvolvimento de Sistemas WEB.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor e orientador de estágio do Curso Técnico em Informática.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalSid">
                    <img class="activator" src="../assets/img/management/sidio.png">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Sídio Loiola</p>
                      <p class="teal-text">Informática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalSid" class="modal">
                    <div class="modal-content">
                      <h3>Sídio Loiola</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduado em Rede de Computadores e especialização em Engenharia de Software.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor EMI e orientador de estágio supervionado.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="sbc" class="col s12">
            <h4 class="left-align">Curso Téc. de Saúde Bucal</h4>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalViv">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Vivianne Lopes</p>
                      <p class="teal-text">Saúde Bucal</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalViv" class="modal">
                    <div class="modal-content">
                      <h3>Vivianne Lopes</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Odontologia.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e orientadora de estágio do Curso Técnico em Saúde Bucal.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalGab">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Gabriela de A.</p>
                      <p class="teal-text">Saúde Bucal</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalGab" class="modal">
                    <div class="modal-content">
                      <h3>Gabriela de A.</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Graduada em Cirurgiã-dentista.</p>
                      <h5>Função na Escola</h5>
                      <p>Professora e orientadora de estágio do Curso Técnico em Saúde Bucal.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div id="sdt" class="col s12">
            <h4 class="left-align">Curso Téc. de Seg. do Trabalho</h4>
            <div class="row">
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalCaB">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Carlos Barbosa</p>
                      <p class="teal-text">Informática</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalCaB" class="modal">
                    <div class="modal-content">
                      <h3>Carlos Barbosa</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p>Técnico em Segurança do Trabalho.</p>
                      <h5>Função na Escola</h5>
                      <p>Professor e coordenador de Curso Técnico em Segurança do Trabalho.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6 m4 l2">
                <div class="card hoverable">
                  <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                    <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                  </div>
                  <hr>
                  <div>
                    <span class="grey-text text-darken-4">
                      <p>Nome Funcionário</p>
                      <p class="teal-text">Cargo Funcionário</p>
                    </span>
                  </div>
                  <hr>

                  <!-- Modal Structure -->
                  <div id="modalFun" class="modal">
                    <div class="modal-content">
                      <h3>Nome do Funcionário</h3>
                      <hr>
                      <h5>Formação Acadêmica</h5>
                      <p> Formação do Funcionário.</p>
                      <h5>Função na Escola</h5>
                      <p>Função do funcionário na escola.</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- ---------------------------------------- -->
        <div id="func" class="col s12">
          <h4 class="left-align">Serviços Gerais</h4>
          <div class="row">
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <h4 class="left-align">Cozinha</h4>
          <div class="row">
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <h4 class="left-align">Segurança</h4>
          <div class="row">
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col s6 m4 l2">
              <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light modal-trigger" href="#modalFun">
                  <img class="activator" src="../assets/img/management/imagem_padrao.jpeg">
                </div>
                <hr>
                <div>
                  <span class="grey-text text-darken-4">
                    <p>Nome Funcionário</p>
                    <p class="teal-text">Cargo Funcionário</p>
                  </span>
                </div>
                <hr>

                <!-- Modal Structure -->
                <div id="modalFun" class="modal">
                  <div class="modal-content">
                    <h3>Nome do Funcionário</h3>
                    <hr>
                    <h5>Formação Acadêmica</h5>
                    <p> Formação do Funcionário.</p>
                    <h5>Função na Escola</h5>
                    <p>Função do funcionário na escola.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat"><i class="material-icons">close</i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row bottom-border grey lighten-4 teal-text center-align">
        <div class="col s12 footer-big-card-content">
          E.E.E.P. Joaquim Antônio Albano - Quem Somos?
        </div>
      </div>
    </div>
  </main>

  <?php include '../common/homeButton.php' ?>
  <?php include '../common/footer.php' ?>
</body>
<script>
  $(document).ready(function() {
    $('.modal').modal();
  });
</script>

</html>