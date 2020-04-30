<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">navegação</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('banner') }}" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Banners
                                </span></a>
                        </li>
                        
                        <li class="sidebar-item mt-2"> <a class="sidebar-link" href="{{ route('noticia') }}" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Noticias</span></a></li>
                        <li class="sidebar-item mt-2"> <a class="sidebar-link" href="{{ route('webinar') }}" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Webminars</span></a></li>
                        <li class="sidebar-item mt-2"> <a class="sidebar-link" href="{{ route('conteudo') }}"><i data-feather="book" class="feather-icon"></i><span class="hide-menu">Conteudo</span></a></li>
                        <li class="sidebar-item mt-2"> <a class="sidebar-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i data-feather="book" class="feather-icon"></i><span class="hide-menu">
                                        {{ __('Logout') }} </span>
                                    </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>