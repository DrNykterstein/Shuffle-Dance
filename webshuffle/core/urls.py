from django.urls import path, include
from . import views
urlpatterns = [
	path('',views.home, name="home"),
	path('sesion/',views.inicio, name="sesion"),
	path('dashboard/',views.dashboard, name="dashboard"),
	path('nuevoasistente/',views.nuevoasistente, name="nuevoasistente")
    
]