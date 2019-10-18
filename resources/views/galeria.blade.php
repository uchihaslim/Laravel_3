@extends('layouts.plantilla')

@section('cabecera')
    
   

@endsection

@section('inforGeneral')

<p> Aquí iría el contenido principal de la página </p>
{{-- 
@if (count($alumnos))
    
    <table width="50%" border="1">

        @foreach ($alumnos as $persona)

        <tr>

            <td>

                {{$persona}}

            </td>

        </tr>
            
        @endforeach

        @else

            {{"Sin alumnos"}}

    </table>

@endif --}}
    
@endsection

@section('pie')
    
@endsection