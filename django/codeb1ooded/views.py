# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.shortcuts import render
from django.http import JsonResponse

from database.models import *

def createHomePage(request):
    all_achievements = []
    all_projects = []
    all_skills = []
    all_timeline = []
    all_speaking_opportunities = []
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
    for pro in projects:
        project = {
                'title' : pro.TITLE,
                'star_link' : pro.STAR_LINK,
                'fa_icon' : pro.FA_ICON,
                'description' : pro.DESCRIPTION
        }
        all_projects.append(project)
    skills = Skills.objects.all().order_by('-SKILL_ID')
    for sk in skills:
        skill = {
                'title' : sk.TITLE,
                'sub_title' : sk.SUB_TITLE,
                'description' : sk.DESCRIPTION,
                'image' : sk.IMAGE
        }
        all_skills.append(skill)
    timelines = Timeline.objects.all().order_by('-TIMELINE_ID')
    for tl in timelines:
        timeline = {
                'title' : tl.TITLE,
                'content' : tl.CONTENT,
                'time' : tl.TIME,
                'category' : tl.CATEGORY
        }
        all_timeline.append(timeline)
    speakingOpportunities = SpeakingOpportunities.objects.all().order_by('-SPEAKER_ID')
    for so in speakingOpportunities:
        opportunity = {
                'title' : so.TITLE,
                'brief' : so.BRIEF,
                'content' : so.CONTENT,
                'image' : so.IMAGE
        }
        all_speaking_opportunities.append(opportunity)
    return render(request,'index.html', {'achievements': all_achievements, 'projects': all_projects, 'skills':all_skills, 'timeline':all_timeline, "speaking_opportunities": all_speaking_opportunities})
