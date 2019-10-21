@extends('site.layouts.default', ['current' => 'root  '])

@section('main')

<main>
  <br>
  <nav>
    <a style="font-family: raleway" href="/casamentos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casamentos</a>
    <a href="/aniversarios">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aniversários</a>
    <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Planos</a>
    <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contatos</a>
    <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sobre</a>
  </nav>
  <header class="p-5">
    <div style="font-family: raleway" class="row m-0 p-0">
      <div class="col-lg-6 col-md-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/casamentos.jpeg" height="400px" width="400px" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/corporativos.jpg" height="400px" width="400px" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/niver.jpeg" height="400px" width="400px" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> 
      <div class="col-lg-6 col-md-6" id="inicio">
        <h1 class="text-dark">Events</h1>
        <br>
        <p class="text-dark">
          O seu presente da maneira mais cômoda possível, o seu convidado compra um presente no nosso site e você recebem em dinheiro. Seja para qualquer tipo de evento, basta fazer o cadastro e fazer parte da nossa rede.
          <br>
          <br>
          Aqui você pode ter a confirmação de todos os que irão estar presentes em seu evento, assim como acesso aos presentes recebidos, com a vantagem de seu convidado poder, passar o cartão ou boleto bancário e te presentear da melhor forma.
          <br>
          <br>
          O Events foi criado com o intuito de acabar com o constragimento de pedir dinheiro ao seu convidado para que contribuir com sua festa, nós transformando o presente em dinheiro.
          <br>
          <br>
          Para maiores informações, entre em contato conosco
        </p>
        <div class="row col-md-8">
          <button><font size="4">Entrar</font> </button>&nbsp;&nbsp;&nbsp;
          <button><font size="4">Cadastrar-se</font> </button>
        </div>
      </div>
    </div>
  </header>
  
  <section>
    <div>
      <h1 class="text-center mb-5"> Modelos para o seu site! </h1>
    </div>
    <div class="row">
      <div class="col-md-4">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/layoutcasamento.jpeg" height="400px" width="400px">
        <br>
        <a  href=""> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5">Layouts de casamento</font></a>
      </div>
      <div class="col-md-4">
        <img src="images/layoutcorporativo.jpg" height="400px" width="400px">
        <a  href=""> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<font size="5">Layouts de eventos corporativos</font></a>
      </div>
      <div class="col-md-4">
        <img src="images/niver.jpeg" height="400px" width="400px">
        <a  href=""> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5">Layouts de aniversários</font></a>
      </div>
    </div>
  </section>

  <br>
  <br>
  
  <section>
    <div>
      <h1 style="font-family: raleway" class="text-center mb-5">
        Planos
      </h1>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Plano 1</h3>
        <br>
        <p>
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
      </div>
      <div class="col-md-3">
        <h3>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Plano 2</h3>
        <br>
        <p>
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
      </div>
      <div class="col-md-3">
        <h3>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Plano 3</h3>
        <br>
        <p>
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
      </div>
      <div class="col-md-3">
        <h3>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Plano 4</h3>
        <br>
        <p>
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>
      </div>
    </div>
  </section>

  <br>
  
  <section>
    <div style="font-family: fantasy" id="contatos">
      <div class="row">
        <div class="col-md-6">
          <h3  class="text-dark" style="font-family: raleway">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Formulário de contato </h3>
          <br>

          <form>
            <div class="form-row">
              <div  style="font-family: raleway" class="form-group col-md-6">
                <label>Nome</label>
                <input name="nome" class="form-control" placeholder="Nome">
              </div>
              <div  style="font-family: raleway" class="form-group col-md-6">
                <label>Telefone</label>
                <input name="telefone" class="form-control" placeholder="Telefone">
              </div>
            </div>
            <div   style="font-family: raleway" class="form-group">
              <label>Email</label>
              <input name="email" class="form-control" placeholder="email">
            </div>
            <div  style="font-family: raleway" class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea name="mensagem" placeholder="mensagem" class="form-control" id="exampleFormControlTextarea1" ></textarea>
            </div>
            
            <div class="form-row">
              
            </div>
            
            <div class="form-group">

            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        
        <div style="font-family: raleway" class="col-md-6 text-center">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h4>Contatos:</h4>
          <label>Tel.: (87) 98875-5062</label>
          <br>
          <i style="font-family: raleway"> events2019@gmail.com</i>
        </div>
      </div>
    </div>
  </section> 
  
</main>
@endsection
