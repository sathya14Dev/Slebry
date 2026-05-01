<!-- components/navbar.blade.php -->
<nav class="bg-white shadow p-4 px-6 md:px-10 flex justify-between items-center fixed z-10 w-full">
    <a href="/" class="font-bold text-blue-950 text-xl">Slebry</a>

    <div class="space-x-4 text-secondary">
        <a href="/home">Home</a>
        <a href="/information">Information</a>
        <a href="/books">Books</a>

        @auth
            <a href="/dashboard">Dashboard</a>
        @else
            <a href="/login" class="bg-blue-900 py-2 px-3 rounded-md text-white font-medium">Login</a>
        @endauth
    </div>
</nav>