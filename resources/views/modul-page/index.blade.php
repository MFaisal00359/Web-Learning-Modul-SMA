<x-guest-layout>
    {{-- NAVBAR --}}
    <nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 sm:px-12 md:24 lg:32 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
        <div class="flex flex-wrap items-center text-gray-900">
            <a href="#" class="mr-4 cursor-pointer py-1.5 font-sans flex text-base items-center font-medium leading-relaxed text-inherit antialiased">
                <img class="w-10 h-10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADiUlEQVR4nO1aTU8TQRh+1UA9edMDxZgYEyMhYBF3TfwgMQYI4eof8EB7sB5MOHMFYyQRe9I/gGC0fhCPnhQquNuAHurBBFiJabuJFkMiS8e8MgvDsttu96Nu2XmSJ5Cd2Z15nnnft7ObAeDg4ODg4ODg4ODg4DBg5Bs5Op7fevKooBVTxTKxy4lCmSSUrb1c1dYTijY7pGjJZI5EjGP150hElNU7gqTOipK6LsoqcUNBVhVBVkfblkgzOMV4futxLcJ1juUN4g2MK5oUXyZRfZxLUiEqykXZrWgLI0YdG/CwoBVQ0PxGmZTJLvB/vGZlwPBaZQN0EzAStlfeH/F6JDg2IEUFaax6ij9lYip+5Ed18YwJtzHs/RKv07UBRhgjAHMew97OyhsM+CDI6lxDGXC3RpEVDVjVSoKklhrKgNhMlhy+P0Xg3uQe4rWumeyOOLafsY2l2YRbpjPkkMkYeA3bzPoZ23wzoGn82b6J6cQ2XZixH9tWzYAjD6Ytx8A2q35sm28GdFWKgDe7q8z2M7a5iYDolHUEsG2eGqBRD/CvV/lfyYDA1YD5jTLZLG9X/lAakGLIDVB4BJBQp0AsjPuAFMNQ7gNSDEO5D0hV+tARphowVuVDR5AM6H6/QmJvF0nnq3nvDBheawwDLrz7SjrTH3foiQEjNXzo+J8G4Mqz4l0ZMOHwQ8f/NOBf2HtlQMJkwvXYB7gh5ryvBjTVYR/gygCDeM8N6KrDPiDQBiQCXgO4AWkeAYSnQJrXABLefUDa5xRo4vuAbHj2AfFVrdRI+4CLc99NDMiUXKSANhc0A9j3fLPVNuEnxwYMKVoySAYY3/Nt8aU07NiAZI5E8CRHEAwwe8+3wc9nZnL7ziPVhPgyifplwq2VTVfv+dXEx14vnAIvcHOJNONxFjzR4VVhRPE3vvyyX91t5HzHi8zvznRmAcPe9cr7BVEuPrcSKcjqJBx0dGfzZwWpqO4zQCoWhGyhFcKA7sXiSVFWn4qy+hOJKx8a8RwcHAcKEQA4BgAnAACL2GkAaAOA8wAgAMBVyh4AuE7ZCwB9eEAcAAYp++m1XqZfD3O/QJ/ZRsdopWPi2HX7vW8GADzh3Q4Al+mEBwPCPjqndjpH50fkLdABAAMBEGqXA3TOnqEj7AYADauWBkiBFj9SACxgVgTPMUXwCi1i1xwUQbwH78Vn6EUQn60XweNeFMG/mhg8XGgQAsQAAAAASUVORK5CYII=">
                <span class="px-4">My Learning</span>
            </a>
            <ul class="ml-auto mr-8 hidden items-center gap-6 lg:flex">
                <li class="block p-1 font-sans text-md font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="block p-1 font-sans text-md font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/modul-page') }}">
                        Modul Belajar
                    </a>
                </li>
                <li class="block p-1 font-sans text-md font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/beasiswa-page') }}">
                        Info Beasiswa
                    </a>
                </li>
                <li class="block p-1 font-sans text-md font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/konseling-page') }}">
                        Konseling
                    </a>
                </li>
            </ul>
            <button
                class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
                data-collapse-target="sticky-navar">
                <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2">
                    <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                    ></path>
                </svg>
                </span>
            </button>
        </div>
        <div class="block h-0 w-full basis-full overflow-hidden text-blue-gray-900 transition-all duration-300 ease-in lg:hidden" data-collapse="sticky-navar">
            <ul class="mt-2 mb-4 flex flex-col gap-2 pb-2">
                <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('welcome') }}">
                        Home
                    </a>
                </li>
                <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/modul-page') }}">
                        Modul Belajar
                    </a>
                </li>
                <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/beasiswa-page') }}">
                        Info Beasiswa
                    </a>
                </li>
                <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
                    <a class="hover:underline hover:text-blue-700" href="{{ url('/konseling-page') }}">
                        Konseling
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <section class="relative container mx-auto p-4 sm:py-20 px-0 md:p-10 md:px-0 bg-white selection:bg-red-500 selection:text-white bottom-0">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- CREATE MODULS --}}
            @if(isset($moduls) && count($moduls) > 0)
                <table class="w-full text-sm text-left rtl:text-right">
                    <thead class="text-xs text-white uppercase bg-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama Modul
                            </th>
                            <th scope="col" class="px-6 py-6">
                                File Modul
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($moduls as $modul)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th class="px-6 py-4 text-gray-800 whitespace-nowrap">
                                    {{ $modul->nama_modul }}
                                </th>
                                <th class="px-6 py-4 lowercase ">
                                    {{ $modul->filePath_modul }}
                                </th>
                                <th class="py-4 whitespace-nowrap">
                                    {{-- BUTTON DOWNLOAD --}}
                                    <a href="{{ route('modul-page.showFile', $modul) }}" class="text-blue-500 hover:underline">Download</a>
                                </th>
                            </tr>
                        @empty
                            <tr class="bg-white dark:bg-gray-100 dark:border-gray-700 w-full">
                                <th colspan="3" class="px-6 py-4 font-medium text-gray-900 dark:text-gray-800 whitespace-nowrap">
                                    {{ __('Info modul pembelajaran belum ada -_-') }}
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @else
                <div class="bg-white dark:bg-gray-100 dark:border-gray-700 w-full">
                    <div colspan="3" class="px-6 py-4 font-medium text-gray-900 dark:text-gray-800 whitespace-nowrap">
                        {{ __('Info modul pembelajaran belum ada -_-') }}
                    </div>
                </div>
            @endif

        </div>
    </section>
</x-guest-layout>
