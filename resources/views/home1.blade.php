@extends('master')

@section('content-header')
<h1>
<b>Crear colegio</b>
<small>crear nuevo colegio</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('principal') }}"><i class="fa fa-dashboard"></i><b>Principal</b></a></li>
    <li class="active">Crear nuevo colegio</li>
</ol>
@endsection


{{-- START CONTENT --}}
@section('content')
<div class="row">
	<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body si-padding">
            <form action="{{ url('save') }}" method="post" enctype="multipart/form-data" name="frmusuario">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('ci')?' has-error':'' }}">
                <label><span style="color:red">*</span> CI :</label>
                <div class="input-group">
                   	<div class="input-group-addon">
                       	<i class="glyphicon glyphicon-credit-card"></i>
                    </div>
                    <input type="text" class="form-control" value="{{ old('ci') }}" placeholder="Nro de carnet.." name="ci"/>                                
               	</div>
                 @if($errors->has('ci'))
					<span class="help-block">
						<strong>{{ $errors->first('ci') }}</strong>
					</span>
   				@endif
            </div>
            <a  onclick="registrar('Guradar','¿ Esta seguro de crear el colegio?');" class="btn btn-block btn-primary btn-lg"><i class="fa fa-pencil"></i> Registrar Usuario</a>
            </div>
        </div>
	</div>

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body si-padding">
            </div>
        </div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
            <div class="modal-body" id="modal-bodyku">
            </div>
            <div class="modal-footer" id="modal-footerq">
            </div>
            </div>
        </div>
</div>

<script type="text/javascript">
    function enviar_formulario(){ 
    document.frmusuario.submit();
    }
</script>
@endsection
{{-- END CONTET --}}