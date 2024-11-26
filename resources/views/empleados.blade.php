<x-layout meta-title="Alianza test">
  @include('components.nav')

  <x-dashboard>
    <div class="container pt-32 m-auto">

      {{-- title --}}
      <div class="title flex">
        <a href="javascript:history.back()" class="w-10 h-10 block rounded-full hover:bg-gray-400 ">
          <img src="/images/arrow-sm-left.svg" alt="">
        </a>
        <span class="text-4xl">Empleados</span>
      </div>
      <div class="buttons flex items-center justify-between my-20 font-bold">
        <div class="inline-flex gap-4">
          <button class="text-blue-600 inline-flex items-center hover:-translate-y-1 ">
            <img class="w-7 h-7 block" src="/images/trash.svg" alt="delete selection">
            Borrar seleccion
          </button>
          <button class="text-blue-600 inline-flex items-center hover:-translate-y-1 ">
            <img class="w-7 h-7 block" src="/images/download-1.svg" alt="delete selection">
            Descargar datos
          </button>
        </div>
        <button
          class="text-blue-600 inline-flex items-center rounded-3xl border-blue-600 border p-1 hover:-translate-y-1 ">
          <img class="w-7 h-7 block" src="/images/portafolio.png" alt="delete selection">
          Agregar
        </button>
      </div>

      {{-- table --}}
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg border-separate border-gray-200 border m-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 border-separate">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-gray-200 border-separate border">
            <tr>
              <th scope="col"
                class="px-6 py-3  border-gray-200 border-separate border  border-gray-200 border-separate border">
                <div class="flex items-center">
                  Nombre
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  identificacion
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  direccion
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  telefono
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  cuidad
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  departamento
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3  border-gray-200 border-separate border">
                <div class="flex items-center">
                  Acciones
                  <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                    </svg></a>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($empleados as $empleado)
              <tr class="bg-white border-b ">
                <th scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  border-gray-200 border-separate border">
                  {{ $empleado->nombre . ' ' . $empleado->apellido }}
                </th>
                <td class="px-6 py-4  border-gray-200 border-separate border">
                  {{ $empleado->identificacion }}
                </td>
                <td class="px-6 py-4  border-gray-200 border-separate border">
                  {{ $empleado->direccion }}
                </td>
                <td class="px-6 py-4  border-gray-200 border-separate border">
                  {{ $empleado->telefono }}
                </td>
                <td class="px-6 py-4  border-gray-200 border-separate border">
                  {{ $empleado->ciudad }}
                </td>
                <td class="px-6 py-4  border-gray-200 border-separate border">
                  {{ $empleado->departamento }}
                </td>
                <td class="px-6 py-4  border-gray-200 border-separate border text-center flex gap-8">
                  <button class="w-7 h-7 block"> <img src="/images/edit-pencil.svg" alt=""></button>
                  <button class="w-7 h-7 block"> <img src="/images/recycle-bin.svg" alt=""></button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </x-dashboard>

</x-layout>
