import pymongo
from pymongo import MongoClient

client = MongoClient()
db = client.testDatabase
search = {}
UserCoin = db.UserCoin.find(search)

for document in UserCoin:
	print(document['name'] + '<br/>')
