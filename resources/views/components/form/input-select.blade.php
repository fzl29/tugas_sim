@props([
    'name',
    'label',
    'options' => [],
    'selected' => null,
    'required' => false,
])

<div class="relative">
    <label for="{{ $name }}" class="block mb-1.5 font-semibold">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" @if ($required) required @endif class="cursor-pointer w-full py-2.5 px-4 pr-10 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 bg-light7 dark:bg-dark7 appearance-none focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
        <option value="">{{ $name }}</option>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ (string) $value === (string) $selected ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>
    <div class="pointer-events-none absolute right-3 top-[50px] transform -translate-y-1/2 hover:text-light1 dark:hover:text-dark1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
    </div>
</div>
