<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="casamentos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Inicio</a>
      </li>
      <li @if($current=="aniversarios") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/aniversarios">Site de Aniversários</a>
      </li> 
      <li @if($current=="planos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/planos">Planos</a>
      </li>
     
    </ul>
  </div>
</nav>