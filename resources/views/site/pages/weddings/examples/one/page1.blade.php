@extends ('site.layouts.example', ['current' => 'casamentos'])

@section('main')

<link href="https://fonts.googleapis.com/css?family=Cinzel:700&display=swap" rel="stylesheet">

<!-- Masthead -->
  <header class="bg-example">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
        	<i class="far fa-heart fa-5x text-golden mb-5"></i>
          <h1 class="text-white font-weight-bold wedding-font display-1">NOME DO CASAL</h1>
          <hr class="divider my-4" style="border-color: white !important">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white font-weight-light mb-5 lead">Mensagem dos noivos</p>
          <button class="btn btn-xl btn-wedding js-scroll-trigger btn-1 cinzel-font shadow" style="font-size: 20pt;">Galeria de Fotos</button>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section info" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="text-white wedding-font display-1 mt-0">Informações sobre o casamento</h1>
          <hr class="divider light my-4">
          <p class="text-golden lead mb-4 p-3" style="font-size: 20pt">Local da cerimonia: / Local da Festa: / Data das celebrações e horários: / Informações sobre o tipo de trajes: e informações adicionais </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#presentes">Lista de Presentes</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="presentes">
    <div class="container">
      <h2 class="text-center mt-0">Lista de Presentes</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p1.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio no Saara</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p2.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Turismo rural</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p3.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio em Cachoeira</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p4.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Visita a museu de artes</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
         <img class="borda boxmodel2 " src="{{asset('images/wedding/p5.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Ida ao Monte Everest e aluguel de equipamentos</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p6.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio nas ruas da Espanha</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p7.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Noite de Chopp em Berlim</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p8.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Entrada em casa de festa de Las Vegas</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p9.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Jantar Romântico em Buenos Aires</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p10.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Noite do Vinho na Argentina</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p11.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Jantar em restaurante Árabe</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p12.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio em praia de piscinas naturais</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
       <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p13.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Festa com DJ particular para o casal</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p14.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Compra de espumantes para festa particular</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p15.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Visita ao Cristo Redentor no Rio de Janeiro</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p16.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Visita as praias de Alagoas</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
       <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p17.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Visita a Torre Eiffel</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p18.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio em Viena na Itália</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p19.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio em Berlim</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p20.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Passeio na Av.Paulista</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
       <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p21.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Ingressos para jogo do Brasil</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p22.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Aluguel de carro em viagem</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p23.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Aluguel de lancha para passeio romântico</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p24.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Ingresso para visitar Girafas</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
       <br>
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img class="borda boxmodel2 " src="{{asset('images/wedding/p25.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Decoração para jantar romântico</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <img class="borda boxmodel2 " src="{{asset('images/wedding/p26.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Jantar em Restaurante Japonês</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p27.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Dirigir carro de formula 1 na Itália</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
           <img class="borda boxmodel2 " src="{{asset('images/wedding/p28.jpg')}}" width="250px" height="250px">
            <br>
            <br>
            <h5 class="h5 mb-2">Aluguel de equipamentos para escalar</h5>
            <p class="text-muted mb-0">100,00R$</p>
            <br>
            <button class="btn btn-primary">Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Call to Action Section -->
  <section class="page-section info" id="mensagem">
    <div class="container text-center">
      <h2 class="mb-4 text-light">Depósite o seu amor através de uma mensagem para o casal</h2>
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