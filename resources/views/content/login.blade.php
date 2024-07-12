@extends('templates.App') {{--extendiendo la plantilla o layaout--}}

{{-- title --}}
@section('title', 'login')

{{-- links de css --}}
@push('css')
    <link rel="stylesheet" href="{{asset('../resources/css/form.css')}}">
@endpush

@section('content')
    <div class="container">
        <h1 class="my-9 text-5xl text-center">Login</h1>

        <div class="form_reg">
            <form action="{{route('Login.login')}}" method="POST" class="form_course_register">
                @csrf

                <div class="container_inputs">
                    <div class="input_box">
                        <input type="email" autocomplete="off" name="email" required class="input_file">
                        <span>Mail</span>
                        <i></i>
                    </div>
    
                    <div class="input_box">
                        <input type="password" autocomplete="off" name="password" id="" class="input_file" required>
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="input_box">
                        <input type="checkbox" name="remember" id="recordar">
                        <label for="recordar" class="text_info cursor-pointer">Mantener Sesion Iniciada</label>
                    </div>
    
                    <div class="input_box">
                        <p class="text_info">No tienes una cuenta?
                            <a href="{{route('registrate')}}" class="link_register">Registrate aqui</a>
                        </p>
                    </div>

                </div>

                <div class="container_buttons">
                    <input type="submit" value="Enviar" class="btn my-3">
                </div>

                @error('email')
                    <div class="bg-red-700 text-white">Error: {{$message}}</div>
                @enderror
               
                
            </form>
        </div>
    </div>
@endsection