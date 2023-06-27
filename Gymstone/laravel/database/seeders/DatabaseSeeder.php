<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exercise;
use App\Models\MuscleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // fill main muscle types (generated with AI)
        MuscleType::create(['muscle_name' => 'Glutes', 'muscle_desc' => 'The Glutes, short for Gluteal Muscles, are a group of muscles located in the buttocks. They are responsible for hip extension, abduction, and rotation.']);
        MuscleType::create(['muscle_name' => 'Back', 'muscle_desc' => 'The Back muscles include several muscles that support the spine and facilitate movements such as extension, lateral flexion, and rotation of the trunk.']);
        MuscleType::create(['muscle_name' => 'Chest', 'muscle_desc' => 'The Chest muscles, specifically the Pectoralis Major and Pectoralis Minor, are located in the front of the upper body. They are responsible for movements such as arm flexion, adduction, and horizontal adduction.']);
        MuscleType::create(['muscle_name' => 'Shoulders', 'muscle_desc' => 'The Shoulders consist of several muscles, including the Deltoids, Rotator Cuff muscles, and Trapezius. They enable movements such as shoulder flexion, extension, abduction, adduction, and rotation.']);
        MuscleType::create(['muscle_name' => 'Quadriceps', 'muscle_desc' => 'The Quadriceps, or quadriceps femoris, is a group of four muscles located in the front of the thigh. They work together to extend the knee and assist in hip flexion.']);
        MuscleType::create(['muscle_name' => 'Hamstrings', 'muscle_desc' => 'The Hamstrings are a group of three muscles located at the back of the thigh. They play a crucial role in knee flexion and hip extension.']);
        MuscleType::create(['muscle_name' => 'Calves', 'muscle_desc' => 'The Calves, specifically the Gastrocnemius and Soleus muscles, are located in the lower leg. They are responsible for plantar flexion of the foot and assist in knee flexion.']);
        MuscleType::create(['muscle_name' => 'Triceps', 'muscle_desc' => 'The Triceps, short for Triceps Brachii, is a three-headed muscle located on the back of the upper arm. It is primarily responsible for extending the forearm.']);
        MuscleType::create(['muscle_name' => 'Biceps', 'muscle_desc' => 'The Biceps, short for Biceps Brachii, is a two-headed muscle located in the upper arm. It plays a significant role in forearm supination and arm flexion.']);
        MuscleType::create(['muscle_name' => 'Abs', 'muscle_desc' => 'The Abs, short for Abdominal muscles, include the Rectus Abdominis, Obliques, and Transverse Abdominis. They provide core stability and assist in flexing and rotating the spine.']);
        MuscleType::create(['muscle_name' => 'Grip and Forearms', 'muscle_desc' => 'The Grip and Forearms consist of various muscles responsible for gripping, wrist flexion, extension, and forearm pronation and supination. They play a crucial role in grip strength and forearm stability.']);
        
        // fill some of the standart exercises (generated with AI)
        Exercise::create(['exer_name' => 'Lat Pulldown', 'muscle_type_id' => 2, 'exer_description' => 'This exercise targets the latissimus dorsi muscles, which are the large muscles in your back. It involves pulling a weighted bar down towards your chest while seated.']);
        Exercise::create(['exer_name' => 'Squat', 'muscle_type_id' => 6, 'exer_description' => 'The squat is a compound exercise that primarily targets the muscles of your lower body. It involves lowering your body down into a squat position and then standing back up.']);
        Exercise::create(['exer_name' => 'Bench Press', 'muscle_type_id' => 3, 'exer_description' => 'The bench press is a popular exercise for developing the chest muscles. It involves lying on a flat bench and pushing a weighted barbell upwards from the chest.']);
        Exercise::create(['exer_name' => 'Deadlift', 'muscle_type_id' => 1, 'exer_description' => 'The deadlift is a compound exercise that targets multiple muscle groups, including the back, legs, and core. It involves lifting a weighted barbell from the floor while maintaining proper form.']);
        Exercise::create(['exer_name' => 'Shoulder Press', 'muscle_type_id' => 4, 'exer_description' => 'The shoulder press, also known as the military press, focuses on developing the shoulder muscles. It involves lifting a barbell or dumbbells from shoulder height and pushing them overhead.']);
        Exercise::create(['exer_name' => 'Bicep Curl', 'muscle_type_id' => 9, 'exer_description' => 'The bicep curl is an isolation exercise that targets the biceps muscles in the front of the upper arm. It involves curling a dumbbell or barbell upwards while keeping the upper arm stationary.']);
        Exercise::create(['exer_name' => 'Tricep Dip', 'muscle_type_id' => 9, 'exer_description' => 'The tricep dip is an effective exercise for targeting the triceps muscles on the back of the upper arm. It involves lowering and raising your body using parallel bars while keeping the elbows tucked in.']);
        Exercise::create(['exer_name' => 'Lunges', 'muscle_type_id' => 6, 'exer_description' => 'Lunges are a unilateral leg exercise that works the legs. They involve taking a large step forward or backward and lowering your body until both knees are bent at 90-degree angles.']);
        Exercise::create(['exer_name' => 'Crunches', 'muscle_type_id' => 10, 'exer_description' => 'Crunches are a popular exercise for targeting the abdominal muscles. They involve lying on your back, bending your knees, and lifting your upper body off the floor by contracting your abs.']);
        Exercise::create(['exer_name' => 'Plank', 'muscle_type_id' => 10, 'exer_description' => 'The plank is a static exercise that primarily targets the core muscles, including the abs, back, and hips. It involves holding a push-up position with the body straight and supported by the forearms and toes.']);
        Exercise::create(['exer_name' => 'Leg Press', 'muscle_type_id' => 6, 'exer_description' => 'The leg press is a compound exercise that targets the muscles of the lower body, particularly the quadriceps, hamstrings, and glutes. It involves pushing a weighted platform away from your body using your legs.']);
        Exercise::create(['exer_name' => 'Pull-Ups', 'muscle_type_id' => 2, 'exer_description' => 'Pull-ups are a challenging exercise that primarily targets the back muscles, particularly the lats. They involve gripping an overhead bar with an overhand grip and pulling your body up until your chin is above the bar.']);
        Exercise::create(['exer_name' => 'Push-Ups', 'muscle_type_id' => 3, 'exer_description' => 'Push-ups are a classic bodyweight exercise that targets the chest, shoulders, and triceps. They involve assuming a plank position and lowering your body down by bending your arms, then pushing back up to the starting position.']);
        Exercise::create(['exer_name' => 'Russian Twist', 'muscle_type_id' => 10, 'exer_description' => 'The Russian twist is an exercise that targets the oblique muscles. It involves sitting on the floor with your legs bent and feet off the ground, then twisting your torso from side to side while holding a weight or medicine ball.']);
        Exercise::create(['exer_name' => 'Chest Fly', 'muscle_type_id' => 3, 'exer_description' => 'The chest fly is an isolation exercise that primarily targets the chest muscles. It involves lying on a flat bench and extending your arms out to the sides while holding dumbbells, then bringing them together in front of your chest.']);
    }
}
