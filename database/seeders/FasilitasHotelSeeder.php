<?php

namespace Database\Seeders;

use App\Models\FasilitasHotel;
use Illuminate\Database\Seeder;

class FasilitasHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Kolam Renang',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'In ut turpis vitae dolor dictum suscipit. Mauris nec orci sit amet felis luctus eleifend ac vitae nisi. Maecenas non ligula et neque varius aliquet. Phasellus porta ipsum sed ornare pulvinar. Phasellus rutrum tincidunt enim, vulputate venenatis risus dignissim at. Praesent sed tristique tellus, consequat molestie tellus.',
        ]);
        
        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Restoran',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'In ut turpis vitae dolor dictum suscipit. Mauris nec orci sit amet felis luctus eleifend ac vitae nisi. Maecenas non ligula et neque varius aliquet. Phasellus porta ipsum sed ornare pulvinar. Phasellus rutrum tincidunt enim, vulputate venenatis risus dignissim at. Praesent sed tristique tellus, consequat molestie tellus.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Parkir Luas',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'In ut turpis vitae dolor dictum suscipit. Mauris nec orci sit amet felis luctus eleifend ac vitae nisi. Maecenas non ligula et neque varius aliquet. Phasellus porta ipsum sed ornare pulvinar. Phasellus rutrum tincidunt enim, vulputate venenatis risus dignissim at. Praesent sed tristique tellus, consequat molestie tellus.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Sarapan Pagi Gratis',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'In ut turpis vitae dolor dictum suscipit. Mauris nec orci sit amet felis luctus eleifend ac vitae nisi. Maecenas non ligula et neque varius aliquet. Phasellus porta ipsum sed ornare pulvinar. Phasellus rutrum tincidunt enim, vulputate venenatis risus dignissim at. Praesent sed tristique tellus, consequat molestie tellus.',
        ]);

    }
}
