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
            'specification_id' => '1',
            'category_id' => 1,
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0325432_pe517964_s5.jpg',
            'type' => 'MAIN IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__1116445_pe872501_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0750991_ph159256_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0813424_ph166295_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0836847_pe596292_s5.jpg',
            'type' => 'LIFESTYLE IMAGELIFESTYLE IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/strandmon-wing-chair-nordvalla-dark-gray__0836845_pe583755_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p1->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0963366_pe808498_s5.jpg',
            'type' => 'SPECIFICATIONS'
        ]);

        $p2 = Product::create([
            'name' => 'STRANDMON Wing chair, Kelinge beige',
            'price' => 250,
            'model_path' => '/models/10492813_PS01_S01_NV01_RQP3_3.0_509afbc0b52b4abc85e9a9d2e4847d82.glb',
            'is_stackable' => 0,
            'description' => 'Need a hug? STRANDMON wing chair has an embracing feel with a high back, round armrests, soft lines and inviting upholstery. A traditional look with modern comfort for many cosy moments.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-kelinge-beige-40492816/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950941_pe800821_s5.jpg',
            'specification_id' => '1',
            'category_id' => 1,
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950941_pe800821_s5.jpg',
            'type' => 'MAIN IMAGE'
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__1059566_ph179098_s5.jpg',
            'type' => 'LIFESTYLE',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950946_pe800823_s5.jpg',
            'type' => 'cLOSEUP',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950944_pe800824_s5.jpg',
            'type' => 'CLOSEUP'
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950945_pe800825_s5.jpg',
            'type' => 'CLOSEUP'
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0950943_pe800826_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p2->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-kelinge-beige__0963366_pe808498_s5.jpg',
            'type' => 'SPECIFICATIONS'
        ]);

        $p3 = Product::create([
            'name' => 'STRANDMON Wing chair, Skiftebo yellow',
            'price' => 229,
            'model_path' => '/models/90361894_PS01_S01_NV01_RQP3_3.0_1ce678483adc4a42af6ead5c5c21903a.glb',
            'is_stackable' => 0,
            'description' => 'Bringing new life to an old favourite. We first introduced this chair in the 1950’s. Some 60 years later we brought it back into the range with the same craftsmanship, comfort and appearance. Enjoy!',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-skiftebo-yellow-40361896/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325450_pe517970_s5.jpg',
            'specification_id' => '1',
            'category_id' => 1,
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325450_pe517970_s5.jpg',
            'type' => 'MAIN IMAGE',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0913860_ph145337_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__1184561_ph179968_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0813426_ph166290_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837286_pe596513_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0325452_pe517969_s5.jpg',
            'type' => 'CLOSEUP'
        ]);

        $p3->images()->create([
            'image_url' =>  'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837284_pe583756_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0837282_pe583706_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p3->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-skiftebo-yellow__0963366_pe808498_s5.jpg',
            'type' => 'SPECIFICATION',
        ]);

        $p4 = Product::create([
            'name' => 'STRANDMON Wing chair, Tallmyra dark green',
            'price' => 250,
            'model_path' => '/models/30359846_PS01_S01_NV01_RQP3_3.0_3ee75893faa24345b36b3950ec7ab88a.glb',
            'is_stackable' => 0,
            'description' => 'You can really loosen up and relax in comfort because the high back on this chair provides extra support for your neck.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-tallmyra-dark-green-30359846/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0531319_pe647267_s5.jpg',
            'specification_id' => '1',
            'category_id' => 1,
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0531319_pe647267_s5.jpg',
            'type' => 'MAIN IMAGE',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840456_pe647272_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0739101_ph155488_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0739102_ph152847_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840447_pe647271_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840434_pe647268_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840444_pe647270_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0840440_pe647269_s5.jpg',
            'type' => 'CLOSEUP',
        ]);

        $p4->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-tallmyra-dark-green__0963366_pe808498_s5.jpg',
            'type' => 'SPECIFICATIONS',
        ]);

        $p5 = Product::create([
            'name' => 'STRANDMON Wing chair, Vibberbo black/beige',
            'price' => 229,
            'model_path' => '/models/20456956_PS01_S01_NV01_RQP3_3.0_024a9a564a5a4f9383ee4ee67a61f61f.glb',
            'is_stackable' => 0,
            'description' => 'One of our old icons is now wearing a classy outfit. The cover with a classic houndstooth pattern enhance your personal sense of style at home. Comfort and quality since the 1950s.',
            'source' => 'https://www.ikea.com/gb/en/p/strandmon-wing-chair-vibberbo-black-beige-80456958/',
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761768_pe751434_s5.jpg',
            'specification_id' => '1',
            'category_id' => 1,
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761768_pe751434_s5.jpg',
            'type' => 'MAIN IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0930013_ph168645_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184555_ph186827_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0761769_pe751435_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0813433_ph166294_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184562_ph167261_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__1184563_ph167300_s5.jpg',
            'type' => 'LIFESTYLE IMAGE',
        ]);

        $p5->images()->create([
            'image_url' => 'https://www.ikea.com/gb/en/images/products/strandmon-wing-chair-vibberbo-black-beige__0963366_pe808498_s5.jpg',
            'type' => 'SPECIFICATIONS',
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
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57537_pe163119_s5.jpg',
            'specification_id' => '2',
            'category_id' => 2,
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__57537_pe163119_s5.jpg',
            'type' => ''
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0836233_pe601379_s5.jpg',
            'type' => ''
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0258008_pe401976_s5.jpg',
            'type' => ''
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__0664928_pe712923_s5.jpg',
            'type' => ''
        ]);

        $p6->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-black-brown__1083778_pe859098_s5.jpg',
            'type' => ''
        ]);

        $p7 = Product::create([
            'name' => 'LACK Coffee table, white',
            'price' => 49.99,
            'model_path' => '/models/80449901_PS01_S01_NV01_RQP3_3.0_0d7cf1ae2b6a4c7fb3cff503aab54cf6.glb',
            'is_stackable' => 1,
            'description' => 'This LACK table in white is easy to match with other furnishings. Thanks to the unique construction, it’s easy to assemble, lift and move around - and we can keep the prices down, so your spirits go up.',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0750651_pe746801_s5.jpg',
            'specification_id' => '2',
            'category_id' => 2,
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'type' => ''
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0837100_pe709586_s5.jpg',
            'type' => ''
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0918237_ph163104_s5.jpg',
            'type' => ''
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0411540_pe570465_s5.jpg',
            'type' => ''
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0664928_pe712923_s5.jpg',
            'type' => ''
        ]);

        $p7->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__1083778_pe859098_s5.jpg',
            'type' => ''
        ]);

        $p8 = Product::create([
            'name' => 'LACK Coffee table, white stained oak effect',
            'price' => 49.99,
            'model_path' => '/models/40431535_PS01_S01_NV01_RQP3_3.0_a0e1579241b248b5a3b5c679e393459a.glb',
            'is_stackable' => 1,
            'description' => 'LACK tables have a unique construction in paper that makes them light, easy to move and stable at the same time. To enhance your mood even more, we also keep the price down.',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'specification_id' => '2',
            'category_id' => 2,
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'type' => ''
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702214_pe724347_s5.jpg',
            'type' => ''
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702213_pe724351_s5.jpg',
            'type' => ''
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0664928_pe712923_s5.jpg',
            'type' => ''
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__1083778_pe859098_s5.jpg',
            'type' => ''
        ]);

        $vc2->products()->attach($p6->id);
        $vc2->products()->attach($p7->id);
        $vc2->products()->attach($p8->id);

        // $p9 = Product::create([
        //     'name' => '',
        //     'price' => 229,
        //     'model_path' => '',
        //     'is_stackable' => 0,
        //     'description' => '',
        //     'image_url' => '',
        //     'specification_id' => '3',
        //     'category_id' => 1,
        // ]);

        // $p9->images()->create([
        //     'image_url' => '',
        //     'type' => ''
        // ]);

        // $p10 = Product::create([
        //     'name' => '',
        //     'price' => 229,
        //     'model_path' => '',
        //     'is_stackable' => 0,
        //     'description' => '',
        //     'image_url' => '',
        //     'specification_id' => '3',
        //     'category_id' => 1,
        // ]);

        // $p10->images()->create([
        //     'image_url' => '',
        //     'type' => ''
        // ]);

    }
}
