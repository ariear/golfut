<header class="bg-[#82DBD8] shadow">
    <nav class="flex items-center justify-between container mx-auto px-16 py-5">
        <a href="/" class="text-2xl font-semibold">{{ config('app.name') }}</a>
        <ul class="flex items-center">
            @can('admin')
            <li><a href="/dashboard" class="py-3 px-5 bg-[#42C2FF] text-white tracking-wide rounded-lg mr-4">Dashboard</a></li>
            @endcan
            @auth
            <form action="/logout" method="post">
            @csrf
            <a class="py-3 px-5 bg-[#FF5858] text-white tracking-wide rounded-lg"><button type="submit">Logout</button></a>
            </form>
            @endauth
            @guest
            <li><a href="/login" class="py-3 px-5 bg-[#42C2FF] text-white tracking-wide rounded-lg">Masuk</a></li>
            @endguest
        </ul>
    </nav>
</header>
