from django.http import Http404

from ..models import Tecnologia

# retorna lista de tecnologias
def listar_tecnologias():
    tecnologias = Tecnologia.objects.all()
    return tecnologias

# cadastra uma nova tecnologia na base de dados
def cadastrar_tecnologia(tecnologia):
    return Tecnologia.objects.create(nome=tecnologia.nome)

# retorna tecnologia pelo id ou um erro Exception
def listar_tecnologia_id(id):
    try:
        return Tecnologia.objects.get(id=id)
    except Tecnologia.DoesNotExist:
        raise Http404

# altera informações de uma tecnologia
def editar_tecnologia(tecnologia_antiga, tecnologia_nova):
    tecnologia_antiga.nome = tecnologia_nova.nome
    tecnologia_antiga.save(force_update=True)

# remove uma tecnologia da base de dados
def remover_tecnologia(tecnologia):
    tecnologia.delete()