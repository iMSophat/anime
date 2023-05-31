<div class="container mx-auto items-center justify-between flex gap-1 py-1">
    <div class="flex-shrink-0 flex items-center justify-center">
        <button type="button" class="h-8 sidebar-toggle js-sidebar-toggle flex items-center px-2 justify-center rounded-md">
            <svg class="h-6" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.375 10.7083H30.625" stroke="#292D32" stroke-width="2.91667" stroke-linecap="round"/>
                <path d="M4.375 19.4583H21.875" stroke="#292D32" stroke-width="2.91667" stroke-linecap="round"/>
                <path d="M4.375 28.2083H14.5833" stroke="#292D32" stroke-width="2.91667" stroke-linecap="round"/>
            </svg>
        </button>
        <a href="/">
            <img class="h-12 object-cover" src="{{ asset('logo.svg') }}" alt="logo">
        </a>
    </div>
    
    <div class="w-full relative max-w-lg">
        <input 
            type="text" 
            name="search" 
            id="search" 
            placeholder="Search..."
            class="border h-9 flex items-center focus:outline-none w-full px-3 rounded-full"
        >

        <button type="button" class="w-10 h-9 flex items-center justify-center px-2 ml-auto top-0 right-0 absolute rounded-full rounded-l-none bg-slate-200">
            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none">
                <path d="M9.58329 17.5C13.9555 17.5 17.5 13.9556 17.5 9.58335C17.5 5.2111 13.9555 1.66669 9.58329 1.66669C5.21104 1.66669 1.66663 5.2111 1.66663 9.58335C1.66663 13.9556 5.21104 17.5 9.58329 17.5Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3333 18.3334L16.6666 16.6667" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="flex gap-2 items-center">

        <button class="flex rounded-full w-7 h-7 items-center justify-center">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.75 2.5C10.5114 2.5 9.5 3.51136 9.5 4.75C9.5 5.98864 10.5114 7 11.75 7C12.9886 7 14 5.98864 14 4.75C14 3.51136 12.9886 2.5 11.75 2.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                <path d="M11.75 10C10.5114 10 9.5 11.0114 9.5 12.25C9.5 13.4886 10.5114 14.5 11.75 14.5C12.9886 14.5 14 13.4886 14 12.25C14 11.0114 12.9886 10 11.75 10Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
                <path d="M11.75 17.5C10.5114 17.5 9.5 18.5114 9.5 19.75C9.5 20.9886 10.5114 22 11.75 22C12.9886 22 14 20.9886 14 19.75C14 18.5114 12.9886 17.5 11.75 17.5Z" fill="#071F43" stroke="#071F43" stroke-linejoin="round"/>
            </svg>
        </button>

        
        <a href="{{ route('login.index') }}" rel="unfollow" class="bg-primary flex-shrink-0 text-sm font-roboto font-medium text-white p-1.5 px-4 rounded-full">
            Sign Up
        </a>
    </div>
</div>