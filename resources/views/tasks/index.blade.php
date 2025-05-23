<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Listado de tareas
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="p-4">
                        <a href="{{ route('tasks.storage') }}">
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear tarea</button>
                        </a>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tarea
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descripción
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Completada
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($tasks as $task)
                                <tr class="bg-white dark:bg-gray-800">

                                    <td class="px-6 py-4">
                                        {{ $task->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $task->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $task->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $task->completed ? 'Si' : 'No' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                        @if ($task->completed)
                                            <a href="#"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Deshacer</a>
                                        @else
                                            <a href="#"
                                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Completar</a>
                                        @endif
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        No hay tareas
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="p-4">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>



</x-app-layout>
