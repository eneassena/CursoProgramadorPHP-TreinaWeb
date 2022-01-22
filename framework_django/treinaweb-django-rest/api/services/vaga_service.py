from ..models import Vagas 
from .tecnologia_service import listar_tecnologia_id
from django.http import Http404

def listar_vagas():
	return Vagas.objects.all()


def cadastrar_vaga(vaga):
	vaga_db=Vagas.objects.create( titulo=vaga.titulo, descricao=vaga.descricao, 
			salario=vaga.salario, local=vaga.local, 
			tipo_contratacao=vaga.tipo_contratacao, 
			contato=vaga.contato, quantidade=vaga.quantidade )
 
	vaga_db.save()

	for i in vaga.tecnologias:
		tecnologia = listar_tecnologia_id(i.id)
		vaga_db.tecnologias.add(tecnologia)
	return vaga_db


def listar_vaga_id(id):
	try:
		return Vagas.objects.get(id=id)		
	except Vagas.DoesNotExist:
		raise Http404


def editar_vaga(vaga_antiga, vaga_nova):
	vaga_antiga.titulo = vaga_nova.titulo
	vaga_antiga.descricao = vaga_nova.descricao
	vaga_antiga.salario = vaga_nova.salario
	vaga_antiga.local = vaga_nova.local
	vaga_antiga.contato = vaga_nova.contato
	vaga_antiga.tipo_contratacao = vaga_nova.tipo_contratacao
	vaga_antiga.quantidade = vaga_nova.quantidade

	vaga_antiga.tecnologias.set(vaga_nova.tecnologias)
	vaga_antiga.save(force_update=True)



def delete_vaga(vaga):
	vaga.delete()