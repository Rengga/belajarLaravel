<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory, Sluggable;

    //protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];

    public function scopeFilter($query, array $filters){

        // $query->when($filters['search'] ?? false, function($query, $search){
        //     return $query->where(function($query) use ($search){
        //         $query->where('title','like','%'.$search.'%')
        //         ->orWhare('body','like','%'.$search.'%');
        //     });
        //  });

        $query->when($filters['search'] ?? false, function($query, $search){
                return $query->where('title', 'like', '%' . $search. '%')
                ->orWhere('body', 'like', '%' . $search. '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        //cara sama beda koding
        $query->when($filters['author'] ?? false, fn($query, $author)=>
             $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
    );
    }


    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sluggable(): array
    {
        return ['slug'=>['source'=>'title']];
    }
}
