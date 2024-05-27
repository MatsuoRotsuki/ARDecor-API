<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\RoomType;
use App\Models\MeasurementType;
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
        ]);

        $tableCat = Category::create([
            'name' => 'Bàn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/tables-desks-fu004.jpeg',
        ]);

        $chairCat = Category::create([
            'name' => 'Ghế',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/chairs-fu002.jpeg',
        ]);

        $tvStandCat = Category::create([
            'name' => 'Tủ kệ TV',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/tv-benches-10810.jpeg',
        ]);

        $accentChestCat = Category::create([
            'name' => 'Tủ trang trí',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/cabinets-cupboards-st003.jpeg',
        ]);

        $tuQuanAoCat = Category::create([
            'name' => 'Tủ quần áo',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/walk-in-wardrobes-43633.jpeg',
        ]);

        $bedCat = Category::create([
            'name' => 'Giường',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/beds-with-storage-25205.jpeg',
        ]);

        $nightStandCat = Category::create([
            'name' => 'Tủ đầu giường',
            'image_url' => 'https://www.ikea.com/us/en/range-categorisation/images/nightstands-20656.jpeg',
        ]);

        $makeUpVanityCat = Category::create([
            'name' => 'Bàn trang điểm',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dressing-tables-20657.jpeg',
        ]);

        $diningSetCat = Category::create([
            'name' => 'Bộ bàn ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dining-sets-19145.jpeg',
        ]);

        $diningChairCat = Category::create([
            'name' => 'Ghế ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/dining-chairs-25220.jpeg',
        ]);

        $diningTableCat = Category::create([
            'name' => 'Bàn ăn',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/up-to-4-seats-21826.jpeg',
        ]);

        $deskCat = Category::create([
            'name' => 'Bàn làm việc',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/desks-computer-desks-20649.jpeg',
        ]);

        $officeChairCat = Category::create([
            'name' => 'Ghế văn phòng',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/office-chairs-20654.jpeg',
        ]);

        $bookcaseCat = Category::create([
            'name' => 'Giá sách',
            'image_url' => 'https://www.ikea.com/global/assets/range-categorisation/images/bookcases-10382.jpeg',
        ]);

        $lightningCat = Category::create([
            'name' => 'Hệ thống chiếu sáng',
            'image_url' => 'https://www.ikea.com/us/en/range-categorisation/images/lighting-li001.jpeg',
        ]);

        $measurementType1 = MeasurementType::create([
            'name' => 'Chiều cao',
            'unit' => 'mm',
        ]);

        $measurementType2 = MeasurementType::create([
            'name' => 'Chiều dài',
            'unit' => 'mm',
        ]);

        $measurementType3 = MeasurementType::create([
            'name' => 'Chiều rộng',
            'unit' => 'mm',
        ]);

        $measurementType4 = MeasurementType::create([
            'name' => 'Tải trọng tối đa',
            'unit' => 'kg',
        ]);

        $measurementType5 = MeasurementType::create([
            'name' => 'Chiều cao tối thiểu',
            'unit' => 'mm',
        ]);

        $measurementType6 = MeasurementType::create([
            'name' => 'Chiều cao tối đa',
            'unit' => 'mm',
        ]);

        $measurementType7 = MeasurementType::create([
            'name' => 'Chiều cao dưới đồ nội thất',
            'unit' => 'mm',
        ]);

        $measurementType8 = MeasurementType::create([
            'name' => 'Chiều sâu ngăn kéo',
            'unit' => 'mm',
        ]);

        $measurementType9 = MeasurementType::create([
            'name' => 'Chiều rộng ngăn kéo',
            'unit' => 'mm',
        ]);

        $measurementType10 = MeasurementType::create([
            'name' => 'Chiều rộng ghế',
            'unit' => 'mm',
        ]);

        $measurementType11 = MeasurementType::create([
            'name' => 'Chiều sâu ghế',
            'unit' => 'mm',
        ]);

        $measurementType12 = MeasurementType::create([
            'name' => 'Chiều cao ghế',
            'unit' => 'mm',
        ]);

        $measurementType13 = MeasurementType::create([
            'name' => 'Đã thử nghiệm với khối lượng',
            'unit' => 'kg',
        ]);

        $measurementType14 = MeasurementType::create([
            'name' => 'Công suất tiêu thụ',
            'unit' => 'W',
        ]);

        $measurementType15 = MeasurementType::create([
            'name' => 'Chiều dài dây diện',
            'unit' => 'mm',
        ]);

        $measurementType16 = MeasurementType::create([
            'name' => 'Đường kính đáy',
            'unit' => 'mm',
        ]);

        $measurementType17 = MeasurementType::create([
            'name' => 'Đường kính chao đèn',
            'unit' => 'mm',
        ]);

        $measurementType18 = MeasurementType::create([
            'name' => 'Đường kính',
            'unit' => 'mm',
        ]);

        $measurementType19 = MeasurementType::create([
            'name' => 'Đường kính trong',
            'unit' => 'mm',
        ]);

        $measurementType20 = MeasurementType::create([
            'name' => 'Đường kính ngoài',
            'unit' => 'mm',
        ]);

        $this->call(ProductSeeder::class);
    }
}
