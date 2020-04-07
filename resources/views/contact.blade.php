@extends('plantilla')

@section('seccion')

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

    <form method="POST" action="{{url('/contact/send')}}">

    @csrf

        <h3>Contact us!</h3>

            @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>

            @endif
        

       <div class="container">

            <div class="">

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Insert your name *" value="" />
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Insert your email *" value="" />
                </div>

                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Insert your message *" style="width: 100%; height: 144px;">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit"class="btn btn-primary btn-block">Send message</button>
                </div>
                
            </div>

        </div>

    </form>

    <div class="container">

        <h3>Come to visit us!</h3>

        <div class="row">
            <div class="col-10 mx-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.8946607354605!2d-70.69369018567551!3d19.460107986868678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1c58b160e7e85%3A0x2d08bea29f81a27!2sInstituto%20Tecnol%C3%B3gico%20de%20las%20Am%C3%A9ricas%20(ITLA)!5e0!3m2!1ses-419!2sdo!4v1586138418683!5m2!1ses-419!2sdo" 
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
                aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

</div>

@endsection