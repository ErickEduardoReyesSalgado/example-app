@extends('layouts.master')

@section('menu')
    @parent
    <p>Este contenido es añadido al menú principal</p>
@endsection

@section('content')
<p>este apartado aparecerá en la sección "content"</p>
@endsection