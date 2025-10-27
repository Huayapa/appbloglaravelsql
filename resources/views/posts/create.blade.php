<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Publicación</title>

    {{-- Vincular CSS y JS con Vite --}}
    @vite(['resources/css/create.css', 'resources/js/create.js'])
</head>
<body>
    <!-- Fondo animado -->
    <canvas id="starfield"></canvas>

    <div class="container">
        <h1 class="title">🚀 Crear Nueva Publicación</h1>
        <p class="subtitle">Comparte tus ideas en un entorno galáctico 🌠</p>

        <form action="{{ route('posts.store') }}" method="POST" class="form-post">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" placeholder="Escribe el título" required>
            </div>

            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" placeholder="Escribe el contenido" required></textarea>
            </div>

            <button type="submit" class="btn-guardar">✨ Guardar</button>
        </form>
    </div>
</body>
</html>
