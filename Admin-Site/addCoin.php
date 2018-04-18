import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.testDatabase
UserShoes = db.UserShoes

insert = {
	"name": "Blaziken Coin"
	
}


result = UserShoes.insert_one(insert)