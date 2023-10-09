<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div class="flex flex-row">
        <div>
            <button class="p-1 mr-5 ml-2 rounded-md focus:outline-none focus:shadow-outline-purple" aria-label="Menu"
                id="">
                <svg id="menuShowHide" class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" class="" id="menuHide"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd">
                    </path>
                    <path clip-rule="evenodd" fill-rule="evenodd" class="hidden" id="menuShow"
                        d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
        </div>
        <div
            class="container flex items-center justify-between h-full md:pr-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <!-- Search input -->
            <div class="items-center font-semibold text-gray-600 text-lg md:text-3xl" id="headerName">
                {{ $headerName }}
            </div>
            <ul class="flex items-center justify-between sm:justify-end flex-shrink-0 space-x-6 md:mt-1 me-2">
                <!-- Profile menu -->

                {{-- id="dropdownDefaultButton" data-dropdown-toggle="dropdown" --}}
                <div class="relative">
                    <div>
                        <div>
                            <strong class="text-gray-500" id="operatorName">{{ auth()->user()->name }}</strong>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                                aria-label="Account" aria-haspopup="true" id="click">
                                <img class="object-cover w-8 h-8 rounded-full"
                                    src="{{ asset('/images/rounded-logo.png') }}" alt="" aria-hidden="true"
                                    style="border: 1px solid #bababa;" />
                            </button>
                        </div>
                        <!-- ... -->
                    </div>
                </div>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li class="text-center">
                            <form action="{{ route('logout') }}" method="POST" class="inline-flex w-full logoutForm">
                                @csrf
                                <a class="mx-auto">
                                    <button class="{{ config('config.sampleForm.buttonDelete') }}">Log Out</button>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    @vite('resources/js/logoutConfirm.js')
</header>
