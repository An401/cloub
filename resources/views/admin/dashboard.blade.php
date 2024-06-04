<x-app-layout>
    
    <section id="main">
      <div class="mt-12 ml-20 text-branco">
        <div class="title ml-4">
          <div class="row">
            <h4>Livros didáticos</h4>
            <h6>Confira os livros disponiveis das nossas editoras parceiras</h6>
          </div>
        </div>

        <div class="flex-container mt-4 ml-6">
          <div class="row">
            <div id="quadrado" class="col-sm-6 col-md-4 col-lg-2 p-4 sm:rounded-lgg" style="background-color: #55AFD9;">
              <a href="http://" class="text-decoration-none">
              <img id="livros" class="" src="img/Multiverso-linguagens.png" style="width: 200px;" alt="">
              <div >
                <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                <p style="color: white;margin: 0 0 0 0;font-size: small;">Linguagens</p>
              </div>
              </a>
            </div>
            <div id="quadrado" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lgg" style="background-color: #00A8E8;">
              <a href="http://" class="text-decoration-none">
                <img id="livros" class="" src="img/Multiverso-Matematica.png" style="width: 200px;" alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Matemática</p>
                </div>
                </a>
            </div>
            <div id="quadrado" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lgg" style="background-color: #386FA4;">
              <a href="http://" class="text-decoration-none">
                <img id="livros" class="" src="img/Multiverso-ciencias-da-natureza.png" style="width: 200px;" alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Natureza</p>
                </div>
                </a>
            </div>
            <div id="quadrado" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lgg" style="background-color: #005A7C;">
              <a href="http://" class="text-decoration-none">
                <img id="livros" class="" src="img/Multiverso-ciencias-humanas.png" style="width: 200px;" alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Humanas</p>
                </div>
                </a>
            </div>
          </div>
          </div>

          
          <div class="title mt-12 ml-4">
          <div class="row">
            <h4 class="" style="color: #D9FFFF;">Cadastro</h4>
            <h6 style="color: #D9FFFF;">Cadastre as classes, alunos, professores e a gestão da sua instituição</h6>
          </div>
        </div>

        <div class="flex-container mt-4">
          <div class="row">
            <div id="quadrado2" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lg" style="background-color: #d9d9d921;">
              <a href="{{route('teachers.index')}}" class="text-decoration-none">
              <img id="cadastro" class="" src="img/sala-de-aula.png"  alt="">
              <div>
                <h6 style="color: white;text-align: center;font-size: x-large; font-size:20px;" class="">Classe</h6>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lg" style="background-color: #d9d9d921;">
              <a href="{{route('teachers.index')}}" class="text-decoration-none">
              <img id="cadastro" class="" src="img/estudar.png"  alt="">
              <div >
                <p style="color: white;text-align: center;font-size: x-large;" class="">Aluno</p>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lg" style="background-color: #d9d9d921;">
              <a href="{{route('teachers.index')}}" class="text-decoration-none">
              <img id="cadastro" class="" src="img/professor.png"  alt="">
              <div>
                <p style="color: white;text-align: center;font-size: x-large;" class="">Professor</p>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-4 col-lg-2 p-4 ml-6 sm:rounded-lg" style="background-color: #d9d9d921;">
              <a href="{{route('teachers.index')}}" class="text-decoration-none">
              <img id="cadastro" class="" src="img/gestão.png"  alt="">
              <div>
                <p style="color: white;text-align: center;font-size: x-large;" class="">Gestão</p>
              </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- <h4 class="mb-0 mt-4 text-branco"> O que você deseja cadastrar?</h4>
                    
                    <div class="ms-auto d-flex">
                        <a href="{{route('teachers.index')}}" class="btn btn-primary me-2">Professores</a>
                        <a href="admins" class="btn btn-primary me-2">Admins</a>
                        <a href="students" class="btn btn-primary me-2">Alunos</a>
                        <a href="books" class="btn btn-primary">Livros</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
</x-app-layout>
