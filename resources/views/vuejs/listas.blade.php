<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <div id="main">
            <ul>
                <li v-for="item in people"> {{ @$data }}</li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script type="text/javascript">
    new Vue({
        el:'#main',
        data:{
            people:['Luis', 'Gerardo', 'Alejandro', 'Javier']
        }
    });


    </script>
</body>

</html>