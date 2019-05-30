<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = Category::create([
            'name' => 'Blowouts Services',
        ]);
        $cat2 = Category::create([
            'name' => 'Eyelash Extensions',
            'description' => 'Whether you are looking for an everyday look or lashes for
your wedding day. Our professionals have a perfect
technique that will transform your eyelashes into a fuller and
vibrant form.',
        ]);
        $cat3 = Category::create([
            'name' => 'Permanent Makeup',
            'description' => '<p>Please ask for free consultation</p>
            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                <tr>
                    <td style="width: 50%;">
                        <ul>
                            <li>MICROBLADING SERVICES</li>
                            <li>COLLAGEN LIPS COLOR</li>
                        </ul>
                    </td>
                    <td style="width: 50%;">
                        <ul>
                            <li>LIPS LINER</li>
                            <li>EYES LINER</li>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>',
        ]);
        $cat4 = Category::create([
            'name' => 'Waxing Services',
        ]);
        $cat5 = Category::create([
            'name' => 'Pedicure',
        ]);
        $cat6 = Category::create([
            'name' => 'Manicure',
        ]);
        $cat7 = Category::create([
            'name' => 'Add-on Services',
        ]);
        $cat8 = Category::create([
            'name' => 'Dipping Powder',
            'description' => '<p>The perfect solution is made with all natural ingredients. Your
nails will look and feel natural, also grow out stronger and
healthier.</p>
            <ul>
                <li>Lightweight & flexible</li>
                <li>Strong & durable</li>
                <li>Non-toxic & odor free</li>
                <li>Calcium & vitamin E fortified</li>
                <li>No UV/LED light required</li>
            </ul>'
        ]);
        $cat9 = Category::create([
            'name' => 'Side Services',
        ]);

        // Add Add-on sub-category to Manicure
        $cat7->parentCategory()->associate($cat6);
        $cat7->save();

    }
}
