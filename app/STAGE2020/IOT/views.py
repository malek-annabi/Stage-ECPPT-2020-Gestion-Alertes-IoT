from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def Home(request):
    return render(request,'iot/Dashboard.html')

def login(request):
    return render(request,'iot/login.html')