
from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path('admin/', admin.site.urls),
    path('api/', include('api.urls')),
    path('oauth2/', include('oauth2_provider.urls', namespace="oauth2_provider"))
]
