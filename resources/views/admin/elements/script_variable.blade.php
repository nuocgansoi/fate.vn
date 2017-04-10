<script>
    const trans = function (code) {
        let maps = {!! js_trans(['validation']) !!};
        let pieces = code.split('.');
        if (pieces.length == 2 && typeof maps[pieces[0]] !== undefined) {
            return maps[pieces[0]][pieces[1]] || code;
        }
        return maps[code] || code;
    };
</script>