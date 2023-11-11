package main

import (
	"github.com/gin-gonic/gin"
	"net/http"
	"strconv"
)

func main() {
	router := gin.Default()
	router.GET("/posts/", findPostById)

	router.Run(":80")
}

func findPostById(c *gin.Context) {
	idQ := c.Query("id")
	id, _ := strconv.Atoi(idQ)
	post, err := FindPost(id)
	if err != nil {
		c.IndentedJSON(http.StatusNotFound, err)

		return
	}

	c.IndentedJSON(http.StatusOK, post)
}
