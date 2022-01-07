@extends('layout.base')

@section('content')
<div class="container">

    <div class="form-container">
        <form class="product-form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h3>Contáctanos</h3>
                <hr>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="name-field">Correo electrónico:</label>
                        <input class="form-control" type="email" id="name-field" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name-field">Asunto:</label>
                        <input class="form-control" type="text" id="name-field" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name-field">Mensaje:</label>
                        <textarea class="form-control" id="name-field" rows="4" cols="50" name="description" required></textarea>
                    </div>

                    <input type="submit" class="btn btn-blue w-80 mt-3" value="Enviar">
                </div>
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7513.358627256849!2d-99.14987582734543!3d19.683682298909435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f4e279e544af%3A0x46b5dca8d68cad9c!2sJoyas%20de%20Cuautitlan%2C%20El%20Terremoto%2C%2054803%20Cuautitl%C3%A1n%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1638802770867!5m2!1ses-419!2smx" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy" id="contact-map"></iframe>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection