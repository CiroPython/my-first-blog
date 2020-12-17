from django.conf import settings
from django.template.loader import get_template
from django.template import Context
from django.http import HttpResponse
from django.shortcuts import render
settings.BASE_DIR
'/home/cirojulia/django_test/mytestsite/'

import os

os.path.join(settings.BASE_DIR, 'templates')
'/home/cirojulia/django_test/mytestsite/mytestsite/templates/'

import datetime

def index(request):
    return render(request,'home.html')

def quiensoy(request):
    return render(request,'quiensoy.php')

def contact(request):
    return render(request,'contacto.php')

