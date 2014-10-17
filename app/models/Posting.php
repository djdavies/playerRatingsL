<?
class User extends Eloquent {

    protected $guarded = ['id', 'password'];

    public function user() {
    	return $this->belongsTo('User');
	}

	public function getUrl() {
		return 'fdjsk';
	}
}