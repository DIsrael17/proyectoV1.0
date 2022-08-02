@extends('layouts.admin.master')
@section('ttulo','Clientes')
@section('contenido')


    
        
<div id="apicliente" class="table table-responsive sombrasBorde">
    {{-- <button class="btn btn-primary" v-on:click="showModal()">Nuevo Cliente</button><br> --}}
    <table class="table">
        <thead class="table ">
            <tr>
                <th  class="text-center theadB">Folio</th>
                <th  class="text-center theadB">Nombre</th>
                <th  class="text-center theadB">Apellido Paterno</th>
                <th  class="text-center theadB">Apellido Materno</th>
                <th  class="text-center theadB">Número Teléfonico</th>
                <th  class="text-center theadB">E-mail</th>
                <th  class="text-center theadB">País</th>
                <th  class="text-center theadB">Estado</th>
                <th  class="text-center theadB">Localidad</th>
                <th  class="text-center theadB">Comentario</th>  
                <th  class="text-center theadB">Eliminar</th>                            
            </tr>
        </thead>

        <tbody class="table">
            <tr v-for="dato in clientes">
                <td class="text-center">@{{dato.folio}}</td>
                <td class="text-center">@{{dato.nombre}}</td>
                <td class="text-center">@{{dato.apellidop}}</td>
                <td class="text-center">@{{dato.apellidom}}</td>
                <td class="text-center">@{{dato.numero_tel}}</td>
                <td class="text-center">@{{dato.correo}}</td>
                <td class="text-center">@{{dato.pais}}</td>
                <td class="text-center">@{{dato.estado}}</td>
                <td class="text-center">@{{dato.localidad}}</td>
                <td class="text-center">@{{dato.comentario}}</td>
           <!-- Botones -->
           <td class="text-center">
           {{-- <span class="glyphicon glyphicon-pencil btn btn-default" v-on:click="editCliente(dato.folio)"></span> --}}
           <span class="glyphicon glyphicon-trash btn btn-default" v-on:click="eliminarCliente(dato.folio)"></span>         
           </td>
            
            </tr>
        </tbody>
        
    </table>
 <!-- Inicio de la ventana modal ----------------------------------------------------------------->




      @include('layouts.clienteModal')
</div>

@endsection

