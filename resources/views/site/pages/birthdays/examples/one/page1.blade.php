@extends ('site.layouts.exampleNiver', ['current' => 'aniversarios'])

@section('main')


<link href="https://fonts.googleapis.com/css?family=Cinzel:700&display=swap" rel="stylesheet">

<!-- Masthead -->
  <header class="info">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('images/wedding/p21.jpg') }}" alt="First slide" width="1400px" height="700px">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>NOME ANIVERSÁRIANTE</h1>
                <p>MENSAGEM DO ANIVERSARIANTE.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide"  src="{{ asset('images/wedding/p22.jpg') }}" alt="Second slide" width="1400px" height="700px">
             <div class="container">
              <div class="carousel-caption text-left">
                <h1>NOME ANIVERSÁRIANTE</h1>
                <p>MENSAGEM DO ANIVERSARIANTE.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide"  src="{{ asset('images/wedding/p23.jpg') }}" alt="Third slide" width="1400px" height="700px">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>NOME ANIVERSÁRIANTE</h1>
                <p>MENSAGEM DO ANIVERSARIANTE.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>
  </header>

  <!-- About Section -->
  <section class="page-section info" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="text-white wedding-font display-1 mt-0">Informações sobre o aniversário</h1>
          <hr class="divider light my-4">
          <p class="text-golden lead mb-4 p-3" style="font-size: 20pt">Local da Festa: / Data das celebrações e horários: / Informações sobre o tipo de trajes: e informações adicionais </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#presentes">Lista de Presentes</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section gifts" id="presentes" >
  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Passeio no Saara</h2>
            <br>
            <p class="lead">O Deserto do Saara ou Deserto do Sara, ou Deserto do Sáara é conhecido por ser o mais quente deserto do mundo. Oficialmente, é o terceiro maior deserto da Terra, logo após a Antártida e o Ártico, pois estas duas também são consideradas um deserto.
            <br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p1.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Turismo rural</h2>
            <br>
            <p class="lead">Turismo rural ou agroturismo é uma modalidade do turismo que tem, por objetivo, permitir, a todos, um contato mais direto e genuíno com a natureza, a agricultura e as tradições locais, através da hospedagem domiciliar em ambiente rural e familiar
            <br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p2.jpg')}}" width="350px" height="350px">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
           <h2 class="featurette-heading">Passeio em Cachoeira</h2>
           <br>
            <p class="lead">Nada melhor que aproveitar um final de semana ou feriado prolongado para conhecer um lugar calmo, como em cachoeiras, repleto de trilhas e com muita natureza, não é mesmo? Se você concorda com essa afirmação, compre esse presente.
			<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p3.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Visita a museu de artes</h2>
            <br>
            <p class="lead">Os museus tiveram origem no hábito humano do colecionismo, que nasceu junto com a própria humanidade. Desde a Antiguidade remota, o homem por infinitas razões, coleciona objetos e lhes atribui valor, seja afetivo, cultural ou simplesmente material, o que justifica a necessidade de sua preservação ao longo do tempo.
            <br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p4.jpg')}}" width="350px" height="350px">
          </div>
        </div>
  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Ida ao Monte Everest e aluguel de equipamentos</h2>
            <br>
            <p class="lead">O monte Everest, também conhecido no Nepal como Sagarmāthā, no Tibete como Chomolungma e Zhūmùlǎngmǎ Fēng em chinês, é a montanha de maior altitude da Terra. Seu pico está a 8 848 metros acima do nível do mar, na subcordilheira Mahalangur Himal dos Himalaias.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p5.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Passeio nas ruas da Espanha</h2>
          <br>
            <p class="lead">A Espanha, país europeu da península Ibérica, tem 17 regiões autônomas com geografia e cultura diversas. Madri, a capital, abriga o Palácio Real e o Museu do Prado, obras erigidas por mestres europeus.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p6.jpg')}}" width="350px" height="350px">
          </div>
        </div>

        <hr class="featurette-divider">
 
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Noite de Chopp em Berlim</h2>
            <br>
            <p class="lead">Essa é uma das cervejarias mais famosas de Berlim. Já havíamos lido algumas coisas sobre ela e só fomos experimentar a primeira vez num festival de cervejas artesanais
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p7.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Entrada em casa de festa de Las Vegas</h2>
            <br>
            <p class="lead">Quem já conhece Las Vegas sabe que a cidade é única, um verdadeiro paraíso para quem gosta de curtir a noite. São diversas festas, pool parties e casas noturnas, presentei-nos com essa viagem.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p8.jpg')}}" width="350px" height="350px">
          </div>
        </div>
  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Jantar em Buenos Aires</h2>
            <br>
            <p class="lead">Buenos Aires sabe ser tradicional em seus restaurantes, deve ser incrível conhecer cada um deles. Que tal nos dar essa oportunidade?
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p9.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Passeio em praia do nordeste</h2>
            <br>
            <p class="lead">É praticamente uma missão impossível selecionar quais são as melhores praias do nordeste, já que são nove estados e mais de 3 mil quilômetros de litorais simplesmente encantadores, com direito a muita areia clara, águas cristalinas e sol o ano inteirinho.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p23.jpg')}}" width="350px" height="350px">
          </div>
        </div>

  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Jantar em restaurante Árabe</h2>
            <br>
            <p class="lead">A variedade na culinária árabe é muito grande. Suas especiarias vão desde confeitaria até receitas em que o ingrediente principal é o carneiro. Os árabes também são famosos pela sua panificação, e o pão sírio é um exemplo disso.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p11.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Passeio em praia de piscinas naturais</h2>
            <p class="lead">Uma piscina natural, em alguns casos conhecida como biopiscina é uma formação natural ou de construção humana, similar a uma piscina com água doce ou salgada em seu interior.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p12.jpg')}}" width="350px" height="350px">
          </div>
        </div>

  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Jantar em restaurante Japonês</h2>
            <br>
            <p class="lead">Como o Japão é uma nação insular, o seu povo consome muitos frutos do mar, além de peixe e outros produtos marinhos (como algas). Carne e galinha são comummente inseridos na culinária do cotidiano.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p26.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Compra de espumantes para festa particular</h2>
            <br>
            <p class="lead">Espumante Luigi Bosca Bohéme Brut Nature (750ML). Produtor: Luigi Bosca, Uva: 40% Chardonnay, 60% de Pinot Noir e Pinot Meunier. País: Argentina
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p14.jpg')}}" width="350px" height="350px">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Visita ao Cristo Redentor no Rio de Janeiro</h2>
            <br>
            <p class="lead">Cristo Redentor é uma estátua art déco que retrata Jesus Cristo, localizada no topo do morro do Corcovado, no Parque Nacional da Tijuca, com vista para a maior parte da cidade do Rio de Janeiro, Brasil.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
             </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p15.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Visita as praias de Alagoas</h2>
            <br>
            <p class="lead">Em Maceió, sua capital, estão localizadas as famosas praias Pajuçara e Ponta Verde, com hotéis, bares e restaurantes. 
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p16.jpg')}}" width="350px" height="350px">
          </div>
        </div>

  <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Visita a Torre Eiffel</h2>
            <br>
            <p class="lead">A torre, que é o edifício mais alto da cidade, é o monumento pago mais visitado do mundo, com milhões de pessoas frequentando-o anualmente.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p17.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Passeio em Veneza na Itália</h2>
            <br>
            <p class="lead">Veneza, a capital da região de Vêneto, no norte da Itália, é formada por mais de 100 pequenas ilhas em uma lagoa no Mar Adriático. A cidade não tem estradas, apenas canais, repletos de palácios góticos e renascentistas
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p18.jpg')}}" width="350px" height="350px">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Passeio em Berlim</h2>
            <br>
            <p class="lead">Berlim, a capital da Alemanha, existe desde o século XIII. Algumas recordações da história turbulenta da cidade no século XX são o Memorial do Holocausto e as ruínas do Muro de Berlim, repletas de grafites. 
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p19.jpg')}}" width="350px" height="350px">
          </div>
        </div>

      <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Passeio na Av.Paulista</h2>
            <p class="lead">
            	Considerada um dos principais centros financeiros da cidade, assim como também um dos seus pontos turísticos mais característicos,[2] a avenida revela sua importância não só como pólo econômico, mas também como centralidade cultural e de entretenimento.
            	<br><br><br>
            Valor do presente: 100,00R$
            <br>
            <br>
            <button class="btn btn-success">Comprar</button>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p20.jpg')}}" width="350px" height="350px">
          </div>
        </div>
        <div class="row featurette">
            
  </section>

  

  <!-- Call to Action Section -->
  <section class="page-section info" id="mensagem">
    <div class="container text-center">
      <h2 class="mb-4 text-light">Envie suas felicitações ao aniversariante</h2>
      <button class="btn btn-primary" onclick="novaMensagem()">Enviar Mensagem</button>

    </div>
  </section>

    <!--Modal de mensagem -->
        <div class="modal" tabindex="-1" role="dialog" id="dlgMensagens">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
              <div class="modal-header">
                <h5 class="modal-title">Mensagem</h5>
              </div>
            <div class="modal-body">

              <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                <textarea class="msg" placeholder=" Digite sua mensagem"></textarea>
                </div>  
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-dissmiss="modal">Enviar</button>
              <button type="cancel" class="btn btn-success" data-dissmiss="modal">Voltar</button>
              </div>
            </form>
          </div>
        </div>
      </div>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Localização do Evento</h2>
          <br>
          <hr class="divider my-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.3109390423983!2d-40.495167485876316!3d-9.394084793268165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773706b2a505417%3A0xb3e48135b740a83!2sRiver%20Shopping%20(Petrolina)!5e0!3m2!1spt-BR!2sbr!4v1572266366108!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('javascript')
  <script type="text/javascript">
    function novaMensagem(){
      $('#dlgMensagens').modal('show')
    } 

  </script>
@endsection