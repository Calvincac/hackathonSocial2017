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

@app.route("/empresa", methods = ['GET'])
def get_empresa():
    collection = db['empresa']
    cursor = collection.find()
    empresas = json.loads(dumps(cursor))

    collection = db['aluno']

    for empresa in empresas:
        for vaga in empresa['vagas']:
            vaga['numeroDeIndicados'] = len(vaga['alunosIndicados'])

            ids_alunos = vaga['alunosIndicados']
            vaga['alunosIndicados'] = []
            for id_aluno in ids_alunos:
                cursor = collection.find_one({'_id': ObjectId(id_aluno) })
                aluno = json.loads(dumps(cursor))

                if id_aluno in vaga['alunosAceitos']:
                    aluno['aceito'] = True
                else:
                    aluno['aceito'] = False

                vaga['alunosIndicados'].append(aluno)

    return dumps(empresas)

@app.route("/empresa", methods = ['POST'])
def post_empresa():
    collection = db['empresa']
    json = request.get_json()
    
    for vaga in json['vagas']:
        vaga['_id'] = ObjectId()

    collection.insert_one(json)
    return ('', 204)

# @app.route("/vagas", methods = ['GET'])
# def get_vagas():
#     collection = db['vagas']
#     cursor = collection.find()
#     return dumps(cursor)

# @app.route("/vagas", methods = ['POST'])
# def post_vagas():
#     collection = db['vagas']
#     json = request.get_json()
#     collection.insert_one(json)
#     return ('', 204)

@app.route('/selecionaraluno/<idaluno>/vaga/<idvaga>', methods = ['POST'])
def selecionar_aluno_para_vaga(idaluno, idvaga):
    collection = db['empresa']
    cursor_vaga = collection.find_one({'_id': ObjectId(idvaga) })
    vaga = json.loads(dumps(cursor_vaga))

    print dumps(cursor_vaga)

    #collection.update_one({ "_id" : ObjectId(idvaga) }, { '$set': { "alunosAceitos" : dumps(vaga['alunosAceitos']) }})

    return ('', 204)

@app.route('/deletardb', methods = ['DELETE'])
def deletar_db():
    collection = db['vagas']
    collection.delete_many({})

    collection = db['aluno']
    collection.delete_many({})

    collection = db['empresa']
    collection.delete_many({})

    return ('', 204)

if __name__ == "__main__":
    app.run(port=5001)
