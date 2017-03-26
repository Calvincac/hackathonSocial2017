import os
import pymongo
import json
from flask import Flask

from pymongo import MongoClient

client = MongoClient('mongodb://tuachance1:tuachance1@ds141960.mlab.com:41960/tuachance')
db = client.get_default_database()

app = Flask(__name__)

@app.route('/getaluno', methods = ['GET'])
def getaluno():
	collection = db['aluno']
	aux = collection.find()
	listaalunos = []
	for aluno in aux:
		listaalunos.append(aluno)
	return json.dumps(listaalunos)

@app.route("/cadastraaluno", methods = ['POST'])
def cadastraaluno():
	collection = db['aluno']
	aluno = []
	aluno['nome'] = request.form['nome']
	aluno['idade'] = request.form['idade']
	colletion.insert_one(json.dumps(aluno))
	return 'HelloWorld!'

if __name__ == '__main__':
	# Bind to PORT if defined, otherwise default to 5000.
	port = int(os.environ.get('PORT', 5003))
	app.run(host='0.0.0.0', port=port)
