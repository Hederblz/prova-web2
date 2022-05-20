<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Logado mizera!!!
                </div>
                <table>
                        @foreach(Auth::user()->camisas as $camisa)
                            <tr>
                                <td>{{$camisa->marca}}</td>
                                <td>{{$camisa->tecido}}</td>
                                <td>{{$camisa->cor}}</td>
                                <td>{{$camisa->tamanho}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-camiseta" method="POST">
                        @csrf
                        <input type="text" name="marca" placeholder="marca">
                        <input type="text" name="tecido" placeholder="tecido">
                        <input type="text" name="cor" placeholder="cor">
                        <input type="text" name="tamanho" placeholder="tamanho">
                        <input type="submit" value="Manda">
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
