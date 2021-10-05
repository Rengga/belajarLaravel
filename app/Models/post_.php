<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class post 
{
    private static $dataposts =
    [
        [
            "title" => "judul1",
            "slug" => "judul+1",
            "author" => "rengga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus, ducimus doloremque excepturi, sequi quidem qui fugit optio consequuntur commodi aperiam veritatis! Non at iste esse corporis quibusdam totam, aperiam amet cumque? Sint, dignissimos voluptas. Repellat dolor sint autem illum ad aperiam eveniet laboriosam ratione deleniti dolorum aliquam architecto odit dolorem, ex facilis, itaque iure neque voluptatem nostrum tempore consequatur, commodi mollitia earum! Necessitatibus quia voluptates quae commodi? Dolore suscipit ut illo minus et, nam vitae minima repellat nihil odio iste recusandae ab fugiat maiores totam? Nesciunt eius voluptates aspernatur."
        ],
        [
            "title" => "judul2",
            "slug" => "judul+2",
            "author" => "hicun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia commodi alias voluptatum et nobis ut voluptatem tempora corporis voluptas dignissimos saepe cupiditate ullam doloremque velit rerum minus laborum, voluptate veniam in assumenda odio expedita. Accusantium natus distinctio iure repellendus? Est molestias cupiditate atque adipisci animi perferendis mollitia officiis eos magni ex, odio accusantium voluptates accusamus repudiandae omnis. Sunt, et magni!"
        ],
    ];

    public static function all(){
        return collect(self::$dataposts);
    }
    public static function find($slug){
        $mypost = static::all();
        return $mypost->firstWhere('slug', $slug);
    }
}
