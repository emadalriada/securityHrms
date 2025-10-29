<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'nameEnglish' => 'John Doe',
            'nameArabic' => 'جون دو',
            'nationalId' => '12345678901234',
            'company' => 'Tech Corp',
            'workType' => 'Full Time',
            'companyCode' => 'TC001',
            'location' => 'Cairo',
            'telephone' => '0123456789',
            'telephone2' => '0123456788',
            'startDate' => '2023-01-01',
            'birthDate' => '1990-05-15',
            'jobTitle' => 'Software Engineer',
            'education' => 'Bachelor Degree',
            'area' => 'Nasr City',
            'vp' => 'Ahmed Mohamed',
            'hr' => true,
            'dataChecked' => true,
            'photoDone' => true,
            'idDone' => true,
            'allThingsDone' => true,
            'address' => '123 Main Street, Cairo, Egypt',
            'notes' => 'Excellent employee with great performance',
        ]);

        User::create([
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'nameEnglish' => 'Jane Smith',
            'nameArabic' => 'جين سميث',
            'nationalId' => '98765432109876',
            'company' => 'Business Inc',
            'workType' => 'Part Time',
            'companyCode' => 'BI002',
            'location' => 'Alexandria',
            'telephone' => '0111222333',
            'jobTitle' => 'HR Manager',
            'education' => 'Master Degree',
            'area' => 'Smouha',
            'startDate' => '2022-06-01',
            'birthDate' => '1988-12-20',
            'dataChecked' => true,
            'photoDone' => false,
            'address' => '456 Second Avenue, Alexandria, Egypt',
        ]);
    }
}
