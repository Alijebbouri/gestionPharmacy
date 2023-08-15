<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('redirect')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Produit</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('produits.index')}}">Voir Produit</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('produits.create')}}">Ajouter Produit</a></li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}">Voir Utilisateur</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('users.create')}}">Ajouter Utilisateur</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{route('produits.index')}}">
            <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Produits</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('orders')}}">
            <i class="mdi mdi-cart menu-icon"></i>
          <span class="menu-title">Commndes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Utlisateurs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contact-view')}}">
            <i class="mdi mdi-phone menu-icon"></i>
          <span class="menu-title">Contact</span>
        </a>
      </li>
    </ul>

  </nav>
