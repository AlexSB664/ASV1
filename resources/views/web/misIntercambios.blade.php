@extends('web.base')
@section('title') Inicio @endsection
@section('head')
@endsection
@section('content')
            @foreach($intercambios as $renglon)
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
                        <H2>No. Intercambio{{$renglon->id}}</H2>
                        <table class="table" id="tablaFactura">
                        <thead>
                        <tr>
                        	<th>Integrante</th>
                            <th>telefono</th>
                            <th>Amigo Secreto</th>
                        </tr>
                        </thead>
                        @foreach($renglon as $dato)
                        	@if($loop->index==0 || $loop->index==1 || $loop->index>=38 )
                        	@elseif($loop->index==2 || $loop->index==5 || $loop->index==8 || $loop->index==11 || $loop->index==14 || $loop->index==17 || $loop->index==20 || $loop->index==23 || $loop->index==26 || $loop->index==29|| $loop->index==32 || $loop->index==35)
                        			@if(!empty($dato))
                        			<tr>
		                        	<th>{{$dato}}</th>
		                        	@endif
		                    @elseif($loop->index==3 || $loop->index==6 || $loop->index==9 || $loop->index==12 || $loop->index==15 || $loop->index==18 || $loop->index==21 || $loop->index==24 || $loop->index==27 || $loop->index==30|| $loop->index==33 || $loop->index==36)
		                    		@if(!empty($dato))
                        			<th>{{$dato}}</th>
		                        	<th>???</th>
                        			</tr>
                        			@endif
		                    @else   
                        	@endif
						@endforeach
                        </table>
                        <script> 
        				function aguadiar{{$renglon->id}}() { 
            			var doc; 
            			var result = confirm("Se les notificara a todas las personas involucradas que el intercambio ya no es secreto. Estas seguro de continuar?"); 
            				if (result == true) { 
	            				var id = document.getElementById("id-intercambio{{$renglon->id}}").value;
	            				var pass = document.getElementById("pass{{$renglon->id}}").value;
	            				window.location.href = "{{ route('aguaFiestas') }}?id="+id+"&pass="+pass;
	               			} else { 
                			} 
        				} 
    					</script> 
                        <input type="hidden" id="id-intercambio{{$renglon->id}}" name="id-intercambio{{$renglon->id}}" value="{{$renglon->id}}" readonly="">
                        <br>
                        <label>Clave privada: </label>
                        <input type="password" id="pass{{$renglon->id}}" name="pass{{$renglon->id}}" value="" ><input type="checkbox" onclick="ShowPass{{$renglon->id}}()">Mostrar Clave <br>
                        <script>
							var input = document.getElementById("pass{{$renglon->id}}");
							input.addEventListener("keyup", function(event) {
  							if (event.keyCode === 13) {
   							event.preventDefault();
   							document.getElementById("myBtn{{$renglon->id}}").click();
  							}
						});
						</script>
						<script>
							function ShowPass{{$renglon->id}}(){
    						var x = document.getElementById("pass{{$renglon->id}}");
    							if (x.type === "password") {
        							x.type = "text";
    							} else {
        							x.type = "password";
    							}
							}
						</script>

                        <br>
                        <button id="myBtn{{$renglon->id}}" class="btn btn-sm btn-primary pull-right m-t-n-xs" onclick="aguadiar{{$renglon->id}}()"><strong>Desbloquear</strong></button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
			@endforeach
@endsection