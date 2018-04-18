import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.testDatabase
UserCoin = db.UserCoin

insert = {
	"name": "ByrdCoin"
	
}


result = UserCoin.insert_one(insert)