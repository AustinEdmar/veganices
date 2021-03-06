
    @extends('layouts.template')

    @section('title','Comunidade')

    @section('css')
        <link rel="stylesheet" href="{{asset('assets/css/community/style.css')}}">
    @endsection

    @section('content')
   <div class="container-fluid corpoConteudo">
        <div class="row">
            <div class="col-lg">
                <div class="media">
                    <ul class="list-unstylied">
                        <li class="list-group">
                            <a class="media d-flex flex-row-reverse mb-3 linkComunidadecor"
                                style="text-decoration: none" href="#">
                                <img src="{{asset('assets/img/community/batman.jpg')}}" alt="batman"
                                    class="img-thumbnail rounded  imgComunidadePessoas ml-2 shadow ">
                                <div class="media-body align-self-center col-lg">
                                    <h6><strong> Eu sou o Batman!!! </strong> </h6>
                                    <small class=" text-muted">Batman</small>
                                    <br>
                                    <small class=" text-muted">Faz 4 Horas</small>
                                </div>
                            </a>
                        </li>
                        <li class="list-group ">
                            <a class="media mb-3 linkComunidadecor" style="text-decoration: none" href="#">
                                <img src="{{asset('assets/img/community/deadpool.jpg')}}" alt="batman"
                                    class="img-thumbnail rounded  imgComunidadePessoas mr-2  shadow">
                                <div class="media-body align-self-center col-lg">
                                    <h6> <strong> acredite sou vegano, só mato gente =) </strong> </h6>
                                    <small class=" text-muted">DeadPool</small>
                                    <br>
                                    <small class=" text-muted">Faz 1 Horas</small>
                                </div>
                            </a>
                        </li>
                        <li class="list-group">
                            <a class="media d-flex flex-row-reverse mb-3 linkComunidadecor"
                                style="text-decoration: none" href="#">
                                <img src="{{asset('assets/img/community/wonderwoman.jpg')}}" alt="batman"
                                    class="img-thumbnail rounded  imgComunidadePessoas shadow">
                                <div class="media-body align-self-center col-lg">
                                    <h6> <strong> Só comemmos frutas frescas da árvore dos Deuses </strong> </h6>
                                    <small class=" text-muted">Wonder Woman </small>
                                    <br>
                                    <small class=" text-muted">Faz 3 Horas</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5 d-flex align-items-center">
                <div class="d-flex align-items-center bordaComunidade rounded">
                    <div class="col-lg  ">
                        <h2 class="text-center font-weight-bold "> Comunidade </h2>
                        <p class="text-justify text-center"> Compartilhe e resolva suas dúvidas com a ajuda de outros
                            veganos</p>
                        <form method="POST" class="d-flex justify-content-center ">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <input type="text" name="pesquisa" class="form-group btn-lg "
                                    placeholder="O que procurar?">
                                <button type="button" class="btn btn-sm form-group corbuttonComunidade"> busca </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg ">
                <div class="media">
                    <ul class="list-unstylied">
                        <li class="list-group">
                            <a class="media mb-3 linkComunidadecor" style="text-decoration: none" href="#">
                                <div>
                                    <img src="{{asset('assets/img/community/ironman.jpg')}}" alt="batman"
                                        class="img-thumbnail rounded  imgComunidadePessoas mr-2 shadow">
                                </div>
                                <div class="media-body align-self-center col-lg">
                                    <h6> <strong> Só uso óleo de coco na armadura </strong> </h6>
                                    <small class=" text-muted">Iron Man</small>
                                    <br>
                                    <small class=" text-muted">Faz 3 Horas</small>
                                </div>
                            </a>
                        </li>
                        <li class="list-group">
                            <a class="media d-flex flex-row-reverse mb-3 linkComunidadecor"
                                style="text-decoration: none" href="#">
                                <img src="{{asset('assets/img/community/super.jpg')}}" alt="batman"
                                    class="img-thumbnail rounded imgComunidadePessoas shadow">
                                <div class="media-body align-self-center col-lg">
                                    <h6><strong> Vitamina b12 que nada... quero é vitamina D </strong> </h6>
                                    <small class=" text-muted">Kal-El</small>
                                    <br>
                                    <small class=" text-muted">Faz 0:30 Horas</small>
                                </div>
                            </a>
                        </li>
                        <li class="list-group">
                            <a class="media mb-3 linkComunidadecor" style="text-decoration: none" href="#">
                                <img src="{{asset('assets/img/community/lobo.jpg')}}" alt="batman"
                                    class="img-thumbnail rounded  imgComunidadePessoas mr-2 shadow">
                                <div class="media-body align-self-center col-lg">
                                    <h6> <strong> Vegano é uma MER.... </strong> </h6>
                                    <small class=" text-muted">Maioral</small>
                                    <br>
                                    <small class=" text-muted">Faz 10 Horas</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="carouselcol mt-5 mb-5">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class=" imgComunidade">
                    <a href="#" class="text-decoration-none">
                        <div class="backgroundLinkimg  d-flex align-items-center justify-content-center rounded">
                            <h2>Primeiros passos</h2>
                        </div>
                    </a>
                </div>
                <div class="imgComunidade">
                    <a href="#" class="text-decoration-none">
                        <div class="backgroundLinkimg  d-flex align-items-center justify-content-center rounded">
                            <h2>Dificuldades</h2>
                        </div>
                    </a>
                </div>
                <div class="imgComunidade">
                    <a href="#" class="text-decoration-none">
                        <div class="backgroundLinkimg  d-flex align-items-center justify-content-center rounded">
                            <h2>Alimentação</h2>
                        </div>
                    </a>
                </div>
                <div class="imgComunidade">
                    <a href="#" class="text-decoration-none">
                        <div class="backgroundLinkimg  d-flex align-items-center justify-content-center rounded">
                            <h2>Produtos Caseiros</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg ">
                <h4> <strong> O que mais tem sido falado... </strong> </h4>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="{{asset('assets/img/community/mulherGato.jpg')}}" alt="Mulher Gato" class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>Quero ser
                                    vegana, mas como largar os peixes!!! Minhau!!!</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Selina</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Dificuldades </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?
                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/gato1.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/gato2.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/gato3.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/gato4.jpg')}}" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="{{asset('assets/img/community/thor.jpg')}}" alt="Mulher Gato"
                                class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>E necessario
                                    ser vegano para ser digno?</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Thor</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Primeiros passos </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?

                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/thor1.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/tror2.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/tror3.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/thor4.jpg')}}" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="{{asset('assets/img/community/bane.jpg')}}" alt="Mulher Gato"
                                class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>Como atingir a
                                    necessecidade proteica com alimentacao vegana</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Bane</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Primeiros passos </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?
                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/bane1.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/bane2.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/bane3.jpg')}}" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="{{asset('assets/img/community/bane4.jpg')}}" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <div class="container d-flex justify-content-center mt-5 ">

        <div>

            <nav aria-label="Page navigation example ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>



    </div>

    @endsection


