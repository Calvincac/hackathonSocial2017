import flask
import pymongo
import json

from bson.json_util import dumps
from flask import Flask, request
from pymongo import MongoClient
from bson.objectid import ObjectId
app = Flask(__name__)

client = MongoClient('mongodb://tuachance1:tuachance1@ds141960.mlab.com:41960/tuachance')
db = client.get_default_database()

@app.route("/aluno", methods = ['GET'])
def get_aluno():
    collection = db['aluno']
    cursor = collection.find()
    return dumps(cursor)

@app.route("/aluno", methods = ['POST'])
def post_aluno():
    collection = db['aluno']
    json = request.get_json()
    collection.insert_one(json)
    return ('', 204)

@app.route("/vagas", methods = ['GET'])
def get_vagas():
    collection = db['vagas']
    cursor = collection.find()
    return dumps(cursor)

@app.route("/vagas", methods = ['POST'])
def post_vagas():
    collection = db['vagas']
    json = request.get_json()
    collection.insert_one(json)
    return ('', 204)

@app.route('/selecionar/<idaluno>/para/<idvaga>')
def selecionar_aluno_para_vaga(idaluno, idvaga):
    collection = db['vagas']
    cursor_vaga = collection.find_one({'_id': ObjectId(idvaga) })
    
    vaga = json.loads(dumps(cursor_vaga))
    vaga['alunos_recomendados'].remove(idaluno)
    vaga['alunos_aceitos'].append(idaluno)   
    return ('', 204)

if __name__ == "__main__":
    app.run(port=5001)
