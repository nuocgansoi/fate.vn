<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ isset($title) ? $title : config('app.name') }}</title>
    <link href="{{ asset('css/library.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        };
        const trans = function (code) {
            let maps = {!! js_trans(['validation']) !!};
            let pieces = code.split('.');
            if (pieces.length == 2 && typeof maps[pieces[0]] !== undefined) {
                return maps[pieces[0]][pieces[1]] || code;
            }
            return maps[code] || code;
        };
    </script>
</head>