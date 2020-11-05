<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
            <!-- @{{x}}
            <button v-on:click="wii()">print</button> -->
        </div>


        <!-- <script>
        new Vue({
            el: '#app',
            data: {
                x: 'Hello Vue.js!'
            },
            methods: {
                    wii: function () {
                        alert("foda né")
                    }
            }
            })
        </script> -->

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
