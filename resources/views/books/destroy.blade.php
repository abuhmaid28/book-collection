@extends('layouts.app')

@section('title', 'حذف الكتاب')

@section('header-title', 'حذف الكتاب')

@section('content')
    <div class="bg-card p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">حذف الكتاب</h2>
        <p class="mb-6 text-text-secondary">هل أنت متأكد أنك تريد حذف الكتاب التالي؟</p>
        <p class="mb-4 text-text-secondary"><strong>العنوان:</strong> {{ $book->title }}</p>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="flex justify-end space-x-4">
                <button type="submit"
                    class="bg-red-600 text-text-primary px-6 py-2 rounded-lg shadow hover:bg-red-700 transition duration-300">تأكيد
                    الحذف</button>
                <a href="{{ route('books.index') }}"
                    class="bg-primary text-text-primary px-6 py-2 rounded-lg shadow hover:bg-primary-dark transition duration-300">الرجوع
                    إلى قائمة الكتب</a>
            </div>
        </form>
    </div>
@endsection
