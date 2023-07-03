@extends('layout.main')

@section('title', 'Criar Transação - DimDim')

@section('content')
    <div class="flex justify-center mt-16">
        <form class="w-full max-w-lg mx-auto mt-8">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="text-gray-700 text-xs font-bold mb-2" for="nome">
                        Data
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="date" type="date">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="text-gray-700 text-xs font-bold mb-2" for="email">
                        Valor
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email" placeholder="Valor da Transação">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="text-gray-700 text-xs font-bold mb-2" for="email">
                        Descrição
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email" placeholder="Tipo da Descrição">
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="text-gray-700 text-xs font-bold mb-2" for="mensagem">
                        Tipo
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email" placeholder="Valor da Descrição">
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button class="bg-green-500 mt-5 p-2 px-5 rounded text-white shadow" type="submit">
                        Criar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
