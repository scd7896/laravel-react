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