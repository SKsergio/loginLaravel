@extends('templates.App') {{--extendiendo la plantilla o layaout--}}

{{-- title --}}
@section('title', 'Registro')

{{-- links de css --}}
@push('css')
    <link rel="stylesheet" href="{{asset('../resources/css/form.css')}}">
@endpush

@section('content')
    <div class="container">
        <h1 class="my-9 text-5xl text-center">Registrate</h1>

        <div class="form_reg not_log">
            <form action="{{route('Login.registrar')}}" method="POST" class="form_course_register">
                @csrf

                @if(count($errors) > 0)
                    <div class="bg-blue-300 p-2 mt-2">
                        <p class="text-black-500 mb-2">Corrige los siguientes erroes:</p>
                        <ul class="list-disc pl-10">
                            @foreach ($errors->all() as $message)
                                <li text-red-500>{{$message}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container_inputs">

                    <div class="input_box">
                        <input type="text" autocomplete="off" name="name" required class="input_file" value="{{old('name')}}">
                        <span>User</span>
                        <i></i>
                    </div>

                    <div class="input_box">
                        <input type="email" autocomplete="off" name="email" required class="input_file" value="{{old('email')}}">
                        <span>Mail</span>
                        <i></i>
                    </div>
    
                    <div class="input_box">
                        <input type="password" autocomplete="off" name="password" id="" class="input_file" required value="">
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="input_box">
                        <input type="password" autocomplete="off" name="password_confirmation" id="" class="input_file" required value="">
                        <span>Confirm Password</span>
                        <i></i>
                    </div>
                </div>

                <div class="container_buttons">
                    <input type="submit" value="Registrarse" class="btn my-3">
                </div>
            </form>

            <div class="login_content">
                <div class="input_box">
                    <p class="text_info text-xl">Ya tienes una cuenta?
                        <a href="{{route('login')}}" class="link_register">Logeate aqui</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection