<header class="bg-trueGray-700">
    <div class="container flex items-center h-16">
        <a class="flex flex-col items-center justify-center px-4 bg-white bg-opacity-25 cursor-pointer font-semibold ">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>Categorias</span>
        </a>
        <a href="/" class="mx-6">
            <x-jet-application-mark class="display-block h-9 w-auto"/>
        </a>

        @livewire('search')
    </div>
</header>
