@extends('layouts.app')

@section('content')

<style>
        
        .contact-form{
            background: #fff;
            margin-top: 4%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 100%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }
            </style>
        
        
        <div class="container contact-form">

            <form method="POST" action="{{url('movieAdmin/'.$movie->id)}}">

            @method('PUT')

            @csrf

                <h3>Edit a Movie</h3>

                @if(session('mensajeUpdate'))

                <div class="alert alert-success">
                    {{session('mensajeUpdate')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

            @error('name')

                <div class="alert alert-danger">
                    The name is required
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @enderror

            @error('year')

            <div class="alert alert-danger">
                The year is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('description')

            <div class="alert alert-danger">
                The description is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('cast')

            <div class="alert alert-danger">
                The cast are required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('link')

            <div class="alert alert-danger">
                The Tariler's link is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('image')

            <div class="alert alert-danger">
                The image is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('rate')

            <div class="alert alert-danger">
                The rate is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('genre')

            <div class="alert alert-danger">
                The genre is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

            @error('director')

            <div class="alert alert-danger">
                The Director's name is required

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @enderror

               <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Movie's name *" value="{{$movie->name}}" />
                        </div>

                        <div class="form-group">
                            <input type="year" name="year" class="form-control" placeholder="Release year *" value="{{$movie->year}}" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="director" class="form-control" placeholder="Director movie *" value="{{$movie->director}}" />
                        </div>

                        <div class="form-group">
                            <input type="number" name="rate" class="form-control" placeholder="Rate *" value="{{$movie->rate}}" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="image" class="form-control" placeholder="URL image *" value="{{$movie->image}}" />
                        </div>

                        <div class="form-group">
                            <button type="submit"class="btn btn-primary btn-block">Edit Movie</button>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Description *" style="width: 100%; height: 144px;">{{$movie->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="cast" class="form-control" placeholder="Cast *" value="{{$movie->cast}}" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="genre" class="form-control" placeholder="Genre *" value="{{$movie->genre}}" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="link" class="form-control" placeholder="Trailer Link *" value="{{$movie->link}}" />
                        </div>

                    </div>

                </div>
                
            </form>

        </div>

@endsection