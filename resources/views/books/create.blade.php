@extends('layouts.app')

@section('title', 'إضافة كتاب')
@section('header-title', 'إضافة كتاب جديد')

@section('content')
    <div class="bg-card p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">إضافة كتاب</h2>
        <p class="text-text-secondary mb-6">املأ التفاصيل أدناه لإضافة كتاب جديد إلى مكتبتك.</p>
        <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-text-primary">عنوان الكتاب</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent sm:text-sm"
                    required>
            </div>
            <div class="mb-5">
                <label for="author" class="block text-sm font-medium text-text-primary">المؤلف</label>
                <input type="text" id="author" name="author"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent sm:text-sm"
                    required>
            </div>
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-text-primary">الوصف</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-accent focus:border-accent sm:text-sm"
                    required></textarea>
            </div>
            <div class="flex justify-end gap-3">
                <button type="submit"
                    class="bg-button-secondary text-text-primary px-6 py-2 rounded-lg shadow hover:bg-yellow-400 transition duration-300">إضافة</button>
                <a href="{{ route('books.index') }}"
                    class="bg-button-primary text-white px-6 py-2 rounded-lg shadow hover:bg-gray-700 transition duration-300">الرجوع
                    إلى قائمة الكتب</a>
            </div>
        </form>
    </div>
@endsection
