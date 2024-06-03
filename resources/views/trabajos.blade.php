@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.trabajosViews.galeria')
    @include('layouts.botoncontactar')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        /* Main Styling */
        html,
        body {
            font-family: 'Monserrat', sans-serif;
            
        }

        h1,
        h2 {
            font-family: 'Catamaran', sans-serif !important;
        }

        .btn-info {
            background: #0000FF;
            border: 0;
            color: #fff;
        }

        .btn-info:hover {
            background: #000;
            border: 0;
            color: #fff;
        }

        .btn-primary {
            background: #FFDAB0;
            border: 0;
        }

        .btn-primary:hover {
            background: #fff;
            border: .5px solid #199ff9;
            color: #199ff9;
        }

        .img-s {
            width: 100%;
            height: 110px;
            object-fit: cover;
        }

        .card {
            border: none;
        }

        .card:hover {
            transform: scale(1.20);
            transition: transform 0.3s ease;
        }

        /* Utility clases */

        .py-6 {
            padding: 80px 0;
        }

        .galeria {
            background: url('/img/background-testimonio.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* navbar style */
        .navbar-custom {
            background: linear-gradient(to right, #FFDAB0, #fad0c4, #ff9a9e);
            border-bottom: 3px solid #fff;
        }

        /* bootsytrap style */
        .text-light {
            color: #6A3093 !important;
        }

        .text-primary {
            color: #ff9a9e !important;
        }

        /* footer */
        .footer {
            background: linear-gradient(to right, #FFDAB0, #fad0c4, #ff9a9e);
            border-bottom: 3px solid #fff;
            position: relative;
            padding-bottom: 50px;
            /* Espacio para el copyright */
        }

        /* Mobile */
        @media(max-width: 768px) {
            .py-6 {
                padding: 20px;
            }

            .galeria-eventos,
            .galeria-boda,
            .card {
                padding: 10px !important;
            }
        }
    </style>
@endsection
