@extends('plantilla')
@section('seccion')

<style>

@import url('https://fonts.googleapis.com/css2?family=Barrio&display=swap');

.carrusel{
    width:900px;
}

.lol{
    font-family: 'Barrio', cursive;
    font-size: 40px;
}

.contact-form{
    background: #fff;
    margin-top: 3%;
    margin-bottom: 2%;
    width: 70%;
    text-align: center;
    color: #0062cc;
    font-size:40px;
}

</style>

    <div class="container">

          <div class="row d-flex justify-content-center">
                <h3 class="contact-form">The most updated trailers on the web</h3>
          </div>
          
    </div>

<div class="carrusel container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dam.smashmexico.com.mx/wp-content/uploads/2018/08/01154417/Las-taquilla-de-todas-las-pel%C3%ADculas-de-Marvel-de-la-peor-a-la-mejor.jpg" class="d-block w-100 rounded-lg" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>LOL TRAILERS</h3>
        <h4>A super easy to use web page, where you can keep updated on the latest movies</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.gq.com.mx/photos/5be9c77684b96eae55940080/16:9/w_1920,c_limit/las_peliculas_mas_vistas_y_taquilleras_del_cine_2051.jpg" class="d-block w-100 rounded-lg" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>LOL TRAILERS</h3>
        <h4>A super easy to use web page, where you can keep updated on the latest movies</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.lavanguardia.com/r/GODO/LV/p6/WebSite/2019/12/20/Recortada/img_astrid_20191223-145256_imagenes_lv_terceros_combopelis19-k3S-U472367896624VND-992x558@LaVanguardia-Web.jpg" class="d-block w-100 rounded-lg" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>LOL TRAILERS</h3>
        <h4>A super easy to use web page, where you can keep updated on the latest movies</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



@endsection
