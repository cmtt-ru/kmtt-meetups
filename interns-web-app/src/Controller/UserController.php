<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\User;

/**
 * Class UserController
 *
 * @package App\Controller
 */
class UserController extends AbstractController
{
    /**
     * Returns page with user name
     */
    public function getName(): void
    {
        $id = (int) $_GET['id'];
        $user = $this->getUserById($id);

        $this->render('user-name', [
            'id' => $id,
            'user' => $user,
        ]);
    }

    /**
     * Returns page with user id
     */
    public function getId(): void
    {
        $id = (int) $_GET['id'];
        $user = $this->getUserById($id);

        $this->render('user-id', [
            'id' => $id,
            'user' => $user,
        ]);
    }

    /**
     * Returns User model from storage by id
     *
     * @param int $id - user identifier
     *
     * @return User
     */
    private function getUserById(int $id): User
    {
        $storage = [
            [
                'id' => 1,
                'name' => 'Petya'
            ],
            [
                'id' => 2,
                'name' => 'Vasya'
            ],
            [
                'id' => 3,
                'name' => 'Ivan'
            ],
            [
                'id' => 4,
                'name' => 'Kolya'
            ]
        ];

        foreach ($storage as $user) {
            if ($user['id'] == $id) {
                return new User($user['id'], $user['name']);
            }
        }

        return new User(0, 'unknown');
    }
}