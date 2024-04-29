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
            'source' => '',
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
            'source' => '',
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
            'source' => '',
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'specification_id' => '2',
            'category_id' => 2,
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white-stained-oak-effect__0708822_pe726753_s5.jpg',
            'type' => 'MAIN IMAGE'
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702214_pe724347_s5.jpg',
            'type' => 'LIFESTYLE IMAGE'
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0702213_pe724351_s5.jpg',
            'type' => 'CLOSEUP'
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__0664928_pe712923_s5.jpg',
            'type' => 'SPECIFICATIONS'
        ]);

        $p8->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/lack-coffee-table-white__1083778_pe859098_s5.jpg',
            'type' => ''
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
            'source' => '',
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__38296_pe130209_s5.jpg',
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__38296_pe130209_s5.jpg',
            'type' => 'MAIN IMAGE'
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0841137_pe600889_s5.jpg',
            'type' => ''
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0446408_pe596512_s5.jpg',
            'type' => ''
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0841133_pe585630_s5.jpg',
            'type' => ''
        ]);

        $p9->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/pello-armchair-holmby-natural__0939999_pe794756_s5.jpg',
            'type' => 'SPECIFICATIONS'
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
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0204749_pe359788_s5.jpg',
            'type' => ''
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0815338_pe772866_s5.jpg',
            'type' => ''
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837671_pe601048_s5.jpg',
            'type' => ''
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837670_pe596451_s5.jpg',
            'type' => ''
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0837666_pe585573_s5.jpg',
            'type' => ''
        ]);

        $p10->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-blue__0629853_pe694518_s5.jpg',
            'type' => ''
        ]);

        $p11 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo dark gray',
            'price' => 259,
            'model_path' => '/models/60494584_PS01_S01_NV01_RQP3_3.0_3a1af39d80884c409cfb4093fddda99c.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-dark-gray-90494587/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0983033_pe815899_s5.jpg',
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0983033_pe815899_s5.jpg',
            'type' => ''
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951659_pe801307_s5.jpg',
            'type' => ''
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951660_pe801308_s5.jpg',
            'type' => ''
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0951661_pe801305_s5.jpg',
            'type' => ''
        ]);

        $p11->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-dark-gray__0629853_pe694518_s5.jpg',
            'type' => ''
        ]);

        $p12 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo orange',
            'price' => 259,
            'model_path' => '/models/80262880_PS01_S01_NV01_RQP3_3.0_1fcd7d46a3c542a68b41e89835826c0c.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-orange-90262889/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0204751_pe359789_s5.jpg',
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0204751_pe359789_s5.jpg',
            'type' => ''
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836451_pe600874_s5.jpg',
            'type' => ''
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836450_pe596458_s5.jpg',
            'type' => ''
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0836447_pe585553_s5.jpg',
            'type' => ''
        ]);

        $p12->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-orange__0629853_pe694518_s5.jpg',
            'type' => ''
        ]);

        $p13 = Product::create([
            'name' => 'EKERÖ Armchair, Skiftebo yellow',
            'price' => 259,
            'model_path' => '/models/00262879_PS01_S01_NV01_RQP3_3.0_3e2b6ba581cc455887d02d36ce1dcea3.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-skiftebo-yellow-70262890/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0204753_pe359787_s5.jpg',
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0204753_pe359787_s5.jpg',
            'type' => ''
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__1116442_pe872500_s5.jpg',
            'type' => ''
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0836444_pe596409_s5.jpg',
            'type' => ''
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0836443_pe585554_s5.jpg',
            'type' => ''
        ]);

        $p13->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-skiftebo-yellow__0629853_pe694518_s5.jpg',
            'type' => ''
        ]);

        $p14 = Product::create([
            'name' => 'EKERÖ Armchair, Bomstad black',
            'price' => 299,
            'model_path' => '/models/70494588_PS01_S01_NV01_RQP3_3.0_64456dd3757f4477821a8d87918be518.glb',
            'is_stackable' => 0,
            'description' => 'Go for stylish dark tones or brighten up your home with colorful covers. EKERÖ armchair has a sleek, modern look with two side pieces that meet in the back – and lumbar support for added comfort!',
            'source' => 'https://www.ikea.com/us/en/p/ekeroe-armchair-bomstad-black-30494590/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951654_pe801302_s5.jpg',
            'specification_id' => '3',
            'category_id' => 1,
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951654_pe801302_s5.jpg',
            'type' => ''
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__1019350_ph144345_s5.jpg',
            'type' => ''
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951656_pe801304_s5.jpg',
            'type' => ''
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0951657_pe801309_s5.jpg',
            'type' => ''
        ]);

        $p14->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/ekeroe-armchair-bomstad-black__0629853_pe694518_s5.jpg',
            'type' => ''
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
            'specification_id' => '4',
            'category_id' => 3,
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0824154_pe776005_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0932440_ph170243_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0937802_pe793856_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0985867_pe816848_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0932441_ph170242_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0832032_pe777564_s5.jpg',
            'type' => ''
        ]);

        $p15->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-white-stained-oak-veneer__0832958_pe777903_s5.jpg',
            'type' => ''
        ]);

        $p16 = Product::create([
            'name' => 'FRÖSET Chair, black stained oak veneer',
            'price' => 124.99,
            'model_path' => '/models/40423559_PS01_S01_NV01_RQP3_3.0_8d46a8a71ffb46c4afa6b98659afc221.glb',
            'is_stackable' => 0,
            'description' => 'This easy chair makes us believe in love at first sight, with its clean Scandinavian lines and airy expression. Smart production minimizes environmental impact and price – and maximizes acessibility!',
            'source' => 'https://www.ikea.com/us/en/p/froeset-chair-black-stained-oak-veneer-40423559/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0824150_pe776003_s5.jpg',
            'specification_id' => '4',
            'category_id' => 3,
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0824150_pe776003_s5.jpg',
            'type' => ''
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0932440_ph170243_s5.jpg',
            'type' => ''
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0937800_pe793855_s5.jpg',
            'type' => ''
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0985892_pe816864_s5.jpg',
            'type' => ''
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0832028_pe777560_s5.jpg',
            'type' => ''
        ]);

        $p16->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-black-stained-oak-veneer__0832958_pe777903_s5.jpg',
            'type' => ''
        ]);

        $p17 = Product::create([
            'name' => 'FRÖSET Chair, red stained oak veneer',
            'price' => 124.99,
            'model_path' => '/models/20429604_PS01_S01_NV01_RQP3_3.0_514b7f952f0f41e2a97946061dccb566.glb',
            'is_stackable' => 0,
            'description' => 'This easy chair makes us believe in love at first sight, with its clean Scandinavian lines and airy expression. Smart production minimizes environmental impact and price – and maximizes acessibility!',
            'source' => 'https://www.ikea.com/us/en/p/froeset-chair-red-stained-oak-veneer-20429604/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832018_pe777555_s5.jpg',
            'specification_id' => '4',
            'category_id' => 3,
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832018_pe777555_s5.jpg',
            'type' => ''
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0932440_ph170243_s5.jpg',
            'type' => ''
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0937801_pe793857_s5.jpg',
            'type' => ''
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0987428_pe817525_s5.jpg',
            'type' => ''
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832029_pe777563_s5.jpg',
            'type' => ''
        ]);

        $p17->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/froeset-chair-red-stained-oak-veneer__0832958_pe777903_s5.jpg',
            'type' => ''
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
            'specification_id' => '5',
            'category_id' => 1,
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789918_pe764203_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0792176_pe764673_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789917_pe764202_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0805112_pe769444_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789916_pe764204_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789915_pe764201_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0789914_pe764200_s5.jpg',
            'type' => ''
        ]);

        $p18->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-bomstad-black__0796277_pe766322_s5.jpg',
            'type' => ''
        ]);

        $p19 = Product::create([
            'name' => 'GISTAD Recliner, Idekulla dark red',
            'price' => 369,
            'model_path' => '/models/40466389_PS01_S01_NV01_RQP3_4.0_06e2ab1524e3410691a7ccb2efd33d77.glb',
            'is_stackable' => 0,
            'description' => 'Pamper yourself with a moment of comfy me-time. With this neat recliner you can choose if you want to sit upright, lean back or lie down for a quick nap – and put two together for some we-time!',
            'source' => 'https://www.ikea.com/us/en/p/gistad-recliner-idekulla-dark-red-60466388/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789931_pe764213_s5.jpg',
            'specification_id' => '5',
            'category_id' => 1,
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789931_pe764213_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0792177_pe764674_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0789929_pe764214_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0945233_ph170069_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0834169_ph168535_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0833201_ph168539_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0833202_ph168491_s5.jpg',
            'type' => ''
        ]);

        $p19->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/gistad-recliner-idekulla-dark-red__0796277_pe766322_s5.jpg',
            'type' => ''
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
            'specification_id' => '6',
            'category_id' => 3,
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__31428_pe120743_s5.jpg',
            'type' => ''
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1139258_ph173578_s5.jpg',
            'type' => ''
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1059381_ph174044_s5.jpg',
            'type' => ''
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__0257247_pe401562_s5.jpg',
            'type' => ''
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__0841129_pe585560_s5.jpg',
            'type' => ''
        ]);

        $p20->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/agen-armchair-rattan-bamboo__1059350_pe849593_s5.jpg',
            'type' => ''
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
            'specification_id' => '7',
            'category_id' => 3,
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0933452_pe791908_s5.jpg',
            'type' => ''
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0940713_pe795126_s5.jpg',
            'type' => ''
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0936412_pe793245_s5.jpg',
            'type' => ''
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0936413_pe793244_s5.jpg',
            'type' => ''
        ]);

        $p21->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-light-gray__0971937_pe811480_s5.jpg',
            'type' => ''
        ]);


        $p22 = Product::create([
            'name' => 'LINNEBÄCK Chair, Orrsta olive-green',
            'price' => 69.99,
            'model_path' => '/models/G-30487226-f23d134134a3cbde1dd637db5006d9b576192d46_0f0013b9ebfc4097a047c2768503de92.glb',
            'is_stackable' => 0,
            'description' => 'Beautiful simplicity and a casual style. This flexible, versatile easy chair with an airy design adds a visual calmness to the room, while supporting both an active and a relaxed life at home.',
            'source' => 'https://www.ikea.com/us/en/p/linnebaeck-chair-orrsta-olive-green-10487232/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0933454_pe791910_s5.jpg',
            'specification_id' => '7',
            'category_id' => 3,
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0933454_pe791910_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0940727_pe795130_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__1113921_ph180590_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0936414_pe793247_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0936415_pe793246_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__1113919_ph180591_s5.jpg',
            'type' => ''
        ]);

        $p22->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-orrsta-olive-green__0971937_pe811480_s5.jpg',
            'type' => ''
        ]);

        $p23 = Product::create([
            'name' => 'LINNEBÄCK Chair, Vissle dark gray',
            'price' => 69.99,
            'model_path' => '/models/40465441_PS01_S01_NV01_RQP3_4.0_4cb9dcb6637843409a96edc5a9b95264.glb',
            'is_stackable' => 0,
            'description' => 'Beautiful simplicity and a casual style. This flexible, versatile easy chair with an airy design adds a visual calmness to the room, while supporting both an active and a relaxed life at home.',
            'source' => 'https://www.ikea.com/us/en/p/linnebaeck-chair-vissle-dark-gray-50487225/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0933456_pe791909_s5.jpg',
            'specification_id' => '7',
            'category_id' => 3,
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0933456_pe791909_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0940732_pe795133_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0936417_pe793249_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__1043301_ph176051_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__1043300_ph176052_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0936418_pe793248_s5.jpg',
            'type' => ''
        ]);

        $p23->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/linnebaeck-chair-vissle-dark-gray__0971937_pe811480_s5.jpg',
            'type' => ''
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
            'specification_id' => '8',
            'category_id' => 1,
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908536_pe783303_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908535_pe783268_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908537_pe783270_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908538_pe783271_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908540_pe783273_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908540_pe783273_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0908539_pe783272_s5.jpg',
            'type' => ''
        ]);

        $p24->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-dark-gray__0681591_pe720190_s5.jpg',
            'type' => ''
        ]);

        $p25 = Product::create([
            'name' => 'MUREN Recliner, Remmarn light gray',
            'price' => 479,
            'model_path' => '/models/G-00438553-8ae3c78f870270f94ae4520a93e5815e2d7fe4da_02d12593aad0448395d24db097d49891.glb',
            'is_stackable' => 0,
            'description' => 'Take a seat in MUREN recliner and get a pleasant surprise. It is adjustable to three positions and comes with an inbuilt footstool. While sitting, use your back to press against the backrest - it lowers and the footstool lifts up. Now relax and enjoy!',
            'source' => 'https://www.ikea.com/us/en/p/muren-recliner-remmarn-light-gray-60438550/',
            'image_url' => 'https://ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908542_pe783275_s5.jpg',
            'specification_id' => '8',
            'category_id' => 1,
        ]);

        $p25->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908542_pe783275_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908541_pe783274_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908544_pe783277_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908543_pe783276_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908545_pe783278_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0908546_pe783279_s5.jpg',
            'type' => ''
        ]);

        $p25->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/muren-recliner-remmarn-light-gray__0681591_pe720190_s5.jpg',
            'type' => ''
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
            'specification_id' => '9',
            'category_id' => 6,
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268948_pe928889_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268944_pe928902_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268945_pe928903_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268946_pe928904_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__0778225_pe758860_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1268947_pe928905_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__0380433_pe555354_s5.jpg',
            'type' => ''
        ]);

        $p26->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/brimnes-wardrobe-with-2-doors-white__1246508_pe922171_s5.jpg',
            'type' => ''
        ]);

        $p27 = Product::create([
            'name' => 'KLEPPSTAD Wardrobe with 3 doors, white, 46 1/8x69 1/4 "',
            'price' => 179.99,
            'model_path' => '/models/G-00441758-fad3c605b8f85c7c3e10dcb183273f478ff40641_486b94d664a84e75903df9dfe1d912ef.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the KLEPPSTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/kleppstad-wardrobe-with-3-doors-white-20441757/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753594_pe748782_s5.jpg',
            'specification_id' => '10',
            'category_id' => 6,
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753594_pe748782_s5.jpg',
            'type' => ''
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__1276202_ph170507_s5.jpg',
            'type' => ''
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0813670_ph165843_s5.jpg',
            'type' => ''
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0824204_pe776026_s5.jpg',
            'type' => ''
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0753595_pe748783_s5.jpg',
            'type' => ''
        ]);

        $p27->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-3-doors-white__0789783_pe764172_s5.jpg',
            'type' => ''
        ]);

        $p28 = Product::create([
            'name' => 'RAKKESTAD Wardrobe with 3 doors, black-brown, 46 1/8x69 1/4 "',
            'price' => 249.99,
            'model_path' => '/models/70453762_PS01_S01_NV01_RQP3_4.0_6487505cc7554dbe9eb71517013df89c.glb',
            'is_stackable' => 0,
            'description' => 'Simple and smart! When all you need is a wardrobe with all the basic functions. If storage space is still not enough, why not add another wardrobe from the RAKKESTAD series?',
            'source' => 'https://www.ikea.com/us/en/p/rakkestad-wardrobe-with-3-doors-black-brown-00453765/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823987_pe776018_s5.jpg',
            'specification_id' => '11',
            'category_id' => 6,
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823987_pe776018_s5.jpg',
            'type' => ''
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823988_pe776019_s5.jpg',
            'type' => ''
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0823989_pe776020_s5.jpg',
            'type' => ''
        ]);

        $p28->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/rakkestad-wardrobe-with-3-doors-black-brown__0789783_pe764172_s5.jpg',
            'type' => ''
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
            'specification_id' => '12',
            'category_id' => 6,
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0555114_pe660180_s5.jpg',
            'type' => ''
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858553_pe660181_s5.jpg',
            'type' => ''
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858559_pe660182_s5.jpg',
            'type' => ''
        ]);

        $p29->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-brown__0858565_pe660183_s5.jpg',
            'type' => ''
        ]);

        $p30 = Product::create([
            'name' => 'SONGESAND Wardrobe, white, 47 1/8x23 5/8x75 1/4 "',
            'price' => 299.99,
            'model_path' => '/models/90347351_PS01_S01_NV01_RQP3_3.0_15a090b1e25d4cba8fd7f25f4d902b8d.glb',
            'is_stackable' => 0,
            'description' => 'The classic design with panelled doors never goes out of style. Are you on your way? Use the full-length mirror so you can see your outfit from head to toe. Psst! Please attach to the wall.',
            'source' => 'https://www.ikea.com/us/en/p/songesand-wardrobe-white-10394558/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0555120_pe660185_s5.jpg',
            'specification_id' => '12',
            'category_id' => 6,
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0555120_pe660185_s5.jpg',
            'type' => ''
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0858618_pe660187_s5.jpg',
            'type' => ''
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0818036_ph167731_s5.jpg',
            'type' => ''
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0858614_pe660184_s5.jpg',
            'type' => ''
        ]);

        $p30->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/songesand-wardrobe-white__0789904_pe764192_s5.jpg',
            'type' => ''
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
            'specification_id' => '13',
            'category_id' => 6,
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0823547_pe775917_s5.jpg',
            'type' => ''
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__1276204_ph192051_s5.jpg',
            'type' => ''
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__1276203_ph193172_s5.jpg',
            'type' => ''
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0824204_pe776026_s5.jpg',
            'type' => ''
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0823548_pe775916_s5.jpg',
            'type' => ''
        ]);

        $p31->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/kleppstad-wardrobe-with-sliding-doors-white__0946835_pe798278_s5.jpg',
            'type' => ''
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
            'specification_id' => '14',
            'category_id' => 4,
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0625361_pe692211_s5.jpg',
            'type' => ''
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0679553_pe719634_s5.jpg',
            'type' => ''
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0803357_pe768854_s5.jpg',
            'type' => ''
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0679554_pe719633_s5.jpg',
            'type' => ''
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__0978642_pe814195_s5.jpg',
            'type' => ''
        ]);

        $p32->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-black-brown__1257804_pe926043_s5.jpg',
            'type' => ''
        ]);

        $p33 = Product::create([
            'name' => 'TV unit, dark gray stained, 58 1/4x18 1/2x22 1/2 "',
            'price' => 189.99,
            'model_path' => '/models/G-90381731-d92786cc85e9e9b4402cc694c1e182b6359b76da_035c74f62ab3445c8db685ef9a920da3.glb',
            'is_stackable' => 1,
            'description' => 'Sustainable beauty from sustainably-sourced solid pine, a natural and renewable material that gets more beautiful with each passing year. Like it? Combine with other products in the HEMNES series.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-dark-gray-stained-90381731/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0531274_pe647229_s5.jpg',
            'specification_id' => '14',
            'category_id' => 4,
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0531274_pe647229_s5.jpg',
            'type' => ''
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0851330_pe647231_s5.jpg',
            'type' => ''
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0803359_pe768856_s5.jpg',
            'type' => ''
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0850385_pe671757_s5.jpg',
            'type' => ''
        ]);

        $p33->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-dark-gray-stained__0978642_pe814195_s5.jpg',
            'type' => ''
        ]);

        $p34 = Product::create([
            'name' => 'HEMNES TV unit, white stain, 58 1/4x18 1/2x22 1/2 "',
            'price' => 249.99,
            'model_path' => '/models/30352901_PS01_S01_NV01_RQP3_3.0_307ba8071d75415bb782b0c223b40cf3.glb',
            'is_stackable' => 1,
            'description' => 'A white-stained TV bench with both shelves and drawers, as well as open and closed storage. A neat piece of furniture that fits almost anywhere and has space for pretty much all of your TV-equipment.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-white-stain-40349569/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0644455_pe702706_s5.jpg',
            'specification_id' => '14',
            'category_id' => 4,
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0644455_pe702706_s5.jpg',
            'type' => ''
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0679567_pe719638_s5.jpg',
            'type' => ''
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0803358_pe768857_s5.jpg',
            'type' => ''
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0164867_pe316751_s5.jpg',
            'type' => ''
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__0978642_pe814195_s5.jpg',
            'type' => ''
        ]);

        $p34->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain__1257804_pe926043_s5.jpg',
            'type' => ''
        ]);

        $p35 = Product::create([
            'name' => 'HEMNES TV unit, white stain/light brown, 58 1/4x18 1/2x22 1/2 "',
            'price' => 249.99,
            'model_path' => '/models/50413526_PS01_S01_NV01_RQP3_3.0_915f691716d9442aa47cf0a4ca941f8f.glb',
            'is_stackable' => 1,
            'description' => 'Sustainable beauty from sustainably-sourced solid pine, a natural and renewable material that gets more beautiful with each passing year. Like it? Combine with other products in the HEMNES series.',
            'source' => 'https://www.ikea.com/us/en/p/hemnes-tv-unit-white-stain-light-brown-10413528/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0583377_pe671187_s5.jpg',
            'specification_id' => '14',
            'category_id' => 4,
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0583377_pe671187_s5.jpg',
            'type' => ''
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0850139_pe671188_s5.jpg',
            'type' => ''
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0803360_pe768855_s5.jpg',
            'type' => ''
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0164867_pe316751_s5.jpg',
            'type' => ''
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__0978642_pe814195_s5.jpg',
            'type' => ''
        ]);

        $p35->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/hemnes-tv-unit-white-stain-light-brown__1257804_pe926043_s5.jpg',
            'type' => ''
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
            'specification_id' => '15',
            'category_id' => 4,
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0644411_pe702653_s5.jpg',
            'type' => ''
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0849938_pe560742_s5.jpg',
            'type' => ''
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0378189_pe322598_s5.jpg',
            'type' => ''
        ]);

        $p36->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/byas-tv-unit-high-gloss-white__0544140_pe654903_s5.jpg',
            'type' => ''
        ]);

        $p37 = Product::create([
            'name' => 'BESTÅ BURS TV unit, high gloss white, 70 7/8x16 1/8x19 1/4 "',
            'price' => 239.99,
            'model_path' => '/models/30269129_PS01_S01_NV01_RQP3_3.0_255b9d59705f4af08651198e835a3b72.glb',
            'is_stackable' => 1,
            'description' => 'BESTÅ TV bench provides a home for your TV and storage for the gadgets that belong to it. With spacious drawers there’s plenty of space to keep TV games and accessories organized. And it looks tidy too!',
            'source' => 'https://www.ikea.com/us/en/p/besta-burs-tv-unit-high-gloss-white-30269129/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__65138_pe175906_s5.jpg',
            'specification_id' => '16',
            'category_id' => 4,
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__65138_pe175906_s5.jpg',
            'type' => ''
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257776_pe402056_s5.jpg',
            'type' => ''
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257777_pe402057_s5.jpg',
            'type' => ''
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__0257969_pe402007_s5.jpg',
            'type' => ''
        ]);

        $p37->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-burs-tv-unit-high-gloss-white__1056931_pe848656_s5.jpg',
            'type' => ''
        ]);

        $p38 = Product::create([
            'name' => 'TONSTAD TV unit, oak veneer, 70 1/4x14 5/8x21 5/8 "',
            'price' => 249.99,
            'model_path' => '/models/00489302_PS01_S01_NV01_RQP3_3.0_097907c23738417c82f831f0ad5271e0.glb',
            'is_stackable' => 1,
            'description' => 'Classic design meets nicely brushed veneer in the TONSTAD series, giving the furniture a unique character. This TV bench has smart, built-in cable management which makes it easy to keep unruly cables hidden.',
            'source' => 'https://www.ikea.com/us/en/p/tonstad-tv-unit-oak-veneer-60542962/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1186266_pe898748_s5.jpg',
            'specification_id' => '17',
            'category_id' => 4,
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1186266_pe898748_s5.jpg',
            'type' => ''
        ]);

        $p38->images()->create([
            'image_url' => 'https://ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1209014_pe908977_s5.jpg',
            'type' => ''
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1236542_pe917690_s5.jpg',
            'type' => ''
        ]);

        $p38->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/tonstad-tv-unit-oak-veneer__1220965_pe913617_s5.jpg',
            'type' => ''
        ]);

        $p39 = Product::create([
            'name' => 'FJÄLLBO TV unit, black, 59x14 1/8x21 1/4 "',
            'price' => 149.99,
            'model_path' => '/models/G-90339290-9f99177bf5b3f330a2ad16c40833ead956fb8b79_046ff6c5054b4b4994c2b51d189d1231.glb',
            'is_stackable' => 1,
            'description' => 'Since the doors allow signals to get through from your remote control, your electronic equipment will get along well with FJÄLLBO. Probably you too – the open back makes it easy to manage cables.',
            'source' => 'https://www.ikea.com/us/en/p/fjaellbo-tv-unit-black-90339290/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0473390_pe614545_s5.jpg',
            'specification_id' => '18',
            'category_id' => 4,
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0473390_pe614545_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0925815_ph157836_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0850235_pe616397_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0850248_pe725299_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0658086_ph150571_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0476530_pe616398_s5.jpg',
            'type' => ''
        ]);

        $p39->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/fjaellbo-tv-unit-black__0802552_pe768508_s5.jpg',
            'type' => ''
        ]);

        $p40 = Product::create([
            'name' => 'IDANÄS TV unit, white, 63 3/4x15 3/4x24 3/4 "',
            'price' => 179.99,
            'model_path' => '/models/G-90487860-efebf58a6409bf08ebdb93734449821285528ccf_13253ee119c5486d8757ca6fab69d115.glb',
            'is_stackable' => 1,
            'description' => 'IDANÄS series combines timeless design with modern functionality. Keep the area around the TV tidy and store your games, controls and accessories in the two drawers and feed the cables through the outlets in the back.',
            'source' => 'https://www.ikea.com/us/en/p/idanaes-tv-unit-white-90487860/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1009042_pe827428_s5.jpg',
            'specification_id' => '19',
            'category_id' => 4,
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1009042_pe827428_s5.jpg',
            'type' => ''
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1021401_pe832124_s5.jpg',
            'type' => ''
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1021400_pe832149_s5.jpg',
            'type' => ''
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__0985314_pe816591_s5.jpg?f=xl',
            'type' => ''
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__0985307_pe816584_s5.jpg',
            'type' => ''
        ]);

        $p40->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/idanaes-tv-unit-white__1022450_pe832733_s5.jpg',
            'type' => ''
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
            'specification_id' => '20',
            'category_id' => 4,
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1128170_pe876449_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1142036_pe881132_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1142035_pe881128_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1133139_pe878450_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1144172_pe881750_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1122128_pe874516_s5.jpg',
            'type' => ''
        ]);

        $p41->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-black-blue__1236095_pe917447_s5.jpg',
            'type' => ''
        ]);

        $p42 = Product::create([
            'name' => 'SKRUVBY TV unit, white, 61 3/8x14 3/4x23 5/8 "',
            'price' => 99.99,
            'model_path' => '/models/80503549_PS01_S01_NV01_RQP3_3.0_ad51dca5ff8a453cb4d8ae508e9dcfb4.glb',
            'is_stackable' => 1,
            'description' => 'The SKRUVBY series has a traditional style with solitaire storage units that can be coordinated. This TV bench’s top panel has an oak look and profiled edges that add a warm, natural feel to the room.',
            'source' => 'https://www.ikea.com/us/en/p/skruvby-tv-unit-white-90542748/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1128171_pe876450_s5.jpg',
            'specification_id' => '20',
            'category_id' => 4,
        ]);

        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1128171_pe876450_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142039_pe881129_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142038_pe881131_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1142030_pe881124_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1144173_pe881749_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1122128_pe874516_s5.jpg',
            'type' => ''
        ]);
        $p42->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/skruvby-tv-unit-white__1236095_pe917447_s5.jpg',
            'type' => ''
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
            'specification_id' => '21',
            'category_id' => 4,
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0316215_pe516839_s5.jpg',
            'type' => ''
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0843438_pe535720_s5.jpg',
            'type' => ''
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__0763977_pe753011_s5.jpg',
            'type' => ''
        ]);

        $p43->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-black-brown__1219324_pe913365_s5.jpg',
            'type' => ''
        ]);

        $p44 = Product::create([
            'name' => 'BESTÅ TV unit, dark gray, 47 1/4x15 3/4x25 1/4 "',
            'price' => 110.00,
            'model_path' => '/models/40538616_PS01_S01_NV01_RQP3_3.0_351bd11ad7f4496c8a3722474a18448d.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-dark-gray-60575226/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219601_pe913478_s5.jpg',
            'specification_id' => '21',
            'category_id' => 4,
        ]);

        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219601_pe913478_s5.jpg',
            'type' => ''
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1255236_pe924457_s5.jpg',
            'type' => ''
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1255235_pe924458_s5.jpg',
            'type' => ''
        ]);
        $p44->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-dark-gray__1219324_pe913365_s5.jpg',
            'type' => ''
        ]);

        $p45 = Product::create([
            'name' => 'BESTÅ TV unit, white, 47 1/4x15 3/4x25 1/4 "',
            'price' => 80.00,
            'model_path' => '/models/40299890_PS01_S01_NV01_RQP3_3.0_3e3c29ec6572449292ec6213bc312054.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-white-20566035/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0377000_pe516842_s5.jpg',
            'specification_id' => '21',
            'category_id' => 4,
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0377000_pe516842_s5.jpg',
            'type' => ''
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0843389_pe535717_s5.jpg',
            'type' => ''
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__0763979_pe753013_s5.jpg',
            'type' => ''
        ]);

        $p45->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white__1219324_pe913365_s5.jpg',
            'type' => ''
        ]);

        $p46 = Product::create([
            'name' => 'BESTÅ TV unit, white stained oak effect, 47 1/4x15 3/4x25 1/4 "',
            'price' => 80.00,
            'model_path' => '/models/30299895_PS01_S01_NV01_RQP3_3.0_1164b1653a724f2a93b6880b063230c4.glb',
            'is_stackable' => 1,
            'description' => 'A simple frame can be the start of something great. Place this TV bench on the floor or put it on legs. Add units, organise with shelves, drawers or doors. The possibilities are endless.',
            'source' => 'https://www.ikea.com/us/en/p/besta-tv-unit-white-stained-oak-effect-80576003/',
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0316224_pe516843_s5.jpg',
            'specification_id' => '21',
            'category_id' => 4,
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0316224_pe516843_s5.jpg',
            'type' => ''
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0843366_pe535714_s5.jpg',
            'type' => ''
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__0763980_pe753014_s5.jpg',
            'type' => ''
        ]);

        $p46->images()->create([
            'image_url' => 'https://www.ikea.com/us/en/images/products/besta-tv-unit-white-stained-oak-effect__1219324_pe913365_s5.jpg',
            'type' => ''
        ]);

        $vc11->products()->attach($p43->id);
        $vc11->products()->attach($p44->id);
        $vc11->products()->attach($p45->id);
        $vc11->products()->attach($p46->id);

        // $p10 = Product::create([
        //     'name' => '',
        //     'price' => 229,
        //     'model_path' => '',
        //     'is_stackable' => 0,
        //     'description' => '',
        //     'source' => '',
        //     'image_url' => '',
        //     'specification_id' => '3',
        //     'category_id' => 1,
        // ]);

        // $p10->images()->create([
        //     'image_url' => '',
        //     'type' => ''
        // ]);

        // $p10->images()->create([
        //     'image_url' => '',
        //     'type' => ''
        // ]);

    }
}
