@extends('layouts.layout')
@section('content_welcome')
    <div class="row" style="margin-top:200px">
        <div class="col-md-12 text-center">
            <h1 class="tittle">Ingresa Tu Fecha de Nacimiento para Acceder</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <input type='text' id='date'>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false" aria-controls="contentId">Ingresar</button>
                </p>
                <div class="collapse" id="contentId">
                    <div>
                        a
                    </div>
                </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            alert('hoa');
            $('#date').datepicker( {
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'dd MM'
            });
        });
    </script> 
@endsection