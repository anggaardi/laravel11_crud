<div class="flex flex-col h-full w-full">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="container mx-auto p-8">
            <h1 class="text-2xl font-bold mb-4">{{ __($user->name) }}</h1>
            <div class="overflow-x-auto"></div>
        </div>
    </div>

    <div class="w-full">
        <div class="grid pb-11">
            <div class="flex gap-2.5 mb-4">
                <img src="https://pagedone.io/asset/uploads/1710412177.png" alt="Shanay image" class="w-10 h-11">
                <div class="grid">
                    <h5 class="text-gray-900 text-sm font-semibold leading-snug pb-1">Shanay cruz</h5>
                    <div class="w-max grid">
                        <div class="px-3.5 py-2 bg-gray-100 rounded justify-start items-center gap-3 inline-flex">
                            <h5 class="text-gray-900 text-sm font-normal leading-snug">Guts, I need a review of work. Are you ready?</h5>
                        </div>
                        <div class="justify-end items-center inline-flex mb-2.5">
                            <h6 class="text-gray-500 text-xs font-normal leading-4 py-1">05:14 PM</h6>
                        </div>
                    </div>
                    <div class="w-max grid">
                        <div class="px-3.5 py-2 bg-gray-100 rounded justify-start items-center gap-3 inline-flex">
                            <h5 class="text-gray-900 text-sm font-normal leading-snug">Let me know</h5>
                        </div>
                        <div class="justify-end items-center inline-flex mb-2.5">
                            <h6 class="text-gray-500 text-xs font-normal leading-4 py-1">05:14 PM</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bagian Chat -->
        <div class="flex gap-2.5 justify-end pb-40">
            <div>
                <div class="grid mb-2">
                    <h5 class="text-right text-gray-900 text-sm font-semibold leading-snug pb-1">You</h5>
                    <div class="px-3 py-2 bg-indigo-600 rounded">
                        <h2 class="text-white text-sm font-normal leading-snug">Yes, let’s see, send your work here</h2>
                    </div>
                    <div class="justify-start items-center inline-flex">
                        <h3 class="text-gray-500 text-xs font-normal leading-4 py-1">05:14 PM</h3>
                    </div>
                </div>
                <div class="justify-center">
                    <div class="grid w-fit ml-auto">
                        <div class="px-3 py-2 bg-indigo-600 rounded">
                            <h2 class="text-white text-sm font-normal leading-snug">Anyone on for lunch today</h2>
                        </div>
                        <div class="justify-start items-center inline-flex">
                            <h3 class="text-gray-500 text-xs font-normal leading-4 py-1">You</h3>
                        </div>
                    </div>
                </div>
            </div>
            <img src="https://pagedone.io/asset/uploads/1704091591.png" alt="Hailey image" class="w-10 h-11">
        </div>
        
        <!-- Input Chat -->
        <div class="w-full pl-3 pr-1 py-1 rounded-3xl border border-gray-200 items-center gap-2 inline-flex justify-between">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M6.05 17.6C6.05 15.3218 8.26619 13.475 11 13.475C13.7338 13.475 15.95 15.3218 15.95 17.6M13.475 8.525C13.475 9.89191 12.3669 11 11 11C9.6331 11 8.525 9.89191 8.525 8.525C8.525 7.1581 9.6331 6.05 11 6.05C12.3669 6.05 13.475 7.1581 13.475 8.525ZM19.25 11C19.25 15.5563 15.5563 19.25 11 19.25C6.44365 19.25 2.75 15.5563 2.75 11C2.75 6.44365 6.44365 2.75 11 2.75C15.5563 2.75 19.25 6.44365 19.25 11Z" stroke="#4F46E5" stroke-width="1.6"/>
                </svg>
                <input class="grow shrink basis-0 text-black text-xs font-medium leading-4 focus:outline-none" placeholder="Type here...">
            </div>
            <div class="flex items-center gap-2">
                <button class="items-center flex px-3 py-2 bg-indigo-600 rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M3 11H19M19 11L14.5 6.5M19 11L14.5 15.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
