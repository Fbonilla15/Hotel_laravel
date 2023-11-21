<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <button onclick="toggleSidebar('separator-sidebar')" data-drawer-target="separator-sidebar"
            data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button"
            class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
        <aside id="separator-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800 dark:bg-gray-800">
                <h1 class="text-white font-sans ml-3 pb-3 font-bold text-lg tracking-widest">HOTELES ATLANTIS</h1>
                <ul class="space-y-2 font-medium">

                    <li>
                        <a href="./index.html"
                            class="flex items-center p-2 text-gray-400 hover:text-gray-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                            </svg>

                            <span class="flex-1 ml-3 whitespace-nowrap">HOTELES</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!--Listado de hoteles-->
        <div class="p-8 sm:ml-64">
            <div class="p-0">
                <div class="h-10">
                    <h1 class="float-left  text-3xl from-neutral-100 md:text-3x1">Hotel disponibles</h3>
                        <button type="button"
                            class="flex text-white bg-gray-700 hover:bg-gray-800 font-normal rounded-lg text-sm px-3 py-1 mr-2 mb-1 float-right absolute top-8 right-6"
                            onclick="openModal('agregarHotel')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Agregar Hotel
                        </button>
                </div>
                <hr>
                <br>
                <div class="grid grid-cols-1 gap-5 mb-4 md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL LAS PALMERAS</h2>
                                <p>Barranquilla, atlantico</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel-las-palmeras.jpg" alt="no hay imagen">
                        </div>
                    </div>
                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL MIRADOR</h2>
                                <p>Boca grande, cartagena</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel-mirador.jpg" alt="no hay imagen">
                        </div>
                    </div>
                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL ONOMA</h2>
                                <p>Medellin, antioquia</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel1.jpg" alt="no hay imagen">
                        </div>
                    </div>
                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL PLAYA LINDA</h2>
                                <p>Tolu, coveñas</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel2.jpg" alt="no hay imagen">
                        </div>
                    </div>

                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL PUERTA ORO</h2>
                                <p>Tolu, coveñas</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel3.jpg" alt="no hay imagen">
                        </div>
                    </div>

                    <div class="flex  h-40 rounded bg-gray-50 shadow-md shadow-gray-400 border border-gray-200 ">
                        <div class="w-3/6 h-full">
                            <div class="p-2 h-3/5">
                                <h2 class="font-bold">HOTEL LUXXE</h2>
                                <p>Poblado, medellin</p>
                            </div>
                            <div class="p-2 flex items-end h-16">
                                <button type="button" title="Editar" onclick="openModal('editarHotel')"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            style="color: teal" />
                                    </svg>
                                </button>
                                <button type="button" title="Eliminar"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"
                                    onclick="openModal('eliminarHotel')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            style="color: rgb(238, 88, 88)" />
                                    </svg>
                                </button>

                                <a href="./detalleHotel.html" title="Ver más"
                                    class="font-medium rounded-lg text-sm  px-1 py-1 mr-2"">
                                <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                                        style="color: darkcyan" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-3/6 h-full rounded p-1">
                            <img class="w-full h-full rounded" src="./img/hotel4.jpg" alt="no hay imagen">
                        </div>
                    </div>

                </div>
            </div>

            <!--Inicio ventana de eliminar-->
            <div id="modalEliminarHotel"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
                tabindex="-1" aria-hidden="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            Comfirmar eliminacion</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Esta seguro de eliminar este Hotel?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button"
                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Eliminar</button>
                                <button onclick="closeModal('eliminarHotel') " type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN ventana de eliminar-->

            <!--INICIO venana editar-->
            <div id="modalEditarHotel"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
                tabindex="-1" aria-hidden="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    HOTEL
                                </h3>
                                <button type="button" onclick="closeModal('editarHotel')"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="defaultModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <form action="#">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="w-full mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <div class="mb-4">
                                                <label for="ciudad"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad:</label>
                                                <input type="text" name="ciudad" id="ciudad"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="nombre"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                                                    del hotel:</label>
                                                <input type="text" name="nombre" id="nombre"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="nit"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nit:</label>
                                                <input type="text" name="nit" id="nit"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="direccion"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion:</label>
                                                <input type="text" name="direccion" id="direccion"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div class="mb-4">
                                                <label for="numHabit"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número
                                                    máximo de habitaciones:</label>
                                                <input type="text" name="numHabit" id="numHabit"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit"
                                        class="inline-flex w-full justify-center rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-teal-700 sm:ml-3 sm:w-auto">Guardar</button>
                                    <button onclick="closeModal('editarHotel') " type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN venana editar-->
        </div>
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
       
            <!--
        Background backdrop, show/hide based on modal state.
    
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <transition enter-active-class="ease-out duration-300" enter-from-class="opacity-0" enter-to-class="opacity-100"
                leave-active-class="ease-in duration-200" leave-from-class="opacity-100 " leave-to-class="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto" v-show="modal">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <!--
            Modal panel, show/hide based on modal state.
    
            Entering: "ease-out duration-300"
              From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
              From: "opacity-100 translate-y-0 sm:scale-100"
              To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          -->
                        <transition enter-active-class="ease-out duration-300"
                            enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            enter-to-class="opacity-100 translate-y-0 sm:scale-100" leave-active-class="ease-in duration-200"
                            leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                            leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <div v-show="modal"
                                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div
                                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                                Deactivate
                                                account</h3>
                                        
                            </div>
                        </transition>
                    </div>
                </div>
            </transition>
        </div>
        <!--Fin listado de hoteles-->
    </div>
    <script>
        export default {
            data() {
                return {
                    modal: false,
                }
            }
        }
        </script>
</body>

</html>