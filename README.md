use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {

    public function items()
    {
        return $this->hasMany('Item'); // 유저가 많은 아이템을 가지고 있음
    }

}


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User'); // 아이템은 하나의 유저만을 가지고 있음
    }

}

//회사에서 테스트해보자

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {

    public function books()
    {
        return $this->embedsMany('Book');
    }

}
You can access the embedded models through the dynamic property:

$books = User::first()->books;
The inverse relation is automagically available, you don't need to define this reverse relation.

$user = $book->user;