<header class="bg-primary text-text-primary p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('books.index') }}" class="text-2xl text-white font-bold">مكتبة الكتب</a>
        <nav class="space-x-4">
            @if (Route::currentRouteName() !== 'books.index')
                <a href="{{ route('books.index') }}" class="text-lg text-white">الرجوع لقائمة الكتب</a>
            @endif
        </nav>
    </div>
</header>
