@extends ('site.layouts.default', ['current' => 'casamentos'])

@section('main')
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
            <strong>Crie o seu site de casamento</strong>
          </a>
      
        </div>
      </div>
    </header>

    <div>

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Site de Casamento</h1>
          <p class="lead text-muted">Com a criação do seu site de casamento os seus convidados podem acompanhar todas as novidades do seu evento, como: local do seu evento, data da cerimonia, da festa e todas as informações sobre o casamento. Com o grande diferencial de ter a lista de presente do seu casamento, inteiramente dentro do seu site. Transformando o seu presente em dinheiro, em que o seu convidado pode comprar o seu presente pelo site, através de cartão de crédito ou boleto, e o presente sendo revertido em dinheiro.</p>
          <p>
            <a href="/cadastros" class="btn btn-primary my-2">Cadastre-se</a>
          <button class="btn btn-primary" onclick="novoProduto()">Mais informações</button> 
          </p>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
              <div class="modal-header">
                <h5 class="modal-title">Site de Casamento</h5>
              </div>
            <div class="modal-body">

              <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                  <p>Com o site de casamento elaborado por nós, você escolhe um layout que te agrade, informa as suas informações e anexa imagens que serão exibidas no site. Escolhe presentes ficticios, como locais de viagens, produtos e define um preço para cada presente, após isso o seu convidado tem acesso ao seu site, além de ter todas as informações do seu evento ainda pode comprar o presente de acordo com o que foi listado. E escollhe a forma de pagamento, você receberá em dinheiro o valor por cada presente que o seu convidado comprou.</p>
                </div>  
              </div>
              <div class="modal-footer">
              <button type="cancel" class="btn btn-primary" data-dissmiss="modal">Voltar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </section>


  <div class="album py-5 bg-light">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/casamentos.jpeg" height="1100px" width="1100px" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="text-dark">Layout Rústico</h1>
                <p>Layout com tom mais rústico, recomendável para quem deseja fazer sua festa com esse tipo de decoração</p>
                <p><button class="btn-lg btn-primary" onclick="slide1()">Ver Layout</button> 
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="images/phil.png" height="1100px" width="1100px" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="text-dark">Layout Praia</h1>
                <p>Layout aconselhavel para quem vai festejar o casamento locais de praia, rio, lago ou similar.</p>
                <p><button class="btn-lg btn-primary" onclick="slide2()">Ver Layout</button> </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/casamentos.jpeg" height="1100px" width="1100px" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Layout Classico</h1>
                <p>Recomendavel para casamentos mais tradicionais, com tons classicos.</p>
                <p><button class="btn-lg btn-primary" onclick="slide3()">Ver Layout</button> </p>
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
<br>
<br>
      <h3 class="text-center">Etapas para adiquirir seu site de casamento</h3>
      <br>
      <div class="row">

        <div class="col-md-4">

          <div class="card mb-4 shadow-sm">

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Passo 1</text></svg>
            <div class="card-body">
              <p class="card-text"> -> Cadastre-se no nosso site.</p>
              <p class="card-text"> -> Indique qual o tipo do seu evento.</p>
              <p class="card-text"> -> Escolha o plano que deseja adquirir.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"></div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Passo 2</text></svg>
            <div class="card-body">
              <p class="card-text"> -> Faça o login no nosso sistema.</p>
              <p class="card-text"> -> Escolha o Layout desejado.</p>
              <p class="card-text"> -> Insira suas informações pessoais.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                </div>
                 <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Passo 3</text></svg>
            <div class="card-body">
              <p class="card-text"> -> Escolha os nomes dos presentes.</p>
              <p class="card-text"> -> Escolha os valores dos presentes.</p>
              <p class="card-text"> -> Será gerado o seu site nos prazos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"></div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<br>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Volte para o topo</a>
    </p>
    <p>(Nome do Sistema) &copy; Utilizado para organizar o seu evento e exibir lista de presentes, para que o seu convidado compre um presente ficticio e você receba em dinheiro!</p>
    <p>Visite o nosso instagram, <a href="https://instagram.com/">(Nome do Insta)</a> ou envie uma mensagem para nosso e-mail <a href="https://gmail.com/">empresa@gmail.com</a>.</p>
  </div>
</footer>



<div class="modal" tabindex="-1" role="dialog" id="dlgSlide1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-horizontal" id="formProduto">
          <div class="modal-header">
            <h5 class="modal-title">Layout Rústico</h5>
          </div>
        <div class="modal-body">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/images/casamentos.jpeg" height="400px" width="500px" alt="Primeiro Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-400" src="/images/phil.png" height="400px" width="500px"  alt="Segundo Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-400" src="/images/casamentos.jpeg" height="400px" width="500px" alt="Terceiro Slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="cancel" class="btn btn-primary" data-dissmiss="modal">Voltar</button>
        </div>
        </form>
      </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="dlgSlide2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-horizontal" id="formProduto">
          <div class="modal-header">
            <h5 class="modal-title">Layout Praia</h5>
          </div>
        <div class="modal-body">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/casamentos.jpeg" height="400px" width="500px" class="d-block w-100" alt="priemeira">
       
      </div>
      <div class="carousel-item">
        <img src="images/phil.png" height="400px" width="500px" class="d-block w-100" alt="segundo">
       
      </div>
      <div class="carousel-item">
        <img src="images/casamentos.jpeg" height="400px" width="500px" class="d-block w-100" alt="terceiro">
       
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
          </div>
          <div class="modal-footer">
          <button type="cancel" class="btn btn-primary" data-dissmiss="modal">Voltar</button>
          </div>
        </form>
      </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="dlgSlide2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-horizontal" id="formProduto">
          <div class="modal-header">
            <h5 class="modal-title">Layout Classico</h5>
          </div>
        <div class="modal-body">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/casamentos.jpeg" height="400px" width="500px" class="d-block w-100" alt="priemeira">
       
      </div>
      <div class="carousel-item">
        <img src="images/phil.png" height="400px" width="500px" class="d-block w-100" alt="segundo">
       
      </div>
      <div class="carousel-item">
        <img src="images/casamentos.jpeg" height="400px" width="500px" class="d-block w-100" alt="terceiro">
       
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
          </div>
          <div class="modal-footer">
          <button type="cancel" class="btn btn-primary" data-dissmiss="modal">Voltar</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('javascript')
  <script type="text/javascript">
    function novoProduto(){
      $('#dlgProdutos').modal('show')
    } 
    function slide1(){
      $('#dlgSlide1').modal('show')
    }
    function slide2(){
      $('#dlgSlide2').modal('show')
    }
    function slide3(){
      $('#dlgSlide2').modal('show')
    }

  </script>
@endsection