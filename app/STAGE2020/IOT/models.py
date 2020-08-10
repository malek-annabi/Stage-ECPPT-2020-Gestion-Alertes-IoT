from django.db import models

# Create your models here.
class users (models.Model):
    username=models.CharField(max_length=15,null=False)
    password = models.CharField(max_length=30,null=False)