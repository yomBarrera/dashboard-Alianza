<div class="flex">

  <aside class="relative flex h-[calc(100vh-3.5rem)] w-full max-w-[11rem] min-w-[2rem] flex-col text-white  bg-blue-700">
    <div class="p-4 pb-0">
      <div class="icon-menu h-4 w-4 m-auto my-8 cursor-pointer">
        <img src="/images/dots-menu.svg" alt="menu">
      </div>
    </div>
    <nav class="flex min-w-[160px] flex-col gap-1  font-sans text-base font-normal text-blue-gray-700">
      <div class="relative block w-full">
        <a href="/home" role="button"
          class="flex items-center w-full px-4 py-2 outline-none text-start font-bold  hover:bg-white/30">
          Home
        </a>
        <div role="button" class="flex items-center w-full p-0 ">
          <button type="button"
            class="flex items-center justify-between w-full p-3 font-sans text-xl font-semibold hover:bg-white/30">
            <p class="block mr-auto font-sans text-lg antialiased font-bold leading-relaxed">
              Listas
            </p>
            <span class="ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" aria-hidden="true" class="w-4 h-4 mx-auto transition-transform rotate-180">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
              </svg>
            </span>
          </button>
        </div>
        <div class="overflow-hidden">
          <div class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-white">
            <nav class="flex min-w-[160px] flex-col gap-1 p-0 font-sans text-base font-normal">
              <a href="/empleados" role="button"
                class="flex items-center w-full px-4 py-2 outline-none text-start bg-gradient-to-r from-transparent to-transparent hover:from-transparent hover:to-gray-700">
                Empleados
              </a>
              <a href="/cargos" role="button"
                class="flex items-center w-full px-4 py-2 outline-none text-start bg-gradient-to-r from-transparent to-transparent hover:from-transparent hover:to-gray-700">
                Cargos
              </a>
            </nav>
          </div>
        </div>
      </div>

    </nav>
  </aside>


  <div class="div flex-1">

    {{ $slot }}
  </div>

</div>
