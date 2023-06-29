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
        Exercise::create(['exer_name' => 'Glute Bridge', 'muscle_type_id' => 1, 'exer_description' => 'The glute bridge is an exercise that primarily targets the gluteal muscles. It involves lying on your back, bending your knees, and lifting your hips off the ground while squeezing your glutes.']);
        Exercise::create(['exer_name' => 'Dumbbell Flyes', 'muscle_type_id' => 3, 'exer_description' => 'Dumbbell flyes are an isolation exercise that primarily targets the chest muscles. They involve lying on a bench and lifting dumbbells in a wide arc motion, focusing on stretching and contracting the chest muscles.']);
        Exercise::create(['exer_name' => 'Calf Raise', 'muscle_type_id' => 7, 'exer_description' => 'The calf raise is an exercise that specifically targets the calf muscles. It can be performed using a calf raise machine or by standing on the edge of a step or platform and raising your heels as high as possible before lowering them back down.']);
        Exercise::create(['exer_name' => 'Close-Grip Bench Press', 'muscle_type_id' => 8, 'exer_description' => 'The close-grip bench press is an exercise that primarily targets the triceps. It involves using a barbell or dumbbells with a narrow grip, lowering the weight to your chest while keeping your elbows close to your body, and then pressing the weight back up to the starting position.']);Exercise::create(['exer_name' => 'Hip Thrust', 'muscle_type_id' => 1, 'exer_description' => 'The hip thrust is an exercise that targets the gluteal muscles. It involves sitting on the ground with your back against a bench, placing a barbell across your hips, and lifting your hips off the ground by contracting your glutes.']);
        Exercise::create(['exer_name' => 'Arnold Press', 'muscle_type_id' => 4, 'exer_description' => 'The Arnold press is an exercise that targets the shoulder muscles. It involves starting with the dumbbells at shoulder level with your palms facing your body, pressing the weights overhead while rotating your palms to face forward, and then returning to the starting position in a reverse motion.']);
        Exercise::create(['exer_name' => 'Bent-Over Row', 'muscle_type_id' => 2, 'exer_description' => 'The bent-over row is an exercise that primarily targets the back muscles. It involves bending at the waist, holding a barbell or dumbbells with your arms extended, and pulling the weight towards your abdomen by squeezing your shoulder blades together.']);
        Exercise::create(['exer_name' => 'Military Press', 'muscle_type_id' => 4, 'exer_description' => 'The military press, also known as the shoulder press, targets the muscles of the shoulders, including the deltoids. It involves pressing a barbell or dumbbells overhead while standing or sitting upright.']);
        Exercise::create(['exer_name' => 'Romanian Deadlift', 'muscle_type_id' => 6, 'exer_description' => 'The Romanian deadlift is an exercise that targets the hamstrings and glutes. It involves bending at the hips while holding a barbell or dumbbells, keeping the back straight, and lowering the weight as far as flexibility allows.']);
        Exercise::create(['exer_name' => 'Chest Fly', 'muscle_type_id' => 3, 'exer_description' => 'The chest fly is an isolation exercise that primarily targets the chest muscles. It involves lying on a flat bench and extending your arms out to the sides while holding dumbbells, then bringing them together in front of your chest.']);
    }
}
