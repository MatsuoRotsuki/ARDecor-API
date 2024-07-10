<?php

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $images = [
        //     'https://www.ikea.com/images/in-a-cosy-living-room-are-a-grey-holmsund-sofa-next-to-a-win-338c45600ad349af7b1bce214223efc8.jpg',
        //     'https://www.ikea.com/images/a-retro-inspired-living-room-with-a-large-grey-aelvdalen-sof-070c9cd0678633e47f4426456d359271.jpg',
        //     'https://www.ikea.com/images/a-pastel-24-hour-living-room-oasis-with-blakullen-bed-in-med-522c5558683cd1771446bf82e6b70743.jpg',
        //     'https://ikea.com/images/a-large-ivar-storage-combination-in-natural-pine-and-dark-gr-2853f736536936f941963ee6f179899b.jpg',
        //     'https://www.ikea.com/images/billy-bookcases-and-a-hyltarp-2-seat-sofa-are-in-a-tradition-67804ec8a13bd3f9b93d9edcf991ad9b.jpg',
        // ];

        $userUids = [
            'maKgeKYhIegEoISMOOraRShiORX2',
            '91vV5aV8hjRolzQdUqfuS25NcuW2',
            'Zhak6AmHPVfL75BkBrndcTN8Wmn1',
            'BeiX3KXRu5TZ1RbD6YVRzcmCGBf1',
        ];

        $i1 = Idea::create([
            'name' => "Không gian làm việc phong cách cổ điển",
            'image_url' => 'https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fe16ccdbf-ef5f-43c2-8764-19fc56351d36?alt=media&token=ec7c7127-c3b7-4127-b693-c50fcffc069d',
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": -0.158303887, \"y\": 0.000945091248, \"z\": 0.653583646}, \"rotation\": {\"w\": 0.971307635, \"x\": 0.000407558924, \"y\": -0.237826288, \"z\": 0.00009979149}, \"productId\": 530}, {\"parent\": -1, \"position\": {\"x\": 0.936759353, \"y\": 0.0024664402, \"z\": -0.04305494}, \"rotation\": {\"w\": 0.5088387, \"x\": 0.000362993451, \"y\": -0.860861659, \"z\": 0.000614118238}, \"productId\": 602}, {\"parent\": -1, \"position\": {\"x\": -0.9902761, \"y\": -0.002073884, \"z\": 0.0184435844}, \"rotation\": {\"w\": 0.9703702, \"x\": 0.000398846285, \"y\": -0.241622716, \"z\": 0.00009931295}, \"productId\": 224}, {\"parent\": 1, \"position\": {\"x\": 1.17262828, \"y\": 0.737387538, \"z\": -0.282214284}, \"rotation\": {\"w\": 0.7836055, \"x\": 0.000636565033, \"y\": -0.621258259, \"z\": 0.00050468155}, \"productId\": 182}, {\"parent\": -1, \"position\": {\"x\": 0.211820692, \"y\": -0.00133752823, \"z\": -0.62897253}, \"rotation\": {\"w\": 0.8631599, \"x\": -0.00384531566, \"y\": 0.504911065, \"z\": 0.00224934262}, \"productId\": 1201}]",
            'description' => "Được thiết kế hài hòa để tăng hiệu quả công việc kết hợp với thư giãn",
            'room_type_id' => 4,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i1->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fe16ccdbf-ef5f-43c2-8764-19fc56351d36?alt=media&token=ec7c7127-c3b7-4127-b693-c50fcffc069d",
        ]);
        $i1->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F28dd90e2-6996-411e-9aab-e6e51fdf86bb?alt=media&token=b53f2326-d9e9-46f8-b8b3-3d15d9368cd8",
        ]);

        $i2 = Idea::create([
            'name' => "Không gian phòng khách nhiều màu sắc",
            'image_url' => 'https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F22677972-e85e-4de3-98a4-842e5dbe02fd?alt=media&token=2ea21a37-909a-4653-a6a7-926b7b81a5f0',
            'placements' => "[{\"parent\": 5, \"position\": {\"x\": -0.163717, \"y\": 0.5186195, \"z\": 1.21838021}, \"rotation\": {\"w\": 0.593173742, \"x\": -0.000431254157, \"y\": -0.805074155, \"z\": -0.0005853119}, \"productId\": 87}, {\"parent\": -1, \"position\": {\"x\": -0.582640052, \"y\": -0.0103772879, \"z\": -0.8053086}, \"rotation\": {\"w\": 0.923147559, \"x\": 0.0000617228943, \"y\": 0.3844459, \"z\": -0.000025704574}, \"productId\": 16}, {\"parent\": -1, \"position\": {\"x\": 0.243012562, \"y\": -0.0109113455, \"z\": -1.07165146}, \"rotation\": {\"w\": 0.999959946, \"x\": -0.00013521142, \"y\": 0.008951268, \"z\": 0.00000121036237}, \"productId\": 15}, {\"parent\": -1, \"position\": {\"x\": 0.141383916, \"y\": -0.01005578, \"z\": -0.1738559}, \"rotation\": {\"w\": 0.960192859, \"x\": 0.000006801192, \"y\": 0.2793381, \"z\": -0.000001978594}, \"productId\": 344}, {\"parent\": -1, \"position\": {\"x\": -0.5432588, \"y\": 0.0489726067, \"z\": 0.433906019}, \"rotation\": {\"w\": 0.5149956, \"x\": 0.00000000132362865, \"y\": 0.8571929, \"z\": -0.00000000220313567}, \"productId\": 450}, {\"parent\": -1, \"position\": {\"x\": -0.109967142, \"y\": -0.00465905666, \"z\": 1.16386819}, \"rotation\": {\"w\": 0.9646003, \"x\": -0.000542229856, \"y\": 0.263715744, \"z\": 0.000148242252}, \"productId\": 296}, {\"parent\": -1, \"position\": {\"x\": 0.8514693, \"y\": -0.0129688978, \"z\": 0.453041852}, \"rotation\": {\"w\": -0.497267932, \"x\": -0.000000000107494562, \"y\": 0.867597044, \"z\": -0.00000000018754874}, \"productId\": 17}]",
            'description' => "Thiết kế với phong cách Scandi với nhiều màu sắc táo bạo vui tươi, tiết kiệm không gian",
            'room_type_id' => 1,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i2->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F22677972-e85e-4de3-98a4-842e5dbe02fd?alt=media&token=2ea21a37-909a-4653-a6a7-926b7b81a5f0",
        ]);
        $i2->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fb236f098-e35b-43ef-a128-e2018021000d?alt=media&token=533bdd6a-612b-46a3-bd79-62cdaebc38c4",
        ]);

        $i3 = Idea::create([
            'name' => "Mẫu phòng khách sáng sủa, thoáng mát",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F81ecb338-6c2f-44dd-8bca-ae657bb1e812?alt=media&token=95c73b4e-4256-4453-997a-8b5b8b053552",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": 0.234255373, \"y\": -0.0160628557, \"z\": 0.326376677}, \"rotation\": {\"w\": 0.9078963, \"x\": -0.00000000109318465, \"y\": 0.419194877, \"z\": 0.000000000504746467}, \"productId\": 374}, {\"parent\": -1, \"position\": {\"x\": -0.731427133, \"y\": -0.011942029, \"z\": -0.2754538}, \"rotation\": {\"w\": 0.8865971, \"x\": -0.00000000054110777, \"y\": 0.462542534, \"z\": 0.000000000282298879}, \"productId\": 457}, {\"parent\": -1, \"position\": {\"x\": -0.7353434, \"y\": 0.0171314478, \"z\": 1.04848576}, \"rotation\": {\"w\": 0.908955932, \"x\": 0.00000000367084185, \"y\": -0.4168922, \"z\": 0.00000000168362979}, \"productId\": 99}, {\"parent\": 0, \"position\": {\"x\": 0.252283633, \"y\": 0.46910733, \"z\": 0.378748775}, \"rotation\": {\"w\": 0.995652735, \"x\": 0.00000000269415512, \"y\": -0.0931435451, \"z\": 0.000000000252038834}, \"productId\": 97}, {\"parent\": -1, \"position\": {\"x\": 1.2325151, \"y\": 0.0108733177, \"z\": -1.09940815}, \"rotation\": {\"w\": 0.9480958, \"x\": -0.000000000415989715, \"y\": -0.317984879, \"z\": -0.000000000139520118}, \"productId\": 40}]",
            'description' => "Phong cách hiện đại, tập trung tận dụng tối đa diện tích mặt sàn, được bao quanh bởi các gam màu trắng, mang lại cảm giác rộng rãi, thoáng đãng",
            'room_type_id' => 1,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i3->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F81ecb338-6c2f-44dd-8bca-ae657bb1e812?alt=media&token=95c73b4e-4256-4453-997a-8b5b8b053552",
        ]);

        $i4 = Idea::create([
            'name' => "Phòng ngủ hiện đại gam màu tối",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F1b0529a9-4179-4347-ba80-5deb15cf7bc4?alt=media&token=7ce4404c-2349-4197-9404-68053b94be22",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": 0.8086099, \"y\": 0.00004005432, \"z\": -0.7143192}, \"rotation\": {\"w\": -0.4184879, \"x\": 0.000000007640906, \"y\": 0.9082224, \"z\": 0.0000000165826588}, \"productId\": 1011}, {\"parent\": 2, \"position\": {\"x\": 0.123335078, \"y\": 0.6509719, \"z\": 0.180655479}, \"rotation\": {\"w\": 0.974681854, \"x\": -0.0000000594505458, \"y\": -0.223596469, \"z\": -0.0000000136382257}, \"productId\": 112}, {\"parent\": -1, \"position\": {\"x\": 0.178158224, \"y\": -0.00005209446, \"z\": 0.234572768}, \"rotation\": {\"w\": 0.8857995, \"x\": 0.00000001119035, \"y\": 0.4640681, \"z\": -0.00000000586259574}, \"productId\": 1368}, {\"parent\": -1, \"position\": {\"x\": -0.9867681, \"y\": 0.0000120401382, \"z\": 0.479746342}, \"rotation\": {\"w\": 0.325420558, \"x\": -0.000000005044372, \"y\": 0.9455694, \"z\": 0.0000000146573518}, \"productId\": 1263}]",
            'description' => "Đến lúc nghỉ ngơi cuối ngày, lấp đầy những yếu tố êm dịu, tâpn trung vào sự thoải mái và ánh sáng",
            'room_type_id' => 2,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i4->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F1b0529a9-4179-4347-ba80-5deb15cf7bc4?alt=media&token=7ce4404c-2349-4197-9404-68053b94be22",
        ]);

        $i5 = Idea::create([
            'name' => "Phòng ăn hiện đại gam màu tối",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Ffd91e57c-3a38-4936-a4b9-f580b49ae866?alt=media&token=6d247e8d-3034-4b23-9f29-c0889d83a4d3",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": -0.354642153, \"y\": 0.136903882, \"z\": 0.74527967}, \"rotation\": {\"w\": 0.137856156, \"x\": 0.000004197924, \"y\": 0.9904523, \"z\": -0.0000301607379}, \"productId\": 954}, {\"parent\": -1, \"position\": {\"x\": -0.246249139, \"y\": -0.260954261, \"z\": -0.441808462}, \"rotation\": {\"w\": 0.975920737, \"x\": 0.0000000233584, \"y\": -0.218125358, \"z\": 0.000000005220772}, \"productId\": 541}, {\"parent\": -1, \"position\": {\"x\": 0.6008913, \"y\": 0.12405026, \"z\": -0.3034712}, \"rotation\": {\"w\": 0.56674844, \"x\": -0.000000000441793574, \"y\": -0.8238909, \"z\": -0.0000000006422422}, \"productId\": 896}]",
            'description' => "Tập trung vào sự ấm cúng và sự thoáng đãng, không gian ăn uống có thể trở thành một địa điểm hấp dẫn để nán lại thưởng thức bữa ăn ngon",
            'room_type_id' => 3,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i5->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F1b0529a9-4179-4347-ba80-5deb15cf7bc4?alt=media&token=7ce4404c-2349-4197-9404-68053b94be22",
        ]);

        $i6 = Idea::create([
            'name' => "Studio nhỏ cho gamer sành điệu",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fd7bef70d-85c3-4ac4-a302-e3457818e5e6?alt=media&token=0f14fb53-12ff-4f49-83d7-a4955b9dfb77",
            'placements' => "[{\"parent\": 1, \"position\": {\"x\": 0.4849016, \"y\": 0.470867872, \"z\": 0.2392031}, \"rotation\": {\"w\": -0.331486553, \"x\": 0.0000000000236188968, \"y\": 0.9434599, \"z\": 0.00000000006722289}, \"productId\": 172}, {\"parent\": -1, \"position\": {\"x\": 0.5156018, \"y\": -0.263847828, \"z\": -0.206957459}, \"rotation\": {\"w\": 0.782321334, \"x\": 0.000000002617628, \"y\": 0.6228751, \"z\": -0.00000000208412487}, \"productId\": 619}, {\"parent\": -1, \"position\": {\"x\": -0.5038219, \"y\": 0.3962087, \"z\": -0.729712}, \"rotation\": {\"w\": 0.8383441, \"x\": 0.00000000227397567, \"y\": 0.5451415, \"z\": -0.00000000147867529}, \"productId\": 1191}, {\"parent\": -1, \"position\": {\"x\": -0.0117799342, \"y\": -0.1323607, \"z\": 0.9366697}, \"rotation\": {\"w\": 0.5755981, \"x\": -0.0000000003122612, \"y\": -0.817732751, \"z\": -0.000000000443618919}, \"productId\": 875}]",
            'description' => "Không gian hiện đại, tối giản, dễ phối hợp, giúp giải tỏa căng thẳng",
            'room_type_id' => 4,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i6->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fd7bef70d-85c3-4ac4-a302-e3457818e5e6?alt=media&token=0f14fb53-12ff-4f49-83d7-a4955b9dfb77",
        ]);
        $i6->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F92a72d21-8feb-4669-ba17-d56ee70a91f8?alt=media&token=4714f4bd-54d0-4c1a-bb9e-4dccd52674a8",
        ]);

        $i7 = Idea::create([
            'name' => "Phòng ăn 2",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F609dc2a1-6b1b-4458-a7be-964b9cfa5dc0?alt=media&token=509bf059-e415-4c5f-aae3-4d39d471185b",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": -1.38479412, \"y\": -0.198370814, \"z\": 0.5316867}, \"rotation\": {\"w\": 0.969824553, \"x\": -0.0003342093, \"y\": 0.243803814, \"z\": 0.00008401675}, \"productId\": 570}, {\"parent\": 0, \"position\": {\"x\": -1.00332379, \"y\": 0.5964277, \"z\": 0.210156739}, \"rotation\": {\"w\": 0.999784052, \"x\": -0.00350092934, \"y\": -0.0204864461, \"z\": -0.00007173709}, \"productId\": 110}, {\"parent\": -1, \"position\": {\"x\": 0.8309454, \"y\": -0.2016288, \"z\": 0.0867720246}, \"rotation\": {\"w\": 0.482589036, \"x\": 0.00002201148, \"y\": 0.875847, \"z\": -0.0000399484561}, \"productId\": 928}, {\"parent\": -1, \"position\": {\"x\": 0.5538487, \"y\": 0.3999995, \"z\": -0.618459}, \"rotation\": {\"w\": 0.9518431, \"x\": 0.0005447629, \"y\": 0.306585163, \"z\": -0.0001754661}, \"productId\": 141}]",
            'description' => "Phòng ăn 2 dành cho đại gia đình",
            'room_type_id' => 3,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i7->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F609dc2a1-6b1b-4458-a7be-964b9cfa5dc0?alt=media&token=509bf059-e415-4c5f-aae3-4d39d471185b",
        ]);
        $i7->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fa13573cd-b7d2-4e63-a230-2617681a2847?alt=media&token=bff6e4e4-7549-473e-a53c-9e11c7b514ba",
        ]);
        $i8 = Idea::create([
            'name' => "Ốc đảo bình yên và sáng sủa",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F3c296d8a-ea69-4f9b-bd86-df287bffec61?alt=media&token=53af85b7-b632-4b90-a06c-b37f1da36009",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": -0.382643342, \"y\": -0.129576445, \"z\": -0.06460011}, \"rotation\": {\"w\": -0.257686526, \"x\": -0.00000508540461, \"y\": 0.9662286, \"z\": -0.000019068375}, \"productId\": 1274}, {\"parent\": 2, \"position\": {\"x\": 0.802495837, \"y\": 0.5665214, \"z\": 0.161827445}, \"rotation\": {\"w\": 0.560714662, \"x\": 0.00000000015873601, \"y\": 0.8280092, \"z\": -0.00000000023440605}, \"productId\": 112}, {\"parent\": -1, \"position\": {\"x\": 0.8269218, \"y\": -0.132475138, \"z\": 0.107685447}, \"rotation\": {\"w\": -0.246724725, \"x\": 0.00000000057141486, \"y\": 0.969085634, \"z\": 0.00000000224440377}, \"productId\": 1360}, {\"parent\": -1, \"position\": {\"x\": -0.444278479, \"y\": 0.262051642, \"z\": -0.0430851}, \"rotation\": {\"w\": 0.9655158, \"x\": -0.000000000365786845, \"y\": 0.2603446, \"z\": 0.0000000000986318735}, \"productId\": 1322}]",
            'description' => "Một chiếc giường lớn bọc trong tấm ga mỏng thanh tao. Bình yên đậm chất đồng quê, màu sắc nhẹ nhàng sáng sủa giúp chìm vào giấc ngủ sâu",
            'room_type_id' => 2,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);
        $i8->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F3c296d8a-ea69-4f9b-bd86-df287bffec61?alt=media&token=53af85b7-b632-4b90-a06c-b37f1da36009",
        ]);
        $i9 = Idea::create([
            'name' => "Phòng ngủ nhỏ thiết kế tối giản",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F06d9df72-fe54-4873-9eca-13300f574527?alt=media&token=dbea6615-0597-4e2e-a120-06531c7d4871",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": 0.239324853, \"y\": -0.03573239, \"z\": 0.6264044}, \"rotation\": {\"w\": 0.8708629, \"x\": 0.00000351913559, \"y\": 0.491526, \"z\": -0.00000198624457}, \"productId\": 349}, {\"parent\": -1, \"position\": {\"x\": -0.893581033, \"y\": -0.06331611, \"z\": 0.8782319}, \"rotation\": {\"w\": 0.252292633, \"x\": -0.0005742188, \"y\": 0.9676483, \"z\": 0.00220237044}, \"productId\": 1294}, {\"parent\": 0, \"position\": {\"x\": 0.23120074, \"y\": 0.5902677, \"z\": 0.6091255}, \"rotation\": {\"w\": -0.490576535, \"x\": 0.00000703341948, \"y\": 0.871398151, \"z\": 0.0000124932767}, \"productId\": 126}, {\"parent\": -1, \"position\": {\"x\": -0.226834625, \"y\": 0.0322381258, \"z\": -0.195102215}, \"rotation\": {\"w\": 0.5591045, \"x\": -0.000000003707073, \"y\": 0.8290973, \"z\": 0.00000000549722667}, \"productId\": 423}, {\"parent\": -1, \"position\": {\"x\": 0.5478724, \"y\": 0.032397747, \"z\": -0.9580687}, \"rotation\": {\"w\": 0.990690231, \"x\": -0.00000000318580828, \"y\": -0.1361354, \"z\": -0.000000000437776843}, \"productId\": 424}, {\"parent\": -1, \"position\": {\"x\": 0.3332184, \"y\": 0.0344122648, \"z\": -0.351465821}, \"rotation\": {\"w\": 0.9677202, \"x\": 0.000000000232238145, \"y\": 0.252027065, \"z\": -0.00000000006048267}, \"productId\": 822}]",
            'description' => "Phòng ngủ nhỏ thiết kế tối giản",
            'room_type_id' => 2,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);
        $i9->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F06d9df72-fe54-4873-9eca-13300f574527?alt=media&token=dbea6615-0597-4e2e-a120-06531c7d4871",
        ]);
        $i9->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fdb869df6-cbed-46cf-8364-6ce85f7dce64?alt=media&token=b06ff202-b246-49b9-8e53-fe2704fc1050",
        ]);

        $i10 = Idea::create([
            'name' => "Phòng khách phong cách retro",
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F4cfeb45a-94b0-4c26-891e-3c1124f1409f?alt=media&token=70dfb9aa-6e77-4652-9a75-38da516b79b1",
            'placements' => "[{\"parent\": -1, \"position\": {\"x\": 0.5772077, \"y\": 0.0388070345, \"z\": -0.0724206}, \"rotation\": {\"w\": 0.951815069, \"x\": -0.0000239205438, \"y\": -0.306672633, \"z\": -0.0000077071445}, \"productId\": 333}, {\"parent\": -1, \"position\": {\"x\": -0.390191555, \"y\": -0.007344961, \"z\": 0.90735054}, \"rotation\": {\"w\": 0.340910941, \"x\": 0.00000000203235118, \"y\": 0.9400956, \"z\": -0.00000000560441}, \"productId\": 452}, {\"parent\": -1, \"position\": {\"x\": -0.238801956, \"y\": -0.01057148, \"z\": -1.00836778}, \"rotation\": {\"w\": 0.934478164, \"x\": -0.0000316130172, \"y\": 0.3560205, \"z\": 0.0000120440309}, \"productId\": 1}, {\"parent\": -1, \"position\": {\"x\": 1.42101955, \"y\": -0.0104502439, \"z\": 0.290642262}, \"rotation\": {\"w\": 0.943446159, \"x\": -0.00000000417288737, \"y\": -0.331525952, \"z\": -0.000000001466348}, \"productId\": 70}, {\"parent\": -1, \"position\": {\"x\": -1.36923337, \"y\": -0.0104407072, \"z\": -0.117204666}, \"rotation\": {\"w\": 0.329273641, \"x\": 0.00000000165493919, \"y\": 0.94423455, \"z\": -0.00000000474575135}, \"productId\": 363}, {\"parent\": 4, \"position\": {\"x\": -1.33247352, \"y\": 0.421597123, \"z\": -0.076087}, \"rotation\": {\"w\": 0.982878149, \"x\": 0.000000000036895334, \"y\": -0.1842568, \"z\": 0.00000000000691664174}, \"productId\": 139}]",
            'description' => "Phòng ngủ nhỏ thiết kế tối giản, mang lại năng lượng bình yên đầy màu sắc",
            'room_type_id' => 1,
            'user_id' => "Zhak6AmHPVfL75BkBrndcTN8Wmn1",
        ]);

        $i10->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F4cfeb45a-94b0-4c26-891e-3c1124f1409f?alt=media&token=70dfb9aa-6e77-4652-9a75-38da516b79b1",
        ]);

        $i10->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2F1c159a38-6b27-40ad-9bdf-2e8ddf5820b7?alt=media&token=c35c8c51-5023-43d9-9d49-c6b0265cdddf",
        ]);

        $i10->images()->create([
            'image_url' => "https://firebasestorage.googleapis.com/v0/b/ar-decor-app.appspot.com/o/images%2Fdb869df6-cbed-46cf-8364-6ce85f7dce64?alt=media&token=b06ff202-b246-49b9-8e53-fe2704fc1050",
        ]);
    }
}
