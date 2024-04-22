<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $livingRoomType = RoomType::create([
            'name' => 'Phòng khách',
            'image_url' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcRzpCShCMaoY_XOsN7pk1w2FFHUNXHda69z_m01NVNCvADzZHjONlGrXP2TVS7jymSRatNI6tJPXK8OED18yKk',
        ]);

        $bedroomType = RoomType::create([
            'name' => 'Phòng ngủ',
            'image_url' => 'http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcQFWzI79niL_gXFhqcstbVD3VidtJH7xuS0b879NtzD_Glino7HhTJvbYvxaAt1PGcBx3QC-i3_N9UMdJnTrhU',
        ]);

        $diningRoomType = RoomType::create([
            'name' => 'Phòng ăn',
            'image_url' => 'http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcR6vzo0NUsPKxQjHwDXyljW92YtWNjNkSXUGbBzJnf6iVsW6RQpFJF0Bt26sUU6q6BEucXjyGm7zShABlDZpZI',
        ]);

        // $kitchen = RoomType::create([
        //     'name' => 'Nhà bếp',
        //     'image_url' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcRkDmhTiDLD3MyOj1D1hADCW-u6R0H3Mi4TpzjcYmx1n38GzFr4_cMmG4AD7LtYSCjGk_GlQt8lccyMc5-Jqwg',
        // ]);

        $homeOffice = RoomType::create([
            'name' => 'Phòng làm việc',
            'image_url' => 'https://rnb.scene7.com/is/image/roomandboard/parsons_247860_23e?$prodzoom0$&size=2400,2400&scl=1',
        ]);

        // Seed categories

        $sofaCat = Category::create([
            'name' => 'Ghế Sofa',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/sofas-fu003.jpeg',
            'room_type_id' => $livingRoomType->id,
        ]);

        $tableCat = Category::create([
            'name' => 'Bàn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/tables-desks-fu004.jpeg',
            'room_type_id' => $livingRoomType->id,
        ]);

        $chairCat = Category::create([
            'name' => 'Ghế',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/chairs-fu002.jpeg',
            'room_type_id' => $livingRoomType->id,
        ]);

        $tvStandCat = Category::create([
            'name' => 'Tủ kệ TV',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/tv-benches-10810.jpeg',
            'room_type_id' => $livingRoomType->id,
        ]);

        $accentChestCat = Category::create([
            'name' => 'Tủ trang trí',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/tv-benches-10810.jpeg',
            'room_type_id' => $livingRoomType->id,
        ]);

        $tuQuanAoCat = Category::create([
            'name' => 'Tủ quần áo',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/walk-in-wardrobes-43633.jpeg',
            'room_type_id' => $bedroomType->id,
        ]);

        $bedCat = Category::create([
            'name' => 'Giường',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/beds-with-storage-25205.jpeg',
            'room_type_id' => $bedroomType->id,
        ]);

        $nightStandCat = Category::create([
            'name' => 'Tủ đầu giường',
            'image_url' => 'https://www.ikea.com/us/en/range-categorisation/images/nightstands-20656.jpeg',
            'room_type_id' => $bedroomType->id,
        ]);

        $makeUpVanityCat = Category::create([
            'name' => 'Bàn trang điểm',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dressing-tables-20657.jpeg',
            'room_type_id' => $bedroomType->id,
        ]);

        $diningSetCat = Category::create([
            'name' => 'Bộ bàn ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dining-sets-19145.jpeg',
            'room_type_id' => $diningRoomType->id,
        ]);

        $diningChairCat = Category::create([
            'name' => 'Ghế ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dining-chairs-25220.jpeg',
            'room_type_id' => $diningRoomType->id,
        ]);

        $diningTableCat = Category::create([
            'name' => 'Bàn ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/up-to-4-seats-21826.jpeg',
            'room_type_id' => $diningRoomType->id,
        ]);

        $deskCat = Category::create([
            'name' => 'Bàn làm việc',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/desks-computer-desks-20649.jpeg',
            'room_type_id' => $homeOffice->id,
        ]);

        $officeChairCat = Category::create([
            'name' => 'Ghế văn phòng',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/office-chairs-20654.jpeg',
            'room_type_id' => $homeOffice->id,
        ]);

        $bookcaseCat = Category::create([
            'name' => 'Giá sách',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/bookcases-10382.jpeg',
            'room_type_id' => $homeOffice->id,
        ]);

        $this->call(ProductSeeder::class);
    }
}
