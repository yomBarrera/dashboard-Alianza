<style>
  .login_img_section {
    background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)), url('/images/ofice-meeting.jpg') center center /cover no-repeat;
  }
</style>

<x-layout meta-title="Alianza test">

  <div class="h-full flex">
    <div class="hidden relative lg:flex w-full lg:w-[63%] justify-around login_img_section">
      <div class="absolute bg-gradient-to-b from-white from-40% to-sky-400  opacity-30 inset-0"></div>
      <div class="relative w-full mt-auto mb-28 px-28 space-y-8 z-10">
        <p class="text-white mt-1 text-3xl ">Bienvenido a la mejor plataforma <strong class="block">organizacional
            online
          </strong>
        </p>
        <p class="text-white mt- text-2xl "> Gestión efectiva del talento humano</p>
      </div>
    </div>
    <div class="flex w-full lg:w-[37%] justify-center items-center bg-white space-y-8">
      <div class="w-full px-8 md:px-10 lg:pl-24 lg:pr-20 lg:mt-[-120px] max-w-lg ">
        <div class="mb-[70px] ">
          <img class="m-auto w-[240px]" src="/images/logo-color-psicoalianza-pruebas.webp" alt="">
        </div>
        <form class="bg-white p-5 text-xs" method="POST">
          @csrf
          <label for="usuario" class="block mb-8">
            <p class="font-medium text-slate-700 pb-2">Usuario</p>
            <input id="usuario" name="usuario" type="text"
              class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
              placeholder="ingresa el usuario" autofocus required>
            @error('usuario')
              <small class="text-red-400">
                {{ $message }}
              </small>
            @enderror
          </label>

          <label for="password"class="block mb-4">
            <p class="font-medium text-slate-700 pb-2">Contraseña</p>
            <input id="password" name="password" type="password"
              class="w-full py-1 border border-slate-200 rounded-2xl px-3 focus:outline-none focus:border-indigo-500 hover:shadow"
              placeholder="ingresa la contraseña" required>
            @error('password')
              <small class="text-red-400">
                {{ $message }}

              </small>
            @enderror
          </label>
          <div class="flex justify-center">
            <div>
              <div class="inline-flex items-center ">
                <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox-8"
                  data-ripple-dark="true">
                  <input type="checkbox"
                    class="before:content[''] peer relative h-4 w-4 cursor-pointer appearance-none rounded-md border border-gray-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-blue-500 checked:bg-blue-500 checked:before:bg-blue-500 hover:before:opacity-10"
                    id="checkbox-blue" name="remember" />
                  <div
                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                      stroke="currentColor" stroke-width="1">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                </label>
                <span class="text-sm">Recordar cuenta</span>
              </div>
            </div>
          </div>
          <button type="submit"
            class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-500 transition-all duration-500 text-white font-semibold mb-2">Iniciar
            sesión</button>
          <div class="flex justify-between mt-4 text-xs">
            <span class=" ml-2 text-gray-400 hover:text-gray-300 cursor-pointer  duration-500">olvidaste
              tu usuario</span>

            <a href="#" class=" ml-2 text-gray-400 hover:text-gray-300 cursor-pointer  duration-500">¿Olvidaste
              tu contraseña?</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-layout>
