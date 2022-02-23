<?php
use App\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
        $newComic = new Comic();
        $newComic->titolo = $faker->words(1, true);
        $newComic->editore = $faker->words(1, true);
        $newComic->trama = $faker->paragraphs(3, true);
        $newComic->numero = $faker->randomNumber(5, true);
        $newComic->photo = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true);
        $newComic->data_uscita = $faker->dateTime();
        $newComic->prezzo = $faker->randomFloat(1, 20, 30);
        $newComic->save();
        }
    }
}
