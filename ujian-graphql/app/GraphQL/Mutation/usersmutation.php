<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\User;

class usersmutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateusers'
    ];

    public function type()
    {
        return GraphQL::type('User');
    }

    public function args()
    {
        return [
          'id' => [
              'type' => Type::nonNull(Type::string()),
              'description' => 'The id of the user'
          ],
          'name' => [
              'type' => Type::string(),
              'description' => 'The name of the user'
          ],
          'email' => [
              'type' => Type::string(),
              'description' => 'The email of user'
          ],
          'profesion' => [
              'type' => Type::string(),
              'description' => 'The profesion of user'
          ],
          'jabatan' => [
              'type' => Type::string(),
              'description' => 'The jabatan of user'
          ],
          'jobdesk' => [
              'type' => Type::string(),
              'description' => 'The jobdesk of user'
          ],
        ];
    }

    public function resolve($root, $args)
    {
        $user = User::find($args['id']);

        if (!$user) {
            return null;
        }


        $user->name = $args['name'];
        $user->email = $args['email'];
        $user->profesion = $args['profesion'];
        $user->jabatan = $args['jabatan'];
        $user->jobdesk = $args['jobdesk'];


        $user->save();

        return $user;
    }
}
