<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Publicación</title>

    {{-- Vincular CSS y JS con Vite --}}
    @vite(['resources/css/edit.css', 'resources/js/edit.js'])
</head>
<body>
    <!-- Fondo animado -->
    <canvas id="starfield"></canvas>

    <div class="container">
        <h1 class="title">✏️ Editar Publicación</h1>
        <p class="subtitle">Actualiza tu contenido con estilo moderno 🌌</p>

        <form action="{{ route('posts.update', $post) }}" method="POST" class="form-post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" required>{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="btn-guardar">💾 Actualizar</button>
        </form>
    </div>
</body>
</html>
