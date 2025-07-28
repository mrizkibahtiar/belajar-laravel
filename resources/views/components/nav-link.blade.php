@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700'}} text-sm/6 rounded-lg px-3 py-2 font-semibold"
    aria-current="{{ $active ? 'page' : 'false' }}"> {{ $slot }} </a>

<!-- {{ $attributes }} => gunanya adalah mengambil semua atribut yang menerapkan component ini -->
