<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-right mb-4">
                <a href="{{ route('repositories.create') }}"
                   class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md text-xs"
                >
                    Agregar Repositorio
                </a>
            </p>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            <table>
                <head>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </head>
                <tbody>
                    @forelse ($repositories as $repository)                        
                    <tr>
                        <td class="border px-4 py-2">{{ $repository->id }}</td>
                        <td class="border px-4 py-2">{{ $repository->url }}</td>
                        <td>
                            <a href="{{ route('repositories.show', $repository) }}" class="mx-4 px-4 rounded-md bg-gray-500 text-white">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('repositories.edit', $repository) }}" class="mx-4 px-4 rounded-md bg-sky-500 text-white">Editar</a>
                        </td>
                        <td class="px-4 py-2">
                            <form action="{{ route('repositories.destroy', $repository) }}" method="POST" onSubmit="return confirm('Desea eliminar el repositorio?')" >
                                @csrf
                                @method('DELETE')
                                
                                <input type="submit" value="Eliminar" class="px-4 rounded-md bg-red-500 text-white">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">No hay repositorios credos</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>