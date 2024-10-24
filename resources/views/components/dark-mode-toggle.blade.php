<div>
    <button id="toggle-dark-mode" class="bg-blue-500 text-white p-2 rounded">
        {{ session('dark-mode') ? 'Light Mode' : 'Night Mode' }}
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const isDarkMode = localStorage.getItem('dark-mode') === 'true';
        if (isDarkMode) {
            document.documentElement.classList.add('dark');
        }

        document.getElementById('toggle-dark-mode').addEventListener('click', function() {
            const darkModeEnabled = document.documentElement.classList.toggle('dark');
            localStorage.setItem('dark-mode', darkModeEnabled);

            fetch('/toggle-dark-mode', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ darkMode: darkModeEnabled })
            }).then(response => {
                if (response.ok) {
                    return response.json();
                }
            });
        });
    });
</script>
