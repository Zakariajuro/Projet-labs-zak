<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PosteSeeder::class,
            RoleSeeder::class,
            GenreSeeder::class,
            UserSeeder::class,
            LogoSeeder::class,
            HomeCarrouselSeeder::class,
            IconeSeeder::class,
            HomeCarteSeeder::class,
            HometitrecontentSeeder::class,
            HomecontentSeeder::class,
            HomevideoSeeder::class,
            HometitretestiSeeder::class,
            HometestiSeeder::class,
            HometitreserviceSeeder::class,
            HomeserviceSeeder::class,
            HometitreequipeSeeder::class,
            HomeequipeSeeder::class,
            PromotionSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            TitrefeaturesSeeder::class,
            FeatureSeeder::class,
            FeatureimageSeeder::class,
            FeaturebisSeeder::class,
            ServicecardSeeder::class,
            NewsletterSeeder::class,
            CategorieSeeder::class,
            ArticleSeeder::class,
            TagSeeder::class,
            ArticletagSeeder::class,
            ObjetSeeder::class,
            CommentaireSeeder::class,
        ]);
    }
}
