<ul class="nav nav-tabs mt-4" id="nav-webinar">
  <li class="nav-item">
    <a class="nav-link {{ (request()->is('play/aspectos')) ? 'active' : '' }}" data-menu="1"  href="{{route('play')}}">Aspectos Clínicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  {{ (request()->is('play/gestao')) ? 'active' : '' }}" data-menu="2"  href="{{route('playgestao')}}">Gestão da saúde e liderança na  Pandemia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  {{ (request()->is('play/saude')) ? 'active' : '' }}" data-menu="3"  href="{{route('playsaude')}}">Cuidados com a equipe</a>
  </li>
</ul>