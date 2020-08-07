from django.urls import path
from . import views
urlpatterns = [
    path('',views.Home),
    path('Users',views.Users),
]
