<?php
namespace App\Services;

use App\Models\User;
use App\models\PlaceAdmin;
use App\models\keywords;
use App\models\Categories;
use App\models\Pictures;
use App\models\Roles;

class UserRegistrar
{
	public function register(array $data)
	{
		$data = array_only($data, [
			'name',
      //      'fname',
        //    'lname',
          //  'province_id',
            //'city_id',
            //'bio',
            'email',
            'mobile',
            //'newsletter',
            //'birthday',
            'password'
        ]);


		return User::create($data);
	}
  public function add_keyword(array $data)
      {
          $data = array_only($data, [
            'title',
            'user_id'
          ]);


          return Keywords::create($data);
      }
      public function add_category(array $data)
      {
          $data = array_only($data, [
            'title',
            'user_id'
          ]);


          return Categories::create($data);
      }

      public function add_picture(array $data)
      {
          $data = array_only($data, [
            'title',
            'user_id',
            'picture'
          ]);


          return Pictures::create($data);
      }

      public function add_role(array $data)
      {
          $data = array_only($data, [
            'name'
          ]);


          return Roles::create($data);
      }

}