<div style="height:40px;"></div>
<ul class="nav nav-tabs mt-4" id="nav-webinar">
<li class="nav-item">
    <a class="nav-link {{ (request()->is('materiais-download/ferramentas')) ? 'active' : '' }}"   href="{{route('ferramentas')}}">Ferramentas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ (request()->is('materiais-download')) ? 'active' : '' }}" href="{{route('materiais-download')}}">Comunicação</a>
  </li>
</ul>