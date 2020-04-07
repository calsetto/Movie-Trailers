@extends('plantilla')

@section('seccion')

<style>
@import url('https://fonts.googleapis.com/css?family=PT+Sans');

body {
  margin: 0;
  padding: 0;
  font-family: 'PT Sans', sans-serif;


}


.card {
  background: #000;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0, 0.5);
  width: 300px;
  height: 450px;
}

.card .poster {
  position: relative;
  overflow: hidden;
}

.card .poster:before {
  content: "";
  position: absolute ;
  bottom: -190px;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg,#000 50%, transparent);
  transition: 0.5s;
  z-index: 1;
}

.card:hover .poster:before {
  bottom: 0;
}

.card .poster img {
  width: 100%;
  transition: 0.5s;
}

.card:hover .poster img {
  filter: blur(2px);
  transform: translateY(-30px);
}

.details {
  position: absolute;
  padding: 20px;
  width: 100%;
  height: 74%;
  bottom: -190px;
  left: 0;
  box-sizing: border-box;
  transition: 0.5s;
  z-index: 2;
}

.card:hover .details {
  bottom: 0;
}

.details h2 {
  color: #fff;
  margin: 0;
  padding: 0;
  font-size: 20px;
}

.details h2 span {
  font-size: 14px;
  color: #ff9800;
}

.rating {
  position: relative;
  padding: 5px, 0;
}

.rating .fa {
  color: #f7f406;
  margin-right: 2px;
  font-size: 16px;
}

.rating span {
  color: #fff;
  padding: 0 5px;
}

.tags {
  position: relative;
  margin-top: 5px;
}

.tags span {
  padding: 2px 5px;
  margin-right: 2px;
  color: #fff;
  display: inline-block;
  border-radius: 4px;
}

.tags span.fantasy {
  background: #7206f7;
}

.tags span.scifi {
  background: #f70661;
}

.info {
  color: #fff;
}

.info p {
  margin: 15px, 0, 10px;
}

.star {
  position: relative;
}

.star h4 {
  margin: 0;
  padding: 0;
  font-size: 20px;
  color: #f7f406
}

.star ul {
  margin: 10px 0 0;
  padding: 0;
  display: flex;
}

.star ul li {
  list-style: none;
  width: 45px;
  height: 45px;
  background: #fff;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 6px;
  border: 2px solid #fff;
}

.star ul li p {
  width: 100%;
  
}
</style>


<div class="container my-2 d-flex justify-content-start">

    <div class="row justify-content-md-start">
         @foreach($Movie as $item)

        <a href="{{route('show', $item)}}">
         
        <div class="col-sm-4 my-3">

            <div class="card">

              <div class="poster"><img src ={{$item->image}}></div>

                <div class="details">

                  <h2>{{$item->name}} {{$item->year}}<br><span>{{$item->director}}</span></h2>
  
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>{{$item->rate}}/10</span>
                    </div>
  
                    <div class="tags">
                        <span class="scifi">{{$item->genre}}</span>
                    </div>
              
                    <div class="info">
                        <p>{{$item->description}}</p>
                    </div>
              
                    <div class="star">
                    <h4>Cast</h4>
                        <p class="text-primary">
                          {{$item->cast}}
                        </p>

                    </div>

                  </div>

                </div>

              </div>
              
            </a>

            @endforeach

          </div>

      </div>

      <div class="container">

          <div class="row d-flex justify-content-center">
                {{$Movie->links()}}
          </div>
          
      </div>
    
@endsection