<!--Menu-->
<nav class="relative text-primary-500">
    <div class="container mx-auto flex justify-between items-end">
        <a href="/" title="IT Training &amp; Consulting | Insoft Services">
            <img src="{{asset('images/logos/Insoft-Logo.svg')}}" class="w-40 lg:w-48 xl:w-56"
                alt="IT Training &amp; Consulting | Insoft Services"
                title="IT Training &amp; Consulting | Insoft Services" />
            <h1 class="hidden">Insoft Services</h1>
        </a>
        <ul class="flex items-center pr-4">
            <!-- TODO: write uncheckable radio with scripting or css before/after -->
            <!--Toggleable search-->
            <li class="hover:text-secondary-500">
                <input type="checkbox" value="selected" id="toggle-search" class="toggle-input">
                <label for="toggle-search" class="block cursor-pointer py-6 px-2 lg:px-4 lg:p-6 
                text-md lg:text-base font-bold">
                    <i class="fa fa-search fa-2x" role="button"></i>
                    <span class="hidden">Search</span>
                </label>
                <x-searchmenu />
            </li>
            <!--Toggleable lang-Menu-->
            <li class="hover:text-secondary-500">
                <input type="checkbox" value="selected" id="toggle-lang" class="toggle-input">
                <label for="toggle-lang" class="cursor-pointer py-6 px-2 lg:px-4 lg:p-6 
                text-sm lg:text-base font-bold flex items-end">
                    <img alt="English language" width="42px" src="{{asset('images/flags/GB.svg')}}" />
                </label>
                <x-langmenu />
            </li>
            <!--Toggleable Mega-Menu-->
            <li class="hover:text-secondary-500">
                <input type="checkbox" value="selected" id="toggle-menu" class="toggle-input">
                <label for="toggle-menu" class="block cursor-pointer py-6 px-2 lg:px-4 lg:p-6 
                text-md lg:text-base font-bold">
                    <i class="fa fa-bars fa-2x" role="navigation"></i>
                    <span class="hidden">Menu</span>
                </label>
                <x-megamenu />
            </li>
        </ul>
    </div>
</nav>
