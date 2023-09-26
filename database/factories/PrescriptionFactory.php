<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'treatmentrecord_id' => fake()->randomDigitNotZero(1,20), 
            'doctor_id' => fake()->randomDigitNotZero(1,20), 
            'patient_id' => fake()->randomDigitNotZero(1,20), 
            'order_id' => fake()->randomDigitNotZero(1,20), 
            'appointment_id' => fake()->randomDigitNotZero(1,20), 
            'deliverytype' =>fake()->word(), 
            'status' => fake()->randomElement(['waiting','active','done']), 
            'prescriptiondate' => fake()->date()
        ];
    }
}
