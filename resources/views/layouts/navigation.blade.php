
<div class="py-16">
<nav  class=" border-b border-gray-900 rounded-b-2xl bg-blue-gray fixed inset-x-0 top-0 h-16 z-50">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div x-data="{ isOpen: false }" class="relative flex items-center justify-between h-16">
      <div class="flex items-center px-2 lg:px-0 ">
        <div class="flex-shrink-0">
          <span class="inline-flex"> 
          <a href="{{ route('home') }}"> <img class=" lg:block h-16 w-auto mr-4" src="{{ asset('img/icons/logo.svg') }}" alt="Zeitplans"></a>
          <span class="text-white text-5xl mr-16 mt-3">Zeitplans</span></span> 
        </div>
        <div class="hidden lg:block lg:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home', '#features') }}" class="text-gray-300 hover:bg-gray-700 hover:text-coffee px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">Features</a>
            <a href="{{ route('home', '#faq') }}" class="text-gray-300 hover:bg-gray-700 hover:text-coffee px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">FAQ</a>
            <a href="{{ route('home', '#pricing') }}" class="text-gray-300 hover:bg-gray-700 hover:text-coffee px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">Pricing</a>
            <a x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'show')" class="text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-coffee px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">Live Demo</a>
            <a href="{{ route('home', '#contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-coffee px-3 py-2 rounded-md text-lg font-bold focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">Contact</a>
          </div>
        </div>
      </div>
    
      <div class="flex lg:hidden">
        <!-- Mobile menu button -->
        <button 
            type="button" 
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" 
            @click="isOpen = !isOpen"
            > 
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="relative bg-white">
      <div  x-show="isOpen" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div  class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-coffee">
          <div class="pt- pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <!-- <img class="w-auto h-10" src="{{ asset('img/icons/logo.svg') }}" alt="Zeitplans"> -->
              </div>
              <div>
                <button 
                    type="button" 
                    class="bg-dark-coffee rounded-md mt-4 mr-3  inline-flex text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-dark-coffee"
                    @click="isOpen = !isOpen">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="{{ route('home', '#features') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-gray text-white">
                    <!-- Heroicon name: calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path class="bg-dark-coffee" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Features
                  </div>
                </a>

                <a href="{{ route('home', '#faq') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-gray text-white">
                    <!-- Heroicon name: Question mark -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    FAQ
                  </div>
                </a>

                <a href="{{ route('home', '#pricing') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-gray text-white">
                    <!-- Heroicon name: currency-dollar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Pricing
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-gray text-white">
                    <!-- Heroicon play -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Demo
                  </div>
                </a>

                <a href="{{ route('home', '#contact') }}" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-gray text-white">
                    <!-- Heroicon at symbol -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Contact
                  </div>
                </a>
                
              </nav>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>


    </div>
  </div>
</nav>
