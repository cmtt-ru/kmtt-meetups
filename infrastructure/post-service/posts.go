package main

import "errors"

type Post struct {
	ID       int    `json:"id"`
	Title    string `json:"title"`
	Content  string `json:"content"`
	AuthorId int    `json:"authorId"`
}

func FindPost(id int) (*Post, error) {
	posts := getPosts()

	for _, v := range posts {
		if v.ID == id {
			return &v, nil
		}
	}

	return nil, errors.New("post not found")
}

func getPosts() []Post {
	return []Post{
		{
			ID:       1,
			Title:    "YandexGPT",
			Content:  "YandexGPT is AI chatbot from Yandex",
			AuthorId: 1,
		},
		{
			ID:       2,
			Title:    "ChatGPT",
			Content:  "ChatGPT is AI chatbot from OpenAI",
			AuthorId: 1,
		},
		{
			ID:       3,
			Title:    "BingAI",
			Content:  "BingAI is AI chatbot from Microsoft",
			AuthorId: 2,
		},
		{
			ID:       4,
			Title:    "Bard",
			Content:  "Bard is AI chatbot from Google",
			AuthorId: 3,
		},
	}
}
