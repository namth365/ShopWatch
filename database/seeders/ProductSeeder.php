<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Product;
        $item->id = 4;
        $item->name = "Đồng hồ Nam Adriatica A8134.5234QF";
        $item->image = "a8134.5234qf-nam-1.jpg";
        $item->price = "4289000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "- Dây đeo làm từ da bò êm nhẹ, mềm mại, ôm sát cổ tay, khung viền thép không gỉ 316L bền bỉ";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 5;
        $item->name = "Đồng hồ Nam Adriatica A8306.5114QF";
        $item->image = "a8306.5114qf-nam-1.jpg";
        $item->price = "4485000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Dây đeo thép không gỉ cùng khung viền thép không gỉ 316L sang trọng, bền chắc, chống ăn mòn";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 6;
        $item->name = "Đồng hồ Nam Adriatica A8312.5B24Q ";
        $item->image = "a8312.5b24q-nam-1.jpg";
        $item->price = "3605000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Dây đeo làm từ da bò êm ái, nhẹ nhàng, ôm tay rất tốt, khung viền thép không gỉ 316L bền chắc";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 7;
        $item->name = "Đồng hồ Nam Adriatica A8313.5B54CH";
        $item->image = "adriatica-a83135b54ch-nam-1.jpg";
        $item->price = "4895000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Hệ số chống nước 5 ATM: Người dùng thoải mái đeo đồng hồ khi tắm, đi mưa, không mang khi bơi, lặn";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 8;
        $item->name = "Đồng hồ Nam Adriatica A1296.5214Q";
        $item->image = "a1296.5214q-nam-1.jpg";
        $item->price = "3667000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Dây đeo làm từ da bò mềm nhẹ, êm ái, cho cảm giác thoải mái khi mang, khung viền thép không gỉ 316L cứng cáp";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 9;
        $item->name = "Đồng hồ Nam Adriatica A8194.5114Q ";
        $item->image = "a8194.5114q-nam-1.jpg";
        $item->price = "3667000";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "Dây đeo thép không gỉ cùng khung viền thép không gỉ 316L có độ bền cao, chống ăn mòn, chống oxy hóa tốt";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 10;
        $item->name = "Đồng hồ Nam Casio MTP-E321B-1AVDF";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = ;
        $item->name = "";
        $item->image = "";
        $item->price = "";
        $item->quantily = "10";
        $item->status = "1";
        $item->supplier = "ACC";
        $item->description = "";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
