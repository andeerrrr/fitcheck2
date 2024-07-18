<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class create_workouts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workouts')->insert([
            [
                'workout_id' => 1,
                'workout_name' => 'Bench Press',
                'workout_muscle_group' => 'Chest',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Compound exercise targeting chest, triceps, and shoulders. Lie on back, unrack bar, lower to chest, and push back up.',
                'image_url' => 'images/workout_images/00251201-Barbell-Bench-Press_Chest.gif'
            ],
            [
                'workout_id' => 2,
                'workout_name' => 'Deadlifts',
                'workout_muscle_group' => 'Full Body',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Full-body exercise working posterior chain, including lower back, glutes, and hamstrings. Stand with barbell, bend at hips and knees, grasp bar, and lift by extending hips and knees.',
                'image_url' => 'images/workout_images/00321201-Barbell-Deadlift_Hips-FIX.gif'
            ],
            [
                'workout_id' => 3,
                'workout_name' => 'Squats',
                'workout_muscle_group' => 'Legs',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Fundamental lower-body exercise targeting quads, hamstrings, and glutes. Stand with feet shoulder-width apart, lower body by bending knees, and push back up.',
                'image_url' => 'images/workout_images/11971201-Squat-m_Thighs.gif'
            ],
            [
                'workout_id' => 4,
                'workout_name' => 'Bicep Curls',
                'workout_muscle_group' => 'Biceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate biceps. Hold dumbbell in each hand, keep elbows close to body, and curl weights toward shoulders, then lower them back down.',
                'image_url' => 'images/workout_images/02941201-Dumbbell-Biceps-Curl_Upper-Arms.gif'
            ],
            [
                'workout_id' => 5,
                'workout_name' => 'Military Press',
                'workout_muscle_group' => 'Shoulders',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work shoulders and triceps. Stand with feet shoulder-width apart, press barbell or dumbbells overhead, and lower them back down.',
                'image_url' => 'images/workout_images/11651201-Barbell-Standing-Military-Press-(without-rack)_Shoulders.gif'
            ],
            [
                'workout_id' => 6,
                'workout_name' => 'Lateral Raises',
                'workout_muscle_group' => 'Shoulders',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target side delts. Hold dumbbells at sides, raise them laterally to shoulder height, and lower them back down.',
                'image_url' => 'images/workout_images/03341201-Dumbbell-Lateral-Raise_shoulder.gif'
            ],
            [
                'workout_id' => 7,
                'workout_name' => 'Quad Extensions',
                'workout_muscle_group' => 'Quadriceps',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Isolate quadriceps. Sit on leg extension machine, lift weights by extending knees, and lower them back down.',
                'image_url' => 'images/workout_images/05851201-Lever-Leg-Extension_Thighs.gif'
            ],
            [
                'workout_id' => 8,
                'workout_name' => 'Hamstring Curls',
                'workout_muscle_group' => 'Hamstrings',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Work hamstrings. Lie face down on hamstring curl machine, curl legs toward glutes, and then lower them back down.',
                'image_url' => 'images/workout_images/05861201-Lever-Lying-Leg-Curl_Thighs.gif'
            ],
            [
                'workout_id' => 9,
                'workout_name' => 'Leg Press',
                'workout_muscle_group' => 'Legs',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Target quads, hamstrings, and glutes. Sit on leg press machine, push platform away with feet, and then return to starting position.',
                'image_url' => 'images/workout_images/07391201-Sled-45-Leg-Press_Hips.gif'
            ],
            [
                'workout_id' => 10,
                'workout_name' => 'Chest Flyes',
                'workout_muscle_group' => 'Chest',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate chest muscles. Lie on bench, hold dumbbells, and open arms wide, then bring weights back together over chest.',
                'image_url' => 'images/workout_images/03081201-Dumbbell-Fly_Chest.gif'
            ],
            [
                'workout_id' => 11,
                'workout_name' => 'Tricep Dips',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work triceps and shoulders. Use parallel bars, lower body by bending elbows, and then push back up.',
                'image_url' => 'images/workout_images/08141201-Triceps-Dip_Upper-Arms.gif'
            ],
            [
                'workout_id' => 12,
                'workout_name' => 'Pull-ups',
                'workout_muscle_group' => 'Back, Biceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target upper back and biceps. Hang from bar with palms facing away, pull body upward, and lower it back down.',
                'image_url' => 'images/workout_images/06521201-Pull-up_Back.gif'
            ],
            [
                'workout_id' => 13,
                'workout_name' => 'Lat Pulldowns',
                'workout_muscle_group' => 'Back, Biceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Focus on upper back. Sit at cable machine, pull bar down to chest, and return it to starting position.',
                'image_url' => 'images/workout_images/01501201-Cable-Bar-Lateral-Pulldown_Back.gif'
            ],
            [
                'workout_id' => 14,
                'workout_name' => 'Reverse Flyes',
                'workout_muscle_group' => 'Back',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target rear delts. Bend at hips, hold dumbbells, and lift arms laterally to shoulder height.',
                'image_url' => 'images/workout_images/06021201-Lever-Seated-Reverse-Fly_Shoulders.gif'
            ],
            [
                'workout_id' => 15,
                'workout_name' => 'Romanian Deadlifts',
                'workout_muscle_group' => 'Hamstrings, Lower Back',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Emphasize hamstrings and lower back. Hold barbell in front of thighs, hinge at hips, and lower barbell as far as flexibility allows.',
                'image_url' => 'images/workout_images/22131201-Barbell-Romanian-Deadlift-(female)_Hips.gif'
            ],
            [
                'workout_id' => 16,
                'workout_name' => 'Incline Bench Press',
                'workout_muscle_group' => 'Chest',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target upper chest. Lie on incline bench, unrack bar, lower it to upper chest, and push it back up.',
                'image_url' => 'images/workout_images/00471201-Barbell-Incline-Bench-Press_Chest.gif'
            ],
            [
                'workout_id' => 17,
                'workout_name' => 'Hammer Curls',
                'workout_muscle_group' => 'Biceps, Forearms',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work biceps and forearms. Hold dumbbells with palms facing body, curl weights toward shoulders, and lower them back down.',
                'image_url' => 'images/workout_images/03121201-Dumbbell-Hammer-Curl-(version-2)_Upper-Arms.gif'
            ],
            [
                'workout_id' => 18,
                'workout_name' => 'Face Pulls',
                'workout_muscle_group' => 'Rear Delts, Upper Traps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target rear delts and upper traps. Attach rope to cable machine, pull it towards face, and squeeze shoulder blades together.',
                'image_url' => 'images/workout_images/08961101-Band-face-pull_Shoulders_small.jpg'
            ],
            [
                'workout_id' => 19,
                'workout_name' => 'Skull Crushers',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Focus on triceps. Lie on bench, hold an EZ curl bar, lower it toward forehead, and extend arms back up.',
                'image_url' => 'images/workout_images/00351101-Barbell-Decline-Close-Grip-To-Skull-Press_Upper-Arms_small.jpg'
            ],
            [
                'workout_id' => 20,
                'workout_name' => 'Close-Grip Bench Press',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Emphasize triceps. Grip bar with hands close together, lower it to chest, and push it back up.',
                'image_url' => 'images/workout_images/00301201-Barbell-Close-Grip-Bench-Press_Upper-Arms.gif'
            ],
            [
                'workout_id' => 21,
                'workout_name' => 'Seated Shoulder Press',
                'workout_muscle_group' => 'Shoulders',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work deltoids. Sit on bench, press dumbbells overhead, and lower them back down.',
                'image_url' => 'images/workout_images/04051201-Dumbbell-Seated-Shoulder-Press_Shoulders.gif'
            ],
            [
                'workout_id' => 22,
                'workout_name' => 'Front Raises',
                'workout_muscle_group' => 'Front Delts',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target front delts. Hold dumbbells, lift arms forward to shoulder height, and lower them back down.',
                'image_url' => 'images/workout_images/03101201-Dumbbell-Front-Raise_Shoulders.gif'
            ],
            [
                'workout_id' => 23,
                'workout_name' => 'Dumbbell Lunges',
                'workout_muscle_group' => 'Legs',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Work legs. Step forward with one foot, lower body until both knees are bent, and return to starting position.',
                'image_url' => 'images/workout_images/03361201-Dumbbell-Lunge_Hips.gif'
            ],
            [
                'workout_id' => 24,
                'workout_name' => 'Barbell Squats',
                'workout_muscle_group' => 'Legs',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Compound lower body exercise targeting quads, hamstrings, and glutes. Stand with barbell on upper back, lower body into a squat position, and return to standing.',
                'image_url' => 'images/workout_images/00431201-Barbell-Full-Squat_Thighs.gif'
            ],
            [
                'workout_id' => 25,
                'workout_name' => 'Bent Over Rows',
                'workout_muscle_group' => 'Back',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target mid-back. Bend at hips, hold dumbbells, and pull elbows back, squeezing shoulder blades together.',
                'image_url' => 'images/workout_images/02931201-Dumbbell-Bent-Over-Row_Back.gif'
            ],
            [
                'workout_id' => 27,
                'workout_name' => 'Calf Raises',
                'workout_muscle_group' => 'Calves',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Isolate calf muscles. Stand on raised surface, lift heels by pushing through toes, and lower them back down.',
                'image_url' => 'images/workout_images/13731101-Bodyweight-Standing-Calf-Raise_Calves_small.jpg'
            ],
            [
                'workout_id' => 28,
                'workout_name' => 'Cable Crunches',
                'workout_muscle_group' => 'Abdominals',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target abdominal muscles. Sit at cable machine, grasp rope attachment, and crunch forward, squeezing abs.',
                'image_url' => 'images/workout_images/01751201-Cable-Kneeling-Crunch_Waist.gif'
            ],
            [
                'workout_id' => 29,
                'workout_name' => 'Russian Twists',
                'workout_muscle_group' => 'Obliques',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target oblique muscles. Sit on floor, lean back slightly, and rotate torso to touch ground on each side.',
                'image_url' => 'images/workout_images/06871201-Russian-Twist_waist.gif'
            ],
            [
                'workout_id' => 30,
                'workout_name' => 'Dumbbell Bench Press',
                'workout_muscle_group' => 'Chest',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Compound exercise targeting chest, shoulders, and triceps. Lie on bench, hold dumbbells, and press them upward.',
                'image_url' => 'images/workout_images/02891201-Dumbbell-Bench-Press_Chest.gif'
            ],
            [
                'workout_id' => 31,
                'workout_name' => 'Plank',
                'workout_muscle_group' => 'Core',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isometric exercise targeting core muscles. Hold a push-up position with the body straight from head to heels.',
                'image_url' => 'images/workout_images/04631201-Front-Plank-m_waist.gif'
            ],
            [
                'workout_id' => 32,
                'workout_name' => 'Walking Lunges',
                'workout_muscle_group' => 'Legs',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Dynamic exercise targeting quads, hamstrings, and glutes. Step forward with one leg, lower body, and repeat with the other leg.',
                'image_url' => 'images/workout_images/14601201-Walking-Lunge-Male_Hips.gif'
            ],
            [
                'workout_id' => 33,
                'workout_name' => 'Bent Over Reverse Flyes',
                'workout_muscle_group' => 'Rear Delts',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolation exercise for rear deltoids. Bend at the waist, hold dumbbells, and lift arms out to the sides.',
                'image_url' => 'images/workout_images/24871101-Dumbbell-Rear-Delt-Fly-(female)_Shoulders_small.jpg'
            ],
            [
                'workout_id' => 34,
                'workout_name' => 'Tricep Kickbacks',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate triceps. Hold dumbbells, hinge at the waist, and extend arms straight back behind the body.',
                'image_url' => 'images/workout_images/03331201-Dumbbell-Kickback_Upper-Arms.gif'
            ],
            [
                'workout_id' => 35,
                'workout_name' => 'Push-ups',
                'workout_muscle_group' => 'Chest, Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Strengthen chest and triceps. Start in plank position, lower body until chest nearly touches the ground, and push back up.',
                'image_url' => 'images/workout_images/06621201-Push-up-m_Chest.gif'
            ],
            [
                'workout_id' => 36,
                'workout_name' => 'Dips',
                'workout_muscle_group' => 'Triceps, Chest',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work triceps and chest. Use parallel bars, lower body by bending elbows, and then push back up.',
                'image_url' => 'images/workout_images/02511201-Chest-Dip_Chest.gif'
            ],
            [
                'workout_id' => 37,
                'workout_name' => 'Chin-ups',
                'workout_muscle_group' => 'Biceps, Back',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Engage biceps and upper back. Hang from bar with palms facing toward you, pull body upward, and lower it back down.',
                'image_url' => 'images/workout_images/13261201-Chin-Up_Back (1).gif'
            ],
            [
                'workout_id' => 38,
                'workout_name' => 'Tricep Extensions',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate triceps. Hold dumbbell overhead with both hands, lower it behind head, and extend arms back up.',
                'image_url' => 'images/workout_images/03621201-Dumbbell-One-Arm-Triceps-Extension-(on-bench)_Upper-Arms.gif'
            ],
            [
                'workout_id' => 39,
                'workout_name' => 'Decline Bench Press',
                'workout_muscle_group' => 'Chest, Shoulders, Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Target lower chest, shoulders, and triceps. Lie on decline bench, unrack bar, lower it to lower chest, and push it back up.',
                'image_url' => 'images/workout_images/51251613_decline_dumbbell.gif'
            ],
            [
                'workout_id' => 40,
                'workout_name' => 'Reverse Lunges',
                'workout_muscle_group' => 'Quadriceps, Hamstrings, Glutes',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Dynamic lower-body exercise. Step backward with one foot, lower body until both knees are bent, and return to starting position.',
                'image_url' => 'images/workout_images/03811201-Dumbbell-Rear-Lunge_Thighs.gif'
            ],
            [
                'workout_id' => 41,
                'workout_name' => 'Hack Squats',
                'workout_muscle_group' => 'Quadriceps, Glutes',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Target quads and glutes. Stand with back against machine, lower body by bending knees, and push back up.',
                'image_url' => 'images/workout_images/hack_squats_81251259.gif'
            ],
            [
                'workout_id' => 42,
                'workout_name' => 'Side Plank',
                'workout_muscle_group' => 'Obliques, Core',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Engage obliques and core. Start in side plank position, lower hips toward floor, and raise them back up.',
                'image_url' => 'images/workout_images/sideplank_1188512.png'
            ],
            [
                'workout_id' => 43,
                'workout_name' => 'Leg Press Calf Raises',
                'workout_muscle_group' => 'Calves',
                'workout_category' => 'Lower Body',
                'workout_description' => 'Isolate calf muscles. Sit on leg press machine, place balls of feet on bottom of platform, and perform calf raises.',
                'image_url' => 'images/workout_images/videoframe_4016_CalfRaiseLegPress.png'
            ],
            [
                'workout_id' => 44,
                'workout_name' => 'Arnold Press',
                'workout_muscle_group' => 'Shoulders',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Work shoulders and triceps. Sit with dumbbells at shoulder height, rotate palms outward as pressing overhead, then rotate palms inward as lowering.',
                'image_url' => 'images/workout_images/0957122_arnold_press.gif'
            ],
            [
                'workout_id' => 45,
                'workout_name' => 'Preacher Curls',
                'workout_muscle_group' => 'Biceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate biceps. Sit at preacher curl bench, curl barbell or dumbbells toward shoulders, and lower them back down.',
                'image_url' => 'images/workout_images/1421577_preacher_curls.gif'
            ],
            [
                'workout_id' => 46,
                'workout_name' => 'Tricep Rope Pushdowns',
                'workout_muscle_group' => 'Triceps',
                'workout_category' => 'Upper Body',
                'workout_description' => 'Isolate triceps. Attach rope to cable machine, push it down until arms are fully extended, and return to starting position.',
                'image_url' => 'images/workout_images/tricep_rope_pushdowns.jpg'
            ],
        ]);
    }
}
