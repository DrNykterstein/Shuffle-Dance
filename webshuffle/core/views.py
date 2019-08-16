from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def home(request):
	return render(request,"core/index.html")

def inicio(request):
	return render(request,"core/sesion.html")

def dashboard(request):
	return render(request,"core/dashboard.html")

def nuevoasistente(request):
	return render(request,"core/nuevo-asistente.html")
