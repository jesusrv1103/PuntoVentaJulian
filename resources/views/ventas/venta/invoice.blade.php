<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
<style type="text/css">
body {
  border: 1px solid black;
  margin-top: -40px;
  margin-bottom: 400px;
  margin-right: 500px;
  margin-left: -47px;
  background-color: ;
}

h6 {
margin-bottom: -1; /* o el tamaño que quieres que exista entre h1 y el siguiente elemento */
}
</style>

  <title>Venta</title>
</head>




<body >

<div >
 <br>
 <img src="img/caballo.png" style="max-width:20%;width:auto;height:auto;"> 

<p>
<h6>SOLUCIONES PECUARIAS de ZAC<br>
Julian Alejandro Sandoval Puente<br>
Tomas Alva Edison 5-B<br>
Col. Mecanicos<br>
Cp 98057<br>      
RFC: SAPJ870309F77<br>   
ZACATECAS ZAC.</h6>
  <h6><strong>Fecha:{{$venta->fecha_hora}}</strong></h6>
  <strong><h6>Comprobante: {{$venta->tipo_comprobante}}</h6></strong>
  <h6>Cliente: {{$venta->nombre}}</h6>
  <h6>Serie  de comprobante: {{$venta->serie_comprobante}}</h6>
  <h6>No. de comprobante: {{$venta->num_comprobante}}</h6>
 </p>      

<div class="row">
 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> 

  <div class="table-response">
    <table class="table ">
      <thead style="background-color:#A9D0F5">
        <tr>
                      <th><h6><center>Art.</center></h6></th>
                      <th><h6><center>Cnt.</center></h6></th>
                      <th><h6><center>Prec.</center></h6></th>
                      <th><h6><center>Tot.</center></h6></th>

                      
        </tr>
      </thead>

      <tbody>

       @foreach($detalles as $det)

       <tr>
       <td><h6><center>{{$det->articulo}}</center></h6></td>
       <td><h6><center>{{$det->cantidad}}</center></h6></td>
       <td><h6><center>{{$det->precio_venta}}</center></h6></td>
       <td><h6><center>{{$det->cantidad*$det->precio_venta-$det->descuento}}</center></h6></td>
                    

      </tr>

      @endforeach
    </tbody>
  </table>  


            <h6>******* Venta Total $ <strong>{{$venta->total_venta}} *******</strong></h6>
     

          <h6>*** GRACIAS POR SU COMPRA ***</h6>
         
</div>
</div>


</div>
</div>


</body>

</html>