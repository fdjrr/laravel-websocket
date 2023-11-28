<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel WebSocket</title>
</head>

<body>
    <h1 id="sayHello"></h1>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Echo.channel(`hello-channel`)
            .listen('HelloEvent', (e) => {
                console.info(e)

                const sayHello = document.querySelector('#sayHello')
                if (sayHello) {
                    sayHello.innerHTML = e.data
                }
            });
        })
    </script>
</body>

</html>