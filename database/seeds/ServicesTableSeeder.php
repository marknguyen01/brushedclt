<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createBlowouts();
        $this->createEyelashes();
        $this->createWaxings();
        $this->createPedicures();
        $this->createManicures();
        $this->createDippings();
        $this->createSides();
    }
    // Create blowouts services
    protected function createBlowouts() {
        $cat1 = Category::where('name', 'Blowouts Services')->first();
        $s1 = Service::create([
            'name' => 'Shampoo, Blowout, Style',
            'price' => 45,
        ]);
        $s2 = Service::create([
            'name' => 'Shampoo, Blowout, Updo',
            'price' => '65',
        ]);
        // Child services
        $arr = [];
        $s3 = Service::create([
            'name' => 'With Extensions',
            'price' => '20',
        ]);
        $s4 = Service::create([
            'name' => 'Add Braid',
            'price' => '10',
        ]);
        $s5 = Service::create([
            'name' => 'Add Conditioning Treatment',
            'price' => '10',
        ]);
        $s6 = Service::create([
            'name' => 'Add Face Masque',
            'price' => '10',
        ]);
        array_push($arr, $s3, $s4, $s5, $s6);
        foreach($arr as $s) {
            $s->parentService()->associate($s2);
            $s->category()->associate($cat1);
            $s->save();
        }
        $s1->category()->associate($cat1);
        $s1->save();
        $s2->category()->associate($cat1);
        $s2->save();
    }


    // Create eyelash services
    protected function createEyelashes() {
        $cat1 = Category::where('name', 'Eyelash Extensions')->first();
        $arr = [
            new Service([
                'name' => 'New Set',
                'price' => 129,
                'is_exact_price' => false,
            ]),
            new Service([
                'name' => 'Touch-up',
                'price' => 69,
                'is_exact_price' => false,
            ])
        ];
        $cat1->services()->saveMany($arr);
    }



    // Create waxing services
    protected function createWaxings() {
        $cat1 = Category::where('name', 'Waxing Services')->first();
        $arr = [new Service([
            'name' => 'Eyebrows',
            'price' => 12,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Back',
            'price' => 45,
            'is_exact_price' => false,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Lips',
            'price' => 8,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Underarms',
            'price' => 25,
            'is_exact_price' => false,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Chin',
            'price' => 10,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Arms',
            'price' => 30,
            'is_exact_price' => false,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Full Face',
            'price' => 35,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Legs',
            'price' => 40,
            'is_exact_price' => false,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Neck',
            'price' => 15,
            'is_exact_price' => false,
            'column_width' => 6,
        ]),
        new Service([
            'name' => 'Bikini',
            'price' => 50,
            'is_exact_price' => false,
            'column_width' => 6,
        ])];
        $cat1->services()->saveMany($arr);
    }


    // Create pedicure services
    protected function createPedicures() {
        $cat1 = Category::where('name', 'Pedicure')->first();
        $arr = [
            new Service([
                'name' => 'Bare-dicure',
                'price' => 30,
                'description' => 'Our classic pedicure includes roses petal bath soak, cuticle care, nail
shaping, callus treatment, warm towels wrapping, and 4 minutes
massage with organic coconut oil. Finishing with polish or buff.'
            ]),
            new Service([
                'name' => 'Aromas',
                'price' => 40,
                'description' => 'Our upgraded pedicure procedures same as Bare-dicure, plus
aromatic bath salt, exfoliation sugar scrub, hydration masque, and 6
minutes massage with scented moisturizer. (varieties of scents available).'
            ]),
            new Service([
                'name' => 'Brushed',
                'price' => 50,
                'description' => 'Our signature pedicure procedures same as Aromas pedicure,
plus 10 minutes massage with hot-stone to rejuvenate tired and
sore muscles.'
            ]),
            new Service([
                'name' => 'Bru-xury',
                'price' => 70,
                'description' => 'The Luxury of Brushed pedicure customizes 100% Organic Herbal
Products, which are special fresh-made of bath soak, exfoliation,
masque and moisturizer. Finalizing with paraffin dip, also 15 minutes
hot-stone massage. (varieties of herbs and scents available).'
            ]),
        ];
        $cat1->services()->saveMany($arr);
    }


    // Create manicure services
    protected function createManicures() {
        $cat1 = Category::where('name', 'Manicure')->first();
        $cat1->services()->save(
        new Service([
            'name' => 'Collagen',
            'price' => 20,
            'description' => 'Our manicure includes Collagen Gloves treatment, that is preloaded
with enriched marine collagen emulsion and vitamins extract to
penetrate the skin, keep it plump and look younger. Also warm towels
wrapping, cuticle care, nail shaping and polish or buff.']));

        $cat2 = $cat1->subCategories()->where('name', 'Add-on Services')->first();
        $arr = [
            new Service([
                'name' => 'Gel Color',
                'price' => 11,
            ]),
            new Service([
                'name' => 'Gel Color Change',
                'price' => 20,
            ]),
            new Service([
                'name' => 'Sugar Scrub and Masque',
                'price' => 10,
            ]),
            new Service([
                'name' => 'Paraffin Wax',
                'price' => 10,
            ]),
            new Service([
                'name' => 'French Tip',
                'price' => 5,
            ]),
            new Service([
                'name' => 'Take off Gel/Dipping Power',
                'price' => 5,
            ]),
        ];
        $cat2->services()->saveMany($arr);
    }


    // Create dipping powder services
    protected function createDippings() {
        $cat1 = Category::where('name', 'Dipping Powder')->first();
        $arr = [
            new Service([
                'name' => 'Color Overlay',
                'price' => 40,
            ]),
            new Service([
                'name' => 'Color Change Overlay',
                'price' => 45,
            ]),
            new Service([
                'name' => 'Extra Length',
                'price' => 5,
            ]),
            new Service([
                'name' => 'Exotic Shape',
                'price' => 5,
            ]),
            new Service([
                'name' => 'Pink & White',
                'price' => 10,
            ]),
            new Service([
                'name' => 'Ombre',
                'price' => 15,
            ]),
        ];
        $cat1->services()->saveMany($arr);
    }


    // Create dipping powder services
    protected function createSides() {
        $cat1 = Category::where('name', 'Side Services')->first();
        $arr = [
            new Service([
                'name' => 'Regular Polish',
                'price' => 15,
            ]),
            new Service([
                'name' => 'Gel Polish',
                'price' => 25,
            ]),
            new Service([
                'name' => 'Gel Polish Change',
                'price' => 30,
            ]),
            new Service([
                'name' => 'Nail Repair',
                'price' => 5,
                'is_exact_price' => false,
            ]),
            new Service([
                'name' => 'Nail Design',
                'price' => 5,
                'is_exact_price' => false,
            ]),
            new Service([
                'name' => 'Callus Removal',
                'price' => 10,
            ]),
            new Service([
                'name' => 'Dipping Powder/Gel Removal',
                'price' => 10,
            ]),
        ];
        $cat1->services()->saveMany($arr);
    }
}
