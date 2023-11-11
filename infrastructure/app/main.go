package main

import (
	"fmt"
	"net/http"
)

func main() {
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		fmt.Fprintf(w, "Hello world from version 2: %s", r.Header.Get("X-Version-Decision"))
	})

	http.ListenAndServe(":8080", nil)
}
