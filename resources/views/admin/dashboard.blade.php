<x-app-layout>
    
    <section id="main">
      <div class="ms-3 mt-4 text-branco">
        <div class="title ml-5">
            <h4>Livros didáticos</h4>
            <h6>Confira os livros disponiveis das nossas editoras parceiras</h6>
        </div>

        <div class="m-2">
          <div class="d-flex items-center justify-center row m-0">
            <div class="col-sm-4 col-md-4 col-lg-2 p-4 m-2 mb-2 rounded-lgg d-flex items-center justify-center" style="background-color: #55AFD9;">
              <a href="http://" class="text-decoration-none">
              <img  src="img/Multiverso-linguagens.png"  alt="">
              <div >
                <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                <p style="color: white;margin: 0 0 0 0;font-size: small;">Linguagens</p>
              </div>
              </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 p-4 m-2 mb-2 rounded-lgg" style="background-color: #00A8E8;">
              <a href="http://" class="text-decoration-none">
                <img  src="img/Multiverso-Matematica.png" alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Matemática</p>
                </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 p-4 m-2 mb-2 rounded-lgg" style="background-color: #386FA4;">
              <a href="http://" class="text-decoration-none">
                <img  src="img/Multiverso-ciencias-da-natureza.png"  alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Natureza</p>
                </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 p-4 m-2 mb-2 rounded-lgg" style="background-color: #005A7C;">
              <a href="http://" class="text-decoration-none">
                <img  src="img/Multiverso-ciencias-humanas.png"  alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Humanas</p>
                </div>
                </a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 p-4 m-2 mb-2 rounded-lgg" style="background-color: #00A8E8;">
              <a href="http://" class="text-decoration-none">
                <img  src="img/Multiverso-Matematica.png" alt="">
                <div >
                  <p style="color: white;margin: 3px 0 0 0;" class="">Livros didáticos</p>
                  <p style="color: white;margin: 0 0 0 0;font-size: small;">Inglês</p>
                </div>
                </a>
            </div>
          </div>
          </div>

          <div class="mt-4 m-2">
          <div class="title mt-4 m-2">
            <h4 class="">Cadastro</h4>
            <h6>Cadastre as classes, alunos, professores e a gestão da sua instituição</h6>
        </div>

        <div class="flex-container mt-4">
          <div class="d-flex items-center justify-center row m-0">
            <div id="" class="col-sm-6 col-md-2 col-lg-2 d-flex items-center justify-center m-2 rounded-lg bg-transparente">
              <a href="{{route('classrooms.index')}}" class="text-decoration-none">
              <br>
              <img id="cadastro" class="h-20 w-54" src="img/sala-de-aula.png" alt="">
              <div>
                <h6 class="text-branco d-flex justify-center text-xl">Classe</h6>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-2 col-lg-2 d-flex items-center justify-center m-2 rounded-lg bg-transparente">
              <a href="" class="text-decoration-none">
              <br>
              <img id="cadastro" class="h-20 w-54" src="img/estudar.png" alt="">
              <div >
                <p  class="text-branco d-flex justify-center text-xl">Aluno</p>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-2 col-lg-2 d-flex items-center justify-center m-2 rounded-lg bg-transparente">
              <a href="{{route('teachers.index')}}" class="text-decoration-none">
              <br>
              <img id="cadastro" class="h-20 w-54" src="img/professor.png" alt="">
              <div>
                <p class="text-branco d-flex justify-center text-xl">Professor</p>
              </div>
              </a>
            </div>

            <div id="quadrado2" class="col-sm-6 col-md-2 col-lg-2 d-flex items-center justify-center m-2 rounded-lg bg-transparente">
              <a href="{{route('books.index')}}" class="text-decoration-none">
              <br>
              <img id="cadastro" class="h-20 w-54" src="img/gestão.png"  alt="">
              <div>
                <p class="text-branco d-flex justify-center text-xl">Livros</p>
              </div>
              </a>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section>

    <br>
    <br>
    <br>
</x-app-layout>
