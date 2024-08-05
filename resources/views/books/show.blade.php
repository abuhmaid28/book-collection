@extends('layouts.app')

@section('title', 'تفاصيل الكتاب')
@section('header-title', 'تفاصيل الكتاب')

@section('content')
    <div class="bg-card p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">{{ $book->title }}</h2>
        <p class="mb-4 text-text-secondary"><strong>المؤلف:</strong> {{ $book->author }}</p>
        <p class="mb-6 text-text-secondary"><strong>الوصف:</strong> {{ $book->description }}</p>
        <div class="flex gap-3">
            <a href="{{ route('books.edit', $book->id) }}"
                class="bg-button-secondary text-text-primary px-6 py-2 rounded-lg shadow hover:bg-yellow-400 transition duration-300">تعديل</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-button-danger text-white px-6 py-2 rounded-lg shadow hover:bg-red-700 transition duration-300">حذف</button>
            </form>
            <a href="{{ route('books.index') }}"
                class="bg-button-primary text-white px-6 py-2 rounded-lg shadow hover:bg-gray-700 transition duration-300">الرجوع
                إلى قائمة الكتب</a>
        </div>
    </div>
@endsection
