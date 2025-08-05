/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',// Laravel Blade templates
        './resources/views/**/*.blade.php',// Laravel Blade templates
        './resources/js/*.js',        // JavaScript files// Vue files (if applicable)
        './resources/views/components/*.blade.php', // shadcn/ui Blade components
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#f0f9ff',
                    500: '#3b82f6',
                    600: '#2563eb',
                    700: '#1d4ed8',
                },
                cooperative: {
                    50: '#f0fdf4',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                },
            },
        },
    },
    plugins: [
        require('tailwindcss-animate'), // For shadcn/ui animations
    ],
    darkMode: 'class', // Enable dark mode with 'dark' class
}
