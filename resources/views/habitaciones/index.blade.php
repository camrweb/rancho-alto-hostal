@extends('layouts.app')
@section('title', '- Habitaciones')
@section('content')


      <div class="back_re habitaciones">
         <div class="container">
            <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                        <h2>Habitaciones</h2>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div class="our_room">
         <div class="container">
            <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <p class="margin_0">Disfruta de las hermosas vistas de la naturaleza.</p>
                     </div>
                  </div>
            </div>
            <div class="row">
                  @foreach ($habitaciones as $habitacion)
                     <div class="col-md-4 col-sm-6">
                        <div id="serv_hover" class="room">
                              <div class="room_img">
                                 <figure><img src="{{ asset('storage' . '/' . $habitacion->foto) }}" alt="#" />
                                 </figure>
                              </div>
                              <div class="bed_room">
                                 <h3 class="card-title">{{ $habitacion->name }}</h3>
                                 <p class="card-subtitle text-muted" style="word-break: break-all">
                                    <em>{{ $habitacion->description }}</em></p>
                                 <hr>
                                 <p> $ {{ $habitacion->price }}</p>
                                 <div>
                                    <button id="swal_Alert" class="btn btn-danger mr-2 reservar-alert"
                                          data-toggle="modal" data-target="#exampleModal">RESERVAR AHORA</button>
                                 </div>
                              </div>
                        </div>
                     </div>
                  @endforeach
            </div>
         </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <form action="{{ route('reserva.store') }}" method="POST">
                     @csrf
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">RESERVA
                              AHORA!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <!-- Nombre y apellido-->
                        <div class="form-group">
                              <div class="row">
                                 <div class="col">
                                    <label for="exampleFormControlSelect1">NOMBRES</label>
                                    <input type="text" name="nombres" class="form-control" placeholder="Nombres"
                                          required>
                                 </div>
                                 <div class="col">
                                    <label for="exampleFormControlSelect1">APELLIDOS</label>
                                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"
                                          required>
                                 </div>
                              </div>
                        </div>
                        <!--Tipo de documento-->
                        <div class="form-group">
                              <label for="exampleFormControlSelect1">TIPO DE
                                 DOCUMENTO</label>
                              <select name="tipo_documento" class="form-control" id="exampleFormControlSelect1">
                                 <option>CEDULA DE CIUDADANIA</option>
                                 <option>CEDULA DE EXTRANJERA</option>
                                 <option>NIT</option>
                              </select>
                        </div>
                        <!--Numero de documento-->
                        <div class="form-group">
                              <div class="form-group">
                                 <label for="formGroupExampleInput">NUMERO DE DOCUMENTO</label>
                                 <input type="text" name="numero_documento" class="form-control"
                                    id="formGroupExampleInput" placeholder="Numero de documento" required>
                              </div>
                        </div>
                        <!-- Categoria -->
                        <div class="form-group">
                              <label for="exampleFormControlSelect1">CATEGORIA</label>
                              <select class="form-control" name="_categorias" id="_categorias">
                                 <option id="select_default">SELECCIONA</option>
                                 @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">
                                          {{ $categoria->name }}</option>
                                 @endforeach
                              </select>
                        </div>
                        <!-- Habitaciones -->
                        <div class="form-group">
                              <label for="exampleFormControlSelect1">HABITACIONES</label>
                              <select class="form-control" name="_habitaciones" id="_habitaciones">

                                 <!-- Unused Code -->
                                 <!-- {{-- @foreach ($habitaciones as $habitacion)
                                                                  <option value="{{ $habitacion->id }}">{{ $habitacion->name }}</option>
                                                                  @endforeach --}} -->

                                 <!-- Last Script Position -->

                              </select>
                        </div>
                        {{-- PersonMaxima --}}
                        <!--Fecha-->
                        <div class="row">
                              <div class="col">
                                 <label for="formGroupExampleInput">Check
                                    in</label>
                                 <input type="date" name="date_1" class="form-control" id="date-1" required>
                              </div>
                              <div class="col">
                                 <label for="formGroupExampleInput">Check
                                    out</label>
                                 <input type="date" name="date_2" class="form-control" id="date-2" required>
                              </div>
                        </div>
                        <div class="row mt-1">
                              <div class="col">
                                 <button type="button" id="calcular"
                                    class="btn btn-outline-success">Calcular</button>
                              </div>
                              <div class="col" id="result">
                              </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                     </div>
                  </form>
            </div>
         </div>
      </div>


      {{-- <script>

const categorySelect = document.getElementById('_categorias');
        categorySelect.addEventListener('change', () => {
            let select_default = document.getElementById('select_default')
            select_default.setAttribute('disabled', true)
        })
        // //
        // //      CHECK IN       
        // //
        //          let check_in = document.getElementById('check_in')
        //          check_in.addEventListener('change', () => {
        //          console.log('hola')
        //             let checkin_value = document.getElementById('check_in').value
        //             let checkout_value = document.getElementById('check_out').value
        //             const date1 = new Date(checkin_value);
        //             const date2 = new Date(checkout_value);
        //             const diffTime = Math.abs(date2 - date1);
        //             const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        //             console.log(diffTime + " milliseconds");
        //             console.log(diffDays + " days");
        //          })
        // //
        // //      CHECK OUT       
        // //
        //          let check_out = document.getElementById('check_out')
        //          check_out.addEventListener('change', () => {
        //          console.log('hola')
        //             let checkin_value = document.getElementById('check_in').value
        //             let checkout_value = document.getElementById('check_out').value
        //             const date1 = new Date(checkin_value);
        //             const date2 = new Date(checkout_value);
        //             const diffTime = Math.abs(date2 - date1);
        //             const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        //             console.log(diffTime + " milliseconds");
        //             console.log(diffDays + " days");
        //          })

         const url = location.href;
         let idCategoriaElem = document.getElementById('_categorias');
         let habitacionesElem = document.getElementById('_habitaciones');
         let priceCalculated = document.getElementById("result");
         idCategoriaElem.addEventListener('change', async function() {
             if (document.getElementById("personasSelect")) document.getElementById("personasSelect").remove()
             if (document.getElementById("descriptionRoom")) document.getElementById("descriptionRoom").remove()
             let idCategoria = idCategoriaElem.value;
             priceCalculated.textContent = ""
             const {
                 data,
                 success
             } = await fetch(`${url}habitaciones/${idCategoria}`).then(res => res.json());
             if (success) {
                 habitacionesElem.innerHTML = '';
                 habitacionesElem.innerHTML += `<option id="select_default">SELECCIONA</option>`;
                 data.forEach(habitacion => {
                     habitacionesElem.innerHTML +=
                         `<option value="${habitacion.id}">${habitacion.name}</option>`;
                 });
             }

         });
         habitacionesElem.addEventListener("change", async () => {
             let nombreHabitacion = habitacionesElem.options[habitacionesElem.selectedIndex].text
             const {
                 data,
                 success
             } = await fetch(`${url}habitacion/${nombreHabitacion}`).then(res => res.json());
             if (success) {
                 if (document.getElementById("personasSelect")) document.getElementById("personasSelect")
                     .remove()
                 if (document.getElementById("descriptionRoom")) document.getElementById("descriptionRoom")
                     .remove()
                 let selectPersonas = document.createElement("select")
                 let descriptionRoom = document.createElement("p")
                 descriptionRoom.setAttribute("id", "descriptionRoom")
                 descriptionRoom.classList.add("mt-1", "ml-1", "mr-1") // Clases para descripcion
                 selectPersonas.setAttribute("id", "personasSelect")
                 selectPersonas.classList.add("form-control", "mt-4")
                 let price = data[0].price
                 let maxPersonas = data[0]["person-max"]
                 let description = data[0].description
                 descriptionRoom.innerHTML = `<blockquote class="blockquote">
                                             <p "mb-0">DESCRIPCION</p>
                                             <footer style="word-break: break-all" class="blockquote-footer"><cite title="Descripcion">${description}</cite></footer>
                                             </blockquote>`;
                 priceCalculated.innerHTML = `El precio por noche es de: <span>${price}</span>`;
                 for (let i = 1; i <= maxPersonas; i++) {
                     selectPersonas.innerHTML += `<div class="form-group">
                                                     <label for="exampleFormControlSelect1">Maximo de personas</label>
                                                     <select class="form-control" name="person_max"
                                                                     id="person_max">
                                                     <option name="person_max" value=${i}>${i} personas</option>
                                                     </select>
                                                 </div>
                     `
                 }
                 habitacionesElem.insertAdjacentElement("afterend", descriptionRoom)
                 habitacionesElem.insertAdjacentElement("afterend", selectPersonas)
             }
         })
         let calcular = document.getElementById('calcular');
         calcular.addEventListener('click', async () => {
             let date1 = new Date(document.getElementById('date-1').value);
             let date2 = new Date(document.getElementById('date-2').value);
             let selectedRoom = habitacionesElem.options[habitacionesElem.selectedIndex].text
             const {
                 data,
                 success
             } = await fetch(`${url}habitacion/${selectedRoom}`).then(res => res.json());
             let priceSelected = data[0].price
             if (date1.getTime() && date2.getTime() && priceSelected) {
                 let timeDifference = date2.getTime() - date1.getTime();
                 let dayDifference = Math.abs(timeDifference / (1000 * 3600 * 24));
                 let priceTotal = priceSelected * dayDifference;
                 priceCalculated.innerHTML = `Un total de: <input name="precio_total" value="${priceTotal}" >
                                 <br>por <span>${dayDifference}</span> noches`;
             } else {
                 priceCalculated.innerHTML = "por favor seleccione una fecha valida";
             }

         })
     </script> --}}
@endsection
