@extends('layouts.pages')

@section('title', $content->titulo)

@section('content')
    <section id="header" class="header">
        
        <div class="head">
            <div class="head__image" style="background: url('storage/{{ $content->imagen_principal }}') no-repeat center top/cover;" data-img-movil="background: url('storage/{{ $content->imagen_movil }}')">
                <div class="slide__info">
                    <h2 class="slide__title">{{ $content->titulo }}</h2>
        
                    <p class="slide__text">
                    {{ $content->subtitulo }}
                    </p>
                </div>
            </div>
        </div>

        <div class="navigation">
            @include('_partials.navbar')
            @include('_partials.menu')
        </div>
    </section>

    <section id="text__body" class="text__body">
        <p>{{$content->texto_principal}}</p>
    </section>

    <section id="gallery" class="gallery">
        @foreach ($gallery as $item)
            <div class="gallery__image">
                <img src="storage/{{$item->imagen_principal}}" alt="Imagen Servicios">
            </div>
        @endforeach
    </section>

    <section id="text__body" class="text__body">
        <p>{{$content->texto_secundario}}</p>
    </section>

    <section id="gallery" class="gallery">
        @foreach ($gallery as $item)
            <div class="gallery__image">
                <img src="storage/{{$item->imagen_principal}}" alt="Imagen Servicios">
            </div>
        @endforeach
    </section>

    <section id="text__body" class="text__body">
        <p>{{$content->texto_tres}}</p>
    </section>

    <section id="contact" class="contact">
        @include('_partials.contact')
    </section>
    
    <footer class="footer">
        @include('_partials.footer')
    </footer>
@endsection
