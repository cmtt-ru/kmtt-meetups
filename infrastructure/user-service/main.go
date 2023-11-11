package main

import (
	"github.com/gin-gonic/gin"
	"github.com/spf13/cast"
	"net/http"
)

func main() {
	router := gin.Default()
	router.GET("/users/", findUserById)

	router.Run(":80")
}

func findUserById(c *gin.Context) {
	id := cast.ToInt(c.Query("id"))
	user, err := FindUser(id)
	if err != nil {
		c.IndentedJSON(http.StatusNotFound, err)

		return
	}

	c.IndentedJSON(http.StatusOK, user)
}
