<div class="relative flex justify-between items-center  py-1 px-8 border-b-zinc-200 bg-slate-100 z-10">
  <div class="logo w-28">
    <img src="/images/logo-color-psicoalianza-nfondo.png" alt="">
  </div>

  <div x-data="{ open: false }" class="perfil flex gap-3 select-none cursor-pointer">
    <div x-on:click="open = true"
      class="avatar w-12 h-12 rounded-full bg-pink-200 overflow-hidden border border-pink-400 ">
      <img src="/images/avatar.jpeg" alt="avatar">
    </div>
    <div class="relative data-user flex flex-col justify-center text-sm">
      <span class="text-blue-700 font-bold">

        {{ $user->name }}
      </span>
      <span>Administrador</span>
      <div x-show="open" x-on:click.away="open=false" class="absolute top-full  bg-slate-100 ">
        <ul>
          <li class="p-1 hover:bg-blue-600 hover:text-slate-100 transition-all ">Perfil</li>
          <li class="p-1 hover:bg-blue-600 hover:text-slate-100 transition-all ">Configuraciones</li>
          <li class="p-1 hover:bg-blue-600 hover:text-slate-100 transition-all ">Soporte</li>
          <li class="p-1 hover:bg-blue-600 hover:text-slate-100 transition-all ">
            <form class="inline" action="/logout" method="POST">
              @csrf
              <a href="#" onclick="this.closest('form').submit()">
                Salir
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


{{-- @if (session('status'))
  <br>
  {{ session('status') }}
@endif --}}
