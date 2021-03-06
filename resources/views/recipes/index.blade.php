
  @extends('layouts.template')

  @section('title','Receitas')

  @section('content')

  <link rel="stylesheet" href="{{asset('assets/css/recipes/style.css')}}">

  <div class="space">
  </div>
  <div class="banner">
    <img class="bannerImg" src="{{asset('assets/img/recipes/banner.jpg')}}" />
    <div class="container">
      <div class="row">
        <div class="input-group mb-3 searchInput">
          <input type="text" class="form-control" placeholder="Restaurantes" aria-label="Restaurantes" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="button-addon2">Pesquisar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row mt-5">
        <aside class="col-12 col-md-3 border-right px-4 aside">
          <form class="d-none d-md-block">
            <h4>Filtro</h4>
            <div>
              <label class="font-weight-bold">Setor</label>
              <select class="custom-select select" name="setor" size="5">
                <option value="0">Todos os setores </option>
                <option value="1">Restaurantes</option>
                <option value="2">Produtos</option>
                <option value="3">Profissionais</option>
              </select>
            </div>
            <div class="mt-5 border-top pt-4">
              <label class="font-weight-bold">Região</label>
              <select class="custom-select select" name="regiao" size="5">
                <option value="0">Todas as regiões</option>
                <option value="1">Zona Norte</option>
                <option value="2">Zona Sul</option>
                <option value="3">Centro</option>
                <option value="4">Zona Leste</option>
                <option value="5">Zona Oeste</option>
              </select>
            </div>
            <div class="mt-5 border-top pt-4">
              <label class="font-weight-bold">Refeiçao</label>
              <select class="custom-select select" name="refeicao" size="5">
                <option value="0">Todos os tipos</option>
                <option value="1">Fastfood</option>
                <option value="2">Massas</option>
                <option value="3">Crudívera</option>
              </select>
            </div>
          </form>

          <form class="d-block d-md-none">
              <h4>Filtro</h4>

              <div>
                <label class="font-weight-bold">Setor</label>
                <select class="form-control" name="setor">
                  <option value="0">Todos os setores </option>
                  <option value="1">Restaurantes</option>
                  <option value="2">Produtos</option>
                  <option value="3">Profissionais</option>
                </select>
              </div>
              <div class="pt-4">
                <label class="font-weight-bold">Região</label>
                <select class="form-control" name="regiao">
                  <option value="0">Todas as regiões</option>
                  <option value="1">Zona Norte</option>
                  <option value="2">Zona Sul</option>
                  <option value="3">Centro</option>
                  <option value="4">Zona Leste</option>
                  <option value="5">Zona Oeste</option>
                </select>
              </div>
              <div class="pt-4">
                <label class="font-weight-bold">Refeiçao</label>
                <select class="form-control" name="refeicao">
                  <option value="0">Todos os tipos</option>
                  <option value="1">Fastfood</option>
                  <option value="2">Massas</option>
                  <option value="3">Crudívera</option>
                </select>
              </div>
            </form>
        </aside>  
        <main class="col-12 col-sm-9">
          <div class="text-right my-3">
          <a href="{{route('recipes.create')}}" class="btn btn-success">Adicionar</a>
        </div>
          @foreach($recipes as $recipe)
            <div class="row border-top ml-3">
              <div class="col-12 col-md-5">
                <div class="card-body d-flex flex-column">
                  <img class="restaurante" src="{{asset('app/imageRecipes/'.$recipe['image'])}}" />
                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="row">
                  <div class="col-9 card-body d-flex flex-column pl-0">
                    <h5 class="card-title mt-2">{{$recipe['name']}}</h5>
                    {{-- <h6 class="card-subtitle mb-2 text-muted">Um breve descrição do produto</h6> --}}
                  </div>
                  <div class="col-3 card-body d-flex flex-column">
                    <a href="#" class="card-link align-self-center d-flex flex-column">
                      <i class="material-icons align-self-center">favorite</i>
                    </a>
                  </div>
                <p class="card-text align-self-center m-0">{{$recipe->preparation_method}}</p>
                  <div class="col-12 d-flex justify-content-end my-3">
                  <a class="text-light btn btn-primary" href="{{route('recipes.show',['recipe'=> $recipe->id ])}}">Ver receita</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </main>
      </div>
    </div>
  </div>

  @endSection


