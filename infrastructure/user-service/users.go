package main

import "errors"

type User struct {
	ID   int    `json:"id"`
	Name string `json:"name"`
}

func FindUser(id int) (*User, error) {
	users := getUsers()

	for _, v := range users {
		if v.ID == id {
			return &v, nil
		}
	}

	return nil, errors.New("user not found")
}

func getUsers() []User {
	return []User{
		{
			ID:   1,
			Name: "Ivan",
		},
		{
			ID:   2,
			Name: "Sergey",
		},
		{
			ID:   3,
			Name: "Philipp",
		},
		{
			ID:   4,
			Name: "Vlad",
		},
	}
}
