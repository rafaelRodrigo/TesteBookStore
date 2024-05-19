Run php artisan migrate
Run php artisan migrate:fresh --seed --seeder=UserSeeder

API - Documentation

{
	"info": {
		"_postman_id": "8775d248-8177-4bf3-a908-a08e39a21ff3",
		"name": "Book Store",
		"schema": "https://schema.getpostman.com/json/collection/v2.0.0/collection.json",
		"_exporter_id": "3735535",
		"_collection_link": "https://gold-rocket-1136.postman.co/workspace/Team-Workspace~6bd36a17-361f-417f-8aef-a1d039eba197/collection/3735535-8775d248-8177-4bf3-a908-a08e39a21ff3?action=share&source=collection_link&creator=3735535"
	},
	"item": [
		{
			"name": "Users",
			"item": [
				{
					"name": "List users",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDgzNDkwLCJleHAiOjE3MTYwODcwOTAsIm5iZiI6MTcxNjA4MzQ5MCwianRpIjoiZXhXb3pRUlhZVUhVUnJPZiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7Ilg5agZoCrI2KNCXdjixTkDIeS3rPCXBokBOsvN9fk"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/user"
					},
					"response": []
				},
				{
					"name": "Add User",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDgzNDkwLCJleHAiOjE3MTYwODcwOTAsIm5iZiI6MTcxNjA4MzQ5MCwianRpIjoiZXhXb3pRUlhZVUhVUnJPZiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7Ilg5agZoCrI2KNCXdjixTkDIeS3rPCXBokBOsvN9fk"
							}
						},
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"semeao\",\r\n    \"email\": \"rafael.rodrigo50@gmail.com\",\r\n    \"password\": \"123456\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/user"
					},
					"response": []
				},
				{
					"name": "Get User",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDgzNDkwLCJleHAiOjE3MTYwODcwOTAsIm5iZiI6MTcxNjA4MzQ5MCwianRpIjoiZXhXb3pRUlhZVUhVUnJPZiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7Ilg5agZoCrI2KNCXdjixTkDIeS3rPCXBokBOsvN9fk"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/user/1"
					},
					"response": []
				},
				{
					"name": "Update User",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDgzNDkwLCJleHAiOjE3MTYwODcwOTAsIm5iZiI6MTcxNjA4MzQ5MCwianRpIjoiZXhXb3pRUlhZVUhVUnJPZiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7Ilg5agZoCrI2KNCXdjixTkDIeS3rPCXBokBOsvN9fk"
							}
						},
						"method": "PUT",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"rafael semeao\",\r\n    \"email\": \"rafael.rodrigo100@gmail.com\"\r\n    \r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/user/2"
					},
					"response": []
				},
				{
					"name": "Delete User",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDgzNDkwLCJleHAiOjE3MTYwODcwOTAsIm5iZiI6MTcxNjA4MzQ5MCwianRpIjoiZXhXb3pRUlhZVUhVUnJPZiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7Ilg5agZoCrI2KNCXdjixTkDIeS3rPCXBokBOsvN9fk"
							}
						},
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/user/3"
					},
					"response": []
				}
			]
		},
		{
			"name": "Store",
			"item": [
				{
					"name": "List All",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAzNjE1LCJleHAiOjE3MTYxMDcyMTUsIm5iZiI6MTcxNjEwMzYxNSwianRpIjoibG1EcmhoVHVibzdsOGxFeiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.i66WDSmT6i9WKFHnHEBBosMwn0CYBhzhOdpmRRKG47E"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/store"
					},
					"response": []
				},
				{
					"name": "Add",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MDk2MTUwLCJleHAiOjE3MTYwOTk3NTAsIm5iZiI6MTcxNjA5NjE1MCwianRpIjoiUEN4bERiaG9jNVZ5RGxkdCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ItfrwT9oZrbbQibCzSTliJz74UMYln2-wcTiMboklUg"
							}
						},
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"store 1\",\r\n    \"address\": \"Rua carvalho de freitas, 255 - Vila andrade - SP - Brasil\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/store"
					},
					"response": []
				},
				{
					"name": "Get",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAwMDMyLCJleHAiOjE3MTYxMDM2MzIsIm5iZiI6MTcxNjEwMDAzMiwianRpIjoiZHNKOWhBbng5WjJxbklmWCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.dPab4vBP29JjDX8zpy0-WCGpY5bsI-K5aX7Pr-F_cwY"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/store/1"
					},
					"response": []
				},
				{
					"name": "Update",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAwMDMyLCJleHAiOjE3MTYxMDM2MzIsIm5iZiI6MTcxNjEwMDAzMiwianRpIjoiZHNKOWhBbng5WjJxbklmWCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.dPab4vBP29JjDX8zpy0-WCGpY5bsI-K5aX7Pr-F_cwY"
							}
						},
						"method": "PUT",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"rafael semeao\",\r\n    \"address\": \"Rua teste, 123 Vila andrade - SP -Sp - Brasil\"\r\n    \r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/store/2"
					},
					"response": []
				},
				{
					"name": "Delete",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAwMDMyLCJleHAiOjE3MTYxMDM2MzIsIm5iZiI6MTcxNjEwMDAzMiwianRpIjoiZHNKOWhBbng5WjJxbklmWCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.dPab4vBP29JjDX8zpy0-WCGpY5bsI-K5aX7Pr-F_cwY"
							}
						},
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/store/3"
					},
					"response": []
				}
			]
		},
		{
			"name": "Book",
			"item": [
				{
					"name": "List All",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAzNjE1LCJleHAiOjE3MTYxMDcyMTUsIm5iZiI6MTcxNjEwMzYxNSwianRpIjoibG1EcmhoVHVibzdsOGxFeiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.i66WDSmT6i9WKFHnHEBBosMwn0CYBhzhOdpmRRKG47E"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/book"
					},
					"response": []
				},
				{
					"name": "Add",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAyOTY0LCJleHAiOjE3MTYxMDY1NjQsIm5iZiI6MTcxNjEwMjk2NCwianRpIjoiODVtWUI2YVFRaU15c3U5byIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.wOR7m9amVCF5PT5verm0ErcVaSjwmwhu3sf5dsbULIs"
							}
						},
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"Book 3\",\r\n    \"isbn\": 1234,\r\n    \"value\":15.22\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/book"
					},
					"response": []
				},
				{
					"name": "Get",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAwMDMyLCJleHAiOjE3MTYxMDM2MzIsIm5iZiI6MTcxNjEwMDAzMiwianRpIjoiZHNKOWhBbng5WjJxbklmWCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.dPab4vBP29JjDX8zpy0-WCGpY5bsI-K5aX7Pr-F_cwY"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/book/2"
					},
					"response": []
				},
				{
					"name": "Update",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAwMDMyLCJleHAiOjE3MTYxMDM2MzIsIm5iZiI6MTcxNjEwMDAzMiwianRpIjoiZHNKOWhBbng5WjJxbklmWCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.dPab4vBP29JjDX8zpy0-WCGpY5bsI-K5aX7Pr-F_cwY"
							}
						},
						"method": "PUT",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"Book 2\",\r\n    \"isbn\": 456,\r\n    \"value\":100.22\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/book/2"
					},
					"response": []
				},
				{
					"name": "Delete",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTAzNjE1LCJleHAiOjE3MTYxMDcyMTUsIm5iZiI6MTcxNjEwMzYxNSwianRpIjoibG1EcmhoVHVibzdsOGxFeiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.i66WDSmT6i9WKFHnHEBBosMwn0CYBhzhOdpmRRKG47E"
							}
						},
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/book/2"
					},
					"response": []
				}
			]
		},
		{
			"name": "Stores/Book",
			"item": [
				{
					"name": "List All",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTE2MjIzLCJleHAiOjE3MTYxMTk4MjMsIm5iZiI6MTcxNjExNjIyMywianRpIjoiMGV3YThhcHdPVnQ1NUk0RiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.VNmXSuDx8AVJW8nqf8cR0fJqswnbNj-1H863C2os8bc"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/storesbook"
					},
					"response": []
				},
				{
					"name": "Add",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTEwOTQwLCJleHAiOjE3MTYxMTQ1NDAsIm5iZiI6MTcxNjExMDk0MCwianRpIjoieFUwQ1pYbjVERzFPZE5hMSIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.9Y4hLa-C8Mzwo5KlNvQ1Y9AGRGoK_HfWhlfip-UpXEU"
							}
						},
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"book_id\": 1,\r\n    \"store_id\": 2\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/storesbook"
					},
					"response": []
				},
				{
					"name": "Get",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTE2MjIzLCJleHAiOjE3MTYxMTk4MjMsIm5iZiI6MTcxNjExNjIyMywianRpIjoiMGV3YThhcHdPVnQ1NUk0RiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.VNmXSuDx8AVJW8nqf8cR0fJqswnbNj-1H863C2os8bc"
							}
						},
						"method": "GET",
						"header": [],
						"url": "http://127.0.0.1:8000/api/storesbook/1"
					},
					"response": []
				},
				{
					"name": "Update",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTE2MjIzLCJleHAiOjE3MTYxMTk4MjMsIm5iZiI6MTcxNjExNjIyMywianRpIjoiMGV3YThhcHdPVnQ1NUk0RiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.VNmXSuDx8AVJW8nqf8cR0fJqswnbNj-1H863C2os8bc"
							}
						},
						"method": "PUT",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"book_id\": 4,\r\n    \"store_id\": 1\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/storesbook/1"
					},
					"response": []
				},
				{
					"name": "Delete",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": {
								"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE2MTE2MjIzLCJleHAiOjE3MTYxMTk4MjMsIm5iZiI6MTcxNjExNjIyMywianRpIjoiMGV3YThhcHdPVnQ1NUk0RiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.VNmXSuDx8AVJW8nqf8cR0fJqswnbNj-1H863C2os8bc"
							}
						},
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": "http://127.0.0.1:8000/api/storesbook/7"
					},
					"response": []
				}
			]
		},
		{
			"name": "LOGIN",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "raw",
					"raw": "{\r\n    \"email\":\"rafael.rodrigo7@gmail.com\",\r\n    \"password\":\"password\"\r\n}",
					"options": {
						"raw": {
							"language": "json"
						}
					}
				},
				"url": "http://127.0.0.1:8000/api/login"
			},
			"response": []
		}
	]
}
