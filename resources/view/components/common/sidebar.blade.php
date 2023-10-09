<div class="flex h-screen bg-gray-50 dark:bg-gray-900">
    <style>
        .activeNav {
            background-color: #F9FAFB;
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }
    </style>
    <aside class="z-20 w-64 overflow-y-hidden bg-gray-200  dark:bg-gray-800 flex-shrink-0 asideShowHide"
        id="asideShowHide">
        <div class=" text-gray-500 dark:text-gray-400 ">
            <div class="pb-2 pt-1 activeNav">
                <h1 class="text-black text-center text-xl" id="titleLong">Template
                </h1>
                <h1 class="text-black text-center text-xl hidden pt-3 pb-4" id="titleShort">TEMP</h1>
            </div>
            <ul class="h-[90vh] overflow-y-hidden hover:overflow-y-auto aside">

                {{-- Single Feature --}}
                <li class="" id="dashboardActive">
                    <a href="{{ route('index') }}"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" id="dashboardIcon">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg>
                        <span class="ml-3" id="dashboardText">Dashboard</span>
                    </a>
                </li>
                {{--  Single Feature --}}

                {{-- Multi Features --}}
                <li class="">
                    <button type="button" class="{{ config('iconConfig.merchandisingClass') }}" id="merchandisingBtn"
                        aria-controls="merchandising" data-collapse-toggle="merchandising">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" id="merchandisingIcon">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="{{ config('iconConfig.merchandisingIcon') }}">
                            </path>
                            <path
                                d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434
                                 1.279 9.768 9.768 0 00-6.963-6.963z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item
                            id="merchandisingText">Merchandising</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="merchandising" class="hidden py-2 space-y-2">
                        <li class="" id="contractActive">
                            <a href="{{ route('contracts.index') }}"
                                class="{{ config('iconConfig.merchandisingIconClass') }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" id="contractIcon"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="{{ config('iconConfig.contractIcon') }}" fill="black" />
                                </svg>

                                <span id="contractText" class="px-3">Contract</span>
                            </a>
                        </li>
                        <li class="" id="purchaseOrderActive">
                            <a href="{{ route('purchase-orders.index') }}"
                                class="{{ config('iconConfig.merchandisingIconClass') }}">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" id="purchaseOrderIcon">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="{{ config('iconConfig.purchaseOrderIcon') }}">
                                    </path>
                                    <path d="{{ config('iconConfig.purchaseOrderIconTwo') }}">
                                    </path>
                                </svg>
                                <span id="purchaseOrderText" class="px-3">Purchase Order</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Multi Features --}}
            </ul>
        </div>
        <input type="hidden" value="{{ $name }}" id="sideActive">
    </aside>
</div>
@vite('resources/js/ariaExpand.js')
