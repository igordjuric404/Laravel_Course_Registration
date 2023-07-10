<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $r1 = new Registration();
        $r1->name_surname = 'Igor Djuric';
        $r1->email = 'igor_djuric@gmail.com';
        $r1->phone = '0691111111';
        $r1->address = 'Krmača';
        $r1->date = '24/8/2023';
        $r1->course_id = '1';
        $r1->status = '1';
        $r1->save();

        $r2 = new Registration();
        $r2->name_surname = 'Magdalena Nesic';
        $r2->email = 'magdalena_nesic@gmail.com';
        $r2->phone = '0693333333';
        $r2->address = 'Bogu iza nogu';
        $r2->date = '14/8/2023';
        $r2->course_id = '4';
        $r2->status = '-1';
        $r2->save();

        $r3 = new Registration();
        $r3->name_surname = 'Vanja Djuric';
        $r3->email = 'vanja_djuric@gmail.com';
        $r3->phone = '0612222222';
        $r3->address = 'Stanoja Glavasa 15';
        $r3->date = '22/8/2023';
        $r3->course_id = '2';
        $r3->status = '1';
        $r3->save();

        $r4 = new Registration();
        $r4->name_surname = 'Mia Sretenovic';
        $r4->email = 'mia_sretenovic@gmail.com';
        $r4->phone = '0694444444';
        $r4->address = 'Stanoja Glavasa 15';
        $r4->date = '29/8/2023';
        $r4->course_id = '4';
        $r4->status = '-1';
        $r4->save();

        $r5 = new Registration();
        $r5->name_surname = 'Dusan Jovicic';
        $r5->email = 'dusan_jovicic@gmail.com';
        $r5->phone = '0695555555';
        $r5->address = 'Cigamala';
        $r5->date = '11/8/2023';
        $r5->course_id = '3';
        $r5->status = '1';
        $r5->save();

        $r6 = new Registration();
        $r6->name_surname = 'Mihailo Gacic';
        $r6->email = 'mihailo_gacic@gmail.com';
        $r6->phone = '0696666666';
        $r6->address = 'Blokovi';
        $r6->date = '19/8/2023';
        $r6->course_id = '2';
        $r6->status = '0';
        $r6->save();

        $r7 = new Registration();
        $r7->name_surname = 'Nemanja Radosavljevic';
        $r7->email = 'nemanja_radosavljevic@gmail.com';
        $r7->phone = '0697777777';
        $r7->address = 'Trg Republike 5';
        $r7->date = '30/8/2023';
        $r7->course_id = '1';
        $r7->status = '0';
        $r7->save();

        $r8 = new Registration();
        $r8->name_surname = 'Petar Prvulovic';
        $r8->email = 'petar_prvulovic@gmail.com';
        $r8->phone = '0698888888';
        $r8->address = 'Trg Republike 5';
        $r8->date = '13/8/2023';
        $r8->course_id = '3';
        $r8->status = '-1';
        $r8->save();
    }
}
