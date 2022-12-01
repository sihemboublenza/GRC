 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('layout.index')}}">
        <div class="sidebar-brand-icon">
          <img src="img/logo/favicon.png">
        </div>
        <div class="sidebar-brand-text mx-3">CRM</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('layout.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Tables
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Forms</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Forms</h6>
            <a class="collapse-item" href="{{url('layout.form_basic')}}">Form Basics</a>
            <a class="collapse-item" href="{{url('layout.form_avancé')}}">Form Advanceds</a>
          </div>
        </div>
      </li>
<li class="nav-item">
        <a class="nav-link" href="{{url('layout.prospect')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Prospects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="{{url('layout.produit')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Clients</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="{{url('layout.produit')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('layout.opportunité')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Opportunités</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="{{url('layout.produit')}}">
          <i class="fa fa-calendar"></i>
          <span>Rendez-Vous</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('layout.produit')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Produits</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="{{url('layout.produit')}}">
          <i class="fas fa-users fa-sm fa-fw mr-2"></i>
          <span>Utilisateurs</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    </ul>