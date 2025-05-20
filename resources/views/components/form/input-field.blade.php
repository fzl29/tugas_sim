@props(['name', 'label', 'place' => '', 'value' => '', 'required' => false])

<div>
    <label for="{{ $name }}" class="block mb-1.5 font-semibold">{{ $label }}</label>
    <input type="text" id="{{ $name }}" name="{{ $name }}" class="w-full py-2.5 px-4 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200" placeholder="{{ $place }}" value="{{ $value }}" @if($required) required @endif />
</div>