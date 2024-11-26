<div class="" x-data="{ open: false }">

  <x-layout meta-title="Alianza test">
    @include('components.nav')

    <x-dashboard>
      <div class="container flex h-full flex-col gap-10 pt-24 items-center"
        style="background: url('/images/concentracion.png')  right bottom -50px/47% no-repeat ; ">
        <div class="text-xl">
          <h2>
            Bienvenida!
          </h2>
          <h3>
            Elisa Gómez
          </h3>
        </div>
        <p class="text-sm">Añade los datos personales de tus empleados y después agrega su cargo en tu empresa</p>

        <div class="w-16 text-center">
          <button x-on:click="open = true"
            class="icon-plus w-10 m-auto hover:rounded-full hover:bg-gray-300 p-2 flex justify-center items-center">
            <img src="/images/user-plus.svg" alt="">
          </button>
          <p class="text-[10px] text-gray-300">Empieza aquí</p>
        </div>
      </div>
    </x-dashboard>

  </x-layout>

  <div x-show="open" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="treue"
    id="modalNuevoEmpleado">

    <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div
          class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl ">
          <div class="bg-white ">

            <div
              class="text-gray-600 sm:flex sm:items-center sm:justify-between shadow-md px-4 pb-4 pt-2 sm:p-4 sm:px-6 mb-4">
              <h3>Nuevo empleado</h3>
              <div class="icon-close w-7 h-7 cursor-pointer rounded-full hover:bg-gray-400" x-on:click="open = false">
                <img src="/images/close-circle.svg" alt="">
              </div>
            </div>
            <div class="mt-3 text-center  sm:mt-0 sm:text-left p-12">
              <form class="bg-white text-xs" method="POST" action="/create">
                @csrf
                <div class="flex gap-12 mb-3">

                  <label for="nombre" class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Nombre</p>
                    <input id="nombre" name="nombre" type="text"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="Escribe el nombre de tu empleado" autofocus required>
                    @error('nombre')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                  <label for="apellido"class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Apellido</p>
                    <input id="apellido" name="apellido" type="text"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="Escribe los apellidos de tu empleado" required>
                    @error('apellido')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                </div>
                <div class="flex gap-12 mb-3">

                  <label for="identificacion" class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Identificacion</p>
                    <input id="identificacion" name="identificacion" type="number"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="escribe el numero deidentificacion" required>
                    @error('identificacion')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                  <label for="telefono"class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Teléfono</p>
                    <input id="telefono" name="telefono" type="tel"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="Escribe un numero de teléfono" required>
                    @error('telefono')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                </div>
                <div class="flex gap-12">

                  <label for="ciudad" class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Ciudad</p>
                    <input id="ciudad" name="ciudad" type="text"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="Selecciona una ciudad" required>
                    @error('ciudad')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                  <label for="departamento"class="block flex-1">
                    <p class="font-medium text-slate-700 pb-2">Departamento</p>
                    <input id="departamento" name="departamento" type="tel"
                      class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
                      placeholder="Seleccione un departamento" required>
                    @error('departamento')
                      <small class="text-red-400">
                        {{ $message }}
                      </small>
                    @enderror
                  </label>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 sm:justify-center gap-5">
                  <button type="submit" x-on:click="open = false"
                    class="inline-flex w-full justify-center items-center rounded-3xl bg-blue-600 px-4 py-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:w-auto">Agregar</button>
                  <button x-on:click="open = false" type="button"
                    class="mt-3 inline-flex w-full justify-center rounded-3xl bg-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-indigo-400 hover:text-white sm:mt-0 sm:w-auto">Cancelar</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
