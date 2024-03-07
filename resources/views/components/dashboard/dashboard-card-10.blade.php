  <div class="col-span-full bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Artículos</h2>
    </header>
    <div class="p-3">
        
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-sm text-left text-gray-600 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            {{-- <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-indigo-500 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-500 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div> --}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Autor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de creación
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Última modificación
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-indigo-500 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-500 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a type="button" href="/edit" class="hover:underline">adasdasd</a>
                            </th>
                            <td class="px-6 py-4">
                                {{-- {{ $article->user->name }} --}}
                                Nombre del usuario
                            </td>
                            <td class="px-6 py-4">
                                {{-- {{ $article->created_at->format('d-m-Y') }} --}}
                                07-07-2021
                            </td>
                            <td class="px-6 py-4">
                                {{-- {{ $article->updated_at->format('d-m-Y') }} --}}
                                07-07-2021
                            </td>
                            <td class="px-6 py-4">
                                <form method="POST" action="" id="destroy-form">
                                    @csrf
                                </form>

                                <a type="submit"class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="event.preventDefault();
                                document.getElementById('destroy-form').submit();">Eliminar</a>

                                <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline ms-3">Descargar</a>
                                <a href="#" class="font-medium text-indigo-500 dark:text-indigo-500 hover:underline ms-3">Compartir</a>
                            </td>
                        </tr>
                    
                    
                </tbody>
            </table>
        
        </div>
    
    </div>
</div>