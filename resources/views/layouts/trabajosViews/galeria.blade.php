<div class="container galeria">
    <h1 class="text-center my-4 text-light rounded-5 fw-bold">Galería</h1>
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <h2 class="text-center text-light fw-bold">Eventos</h2>
            <div class="row">
                @for($i = 1; $i <= 6; $i++)
                <div class="col-6 col-sm-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/evento' . $i . '.jpg') }}" class="card-img-top img-s" alt="Evento {{ $i }}">
                    </div>
                </div>
                @endfor
            </div>
        </div>
        
        <div class="col-12 col-md-6 mb-4">
            <h2 class="text-center text-light fw-bold">Bodas</h2>
            <div class="row">
                @for($i = 1; $i <= 6; $i++)
                <div class="col-6 col-sm-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/boda' . $i . '.jpg') }}" class="card-img-top img-s" alt="Boda {{ $i }}">
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>