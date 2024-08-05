@extends('layouts.app')

@section('title', 'قائمة الكتب')

@section('header-title', 'قائمة الكتب')

@section('content')
    <!-- Button to Add New Book -->
    <a href="{{ route('books.create') }}"
        class="bg-accent text-text-primary px-6 py-3 rounded-lg shadow-md hover:bg-accent-dark transition duration-300">
        إضافة كتاب جديد
    </a>

    <!-- Book Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        @foreach ($books as $book)
            <x-book-card :title="$book->title" :author="$book->author" :description="$book->description" :show-url="route('books.show', $book->id)" :edit-url="route('books.edit', $book->id)"
                :delete-url="route('books.destroy', $book->id)" />
        @endforeach
    </div>
@endsection
