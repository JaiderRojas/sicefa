@extends('insaelements::layouts.master')
@section('title','Inicio')
@section('content')
 <!-- Content Wrapper. Contains page content -->

    <div class="container">
        <div class="card" style="margin: auto;  width: 780px; height: 690px;" >
           <h5 class="card-header" style="background-color: orange;">
                <img src="{{ asset('elements/imagines/fondohome.png') }}" style="width: 3%" alt="...">Autorización
                Prestamo y Salida de
                Elementos
                Devolutivos.
            </h5>

            <div class="card-body">
              <form action="" method="">
                {{ csrf_field() }}

                  <div class="col-md-8">
                    <div class="row mb-2">
                        <label for="" class="col-sm-5 col-form-label col-form-label-sm">Documento del solicitante:</label>
                          <div class="col-sm-6">
                            <input name="document" type="number" class="form-control form-control-sm" id="SearchDocument">
                          </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                      <div class="row mb-2">
                          <label for="" class="col-sm-5 col-form-label col-form-label-sm">Nombre del solicitante:</label>
                            <div class="col-sm-6">
                              <input name="first_name" type="text" class="form-control form-control-sm" id="firstName">
                            </div>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="row mb-2">
                          <label for="" class="col-sm-5 col-form-label col-form-label-sm">Fecha de entrega:</label>
                            <div class="col-sm-6">
                              <input name="date_return" type="date" class="form-control form-control-sm"><!--{!!$errors->first('date','<small>este campo es requerido</small>')!!}-->
                            </div>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="row mb-2">
                          <label for="" class="col-sm-5 col-form-label col-form-label-sm">Formación o Dependencia:</label>
                            <div class="col-sm-6">
                                <input name="dependence" type="text" class="form-control  form-control-sm" value="{{old('dependence')}}">
                            </div>
                      </div>
                   </div>
                    <div class="col-md-8">
                      <div class="row mb-2">
                          <label for="" class="col-sm-5 col-form-label col-form-label-sm">Lugar al cual se trasladan los elementos:</label>
                              <div class="col-sm-6">
                                <input name="translation" type="text" class="form-control form-control-sm" value="{{old('translation')}}">
                              </div>
                      </div>
                    </div>

                    <div class="col-md-8">
                         <div class="row mb-2">
                             <label for="" class="col-sm-5 col-form-label col-form-label-sm">Objetivo por el cual se transladan los elementos:</label>
                            <div class="col-sm-6">
                                <input name="objective" type="text" class="form-control form-control-sm" value="{{old('objective')}}">

                            </div>
                         </div>
                    </div>

                    <div class="col-md-8">
                            <div class="row mb-2">

                                <label for="" class="col-sm-5 col-form-label col-form-label-sm">Documento del
                                    que Autoriza:</label>
                                <div class="col-sm-6">
                                    <input name="document" type="number" class="form-control form-control-sm" id="search">
                                </div>
                            </div>
                        </div>
                    <div class="col-md-8">
                        <div class="row mb-2">
                            <label for="" class="col-sm-5 col-form-label col-form-label-sm">Nombre Autoriza Salida:</label>
                              <div class="col-sm-6">
                                <input name="first_name" type="text" class="form-control form-control-sm" id="Name"><br>
                              </div>
                        </div>
                    </div>
                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#searchElement">Agregar
                     </button>
                <table class="table table-bordered">
                    <thead >
                        <tr>
                            <th scope="col">Nombre Elemento</th>
                            <th scope="col">Descripcion del elemento</th>
                            <th scope="col">Estado del Elemento</th>
                            <th scope="col">Codigo de inventario</th>
                            <th scope="col">Cuentadante<br></th>
                            <th scope="col" name="total">Cantidad</th>
                        </tr>
                      </thead>
                        <tbody>
                            <tr id="tr1">
                                <td>
                                <select  class="form-control  form-control-sm" style="width: 100%;" id="tdelement1" disabled>
                                    <option value=""></option>
                                    @foreach ($elements as $element)
                                       <option  value="{{ $element->id }}">{{ $element->name }}</option>
                                    @endforeach
                                  </select>
                                </td>
                              <td id="tddescription1" value=""></td>
                              <td id="tdestado1"></td>
                              <td id="tdcodinventary1"></td>
                              <td>
                                <select  class="form-control  form-control-sm" name="tdcuentadante" style="width: 100%;" id="tdcuentadante1" disabled>
                                    <option value=""></option>
                                      @foreach ($peoples as $people)
                                       <option  value="{{ $people->id }}">{{ $people->first_name }}</option>
                                      @endforeach
                                 </select>
                              </td>
                              <td><div class="col-sm-6"><input name="total" type="number" class="form-control form-control-sm"></div></td>
                            </tr>
                        </tbody>
                </table>
                <input type="submit" value="Guardar" name="guardar" class="btn btn-outline-warning btn-flat">
              </form>
           </div>
        </div>
    </div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="searchElement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Elemento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card card-orange card-outline "></div>
      <div class="modal-body">
        <form>
             {{ csrf_field() }}
          <label for="name">Codigo de inventario:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="far fa-keyboard"></i>
              </span>
            </div>
              <input name="inventoryCode" type="number" class="form-control form-control-sm" id="SearchElement" required="">
         </div>

          <label for="start_date" class="mtop16">Nombre Elemento:</label>
          <div class="input-group">
           <select  class="form-control  form-control-sm" name="element_id" style="width: 100%;" id="element_id" disabled>
               <option value=""></option>
               @foreach ($elements as $element)
                  <option  value="{{ $element->id }}">{{ $element->name }}</option>
               @endforeach
             </select>
             {{-- <input  class="form-control  form-control-sm" name="element_id" style="width: 100%;" id="element_id">
                <option value=""> --}}
          </div>
          <label for="end_date" class="mtop16">Descripcion del elemento:</label>
          <div class="input-group">
           <input name="description" type="text" class="form-control form-control-sm" id="description">
         </div>

          <label for="end_date" class="mtop16">Estado del Elemento:</label>
          <div class="input-group">
           <input name="stateElement" type="text" class="form-control  form-control-sm" value="" id="stateElement">
         </div>

           <label for="end_date" class="mtop16">Cuentadante:</label>
          <div class="input-group">
            <select  class="form-control  form-control-sm" name="people_id" style="width: 100%;" id="people_id" disabled>
                <option value=""></option>
                  @foreach ($peoples as $people)
                   <option  value="{{ $people->id }}">{{ $people->first_name }}</option>
                  @endforeach
             </select>
          </div>

     </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button onclick="agregaatabla()" id="btnAgregar" type="button" class="btn btn-outline-warning" data-dismiss="modal">Agregar</button>
      </div>
  </div>
  </div>
</div>





@stop
    @section('js')
    <script type="text/javascript">
      $(document).ready(function () {
        $("#SearchDocument").keyup(function() {
          if ($(this).val().length >=7) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              method: "POST",
              url: "{{route('insaelements.general.ajaxPeopleByDocument') }}",
              data: {document: $(this).val() }
             })
                .done(function(data){
                  if (data.peoples.length>0) {
                     $('#firstName').val(data.peoples[0]['first_name']);
                   }else{
                    alert('Numero de Documento no Encontrado')
                   }



                })

          }else{
             $('#firstName').val('');
          }

        });
      });

      //se duplica el escript para buscar el nombre del que atoriza salida
          $(document).ready(function () {
        $("#search").keyup(function() {
          if ($(this).val().length >=7) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              method: "POST",
              url: "{{route('insaelements.general.ajaxPeopleByDocument') }}",
              data: {document: $(this).val() }
             })
                .done(function(data){
                  if (data.peoples.length>0) {
                     $('#Name').val(data.peoples[0]['first_name']);
                   }else{
                    alert('Numero de Documento no Encontrado')
                   }
                })

          }else{
             $('#Name').val('');
          }

        });
      });
    </script>
     <script type="text/javascript">
      $(document).ready(function () {
        $("#SearchElement").keyup(function() {
          if ($(this).val().length >=7) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              method: "POST",
              url: "{{route('insaelements.general.Solicitar.ajaxElementByCode') }}",
              data: {inventoryCode: $(this).val() }
             })
                .done(function(data){
                  if(data.inventories.length>0){
                      $('#element_id').val(data.inventories[0]['element_id']);
                      $('#people_id').val(data.inventories[0]['people_id']);
                      $('#description').val(data.inventories[0]['description']);
                      $('#stateElement').val(data.inventories[0]['stateElement']);
                  }else{
                    alert('Codigo de Inventario no Encontrado')
                  }

                })

          }else{
            $('#element_id').val('');
            $('#people_id').val('');
            $('#description').val('');
            $('#stateElement').val('');

          }

        });
      });
    </script>
    <script>
        //    increment
        var i = 1;
        var j = 2;
    function agregaatabla(){
               $('#tdelement'+i+'').val($('#element_id').val());
               $('#tddescription'+i+'').text($('#description').val());
               $('#tdestado'+i+'').text($('#stateElement').val());
               $('#tdcodinventary'+i+'').text($('#SearchElement').val());
               $('#tdcuentadante'+i+'').val($('#people_id').val());
               //    new row
        var tr= '<tr id="tr'+j+'"><td>'+
                '<select  class="form-control  form-control-sm" style="width: 100%;" id="tdelement'+j+'" disabled>'+
                        '<option value=""></option>'+
                    '@foreach ($elements as $element)'+
                        '<option  value="{{ $element->id }}">{{ $element->name }}</option>'+
                    '@endforeach'+
                '</select>'+
                '</td>'+
                '<td id="tddescription'+j+'" value=""></td>'+
                '<td id="tdestado'+j+'"></td>'+
                '<td id="tdcodinventary'+j+'"></td>'+
                '<td><select  class="form-control  form-control-sm" name="tdcuentadante" style="width: 100%;" id="tdcuentadante'+j+'" disabled>'+
                        '<option value=""></option>'+
                      '@foreach ($peoples as $people)'+
                        '<option  value="{{ $people->id }}">{{ $people->first_name }}</option>'+
                      '@endforeach'+
                '</select></td>'+
                '<td><div class="col-sm-6"><input name="total" type="number" class="form-control form-control-sm"></div></td></tr>';
               $('#tr'+i+'').after(tr);
               i++;
               j++;

       }
    </script>


   @stop
