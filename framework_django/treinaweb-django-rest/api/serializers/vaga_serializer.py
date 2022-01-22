from rest_framework.reverse import reverse
from rest_framework import serializers
from ..models import Vagas


class VagasSerializer(serializers.ModelSerializer):
    
    links = serializers.SerializerMethodField()
    
    class Meta:
        model = Vagas
        fields = ('id', 'titulo', 'descricao', 'salario', 'local',
                  'quantidade', 'tipo_contratacao', 'contato',
                  'tecnologias', 'links', )

    def get_links(self, obj):
        request = self.context['request']
        return {
            'self' : reverse('vaga-detail', kwargs={ 'id' : obj.pk }, request=request),
            'delete' : reverse('vaga-detail', kwargs={ 'id' : obj.pk }, request=request),
            'update' : reverse('vaga-detail', kwargs={ 'id' : obj.pk }, request=request),            
        }
        
        