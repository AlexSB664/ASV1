@extends('web.base')
@section('title') Inicio @endsection
@section('head')
    <script>
function ShowPass(){
    var x = document.getElementById("clave_privada");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<script>
function relleno(){
    document.getElementById("integrante1").value = "Alex";
    document.getElementById("telefono1").value = "6646127701";

    document.getElementById("integrante2").value = "Angel";
    document.getElementById("telefono2").value = "6644971719";

    document.getElementById("integrante3").value = "Keyra";
    document.getElementById("telefono3").value = "6641269453";

    document.getElementById("clave_privada").value = "123tamarindo";
}
</script>
    <script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = parseInt(document.getElementById("member").value);
            number++;
            
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("intercambio-form");
            // Clear previous contents of the container
            if(number>=3 && number<=12){
                document.getElementById("member").value = number;
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=1;i<number+1;i++){
                // Append a node with a random text
                //tambien funciona con h3 h2 etx
                var h3=document.createElement("label");
                h3.innerHTML="Integrante " + (i)+":";
                container.appendChild(h3);
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "integrante" + i;
                input.id = "integrante" + i;
                input.placeholder="Ingrese nombre";
                container.appendChild(input);

                var h2=document.createElement("label");
                h2.innerHTML="Telefono " + (i)+":";
                container.appendChild(h2);
                // Create an <input> element, set its type and name attributes
                var input2 = document.createElement("input");
                input2.type = "text";
                input2.name = "telefono" + i;
                input2.id = "telefono" + i;

                input2.placeholder="Ingrese telefono";
                input2.required;
                container.appendChild(input2);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
            }else{
                alert("Limite alcanzado");
            }
        }
    </script>
        <script type='text/javascript'>
        function rmFields(){
            // Number of inputs to create
            var number = parseInt(document.getElementById("member").value);
            
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("intercambio-form");
            // Clear previous contents of the container
            if(number>=4 && number<=13){
                document.getElementById("member").value = number - 1;
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=1;i<number;i++){
                // Append a node with a random text
                //tambien funciona con h3 h2 etx
                var h3=document.createElement("label");
                h3.innerHTML="Integrante " + (i)+":";
                container.appendChild(h3);
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "integrante" + i;
                input.id = "integrante" + i;
                input.placeholder="Ingrese nombre";
                input.required;
                container.appendChild(input);

                var h2=document.createElement("label");
                h2.innerHTML="Telefono " + (i)+":";
                container.appendChild(h2);
                // Create an <input> element, set its type and name attributes
                var input2 = document.createElement("input");
                input2.type = "text";
                input2.name = "telefono" + i;
                input2.id = "telefono" + i;
                input2.placeholder="Ingrese telefono";
                input2.required;
                container.appendChild(input2);
                
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
            }else{
                alert("Limite alcanzado");
            }
        }
    </script>
@endsection
@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins col-lg-12">
                        <div class="ibox-title col-lg-12">
                            <h5>Crear intercambio<small> Amigos Secretos</small></h5>
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
                        <h1>Organizar nuevo intercambio</h1><br>
                        <p>Empecemos!!!
                        </p>
                        <h2>Ingresa los nombres!!!</h2>
                        <input type="hidden" id="member" name="member" value="3" readonly=""><br />
                        <h3>Son un minimo de 3 personas y como limite 12</h3>
                        <form class="m-t" role="form"  method="GET" action="{{ route('nuevoInter') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            <div id="intercambio-form"> 
                            <label>Integrante 1:</label> 
                            <input type="text" placeholder="Ingrese nombre" name="integrante1" id="integrante1" required="">
                            <label>Telefono 1:</label> 
                            <input type="text" placeholder="Ingrese telefono" name="telefono1" id="telefono1" required="">
                            <br>
                            <label>Integrante 2:</label> 
                            <input type="text" placeholder="Ingrese nombre" name="integrante2" id="integrante2" required="">
                            <label>Telefono 2:</label> 
                            <input type="text" placeholder="Ingrese telefono" name="telefono2" id="telefono2" required="">
                            <br>
                            <label>Integrante 3:</label> 
                            <input type="text" placeholder="Ingrese nombre" name="integrante3" id="integrante3" required="">
                            <label>Telefono 3:</label> 
                            <input type="text" placeholder="Ingrese telefono" name="telefono3" id="telefono3" required="">
                            </div>
                        </div>
                        <label>Clave Privada:</label> <i class="fa fa-question-circle-o" aria-hidden="true" title="la clave para desbloquear el intercambio"></i>
                        <input type="password" placeholder="Ingrese clave" name="clave_privada" id="clave_privada" required=""><input type="checkbox" onclick="ShowPass()" >Mostrar Clave
                        <br>
                        <a href="#" id="filldetails" onclick="addFields()"><i class="fa fa-plus" style="font-size:48px;color:green"></i></a>
                        <a href="#" id="rmdetails" onclick="rmFields()"><i class="fa fa-minus" style="font-size:48px;color:red"></i></a>
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Organizar!!!</strong></button>
                        </form>
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" onclick="relleno()" type="submit"><strong>Rellenar!!!</strong></button>
                        </div>
                    </div>
                </div>
            </div>
@endsection