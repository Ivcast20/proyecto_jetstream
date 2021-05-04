<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!-- asset es un método que te redirecciona a la carpeta públic -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        @php
            $color = "green";
            $alert = "alert";
        @endphp
        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">
                <x-slot name="title">
                    Título 1
                </x-slot>
                Mensaje 1
            </x-alert>
            <x-alert>
                <x-slot name="title">
                    Título 2
                </x-slot>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus ex excepturi incidunt nulla nam accusamus nostrum aspernatur reiciendis a qui optio doloremque similique, saepe officia quia harum quibusdam! Accusamus, maiores? 2
            </x-alert>

            <x-alert2>
                <x-slot name="title">
                    Holaa
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt nihil veniam impedit eaque, delectus rem iste eligendi alias ea! Laboriosam in voluptates dolores ab perferendis architecto vero totam veniam.
            </x-alert2>

            <x-alert2 color="blue">
                <x-slot name="title">
                    Holaa
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt nihil veniam impedit eaque, delectus rem iste eligendi alias ea! Laboriosam in voluptates dolores ab perferendis architecto vero totam veniam.
            </x-alert2>

            <x-alert2 color="blue">
                <x-slot name="title">
                    Titulo prueba
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt nihil veniam impedit eaque, delectus rem iste eligendi alias ea! Laboriosam in voluptates dolores ab perferendis architecto vero totam veniam.
            </x-alert2>

            <x-alert2 color="yellow" class="mb-4">
                <x-slot name="title">
                    Titulo prueba
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt nihil veniam impedit eaque, delectus rem iste eligendi alias ea! Laboriosam in voluptates dolores ab perferendis architecto vero totam veniam.
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="title">
                    Titulo prueba
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id deserunt nihil veniam impedit eaque, delectus rem iste eligendi alias ea! Laboriosam in voluptates dolores ab perferendis architecto vero totam veniam.
            </x-dynamic-component>
        </div>
    </body>
</html>
