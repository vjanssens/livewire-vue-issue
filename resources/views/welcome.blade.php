<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased">
    <div id="app">
        <h1 class="text-xl">Hello world, in Blade</h1>

        <div class="border p-5">
            <livewire:parent-component />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        // VUE 2
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        });
    </script>

{{--        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>--}}
{{--        <script>--}}
{{--            // VUE 3--}}
{{--            const { createApp, ref } = Vue--}}

{{--            createApp({--}}
{{--                setup() {--}}
{{--                    const message = ref('Hello vue!')--}}
{{--                    return {--}}
{{--                        message--}}
{{--                    }--}}
{{--                }--}}
{{--            }).mount('#app')--}}
{{--        </script>--}}
</body>
</html>
