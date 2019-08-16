
from django.contrib import admin
from django.urls import path, include


urlpatterns = [
	#pagina de core
	path('', include('core.urls')),

	#Pagina Admin
	path('admin/',admin.site.urls),
]
