import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.testDatabase
UserCoin = db.UserCoin

insert = {
	"name": "Blaziken Coin"
	
}


result = UserCoin.insert_one(insert)