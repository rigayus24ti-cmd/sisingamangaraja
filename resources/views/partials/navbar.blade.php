<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Sisingamangaraja</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('biografi') }}">Biografi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('perjuangan') }}">Perjuangan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
      </ul>
    </div>
  </div>
</nav>
