@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'text-green-800 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-800 dark:focus:border-indigo-600 focus:ring-green-800 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>
