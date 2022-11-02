<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                            <a href="{{ route('repositories.show', $repository) }}">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('repositories.edit', $repository) }}">Editar</a>
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