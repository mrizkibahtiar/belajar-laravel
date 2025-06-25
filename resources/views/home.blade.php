<x-layout>
    <!-- x-slot:title ini akan mengirimkan data(dlm hal ini adalah title) ke component -->
    <!-- dikirim ke x-layout(component layout) -->
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Ini adalah halaman Home Page</h3>
</x-layout>