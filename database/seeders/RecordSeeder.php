<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleRecords = [['status' => 'in stock', 'title' => 'The dog and the cat', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'The adventures of Tom', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Gardening basics', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Advanced cooking techniques', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Learning Python', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Mastering JavaScript', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'History of Art', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Physics for Beginners', 'notes' => 'Some notes inside'],
            ['status' => 'in stock', 'title' => 'Biology 101', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Chemistry Essentials', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Philosophy: An Introduction', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'The Universe Explained', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Astronomy for Kids', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Gardening for Beginners', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Introduction to Algebra', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Calculus Made Easy', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'The World of Microbes', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Healthy Cooking', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'The History of Rome', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'The Great War', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Shakespeare\'s Works', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'French for Beginners', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Spanish Essentials', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'German Grammar', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'The Joy of Painting', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Digital Photography', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Learn to Draw', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Creative Writing', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Poetry for All', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'The World of Birds', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Marine Biology', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Animal Kingdom', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Botany Basics', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'The Solar System', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Physics Advanced', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Chemistry Experiments', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'History of Music', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'World Literature', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Ancient Civilizations', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Medieval Europe', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Modern Art', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Economics 101', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Understanding Psychology', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Sociology Basics', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Political Science', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Anthropology', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Global History', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Geography Today', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Environmental Science', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Climate Change', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Sustainable Living', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Renewable Energy', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Quantum Mechanics', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Relativity Theory', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Astrophysics', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Cosmology', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Engineering Basics', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Civil Engineering', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Mechanical Engineering', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Electrical Engineering', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Software Engineering', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Network Security', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Data Science', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Machine Learning', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Artificial Intelligence', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Blockchain Technology', 'notes' => 'Used, good condition'],
            ['status' => 'in stock', 'title' => 'Cryptography', 'notes' => 'Like new'],
            ['status' => 'out of stock', 'title' => 'Quantum Computing', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Internet of Things', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Cybersecurity', 'notes' => 'Some wear and tear'],
            ['status' => 'in stock', 'title' => 'Virtual Reality', 'notes' => 'Brand new'],
            ['status' => 'out of stock', 'title' => 'Augmented Reality', 'notes' => 'Highlighted'],
            ['status' => 'in stock', 'title' => 'Digital Transformation', 'notes' => 'Pristine'],
            ['status' => 'out of stock', 'title' => 'Big Data', 'notes' => 'Used, good condition']
        ];

        foreach ($sampleRecords as $record) {
            Record::create($record);
        }
    }
}
