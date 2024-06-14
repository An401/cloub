<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--     
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet"> -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="bg-fundo bg-cover">

    <nav id="Navbar" >
      <div class="container-fluid d-flex  bg-transparente">
        <div class="container-fluid d-flex justify-between">
          <div>
            <img id="logo1" src="img/logoCloub.png" height="50" width="40" alt="">
          </div>
          
          
          <div class="d-flex items-center justify-between text-branco ">
            <div class="hidden space-x-8 items-center justify-center sm:ms-10 sm:flex">
                <x-nav-link :href="route('admin/dashboard')" :active="request()->routeIs('dashboard')" class="text-white" style="text-decoration:none;">
                    {{ __('Tela Inicial') }}
                </x-nav-link>
            </div>

            <div class="hidden space-x-8  sm:ms-10 sm:flex">
              <x-nav-link :href="route('books.index')" :active="request()->routeIs('dashboard')" class="text-white" style="text-decoration:none;">
                            {{ __('Livros') }}
              </x-nav-link>
            </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('teachers.index')" :active="request()->routeIs('dashboard')" class="text-white" style="text-decoration:none;">
                            {{ __('Professores') }}
                        </x-nav-link>
                    </div>

                    <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('admin/comunidade')" :active="request()->routeIs('dashboard')" class="text-white" style="text-decoration:none;">
                            {{ __('Comunidade') }}
                        </x-nav-link>
                    </div> -->
            </div>

            <div class="d-flex items-center justify-end m-0">
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin/dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
      </div>

      
    </nav>


    <!--Comunidade-->


    <section id="main">
      <div>
        <div class="title d-flex items-center justify-start ms-3 mt-8 text-branco">
          <div class="row ml-7">
            <h4 class="">Comunidade</h4>
            <h6>Espaço de interação entre alunos e professores através de comunicados e acessar o perfil do professor </h6>
          </div>
        </div>
        
          
        <div class="flex-container mt-8">
          <div class="row">
            <div class="col d-flex justify-center" >
              <a href="http://" class="text-decoration-none">
              <img id="fotos"  src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
              </a>
            </div>
            <div class="col">
              <a href="http://" class="text-decoration-none">
              <img id="fotos" class="" src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
              </a>
            </div>
            <div class="col">
              <a href="http://" class="text-decoration-none">
                <img id="fotos" class="" src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
                </a>
            </div>
            <div class="col">
              <a href="http://" class="text-decoration-none">
                <img id="fotos" class="" src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
                </a>
            </div>
            <div class="col">
                <a href="http://" class="text-decoration-none">
                  <img id="fotos" class="" src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
                  </a>
              </div>
              <div class="col">
                <a href="http://" class="text-decoration-none">
                  <img id="fotos" class="" src="img/professor1.png" style="width: 100px;border-radius: 100%;" alt="">
                  </a>
              </div>
          </div>
        </div>

<br>
<br>

        <div>          
            <div class="row">
                <div class="col d-flex justify-content-center" >
                  <img id="fotoscomunidade" class="col-sm-4 col-md-3 col-lg-1" src="img/professor1.png" alt="" style=" border-radius: 100%;">
                  <div class="col ms-2 rounded-lg p-2" style="background-color: #55AFD9;">
                    <a href="http://" class="text-decoration-none"></a>
                    <div class="">
                      <h5 class="" >Professor - Quimica - Segundo Ano</h5>
                      <p class="mt-2">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar, sem non porta aliquam, neque nisi rhoncus nunc, eget volutpat mi est sed dui. Aliquam bibendum massa nec tellus mattis, vitae posuere magna accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae elit vehicula, iaculis est vel, aliquet arcu</p>
                    </div>
                </div>
            </div>
            



  
        

     

  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>