<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Galáctico 🌌</title>

    @vite(['resources/css/index.css', 'resources/js/index.js'])
</head>
<body>
    <canvas id="starsCanvas"></canvas>
    <div class="background-overlay"></div>

    <main class="main-container">
        <h1 class="titulo">🌌 Panel Galáctico</h1>
        <p class="subtitulo">Tus publicaciones flotando en el universo digital</p>

        <a href="{{ route('posts.create') }}" class="btn-crear">+ Crear nueva publicación</a>

        <div class="posts-grid">
            @foreach ($posts as $post)
                <div class="post-card">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <p class="post-content">{{ $post->content }}</p>

                    <div class="post-actions">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-edit">Editar</a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
