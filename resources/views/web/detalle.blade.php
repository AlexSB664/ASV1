@extends('web.base')
@section('title') Inicio @endsection
@section('head')
@endsection
@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins col-lg-12">
                        <div class="ibox-title col-lg-12">
                            <h5>Mis intercambios organizados<small> Amigos Secretos</small></h5>
                            <div class="ibox-tools col-lg-12">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content col-lg-12">
                        <h1>Mira el intercambio</h1><br>
                        <p>
                        </p>
                        <h2>Aqui los tienes!!!</h2>
                        <div class="table-responsive">
                        <H2>No. Intercambio</H2>
                        <table class="table" id="tablaFactura">
                        <thead>
                        <tr>
                        	<th>Integrante</th>
                            <th>telefono</th>
                            <th>Amigo Secreto</th>
                        </tr>
                        </thead>

						@foreach($intercambio['0'] as $dato)
                        	@if($loop->index==0 || $loop->index==1 || $loop->index>=38 )
                        	@elseif($loop->index==2 || $loop->index==5 || $loop->index==8 || $loop->index==11 || $loop->index==14 || $loop->index==17 || $loop->index==20 || $loop->index==23 || $loop->index==26 || $loop->index==29|| $loop->index==32 || $loop->index==35)
                        			@if(!empty($dato))
                        			<tr>
		                        	<th>{{$dato}}</th>
		                        	@endif
		                    @elseif($loop->index==3 || $loop->index==6 || $loop->index==9 || $loop->index==12 || $loop->index==15 || $loop->index==18 || $loop->index==21 || $loop->index==24 || $loop->index==27 || $loop->index==30|| $loop->index==33 || $loop->index==36)
		                    		@if(!empty($dato))
                        			<th>{{$dato}}</th>
		                        	@endif
		                    @else
		                    	@if(!empty($dato))
                        			<th>{{$dato}}</th>
		                    		</tr>
		                        @endif
                        			   
                        	@endif
						@endforeach
                        </table>
                        <br>
                        </strong></button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
@endsection