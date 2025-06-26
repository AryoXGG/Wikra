<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Wikra - Project Management</title>
    @yield('meta')

    <!-- Sortable.js -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

    <!-- Load CSS and JS once via Vite -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/boards.js',
        'resources/js/tasks.js'
    ])
</head>

<body>
    <div class="flex-col">
        @yield('content')
    </div>

    @stack('scripts')
</body>

</html>