<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // fill the standart exercises
        Exercise::create(['train_name' => 'Lat Pulldown', 'train_type' => 'Back', 
            'train_description' => 'This exercise targets the latissimus dorsi muscles, which are the large muscles in your back. It involves pulling a weighted bar down towards your chest while seated.']);
        Exercise::create(['train_name' => 'Squat', 'train_type' => 'Legs', 
            'train_description' => 'The squat is a compound exercise that primarily targets the muscles of your lower body, including the quadriceps, hamstrings, and glutes. It involves lowering your body down into a squat position and then standing back up.']);
        Exercise::create(['train_name' => 'Bench Press', 'train_type' => 'Chest', 
            'train_description' => 'The bench press is a popular exercise for developing the chest muscles. It involves lying on a flat bench and pushing a weighted barbell upwards from the chest.']);
        Exercise::create(['train_name' => 'Deadlift', 'train_type' => 'Full Body', 
            'train_description' => 'The deadlift is a compound exercise that targets multiple muscle groups, including the back, legs, and core. It involves lifting a weighted barbell from the floor while maintaining proper form.']);
        Exercise::create(['train_name' => 'Shoulder Press', 'train_type' => 'Shoulders', 
            'train_description' => 'The shoulder press, also known as the military press, focuses on developing the shoulder muscles. It involves lifting a barbell or dumbbells from shoulder height and pushing them overhead.']);
        Exercise::create(['train_name' => 'Bicep Curl', 'train_type' => 'Arms', 
            'train_description' => 'The bicep curl is an isolation exercise that targets the biceps muscles in the front of the upper arm. It involves curling a dumbbell or barbell upwards while keeping the upper arm stationary.']);
        Exercise::create(['train_name' => 'Tricep Dip', 'train_type' => 'Arms', 
            'train_description' => 'The tricep dip is an effective exercise for targeting the triceps muscles on the back of the upper arm. It involves lowering and raising your body using parallel bars while keeping the elbows tucked in.']);
        Exercise::create(['train_name' => 'Lunges', 'train_type' => 'Legs', 
            'train_description' => 'Lunges are a unilateral leg exercise that works the quadriceps, hamstrings, and glutes. They involve taking a large step forward or backward and lowering your body until both knees are bent at 90-degree angles.']);
        Exercise::create(['train_name' => 'Crunches', 'train_type' => 'Core', 
            'train_description' => 'Crunches are a popular exercise for targeting the abdominal muscles. They involve lying on your back, bending your knees, and lifting your upper body off the floor by contracting your abs.']);
        Exercise::create(['train_name' => 'Plank', 'train_type' => 'Core', 
            'train_description' => 'The plank is a static exercise that primarily targets the core muscles, including the abs, back, and hips. It involves holding a push-up position with the body straight and supported by the forearms and toes.']);
        Exercise::create(['train_name' => 'Leg Press', 'train_type' => 'Legs', 
            'train_description' => 'The leg press is a compound exercise that targets the muscles of the lower body, particularly the quadriceps, hamstrings, and glutes. It involves pushing a weighted platform away from your body using your legs.']);
        Exercise::create(['train_name' => 'Chest Fly', 'train_type' => 'Chest', 
            'train_description' => 'The chest fly is an isolation exercise that primarily targets the chest muscles. It involves lying on a flat bench and extending your arms out to the sides while holding dumbbells, then bringing them together in front of your chest.']);
        Exercise::create(['train_name' => 'Pull-Ups', 'train_type' => 'Back', 
            'train_description' => 'Pull-ups are a challenging exercise that primarily targets the back muscles, particularly the lats. They involve gripping an overhead bar with an overhand grip and pulling your body up until your chin is above the bar.']);
        Exercise::create(['train_name' => 'Push-Ups', 'train_type' => 'Chest', 
            'train_description' => 'Push-ups are a classic bodyweight exercise that targets the chest, shoulders, and triceps. They involve assuming a plank position and lowering your body down by bending your arms, then pushing back up to the starting position.']);
        Exercise::create(['train_name' => 'Russian Twist', 'train_type' => 'Core', 
            'train_description' => 'The Russian twist is an exercise that targets the oblique muscles. It involves sitting on the floor with your legs bent and feet off the ground, then twisting your torso from side to side while holding a weight or medicine ball.']);

            
    }
}
