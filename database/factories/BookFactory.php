<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class BookFactory extends Factory
{
    protected $model = \App\Models\Book::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'title' => $this->generateEgyptianTitle(),
            'author' => $this->generateEgyptianAuthor(),
            'description' => $this->generateEgyptianDescription(),
        ];
    }

    private function generateEgyptianTitle()
    {
        $titles = [
            'كتاب عن البرمجة بلغة بايثون',
            'مقدمة في الذكاء الاصطناعي',
            'أساسيات تطوير الويب',
            'تعلم Laravel من البداية للنهاية',
            'تطور التكنولوجيا في العصر الحديث',
        ];

        return $titles[array_rand($titles)];
    }

    private function generateEgyptianAuthor()
    {
        $authors = [
            'أحمد شوقي الله يرحمه',
            'احمد شعبان',
            'احمد حُزين',
            'شعبان عبد الرحيم',
            'عبد الباسط حمودة',
        ];

        return $authors[array_rand($authors)];
    }

    private function generateEgyptianDescription()
    {
        $descriptions = [
            'كتاب كامل عن البرمجة بلغة بايثون، من الألف للياء.',
            'استكشاف الذكاء الاصطناعي وتطبيقاته في الحياة اليومية.',
            'دليل للمبتدئين في تطوير الويب باستخدام أحدث التقنيات.',
            'تعلم كيفية بناء تطبيقات الويب باستخدام Laravel من البداية للنهاية.',
            'نظرة على أحدث الاتجاهات في تكنولوجيا المعلومات وتأثيرها على المجتمع.',
        ];

        return $descriptions[array_rand($descriptions)];
    }
}
