<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c1 = new Course();
        $c1->name = 'Škola fotografije';
        $c1->number_of_applicants = '0';
        $c1->max_number_of_applicants = '20';
        $c1->description = "Otkrijte svoj fotografski potencijal kroz naše časove prilagođene početnicima, koji će vam omogućiti da sa samopouzdanjem fotografišete.";
        $c1->save();

        $c2= new Course();
        $c2->name = 'Škola analogne fotografije';
        $c2->number_of_applicants = '0';
        $c2->max_number_of_applicants = '20';
        $c2->description = "Naušite večnu umetnost analogne fotografije uz naše časove vođene stručnjacima, gde ćete naučiti da stvarate zanosne slike pomoću filma.";
        $c2->save();

        $c3 = new Course();
        $c3->name = 'Profesionalno usavršavanje';
        $c3->number_of_applicants = '0';
        $c3->max_number_of_applicants = '20';
        $c3->description = "Unapredite svoje veštine i krenite na put profesionalnog usavršavanja uz naše specijalizovane obuke, namenjene iskusnijim fotografima.";
        $c3->save();

        $c4 = new Course();
        $c4->name = 'Časovi razvijanja filma';
        $c4->number_of_applicants = '0';
        $c4->max_number_of_applicants = '20';
        $c4->description = "Otkrijte umetnost razvijanja analogne fotografije na našim časovima, gde ćete naučiti detalje tamne komore i oživeti svoje slike.";
        $c4->save();
    }
}
