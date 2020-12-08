<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    
    class User extends Model{
        protected $table = 'tbluser';   //table name

        //table column
        protected $fillable = [
            'username', 'password'
        ];

        public $timestamps = false;
        protected $primaryKey = 'id';

        protected $hidden = [
            'password'
        ];
    }
