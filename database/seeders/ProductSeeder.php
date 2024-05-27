<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\VariationCollection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vc1 = VariationCollection::create();

        $p1 = Product::create([
            'name' => 'STRANDMON Wing chair, Nordvalla dark grey',
            'price' => 229,
            'model_path' => '/models/20343224_PS01_S01_NV01_RQP3_3.0_45096c727d4e43edaaef7a05b363c41f.glb',
            'is_stackable' => 0,
            'description' => 'Bringing new life to an old favourite. We first introduced this chair in the 1950’s. Some 60 years later we brought it back into the range with the same craftsmanship, comfort and appearance. Enjoy!',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-nordvalla-dark-grey-70359830/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0325432_pe517964_s5.jpg',
            'category_id' => 1,
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0325432_pe517964_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__1116445_pe872501_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0750991_ph159256_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0813424_ph166295_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0836847_pe596292_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0836845_pe583755_s5.jpg',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0963366_pe808498_s5.jpg',
        ]);

        $p1->measurements()->create([
            'value' => 820,
            'measurement_type_id' => 3
        ]);

        $p1->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 2
        ]);

        $p1->measurements()->create([
            'value' => 1010,
            'measurement_type_id' => 1
        ]);

        $p1->measurements()->create([
            'value' => 490,
            'measurement_type_id' => 10
        ]);

        $p1->measurements()->create([
            'value' => 540,
            'measurement_type_id' => 11
        ]);

        $p1->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 12
        ]);

        $p2 = Product::create([
            'name' => 'STRANDMON Wing chair, Kelinge beige',
            'price' => 250,
            'model_path' => '/models/10492813_PS01_S01_NV01_RQP3_3.0_509afbc0b52b4abc85e9a9d2e4847d82.glb',
            'is_stackable' => 0,
            'description' => 'Need a hug? STRANDMON wing chair has an embracing feel with a high back, round armrests, soft lines and inviting upholstery. A traditional look with modern comfort for many cosy moments.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-kelinge-beige-40492816/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950941_pe800821_s5.jpg',
            'category_id' => 1,
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950941_pe800821_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__1059566_ph179098_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950946_pe800823_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950944_pe800824_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950945_pe800825_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950943_pe800826_s5.jpg',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0963366_pe808498_s5.jpg',
        ]);

        $p2->measurements()->create([
            'value' => 820,
            'measurement_type_id' => 3
        ]);

        $p2->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 2
        ]);

        $p2->measurements()->create([
            'value' => 1010,
            'measurement_type_id' => 1
        ]);

        $p2->measurements()->create([
            'value' => 490,
            'measurement_type_id' => 10
        ]);

        $p2->measurements()->create([
            'value' => 540,
            'measurement_type_id' => 11
        ]);

        $p2->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 12
        ]);

        $p3 = Product::create([
            'name' => 'STRANDMON Wing chair, Skiftebo yellow',
            'price' => 229,
            'model_path' => '/models/90361894_PS01_S01_NV01_RQP3_3.0_1ce678483adc4a42af6ead5c5c21903a.glb',
            'is_stackable' => 0,
            'description' => 'Bringing new life to an old favourite. We first introduced this chair in the 1950’s. Some 60 years later we brought it back into the range with the same craftsmanship, comfort and appearance. Enjoy!',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-skiftebo-yellow-40361896/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325450_pe517970_s5.jpg',
            'category_id' => 1,
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325450_pe517970_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0913860_ph145337_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__1184561_ph179968_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0813426_ph166290_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837286_pe596513_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325452_pe517969_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' =>  'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837284_pe583756_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837282_pe583706_s5.jpg',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0963366_pe808498_s5.jpg',
        ]);

        $p3->measurements()->create([
            'value' => 820,
            'measurement_type_id' => 3
        ]);

        $p3->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 2
        ]);

        $p3->measurements()->create([
            'value' => 1010,
            'measurement_type_id' => 1
        ]);

        $p3->measurements()->create([
            'value' => 490,
            'measurement_type_id' => 10
        ]);

        $p3->measurements()->create([
            'value' => 540,
            'measurement_type_id' => 11
        ]);

        $p3->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 12
        ]);

        $p4 = Product::create([
            'name' => 'STRANDMON Wing chair, Tallmyra dark green',
            'price' => 250,
            'model_path' => '/models/30359846_PS01_S01_NV01_RQP3_3.0_3ee75893faa24345b36b3950ec7ab88a.glb',
            'is_stackable' => 0,
            'description' => 'You can really loosen up and relax in comfort because the high back on this chair provides extra support for your neck.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-tallmyra-dark-green-30359846/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0531319_pe647267_s5.jpg',
            'category_id' => 1,
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0531319_pe647267_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840456_pe647272_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0739101_ph155488_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0739102_ph152847_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840447_pe647271_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840434_pe647268_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840444_pe647270_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840440_pe647269_s5.jpg',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0963366_pe808498_s5.jpg',
        ]);

        $p4->measurements()->create([
            'value' => 820,
            'measurement_type_id' => 3
        ]);

        $p4->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 2
        ]);

        $p4->measurements()->create([
            'value' => 1010,
            'measurement_type_id' => 1
        ]);

        $p4->measurements()->create([
            'value' => 490,
            'measurement_type_id' => 10
        ]);

        $p4->measurements()->create([
            'value' => 540,
            'measurement_type_id' => 11
        ]);

        $p4->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 12
        ]);

        $p5 = Product::create([
            'name' => 'STRANDMON Wing chair, Vibberbo black/beige',
            'price' => 229,
            'model_path' => '/models/20456956_PS01_S01_NV01_RQP3_3.0_024a9a564a5a4f9383ee4ee67a61f61f.glb',
            'is_stackable' => 0,
            'description' => 'One of our old icons is now wearing a classy outfit. The cover with a classic houndstooth pattern enhance your personal sense of style at home. Comfort and quality since the 1950s.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-vibberbo-black-beige-80456958/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761768_pe751434_s5.jpg',
            'category_id' => 1,
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761768_pe751434_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0930013_ph168645_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184555_ph186827_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761769_pe751435_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0813433_ph166294_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184562_ph167261_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184563_ph167300_s5.jpg',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0963366_pe808498_s5.jpg',
        ]);

        $p5->measurements()->create([
            'value' => 820,
            'measurement_type_id' => 3
        ]);

        $p5->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 2
        ]);

        $p5->measurements()->create([
            'value' => 1010,
            'measurement_type_id' => 1
        ]);

        $p5->measurements()->create([
            'value' => 490,
            'measurement_type_id' => 10
        ]);

        $p5->measurements()->create([
            'value' => 540,
            'measurement_type_id' => 11
        ]);

        $p5->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 12
        ]);

        $vc1->products()->attach($p1->id);
        $vc1->products()->attach($p2->id);
        $vc1->products()->attach($p3->id);
        $vc1->products()->attach($p4->id);
        $vc1->products()->attach($p5->id);

        $vc2 = VariationCollection::create();

        $p6 = Product::create([
            'name' => 'LACK Coffee table, black-brown',
            'price' => 49.99,
            'model_path' => '/models/00104291_PS01_S01_NV01_RQP3_3.0_160e5ac521ea47e5b44a9a80a78f9bee.glb',
            'is_stackable' => 1,
            'description' => 'LACK table in black-brown is easy to match with other furnishings. The honeycomb structured paper filling construction adds strength to the table while keeping it lightweight so it´s easy to move around.',
            'source' => 'https://www.ikea.com/us/en/p/lack-coffee-table-black-brown-00104291/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57537_pe163119_s5.jpg',
            'category_id' => 2,
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57537_pe163119_s5.jpg',
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0836233_pe601379_s5.jpg',
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0258008_pe401976_s5.jpg',
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0664928_pe712923_s5.jpg',
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__1083778_pe859098_s5.jpg',
        ]);

        $p6->measurements()->create([
            'value' => 780,
            'measurement_type_id' => 3
        ]);

        $p6->measurements()->create([
            'value' => 1180,
            'measurement_type_id' => 2
        ]);

        $p6->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 1
        ]);

        $p7 = Product::create([
            'name' => 'LACK Coffee table, white',
            'price' => 49.99,
            'model_path' => '/models/80449901_PS01_S01_NV01_RQP3_3.0_0d7cf1ae2b6a4c7fb3cff503aab54cf6.glb',
            'is_stackable' => 1,
            'description' => 'This LACK table in white is easy to match with other furnishings. Thanks to the unique construction, it’s easy to assemble, lift and move around - and we can keep the prices down, so your spirits go up.',
            'source' => 'https://www.ikea.com/us/en/p/lack-coffee-table-white-80449901/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0750651_pe746801_s5.jpg',
            'category_id' => 2,
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0750651_pe746801_s5.jpg',
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702214_pe724347_s5.jpg',
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702213_pe724351_s5.jpg',
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0664928_pe712923_s5.jpg',
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__1083778_pe859098_s5.jpg',
        ]);

        $p7->measurements()->create([
            'value' => 780,
            'measurement_type_id' => 3
        ]);

        $p7->measurements()->create([
            'value' => 1180,
            'measurement_type_id' => 2
        ]);

        $p7->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 1
        ]);

        $p8 = Product::create([
            'name' => 'LACK Coffee table, white stained oak effect',
            'price' => 49.99,
            'model_path' => '/models/40431535_PS01_S01_NV01_RQP3_3.0_a0e1579241b248b5a3b5c679e393459a.glb',
            'is_stackable' => 1,
            'description' => 'LACK tables have a unique construction in paper that makes them light, easy to move and stable at the same time. To enhance your mood even more, we also keep the price down.',
            'source' => '',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'category_id' => 2,
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0837100_pe709586_s5.jpg',
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0918237_ph163104_s5.jpg',
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0411540_pe570465_s5.jpg',
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0664928_pe712923_s5.jpg',
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__1083778_pe859098_s5.jpg',
        ]);

        $p8->measurements()->create([
            'value' => 780,
            'measurement_type_id' => 3
        ]);

        $p8->measurements()->create([
            'value' => 1180,
            'measurement_type_id' => 2
        ]);

        $p8->measurements()->create([
            'value' => 450,
            'measurement_type_id' => 1
        ]);

        $vc2->products()->attach($p6->id);
        $vc2->products()->attach($p7->id);
        $vc2->products()->attach($p8->id);

        $p9 = Product::create([
            'name' => 'PELLO Armchair, Holmby natural',
            'price' => 64.99,
            'model_path' => '/models/50078464_PS01_S01_NV01_RQP3_3.0_32ed8456a7f24aff80b8883f78ea7fad.glb',
            'is_stackable' => 0,
            'description' => 'Comfy seating throughout the home gives a relaxed feel – and with airy PELLO armchair you can easily create your comfort zones everywhere. The secrets are good back support and a slightly resilient frame!',
            'source' => 'https://www.ikea.com/us/en/p/pello-armchair-holmby-natural-90078462/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__38296_pe130209_s5.jpg',
            'category_id' => 1,
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__38296_pe130209_s5.jpg',
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0841137_pe600889_s5.jpg',
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0446408_pe596512_s5.jpg',
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0841133_pe585630_s5.jpg',
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0939999_pe794756_s5.jpg',
        ]);

        $p9->measurements()->create([
            'value' => 850,
            'measurement_type_id' => 3
        ]);

        $p9->measurements()->create([
            'value' => 670,
            'measurement_type_id' => 2
        ]);

        $p9->measurements()->create([
            'value' => 960,
            'measurement_type_id' => 1
        ]);

        $p9->measurements()->create([
            'value' => 550,
            'measurement_type_id' => 10
        ]);

        $p9->measurements()->create([
            'value' => 500,
            'measurement_type_id' => 11
        ]);

        $p9->measurements()->create([
            'value' => 370,
            'measurement_type_id' => 12
        ]);

        $vc3 = VariationCollection::create();

        $p10 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo dark blue',
            'price' => 259,
            'model_path' => 'models/20262878_PS01_S01_NV01_RQP3_3.0_16a23b9f90a046a28bf64e868bcd812f.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-dark-blue-40262877/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0204749_pe359788_s5.jpg',
            'category_id' => 1,
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0204749_pe359788_s5.jpg',
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0815338_pe772866_s5.jpg',
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837671_pe601048_s5.jpg',
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837670_pe596451_s5.jpg',
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837666_pe585573_s5.jpg',
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0629853_pe694518_s5.jpg',
        ]);

        $p11 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo dark gray',
            'price' => 259,
            'model_path' => '/models/60494584_PS01_S01_NV01_RQP3_3.0_3a1af39d80884c409cfb4093fddda99c.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-dark-gray-90494587/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0983033_pe815899_s5.jpg',
            'category_id' => 1,
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0983033_pe815899_s5.jpg',
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951659_pe801307_s5.jpg',
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951660_pe801308_s5.jpg',
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951661_pe801305_s5.jpg',
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0629853_pe694518_s5.jpg',
        ]);

        $p12 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo orange',
            'price' => 259,
            'model_path' => '/models/80262880_PS01_S01_NV01_RQP3_3.0_1fcd7d46a3c542a68b41e89835826c0c.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-orange-90262889/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0204751_pe359789_s5.jpg',
            'category_id' => 1,
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0204751_pe359789_s5.jpg',
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836451_pe600874_s5.jpg',
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836450_pe596458_s5.jpg',
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836447_pe585553_s5.jpg',
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0629853_pe694518_s5.jpg',
        ]);

        $p13 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo yellow',
            'price' => 259,
            'model_path' => '/models/00262879_PS01_S01_NV01_RQP3_3.0_3e2b6ba581cc455887d02d36ce1dcea3.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-yellow-70262890/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0204753_pe359787_s5.jpg',
            'category_id' => 1,
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0204753_pe359787_s5.jpg',
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__1116442_pe872500_s5.jpg',
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0836444_pe596409_s5.jpg',
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0836443_pe585554_s5.jpg',
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0629853_pe694518_s5.jpg',
        ]);

        $p14 = Product::create([
            'name' => 'EKERÖ Armchair, Bomstad black',
            'price' => 299,
            'model_path' => '/models/70494588_PS01_S01_NV01_RQP3_3.0_64456dd3757f4477821a8d87918be518.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-bomstad-black-30494590/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951654_pe801302_s5.jpg',
            'category_id' => 1,
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951654_pe801302_s5.jpg',
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__1019350_ph144345_s5.jpg',
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951656_pe801304_s5.jpg',
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951657_pe801309_s5.jpg',
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0629853_pe694518_s5.jpg',
        ]);

        $vc3->products()->attach($p10->id);
        $vc3->products()->attach($p11->id);
        $vc3->products()->attach($p12->id);
        $vc3->products()->attach($p13->id);
        $vc3->products()->attach($p14->id);

        $vc4 = VariationCollection::create();

        $p15 = Product::create([
            'name' => 'FRÖSET Chair, white stained oak veneer',
            'price' => 124.99,
            'model_path' => '/models/80425641_PS01_S01_NV01_RQP3_3.0_0a2d76f480594c0b9033cbd4e30e8a2e.glb',
            'is_stackable' => 0,
            'description' => 'This easy chair makes us believe in love at first sight, with its clean Scandinavian lines and airy expression. Smart production minimizes environmental impact and price – and maximizes acessibility!',
            'source' => 'https://www.ikea.com/us/en/p/froeset-chair-black-stained-oak-veneer-40423559/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0824154_pe776005_s5.jpg',
            'category_id' => 3,
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0824154_pe776005_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0932440_ph170243_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0937802_pe793856_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0985867_pe816848_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0932441_ph170242_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0832032_pe777564_s5.jpg',
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0832958_pe777903_s5.jpg',
        ]);

        $p16 = Product::create([
            'name' => 'FRÖSET Chair, black stained oak veneer',
            'price' => 124.99,
            'model_path' => '/models/40423559_PS01_S01_NV01_RQP3_3.0_8d46a8a71ffb46c4afa6b98659afc221.glb',
            'is_stackable' => 0,
            'description' => 'This easy chair makes us believe in love at first sight, with its clean Scandinavian lines and airy expression. Smart production minimizes environmental impact and price – and maximizes acessibility!',
            'source' => 'https://www.ikea.com/us/en/p/froeset-chair-black-stained-oak-veneer-40423559/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0824150_pe776003_s5.jpg',
            'category_id' => 3,
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0824150_pe776003_s5.jpg',
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0932440_ph170243_s5.jpg',
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0937800_pe793855_s5.jpg',
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0985892_pe816864_s5.jpg',
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0832028_pe777560_s5.jpg',
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0832958_pe777903_s5.jpg',
        ]);

        $p17 = Product::create([
            'name' => 'FRÖSET Chair, red stained oak veneer',
            'price' => 124.99,
            'model_path' => '/models/20429604_PS01_S01_NV01_RQP3_3.0_514b7f952f0f41e2a97946061dccb566.glb',
            'is_stackable' => 0,
            'description' => 'This easy chair makes us believe in love at first sight, with its clean Scandinavian lines and airy expression. Smart production minimizes environmental impact and price – and maximizes acessibility!',
            'source' => 'https://www.ikea.com/us/en/p/froeset-chair-red-stained-oak-veneer-20429604/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832018_pe777555_s5.jpg',
            'category_id' => 3,
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832018_pe777555_s5.jpg',
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0932440_ph170243_s5.jpg',
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0937801_pe793857_s5.jpg',
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0987428_pe817525_s5.jpg',
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832029_pe777563_s5.jpg',
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832958_pe777903_s5.jpg',
        ]);

        $vc4->products()->attach($p15->id);
        $vc4->products()->attach($p16->id);
        $vc4->products()->attach($p17->id);

        $vc5 = VariationCollection::create();

        $p18 = Product::create([
            'name' => 'GISTAD Recliner, Bomstad black',
            'price' => 369,
            'model_path' => '/models/40450425_PS01_S01_NV01_RQP3_3.0_5f200fcac4a047388ac21c9d6342decc.glb',
            'is_stackable' => 0,
            'description' => 'Pamper yourself with a moment of comfy me-time. With this neat recliner you can choose if you want to sit upright, lean back or lie down for a quick nap – and put two together for some we-time!',
            'source' => 'https://www.ikea.com/us/en/p/gistad-recliner-bomstad-black-20450426/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789918_pe764203_s5.jpg',
            'category_id' => 1,
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789918_pe764203_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0792176_pe764673_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789917_pe764202_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0805112_pe769444_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789916_pe764204_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789915_pe764201_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789914_pe764200_s5.jpg',
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0796277_pe766322_s5.jpg',
        ]);

        $p19 = Product::create([
            'name' => 'GISTAD Recliner, Idekulla dark red',
            'price' => 369,
            'model_path' => '/models/40466389_PS01_S01_NV01_RQP3_4.0_06e2ab1524e3410691a7ccb2efd33d77.glb',
            'is_stackable' => 0,
            'description' => 'Pamper yourself with a moment of comfy me-time. With this neat recliner you can choose if you want to sit upright, lean back or lie down for a quick nap – and put two together for some we-time!',
            'source' => 'https://www.ikea.com/us/en/p/gistad-recliner-idekulla-dark-red-60466388/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789931_pe764213_s5.jpg',
            'category_id' => 1,
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789931_pe764213_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0792177_pe764674_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789929_pe764214_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0945233_ph170069_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0834169_ph168535_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0833201_ph168539_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0833202_ph168491_s5.jpg',
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0796277_pe766322_s5.jpg',
        ]);

        $vc5->products()->attach($p18->id);
        $vc5->products()->attach($p19->id);

        $p20 = Product::create([
            'name' => 'AGEN Armchair, rattan/bamboo',
            'price' => 99.99,
            'model_path' => '/models/G-50058376-7e455b7c225b9f46cd672506769b8dc958a27243_17e62e3587aa432c8231756fddb025d9.glb',
            'is_stackable' => 0,
            'description' => 'Made of hand-woven rattan, a living material that makes each AGEN armchair unique. It\'s airy, comfortable to sit in and easy to move around thanks to its low weight. A great way to invite nature into your home.',
            'source' => 'https://www.ikea.com/us/en/p/agen-armchair-rattan-bamboo-50058376/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__31428_pe120743_s5.jpg',
            'category_id' => 3,
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__31428_pe120743_s5.jpg',
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1139258_ph173578_s5.jpg',
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1059381_ph174044_s5.jpg',
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__0257247_pe401562_s5.jpg',
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__0841129_pe585560_s5.jpg',
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1059350_pe849593_s5.jpg',
        ]);

        $vc6 = VariationCollection::create();

        $p21 = Product::create([
            'name' => 'LINNEBÄCK Chair, Orrsta light gray',
            'price' => 69.99,
            'model_path' => '/models/G-70487229-de190ed0e9594e2949cb1233700e0a739b026532_1d9115f0e93d494888db1ba056e2f427.glb',
            'is_stackable' => 0,
            'description' => 'Beautiful simplicity and a casual style. This flexible, versatile easy chair with an airy design adds a visual calmness to the room, while supporting both an active and a relaxed life at home.',
            'source' => 'https://www.ikea.com/us/en/p/linnebaeck-chair-orrsta-light-gray-70487234/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0933452_pe791908_s5.jpg',
            'category_id' => 3,
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0933452_pe791908_s5.jpg',
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0940713_pe795126_s5.jpg',
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0936412_pe793245_s5.jpg',
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0936413_pe793244_s5.jpg',
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0971937_pe811480_s5.jpg',
        ]);


        $p22 = Product::create([
            'name' => 'LINNEBÄCK Chair, Orrsta olive-green',
            'price' => 69.99,
            'model_path' => '/models/G-30487226-f23d134134a3cbde1dd637db5006d9b576192d46_0f0013b9ebfc4097a047c2768503de92.glb',
            'is_stackable' => 0,
            'description' => 'Beautiful simplicity and a casual style. This flexible, versatile easy chair with an airy design adds a visual calmness to the room, while supporting both an active and a relaxed life at home.',
            'source' => 'https://www.ikea.com/us/en/p/linnebaeck-chair-orrsta-olive-green-10487232/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0933454_pe791910_s5.jpg',
            'category_id' => 3,
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0933454_pe791910_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0940727_pe795130_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__1113921_ph180590_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0936414_pe793247_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0936415_pe793246_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__1113919_ph180591_s5.jpg',
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0971937_pe811480_s5.jpg',
        ]);

        $p23 = Product::create([
            'name' => 'LINNEBÄCK Chair, Vissle dark gray',
            'price' => 69.99,
            'model_path' => '/models/40465441_PS01_S01_NV01_RQP3_4.0_4cb9dcb6637843409a96edc5a9b95264.glb',
            'is_stackable' => 0,
            'description' => 'Beautiful simplicity and a casual style. This flexible, versatile easy chair with an airy design adds a visual calmness to the room, while supporting both an active and a relaxed life at home.',
            'source' => 'https://www.ikea.com/us/en/p/linnebaeck-chair-vissle-dark-gray-50487225/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0933456_pe791909_s5.jpg',
            'category_id' => 3,
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0933456_pe791909_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0940732_pe795133_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0936417_pe793249_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__1043301_ph176051_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__1043300_ph176052_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0936418_pe793248_s5.jpg',
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0971937_pe811480_s5.jpg',
        ]);

        $vc6->products()->attach($p21->id);
        $vc6->products()->attach($p22->id);
        $vc6->products()->attach($p23->id);

        $vc7 = VariationCollection::create();

        $p24 = Product::create([
            'name' => 'MUREN Recliner, Remmarn dark gray',
            'price' => 479,
            'model_path' => '/models/G-10438557-26988386c65d2718161133c8487cd5d26fb32da3_0361e1b0a7a44dd5907728830844f6e5.glb',
            'is_stackable' => 0,
            'description' => 'Take a seat in MUREN recliner and get a pleasant surprise. It is adjustable to three positions and comes with an inbuilt footstool. While sitting, use your back to press against the backrest - it lowers and the footstool lifts up. Now relax and enjoy!',
            'source' => 'https://www.ikea.com/us/en/p/muren-recliner-remmarn-dark-gray-80438554/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908536_pe783303_s5.jpg',
            'category_id' => 1,
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908536_pe783303_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908535_pe783268_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908537_pe783270_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908538_pe783271_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908540_pe783273_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908539_pe783272_s5.jpg',
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0681591_pe720190_s5.jpg',
        ]);

        $p25 = Product::create([
            'name' => 'MUREN Recliner, Remmarn light gray',
            'price' => 479,
            'model_path' => '/models/G-00438553-8ae3c78f870270f94ae4520a93e5815e2d7fe4da_02d12593aad0448395d24db097d49891.glb',
            'is_stackable' => 0,
            'description' => 'Take a seat in MUREN recliner and get a pleasant surprise. It is adjustable to three positions and comes with an inbuilt footstool. While sitting, use your back to press against the backrest - it lowers and the footstool lifts up. Now relax and enjoy!',
            'source' => 'https://www.ikea.com/us/en/p/muren-recliner-remmarn-light-gray-60438550/',
            'image_url' => 'https://ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908542_pe783275_s5.jpg',
            'category_id' => 1,
        ]);

        $p25->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908542_pe783275_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908541_pe783274_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908544_pe783277_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908543_pe783276_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908545_pe783278_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908546_pe783279_s5.jpg',
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0681591_pe720190_s5.jpg',
        ]);

        $vc7->products()->attach($p24->id);
        $vc7->products()->attach($p25->id);

        $p26 = Product::create([
            'name' => 'BRIMNES Wardrobe with 2 doors, black, 30 3/4x74 3/4 "',
            'price' => 149.99,
            'model_path' => '/models/30574799_PS01_S01_NV01_RQP3_4.0_2603119dc836444596432b0a778b2994.glb',
            'is_stackable' => 0,
            'description' => 'Small spaces need smart storage. This wardrobe has a clothes rail for shirts and dresses, an inner shelf for folded clothes like t-shirts and sweaters – and there is also room to hang your long clothes.',
            'source' => 'https://www.ikea.com/us/en/p/brimnes-wardrobe-with-2-doors-white-30574799/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268948_pe928889_s5.jpg',
            'category_id' => 6,
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268948_pe928889_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268944_pe928902_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268945_pe928903_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268946_pe928904_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__0778225_pe758860_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268947_pe928905_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__0380433_pe555354_s5.jpg',
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1246508_pe922171_s5.jpg',
        ]);

        $p27 = Product::create([
            'name' => 'KLEPPSTAD Wardrobe with 3 doors, white, 46 1/8x69 1/4 "',
            'price' => 179.99,
            'model_path' => '/models/G-00441758-fad3c605b8f85c7c3e10dcb183273f478ff40641_486b94d664a84e75903df9dfe1d912ef.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the KLEPPSTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/kleppstad-wardrobe-with-3-doors-white-20441757/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753594_pe748782_s5.jpg',
            'category_id' => 6,
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753594_pe748782_s5.jpg',
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__1276202_ph170507_s5.jpg',
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0813670_ph165843_s5.jpg',
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0824204_pe776026_s5.jpg',
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753595_pe748783_s5.jpg',
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0789783_pe764172_s5.jpg',
        ]);

        $p28 = Product::create([
            'name' => 'RAKKESTAD Wardrobe with 3 doors, black-brown, 46 1/8x69 1/4 "',
            'price' => 249.99,
            'model_path' => '/models/70453762_PS01_S01_NV01_RQP3_4.0_6487505cc7554dbe9eb71517013df89c.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the RAKKESTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/rakkestad-wardrobe-with-3-doors-black-brown-00453765/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823987_pe776018_s5.jpg',
            'category_id' => 6,
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823987_pe776018_s5.jpg',
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823988_pe776019_s5.jpg',
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823989_pe776020_s5.jpg',
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0789783_pe764172_s5.jpg',
        ]);

        $vc8 = VariationCollection::create();

        $p29 = Product::create([
            'name' => 'SONGESAND Wardrobe, brown, 47 1/8x23 5/8x75 1/4 "',
            'price' => 299.99,
            'model_path' => '/models/60375133_PS01_S01_NV01_RQP3_3.0_91071c796fcd4889afcd379611661a5f.glb',
            'is_stackable' => 0,
            'description' => 'The classic design with panelled doors never goes out of style. Are you on your way? Use the full-length mirror so you can see your outfit from head to toe. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/songesand-wardrobe-brown-90394559/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0555114_pe660180_s5.jpg',
             'category_id' => 6,
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0555114_pe660180_s5.jpg',
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858553_pe660181_s5.jpg',
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858559_pe660182_s5.jpg',
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858565_pe660183_s5.jpg',
        ]);

        $p30 = Product::create([
            'name' => 'SONGESAND Wardrobe, white, 47 1/8x23 5/8x75 1/4 "',
            'price' => 299.99,
            'model_path' => '/models/90347351_PS01_S01_NV01_RQP3_3.0_15a090b1e25d4cba8fd7f25f4d902b8d.glb',
            'is_stackable' => 0,
            'description' => 'The classic design with panelled doors never goes out of style. Are you on your way? Use the full-length mirror so you can see your outfit from head to toe. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/songesand-wardrobe-white-10394558/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0555120_pe660185_s5.jpg',
             'category_id' => 6,
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0555120_pe660185_s5.jpg',
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0858618_pe660187_s5.jpg',
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0818036_ph167731_s5.jpg',
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0858614_pe660184_s5.jpg',
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0789904_pe764192_s5.jpg',
        ]);

        $vc8->products()->attach($p29->id);
        $vc8->products()->attach($p30->id);

        $p31 = Product::create([
            'name' => 'KLEPPSTAD Wardrobe with sliding doors, white, 46 1/8x69 1/4 "',
            'price' => 229,
            'model_path' => '/models/90437238_PS01_S01_NV01_RQP3_3.0_1570bbbb6fd548609acdc41f0fadbc1b.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the KLEPPSTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/kleppstad-wardrobe-with-sliding-doors-white-90437238/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0823547_pe775917_s5.jpg',
             'category_id' => 6,
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0823547_pe775917_s5.jpg',
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__1276204_ph192051_s5.jpg',
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__1276203_ph193172_s5.jpg',
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0824204_pe776026_s5.jpg',
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0823548_pe775916_s5.jpg',
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0946835_pe798278_s5.jpg',
        ]);

        $vc9 = VariationCollection::create();

        $p32 = Product::create([
            'name' => 'HEMNES TV unit, black-brown, 58 1/4x18 1/2x22 1/2 "',
            'price' => 249.99,
            'model_path' => '/models/50297046_PS01_S01_NV01_RQP3_3.0_e4ffa178f2324021ae3b35cb13b44a8d.glb',
            'is_stackable' => 1,
            'description' => 'A black-brown TV bench with both shelves and drawers, as well as open and closed storage. A neat piece of furniture that fits almost anywhere and has space for pretty much all of your TV-equipment.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-black-brown-30334506/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0625361_pe692211_s5.jpg',
             'category_id' => 4,
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0625361_pe692211_s5.jpg',
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0679553_pe719634_s5.jpg',
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0803357_pe768854_s5.jpg',
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0679554_pe719633_s5.jpg',
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0978642_pe814195_s5.jpg',
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__1257804_pe926043_s5.jpg',
        ]);

        $p33 = Product::create([
            'name' => 'TV unit, dark gray stained, 58 1/4x18 1/2x22 1/2 "',
            'price' => 189.99,
            'model_path' => '/models/G-90381731-d92786cc85e9e9b4402cc694c1e182b6359b76da_035c74f62ab3445c8db685ef9a920da3.glb',
            'is_stackable' => 1,
            'description' => 'Sustainable beauty from sustainably-sourced solid pine, a natural and renewable material that gets more beautiful with each passing year. Like it? Combine with other products in the HEMNES series.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-dark-gray-stained-90381731/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0531274_pe647229_s5.jpg',
             'category_id' => 4,
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0531274_pe647229_s5.jpg',
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0851330_pe647231_s5.jpg',
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0803359_pe768856_s5.jpg',
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0850385_pe671757_s5.jpg',
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0978642_pe814195_s5.jpg',
        ]);

        $p34 = Product::create([
            'name' => 'HEMNES TV unit, white stain, 58 1/4x18 1/2x22 1/2 "',
            'price' => 249.99,
            'model_path' => '/models/30352901_PS01_S01_NV01_RQP3_3.0_307ba8071d75415bb782b0c223b40cf3.glb',
            'is_stackable' => 1,
            'description' => 'A white-stained TV bench with both shelves and drawers, as well as open and closed storage. A neat piece of furniture that fits almost anywhere and has space for pretty much all of your TV-equipment.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-white-stain-40349569/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0644455_pe702706_s5.jpg',
             'category_id' => 4,
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0644455_pe702706_s5.jpg',
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0679567_pe719638_s5.jpg',
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0803358_pe768857_s5.jpg',
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0164867_pe316751_s5.jpg',
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0978642_pe814195_s5.jpg',
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__1257804_pe926043_s5.jpg',
        ]);

        $p35 = Product::create([
            'name' => 'HEMNES TV unit, white stain/light brown, 58 1/4x18 1/2x22 1/2 "',
            'price' => 249.99,
            'model_path' => '/models/50413526_PS01_S01_NV01_RQP3_3.0_915f691716d9442aa47cf0a4ca941f8f.glb',
            'is_stackable' => 1,
            'description' => 'Sustainable beauty from sustainably-sourced solid pine, a natural and renewable material that gets more beautiful with each passing year. Like it? Combine with other products in the HEMNES series.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-white-stain-light-brown-10413528/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0583377_pe671187_s5.jpg',
             'category_id' => 4,
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0583377_pe671187_s5.jpg',
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0850139_pe671188_s5.jpg',
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0803360_pe768855_s5.jpg',
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0164867_pe316751_s5.jpg',
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0978642_pe814195_s5.jpg',
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__1257804_pe926043_s5.jpg',
        ]);

        $vc9->products()->attach($p32->id);
        $vc9->products()->attach($p33->id);
        $vc9->products()->attach($p34->id);
        $vc9->products()->attach($p35->id);

        $p36 = Product::create([
            'name' => 'BYÅS TV unit, high gloss white, 63x16 1/2x17 3/4 "',
            'price' => 119.99,
            'model_path' => '/models/80227797_PS01_S01_NV01_RQP3_3.0_e29173c9d07d4c8a97a17ca558b06705.glb',
            'is_stackable' => 1,
            'description' => 'With open storage it\'s easier to get an overview, and with closed storage you can keep things nice and tidy. This TV bench has both, and an adjustable shelf in each section too.',
            'source' => 'https://www.ikea.com/us/en/p/byas-tv-unit-high-gloss-white-80227797/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0644411_pe702653_s5.jpg',
             'category_id' => 4,
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0644411_pe702653_s5.jpg',
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0849938_pe560742_s5.jpg',
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0378189_pe322598_s5.jpg',
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0544140_pe654903_s5.jpg',
        ]);

        $p37 = Product::create([
            'name' => 'BESTÅ BURS TV unit, high gloss white, 70 7/8x16 1/8x19 1/4 "',
            'price' => 239.99,
            'model_path' => '/models/30269129_PS01_S01_NV01_RQP3_3.0_255b9d59705f4af08651198e835a3b72.glb',
            'is_stackable' => 1,
            'description' => 'BESTÅ TV bench provides a home for your TV and storage for the gadgets that belong to it. With spacious drawers there’s plenty of space to keep TV games and accessories organized. And it looks tidy too!',
            'source' => 'https://www.ikea.com/us/en/p/besta-burs-tv-unit-high-gloss-white-30269129/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__65138_pe175906_s5.jpg',
             'category_id' => 4,
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__65138_pe175906_s5.jpg',
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257776_pe402056_s5.jpg',
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257777_pe402057_s5.jpg',
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257969_pe402007_s5.jpg',
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__1056931_pe848656_s5.jpg',
        ]);

        $p38 = Product::create([
            'name' => 'TONSTAD TV unit, oak veneer, 70 1/4x14 5/8x21 5/8 "',
            'price' => 249.99,
            'model_path' => '/models/00489302_PS01_S01_NV01_RQP3_3.0_097907c23738417c82f831f0ad5271e0.glb',
            'is_stackable' => 1,
            'description' => 'Classic design meets nicely brushed veneer in the TONSTAD series, giving the furniture a unique character. This TV bench has smart, built-in cable management which makes it easy to keep unruly cables hidden.',
            'source' => 'https://www.ikea.com/us/en/p/tonstad-tv-unit-oak-veneer-60542962/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1186266_pe898748_s5.jpg',
             'category_id' => 4,
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1186266_pe898748_s5.jpg',
        ]);

        $p38->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1209014_pe908977_s5.jpg',
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1236542_pe917690_s5.jpg',
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1220965_pe913617_s5.jpg',
        ]);

        $p39 = Product::create([
            'name' => 'FJÄLLBO TV unit, black, 59x14 1/8x21 1/4 "',
            'price' => 149.99,
            'model_path' => '/models/G-90339290-9f99177bf5b3f330a2ad16c40833ead956fb8b79_046ff6c5054b4b4994c2b51d189d1231.glb',
            'is_stackable' => 1,
            'description' => 'Since the doors allow signals to get through from your remote control, your electronic equipment will get along well with FJÄLLBO. Probably you too – the open back makes it easy to manage cables.',
            'source' => 'https://www.ikea.com/us/en/p/fjaellbo-tv-unit-black-90339290/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0473390_pe614545_s5.jpg',
             'category_id' => 4,
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0473390_pe614545_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0925815_ph157836_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0850235_pe616397_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0850248_pe725299_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0658086_ph150571_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0476530_pe616398_s5.jpg',
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0802552_pe768508_s5.jpg',
        ]);

        $p40 = Product::create([
            'name' => 'IDANÄS TV unit, white, 63 3/4x15 3/4x24 3/4 "',
            'price' => 179.99,
            'model_path' => '/models/G-90487860-efebf58a6409bf08ebdb93734449821285528ccf_13253ee119c5486d8757ca6fab69d115.glb',
            'is_stackable' => 1,
            'description' => 'IDANÄS series combines timeless design with modern functionality. Keep the area around the TV tidy and store your games, controls and accessories in the two drawers and feed the cables through the outlets in the back.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-tv-unit-white-90487860/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1009042_pe827428_s5.jpg',
             'category_id' => 4,
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1009042_pe827428_s5.jpg',
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1021401_pe832124_s5.jpg',
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1021400_pe832149_s5.jpg',
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__0985314_pe816591_s5.jpg',
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__0985307_pe816584_s5.jpg',
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1022450_pe832733_s5.jpg',
        ]);

        $vc10 = VariationCollection::create();

        $p41 = Product::create([
            'name' => 'SKRUVBY TV unit, black-blue, 61 3/8x14 3/4x23 5/8 "',
            'price' => 99.99,
            'model_path' => '/models/10520364_PS01_S01_NV01_RQP3_3.0_140d43c56f814fb38c4c79f982b894f4.glb',
            'is_stackable' => 1,
            'description' => 'The SKRUVBY series has a traditional style with solitaire storage units that can be coordinated. This TV bench’s top panel has an oak look and profiled edges that add a warm, natural feel to the room.',
            'source' => 'https://www.ikea.com/us/en/p/skruvby-tv-unit-black-blue-10542747/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1128170_pe876449_s5.jpg',
             'category_id' => 4,
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1128170_pe876449_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1142036_pe881132_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1142035_pe881128_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1133139_pe878450_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1144172_pe881750_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1122128_pe874516_s5.jpg',
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1236095_pe917447_s5.jpg',
        ]);

        $p42 = Product::create([
            'name' => 'SKRUVBY TV unit, white, 61 3/8x14 3/4x23 5/8 "',
            'price' => 99.99,
            'model_path' => '/models/80503549_PS01_S01_NV01_RQP3_3.0_ad51dca5ff8a453cb4d8ae508e9dcfb4.glb',
            'is_stackable' => 1,
            'description' => 'The SKRUVBY series has a traditional style with solitaire storage units that can be coordinated. This TV bench’s top panel has an oak look and profiled edges that add a warm, natural feel to the room.',
            'source' => 'https://www.ikea.com/us/en/p/skruvby-tv-unit-white-90542748/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1128171_pe876450_s5.jpg',
             'category_id' => 4,
        ]);

        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1128171_pe876450_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142039_pe881129_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142038_pe881131_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142030_pe881124_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1144173_pe881749_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1122128_pe874516_s5.jpg',
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1236095_pe917447_s5.jpg',
        ]);

        $vc10->products()->attach($p41->id);
        $vc10->products()->attach($p42->id);

        $vc11 = VariationCollection::create();

        $p43 = Product::create([
            'name' => 'BESTÅ TV unit, black-brown, 47 1/4x15 3/4x25 1/4 "',
            'price' => 80.00,
            'model_path' => '/models/40299885_PS01_S01_NV01_RQP3_3.0_783138b3c9c14ce4b5a98387a597245e.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-black-brown-50566034/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0316215_pe516839_s5.jpg',
             'category_id' => 4,
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0316215_pe516839_s5.jpg',
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0843438_pe535720_s5.jpg',
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0763977_pe753011_s5.jpg',
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__1219324_pe913365_s5.jpg',
        ]);

        $p44 = Product::create([
            'name' => 'BESTÅ TV unit, dark gray, 47 1/4x15 3/4x25 1/4 "',
            'price' => 110.00,
            'model_path' => '/models/40538616_PS01_S01_NV01_RQP3_3.0_351bd11ad7f4496c8a3722474a18448d.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-dark-gray-60575226/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219601_pe913478_s5.jpg',
             'category_id' => 4,
        ]);

        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219601_pe913478_s5.jpg',
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1255236_pe924457_s5.jpg',
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1255235_pe924458_s5.jpg',
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219324_pe913365_s5.jpg',
        ]);

        $p45 = Product::create([
            'name' => 'BESTÅ TV unit, white, 47 1/4x15 3/4x25 1/4 "',
            'price' => 80.00,
            'model_path' => '/models/40299890_PS01_S01_NV01_RQP3_3.0_3e3c29ec6572449292ec6213bc312054.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-white-20566035/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0377000_pe516842_s5.jpg',
             'category_id' => 4,
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0377000_pe516842_s5.jpg',
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0843389_pe535717_s5.jpg',
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0763979_pe753013_s5.jpg',
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__1219324_pe913365_s5.jpg',
        ]);

        $p46 = Product::create([
            'name' => 'BESTÅ TV unit, white stained oak effect, 47 1/4x15 3/4x25 1/4 "',
            'price' => 80.00,
            'model_path' => '/models/30299895_PS01_S01_NV01_RQP3_3.0_1164b1653a724f2a93b6880b063230c4.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-white-stained-oak-effect-80576003/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0316224_pe516843_s5.jpg',
             'category_id' => 4,
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0316224_pe516843_s5.jpg',
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0843366_pe535714_s5.jpg',
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0763980_pe753014_s5.jpg',
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__1219324_pe913365_s5.jpg',
        ]);

        $vc11->products()->attach($p43->id);
        $vc11->products()->attach($p44->id);
        $vc11->products()->attach($p45->id);
        $vc11->products()->attach($p46->id);

        $vc12 = VariationCollection::create();

        $p47 = Product::create([
            'name' => 'NOLMYRA Chair, birch veneer/gray',
            'price' => 49.99,
            'model_path' => '/models/G-10233532-2504f052eeebbc00d785b48285523a7e7d388a34_481e132b8365481bb63c4cd796bed7f8.glb',
            'is_stackable' => 0,
            'description' => 'NOLMYRA easy chair re-imagines comfort with mesh fabric stretched over the frame, making the need for foam unnecessary. The result is an elegantly engineered lounge chair at a low price.',
            'source' => 'https://www.ikea.com/us/en/p/nolmyra-chair-birch-veneer-gray-10233532/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__0152020_pe310348_s5.jpg',
             'category_id' => 3,
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__0152020_pe310348_s5.jpg',
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__1096307_ph161211_s5.jpg',
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__1096308_ph178808_s5.jpg',
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__1247730_ph183453_s5.jpg',
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__0836779_pe585625_s5.jpg',
        ]);

        $p47->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-birch-veneer-gray__1249048_pe923327_s5.jpg',
        ]);

        $p48 = Product::create([
            'name' => 'NOLMYRA Chair, black/black',
            'price' => 49.99,
            'model_path' => '/models/G-40233535-8aad4db61eeb1d916fb61d39cab5b441e35a12e7_ae8ea63dbd18429eae1111a583106232.glb',
            'is_stackable' => 0,
            'description' => 'NOLMYRA easy chair re-imagines comfort with mesh fabric stretched over the frame, making the need for foam unnecessary. The result is an elegantly engineered lounge chair at a low price.',
            'source' => 'https://www.ikea.com/us/en/p/nolmyra-chair-black-black-40233535/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__0169629_pe323574_s5.jpg',
             'category_id' => 3,
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__0169629_pe323574_s5.jpg',
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__1096309_ph168814_s5.jpg',
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__1061716_ph177951_s5.jpg',
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__0256705_pe400728_s5.jpg',
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__0840386_pe585812_s5.jpg',
        ]);

        $p48->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/nolmyra-chair-black-black__1249048_pe923327_s5.jpg',
        ]);

        $vc12->products()->attach($p47->id);
        $vc12->products()->attach($p48->id);

        $vc13 = VariationCollection::create();

        $p49 = Product::create([
            'name' => 'OSKARSHAMN Wing chair, Gunnared black-gray',
            'price' => 449,
            'model_path' => '/models/00503671_PS01_S01_NV01_RQP3_3.0_162b3655e7d445ff91e551d173daa264.glb',
            'is_stackable' => 0,
            'description' => 'Who doesn\'t dream of having their own nook to relax in? The comfy OSKARSHAMN wing chair feels wonderfully embracing while the timeless design makes it the given eye-catcher in any room.',
            'source' => 'https://www.ikea.com/us/en/p/oskarshamn-wing-chair-gunnared-black-gray-70521662/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1118159_pe872953_s5.jpg',
             'category_id' => 1,
        ]);

        $p49->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1118159_pe872953_s5.jpg',
        ]);

        $p49->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1214227_pe911514_s5.jpg',
        ]);

        $p49->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1173989_ph184779_s5.jpg',
        ]);

        $p49->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1123982_pe874952_s5.jpg',
        ]);

        $p49->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-gunnared-black-gray__1161244_pe889316_s5.jpg',
        ]);

        $p50 = Product::create([
            'name' => 'OSKARSHAMN Wing chair, Tibbleby beige/gray',
            'price' => 449,
            'model_path' => '/models/20523611_PS01_S01_NV01_RQP3_3.0_0a90bf130f0046968b169d3ec4d6eff9.glb',
            'is_stackable' => 0,
            'description' => 'Who doesn\'t dream of having their own nook to relax in? The comfy OSKARSHAMN wing chair feels wonderfully embracing while the timeless design makes it the given eye-catcher in any room.',
            'source' => 'https://www.ikea.com/us/en/p/oskarshamn-wing-chair-tibbleby-beige-gray-30523615/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1118157_pe872954_s5.jpg',
             'category_id' => 1,
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1118157_pe872954_s5.jpg',
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1173932_ph190301_s5.jpg',
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1123975_pe874945_s5.jpg',
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1123973_pe874943_s5.jpg',
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1123974_pe874944_s5.jpg',
        ]);

        $p50->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/oskarshamn-wing-chair-tibbleby-beige-gray__1161244_pe889316_s5.jpg',
        ]);

        $vc13->products()->attach($p49->id);
        $vc13->products()->attach($p50->id);

        $vc14 = VariationCollection::create();

        $p51 = Product::create([
            'name' => 'VEDBO Armchair, Gunnared blue',
            'price' => 319,
            'model_path' => '/models/G-50423573-a641e0d62f93b477282f55f890ecbf8241cb2be5_0be16c494d7f44099740119d61633f2c.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. Perfect when you want your own space in an open environment, yet still socialize with others. The cover in blue adds tranquillity and beauty.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-armchair-gunnared-blue-80423576/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0634896_pe696809_s5.jpg',
             'category_id' => 3,
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0634896_pe696809_s5.jpg',
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0708566_ph154665_s5.jpg',
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0837370_pe649528_s5.jpg',
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0837375_pe649530_s5.jpg',
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0837372_pe649529_s5.jpg',
        ]);

        $p51->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-blue__0632856_pe695638_s5.jpg',
        ]);

        $p52 = Product::create([
            'name' => 'VEDBO Armchair, Gunnared dark gray',
            'price' => 319,
            'model_path' => '/models/G-10424126-de47d5cf8d0f22be393b067facd34c143e5139dc_87074941d33a4047a98f773098653bcc.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. Perfect when you want your own space in an open environment, yet still socialize with others. The cover in dark gray adds elegance and style.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-armchair-gunnared-dark-gray-50424129/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0512767_pe638683_s5.jpg',
             'category_id' => 3,
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0512767_pe638683_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0708567_ph153038_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0707625_ph147021_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0837084_pe638857_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0837089_pe638860_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0837082_pe638415_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0837092_pe704434_s5.jpg',
        ]);

        $p52->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-dark-gray__0632856_pe695638_s5.jpg',
        ]);

        $p53 = Product::create([
            'name' => 'VEDBO Armchair, Gunnared light brown-pink',
            'price' => 319,
            'model_path' => '/models/G-40423578-48726b97d1834c5cfb8ba62c727e4acf7fcc5e6f_2ce02ffd3fc34cc9abd886f37081e285.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. Perfect when you want your own space in an open environment, yet still socialize with others. The cover in brown-pink adds warmth and energy.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-armchair-gunnared-light-brown-pink-80423581/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0634903_pe696815_s5.jpg',
             'category_id' => 3,
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0634903_pe696815_s5.jpg',
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0837412_pe696814_s5.jpg',
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0837396_pe649535_s5.jpg',
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0837394_pe649534_s5.jpg',
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0837392_pe649533_s5.jpg',
        ]);

        $p53->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-brown-pink__0632856_pe695638_s5.jpg',
        ]);

        $p54 = Product::create([
            'name' => 'VEDBO Armchair, Gunnared light green',
            'price' => 319,
            'model_path' => '/models/G-40494250-0ab61c403037bab1c0ef70d732022d9e24519f0b_8489dde0970542a2a5f8d27455dc7d25.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. The armchair\'s nicely curved back gives your lumbar region support. And covers in earthy colors provide natural warmth and beauty to the room.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-armchair-gunnared-light-green-60494249/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949818_pe800035_s5.jpg',
             'category_id' => 3,
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949818_pe800035_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0971804_ph175234_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949819_pe800036_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949820_pe800037_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949821_pe800042_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949827_pe800043_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0949826_pe800044_s5.jpg',
        ]);

        $p54->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-armchair-gunnared-light-green__0632856_pe695638_s5.jpg',
        ]);

        $vc14->products()->attach($p51->id);
        $vc14->products()->attach($p52->id);
        $vc14->products()->attach($p53->id);
        $vc14->products()->attach($p54->id);

        $vc15 = VariationCollection::create();

        $p55 = Product::create([
            'name' => 'VEDBO High back armchair, Gunnared blue',
            'price' => 449,
            'model_path' => '/models/G-40423583-48f6b4c6de531efbc53c78de97eaa8ffab1bc667_0885d7067662430fbe5db63633fd764e.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. The armchair’s nicely curved back provides your lumbar region with good support. And the cover in blue adds tranquillity and beauty.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-high-back-armchair-gunnared-blue-50423587/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0635321_pe697114_s5.jpg',
             'category_id' => 3,
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0635321_pe697114_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__1247740_ph193153_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0840517_pe697113_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0840505_pe649538_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0840507_pe649539_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0840782_pe687335_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0840778_pe687334_s5.jpg',
        ]);

        $p55->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-blue__0632855_pe695637_s5.jpg',
        ]);

        $p56 = Product::create([
            'name' => 'VEDBO High back armchair, Gunnared dark',
            'price' => 449,
            'model_path' => '/models/G-10424131-93e5d87abaec864c0bba562296a024c6349db31d_3f625b7b06974ee8b89a80b34907d6c0.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. The armchair’s nicely curved back provides your lumbar region with good support. And the cover in dark gray adds elegance and style.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-high-back-armchair-gunnared-dark-gray-50424134/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0512775_pe638684_s5.jpg',
             'category_id' => 3,
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0512775_pe638684_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0837110_pe704423_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0837112_pe704426_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0837082_pe638415_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0837107_pe638865_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0837104_pe638864_s5.jpg',
        ]);

        $p56->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-dark-gray__0632855_pe695637_s5.jpg',
        ]);

        $p57 = Product::create([
            'name' => 'VEDBO High back armchair, Gunnared light brown-pink',
            'price' => 449,
            'model_path' => '/models/G-10423589-dc0268e94ed2e6fcf03e2d62636b646484597304_528901297dc64e688f6f64aa9066b528.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines create an elegant profile. The armchair’s nicely curved back provides your lumbar region with good support. And the cover in brown-pink adds warmth and energy.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-high-back-armchair-gunnared-light-brown-pink-50423592/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0643605_pe701951_s5.jpg',
             'category_id' => 3,
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0643605_pe701951_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0945783_ph171545_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0707623_ph152599_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0836884_pe649543_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0837073_pe687337_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0836895_pe687336_s5.jpg',
        ]);

        $p57->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-brown-pink__0632855_pe695637_s5.jpg',
        ]);

        $p58 = Product::create([
            'name' => 'VEDBO High back armchair, Gunnared light green',
            'price' => 449,
            'model_path' => '/models/G-50494259-4891fb5e51ef239eb46d8250a6a804ea1201439b_5402b49e8bf442d3a367d47eac51c8b7.glb',
            'is_stackable' => 0,
            'description' => 'Soft but distinct lines creates an elegant profile. Perfect when you want your own space in an open environment, and still socialize with others. Covers in earthy colors provide natural warmth and beauty.',
            'source' => 'https://www.ikea.com/us/en/p/vedbo-high-back-armchair-gunnared-light-green-90494262/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0949822_pe800039_s5.jpg',
            'category_id' => 3,
        ]);

        $p58->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0949822_pe800039_s5.jpg',
        ]);

        $p58->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0991388_ph175235_s5.jpg',
        ]);

        $p58->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0949827_pe800043_s5.jpg',
        ]);

        $p58->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0949826_pe800044_s5.jpg',
        ]);

        $p58->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vedbo-high-back-armchair-gunnared-light-green__0632855_pe695637_s5.jpg',
        ]);

        $vc15->products()->attach($p55->id);
        $vc15->products()->attach($p56->id);
        $vc15->products()->attach($p57->id);
        $vc15->products()->attach($p58->id);

        $p59 = Product::create([
            'name' => 'SPIKSMED TV unit, light gray, 38 1/4x12 5/8 "',
            'price' => 59.99,
            'model_path' => '/models/50520871_PS01_S01_NV01_RQP3_4.0_318078d596094c58aac3e54cf5f1e506.glb',
            'is_stackable' => 1,
            'description' => 'Simple design but rich in functions, as it offers many possibilities to fit into your home interior. SPIKSMED has both open and closed storage with sliding doors – perfect for small spaces.',
            'source' => 'https://www.ikea.com/us/en/p/spiksmed-tv-unit-light-gray-10542064/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1152577_pe885417_s5.jpg',
             'category_id' => 4,
        ]);

        $vc16 = VariationCollection::create();

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1152577_pe885417_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1248718_pe923204_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1152582_pe885423_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1184082_pe897710_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1152583_pe885424_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1152578_pe885418_s5.jpg',
        ]);

        $p59->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/spiksmed-tv-unit-light-gray__1170103_pe892660_s5.jpg',
        ]);

        $p60 = Product::create([
            'name' => 'VITTSJÖ TV unit, black-brown/glass, 39 3/8x14 1/8x20 7/8 "',
            'price' => 59.99,
            'model_path' => '/models/70303428_PS01_S01_NV01_RQP3_3.0_069abc742c584289964c15ac4b2c1792.glb',
            'is_stackable' => 1,
            'description' => 'A TV bench without frills that can hold both your TV and all those accessories. The middle shelf in tempered glass gives the bench a light and airy expression.',
            'source' => 'https://www.ikea.com/us/en/p/vittsjoe-tv-unit-black-brown-glass-70303428/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-black-brown-glass__0644745_pe702933_s5.jpg',
             'category_id' => 4,
        ]);

        $p60->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-black-brown-glass__0644745_pe702933_s5.jpg',
        ]);

        $p60->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-black-brown-glass__1287830_pe933979_s5.jpg',
        ]);

        $p60->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-black-brown-glass__0850771_pe527558_s5.jpg',
        ]);

        $p60->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-black-brown-glass__0778401_pe758943_s5.jpg',
        ]);

        $p61 = Product::create([
            'name' => 'VITTSJÖ TV unit, black-brown/glass, 39 3/8x14 1/8x20 7/8 "',
            'price' => 59.99,
            'model_path' => '/models/50303434_PS01_S01_NV01_RQP3_3.0_0bc73d4b157f470c8682af41235873f5.glb',
            'is_stackable' => 1,
            'description' => 'A TV bench without frills that can hold both your TV and all those accessories. The middle shelf in tempered glass gives the bench a light and airy expression.',
            'source' => 'https://www.ikea.com/us/en/p/vittsjoe-tv-unit-white-glass-50303434/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-white-glass__0644743_pe702931_s5.jpg',
             'category_id' => 4,
        ]);

        $p61->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-white-glass__0644743_pe702931_s5.jpg',
        ]);

        $p61->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-white-glass__0850103_pe561998_s5.jpg',
        ]);

        $p61->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-white-glass__0850099_pe527557_s5.jpg',
        ]);

        $p61->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-tv-unit-white-glass__0778401_pe758943_s5.jpg',
        ]);

        $vc16->products()->attach($p60->id);
        $vc16->products()->attach($p61->id);

        $vc17 = VariationCollection::create();

        $p62 = Product::create([
            'name' => 'VIHALS TV unit, dark gray, 69 3/8x14 5/8x19 5/8 "',
            'price' => 129.99,
            'model_path' => '/models/50542868_PS01_S01_NV01_RQP3_3.0_71e14376a6744d69aea8c6d39b22a69c.glb',
            'is_stackable' => 1,
            'description' => 'VIHALS storage series has a cohesive look that connects the rooms throughout your home. Set your TV on this clever bench – or set yourself on it – all depending on your needs and where you place it.',
            'source' => 'https://www.ikea.com/us/en/p/vihals-tv-unit-dark-gray-10542870/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-dark-gray__1203689_pe906381_s5.jpg',
             'category_id' => 4,
        ]);

        $p62->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-dark-gray__1203689_pe906381_s5.jpg',
        ]);

        $p62->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-dark-gray__1212502_pe910664_s5.jpg',
        ]);

        $p62->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-dark-gray__1257835_pe926053_s5.jpg',
        ]);

        $p63 = Product::create([
            'name' => 'VIHALS TV unit, white, 69 3/8x14 5/8x19 5/8 "',
            'price' => 129.99,
            'model_path' => '/models/80542857_PS01_S01_NV01_RQP3_4.0_dbf90f35049f464fb042ddfe1221b092.glb',
            'is_stackable' => 1,
            'description' => 'VIHALS storage series has a cohesive look that connects the rooms throughout your home. This TV bench with 2 drawers has storage for your different needs and cable management in the back.',
            'source' => 'https://www.ikea.com/us/en/p/vihals-tv-unit-white-70542867/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1203696_pe906389_s5.jpg',
             'category_id' => 4,
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1203696_pe906389_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1239669_pe918999_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1051511_pe845563_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1051513_pe845565_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1051539_pe845591_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1212502_pe910664_s5.jpg',
        ]);

        $p63->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-tv-unit-white__1257835_pe926053_s5.jpg',
        ]);

        $vc17->products()->attach($p62->id);
        $vc17->products()->attach($p63->id);

        $vc18 = VariationCollection::create();

        $p64 = Product::create([
            'name' => 'KALLAX TV unit, black-brown, 57 3/4x23 1/2 "',
            'price' => 79.99,'price' => 79.99,
            'model_path' => '/models/10562090_PS01_S01_NV01_RQP3_4.0_5071b9806fb44044a3581c235562553e.glb',
            'is_stackable' => 1,
            'description' => 'A perfect TV bench with plenty of space for equipment and accessories. If you want closed storage, place boxes or inserts in the lower compartments. The open back makes cable management easy!',
            'source' => 'https://www.ikea.com/us/en/p/kallax-tv-unit-black-brown-90574881/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1238897_pe918669_s5.jpg',
            'category_id' => 4,
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1238897_pe918669_s5.jpg',
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1248782_pe923214_s5.jpg',
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1274277_pe930228_s5.jpg',
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1106845_pe868820_s5.jpg',
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1212006_pe910456_s5.jpg',
        ]);

        $p64->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-black-brown__1219453_pe913403_s5.jpg',
        ]);

        $p65 = Product::create([
            'name' => 'KALLAX TV unit, white, 57 3/4x23 1/2 "',
            'price' => 74.99,
            'model_path' => '/models/70562087_PS01_S01_NV01_RQP3_4.0_417f9bd7ed1c42ec8e7952483bc62ddc.glb',
            'is_stackable' => 1,
            'description' => 'A perfect TV bench with plenty of space for equipment and accessories. If you want closed storage, place boxes or inserts in the lower compartments. The open back makes cable management easy!',
            'source' => 'https://www.ikea.com/us/en/p/kallax-tv-unit-white-00574885/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1238898_pe918671_s5.jpg',
            'category_id' => 4,
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1238898_pe918671_s5.jpg',
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1248783_pe923213_s5.jpg',
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1274278_pe930229_s5.jpg',
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1106846_pe868822_s5.jpg',
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1212006_pe910456_s5.jpg',
        ]);

        $p65->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white__1219453_pe913403_s5.jpg',
        ]);

        $p66 = Product::create([
            'name' => 'KALLAX TV unit, white stained oak effect, 57 3/4x23 1/2 "',
            'price' => 79.99,
            'model_path' => '/models/80562096_PS01_S01_NV01_RQP3_4.0_3888e6aa1f174d25a5184dcfa1622299.glb',
            'is_stackable' => 1,
            'description' => 'A perfect TV bench with plenty of space for equipment and accessories. If you want closed storage, place boxes or inserts in the lower compartments. The open back makes cable management easy!',
            'source' => 'https://www.ikea.com/us/en/p/kallax-tv-unit-white-stained-oak-effect-50574883/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1238899_pe918670_s5.jpg',
            'category_id' => 4,
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1238899_pe918670_s5.jpg',
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1248784_pe923212_s5.jpg',
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1274279_pe930230_s5.jpg',
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1106847_pe868821_s5.jpg',
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1212006_pe910456_s5.jpg',
        ]);

        $p66->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kallax-tv-unit-white-stained-oak-effect__1219453_pe913403_s5.jpg',
        ]);

        $vc18->products()->attach($p64->id);
        $vc18->products()->attach($p65->id);
        $vc18->products()->attach($p66->id);

        $p67 = Product::create([
            'name' => 'DALFRED Bar stool, black, 24 3/4-29 1/8 "',
            'price' => 75.00,
            'model_path' => '/models/60155602_PS01_S01_NV01_RQP3_3.0_10fbcdacd24848b4bebb2a7be702c4f2.glb',
            'is_stackable' => 0,
            'description' => 'You can adjust the height as you like.',
            'source' => 'https://www.ikea.com/us/en/p/dalfred-bar-stool-black-60155602/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0727486_pe735711_s5.jpg',
            'category_id' => 3,
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0727486_pe735711_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0874458_pe595557_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0874439_pe595546_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0874435_pe593537_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0444237_pe594812_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0874414_pe590535_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0874431_pe590863_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__0949790_pe800007_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__1053196_pe846790_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__1053197_pe846791_s5.jpg',
        ]);

        $p67->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/dalfred-bar-stool-black__1223307_pe914598_s5.jpg',
        ]);

        //Measurements
        $p10->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p10->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p10->measurements()->create(['value' => 430,'measurement_type_id' => 12]);
        $p10->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p10->measurements()->create(['value' => 730,'measurement_type_id' => 3]);
        $p10->measurements()->create(['value' => 700,'measurement_type_id' => 2]);

        $p11->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p11->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p11->measurements()->create(['value' => 430,'measurement_type_id' => 12]);
        $p11->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p11->measurements()->create(['value' => 730,'measurement_type_id' => 3]);
        $p11->measurements()->create(['value' => 700,'measurement_type_id' => 2]);

        $p12->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p12->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p12->measurements()->create(['value' => 430,'measurement_type_id' => 12]);
        $p12->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p12->measurements()->create(['value' => 730,'measurement_type_id' => 3]);
        $p12->measurements()->create(['value' => 700,'measurement_type_id' => 2]);

        $p13->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p13->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p13->measurements()->create(['value' => 430,'measurement_type_id' => 12]);
        $p13->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p13->measurements()->create(['value' => 730,'measurement_type_id' => 3]);
        $p13->measurements()->create(['value' => 700,'measurement_type_id' => 2]);

        $p14->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p14->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p14->measurements()->create(['value' => 430,'measurement_type_id' => 12]);
        $p14->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p14->measurements()->create(['value' => 730,'measurement_type_id' => 3]);
        $p14->measurements()->create(['value' => 700,'measurement_type_id' => 2]);

        $p15->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p15->measurements()->create(['value' => 590,'measurement_type_id' => 10]);
        $p15->measurements()->create(['value' => 380,'measurement_type_id' => 12]);
        $p15->measurements()->create(['value' => 740,'measurement_type_id' => 1]);
        $p15->measurements()->create(['value' => 570,'measurement_type_id' => 3]);
        $p15->measurements()->create(['value' => 590,'measurement_type_id' => 2]);

        $p16->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p16->measurements()->create(['value' => 590,'measurement_type_id' => 10]);
        $p16->measurements()->create(['value' => 380,'measurement_type_id' => 12]);
        $p16->measurements()->create(['value' => 740,'measurement_type_id' => 1]);
        $p16->measurements()->create(['value' => 570,'measurement_type_id' => 3]);
        $p16->measurements()->create(['value' => 590,'measurement_type_id' => 2]);

        $p17->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p17->measurements()->create(['value' => 590,'measurement_type_id' => 10]);
        $p17->measurements()->create(['value' => 380,'measurement_type_id' => 12]);
        $p17->measurements()->create(['value' => 740,'measurement_type_id' => 1]);
        $p17->measurements()->create(['value' => 570,'measurement_type_id' => 3]);
        $p17->measurements()->create(['value' => 590,'measurement_type_id' => 2]);

        $p18->measurements()->create(['value' => 540,'measurement_type_id' => 11]);
        $p18->measurements()->create(['value' => 530,'measurement_type_id' => 10]);
        $p18->measurements()->create(['value' => 470,'measurement_type_id' => 12]);
        $p18->measurements()->create(['value' => 960,'measurement_type_id' => 1]);
        $p18->measurements()->create(['value' => 840,'measurement_type_id' => 3]);
        $p18->measurements()->create(['value' => 660,'measurement_type_id' => 2]);

        //

        $p20->measurements()->create(['value' => 400,'measurement_type_id' => 11]);
        $p20->measurements()->create(['value' => 430,'measurement_type_id' => 10]);
        $p20->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p20->measurements()->create(['value' => 790,'measurement_type_id' => 1]);
        $p20->measurements()->create(['value' => 560,'measurement_type_id' => 3]);
        $p20->measurements()->create(['value' => 580,'measurement_type_id' => 2]);

        $p21->measurements()->create(['value' => 500,'measurement_type_id' => 11]);
        $p21->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p21->measurements()->create(['value' => 424,'measurement_type_id' => 12]);
        $p21->measurements()->create(['value' => 724,'measurement_type_id' => 1]);
        $p21->measurements()->create(['value' => 695,'measurement_type_id' => 3]);
        $p21->measurements()->create(['value' => 550,'measurement_type_id' => 2]);

        $p22->measurements()->create(['value' => 500,'measurement_type_id' => 11]);
        $p22->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p22->measurements()->create(['value' => 424,'measurement_type_id' => 12]);
        $p22->measurements()->create(['value' => 724,'measurement_type_id' => 1]);
        $p22->measurements()->create(['value' => 695,'measurement_type_id' => 3]);
        $p22->measurements()->create(['value' => 550,'measurement_type_id' => 2]);

        $p23->measurements()->create(['value' => 500,'measurement_type_id' => 11]);
        $p23->measurements()->create(['value' => 570,'measurement_type_id' => 10]);
        $p23->measurements()->create(['value' => 424,'measurement_type_id' => 12]);
        $p23->measurements()->create(['value' => 724,'measurement_type_id' => 1]);
        $p23->measurements()->create(['value' => 695,'measurement_type_id' => 3]);
        $p23->measurements()->create(['value' => 550,'measurement_type_id' => 2]);

        $p24->measurements()->create(['value' => 540,'measurement_type_id' => 11]);
        $p24->measurements()->create(['value' => 540,'measurement_type_id' => 10]);
        $p24->measurements()->create(['value' => 450,'measurement_type_id' => 12]);
        $p24->measurements()->create(['value' => 970,'measurement_type_id' => 1]);
        $p24->measurements()->create(['value' => 940,'measurement_type_id' => 3]);
        $p24->measurements()->create(['value' => 850,'measurement_type_id' => 2]);

        $p25->measurements()->create(['value' => 540,'measurement_type_id' => 11]);
        $p25->measurements()->create(['value' => 540,'measurement_type_id' => 10]);
        $p25->measurements()->create(['value' => 450,'measurement_type_id' => 12]);
        $p25->measurements()->create(['value' => 970,'measurement_type_id' => 1]);
        $p25->measurements()->create(['value' => 940,'measurement_type_id' => 3]);
        $p25->measurements()->create(['value' => 850,'measurement_type_id' => 2]);

        //

        $p27->measurements()->create(['value' => 1760,'measurement_type_id' => 1]);
        $p27->measurements()->create(['value' => 550,'measurement_type_id' => 3]);
        $p27->measurements()->create(['value' => 1170,'measurement_type_id' => 2]);

        $p28->measurements()->create(['value' => 1760,'measurement_type_id' => 1]);
        $p28->measurements()->create(['value' => 550,'measurement_type_id' => 3]);
        $p28->measurements()->create(['value' => 1170,'measurement_type_id' => 2]);

        $p29->measurements()->create(['value' => 1910,'measurement_type_id' => 1]);
        $p29->measurements()->create(['value' => 600,'measurement_type_id' => 3]);
        $p29->measurements()->create(['value' => 1196,'measurement_type_id' => 2]);

        $p30->measurements()->create(['value' => 1910,'measurement_type_id' => 1]);
        $p30->measurements()->create(['value' => 600,'measurement_type_id' => 3]);
        $p30->measurements()->create(['value' => 1196,'measurement_type_id' => 2]);

        $p31->measurements()->create(['value' => 1760,'measurement_type_id' => 1]);
        $p31->measurements()->create(['value' => 550,'measurement_type_id' => 3]);
        $p31->measurements()->create(['value' => 1170,'measurement_type_id' => 2]);

        $p32->measurements()->create(['value' => 570,'measurement_type_id' => 1]);
        $p32->measurements()->create(['value' => 470,'measurement_type_id' => 3]);
        $p32->measurements()->create(['value' => 1480,'measurement_type_id' => 2]);

        $p33->measurements()->create(['value' => 50000.0,'measurement_type_id' => 4]);
        $p33->measurements()->create(['value' => 570,'measurement_type_id' => 1]);
        $p33->measurements()->create(['value' => 470,'measurement_type_id' => 3]);
        $p33->measurements()->create(['value' => 1480,'measurement_type_id' => 2]);

        $p34->measurements()->create(['value' => 570,'measurement_type_id' => 1]);
        $p34->measurements()->create(['value' => 470,'measurement_type_id' => 3]);
        $p34->measurements()->create(['value' => 1480,'measurement_type_id' => 2]);

        $p35->measurements()->create(['value' => 570,'measurement_type_id' => 1]);
        $p35->measurements()->create(['value' => 470,'measurement_type_id' => 3]);
        $p35->measurements()->create(['value' => 1480,'measurement_type_id' => 2]);

        $p36->measurements()->create(['value' => 50000.0,'measurement_type_id' => 4]);
        $p36->measurements()->create(['value' => 450,'measurement_type_id' => 1]);
        $p36->measurements()->create(['value' => 420,'measurement_type_id' => 3]);
        $p36->measurements()->create(['value' => 1600,'measurement_type_id' => 2]);

        $p37->measurements()->create(['value' => 100000.0,'measurement_type_id' => 4]);
        $p37->measurements()->create(['value' => 490,'measurement_type_id' => 1]);
        $p37->measurements()->create(['value' => 410,'measurement_type_id' => 3]);
        $p37->measurements()->create(['value' => 1800,'measurement_type_id' => 2]);

        //

        $p40->measurements()->create(['value' => 50000.0,'measurement_type_id' => 4]);
        $p40->measurements()->create(['value' => 630,'measurement_type_id' => 1]);
        $p40->measurements()->create(['value' => 400,'measurement_type_id' => 3]);
        $p40->measurements()->create(['value' => 1620,'measurement_type_id' => 2]);
        $p40->measurements()->create(['value' => 300,'measurement_type_id' => 8]);
        $p40->measurements()->create(['value' => 720,'measurement_type_id' => 9]);

        $p41->measurements()->create(['value' => 600,'measurement_type_id' => 1]);
        $p41->measurements()->create(['value' => 375,'measurement_type_id' => 3]);
        $p41->measurements()->create(['value' => 1560,'measurement_type_id' => 2]);

        $p42->measurements()->create(['value' => 600,'measurement_type_id' => 1]);
        $p42->measurements()->create(['value' => 375,'measurement_type_id' => 3]);
        $p42->measurements()->create(['value' => 1560,'measurement_type_id' => 2]);

        //

        $p44->measurements()->create(['value' => 640,'measurement_type_id' => 1]);
        $p44->measurements()->create(['value' => 400,'measurement_type_id' => 3]);
        $p44->measurements()->create(['value' => 1200,'measurement_type_id' => 2]);

        //

        $p47->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p47->measurements()->create(['value' => 590,'measurement_type_id' => 10]);
        $p47->measurements()->create(['value' => 400,'measurement_type_id' => 12]);
        $p47->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p47->measurements()->create(['value' => 750,'measurement_type_id' => 3]);
        $p47->measurements()->create(['value' => 640,'measurement_type_id' => 2]);

        $p48->measurements()->create(['value' => 460,'measurement_type_id' => 11]);
        $p48->measurements()->create(['value' => 590,'measurement_type_id' => 10]);
        $p48->measurements()->create(['value' => 400,'measurement_type_id' => 12]);
        $p48->measurements()->create(['value' => 750,'measurement_type_id' => 1]);
        $p48->measurements()->create(['value' => 750,'measurement_type_id' => 3]);
        $p48->measurements()->create(['value' => 640,'measurement_type_id' => 2]);

        $p49->measurements()->create(['value' => 540,'measurement_type_id' => 11]);
        $p49->measurements()->create(['value' => 540,'measurement_type_id' => 10]);
        $p49->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p49->measurements()->create(['value' => 990,'measurement_type_id' => 1]);
        $p49->measurements()->create(['value' => 860,'measurement_type_id' => 3]);
        $p49->measurements()->create(['value' => 820,'measurement_type_id' => 2]);

        $p50->measurements()->create(['value' => 540,'measurement_type_id' => 11]);
        $p50->measurements()->create(['value' => 540,'measurement_type_id' => 10]);
        $p50->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p50->measurements()->create(['value' => 990,'measurement_type_id' => 1]);
        $p50->measurements()->create(['value' => 860,'measurement_type_id' => 3]);
        $p50->measurements()->create(['value' => 820,'measurement_type_id' => 2]);

        $p51->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p51->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p51->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p51->measurements()->create(['value' => 650,'measurement_type_id' => 3]);
        $p51->measurements()->create(['value' => 730,'measurement_type_id' => 2]);
        $p51->measurements()->create(['value' => 240,'measurement_type_id' => 7]);

        $p52->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p52->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p52->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p52->measurements()->create(['value' => 650,'measurement_type_id' => 3]);
        $p52->measurements()->create(['value' => 730,'measurement_type_id' => 2]);
        $p52->measurements()->create(['value' => 240,'measurement_type_id' => 7]);

        $p53->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p53->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p53->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p53->measurements()->create(['value' => 650,'measurement_type_id' => 3]);
        $p53->measurements()->create(['value' => 730,'measurement_type_id' => 2]);
        $p53->measurements()->create(['value' => 240,'measurement_type_id' => 7]);

        $p54->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p54->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p54->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p54->measurements()->create(['value' => 650,'measurement_type_id' => 3]);
        $p54->measurements()->create(['value' => 730,'measurement_type_id' => 2]);
        $p54->measurements()->create(['value' => 240,'measurement_type_id' => 7]);

        $p55->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p55->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p55->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p55->measurements()->create(['value' => 1080,'measurement_type_id' => 1]);
        $p55->measurements()->create(['value' => 850,'measurement_type_id' => 3]);
        $p55->measurements()->create(['value' => 800,'measurement_type_id' => 2]);

        $p56->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p56->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p56->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p56->measurements()->create(['value' => 1080,'measurement_type_id' => 1]);
        $p56->measurements()->create(['value' => 850,'measurement_type_id' => 3]);
        $p56->measurements()->create(['value' => 800,'measurement_type_id' => 2]);

        $p57->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p57->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p57->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p57->measurements()->create(['value' => 1080,'measurement_type_id' => 1]);
        $p57->measurements()->create(['value' => 850,'measurement_type_id' => 3]);
        $p57->measurements()->create(['value' => 800,'measurement_type_id' => 2]);

        $p58->measurements()->create(['value' => 480,'measurement_type_id' => 11]);
        $p58->measurements()->create(['value' => 450,'measurement_type_id' => 10]);
        $p58->measurements()->create(['value' => 440,'measurement_type_id' => 12]);
        $p58->measurements()->create(['value' => 1080,'measurement_type_id' => 1]);
        $p58->measurements()->create(['value' => 850,'measurement_type_id' => 3]);
        $p58->measurements()->create(['value' => 800,'measurement_type_id' => 2]);

        $p59->measurements()->create(['value' => 440,'measurement_type_id' => 1]);
        $p59->measurements()->create(['value' => 320,'measurement_type_id' => 3]);
        $p59->measurements()->create(['value' => 970,'measurement_type_id' => 2]);

        $p60->measurements()->create(['value' => 530,'measurement_type_id' => 1]);
        $p60->measurements()->create(['value' => 360,'measurement_type_id' => 3]);
        $p60->measurements()->create(['value' => 1000,'measurement_type_id' => 2]);

        $p61->measurements()->create(['value' => 530,'measurement_type_id' => 1]);
        $p61->measurements()->create(['value' => 360,'measurement_type_id' => 3]);
        $p61->measurements()->create(['value' => 1000,'measurement_type_id' => 2]);

        //

        $p67->measurements()->create(['value' => 500,'measurement_type_id' => 3]);
        $p67->measurements()->create(['value' => 500,'measurement_type_id' => 2]);
        $p67->measurements()->create(['value' => 100.0,'measurement_type_id' => 13]);

        // $p68 = Product::create([
        //     'name' => '',
        //     'price' => 129.99,
        //     'model_path' => '',
        //     'is_stackable' => 1,
        //     'description' => '',
        //     'source' => '',
        //      'category_id' => 4,
        // ]);

        // $p67 = Product::create([
        //     'name' => '',
        //     'price' => 129.99,
        //     'model_path' => '',
        //     'is_stackable' => 1,
        //     'description' => '',
        //     'source' => '',
        //         'category_id' => 4,
        // ]);

        // $p10->images()->create([
        //     'image_url' => '',
        //      => ''
        // ]);

        //Lighting
        $p70096377 = Product::create([
			'name' => 'FADO Table lamp, white, 10 "',
			'price' => 29.99,
			'model_path' => '/models/70096377_PS01_S01_NV01_RQP3_3.0_4da2db5127fd48da9426be161b8c9729.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with clean lines that can spread soft and cozy mood lighting when darkness falls? This large decorative globe in white glass is a perfect choice.',
			'source' => 'https://www.ikea.com/us/en/p/fado-table-lamp-white-70096377/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0606976_pe682645_s5.jpg',
			'category_id' => 16,
		]);

		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0606976_pe682645_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0879252_pe614411_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0340391_pe217413_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__1061714_ph177857_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__1158342_pe888106_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0969841_ph174718_s5.jpg' ]);
		$p70096377->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fado-table-lamp-white__0176843_pe267072_s5.jpg' ]);


		$p10356189 = Product::create([
			'name' => 'TRÅDFRI Driver for wireless control, smart gray, 10 W',
			'price' => 32.0,
			'model_path' => '/models/10356189_PS01_S01_NV01_RQP3_3.0_56d337a8eec54693b6cb21c8c126a8cb.glb',
			'is_stackable' => 0,
			'description' => 'Now it\'s really easy for anyone to use smart lighting. This driver allows you to connect your integrated lighting from IKEA – turn on, turn off and dim so you always have the right light and mood at home.',
			'source' => 'https://www.ikea.com/us/en/p/tradfri-driver-for-wireless-control-smart-gray-10356189/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0587550_pe672682_s5.jpg',
			'category_id' => 16,
		]);

		$p10356189->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0587550_pe672682_s5.jpg' ]);
		$p10356189->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0587556_pe672684_s5.jpg' ]);
		$p10356189->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0881937_pe662108_s5.jpg' ]);
		$p10356189->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__1053715_pe847150_s5.jpg' ]);


		$p70437814 = Product::create([
			'name' => 'BARLAST Floor lamp, black/white, 59 "',
			'price' => 7.99,
			'model_path' => '/models/10430368_PS01_S01_NV01_RQP3_3.0_53c74d2a5a434f3493c972e25e23aa89.glb',
			'is_stackable' => 0,
			'description' => 'This floor lamp with a clean design assembles in a flash. And since the packaging is compact, we can fit many on the same pallet. Good for the environment – and one of the reasons behind the low price.',
			'source' => 'https://www.ikea.com/us/en/p/barlast-floor-lamp-black-white-70437814/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-black-white__0957676_pe805130_s5.jpg',
			'category_id' => 16,
		]);

		$p70437814->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-black-white__0957676_pe805130_s5.jpg' ]);
		$p70437814->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-black-white__0957678_pe805133_s5.jpg' ]);
		$p70437814->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-black-white__0957677_pe805131_s5.jpg' ]);
		$p70437814->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-black-white__0959617_pe806101_s5.jpg' ]);


		$p80358019 = Product::create([
			'name' => 'TOKABO Table lamp, glass opal',
			'price' => 17.99,
			'model_path' => '/models/40357998_PS01_S01_NV01_RQP3_3.0_8b78f846156f4f37a93f5768aebc16e9.glb',
			'is_stackable' => 0,
			'description' => 'This cute little table lamp in coloured glass enhances the mood throughout the home – and fits on the smallest shelf or table top.',
			'source' => 'https://www.ikea.com/us/en/p/tokabo-table-lamp-glass-opal-80358019/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-glass-opal__0714489_pe730101_s5.jpg',
			'category_id' => 16,
		]);

		$p80358019->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-glass-opal__0714489_pe730101_s5.jpg' ]);
		$p80358019->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-glass-opal__0701671_pe724202_s5.jpg' ]);
		$p80358019->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-glass-opal__0779179_ph161797_s5.jpg' ]);
		$p80358019->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-glass-opal__0881021_pe730108_s5.jpg' ]);


		$vc60280639 = VariationCollection::create();

		$p60280639 = Product::create([
			'name' => 'ÅRSTID Table lamp, nickel plated/white',
			'price' => 29.99,
			'model_path' => '/models/G-70280634-9e174064257be1a9ce4b9def6cd966a4a4fe6da5_0db7fb8490fe44c9a7e8cb99d9c9662b.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-table-lamp-nickel-plated-white-60280639/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0609332_pe684455_s5.jpg',
			'category_id' => 16,
		]);

		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0609332_pe684455_s5.jpg' ]);
		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0340623_pe222478_s5.jpg' ]);
		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0178304_pe317585_s5.jpg' ]);
		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0178305_pe244171_s5.jpg' ]);
		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0880604_pe617345_s5.jpg' ]);
		$p60280639->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-nickel-plated-white__0880598_pe614456_s5.jpg' ]);

		$p80321380 = Product::create([
			'name' => 'ÅRSTID Table lamp, brass/white',
			'price' => 29.99,
			'model_path' => '/models/30321373_PS01_S01_NV01_RQP3_4.0_2a966f421b164ceba74767beb81b492a.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-table-lamp-brass-white-80321380/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0609329_pe684454_s5.jpg',
			'category_id' => 16,
		]);

		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0609329_pe684454_s5.jpg' ]);
		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0880725_pe617347_s5.jpg' ]);
		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0467338_ph132229_s5.jpg' ]);
		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0579912_ph145270_s5.jpg' ]);
		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0880709_pe614460_s5.jpg' ]);
		$p80321380->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-brass-white__0963368_ph170137_s5.jpg' ]);

		$vc60280639->products()->attach($p60280639->id);
		$vc60280639->products()->attach($p80321380->id);

		$p60464049 = Product::create([
			'name' => 'TÅGARP Floor uplighter, black/white',
			'price' => 9.49,
			'model_path' => '/models/20404095_PS01_S01_NV01_RQP3_3.0_8f910778e4d6414f8413a3af550b2ed1.glb',
			'is_stackable' => 0,
			'description' => 'TÅGARP floor uplight illuminates upwards and spreads a diffused, pleasant light around a room. Parts of the lamp are also made of recycled plastic – a good choice for our climate, at an unbeatable price.',
			'source' => 'https://www.ikea.com/us/en/p/tagarp-floor-uplighter-black-white-60464049/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-black-white__0810840_pe771436_s5.jpg',
			'category_id' => 16,
		]);

		$p60464049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-black-white__0810840_pe771436_s5.jpg' ]);
		$p60464049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-black-white__0810839_pe771437_s5.jpg' ]);
		$p60464049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-black-white__0967780_pe810282_s5.jpg' ]);


		$p50437773 = Product::create([
			'name' => 'SIMRISHAMN Floor lamp, chrome plated/opal glass',
			'price' => 109.99,
			'model_path' => '/models/10437765_PS01_S01_NV01_RQP3_4.0_5df9d4416278407ba149a547d500b901.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-floor-lamp-chrome-plated-opal-glass-50437773/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0789445_pe763989_s5.jpg',
			'category_id' => 16,
		]);

		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0789445_pe763989_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0934536_ph168507_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0789443_pe763988_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0959552_pe806078_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0789444_pe763990_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0939849_ph171795_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0807550_pe770426_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p50437773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-floor-lamp-chrome-plated-opal-glass__0963363_ph170744_s5.jpg' ]);


		$vc00404925 = VariationCollection::create();

		$p40404914 = Product::create([
			'name' => 'NÄVLINGE LED work lamp, black',
			'price' => 21.99,
			'model_path' => '/models/80404422_PS01_S01_NV01_RQP3_3.0_04c8782c6c884786afab2f2259f3fbdf.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-work-lamp-black-40404914/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__0709827_pe727109_s5.jpg',
			'category_id' => 16,
		]);

		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__0709827_pe727109_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1286171_pe933454_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1286179_pe933461_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1185820_ph181156_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1102145_pe866546_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1056159_pe857769_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__0725890_pe735087_s5.jpg' ]);
		$p40404914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-black__1197814_ph190419_s5.jpg' ]);

		$p00404925 = Product::create([
			'name' => 'NÄVLINGE LED work lamp, white',
			'price' => 21.99,
			'model_path' => '/models/50404918_PS01_S01_NV01_RQP3_3.0_2500a0876c1749238906d189864c4e7a.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-work-lamp-white-00404925/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__0709828_pe727111_s5.jpg',
			'category_id' => 16,
		]);

		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__0709828_pe727111_s5.jpg' ]);
		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__1286173_pe933455_s5.jpg' ]);
		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__0725894_pe735090_s5.jpg' ]);
		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__1286172_pe933456_s5.jpg' ]);
		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__1020951_ph177017_s5.jpg' ]);
		$p00404925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-work-lamp-white__0929303_ph168770_s5.jpg' ]);

		$vc00404925->products()->attach($p40404914->id);
		$vc00404925->products()->attach($p00404925->id);

		$vc50163867 = VariationCollection::create();

		$p60321324 = Product::create([
			'name' => 'ÅRSTID Floor lamp, brass/white',
			'price' => 64.99,
			'model_path' => '/models/G-00321317-2b0cd8a4a0ea7b9c45c9b9a16700251b38fdf2f9_1d1d659ce8df43848f0545eca80a9e84.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-floor-lamp-brass-white-60321324/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0390610_pe566328_s5.jpg',
			'category_id' => 16,
		]);

		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0390610_pe566328_s5.jpg' ]);
		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0747835_ph156736_s5.jpg' ]);
		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0879662_pe671329_s5.jpg' ]);
		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0879656_pe614370_s5.jpg' ]);
		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0812946_ph164458_s5.jpg' ]);
		$p60321324->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-brass-white__0879649_pe611363_s5.jpg' ]);

		$p50163867 = Product::create([
			'name' => 'ÅRSTID Floor lamp, nickel plated/white',
			'price' => 64.99,
			'model_path' => '/models/G-60163862-db22c39763fbc0d7f8f25b31c9e9ebf140b3ebe7_1841988d60f94656b504cafa26a39d37.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-floor-lamp-nickel-plated-white-50163867/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0684004_pe720967_s5.jpg',
			'category_id' => 16,
		]);

		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0684004_pe720967_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0880131_pe613639_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0880137_pe614362_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0179010_pe304314_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0387917_pe333917_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0880121_pe611359_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0387918_pe365493_s5.jpg' ]);
		$p50163867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-nickel-plated-white__0459993_ph132978_s5.jpg' ]);

		$vc50163867->products()->attach($p60321324->id);
		$vc50163867->products()->attach($p50163867->id);

		$vc20547985 = VariationCollection::create();

		$p20547985 = Product::create([
			'name' => 'BLÅSVERK Table lamp, yellow, 14 "',
			'price' => 17.99,
			'model_path' => '/models/60547974_PS01_S01_NV01_RQP3_3.0_eb063e5b50a448a1ac886ab0fc4387ab.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-yellow-20547985/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1217784_pe913021_s5.jpg',
			'category_id' => 16,
		]);

		$p20547985->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1217784_pe913021_s5.jpg' ]);
		$p20547985->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1173852_pe894338_s5.jpg' ]);
		$p20547985->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1173851_pe894337_s5.jpg' ]);
		$p20547985->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1217785_pe913022_s5.jpg' ]);
		$p20547985->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-yellow__1235836_ph193142_s5.jpg' ]);

		$p80520935 = Product::create([
			'name' => 'BLÅSVERK Table lamp, beige, 14 "',
			'price' => 17.99,
			'model_path' => '/models/70520926_PS01_S01_NV01_RQP3_3.0_1cc5dd56e419407b8ed4cdf2a4d1faaf.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-beige-80520935/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1150245_pe884435_s5.jpg',
			'category_id' => 16,
		]);

		$p80520935->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1150245_pe884435_s5.jpg' ]);
		$p80520935->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1153017_pe885551_s5.jpg' ]);
		$p80520935->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1153008_pe885547_s5.jpg' ]);
		$p80520935->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1150618_pe884634_s5.jpg' ]);
		$p80520935->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-beige__1191496_pe900639_s5.jpg' ]);

		$p80520921 = Product::create([
			'name' => 'BLÅSVERK Table lamp, blue, 14 "',
			'price' => 17.99,
			'model_path' => '/models/60501259_PS01_S01_NV01_RQP3_3.0_0a0dda606c7d4aafb67eb587b9a7c983.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-blue-80520921/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-blue__1172136_pe893259_s5.jpg',
			'category_id' => 16,
		]);

		$p80520921->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-blue__1172136_pe893259_s5.jpg' ]);
		$p80520921->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-blue__1173847_pe894336_s5.jpg' ]);
		$p80520921->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-blue__1173848_pe894335_s5.jpg' ]);
		$p80520921->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-blue__1173846_pe894334_s5.jpg' ]);

		$vc20547985->products()->attach($p20547985->id);
		$vc20547985->products()->attach($p80520935->id);
		$vc20547985->products()->attach($p80520921->id);

		$vc20449895 = VariationCollection::create();

		$p20449895 = Product::create([
			'name' => 'NÄVLINGE LED clamp spotlight, white',
			'price' => 19.99,
			'model_path' => '/models/70449888_PS01_S01_NV01_RQP3_3.0_bcca05916cb44eb7a7385652143291e6.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-clamp-spotlight-white-20449895/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__0710474_pe727575_s5.jpg',
			'category_id' => 16,
		]);

		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__0710474_pe727575_s5.jpg' ]);
		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__0913978_ph167277_s5.jpg' ]);
		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__1185809_ph185947_s5.jpg' ]);
		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__0726711_pe735399_s5.jpg' ]);
		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__1272340_pe929679_s5.jpg' ]);
		$p20449895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-white__0725894_pe735090_s5.jpg' ]);

		$p30449885 = Product::create([
			'name' => 'NÄVLINGE LED clamp spotlight, black',
			'price' => 19.99,
			'model_path' => '/models/00449877_PS01_S01_NV01_RQP3_3.0_7c9a01b0ed634cff8f8bf90c926b8c6c.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-clamp-spotlight-black-30449885/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__0710473_pe727574_s5.jpg',
			'category_id' => 16,
		]);

		$p30449885->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__0710473_pe727574_s5.jpg' ]);
		$p30449885->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__1092002_ph179977_s5.jpg' ]);
		$p30449885->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__0725890_pe735087_s5.jpg' ]);
		$p30449885->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__1272339_pe929678_s5.jpg' ]);
		$p30449885->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-clamp-spotlight-black__0726701_pe735392_s5.jpg' ]);

		$vc20449895->products()->attach($p20449895->id);
		$vc20449895->products()->attach($p30449885->id);

		$p90504567 = Product::create([
			'name' => 'BARLAST Table lamp, black/white, 12 "',
			'price' => 5.99,
			'model_path' => '/models/G-00504557-fd7f6777e226890ea23a4a0a58add56682645a08_238e6902b37947c7a1c07a674f1e2db5.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp with a clean design assembles in a flash. And since the packaging is compact, we can fit many on the same pallet. Good for the environment – and one of the reasons behind the low price.',
			'source' => 'https://www.ikea.com/us/en/p/barlast-table-lamp-black-white-90504567/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__1032422_pe836908_s5.jpg',
			'category_id' => 16,
		]);

		$p90504567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__1032422_pe836908_s5.jpg' ]);
		$p90504567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__1032423_pe836911_s5.jpg' ]);
		$p90504567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__1032425_pe836909_s5.jpg' ]);
		$p90504567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__1032424_pe836910_s5.jpg' ]);
		$p90504567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-black-white__0959617_pe806101_s5.jpg' ]);


		$p10455434 = Product::create([
			'name' => 'MITTLED LED kitchen cntrtp lighting strip, dimmable white, 15 "',
			'price' => 19.99,
			'model_path' => '/models/10455434_PS01_S01_NV01_RQP3_3.0_0aaa4d18fda34f9f9afab2263e05c0de.glb',
			'is_stackable' => 0,
			'description' => 'The lighting enhances both function and atmosphere in your kitchen and makes working in the kitchen less of a chore. Easy to install – no electrician needed.',
			'source' => 'https://www.ikea.com/us/en/p/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white-10455434/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0869934_pe781529_s5.jpg',
			'category_id' => 16,
		]);

		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0869934_pe781529_s5.jpg' ]);
		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0994627_ph174639_s5.jpg' ]);
		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0994644_ph172034_s5.jpg' ]);
		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0963985_pe808837_s5.jpg' ]);
		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0963984_pe808838_s5.jpg' ]);
		$p10455434->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/mittled-led-kitchen-cntrtp-lighting-strip-dimmable-white__0994621_ph174658_s5.jpg' ]);

		$p60518410 = Product::create([
			'name' => 'TVÄRHAND Table lamp, black/bamboo',
			'price' => 21.99,
			'model_path' => '/models/90510894_PS01_S01_NV01_RQP3_3.0_4e4152bcbfcd4689bda17d1df4eeb37e.glb',
			'is_stackable' => 0,
			'description' => 'In simplicity lives beauty. A fitting expression for this table lamp in curved metal with a bamboo base as a nice contrast. Add a decorative light bulb that you like to make it complete.',
			'source' => 'https://www.ikea.com/us/en/p/tvaerhand-table-lamp-black-bamboo-60518410/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-black-bamboo__1013660_pe829291_s5.jpg',
			'category_id' => 16,
		]);

		$p60518410->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-black-bamboo__1013660_pe829291_s5.jpg' ]);
		$p60518410->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-black-bamboo__1013683_pe829292_s5.jpg' ]);
		$p60518410->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-black-bamboo__1013687_pe829293_s5.jpg' ]);
		$p60518410->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-black-bamboo__1013695_pe829296_s5.jpg' ]);


		$p10309206 = Product::create([
			'name' => 'VIDJA Floor lamp, white, 54 "',
			'price' => 59.99,
			'model_path' => '/models/G-00309198-473e6191aea6560e37e9c5c4f8eccc0f70f5862a_8e9f118562b14434ac758fdce0678bfd.glb',
			'is_stackable' => 0,
			'description' => 'Decorative floor lamp that spreads a soft and warm light in the room through the tube-shaped white textile shade. Just as nice in the living room as in the hallway or bedroom to create a cosy atmosphere.',
			'source' => 'https://www.ikea.com/us/en/p/vidja-floor-lamp-white-10309206/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-white__0606512_pe682388_s5.jpg',
			'category_id' => 16,
		]);

		$p10309206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-white__0606512_pe682388_s5.jpg' ]);
		$p10309206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-white__0953648_pe802865_s5.jpg' ]);
		$p10309206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-white__0879628_pe611326_s5.jpg' ]);
		$p10309206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-white__0879632_pe611371_s5.jpg' ]);


		$vc30266989 = VariationCollection::create();

		$p90238267 = Product::create([
			'name' => 'HÅRTE LED work lamp, white/silver color',
			'price' => 19.99,
			'model_path' => '/models/10238271_PS01_S01_NV01_RQP3_4.0_2acff4522fc941e09aa9c8d065f1bace.glb',
			'is_stackable' => 0,
			'description' => 'You can choose to power it via the USB port on your computer and direct the light up or down. Made from bent metal pipe, the minimalist yet playful expression is easy to place. Clever through and through.',
			'source' => 'https://www.ikea.com/us/en/p/harte-led-work-lamp-white-silver-color-90238267/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0243818_pe383097_s5.jpg',
			'category_id' => 16,
		]);

		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0243818_pe383097_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0386994_ph122609_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0880609_pe614070_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0880618_pe615837_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0386995_ph118972_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0880612_pe614413_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0880615_pe614886_s5.jpg' ]);
		$p90238267->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-white-silver-color__0386993_ph122612_s5.jpg' ]);

		$p30266989 = Product::create([
			'name' => 'HÅRTE LED work lamp, black/silver color',
			'price' => 19.99,
			'model_path' => '/models/40266984_PS01_S01_NV01_RQP3_3.0_7a6223c339fe455ba945efbdef15450f.glb',
			'is_stackable' => 0,
			'description' => 'You can choose to power it via the USB port on your computer and direct the light up or down. Made from bent metal pipe, the minimalist yet playful expression is easy to place. Clever through and through.',
			'source' => 'https://www.ikea.com/us/en/p/harte-led-work-lamp-black-silver-color-30266989/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0683780_pe720869_s5.jpg',
			'category_id' => 16,
		]);

		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0683780_pe720869_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0881091_pe615834_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0881073_pe614412_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__1286170_pe933453_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0433708_ph129355_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0990346_pe818875_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__1057757_ph177717_s5.jpg' ]);
		$p30266989->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harte-led-work-lamp-black-silver-color__0881075_pe614878_s5.jpg' ]);

		$vc30266989->products()->attach($p90238267->id);
		$vc30266989->products()->attach($p30266989->id);

		$p30381606 = Product::create([
			'name' => 'FUBBLA LED wall lamp, white',
			'price' => 29.99,
			'model_path' => '/models/00381599_PS01_S01_NV01_RQP3_3.0_637303261e684e13a910bd6ba70fe204.glb',
			'is_stackable' => 0,
			'description' => 'Playfully simple to dim for a cozier light after the bedtime stories. Our children’s lighting products go through some of the toughest safety tests in the world so you can be sure your child is safe.',
			'source' => 'https://www.ikea.com/us/en/p/fubbla-led-wall-lamp-white-30381606/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0607991_pe683401_s5.jpg',
			'category_id' => 16,
		]);

		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0607991_pe683401_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0883405_pe643458_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0883372_pe643454_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0883377_pe643455_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0730606_ph158447_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0883397_pe643456_s5.jpg' ]);
		$p30381606->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-wall-lamp-white__0883401_pe643457_s5.jpg' ]);


		$vc00331383 = VariationCollection::create();

		$p00331383 = Product::create([
			'name' => 'RANARP Floor/reading lamp, black',
			'price' => 69.99,
			'model_path' => '/models/90331374_PS01_S01_NV01_RQP3_3.0_4defe2ed3ef64e84aca2c2e9758305ba.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-floor-reading-lamp-black-00331383/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0606896_pe682604_s5.jpg',
			'category_id' => 16,
		]);

		$p00331383->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0606896_pe682604_s5.jpg' ]);
		$p00331383->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0570380_ph145743_s5.jpg' ]);
		$p00331383->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0879706_pe611377_s5.jpg' ]);
		$p00331383->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0879709_pe613620_s5.jpg' ]);
		$p00331383->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-black__0879712_pe614349_s5.jpg' ]);

		$p90231303 = Product::create([
			'name' => 'RANARP Floor/reading lamp, off-white',
			'price' => 69.99,
			'model_path' => '/models/20231306_PS01_S01_NV01_RQP3_3.0_63f2d88871bf4611a68ae32a3dfa658e.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-floor-reading-lamp-off-white-90231303/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0606895_pe682605_s5.jpg',
			'category_id' => 16,
		]);

		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0606895_pe682605_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0880108_pe654345_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0963361_ph170885_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0459990_ph132808_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0880105_pe614357_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0281506_pe383260_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__1127978_ph185859_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0249394_pe387920_s5.jpg' ]);
		$p90231303->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-off-white__0880101_pe613630_s5.jpg' ]);

		$vc00331383->products()->attach($p00331383->id);
		$vc00331383->products()->attach($p90231303->id);

		$vc10331392 = VariationCollection::create();

		$p50231319 = Product::create([
			'name' => 'RANARP Work lamp, off-white',
			'price' => 44.99,
			'model_path' => '/models/30231315_PS01_S01_NV01_RQP3_3.0_11ce10ed75db4c51b414c17c0dbe48e2.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-work-lamp-off-white-50231319/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__0610455_pe685514_s5.jpg',
			'category_id' => 16,
		]);

		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__0610455_pe685514_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__1286238_pe933511_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__1286237_pe933512_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__1367015_ph186366_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__0879612_pe614451_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__0880101_pe613630_s5.jpg' ]);
		$p50231319->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-off-white__0408782_ph129000_s5.jpg' ]);

		$p10331392 = Product::create([
			'name' => 'RANARP Work lamp, black',
			'price' => 44.99,
			'model_path' => '/models/50331385_PS01_S01_NV01_RQP3_3.0_8a4a3e001b8b46d5abb78a2db9d089ff.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-work-lamp-black-10331392/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0610458_pe685517_s5.jpg',
			'category_id' => 16,
		]);

		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0610458_pe685517_s5.jpg' ]);
		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0879091_pe614089_s5.jpg' ]);
		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0579957_ph145809_s5.jpg' ]);
		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0879107_pe614887_s5.jpg' ]);
		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0879712_pe614349_s5.jpg' ]);
		$p10331392->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-black__0879099_pe614455_s5.jpg' ]);

		$vc10331392->products()->attach($p50231319->id);
		$vc10331392->products()->attach($p10331392->id);

		$p40437684 = Product::create([
			'name' => 'SIMRISHAMN Table lamp, chrome plated/opal glass, 17 "',
			'price' => 57.99,
			'model_path' => '/models/G-00437676-17f759bf8fe998f54f028573a6244572fb58e095_03182e8a3e6342be8e2b71c0e7b69245.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-table-lamp-chrome-plated-opal-glass-40437684/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0789483_pe763998_s5.jpg',
			'category_id' => 16,
		]);

		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0789483_pe763998_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__1028256_ph177468_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0888340_ph168817_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0789496_pe764046_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__1197806_ph190313_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0939858_ph172087_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0807550_pe770426_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0934537_ph168508_s5.jpg' ]);
		$p40437684->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-chrome-plated-opal-glass__0818893_pe774641_s5.jpg' ]);


		$p20055421 = Product::create([
			'name' => 'LAMPAN Table lamp, white, 11 "',
			'price' => 6.99,
			'model_path' => '/models/20055421_PS01_S01_NV01_RQP3_3.0_5ca6cab29dba455794e924c55fa5cefa.glb',
			'is_stackable' => 0,
			'description' => 'We did everything to keep the price down – we even skipped the box packaging. The distinct design is easy to place and will make any dark corner of your home warm and inviting.',
			'source' => 'https://www.ikea.com/us/en/p/lampan-table-lamp-white-20055421/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0459937_pe606395_s5.jpg',
			'category_id' => 16,
		]);

		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0459937_pe606395_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0879285_pe632935_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0390702_pe219031_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0390700_pe214100_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0177096_pe245534_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__0879279_pe614443_s5.jpg' ]);
		$p20055421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-white__1158339_pe888103_s5.jpg' ]);


		$p00357009 = Product::create([
			'name' => 'NYMÅNE Wall lamp with swing arm, white',
			'price' => 44.99,
			'model_path' => '/models/G-40356908-6969bd625784efda1e691e61bb6952d8851a2852_16d1fb52a92e42f4b52382608d39d2b5.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-wall-lamp-with-swing-arm-white-00357009/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0556038_pe660479_s5.jpg',
			'category_id' => 16,
		]);

		$p00357009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0556038_pe660479_s5.jpg' ]);
		$p00357009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0879134_pe660478_s5.jpg' ]);
		$p00357009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0888610_ph162588_s5.jpg' ]);
		$p00357009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0916692_ph168330_s5.jpg' ]);
		$p00357009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-white__0879146_pe672121_s5.jpg' ]);


		$p70216544 = Product::create([
			'name' => 'HEKTAR Floor lamp, dark gray',
			'price' => 74.99,
			'model_path' => '/models/00215307_PS01_S01_NV01_RQP3_3.0_1e14c582c8714fbe8fd4ed9665d611df.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-floor-lamp-dark-gray-70216544/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-floor-lamp-dark-gray__0149974_pe308131_s5.jpg',
			'category_id' => 16,
		]);

		$p70216544->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-floor-lamp-dark-gray__0149974_pe308131_s5.jpg' ]);
		$p70216544->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-floor-lamp-dark-gray__1257893_pe926087_s5.jpg' ]);
		$p70216544->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-floor-lamp-dark-gray__1257894_pe926086_s5.jpg' ]);
		$p70216544->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-floor-lamp-dark-gray__0879558_pe613642_s5.jpg' ]);


		$p20533441 = Product::create([
			'name' => 'BYGGKORN Floor lamp, black/white',
			'price' => 34.99,
			'model_path' => '/models/90533433_PS01_S01_NV01_RQP3_3.0_8f0d76ba0d9e434e82e74952b3331a6c.glb',
			'is_stackable' => 0,
			'description' => 'A design with clean lines, a soft and diffused light – and a low price. BYGGKORN floor lamp that really delivers. Also, isn\'t it extra brilliant that some of the shade’s plastic is recycled?',
			'source' => 'https://www.ikea.com/us/en/p/byggkorn-floor-lamp-black-white-20533441/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-black-white__1154344_pe886000_s5.jpg',
			'category_id' => 16,
		]);

		$p20533441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-black-white__1154344_pe886000_s5.jpg' ]);
		$p20533441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-black-white__1154374_pe886011_s5.jpg' ]);
		$p20533441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-black-white__1154363_pe886345_s5.jpg' ]);
		$p20533441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-black-white__1154359_pe886349_s5.jpg' ]);


		$p40222339 = Product::create([
			'name' => 'KNUBBIG Table lamp, cherry-blossoms white, 7 "',
			'price' => 22.99,
			'model_path' => '/models/00221596_PS01_S01_NV01_RQP3_3.0_44da934a3879463d80d724df263fea85.glb',
			'is_stackable' => 0,
			'description' => 'When you turn this small table lamp on, a cozy light spreads while lots of white cherry blossoms appear. A discreet detail that matches the white glass and adds a nice touch to the décor of the room.',
			'source' => 'https://www.ikea.com/us/en/p/knubbig-table-lamp-cherry-blossoms-white-40222339/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0609349_pe684470_s5.jpg',
			'category_id' => 16,
		]);

		$p40222339->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0609349_pe684470_s5.jpg' ]);
		$p40222339->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0177040_pe291204_s5.jpg' ]);
		$p40222339->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0880584_pe614439_s5.jpg' ]);
		$p40222339->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0177280_pe276843_s5.jpg' ]);
		$p40222339->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/knubbig-table-lamp-cherry-blossoms-white__0369297_pe218164_s5.jpg' ]);


		$vc70437828 = VariationCollection::create();

		$p70437828 = Product::create([
			'name' => 'UPPVIND Floor lamp, nickel plated/white, 59 "',
			'price' => 129.99,
			'model_path' => '/models/20437821_PS01_S01_NV01_RQP3_3.0_817b60089f454b84ace316f4aed06b33.glb',
			'is_stackable' => 0,
			'description' => 'Shaped like a shiny tuning fork topped with a slim oval shade, this sturdy floor lamp catches the eye and spreads a soft, decorative light wherever you choose to place it.',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-floor-lamp-nickel-plated-white-70437828/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-nickel-plated-white__0957613_pe805083_s5.jpg',
			'category_id' => 16,
		]);

		$p70437828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-nickel-plated-white__0957613_pe805083_s5.jpg' ]);
		$p70437828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-nickel-plated-white__0957615_pe805084_s5.jpg' ]);
		$p70437828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-nickel-plated-white__1116039_ph181364_s5.jpg' ]);
		$p70437828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-nickel-plated-white__0957614_pe805082_s5.jpg' ]);

		$p70488295 = Product::create([
			'name' => 'UPPVIND Floor lamp, brass plated/white, 59 "',
			'price' => 129.99,
			'model_path' => '/models/50483152_PS01_S01_NV01_RQP3_3.0_2564aca81dad401ab05b0c42ef13a64c.glb',
			'is_stackable' => 0,
			'description' => 'Shaped like a shiny tuning fork topped with a slim oval shade, this sturdy floor lamp catches the eye and spreads a soft, decorative light wherever you choose to place it.',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-floor-lamp-brass-plated-white-70488295/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-brass-plated-white__0957412_pe804984_s5.jpg',
			'category_id' => 16,
		]);

		$p70488295->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-brass-plated-white__0957412_pe804984_s5.jpg' ]);
		$p70488295->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-brass-plated-white__0957413_pe804986_s5.jpg' ]);
		$p70488295->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-brass-plated-white__0957414_pe804985_s5.jpg' ]);

		$vc70437828->products()->attach($p70437828->id);
		$vc70437828->products()->attach($p70488295->id);

		$vc10360087 = VariationCollection::create();

		$p50360090 = Product::create([
			'name' => 'STÖTTA LED cabinet lighting strip w sensor, battery operated white, 20 "',
			'price' => 19.99,
			'model_path' => '/models/50360090_PS01_S01_NV01_RQP3_3.0_32822fc616cc4debaf2d5b77c7fac925.glb',
			'is_stackable' => 0,
			'description' => 'The simplest way to light up your wardrobe without waking your partner in the morning. A soft light switches on as you open the door. It’s battery-operated, so you don’t have to deal with cords.',
			'source' => 'https://www.ikea.com/us/en/p/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white-50360090/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637303_pe698226_s5.jpg',
			'category_id' => 16,
		]);

		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637303_pe698226_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0798010_ph163878_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881865_pe698232_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0973839_ph161948_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0730610_ph156855_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881864_pe698201_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0973833_pe812139_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0737536_pe698202_s5.jpg' ]);
		$p50360090->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881863_pe698200_s5.jpg' ]);

		$p10360087 = Product::create([
			'name' => 'STÖTTA LED cabinet lighting strip w sensor, battery operated white, 13 "',
			'price' => 14.99,
			'model_path' => '/models/10360087_PS01_S01_NV01_RQP3_3.0_27f968f748234fa4b00c1a26417564c3.glb',
			'is_stackable' => 0,
			'description' => 'The simplest way to light up your wardrobe without waking your partner in the morning. A soft light switches on as you open the door. It’s battery-operated, so you don’t have to deal with cords.',
			'source' => 'https://www.ikea.com/us/en/p/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white-10360087/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637301_pe698224_s5.jpg',
			'category_id' => 16,
		]);

		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637301_pe698224_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881865_pe698232_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0798321_ph161884_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881864_pe698201_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0737536_pe698202_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0973832_pe812138_s5.jpg' ]);
		$p10360087->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881863_pe698200_s5.jpg' ]);

		$p90360093 = Product::create([
			'name' => 'STÖTTA LED cabinet lighting strip w sensor, battery operated white, 28 "',
			'price' => 21.99,
			'model_path' => '/models/90360093_PS01_S01_NV01_RQP3_3.0_7eb4caf298a24e41b0c7e63f86a0816a.glb',
			'is_stackable' => 0,
			'description' => 'The simplest way to light up your wardrobe without waking your partner in the morning. A soft light switches on as you open the door. It’s battery-operated, so you don’t have to deal with cords.',
			'source' => 'https://www.ikea.com/us/en/p/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white-90360093/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637305_pe698225_s5.jpg',
			'category_id' => 16,
		]);

		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0637305_pe698225_s5.jpg' ]);
		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881865_pe698232_s5.jpg' ]);
		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0737536_pe698202_s5.jpg' ]);
		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881864_pe698201_s5.jpg' ]);
		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0973823_ph161544_s5.jpg' ]);
		$p90360093->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stoetta-led-cabinet-lighting-strip-w-sensor-battery-operated-white__0881863_pe698200_s5.jpg' ]);

		$vc10360087->products()->attach($p50360090->id);
		$vc10360087->products()->attach($p10360087->id);
		$vc10360087->products()->attach($p90360093->id);

		$p10505698 = Product::create([
			'name' => 'KALLBLIXT Wall lamp, white glass',
			'price' => 27.99,
			'model_path' => '/models/90497996_PS01_S01_NV01_RQP3_3.0_7dd030ef40ea423cb3e26baba8a844e5.glb',
			'is_stackable' => 0,
			'description' => 'Wall lamp with a timeless, simple shape that is suitible for most homes. Made of mouth-blown glass that spreads a diffused, decorative light through the shiny white surface.',
			'source' => 'https://www.ikea.com/us/en/p/kallblixt-wall-lamp-white-glass-10505698/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-white-glass__0993062_pe820396_s5.jpg',
			'category_id' => 16,
		]);

		$p10505698->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-white-glass__0993062_pe820396_s5.jpg' ]);
		$p10505698->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-white-glass__0993064_pe820397_s5.jpg' ]);
		$p10505698->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-white-glass__0991198_pe225117_s5.jpg' ]);
		$p10505698->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-white-glass__0993063_pe820398_s5.jpg' ]);


		$p60357916 = Product::create([
			'name' => 'EVEDAL Floor lamp, marble/gray',
			'price' => 349.99,
			'model_path' => '/models/40358592_PS01_S01_NV01_RQP3_3.0_a14f7422b9e84951af65ee50a76889ce.glb',
			'is_stackable' => 0,
			'description' => 'Genuine materials like glass and brass, together with timeless Scandinavian design. We hope that you want to keep this series of lamps your entire life, and maybe pass them down to the next generation.',
			'source' => 'https://www.ikea.com/us/en/p/evedal-floor-lamp-marble-gray-60357916/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0663195_pe712324_s5.jpg',
			'category_id' => 16,
		]);

		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0663195_pe712324_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0879801_pe712326_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0879783_pe688149_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0879789_pe712325_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0879786_pe688150_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0702038_ph155557_s5.jpg' ]);
		$p60357916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-floor-lamp-marble-gray__0991198_pe225117_s5.jpg' ]);


		$p10458994 = Product::create([
			'name' => 'TÄLLBYN Table lamp, nickel plated/opal glass, 20 "',
			'price' => 67.99,
			'model_path' => '/models/10458994_PS01_S01_NV01_RQP3_3.0_10bc89b64e9c4972910f41d74eeb95b2.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TÄLLBYN series are made of metal and mouth blown glass with a classic yet robust design – and provide mood and functional lighting. Add a little nostalgia to the rooms of your home.',
			'source' => 'https://www.ikea.com/us/en/p/taellbyn-table-lamp-nickel-plated-opal-glass-10458994/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779143_pe759272_s5.jpg',
			'category_id' => 16,
		]);

		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779143_pe759272_s5.jpg' ]);
		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0991198_pe225117_s5.jpg' ]);
		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779142_pe759273_s5.jpg' ]);
		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779141_pe759271_s5.jpg' ]);
		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779114_pe759262_s5.jpg' ]);
		$p10458994->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-nickel-plated-opal-glass__0779135_pe759269_s5.jpg' ]);


		$vc40509360 = VariationCollection::create();

		$p60499906 = Product::create([
			'name' => 'ÅSKMULLER Table lamp, gray-green, 9 "',
			'price' => 29.99,
			'model_path' => '/models/00492489_PS01_S01_NV01_RQP3_3.0_634231d5b36d4fbcae3595eb7ebda028.glb',
			'is_stackable' => 0,
			'description' => 'A modern version of a traditional kerosene lamp. The visible light bulb looks like a real candle flame and spreads a soft and warm mood light that you can adjust as needed with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/askmuller-table-lamp-gray-green-60499906/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1074319_pe856153_s5.jpg',
			'category_id' => 16,
		]);

		$p60499906->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1074319_pe856153_s5.jpg' ]);
		$p60499906->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1043950_pe841841_s5.jpg' ]);
		$p60499906->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1074318_pe856154_s5.jpg' ]);
		$p60499906->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1043951_pe841844_s5.jpg' ]);
		$p60499906->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-gray-green__1043952_pe841843_s5.jpg' ]);

		$p40509360 = Product::create([
			'name' => 'ÅSKMULLER Table lamp, white, 9 "',
			'price' => 29.99,
			'model_path' => '/models/20509342_PS01_S01_NV01_RQP3_3.0_477fd36490db4cdc887cb2551924e366.glb',
			'is_stackable' => 0,
			'description' => 'A modern version of a traditional kerosene lamp. The visible light bulb looks like a real candle flame and spreads a soft and warm mood light that you can adjust as needed with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/askmuller-table-lamp-white-40509360/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1074321_pe856155_s5.jpg',
			'category_id' => 16,
		]);

		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1074321_pe856155_s5.jpg' ]);
		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1043940_pe841836_s5.jpg' ]);
		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1074320_pe856156_s5.jpg' ]);
		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1216259_ph182481_s5.jpg' ]);
		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1043941_pe841839_s5.jpg' ]);
		$p40509360->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-white__1043942_pe841838_s5.jpg' ]);

		$vc40509360->products()->attach($p60499906->id);
		$vc40509360->products()->attach($p40509360->id);

		$p20459846 = Product::create([
			'name' => 'SNÖBYAR Table lamp, gray-turquoise ceramic/gray, 20 "',
			'price' => 79.99,
			'model_path' => '/models/50450401_PS01_S01_NV01_RQP3_3.0_13511d19587146f8836af9601d220417.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp has a ceramic foot and a lampshade that spreads a warm and cozy light through the gray fabric. With a total height of 20½", it’s just as decorative – regardless if it’s on or off.',
			'source' => 'https://www.ikea.com/us/en/p/snoebyar-table-lamp-gray-turquoise-ceramic-gray-20459846/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0952098_pe801573_s5.jpg',
			'category_id' => 16,
		]);

		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0952098_pe801573_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__1292423_ph188016_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0978963_ph175968_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0952099_pe801576_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0952101_pe801574_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__1292419_ph182303_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__0952100_pe801575_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__1292421_ph180613_s5.jpg' ]);
		$p20459846->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-gray-turquoise-ceramic-gray__1292418_ph179273_s5.jpg' ]);


		$p60336783 = Product::create([
			'name' => 'NYMÅNE Floor/reading lamp, white',
			'price' => 54.99,
			'model_path' => '/models/80336758_PS01_S01_NV01_RQP3_3.0_67fc1157461846ccba0cdde1830859e0.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-floor-reading-lamp-white-60336783/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__0662532_pe711964_s5.jpg',
			'category_id' => 16,
		]);

		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__0662532_pe711964_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__0879736_pe711963_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__1185861_ph186074_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__0879733_pe673069_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__1158361_pe888111_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__0879751_pe711965_s5.jpg' ]);
		$p60336783->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-reading-lamp-white__1185865_ph186798_s5.jpg' ]);


		$p90437752 = Product::create([
			'name' => 'TÄLLBYN Floor lamp, nickel plated/opal glass, 53 "',
			'price' => 84.99,
			'model_path' => '/models/40437740_PS01_S01_NV01_RQP3_3.0_9bd5b3f1a4dd4f31aee72995bae4d3b1.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TÄLLBYN series are made of metal and mouth blown glass with a classic yet robust design – and provide mood and functional lighting. Add a little nostalgia to the rooms of your home.',
			'source' => 'https://www.ikea.com/us/en/p/taellbyn-floor-lamp-nickel-plated-opal-glass-90437752/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779117_pe759263_s5.jpg',
			'category_id' => 16,
		]);

		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779117_pe759263_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779114_pe759262_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779116_pe759264_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0991198_pe225117_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__1112046_pe871084_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779142_pe759273_s5.jpg' ]);
		$p90437752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-floor-lamp-nickel-plated-opal-glass__0779115_pe759265_s5.jpg' ]);


		$p10405745 = Product::create([
			'name' => 'EVEDAL Table lamp, marble/gray',
			'price' => 259.99,
			'model_path' => '/models/10405731_PS01_S01_NV01_RQP3_3.0_107b742ba7794ad5aa5eb18f69b834d1.glb',
			'is_stackable' => 0,
			'description' => 'Genuine materials like glass and brass, together with timeless Scandinavian design. We hope that you want to keep this series of lamps your entire life, and maybe pass them down to the next generation.',
			'source' => 'https://www.ikea.com/us/en/p/evedal-table-lamp-marble-gray-10405745/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0663169_pe712303_s5.jpg',
			'category_id' => 16,
		]);

		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0663169_pe712303_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0879408_pe712302_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0879422_pe712304_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0686393_ph155558_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0879425_pe712305_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__1057825_ph177736_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0991198_pe225117_s5.jpg' ]);
		$p10405745->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-table-lamp-marble-gray__0879405_pe687075_s5.jpg' ]);


		$p40464045 = Product::create([
			'name' => 'TÅGARP Floor uplighter with light bulb, black/white',
			'price' => 13.99,
			'model_path' => '/models/20404095_PS01_S01_NV01_RQP3_3.0_8f910778e4d6414f8413a3af550b2ed1.glb',
			'is_stackable' => 0,
			'description' => 'TÅGARP floor uplight illuminates upwards and spreads a diffused, pleasant light around a room. Parts of the lamp are also made of recycled plastic – a good choice for our climate, at an unbeatable price.',
			'source' => 'https://www.ikea.com/us/en/p/tagarp-floor-uplighter-with-light-bulb-black-white-40464045/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-with-light-bulb-black-white__0810840_pe771436_s5.jpg',
			'category_id' => 16,
		]);

		$p40464045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-with-light-bulb-black-white__0810840_pe771436_s5.jpg' ]);
		$p40464045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-with-light-bulb-black-white__0810839_pe771437_s5.jpg' ]);
		$p40464045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-with-light-bulb-black-white__0967780_pe810282_s5.jpg' ]);


		$p10325715 = Product::create([
			'name' => 'FUBBLA LED work lamp, white',
			'price' => 34.99,
			'model_path' => '/models/40325709_PS01_S01_NV01_RQP3_3.0_29cd198b29324a5aaa570232f92ed769.glb',
			'is_stackable' => 0,
			'description' => 'Perfect when drawing or building since the arm and shade are adjustable. Our children’s lighting products go through some of the toughest safety tests in the world so you can be sure your child is safe.',
			'source' => 'https://www.ikea.com/us/en/p/fubbla-led-work-lamp-white-10325715/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0605359_pe681732_s5.jpg',
			'category_id' => 16,
		]);

		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0605359_pe681732_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0883234_pe643635_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0568746_ph145807_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0737580_pe643625_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0883217_pe643633_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0883213_pe643630_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0730604_ph158726_s5.jpg' ]);
		$p10325715->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fubbla-led-work-lamp-white__0730605_ph158448_s5.jpg' ]);


		$vc60538899 = VariationCollection::create();

		$p60538899 = Product::create([
			'name' => 'HÅRSLINGA Floor lamp, white',
			'price' => 29.99,
			'model_path' => '/models/90522477_PS01_S01_NV01_RQP3_3.0_5af4a4488c734e82a2a99e5832936f4b.glb',
			'is_stackable' => 0,
			'description' => 'As soon as you complete this simple and neat floor lamp with a decorative bulb of your choice, you enjoy a nice mood light that you can rotate and move as needed to get the light where you want it.',
			'source' => 'https://www.ikea.com/us/en/p/harslinga-floor-lamp-white-60538899/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1144331_pe881787_s5.jpg',
			'category_id' => 16,
		]);

		$p60538899->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1144331_pe881787_s5.jpg' ]);
		$p60538899->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1145642_pe882724_s5.jpg' ]);
		$p60538899->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1145639_pe882722_s5.jpg' ]);
		$p60538899->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1145640_pe882723_s5.jpg' ]);
		$p60538899->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-white__1144443_pe881822_s5.jpg' ]);

		$p70556500 = Product::create([
			'name' => 'HÅRSLINGA Floor lamp, black',
			'price' => 29.99,
			'model_path' => '/models/90556491_PS01_S01_NV01_RQP3_3.0_7bdd641fd6f64e20a1924b229babc2e4.glb',
			'is_stackable' => 0,
			'description' => 'As soon as you complete this simple and neat floor lamp with a decorative bulb of your choice, you enjoy a nice mood light that you can rotate and move as needed to get the light where you want it.',
			'source' => 'https://www.ikea.com/us/en/p/harslinga-floor-lamp-black-70556500/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1167712_pe891682_s5.jpg',
			'category_id' => 16,
		]);

		$p70556500->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1167712_pe891682_s5.jpg' ]);
		$p70556500->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1172048_pe893242_s5.jpg' ]);
		$p70556500->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1172045_pe893241_s5.jpg' ]);
		$p70556500->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1172046_pe893244_s5.jpg' ]);
		$p70556500->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-black__1172047_pe893243_s5.jpg' ]);

		$vc60538899->products()->attach($p60538899->id);
		$vc60538899->products()->attach($p70556500->id);

		$vc40437702 = VariationCollection::create();

		$p40437702 = Product::create([
			'name' => 'UPPVIND Table lamp, nickel plated/white, 19 "',
			'price' => 74.99,
			'model_path' => '/models/30430386_PS01_S01_NV01_RQP3_3.0_8b3ccb782eea4da6975de726c493d60b.glb',
			'is_stackable' => 0,
			'description' => 'The table lamp’s slim oval shade rests on a sturdy metal base and spreads a soft, decorative light wherever you choose to place it. Why not combine it with the matching UPPVIND floor lamp?',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-table-lamp-nickel-plated-white-40437702/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-nickel-plated-white__0957668_pe805079_s5.jpg',
			'category_id' => 16,
		]);

		$p40437702->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-nickel-plated-white__0957668_pe805079_s5.jpg' ]);
		$p40437702->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-nickel-plated-white__0957669_pe805081_s5.jpg' ]);
		$p40437702->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-nickel-plated-white__0957670_pe805080_s5.jpg' ]);

		$p80488285 = Product::create([
			'name' => 'UPPVIND Table lamp, brass plated/white, 19 "',
			'price' => 74.99,
			'model_path' => '/models/20483163_PS01_S01_NV01_RQP3_3.0_301a44e157384e86b6d0bbe5e9294d22.glb',
			'is_stackable' => 0,
			'description' => 'The table lamp’s slim oval shade rests on a sturdy metal base and spreads a soft, decorative light wherever you choose to place it. Why not combine it with the matching UPPVIND floor lamp?',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-table-lamp-brass-plated-white-80488285/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-brass-plated-white__0957665_pe805075_s5.jpg',
			'category_id' => 16,
		]);

		$p80488285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-brass-plated-white__0957665_pe805075_s5.jpg' ]);
		$p80488285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-brass-plated-white__0957667_pe805076_s5.jpg' ]);
		$p80488285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-brass-plated-white__0957666_pe805077_s5.jpg' ]);

		$vc40437702->products()->attach($p40437702->id);
		$vc40437702->products()->attach($p80488285->id);

		$p30469374 = Product::create([
			'name' => 'TOMELILLA Floor lamp, nickel plated/white, 59 "',
			'price' => 64.99,
			'model_path' => '/models/30464041_PS01_S01_NV01_RQP3_3.0_0b33d890256a8b47a3e9a37d23b85651.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TOMELILLA series stand firmly on aluminium bases and have rectangular textile lampshades that take up less space than round ones. The look is modern and stylish – with a warm soft light.',
			'source' => 'https://www.ikea.com/us/en/p/tomelilla-floor-lamp-nickel-plated-white-30469374/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-nickel-plated-white__0928814_pe789976_s5.jpg',
			'category_id' => 16,
		]);

		$p30469374->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-nickel-plated-white__0928814_pe789976_s5.jpg' ]);
		$p30469374->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-nickel-plated-white__1049491_pe844177_s5.jpg' ]);
		$p30469374->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-nickel-plated-white__0827689_pe776472_s5.jpg' ]);
		$p30469374->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-nickel-plated-white__1049492_pe844176_s5.jpg' ]);


		$vc40448611 = VariationCollection::create();

		$p40448611 = Product::create([
			'name' => 'NYMÅNE Work lamp with wireless charging, white',
			'price' => 79.99,
			'model_path' => '/models/20448607_PS01_S01_NV01_RQP3_3.0_1130ecc72da8447b8f7f42eee2c82a56.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-work-lamp-with-wireless-charging-white-40448611/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0991755_pe819570_s5.jpg',
			'category_id' => 16,
		]);

		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0991755_pe819570_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__1023850_ph177726_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0996394_pe822276_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0996396_pe822277_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0996395_pe822278_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0993555_pe820584_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__1197854_ph188087_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0996422_pe822290_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__1023816_ph177990_s5.jpg' ]);
		$p40448611->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-white__0993554_pe820585_s5.jpg' ]);

		$p40477750 = Product::create([
			'name' => 'NYMÅNE Work lamp with wireless charging, anthracite',
			'price' => 79.99,
			'model_path' => '/models/90477743_PS01_S01_NV01_RQP3_3.0_720d458ef63d48a6999c38e939a6fcc1.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-work-lamp-with-wireless-charging-anthracite-40477750/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0991757_pe819571_s5.jpg',
			'category_id' => 16,
		]);

		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0991757_pe819571_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0996398_pe822280_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0996399_pe822282_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0993560_pe820591_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0996400_pe822281_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0996424_pe822292_s5.jpg' ]);
		$p40477750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-with-wireless-charging-anthracite__0993561_pe820590_s5.jpg' ]);

		$vc40448611->products()->attach($p40448611->id);
		$vc40448611->products()->attach($p40477750->id);

		$p10437807 = Product::create([
			'name' => 'BARLAST Floor lamp with LED bulb, black/white, 59 "',
			'price' => 9.99,
			'model_path' => '/models/10430368_PS01_S01_NV01_RQP3_3.0_53c74d2a5a434f3493c972e25e23aa89.glb',
			'is_stackable' => 0,
			'description' => 'This floor lamp with a clean design assembles in a flash. And since the packaging is compact, we can fit many on the same pallet. Good for the environment – and one of the reasons behind the low price.',
			'source' => 'https://www.ikea.com/us/en/p/barlast-floor-lamp-with-led-bulb-black-white-10437807/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-with-led-bulb-black-white__0957676_pe805130_s5.jpg',
			'category_id' => 16,
		]);

		$p10437807->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-with-led-bulb-black-white__0957676_pe805130_s5.jpg' ]);
		$p10437807->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-with-led-bulb-black-white__0957678_pe805133_s5.jpg' ]);
		$p10437807->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-with-led-bulb-black-white__0959617_pe806101_s5.jpg' ]);
		$p10437807->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-floor-lamp-with-led-bulb-black-white__0957677_pe805131_s5.jpg' ]);


		$p00459970 = Product::create([
			'name' => 'TONVIS Table lamp, smoked glass/white, 20 "',
			'price' => 74.99,
			'model_path' => '/models/30450402_PS01_S01_NV01_RQP3_3.0_a798094f05e141cc8424b901bd43ba66.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp has a base in mouth-blown smoke-colored glass and a cloth lampshade that spreads a warm, cozy light. With a total height of 20½", it is just as decorative even when switched off.',
			'source' => 'https://www.ikea.com/us/en/p/tonvis-table-lamp-smoked-glass-white-00459970/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0972606_pe811703_s5.jpg',
			'category_id' => 16,
		]);

		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0972606_pe811703_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0954620_pe803410_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0975475_ph175705_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0991234_pe225118_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__1023815_ph176181_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0978960_ph175821_s5.jpg' ]);
		$p00459970->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-smoked-glass-white__0954619_pe803411_s5.jpg' ]);


		$vc20459436 = VariationCollection::create();

		$p20459436 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter/reading lamp, black/white',
			'price' => 42.99,
			'model_path' => '/models/50430366_PS01_S01_NV01_RQP3_3.0_0fab4f6f3db74e6299d01aa63c629df6.glb',
			'is_stackable' => 0,
			'description' => 'This floor uplight/reading lamp gives you a pleasant light upwards and out around an entire room, and a directed light for reading. Both are easy to turn on and off with the switch at the top of the lampshade.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-reading-lamp-black-white-20459436/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-black-white__0958287_pe805294_s5.jpg',
			'category_id' => 16,
		]);

		$p20459436->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-black-white__0958287_pe805294_s5.jpg' ]);
		$p20459436->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-black-white__0958289_pe805295_s5.jpg' ]);
		$p20459436->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-black-white__0958286_pe805292_s5.jpg' ]);
		$p20459436->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-black-white__0958288_pe805296_s5.jpg' ]);

		$p30477717 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter/reading lamp, silver color/white',
			'price' => 42.99,
			'model_path' => '/models/80477710_PS01_S01_NV01_RQP3_3.0_2eeb83ef5a234d35bcba88a6f02b6390.glb',
			'is_stackable' => 0,
			'description' => 'This floor uplight/reading lamp gives you a pleasant light upwards and out around an entire room, and a directed light for reading. Both are easy to turn on and off with the switch at the top of the lampshade.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-reading-lamp-silver-color-white-30477717/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-silver-color-white__0943777_pe797040_s5.jpg',
			'category_id' => 16,
		]);

		$p30477717->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-silver-color-white__0943777_pe797040_s5.jpg' ]);
		$p30477717->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-silver-color-white__0941177_pe795354_s5.jpg' ]);
		$p30477717->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-silver-color-white__0943779_pe797039_s5.jpg' ]);
		$p30477717->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-reading-lamp-silver-color-white__0943778_pe797038_s5.jpg' ]);

		$vc20459436->products()->attach($p20459436->id);
		$vc20459436->products()->attach($p30477717->id);

		$p30520909 = Product::create([
			'name' => 'BLÅSVERK Pendant lamp, beige, 15 "',
			'price' => 29.99,
			'model_path' => '/models/60520903_PS01_S01_NV01_RQP3_3.0_96de64a614eb4c599ddf5b774dc4f163.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a pendant lamp with a modern design that gives a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect to hang over a dining table.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-pendant-lamp-beige-30520909/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1150244_pe884434_s5.jpg',
			'category_id' => 16,
		]);

		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1150244_pe884434_s5.jpg' ]);
		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1153058_pe885557_s5.jpg' ]);
		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1153062_pe885562_s5.jpg' ]);
		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1370240_ph196325_s5.jpg' ]);
		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1153063_pe885563_s5.jpg' ]);
		$p30520909->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-pendant-lamp-beige__1153057_pe885556_s5.jpg' ]);


		$p70291232 = Product::create([
			'name' => 'JANSJÖ LED USB lamp, black, 15 "',
			'price' => 7.99,
			'model_path' => '/models/70291232_PS01_S01_NV01_RQP3_3.0_3a03eb1c47b249c2a2a793f4a161ff15.glb',
			'is_stackable' => 0,
			'description' => 'A super-flexible lamp that lets you focus its bright light exactly where you need it. It’s slim, lightweight and easy to move around. The energy-saving built-in LED light source provides 25,000 hours of light.',
			'source' => 'https://www.ikea.com/us/en/p/jansjoe-led-usb-lamp-black-70291232/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jansjoe-led-usb-lamp-black__0607576_pe683065_s5.jpg',
			'category_id' => 16,
		]);

		$p70291232->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jansjoe-led-usb-lamp-black__0607576_pe683065_s5.jpg' ]);
		$p70291232->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jansjoe-led-usb-lamp-black__0896445_pe614403_s5.jpg' ]);
		$p70291232->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jansjoe-led-usb-lamp-black__0879584_pe622862_s5.jpg' ]);


		$vc10416206 = VariationCollection::create();

		$p30416192 = Product::create([
			'name' => 'ÅRSTID Table lamp with LED bulb, nickel plated/white',
			'price' => 31.99,
			'model_path' => '/models/G-70280634-9e174064257be1a9ce4b9def6cd966a4a4fe6da5_0db7fb8490fe44c9a7e8cb99d9c9662b.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-table-lamp-with-led-bulb-nickel-plated-white-30416192/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0609332_pe684455_s5.jpg',
			'category_id' => 16,
		]);

		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0609332_pe684455_s5.jpg' ]);
		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0178305_pe244171_s5.jpg' ]);
		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0880604_pe617345_s5.jpg' ]);
		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0340623_pe222478_s5.jpg' ]);
		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0178304_pe317585_s5.jpg' ]);
		$p30416192->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-nickel-plated-white__0880598_pe614456_s5.jpg' ]);

		$p10416206 = Product::create([
			'name' => 'ÅRSTID Table lamp with LED bulb, brass/white',
			'price' => 31.99,
			'model_path' => '/models/30321373_PS01_S01_NV01_RQP3_4.0_2a966f421b164ceba74767beb81b492a.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-table-lamp-with-led-bulb-brass-white-10416206/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0609329_pe684454_s5.jpg',
			'category_id' => 16,
		]);

		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0609329_pe684454_s5.jpg' ]);
		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0467338_ph132229_s5.jpg' ]);
		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0880709_pe614460_s5.jpg' ]);
		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0579912_ph145270_s5.jpg' ]);
		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0880725_pe617347_s5.jpg' ]);
		$p10416206->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-table-lamp-with-led-bulb-brass-white__0963368_ph170137_s5.jpg' ]);

		$vc10416206->products()->attach($p30416192->id);
		$vc10416206->products()->attach($p10416206->id);

		$p10516786 = Product::create([
			'name' => 'SKURUP Work lamp, black',
			'price' => 21.99,
			'model_path' => '/models/80516778_PS01_S01_NV01_RQP3_3.0_cdfbe8140836403fb68cb4a862fc351c.glb',
			'is_stackable' => 0,
			'description' => 'Metal, rugged constructions and timeless design – enjoy the SKURUP lamp series for a long time. Simple adjustments and different types of lamps make the series practical and flexible throughout the home.',
			'source' => 'https://www.ikea.com/us/en/p/skurup-work-lamp-black-10516786/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1019457_pe831378_s5.jpg',
			'category_id' => 16,
		]);

		$p10516786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1019457_pe831378_s5.jpg' ]);
		$p10516786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1019458_pe831381_s5.jpg' ]);
		$p10516786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1019460_pe831379_s5.jpg' ]);
		$p10516786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1019459_pe831380_s5.jpg' ]);
		$p10516786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-black__1222806_ph192221_s5.jpg' ]);


		$p50440841 = Product::create([
			'name' => 'SOLSKUR LED table lamp, white/brass color',
			'price' => 34.99,
			'model_path' => '/models/10424517_PS01_S01_NV01_RQP3_3.0_0ae2361f3e28461ea6dc341a1edf1046.glb',
			'is_stackable' => 0,
			'description' => 'Do you want to add a nice touch to complete the romantic feeling of your home? SOLSKUR table lamp has an idyllic pattern inspired by nature – and it provides soft mood lighting too!',
			'source' => 'https://www.ikea.com/us/en/p/solskur-led-table-lamp-white-brass-color-50440841/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0780250_pe759848_s5.jpg',
			'category_id' => 16,
		]);

		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0780250_pe759848_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0780252_pe759849_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0804857_pe769395_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0807316_pe770386_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0780253_pe759851_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0989512_ph170516_s5.jpg' ]);
		$p50440841->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solskur-led-table-lamp-white-brass-color__0780684_pe760179_s5.jpg' ]);


		$vc30520914 = VariationCollection::create();

		$p60547988 = Product::create([
			'name' => 'BLÅSVERK Table lamp with LED bulb, yellow, 14 "',
			'price' => 21.99,
			'model_path' => '/models/60547974_PS01_S01_NV01_RQP3_3.0_eb063e5b50a448a1ac886ab0fc4387ab.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-with-led-bulb-yellow-60547988/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1217784_pe913021_s5.jpg',
			'category_id' => 16,
		]);

		$p60547988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1217784_pe913021_s5.jpg' ]);
		$p60547988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1173851_pe894337_s5.jpg' ]);
		$p60547988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1235836_ph193142_s5.jpg' ]);
		$p60547988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1217785_pe913022_s5.jpg' ]);
		$p60547988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-yellow__1173852_pe894338_s5.jpg' ]);

		$p30520914 = Product::create([
			'name' => 'BLÅSVERK Table lamp with LED bulb, blue, 14 "',
			'price' => 21.99,
			'model_path' => '/models/60501259_PS01_S01_NV01_RQP3_3.0_0a0dda606c7d4aafb67eb587b9a7c983.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-with-led-bulb-blue-30520914/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-blue__1172136_pe893259_s5.jpg',
			'category_id' => 16,
		]);

		$p30520914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-blue__1172136_pe893259_s5.jpg' ]);
		$p30520914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-blue__1173847_pe894336_s5.jpg' ]);
		$p30520914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-blue__1173846_pe894334_s5.jpg' ]);
		$p30520914->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-blue__1173848_pe894335_s5.jpg' ]);

		$p30520928 = Product::create([
			'name' => 'BLÅSVERK Table lamp with LED bulb, beige, 14 "',
			'price' => 21.99,
			'model_path' => '/models/70520926_PS01_S01_NV01_RQP3_3.0_1cc5dd56e419407b8ed4cdf2a4d1faaf.glb',
			'is_stackable' => 0,
			'description' => 'Looking for a table lamp with a modern design that gives you a pleasant light at a low price? BLÅSVERK can be what you are looking for with its soft shape and retro feel – perfect for any room in the home.',
			'source' => 'https://www.ikea.com/us/en/p/blasverk-table-lamp-with-led-bulb-beige-30520928/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1150245_pe884435_s5.jpg',
			'category_id' => 16,
		]);

		$p30520928->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1150245_pe884435_s5.jpg' ]);
		$p30520928->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1191496_pe900639_s5.jpg' ]);
		$p30520928->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1150618_pe884634_s5.jpg' ]);
		$p30520928->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1153008_pe885547_s5.jpg' ]);
		$p30520928->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blasverk-table-lamp-with-led-bulb-beige__1153017_pe885551_s5.jpg' ]);

		$vc30520914->products()->attach($p60547988->id);
		$vc30520914->products()->attach($p30520914->id);
		$vc30520914->products()->attach($p30520928->id);

		$p10407103 = Product::create([
			'name' => 'RAMSELE Pendant lamp, flower/white, 17 "',
			'price' => 79.99,
			'model_path' => '/models/30404882_PS01_S01_NV01_RQP3_3.0_60675d5c6da545cbaeb0de66d2762af4.glb',
			'is_stackable' => 0,
			'description' => 'RAMSELE pendant lamp is based on a geometric shape with sheets of textiles or felt. You can dim it by pulling the strings – while changing the shape of the lamp in an exciting way.',
			'source' => 'https://www.ikea.com/us/en/p/ramsele-pendant-lamp-flower-white-10407103/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0743946_pe743537_s5.jpg',
			'category_id' => 16,
		]);

		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0743946_pe743537_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0743945_pe743538_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0744037_pe743536_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0743943_pe743539_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0795411_ph164310_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0744034_pe743533_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0744036_pe743534_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0744035_pe743535_s5.jpg' ]);
		$p10407103->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ramsele-pendant-lamp-flower-white__0795415_ph164309_s5.jpg' ]);


		$p30432738 = Product::create([
			'name' => 'STORHAGA LED table lamp, dimmable outdoor/black, 14 "',
			'price' => 49.99,
			'model_path' => '/models/40394439_PS01_S01_NV01_RQP3_3.0_13b7ea77c6c04d479a3689b1a3c25413.glb',
			'is_stackable' => 0,
			'description' => 'A lamp reminiscent of kerosene lamps of the past. It is dimmable and very flexible – it can be used indoors and outdoors, and with cord or rechargeable batteries. Perfect for your balcony or patio.',
			'source' => 'https://www.ikea.com/us/en/p/storhaga-led-table-lamp-dimmable-outdoor-black-30432738/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763153_pe752459_s5.jpg',
			'category_id' => 16,
		]);

		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763153_pe752459_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__1273686_ph189413_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763168_pe752478_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0832523_ph166323_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0975904_ph169738_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763172_pe752481_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763161_pe752473_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__1149637_ph168897_s5.jpg' ]);
		$p30432738->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/storhaga-led-table-lamp-dimmable-outdoor-black__0763156_pe752472_s5.jpg' ]);


		$p80518447 = Product::create([
			'name' => 'LÖVMÅNAD Work lamp, black',
			'price' => 17.99,
			'model_path' => '/models/50518439_PS01_S01_NV01_RQP3_3.0_437f0d30c26740248d23c2d4fd73cf5a.glb',
			'is_stackable' => 0,
			'description' => 'A neat lamp with a rotatable head that you can direct as you like. Ready to light up your book or magazine, day or night. Perfect to have by the armchair, bed or on the desk.',
			'source' => 'https://www.ikea.com/us/en/p/loevmanad-work-lamp-black-80518447/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-black__1030487_pe836292_s5.jpg',
			'category_id' => 16,
		]);

		$p80518447->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-black__1030487_pe836292_s5.jpg' ]);
		$p80518447->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-black__1045216_pe842479_s5.jpg' ]);
		$p80518447->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-black__1045200_pe842463_s5.jpg' ]);
		$p80518447->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-black__1045192_pe842462_s5.jpg' ]);


		$p10464061 = Product::create([
			'name' => 'FYXNÄS Floor lamp, turquoise',
			'price' => 34.99,
			'model_path' => '/models/G-60464054-0efeec9d4f6f1e4ce966669c70a05c8471fe964e_0aa2a989c5bd4b1ca537050ca485d1af.glb',
			'is_stackable' => 0,
			'description' => 'Like a tripod with a retro feel. FYXNÄS floor and table lamps with metal legs and double layers of stretchy fabric in soft colors spread a decorative mood light wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/fyxnaes-floor-lamp-turquoise-10464061/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-turquoise__0859511_pe780942_s5.jpg',
			'category_id' => 16,
		]);

		$p10464061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-turquoise__0859511_pe780942_s5.jpg' ]);
		$p10464061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-turquoise__0859512_pe780944_s5.jpg' ]);
		$p10464061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-turquoise__0859513_pe780943_s5.jpg' ]);
		$p10464061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-turquoise__1046552_ph172549_s5.jpg' ]);


		$vc20296109 = VariationCollection::create();

		$p80216534 = Product::create([
			'name' => 'HEKTAR Pendant lamp, dark gray, 19 "',
			'price' => 89.99,
			'model_path' => '/models/60215205_PS01_S01_NV01_RQP3_3.0_0fe877bdd429400dbca9c28e7ea4a032.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-pendant-lamp-dark-gray-80216534/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0607416_pe682966_s5.jpg',
			'category_id' => 16,
		]);

		$p80216534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0607416_pe682966_s5.jpg' ]);
		$p80216534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0880306_pe615265_s5.jpg' ]);
		$p80216534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0880303_pe613932_s5.jpg' ]);
		$p80216534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0281507_pe389271_s5.jpg' ]);
		$p80216534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0179062_pe316486_s5.jpg' ]);

		$p20390376 = Product::create([
			'name' => 'HEKTAR Pendant lamp, dark gray, 9 "',
			'price' => 34.99,
			'model_path' => '/models/20390376_PS01_S01_NV01_RQP3_3.0_6fd5f3c93bda4419a9d7e241f4fde738.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-pendant-lamp-dark-gray-20390376/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0613033_pe686124_s5.jpg',
			'category_id' => 16,
		]);

		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0613033_pe686124_s5.jpg' ]);
		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0880522_pe615290_s5.jpg' ]);
		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__1257915_pe926088_s5.jpg' ]);
		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0281988_pe382563_s5.jpg' ]);
		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__1257914_pe926089_s5.jpg' ]);
		$p20390376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0397374_ph123776_s5.jpg' ]);

		$p20296109 = Product::create([
			'name' => 'HEKTAR Pendant lamp, dark gray, 15 "',
			'price' => 69.99,
			'model_path' => '/models/40296108_PS01_S01_NV01_RQP3_3.0_52de337d91a94ee0949655b2d8c9de44.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-pendant-lamp-dark-gray-20296109/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0607413_pe682963_s5.jpg',
			'category_id' => 16,
		]);

		$p20296109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0607413_pe682963_s5.jpg' ]);
		$p20296109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0881152_pe615846_s5.jpg' ]);
		$p20296109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__1258088_pe926224_s5.jpg' ]);
		$p20296109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-pendant-lamp-dark-gray__0397375_pe352529_s5.jpg' ]);

		$vc20296109->products()->attach($p80216534->id);
		$vc20296109->products()->attach($p20390376->id);
		$vc20296109->products()->attach($p20296109->id);

		$p90416325 = Product::create([
			'name' => 'LAMPAN Table lamp with LED bulb, white, 11 "',
			'price' => 9.99,
			'model_path' => '/models/20055421_PS01_S01_NV01_RQP3_3.0_5ca6cab29dba455794e924c55fa5cefa.glb',
			'is_stackable' => 0,
			'description' => 'We did everything to keep the price down – we even skipped the box packaging. The distinct design is easy to place and will make any dark corner of your home warm and inviting.',
			'source' => 'https://www.ikea.com/us/en/p/lampan-table-lamp-with-led-bulb-white-90416325/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0459937_pe606395_s5.jpg',
			'category_id' => 16,
		]);

		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0459937_pe606395_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__1158339_pe888103_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0390700_pe214100_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0177096_pe245534_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0879279_pe614443_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0879285_pe632935_s5.jpg' ]);
		$p90416325->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lampan-table-lamp-with-led-bulb-white__0390702_pe219031_s5.jpg' ]);


		$p20349382 = Product::create([
			'name' => 'HEKTAR Work lamp, dark gray',
			'price' => 64.99,
			'model_path' => '/models/90349374_PS01_S01_NV01_RQP3_3.0_5b51616a64544476b277f88075c7221b.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-work-lamp-dark-gray-20349382/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-dark-gray__0470194_pe612598_s5.jpg',
			'category_id' => 16,
		]);

		$p20349382->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-dark-gray__0470194_pe612598_s5.jpg' ]);
		$p20349382->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-dark-gray__0880888_pe612597_s5.jpg' ]);
		$p20349382->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-dark-gray__0879880_pe622563_s5.jpg' ]);
		$p20349382->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-dark-gray__0880894_pe646808_s5.jpg' ]);


		$p30416149 = Product::create([
			'name' => 'VIDJA Floor lamp with LED bulb, white, 54 "',
			'price' => 69.99,
			'model_path' => '/models/G-00309198-473e6191aea6560e37e9c5c4f8eccc0f70f5862a_8e9f118562b14434ac758fdce0678bfd.glb',
			'is_stackable' => 0,
			'description' => 'Decorative floor lamp that spreads a soft and warm light in the room through the tube-shaped white textile shade. Just as nice in the living room as in the hallway or bedroom to create a cosy atmosphere.',
			'source' => 'https://www.ikea.com/us/en/p/vidja-floor-lamp-with-led-bulb-white-30416149/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-with-led-bulb-white__0606512_pe682388_s5.jpg',
			'category_id' => 16,
		]);

		$p30416149->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-with-led-bulb-white__0606512_pe682388_s5.jpg' ]);
		$p30416149->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-with-led-bulb-white__0879632_pe611371_s5.jpg' ]);
		$p30416149->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-with-led-bulb-white__0879628_pe611326_s5.jpg' ]);
		$p30416149->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vidja-floor-lamp-with-led-bulb-white__0953648_pe802865_s5.jpg' ]);


		$p40504560 = Product::create([
			'name' => 'BARLAST Table lamp with LED bulb, black/white, 12 "',
			'price' => 7.99,
			'model_path' => '/models/G-00504557-fd7f6777e226890ea23a4a0a58add56682645a08_238e6902b37947c7a1c07a674f1e2db5.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp with a clean design assembles in a flash. And since the packaging is compact, we can fit many on the same pallet. Good for the environment – and one of the reasons behind the low price.',
			'source' => 'https://www.ikea.com/us/en/p/barlast-table-lamp-with-led-bulb-black-white-40504560/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__1032422_pe836908_s5.jpg',
			'category_id' => 16,
		]);

		$p40504560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__1032422_pe836908_s5.jpg' ]);
		$p40504560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__1032425_pe836909_s5.jpg' ]);
		$p40504560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__1032423_pe836911_s5.jpg' ]);
		$p40504560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__0959617_pe806101_s5.jpg' ]);
		$p40504560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/barlast-table-lamp-with-led-bulb-black-white__1032424_pe836910_s5.jpg' ]);


		$vc10431607 = VariationCollection::create();

		$p10431607 = Product::create([
			'name' => 'FRIHULT Ceiling/wall lamp, black',
			'price' => 19.99,
			'model_path' => '/models/70431553_PS01_S01_NV01_RQP3_3.0_0408d37fcc674fc6a45e48ab559168cb.glb',
			'is_stackable' => 0,
			'description' => 'The soft, round shapes and use of metal and glass create a timeless look that resembles lamps of the past. It is approved for bathroom use and is also a good solution for hallways.',
			'source' => 'https://www.ikea.com/us/en/p/frihult-ceiling-wall-lamp-black-10431607/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-black__0689506_pe723001_s5.jpg',
			'category_id' => 16,
		]);

		$p10431607->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-black__0689506_pe723001_s5.jpg' ]);
		$p10431607->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-black__0689537_pe723030_s5.jpg' ]);
		$p10431607->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-black__0689734_pe723070_s5.jpg' ]);
		$p10431607->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-black__0689560_pe723052_s5.jpg' ]);

		$p70431614 = Product::create([
			'name' => 'FRIHULT Ceiling/wall lamp, stainless steel color',
			'price' => 19.99,
			'model_path' => '/models/20431560_PS01_S01_NV01_RQP3_3.0_65a087c1ef094f68a2a3b085ff0f3144.glb',
			'is_stackable' => 0,
			'description' => 'The soft, round shapes and use of metal and glass create a timeless look that resembles lamps of the past. It is approved for bathroom use and is also a good solution for hallways.',
			'source' => 'https://www.ikea.com/us/en/p/frihult-ceiling-wall-lamp-stainless-steel-color-70431614/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__0689510_pe723007_s5.jpg',
			'category_id' => 16,
		]);

		$p70431614->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__0689510_pe723007_s5.jpg' ]);
		$p70431614->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__0689564_pe723056_s5.jpg' ]);
		$p70431614->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__0689542_pe723034_s5.jpg' ]);
		$p70431614->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__0689748_pe723078_s5.jpg' ]);
		$p70431614->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-ceiling-wall-lamp-stainless-steel-color__1091058_ph178861_s5.jpg' ]);

		$vc10431607->products()->attach($p10431607->id);
		$vc10431607->products()->attach($p70431614->id);

		$p40467553 = Product::create([
			'name' => 'VÅTHULT LED cab/mirror light, aluminum color, 14 "',
			'price' => 24.99,
			'model_path' => '/models/40467548_PS01_S01_NV01_RQP3_3.0_327bf23b0e9340d3afef57ff41a4d0f1.glb',
			'is_stackable' => 0,
			'description' => 'This lamp\'s clean design with straight shapes suits almost any bathroom. Easy to mount over a mirror or wall cabinet and gives you a glare-free light while shaving or putting on make-up.',
			'source' => 'https://www.ikea.com/us/en/p/vathult-led-cab-mirror-light-aluminum-color-40467553/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vathult-led-cab-mirror-light-aluminum-color__1008969_pe827396_s5.jpg',
			'category_id' => 16,
		]);

		$p40467553->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vathult-led-cab-mirror-light-aluminum-color__1008969_pe827396_s5.jpg' ]);
		$p40467553->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vathult-led-cab-mirror-light-aluminum-color__1008972_pe827397_s5.jpg' ]);
		$p40467553->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vathult-led-cab-mirror-light-aluminum-color__1015002_pe829814_s5.jpg' ]);
		$p40467553->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vathult-led-cab-mirror-light-aluminum-color__1015003_pe829837_s5.jpg' ]);


		$p00514194 = Product::create([
			'name' => 'VÅGHÖJD LED floor lamp, dimmable black',
			'price' => 199.99,
			'model_path' => '/models/10501271_PS01_S01_NV01_RQP3_3.0_8eaffa33c071429eb74841a89ca490fb.glb',
			'is_stackable' => 0,
			'description' => 'A pendant lamp on the floor? Of course! You can rotate the arm and the head’s angle as needed. The upward light is always weaker than the downward light. Use the built-in dimmer to adjust the intensity.',
			'source' => 'https://www.ikea.com/us/en/p/vaghoejd-led-floor-lamp-dimmable-black-00514194/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1126257_pe875659_s5.jpg',
			'category_id' => 16,
		]);

		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1126257_pe875659_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1126254_pe875656_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1155260_pe886534_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1126256_pe875661_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1144341_pe883046_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1126255_pe875657_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1155261_pe886533_s5.jpg' ]);
		$p00514194->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vaghoejd-led-floor-lamp-dimmable-black__1256462_ph193370_s5.jpg' ]);


		$p10499621 = Product::create([
			'name' => 'JÄRPLIDEN Pendant lamp, white glass/nickel plated, 12 "',
			'price' => 39.99,
			'model_path' => '/models/20499606_PS01_S01_NV01_RQP3_3.0_4bcd377798c043b0a90b9d2b67e0086c.glb',
			'is_stackable' => 0,
			'description' => 'The lamp shade on this pendant lamp is completely unique since it is actually mouth blown. Together with the black cord set it creates a clean expression which fits nicely with most styles.',
			'source' => 'https://www.ikea.com/us/en/p/jaerpliden-pendant-lamp-white-glass-nickel-plated-10499621/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__0998174_pe822956_s5.jpg',
			'category_id' => 16,
		]);

		$p10499621->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__0998174_pe822956_s5.jpg' ]);
		$p10499621->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__0991198_pe225117_s5.jpg' ]);
		$p10499621->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__1116053_ph181386_s5.jpg' ]);
		$p10499621->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__0998175_pe822955_s5.jpg' ]);
		$p10499621->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaerpliden-pendant-lamp-white-glass-nickel-plated__1116062_ph183288_s5.jpg' ]);


		$vc20419657 = VariationCollection::create();

		$p70419645 = Product::create([
			'name' => 'RANARP Floor/reading lamp with LED bulb, black',
			'price' => 74.99,
			'model_path' => '/models/90331374_PS01_S01_NV01_RQP3_3.0_4defe2ed3ef64e84aca2c2e9758305ba.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-floor-reading-lamp-with-led-bulb-black-70419645/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0606896_pe682604_s5.jpg',
			'category_id' => 16,
		]);

		$p70419645->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0606896_pe682604_s5.jpg' ]);
		$p70419645->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0879712_pe614349_s5.jpg' ]);
		$p70419645->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0879709_pe613620_s5.jpg' ]);
		$p70419645->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0879706_pe611377_s5.jpg' ]);
		$p70419645->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-black__0570380_ph145743_s5.jpg' ]);

		$p20419657 = Product::create([
			'name' => 'RANARP Floor/reading lamp with LED bulb, off-white',
			'price' => 74.99,
			'model_path' => '/models/20231306_PS01_S01_NV01_RQP3_3.0_63f2d88871bf4611a68ae32a3dfa658e.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-floor-reading-lamp-with-led-bulb-off-white-20419657/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0606895_pe682605_s5.jpg',
			'category_id' => 16,
		]);

		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0606895_pe682605_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0880105_pe614357_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__1127978_ph185859_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0880101_pe613630_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0249394_pe387920_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0459990_ph132808_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0963361_ph170885_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0880108_pe654345_s5.jpg' ]);
		$p20419657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-floor-reading-lamp-with-led-bulb-off-white__0281506_pe383260_s5.jpg' ]);

		$vc20419657->products()->attach($p70419645->id);
		$vc20419657->products()->attach($p20419657->id);

		$p40407837 = Product::create([
			'name' => 'SIMRISHAMN Pendant lamp, 3-armed, chrome plated/opal glass, 22 "',
			'price' => 89.99,
			'model_path' => '/models/80407835_PS01_S01_NV01_RQP3_3.0_8f29ea17b4cc4141aeb10cc58590cafe.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass-40407837/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0793571_pe765399_s5.jpg',
			'category_id' => 16,
		]);

		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0793571_pe765399_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0939855_ph171920_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0793569_pe765398_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0888340_ph168817_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__0915663_ph168509_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__1351262_ph198378_s5.jpg' ]);
		$p40407837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-pendant-lamp-3-armed-chrome-plated-opal-glass__1368725_ph175099_s5.jpg' ]);


		$vc20416201 = VariationCollection::create();

		$p50416209 = Product::create([
			'name' => 'ÅRSTID Floor lamp with LED bulb, brass/white',
			'price' => 69.99,
			'model_path' => '/models/G-00321317-2b0cd8a4a0ea7b9c45c9b9a16700251b38fdf2f9_1d1d659ce8df43848f0545eca80a9e84.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-floor-lamp-with-led-bulb-brass-white-50416209/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0390610_pe566328_s5.jpg',
			'category_id' => 16,
		]);

		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0390610_pe566328_s5.jpg' ]);
		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0879649_pe611363_s5.jpg' ]);
		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0879656_pe614370_s5.jpg' ]);
		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0747835_ph156736_s5.jpg' ]);
		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0879662_pe671329_s5.jpg' ]);
		$p50416209->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-brass-white__0812946_ph164458_s5.jpg' ]);

		$p20416201 = Product::create([
			'name' => 'ÅRSTID Floor lamp with LED bulb, nickel plated/white',
			'price' => 69.99,
			'model_path' => '/models/G-60163862-db22c39763fbc0d7f8f25b31c9e9ebf140b3ebe7_1841988d60f94656b504cafa26a39d37.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-floor-lamp-with-led-bulb-nickel-plated-white-20416201/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0684004_pe720967_s5.jpg',
			'category_id' => 16,
		]);

		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0684004_pe720967_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0179010_pe304314_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0387917_pe333917_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0880137_pe614362_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0880121_pe611359_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0387918_pe365493_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0880131_pe613639_s5.jpg' ]);
		$p20416201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-floor-lamp-with-led-bulb-nickel-plated-white__0459993_ph132978_s5.jpg' ]);

		$vc20416201->products()->attach($p50416209->id);
		$vc20416201->products()->attach($p20416201->id);

		$p00518413 = Product::create([
			'name' => 'TVÄRHAND Table lamp with LED bulb, black/bamboo',
			'price' => 24.99,
			'model_path' => '/models/90510894_PS01_S01_NV01_RQP3_3.0_4e4152bcbfcd4689bda17d1df4eeb37e.glb',
			'is_stackable' => 0,
			'description' => 'In simplicity lives beauty. A fitting expression for this table lamp in curved metal with a bamboo base as a nice contrast. The included light bulb makes the coziness complete.',
			'source' => 'https://www.ikea.com/us/en/p/tvaerhand-table-lamp-with-led-bulb-black-bamboo-00518413/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-with-led-bulb-black-bamboo__1027181_pe834780_s5.jpg',
			'category_id' => 16,
		]);

		$p00518413->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-with-led-bulb-black-bamboo__1027181_pe834780_s5.jpg' ]);
		$p00518413->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-with-led-bulb-black-bamboo__1013683_pe829292_s5.jpg' ]);
		$p00518413->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-with-led-bulb-black-bamboo__1013687_pe829293_s5.jpg' ]);
		$p00518413->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerhand-table-lamp-with-led-bulb-black-bamboo__1013695_pe829296_s5.jpg' ]);


		$p10358013 = Product::create([
			'name' => 'TOKABO Table lamp with LED bulb, glass opal',
			'price' => 19.99,
			'model_path' => '/models/40357998_PS01_S01_NV01_RQP3_3.0_8b78f846156f4f37a93f5768aebc16e9.glb',
			'is_stackable' => 0,
			'description' => 'This cute little table lamp in coloured glass enhances the mood throughout the home – and fits on the smallest shelf or table top.',
			'source' => 'https://www.ikea.com/us/en/p/tokabo-table-lamp-with-led-bulb-glass-opal-10358013/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-with-led-bulb-glass-opal__0714489_pe730101_s5.jpg',
			'category_id' => 16,
		]);

		$p10358013->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-with-led-bulb-glass-opal__0714489_pe730101_s5.jpg' ]);
		$p10358013->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-with-led-bulb-glass-opal__0779179_ph161797_s5.jpg' ]);
		$p10358013->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-with-led-bulb-glass-opal__0881021_pe730108_s5.jpg' ]);
		$p10358013->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tokabo-table-lamp-with-led-bulb-glass-opal__0701671_pe724202_s5.jpg' ]);


		$p70459448 = Product::create([
			'name' => 'SVARTNORA Floor lamp with LED bulb, black',
			'price' => 89.99,
			'model_path' => '/models/00459437_PS01_S01_NV01_RQP3_3.0_bfb2b8267bfc48f98ca6d9b5f460fe52.glb',
			'is_stackable' => 0,
			'description' => 'The shape of the SVARTNORA lamp series is inspired by Danish street lighting. With practical functions and pleasant light, they’re great over a dining table, in a home office or in a living room.',
			'source' => 'https://www.ikea.com/us/en/p/svartnora-floor-lamp-with-led-bulb-black-70459448/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0893560_pe782345_s5.jpg',
			'category_id' => 16,
		]);

		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0893560_pe782345_s5.jpg' ]);
		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0893563_pe782346_s5.jpg' ]);
		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0893562_pe782347_s5.jpg' ]);
		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__1028270_ph176839_s5.jpg' ]);
		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0893561_pe782348_s5.jpg' ]);
		$p70459448->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svartnora-floor-lamp-with-led-bulb-black__0975642_ph172957_s5.jpg' ]);


		$vc00419601 = VariationCollection::create();

		$p70419612 = Product::create([
			'name' => 'RANARP Work lamp with LED bulb, off-white',
			'price' => 47.99,
			'model_path' => '/models/30231315_PS01_S01_NV01_RQP3_3.0_11ce10ed75db4c51b414c17c0dbe48e2.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-work-lamp-with-led-bulb-off-white-70419612/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0610455_pe685514_s5.jpg',
			'category_id' => 16,
		]);

		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0610455_pe685514_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0879615_pe614864_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0408782_ph129000_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__1286237_pe933512_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0880101_pe613630_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0879612_pe614451_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0259136_pe381586_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__1286238_pe933511_s5.jpg' ]);
		$p70419612->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-off-white__0281488_pe383265_s5.jpg' ]);

		$p00419601 = Product::create([
			'name' => 'RANARP Work lamp with LED bulb, black',
			'price' => 47.99,
			'model_path' => '/models/50331385_PS01_S01_NV01_RQP3_3.0_8a4a3e001b8b46d5abb78a2db9d089ff.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamps are reminiscent of the past, crafted with details like the steel joints and striped textile cord. The floor and work lamps are heavy and very stable, yet fully adjustable.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-work-lamp-with-led-bulb-black-00419601/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0610458_pe685517_s5.jpg',
			'category_id' => 16,
		]);

		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0610458_pe685517_s5.jpg' ]);
		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0879107_pe614887_s5.jpg' ]);
		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0879091_pe614089_s5.jpg' ]);
		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0579957_ph145809_s5.jpg' ]);
		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0879099_pe614455_s5.jpg' ]);
		$p00419601->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-work-lamp-with-led-bulb-black__0879712_pe614349_s5.jpg' ]);

		$vc00419601->products()->attach($p70419612->id);
		$vc00419601->products()->attach($p00419601->id);

		$p10437666 = Product::create([
			'name' => 'TÄLLBYN Table lamp with LED bulb, nickel plated/opal glass, 20 "',
			'price' => 69.99,
			'model_path' => '/models/10458994_PS01_S01_NV01_RQP3_3.0_10bc89b64e9c4972910f41d74eeb95b2.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TÄLLBYN series are made of metal and mouth blown glass with a classic yet robust design – and provide mood and functional lighting. Add a little nostalgia to the rooms of your home.',
			'source' => 'https://www.ikea.com/us/en/p/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass-10437666/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779143_pe759272_s5.jpg',
			'category_id' => 16,
		]);

		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779143_pe759272_s5.jpg' ]);
		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779142_pe759273_s5.jpg' ]);
		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779114_pe759262_s5.jpg' ]);
		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0991198_pe225117_s5.jpg' ]);
		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779141_pe759271_s5.jpg' ]);
		$p10437666->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taellbyn-table-lamp-with-led-bulb-nickel-plated-opal-glass__0779135_pe759269_s5.jpg' ]);


		$p60533444 = Product::create([
			'name' => 'BYGGKORN Floor lamp with LED bulb, black/white',
			'price' => 39.99,
			'model_path' => '/models/90533433_PS01_S01_NV01_RQP3_3.0_8f0d76ba0d9e434e82e74952b3331a6c.glb',
			'is_stackable' => 0,
			'description' => 'A design with clean lines, a soft and diffused light – and a low price. BYGGKORN floor lamp that really delivers. Also, isn\'t it extra brilliant that some of the shade’s plastic is recycled?',
			'source' => 'https://www.ikea.com/us/en/p/byggkorn-floor-lamp-with-led-bulb-black-white-60533444/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-with-led-bulb-black-white__1154344_pe886000_s5.jpg',
			'category_id' => 16,
		]);

		$p60533444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-with-led-bulb-black-white__1154344_pe886000_s5.jpg' ]);
		$p60533444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-with-led-bulb-black-white__1154374_pe886011_s5.jpg' ]);
		$p60533444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-with-led-bulb-black-white__1154363_pe886345_s5.jpg' ]);
		$p60533444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/byggkorn-floor-lamp-with-led-bulb-black-white__1154359_pe886349_s5.jpg' ]);


		$p80494328 = Product::create([
			'name' => 'ANKARSPEL Floor/reading lamp, pewter effect',
			'price' => 84.99,
			'model_path' => '/models/30490083_PS01_S01_NV01_RQP3_3.0_8d22db83bb5a4dfb974e7b017015df2f.glb',
			'is_stackable' => 0,
			'description' => 'Enjoy a common thread in your home with the timeless, traditionally styled ANKARSPEL lamps. The brushed surface looks like pewter, the cords are black and both arms and lamp heads are easy to direct.',
			'source' => 'https://www.ikea.com/us/en/p/ankarspel-floor-reading-lamp-pewter-effect-80494328/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067377_pe852699_s5.jpg',
			'category_id' => 16,
		]);

		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067377_pe852699_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067826_pe852807_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067824_pe852805_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067827_pe852808_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067823_pe852804_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067828_pe852806_s5.jpg' ]);
		$p80494328->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-pewter-effect__1067825_pe852809_s5.jpg' ]);


		$p90498000 = Product::create([
			'name' => 'KALLBLIXT Wall lamp with LED bulb, white glass',
			'price' => 29.99,
			'model_path' => '/models/90497996_PS01_S01_NV01_RQP3_3.0_7dd030ef40ea423cb3e26baba8a844e5.glb',
			'is_stackable' => 0,
			'description' => 'Wall lamp with a timeless, simple shape that is suitible for most homes. Made of mouth-blown glass that spreads a diffused, decorative light through the shiny white surface.',
			'source' => 'https://www.ikea.com/us/en/p/kallblixt-wall-lamp-with-led-bulb-white-glass-90498000/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-with-led-bulb-white-glass__0993062_pe820396_s5.jpg',
			'category_id' => 16,
		]);

		$p90498000->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-with-led-bulb-white-glass__0993062_pe820396_s5.jpg' ]);
		$p90498000->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-with-led-bulb-white-glass__0993063_pe820398_s5.jpg' ]);
		$p90498000->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-with-led-bulb-white-glass__0993064_pe820397_s5.jpg' ]);
		$p90498000->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kallblixt-wall-lamp-with-led-bulb-white-glass__0991198_pe225117_s5.jpg' ]);


		$vc10489820 = VariationCollection::create();

		$p10489820 = Product::create([
			'name' => 'KABOMBA LED wall lamp, dimmable matte/black, 19x6 "',
			'price' => 74.99,
			'model_path' => '/models/10489820_PS01_S01_NV01_RQP3_3.0_2d6ab5085940466b805da4127a4e4063.glb',
			'is_stackable' => 0,
			'description' => 'Wall lamp in a modern art deco style with a built-in dimmable LED bulb. Full light to put on make-up or shave, and more diffused light to create a calm and comfy atmosphere, just like in a hotel bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/kabomba-led-wall-lamp-dimmable-matte-black-10489820/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-dimmable-matte-black__0990238_pe818810_s5.jpg',
			'category_id' => 16,
		]);

		$p10489820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-dimmable-matte-black__0990238_pe818810_s5.jpg' ]);
		$p10489820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-dimmable-matte-black__1032889_pe837048_s5.jpg' ]);
		$p10489820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-dimmable-matte-black__1032924_pe837058_s5.jpg' ]);
		$p10489820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-dimmable-matte-black__1010970_pe828369_s5.jpg' ]);

		$vc10489820->products()->attach($p10489820->id);

		$vc00466367 = VariationCollection::create();

		$p60466369 = Product::create([
			'name' => 'JÄLLBY Cord set, textile brass plated, 4 \' 7 "',
			'price' => 25.0,
			'model_path' => '/models/80466368_PS01_S01_NV01_RQP3_3.0_240fb651ff7644f4af79843532c5dab1.glb',
			'is_stackable' => 0,
			'description' => 'You can use this cord set with a decorative light bulb or combine with a lampshade. Regardless – you get your own personal lamp with a fabric cord and a traditional look.',
			'source' => 'https://www.ikea.com/us/en/p/jaellby-cord-set-textile-brass-plated-60466369/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-brass-plated__0810856_pe771443_s5.jpg',
			'category_id' => 16,
		]);

		$p60466369->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-brass-plated__0810856_pe771443_s5.jpg' ]);
		$p60466369->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-brass-plated__0810854_pe771442_s5.jpg' ]);
		$p60466369->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-brass-plated__0914649_pe784184_s5.jpg' ]);
		$p60466369->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-brass-plated__0810855_pe771444_s5.jpg' ]);

		$p00466367 = Product::create([
			'name' => 'JÄLLBY Cord set, textile nickel plated, 4 \' 7 "',
			'price' => 25.0,
			'model_path' => '/models/20466366_PS01_S01_NV01_RQP3_3.0_1516ee9249d24632a4a30655249cf9da.glb',
			'is_stackable' => 0,
			'description' => 'You can use this cord set with a decorative light bulb or combine with a lampshade. Regardless – you get your own personal lamp with a fabric cord and a traditional look.',
			'source' => 'https://www.ikea.com/us/en/p/jaellby-cord-set-textile-nickel-plated-00466367/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-nickel-plated__0810862_pe771448_s5.jpg',
			'category_id' => 16,
		]);

		$p00466367->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-nickel-plated__0810862_pe771448_s5.jpg' ]);
		$p00466367->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-nickel-plated__0810860_pe771447_s5.jpg' ]);
		$p00466367->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaellby-cord-set-textile-nickel-plated__0810861_pe771449_s5.jpg' ]);

		$vc00466367->products()->attach($p60466369->id);
		$vc00466367->products()->attach($p00466367->id);

		$p20564178 = Product::create([
			'name' => 'KRUSNATE Ceiling spotlight with 2 lights, white',
			'price' => 9.99,
			'model_path' => '/models/10562085_PS01_S01_NV01_RQP3_3.0_7536b38327244131a7e77ad2260524d4.glb',
			'is_stackable' => 0,
			'description' => 'This ceiling track with 2 spots is almost invisible on a white ceiling and gives light where you like since each spot can be directed individually. Goes just as well in a hallway as over a kitchen island.',
			'source' => 'https://www.ikea.com/us/en/p/krusnate-ceiling-spotlight-with-2-lights-white-20564178/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1198149_pe903922_s5.jpg',
			'category_id' => 16,
		]);

		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1198149_pe903922_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1210571_pe909783_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1234428_pe917136_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1210607_pe909787_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1210669_pe909797_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1210644_pe909793_s5.jpg' ]);
		$p20564178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-spotlight-with-2-lights-white__1210551_pe909767_s5.jpg' ]);


		$p00518451 = Product::create([
			'name' => 'LÖVMÅNAD Work lamp with LED bulb, black',
			'price' => 19.99,
			'model_path' => '/models/50518439_PS01_S01_NV01_RQP3_3.0_437f0d30c26740248d23c2d4fd73cf5a.glb',
			'is_stackable' => 0,
			'description' => 'A neat lamp with a rotatable head that you can direct as you like. Ready to light up your book or magazine, day or night. Perfect to have by the armchair, bed or on the desk.',
			'source' => 'https://www.ikea.com/us/en/p/loevmanad-work-lamp-with-led-bulb-black-00518451/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-with-led-bulb-black__1045240_pe842500_s5.jpg',
			'category_id' => 16,
		]);

		$p00518451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-with-led-bulb-black__1045240_pe842500_s5.jpg' ]);
		$p00518451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-with-led-bulb-black__1045216_pe842479_s5.jpg' ]);
		$p00518451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-with-led-bulb-black__1045200_pe842463_s5.jpg' ]);
		$p00518451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevmanad-work-lamp-with-led-bulb-black__1045192_pe842462_s5.jpg' ]);


		$vc00439642 = VariationCollection::create();

		$p90439671 = Product::create([
			'name' => 'SILVERGLANS LED bathroom lighting strip, dimmable anthracite, 24 "',
			'price' => 21.99,
			'model_path' => '/models/90439671_PS01_S01_NV01_RQP3_3.0_1a524e7b2f3a4ae89146f4fef55fc139.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/silverglans-led-bathroom-lighting-strip-dimmable-anthracite-90439671/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0869953_pe781546_s5.jpg',
			'category_id' => 16,
		]);

		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0869953_pe781546_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991588_pe819489_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991587_pe819490_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322340_ph179775_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969495_pe810798_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322338_ph180138_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991590_pe819492_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969494_pe810797_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969498_pe810799_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969496_pe810801_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322339_ph187930_s5.jpg' ]);
		$p90439671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322341_ph180136_s5.jpg' ]);

		$p20439679 = Product::create([
			'name' => 'SILVERGLANS LED bathroom lighting strip, dimmable anthracite, 18 "',
			'price' => 19.99,
			'model_path' => '/models/20439679_PS01_S01_NV01_RQP3_3.0_15cde99d6cf94f8a8ffc5f3e4b4cb42c.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/silverglans-led-bathroom-lighting-strip-dimmable-anthracite-20439679/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0869950_pe781544_s5.jpg',
			'category_id' => 16,
		]);

		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0869950_pe781544_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0967091_pe810040_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991588_pe819489_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991587_pe819490_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322340_ph179775_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322338_ph180138_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0991590_pe819492_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969454_pe810781_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0967090_pe810038_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322339_ph187930_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__0969453_pe810783_s5.jpg' ]);
		$p20439679->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-anthracite__1322341_ph180136_s5.jpg' ]);

		$p00439642 = Product::create([
			'name' => 'SILVERGLANS LED bathroom lighting strip, dimmable white, 18 "',
			'price' => 19.99,
			'model_path' => '/models/00439642_PS01_S01_NV01_RQP3_3.0_19436e7a17634639ab7e59e2faac4e0e.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/silverglans-led-bathroom-lighting-strip-dimmable-white-00439642/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0869951_pe781545_s5.jpg',
			'category_id' => 16,
		]);

		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0869951_pe781545_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969470_pe810789_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969473_pe810790_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969471_pe810792_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991592_pe819494_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991587_pe819490_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969469_pe810788_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969472_pe810791_s5.jpg' ]);
		$p00439642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991588_pe819489_s5.jpg' ]);

		$p30439650 = Product::create([
			'name' => 'SILVERGLANS LED bathroom lighting strip, dimmable white, 24 "',
			'price' => 21.99,
			'model_path' => '/models/30439650_PS01_S01_NV01_RQP3_3.0_f302dd216f5347f48d3be222e76aa689.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/silverglans-led-bathroom-lighting-strip-dimmable-white-30439650/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0869954_pe781547_s5.jpg',
			'category_id' => 16,
		]);

		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0869954_pe781547_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991592_pe819494_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991587_pe819490_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969509_pe810804_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969506_pe810803_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0991588_pe819489_s5.jpg' ]);
		$p30439650->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/silverglans-led-bathroom-lighting-strip-dimmable-white__0969505_pe810802_s5.jpg' ]);

		$vc00439642->products()->attach($p90439671->id);
		$vc00439642->products()->attach($p20439679->id);
		$vc00439642->products()->attach($p00439642->id);
		$vc00439642->products()->attach($p30439650->id);

		$vc10477718 = VariationCollection::create();

		$p10477718 = Product::create([
			'name' => 'HEKTOGRAM Floor uplt/read lamp w light bulb, silver color/white',
			'price' => 47.99,
			'model_path' => '/models/80477710_PS01_S01_NV01_RQP3_3.0_2eeb83ef5a234d35bcba88a6f02b6390.glb',
			'is_stackable' => 0,
			'description' => 'This floor uplight/reading lamp gives you a pleasant light upwards and out around an entire room, and a directed light for reading. Both are easy to turn on and off with the switch at the top of the lampshade.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white-10477718/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white__0943777_pe797040_s5.jpg',
			'category_id' => 16,
		]);

		$p10477718->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white__0943777_pe797040_s5.jpg' ]);
		$p10477718->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white__0943778_pe797038_s5.jpg' ]);
		$p10477718->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white__0941177_pe795354_s5.jpg' ]);
		$p10477718->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-silver-color-white__0943779_pe797039_s5.jpg' ]);

		$p80455478 = Product::create([
			'name' => 'HEKTOGRAM Floor uplt/read lamp w light bulb, black/white',
			'price' => 47.99,
			'model_path' => '/models/50430366_PS01_S01_NV01_RQP3_3.0_0fab4f6f3db74e6299d01aa63c629df6.glb',
			'is_stackable' => 0,
			'description' => 'This floor uplight/reading lamp gives you a pleasant light upwards and out around an entire room, and a directed light for reading. Both are easy to turn on and off with the switch at the top of the lampshade.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white-80455478/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white__0958287_pe805294_s5.jpg',
			'category_id' => 16,
		]);

		$p80455478->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white__0958287_pe805294_s5.jpg' ]);
		$p80455478->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white__0958288_pe805296_s5.jpg' ]);
		$p80455478->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white__0958289_pe805295_s5.jpg' ]);
		$p80455478->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplt-read-lamp-w-light-bulb-black-white__0958286_pe805292_s5.jpg' ]);

		$vc10477718->products()->attach($p10477718->id);
		$vc10477718->products()->attach($p80455478->id);

		$p60544428 = Product::create([
			'name' => 'HÅRMÖJA Chandelier, 6-armed, brushed stainless steel, 24 "',
			'price' => 79.99,
			'model_path' => '/models/50522479_PS01_S01_NV01_RQP3_3.0_7b718bcc2bbe4e0cba5b08920f0371b4.glb',
			'is_stackable' => 0,
			'description' => 'Like a glittering octopus, the chandelier’s 6 arms stretch towards the ceiling and spread a pleasant light. And since the top decoration is removeable, you can quickly switch styles – from elegant to neat.',
			'source' => 'https://www.ikea.com/us/en/p/harmoeja-chandelier-6-armed-brushed-stainless-steel-60544428/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1190918_pe900352_s5.jpg',
			'category_id' => 16,
		]);

		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1190918_pe900352_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181714_pe896754_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181717_pe896757_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181715_pe896755_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181754_pe896761_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181716_pe896759_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1181755_pe896760_s5.jpg' ]);
		$p60544428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harmoeja-chandelier-6-armed-brushed-stainless-steel__1190917_pe900353_s5.jpg' ]);


		$vc10437831 = VariationCollection::create();

		$p10488298 = Product::create([
			'name' => 'UPPVIND Floor lamp with LED bulb, brass plated/white, 59 "',
			'price' => 139.99,
			'model_path' => '/models/50483152_PS01_S01_NV01_RQP3_3.0_2564aca81dad401ab05b0c42ef13a64c.glb',
			'is_stackable' => 0,
			'description' => 'Shaped like a shiny tuning fork topped with a slim oval shade, this sturdy floor lamp catches the eye and spreads a soft, decorative light wherever you choose to place it.',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-floor-lamp-with-led-bulb-brass-plated-white-10488298/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-brass-plated-white__0957412_pe804984_s5.jpg',
			'category_id' => 16,
		]);

		$p10488298->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-brass-plated-white__0957412_pe804984_s5.jpg' ]);
		$p10488298->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-brass-plated-white__0957413_pe804986_s5.jpg' ]);
		$p10488298->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-brass-plated-white__0957414_pe804985_s5.jpg' ]);

		$p10437831 = Product::create([
			'name' => 'UPPVIND Floor lamp with LED bulb, nickel plated/white, 59 "',
			'price' => 139.99,
			'model_path' => '/models/20437821_PS01_S01_NV01_RQP3_3.0_817b60089f454b84ace316f4aed06b33.glb',
			'is_stackable' => 0,
			'description' => 'Shaped like a shiny tuning fork topped with a slim oval shade, this sturdy floor lamp catches the eye and spreads a soft, decorative light wherever you choose to place it.',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-floor-lamp-with-led-bulb-nickel-plated-white-10437831/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-nickel-plated-white__0957613_pe805083_s5.jpg',
			'category_id' => 16,
		]);

		$p10437831->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-nickel-plated-white__0957613_pe805083_s5.jpg' ]);
		$p10437831->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-nickel-plated-white__0957615_pe805084_s5.jpg' ]);
		$p10437831->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-nickel-plated-white__0957614_pe805082_s5.jpg' ]);
		$p10437831->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-floor-lamp-with-led-bulb-nickel-plated-white__1116039_ph181364_s5.jpg' ]);

		$vc10437831->products()->attach($p10488298->id);
		$vc10437831->products()->attach($p10437831->id);

		$vc20477751 = VariationCollection::create();

		$p60448605 = Product::create([
			'name' => 'NYMÅNE Work lamp w/charging+LED bulb, white',
			'price' => 89.99,
			'model_path' => '/models/20448607_PS01_S01_NV01_RQP3_3.0_1130ecc72da8447b8f7f42eee2c82a56.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-work-lamp-w-charging-led-bulb-white-60448605/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0991755_pe819570_s5.jpg',
			'category_id' => 16,
		]);

		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0991755_pe819570_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__1197854_ph188087_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0996394_pe822276_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0996396_pe822277_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0993554_pe820585_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__1023850_ph177726_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0996395_pe822278_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__1023816_ph177990_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0996422_pe822290_s5.jpg' ]);
		$p60448605->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-white__0993555_pe820584_s5.jpg' ]);

		$p20477751 = Product::create([
			'name' => 'NYMÅNE Work lamp w/charging+LED bulb, anthracite',
			'price' => 89.99,
			'model_path' => '/models/90477743_PS01_S01_NV01_RQP3_3.0_720d458ef63d48a6999c38e939a6fcc1.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-work-lamp-w-charging-led-bulb-anthracite-20477751/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0991757_pe819571_s5.jpg',
			'category_id' => 16,
		]);

		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0991757_pe819571_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0996398_pe822280_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0996400_pe822281_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0996399_pe822282_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0993560_pe820591_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0993561_pe820590_s5.jpg' ]);
		$p20477751->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-work-lamp-w-charging-led-bulb-anthracite__0996424_pe822292_s5.jpg' ]);

		$vc20477751->products()->attach($p60448605->id);
		$vc20477751->products()->attach($p20477751->id);

		$vc30556502 = VariationCollection::create();

		$p30556502 = Product::create([
			'name' => 'HÅRSLINGA Floor lamp with LED bulb, black',
			'price' => 34.99,
			'model_path' => '/models/90556491_PS01_S01_NV01_RQP3_3.0_7bdd641fd6f64e20a1924b229babc2e4.glb',
			'is_stackable' => 0,
			'description' => 'It’s simple to direct the light where you want it since the holder for the bulb rotates and moves up and down on the pole.',
			'source' => 'https://www.ikea.com/us/en/p/harslinga-floor-lamp-with-led-bulb-black-30556502/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1167713_pe891683_s5.jpg',
			'category_id' => 16,
		]);

		$p30556502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1167713_pe891683_s5.jpg' ]);
		$p30556502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1177888_pe895541_s5.jpg' ]);
		$p30556502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1177889_pe895540_s5.jpg' ]);
		$p30556502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1172047_pe893243_s5.jpg' ]);
		$p30556502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-black__1177887_pe895539_s5.jpg' ]);

		$p80538898 = Product::create([
			'name' => 'HÅRSLINGA Floor lamp with LED bulb, white',
			'price' => 34.99,
			'model_path' => '/models/90522477_PS01_S01_NV01_RQP3_3.0_5af4a4488c734e82a2a99e5832936f4b.glb',
			'is_stackable' => 0,
			'description' => 'It’s simple to direct the light where you want it since the holder for the bulb rotates and moves up and down on the pole.',
			'source' => 'https://www.ikea.com/us/en/p/harslinga-floor-lamp-with-led-bulb-white-80538898/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1167624_pe891605_s5.jpg',
			'category_id' => 16,
		]);

		$p80538898->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1167624_pe891605_s5.jpg' ]);
		$p80538898->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1145639_pe882722_s5.jpg' ]);
		$p80538898->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1145642_pe882724_s5.jpg' ]);
		$p80538898->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1145640_pe882723_s5.jpg' ]);
		$p80538898->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/harslinga-floor-lamp-with-led-bulb-white__1144443_pe881822_s5.jpg' ]);

		$vc30556502->products()->attach($p30556502->id);
		$vc30556502->products()->attach($p80538898->id);

		$p80405643 = Product::create([
			'name' => 'KRYSSMAST Table lamp base, nickel plated',
			'price' => 30.0,
			'model_path' => '/models/50405625_PS01_S01_NV01_RQP3_3.0_8c81ae9b8a3240d7bf3df7275d37bc13.glb',
			'is_stackable' => 0,
			'description' => 'You can easily create your own personal lamp by combining the lamp base with your choice of lampshade, or just a decorative light bulb.',
			'source' => 'https://www.ikea.com/us/en/p/kryssmast-table-lamp-base-nickel-plated-80405643/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0716080_pe730693_s5.jpg',
			'category_id' => 16,
		]);

		$p80405643->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0716080_pe730693_s5.jpg' ]);
		$p80405643->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0975478_ph173267_s5.jpg' ]);
		$p80405643->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0879233_pe730694_s5.jpg' ]);
		$p80405643->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0975516_ph172744_s5.jpg' ]);
		$p80405643->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-base-nickel-plated__0789157_pe763849_s5.jpg' ]);


		$p20459969 = Product::create([
			'name' => 'TONVIS Table lamp with LED bulb, smoked glass/white, 20 "',
			'price' => 79.99,
			'model_path' => '/models/30450402_PS01_S01_NV01_RQP3_3.0_a798094f05e141cc8424b901bd43ba66.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp has a base in mouth-blown smoke-colored glass and a cloth lampshade that spreads a warm, cozy light. With a total height of 20½", it is just as decorative even when switched off.',
			'source' => 'https://www.ikea.com/us/en/p/tonvis-table-lamp-with-led-bulb-smoked-glass-white-20459969/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0972606_pe811703_s5.jpg',
			'category_id' => 16,
		]);

		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0972606_pe811703_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0978960_ph175821_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0954619_pe803411_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__1023815_ph176181_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0954620_pe803410_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0991234_pe225118_s5.jpg' ]);
		$p20459969->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tonvis-table-lamp-with-led-bulb-smoked-glass-white__0975475_ph175705_s5.jpg' ]);


		$p40494349 = Product::create([
			'name' => 'ANKARSPEL Work lamp, pewter effect',
			'price' => 49.99,
			'model_path' => '/models/80490085_PS01_S01_NV01_RQP3_3.0_9d19ddef682c429ab6813c40f98ad830.glb',
			'is_stackable' => 0,
			'description' => 'Enjoy a common thread in your home with the timeless, traditionally styled ANKARSPEL lamps. The brushed surface looks like pewter, the cords are black and both arms and lamp heads are easy to direct.',
			'source' => 'https://www.ikea.com/us/en/p/ankarspel-work-lamp-pewter-effect-40494349/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1130984_pe877967_s5.jpg',
			'category_id' => 16,
		]);

		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1130984_pe877967_s5.jpg' ]);
		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1067915_pe852822_s5.jpg' ]);
		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1067913_pe852818_s5.jpg' ]);
		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1067914_pe852819_s5.jpg' ]);
		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1067917_pe852820_s5.jpg' ]);
		$p40494349->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-pewter-effect__1067916_pe852821_s5.jpg' ]);


		$p80469376 = Product::create([
			'name' => 'TOMELILLA Floor lamp with LED bulb, nickel plated/white, 59 "',
			'price' => 69.99,
			'model_path' => '/models/30464041_PS01_S01_NV01_RQP3_3.0_0b33d890256a8b47a3e9a37d23b85651.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TOMELILLA series stand firmly on aluminium bases and have rectangular textile lampshades that take up less space than round ones. The look is modern and stylish – with a warm soft light.',
			'source' => 'https://www.ikea.com/us/en/p/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white-80469376/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white__0928814_pe789976_s5.jpg',
			'category_id' => 16,
		]);

		$p80469376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white__0928814_pe789976_s5.jpg' ]);
		$p80469376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white__0827689_pe776472_s5.jpg' ]);
		$p80469376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white__1049492_pe844176_s5.jpg' ]);
		$p80469376->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-floor-lamp-with-led-bulb-nickel-plated-white__1049491_pe844177_s5.jpg' ]);


		$p20494331 = Product::create([
			'name' => 'ANKARSPEL Floor/reading lamp with LED bulb, pewter effect',
			'price' => 89.99,
			'model_path' => '/models/30490083_PS01_S01_NV01_RQP3_3.0_8d22db83bb5a4dfb974e7b017015df2f.glb',
			'is_stackable' => 0,
			'description' => 'Enjoy a common thread in your home with the timeless, traditionally styled ANKARSPEL lamps. The brushed surface looks like pewter, the cords are black and both arms and lamp heads are easy to direct.',
			'source' => 'https://www.ikea.com/us/en/p/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect-20494331/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067377_pe852699_s5.jpg',
			'category_id' => 16,
		]);

		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067377_pe852699_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067828_pe852806_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067826_pe852807_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067824_pe852805_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067825_pe852809_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067827_pe852808_s5.jpg' ]);
		$p20494331->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-floor-reading-lamp-with-led-bulb-pewter-effect__1067823_pe852804_s5.jpg' ]);


		$p40459845 = Product::create([
			'name' => 'SNÖBYAR Table lamp with LED bulb, gray-turquoise ceramic/gray, 20 "',
			'price' => 84.99,
			'model_path' => '/models/50450401_PS01_S01_NV01_RQP3_3.0_13511d19587146f8836af9601d220417.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp has a ceramic foot and a lampshade that spreads a warm and cozy light through the gray fabric. With a total height of 20½", it’s just as decorative – regardless if it’s on or off.',
			'source' => 'https://www.ikea.com/us/en/p/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray-40459845/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0952098_pe801573_s5.jpg',
			'category_id' => 16,
		]);

		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0952098_pe801573_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0952101_pe801574_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0952100_pe801575_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__1292419_ph182303_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0978963_ph175968_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__0952099_pe801576_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__1292421_ph180613_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__1292423_ph188016_s5.jpg' ]);
		$p40459845->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/snoebyar-table-lamp-with-led-bulb-gray-turquoise-ceramic-gray__1292418_ph179273_s5.jpg' ]);


		$p40516780 = Product::create([
			'name' => 'SKURUP Work lamp with LED bulb, black',
			'price' => 24.99,
			'model_path' => '/models/80516778_PS01_S01_NV01_RQP3_3.0_cdfbe8140836403fb68cb4a862fc351c.glb',
			'is_stackable' => 0,
			'description' => '',
			'source' => 'https://www.ikea.com/us/en/p/skurup-work-lamp-with-led-bulb-black-40516780/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1019457_pe831378_s5.jpg',
			'category_id' => 16,
		]);

		$p40516780->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1019457_pe831378_s5.jpg' ]);
		$p40516780->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1019459_pe831380_s5.jpg' ]);
		$p40516780->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1222806_ph192221_s5.jpg' ]);
		$p40516780->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1019458_pe831381_s5.jpg' ]);
		$p40516780->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skurup-work-lamp-with-led-bulb-black__1019460_pe831379_s5.jpg' ]);


		$p70437687 = Product::create([
			'name' => 'SIMRISHAMN Table lamp with LED bulb, chrome plated/opal glass, 17 "',
			'price' => 59.99,
			'model_path' => '/models/G-00437676-17f759bf8fe998f54f028573a6244572fb58e095_03182e8a3e6342be8e2b71c0e7b69245.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass-70437687/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0789483_pe763998_s5.jpg',
			'category_id' => 16,
		]);

		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0789483_pe763998_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__1028256_ph177468_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0807550_pe770426_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0934537_ph168508_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0888340_ph168817_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__1197806_ph190313_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0939858_ph172087_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0789496_pe764046_s5.jpg' ]);
		$p70437687->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-lamp-with-led-bulb-chrome-plated-opal-glass__0818893_pe774641_s5.jpg' ]);


		$p10364226 = Product::create([
			'name' => 'EVEDAL Pendant lamp, gray, 11 "',
			'price' => 229.99,
			'model_path' => '/models/90361257_PS01_S01_NV01_RQP3_3.0_02fa63ca53864319ade69d2ec00e03fa.glb',
			'is_stackable' => 0,
			'description' => 'Genuine materials like glass and brass, together with timeless Scandinavian design. We hope that you want to keep this series of lamps your entire life, and maybe pass them down to the next generation.',
			'source' => 'https://www.ikea.com/us/en/p/evedal-pendant-lamp-gray-10364226/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0627372_pe693313_s5.jpg',
			'category_id' => 16,
		]);

		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0627372_pe693313_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0795471_ph163226_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__1351237_ph171449_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0880979_pe680878_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0702740_ph155545_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__0991198_pe225117_s5.jpg' ]);
		$p10364226->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/evedal-pendant-lamp-gray__1044512_ph176917_s5.jpg' ]);


		$p70494343 = Product::create([
			'name' => 'ANKARSPEL Work lamp with LED bulb, pewter effect',
			'price' => 54.99,
			'model_path' => '/models/80490085_PS01_S01_NV01_RQP3_3.0_9d19ddef682c429ab6813c40f98ad830.glb',
			'is_stackable' => 0,
			'description' => 'Enjoy a common thread in your home with the timeless, traditionally styled ANKARSPEL lamps. The brushed surface looks like pewter, the cords are black and both arms and lamp heads are easy to direct.',
			'source' => 'https://www.ikea.com/us/en/p/ankarspel-work-lamp-with-led-bulb-pewter-effect-70494343/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1130984_pe877967_s5.jpg',
			'category_id' => 16,
		]);

		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1130984_pe877967_s5.jpg' ]);
		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1067913_pe852818_s5.jpg' ]);
		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1067917_pe852820_s5.jpg' ]);
		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1067914_pe852819_s5.jpg' ]);
		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1067915_pe852822_s5.jpg' ]);
		$p70494343->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ankarspel-work-lamp-with-led-bulb-pewter-effect__1067916_pe852821_s5.jpg' ]);


		$p80464072 = Product::create([
			'name' => 'SOLKLINT Wall lamp, brass/gray clear glass',
			'price' => 27.99,
			'model_path' => '/models/20464065_PS01_S01_NV01_RQP3_3.0_53debed1973840a9a9c417430455d882.glb',
			'is_stackable' => 0,
			'description' => 'Like small jewels in shiny brass and gray clear glass, the lamps in the SOLKLINT series spread a soft mood light that creates exciting shadows on walls and ceilings – wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/solklint-wall-lamp-brass-gray-clear-glass-80464072/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__0842283_pe778932_s5.jpg',
			'category_id' => 16,
		]);

		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__0842283_pe778932_s5.jpg' ]);
		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__1061777_ph179112_s5.jpg' ]);
		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__0975400_ph172649_s5.jpg' ]);
		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__1287914_ph179030_s5.jpg' ]);
		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__0842284_pe778931_s5.jpg' ]);
		$p80464072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-brass-gray-clear-glass__0842282_pe778929_s5.jpg' ]);


		$p40163882 = Product::create([
			'name' => 'ÅRSTID Wall lamp, nickel plated/white',
			'price' => 31.99,
			'model_path' => '/models/G-60163876-b713309bb44d25d360c4bfca613bef249cd35573_02796eda80f941068d82d140e1bde241.glb',
			'is_stackable' => 0,
			'description' => 'One of our most cherished lamp series and it’s no wonder why – it has a timeless design that fits right in. Combine several lamps from the series to create a soft, comfortable light and a unified look.',
			'source' => 'https://www.ikea.com/us/en/p/arstid-wall-lamp-nickel-plated-white-40163882/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0606627_pe682427_s5.jpg',
			'category_id' => 16,
		]);

		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0606627_pe682427_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0459991_ph132611_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0178614_pe245813_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__1101516_pe866695_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0879031_pe616102_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0879035_pe618779_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__1101397_pe866657_s5.jpg' ]);
		$p40163882->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arstid-wall-lamp-nickel-plated-white__0879039_pe654344_s5.jpg' ]);


		$p10464075 = Product::create([
			'name' => 'SOLKLINT Wall lamp with LED bulb, brass/gray clear glass',
			'price' => 29.99,
			'model_path' => '/models/20464065_PS01_S01_NV01_RQP3_3.0_53debed1973840a9a9c417430455d882.glb',
			'is_stackable' => 0,
			'description' => 'Like small jewels in shiny brass and gray clear glass, the lamps in the SOLKLINT series spread a soft mood light that creates exciting shadows on walls and ceilings – wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass-10464075/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__0842283_pe778932_s5.jpg',
			'category_id' => 16,
		]);

		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__0842283_pe778932_s5.jpg' ]);
		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__0842282_pe778929_s5.jpg' ]);
		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__0842284_pe778931_s5.jpg' ]);
		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__1061777_ph179112_s5.jpg' ]);
		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__0975400_ph172649_s5.jpg' ]);
		$p10464075->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-wall-lamp-with-led-bulb-brass-gray-clear-glass__1287914_ph179030_s5.jpg' ]);


		$p60357006 = Product::create([
			'name' => 'NYMÅNE Wall lamp with swing arm + LED bulb, white',
			'price' => 47.99,
			'model_path' => '/models/G-40356908-6969bd625784efda1e691e61bb6952d8851a2852_16d1fb52a92e42f4b52382608d39d2b5.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-wall-lamp-with-swing-arm-led-bulb-white-60357006/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0556038_pe660479_s5.jpg',
			'category_id' => 16,
		]);

		$p60357006->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0556038_pe660479_s5.jpg' ]);
		$p60357006->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0879134_pe660478_s5.jpg' ]);
		$p60357006->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0916692_ph168330_s5.jpg' ]);
		$p60357006->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0888610_ph162588_s5.jpg' ]);
		$p60357006->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-lamp-with-swing-arm-led-bulb-white__0879146_pe672121_s5.jpg' ]);


		$p10416249 = Product::create([
			'name' => 'HEKTAR Work lamp with LED bulb, dark gray',
			'price' => 74.99,
			'model_path' => '/models/90349374_PS01_S01_NV01_RQP3_3.0_5b51616a64544476b277f88075c7221b.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-work-lamp-with-led-bulb-dark-gray-10416249/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-led-bulb-dark-gray__0470194_pe612598_s5.jpg',
			'category_id' => 16,
		]);

		$p10416249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-led-bulb-dark-gray__0470194_pe612598_s5.jpg' ]);
		$p10416249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-led-bulb-dark-gray__0880888_pe612597_s5.jpg' ]);
		$p10416249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-led-bulb-dark-gray__0879880_pe622563_s5.jpg' ]);
		$p10416249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-led-bulb-dark-gray__0880894_pe646808_s5.jpg' ]);


		$p50464064 = Product::create([
			'name' => 'FYXNÄS Floor lamp with LED bulb, turquoise',
			'price' => 49.99,
			'model_path' => '/models/G-60464054-0efeec9d4f6f1e4ce966669c70a05c8471fe964e_0aa2a989c5bd4b1ca537050ca485d1af.glb',
			'is_stackable' => 0,
			'description' => 'Like a tripod with a retro feel. FYXNÄS floor and table lamps with metal legs and double layers of stretchy fabric in soft colors spread a decorative mood light wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/fyxnaes-floor-lamp-with-led-bulb-turquoise-50464064/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-with-led-bulb-turquoise__0859511_pe780942_s5.jpg',
			'category_id' => 16,
		]);

		$p50464064->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-with-led-bulb-turquoise__0859511_pe780942_s5.jpg' ]);
		$p50464064->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-with-led-bulb-turquoise__0859512_pe780944_s5.jpg' ]);
		$p50464064->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-with-led-bulb-turquoise__1046552_ph172549_s5.jpg' ]);
		$p50464064->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyxnaes-floor-lamp-with-led-bulb-turquoise__0859513_pe780943_s5.jpg' ]);


		$p90405713 = Product::create([
			'name' => 'KRYSSMAST Table lamp with LED bulb, nickel plated',
			'price' => 35.0,
			'model_path' => '/models/50405625_PS01_S01_NV01_RQP3_3.0_8c81ae9b8a3240d7bf3df7275d37bc13.glb',
			'is_stackable' => 0,
			'description' => 'You can easily create your own personal lamp by combining the lamp base with your choice of lampshade, or just a decorative light bulb.',
			'source' => 'https://www.ikea.com/us/en/p/kryssmast-table-lamp-with-led-bulb-nickel-plated-90405713/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0716080_pe730693_s5.jpg',
			'category_id' => 16,
		]);

		$p90405713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0716080_pe730693_s5.jpg' ]);
		$p90405713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0975478_ph173267_s5.jpg' ]);
		$p90405713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0879233_pe730694_s5.jpg' ]);
		$p90405713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0975516_ph172744_s5.jpg' ]);
		$p90405713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-table-lamp-with-led-bulb-nickel-plated__0789157_pe763849_s5.jpg' ]);


		$vc00323887 = VariationCollection::create();

		$p00323887 = Product::create([
			'name' => 'TÄRNABY Table lamp, dimmable anthracite, 10 "',
			'price' => 29.99,
			'model_path' => '/models/60323894_PS01_S01_NV01_RQP3_3.0_5068fb61ded44d33be368b2ea850f1d0.glb',
			'is_stackable' => 0,
			'description' => 'Inspired by traditional kerosene lamps and a mood lighting which is soft and warm. The visible light bulb emulates a live flame and you can adjust the brightness with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/taernaby-table-lamp-dimmable-anthracite-00323887/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__1188962_pe899634_s5.jpg',
			'category_id' => 16,
		]);

		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__1188962_pe899634_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__0880791_pe670203_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__0747833_ph155459_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__0811972_pe771891_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__0760736_ph160475_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__0908404_ph168349_s5.jpg' ]);
		$p00323887->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-anthracite__1105554_ph166557_s5.jpg' ]);

		$p10508079 = Product::create([
			'name' => 'TÄRNABY Table lamp, dimmable beige, 10 "',
			'price' => 29.99,
			'model_path' => '/models/40508073_PS01_S01_NV01_RQP3_3.0_111df64a7e79484a878e77acb11116eb.glb',
			'is_stackable' => 0,
			'description' => 'Inspired by traditional kerosene lamps and a mood lighting which is soft and warm. The visible light bulb emulates a live flame and you can adjust the brightness with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/taernaby-table-lamp-dimmable-beige-10508079/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1188960_pe899632_s5.jpg',
			'category_id' => 16,
		]);

		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1188960_pe899632_s5.jpg' ]);
		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1081808_ph180667_s5.jpg' ]);
		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1001764_pe824461_s5.jpg' ]);
		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1001758_pe824460_s5.jpg' ]);
		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1001765_pe824462_s5.jpg' ]);
		$p10508079->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-dimmable-beige__1094161_ph180002_s5.jpg' ]);

		$vc00323887->products()->attach($p00323887->id);
		$vc00323887->products()->attach($p10508079->id);

		$vc20404905 = VariationCollection::create();

		$p40405819 = Product::create([
			'name' => 'LAUTERS Table lamp, brown ash/white',
			'price' => 39.99,
			'model_path' => '/models/00404906_PS01_S01_NV01_RQP3_3.0_76bf997c34ec4172ad36e7f9b4ab401d.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― and you can also hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-table-lamp-brown-ash-white-40405819/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-brown-ash-white__0713766_pe729748_s5.jpg',
			'category_id' => 16,
		]);

		$p40405819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-brown-ash-white__0713766_pe729748_s5.jpg' ]);
		$p40405819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-brown-ash-white__0713765_pe729749_s5.jpg' ]);
		$p40405819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-brown-ash-white__0759973_pe750551_s5.jpg' ]);
		$p40405819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-brown-ash-white__0879939_pe729747_s5.jpg' ]);

		$p20404905 = Product::create([
			'name' => 'LAUTERS Table lamp, ash/white',
			'price' => 39.99,
			'model_path' => '/models/50404895_PS01_S01_NV01_RQP3_3.0_553205f4182242a4b38db312f308047e.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― and you can also hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-table-lamp-ash-white-20404905/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0663864_pe712537_s5.jpg',
			'category_id' => 16,
		]);

		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0663864_pe712537_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0669171_pe714877_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0953273_ph167447_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__1239437_pe918903_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__1061719_ph177635_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0759974_pe750552_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0879402_pe714879_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0879400_pe714878_s5.jpg' ]);
		$p20404905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-ash-white__0795495_ph164950_s5.jpg' ]);

		$vc20404905->products()->attach($p40405819->id);
		$vc20404905->products()->attach($p20404905->id);

		$vc00439595 = VariationCollection::create();

		$p40439602 = Product::create([
			'name' => 'SKYDRAG LED cntp/wrd lght strp w sensor, dimmable white, 24 "',
			'price' => 27.99,
			'model_path' => '/models/40439602_PS01_S01_NV01_RQP3_3.0_d4562986b5824120b26a6c54e9b88f89.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing kitchen.',
			'source' => 'https://www.ikea.com/us/en/p/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white-40439602/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812900_pe772200_s5.jpg',
			'category_id' => 16,
		]);

		$p40439602->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812900_pe772200_s5.jpg' ]);
		$p40439602->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0914763_pe784281_s5.jpg' ]);
		$p40439602->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812901_pe772201_s5.jpg' ]);
		$p40439602->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0970124_ph171538_s5.jpg' ]);
		$p40439602->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0929927_pe790527_s5.jpg' ]);

		$p00439595 = Product::create([
			'name' => 'SKYDRAG LED cntp/wrd lght strp w sensor, dimmable white, 18 "',
			'price' => 21.99,
			'model_path' => '/models/00439595_PS01_S01_NV01_RQP3_3.0_2ef1c105fb054fc4a841bf7166216e8a.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing kitchen.',
			'source' => 'https://www.ikea.com/us/en/p/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white-00439595/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812910_pe772205_s5.jpg',
			'category_id' => 16,
		]);

		$p00439595->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812910_pe772205_s5.jpg' ]);
		$p00439595->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0914763_pe784281_s5.jpg' ]);
		$p00439595->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812901_pe772201_s5.jpg' ]);
		$p00439595->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0970124_ph171538_s5.jpg' ]);
		$p00439595->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0929927_pe790527_s5.jpg' ]);

		$p00479162 = Product::create([
			'name' => 'SKYDRAG LED cntp/wrd lght strp w sensor, dimmable white, 12 "',
			'price' => 17.99,
			'model_path' => '/models/00479162_PS01_S01_NV01_RQP3_3.0_1eef9562b18746be9e715173b001d9ec.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing kitchen.',
			'source' => 'https://www.ikea.com/us/en/p/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white-00479162/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812910_pe772205_s5.jpg',
			'category_id' => 16,
		]);

		$p00479162->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812910_pe772205_s5.jpg' ]);
		$p00479162->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0914763_pe784281_s5.jpg' ]);
		$p00479162->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0812901_pe772201_s5.jpg' ]);
		$p00479162->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0970124_ph171538_s5.jpg' ]);
		$p00479162->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-white__0929927_pe790527_s5.jpg' ]);

		$vc00439595->products()->attach($p40439602->id);
		$vc00439595->products()->attach($p00439595->id);
		$vc00439595->products()->attach($p00479162->id);

		$vc00311498 = VariationCollection::create();

		$p20531748 = Product::create([
			'name' => 'IKEA PS 2014 Pendant lamp, black, 14 "',
			'price' => 69.99,
			'model_path' => '/models/50531742_PS01_S01_NV01_RQP3_3.0_48bade5e8fd042c9865a3425798279c5.glb',
			'is_stackable' => 0,
			'description' => 'A pull of the strings on IKEA PS 2014 pendant lamp gives the faintly glowing globe a shape that looks like a spaceship where light flows out of it. Made of black transparent plastic that’s partly recycled.',
			'source' => 'https://www.ikea.com/us/en/p/ikea-ps-2014-pendant-lamp-black-20531748/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120764_pe873940_s5.jpg',
			'category_id' => 16,
		]);

		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120764_pe873940_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1189963_ph192042_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120760_pe873939_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120763_pe873942_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1189964_ph192047_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120761_pe873943_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120762_pe873941_s5.jpg' ]);
		$p20531748->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-black__1120759_pe873938_s5.jpg' ]);

		$p00311498 = Product::create([
			'name' => 'IKEA PS 2014 Pendant lamp, white/silver color, 14 "',
			'price' => 79.99,
			'model_path' => '/models/90311494_PS01_S01_NV01_RQP3_3.0_6f3063205475450c9829ba499e415581.glb',
			'is_stackable' => 0,
			'description' => 'Inspired by science fiction movies, IKEA PS 2014 pendant lamp is a winner of the international design competition Red Dot Award. Change its shape and intensity of light with a simple pull of the strings.',
			'source' => 'https://www.ikea.com/us/en/p/ikea-ps-2014-pendant-lamp-white-silver-color-00311498/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0607424_pe682974_s5.jpg',
			'category_id' => 16,
		]);

		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0607424_pe682974_s5.jpg' ]);
		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0880396_pe615288_s5.jpg' ]);
		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0364071_pe548625_s5.jpg' ]);
		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0880386_pe613933_s5.jpg' ]);
		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__1051465_pe845548_s5.jpg' ]);
		$p00311498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ikea-ps-2014-pendant-lamp-white-silver-color__0880374_pe548623_s5.jpg' ]);

		$vc00311498->products()->attach($p20531748->id);
		$vc00311498->products()->attach($p00311498->id);

		$vc30494750 = VariationCollection::create();

		$p30494750 = Product::create([
			'name' => 'SYMFONISK Shade for speaker lamp base, glass/white',
			'price' => 59.0,
			'model_path' => '/models/30494750_PS01_S01_NV01_RQP3_3.0_5ba25e6ac3a4420c8b38e7277482b9b5.glb',
			'is_stackable' => 0,
			'description' => 'Choose between a white or black glass lamp shade to complete your SYMFONISK speaker lamp base with WiFi. You can create a soft, cozy atmosphere in your home with this glass shade that spreads a diffused and decorative light.',
			'source' => 'https://www.ikea.com/us/en/p/symfonisk-shade-for-speaker-lamp-base-glass-white-30494750/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-glass-white__0985559_pe816670_s5.jpg',
			'category_id' => 16,
		]);

		$p30494750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-glass-white__0985559_pe816670_s5.jpg' ]);
		$p30494750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-glass-white__0993368_pe820514_s5.jpg' ]);
		$p30494750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-glass-white__0993366_pe820515_s5.jpg' ]);
		$p30494750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-glass-white__0985560_pe816669_s5.jpg' ]);

		$vc30494750->products()->attach($p30494750->id);

		$vc20431635 = VariationCollection::create();

		$p80431642 = Product::create([
			'name' => 'FRIHULT Wall lamp, black',
			'price' => 34.99,
			'model_path' => '/models/80431642_PS01_S01_NV01_RQP3_3.0_ced8068e12844d7c914afab85301ec0e.glb',
			'is_stackable' => 0,
			'description' => 'The soft, round shapes and use of metal and glass create a timeless look that resembles lamps of the past. It is approved for bathroom use and is also a good solution for hallways.',
			'source' => 'https://www.ikea.com/us/en/p/frihult-wall-lamp-black-80431642/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__0689521_pe723015_s5.jpg',
			'category_id' => 16,
		]);

		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__0689521_pe723015_s5.jpg' ]);
		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__0689546_pe723036_s5.jpg' ]);
		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__1091998_ph179776_s5.jpg' ]);
		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__1052388_pe846068_s5.jpg' ]);
		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__0881394_pe723082_s5.jpg' ]);
		$p80431642->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-black__0689552_pe723044_s5.jpg' ]);

		$p20431635 = Product::create([
			'name' => 'FRIHULT Wall lamp, brass color',
			'price' => 34.99,
			'model_path' => '/models/20431602_PS01_S01_NV01_RQP3_3.0_5155a1a392834bffabee944040aa67ad.glb',
			'is_stackable' => 0,
			'description' => 'The soft, round shapes and use of metal and glass create a timeless look that resembles lamps of the past. It is approved for bathroom use and is also a good solution for hallways.',
			'source' => 'https://www.ikea.com/us/en/p/frihult-wall-lamp-brass-color-20431635/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__0689523_pe723017_s5.jpg',
			'category_id' => 16,
		]);

		$p20431635->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__0689523_pe723017_s5.jpg' ]);
		$p20431635->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__0689548_pe723038_s5.jpg' ]);
		$p20431635->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__0689758_pe723084_s5.jpg' ]);
		$p20431635->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__0689554_pe723046_s5.jpg' ]);
		$p20431635->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-brass-color__1052389_pe846069_s5.jpg' ]);

		$p70431628 = Product::create([
			'name' => 'FRIHULT Wall lamp, stainless steel color',
			'price' => 34.99,
			'model_path' => '/models/40431601_PS01_S01_NV01_RQP3_3.0_15510c12b3bb4112b7afe086985e98f6.glb',
			'is_stackable' => 0,
			'description' => 'The soft, round shapes and use of metal and glass create a timeless look that resembles lamps of the past. It is approved for bathroom use and is also a good solution for hallways.',
			'source' => 'https://www.ikea.com/us/en/p/frihult-wall-lamp-stainless-steel-color-70431628/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__0689525_pe723019_s5.jpg',
			'category_id' => 16,
		]);

		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__0689525_pe723019_s5.jpg' ]);
		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__0689556_pe723048_s5.jpg' ]);
		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__0689550_pe723040_s5.jpg' ]);
		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__1115152_ph179560_s5.jpg' ]);
		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__0689763_pe723089_s5.jpg' ]);
		$p70431628->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/frihult-wall-lamp-stainless-steel-color__1052390_pe846070_s5.jpg' ]);

		$vc20431635->products()->attach($p80431642->id);
		$vc20431635->products()->attach($p20431635->id);
		$vc20431635->products()->attach($p70431628->id);

		$vc00405816 = VariationCollection::create();

		$p10404897 = Product::create([
			'name' => 'LAUTERS Table lamp with LED bulb, ash/white',
			'price' => 41.99,
			'model_path' => '/models/50404895_PS01_S01_NV01_RQP3_3.0_553205f4182242a4b38db312f308047e.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― and you can also hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-table-lamp-with-led-bulb-ash-white-10404897/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0663864_pe712537_s5.jpg',
			'category_id' => 16,
		]);

		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0663864_pe712537_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__1239437_pe918903_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__1061719_ph177635_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0759974_pe750552_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0795495_ph164950_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0669171_pe714877_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0953273_ph167447_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0879400_pe714878_s5.jpg' ]);
		$p10404897->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-ash-white__0879402_pe714879_s5.jpg' ]);

		$p00405816 = Product::create([
			'name' => 'LAUTERS Table lamp with LED bulb, brown ash/white',
			'price' => 41.99,
			'model_path' => '/models/00404906_PS01_S01_NV01_RQP3_3.0_76bf997c34ec4172ad36e7f9b4ab401d.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― and you can also hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-table-lamp-with-led-bulb-brown-ash-white-00405816/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-brown-ash-white__0713766_pe729748_s5.jpg',
			'category_id' => 16,
		]);

		$p00405816->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-brown-ash-white__0713766_pe729748_s5.jpg' ]);
		$p00405816->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-brown-ash-white__0879939_pe729747_s5.jpg' ]);
		$p00405816->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-brown-ash-white__0713765_pe729749_s5.jpg' ]);
		$p00405816->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-table-lamp-with-led-bulb-brown-ash-white__0759973_pe750551_s5.jpg' ]);

		$vc00405816->products()->attach($p10404897->id);
		$vc00405816->products()->attach($p00405816->id);

		$vc20488288 = VariationCollection::create();

		$p20488288 = Product::create([
			'name' => 'UPPVIND Table lamp with LED bulb, brass plated/white, 19 "',
			'price' => 79.99,
			'model_path' => '/models/20483163_PS01_S01_NV01_RQP3_3.0_301a44e157384e86b6d0bbe5e9294d22.glb',
			'is_stackable' => 0,
			'description' => 'The table lamp’s slim oval shade rests on a sturdy metal base and spreads a soft, decorative light wherever you choose to place it. Why not combine it with the matching UPPVIND floor lamp?',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-table-lamp-with-led-bulb-brass-plated-white-20488288/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-brass-plated-white__0957665_pe805075_s5.jpg',
			'category_id' => 16,
		]);

		$p20488288->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-brass-plated-white__0957665_pe805075_s5.jpg' ]);
		$p20488288->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-brass-plated-white__0957667_pe805076_s5.jpg' ]);
		$p20488288->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-brass-plated-white__0957666_pe805077_s5.jpg' ]);

		$p60437697 = Product::create([
			'name' => 'UPPVIND Table lamp with LED bulb, nickel plated/white, 19 "',
			'price' => 79.99,
			'model_path' => '/models/30430386_PS01_S01_NV01_RQP3_3.0_8b3ccb782eea4da6975de726c493d60b.glb',
			'is_stackable' => 0,
			'description' => 'The table lamp’s slim oval shade rests on a sturdy metal base and spreads a soft, decorative light wherever you choose to place it. Why not combine it with the matching UPPVIND floor lamp?',
			'source' => 'https://www.ikea.com/us/en/p/uppvind-table-lamp-with-led-bulb-nickel-plated-white-60437697/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-nickel-plated-white__0957668_pe805079_s5.jpg',
			'category_id' => 16,
		]);

		$p60437697->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-nickel-plated-white__0957668_pe805079_s5.jpg' ]);
		$p60437697->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-nickel-plated-white__0957670_pe805080_s5.jpg' ]);
		$p60437697->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/uppvind-table-lamp-with-led-bulb-nickel-plated-white__0957669_pe805081_s5.jpg' ]);

		$vc20488288->products()->attach($p20488288->id);
		$vc20488288->products()->attach($p60437697->id);

		$vc50494754 = VariationCollection::create();

		$p80494757 = Product::create([
			'name' => 'SYMFONISK Shade for speaker lamp base, textile/black',
			'price' => 49.0,
			'model_path' => '/models/G-80494757-dd17d4426e69db4121d6b0305f91805f05ee090e_552efc11b5e34f03a62ac9f370f01a73.glb',
			'is_stackable' => 0,
			'description' => 'Choose between a white or black textile lamp shade to complete your SYMFONISK speaker lamp base with WiFi. You can create a soft, cozy atmosphere in your home with this textile shade that spreads a diffused and decorative light.',
			'source' => 'https://www.ikea.com/us/en/p/symfonisk-shade-for-speaker-lamp-base-textile-black-80494757/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-textile-black__0985568_pe816676_s5.jpg',
			'category_id' => 16,
		]);

		$p80494757->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-textile-black__0985568_pe816676_s5.jpg' ]);
		$p80494757->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/symfonisk-shade-for-speaker-lamp-base-textile-black__0985569_pe816675_s5.jpg' ]);

		$vc50494754->products()->attach($p80494757->id);

		$vc00489806 = VariationCollection::create();

		$p00489806 = Product::create([
			'name' => 'KABOMBA LED wall lamp with mirror, dimmable matte/black, 8 "',
			'price' => 64.99,
			'model_path' => '/models/60485283_PS01_S01_NV01_RQP3_3.0_010f136679a848259506eafc8ab0c183.glb',
			'is_stackable' => 0,
			'description' => 'Wall lamp in a modern art deco style with a removeable mirror and a built-in dimmable LED bulb. Full light to put on make-up and more diffused to create a calm atmosphere, just like in a hotel bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black-00489806/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black__1013471_pe829208_s5.jpg',
			'category_id' => 16,
		]);

		$p00489806->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black__1013471_pe829208_s5.jpg' ]);
		$p00489806->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black__1032942_pe837066_s5.jpg' ]);
		$p00489806->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black__1032902_pe837050_s5.jpg' ]);
		$p00489806->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-matte-black__1011100_pe828408_s5.jpg' ]);

		$p00502501 = Product::create([
			'name' => 'KABOMBA LED wall lamp with mirror, dimmable chrome plated/glossy, 8 "',
			'price' => 64.99,
			'model_path' => '/models/10502497_PS01_S01_NV01_RQP3_3.0_74eac9afeb1840ca9ffb1fd1be5384f7.glb',
			'is_stackable' => 0,
			'description' => 'Wall lamp in a modern art deco style with a removeable mirror and a built-in dimmable LED bulb. Full light to put on make-up and more diffused to create a calm atmosphere, just like in a hotel bathroom.',
			'source' => 'https://www.ikea.com/us/en/p/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy-00502501/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy__1013466_pe829206_s5.jpg',
			'category_id' => 16,
		]);

		$p00502501->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy__1013466_pe829206_s5.jpg' ]);
		$p00502501->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy__1032938_pe837063_s5.jpg' ]);
		$p00502501->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy__1032900_pe837049_s5.jpg' ]);
		$p00502501->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kabomba-led-wall-lamp-with-mirror-dimmable-chrome-plated-glossy__1011117_pe828409_s5.jpg' ]);

		$vc00489806->products()->attach($p00489806->id);
		$vc00489806->products()->attach($p00502501->id);

		$p60342661 = Product::create([
			'name' => 'TRÅDFRI Driver for wireless control, smart gray, 30 W',
			'price' => 40.0,
			'model_path' => '/models/60342661_PS01_S01_NV01_RQP3_3.0_3cb7b25b11f148faa1e40146cdf20ca1.glb',
			'is_stackable' => 0,
			'description' => 'Now it\'s really easy for anyone to use smart lighting. This driver allows you to connect your integrated lighting from IKEA – turn on, turn off and dim so you always have the right light and mood at home.',
			'source' => 'https://www.ikea.com/us/en/p/tradfri-driver-for-wireless-control-smart-gray-60342661/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0619625_pe689212_s5.jpg',
			'category_id' => 16,
		]);

		$p60342661->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0619625_pe689212_s5.jpg' ]);
		$p60342661->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tradfri-driver-for-wireless-control-smart-gray__0881848_pe662109_s5.jpg' ]);


		$vc00405048 = VariationCollection::create();

		$p00405048 = Product::create([
			'name' => 'LAUTERS Floor lamp, ash/white',
			'price' => 59.99,
			'model_path' => '/models/30405042_PS01_S01_NV01_RQP3_3.0_157dbbd5553844eda736f67d48fe0b6d.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― you can also adjust the height and hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-floor-lamp-ash-white-00405048/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0663863_pe712536_s5.jpg',
			'category_id' => 16,
		]);

		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0663863_pe712536_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0879908_pe714870_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0879933_pe714873_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0669171_pe714877_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__1177901_ph188198_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0879927_pe714872_s5.jpg' ]);
		$p00405048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-ash-white__0879910_pe714871_s5.jpg' ]);

		$p60405941 = Product::create([
			'name' => 'LAUTERS Floor lamp, brown ash/white',
			'price' => 59.99,
			'model_path' => '/models/80405073_PS01_S01_NV01_RQP3_3.0_570692a4c71b4a49bfcad0619dda4020.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― you can also adjust the height and hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-floor-lamp-brown-ash-white-60405941/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0714123_pe729942_s5.jpg',
			'category_id' => 16,
		]);

		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0714123_pe729942_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0879953_pe729940_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0714120_pe729941_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0879939_pe729747_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0714122_pe729943_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0879947_pe729750_s5.jpg' ]);
		$p60405941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-brown-ash-white__0714121_pe729944_s5.jpg' ]);

		$vc00405048->products()->attach($p00405048->id);
		$vc00405048->products()->attach($p60405941->id);

		$p00404987 = Product::create([
			'name' => 'DEJSA Table lamp, beige/opal glass, 11 "',
			'price' => 54.99,
			'model_path' => '/models/90404983_PS01_S01_NV01_RQP3_3.0_1418f69ed102489db6a6c2124ee73357.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the DEJSA series all have chrome details and softly-shaped shades of mouth-blown opal glass. Whichever one you choose, you get a soft, dim light that creates a cozy atmosphere in the room.',
			'source' => 'https://www.ikea.com/us/en/p/dejsa-table-lamp-beige-opal-glass-00404987/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__0967540_pe810183_s5.jpg',
			'category_id' => 16,
		]);

		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__0967540_pe810183_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__1056801_ph179827_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__0967542_pe810184_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__1371831_ph187947_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__1056798_ph178506_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__1057241_ph178507_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__0967541_pe810185_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__0991198_pe225117_s5.jpg' ]);
		$p00404987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/dejsa-table-lamp-beige-opal-glass__1112017_pe871071_s5.jpg' ]);


		$p70486395 = Product::create([
			'name' => 'TÅGARP Floor uplighter/reading lamp, black/white',
			'price' => 13.99,
			'model_path' => '/models/40486387_PS01_S01_NV01_RQP3_3.0_7c24a8f390504ffdb521af8a19f7d14f.glb',
			'is_stackable' => 0,
			'description' => 'Two lamps with the same base, at an unbeatable price. One spreads a pleasant light upwards and the other is a directable reading lamp. Both are also partly made of recycled plastic – good for our climate',
			'source' => 'https://www.ikea.com/us/en/p/tagarp-floor-uplighter-reading-lamp-black-white-70486395/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-reading-lamp-black-white__0965083_pe809330_s5.jpg',
			'category_id' => 16,
		]);

		$p70486395->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-reading-lamp-black-white__0965083_pe809330_s5.jpg' ]);
		$p70486395->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-reading-lamp-black-white__0967772_pe810276_s5.jpg' ]);
		$p70486395->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-reading-lamp-black-white__0967780_pe810282_s5.jpg' ]);
		$p70486395->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplighter-reading-lamp-black-white__0967773_pe810275_s5.jpg' ]);


		$p20110903 = Product::create([
			'name' => 'LERSTA Floor/reading lamp, aluminum chrome effect',
			'price' => 15.99,
			'model_path' => '/models/20110903_PS01_S01_NV01_IQP3_2.0_00ac3d6706eb48ddbce0b6c266d538ed.glb',
			'is_stackable' => 0,
			'description' => 'This floor lamp in aluminum is perfect to have by the sofa or your favorite armchair. You can easily direct the lamp arm so you get the light exactly where you want it when sitting down to read.',
			'source' => 'https://www.ikea.com/us/en/p/lersta-floor-reading-lamp-aluminum-chrome-effect-20110903/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0606034_pe681992_s5.jpg',
			'category_id' => 16,
		]);

		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0606034_pe681992_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0387923_pe372097_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0387925_pe224141_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0879520_pe613633_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0879517_pe611365_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0387922_pe218567_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0387921_pe220204_s5.jpg' ]);
		$p20110903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lersta-floor-reading-lamp-aluminum-chrome-effect__0387924_pe223580_s5.jpg' ]);


		$p10464283 = Product::create([
			'name' => 'SOLKLINT Table lamp, brass/gray clear glass, 11 "',
			'price' => 24.99,
			'model_path' => '/models/70464275_PS01_S01_NV01_RQP3_3.0_d6b615e4ec6741cebe97edc8750b23ab.glb',
			'is_stackable' => 0,
			'description' => 'Like small jewels in shiny brass and gray clear glass, the lamps in the SOLKLINT series spread a soft mood light that creates exciting shadows on walls and ceilings – wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/solklint-table-lamp-brass-gray-clear-glass-10464283/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-brass-gray-clear-glass__0842257_pe781832_s5.jpg',
			'category_id' => 16,
		]);

		$p10464283->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-brass-gray-clear-glass__0842257_pe781832_s5.jpg' ]);
		$p10464283->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-brass-gray-clear-glass__1061774_ph179365_s5.jpg' ]);
		$p10464283->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-brass-gray-clear-glass__0842259_pe781833_s5.jpg' ]);
		$p10464283->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-brass-gray-clear-glass__0842258_pe781834_s5.jpg' ]);


		$p00467526 = Product::create([
			'name' => 'TVÄRFOT Table lamp, black/white',
			'price' => 14.99,
			'model_path' => '/models/50467524_PS01_S01_NV01_RQP3_3.0_5191fdc04c50421a929017b17bed4002.glb',
			'is_stackable' => 0,
			'description' => 'Small table lamp in classic black and white with a stoneware base and topped with a textile lampshade that spreads an even and decorative light. Perfect to put in a window or on a chest of drawers.',
			'source' => 'https://www.ikea.com/us/en/p/tvaerfot-table-lamp-black-white-00467526/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerfot-table-lamp-black-white__0772757_pe756087_s5.jpg',
			'category_id' => 16,
		]);

		$p00467526->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerfot-table-lamp-black-white__0772757_pe756087_s5.jpg' ]);
		$p00467526->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerfot-table-lamp-black-white__0772756_pe756088_s5.jpg' ]);
		$p00467526->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tvaerfot-table-lamp-black-white__1049505_pe844188_s5.jpg' ]);


		$p80514171 = Product::create([
			'name' => 'BLIDVÄDER Table lamp, off-white ceramic/beige, 20 "',
			'price' => 64.99,
			'model_path' => '/models/80501258_PS01_S01_NV01_RQP3_3.0_8639f842ea2347338a3f4e638e32ccec.glb',
			'is_stackable' => 0,
			'description' => 'Table lamp with a sturdy ceramic base, a brass-colored lamp holder and a lampshade with visible textile fibers. All with a classic shape that goes with most decors and in all rooms of the home.',
			'source' => 'https://www.ikea.com/us/en/p/blidvaeder-table-lamp-off-white-ceramic-beige-80514171/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1059594_pe849715_s5.jpg',
			'category_id' => 16,
		]);

		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1059594_pe849715_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1371868_ph199286_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1059592_pe849717_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1371869_ph199301_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1059591_pe849714_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1243271_ph189076_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1243270_ph188697_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1243272_ph189047_s5.jpg' ]);
		$p80514171->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-off-white-ceramic-beige__1059593_pe849716_s5.jpg' ]);


		$p80358496 = Product::create([
			'name' => 'SVALLET Work lamp, dark gray/white',
			'price' => 4.99,
			'model_path' => '/models/70358487_PS01_S01_NV01_RQP3_3.0_3d61c464fef64f8e85ef26998ed338f6.glb',
			'is_stackable' => 0,
			'description' => 'This work lamp in recycled plastics has received the international design award Red Dot Award. It provides a functional directed light and is easy to match with the interior and move around in the home.',
			'source' => 'https://www.ikea.com/us/en/p/svallet-work-lamp-dark-gray-white-80358496/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0703502_pe724751_s5.jpg',
			'category_id' => 16,
		]);

		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0703502_pe724751_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0881039_pe724750_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__1028313_ph177478_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0881047_pe724753_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0779159_ph161787_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__1011012_ph176375_s5.jpg' ]);
		$p80358496->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-dark-gray-white__0881045_pe724752_s5.jpg' ]);


		$p20356990 = Product::create([
			'name' => 'NYMÅNE Wall/reading lamp, white',
			'price' => 37.99,
			'model_path' => '/models/20356909_PS01_S01_NV01_RQP3_3.0_56421aa7af9d4934ba3c4634f3c93d0f.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-wall-reading-lamp-white-20356990/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__0556007_pe660372_s5.jpg',
			'category_id' => 16,
		]);

		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__0556007_pe660372_s5.jpg' ]);
		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__1035343_pe840530_s5.jpg' ]);
		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__0879127_pe660376_s5.jpg' ]);
		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__0879124_pe660375_s5.jpg' ]);
		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__0879119_pe660374_s5.jpg' ]);
		$p20356990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-white__1035341_pe840528_s5.jpg' ]);


		$p70459716 = Product::create([
			'name' => 'ISJAKT LED floor uplighter/reading lamp, dimmable/nickel plated, 71 "',
			'price' => 99.99,
			'model_path' => '/models/G-40459708-edca9d89b620410728887c62070ef079b61d89ed_507ba1f41c8d4d24a0b12604ef1c3c15.glb',
			'is_stackable' => 0,
			'description' => 'Two lamps in a modern style on the same sturdy lamp base. A dimmable uplighter at the top that gives you a lot of light and a reading lamp a little further down that is easy to direct where you want it.',
			'source' => 'https://www.ikea.com/us/en/p/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated-70459716/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1006753_pe825819_s5.jpg',
			'category_id' => 16,
		]);

		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1006753_pe825819_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1006757_pe825944_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1012274_pe828817_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1006755_pe825943_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1006756_pe825945_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1112045_pe871079_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1012273_pe828818_s5.jpg' ]);
		$p70459716->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/isjakt-led-floor-uplighter-reading-lamp-dimmable-nickel-plated__1026748_pe834476_s5.jpg' ]);


		$p50477052 = Product::create([
			'name' => 'NYMÅNE Floor lamp with 3-spotlights, white',
			'price' => 67.99,
			'model_path' => '/models/80455483_PS01_S01_NV01_RQP3_3.0_19bd5544ac4f43fbabc5b99d1e28ccb7.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-floor-lamp-with-3-spotlights-white-50477052/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-lamp-with-3-spotlights-white__0810835_pe771431_s5.jpg',
			'category_id' => 16,
		]);

		$p50477052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-lamp-with-3-spotlights-white__0810835_pe771431_s5.jpg' ]);
		$p50477052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-lamp-with-3-spotlights-white__0810833_pe771430_s5.jpg' ]);
		$p50477052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-lamp-with-3-spotlights-white__1056326_ph177656_s5.jpg' ]);
		$p50477052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-floor-lamp-with-3-spotlights-white__0810834_pe771432_s5.jpg' ]);


		$p40437801 = Product::create([
			'name' => 'SIMRISHAMN Table/wall lamp, chrome plated/opal glass, 6 "',
			'price' => 39.99,
			'model_path' => '/models/50437792_PS01_S01_NV01_RQP3_3.0_93a64d62404f4320a8619bba67a4296f.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-table-wall-lamp-chrome-plated-opal-glass-40437801/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0789662_pe764089_s5.jpg',
			'category_id' => 16,
		]);

		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0789662_pe764089_s5.jpg' ]);
		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0806249_pe769873_s5.jpg' ]);
		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__1049501_pe844183_s5.jpg' ]);
		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0963370_ph171630_s5.jpg' ]);
		$p40437801->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-chrome-plated-opal-glass__0789661_pe764090_s5.jpg' ]);


		$vc10405104 = VariationCollection::create();

		$p10405104 = Product::create([
			'name' => 'NÄVLINGE LED floor/read lamp, black',
			'price' => 34.99,
			'model_path' => '/models/70405097_PS01_S01_NV01_RQP3_3.0_2ff4f255e76543b6b0cf0b3a03020d90.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-floor-read-lamp-black-10405104/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-black__0751183_pe746947_s5.jpg',
			'category_id' => 16,
		]);

		$p10405104->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-black__0751183_pe746947_s5.jpg' ]);
		$p10405104->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-black__0725891_pe735086_s5.jpg' ]);
		$p10405104->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-black__0751182_pe746948_s5.jpg' ]);
		$p10405104->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-black__0725890_pe735087_s5.jpg' ]);

		$p70405115 = Product::create([
			'name' => 'NÄVLINGE LED floor/read lamp, white',
			'price' => 34.99,
			'model_path' => '/models/20405108_PS01_S01_NV01_RQP3_3.0_34f0795293cb4874a7140ea3dc6cda14.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-floor-read-lamp-white-70405115/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0751188_pe746949_s5.jpg',
			'category_id' => 16,
		]);

		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0751188_pe746949_s5.jpg' ]);
		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0963365_ph170160_s5.jpg' ]);
		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0975068_ph174013_s5.jpg' ]);
		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0751187_pe746950_s5.jpg' ]);
		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0725895_pe735089_s5.jpg' ]);
		$p70405115->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-floor-read-lamp-white__0725894_pe735090_s5.jpg' ]);

		$vc10405104->products()->attach($p10405104->id);
		$vc10405104->products()->attach($p70405115->id);

		$p90513208 = Product::create([
			'name' => 'LÅGTRYCK Floor lamp, white, 54 "',
			'price' => 69.99,
			'model_path' => '/models/30501265_PS01_S01_NV01_RQP3_4.0_950d744495c84804a5e889bab68dea8f.glb',
			'is_stackable' => 0,
			'description' => 'Like a sculpture, this wavy shade in recycled polyester is guaranteed to be an eye-catcher. And when you turn the lamp on, the shape creates exciting shadows while a soft light spreads throughout the room.',
			'source' => 'https://www.ikea.com/us/en/p/lagtryck-floor-lamp-white-90513208/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-white__1023682_pe833216_s5.jpg',
			'category_id' => 16,
		]);

		$p90513208->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-white__1023682_pe833216_s5.jpg' ]);
		$p90513208->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-white__1023684_pe833217_s5.jpg' ]);
		$p90513208->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-white__1116049_ph183350_s5.jpg' ]);
		$p90513208->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-white__1023683_pe833218_s5.jpg' ]);


		$p70405530 = Product::create([
			'name' => 'SKAFTET Floor lamp base, arched, black',
			'price' => 70.0,
			'model_path' => '/models/50405395_PS01_S01_NV01_RQP3_3.0_6737ab02c5b645beafad701ebdfc7ffe.glb',
			'is_stackable' => 0,
			'description' => 'SKAFTET floor lamp base provides overhead lighting – with no ceiling outlet. You can slide the lamp base under a sofa to save floor space and combine it with any lamp shade to create a personal lamp.',
			'source' => 'https://www.ikea.com/us/en/p/skaftet-floor-lamp-base-arched-black-70405530/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0760537_pe750808_s5.jpg',
			'category_id' => 16,
		]);

		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0760537_pe750808_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0963362_ph170750_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0760536_pe750809_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0885344_pe782219_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0801019_pe768082_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0792199_pe764680_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0816216_pe773376_s5.jpg' ]);
		$p70405530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-arched-black__0975519_ph172868_s5.jpg' ]);


		$p30472164 = Product::create([
			'name' => 'TOMELILLA Table lamp, nickel plated/white, 20 "',
			'price' => 39.99,
			'model_path' => '/models/30472164_PS01_S01_NV01_RQP3_3.0_3961269553cd46bd9b5892d9cc5a1f5c.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TOMELILLA series stand firmly on aluminium bases and have rectangular textile lampshades that take up less space than round ones. The look is modern and stylish – with a warm soft light.',
			'source' => 'https://www.ikea.com/us/en/p/tomelilla-table-lamp-nickel-plated-white-30472164/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-nickel-plated-white__0928819_pe789978_s5.jpg',
			'category_id' => 16,
		]);

		$p30472164->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-nickel-plated-white__0928819_pe789978_s5.jpg' ]);
		$p30472164->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-nickel-plated-white__1049491_pe844177_s5.jpg' ]);
		$p30472164->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-nickel-plated-white__1049495_pe844178_s5.jpg' ]);
		$p30472164->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-nickel-plated-white__0933380_pe791867_s5.jpg' ]);


		$vc30408309 = VariationCollection::create();

		$p30408309 = Product::create([
			'name' => 'NÄVLINGE LED wall/clamp spotlight, white',
			'price' => 23.99,
			'model_path' => '/models/40404891_PS01_S01_NV01_RQP3_3.0_2487b371846e4117b6bdac5839c411e6.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-led-wall-clamp-spotlight-white-30408309/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0709834_pe727113_s5.jpg',
			'category_id' => 16,
		]);

		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0709834_pe727113_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0734562_pe739510_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0734560_pe739509_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0734561_pe739511_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0740159_pe741969_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__1028307_ph177018_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0741050_pe742176_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__1028309_ph176807_s5.jpg' ]);
		$p30408309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-led-wall-clamp-spotlight-white__0725894_pe735090_s5.jpg' ]);

		$vc30408309->products()->attach($p30408309->id);

		$vc20477732 = VariationCollection::create();

		$p20477732 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter, silver color/white',
			'price' => 32.99,
			'model_path' => '/models/40477726_PS01_S01_NV01_RQP3_3.0_434eb1b4a91244508e20f24056cd5c2e.glb',
			'is_stackable' => 0,
			'description' => 'The top of this floor uplight has a glossy white lampshade that directs light upwards and spreads a diffused, pleasant light around a room. A good choice for those who want a lot of light for the money.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-silver-color-white-20477732/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-silver-color-white__0941175_pe795353_s5.jpg',
			'category_id' => 16,
		]);

		$p20477732->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-silver-color-white__0941175_pe795353_s5.jpg' ]);
		$p20477732->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-silver-color-white__0941177_pe795354_s5.jpg' ]);
		$p20477732->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-silver-color-white__0941176_pe795355_s5.jpg' ]);

		$p50459430 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter, black/white',
			'price' => 22.99,
			'model_path' => '/models/80459419_PS01_S01_NV01_RQP3_3.0_266d2c2f168a4af09fef6ee83237879d.glb',
			'is_stackable' => 0,
			'description' => 'The top of this floor uplight has a glossy white lampshade that directs light upwards and spreads a diffused, pleasant light around a room. A good choice for those who want a lot of light for the money.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-black-white-50459430/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-black-white__0958284_pe805291_s5.jpg',
			'category_id' => 16,
		]);

		$p50459430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-black-white__0958284_pe805291_s5.jpg' ]);
		$p50459430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-black-white__0958285_pe805293_s5.jpg' ]);
		$p50459430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-black-white__0958286_pe805292_s5.jpg' ]);

		$vc20477732->products()->attach($p20477732->id);
		$vc20477732->products()->attach($p50459430->id);

		$p10520420 = Product::create([
			'name' => 'REGNSKUR Ceiling lamp, white, 19 "',
			'price' => 27.99,
			'model_path' => '/models/10520415_PS01_S01_NV01_RQP3_3.0_273c52eb40f24c339a8906f082955b98.glb',
			'is_stackable' => 0,
			'description' => 'This ceiling lamp spreads a soft, cozy light through the textile shade. Perfect to have in the hallway or bedroom and matches the other lamps in the REGNSKUR series.',
			'source' => 'https://www.ikea.com/us/en/p/regnskur-ceiling-lamp-white-10520420/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/regnskur-ceiling-lamp-white__1239874_pe919148_s5.jpg',
			'category_id' => 16,
		]);

		$p10520420->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/regnskur-ceiling-lamp-white__1239874_pe919148_s5.jpg' ]);
		$p10520420->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/regnskur-ceiling-lamp-white__1239871_pe919147_s5.jpg' ]);
		$p10520420->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/regnskur-ceiling-lamp-white__1239873_pe919149_s5.jpg' ]);
		$p10520420->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/regnskur-ceiling-lamp-white__1239872_pe919150_s5.jpg' ]);


		$vc20231325 = VariationCollection::create();

		$p80331402 = Product::create([
			'name' => 'RANARP Wall/clamp spotlight, black',
			'price' => 31.99,
			'model_path' => '/models/70331394_PS01_S01_NV01_RQP3_3.0_8e936981a7bf4d008e5cdc0efd12b9fe.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamp is reminiscent of times gone by, with robust metal details and a classic-patterned textile cord. Mount it on a wall or clamp it to a shelf and then direct the light where you want it.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-wall-clamp-spotlight-black-80331402/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0606607_pe682410_s5.jpg',
			'category_id' => 16,
		]);

		$p80331402->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0606607_pe682410_s5.jpg' ]);
		$p80331402->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0879096_pe618773_s5.jpg' ]);
		$p80331402->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0475086_pe615450_s5.jpg' ]);
		$p80331402->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0879087_pe616107_s5.jpg' ]);
		$p80331402->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-black__0879103_pe619932_s5.jpg' ]);

		$vc20231325->products()->attach($p80331402->id);

		$vc20405938 = VariationCollection::create();

		$p20405938 = Product::create([
			'name' => 'LAUTERS Floor lamp with LED bulb, brown ash/white',
			'price' => 64.99,
			'model_path' => '/models/80405073_PS01_S01_NV01_RQP3_3.0_570692a4c71b4a49bfcad0619dda4020.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― you can also adjust the height and hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-floor-lamp-with-led-bulb-brown-ash-white-20405938/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0714123_pe729942_s5.jpg',
			'category_id' => 16,
		]);

		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0714123_pe729942_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0714121_pe729944_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0879947_pe729750_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0714122_pe729943_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0879939_pe729747_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0714120_pe729941_s5.jpg' ]);
		$p20405938->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-brown-ash-white__0879953_pe729940_s5.jpg' ]);

		$p40405051 = Product::create([
			'name' => 'LAUTERS Floor lamp with LED bulb, ash/white',
			'price' => 64.99,
			'model_path' => '/models/30405042_PS01_S01_NV01_RQP3_3.0_157dbbd5553844eda736f67d48fe0b6d.glb',
			'is_stackable' => 0,
			'description' => 'The lamp’s shade is made from recycled PET bottles and its solid wood base is made from more sustainable sources. It spreads mood lighting ― you can also adjust the height and hide the cord in the lamp base.',
			'source' => 'https://www.ikea.com/us/en/p/lauters-floor-lamp-with-led-bulb-ash-white-40405051/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0663863_pe712536_s5.jpg',
			'category_id' => 16,
		]);

		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0663863_pe712536_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0879927_pe714872_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0879933_pe714873_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__1177901_ph188198_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0879910_pe714871_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0669171_pe714877_s5.jpg' ]);
		$p40405051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lauters-floor-lamp-with-led-bulb-ash-white__0879908_pe714870_s5.jpg' ]);

		$vc20405938->products()->attach($p20405938->id);
		$vc20405938->products()->attach($p40405051->id);

		$p00531476 = Product::create([
			'name' => 'VARMBLIXT LED wall lamp, white metal/circle',
			'price' => 74.99,
			'model_path' => '/models/60531464_PS01_S01_NV01_RQP3_3.0_c23af45d13054a8099d55337a946faea.glb',
			'is_stackable' => 0,
			'description' => 'Have you ever experienced the seconds before a solar eclipse? Then you will probably recognize the glow from this round LED wall lamp. Like a beautiful painting, its soft light is sure to be an eye-catcher.',
			'source' => 'https://www.ikea.com/us/en/p/varmblixt-led-wall-lamp-white-metal-circle-00531476/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1116838_pe872594_s5.jpg',
			'category_id' => 16,
		]);

		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1116838_pe872594_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1147961_ph186652_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1140359_ph186669_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1143193_ph186679_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1169902_ph186612_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1116836_pe872596_s5.jpg' ]);
		$p00531476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/varmblixt-led-wall-lamp-white-metal-circle__1116835_pe872593_s5.jpg' ]);


		$p50216540 = Product::create([
			'name' => 'HEKTAR Wall/clamp spotlight, dark gray',
			'price' => 19.99,
			'model_path' => '/models/80215308_PS01_S01_NV01_RQP3_3.0_417f4210e6e94a0ca6f033e2f1b69847.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-wall-clamp-spotlight-dark-gray-50216540/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__0606598_pe682407_s5.jpg',
			'category_id' => 16,
		]);

		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__0606598_pe682407_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__1367011_ph186408_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__1367012_ph180330_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__1258089_pe926225_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__0879363_pe618774_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__0879360_pe616111_s5.jpg' ]);
		$p50216540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-dark-gray__0176243_pe316484_s5.jpg' ]);


		$p70328626 = Product::create([
			'name' => 'LEDSJÖ LED wall lamp, stainless steel, 24 "',
			'price' => 59.99,
			'model_path' => '/models/70328626_PS01_S01_NV01_RQP3_3.0_6c152f2bea7b43e2aead1c3bae27572e.glb',
			'is_stackable' => 0,
			'description' => 'This lamp is like a pearl necklace that bejewels your bathroom. It illuminates the area around the mirror and sink with a bright, diffused light that is as pleasant to wake up to as it is to unwind.',
			'source' => 'https://www.ikea.com/us/en/p/ledsjoe-led-wall-lamp-stainless-steel-70328626/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ledsjoe-led-wall-lamp-stainless-steel__0554069_pe659641_s5.jpg',
			'category_id' => 16,
		]);

		$p70328626->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ledsjoe-led-wall-lamp-stainless-steel__0554069_pe659641_s5.jpg' ]);
		$p70328626->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ledsjoe-led-wall-lamp-stainless-steel__0798313_ph162444_s5.jpg' ]);
		$p70328626->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ledsjoe-led-wall-lamp-stainless-steel__0881471_pe659640_s5.jpg' ]);
		$p70328626->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ledsjoe-led-wall-lamp-stainless-steel__0881474_pe659642_s5.jpg' ]);


		$p10358490 = Product::create([
			'name' => 'SVALLET Work lamp with LED bulb, dark gray/white',
			'price' => 5.99,
			'model_path' => '/models/70358487_PS01_S01_NV01_RQP3_3.0_3d61c464fef64f8e85ef26998ed338f6.glb',
			'is_stackable' => 0,
			'description' => 'This work lamp in recycled plastics has received the international design award Red Dot Award. It provides a functional directed light and is easy to match with the interior and move around in the home.',
			'source' => 'https://www.ikea.com/us/en/p/svallet-work-lamp-with-led-bulb-dark-gray-white-10358490/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0703502_pe724751_s5.jpg',
			'category_id' => 16,
		]);

		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0703502_pe724751_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__1011012_ph176375_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0881039_pe724750_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__1028313_ph177478_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0881045_pe724752_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0881047_pe724753_s5.jpg' ]);
		$p10358490->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/svallet-work-lamp-with-led-bulb-dark-gray-white__0779159_ph161787_s5.jpg' ]);


		$p30464098 = Product::create([
			'name' => 'SOLKLINT Pendant lamp, brass/gray clear glass, 9 "',
			'price' => 37.99,
			'model_path' => '/models/10430778_PS01_S01_NV01_RQP3_4.0_75de5e4d7e854b2f935e1161c43152da.glb',
			'is_stackable' => 0,
			'description' => 'Like small jewels in shiny brass and gray clear glass, the lamps in the SOLKLINT series spread a soft mood light that creates exciting shadows on walls and ceilings – wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/solklint-pendant-lamp-brass-gray-clear-glass-30464098/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0842306_pe778948_s5.jpg',
			'category_id' => 16,
		]);

		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0842306_pe778948_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__1368738_ph180645_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0975368_ph172563_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0989197_ph172550_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0842308_pe778949_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0842307_pe778950_s5.jpg' ]);
		$p30464098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-pendant-lamp-brass-gray-clear-glass__0955860_ph173391_s5.jpg' ]);


		$vc10564112 = VariationCollection::create();

		$p30564371 = Product::create([
			'name' => 'TRETTIOEN Pendant lamp, blue, 15 "',
			'price' => 19.99,
			'model_path' => '/models/30564366_PS01_S01_NV01_RQP3_3.0_5dca0b3240354b358bd20811b18ba74c.glb',
			'is_stackable' => 0,
			'description' => 'This timeless pendant lamp in a classic style with an enameled surface gives you a pleasant directed light – perfect to hang over the dining table or kitchen island.',
			'source' => 'https://www.ikea.com/us/en/p/trettioen-pendant-lamp-blue-30564371/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210381_pe909695_s5.jpg',
			'category_id' => 16,
		]);

		$p30564371->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210381_pe909695_s5.jpg' ]);
		$p30564371->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210380_pe909696_s5.jpg' ]);
		$p30564371->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210379_pe909694_s5.jpg' ]);
		$p30564371->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210642_pe909795_s5.jpg' ]);
		$p30564371->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/trettioen-pendant-lamp-blue__1210643_pe909794_s5.jpg' ]);

		$vc10564112->products()->attach($p30564371->id);

		$p90486399 = Product::create([
			'name' => 'TÅGARP Floor uplt/read lamp w light bulb, black/white',
			'price' => 19.99,
			'model_path' => '/models/40486387_PS01_S01_NV01_RQP3_3.0_7c24a8f390504ffdb521af8a19f7d14f.glb',
			'is_stackable' => 0,
			'description' => 'Two lamps with the same base, at an unbeatable price. One spreads a pleasant light upwards and the other is a directable reading lamp. Both are also partly made of recycled plastic – good for our climate',
			'source' => 'https://www.ikea.com/us/en/p/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white-90486399/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white__0965083_pe809330_s5.jpg',
			'category_id' => 16,
		]);

		$p90486399->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white__0965083_pe809330_s5.jpg' ]);
		$p90486399->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white__0967772_pe810276_s5.jpg' ]);
		$p90486399->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white__0967773_pe810275_s5.jpg' ]);
		$p90486399->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tagarp-floor-uplt-read-lamp-w-light-bulb-black-white__0967780_pe810282_s5.jpg' ]);


		$p40323437 = Product::create([
			'name' => 'HEKTAR Work lamp with wireless charging, dark gray',
			'price' => 79.99,
			'model_path' => '/models/60323436_PS01_S01_NV01_RQP3_3.0_72f044a36052400690282135aa5f25ff.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-work-lamp-with-wireless-charging-dark-gray-40323437/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0473183_pe614486_s5.jpg',
			'category_id' => 16,
		]);

		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0473183_pe614486_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0880760_pe693649_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0880757_pe623029_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0832469_ph167281_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0880763_pe711192_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__1286242_pe933513_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0879880_pe622563_s5.jpg' ]);
		$p40323437->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-with-wireless-charging-dark-gray__0880752_pe614485_s5.jpg' ]);


		$p60303122 = Product::create([
			'name' => 'NYFORS Table lamp, nickel plated white',
			'price' => 49.99,
			'model_path' => '/models/00303115_PS01_S01_NV01_RQP3_3.0_8046a1971d9e49eb9b2512e2d807442e.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp with a nickel-plated base and a textile shade in white spreads an even, decorative light that creates a cozy atmosphere in the room. Easy to turn on and off with the drawstring.',
			'source' => 'https://www.ikea.com/us/en/p/nyfors-table-lamp-nickel-plated-white-60303122/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-nickel-plated-white__0609343_pe684464_s5.jpg',
			'category_id' => 16,
		]);

		$p60303122->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-nickel-plated-white__0609343_pe684464_s5.jpg' ]);
		$p60303122->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-nickel-plated-white__0880670_pe620464_s5.jpg' ]);
		$p60303122->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-nickel-plated-white__0880657_pe613047_s5.jpg' ]);
		$p60303122->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-nickel-plated-white__0880664_pe614404_s5.jpg' ]);


		$p00564198 = Product::create([
			'name' => 'KRUSNATE Ceiling light with 4 spotlights, white',
			'price' => 14.99,
			'model_path' => '/models/70564190_PS01_S01_NV01_RQP3_3.0_3c1b73d2a2c6446a92c86b8d4966de48.glb',
			'is_stackable' => 0,
			'description' => 'This ceiling track with 4 spots is almost invisible on a white ceiling and gives light where you like since each spot can be directed individually. Goes just as well in a hallway as over a kitchen island.',
			'source' => 'https://www.ikea.com/us/en/p/krusnate-ceiling-light-with-4-spotlights-white-00564198/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1198150_pe903923_s5.jpg',
			'category_id' => 16,
		]);

		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1198150_pe903923_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1234433_pe917137_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1210544_pe909760_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1210662_pe909796_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1210670_pe909803_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1210590_pe909786_s5.jpg' ]);
		$p00564198->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krusnate-ceiling-light-with-4-spotlights-white__1210608_pe909788_s5.jpg' ]);


		$vc10479166 = VariationCollection::create();

		$p10479166 = Product::create([
			'name' => 'SKYDRAG LED cntp/wrd lght strp w sensor, dimmable anthracite, 24 "',
			'price' => 27.99,
			'model_path' => '/models/10479166_PS01_S01_NV01_RQP3_3.0_2d9fa23e791241e48e1ffcad78f4ab44.glb',
			'is_stackable' => 0,
			'description' => 'Lighting creates atmosphere in homes and makes everyday life easier. This LED lighting strip is specially designed for the ENHET series, but is of course just as easy to install in an existing kitchen.',
			'source' => 'https://www.ikea.com/us/en/p/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite-10479166/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0815324_pe772854_s5.jpg',
			'category_id' => 16,
		]);

		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0815324_pe772854_s5.jpg' ]);
		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__1023856_ph176781_s5.jpg' ]);
		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0970120_ph174275_s5.jpg' ]);
		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0812912_pe772207_s5.jpg' ]);
		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0929903_pe790518_s5.jpg' ]);
		$p10479166->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skydrag-led-cntp-wrd-lght-strp-w-sensor-dimmable-anthracite__0929904_pe790517_s5.jpg' ]);

		$vc10479166->products()->attach($p10479166->id);

		$p20471363 = Product::create([
			'name' => 'VIRRMO Work lamp, nickel plated, 21 "',
			'price' => 34.99,
			'model_path' => '/models/80471355_PS01_S01_NV01_RQP3_3.0_8de0f2e80bff48bebbda130a99b52600.glb',
			'is_stackable' => 0,
			'description' => 'The modern, stylish lamps in the VIRRMO series have a sturdy brushed metal construction. They also take up little space and are easy to direct when you want to read, work or illuminate something you like.',
			'source' => 'https://www.ikea.com/us/en/p/virrmo-work-lamp-nickel-plated-20471363/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__0859444_pe780909_s5.jpg',
			'category_id' => 16,
		]);

		$p20471363->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__0859444_pe780909_s5.jpg' ]);
		$p20471363->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__1057487_ph179169_s5.jpg' ]);
		$p20471363->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__0859445_pe780911_s5.jpg' ]);
		$p20471363->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__0859446_pe780910_s5.jpg' ]);
		$p20471363->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-nickel-plated__1057339_ph179091_s5.jpg' ]);


		$p40464286 = Product::create([
			'name' => 'SOLKLINT Table lamp with LED bulb, brass/gray clear glass, 11 "',
			'price' => 27.99,
			'model_path' => '/models/70464275_PS01_S01_NV01_RQP3_3.0_d6b615e4ec6741cebe97edc8750b23ab.glb',
			'is_stackable' => 0,
			'description' => 'Like small jewels in shiny brass and gray clear glass, the lamps in the SOLKLINT series spread a soft mood light that creates exciting shadows on walls and ceilings – wherever you choose to place them.',
			'source' => 'https://www.ikea.com/us/en/p/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass-40464286/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass__0842257_pe781832_s5.jpg',
			'category_id' => 16,
		]);

		$p40464286->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass__0842257_pe781832_s5.jpg' ]);
		$p40464286->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass__0842258_pe781834_s5.jpg' ]);
		$p40464286->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass__0842259_pe781833_s5.jpg' ]);
		$p40464286->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/solklint-table-lamp-with-led-bulb-brass-gray-clear-glass__1061774_ph179365_s5.jpg' ]);


		$p00462675 = Product::create([
			'name' => 'MARKFROST Table lamp, marble black',
			'price' => 24.99,
			'model_path' => '/models/50462673_PS01_S01_NV01_RQP3_3.0_2298b76052c7487db7e61ce07019aed4.glb',
			'is_stackable' => 0,
			'description' => 'Lamp base in black marble that you can transform into a small and personal table lamp with a decorative LED bulb of your choice. Easy to place wherever you want cozy mood lighting.',
			'source' => 'https://www.ikea.com/us/en/p/markfrost-table-lamp-marble-black-00462675/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__0783961_pe761588_s5.jpg',
			'category_id' => 16,
		]);

		$p00462675->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__0783961_pe761588_s5.jpg' ]);
		$p00462675->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__0733838_pe739221_s5.jpg' ]);
		$p00462675->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__1011649_pe828524_s5.jpg' ]);
		$p00462675->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__1011634_pe828519_s5.jpg' ]);
		$p00462675->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-marble-black__0925978_pe788994_s5.jpg' ]);


		$p40405536 = Product::create([
			'name' => 'SKAFTET Floor lamp base, nickel plated',
			'price' => 40.0,
			'model_path' => '/models/80405394_PS01_S01_NV01_RQP3_3.0_34508bf3f3524e3c984a04e934c1d7d3.glb',
			'is_stackable' => 0,
			'description' => 'Stylish, modern design that you can add a personal touch to with a lamp shade or decorative light bulb. If you like the style then you can combine SKAFTET lamp base with other lamps in the same series.',
			'source' => 'https://www.ikea.com/us/en/p/skaftet-floor-lamp-base-nickel-plated-40405536/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0663955_pe712559_s5.jpg',
			'category_id' => 16,
		]);

		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0663955_pe712559_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__1186294_pe898764_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0788365_pe763593_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0880279_pe714920_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0880273_pe714919_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0878972_pe782221_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0788377_pe763597_s5.jpg' ]);
		$p40405536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-nickel-plated__0792159_pe764671_s5.jpg' ]);


		$p10504547 = Product::create([
			'name' => 'BETTORP LED mobile lamp w wireless charging, dimmable light gray-blue',
			'price' => 69.99,
			'model_path' => '/models/90430369_PS01_S01_NV01_RQP3_3.0_20478bbae2634130825630a6de204d40.glb',
			'is_stackable' => 0,
			'description' => 'BETTORP is 2 products in 1, both a LED lamp and a wireless charging station. You can dim the lamp and easily move it to where you need light – by the bed, by the sofa or on a windowsill.',
			'source' => 'https://www.ikea.com/us/en/p/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue-10504547/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__0970636_pe811143_s5.jpg',
			'category_id' => 16,
		]);

		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__0970636_pe811143_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1019020_pe831244_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1020797_pe832000_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017076_pe830705_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017074_pe830704_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017078_pe830706_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017089_pe830708_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017069_pe830701_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017091_pe830709_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1017079_pe830707_s5.jpg' ]);
		$p10504547->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bettorp-led-mobile-lamp-w-wireless-charging-dimmable-light-gray-blue__1019039_pe831245_s5.jpg' ]);


		$vc30508083 = VariationCollection::create();

		$p60323889 = Product::create([
			'name' => 'TÄRNABY Table lamp with LED bulb, dimmable anthracite, 10 "',
			'price' => 32.99,
			'model_path' => '/models/60323894_PS01_S01_NV01_RQP3_3.0_5068fb61ded44d33be368b2ea850f1d0.glb',
			'is_stackable' => 0,
			'description' => 'Inspired by traditional kerosene lamps and a mood lighting which is soft and warm. The visible light bulb emulates a live flame and you can adjust the brightness with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/taernaby-table-lamp-with-led-bulb-dimmable-anthracite-60323889/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__1188962_pe899634_s5.jpg',
			'category_id' => 16,
		]);

		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__1188962_pe899634_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__0760736_ph160475_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__1105554_ph166557_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__0908404_ph168349_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__0747833_ph155459_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__0880791_pe670203_s5.jpg' ]);
		$p60323889->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-anthracite__0811972_pe771891_s5.jpg' ]);

		$p30508083 = Product::create([
			'name' => 'TÄRNABY Table lamp with LED bulb, dimmable beige, 10 "',
			'price' => 32.99,
			'model_path' => '/models/60323894_PS01_S01_NV01_RQP3_3.0_5068fb61ded44d33be368b2ea850f1d0.glb',
			'is_stackable' => 0,
			'description' => 'Inspired by traditional kerosene lamps and a mood lighting which is soft and warm. The visible light bulb emulates a live flame and you can adjust the brightness with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/taernaby-table-lamp-with-led-bulb-dimmable-beige-30508083/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1188960_pe899632_s5.jpg',
			'category_id' => 16,
		]);

		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1188960_pe899632_s5.jpg' ]);
		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1001765_pe824462_s5.jpg' ]);
		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1001764_pe824461_s5.jpg' ]);
		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1001758_pe824460_s5.jpg' ]);
		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1081808_ph180667_s5.jpg' ]);
		$p30508083->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/taernaby-table-lamp-with-led-bulb-dimmable-beige__1094161_ph180002_s5.jpg' ]);

		$vc30508083->products()->attach($p60323889->id);
		$vc30508083->products()->attach($p30508083->id);

		$p20513202 = Product::create([
			'name' => 'LÅGTRYCK Floor lamp with LED bulb, white, 54 "',
			'price' => 79.99,
			'model_path' => '/models/30501265_PS01_S01_NV01_RQP3_4.0_950d744495c84804a5e889bab68dea8f.glb',
			'is_stackable' => 0,
			'description' => 'Like a sculpture, this wavy shade in recycled polyester is guaranteed to be an eye-catcher. And when you turn the lamp on, the shape creates exciting shadows while a soft light spreads throughout the room.',
			'source' => 'https://www.ikea.com/us/en/p/lagtryck-floor-lamp-with-led-bulb-white-20513202/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-with-led-bulb-white__1023682_pe833216_s5.jpg',
			'category_id' => 16,
		]);

		$p20513202->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-with-led-bulb-white__1023682_pe833216_s5.jpg' ]);
		$p20513202->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-with-led-bulb-white__1023684_pe833217_s5.jpg' ]);
		$p20513202->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-with-led-bulb-white__1116049_ph183350_s5.jpg' ]);
		$p20513202->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lagtryck-floor-lamp-with-led-bulb-white__1023683_pe833218_s5.jpg' ]);


		$vc10516022 = VariationCollection::create();

		$p40527279 = Product::create([
			'name' => 'FYRTIOFYRA Pendant lamp, white/black, 15 "',
			'price' => 13.99,
			'model_path' => '/models/50527269_PS01_S01_NV01_RQP3_3.0_d51bd10031a54ef490b0aafb4dcbf89e.glb',
			'is_stackable' => 0,
			'description' => 'FYRTIOFYRA pendant lamp has a timeless expression with clean lines and provides you with good and glare-free light. Perfect to hang over your dining table or kitchen island – alone or in pairs.',
			'source' => 'https://www.ikea.com/us/en/p/fyrtiofyra-pendant-lamp-white-black-40527279/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1161918_pe889575_s5.jpg',
			'category_id' => 16,
		]);

		$p40527279->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1161918_pe889575_s5.jpg' ]);
		$p40527279->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1161916_pe889577_s5.jpg' ]);
		$p40527279->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1161917_pe889576_s5.jpg' ]);
		$p40527279->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1161915_pe889574_s5.jpg' ]);
		$p40527279->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-white-black__1338199_ph193552_s5.jpg' ]);

		$p10516022 = Product::create([
			'name' => 'FYRTIOFYRA Pendant lamp, chrome effect/white, 15 "',
			'price' => 24.99,
			'model_path' => '/models/70510885_PS01_S01_NV01_RQP3_3.0_7e2453c25c584ec4b29d7e4ca0b06bb8.glb',
			'is_stackable' => 0,
			'description' => 'FYRTIOFYRA pendant lamp has a timeless expression with clean lines and provides you with good and glare-free light. Perfect to hang over your dining table or kitchen island – alone or in pairs.',
			'source' => 'https://www.ikea.com/us/en/p/fyrtiofyra-pendant-lamp-chrome-effect-white-10516022/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1161912_pe889572_s5.jpg',
			'category_id' => 16,
		]);

		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1161912_pe889572_s5.jpg' ]);
		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1161910_pe889570_s5.jpg' ]);
		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1187149_ph191885_s5.jpg' ]);
		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1161913_pe889571_s5.jpg' ]);
		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1161911_pe889573_s5.jpg' ]);
		$p10516022->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fyrtiofyra-pendant-lamp-chrome-effect-white__1189662_ph191975_s5.jpg' ]);

		$vc10516022->products()->attach($p40527279->id);
		$vc10516022->products()->attach($p10516022->id);

		$vc60509364 = VariationCollection::create();

		$p60509364 = Product::create([
			'name' => 'ÅSKMULLER Table lamp with LED bulb, white, 9 "',
			'price' => 32.99,
			'model_path' => '/models/20509342_PS01_S01_NV01_RQP3_3.0_477fd36490db4cdc887cb2551924e366.glb',
			'is_stackable' => 0,
			'description' => 'A modern version of a traditional kerosene lamp. The visible light bulb looks like a real candle flame and spreads a soft and warm mood light that you can adjust as needed with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/askmuller-table-lamp-with-led-bulb-white-60509364/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1074321_pe856155_s5.jpg',
			'category_id' => 16,
		]);

		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1074321_pe856155_s5.jpg' ]);
		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1043942_pe841838_s5.jpg' ]);
		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1043941_pe841839_s5.jpg' ]);
		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1074320_pe856156_s5.jpg' ]);
		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1043940_pe841836_s5.jpg' ]);
		$p60509364->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-white__1216259_ph182481_s5.jpg' ]);

		$p90499900 = Product::create([
			'name' => 'ÅSKMULLER Table lamp with LED bulb, gray-green, 9 "',
			'price' => 32.99,
			'model_path' => '/models/20509342_PS01_S01_NV01_RQP3_3.0_477fd36490db4cdc887cb2551924e366.glb',
			'is_stackable' => 0,
			'description' => 'A modern version of a traditional kerosene lamp. The visible light bulb looks like a real candle flame and spreads a soft and warm mood light that you can adjust as needed with the built-in dimmer.',
			'source' => 'https://www.ikea.com/us/en/p/askmuller-table-lamp-with-led-bulb-gray-green-90499900/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1074319_pe856153_s5.jpg',
			'category_id' => 16,
		]);

		$p90499900->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1074319_pe856153_s5.jpg' ]);
		$p90499900->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1074318_pe856154_s5.jpg' ]);
		$p90499900->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1043950_pe841841_s5.jpg' ]);
		$p90499900->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1043952_pe841843_s5.jpg' ]);
		$p90499900->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/askmuller-table-lamp-with-led-bulb-gray-green__1043951_pe841844_s5.jpg' ]);

		$vc60509364->products()->attach($p60509364->id);
		$vc60509364->products()->attach($p90499900->id);

		$p50416247 = Product::create([
			'name' => 'HEKTAR Wall/clamp spotlight with LED bulb, dark gray',
			'price' => 24.99,
			'model_path' => '/models/80215308_PS01_S01_NV01_RQP3_3.0_417f4210e6e94a0ca6f033e2f1b69847.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray-50416247/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__0606598_pe682407_s5.jpg',
			'category_id' => 16,
		]);

		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__0606598_pe682407_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__1367011_ph186408_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__1367012_ph180330_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__1258089_pe926225_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__0176243_pe316484_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__0879360_pe616111_s5.jpg' ]);
		$p50416247->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-wall-clamp-spotlight-with-led-bulb-dark-gray__0879363_pe618774_s5.jpg' ]);


		$p60487183 = Product::create([
			'name' => 'VIRRMO Work lamp with LED bulb, nickel plated, 21 "',
			'price' => 39.99,
			'model_path' => '/models/80471355_PS01_S01_NV01_RQP3_3.0_8de0f2e80bff48bebbda130a99b52600.glb',
			'is_stackable' => 0,
			'description' => 'The modern, stylish lamps in the VIRRMO series have a sturdy brushed metal construction. They also take up little space and are easy to direct when you want to read, work or illuminate something you like.',
			'source' => 'https://www.ikea.com/us/en/p/virrmo-work-lamp-with-led-bulb-nickel-plated-60487183/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__0859444_pe780909_s5.jpg',
			'category_id' => 16,
		]);

		$p60487183->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__0859444_pe780909_s5.jpg' ]);
		$p60487183->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__0859446_pe780910_s5.jpg' ]);
		$p60487183->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__0859445_pe780911_s5.jpg' ]);
		$p60487183->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__1057487_ph179169_s5.jpg' ]);
		$p60487183->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/virrmo-work-lamp-with-led-bulb-nickel-plated__1057339_ph179091_s5.jpg' ]);


		$p70488422 = Product::create([
			'name' => 'KINNAHULT Table lamp, black ash/black, 14 "',
			'price' => 24.99,
			'model_path' => '/models/G-70488399-aeeb6f4676d9c114f3867066bf4fd595f4ddcc1f_0e6d57d9a8444858b627a8041d2bba9d.glb',
			'is_stackable' => 0,
			'description' => 'The design idiom of KINNAHULT floor and table lamp is reminiscent of turned wood and has its roots in Scandinavian craftsmanship. Their all-black figures give them both a modern and traditional expression.',
			'source' => 'https://www.ikea.com/us/en/p/kinnahult-table-lamp-black-ash-black-70488422/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-black-ash-black__0982269_pe815596_s5.jpg',
			'category_id' => 16,
		]);

		$p70488422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-black-ash-black__0982269_pe815596_s5.jpg' ]);
		$p70488422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-black-ash-black__0982271_pe815598_s5.jpg' ]);
		$p70488422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-black-ash-black__0982270_pe815599_s5.jpg' ]);
		$p70488422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-black-ash-black__0982272_pe815597_s5.jpg' ]);


		$vc60477725 = VariationCollection::create();

		$p90459428 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter with light bulb, black/white',
			'price' => 26.99,
			'model_path' => '/models/80459419_PS01_S01_NV01_RQP3_3.0_266d2c2f168a4af09fef6ee83237879d.glb',
			'is_stackable' => 0,
			'description' => 'The top of this floor uplight has a glossy white lampshade that directs light upwards and spreads a diffused, pleasant light around a room. A good choice for those who want a lot of light for the money.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-with-light-bulb-black-white-90459428/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-black-white__0958284_pe805291_s5.jpg',
			'category_id' => 16,
		]);

		$p90459428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-black-white__0958284_pe805291_s5.jpg' ]);
		$p90459428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-black-white__0958285_pe805293_s5.jpg' ]);
		$p90459428->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-black-white__0958286_pe805292_s5.jpg' ]);

		$p60477725 = Product::create([
			'name' => 'HEKTOGRAM Floor uplighter with light bulb, silver color/white',
			'price' => 37.99,
			'model_path' => '/models/40477726_PS01_S01_NV01_RQP3_3.0_434eb1b4a91244508e20f24056cd5c2e.glb',
			'is_stackable' => 0,
			'description' => 'The top of this floor uplight has a glossy white lampshade that directs light upwards and spreads a diffused, pleasant light around a room. A good choice for those who want a lot of light for the money.',
			'source' => 'https://www.ikea.com/us/en/p/hektogram-floor-uplighter-with-light-bulb-silver-color-white-60477725/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-silver-color-white__0941175_pe795353_s5.jpg',
			'category_id' => 16,
		]);

		$p60477725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-silver-color-white__0941175_pe795353_s5.jpg' ]);
		$p60477725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-silver-color-white__0941177_pe795354_s5.jpg' ]);
		$p60477725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektogram-floor-uplighter-with-light-bulb-silver-color-white__0941176_pe795355_s5.jpg' ]);

		$vc60477725->products()->attach($p90459428->id);
		$vc60477725->products()->attach($p60477725->id);

		$p80356987 = Product::create([
			'name' => 'NYMÅNE Wall/reading lamp with LED bulb, white',
			'price' => 39.99,
			'model_path' => '/models/20356909_PS01_S01_NV01_RQP3_3.0_56421aa7af9d4934ba3c4634f3c93d0f.glb',
			'is_stackable' => 0,
			'description' => 'Brilliant and timeless design. NYMÅNE lamps have attitude and blend in with most decors. Why not combine several different lamps for a uniform style at home?',
			'source' => 'https://www.ikea.com/us/en/p/nymane-wall-reading-lamp-with-led-bulb-white-80356987/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__0556007_pe660372_s5.jpg',
			'category_id' => 16,
		]);

		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__0556007_pe660372_s5.jpg' ]);
		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__1035341_pe840528_s5.jpg' ]);
		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__1035343_pe840530_s5.jpg' ]);
		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__0879127_pe660376_s5.jpg' ]);
		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__0879124_pe660375_s5.jpg' ]);
		$p80356987->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nymane-wall-reading-lamp-with-led-bulb-white__0879119_pe660374_s5.jpg' ]);


		$p20405636 = Product::create([
			'name' => 'KRYSSMAST Floor lamp base, nickel plated',
			'price' => 45.0,
			'model_path' => '/models/90404105_PS01_S01_NV01_RQP3_3.0_1ce11d0a48154280a740974503670e43.glb',
			'is_stackable' => 0,
			'description' => 'You can easily transform this nickel-plated lamp base with clean lines into a personal floor lamp with a shade and a LED bulb. The drawstring also makes it easy to turn on and off.',
			'source' => 'https://www.ikea.com/us/en/p/kryssmast-floor-lamp-base-nickel-plated-20405636/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-nickel-plated__0716070_pe730684_s5.jpg',
			'category_id' => 16,
		]);

		$p20405636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-nickel-plated__0716070_pe730684_s5.jpg' ]);
		$p20405636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-nickel-plated__0880289_pe730685_s5.jpg' ]);
		$p20405636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-nickel-plated__0789143_pe763842_s5.jpg' ]);


		$p00514165 = Product::create([
			'name' => 'BLIDVÄDER Table lamp with LED bulb, off-white ceramic/beige, 20 "',
			'price' => 69.99,
			'model_path' => '/models/80501258_PS01_S01_NV01_RQP3_3.0_8639f842ea2347338a3f4e638e32ccec.glb',
			'is_stackable' => 0,
			'description' => 'Table lamp with a sturdy ceramic base, a brass-colored lamp holder and a lampshade with visible textile fibers. All with a classic shape that goes with most decors and in all rooms of the home.',
			'source' => 'https://www.ikea.com/us/en/p/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige-00514165/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1059594_pe849715_s5.jpg',
			'category_id' => 16,
		]);

		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1059594_pe849715_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1243272_ph189047_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1059593_pe849716_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1371869_ph199301_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1243271_ph189076_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1371868_ph199286_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1059591_pe849714_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1243270_ph188697_s5.jpg' ]);
		$p00514165->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/blidvaeder-table-lamp-with-led-bulb-off-white-ceramic-beige__1059592_pe849717_s5.jpg' ]);


		$p70464001 = Product::create([
			'name' => 'TOMELILLA Table lamp with LED bulb, nickel plated/white, 20 "',
			'price' => 41.99,
			'model_path' => '/models/30472164_PS01_S01_NV01_RQP3_3.0_3961269553cd46bd9b5892d9cc5a1f5c.glb',
			'is_stackable' => 0,
			'description' => 'The lamps in the TOMELILLA series stand firmly on aluminium bases and have rectangular textile lampshades that take up less space than round ones. The look is modern and stylish – with a warm soft light.',
			'source' => 'https://www.ikea.com/us/en/p/tomelilla-table-lamp-with-led-bulb-nickel-plated-white-70464001/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-with-led-bulb-nickel-plated-white__0928819_pe789978_s5.jpg',
			'category_id' => 16,
		]);

		$p70464001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-with-led-bulb-nickel-plated-white__0928819_pe789978_s5.jpg' ]);
		$p70464001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-with-led-bulb-nickel-plated-white__1049491_pe844177_s5.jpg' ]);
		$p70464001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-with-led-bulb-nickel-plated-white__1049495_pe844178_s5.jpg' ]);
		$p70464001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tomelilla-table-lamp-with-led-bulb-nickel-plated-white__0933380_pe791867_s5.jpg' ]);


		$p10407688 = Product::create([
			'name' => 'NÄVLINGE Ceiling spotlight with 3 lights, white',
			'price' => 27.99,
			'model_path' => '/models/10407688_PS01_S01_NV01_RQP3_3.0_8a7e1fcb016a4d779a9eae28eed1b00c.glb',
			'is_stackable' => 0,
			'description' => 'In the NÄVLINGE series there are lamps for most needs. These are neat lamps with a design that blends into the room and they are easy to use anywhere in the home – and provide good, glare-free light.',
			'source' => 'https://www.ikea.com/us/en/p/naevlinge-ceiling-spotlight-with-3-lights-white-10407688/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-ceiling-spotlight-with-3-lights-white__0707007_pe726048_s5.jpg',
			'category_id' => 16,
		]);

		$p10407688->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-ceiling-spotlight-with-3-lights-white__0707007_pe726048_s5.jpg' ]);
		$p10407688->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-ceiling-spotlight-with-3-lights-white__1258299_pe926301_s5.jpg' ]);
		$p10407688->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-ceiling-spotlight-with-3-lights-white__0879830_pe726047_s5.jpg' ]);
		$p10407688->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/naevlinge-ceiling-spotlight-with-3-lights-white__1258298_pe926302_s5.jpg' ]);


		$vc50504932 = VariationCollection::create();

		$p60504941 = Product::create([
			'name' => 'GRÅVACKA Cord set for bulb, dark blue, 5 \' 11 "',
			'price' => 14.0,
			'model_path' => '/models/80504935_PS01_S01_NV01_RQP3_3.0_5cf7fd3f01574a56bcbfd6307d18ff31.glb',
			'is_stackable' => 0,
			'description' => 'A decorative light bulb is all that is needed to transform this simple cord set into a complete pendant lamp.',
			'source' => 'https://www.ikea.com/us/en/p/gravacka-cord-set-for-bulb-dark-blue-60504941/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-dark-blue__0976678_pe813318_s5.jpg',
			'category_id' => 16,
		]);

		$p60504941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-dark-blue__0976678_pe813318_s5.jpg' ]);
		$p60504941->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-dark-blue__0976679_pe813317_s5.jpg' ]);

		$p50504932 = Product::create([
			'name' => 'GRÅVACKA Cord set for bulb, beige, 5 \' 11 "',
			'price' => 14.0,
			'model_path' => '/models/20492799_PS01_S01_NV01_RQP3_3.0_3132fabd4b444ca8a199a934a43d6cca.glb',
			'is_stackable' => 0,
			'description' => 'A decorative light bulb is all that is needed to transform this simple cord set into a complete pendant lamp.',
			'source' => 'https://www.ikea.com/us/en/p/gravacka-cord-set-for-bulb-beige-50504932/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-beige__0976676_pe813316_s5.jpg',
			'category_id' => 16,
		]);

		$p50504932->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-beige__0976676_pe813316_s5.jpg' ]);
		$p50504932->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gravacka-cord-set-for-bulb-beige__0976677_pe813315_s5.jpg' ]);

		$vc50504932->products()->attach($p60504941->id);
		$vc50504932->products()->attach($p50504932->id);

		$p90484828 = Product::create([
			'name' => 'MARKFROST Table lamp with LED bulb, marble black',
			'price' => 27.99,
			'model_path' => '/models/50462673_PS01_S01_NV01_RQP3_3.0_2298b76052c7487db7e61ce07019aed4.glb',
			'is_stackable' => 0,
			'description' => 'Small table lamp with a black marble base topped with a decorative LED bulb that spreads pleasant mood lighting. Perfect to put in a window or on a chest of drawers.',
			'source' => 'https://www.ikea.com/us/en/p/markfrost-table-lamp-with-led-bulb-marble-black-90484828/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-with-led-bulb-marble-black__0783961_pe761588_s5.jpg',
			'category_id' => 16,
		]);

		$p90484828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-with-led-bulb-marble-black__0783961_pe761588_s5.jpg' ]);
		$p90484828->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/markfrost-table-lamp-with-led-bulb-marble-black__0733838_pe739221_s5.jpg' ]);


		$p60410481 = Product::create([
			'name' => 'SKAFTET Floor lamp base w light blb, arched, black',
			'price' => 75.0,
			'model_path' => '/models/50405395_PS01_S01_NV01_RQP3_3.0_6737ab02c5b645beafad701ebdfc7ffe.glb',
			'is_stackable' => 0,
			'description' => 'SKAFTET floor lamp base provides overhead lighting – with no ceiling outlet. You can slide the lamp base under a sofa to save floor space and combine it with any lamp shade to create a personal lamp.',
			'source' => 'https://www.ikea.com/us/en/p/skaftet-floor-lamp-base-w-light-blb-arched-black-60410481/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0760537_pe750808_s5.jpg',
			'category_id' => 16,
		]);

		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0760537_pe750808_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0975519_ph172868_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0760536_pe750809_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0885344_pe782219_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0816216_pe773376_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0792199_pe764680_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0963362_ph170750_s5.jpg' ]);
		$p60410481->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-w-light-blb-arched-black__0801019_pe768082_s5.jpg' ]);


		$p50488423 = Product::create([
			'name' => 'KINNAHULT Table lamp with LED bulb, black ash/black, 14 "',
			'price' => 26.99,
			'model_path' => '/models/G-70488399-aeeb6f4676d9c114f3867066bf4fd595f4ddcc1f_0e6d57d9a8444858b627a8041d2bba9d.glb',
			'is_stackable' => 0,
			'description' => 'The design idiom of KINNAHULT floor and table lamp is reminiscent of turned wood and has its roots in Scandinavian craftsmanship. Their all-black figures give them both a modern and traditional expression.',
			'source' => 'https://www.ikea.com/us/en/p/kinnahult-table-lamp-with-led-bulb-black-ash-black-50488423/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-with-led-bulb-black-ash-black__0982269_pe815596_s5.jpg',
			'category_id' => 16,
		]);

		$p50488423->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-with-led-bulb-black-ash-black__0982269_pe815596_s5.jpg' ]);
		$p50488423->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-with-led-bulb-black-ash-black__0982270_pe815599_s5.jpg' ]);
		$p50488423->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-with-led-bulb-black-ash-black__0982272_pe815597_s5.jpg' ]);
		$p50488423->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kinnahult-table-lamp-with-led-bulb-black-ash-black__0982271_pe815598_s5.jpg' ]);


		$p30416291 = Product::create([
			'name' => 'NYFORS Table lamp with LED bulb, nickel plated white',
			'price' => 51.99,
			'model_path' => '/models/00303115_PS01_S01_NV01_RQP3_3.0_8046a1971d9e49eb9b2512e2d807442e.glb',
			'is_stackable' => 0,
			'description' => 'This table lamp with a nickel-plated base and a pleated textile shade in white spreads an even, decorative light that creates a cozy atmosphere in the room. Easy to turn on and off with the drawstring.',
			'source' => 'https://www.ikea.com/us/en/p/nyfors-table-lamp-with-led-bulb-nickel-plated-white-30416291/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-with-led-bulb-nickel-plated-white__0609343_pe684464_s5.jpg',
			'category_id' => 16,
		]);

		$p30416291->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-with-led-bulb-nickel-plated-white__0609343_pe684464_s5.jpg' ]);
		$p30416291->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-with-led-bulb-nickel-plated-white__0880664_pe614404_s5.jpg' ]);
		$p30416291->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-with-led-bulb-nickel-plated-white__0880670_pe620464_s5.jpg' ]);
		$p30416291->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nyfors-table-lamp-with-led-bulb-nickel-plated-white__0880657_pe613047_s5.jpg' ]);


		$p20416239 = Product::create([
			'name' => 'HEKTAR Work lamp w/charging+LED bulb, dark gray',
			'price' => 89.99,
			'model_path' => '/models/60323436_PS01_S01_NV01_RQP3_3.0_72f044a36052400690282135aa5f25ff.glb',
			'is_stackable' => 0,
			'description' => 'The simple, oversized metal shape is inspired by old lamps from places like factories and theaters. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.',
			'source' => 'https://www.ikea.com/us/en/p/hektar-work-lamp-w-charging-led-bulb-dark-gray-20416239/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0473183_pe614486_s5.jpg',
			'category_id' => 16,
		]);

		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0473183_pe614486_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0880763_pe711192_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0880757_pe623029_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__1286242_pe933513_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0880752_pe614485_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0880760_pe693649_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0879880_pe622563_s5.jpg' ]);
		$p20416239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hektar-work-lamp-w-charging-led-bulb-dark-gray__0832469_ph167281_s5.jpg' ]);


		$p40410482 = Product::create([
			'name' => 'SKAFTET Floor lamp base with LED bulb, nickel plated',
			'price' => 45.0,
			'model_path' => '/models/80405394_PS01_S01_NV01_RQP3_3.0_34508bf3f3524e3c984a04e934c1d7d3.glb',
			'is_stackable' => 0,
			'description' => 'Stylish, modern design that you can add a personal touch to with a lamp shade or decorative light bulb. If you like the style then you can combine SKAFTET lamp base with other lamps in the same series.',
			'source' => 'https://www.ikea.com/us/en/p/skaftet-floor-lamp-base-with-led-bulb-nickel-plated-40410482/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0663955_pe712559_s5.jpg',
			'category_id' => 16,
		]);

		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0663955_pe712559_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0878972_pe782221_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__1186294_pe898764_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0880279_pe714920_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0880273_pe714919_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0788365_pe763593_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0792159_pe764671_s5.jpg' ]);
		$p40410482->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skaftet-floor-lamp-base-with-led-bulb-nickel-plated__0788377_pe763597_s5.jpg' ]);


		$p80437804 = Product::create([
			'name' => 'SIMRISHAMN Table/wall lamp with light bulb, chrome plated/opal glass, 6 "',
			'price' => 44.99,
			'model_path' => '/models/50437792_PS01_S01_NV01_RQP3_3.0_93a64d62404f4320a8619bba67a4296f.glb',
			'is_stackable' => 0,
			'description' => 'A stylish glass and chrome lamp from the SIMRISHAMN series. Modern lighting for an entire home that creates a nice atmosphere. Use it as a standalone eye-catcher or mix it with other lamps in the series.',
			'source' => 'https://www.ikea.com/us/en/p/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass-80437804/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0789662_pe764089_s5.jpg',
			'category_id' => 16,
		]);

		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0789662_pe764089_s5.jpg' ]);
		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0806249_pe769873_s5.jpg' ]);
		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__1049501_pe844183_s5.jpg' ]);
		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0963370_ph171630_s5.jpg' ]);
		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0888336_ph167979_s5.jpg' ]);
		$p80437804->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/simrishamn-table-wall-lamp-with-light-bulb-chrome-plated-opal-glass__0789661_pe764090_s5.jpg' ]);


		$p30405711 = Product::create([
			'name' => 'KRYSSMAST Floor lamp base with LED bulb, nickel plated',
			'price' => 50.0,
			'model_path' => '/models/90404105_PS01_S01_NV01_RQP3_3.0_1ce11d0a48154280a740974503670e43.glb',
			'is_stackable' => 0,
			'description' => 'You can easily transform this nickel-plated lamp base with clean lines into a personal floor lamp with a shade and a LED bulb. The drawstring also makes it easy to turn on and off.',
			'source' => 'https://www.ikea.com/us/en/p/kryssmast-floor-lamp-base-with-led-bulb-nickel-plated-30405711/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-with-led-bulb-nickel-plated__0716070_pe730684_s5.jpg',
			'category_id' => 16,
		]);

		$p30405711->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-with-led-bulb-nickel-plated__0716070_pe730684_s5.jpg' ]);
		$p30405711->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-with-led-bulb-nickel-plated__0880289_pe730685_s5.jpg' ]);
		$p30405711->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kryssmast-floor-lamp-base-with-led-bulb-nickel-plated__0789143_pe763842_s5.jpg' ]);


		$vc40549771 = VariationCollection::create();

		$p80552318 = Product::create([
			'name' => 'FLOTTILJ Desk lamp, beige',
			'price' => 9.99,
			'model_path' => '/models/90552308_PS01_S01_NV01_RQP2_3.0_916dd5bb9acf4ba18a87cbe8b0bf70bb.glb',
			'is_stackable' => 0,
			'description' => 'Direct the light downwards when you want to read or work and angle the light upwards when you want it to focus on a favorite painting. Who could have guessed that this neat desk lamp hid such talents?',
			'source' => 'https://www.ikea.com/us/en/p/flottilj-desk-lamp-beige-80552318/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1177509_pe895347_s5.jpg',
			'category_id' => 16,
		]);

		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1177509_pe895347_s5.jpg' ]);
		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1277756_pe931107_s5.jpg' ]);
		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1178031_pe895623_s5.jpg' ]);
		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1178032_pe895622_s5.jpg' ]);
		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1178033_pe895621_s5.jpg' ]);
		$p80552318->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-beige__1178030_pe895620_s5.jpg' ]);

		$vc40549771->products()->attach($p80552318->id);

		$vc10488397 = VariationCollection::create();

		$p50559180 = Product::create([
			'name' => 'BUNKEFLO Pendant lamp, red/birch, 14 "',
			'price' => 44.99,
			'model_path' => '/models/20559172_PS01_S01_NV01_RQP3_3.0_2448108327a3401f9acbde0e1daaa2be.glb',
			'is_stackable' => 0,
			'description' => 'Timeless pendant lamp with a softly shaped red metal shade topped with a decorative detail in solid birch. Blends in and spreads a pleasant directed light over your dining table or kitchen island.',
			'source' => 'https://www.ikea.com/us/en/p/bunkeflo-pendant-lamp-red-birch-50559180/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1203353_pe906287_s5.jpg',
			'category_id' => 16,
		]);

		$p50559180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1203353_pe906287_s5.jpg' ]);
		$p50559180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1203352_pe906288_s5.jpg' ]);
		$p50559180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1315414_ph195722_s5.jpg' ]);
		$p50559180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1203350_pe906286_s5.jpg' ]);
		$p50559180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/bunkeflo-pendant-lamp-red-birch__1203351_pe906289_s5.jpg' ]);

		$vc10488397->products()->attach($p50559180->id);

		$vc10549777 = VariationCollection::create();

		$p20552321 = Product::create([
			'name' => 'FLOTTILJ Desk lamp with light bulb, beige',
			'price' => 12.99,
			'model_path' => '/models/90552308_PS01_S01_NV01_RQP2_3.0_916dd5bb9acf4ba18a87cbe8b0bf70bb.glb',
			'is_stackable' => 0,
			'description' => 'Direct the light downwards when you want to read or work and angle the light upwards when you want it to focus on a favorite painting. Who could have guessed that this neat desk lamp hid such talents?',
			'source' => 'https://www.ikea.com/us/en/p/flottilj-desk-lamp-with-light-bulb-beige-20552321/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1177509_pe895347_s5.jpg',
			'category_id' => 16,
		]);

		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1177509_pe895347_s5.jpg' ]);
		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1178032_pe895622_s5.jpg' ]);
		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1178030_pe895620_s5.jpg' ]);
		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1178031_pe895623_s5.jpg' ]);
		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1277756_pe931107_s5.jpg' ]);
		$p20552321->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/flottilj-desk-lamp-with-light-bulb-beige__1178033_pe895621_s5.jpg' ]);

		$vc10549777->products()->attach($p20552321->id);

		$vc10416273 = VariationCollection::create();

		$p10416273 = Product::create([
			'name' => 'RANARP Wall/clamp spotlight with LED bulb, black',
			'price' => 34.99,
			'model_path' => '/models/70331394_PS01_S01_NV01_RQP3_3.0_8e936981a7bf4d008e5cdc0efd12b9fe.glb',
			'is_stackable' => 0,
			'description' => 'RANARP lamp is reminiscent of times gone by, with robust metal details and a classic-patterned textile cord. Mount it on a wall or clamp it to a shelf and then direct the light where you want it.',
			'source' => 'https://www.ikea.com/us/en/p/ranarp-wall-clamp-spotlight-with-led-bulb-black-10416273/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0448743_pe598364_s5.jpg',
			'category_id' => 16,
		]);

		$p10416273->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0448743_pe598364_s5.jpg' ]);
		$p10416273->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0879087_pe616107_s5.jpg' ]);
		$p10416273->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0475086_pe615450_s5.jpg' ]);
		$p10416273->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0879096_pe618773_s5.jpg' ]);
		$p10416273->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ranarp-wall-clamp-spotlight-with-led-bulb-black__0879103_pe619932_s5.jpg' ]);

		$vc10416273->products()->attach($p10416273->id);

        // Accent Table
        $vc20538721 = VariationCollection::create();

		$p40541421 = Product::create([
			'name' => 'HOLMERUD Side table, oak effect, 31 1/2x12 1/4 "',
			'price' => 49.99,
			'model_path' => '/models/40541421_PS01_S01_NV01_RQP3_3.0_353bafa476084b8f86aeb1ea4c2f54a9.glb',
			'is_stackable' => 1,
			'description' => 'HOLMERUD side table has a distinctive architectural shape and practical storage spaces. It’s designed to stand snug along the length of your sofa’s armrest – but looks just as great against a wall!',
			'source' => 'https://www.ikea.com/us/en/p/holmerud-side-table-oak-effect-40541421/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-oak-effect__1193662_pe901564_s5.jpg',
			'category_id' => 2,
		]);

		$p40541421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-oak-effect__1193662_pe901564_s5.jpg' ]);
		$p40541421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-oak-effect__1246979_pe922426_s5.jpg' ]);
		$p40541421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-oak-effect__1213554_pe911172_s5.jpg' ]);
		$p40541421->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-oak-effect__1246980_pe922427_s5.jpg' ]);

		$p20538721 = Product::create([
			'name' => 'HOLMERUD Side table, dark brown, 31 1/2x12 1/4 "',
			'price' => 49.99,
			'model_path' => '/models/20538721_PS01_S01_NV01_RQP3_3.0_27735595f0c84ae3815c1ae6c779f0e7.glb',
			'is_stackable' => 1,
			'description' => 'HOLMERUD side table has a distinctive architectural shape and practical storage spaces. It’s designed to stand snug along the length of your sofa’s armrest – but looks just as great against a wall!',
			'source' => 'https://www.ikea.com/us/en/p/holmerud-side-table-dark-brown-20538721/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1193661_pe901561_s5.jpg',
			'category_id' => 2,
		]);

		$p20538721->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1193661_pe901561_s5.jpg' ]);
		$p20538721->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1213554_pe911172_s5.jpg' ]);
		$p20538721->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1246977_pe922425_s5.jpg' ]);
		$p20538721->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1247728_ph195125_s5.jpg' ]);
		$p20538721->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-side-table-dark-brown__1246982_pe922428_s5.jpg' ]);

		$vc20538721->products()->attach($p40541421->id);
		$vc20538721->products()->attach($p20538721->id);

		$vc00533649 = VariationCollection::create();

		$p50411990 = Product::create([
			'name' => 'GLADOM Tray table, black, 17 1/2x20 5/8 "',
			'price' => 19.99,
			'model_path' => '/models/50411990_PS01_S01_NV01_RQP3_3.0_2c4cee42e268462181024df289a8179c.glb',
			'is_stackable' => 1,
			'description' => 'Easy to love at a price that’s hard to resist. Buy one or buy a few and make every space where you sit more convenient. Light and easy to move around with removable tray top, handy for serving snacks.',
			'source' => 'https://www.ikea.com/us/en/p/gladom-tray-table-black-50411990/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0567223_pe664991_s5.jpg',
			'category_id' => 2,
		]);

		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0567223_pe664991_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0731682_pe738389_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__1058801_ph163156_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0837078_pe664995_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0802833_ph163155_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0837072_pe664992_s5.jpg' ]);
		$p50411990->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-black__0709540_ph153583_s5.jpg' ]);

		$p30513763 = Product::create([
			'name' => 'GLADOM Tray table, dark gray-beige, 17 1/2x20 5/8 "',
			'price' => 24.99,
			'model_path' => '/models/30513763_PS01_S01_NV01_RQP3_3.0_26843356a3bb4a2a8044bab9b1243d93.glb',
			'is_stackable' => 1,
			'description' => 'Easy to love at a price that’s hard to resist. Buy one or buy a few and make every space where you sit more convenient. Light and easy to move around with removable tray top, handy for serving snacks.',
			'source' => 'https://www.ikea.com/us/en/p/gladom-tray-table-dark-gray-beige-30513763/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0998388_pe823016_s5.jpg',
			'category_id' => 2,
		]);

		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0998388_pe823016_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0998392_pe823020_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0998393_pe823018_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0731682_pe738389_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__0998389_pe823017_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__1064054_ph182209_s5.jpg' ]);
		$p30513763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-dark-gray-beige__1064053_ph182221_s5.jpg' ]);

		$p70337819 = Product::create([
			'name' => 'GLADOM Tray table, white, 17 1/2x20 5/8 "',
			'price' => 19.99,
			'model_path' => '/models/70337819_PS01_S01_NV01_RQP3_3.0_03fb8511b68d4e5abe16c36a78fc839d.glb',
			'is_stackable' => 1,
			'description' => 'Easy to love at a price that’s hard to resist. Buy one or buy a few and make every space where you sit more convenient. Light and easy to move around with removable tray top, handy for serving snacks.',
			'source' => 'https://www.ikea.com/us/en/p/gladom-tray-table-white-70337819/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0470732_pe612912_s5.jpg',
			'category_id' => 2,
		]);

		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0470732_pe612912_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0475197_pe615469_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0709546_ph152945_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0733581_ph152596_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0733531_ph153300_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0836819_pe617310_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0836821_pe709866_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0709849_ph153191_s5.jpg' ]);
		$p70337819->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gladom-tray-table-white__0731682_pe738389_s5.jpg' ]);

		$vc00533649->products()->attach($p50411990->id);
		$vc00533649->products()->attach($p30513763->id);
		$vc00533649->products()->attach($p70337819->id);

		$vc40104294 = VariationCollection::create();

		$p40104294 = Product::create([
			'name' => 'LACK Coffee table, black-brown, 35 3/8x21 5/8 "',
			'price' => 29.99,
			'model_path' => '/models/40104294_PS01_S01_NV01_RQP3_3.0_9e3a00532a1e44c0bee35dbd1626666a.glb',
			'is_stackable' => 1,
			'description' => 'LACK table in black-brown is easy to match with other furnishings. The honeycomb structured paper filling construction adds strength to the table while keeping it lightweight so it´s easy to move around.',
			'source' => 'https://www.ikea.com/us/en/p/lack-coffee-table-black-brown-40104294/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57540_pe163122_s5.jpg',
			'category_id' => 2,
		]);

		$p40104294->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57540_pe163122_s5.jpg' ]);
		$p40104294->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0835835_pe601383_s5.jpg' ]);
		$p40104294->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__1083778_pe859098_s5.jpg' ]);
		$p40104294->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0664929_pe712922_s5.jpg' ]);
		$p40104294->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0258017_pe401973_s5.jpg' ]);

		$p50319029 = Product::create([
			'name' => 'LACK Coffee table, white stained oak effect, 35 3/8x21 5/8 "',
			'price' => 29.99,
			'model_path' => '/models/50319029_PS01_S01_NV01_RQP3_3.0_8045ff30e56148b8921c29d402e20a64.glb',
			'is_stackable' => 1,
			'description' => 'LACK tables have a unique construction in paper that makes them light, easy to move and stable at the same time. To enhance your mood even more, we also keep the price down.',
			'source' => 'https://www.ikea.com/us/en/p/lack-coffee-table-white-stained-oak-effect-50319029/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0411538_pe570463_s5.jpg',
			'category_id' => 2,
		]);

		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0411538_pe570463_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0837223_pe709589_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__1083778_pe859098_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0664929_pe712922_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0836314_pe709588_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0411540_pe570465_s5.jpg' ]);
		$p50319029->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0918237_ph163104_s5.jpg' ]);

		$p90449905 = Product::create([
			'name' => 'LACK Coffee table, white, 35x22x18"',
			'price' => 29.99,
			'model_path' => '/models/90449905_PS01_S01_NV01_RQP3_3.0_6d28b08c21124f93801199026abb1f0a.glb',
			'is_stackable' => 1,
			'description' => 'This LACK table in white is easy to match with other furnishings. Thanks to the unique construction, it’s easy to assemble, lift and move around - and we can keep the prices down, so your spirits go up.',
			'source' => 'https://www.ikea.com/us/en/p/lack-coffee-table-white-90449905/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0750652_pe746803_s5.jpg',
			'category_id' => 2,
		]);

		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0750652_pe746803_s5.jpg' ]);
		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__1083778_pe859098_s5.jpg' ]);
		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0664929_pe712922_s5.jpg' ]);
		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702217_pe724349_s5.jpg' ]);
		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702213_pe724351_s5.jpg' ]);
		$p90449905->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0836361_pe601397_s5.jpg' ]);

		$vc40104294->products()->attach($p40104294->id);
		$vc40104294->products()->attach($p50319029->id);
		$vc40104294->products()->attach($p90449905->id);

		$vc10557102 = VariationCollection::create();

		$p80270125 = Product::create([
			'name' => 'LÖVBACKEN Side table, medium brown, 30 3/8x15 3/8 "',
			'price' => 89.99,
			'model_path' => '/models/80270125_PS01_S01_NV01_RQP3_3.0_30aefc67c7d34fabb5b43a9e1f4a4623.glb',
			'is_stackable' => 1,
			'description' => 'LÖVBACKEN is an updated version of our LÖVET table, the first piece of furniture we sold in a flat package. This model has three legs and brass-colored feet – a design that enhances the look of any room.',
			'source' => 'https://www.ikea.com/us/en/p/loevbacken-side-table-medium-brown-80270125/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/loevbacken-side-table-medium-brown__0731794_pe738454_s5.jpg',
			'category_id' => 2,
		]);

		$p80270125->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevbacken-side-table-medium-brown__0731794_pe738454_s5.jpg' ]);
		$p80270125->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevbacken-side-table-medium-brown__0836345_pe618842_s5.jpg' ]);
		$p80270125->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevbacken-side-table-medium-brown__0836344_pe618839_s5.jpg' ]);
		$p80270125->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/loevbacken-side-table-medium-brown__0836346_pe618845_s5.jpg' ]);

		$vc10557102->products()->attach($p80270125->id);

		$vc30449908 = VariationCollection::create();

		$p80104268 = Product::create([
			'name' => 'LACK Side table, black-brown, 21 5/8x21 5/8 "',
			'price' => 12.99,
			'model_path' => '/models/80104268_PS01_S01_NV01_RQP3_3.0_095a8b79430e419481695a4460bba28d.glb',
			'is_stackable' => 1,
			'description' => 'A loyal friend that’s been in our range since 1979. With tender loving care we’ve made it even better. It’s easy to assemble, lift and move around. We’ve kept the prices down, so your spirits rise.',
			'source' => 'https://www.ikea.com/us/en/p/lack-side-table-black-brown-80104268/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__57544_pe163126_s5.jpg',
			'category_id' => 2,
		]);

		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__57544_pe163126_s5.jpg' ]);
		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__0836403_pe709556_s5.jpg' ]);
		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__0836404_pe709559_s5.jpg' ]);
		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__0702066_pe724306_s5.jpg' ]);
		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__1083778_pe859098_s5.jpg' ]);
		$p80104268->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-black-brown__0836402_pe601418_s5.jpg' ]);

		$p30449908 = Product::create([
			'name' => 'LACK Side table, white, 21 5/8x21 5/8 "',
			'price' => 12.99,
			'model_path' => '/models/30449908_PS01_S01_NV01_RQP3_3.0_831fefd01c3640bdbe57a9034ee7232c.glb',
			'is_stackable' => 1,
			'description' => 'This LACK table in white is easy to match with other furnishings. Thanks to the unique construction, it’s easy to assemble, lift and move around - and we can keep the prices down, so your spirits go up.',
			'source' => 'https://www.ikea.com/us/en/p/lack-side-table-white-30449908/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702210_pe724345_s5.jpg',
			'category_id' => 2,
		]);

		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702210_pe724345_s5.jpg' ]);
		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1057263_pe848812_s5.jpg' ]);
		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1083778_pe859098_s5.jpg' ]);
		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702212_pe724346_s5.jpg' ]);
		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702066_pe724306_s5.jpg' ]);
		$p30449908->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702207_pe724342_s5.jpg' ]);

		$p70319028 = Product::create([
			'name' => 'LACK Side table, white stained oak effect, 21 5/8x21 5/8 "',
			'price' => 12.99,
			'model_path' => '/models/70319028_PS01_S01_NV01_RQP3_3.0_18dec9c789314be98bf4e737a1548d14.glb',
			'is_stackable' => 1,
			'description' => 'LACK side table is easy to match with other furnishings. The honeycomb structured paper filling construction adds strength to the table while keeping it lightweight so it´s easy to move around.',
			'source' => 'https://www.ikea.com/us/en/p/lack-side-table-white-stained-oak-effect-70319028/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0411514_pe570468_s5.jpg',
			'category_id' => 2,
		]);

		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0411514_pe570468_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0837234_pe709590_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__1083778_pe859098_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0411516_pe570470_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0837223_pe709589_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0837239_pe709592_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0837236_pe709591_s5.jpg' ]);
		$p70319028->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white-stained-oak-effect__0702066_pe724306_s5.jpg' ]);

		$vc30449908->products()->attach($p80104268->id);
		$vc30449908->products()->attach($p30449908->id);
		$vc30449908->products()->attach($p70319028->id);

		$vc50515167 = VariationCollection::create();

		$p50515167 = Product::create([
			'name' => 'JAKOBSFORS Coffee table, dark brown stained oak veneer, 31 1/2 "',
			'price' => 99.0,
			'model_path' => '/models/50515167_PS01_S01_NV01_RQP3_3.0_39b9eb5d240248feb745155d6ded8ba3.glb',
			'is_stackable' => 1,
			'description' => 'JAKOBSFORS is a sleek and airy coffee table with a natural wood look. The modern design with a simple and honest expression suits many interior styles – and you can therefore enjoy it for many years.',
			'source' => 'https://www.ikea.com/us/en/p/jakobsfors-coffee-table-dark-brown-stained-oak-veneer-50515167/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1108164_pe869323_s5.jpg',
			'category_id' => 2,
		]);

		$p50515167->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1108164_pe869323_s5.jpg' ]);
		$p50515167->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1108168_pe869325_s5.jpg' ]);
		$p50515167->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1108169_pe869326_s5.jpg' ]);
		$p50515167->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1108167_pe869324_s5.jpg' ]);
		$p50515167->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-dark-brown-stained-oak-veneer__1121779_pe874363_s5.jpg' ]);

		$p90500121 = Product::create([
			'name' => 'JAKOBSFORS Coffee table, oak veneer, 31 1/2 "',
			'price' => 99.0,
			'model_path' => '/models/90500121_PS01_S01_NV01_RQP3_3.0_c337cc774d8448df9f7b99c610d4b6fe.glb',
			'is_stackable' => 1,
			'description' => 'JAKOBSFORS is a sleek and airy coffee table with a natural wood look. The modern design with a simple and honest expression suits many interior styles – and you can therefore enjoy it for many years.',
			'source' => 'https://www.ikea.com/us/en/p/jakobsfors-coffee-table-oak-veneer-90500121/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1108172_pe869327_s5.jpg',
			'category_id' => 2,
		]);

		$p90500121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1108172_pe869327_s5.jpg' ]);
		$p90500121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1121779_pe874363_s5.jpg' ]);
		$p90500121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1108175_pe869330_s5.jpg' ]);
		$p90500121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1108174_pe869329_s5.jpg' ]);
		$p90500121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jakobsfors-coffee-table-oak-veneer__1108173_pe869328_s5.jpg' ]);

		$vc50515167->products()->attach($p50515167->id);
		$vc50515167->products()->attach($p90500121->id);

		$vc30500355 = VariationCollection::create();

		$p70389356 = Product::create([
			'name' => 'BORGEBY Coffee table, birch veneer, 27 1/2 "',
			'price' => 149.99,
			'model_path' => '/models/70389356_PS01_S01_NV01_RQP3_3.0_5c339f0fc6cc472dbfd32ce29ab582f4.glb',
			'is_stackable' => 1,
			'description' => 'Let your eyes rest on BORGEBY table. The stylish and airy shape creates a visual calm in the room – and the practical storage under the table top makes it easy to keep all your small things organized.',
			'source' => 'https://www.ikea.com/us/en/p/borgeby-coffee-table-birch-veneer-70389356/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0987623_pe817609_s5.jpg',
			'category_id' => 2,
		]);

		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0987623_pe817609_s5.jpg' ]);
		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0949801_pe800020_s5.jpg' ]);
		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0977133_pe813414_s5.jpg' ]);
		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0949802_pe800019_s5.jpg' ]);
		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0949800_pe800017_s5.jpg' ]);
		$p70389356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-birch-veneer__0986539_pe817189_s5.jpg' ]);

		$p30500355 = Product::create([
			'name' => 'BORGEBY Coffee table, black, 27 1/2 "',
			'price' => 149.99,
			'model_path' => '/models/30500355_PS01_S01_NV01_RQP3_3.0_26889254b8224348939c59ded7f7a37c.glb',
			'is_stackable' => 1,
			'description' => 'Let your eyes rest on BORGEBY table. The stylish and airy shape creates a visual calm in the room – and the practical storage under the table top makes it easy to keep all your small things organized.',
			'source' => 'https://www.ikea.com/us/en/p/borgeby-coffee-table-black-30500355/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0983032_pe815898_s5.jpg',
			'category_id' => 2,
		]);

		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0983032_pe815898_s5.jpg' ]);
		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0990328_pe818861_s5.jpg' ]);
		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0987515_pe817553_s5.jpg' ]);
		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0987517_pe817555_s5.jpg' ]);
		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__0977133_pe813414_s5.jpg' ]);
		$p30500355->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/borgeby-coffee-table-black__1270686_pe929376_s5.jpg' ]);

		$vc30500355->products()->attach($p70389356->id);
		$vc30500355->products()->attach($p30500355->id);

		$vc10562250 = VariationCollection::create();

		$p30515314 = Product::create([
			'name' => 'LISTERBY Side table, oak veneer, 19 5/8 "',
			'price' => 119.99,
			'model_path' => '/models/30515314_PS01_S01_NV01_RQP3_3.0_092dd70d30d446acb8f21a29b5400cb2.glb',
			'is_stackable' => 1,
			'description' => 'This robust table lasts a long time since lacquer protects the durable oak and preserves the natural wood feel. Sturdy and with a genuine character – year after year.',
			'source' => 'https://www.ikea.com/us/en/p/listerby-side-table-oak-veneer-30515314/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-side-table-oak-veneer__1022554_pe832812_s5.jpg',
			'category_id' => 2,
		]);

		$p30515314->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-side-table-oak-veneer__1022554_pe832812_s5.jpg' ]);
		$p30515314->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-side-table-oak-veneer__1022555_pe832813_s5.jpg' ]);
		$p30515314->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-side-table-oak-veneer__0719680_pe732143_s5.jpg' ]);
		$p30515314->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-side-table-oak-veneer__1076369_pe856775_s5.jpg' ]);

		$vc10562250->products()->attach($p30515314->id);

		$vc30513904 = VariationCollection::create();

		$p30513904 = Product::create([
			'name' => 'LISTERBY Coffee table, oak veneer, 55 1/8x23 5/8 "',
			'price' => 299.99,
			'model_path' => '/models/30513904_PS01_S01_NV01_RQP3_3.0_c96b8cf304874e29a2b4e10875cff85a.glb',
			'is_stackable' => 1,
			'description' => 'This robust table lasts a long time since lacquer protects the durable oak and preserves the natural wood feel. Sturdy and with a genuine character – year after year.',
			'source' => 'https://www.ikea.com/us/en/p/listerby-coffee-table-oak-veneer-30513904/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022534_pe832792_s5.jpg',
			'category_id' => 2,
		]);

		$p30513904->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022534_pe832792_s5.jpg' ]);
		$p30513904->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022537_pe832795_s5.jpg' ]);
		$p30513904->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1051409_pe845522_s5.jpg' ]);
		$p30513904->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022535_pe832807_s5.jpg' ]);
		$p30513904->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1170344_pe892786_s5.jpg' ]);

		$vc30513904->products()->attach($p30513904->id);

		$vc10351441 = VariationCollection::create();

		$p20399027 = Product::create([
			'name' => 'LUNNARP Coffee table, brown, 35 3/8x21 5/8 "',
			'price' => 79.99,
			'model_path' => '/models/20399027_PS01_S01_NV01_RQP3_3.0_983ba3e4ea1f45908d149debc6d9d083.glb',
			'is_stackable' => 1,
			'description' => 'The sturdy and stable LUNNARP coffee table has practical storage under the tabletop. Perfect when you want to have magazines, remote controls and tablets close at hand when you relax on the sofa.',
			'source' => 'https://www.ikea.com/us/en/p/lunnarp-coffee-table-brown-20399027/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-brown__0593613_pe675310_s5.jpg',
			'category_id' => 2,
		]);

		$p20399027->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-brown__0593613_pe675310_s5.jpg' ]);
		$p20399027->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-brown__0664926_pe712919_s5.jpg' ]);
		$p20399027->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-brown__0836842_pe675309_s5.jpg' ]);
		$p20399027->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-brown__0836846_pe675311_s5.jpg' ]);

		$p10351441 = Product::create([
			'name' => 'LUNNARP Coffee table, white, 35 3/8x21 5/8 "',
			'price' => 79.99,
			'model_path' => '/models/10351441_PS01_S01_NV01_RQP3_3.0_4fd3fb6b99e94b34ac6126d9610a8669.glb',
			'is_stackable' => 1,
			'description' => 'The sturdy and stable LUNNARP coffee table has practical storage under the tabletop. Perfect when you want to have magazines, remote controls and tablets close at hand when you relax on the sofa.',
			'source' => 'https://www.ikea.com/us/en/p/lunnarp-coffee-table-white-10351441/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0593617_pe675313_s5.jpg',
			'category_id' => 2,
		]);

		$p10351441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0593617_pe675313_s5.jpg' ]);
		$p10351441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0835586_pe675314_s5.jpg' ]);
		$p10351441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0835554_pe675312_s5.jpg' ]);
		$p10351441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0664926_pe712919_s5.jpg' ]);
		$p10351441->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-coffee-table-white__0766333_pe753758_s5.jpg' ]);

		$vc10351441->products()->attach($p20399027->id);
		$vc10351441->products()->attach($p10351441->id);

		$vc10176287 = VariationCollection::create();

		$p10176292 = Product::create([
			'name' => 'HEMNES Coffee table, black-brown, 35 3/8x35 3/8 "',
			'price' => 249.99,
			'model_path' => '/models/10176292_PS01_S01_NV01_RQP3_3.0_780afb2d91a24d588b97864a2fff65df.glb',
			'is_stackable' => 1,
			'description' => 'Natural beauty in solid pine. A durable and renewable material that maintains its genuine character with each passing year. Looks great together with other furniture in the HEMNES series.',
			'source' => 'https://www.ikea.com/us/en/p/hemnes-coffee-table-black-brown-10176292/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-black-brown__0735556_pe740002_s5.jpg',
			'category_id' => 2,
		]);

		$p10176292->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-black-brown__0735556_pe740002_s5.jpg' ]);
		$p10176292->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-black-brown__0837153_pe601368_s5.jpg' ]);
		$p10176292->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-black-brown__0836662_pe614792_s5.jpg' ]);
		$p10176292->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-black-brown__0731685_pe738390_s5.jpg' ]);

		$p10176287 = Product::create([
			'name' => 'HEMNES Coffee table, white stain, 35 3/8x35 3/8 "',
			'price' => 249.99,
			'model_path' => '/models/10176287_PS01_S01_NV01_RQP3_3.0_2dda5f76f5e142a5a79867df2f969d54.glb',
			'is_stackable' => 1,
			'description' => 'Natural beauty in solid pine. A durable and renewable material that maintains its genuine character with each passing year. Looks great together with other furniture in the HEMNES series.',
			'source' => 'https://www.ikea.com/us/en/p/hemnes-coffee-table-white-stain-10176287/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain__0735558_pe740004_s5.jpg',
			'category_id' => 2,
		]);

		$p10176287->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain__0735558_pe740004_s5.jpg' ]);
		$p10176287->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain__0837149_pe614793_s5.jpg' ]);
		$p10176287->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain__0837144_pe601357_s5.jpg' ]);
		$p10176287->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain__0731685_pe738390_s5.jpg' ]);

		$p30413495 = Product::create([
			'name' => 'HEMNES Coffee table, white stain/light brown, 35 3/8x35 3/8 "',
			'price' => 249.99,
			'model_path' => '/models/30413495_PS01_S01_NV01_RQP3_3.0_e1a7b221759847d2997b4e8fd8f21049.glb',
			'is_stackable' => 1,
			'description' => 'Natural beauty in solid pine. A durable and renewable material that maintains its genuine character with each passing year. Looks great together with other furniture in the HEMNES series.',
			'source' => 'https://www.ikea.com/us/en/p/hemnes-coffee-table-white-stain-light-brown-30413495/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain-light-brown__0735559_pe740009_s5.jpg',
			'category_id' => 2,
		]);

		$p30413495->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain-light-brown__0735559_pe740009_s5.jpg' ]);
		$p30413495->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain-light-brown__0835683_pe671195_s5.jpg' ]);
		$p30413495->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain-light-brown__0731685_pe738390_s5.jpg' ]);
		$p30413495->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-coffee-table-white-stain-light-brown__0835682_pe671194_s5.jpg' ]);

		$vc10176287->products()->attach($p10176292->id);
		$vc10176287->products()->attach($p10176287->id);
		$vc10176287->products()->attach($p30413495->id);

		$p10239713 = Product::create([
			'name' => 'STOCKHOLM Nesting tables, set of 2, walnut veneer',
			'price' => 329.99,
			'model_path' => '/models/G-10239713-5b6d99c538427c7cb1d8897d0f6d3bee1b4099d9_41dc079f394b4f18bd965ab89f9fff94.glb',
			'is_stackable' => 1,
			'description' => 'A tribute to modern Scandinavian design. These stylish nesting tables with leaf-shaped table tops made of walnut veneer have an elegant and warm expression. Use them individually or together.',
			'source' => 'https://www.ikea.com/us/en/p/stockholm-nesting-tables-set-of-2-walnut-veneer-10239713/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0735683_pe740088_s5.jpg',
			'category_id' => 2,
		]);

		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0735683_pe740088_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0258118_pe402030_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0731768_pe738435_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0212223_pe362779_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__1271953_ph181478_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__1013141_ph172164_s5.jpg' ]);
		$p10239713->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stockholm-nesting-tables-set-of-2-walnut-veneer__0837158_pe365379_s5.jpg' ]);


		$vc60340389 = VariationCollection::create();

		$p60340389 = Product::create([
			'name' => 'BURVIK Side table, white, 15 "',
			'price' => 29.99,
			'model_path' => '/models/60340389_PS01_S01_NV01_RQP3_3.0_7476cecaf8124f47bad7c944701d76b6.glb',
			'is_stackable' => 1,
			'description' => 'It´s always there for you. Lovely throughout the home and easy to lift so you can rearrange your living space whenever you feel like it. Enjoy every moment with all your favorite things close at hand.',
			'source' => 'https://www.ikea.com/us/en/p/burvik-side-table-white-60340389/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0551240_pe658473_s5.jpg',
			'category_id' => 2,
		]);

		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0551240_pe658473_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0731676_pe738386_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0835770_pe667049_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0835790_pe667051_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0835772_pe667050_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__1057842_ph180928_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0835766_pe667038_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__1057839_ph180927_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__0835768_pe667048_s5.jpg' ]);
		$p60340389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-white__1010338_ph163577_s5.jpg' ]);

		$p70340384 = Product::create([
			'name' => 'BURVIK Side table, black, 15 "',
			'price' => 29.99,
			'model_path' => '/models/70340384_PS01_S01_NV01_RQP3_3.0_59c46041701c41bab4e4dbf3170f702f.glb',
			'is_stackable' => 1,
			'description' => 'It´s always there for you. Lovely throughout the home and easy to lift so you can rearrange your living space whenever you feel like it. Enjoy every moment with all your favorite things close at hand.',
			'source' => 'https://www.ikea.com/us/en/p/burvik-side-table-black-70340384/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0551236_pe658472_s5.jpg',
			'category_id' => 2,
		]);

		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0551236_pe658472_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__1010341_ph158721_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0836684_pe667040_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0836683_pe667039_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0836690_pe667682_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0836688_pe667043_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0731676_pe738386_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0678890_ph153540_s5.jpg' ]);
		$p70340384->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-black__0836686_pe667042_s5.jpg' ]);

		$p80513001 = Product::create([
			'name' => 'BURVIK Side table, light gray-green, 15 "',
			'price' => 29.99,
			'model_path' => '/models/80513001_PS01_S01_NV01_RQP3_3.0_8e52cfb1d90949198e06e1b66516f56e.glb',
			'is_stackable' => 1,
			'description' => 'It´s always there for you. Lovely throughout the home and easy to lift so you can rearrange your living space whenever you feel like it. Enjoy every moment with all your favorite things close at hand.',
			'source' => 'https://www.ikea.com/us/en/p/burvik-side-table-light-gray-green-80513001/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022514_pe832781_s5.jpg',
			'category_id' => 2,
		]);

		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022514_pe832781_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022515_pe832782_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022517_pe832784_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__0731676_pe738386_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022518_pe832783_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1160370_ph189157_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1159386_ph186059_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1057835_ph182202_s5.jpg' ]);
		$p80513001->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/burvik-side-table-light-gray-green__1022516_pe832785_s5.jpg' ]);

		$vc60340389->products()->attach($p60340389->id);
		$vc60340389->products()->attach($p70340384->id);
		$vc60340389->products()->attach($p80513001->id);

		$vc40562244 = VariationCollection::create();

		$p50515313 = Product::create([
			'name' => 'LISTERBY Coffee table, oak veneer, 35 3/8 "',
			'price' => 249.99,
			'model_path' => '/models/50515313_PS01_S01_NV01_RQP3_3.0_03745a7024534e45ad6e0acc79267505.glb',
			'is_stackable' => 1,
			'description' => 'This robust table lasts a long time since lacquer protects the durable oak and preserves the natural wood feel. Sturdy and with a genuine character – year after year.',
			'source' => 'https://www.ikea.com/us/en/p/listerby-coffee-table-oak-veneer-50515313/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022538_pe832796_s5.jpg',
			'category_id' => 2,
		]);

		$p50515313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022538_pe832796_s5.jpg' ]);
		$p50515313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022539_pe832797_s5.jpg' ]);
		$p50515313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1170343_pe892785_s5.jpg' ]);
		$p50515313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1022541_pe832799_s5.jpg' ]);
		$p50515313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/listerby-coffee-table-oak-veneer__1051450_pe845545_s5.jpg' ]);

		$vc40562244->products()->attach($p50515313->id);

		$vc50531983 = VariationCollection::create();

		$p50531983 = Product::create([
			'name' => 'SKRUVBY Side table, black-blue, 15 3/4x12 5/8 "',
			'price' => 49.99,
			'model_path' => '/models/50531983_PS01_S01_NV01_RQP3_3.0_0ccdf86a094b4ad29013beda5b87f64d.glb',
			'is_stackable' => 1,
			'description' => 'The SKRUVBY series has a traditional look with solitaire pieces of furniture that can be coordinated. Look at this side table as a blank canvas, add open and closed storage and create your artwork!',
			'source' => 'https://www.ikea.com/us/en/p/skruvby-side-table-black-blue-50531983/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1123678_pe874844_s5.jpg',
			'category_id' => 2,
		]);

		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1123678_pe874844_s5.jpg' ]);
		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1142147_pe881181_s5.jpg' ]);
		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1128558_pe876630_s5.jpg' ]);
		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1123675_pe874843_s5.jpg' ]);
		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1123676_pe874846_s5.jpg' ]);
		$p50531983->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-black-blue__1123677_pe874845_s5.jpg' ]);

		$p80532009 = Product::create([
			'name' => 'SKRUVBY Side table, white, 15 3/4x12 5/8 "',
			'price' => 49.99,
			'model_path' => '/models/80532009_PS01_S01_NV01_RQP3_3.0_357af251a5c94f77af1710ac61036eb6.glb',
			'is_stackable' => 1,
			'description' => 'The SKRUVBY series has a traditional look with solitaire pieces of furniture that can be coordinated. Look at this side table as a blank canvas, add open and closed storage and create your artwork!',
			'source' => 'https://www.ikea.com/us/en/p/skruvby-side-table-white-80532009/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1123690_pe874848_s5.jpg',
			'category_id' => 2,
		]);

		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1123690_pe874848_s5.jpg' ]);
		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1142147_pe881181_s5.jpg' ]);
		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1123688_pe874847_s5.jpg' ]);
		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1123689_pe874849_s5.jpg' ]);
		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1128556_pe876629_s5.jpg' ]);
		$p80532009->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-side-table-white__1123687_pe874850_s5.jpg' ]);

		$vc50531983->products()->attach($p50531983->id);
		$vc50531983->products()->attach($p80532009->id);

		$vc20286638 = VariationCollection::create();

		$p80262253 = Product::create([
			'name' => 'KRAGSTA Coffee table, black, 35 3/8 "',
			'price' => 149.99,
			'model_path' => '/models/80262253_PS01_S01_NV01_RQP3_3.0_0088b60a57f34a75af30b4263d7d4ef0.glb',
			'is_stackable' => 1,
			'description' => 'Round, soft shapes and crafted details are characteristic of KRAGSTA coffee and nesting tables. Sturdy construction and timeless style make them easy to match with other furniture and love for many years!',
			'source' => 'https://www.ikea.com/us/en/p/kragsta-coffee-table-black-80262253/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0256310_pe400186_s5.jpg',
			'category_id' => 2,
		]);

		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0256310_pe400186_s5.jpg' ]);
		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0719690_pe732147_s5.jpg' ]);
		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0570382_ph145745_s5.jpg' ]);
		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0836012_pe583805_s5.jpg' ]);
		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0836016_pe601356_s5.jpg' ]);
		$p80262253->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-black__0378573_ph121160_s5.jpg' ]);

		$p20286638 = Product::create([
			'name' => 'KRAGSTA Coffee table, white, 35 3/8 "',
			'price' => 149.99,
			'model_path' => '/models/20286638_PS01_S01_NV01_RQP3_3.0_baa8046301024ca0942393373f84dbab.glb',
			'is_stackable' => 1,
			'description' => 'Round, soft shapes and crafted details are characteristic of KRAGSTA coffee and nesting tables. Sturdy construction and timeless style make them easy to match with other furniture and love for many years!',
			'source' => 'https://www.ikea.com/us/en/p/kragsta-coffee-table-white-20286638/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-white__0256314_pe400187_s5.jpg',
			'category_id' => 2,
		]);

		$p20286638->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-white__0256314_pe400187_s5.jpg' ]);
		$p20286638->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-white__0719690_pe732147_s5.jpg' ]);
		$p20286638->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-white__0835615_pe583806_s5.jpg' ]);
		$p20286638->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-coffee-table-white__0835620_pe601377_s5.jpg' ]);

		$vc20286638->products()->attach($p80262253->id);
		$vc20286638->products()->attach($p20286638->id);

		$vc00250249 = VariationCollection::create();

		$p00250249 = Product::create([
			'name' => 'VITTSJÖ Laptop stand, black-brown/glass, 13 3/4x25 5/8 "',
			'price' => 44.99,
			'model_path' => '/models/00250249_PS01_S01_NV01_RQP3_3.0_2e4fe0a1d4584bc984c95f0b7a0ac68a.glb',
			'is_stackable' => 1,
			'description' => 'Metal and tempered glass give this laptop stand an open and airy feel. Place it next to the sofa and ta-da! You suddenly have a stylish and comfortable home office.',
			'source' => 'https://www.ikea.com/us/en/p/vittsjoe-laptop-stand-black-brown-glass-00250249/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__0176250_pe329143_s5.jpg',
			'category_id' => 2,
		]);

		$p00250249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__0176250_pe329143_s5.jpg' ]);
		$p00250249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__1048429_ph151049_s5.jpg' ]);
		$p00250249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__1048175_pe843625_s5.jpg' ]);
		$p00250249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__0855294_pe564652_s5.jpg' ]);
		$p00250249->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-black-brown-glass__1048428_ph150969_s5.jpg' ]);

		$p90303446 = Product::create([
			'name' => 'VITTSJÖ Laptop stand, white/glass, 13 3/4x25 5/8 "',
			'price' => 44.99,
			'model_path' => '/models/90303446_PS01_S01_NV01_RQP3_3.0_09d887418cf04186be8b4d8e45f4dd4c.glb',
			'is_stackable' => 1,
			'description' => 'Metal and tempered glass give this laptop stand an open and airy feel. Place it next to the sofa and ta-da! You suddenly have a stylish and comfortable home office.',
			'source' => 'https://www.ikea.com/us/en/p/vittsjoe-laptop-stand-white-glass-90303446/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__0324875_pe517662_s5.jpg',
			'category_id' => 2,
		]);

		$p90303446->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__0324875_pe517662_s5.jpg' ]);
		$p90303446->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__0738808_ph153049_s5.jpg' ]);
		$p90303446->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__0739660_pe741826_s5.jpg' ]);
		$p90303446->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__0855521_pe564654_s5.jpg' ]);
		$p90303446->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-laptop-stand-white-glass__1048175_pe843625_s5.jpg' ]);

		$vc00250249->products()->attach($p00250249->id);
		$vc00250249->products()->attach($p90303446->id);

		$vc00349444 = VariationCollection::create();

		$p80457439 = Product::create([
			'name' => 'TINGBY Side table on casters, red, 19 5/8x19 5/8 "',
			'price' => 64.99,
			'model_path' => '/models/80457439_PS01_S01_NV01_RQP3_3.0_6c0fef618cdb4f4284f22a79299235da.glb',
			'is_stackable' => 1,
			'description' => 'By day and by night, this table is easy to move around as your needs change. A great choice for spaces that serve several purposes such as combined living/sleeping areas or guest/working areas.',
			'source' => 'https://www.ikea.com/us/en/p/tingby-side-table-on-casters-red-80457439/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__0816795_pe773677_s5.jpg',
			'category_id' => 2,
		]);

		$p80457439->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__0816795_pe773677_s5.jpg' ]);
		$p80457439->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__0816792_pe773676_s5.jpg' ]);
		$p80457439->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__1197965_ph180593_s5.jpg' ]);
		$p80457439->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__0749017_pe745379_s5.jpg' ]);
		$p80457439->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-red__1197964_ph180592_s5.jpg' ]);

		$p00349444 = Product::create([
			'name' => 'TINGBY Side table on casters, gray, 19 5/8x19 5/8 "',
			'price' => 64.99,
			'model_path' => '/models/00349444_PS01_S01_NV01_RQP3_3.0_bbce004295554217a48424eb9fca8f97.glb',
			'is_stackable' => 1,
			'description' => 'By day and by night, this table is easy to move around as your needs change. A great choice for spaces that serve several purposes such as combined living/sleeping areas or guest/working areas.',
			'source' => 'https://www.ikea.com/us/en/p/tingby-side-table-on-casters-gray-00349444/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0479620_pe618495_s5.jpg',
			'category_id' => 2,
		]);

		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0479620_pe618495_s5.jpg' ]);
		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0836733_pe618494_s5.jpg' ]);
		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0749017_pe745379_s5.jpg' ]);
		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0479618_pe618491_s5.jpg' ]);
		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0836727_pe618492_s5.jpg' ]);
		$p00349444->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-gray__0836729_pe618493_s5.jpg' ]);

		$p20295930 = Product::create([
			'name' => 'TINGBY Side table on casters, white, 19 5/8x19 5/8 "',
			'price' => 64.99,
			'model_path' => '/models/20295930_PS01_S01_NV01_RQP3_3.0_55c49d71abf4495288dd71f2169c73da.glb',
			'is_stackable' => 1,
			'description' => 'By day and by night, this table is easy to move around as your needs change. A great choice for spaces that serve several purposes such as combined living/sleeping areas or guest/working areas.',
			'source' => 'https://www.ikea.com/us/en/p/tingby-side-table-on-casters-white-20295930/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0441842_pe593578_s5.jpg',
			'category_id' => 2,
		]);

		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0441842_pe593578_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__1355472_ph161332_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0749017_pe745379_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0727212_pe735558_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0727211_pe735559_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0987358_pe817503_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0726713_ph151020_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0469771_ph133780_s5.jpg' ]);
		$p20295930->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__1355471_ph165707_s5.jpg' ]);

		$vc00349444->products()->attach($p80457439->id);
		$vc00349444->products()->attach($p00349444->id);
		$vc00349444->products()->attach($p20295930->id);

		$vc30538792 = VariationCollection::create();

		$p30538792 = Product::create([
			'name' => 'JÄTTESTA Coffee table, white/light bamboo, 31 1/2x31 1/2 "',
			'price' => 149.99,
			'model_path' => '/models/30538792_PS01_S01_NV01_RQP3_3.0_9771c077d56c4fd398fb1c61b4d31152.glb',
			'is_stackable' => 1,
			'description' => 'Looking for a stand-out design that creates a statement? JÄTTESTA is a perfect choice – both for storage and display. The shape and materials have a sleek look, making your living room a place to love.',
			'source' => 'https://www.ikea.com/us/en/p/jaettesta-coffee-table-white-light-bamboo-30538792/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-white-light-bamboo__1154961_pe886379_s5.jpg',
			'category_id' => 2,
		]);

		$p30538792->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-white-light-bamboo__1154961_pe886379_s5.jpg' ]);
		$p30538792->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-white-light-bamboo__1157677_pe887815_s5.jpg' ]);
		$p30538792->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-white-light-bamboo__1173985_pe894365_s5.jpg' ]);
		$p30538792->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-white-light-bamboo__1191861_pe900737_s5.jpg' ]);

		$p80521911 = Product::create([
			'name' => 'JÄTTESTA Coffee table, black, 31 1/2x31 1/2 "',
			'price' => 149.99,
			'model_path' => '/models/80521911_PS01_S01_NV01_RQP3_3.0_b079c687ac4842ec935a15cde77036e7.glb',
			'is_stackable' => 1,
			'description' => 'Looking for a stand-out design that creates a statement? JÄTTESTA is a perfect choice – both for storage and display. The shape and materials have a sleek look, making your living room a place to love.',
			'source' => 'https://www.ikea.com/us/en/p/jaettesta-coffee-table-black-80521911/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1154962_pe886378_s5.jpg',
			'category_id' => 2,
		]);

		$p80521911->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1154962_pe886378_s5.jpg' ]);
		$p80521911->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1157679_pe887813_s5.jpg' ]);
		$p80521911->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1099285_pe865654_s5.jpg' ]);
		$p80521911->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1191862_pe900736_s5.jpg' ]);
		$p80521911->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-coffee-table-black__1173985_pe894365_s5.jpg' ]);

		$vc30538792->products()->attach($p30538792->id);
		$vc30538792->products()->attach($p80521911->id);

		$p80213309 = Product::create([
			'name' => 'VITTSJÖ Coffee table, black-brown/glass, 29 1/2 "',
			'price' => 79.99,
			'model_path' => '/models/80213309_PS01_S01_NV01_RQP3_3.0_45e121997ff240bda0d28b19f7ae6431.glb',
			'is_stackable' => 1,
			'description' => 'The simple design of this coffee table creates an open and airy expression. Durable and honest materials make it easy to live with too – and you will always have extra storage space on the shelf.',
			'source' => 'https://www.ikea.com/us/en/p/vittsjoe-coffee-table-black-brown-glass-80213309/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0135348_pe292039_s5.jpg',
			'category_id' => 2,
		]);

		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0135348_pe292039_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__1058803_ph181553_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0836655_pe601386_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0719688_pe732149_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0738801_ph154019_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0184627_pe316778_s5.jpg' ]);
		$p80213309->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-coffee-table-black-brown-glass__0185307_pe316781_s5.jpg' ]);


		$vc60399030 = VariationCollection::create();

		$p60399030 = Product::create([
			'name' => 'LUNNARP Side table, brown, 21 5/8x17 3/4 "',
			'price' => 69.99,
			'model_path' => '/models/60399030_PS01_S01_NV01_RQP3_3.0_25bdd886a06c45dcbaa353934c3a4f6d.glb',
			'is_stackable' => 1,
			'description' => 'The sturdy and stable LUNNARP coffee table has practical storage under the tabletop. Perfect when you want to have magazines, remote controls and tablets close at hand when you relax on the sofa.',
			'source' => 'https://www.ikea.com/us/en/p/lunnarp-side-table-brown-60399030/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0593624_pe675316_s5.jpg',
			'category_id' => 2,
		]);

		$p60399030->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0593624_pe675316_s5.jpg' ]);
		$p60399030->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0664930_pe712921_s5.jpg' ]);
		$p60399030->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0836257_pe675317_s5.jpg' ]);
		$p60399030->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0836252_pe675315_s5.jpg' ]);
		$p60399030->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-brown__0836261_pe675473_s5.jpg' ]);

		$p70399020 = Product::create([
			'name' => 'LUNNARP Side table, white, 21 5/8x17 3/4 "',
			'price' => 69.99,
			'model_path' => '/models/70399020_PS01_S01_NV01_RQP3_3.0_3ba4a1c71fdc4f4facf2f5a5eec0515d.glb',
			'is_stackable' => 1,
			'description' => 'The sturdy and stable LUNNARP coffee table has practical storage under the tabletop. Perfect when you want to have magazines, remote controls and tablets close at hand when you relax on the sofa.',
			'source' => 'https://www.ikea.com/us/en/p/lunnarp-side-table-white-70399020/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0593769_pe675370_s5.jpg',
			'category_id' => 2,
		]);

		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0593769_pe675370_s5.jpg' ]);
		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0836042_pe675369_s5.jpg' ]);
		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0836045_pe675371_s5.jpg' ]);
		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0664930_pe712921_s5.jpg' ]);
		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0836051_pe675474_s5.jpg' ]);
		$p70399020->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lunnarp-side-table-white__0766326_pe753755_s5.jpg' ]);

		$vc60399030->products()->attach($p60399030->id);
		$vc60399030->products()->attach($p70399020->id);

		$vc00299825 = VariationCollection::create();

		$p20299829 = Product::create([
			'name' => 'KRAGSTA Nesting tables, set of 2, white',
			'price' => 169.99,
			'model_path' => '/models/G-20299829-e6b065b838bca44bc311b4308d169931e61b9ed8_9741c1ac89264319a5e8cd7cbef894d5.glb',
			'is_stackable' => 1,
			'description' => 'Round, soft shapes and crafted details are characteristic of KRAGSTA coffee and nesting tables. Sturdy construction and timeless style make them easy to match with other furniture and love for many years!',
			'source' => 'https://www.ikea.com/us/en/p/kragsta-nesting-tables-set-of-2-white-20299829/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0313796_pe517046_s5.jpg',
			'category_id' => 2,
		]);

		$p20299829->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0313796_pe517046_s5.jpg' ]);
		$p20299829->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0719687_pe732146_s5.jpg' ]);
		$p20299829->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0383802_ph124889_s5.jpg' ]);
		$p20299829->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0835756_pe603107_s5.jpg' ]);
		$p20299829->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-white__0835753_pe583807_s5.jpg' ]);

		$p00299825 = Product::create([
			'name' => 'KRAGSTA Nesting tables, set of 2, black',
			'price' => 169.99,
			'model_path' => '/models/00299825_PS01_S01_NV01_RQP3_3.0_b74b5fdc48d347aeac15c0f00e8bbb75.glb',
			'is_stackable' => 1,
			'description' => 'Round, soft shapes and crafted details are characteristic of KRAGSTA coffee and nesting tables. Sturdy construction and timeless style make them easy to match with other furniture and love for many years!',
			'source' => 'https://www.ikea.com/us/en/p/kragsta-nesting-tables-set-of-2-black-00299825/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0313789_pe517045_s5.jpg',
			'category_id' => 2,
		]);

		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0313789_pe517045_s5.jpg' ]);
		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0966669_ph149852_s5.jpg' ]);
		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0836677_pe603108_s5.jpg' ]);
		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0836675_pe583791_s5.jpg' ]);
		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0719687_pe732146_s5.jpg' ]);
		$p00299825->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kragsta-nesting-tables-set-of-2-black__0570383_ph145987_s5.jpg' ]);

		$vc00299825->products()->attach($p20299829->id);
		$vc00299825->products()->attach($p00299825->id);

		$vc60538795 = VariationCollection::create();

		$p90521915 = Product::create([
			'name' => 'JÄTTESTA Side table, black, 37 3/8x11 3/4 "',
			'price' => 119.99,
			'model_path' => '/models/90521915_PS01_S01_NV01_RQP3_3.0_0a7fe07f116645cb9258a3acf9ee36f1.glb',
			'is_stackable' => 1,
			'description' => 'Looking for a stand-out design that creates a statement? JÄTTESTA is a perfect choice – both for storage and display. The shape and materials have a sleek look, making your living room a place to love.',
			'source' => 'https://www.ikea.com/us/en/p/jaettesta-side-table-black-90521915/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1154351_pe886005_s5.jpg',
			'category_id' => 2,
		]);

		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1154351_pe886005_s5.jpg' ]);
		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1191857_pe900731_s5.jpg' ]);
		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1191855_pe900730_s5.jpg' ]);
		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1157679_pe887813_s5.jpg' ]);
		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1192811_pe901278_s5.jpg' ]);
		$p90521915->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-black__1173986_pe894364_s5.jpg' ]);

		$p60538795 = Product::create([
			'name' => 'JÄTTESTA Side table, white/light bamboo, 37 3/8x11 3/4 "',
			'price' => 119.99,
			'model_path' => '/models/60538795_PS01_S01_NV01_RQP3_3.0_2ce2ced90ef04811a35938f6ebfeecff.glb',
			'is_stackable' => 1,
			'description' => 'Looking for a stand-out design that creates a statement? JÄTTESTA is a perfect choice – both for storage and display. The shape and materials have a sleek look, making your living room a place to love.',
			'source' => 'https://www.ikea.com/us/en/p/jaettesta-side-table-white-light-bamboo-60538795/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1154350_pe886006_s5.jpg',
			'category_id' => 2,
		]);

		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1154350_pe886006_s5.jpg' ]);
		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1157677_pe887815_s5.jpg' ]);
		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1191860_pe900734_s5.jpg' ]);
		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1191859_pe900735_s5.jpg' ]);
		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1191858_pe900733_s5.jpg' ]);
		$p60538795->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jaettesta-side-table-white-light-bamboo__1173986_pe894364_s5.jpg' ]);

		$vc60538795->products()->attach($p90521915->id);
		$vc60538795->products()->attach($p60538795->id);

		$vc50488734 = VariationCollection::create();

		$p50488734 = Product::create([
			'name' => 'VIHALS Coffee table, white, 35 7/8x14 5/8 "',
			'price' => 49.99,
			'model_path' => '/models/50488734_PS01_S01_NV01_RQP3_3.0_52d4475d76934ac8a8eb1d09a7992944.glb',
			'is_stackable' => 1,
			'description' => 'VIHALS storage series has a cohesive look that connects the rooms throughout your home. This mobile coffee table with compartment keeps things handy. Pair it up with a basket to create a hidden storage.',
			'source' => 'https://www.ikea.com/us/en/p/vihals-coffee-table-white-50488734/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1035625_pe838133_s5.jpg',
			'category_id' => 2,
		]);

		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1035625_pe838133_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1051539_pe845591_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1048269_pe843675_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1050598_pe844917_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1048005_pe843552_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1051524_pe845576_s5.jpg' ]);
		$p50488734->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-coffee-table-white__1063224_pe851287_s5.jpg' ]);

		$vc50488734->products()->attach($p50488734->id);

		$p30514791 = Product::create([
			'name' => 'LACK Side table, white, 13 3/4x13 3/4 "',
			'price' => 9.99,
			'model_path' => '/models/30514791_PS01_S01_NV01_RQP3_3.0_218cde23d44d448b9eab00f8152b7c68.glb',
			'is_stackable' => 1,
			'description' => 'You can use this small LACK table throughout the home and also slide it under the larger table in the series to save space. Thanks to the unique construction, it’s easy to assemble, lift and move around.',
			'source' => 'https://www.ikea.com/us/en/p/lack-side-table-white-30514791/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1057250_pe848800_s5.jpg',
			'category_id' => 2,
		]);

		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1057250_pe848800_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1063304_pe851322_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1057246_pe848798_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1083778_pe859098_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1063541_ph182201_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__0702207_pe724342_s5.jpg' ]);
		$p30514791->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lack-side-table-white__1063542_ph181543_s5.jpg' ]);


		$vc40531988 = VariationCollection::create();

		$p70531982 = Product::create([
			'name' => 'SKRUVBY Coffee table, black-blue, 23 5/8x23 5/8 "',
			'price' => 79.99,
			'model_path' => '/models/70531982_PS01_S01_NV01_RQP3_3.0_1ea1e00e1f564fe395be35aec7674a65.glb',
			'is_stackable' => 1,
			'description' => 'The SKRUVBY series has a traditional look with solitaire pieces of furniture that can be coordinated. Look at this coffee table as a blank canvas, add open and closed storage and create your artwork!',
			'source' => 'https://www.ikea.com/us/en/p/skruvby-coffee-table-black-blue-70531982/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1123698_pe874855_s5.jpg',
			'category_id' => 2,
		]);

		$p70531982->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1123698_pe874855_s5.jpg' ]);
		$p70531982->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1123696_pe874854_s5.jpg' ]);
		$p70531982->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1128571_pe876632_s5.jpg' ]);
		$p70531982->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1142146_pe881182_s5.jpg' ]);
		$p70531982->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-black-blue__1123697_pe874856_s5.jpg' ]);

		$p40531988 = Product::create([
			'name' => 'SKRUVBY Coffee table, white, 23 5/8x23 5/8 "',
			'price' => 79.99,
			'model_path' => '/models/40531988_PS01_S01_NV01_RQP3_3.0_5b8c9af0074a431399a44db9a35da70c.glb',
			'is_stackable' => 1,
			'description' => 'The SKRUVBY series has a traditional look with solitaire pieces of furniture that can be coordinated. Look at this coffee table as a blank canvas, add open and closed storage and create your artwork!',
			'source' => 'https://www.ikea.com/us/en/p/skruvby-coffee-table-white-40531988/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1123695_pe874852_s5.jpg',
			'category_id' => 2,
		]);

		$p40531988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1123695_pe874852_s5.jpg' ]);
		$p40531988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1128567_pe876631_s5.jpg' ]);
		$p40531988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1142146_pe881182_s5.jpg' ]);
		$p40531988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1123694_pe874853_s5.jpg' ]);
		$p40531988->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-coffee-table-white__1123693_pe874851_s5.jpg' ]);

		$vc40531988->products()->attach($p70531982->id);
		$vc40531988->products()->attach($p40531988->id);

		$p70497582 = Product::create([
			'name' => 'FRÖTORP Coffee table, anthracite marble effect/black glass, 34 5/8 "',
			'price' => 269.99,
			'model_path' => '/models/70497582_PS01_S01_NV01_RQP3_3.0_186f23b9aa12493695d23df2dbe98c35.glb',
			'is_stackable' => 1,
			'description' => 'A round shape and different materials and finishes create a dynamic yet balanced look. Use FRÖTORP as a coffee table or side table – and feel free to combine the different sizes for a larger table space.',
			'source' => 'https://www.ikea.com/us/en/p/froetorp-coffee-table-anthracite-marble-effect-black-glass-70497582/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1022505_pe832773_s5.jpg',
			'category_id' => 2,
		]);

		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1022505_pe832773_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1040873_pe840840_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1071624_pe854994_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1022507_pe832775_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1064059_ph181423_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1022508_pe832774_s5.jpg' ]);
		$p70497582->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-coffee-table-anthracite-marble-effect-black-glass__1022506_pe832776_s5.jpg' ]);


		$p70297658 = Product::create([
			'name' => 'LISABO Coffee table, ash veneer, 46 1/2x19 5/8 "',
			'price' => 169.99,
			'model_path' => '/models/70297658_PS01_S01_NV01_RQP3_4.0_55b5a0dd795d4239902a33136b8b04d2.glb',
			'is_stackable' => 1,
			'description' => 'We’re proud of our LISABO series, awarded with the prestigious, international Red Dot Award, for its design. The products are durable, sturdy and easy to assemble, yet look light and hand-crafted.',
			'source' => 'https://www.ikea.com/us/en/p/lisabo-coffee-table-ash-veneer-70297658/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0735609_pe740032_s5.jpg',
			'category_id' => 2,
		]);

		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0735609_pe740032_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__1057706_pe848921_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0837185_pe517621_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0835588_pe601380_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0469759_ph132238_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0837183_pe517620_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0383698_ph124315_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0383697_ph124302_s5.jpg' ]);
		$p70297658->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0469758_ph124298_s5.jpg' ]);


		$p10462180 = Product::create([
			'name' => 'ÄSPERÖD Side table, black/glass black, 17 3/4 "',
			'price' => 89.99,
			'model_path' => '/models/10462180_PS01_S01_NV01_RQP3_3.0_250862836f244d05b0baee3c3832750f.glb',
			'is_stackable' => 1,
			'description' => 'A stylish statement! Elegant black metal, golden parts and smoky glass that subtly reflects the light add depth and elegance to the room. All made with attention to details that creates a harmonious look.',
			'source' => 'https://www.ikea.com/us/en/p/aesperoed-side-table-black-glass-black-10462180/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0816819_pe773696_s5.jpg',
			'category_id' => 2,
		]);

		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0816819_pe773696_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__1236931_pe917775_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0816816_pe773695_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0966465_ph171911_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0888324_pe782031_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__0816815_pe773694_s5.jpg' ]);
		$p10462180->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-side-table-black-glass-black__1194059_pe901791_s5.jpg' ]);


		$vc00496048 = VariationCollection::create();

		$p60496045 = Product::create([
			'name' => 'IDANÄS Side table, dark brown stained, 18 1/8x14 1/8 "',
			'price' => 179.99,
			'model_path' => '/models/60496045_PS01_S01_NV01_RQP3_3.0_7709264affd74539a36c3379bef63e57.glb',
			'is_stackable' => 1,
			'description' => 'The IDANÄS series combines timeless design with modern functionality. This wooden side table adds elegance to any room you decide to have it. Stylish and practical, with great value across the home.',
			'source' => 'https://www.ikea.com/us/en/p/idanaes-side-table-dark-brown-stained-60496045/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-dark-brown-stained__1161079_pe889287_s5.jpg',
			'category_id' => 2,
		]);

		$p60496045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-dark-brown-stained__1161079_pe889287_s5.jpg' ]);
		$p60496045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-dark-brown-stained__1175657_pe894757_s5.jpg' ]);
		$p60496045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-dark-brown-stained__1161078_pe889286_s5.jpg' ]);
		$p60496045->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-dark-brown-stained__1161077_pe889285_s5.jpg' ]);

		$p00496048 = Product::create([
			'name' => 'IDANÄS Side table, white, 18 1/8x14 1/8 "',
			'price' => 149.99,
			'model_path' => '/models/00496048_PS01_S01_NV01_RQP3_3.0_48ae4b336f75429bbd92257a83ef6d37.glb',
			'is_stackable' => 1,
			'description' => 'The IDANÄS series combines timeless design with modern functionality. This wooden side table adds elegance to any room you decide to have it. Stylish and practical, with great value across the home.',
			'source' => 'https://www.ikea.com/us/en/p/idanaes-side-table-white-00496048/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-white__1161089_pe889273_s5.jpg',
			'category_id' => 2,
		]);

		$p00496048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-white__1161089_pe889273_s5.jpg' ]);
		$p00496048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-white__1175657_pe894757_s5.jpg' ]);
		$p00496048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-white__1161087_pe889295_s5.jpg' ]);
		$p00496048->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-side-table-white__1161088_pe889296_s5.jpg' ]);

		$vc00496048->products()->attach($p60496045->id);
		$vc00496048->products()->attach($p00496048->id);

		$p70335486 = Product::create([
			'name' => 'FJÄLLBO Coffee table, black, 35 3/8x18 1/8 "',
			'price' => 89.99,
			'model_path' => '/models/G-70335486-c800601d267107c0fe8aacba1f55955befc58da4_2f2ec566dcce40628fcb0094782c56a9.glb',
			'is_stackable' => 1,
			'description' => 'An airy and stable coffee table to create a rustic look at home. The metal adds an industrial feel and the solid wood makes each piece of furniture unique. Space for magazines, books and games on the shelf.',
			'source' => 'https://www.ikea.com/us/en/p/fjaellbo-coffee-table-black-70335486/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0475920_pe615876_s5.jpg',
			'category_id' => 2,
		]);

		$p70335486->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0475920_pe615876_s5.jpg' ]);
		$p70335486->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0835970_pe681429_s5.jpg' ]);
		$p70335486->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0925808_ph163284_s5.jpg' ]);
		$p70335486->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0731681_pe738387_s5.jpg' ]);
		$p70335486->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-coffee-table-black__0925806_ph163283_s5.jpg' ]);


		$p80215332 = Product::create([
			'name' => 'VITTSJÖ Nesting tables, set of 2, black-brown/glass, 35 3/8x19 5/8 "',
			'price' => 119.99,
			'model_path' => '/models/80215332_PS01_S01_NV01_RQP3_3.0_06e4c1c5731a4a139cdcf5df8b411083.glb',
			'is_stackable' => 1,
			'description' => 'The simple and honest design of VITTSJÖ nest tables creates an open and airy expression. You can always choose to use them individually, together or slide the lower one under the higher table.',
			'source' => 'https://www.ikea.com/us/en/p/vittsjoe-nesting-tables-set-of-2-black-brown-glass-80215332/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0735687_pe740087_s5.jpg',
			'category_id' => 2,
		]);

		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0735687_pe740087_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__1058809_ph168891_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0738814_ph151995_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__1058808_ph176254_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0258141_pe402107_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0719689_pe732148_s5.jpg' ]);
		$p80215332->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vittsjoe-nesting-tables-set-of-2-black-brown-glass__0836369_pe583803_s5.jpg' ]);


		$p50299502 = Product::create([
			'name' => 'TUNSTA Side table, anthracite, 27 1/2x19 5/8 "',
			'price' => 99.99,
			'model_path' => '/models/50299502_PS01_S01_NV01_RQP3_3.0_5741f83e413b43cd927e8008700671f4.glb',
			'is_stackable' => 1,
			'description' => 'This versatile table is designed to complete our modern-styled sofas, at home or in the office. Use it as a separate coffee table or as a side table integrated with the sofa – it\'s up to you.',
			'source' => 'https://www.ikea.com/us/en/p/tunsta-side-table-anthracite-50299502/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1155132_pe886414_s5.jpg',
			'category_id' => 2,
		]);

		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1155132_pe886414_s5.jpg' ]);
		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1173254_pe893887_s5.jpg' ]);
		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1155134_pe886416_s5.jpg' ]);
		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1155131_pe886415_s5.jpg' ]);
		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1192524_ph184947_s5.jpg' ]);
		$p50299502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tunsta-side-table-anthracite__1155130_pe886413_s5.jpg' ]);


		$p30354127 = Product::create([
			'name' => 'ARKELSTORP Coffee table, black, 25 5/8x55 1/8x20 1/2 "',
			'price' => 224.99,
			'model_path' => '/models/G-30260807-e9a679c9659120f036b17c5988406076f25288a4_01189c9556244d19ad3a8cbacda3bc0c.glb',
			'is_stackable' => 1,
			'description' => 'ARKELSTORP coffee table has 2 drop leaves that allow you to easily adjust the size of the table. It also has a drawer for small items and a shelf where you can put things like magazines or tablets.',
			'source' => 'https://www.ikea.com/us/en/p/arkelstorp-coffee-table-black-30354127/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0260729_pe404586_s5.jpg',
			'category_id' => 2,
		]);

		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0260729_pe404586_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0383699_ph120165_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0383701_ph120172_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0731671_pe738385_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0835937_pe583793_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0835943_pe603230_s5.jpg' ]);
		$p30354127->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/arkelstorp-coffee-table-black__0835939_pe601401_s5.jpg' ]);


		$p90297657 = Product::create([
			'name' => 'LISABO Coffee table, ash veneer, 27 1/2x27 1/2 "',
			'price' => 129.99,
			'model_path' => '/models/90297657_PS01_S01_NV01_RQP3_3.0_93256cef48304d5c8b243517050820ad.glb',
			'is_stackable' => 1,
			'description' => 'We’re proud of our LISABO series, awarded with the prestigious, international Red Dot Award, for its design. The products are durable, sturdy and easy to assemble, yet look light and hand-crafted.',
			'source' => 'https://www.ikea.com/us/en/p/lisabo-coffee-table-ash-veneer-90297657/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0735610_pe740033_s5.jpg',
			'category_id' => 2,
		]);

		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0735610_pe740033_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0837185_pe517621_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__1057711_pe848926_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0836421_pe601394_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0469760_ph133054_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0383698_ph124315_s5.jpg' ]);
		$p90297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-coffee-table-ash-veneer__0837183_pe517620_s5.jpg' ]);


		$p70504276 = Product::create([
			'name' => 'FRIDNÄS Nesting tables with stools set of 4, black/birch effect',
			'price' => 119.99,
			'model_path' => '/models/70504276_PS01_S01_NV01_IQP3_2.0_022c259eff674670a118e3a0245fa2a9.glb',
			'is_stackable' => 1,
			'description' => 'This handy set of 2 matching nesting tables and 2 stools/side tables makes clever use of smaller spaces. Arrange for eating, studying, working or crafting and quickly nest them together to free up space.',
			'source' => 'https://www.ikea.com/us/en/p/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect-70504276/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1038547_pe839730_s5.jpg',
			'category_id' => 2,
		]);

		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1038547_pe839730_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1078585_pe857235_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1057890_pe849044_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1078584_pe857239_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1057891_pe849046_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1078583_pe857233_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1058766_pe849429_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1078580_pe857230_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1078587_pe857237_s5.jpg' ]);
		$p70504276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/fridnaes-nesting-tables-with-stools-set-of-4-black-birch-effect__1079885_pe857762_s5.jpg' ]);


		$p00461888 = Product::create([
			'name' => 'ÄSPERÖD Coffee table, black/glass black, 45 1/4x22 7/8 "',
			'price' => 159.99,
			'model_path' => '/models/00461888_PS01_S01_NV01_RQP3_3.0_43ec311a6c494037947d6be6032ce777.glb',
			'is_stackable' => 1,
			'description' => 'A stylish statement! Elegant black metal, golden parts and smoky glass that subtly reflects the light add depth and elegance to the room. All made with attention to details that creates a harmonious look.',
			'source' => 'https://www.ikea.com/us/en/p/aesperoed-coffee-table-black-glass-black-00461888/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0816810_pe773691_s5.jpg',
			'category_id' => 2,
		]);

		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0816810_pe773691_s5.jpg' ]);
		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0966466_ph170748_s5.jpg' ]);
		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0888323_pe782032_s5.jpg' ]);
		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__1194059_pe901791_s5.jpg' ]);
		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0816808_pe773693_s5.jpg' ]);
		$p00461888->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aesperoed-coffee-table-black-glass-black__0816807_pe773690_s5.jpg' ]);


		$p10297656 = Product::create([
			'name' => 'LISABO Side table, ash veneer, 17 3/4x17 3/4 "',
			'price' => 99.99,
			'model_path' => '/models/10297656_PS01_S01_NV01_RQP3_3.0_cbde13d91a95451d8091706b5fd39af4.glb',
			'is_stackable' => 1,
			'description' => 'We’re proud of our LISABO series, awarded with the prestigious, international Red Dot Award, for its design. The products are durable, sturdy and easy to assemble, yet look light and hand-crafted.',
			'source' => 'https://www.ikea.com/us/en/p/lisabo-side-table-ash-veneer-10297656/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0735730_pe740135_s5.jpg',
			'category_id' => 2,
		]);

		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0735730_pe740135_s5.jpg' ]);
		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0837195_pe601413_s5.jpg' ]);
		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0469758_ph124298_s5.jpg' ]);
		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__1057702_pe848917_s5.jpg' ]);
		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0837183_pe517620_s5.jpg' ]);
		$p10297656->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-side-table-ash-veneer__0837185_pe517621_s5.jpg' ]);


		$p20295925 = Product::create([
			'name' => 'TINGBY Side table on casters, white, 25 1/4x25 1/4 "',
			'price' => 49.99,
			'model_path' => '/models/20295925_PS01_S01_NV01_RQP3_3.0_30d0250307674588aafd7013c092b535.glb',
			'is_stackable' => 1,
			'description' => 'By day and by night, this table is easy to move around as your needs change. A great choice for spaces that serve several purposes such as combined living/sleeping areas or guest/working areas.',
			'source' => 'https://www.ikea.com/us/en/p/tingby-side-table-on-casters-white-20295925/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0441843_pe593577_s5.jpg',
			'category_id' => 2,
		]);

		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0441843_pe593577_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__1355472_ph161332_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0727212_pe735558_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0727211_pe735559_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0726715_ph145452_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0749018_pe745378_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__0726716_ph152229_s5.jpg' ]);
		$p20295925->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tingby-side-table-on-casters-white__1355471_ph165707_s5.jpg' ]);


		$p50322239 = Product::create([
			'name' => 'KVISTBRO Storage table, white, 24 "',
			'price' => 49.99,
			'model_path' => '/models/50322239_PS01_S01_NV01_RQP3_3.0_177ccf72d44543bc90053822b38e6102.glb',
			'is_stackable' => 1,
			'description' => 'Store things like throws, cushions or yarn in the basket or leave it empty to let the design stand out and to create a spacious feeling. Easy to lift and move from the sofa to your favorite armchair.',
			'source' => 'https://www.ikea.com/us/en/p/kvistbro-storage-table-white-50322239/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0442383_pe593769_s5.jpg',
			'category_id' => 2,
		]);

		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0442383_pe593769_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0731746_pe738428_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0835963_pe618473_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0835954_pe610728_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0498157_ph137644_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0835958_pe612941_s5.jpg' ]);
		$p50322239->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-white__0835956_pe610730_s5.jpg' ]);


		$p10492276 = Product::create([
			'name' => 'FRÖTORP Side table, anthracite marble effect/black glass, 18 7/8 "',
			'price' => 149.99,
			'model_path' => '/models/10492276_PS01_S01_NV01_RQP3_3.0_3db907a152054dfa86fd0306ea4bb0c5.glb',
			'is_stackable' => 1,
			'description' => 'A round shape and different materials and finishes create a dynamic yet balanced look. Use FRÖTORP as a coffee table or side table – and feel free to combine the different sizes for a larger table space.',
			'source' => 'https://www.ikea.com/us/en/p/froetorp-side-table-anthracite-marble-effect-black-glass-10492276/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1022509_pe832777_s5.jpg',
			'category_id' => 2,
		]);

		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1022509_pe832777_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1022512_pe832778_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1022510_pe832780_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1040872_pe840841_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1071624_pe854994_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1022511_pe832779_s5.jpg' ]);
		$p10492276->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/froetorp-side-table-anthracite-marble-effect-black-glass__1064060_ph181422_s5.jpg' ]);


		$p00433895 = Product::create([
			'name' => 'LINDVED Side table, white, 20x26 3/4 "',
			'price' => 22.99,
			'model_path' => '/models/00433895_PS01_S01_NV01_RQP3_3.0_3dae6f0ab92c44c8846f1b9b29293965.glb',
			'is_stackable' => 1,
			'description' => 'Classic style with neat, curved legs and a small extra shelf under the table top. This table goes just as well next to the sofa as by the bed. Lightweight yet stable, so it´s easy to move around.',
			'source' => 'https://www.ikea.com/us/en/p/lindved-side-table-white-00433895/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0656039_pe709209_s5.jpg',
			'category_id' => 2,
		]);

		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0656039_pe709209_s5.jpg' ]);
		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0837123_pe710225_s5.jpg' ]);
		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0658465_pe710224_s5.jpg' ]);
		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0719738_pe732174_s5.jpg' ]);
		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0837117_pe710222_s5.jpg' ]);
		$p00433895->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lindved-side-table-white__0837119_pe710223_s5.jpg' ]);


		$p10469493 = Product::create([
			'name' => 'SMUSSLA Bedside table/shelf unit, white',
			'price' => 39.99,
			'model_path' => '/models/90469489_PS01_S01_NV01_RQP3_3.0_6b636db707b146cebdb155d33a9d59ac.glb',
			'is_stackable' => 1,
			'description' => 'This small and affordable piece of furniture is a loyal bedside buddy which can change shape and grow with your child – from storage to bedside table and into a shelf unit by the desk.',
			'source' => 'https://www.ikea.com/us/en/p/smussla-bedside-table-shelf-unit-white-10469493/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931281_pe791191_s5.jpg',
			'category_id' => 2,
		]);

		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931281_pe791191_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0933645_pe794811_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931280_pe791188_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0970627_pe811142_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931740_pe791205_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931279_pe791187_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931700_pe791204_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0931680_pe791189_s5.jpg' ]);
		$p10469493->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/smussla-bedside-table-shelf-unit-white__0933646_pe794810_s5.jpg' ]);


		$p50087072 = Product::create([
			'name' => 'LIATORP Coffee table, white/glass, 36 5/8x36 5/8 "',
			'price' => 379.99,
			'model_path' => '/models/50087072_PS01_S01_NV01_RQP3_3.0_16f9efdc6c1b4c28a74131d22be9ff96.glb',
			'is_stackable' => 1,
			'description' => 'Are you a romantic at heart? The delicate shapes and details are reminiscent of country living. Combine with other furniture in the LIATORP series for a complete, beautiful look.',
			'source' => 'https://www.ikea.com/us/en/p/liatorp-coffee-table-white-glass-50087072/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0735600_pe740026_s5.jpg',
			'category_id' => 2,
		]);

		$p50087072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0735600_pe740026_s5.jpg' ]);
		$p50087072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0258078_pe402019_s5.jpg' ]);
		$p50087072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0836291_pe603228_s5.jpg' ]);
		$p50087072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0836290_pe601395_s5.jpg' ]);
		$p50087072->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-coffee-table-white-glass__0731761_pe738430_s5.jpg' ]);


		$p40173065 = Product::create([
			'name' => 'LIATORP Side table, white/glass, 22 1/2x15 3/4 "',
			'price' => 214.99,
			'model_path' => '/models/40173065_PS01_S01_NV01_RQP3_3.0_4e894ba317db4afdadd317f854b4860b.glb',
			'is_stackable' => 1,
			'description' => 'Are you a romantic at heart? The delicate shapes and details are reminiscent of country living. Combine with other furniture in the LIATORP series for a complete, beautiful look.',
			'source' => 'https://www.ikea.com/us/en/p/liatorp-side-table-white-glass-40173065/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-side-table-white-glass__0735728_pe740138_s5.jpg',
			'category_id' => 2,
		]);

		$p40173065->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-side-table-white-glass__0735728_pe740138_s5.jpg' ]);
		$p40173065->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-side-table-white-glass__0258084_pe402021_s5.jpg' ]);
		$p40173065->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-side-table-white-glass__0731763_pe738431_s5.jpg' ]);
		$p40173065->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/liatorp-side-table-white-glass__0836000_pe601408_s5.jpg' ]);


		$p90292725 = Product::create([
			'name' => 'MARYD Tray table, gray, 22 7/8x15x22 7/8 "',
			'price' => 84.99,
			'model_path' => '/models/90292725_PS01_S01_NV01_RQP3_3.0_3338c7f909cf4ef5879ed0f537f4154c.glb',
			'is_stackable' => 1,
			'description' => 'From breakfast in bed to serving party drinks. This tray table is perfect both beside your bed and in the living room. The tray is removable, making it great for serving – and the underframe is foldable.',
			'source' => 'https://www.ikea.com/us/en/p/maryd-tray-table-gray-90292725/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0350790_pe535075_s5.jpg',
			'category_id' => 2,
		]);

		$p90292725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0350790_pe535075_s5.jpg' ]);
		$p90292725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0836380_pe583811_s5.jpg' ]);
		$p90292725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0836381_pe601424_s5.jpg' ]);
		$p90292725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0836377_pe535621_s5.jpg' ]);
		$p90292725->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/maryd-tray-table-gray__0731766_pe738437_s5.jpg' ]);


		$vc20525356 = VariationCollection::create();

		$p40530917 = Product::create([
			'name' => 'OLSERÖD Side table, anthracite/dark gray, 20 7/8x19 5/8 "',
			'price' => 39.99,
			'model_path' => '/models/40530917_PS01_S01_NV01_RQP3_3.0_3babace84ead41e5a216838291d1e985.glb',
			'is_stackable' => 1,
			'description' => 'OLSERÖD is two tables in one. A smart side table that you slide in front of you on the sofa to eat while watching TV – and then you can quickly transform it into a stylish coffee table when friends visit.',
			'source' => 'https://www.ikea.com/us/en/p/olseroed-side-table-anthracite-dark-gray-40530917/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1150823_pe884681_s5.jpg',
			'category_id' => 2,
		]);

		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1150823_pe884681_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1233791_pe916969_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1157498_pe887720_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1157501_pe887721_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1173813_pe894324_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1165215_pe890746_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1165206_pe890745_s5.jpg' ]);
		$p40530917->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-dark-gray__1157655_pe887802_s5.jpg' ]);

		$p20525356 = Product::create([
			'name' => 'OLSERÖD Side table, anthracite/birch effect dark yellow, 20 7/8x19 5/8 "',
			'price' => 39.99,
			'model_path' => '/models/G-20525356-b553bd2823d62aee4b34c32e0c2c51bbaeba1949_7cb8b1c552454057b1847e8d2bb31b16.glb',
			'is_stackable' => 1,
			'description' => 'OLSERÖD is two tables in one. A smart side table that you slide in front of you on the sofa to eat while watching TV – and then you can quickly transform it into a stylish coffee table when friends visit.',
			'source' => 'https://www.ikea.com/us/en/p/olseroed-side-table-anthracite-birch-effect-dark-yellow-20525356/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1150822_pe884680_s5.jpg',
			'category_id' => 2,
		]);

		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1150822_pe884680_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1208142_ph191913_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1189234_ph191986_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1189232_ph191917_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1157495_pe887719_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1165205_pe890744_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1165222_pe890753_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1157504_pe887722_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1173809_pe894322_s5.jpg' ]);
		$p20525356->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/olseroed-side-table-anthracite-birch-effect-dark-yellow__1233791_pe916969_s5.jpg' ]);

		$vc20525356->products()->attach($p40530917->id);
		$vc20525356->products()->attach($p20525356->id);

		$vc00541418 = VariationCollection::create();

		$p00541418 = Product::create([
			'name' => 'HOLMERUD Coffee table, dark brown, 35 3/8x21 5/8 "',
			'price' => 79.99,
			'model_path' => '/models/00541418_PS01_S01_NV01_RQP3_3.0_95d72264a4254e6e841156b206ed19e4.glb',
			'is_stackable' => 1,
			'description' => 'HOLMERUD coffee table has a distinctive architectural shape that will draw attention. The design also offers practical, open storage spaces where you can display your things and keep them close at hand.',
			'source' => 'https://www.ikea.com/us/en/p/holmerud-coffee-table-dark-brown-00541418/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1193665_pe901562_s5.jpg',
			'category_id' => 2,
		]);

		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1193665_pe901562_s5.jpg' ]);
		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1194686_pe902053_s5.jpg' ]);
		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1213552_pe911170_s5.jpg' ]);
		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1246960_pe922411_s5.jpg' ]);
		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1246819_ph195112_s5.jpg' ]);
		$p00541418->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/holmerud-coffee-table-dark-brown__1195360_pe902379_s5.jpg' ]);

		$vc00541418->products()->attach($p00541418->id);

		$vc30349452 = VariationCollection::create();

		$p90480401 = Product::create([
			'name' => 'KVISTBRO Storage table, black, 17 3/8 "',
			'price' => 29.99,
			'model_path' => '/models/90480401_PS01_S01_NV01_RQP3_3.0_610dbf7d2c9505ea1468d2c51c311eb6.glb',
			'is_stackable' => 1,
			'description' => 'Store things like throws, cushions or yarn in the basket or leave it empty to let the design stand out and to create a spacious feeling. Easy to lift and move from the sofa to your favorite armchair.',
			'source' => 'https://www.ikea.com/us/en/p/kvistbro-storage-table-black-90480401/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0915347_pe784726_s5.jpg',
			'category_id' => 2,
		]);

		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0915347_pe784726_s5.jpg' ]);
		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__1059531_ph176285_s5.jpg' ]);
		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0915348_pe784727_s5.jpg' ]);
		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0731745_pe738429_s5.jpg' ]);
		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0915351_pe784729_s5.jpg' ]);
		$p90480401->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kvistbro-storage-table-black__0915352_pe784730_s5.jpg' ]);

		$vc30349452->products()->attach($p90480401->id);

		$vc40565558 = VariationCollection::create();

		$p60404201 = Product::create([
			'name' => 'HAVSTA Nesting tables, set of 2, white',
			'price' => 189.99,
			'model_path' => '/models/60404201_PS01_S01_NV01_RQP3_3.0_4ef618b704f44782a96639767fc8cc82.glb',
			'is_stackable' => 1,
			'description' => 'Carefully designed details in solid pine with a brushed surface adds a rustic feel and charm to your home. These nesting tables can be used in various ways – individually or pushed together to save space.',
			'source' => 'https://www.ikea.com/us/en/p/havsta-nesting-tables-set-of-2-white-60404201/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1294503_pe935480_s5.jpg',
			'category_id' => 2,
		]);

		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1294503_pe935480_s5.jpg' ]);
		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1320098_pe941104_s5.jpg' ]);
		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1342522_pe949046_s5.jpg' ]);
		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1116410_pe872467_s5.jpg' ]);
		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__0668146_pe714270_s5.jpg' ]);
		$p60404201->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-white__1338690_pe948373_s5.jpg' ]);

		$p50414210 = Product::create([
			'name' => 'HAVSTA Nesting tables, set of 2, gray',
			'price' => 144.99,
			'model_path' => '/models/50414210_PS01_S01_NV01_RQP3_3.0_718ff70fdf0543cfb58bba2510633d90.glb',
			'is_stackable' => 1,
			'description' => 'Made of solid wood with crafted details and a brushed surface, HAVSTA nest tables add a genuine feel and charm to your room. You can use them individually or push them together to save space.',
			'source' => 'https://www.ikea.com/us/en/p/havsta-nesting-tables-set-of-2-gray-50414210/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0735680_pe740085_s5.jpg',
			'category_id' => 2,
		]);

		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0735680_pe740085_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0837083_pe693475_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0835690_pe693477_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0835692_pe695391_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0835688_pe693476_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray__0668146_pe714270_s5.jpg' ]);
		$p50414210->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-gray-beige__1213013_pe910885_s5.jpg' ]);

		$p60404197 = Product::create([
			'name' => 'HAVSTA Nesting tables, set of 2, dark brown',
			'price' => 189.99,
			'model_path' => '/models/60404197_PS01_S01_NV01_RQP3_3.0_9ba6e0cc2e4a4c74aa1b33575087f66a.glb',
			'is_stackable' => 1,
			'description' => 'Made of solid wood with crafted details and a brushed surface, HAVSTA nest tables add a genuine feel and charm to your room. You can use them individually or push them together to save space.',
			'source' => 'https://www.ikea.com/us/en/p/havsta-nesting-tables-set-of-2-dark-brown-60404197/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0735679_pe740084_s5.jpg',
			'category_id' => 2,
		]);

		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0735679_pe740084_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0668146_pe714270_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0835657_pe693481_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0835671_pe695390_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0727029_ph156078_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0835655_pe693480_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0727031_ph156080_s5.jpg' ]);
		$p60404197->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-nesting-tables-set-of-2-dark-brown__0835666_pe693482_s5.jpg' ]);

		$vc40565558->products()->attach($p60404201->id);
		$vc40565558->products()->attach($p50414210->id);
		$vc40565558->products()->attach($p60404197->id);

		$vc00404204 = VariationCollection::create();

		$p30565530 = Product::create([
			'name' => 'HAVSTA Coffee table, gray-beige, 39 3/8x29 1/2 "',
			'price' => 249.99,
			'model_path' => '/models/30565530_PS01_S01_NV01_RQP3_4.0_0f14d28c91044dc3ba210076502d6344.glb',
			'is_stackable' => 1,
			'description' => 'Carefully designed details in solid pine with a brushed surface adds a rustic feel and charm to your home. This sturdy coffee table has a generous table top surface to fit all things you want close at hand!',
			'source' => 'https://www.ikea.com/us/en/p/havsta-coffee-table-gray-beige-30565530/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-gray-beige__1213126_pe910940_s5.jpg',
			'category_id' => 2,
		]);

		$p30565530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-gray-beige__1213126_pe910940_s5.jpg' ]);
		$p30565530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-gray-beige__1320089_pe941095_s5.jpg' ]);
		$p30565530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-gray-beige__1342516_pe949040_s5.jpg' ]);
		$p30565530->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-gray-beige__0668140_pe714267_s5.jpg' ]);

		$p00404204 = Product::create([
			'name' => 'HAVSTA Coffee table, white, 39 3/8x29 1/2 "',
			'price' => 249.99,
			'model_path' => '/models/00404204_PS01_S01_NV01_RQP3_3.0_88ec5070ddd54bf3a750f09e8c7e70e8.glb',
			'is_stackable' => 1,
			'description' => 'Carefully designed details in solid pine with a brushed surface adds a rustic feel and charm to your home. This sturdy coffee table has a generous table top surface to fit all things you want close at hand!',
			'source' => 'https://www.ikea.com/us/en/p/havsta-coffee-table-white-00404204/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__1294504_pe935479_s5.jpg',
			'category_id' => 2,
		]);

		$p00404204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__1294504_pe935479_s5.jpg' ]);
		$p00404204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__1116410_pe872467_s5.jpg' ]);
		$p00404204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__0668140_pe714267_s5.jpg' ]);
		$p00404204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__1320103_pe941109_s5.jpg' ]);
		$p00404204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/havsta-coffee-table-white__1341941_pe948952_s5.jpg' ]);

		$vc00404204->products()->attach($p30565530->id);
		$vc00404204->products()->attach($p00404204->id);

		$vc10500002 = VariationCollection::create();

		$p40500005 = Product::create([
			'name' => 'IDANÄS Coffee table, white, 31 1/2x31 1/2 "',
			'price' => 249.99,
			'model_path' => '/models/40500005_PS01_S01_NV01_RQP3_4.0_bc4a4a70209b4453b3abc43825eb991d.glb',
			'is_stackable' => 1,
			'description' => 'The IDANÄS series combines timeless design with modern functionality. This coffee table with a glass top and a wooden frame adds elegance to your home. It also has a drawer to store your secrets.',
			'source' => 'https://www.ikea.com/us/en/p/idanaes-coffee-table-white-40500005/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1161072_pe889280_s5.jpg',
			'category_id' => 2,
		]);

		$p40500005->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1161072_pe889280_s5.jpg' ]);
		$p40500005->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1161070_pe889278_s5.jpg' ]);
		$p40500005->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1169434_pe892456_s5.jpg' ]);
		$p40500005->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1175655_pe894759_s5.jpg' ]);
		$p40500005->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-coffee-table-white__1161071_pe889279_s5.jpg' ]);

		$vc10500002->products()->attach($p40500005->id);

        //Dining chairs
        $vc59481417 = VariationCollection::create();

		$p59481417 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared medium gray/Sefast black',
			'price' => 75.0,
			'model_path' => '/models/59481417-rendera_073f7eb42ddf45b7a969f1b22d706dc8.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-medium-gray-sefast-black-s59481417/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1106907_pe868870_s5.jpg',
			'category_id' => 11,
		]);

		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1106907_pe868870_s5.jpg' ]);
		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1111726_pe870903_s5.jpg' ]);
		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1160135_ph186543_s5.jpg' ]);
		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1106905_pe868869_s5.jpg' ]);
		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1106906_pe868871_s5.jpg' ]);
		$p59481417->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-black__1119153_pe873334_s5.jpg' ]);

		$p69481426 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared medium gray/Sefast white',
			'price' => 75.0,
			'model_path' => '/models/69481426-rendera_650e8d8dd85f414f8fdd0776d6c263e9.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-medium-gray-sefast-white-s69481426/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1106913_pe868876_s5.jpg',
			'category_id' => 11,
		]);

		$p69481426->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1106913_pe868876_s5.jpg' ]);
		$p69481426->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1106912_pe868877_s5.jpg' ]);
		$p69481426->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1106911_pe868875_s5.jpg' ]);
		$p69481426->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1111728_pe870905_s5.jpg' ]);
		$p69481426->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-white__1119153_pe873334_s5.jpg' ]);

		$p69481469 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light blue/Sefast chrome plated',
			'price' => 80.0,
			'model_path' => '/models/69481469-rendera_dd540e24ae4f4b72b0144cf10bc4e813.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated-s69481469/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1106865_pe868835_s5.jpg',
			'category_id' => 11,
		]);

		$p69481469->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1106865_pe868835_s5.jpg' ]);
		$p69481469->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1106863_pe868834_s5.jpg' ]);
		$p69481469->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1106864_pe868836_s5.jpg' ]);
		$p69481469->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1111713_pe870894_s5.jpg' ]);
		$p69481469->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-chrome-plated__1119153_pe873334_s5.jpg' ]);

		$p89481449 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light green/Sefast white',
			'price' => 75.0,
			'model_path' => '/models/89481449-rendera_038d9672861b41189a33aded651e36a1.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-green-sefast-white-s89481449/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1106897_pe868859_s5.jpg',
			'category_id' => 11,
		]);

		$p89481449->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1106897_pe868859_s5.jpg' ]);
		$p89481449->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1106895_pe868858_s5.jpg' ]);
		$p89481449->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1119153_pe873334_s5.jpg' ]);
		$p89481449->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1111723_pe870900_s5.jpg' ]);
		$p89481449->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-white__1106896_pe868860_s5.jpg' ]);

		$p89481473 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light blue/Sefast white',
			'price' => 75.0,
			'model_path' => '/models/89481473-rendera_d65222ca0d0d41018ec04a5e37ef3615.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-blue-sefast-white-s89481473/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1106904_pe868867_s5.jpg',
			'category_id' => 11,
		]);

		$p89481473->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1106904_pe868867_s5.jpg' ]);
		$p89481473->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1111725_pe870902_s5.jpg' ]);
		$p89481473->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1119153_pe873334_s5.jpg' ]);
		$p89481473->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1106903_pe868868_s5.jpg' ]);
		$p89481473->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-white__1106902_pe868866_s5.jpg' ]);

		$p89481430 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light green/Sefast chrome plated',
			'price' => 80.0,
			'model_path' => '/models/89481430-rendera_befd838fabed40adbe2039c7dfc615af.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-green-sefast-chrome-plated-s89481430/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1106892_pe868856_s5.jpg',
			'category_id' => 11,
		]);

		$p89481430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1106892_pe868856_s5.jpg' ]);
		$p89481430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1106890_pe868855_s5.jpg' ]);
		$p89481430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1106891_pe868857_s5.jpg' ]);
		$p89481430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1119153_pe873334_s5.jpg' ]);
		$p89481430->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-chrome-plated__1111722_pe870899_s5.jpg' ]);

		$p59481422 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared medium gray/Sefast chrome plated',
			'price' => 80.0,
			'model_path' => '/models/59481422-rendera_3eb4183fb1cd4110a82048a6b510f42e.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated-s59481422/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1106910_pe868873_s5.jpg',
			'category_id' => 11,
		]);

		$p59481422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1106910_pe868873_s5.jpg' ]);
		$p59481422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1106909_pe868874_s5.jpg' ]);
		$p59481422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1106908_pe868872_s5.jpg' ]);
		$p59481422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1119153_pe873334_s5.jpg' ]);
		$p59481422->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-medium-gray-sefast-chrome-plated__1111727_pe870904_s5.jpg' ]);

		$vc59481417->products()->attach($p59481417->id);
		$vc59481417->products()->attach($p69481426->id);
		$vc59481417->products()->attach($p69481469->id);
		$vc59481417->products()->attach($p89481449->id);
		$vc59481417->products()->attach($p89481473->id);
		$vc59481417->products()->attach($p89481430->id);
		$vc59481417->products()->attach($p59481422->id);

		$vc00457235 = VariationCollection::create();

		$p60446786 = Product::create([
			'name' => 'LISABO Chair, black',
			'price' => 65.0,
			'model_path' => '/models/60446786_PS01_S01_NV01_RQP3_3.0_7afd225fbcf94cf7a02c828f979bb391.glb',
			'is_stackable' => 0,
			'description' => 'A hand-crafted expression that is both comfy and sturdy to suit even the liveliest family members. Ideal for all the activities around the table like eating, playing games, drawing and homework.',
			'source' => 'https://www.ikea.com/us/en/p/lisabo-chair-black-60446786/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__0786548_pe763014_s5.jpg',
			'category_id' => 11,
		]);

		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__0786548_pe763014_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1053148_pe846741_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1053146_pe846739_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1053147_pe846740_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__0817918_pe774170_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__0949242_pe799575_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1053150_pe846743_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__0936084_ph172127_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1104636_pe867796_s5.jpg' ]);
		$p60446786->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-black__1053149_pe846742_s5.jpg' ]);

		$p00457235 = Product::create([
			'name' => 'LISABO Chair, ash',
			'price' => 65.0,
			'model_path' => '/models/00457235_PS01_S01_NV01_RQP3_3.0_a4fc7c8c6bbe4db39617753c2c07349c.glb',
			'is_stackable' => 0,
			'description' => 'A hand-crafted expression that is both comfy and sturdy to suit even the liveliest family members. Ideal for all the activities around the table like eating, playing games, drawing and homework.',
			'source' => 'https://www.ikea.com/us/en/p/lisabo-chair-ash-00457235/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0786549_pe763015_s5.jpg',
			'category_id' => 11,
		]);

		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0786549_pe763015_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0810268_pe771255_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1053172_pe846765_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0946416_ph171423_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1053175_pe846725_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0928960_ph169624_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1053173_pe846766_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__0949242_pe799575_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1053174_pe846767_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1079988_pe857792_s5.jpg' ]);
		$p00457235->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lisabo-chair-ash__1053171_pe846764_s5.jpg' ]);

		$vc00457235->products()->attach($p60446786->id);
		$vc00457235->products()->attach($p00457235->id);

		$vc60545362 = VariationCollection::create();

		$p90538647 = Product::create([
			'name' => 'ÖSTANÖ Chair, red-brown Remmarn/red-brown',
			'price' => 25.0,
			'model_path' => '/models/70526532_PS01_S01_NV01_RQP3_3.0_9f0ca03768fa40dbb9fc18c4bb9c8db6.glb',
			'is_stackable' => 0,
			'description' => 'Comfy and sturdy chair with a metal frame, a soft seat and a nice backrest with a curved shape. All in a timeless, neat design with a modern twist that takes up little room – and at a price that surprises!',
			'source' => 'https://www.ikea.com/us/en/p/oestanoe-chair-red-brown-remmarn-red-brown-90538647/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1120081_pe873713_s5.jpg',
			'category_id' => 11,
		]);

		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1120081_pe873713_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1212386_ph191900_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1218939_ph190421_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1120079_pe873715_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1190298_ph191902_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1169600_pe892511_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1120078_pe873712_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1175276_ph190422_s5.jpg' ]);
		$p90538647->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-red-brown-remmarn-red-brown__1186082_pe898672_s5.jpg' ]);

		$p90568903 = Product::create([
			'name' => 'ÖSTANÖ Chair, deep green Remmarn/deep green',
			'price' => 25.0,
			'model_path' => '/models/50568900_PS01_S01_NV01_RQP3_3.0_639adcfe31c64cc49815039402be5573.glb',
			'is_stackable' => 0,
			'description' => 'Comfy and sturdy chair with a metal frame, a soft seat and a nice backrest with a curved shape. All in a timeless, neat design with a modern twist that takes up little room – and at a price that surprises!',
			'source' => 'https://www.ikea.com/us/en/p/oestanoe-chair-deep-green-remmarn-deep-green-90568903/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209972_pe909498_s5.jpg',
			'category_id' => 11,
		]);

		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209972_pe909498_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209969_pe909497_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1304070_ph197846_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209970_pe909500_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1304071_ph197845_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209971_pe909499_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1169600_pe892511_s5.jpg' ]);
		$p90568903->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-deep-green-remmarn-deep-green__1209968_pe909496_s5.jpg' ]);

		$p60545362 = Product::create([
			'name' => 'ÖSTANÖ Chair, black Remmarn/dark gray',
			'price' => 25.0,
			'model_path' => '/models/20545359_PS01_S01_NV01_RQP3_3.0_473a5c60113f42e18201e114312b9808.glb',
			'is_stackable' => 0,
			'description' => 'Comfy and sturdy chair with a metal frame, a soft seat and a nice backrest with a curved shape. All in a timeless, neat design with a modern twist that takes up little room – and at a price that surprises!',
			'source' => 'https://www.ikea.com/us/en/p/oestanoe-chair-black-remmarn-dark-gray-60545362/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1119282_pe873451_s5.jpg',
			'category_id' => 11,
		]);

		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1119282_pe873451_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1190300_ph191720_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1119281_pe873452_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1169600_pe892511_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1186081_pe898673_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1119279_pe873450_s5.jpg' ]);
		$p60545362->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/oestanoe-chair-black-remmarn-dark-gray__1119280_pe873453_s5.jpg' ]);

		$vc60545362->products()->attach($p90538647->id);
		$vc60545362->products()->attach($p90568903->id);
		$vc60545362->products()->attach($p60545362->id);

		$vc29481391 = VariationCollection::create();

		$p99505567 = Product::create([
			'name' => 'LIDÅS Chair, black/Sefast chrome plated',
			'price' => 60.0,
			'model_path' => '/models/99505567-rendera_bd2f41045b6945838c96c14d6a96bf1b.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the scooped seat and restful flexibility of the backrest. The material wipes clean in an instant. Choose your favorite color for a personal look or why not mix colors?',
			'source' => 'https://www.ikea.com/us/en/p/lidas-chair-black-sefast-chrome-plated-s99505567/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167047_pe891349_s5.jpg',
			'category_id' => 11,
		]);

		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167047_pe891349_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167044_pe891348_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1197322_pe903476_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167043_pe891347_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1181975_pe896902_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1122304_pe874590_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1195097_pe902241_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167045_pe891351_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1195098_pe902240_s5.jpg' ]);
		$p99505567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-chrome-plated__1167046_pe891350_s5.jpg' ]);

		$p39481381 = Product::create([
			'name' => 'LIDÅS Chair, white/Sefast white',
			'price' => 55.0,
			'model_path' => '/models/39481381-rendera_e4e638aa9dee445dad1f0a9a643a7690.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the scooped seat and restful flexibility of the backrest. The material wipes clean in an instant. Choose your favorite color for a personal look or why not mix colors?',
			'source' => 'https://www.ikea.com/us/en/p/lidas-chair-white-sefast-white-s39481381/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1106351_pe868690_s5.jpg',
			'category_id' => 11,
		]);

		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1106351_pe868690_s5.jpg' ]);
		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1106349_pe868689_s5.jpg' ]);
		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1111712_pe870893_s5.jpg' ]);
		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1128367_pe876570_s5.jpg' ]);
		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1106350_pe868691_s5.jpg' ]);
		$p39481381->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-white__1122304_pe874590_s5.jpg' ]);

		$p49505560 = Product::create([
			'name' => 'LIDÅS Chair, black/Sefast black',
			'price' => 55.0,
			'model_path' => '/models/49505560-rendera_d732bc157ac44a28966af6b9ea3badb7.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the scooped seat and restful flexibility of the backrest. The material wipes clean in an instant. Choose your favorite color for a personal look or why not mix colors?',
			'source' => 'https://www.ikea.com/us/en/p/lidas-chair-black-sefast-black-s49505560/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167042_pe891344_s5.jpg',
			'category_id' => 11,
		]);

		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167042_pe891344_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167039_pe891343_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167040_pe891346_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167041_pe891345_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1245318_ph193548_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1122304_pe874590_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1245312_ph193555_s5.jpg' ]);
		$p49505560->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-black__1167038_pe891342_s5.jpg' ]);

		$p59505569 = Product::create([
			'name' => 'LIDÅS Chair, black/Sefast white',
			'price' => 55.0,
			'model_path' => '/models/59505569-rendera_30ec2ece3c064acf83c636ca1772bd70.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the scooped seat and restful flexibility of the backrest. The material wipes clean in an instant. Choose your favorite color for a personal look or why not mix colors?',
			'source' => 'https://www.ikea.com/us/en/p/lidas-chair-black-sefast-white-s59505569/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167052_pe891354_s5.jpg',
			'category_id' => 11,
		]);

		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167052_pe891354_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1195095_pe902238_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1197323_pe903477_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167051_pe891355_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167050_pe891356_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1122304_pe874590_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1195094_pe902239_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1181976_pe896903_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167049_pe891353_s5.jpg' ]);
		$p59505569->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-black-sefast-white__1167048_pe891352_s5.jpg' ]);

		$p69481394 = Product::create([
			'name' => 'LIDÅS Chair, white/Sefast black',
			'price' => 55.0,
			'model_path' => '/models/69481394-rendera_11fb0f98c4ab433b85f53905c3337151.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the scooped seat and restful flexibility of the backrest. The material wipes clean in an instant. Choose your favorite color for a personal look or why not mix colors?',
			'source' => 'https://www.ikea.com/us/en/p/lidas-chair-white-sefast-black-s69481394/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1106345_pe868684_s5.jpg',
			'category_id' => 11,
		]);

		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1106345_pe868684_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1106343_pe868683_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1122304_pe874590_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1128365_pe876568_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1245320_ph190430_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1106344_pe868685_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1160140_ph186433_s5.jpg' ]);
		$p69481394->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lidas-chair-white-sefast-black__1111709_pe870891_s5.jpg' ]);

		$vc29481391->products()->attach($p99505567->id);
		$vc29481391->products()->attach($p39481381->id);
		$vc29481391->products()->attach($p49505560->id);
		$vc29481391->products()->attach($p59505569->id);
		$vc29481391->products()->attach($p69481394->id);

		$vc00369111 = VariationCollection::create();

		$p00369111 = Product::create([
			'name' => 'NORDVIKEN Chair, white',
			'price' => 65.0,
			'model_path' => '/models/00369111_PS01_S01_NV01_RQP3_3.0_5dfb6fdecce549e5867725bfff560618.glb',
			'is_stackable' => 0,
			'description' => 'What makes this chair so comfy? The deepened seat distributes your weight evenly, the angle of the seat and back help you to maintain a good posture and the high backrest takes the load off your back.',
			'source' => 'https://www.ikea.com/us/en/p/nordviken-chair-white-00369111/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__0714205_pe729965_s5.jpg',
			'category_id' => 11,
		]);

		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__0714205_pe729965_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__0744795_pe743407_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__1053109_pe846705_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__1053107_pe846703_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__0933234_ph170599_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__1053110_pe846706_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__1053108_pe846704_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__0947700_pe798621_s5.jpg' ]);
		$p00369111->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-white__1053111_pe846707_s5.jpg' ]);

		$p40369109 = Product::create([
			'name' => 'NORDVIKEN Chair, black',
			'price' => 65.0,
			'model_path' => '/models/40369109_PS01_S01_NV01_RQP3_3.0_2817448fa89a46f398822befc6cea26b.glb',
			'is_stackable' => 0,
			'description' => 'What makes this chair so comfy? The deepened seat distributes your weight evenly, the angle of the seat and back help you to maintain a good posture and the high backrest takes the load off your back.',
			'source' => 'https://www.ikea.com/us/en/p/nordviken-chair-black-40369109/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0714202_pe729964_s5.jpg',
			'category_id' => 11,
		]);

		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0714202_pe729964_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__1053090_pe846686_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0955681_ph174047_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__1053091_pe846687_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__1053088_pe846684_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0744800_pe743411_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0928967_ph167490_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0744797_pe743408_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0797392_pe766852_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__1053089_pe846685_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0947700_pe798621_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__0797433_ph163608_s5.jpg' ]);
		$p40369109->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-black__1053087_pe846683_s5.jpg' ]);

		$p30488546 = Product::create([
			'name' => 'NORDVIKEN Chair, antique stain',
			'price' => 65.0,
			'model_path' => '/models/30488546_PS01_S01_NV01_RQP3_3.0_15d896138afb4aaea52e9b6bff496a74.glb',
			'is_stackable' => 0,
			'description' => 'What makes this chair so comfy? The deepened seat distributes your weight evenly, the angle of the seat and back help you to maintain a good posture and the high backrest takes the load off your back.',
			'source' => 'https://www.ikea.com/us/en/p/nordviken-chair-antique-stain-30488546/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__0832454_pe777681_s5.jpg',
			'category_id' => 11,
		]);

		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__0832454_pe777681_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1053084_pe846680_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1053083_pe846679_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1053086_pe846682_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__0916590_pe785271_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1053082_pe846678_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1351631_pe951957_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__1053085_pe846681_s5.jpg' ]);
		$p30488546->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordviken-chair-antique-stain__0916591_pe785272_s5.jpg' ]);

		$vc00369111->products()->attach($p00369111->id);
		$vc00369111->products()->attach($p40369109->id);
		$vc00369111->products()->attach($p30488546->id);

		$vc50544867 = VariationCollection::create();

		$p70544866 = Product::create([
			'name' => 'SKOGSTA Chair, acacia',
			'price' => 65.0,
			'model_path' => '/models/70544866_PS01_S01_NV01_RQP3_3.0_285c4a00623b42e0b49e96e3227b2d09.glb',
			'is_stackable' => 0,
			'description' => 'Clear-lacquered solid acacia wood chair with arched backrest and characteristic spindles – a classic look that ages beautifully and will keep its appeal in your home over many years.',
			'source' => 'https://www.ikea.com/us/en/p/skogsta-chair-acacia-70544866/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1343430_pe949583_s5.jpg',
			'category_id' => 11,
		]);

		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1343430_pe949583_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1342710_pe949093_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1292961_ph195439_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1342683_pe949088_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1342684_pe949087_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1249771_pe923498_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1262536_pe927108_s5.jpg' ]);
		$p70544866->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-acacia__1249770_pe923496_s5.jpg' ]);

		$p50544867 = Product::create([
			'name' => 'SKOGSTA Chair, black',
			'price' => 65.0,
			'model_path' => '/models/50544867_PS01_S01_NV01_RQP3_4.0_5242c6ab71c745be97e91b406f154fbe.glb',
			'is_stackable' => 0,
			'description' => 'Black stained solid acacia wood chair with arched backrest and characteristic spindles – a classic look that ages beautifully and will keep its appeal in your home over many years.',
			'source' => 'https://www.ikea.com/us/en/p/skogsta-chair-black-50544867/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1243349_pe920580_s5.jpg',
			'category_id' => 11,
		]);

		$p50544867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1243349_pe920580_s5.jpg' ]);
		$p50544867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1240710_pe919457_s5.jpg' ]);
		$p50544867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1243348_pe920581_s5.jpg' ]);
		$p50544867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1262536_pe927108_s5.jpg' ]);
		$p50544867->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/skogsta-chair-black__1243347_pe920579_s5.jpg' ]);

		$vc50544867->products()->attach($p70544866->id);
		$vc50544867->products()->attach($p50544867->id);

		$vc00360002 = VariationCollection::create();

		$p50457313 = Product::create([
			'name' => 'ODGER Chair, anthracite',
			'price' => 125.0,
			'model_path' => '/models/50457313_PS01_S01_NV01_RQP3_3.0_6f81e2ee62fc428f8ad63077fd96a495.glb',
			'is_stackable' => 0,
			'description' => 'The chair’s moulded shell gives a comfortable, flexy feel that is yours to enjoy after a simple 3-click assembly. For strength and beauty, the wood is mixed into the charcoal grey plastic, looking like decorative sprinkles.',
			'source' => 'https://www.ikea.com/us/en/p/odger-chair-anthracite-50457313/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0739669_pe741828_s5.jpg',
			'category_id' => 11,
		]);

		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0739669_pe741828_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0798330_ph162754_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0948332_pe798956_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__1070850_pe854757_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0946320_ph172863_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__1070851_pe854756_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__1070849_pe854754_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0798331_ph162751_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0963408_ph170906_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__1070852_pe854755_s5.jpg' ]);
		$p50457313->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-anthracite__0798332_pe767221_s5.jpg' ]);

		$p70516552 = Product::create([
			'name' => 'ODGER Chair, red',
			'price' => 125.0,
			'model_path' => '/models/70516552_PS01_S01_NV01_RQP3_3.0_01a1bb5a5f654250996d3c073da921a7.glb',
			'is_stackable' => 0,
			'description' => 'The chair’s moulded shell gives a comfy, flexy feel that’s yours to enjoy after a simple 3-click assembly. For strength and beauty, wood is mixed into the red plastic, like decorative sprinkles.',
			'source' => 'https://www.ikea.com/us/en/p/odger-chair-red-70516552/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg',
			'category_id' => 11,
		]);

		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1038449_pe839684_s5.jpg' ]);
		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1057889_pe849042_s5.jpg' ]);
		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__0948332_pe798956_s5.jpg' ]);
		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1057888_pe849043_s5.jpg' ]);
		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1038450_pe839686_s5.jpg' ]);
		$p70516552->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-red__1038451_pe839685_s5.jpg' ]);

		$p00360002 = Product::create([
			'name' => 'ODGER Chair, blue',
			'price' => 125.0,
			'model_path' => '/models/00360002_PS01_S01_NV01_RQP3_3.0_30f963e3e5ca4f68902ca693462287e3.glb',
			'is_stackable' => 0,
			'description' => 'The chair’s moulded shell gives a comfortable, flexy feel that’s yours to enjoy after a simple 3-click assembly. For strength and beauty, the wood is mixed into the sea blue plastic, looking like decorative sprinkles.',
			'source' => 'https://www.ikea.com/us/en/p/odger-chair-blue-00360002/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0727322_pe735594_s5.jpg',
			'category_id' => 11,
		]);

		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0727322_pe735594_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__1103729_pe867367_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0745759_ph154940_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0577892_ph145122_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0948332_pe798956_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0870952_pe709667_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__1093056_pe863174_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0577880_ph144682_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0870948_pe709666_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__1012715_ph162317_s5.jpg' ]);
		$p00360002->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-blue__0577891_ph144746_s5.jpg' ]);

		$p60359996 = Product::create([
			'name' => 'ODGER Chair, white/beige',
			'price' => 125.0,
			'model_path' => '/models/60359996_PS01_S01_NV01_RQP3_3.0_70c8c49628614f8a9b29e78f0f9e7f53.glb',
			'is_stackable' => 0,
			'description' => 'The chair’s moulded shell gives a comfortable, flexy feel that is yours to enjoy after a simple 3-click assembly. For strength and beauty, the wood is mixed into the ivory nude plastic, looking like decorative sprinkles.',
			'source' => 'https://www.ikea.com/us/en/p/odger-chair-white-beige-60359996/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0727334_pe735606_s5.jpg',
			'category_id' => 11,
		]);

		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0727334_pe735606_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__1070848_pe854751_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0745774_ph152940_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0745775_ph158198_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0744473_ph156947_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0871166_pe640477_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0671207_ph152942_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__1070846_pe854753_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__1070847_pe854752_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__0948332_pe798956_s5.jpg' ]);
		$p60359996->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-chair-white-beige__1070845_pe854750_s5.jpg' ]);

		$vc00360002->products()->attach($p50457313->id);
		$vc00360002->products()->attach($p70516552->id);
		$vc00360002->products()->attach($p00360002->id);
		$vc00360002->products()->attach($p60359996->id);

		$vc70519763 = VariationCollection::create();

		$p70519763 = Product::create([
			'name' => 'GRÖNSTA Chair, indoor/outdoor white',
			'price' => 60.0,
			'model_path' => '/models/70519763_PS01_S01_NV01_RQP3_3.0_20a71c0589fe45058ac2563628d7de7e.glb',
			'is_stackable' => 0,
			'description' => 'The molded seat shell with smooth curved shapes is especially designed for comfort and lasting beauty. Fingerprints, spills and other mishaps on the white surface wipe clean easily.',
			'source' => 'https://www.ikea.com/us/en/p/groensta-chair-indoor-outdoor-white-70519763/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1243689_pe920720_s5.jpg',
			'category_id' => 11,
		]);

		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1243689_pe920720_s5.jpg' ]);
		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1243734_pe920748_s5.jpg' ]);
		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1273245_pe929936_s5.jpg' ]);
		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1301486_pe937449_s5.jpg' ]);
		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1276104_pe930806_s5.jpg' ]);
		$p70519763->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-white__1243687_pe920719_s5.jpg' ]);

		$p70554577 = Product::create([
			'name' => 'GRÖNSTA Chair, indoor/outdoor gray-turquoise',
			'price' => 60.0,
			'model_path' => '/models/70554577_PS01_S01_NV01_RQP3_3.0_045c77e2a24b4484af0711be9d0b9055.glb',
			'is_stackable' => 0,
			'description' => 'The molded seat shell with smooth curved shapes is especially designed for comfort and lasting beauty. Fingerprints, spills and other mishaps on the grey-turquoise surface wipe clean easily.',
			'source' => 'https://www.ikea.com/us/en/p/groensta-chair-indoor-outdoor-gray-turquoise-70554577/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1243686_pe920717_s5.jpg',
			'category_id' => 11,
		]);

		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1243686_pe920717_s5.jpg' ]);
		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1243684_pe920716_s5.jpg' ]);
		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1273245_pe929936_s5.jpg' ]);
		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1276101_pe930805_s5.jpg' ]);
		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1243724_pe920746_s5.jpg' ]);
		$p70554577->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-chair-indoor-outdoor-gray-turquoise__1301483_pe937447_s5.jpg' ]);

		$vc70519763->products()->attach($p70519763->id);
		$vc70519763->products()->attach($p70554577->id);

		$vc20428100 = VariationCollection::create();

		$p60217822 = Product::create([
			'name' => 'INGOLF Chair, brown-black',
			'price' => 70.0,
			'model_path' => '/models/60217822_PS01_S01_NV01_RQP3_3.0_7ecc0bbf6c404a7181c702556a085293.glb',
			'is_stackable' => 0,
			'description' => 'You sit comfortably thanks to the high back.',
			'source' => 'https://www.ikea.com/us/en/p/ingolf-chair-brown-black-60217822/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0728153_pe736122_s5.jpg',
			'category_id' => 11,
		]);

		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0728153_pe736122_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0872567_pe630827_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__1053145_pe846738_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0577867_ph132623_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0872561_pe630826_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0947841_pe798658_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0577868_ph135647_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0744110_ph147726_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__1075752_pe856552_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__1053142_pe846735_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__1053144_pe846737_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0872556_pe595406_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__1053143_pe846736_s5.jpg' ]);
		$p60217822->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-brown-black__0679681_ph146095_s5.jpg' ]);

		$p70103250 = Product::create([
			'name' => 'INGOLF Chair, white',
			'price' => 70.0,
			'model_path' => '/models/70103250_PS01_S01_NV01_RQP3_3.0_4746aa6227e649b883b3aa80e656bd41.glb',
			'is_stackable' => 0,
			'description' => 'Why not have the same style throughout your home? INGOLF series looks just as nice in the kitchen and dining room as in the bedroom or hallway. The solid wood construction holds up well.',
			'source' => 'https://www.ikea.com/us/en/p/ingolf-chair-white-70103250/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__0728152_pe736113_s5.jpg',
			'category_id' => 11,
		]);

		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__0728152_pe736113_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__1052476_pe846139_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__0209109_pe323885_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__1052477_pe846140_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__0995229_pe821628_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__1052478_pe846141_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__1052475_pe846138_s5.jpg' ]);
		$p70103250->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white__1052474_pe846137_s5.jpg' ]);

		$vc20428100->products()->attach($p60217822->id);
		$vc20428100->products()->attach($p70103250->id);

		$vc60334722 = VariationCollection::create();

		$p80349671 = Product::create([
			'name' => 'TOBIAS Chair, clear/chrome plated',
			'price' => 85.0,
			'model_path' => '/models/80349671_PS01_S01_NV01_RQP3_3.0_234c23509585466a953ca48a65afdc95.glb',
			'is_stackable' => 0,
			'description' => 'A transparent chair that mirrors its surroundings. It picks up the colors of the room and appears to be floating. And because there’s flexibility in the seat, you may feel like you are floating too.',
			'source' => 'https://www.ikea.com/us/en/p/tobias-chair-clear-chrome-plated-80349671/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0727342_pe735614_s5.jpg',
			'category_id' => 11,
		]);

		$p80349671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0727342_pe735614_s5.jpg' ]);
		$p80349671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0949817_pe800034_s5.jpg' ]);
		$p80349671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0870537_pe620341_s5.jpg' ]);
		$p80349671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0875154_pe620335_s5.jpg' ]);
		$p80349671->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-clear-chrome-plated__0870533_pe620340_s5.jpg' ]);

		$p60334722 = Product::create([
			'name' => 'TOBIAS Chair, blue/chrome plated',
			'price' => 85.0,
			'model_path' => '/models/60334722_PS01_S01_NV01_RQP3_4.0_579d9583344e43bf99598fdf8307c2ac.glb',
			'is_stackable' => 0,
			'description' => 'A transparent chair that mirrors its surroundings. It picks up the colors of the room and appears to be floating. And because there’s flexibility in the seat, you may feel like you are floating too.',
			'source' => 'https://www.ikea.com/us/en/p/tobias-chair-blue-chrome-plated-60334722/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0727333_pe735605_s5.jpg',
			'category_id' => 11,
		]);

		$p60334722->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0727333_pe735605_s5.jpg' ]);
		$p60334722->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0872964_pe620040_s5.jpg' ]);
		$p60334722->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0872956_pe620039_s5.jpg' ]);
		$p60334722->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0949817_pe800034_s5.jpg' ]);
		$p60334722->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-blue-chrome-plated__0872974_pe620045_s5.jpg' ]);

		$p90532589 = Product::create([
			'name' => 'TOBIAS Chair, brown-red/chrome plated',
			'price' => 85.0,
			'model_path' => '/models/90532589_PS01_S01_NV01_RQP3_3.0_ad5e99bc2a2b400f80cc47e4b27e8a52.glb',
			'is_stackable' => 0,
			'description' => 'A transparent chair that mirrors its surroundings. It picks up the colors of the room and appears to be floating. And because there’s flexibility in the seat, you may feel like you are floating too.',
			'source' => 'https://www.ikea.com/us/en/p/tobias-chair-brown-red-chrome-plated-90532589/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1126419_pe875739_s5.jpg',
			'category_id' => 11,
		]);

		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1126419_pe875739_s5.jpg' ]);
		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1126418_pe875740_s5.jpg' ]);
		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1190892_ph188821_s5.jpg' ]);
		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1126417_pe875738_s5.jpg' ]);
		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__0949817_pe800034_s5.jpg' ]);
		$p90532589->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tobias-chair-brown-red-chrome-plated__1315304_ph189259_s5.jpg' ]);

		$vc60334722->products()->attach($p80349671->id);
		$vc60334722->products()->attach($p60334722->id);
		$vc60334722->products()->attach($p90532589->id);

		$p00211088 = Product::create([
			'name' => 'STEFAN Chair, brown-black',
			'price' => 35.0,
			'model_path' => '/models/00211088_PS01_S01_NV01_RQP3_3.0_3fec8557adb64bc38f7763716af7376e.glb',
			'is_stackable' => 0,
			'description' => 'A sturdy chair with a solid wood construction that can handle the challenges of everyday life! Combines nicely with most styles, and if you’re looking for extra comfort, simply add a chair pad.',
			'source' => 'https://www.ikea.com/us/en/p/stefan-chair-brown-black-00211088/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__0727320_pe735593_s5.jpg',
			'category_id' => 11,
		]);

		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__0727320_pe735593_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__0872007_pe590671_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__1052536_pe846193_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__1052537_pe846194_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__1052539_pe846166_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__1052538_pe846195_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__0719926_ph154435_s5.jpg' ]);
		$p00211088->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black__1040183_pe840596_s5.jpg' ]);


		$vc20566747 = VariationCollection::create();

		$p20566747 = Product::create([
			'name' => 'KRYLBO Chair, Tonerud blue',
			'price' => 90.0,
			'model_path' => '/models/90566744_PS01_S01_NV01_RQP3_3.0_202ef48dd8e144678fe179ad006729fd.glb',
			'is_stackable' => 0,
			'description' => 'Dine in style and comfort. This upholstered chair is perfect for long meals, spending precious moments with family and friends or for indulging in some relaxing me-time.',
			'source' => 'https://www.ikea.com/us/en/p/krylbo-chair-tonerud-blue-20566747/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208500_pe908601_s5.jpg',
			'category_id' => 11,
		]);

		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208500_pe908601_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1241360_ph194093_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1233556_pe916891_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208499_pe908605_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208496_pe908602_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208497_pe908603_s5.jpg' ]);
		$p20566747->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-blue__1208498_pe908604_s5.jpg' ]);

		$p20566752 = Product::create([
			'name' => 'KRYLBO Chair, Tonerud dark beige',
			'price' => 90.0,
			'model_path' => '/models/60566745-glb_draco-3.0_587cd80522bc46d59c28e9b26dbf6c99.glb',
			'is_stackable' => 0,
			'description' => 'Dine in style and comfort. This upholstered chair is perfect for long meals, spending precious moments with family and friends or for indulging in some relaxing me-time.',
			'source' => 'https://www.ikea.com/us/en/p/krylbo-chair-tonerud-dark-beige-20566752/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208495_pe908606_s5.jpg',
			'category_id' => 11,
		]);

		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208495_pe908606_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208494_pe908600_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1233556_pe916891_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208493_pe908599_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1259007_ph194892_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208492_pe908598_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1208491_pe908597_s5.jpg' ]);
		$p20566752->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/krylbo-chair-tonerud-dark-beige__1241360_ph194093_s5.jpg' ]);

		$vc20566747->products()->attach($p20566747->id);
		$vc20566747->products()->attach($p20566752->id);

		$vc10547052 = VariationCollection::create();

		$p30547051 = Product::create([
			'name' => 'MÅNHULT Chair, black/Hakebo deep red',
			'price' => 85.0,
			'model_path' => '/models/50547050_PS01_S01_NV01_RQP3_3.0_6f97cd519df147b39ec5431697c99bee.glb',
			'is_stackable' => 0,
			'description' => 'Here you sit comfy on a sturdy metal frame where the seat and backrest look like thin chocolate wafers covered with a durable velvet fabric. Just as enticing as candy and simple to assemble. What a combination!',
			'source' => 'https://www.ikea.com/us/en/p/manhult-chair-black-hakebo-deep-red-30547051/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1156106_pe886908_s5.jpg',
			'category_id' => 11,
		]);

		$p30547051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1156106_pe886908_s5.jpg' ]);
		$p30547051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1123283_pe874752_s5.jpg' ]);
		$p30547051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1156104_pe886906_s5.jpg' ]);
		$p30547051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1156103_pe886905_s5.jpg' ]);
		$p30547051->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-deep-red__1156105_pe886907_s5.jpg' ]);

		$p10547052 = Product::create([
			'name' => 'MÅNHULT Chair, black/Hakebo gray-green',
			'price' => 85.0,
			'model_path' => '/models/00547057_PS01_S01_NV01_RQP3_3.0_18b74ffebab448bfb08eba7709f07724.glb',
			'is_stackable' => 0,
			'description' => 'Here you sit comfy on a sturdy metal frame where the seat and backrest look like thin chocolate wafers covered with a durable velvet fabric. Just as enticing as candy and simple to assemble. What a combination!',
			'source' => 'https://www.ikea.com/us/en/p/manhult-chair-black-hakebo-gray-green-10547052/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1156110_pe886912_s5.jpg',
			'category_id' => 11,
		]);

		$p10547052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1156110_pe886912_s5.jpg' ]);
		$p10547052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1156109_pe886911_s5.jpg' ]);
		$p10547052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1156107_pe886909_s5.jpg' ]);
		$p10547052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1156108_pe886916_s5.jpg' ]);
		$p10547052->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-gray-green__1123283_pe874752_s5.jpg' ]);

		$p70547049 = Product::create([
			'name' => 'MÅNHULT Chair, black/Hakebo yellow-brown',
			'price' => 55.0,
			'model_path' => '/models/00547062_PS01_S01_NV01_RQP3_3.0_2b9858d3c2a640c793c2571de3be9f3f.glb',
			'is_stackable' => 0,
			'description' => 'Here you sit comfy on a sturdy metal frame where the seat and backrest look like thin chocolate wafers covered with a durable velvet fabric. Just as enticing as candy and simple to assemble. What a combination!',
			'source' => 'https://www.ikea.com/us/en/p/manhult-chair-black-hakebo-yellow-brown-70547049/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1156114_pe886910_s5.jpg',
			'category_id' => 11,
		]);

		$p70547049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1156114_pe886910_s5.jpg' ]);
		$p70547049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1156112_pe886914_s5.jpg' ]);
		$p70547049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1156111_pe886913_s5.jpg' ]);
		$p70547049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1123283_pe874752_s5.jpg' ]);
		$p70547049->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/manhult-chair-black-hakebo-yellow-brown__1156113_pe886915_s5.jpg' ]);

		$vc10547052->products()->attach($p30547051->id);
		$vc10547052->products()->attach($p10547052->id);
		$vc10547052->products()->attach($p70547049->id);

		$vc20492346 = VariationCollection::create();

		$p30473069 = Product::create([
			'name' => 'INGOLF Chair, white/Hallarp beige',
			'price' => 95.0,
			'model_path' => '/models/50473073_PS01_S01_NV01_RQP3_3.0_915b0c502c794989963211690361c8fd.glb',
			'is_stackable' => 0,
			'description' => 'This traditional style wooden cross back chair adds a dash of classic charm, whether in your eat-in kitchen, living room, or as an accent chair in the bedroom. Padded seating that allows for long, comfy meals and chit-chat.',
			'source' => 'https://www.ikea.com/us/en/p/ingolf-chair-white-hallarp-beige-30473069/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0926877_pe789566_s5.jpg',
			'category_id' => 11,
		]);

		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0926877_pe789566_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__1052472_pe846135_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__1052470_pe846133_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0946315_ph173264_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__1052471_pe846134_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__1052473_pe846136_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0995228_pe821627_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0946316_ph173263_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0946318_ph172952_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__0946317_ph172954_s5.jpg' ]);
		$p30473069->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ingolf-chair-white-hallarp-beige__1052469_pe846132_s5.jpg' ]);

		$vc20492346->products()->attach($p30473069->id);

		$vc10219178 = VariationCollection::create();

		$p90214285 = Product::create([
			'name' => 'ADDE Chair, black',
			'price' => 12.5,
			'model_path' => '/models/90214285_PS01_S01_NV01_RQP3_3.0_18cdbe0b1348458fbfdc24bfb958f2ae.glb',
			'is_stackable' => 0,
			'description' => 'You can stack the chairs, so they take less space when you\'re not using them.',
			'source' => 'https://www.ikea.com/us/en/p/adde-chair-black-90214285/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0728277_pe736167_s5.jpg',
			'category_id' => 11,
		]);

		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0728277_pe736167_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0871242_pe590544_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0720893_ph004838_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0872127_pe594887_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__1052583_pe846238_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__1052580_pe846235_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0217072_pe360544_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__0947776_pe798637_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__1052582_pe846237_s5.jpg' ]);
		$p90214285->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-black__1052581_pe846236_s5.jpg' ]);

		$p10219178 = Product::create([
			'name' => 'ADDE Chair, white',
			'price' => 12.5,
			'model_path' => '/models/10219178_PS01_S01_NV01_RQP3_3.0_7ea31d713f7c4dd1b9b1eb94cf631136.glb',
			'is_stackable' => 0,
			'description' => 'Light, airy and stackable ADDE is easy to store away when you want to clean, dance or just need a little more floor space. It is also the perfect extra chair when you have more guests around the table.',
			'source' => 'https://www.ikea.com/us/en/p/adde-chair-white-10219178/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0728280_pe736170_s5.jpg',
			'category_id' => 11,
		]);

		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0728280_pe736170_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0872092_pe716742_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0947776_pe798637_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__1052547_pe846202_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0437187_pe590726_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__1052545_pe846250_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__1052544_pe846199_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__1052546_pe846201_s5.jpg' ]);
		$p10219178->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/adde-chair-white__0872085_pe594884_s5.jpg' ]);

		$vc10219178->products()->attach($p90214285->id);
		$vc10219178->products()->attach($p10219178->id);

		$p10341112 = Product::create([
			'name' => 'EKEDALEN Chair, white/Orrsta light gray',
			'price' => 60.0,
			'model_path' => '/models/60341015_PS01_S01_NV01_RQP3_3.0_0509ccc5d80d459ea0c6827451c629a0.glb',
			'is_stackable' => 0,
			'description' => 'This white slatted back chair with wooden frame makes your dining area look its best. The high, curved backrest and soft seat with removable/washable cover make life around the table comfy and relaxed.',
			'source' => 'https://www.ikea.com/us/en/p/ekedalen-chair-white-orrsta-light-gray-10341112/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0728310_pe736178_s5.jpg',
			'category_id' => 11,
		]);

		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0728310_pe736178_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0719156_pe731888_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0871614_pe640451_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__1052561_pe846216_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__1097693_pe865082_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0947751_pe798632_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__0773740_pe756378_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__1052562_pe846217_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__1052563_pe846218_s5.jpg' ]);
		$p10341112->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ekedalen-chair-white-orrsta-light-gray__1052560_pe846215_s5.jpg' ]);


		$vc20557875 = VariationCollection::create();

		$p20557875 = Product::create([
			'name' => 'GRÖNSTA Armchair, in/outdoor, gray-turquoise',
			'price' => 70.0,
			'model_path' => '/models/20557875_PS01_S01_NV01_RQP3_3.0_51d9708b6cb24b90b3f1871f524471e1.glb',
			'is_stackable' => 0,
			'description' => 'The molded seat shell with smooth curved shapes and cocooning armrests is designed for comfort and lasting beauty. Fingerprints, spills and other mishaps on the grey-turquoise surface wipe clean easily.',
			'source' => 'https://www.ikea.com/us/en/p/groensta-armchair-in-outdoor-gray-turquoise-20557875/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243805_pe920954_s5.jpg',
			'category_id' => 11,
		]);

		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243805_pe920954_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1273246_pe929937_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243802_pe920953_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243803_pe920956_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1301480_pe937444_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243804_pe920955_s5.jpg' ]);
		$p20557875->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-gray-turquoise__1243801_pe920952_s5.jpg' ]);

		$p90557886 = Product::create([
			'name' => 'GRÖNSTA Armchair, in/outdoor, white',
			'price' => 70.0,
			'model_path' => '/models/90557886_PS01_S01_NV01_RQP3_3.0_08dc48b687f4448c9247a1918d3abfdd.glb',
			'is_stackable' => 0,
			'description' => 'The molded seat shell with smooth curved shapes and cocooning armrests is designed for comfort and lasting beauty. Fingerprints, spills and other mishaps on the white surface wipe clean easily.',
			'source' => 'https://www.ikea.com/us/en/p/groensta-armchair-in-outdoor-white-90557886/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1243810_pe920959_s5.jpg',
			'category_id' => 11,
		]);

		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1243810_pe920959_s5.jpg' ]);
		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1243806_pe920957_s5.jpg' ]);
		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1243808_pe920961_s5.jpg' ]);
		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1243807_pe920958_s5.jpg' ]);
		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1301481_pe937445_s5.jpg' ]);
		$p90557886->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/groensta-armchair-in-outdoor-white__1273246_pe929937_s5.jpg' ]);

		$vc20557875->products()->attach($p20557875->id);
		$vc20557875->products()->attach($p90557886->id);

		$vc00534776 = VariationCollection::create();

		$p50534774 = Product::create([
			'name' => 'LILLÅNÄS Chair, chrome plated/Gunnared beige',
			'price' => 115.0,
			'model_path' => '/models/00534757_PS01_S01_NV01_RQP3_3.0_11efcf8f483946ba8cfde26620bbfbf7.glb',
			'is_stackable' => 0,
			'description' => 'LILLÅNÄS chair in beige offers modern appeal and comfort for all-day activities. The padded seat is shaped to reduce pressure and the backrest has a relaxing flexy feel. The cover is removable for washing.',
			'source' => 'https://www.ikea.com/us/en/p/lillanaes-chair-chrome-plated-gunnared-beige-50534774/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150348_pe884483_s5.jpg',
			'category_id' => 11,
		]);

		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150348_pe884483_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150345_pe884486_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150343_pe884481_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150344_pe884482_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150347_pe884485_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1150346_pe884484_s5.jpg' ]);
		$p50534774->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-beige__1163578_pe890740_s5.jpg' ]);

		$p70534773 = Product::create([
			'name' => 'LILLÅNÄS Chair, chrome plated/Bomstad black',
			'price' => 125.0,
			'model_path' => '/models/70534754_PS01_S01_NV01_RQP3_3.0_194c10691cf34e25843679c100e2ca41.glb',
			'is_stackable' => 0,
			'description' => 'LILLÅNÄS chair in black offers modern appeal and comfort for all-day activities with a padded seat shaped to reduce pressure and a flexy-feel backrest. Worry-free, easy-wipe coated fabric cover.',
			'source' => 'https://www.ikea.com/us/en/p/lillanaes-chair-chrome-plated-bomstad-black-70534773/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150275_pe884447_s5.jpg',
			'category_id' => 11,
		]);

		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150275_pe884447_s5.jpg' ]);
		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150273_pe884449_s5.jpg' ]);
		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150272_pe884446_s5.jpg' ]);
		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1163578_pe890740_s5.jpg' ]);
		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150271_pe884445_s5.jpg' ]);
		$p70534773->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-bomstad-black__1150274_pe884448_s5.jpg' ]);

		$p00534776 = Product::create([
			'name' => 'LILLÅNÄS Chair, chrome plated/Glose black',
			'price' => 205.0,
			'model_path' => '/models/40534755_PS01_S01_NV01_RQP3_3.0_35b523fc121847eb8dffe48598d4caad.glb',
			'is_stackable' => 0,
			'description' => 'LILLÅNÄS chair in black offers modern appeal and comfort for all-day activities with a padded seat shaped to reduce pressure and a flexy-feel backrest. Worry-free, easy wipe grain leather cover.',
			'source' => 'https://www.ikea.com/us/en/p/lillanaes-chair-chrome-plated-glose-black-00534776/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150328_pe893872_s5.jpg',
			'category_id' => 11,
		]);

		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150328_pe893872_s5.jpg' ]);
		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150324_pe893873_s5.jpg' ]);
		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150327_pe893876_s5.jpg' ]);
		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150325_pe893874_s5.jpg' ]);
		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1163578_pe890740_s5.jpg' ]);
		$p00534776->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-glose-black__1150326_pe893875_s5.jpg' ]);

		$p10534771 = Product::create([
			'name' => 'LILLÅNÄS Chair, chrome plated/Gunnared dark gray',
			'price' => 115.0,
			'model_path' => '/models/80534758_PS01_S01_NV01_RQP3_3.0_3a22a76f50454fe38200740fc8c86d09.glb',
			'is_stackable' => 0,
			'description' => 'LILLÅNÄS chair in grey offers modern appeal and comfort for all-day activities. The padded seat is shaped to reduce pressure and the backrest has a relaxing flexy feel. The cover is removable for washing.',
			'source' => 'https://www.ikea.com/us/en/p/lillanaes-chair-chrome-plated-gunnared-dark-gray-10534771/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150355_pe884489_s5.jpg',
			'category_id' => 11,
		]);

		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150355_pe884489_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150350_pe884488_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150352_pe884490_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150351_pe884492_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150349_pe884487_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1150353_pe884491_s5.jpg' ]);
		$p10534771->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/lillanaes-chair-chrome-plated-gunnared-dark-gray__1163578_pe890740_s5.jpg' ]);

		$vc00534776->products()->attach($p50534774->id);
		$vc00534776->products()->attach($p70534773->id);
		$vc00534776->products()->attach($p00534776->id);
		$vc00534776->products()->attach($p10534771->id);

		$vc00565683 = VariationCollection::create();

		$p00565683 = Product::create([
			'name' => 'GENESÖN Chair, metal/red',
			'price' => 35.0,
			'model_path' => '/models/00565683_PS01_S01_NV01_RQP3_3.0_501b4e5e31e543e88447f8cddf29f4d4.glb',
			'is_stackable' => 0,
			'description' => 'A splash of color at the dining table. This neat chair made of durable, easy-care metal is an eye-catcher and will last for many (and long) dinners with family and friends.',
			'source' => 'https://www.ikea.com/us/en/p/genesoen-chair-metal-red-00565683/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1185920_pe898617_s5.jpg',
			'category_id' => 11,
		]);

		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1185920_pe898617_s5.jpg' ]);
		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1241359_ph194125_s5.jpg' ]);
		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1206466_pe907541_s5.jpg' ]);
		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1318247_ph194412_s5.jpg' ]);
		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1246755_pe922292_s5.jpg' ]);
		$p00565683->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-red__1246756_pe922293_s5.jpg' ]);

		$p80567796 = Product::create([
			'name' => 'GENESÖN Chair, metal/blue',
			'price' => 35.0,
			'model_path' => '/models/80567796_PS01_S01_NV01_RQP3_3.0_2c5b12dbdf51460b85eccb1153059f97.glb',
			'is_stackable' => 0,
			'description' => 'A splash of color at the dining table. This neat chair made of durable, easy-care metal is an eye-catcher and will last for many (and long) dinners with family and friends.',
			'source' => 'https://www.ikea.com/us/en/p/genesoen-chair-metal-blue-80567796/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1185917_pe898620_s5.jpg',
			'category_id' => 11,
		]);

		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1185917_pe898620_s5.jpg' ]);
		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1246752_pe922289_s5.jpg' ]);
		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1241359_ph194125_s5.jpg' ]);
		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1246753_pe922290_s5.jpg' ]);
		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1275457_ph195721_s5.jpg' ]);
		$p80567796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/genesoen-chair-metal-blue__1206466_pe907541_s5.jpg' ]);

		$vc00565683->products()->attach($p00565683->id);
		$vc00565683->products()->attach($p80567796->id);

		$p40280843 = Product::create([
			'name' => 'NORRARYD Chair, black',
			'price' => 115.0,
			'model_path' => '/models/40280843_PS01_S01_NV01_RQP3_3.0_6bdd6682b3aa4d588d891fff5e711358.glb',
			'is_stackable' => 0,
			'description' => 'A sturdy spindle chair in deep black, designed with rounded shapes and angles for comfort and beauty - a perfect spot to relax and feel good during everyday activities around the table.',
			'source' => 'https://www.ikea.com/us/en/p/norraryd-chair-black-40280843/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__0727327_pe735599_s5.jpg',
			'category_id' => 11,
		]);

		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__0727327_pe735599_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__0949342_pe799652_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__0437248_pe590787_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1075735_pe856543_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1075718_pe856537_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1075733_pe856545_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1075734_pe856544_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1031947_ph170167_s5.jpg' ]);
		$p40280843->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norraryd-chair-black__1075732_pe856542_s5.jpg' ]);


		$p00512091 = Product::create([
			'name' => 'STEFAN Chair, brown-black/Knisa gray/beige',
			'price' => 55.0,
			'model_path' => '/models/80512087_PS01_S01_NV01_RQP1_4.0_67f6878f285042098bd176039fb00c05.glb',
			'is_stackable' => 0,
			'description' => 'A sturdy chair with a solid wood construction blended with the cosy look and added comfort of the upholstered seat and back. The robust seat cover is removable and washable so it will stay fresh longer.',
			'source' => 'https://www.ikea.com/us/en/p/stefan-chair-brown-black-knisa-gray-beige-00512091/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068137_pe852981_s5.jpg',
			'category_id' => 11,
		]);

		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068137_pe852981_s5.jpg' ]);
		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1085963_pe860285_s5.jpg' ]);
		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068135_pe852983_s5.jpg' ]);
		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068136_pe852982_s5.jpg' ]);
		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068134_pe852980_s5.jpg' ]);
		$p00512091->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/stefan-chair-brown-black-knisa-gray-beige__1068133_pe852979_s5.jpg' ]);


		$p70518061 = Product::create([
			'name' => 'NACKANÄS Chair, acacia',
			'price' => 80.0,
			'model_path' => '/models/70518061_PS01_S01_NV01_RQP3_3.0_7622cca3f8e84186a4b74774c21cd8b7.glb',
			'is_stackable' => 0,
			'description' => 'Shaker-inspired chair with woven seat and curved backrest for comfort and unadorned beauty. The sturdy frame made of hardwearing acacia wood will age gracefully and bring a unique look into your home.',
			'source' => 'https://www.ikea.com/us/en/p/nackanaes-chair-acacia-70518061/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113739_pe871520_s5.jpg',
			'category_id' => 11,
		]);

		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113739_pe871520_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113743_pe871523_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113749_pe871524_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113740_pe871521_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113770_pe871535_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113741_pe871522_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1113750_pe871525_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1154712_ph185240_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1218819_pe913221_s5.jpg' ]);
		$p70518061->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nackanaes-chair-acacia__1141942_pe881106_s5.jpg' ]);


		$p10422504 = Product::create([
			'name' => 'RÖNNINGE Chair, birch',
			'price' => 115.0,
			'model_path' => '/models/10422504_PS01_S01_NV01_RQP3_3.0_211720c18e5d43f185c9ca307ff39392.glb',
			'is_stackable' => 0,
			'description' => 'The robust construction is softened by the visible grains of the wood, giving the chair a warm and homey feeling. The straightforward design, rooted in chairs of the 50’s and 60’s, fits almost anywhere.',
			'source' => 'https://www.ikea.com/us/en/p/roenninge-chair-birch-10422504/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__0642047_pe700849_s5.jpg',
			'category_id' => 11,
		]);

		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__0642047_pe700849_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__0933468_ph168894_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__1053074_pe846670_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__1053075_pe846671_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__0949794_pe800012_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__1053072_pe846668_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__1053076_pe846672_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__0933458_ph165334_s5.jpg' ]);
		$p10422504->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/roenninge-chair-birch__1053073_pe846712_s5.jpg' ]);


		$vc00534451 = VariationCollection::create();

		$p50551424 = Product::create([
			'name' => 'HÖGALT Chair, silver color/Älvsborg beige',
			'price' => 65.0,
			'model_path' => '/models/50551424-glb-3.0_86e7ced5502a4ff99f67ba46280c77e0.glb',
			'is_stackable' => 0,
			'description' => 'A sturdy metal frame with comfortable armrests and a seat/backrest in a strong fabric. The perfect combination for those who like design with clean lines and want a modern-styled chair with great comfort.',
			'source' => 'https://www.ikea.com/us/en/p/hoegalt-chair-silver-color-aelvsborg-beige-50551424/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1156076_pe886890_s5.jpg',
			'category_id' => 11,
		]);

		$p50551424->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1156076_pe886890_s5.jpg' ]);
		$p50551424->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1211713_ph193122_s5.jpg' ]);
		$p50551424->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1156075_pe886885_s5.jpg' ]);
		$p50551424->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1156073_pe886883_s5.jpg' ]);
		$p50551424->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-silver-color-aelvsborg-beige__1156074_pe886884_s5.jpg' ]);

		$p00534451 = Product::create([
			'name' => 'HÖGALT Chair, black/Älvsborg dark gray',
			'price' => 65.0,
			'model_path' => '/models/00534451_PS01_S01_NV01_RQP3_3.0_06bd828f009e47858570dc93afb5854d.glb',
			'is_stackable' => 0,
			'description' => 'A sturdy metal frame with comfortable armrests and a seat/backrest in a strong fabric. The perfect combination for those who like design with clean lines and want a modern-styled chair with great comfort.',
			'source' => 'https://www.ikea.com/us/en/p/hoegalt-chair-black-aelvsborg-dark-gray-00534451/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1156080_pe886886_s5.jpg',
			'category_id' => 11,
		]);

		$p00534451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1156080_pe886886_s5.jpg' ]);
		$p00534451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1156078_pe886888_s5.jpg' ]);
		$p00534451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1156077_pe886887_s5.jpg' ]);
		$p00534451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1211713_ph193122_s5.jpg' ]);
		$p00534451->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hoegalt-chair-black-aelvsborg-dark-gray__1156079_pe886889_s5.jpg' ]);

		$vc00534451->products()->attach($p50551424->id);
		$vc00534451->products()->attach($p00534451->id);

		$p70412960 = Product::create([
			'name' => 'SANDSBERG Chair, black/brown stained',
			'price' => 30.0,
			'model_path' => '/models/70412960_PS01_S01_NV01_RQP3_3.0_3dc669144217465c8bd3e50c677bfecf.glb',
			'is_stackable' => 0,
			'description' => 'This chair combines a warm wood expression with sturdy metal in a slim design that’s pleasing to the eye even in smaller spaces. The 2-slat backrest offers a flexible feel for comfort and relaxation.',
			'source' => 'https://www.ikea.com/us/en/p/sandsberg-chair-black-brown-stained-70412960/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1068130_pe852977_s5.jpg',
			'category_id' => 11,
		]);

		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1068130_pe852977_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1056655_pe848455_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1061035_pe850234_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1068128_pe852976_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1027685_pe834982_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1034433_pe837708_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1028047_pe835187_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1068129_pe852978_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1061036_pe850233_s5.jpg' ]);
		$p70412960->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sandsberg-chair-black-brown-stained__1056658_pe848456_s5.jpg' ]);


		$p80417636 = Product::create([
			'name' => 'YNGVAR Chair, anthracite',
			'price' => 145.0,
			'model_path' => '/models/80417636_PS01_S01_NV01_RQP3_3.0_2f455ad94d8b48fdab2774209b65ba02.glb',
			'is_stackable' => 0,
			'description' => 'The soft and rounded back support feels like a nice embrace and makes the chair easy to hang on the table edge when you want to sweep the floor after dinner.',
			'source' => 'https://www.ikea.com/us/en/p/yngvar-chair-anthracite-80417636/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0714279_pe730013_s5.jpg',
			'category_id' => 11,
		]);

		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0714279_pe730013_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__1053103_pe846699_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0750850_pe746841_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__1053105_pe846701_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__1053104_pe846700_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0946421_ph173663_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__1053102_pe846698_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__1053106_pe846702_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0750846_pe746839_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0949308_pe799627_s5.jpg' ]);
		$p80417636->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/yngvar-chair-anthracite__0946427_ph173462_s5.jpg' ]);


		$p70500344 = Product::create([
			'name' => 'KÄTTIL Chair, white/Knisa light gray',
			'price' => 60.0,
			'model_path' => '/models/60500325_PS01_S01_NV01_RQP3_3.0_28072007872b4c668bff75683baccd2d.glb',
			'is_stackable' => 0,
			'description' => 'This high-back upholstered chair makes moments around the table comfier. To make life simpler, the washable cover comes in one piece and has hook-and-loop straps, so it’s easy to remove and put on again.',
			'source' => 'https://www.ikea.com/us/en/p/kaettil-chair-white-knisa-light-gray-70500344/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1016338_pe830329_s5.jpg',
			'category_id' => 11,
		]);

		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1016338_pe830329_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1036292_pe838397_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1036294_pe838396_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1028051_pe835191_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1060747_pe850165_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1060746_pe850166_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1028687_pe835486_s5.jpg' ]);
		$p70500344->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kaettil-chair-white-knisa-light-gray__1080559_pe858068_s5.jpg' ]);


		$p50434312 = Product::create([
			'name' => 'NILSOVE Armchair, rattan/white',
			'price' => 125.0,
			'model_path' => '/models/50434312_PS01_S01_NV01_RQP3_3.0_9b396b8953214aa386aef02ec110cf4e.glb',
			'is_stackable' => 0,
			'description' => 'Hand-woven rattan and sturdy bamboo make each armchair unique and stable. The armrest helps you sit comfortably close to the table – ideal for long dinners. A great way to invite nature into your home.',
			'source' => 'https://www.ikea.com/us/en/p/nilsove-armchair-rattan-white-50434312/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0672929_pe716967_s5.jpg',
			'category_id' => 11,
		]);

		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0672929_pe716967_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0750238_ph159469_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0750239_ph159746_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__1053284_pe846874_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__1053283_pe846873_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0706646_pe725942_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__1053282_pe846872_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0874551_pe716968_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0870245_pe716966_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0750210_ph159465_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__1053281_pe846871_s5.jpg' ]);
		$p50434312->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nilsove-armchair-rattan-white__0870240_pe716965_s5.jpg' ]);


		$p10515471 = Product::create([
			'name' => 'GRÅSALA Chair, gray',
			'price' => 45.0,
			'model_path' => '/models/70515468-glb_draco-3.0_187cf40de6e442669dd4bb68410d4684.glb',
			'is_stackable' => 0,
			'description' => 'A comfy chair packaged in a light, durable and modern design. Upholstered seat, soft edges and flexible backrest invite you to stay a while. Assembles in no time - but the strong construction will last.',
			'source' => 'https://www.ikea.com/us/en/p/grasala-chair-gray-10515471/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1157549_pe887744_s5.jpg',
			'category_id' => 11,
		]);

		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1157549_pe887744_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1224086_pe914825_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1152015_pe885123_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1149372_pe883980_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1149373_pe883979_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1152014_pe885124_s5.jpg' ]);
		$p10515471->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/grasala-chair-gray__1150158_pe884391_s5.jpg' ]);


		$p70308685 = Product::create([
			'name' => 'ODGER Swivel chair, white/beige',
			'price' => 189.99,
			'model_path' => '/models/70308685_PS01_S01_NV01_RQP3_3.0_528477d192584923aadf2b69d08c21c6.glb',
			'is_stackable' => 0,
			'description' => 'Simple design with good comfort. The bowl-shaped seat and rounded shape of the backrest make ODGER swivel chair comfy. Adjustable height and swivel allows you to find a sitting position that suits you.',
			'source' => 'https://www.ikea.com/us/en/p/odger-swivel-chair-white-beige-70308685/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0734069_pe739278_s5.jpg',
			'category_id' => 11,
		]);

		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0734069_pe739278_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0781159_ph164351_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0793297_ph164901_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0759512_pe750449_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__1067514_pe852752_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0759508_pe750450_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0985503_ph173302_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0759510_pe750452_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0759511_pe750453_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0781160_ph164350_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0802336_ph165572_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__1135202_ph186245_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__0974430_ph163181_s5.jpg' ]);
		$p70308685->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/odger-swivel-chair-white-beige__1071553_pe854968_s5.jpg' ]);


		$p80422765 = Product::create([
			'name' => 'UDMUND Chair, brown/Viarp beige/brown',
			'price' => 115.0,
			'model_path' => '/models/40422767_PS01_S01_NV01_RQP3_3.0_8a2adb76536246798a61852085ba6748.glb',
			'is_stackable' => 0,
			'description' => 'An upholstered chair packaged in a sleek, modern design that doesn’t compromise on comfort. Integrated cushion effect, soft edges and washable covers invite to relaxed meals as well as afternoon crafts.',
			'source' => 'https://www.ikea.com/us/en/p/udmund-chair-brown-viarp-beige-brown-80422765/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0928426_pe789857_s5.jpg',
			'category_id' => 11,
		]);

		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0928426_pe789857_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1000314_pe824222_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1053059_pe846658_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0974256_pe839902_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1053056_pe846655_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0928429_pe789864_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0928428_pe789859_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1053060_pe846654_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1053057_pe846656_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__1053058_pe846657_s5.jpg' ]);
		$p80422765->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/udmund-chair-brown-viarp-beige-brown__0980943_pe815226_s5.jpg' ]);


		$p40511080 = Product::create([
			'name' => 'NORRMANSÖ Chair, outdoor, indoor/outdoor beige/acacia',
			'price' => 75.0,
			'model_path' => '/models/40511080_PS01_S01_NV01_RQP3_3.0_3db2cce5c408429e952a1942459d8a66.glb',
			'is_stackable' => 0,
			'description' => 'Lightweight, yet sturdy dining chair in a farmhouse style. Here you sit comfy while enjoying food and socializing outdoors. Made of steel with a seat in durable wood – goes perfectly with NORRMANSÖ table.',
			'source' => 'https://www.ikea.com/us/en/p/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia-40511080/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077696_pe856975_s5.jpg',
			'category_id' => 11,
		]);

		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077696_pe856975_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1102644_ph183662_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1102643_ph183659_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077693_pe856978_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077691_pe856973_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077695_pe856977_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1102641_ph184494_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1102648_ph183660_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1084331_pe859610_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1079278_pe857482_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1078910_pe857322_s5.jpg' ]);
		$p40511080->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/norrmansoe-chair-outdoor-indoor-outdoor-beige-acacia__1077694_pe856976_s5.jpg' ]);


		$p00246078 = Product::create([
			'name' => 'JANINGE Chair, white',
			'price' => 85.0,
			'model_path' => '/models/00246078_PS01_S01_NV01_RQP3_3.0_959bc9a4cf8f4d1d97222cb7f9c0510d.glb',
			'is_stackable' => 0,
			'description' => 'Challenged to solve the equation of combining design, function and quality in one chair, our designers came up with JANINGE chair. Durable enough for restaurant use – with a design you want to take home.',
			'source' => 'https://www.ikea.com/us/en/p/janinge-chair-white-00246078/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0728156_pe736116_s5.jpg',
			'category_id' => 11,
		]);

		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0728156_pe736116_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0679556_ph155277_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0872448_pe653415_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0326530_ph121549_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__1053308_pe846864_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0949313_pe799631_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0870707_pe590612_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__1053305_pe846895_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0326531_ph121447_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0708274_ph152266_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__1053306_pe846896_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0372002_ph124285_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0872431_pe595986_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__1053307_pe846897_s5.jpg' ]);
		$p00246078->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/janinge-chair-white__0369188_ph124299_s5.jpg' ]);


		$p70521134 = Product::create([
			'name' => 'DANDERYD Chair, white/Vissle gray',
			'price' => 115.0,
			'model_path' => '/models/40520862_PS01_S01_NV01_RQP3_3.0_16dd1e6c3fa44ed6ba3c566ddbcdda0a.glb',
			'is_stackable' => 0,
			'description' => 'An upholstered chair for long and comfy sit-downs. A traditional look crafted with sturdy, softly rounded tubular steel legs. Washable covers for long-lasting beauty and less stress over occasional spills.',
			'source' => 'https://www.ikea.com/us/en/p/danderyd-chair-white-vissle-gray-70521134/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1114235_pe871692_s5.jpg',
			'category_id' => 11,
		]);

		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1114235_pe871692_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1223374_pe914620_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1114234_pe871693_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1118995_pe873278_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1114233_pe871694_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1137653_pe879656_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1160114_ph186599_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1117955_pe872850_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1114232_pe871691_s5.jpg' ]);
		$p70521134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/danderyd-chair-white-vissle-gray__1160052_ph186591_s5.jpg' ]);


		$p90263902 = Product::create([
			'name' => 'IVAR Chair, pine',
			'price' => 40.0,
			'model_path' => '/models/90263902_PS01_S01_NV01_RQP3_3.0_46fea0c8b6c149c7a40105e82213ef8c.glb',
			'is_stackable' => 0,
			'description' => 'Solid wood is a durable natural material which can be sanded and surface treated when required.',
			'source' => 'https://www.ikea.com/us/en/p/ivar-chair-pine-90263902/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0728155_pe736115_s5.jpg',
			'category_id' => 11,
		]);

		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0728155_pe736115_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0745834_ph145509_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0745829_ph155580_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__1053300_pe846890_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0383085_ph074181_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__1053298_pe846888_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0872451_pe590608_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__1053299_pe846889_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0745833_ph146381_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0383084_pe292394_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0949579_pe799870_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__1053297_pe846887_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0383089_pe331138_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0745830_ph156970_s5.jpg' ]);
		$p90263902->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/ivar-chair-pine__0437150_pe590696_s5.jpg' ]);


		$p89481454 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light green/Sefast black',
			'price' => 75.0,
			'model_path' => '/models/89481454-rendera_f318e70b444248dcbdacc45a2548b4a4.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-green-sefast-black-s89481454/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1106889_pe868849_s5.jpg',
			'category_id' => 11,
		]);

		$p89481454->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1106889_pe868849_s5.jpg' ]);
		$p89481454->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1111721_pe870898_s5.jpg' ]);
		$p89481454->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1119153_pe873334_s5.jpg' ]);
		$p89481454->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1106888_pe868850_s5.jpg' ]);
		$p89481454->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-green-sefast-black__1106887_pe868848_s5.jpg' ]);

		$vc59481417->products()->attach($p89481454->id);

		$p89481519 = Product::create([
			'name' => 'KARLPETTER Chair, Gunnared light blue/Sefast black',
			'price' => 75.0,
			'model_path' => '/models/89481519-rendera_2b51cc22ec7a48cb866b6ff1659c4392.glb',
			'is_stackable' => 0,
			'description' => 'This upholstered chair provides a cozy layer of comfort while working, crafting or dining. Choose your favorite color to give your room a personal look.',
			'source' => 'https://www.ikea.com/us/en/p/karlpetter-chair-gunnared-light-blue-sefast-black-s89481519/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1106901_pe868862_s5.jpg',
			'category_id' => 11,
		]);

		$p89481519->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1106901_pe868862_s5.jpg' ]);
		$p89481519->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1106900_pe868863_s5.jpg' ]);
		$p89481519->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1111724_pe870901_s5.jpg' ]);
		$p89481519->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1119153_pe873334_s5.jpg' ]);
		$p89481519->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/karlpetter-chair-gunnared-light-blue-sefast-black__1106899_pe868861_s5.jpg' ]);

		$vc59481417->products()->attach($p89481519->id);

		$vc30486156 = VariationCollection::create();

		$p80530623 = Product::create([
			'name' => 'TEODORES Chair, black',
			'price' => 45.0,
			'model_path' => '/models/20530621_PS01_S01_NV01_RQP3_3.0_89402b4cd40c404692b333af8738bc65.glb',
			'is_stackable' => 0,
			'description' => 'A comfy chair that’s sturdy, yet lightweight and stackable too. An easy match with different tables and styles and eager to please, whether it’s in the dining room, in the entrance or by your bed.',
			'source' => 'https://www.ikea.com/us/en/p/teodores-chair-black-80530623/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__1114240_pe871696_s5.jpg',
			'category_id' => 11,
		]);

		$p80530623->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__1114240_pe871696_s5.jpg' ]);
		$p80530623->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__1114237_pe871695_s5.jpg' ]);
		$p80530623->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__0949552_pe799848_s5.jpg' ]);
		$p80530623->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__1114239_pe871697_s5.jpg' ]);
		$p80530623->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-black__1114238_pe871698_s5.jpg' ]);

		$p50530629 = Product::create([
			'name' => 'TEODORES Chair, blue',
			'price' => 45.0,
			'model_path' => '/models/90530627_PS01_S01_NV01_RQP3_3.0_5dda401e03924a22acd8f39f27262e2c.glb',
			'is_stackable' => 0,
			'description' => 'A comfy chair that’s sturdy, yet lightweight and stackable too. An easy match with different tables and styles and eager to please, whether it’s in the dining room, in the entrance or by your bed.',
			'source' => 'https://www.ikea.com/us/en/p/teodores-chair-blue-50530629/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-blue__1114279_pe871735_s5.jpg',
			'category_id' => 11,
		]);

		$p50530629->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-blue__1114279_pe871735_s5.jpg' ]);
		$p50530629->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-blue__1114278_pe871736_s5.jpg' ]);
		$p50530629->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-blue__1114277_pe871737_s5.jpg' ]);
		$p50530629->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-blue__1114276_pe871734_s5.jpg' ]);

		$p60530619 = Product::create([
			'name' => 'TEODORES Chair, green',
			'price' => 45.0,
			'model_path' => '/models/00530617_PS01_S01_NV01_RQP3_3.0_4cf1d3ec39fe4ef59d547103d8af7cbe.glb',
			'is_stackable' => 0,
			'description' => 'A comfy chair that’s sturdy, yet lightweight and stackable too. An easy match with different tables and styles and eager to please, whether it’s in the dining room, in the entrance or by your bed.',
			'source' => 'https://www.ikea.com/us/en/p/teodores-chair-green-60530619/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-green__1114283_pe871739_s5.jpg',
			'category_id' => 11,
		]);

		$p60530619->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-green__1114283_pe871739_s5.jpg' ]);
		$p60530619->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-green__1114281_pe871741_s5.jpg' ]);
		$p60530619->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-green__1114280_pe871738_s5.jpg' ]);
		$p60530619->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/teodores-chair-green__1114282_pe871740_s5.jpg' ]);

		$vc30486156->products()->attach($p80530623->id);
		$vc30486156->products()->attach($p50530629->id);
		$vc30486156->products()->attach($p60530619->id);

        //Sofa
        $vc20488820 = VariationCollection::create();

		$p20488820 = Product::create([
			'name' => 'GLOSTAD Loveseat, Knisa medium blue',
			'price' => 149.0,
			'model_path' => '/models/10465824_PS01_S01_NV01_RQP3_3.0_7b16378c38504f218b55f18d24edaec8.glb',
			'is_stackable' => 0,
			'description' => 'It should be easy to get a sofa, and GLOSTAD sofa is easy to buy, bring home, assemble, and live with. So you can enjoy more time and space to hang out with friends and family and do other important things.',
			'source' => 'https://www.ikea.com/us/en/p/glostad-loveseat-knisa-medium-blue-20488820/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0950900_pe800740_s5.jpg',
			'category_id' => 1,
		]);

		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0950900_pe800740_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0987358_pe817503_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0950901_pe800741_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0950903_pe800739_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__1246750_pe922288_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0983590_pe816016_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__1059524_ph179219_s5.jpg' ]);
		$p20488820->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-medium-blue__0987359_pe817504_s5.jpg' ]);

		$p70489011 = Product::create([
			'name' => 'GLOSTAD Loveseat, Knisa dark gray',
			'price' => 149.0,
			'model_path' => '/models/50489012_PS01_S01_NV01_RQP3_3.0_1e3207a75b0947df8440008c9863f500.glb',
			'is_stackable' => 0,
			'description' => 'It should be easy to get a sofa, and GLOSTAD sofa is easy to buy, bring home, assemble, and live with. So you can enjoy more time and space to hang out with friends and family and do other important things.',
			'source' => 'https://www.ikea.com/us/en/p/glostad-loveseat-knisa-dark-gray-70489011/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0950864_pe800736_s5.jpg',
			'category_id' => 1,
		]);

		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0950864_pe800736_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0987395_pe817517_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0987398_pe817518_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0950899_pe800743_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__1059523_ph180677_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0987399_pe817519_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0983590_pe816016_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0987394_pe817516_s5.jpg' ]);
		$p70489011->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/glostad-loveseat-knisa-dark-gray__0987393_pe817515_s5.jpg' ]);

		$vc20488820->products()->attach($p20488820->id);
		$vc20488820->products()->attach($p70489011->id);

		$vc20432084 = VariationCollection::create();

		$p40431719 = Product::create([
			'name' => 'FRIHETEN Sleeper sofa, Hyllie beige',
			'price' => 849.0,
			'model_path' => '/models/00431716_PS01_S01_NV01_RQP3_3.0_ab2277a882e2406d8751d822c0a6b39f.glb',
			'is_stackable' => 0,
			'description' => 'You can quickly transform this sofa into a spacious bed. And the generous storage space for bed linens under the seat makes things even easier. A perfect place to sleep for you or your overnight guests.',
			'source' => 'https://www.ikea.com/us/en/p/friheten-sleeper-sofa-hyllie-beige-40431719/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690274_pe723194_s5.jpg',
			'category_id' => 1,
		]);

		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690274_pe723194_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690272_pe723195_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690273_pe723196_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690269_pe723192_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__1184607_ph172118_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0787711_pe763391_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0982624_ph172177_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690271_pe723197_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__1089693_pe861659_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0733168_pe738879_s5.jpg' ]);
		$p40431719->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-beige__0690270_pe723193_s5.jpg' ]);

		$p90341151 = Product::create([
			'name' => 'FRIHETEN Sleeper sofa, Skiftebo dark gray',
			'price' => 749.0,
			'model_path' => '/models/G-50341148-377603711cd800ac04f122c8e9f0f7316d075c86_1b56da158d6f426299a01dcf21ddafc3.glb',
			'is_stackable' => 0,
			'description' => 'After a good night’s sleep, you can effortlessly convert your bedroom or guest room into a living room again. The built-in storage is easy to access and spacious enough to store bedding, books and PJs.',
			'source' => 'https://www.ikea.com/us/en/p/friheten-sleeper-sofa-skiftebo-dark-gray-90341151/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0525504_pe644868_s5.jpg',
			'category_id' => 1,
		]);

		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0525504_pe644868_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0325780_pe523203_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0829142_pe644658_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0829148_pe644660_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0829146_pe644659_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0739077_ph143856_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0733168_pe738879_s5.jpg' ]);
		$p90341151->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-dark-gray__0829149_pe644867_s5.jpg' ]);

		$p40431564 = Product::create([
			'name' => 'FRIHETEN Sleeper sofa, Skiftebo blue',
			'price' => 749.0,
			'model_path' => '/models/G-60431563-286128a79bf7a7dd45c326866d91363d5a2cb089_0d005be4ffc2404dae0bbb8a5b16b775.glb',
			'is_stackable' => 0,
			'description' => 'You can quickly transform this sofa into a spacious bed. And the generous storage space for bed linens under the seat makes things even easier. A perfect place to sleep for you or your overnight guests.',
			'source' => 'https://www.ikea.com/us/en/p/friheten-sleeper-sofa-skiftebo-blue-40431564/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690280_pe723200_s5.jpg',
			'category_id' => 1,
		]);

		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690280_pe723200_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690277_pe723203_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690275_pe723198_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690278_pe723201_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0787716_pe763393_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690279_pe723202_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__1089875_pe861721_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0690276_pe723199_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0733168_pe738879_s5.jpg' ]);
		$p40431564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-skiftebo-blue__0779118_ph163073_s5.jpg' ]);

		$p20432084 = Product::create([
			'name' => 'FRIHETEN Sleeper sofa, Hyllie dark gray',
			'price' => 849.0,
			'model_path' => '/models/80432081_PS01_S01_NV01_RQP3_3.0_a6ad1568cdd745498ed061bf923180c0.glb',
			'is_stackable' => 0,
			'description' => 'You can quickly transform this sofa into a spacious bed. And the generous storage space for bed linens under the seat makes things even easier. A perfect place to sleep for you or your overnight guests.',
			'source' => 'https://www.ikea.com/us/en/p/friheten-sleeper-sofa-hyllie-dark-gray-20432084/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690268_pe723188_s5.jpg',
			'category_id' => 1,
		]);

		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690268_pe723188_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0733168_pe738879_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690265_pe723191_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690264_pe723187_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690266_pe723189_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0787712_pe763392_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690267_pe723190_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__1089723_pe861677_s5.jpg' ]);
		$p20432084->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/friheten-sleeper-sofa-hyllie-dark-gray__0690263_pe723186_s5.jpg' ]);

		$vc20432084->products()->attach($p40431719->id);
		$vc20432084->products()->attach($p90341151->id);
		$vc20432084->products()->attach($p40431564->id);
		$vc20432084->products()->attach($p20432084->id);

		$vcs09318320 = VariationCollection::create();

		$ps19416508 = Product::create([
			'name' => 'MORABO Sofa, Djuparp dark blue/wood',
			'price' => 799.0,
			'model_path' => '/models/G-19416508-a73bbb05ddac0e536d65f123b93248535cab7c69_0289a6c920024a5592ede1fa8ea5901a.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sofa-djuparp-dark-blue-wood-s19416508/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-wood__0990602_pe819086_s5.jpg',
			'category_id' => 1,
		]);

		$ps19416508->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-wood__0990602_pe819086_s5.jpg' ]);
		$ps19416508->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-wood__0990489_pe819000_s5.jpg' ]);
		$ps19416508->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-wood__0990603_pe819087_s5.jpg' ]);
		$ps19416508->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-wood__0815815_pe773045_s5.jpg' ]);

		$ps29318338 = Product::create([
			'name' => 'MORABO Sofa, Gunnared light green/metal',
			'price' => 699.0,
			'model_path' => '/models/G-49270321-c601dc9479c8979079cc99e26a59b3f916310cf7-simple_d8f016bb7b6ab585a03151e76aec44ad.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sofa-gunnared-light-green-metal-s29318338/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0602120_pe680189_s5.jpg',
			'category_id' => 1,
		]);

		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0602120_pe680189_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0712952_pe729157_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0813417_ph166261_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0815815_pe773045_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0825433_pe680190_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0825393_pe711003_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0825382_pe680172_s5.jpg' ]);
		$ps29318338->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-gunnared-light-green-metal__0815941_pe773128_s5.jpg' ]);

		$ps39416507 = Product::create([
			'name' => 'MORABO Sofa, Djuparp dark blue/metal',
			'price' => 799.0,
			'model_path' => '/models/G-39416507-74911f2765a77ddcd92fe42d3724aebded06c2e8_1d983631981d45a284967fdfa2ab0ca9.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sofa-djuparp-dark-blue-metal-s39416507/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-metal__0990600_pe819084_s5.jpg',
			'category_id' => 1,
		]);

		$ps39416507->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-metal__0990600_pe819084_s5.jpg' ]);
		$ps39416507->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-metal__0990601_pe819085_s5.jpg' ]);
		$ps39416507->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-metal__0990486_pe818997_s5.jpg' ]);
		$ps39416507->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-djuparp-dark-blue-metal__0815815_pe773045_s5.jpg' ]);

		$vcs09318320->products()->attach($ps19416508->id);
		$vcs09318320->products()->attach($ps29318338->id);
		$vcs09318320->products()->attach($ps39416507->id);

		$vcs09575885 = VariationCollection::create();

		$ps79416510 = Product::create([
			'name' => 'MORABO Sofa, with chaise/Djuparp dark blue/wood',
			'price' => 1199.0,
			'model_path' => '/models/G-79416510-b42e550383bab92f3f77d1acb27a36503f4f333a_3e2c1c2944b84de1a2311cbb8450cd24.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sofa-with-chaise-djuparp-dark-blue-wood-s79416510/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-with-chaise-djuparp-dark-blue-wood__0990555_pe819047_s5.jpg',
			'category_id' => 1,
		]);

		$ps79416510->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-with-chaise-djuparp-dark-blue-wood__0990555_pe819047_s5.jpg' ]);
		$ps79416510->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-with-chaise-djuparp-dark-blue-wood__0815816_pe773046_s5.jpg' ]);
		$ps79416510->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-with-chaise-djuparp-dark-blue-wood__0990557_pe819050_s5.jpg' ]);
		$ps79416510->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sofa-with-chaise-djuparp-dark-blue-wood__0990556_pe819049_s5.jpg' ]);

		$vcs09575885->products()->attach($ps79416510->id);

		$vcs29318319 = VariationCollection::create();

		$ps79416505 = Product::create([
			'name' => 'MORABO Loveseat, Djuparp dark blue/metal',
			'price' => 749.0,
			'model_path' => '/models/G-79416505-a1c676e80da3977d4f13411f48c5067b41f30288_1f00c8fc9a2740c0a45bd1791733c721.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-loveseat-djuparp-dark-blue-metal-s79416505/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-metal__0990485_pe818996_s5.jpg',
			'category_id' => 1,
		]);

		$ps79416505->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-metal__0990485_pe818996_s5.jpg' ]);
		$ps79416505->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-metal__0990486_pe818997_s5.jpg' ]);
		$ps79416505->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-metal__0815814_pe773044_s5.jpg' ]);
		$ps79416505->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-metal__0990487_pe819006_s5.jpg' ]);

		$ps59416506 = Product::create([
			'name' => 'MORABO Loveseat, Djuparp dark blue/wood',
			'price' => 749.0,
			'model_path' => '/models/G-59416506-35717b3bd9b446cd7b69a7764bfd55433c1e0aa5_27a36eae796045d3b61d3908ff1aea41.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-loveseat-djuparp-dark-blue-wood-s59416506/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-wood__0990488_pe818998_s5.jpg',
			'category_id' => 1,
		]);

		$ps59416506->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-wood__0990488_pe818998_s5.jpg' ]);
		$ps59416506->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-wood__0815814_pe773044_s5.jpg' ]);
		$ps59416506->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-wood__0990490_pe819007_s5.jpg' ]);
		$ps59416506->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-loveseat-djuparp-dark-blue-wood__0990489_pe819000_s5.jpg' ]);

		$vcs29318319->products()->attach($ps79416505->id);
		$vcs29318319->products()->attach($ps59416506->id);

		$vcs09554326 = VariationCollection::create();

		$ps39416512 = Product::create([
			'name' => 'MORABO Sectional, 4-seat, with chaise/Djuparp dark blue/wood',
			'price' => 1249.0,
			'model_path' => '/models/G-39416512-177ae8ffb859099dc6701d60c700dd1e262b66d8_3faa53dca72a41aeb5a8abe6be997871.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood-s39416512/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood__0990567_pe819061_s5.jpg',
			'category_id' => 1,
		]);

		$ps39416512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood__0990567_pe819061_s5.jpg' ]);
		$ps39416512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood__0815817_pe773043_s5.jpg' ]);
		$ps39416512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood__0990556_pe819049_s5.jpg' ]);
		$ps39416512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-wood__0990568_pe819066_s5.jpg' ]);

		$vcs09554326->products()->attach($ps39416512->id);

		$ps59416511 = Product::create([
			'name' => 'MORABO Sectional, 4-seat, with chaise/Djuparp dark blue/metal',
			'price' => 1249.0,
			'model_path' => '/models/G-59416511-84521115bd403baa941b01a7cee4fb5bb6dbd855_a23c11c439194e18be2c0a8af3b9dacc.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal-s59416511/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal__0990565_pe819059_s5.jpg',
			'category_id' => 1,
		]);

		$ps59416511->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal__0990565_pe819059_s5.jpg' ]);
		$ps59416511->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal__0990556_pe819049_s5.jpg' ]);
		$ps59416511->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal__0990566_pe819060_s5.jpg' ]);
		$ps59416511->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-4-seat-with-chaise-djuparp-dark-blue-metal__0815817_pe773043_s5.jpg' ]);


		$vcs19318310 = VariationCollection::create();

		$ps59416498 = Product::create([
			'name' => 'MORABO Sectional, 5-seat corner, Djuparp dark blue/wood',
			'price' => 1999.0,
			'model_path' => '/models/G-59416498-f5cca2e07538c0c0d9f3149c328464d43c55addb_00fb732c33f347e581ebc0cdf28e8cbf.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood-s59416498/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood__0990438_pe818951_s5.jpg',
			'category_id' => 1,
		]);

		$ps59416498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood__0990438_pe818951_s5.jpg' ]);
		$ps59416498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood__0990439_pe818956_s5.jpg' ]);
		$ps59416498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood__0815810_pe773040_s5.jpg' ]);
		$ps59416498->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-corner-djuparp-dark-blue-wood__0990489_pe819000_s5.jpg' ]);

		$vcs19318310->products()->attach($ps59416498->id);

		$vcs09442386 = VariationCollection::create();

		$ps49442389 = Product::create([
			'name' => 'MORABO 5-seat sofa with chaises, Gunnared light green/metal',
			'price' => 1399.0,
			'model_path' => '/models/G-49442389-73eda3e449880c98aae35affa73c3771db52c936_07b08b5b3d4c43a89a7301cde977df6c.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish, the chaise lounge and the tight fit give MORABO sofa a perfect balance of comfort, functionality and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal-s49442389/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0602498_pe680406_s5.jpg',
			'category_id' => 1,
		]);

		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0602498_pe680406_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0825450_pe680326_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0828935_pe680407_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0813418_ph166262_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0825382_pe680172_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0813417_ph166261_s5.jpg' ]);
		$ps49442389->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-5-seat-sofa-with-chaises-gunnared-light-green-metal__0825393_pe711003_s5.jpg' ]);

		$vcs09442386->products()->attach($ps49442389->id);

		$vcs09575871 = VariationCollection::create();

		$ps39416499 = Product::create([
			'name' => 'MORABO Sectional, 5-seat, with chaise/Djuparp dark blue/metal',
			'price' => 2449.0,
			'model_path' => '/models/G-39416499-7d013304d9885427bc9bf53323cd2c73fec05bff_20e579985e364c02bdf7e9f192e2e6e1.glb',
			'is_stackable' => 0,
			'description' => 'Warm and welcoming, neat and stylish. The supporting seat cushions, the cover’s soft finish and the tight fit gives this sofa a perfect balance between its comfort, functions and look.',
			'source' => 'https://www.ikea.com/us/en/p/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal-s39416499/',
			'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal__0990519_pe819018_s5.jpg',
			'category_id' => 1,
		]);

		$ps39416499->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal__0990519_pe819018_s5.jpg' ]);
		$ps39416499->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal__0815811_pe773041_s5.jpg' ]);
		$ps39416499->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal__0990522_pe819025_s5.jpg' ]);
		$ps39416499->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/morabo-sectional-5-seat-with-chaise-djuparp-dark-blue-metal__0990553_pe819045_s5.jpg' ]);

		$vcs09575871->products()->attach($ps39416499->id);

        // Wardrobes
        $vcs39128564 = VariationCollection::create();

        $ps39128564 = Product::create([
            'name' => 'PAX Wardrobe, white, 68 7/8x22 7/8x93 1/8 "',
            'price' => 700.0,
            'model_path' => '/models/G-39128564-9fe6a3535c0ae2494605cb9f57b850203c00ab37_2f21fce4794b49dcb48095b074ad5385.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-wardrobe-white-s39128564/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0383288_pe557277_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39128564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0383288_pe557277_s5.jpg' ]);
        $ps39128564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0855685_pe557278_s5.jpg' ]);
        $ps39128564->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0569773_ph144962_s5.jpg' ]);

        $ps69128567 = Product::create([
            'name' => 'PAX Wardrobe, white, 68 7/8x22 7/8x79 1/4 "',
            'price' => 620.0,
            'model_path' => '/models/G-69128567-b17f7053ac731ae1c49e4744d3e0d49f98f19a93_7b2de6b94e98443eaaf1cf4c83a2866d.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-wardrobe-white-s69128567/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0383291_pe557275_s5.jpg',
            'category_id' => 6,
        ]);

        $ps69128567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0383291_pe557275_s5.jpg' ]);
        $ps69128567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0915674_ph145071_s5.jpg' ]);
        $ps69128567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0855930_pe557276_s5.jpg' ]);

        $vcs39128564->products()->attach($ps39128564->id);
        $vcs39128564->products()->attach($ps69128567->id);

        $p60453767 = Product::create([
            'name' => 'RAKKESTAD Wardrobe with sliding doors, black-brown, 46 1/8x69 1/4 "',
            'price' => 249.99,
            'model_path' => '/models/60453767_PS01_S01_NV01_RQP3_4.0_1be5efebcfa84fe9b8a476ef283f3ed6.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the RAKKESTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/rakkestad-wardrobe-with-sliding-doors-black-brown-60453767/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0823992_pe776023_s5.jpg',
            'category_id' => 6,
        ]);

        $p60453767->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0823992_pe776023_s5.jpg' ]);
        $p60453767->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0998401_pe823024_s5.jpg' ]);
        $p60453767->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0946835_pe798278_s5.jpg' ]);
        $p60453767->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0823993_pe776024_s5.jpg' ]);
        $p60453767->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-sliding-doors-black-brown__0780376_pe760495_s5.jpg' ]);


        $vcs09501432 = VariationCollection::create();

        $ps19127297 = Product::create([
            'name' => 'PAX / BERGSBO Wardrobe, white/white, 59x23 5/8x93 1/8 "',
            'price' => 875.0,
            'model_path' => '/models/G-19127297-1bef51439d331f7376c76d15151933f1a12319f4_0b9a7256baea4a0cb74c6ff5def667da.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-bergsbo-wardrobe-white-white-s19127297/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0649561_pe705624_s5.jpg',
            'category_id' => 6,
        ]);

        $ps19127297->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0649561_pe705624_s5.jpg' ]);
        $ps19127297->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0377557_pe553980_s5.jpg' ]);
        $ps19127297->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0377041_pe553994_s5.jpg' ]);
        $ps19127297->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0758456_pe749753_s5.jpg' ]);

        $ps39025599 = Product::create([
            'name' => 'PAX / BERGSBO Wardrobe, white/white, 59x23 5/8x79 1/4 "',
            'price' => 770.0,
            'model_path' => '/models/G-39025599-ac13aa7aa6dea52abe1654a9fcbfbf66381b0f71_2061c7ce1b674088a2d6ceac9651aa88.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-bergsbo-wardrobe-white-white-s39025599/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0258313_pe402253_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39025599->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0258313_pe402253_s5.jpg' ]);
        $ps39025599->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0758456_pe749753_s5.jpg' ]);
        $ps39025599->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0258315_pe402310_s5.jpg' ]);
        $ps39025599->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0258314_pe402254_s5.jpg' ]);

        $vcs09501432->products()->attach($ps19127297->id);
        $vcs09501432->products()->attach($ps39025599->id);

        $vc10458833 = VariationCollection::create();

        $p20458837 = Product::create([
            'name' => 'IDANÄS Wardrobe, white, 47 5/8x83 1/8 "',
            'price' => 449.99,
            'model_path' => '/models/60458835_PS01_S01_NV01_RQP3_3.0_2df2254f7e0f4ac482f30f1b3d8654f1.glb',
            'is_stackable' => 0,
            'description' => 'Timeless design with modern functionality. IDANÄS wardrobe has bifolding doors to save floor space and an adjustable shelf to help customize your storage. A wardrobe that is easy to love for many years.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-wardrobe-white-20458837/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0898873_pe782674_s5.jpg',
            'category_id' => 6,
        ]);

        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0898873_pe782674_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0931763_pe791240_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0951525_pe801266_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0939231_pe794472_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0931764_pe791241_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0939230_pe794475_s5.jpg' ]);
        $p20458837->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-wardrobe-white__0939210_pe794455_s5.jpg' ]);

        $vc10458833->products()->attach($p20458837->id);

        $vc60407271 = VariationCollection::create();

        $p60456916 = Product::create([
            'name' => 'HAUGA Wardrobe with sliding doors, white, 46 1/2x21 5/8x78 3/8 "',
            'price' => 299.99,
            'model_path' => '/models/60456916_PS01_S01_NV01_RQP3_4.0_45429413f2a14af3b9650e1ba186bdaa.glb',
            'is_stackable' => 0,
            'description' => 'Use throughout the home, on its own or with other furniture in the HAUGA series. Sliding doors give you the space you need. Do you fold or hang? No need to choose, this wardrobe offers both possibilities.',
            'source' => 'https://www.ikea.com/us/en/p/hauga-wardrobe-with-sliding-doors-white-60456916/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0898797_pe782657_s5.jpg',
            'category_id' => 6,
        ]);

        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0898797_pe782657_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0950056_pe800134_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0939485_pe794580_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0931943_pe791283_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0939516_pe794596_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0948172_pe798892_s5.jpg' ]);
        $p60456916->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-white__0931942_pe791324_s5.jpg' ]);

        $p60407271 = Product::create([
            'name' => 'HAUGA Wardrobe with sliding doors, gray, 46 1/2x21 5/8x78 3/8 "',
            'price' => 299.99,
            'model_path' => '/models/60407271_PS01_S01_NV01_RQP3_3.0_12574178d34b4878a8801b71c38ee325.glb',
            'is_stackable' => 0,
            'description' => 'Use throughout the home, on its own or with other furniture in the HAUGA series. Sliding doors give you the space you need. Do you fold or hang? No need to choose, this wardrobe offers both possibilities.',
            'source' => 'https://www.ikea.com/us/en/p/hauga-wardrobe-with-sliding-doors-gray-60407271/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0898795_pe782656_s5.jpg',
            'category_id' => 6,
        ]);

        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0898795_pe782656_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0950055_pe800135_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0948172_pe798892_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0931938_pe791322_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0931939_pe791323_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0939514_pe794598_s5.jpg' ]);
        $p60407271->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/hauga-wardrobe-with-sliding-doors-gray__0939484_pe794579_s5.jpg' ]);

        $vc60407271->products()->attach($p60456916->id);
        $vc60407271->products()->attach($p60407271->id);

        $vc20494265 = VariationCollection::create();

        $p30401341 = Product::create([
            'name' => 'SUNDVIK Wardrobe, white, 31 1/2x19 5/8x67 3/8 "',
            'price' => 279.99,
            'model_path' => '/models/10269696_PS01_S01_NV01_RQP3_3.0_1f6a3254ead342d6989f6fd67a4dcf8a.glb',
            'is_stackable' => 0,
            'description' => 'The style is timeless, the materials are durable and the details are made with care. The wardrobe is also deep enough for large hangers, so it can follow your child from the first onesie into adult fashions.',
            'source' => 'https://www.ikea.com/us/en/p/sundvik-wardrobe-white-30401341/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__0626568_pe692872_s5.jpg',
            'category_id' => 6,
        ]);

        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__0626568_pe692872_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__0334509_ph121595_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__0570630_ph145465_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__0917896_ph168402_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__1002181_pe824634_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__1194597_pe902000_s5.jpg' ]);
        $p30401341->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/sundvik-wardrobe-white__1002180_pe824635_s5.jpg' ]);

        $vc20494265->products()->attach($p30401341->id);

        $ps09331524 = Product::create([
            'name' => 'AURDAL Wardrobe combination, white, 68 1/2-94 1/2x15 3/4x87 "',
            'price' => 265.0,
            'model_path' => '/models/G-09331524-cb4fb08b5155f572d5f7e9e543d9301f0be9f980_0500bc85daa540d198a9dea009634161.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-white-s09331524/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825301_pe776274_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09331524->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825301_pe776274_s5.jpg' ]);
        $ps09331524->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0917322_pe785731_s5.jpg' ]);


        $p20483257 = Product::create([
            'name' => 'VIHALS Wardrobe with 2 doors, white, 41 3/8x22 1/2x78 3/4 "',
            'price' => 299.99,
            'model_path' => '/models/60483255_PS01_S01_NV01_RQP3_3.0_25d4a796aee247cd8f5c61c1383dc912.glb',
            'is_stackable' => 0,
            'description' => 'VIHALS storage series has a cohesive look that connects the rooms throughout your home. This spacious wardrobe has a full-length mirror that saves wall space and gives you a good view from top to toe.',
            'source' => 'https://www.ikea.com/us/en/p/vihals-wardrobe-with-2-doors-white-20483257/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1070907_pe854805_s5.jpg',
            'category_id' => 6,
        ]);

        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1070907_pe854805_s5.jpg' ]);
        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1051539_pe845591_s5.jpg' ]);
        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1048421_pe843726_s5.jpg' ]);
        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1048403_pe843715_s5.jpg' ]);
        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1048702_pe843862_s5.jpg' ]);
        $p20483257->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vihals-wardrobe-with-2-doors-white__1207607_pe908079_s5.jpg' ]);


        $vcs09429728 = VariationCollection::create();

        $ps69429730 = Product::create([
            'name' => 'PAX / GRIMO Wardrobe combination, white/white, 59x23 5/8x93 1/8 "',
            'price' => 680.0,
            'model_path' => '/models/G-69429730-97cfc3b01693f4108e244ff78c67a8807a12bced_6f294f0ddc504e93b74dd5e294c44cef.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-grimo-wardrobe-combination-white-white-s69429730/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1024715_pe833640_s5.jpg',
            'category_id' => 6,
        ]);

        $ps69429730->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1024715_pe833640_s5.jpg' ]);
        $ps69429730->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1219503_pe913450_s5.jpg' ]);
        $ps69429730->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1219504_pe913453_s5.jpg' ]);

        $ps09429728 = Product::create([
            'name' => 'PAX / GRIMO Wardrobe combination, white/white, 59x23 5/8x79 1/4 "',
            'price' => 575.0,
            'model_path' => '/models/G-09429728-19950d5e5b0484adc580ad1cb5d60ffd12ce2494_0280b83e7edd4d4cb17e03740115e3f6.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-grimo-wardrobe-combination-white-white-s09429728/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1024714_pe833639_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09429728->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1024714_pe833639_s5.jpg' ]);
        $ps09429728->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1219506_pe913451_s5.jpg' ]);
        $ps09429728->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__1219505_pe913452_s5.jpg' ]);

        $vcs09429728->products()->attach($ps69429730->id);
        $vcs09429728->products()->attach($ps09429728->id);

        $p00439468 = Product::create([
            'name' => 'NORDKISA Open wardrobe with sliding door, bamboo, 47 1/4x73 1/4 "',
            'price' => 399.99,
            'model_path' => '/models/00439468_PS01_S01_NV01_RQP3_3.0_7c2d40180295469f9e2bb10bd9179c09.glb',
            'is_stackable' => 0,
            'description' => 'This wardrobe is inspired by classic Scandinavian furniture design with clean lines and an airy expression. It works as storage for your clothes and belongings – and will be a statement piece in your home.',
            'source' => 'https://www.ikea.com/us/en/p/nordkisa-open-wardrobe-with-sliding-door-bamboo-00439468/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756084_pe748766_s5.jpg',
            'category_id' => 6,
        ]);

        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756084_pe748766_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813688_ph165568_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813678_ph165858_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813679_ph165859_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0789785_pe764174_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813677_ph165857_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756083_pe748765_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756113_pe748741_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756087_pe748768_s5.jpg' ]);
        $p00439468->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756110_pe748769_s5.jpg' ]);


        $p80331973 = Product::create([
            'name' => 'VUKU Wardrobe, white, 29 1/8x20 1/8x58 5/8 "',
            'price' => 12.99,
            'model_path' => '/models/80331973_PS01_S01_NV01_RQP3_3.0_293997e59ae84338ad39f0aef1377fac.glb',
            'is_stackable' => 0,
            'description' => 'Inspired by the ingenuity of tents, we worked with tent suppliers to develop this wardrobe. Great for seasonal clothes or when you need to bring your wardrobe with you. Roll it and bring it along.',
            'source' => 'https://www.ikea.com/us/en/p/vuku-wardrobe-white-80331973/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__0498088_pe629449_s5.jpg',
            'category_id' => 6,
        ]);

        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__0498088_pe629449_s5.jpg' ]);
        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__0858533_pe629472_s5.jpg' ]);
        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__0498108_pe629461_s5.jpg' ]);
        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__1289700_ph196296_s5.jpg' ]);
        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__0858519_pe629450_s5.jpg' ]);
        $p80331973->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/vuku-wardrobe-white__1085442_pe860107_s5.jpg' ]);


        $ps29331523 = Product::create([
            'name' => 'AURDAL Wardrobe combination, white, 74 3/4x15 3/4x87 "',
            'price' => 365.0,
            'model_path' => '/models/G-29331523-6b0520da635e6b9447f7024c6bc9d28186698810_edca6129335d414a87ed608d4f08e69b.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-white-s29331523/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825294_pe776272_s5.jpg',
            'category_id' => 6,
        ]);

        $ps29331523->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825294_pe776272_s5.jpg' ]);
        $ps29331523->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0917301_pe785724_s5.jpg' ]);


        $p80441764 = Product::create([
            'name' => 'KLEPPSTAD Open wardrobe, white, 15 1/2x69 1/4 "',
            'price' => 79.99,
            'model_path' => '/models/80441764_PS01_S01_NV01_RQP3_3.0_366646e8679a472bb52eec6e83bb7c1e.glb',
            'is_stackable' => 0,
            'description' => 'Small but filled with possibilities for storing your clothes, bags and other personal belongings. Easy to place wherever you need it, and handy since open storage puts everything within easy reach.',
            'source' => 'https://www.ikea.com/us/en/p/kleppstad-open-wardrobe-white-80441764/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__0733314_pe748786_s5.jpg',
            'category_id' => 6,
        ]);

        $p80441764->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__0733314_pe748786_s5.jpg' ]);
        $p80441764->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__0815005_ph166041_s5.jpg' ]);
        $p80441764->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__1290896_pe934786_s5.jpg' ]);
        $p80441764->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__0733317_pe748776_s5.jpg' ]);
        $p80441764->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-open-wardrobe-white__0733316_pe748775_s5.jpg' ]);


        $vcs49227870 = VariationCollection::create();

        $ps49227870 = Product::create([
            'name' => 'PAX Wardrobe, white, 59x22 7/8x93 1/8 "',
            'price' => 700.0,
            'model_path' => '/models/G-49227870-7e2bc17a7b013828c8b565101fe6f08f10c3d694_06be86dd40fd40a1b6796252881435d9.glb',
            'is_stackable' => 0,
            'description' => 'A wardrobe with a compartment for everything. For those who really love organizing each item, big or small, and still have a nice overview. Sorting on style or color is up to you.',
            'source' => 'https://www.ikea.com/us/en/p/pax-wardrobe-white-s49227870/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0563708_pe663960_s5.jpg',
            'category_id' => 6,
        ]);

        $ps49227870->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0563708_pe663960_s5.jpg' ]);
        $ps49227870->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0570077_ph144609_s5.jpg' ]);
        $ps49227870->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-wardrobe-white__0563709_pe663959_s5.jpg' ]);

        $vcs49227870->products()->attach($ps49227870->id);

        $vcs39218512 = VariationCollection::create();

        $ps99218509 = Product::create([
            'name' => 'PAX / GRIMO Corner wardrobe, white/white, 43 3/8/43 3/8x79 1/4 "',
            'price' => 525.0,
            'model_path' => '/models/G-99218509-70f2343b68bca3993636b4fd07d6249677f702f7_0387651a326a4ba990ffa65ca00bc805.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-grimo-corner-wardrobe-white-white-s99218509/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0626011_pe692559_s5.jpg',
            'category_id' => 6,
        ]);

        $ps99218509->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0626011_pe692559_s5.jpg' ]);
        $ps99218509->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0646436_pe704193_s5.jpg' ]);
        $ps99218509->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0534147_pe648958_s5.jpg' ]);
        $ps99218509->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0758195_pe749564_s5.jpg' ]);
        $ps99218509->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0534146_pe648959_s5.jpg' ]);

        $ps39218512 = Product::create([
            'name' => 'PAX / GRIMO Corner wardrobe, white/white, 43 3/8/43 3/8x93 1/8 "',
            'price' => 600.0,
            'model_path' => '/models/G-39218512-ea6b34f46b66af53666974fa1e9d11627c0ab388_adc5d5d9ab76419cad361052267470a7.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-grimo-corner-wardrobe-white-white-s39218512/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0626009_pe692558_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0626009_pe692558_s5.jpg' ]);
        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__1046556_pe843030_s5.jpg' ]);
        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0646436_pe704193_s5.jpg' ]);
        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0758195_pe749564_s5.jpg' ]);
        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__1049358_pe844113_s5.jpg' ]);
        $ps39218512->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-corner-wardrobe-white-white__0534150_pe648961_s5.jpg' ]);

        $vcs39218512->products()->attach($ps99218509->id);
        $vcs39218512->products()->attach($ps39218512->id);

        $ps89297130 = Product::create([
            'name' => 'JONAXEL Storage combination, white, 9 7/8x20 1/8x27 1/2 "',
            'price' => 29.99,
            'model_path' => '/models/G-89297130-290884989d1550e4bfc7825db308da6a17c84ea5_01e2b10ac69a44dd92fcbc7032649339.glb',
            'is_stackable' => 0,
            'description' => 'Difficult to keep things neat and tidy? JONAXEL storage solution lets you use the space in smarter ways. Find a suitable combination and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-storage-combination-white-s89297130/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703688_pe732250_s5.jpg',
            'category_id' => 6,
        ]);

        $ps89297130->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703688_pe732250_s5.jpg' ]);
        $ps89297130->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703686_pe732295_s5.jpg' ]);
        $ps89297130->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703687_pe732296_s5.jpg' ]);
        $ps89297130->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703684_pe732294_s5.jpg' ]);
        $ps89297130->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703685_pe732249_s5.jpg' ]);


        $ps79331525 = Product::create([
            'name' => 'AURDAL Wardrobe combination, white, 49 1/4x15 3/4x87 "',
            'price' => 385.0,
            'model_path' => '/models/G-79331525-886145d53952b5969115f2e0bf33aaa7724e8607_8f88c17c0551443b9a3b19839ef0b88d.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-white-s79331525/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825307_pe776278_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79331525->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825307_pe776278_s5.jpg' ]);
        $ps79331525->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825349_pe776301_s5.jpg' ]);
        $ps79331525->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__1330524_ph180207_s5.jpg' ]);
        $ps79331525->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0917241_pe785703_s5.jpg' ]);
        $ps79331525->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0915323_pe784717_s5.jpg' ]);


        $vcs09429733 = VariationCollection::create();

        $ps59429735 = Product::create([
            'name' => 'PAX / TYSSEDAL Wardrobe combination, white/white, 59x23 5/8x93 1/8 "',
            'price' => 860.0,
            'model_path' => '/models/G-59429735-877b1e98d49c11bd9ac1ae36e84264b908a6ce7f_42cbe5b99a7f44d1b82f140616cf5964.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-tyssedal-wardrobe-combination-white-white-s59429735/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1024717_pe833642_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59429735->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1024717_pe833642_s5.jpg' ]);
        $ps59429735->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1219516_pe913457_s5.jpg' ]);
        $ps59429735->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1219515_pe913454_s5.jpg' ]);

        $ps09429733 = Product::create([
            'name' => 'PAX / TYSSEDAL Wardrobe combination, white/white, 59x23 5/8x79 1/4 "',
            'price' => 755.0,
            'model_path' => '/models/G-09429733-909184366f99da0328e9bb5643bb102645a2bdde_543d706747924e59bdeeaf9c0211deea.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-tyssedal-wardrobe-combination-white-white-s09429733/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1024716_pe833644_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09429733->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1024716_pe833644_s5.jpg' ]);
        $ps09429733->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1219518_pe913455_s5.jpg' ]);
        $ps09429733->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-white__1219517_pe913456_s5.jpg' ]);

        $vcs09429733->products()->attach($ps59429735->id);
        $vcs09429733->products()->attach($ps09429733->id);

        $ps69331521 = Product::create([
            'name' => 'AURDAL Wardrobe combination, white, 68 1/2-94 1/2x15 3/4x87 "',
            'price' => 165.0,
            'model_path' => '/models/G-69331521-2e7154d13f80d4e48cadae028ae8b1d31a9aa222_98252d1a13504c58b685418011c657cb.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-white-s69331521/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825278_pe776262_s5.jpg',
            'category_id' => 6,
        ]);

        $ps69331521->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825278_pe776262_s5.jpg' ]);
        $ps69331521->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0917293_pe785717_s5.jpg' ]);
        $ps69331521->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__1237290_pe917898_s5.jpg' ]);
        $ps69331521->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0915354_pe784751_s5.jpg' ]);


        $p60530978 = Product::create([
            'name' => 'OMAR Shelving unit with clothes rail, galvanized, 36 1/4x19 5/8x79 1/8 "',
            'price' => 129.0,
            'model_path' => '/models/60530978_PS01_S01_NV01_RQP3_3.0_005ea059eca34bcdb03d9757a029d644.glb',
            'is_stackable' => 0,
            'description' => 'OMAR shelving unit is useful in many places. The clothes rail function is perfect in a hallway, bedroom or laundry room. Hang and fold your clothes, and add more storage from the same series if you like.',
            'source' => 'https://www.ikea.com/us/en/p/omar-shelving-unit-with-clothes-rail-galvanized-60530978/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1110902_pe870617_s5.jpg',
            'category_id' => 6,
        ]);

        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1110902_pe870617_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1152602_ph188165_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1115608_pe872160_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1146786_pe883112_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1110906_pe870620_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__0976251_pe813123_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1115705_pe872227_s5.jpg' ]);
        $p60530978->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/omar-shelving-unit-with-clothes-rail-galvanized__1165164_ph188060_s5.jpg' ]);


        $ps39304128 = Product::create([
            'name' => 'PAX / FLISBERGET Wardrobe, white/light beige, 78 3/4x23 5/8x93 1/8 "',
            'price' => 1155.0,
            'model_path' => '/models/G-39304128-b7ca339f6cab6eed0d8b6a0156c410e101b1b6a4_641f15dd9ffc4af797ea610c962f7c4a.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-flisberget-wardrobe-white-light-beige-s39304128/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0730832_pe737811_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0730832_pe737811_s5.jpg' ]);
        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0935513_ph170335_s5.jpg' ]);
        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0730831_pe737808_s5.jpg' ]);
        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0758545_pe749870_s5.jpg' ]);
        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__1187275_pe899152_s5.jpg' ]);
        $ps39304128->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-wardrobe-white-light-beige__0855821_pe667903_s5.jpg' ]);


        $vcs29324711 = VariationCollection::create();

        $ps59324700 = Product::create([
            'name' => 'PAX / GRIMO Wardrobe combination, white/white, 39 3/8x23 5/8x93 1/8 "',
            'price' => 815.0,
            'model_path' => '/models/G-59324700-aef1caabd022a86132545caeadeb780f4e92c722_0606f11441f3473da49a38d3b3d5196c.glb',
            'is_stackable' => 0,
            'description' => 'Your wardrobe needs to work with what you put in it. Here\'s a compact combination with both drawers for smaller organizing and baskets for all that needs a more airy storage.',
            'source' => 'https://www.ikea.com/us/en/p/pax-grimo-wardrobe-combination-white-white-s59324700/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__0780624_pe760134_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59324700->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__0780624_pe760134_s5.jpg' ]);
        $ps59324700->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__0780623_pe760130_s5.jpg' ]);
        $ps59324700->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__0780622_pe760129_s5.jpg' ]);
        $ps59324700->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-grimo-wardrobe-combination-white-white__0758195_pe749564_s5.jpg' ]);

        $vcs29324711->products()->attach($ps59324700->id);

        $p40394750 = Product::create([
            'name' => 'TYSSEDAL Wardrobe, white/mirror glass, 34 5/8x22 7/8x81 7/8 "',
            'price' => 449.99,
            'model_path' => '/models/00298128_PS01_S01_NV01_RQP3_3.0_6911f18f1c544d7a91d9d7c035fd5bd2.glb',
            'is_stackable' => 0,
            'description' => 'Light and neat with a handcrafted feeling. Hang a clothes hanger with tomorrow’s outfit on the groove along the top and enjoy a few more minutes of sleep in the morning. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/tyssedal-wardrobe-white-mirror-glass-40394750/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0626566_pe692870_s5.jpg',
            'category_id' => 6,
        ]);

        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0626566_pe692870_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0334446_pe524344_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0334447_pe524343_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__1085510_pe860124_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0382688_ph124249_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0382689_ph124250_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0334445_pe524342_s5.jpg' ]);
        $p40394750->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/tyssedal-wardrobe-white-mirror-glass__0467652_ph133672_s5.jpg' ]);


        $vc20458842 = VariationCollection::create();

        $p80458839 = Product::create([
            'name' => 'IDANÄS Open wardrobe, dark brown stained, 23 1/4x83 1/8 "',
            'price' => 299.99,
            'model_path' => '/models/80458839_PS01_S01_NV01_RQP3_3.0_11606e6f3e2b42789335a05842078cc7.glb',
            'is_stackable' => 0,
            'description' => 'IDANÄS series combines timeless design with smart functionality. The open wardrobe can be turned two ways and has an adjustable shelf so you can customize the storage. Ideal in a hallway or in your bedroom.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-open-wardrobe-dark-brown-stained-80458839/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0898867_pe782671_s5.jpg',
            'category_id' => 6,
        ]);

        $p80458839->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0898867_pe782671_s5.jpg' ]);
        $p80458839->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0931757_pe791234_s5.jpg' ]);
        $p80458839->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0939225_pe794470_s5.jpg' ]);
        $p80458839->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0963100_pe808298_s5.jpg' ]);
        $p80458839->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-dark-brown-stained__0931758_pe791235_s5.jpg' ]);

        $p20458842 = Product::create([
            'name' => 'IDANÄS Open wardrobe, white, 23 1/4x83 1/8 "',
            'price' => 249.99,
            'model_path' => '/models/20458842_PS01_S01_NV01_RQP3_3.0_3f04f4fb5a4a4f68bfb7a739ff6adc67.glb',
            'is_stackable' => 0,
            'description' => 'IDANÄS series combines timeless design with smart functionality. The open wardrobe can be turned two ways and has an adjustable shelf so you can customize the storage. Ideal in a hallway or in your bedroom.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-open-wardrobe-white-20458842/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0898869_pe782672_s5.jpg',
            'category_id' => 6,
        ]);

        $p20458842->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0898869_pe782672_s5.jpg' ]);
        $p20458842->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0963100_pe808298_s5.jpg' ]);
        $p20458842->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0939227_pe794476_s5.jpg' ]);
        $p20458842->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0931759_pe791236_s5.jpg' ]);
        $p20458842->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-open-wardrobe-white__0931760_pe791237_s5.jpg' ]);

        $vc20458842->products()->attach($p80458839->id);
        $vc20458842->products()->attach($p20458842->id);

        $ps09297657 = Product::create([
            'name' => 'JONAXEL Wardrobe combination, white, 39x20 1/8x68 1/8 "',
            'price' => 149.96,
            'model_path' => '/models/09297657_PS01_S01_NV01_ISP1_2.0_b32a81b8a47c4ba680545b8c70adfaba.glb',
            'is_stackable' => 0,
            'description' => 'It can be difficult to keep things neat and tidy. JONAXEL storage system lets you utilize the spaces you have in smarter ways. You can build a combination that fits exactly your needs and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-wardrobe-combination-white-s09297657/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703635_pe732230_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703635_pe732230_s5.jpg' ]);
        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0761350_pe751217_s5.jpg' ]);
        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__1240488_pe919384_s5.jpg' ]);
        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703634_pe732264_s5.jpg' ]);
        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0778880_ph163613_s5.jpg' ]);
        $ps09297657->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745111_pe743575_s5.jpg' ]);


        $vcs49429745 = VariationCollection::create();

        $ps99429743 = Product::create([
            'name' => 'PAX / FARDAL Wardrobe combination, white/high gloss white, 59x23 5/8x79 1/4 "',
            'price' => 785.0,
            'model_path' => '/models/G-99429743-c43bea26be81ea54d73e6e80cc73ca4d8cb19867_c3ab896e04714b3d9a6ac655451cda73.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-fardal-wardrobe-combination-white-high-gloss-white-s99429743/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-combination-white-high-gloss-white__1024695_pe833631_s5.jpg',
            'category_id' => 6,
        ]);

        $ps99429743->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-combination-white-high-gloss-white__1024695_pe833631_s5.jpg' ]);
        $ps99429743->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-combination-white-high-gloss-white__1016298_pe830301_s5.jpg' ]);
        $ps99429743->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-combination-white-high-gloss-white__1219032_pe913279_s5.jpg' ]);
        $ps99429743->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-combination-white-high-gloss-white__1219031_pe913280_s5.jpg' ]);

        $vcs49429745->products()->attach($ps99429743->id);

        $ps49331536 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 74 3/4x15 3/4x87 "',
            'price' => 365.0,
            'model_path' => '/models/G-49331536-607dc7b2130ec32aaded4488bc6bef0678e96e9d_67de680db4464a4ab11683202148a1f1.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s49331536/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825296_pe776271_s5.jpg',
            'category_id' => 6,
        ]);

        $ps49331536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825296_pe776271_s5.jpg' ]);
        $ps49331536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1268934_ph173534_s5.jpg' ]);
        $ps49331536->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0917302_pe785723_s5.jpg' ]);


        $ps79305098 = Product::create([
            'name' => 'JONAXEL Storage combination, white, 19 5/8x20 1/8x27 1/2 "',
            'price' => 49.99,
            'model_path' => '/models/G-79305098-2d6c200a073f85fe4265a5c59cf4e33daf575fdf_7c3e6838c2e44d5f879f7645bba094f7.glb',
            'is_stackable' => 0,
            'description' => 'Difficult to keep things neat and tidy? JONAXEL storage solution lets you use the space in smarter ways. Find a suitable combination and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-storage-combination-white-s79305098/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0736848_pe740768_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79305098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0736848_pe740768_s5.jpg' ]);
        $ps79305098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0736847_pe740767_s5.jpg' ]);
        $ps79305098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0745152_pe743610_s5.jpg' ]);
        $ps79305098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0745109_pe743561_s5.jpg' ]);
        $ps79305098->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__1239916_pe919175_s5.jpg' ]);


        $ps39127710 = Product::create([
            'name' => 'PAX / BERGSBO Wardrobe, white/white, 39 3/8x23 5/8x93 1/8 "',
            'price' => 450.0,
            'model_path' => '/models/G-39127710-b20ecc8aff55ec74f11c30209ca7c4ad455b5696_316e4db3c728462593381e16535a2fa3.glb',
            'is_stackable' => 0,
            'description' => 'This wardrobe combination is just as good looking on the outside as it is clever on the inside. Built to last years of outfits.',
            'source' => 'https://www.ikea.com/us/en/p/pax-bergsbo-wardrobe-white-white-s39127710/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0397148_pe562788_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39127710->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0397148_pe562788_s5.jpg' ]);
        $ps39127710->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0467514_ph132732_s5.jpg' ]);
        $ps39127710->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0378814_pe554687_s5.jpg' ]);
        $ps39127710->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-bergsbo-wardrobe-white-white__0393536_pe562956_s5.jpg' ]);


        $ps59158121 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 17 1/2x21 5/8x85 "',
            'price' => 270.0,
            'model_path' => '/models/G-59158121-bfe8f1f519ca02971f8af24512bfbcd69f70bb2b_021ae47efef44f6fa5fef5cb3e7898fc.glb',
            'is_stackable' => 0,
            'description' => 'ELVARLI storage system adapts to your space. The open solution with durable shelves creates an attractive display of your belongings. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s59158121/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0626594_pe692898_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59158121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0626594_pe692898_s5.jpg' ]);
        $ps59158121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856193_pe595866_s5.jpg' ]);
        $ps59158121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856189_pe595865_s5.jpg' ]);
        $ps59158121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855569_pe603429_s5.jpg' ]);
        $ps59158121->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855981_pe598783_s5.jpg' ]);


        $vcs09303502 = VariationCollection::create();

        $ps09303502 = Product::create([
            'name' => 'PAX / FARDAL Wardrobe, white/high-gloss/white, 59x23 5/8x79 1/4 "',
            'price' => 970.0,
            'model_path' => '/models/G-09303502-0aa35dd378bfae1a6741fadd6d54f469f98b76ab_3167dbe159584d4ab8235e9bc7ee8cd1.glb',
            'is_stackable' => 0,
            'description' => 'Keep it simple. Here\'s a basic solution to get you started, and space for more interiors if you want to upgrade.',
            'source' => 'https://www.ikea.com/us/en/p/pax-fardal-wardrobe-white-high-gloss-white-s09303502/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-white-high-gloss-white__0752892_pe747500_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09303502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-white-high-gloss-white__0752892_pe747500_s5.jpg' ]);
        $ps09303502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-white-high-gloss-white__0719048_pe731860_s5.jpg' ]);
        $ps09303502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-white-high-gloss-white__0258285_pe402237_s5.jpg' ]);
        $ps09303502->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-fardal-wardrobe-white-high-gloss-white__1016298_pe830301_s5.jpg' ]);

        $vcs09303502->products()->attach($ps09303502->id);

        $ps19297138 = Product::create([
            'name' => 'JONAXEL Storage combination, white, 19 5/8x20 1/8x41 "',
            'price' => 54.99,
            'model_path' => '/models/G-19297138-eb8248bf935c00f682307efdf2d8299b7bc35d81_b054dd50fbe54f34b72a668e1d893ead.glb',
            'is_stackable' => 0,
            'description' => 'Difficult to keep things neat and tidy? JONAXEL storage solution lets you use the space in smarter ways. Find a suitable combination and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-storage-combination-white-s19297138/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703637_pe732231_s5.jpg',
            'category_id' => 6,
        ]);

        $ps19297138->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703637_pe732231_s5.jpg' ]);
        $ps19297138->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__1239858_pe919145_s5.jpg' ]);
        $ps19297138->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703636_pe732265_s5.jpg' ]);


        $ps79305102 = Product::create([
            'name' => 'JONAXEL Wardrobe combination, white, 55 7/8-70 1/8x20 1/8x68 1/8 "',
            'price' => 209.96,
            'model_path' => '/models/G-79305102-b3e2411413fb1a3151f05f0d1e638fdf34b67ac7_3e78b95fd31d4e74b952bd4c552b01c4.glb',
            'is_stackable' => 0,
            'description' => 'It can be difficult to keep things neat and tidy. JONAXEL storage system lets you utilize the spaces you have in smarter ways. You can build a combination that fits exactly your needs and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-wardrobe-combination-white-s79305102/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0736844_pe740772_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79305102->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0736844_pe740772_s5.jpg' ]);
        $ps79305102->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745109_pe743561_s5.jpg' ]);
        $ps79305102->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0736843_pe740770_s5.jpg' ]);
        $ps79305102->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745108_pe743562_s5.jpg' ]);
        $ps79305102->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__1239856_pe919144_s5.jpg' ]);


        $ps09331538 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 49 1/4x15 3/4x87 "',
            'price' => 385.0,
            'model_path' => '/models/G-09331538-fd3c7de10a3c946ba2c88d4c6c7a3fa741622e3d_4860374e8ac940aba1a91dae0ad94dc2.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s09331538/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825309_pe776280_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09331538->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825309_pe776280_s5.jpg' ]);
        $ps09331538->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0917242_pe785702_s5.jpg' ]);
        $ps09331538->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825348_pe776298_s5.jpg' ]);
        $ps09331538->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0915324_pe784716_s5.jpg' ]);


        $ps09297134 = Product::create([
            'name' => 'JONAXEL Storage combination, white, 19 5/8x20 1/8x27 1/2 "',
            'price' => 39.99,
            'model_path' => '/models/G-09297134-d272938f36b68e716d33c124597d5372dff180d3_184a19073357410c835d8e0b8423ff92.glb',
            'is_stackable' => 0,
            'description' => 'Difficult to keep things neat and tidy? JONAXEL storage solution lets you use the space in smarter ways. Find a suitable combination and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-storage-combination-white-s09297134/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703631_pe732262_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09297134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703631_pe732262_s5.jpg' ]);
        $ps09297134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703630_pe732261_s5.jpg' ]);
        $ps09297134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703628_pe732259_s5.jpg' ]);
        $ps09297134->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703629_pe732260_s5.jpg' ]);


        $ps99331529 = Product::create([
            'name' => 'AURDAL Wardrobe combination, white, 118 7/8-132 7/8x15 3/4x87 "',
            'price' => 565.0,
            'model_path' => '/models/G-99331529-3089d74a53d24179649e58f8b0d7ec1f4c098437_4a6fb071a8bd4cd4b8f52fabda7839ea.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-white-s99331529/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825323_pe776286_s5.jpg',
            'category_id' => 6,
        ]);

        $ps99331529->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0825323_pe776286_s5.jpg' ]);
        $ps99331529->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__1237286_pe917897_s5.jpg' ]);
        $ps99331529->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-white__0913348_pe783491_s5.jpg' ]);


        $ps49297660 = Product::create([
            'name' => 'JONAXEL Wardrobe combination, white, 39x20 1/8x68 1/8 "',
            'price' => 149.96,
            'model_path' => '/models/G-49297660-1b1409ba79e1ec58c32b50ec0219f28d35a1f0b6_f26a88a5afff484b8ebc2af4db4ac6dd.glb',
            'is_stackable' => 0,
            'description' => 'It can be difficult to keep things neat and tidy. JONAXEL storage system lets you utilize the spaces you have in smarter ways. You can build a combination that fits exactly your needs and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-wardrobe-combination-white-s49297660/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703658_pe732278_s5.jpg',
            'category_id' => 6,
        ]);

        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703658_pe732278_s5.jpg' ]);
        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745109_pe743561_s5.jpg' ]);
        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703656_pe732276_s5.jpg' ]);
        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703657_pe732277_s5.jpg' ]);
        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0798098_ph160962_s5.jpg' ]);
        $ps49297660->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745111_pe743575_s5.jpg' ]);


        $ps29331537 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 68 1/2-94 1/2x15 3/4x87 "',
            'price' => 265.0,
            'model_path' => '/models/G-29331537-eab5640cb72d3b9bd43ad9afa027dd9f8c0b0c0b_bac0a03e319f41559e976e987737b3be.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s29331537/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825303_pe776276_s5.jpg',
            'category_id' => 6,
        ]);

        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825303_pe776276_s5.jpg' ]);
        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330946_ph171855_s5.jpg' ]);
        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0917323_pe785730_s5.jpg' ]);
        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330945_ph171851_s5.jpg' ]);
        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330529_ph171852_s5.jpg' ]);
        $ps29331537->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330527_ph179790_s5.jpg' ]);


        $ps79158144 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 49 1/8x21 5/8x85 "',
            'price' => 420.0,
            'model_path' => '/models/G-79158144-c00e1b70e538b1cd385991e997ecb7f881f76ef6_4383bd6c31994c61aa8eaa5072010bae.glb',
            'is_stackable' => 0,
            'description' => 'ELVARLI storage system adapts to your space. The open solution with durable shelves creates an attractive display of your belongings. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s79158144/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440443_pe592482_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440443_pe592482_s5.jpg' ]);
        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__1237321_pe917921_s5.jpg' ]);
        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855569_pe603429_s5.jpg' ]);
        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855632_pe595868_s5.jpg' ]);
        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856391_pe595867_s5.jpg' ]);
        $ps79158144->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855981_pe598783_s5.jpg' ]);


        $ps29158212 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 33 1/4x21 5/8x85 "',
            'price' => 240.0,
            'model_path' => '/models/G-29158212-cf9e97a1cbf4ce2562d9fea70453f083fa497ea6_6383edbef955403eaf384a7377937076.glb',
            'is_stackable' => 0,
            'description' => 'ELVARLI storage system adapts to your space. The open solution with durable shelves creates an attractive display of your belongings. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s29158212/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440394_pe592438_s5.jpg',
            'category_id' => 6,
        ]);

        $ps29158212->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440394_pe592438_s5.jpg' ]);
        $ps29158212->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855607_pe595843_s5.jpg' ]);
        $ps29158212->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855973_pe595841_s5.jpg' ]);
        $ps29158212->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855628_pe595840_s5.jpg' ]);
        $ps29158212->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855981_pe598783_s5.jpg' ]);


        $ps69157475 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 33 1/4x15 3/4x85 "',
            'price' => 250.0,
            'model_path' => '/models/G-69157475-07d026b9cab327fadd4068beb70f1569c46ec113_7a34d20f779949858b3fe32d94ecea12.glb',
            'is_stackable' => 0,
            'description' => 'ELVARLI storage system adapts to your space. The open solution with durable shelves creates an attractive display of your belongings. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s69157475/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440402_pe592444_s5.jpg',
            'category_id' => 6,
        ]);

        $ps69157475->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440402_pe592444_s5.jpg' ]);
        $ps69157475->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0497244_ph137948_s5.jpg' ]);
        $ps69157475->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855607_pe595843_s5.jpg' ]);
        $ps69157475->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855658_pe595951_s5.jpg' ]);
        $ps69157475->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855981_pe598783_s5.jpg' ]);


        $ps79393071 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 119 1/4x20 1/8x87 1/4-137 3/4 "',
            'price' => 870.0,
            'model_path' => '/models/G-79393071-4be60533e1103772323d554f989efcde5f53889a_00251b5cf803485086feb58daa31753c.glb',
            'is_stackable' => 0,
            'description' => 'Make your ELVARLI storage solution into a home for your books, clothes or a lovely display of decorative items. Shelves, clothes rails and height adjustable post will help you utilize your full space, from floor to ceiling.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s79393071/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0926903_pe789592_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0926903_pe789592_s5.jpg' ]);
        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855611_pe598788_s5.jpg' ]);
        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855603_pe595833_s5.jpg' ]);
        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__1265488_pe927710_s5.jpg' ]);
        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856655_pe603304_s5.jpg' ]);
        $ps79393071->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0926908_pe789591_s5.jpg' ]);


        $ps79395796 = Product::create([
            'name' => 'PAX / TYSSEDAL Wardrobe combination, white/mirror glass, 59x23 5/8x93 1/8 "',
            'price' => 1070.0,
            'model_path' => '/models/G-79395796-741843d1111070201347af43c0aa90abcee7d759_5b36f820caef42d180c4418812b87e98.glb',
            'is_stackable' => 0,
            'description' => 'A wardrobe fit for the one that loves folding! A lot of shelving space for most things that can be folded, rolled up or just does not fit in drawers.',
            'source' => 'https://www.ikea.com/us/en/p/pax-tyssedal-wardrobe-combination-white-mirror-glass-s79395796/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-mirror-glass__0935351_pe792739_s5.jpg',
            'category_id' => 6,
        ]);

        $ps79395796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-mirror-glass__0935351_pe792739_s5.jpg' ]);
        $ps79395796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-mirror-glass__0935383_pe792779_s5.jpg' ]);
        $ps79395796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-mirror-glass__0758197_pe749569_s5.jpg' ]);
        $ps79395796->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-tyssedal-wardrobe-combination-white-mirror-glass__0855741_pe730314_s5.jpg' ]);


        $ps89297663 = Product::create([
            'name' => 'JONAXEL Wardrobe combination, white, 68 1/8x20 1/8x68 1/8 "',
            'price' => 229.94,
            'model_path' => '/models/G-89297663-d6f04c9aa01c61e5e598a3edaa965232cd1af9fe_7be2706eaa264694964f0f4e2d1a6c7b.glb',
            'is_stackable' => 0,
            'description' => 'It can be difficult to keep things neat and tidy. JONAXEL storage system lets you utilize the spaces you have in smarter ways. You can build a combination that fits exactly your needs and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-wardrobe-combination-white-s89297663/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703695_pe732300_s5.jpg',
            'category_id' => 6,
        ]);

        $ps89297663->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703695_pe732300_s5.jpg' ]);
        $ps89297663->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0703694_pe732252_s5.jpg' ]);
        $ps89297663->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0778883_ph162779_s5.jpg' ]);


        $ps09306204 = Product::create([
            'name' => 'JONAXEL Wardrobe combination, white, 58 1/4x20 1/8x68 1/8 "',
            'price' => 224.94,
            'model_path' => '/models/G-09306204-a556d2fb6097312ebb7d3cee12f86745e6f99225_254bacc0a6b94430b556e141153294a1.glb',
            'is_stackable' => 0,
            'description' => 'It can be difficult to keep things neat and tidy. JONAXEL storage system lets you utilize the spaces you have in smarter ways. You can build a combination that fits exactly your needs and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-wardrobe-combination-white-s09306204/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745782_pe743798_s5.jpg',
            'category_id' => 6,
        ]);

        $ps09306204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__0745782_pe743798_s5.jpg' ]);
        $ps09306204->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-wardrobe-combination-white__1239862_pe919146_s5.jpg' ]);


        $ps39331532 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 118 7/8-132 7/8x15 3/4x87 "',
            'price' => 565.0,
            'model_path' => '/models/G-39331532-541d4b14d83487f1798c432c0f100e3f3edd41a4_1e07afe59cc94cecb6a3c39646ab2e7f.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s39331532/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825325_pe776288_s5.jpg',
            'category_id' => 6,
        ]);

        $ps39331532->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825325_pe776288_s5.jpg' ]);
        $ps39331532->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330533_ph168811_s5.jpg' ]);
        $ps39331532->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330534_ph168809_s5.jpg' ]);
        $ps39331532->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0913349_pe783492_s5.jpg' ]);
        $ps39331532->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1330535_ph168808_s5.jpg' ]);


        $ps99331534 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 68 1/2-94 1/2x15 3/4x87 "',
            'price' => 165.0,
            'model_path' => '/models/G-99331534-9cd9538d56840c510e9d2d97686a2d62a30bde45_700b593c80284fc78b298323f628d2af.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s99331534/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825280_pe776264_s5.jpg',
            'category_id' => 6,
        ]);

        $ps99331534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0825280_pe776264_s5.jpg' ]);
        $ps99331534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0917294_pe785716_s5.jpg' ]);
        $ps99331534->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0915355_pe784750_s5.jpg' ]);


        $ps59297438 = Product::create([
            'name' => 'JONAXEL Storage combination, white, 9 7/8x20 1/8x28 3/4 "',
            'price' => 34.99,
            'model_path' => '/models/G-59297438-c99f3cd95e0cb138ce85240cb48b9365434776e4_2f869f88847b4228b93e91022178d376.glb',
            'is_stackable' => 0,
            'description' => 'Difficult to keep things neat and tidy? JONAXEL storage solution lets you use the space in smarter ways. Find a suitable combination and use it almost anywhere, even in humid bathrooms and laundry rooms.',
            'source' => 'https://www.ikea.com/us/en/p/jonaxel-storage-combination-white-s59297438/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703664_pe732283_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59297438->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703664_pe732283_s5.jpg' ]);
        $ps59297438->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703663_pe732282_s5.jpg' ]);
        $ps59297438->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/jonaxel-storage-combination-white__0703662_pe732281_s5.jpg' ]);


        $ps29387567 = Product::create([
            'name' => 'ELVARLI Open storage combination, white, 69x20x87 1/4-137 3/4 "',
            'price' => 465.0,
            'model_path' => '/models/G-29387567-558f898d9aaba0cddace7a60d813b7fb754d71bf_3d08fd51834f4c97b9db76b1c3ed1c13.glb',
            'is_stackable' => 0,
            'description' => 'Make your ELVARLI storage solution into a home for your books, clothes or a lovely display of decorative items. Shelves, clothes rails and height adjustable post will help you utilize your full space, from floor to ceiling.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-open-storage-combination-white-s29387567/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__0898734_pe782606_s5.jpg',
            'category_id' => 6,
        ]);

        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__0898734_pe782606_s5.jpg' ]);
        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__1248121_pe923027_s5.jpg' ]);
        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__1093050_pe863167_s5.jpg' ]);
        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__1093049_pe863168_s5.jpg' ]);
        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__1237710_ph188418_s5.jpg' ]);
        $ps29387567->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-open-storage-combination-white__1218185_ph171568_s5.jpg' ]);


        $ps69331540 = Product::create([
            'name' => 'AURDAL Wardrobe combination, dark gray, 47-60x15 3/4x87 "',
            'price' => 155.0,
            'model_path' => '/models/G-69331540-696aa267ff256138d3d537a059fb9b9ac540a7c3_c66d250d8c00451eb1210f1364965520.glb',
            'is_stackable' => 0,
            'description' => 'Do you want to utilize the small and tricky places in your home? With AURDAL storage system you can customize a solution to fit all your storage needs for shoes and clothes.',
            'source' => 'https://www.ikea.com/us/en/p/aurdal-wardrobe-combination-dark-gray-s69331540/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0826607_pe776402_s5.jpg',
            'category_id' => 6,
        ]);

        $ps69331540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0826607_pe776402_s5.jpg' ]);
        $ps69331540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0826608_pe776401_s5.jpg' ]);
        $ps69331540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__1237282_pe917892_s5.jpg' ]);
        $ps69331540->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/aurdal-wardrobe-combination-dark-gray__0915374_pe784773_s5.jpg' ]);


        $ps59157541 = Product::create([
            'name' => 'ELVARLI Wardrobe combination, white, 68 7/8x20x87 1/4-137 3/4 "',
            'price' => 310.0,
            'model_path' => '/models/G-59157541-f705e03210c34e02666f7219ce8a8ddc90f2e7f2_aade06a48de444288c8c69d90365074b.glb',
            'is_stackable' => 0,
            'description' => 'Make your ELVARLI storage solution into a home for your books, clothes or a lovely display of decorative items. Shelves, clothes rails and height adjustable post will help you utilize your full space, from floor to ceiling.',
            'source' => 'https://www.ikea.com/us/en/p/elvarli-wardrobe-combination-white-s59157541/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440412_pe592453_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0440412_pe592453_s5.jpg' ]);
        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855611_pe598788_s5.jpg' ]);
        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0569700_ph143437_s5.jpg' ]);
        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856102_pe595936_s5.jpg' ]);
        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0855603_pe595833_s5.jpg' ]);
        $ps59157541->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/elvarli-wardrobe-combination-white__0856070_pe595933_s5.jpg' ]);


        $p00503299 = Product::create([
            'name' => 'GURSKEN Wardrobe with 2 doors, light beige, 23 3/8x21 5/8x73 1/8 "',
            'price' => 99.99,
            'model_path' => '/models/00503299_PS01_S01_NV01_RQP3_3.0_517d527605d4441f80d729dbc4a9e2a3.glb',
            'is_stackable' => 0,
            'description' => 'GURSKEN wardrobe has a simple, clean design – perfect for furnishing an apartment or guest room quickly and easily. A great match with the bedside table, chest of drawers and bed in the same series!',
            'source' => 'https://www.ikea.com/us/en/p/gursken-wardrobe-with-2-doors-light-beige-00503299/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0969439_pe810782_s5.jpg',
            'category_id' => 6,
        ]);

        $p00503299->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0969439_pe810782_s5.jpg' ]);
        $p00503299->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0969440_pe810784_s5.jpg' ]);
        $p00503299->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0969441_pe810787_s5.jpg' ]);
        $p00503299->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0992931_pe820349_s5.jpg' ]);
        $p00503299->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/gursken-wardrobe-with-2-doors-light-beige__0969442_pe810786_s5.jpg' ]);


        $p30439476 = Product::create([
            'name' => 'NORDKISA Open wardrobe with sliding door, bamboo, 47 1/4x48 3/8 "',
            'price' => 369.99,
            'model_path' => '/models/30439476_PS01_S01_NV01_RQP3_3.0_40b4a194e3e7464999c9995dfe36233d.glb',
            'is_stackable' => 0,
            'description' => 'This wardrobe is inspired by classic Scandinavian furniture design with clean lines and an airy expression. It works as storage for your clothes and belongings – and will be a statement piece in your home.',
            'source' => 'https://www.ikea.com/us/en/p/nordkisa-open-wardrobe-with-sliding-door-bamboo-30439476/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756080_pe748763_s5.jpg',
            'category_id' => 6,
        ]);

        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756080_pe748763_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756109_pe748737_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813676_ph165931_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813675_ph165835_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756079_pe748762_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0789784_pe764173_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0813674_ph165924_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756078_pe748761_s5.jpg' ]);
        $p30439476->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/nordkisa-open-wardrobe-with-sliding-door-bamboo__0756087_pe748768_s5.jpg' ]);


        $ps59221373 = Product::create([
            'name' => 'PAX / FLISBERGET Corner wardrobe, white/light beige, 63 1/8/34 5/8x93 1/8 "',
            'price' => 940.0,
            'model_path' => '/models/G-59221373-47d42661eee9628eab2f9cdcf1895cd7a894c43b_1f4dffc1a3864dbcb9c4a422e4f38daf.glb',
            'is_stackable' => 0,
            'description' => 'A wardrobe fit for the one that loves folding! A lot of shelving space for most things that can be folded, rolled up or just does not fit in drawers.',
            'source' => 'https://www.ikea.com/us/en/p/pax-flisberget-corner-wardrobe-white-light-beige-s59221373/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0625986_pe692549_s5.jpg',
            'category_id' => 6,
        ]);

        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0625986_pe692549_s5.jpg' ]);
        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0646425_pe704189_s5.jpg' ]);
        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0534110_pe648926_s5.jpg' ]);
        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0758545_pe749870_s5.jpg' ]);
        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__1187275_pe899152_s5.jpg' ]);
        $ps59221373->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/pax-flisberget-corner-wardrobe-white-light-beige__0938827_ph170615_s5.jpg' ]);


        $vc00576139 = VariationCollection::create();

        $p00576139 = Product::create([
            'name' => 'BRIMNES Wardrobe with 3 doors, black, 46x74 3/4 "',
            'price' => 199.99,
            'model_path' => '/models/00576139_PS01_S01_NV01_RQP3_3.0_7a6cbab6c5184f31aa4c0d6efb983fbd.glb',
            'is_stackable' => 0,
            'description' => 'Small spaces need smart storage. This wardrobe has a clothes rail for shirts and dresses, shelves for folded clothes, shoes and bags – and a mirror door too so you avoid needing to mount a separate mirror.',
            'source' => 'https://www.ikea.com/us/en/p/brimnes-wardrobe-with-3-doors-black-00576139/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1268962_pe928901_s5.jpg',
            'category_id' => 6,
        ]);

        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1268962_pe928901_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1268959_pe928898_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1246534_pe922175_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1268960_pe928899_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__1268961_pe928900_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__0428295_pe583463_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__0746972_pe744298_s5.jpg' ]);
        $p00576139->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-3-doors-black__0746971_pe744297_s5.jpg' ]);

        $vc00576139->products()->attach($p00576139->id);

        $vc10458828 = VariationCollection::create();

        $p30458827 = Product::create([
            'name' => 'IDANÄS Cabinet with bi-folding doors, white, 47 5/8x53 1/8 "',
            'price' => 299.99,
            'model_path' => '/models/30458827_PS01_S01_NV01_RQP3_3.0_0905e63d0a794e8e92861650d44b41d7.glb',
            'is_stackable' => 0,
            'description' => 'IDANÄS series combines timeless design with modern functionality. With its clever folding doors shut, the cabinet adds elegance to your home. Ideal for storing clothes, table cloths and other small items.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-cabinet-with-bi-folding-doors-white-30458827/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0898847_pe782661_s5.jpg',
            'category_id' => 6,
        ]);

        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0898847_pe782661_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__1241031_pe919631_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0931743_pe791220_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0965996_ph172618_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0939202_pe794447_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0945329_pe797616_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0931744_pe791221_s5.jpg' ]);
        $p30458827->images()->create([ 'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-cabinet-with-bi-folding-doors-white__0939203_pe794448_s5.jpg' ]);

        $vc10458828->products()->attach($p30458827->id);
    }
}
