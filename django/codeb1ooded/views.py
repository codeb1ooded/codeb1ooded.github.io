# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.shortcuts import render
from django.http import JsonResponse

from database.models import *

def createHomePage(request):
    all_achievements = []
    achievements = Achievements.objects.all().order_by('-ACHIEVEMENT_ID')
    for ach in achievements:
        achievement = {
                'title' : ach.TITLE,
                'subtitle' : ach.SUB_TITLE,
                'description' : ach.DESCRIPTION,
                'issuer' : ach.ISSUER
        }
        all_achievements.append(achievement)
    return render(request,'index.html', {'achievements': all_achievements})
