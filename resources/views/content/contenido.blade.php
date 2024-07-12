@extends('templates.App') {{--extendiendo la plantilla o layaout--}}

{{-- title --}}
@section('title', 'login')

{{-- links de css --}}
@push('css')
    <link rel="stylesheet" href="{{asset('../../css/forms.css')}}">
@endpush

@section('content')
    <div class="container">
        <div class="ct2">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore minima error, odit voluptatum
            sequi explicabo eius voluptates tenetur reiciendis repudiandae veniam ad quisquam, earum impedit, 
            quidem molestias perferendis laboriosam! Quis? Repudiandae quae velit, ipsam modi, necessitatibus
            placeat veniam fuga porro vitae quibusdam magnam iste. Veniam officiis illum rem totam sequi, culpa 
            atque voluptate tempore impedit, at sint iste aspernatur ipsum.
            Illo necessitatibus, facere debitis ab atque temporibus perferendis dolore odio optio modi voluptate 
            consequatur ad, molestias dolorum est fugit at tenetur rem quibusdam! Excepturi facere qui sunt quasi ex tenetur?
            Illo quae itaque reprehenderit odit sint praesentium animi atque voluptatibus voluptatem sit dolores
            hic repellendus in ipsam consequuntur, autem nisi sapiente et nemo molestiae dignissimos quos eaque commodi aperiam. Impedit.</p>
        </div>
    </div>
@endsection