<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql-products')->table('categories')->insert([
            //Level 1 -------------------------
            [
                'id' => '1',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کالای دیجیتال',
                'slug' => 'کالای-دیجیتال',
                'icon' => 'mdi mdi-monitor',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '2',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'آرایشی ، بهداشتی و سلامت',
                'slug' => 'آرایشی-،-بهداشتی-و-سلامت',
                'icon' => 'mdi mdi-diamond-outline',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '3',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'خودرو، ابزار اداری',
                'slug' => 'خودرو،-ابزار-اداری',
                'icon' => 'mdi mdi-wrench',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '4',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'مد، پوشاک',
                'slug' => 'مد،-پوشاک',
                'icon' => 'mdi mdi-tshirt-v-outline',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '5',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'خانه، آشپزخانه',
                'slug' => 'خانه،-آشپزخانه',
                'icon' => 'mdi mdi-sofa',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '6',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کتاب، لوازم تحریر',
                'slug' => 'کتاب،-لوازم-تحریر',
                'icon' => 'mdi mdi-book-open-page-variant',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '7',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'اسباب بازی، کودک، نوزاد',
                'slug' => 'اسباب-بازی،-کودک،-نوزاد',
                'icon' => 'mdi mdi-baby',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '8',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'ورزش و سفر',
                'slug' => 'ورزش-و-سفر',
                'icon' => 'mdi mdi-bike',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '9',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'خوردنی و آشامیدنی',
                'slug' => 'خوردنی-و-آشامیدنی',
                'icon' => 'mdi mdi-food-fork-drink',
                'level' => '1',
                'parent_id' => null,
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],

            //Level 2 ----------------------------
            [
                'id' => '10',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوازم جانبی گوشی',
                'slug' => 'لوازم-جانبی-گوشی',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '11',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'گوشی موبایل',
                'slug' => 'گوشی-موبایل',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '12',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'واقعیت مجازی',
                'slug' => 'واقعیت-مجازی',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '13',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'مچ بند و ساعت هوشمند',
                'slug' => 'مچ بند-و-ساعت-هوشمند',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '14',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'هدفون، هدست و هندزفری',
                'slug' => 'هدفون،-هدست-و-هندزفری',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '15',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'دوربین',
                'slug' => 'دوربین',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '16',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوازم جانبی دوربین',
                'slug' => 'لوازم-جانبی-دوربین',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '17',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کامپیوتر و تجهیزات جانبی',
                'slug' => 'کامپیوتر-و-تجهیزات-جانبی',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '18',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لپ تاپ',
                'slug' => 'لپ-تاپ',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '19',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لوازم جانبی لپ تاپ',
                'slug' => 'لوازم-جانبی-لپ-تاپ',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '20',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'تبلت',
                'slug' => 'تبلت',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '21',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'شارژر تبلت و موبایل',
                'slug' => 'شارژر-تبلت-و-موبایل',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '22',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'باتری',
                'slug' => 'باتری',
                'icon' => null,
                'level' => '2',
                'parent_id' => '1',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],

            //Level 3 ------------------------
            [
                'id' => '23',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کیف و کاور گوشی',
                'slug' => 'کیف-و-کاور-گوشی',
                'icon' => null,
                'level' => '3',
                'parent_id' => '10',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '24',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'پاوربانک',
                'slug' => 'پاوربانک',
                'icon' => null,
                'level' => '3',
                'parent_id' => '10',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '25',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'سامسونگ',
                'slug' => 'سامسونگ',
                'icon' => null,
                'level' => '3',
                'parent_id' => '11',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '26',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'اپل',
                'slug' => 'اپل',
                'icon' => null,
                'level' => '3',
                'parent_id' => '11',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '27',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'دوربین عکاسی دیجیتال',
                'slug' => 'دوربین-عکاسی-دیجیتال',
                'icon' => null,
                'level' => '3',
                'parent_id' => '15',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '28',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'لنز',
                'slug' => 'لنز',
                'icon' => null,
                'level' => '3',
                'parent_id' => '15',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '29',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کیف',
                'slug' => 'کیف',
                'icon' => null,
                'level' => '3',
                'parent_id' => '16',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '30',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'تجهیزات مخصوص بازی',
                'slug' => 'تجهیزات-مخصوص-بازی',
                'icon' => null,
                'level' => '3',
                'parent_id' => '16',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '31',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'قطعات داخلی کامپیوتر',
                'slug' => 'قطعات-داخلی-کامپیوتر',
                'icon' => null,
                'level' => '3',
                'parent_id' => '17',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
            [
                'id' => '32',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
                'title' => 'کیف، کوله و کاور',
                'slug' => 'کیف،-کوله-و-کاور',
                'icon' => null,
                'level' => '3',
                'parent_id' => '19',
                'metaTitle' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب',
                'metaDescription' => 'آیا می دانستید که یادگیری لاراول بسیار آسان است؟ بله درست شنیدید بسیار آسان البته بستگی به ارائه مطلب توسط مدرس دارد. ما در سایت "لاراول لرن" از بهترین شیوه آمو',
            ],
        ]

        );
    }
}
