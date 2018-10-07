# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.shortcuts import render
from django.http import JsonResponse

from database.models import *

def createHomePage(request):
    all_achievements = []
    all_projects = []
    achievements = Achievements.objects.all().order_by('-ACHIEVEMENT_ID')
    for ach in achievements:
        achievement = {
                'title' : ach.TITLE,
                'subtitle' : ach.SUB_TITLE,
                'description' : ach.DESCRIPTION,
                'issuer' : ach.ISSUER
        }
        all_achievements.append(achievement)
    projects = Project.objects.all().order_by('-PROJECT_ID')
    iterator = 0
    for pro in projects:
        project = {
                'iterator': iterator,
                'title' : pro.TITLE,
                'star_link' : pro.STAR_LINK,
                'fa_icon' : pro.FA_ICON,
                'description' : pro.DESCRIPTION
        }
        iterator += 1
        all_projects.append(project)
    return render(request,'index.html', {'achievements': all_achievements, 'projects': all_projects})
