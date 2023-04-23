@extends('layout.main')

@section('title', 'Home - DimDim')

@section('content')

    <header>
        <nav class="bg-green-700 h-20 p-5 flex items-center">
            <a href="#" class="text-white text-3xl">DimDim</a>
        </nav>
    </header>

    <main class="m-5">
        <div class="flex justify-center">
            <a href="#" class="bg-green-500 p-2 rounded text-white">Criar Transação</a>
        </div>

        <div class="mt-10">
            <table class="min-w-full">
                <thead class="bg-green-500">
                    <tr>
                        <th scope="col" class="px-6 py-4 text-left font-medium">Data</th>
                        <th scope="col" class="px-6 py-4 text-left font-medium">Descrição</th>
                        <th scope="col" class="px-6 py-4 text-left font-medium">Valor</th>
                        <th scope="col" class="px-6 py-4 text-left font-medium">Tipo</th>
                    </tr>
                </thead>
                <tbody class="bg-green-50">
                    @foreach ($transactions as $transaction)
                        <tr class="even:bg-white-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $transaction['date'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $transaction['description'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $transaction['value'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $transaction['type'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
