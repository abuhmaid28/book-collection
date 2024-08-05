@props(['title', 'author', 'description', 'showUrl', 'editUrl', 'deleteUrl'])

<div class="bg-card p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
    <h3 class="text-xl font-semibold text-text-primary mb-2">{{ $title }}</h3>
    <p class="text-text-secondary mb-4">المؤلف: {{ $author }}</p>
    <p class="text-text-secondary mb-6">{{ Str::limit($description, 100) }}</p>
    <div class="flex gap-3">
        <a href="{{ $showUrl }}"
            class="bg-accent text-text-primary px-4 py-2 rounded-lg shadow hover:bg-accent-dark transition duration-300">
            عرض التفاصيل
        </a>
        <a href="{{ $editUrl }}"
            class="bg-button-primary text-white px-4 py-2 rounded-lg shadow hover:bg-gray-700 transition duration-300">
            تعديل
        </a>
        <form action="{{ $deleteUrl }}" method="POST" class="flex items-center">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-button-danger text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition duration-300">
                حذف
            </button>
        </form>
    </div>
</div>
