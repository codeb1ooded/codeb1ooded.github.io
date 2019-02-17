# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.http import JsonResponse

from .init_functions import *

def initDataBase(request):
    initAchievements()
    initSkills()
    initSkillDiagram()
    initProjects()
    initTimeline()
    initSpeakingOpportunities()
    initBlogs()
    return JsonResponse({"Status":"Success"})
