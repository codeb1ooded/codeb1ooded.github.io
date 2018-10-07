from __future__ import unicode_literals

from django.db import models

class Achievements(models.Model):
    ACHIEVEMENT_ID = models.IntegerField(primary_key=True)
    TITLE = models.CharField(max_length=100)
    SUB_TITLE = models.CharField(max_length=100)
    DESCRIPTION = models.CharField(max_length=500)
    ISSUER = models.CharField(max_length=200)

    def __str__(self):
		return str(self.ACHIEVEMENT_ID) + '-' +self.TITLE


class Skills(models.Model):
    SKILL_ID = models.IntegerField(primary_key=True)
    TITLE = models.CharField(max_length=100)
    SUB_TITLE = models.CharField(max_length=100)
    DESCRIPTION = models.CharField(max_length=500)
    IMAGE = models.CharField(max_length=100)

    def __str__(self):
		return str(self.SKILL_ID) + '-' +self.TITLE


class SkillDiagram(models.Model):
    SKILL_ID = models.IntegerField(primary_key=True)
    TITLE = models.CharField(max_length=100)
    CREATIVE_TITLE = models.CharField(max_length=200)
    DATA_WIDTH = models.IntegerField()

    def __str__(self):
		return str(self.SKILL_ID) + '-' +self.TITLE


class Project(models.Model):
    PROJECT_ID = models.IntegerField(primary_key=True)
    TITLE = models.CharField(max_length=100)
    SUBTITLE = models.CharField(max_length=250)
    TYPE = models.CharField(max_length=250, null=True, blank=True)     # website and / or app
    IMAGE = models.CharField(max_length=100, null=True, blank=True)
    DESCRIPTION = models.CharField(max_length=5000)
    DATE_START = models.DateField(auto_now=False, auto_now_add=False, null=True, blank=True)
    DATE_END = models.DateField(auto_now=False, auto_now_add=False, null=True, blank=True)
    STATUS = models.CharField(max_length=100)
    CREATORS = models.CharField(max_length=1000)
    MENTORS = models.CharField(max_length=1000)
    ASSOCIATED_TO = models.CharField(max_length=250)
    STAR_LINK = models.CharField(max_length=150, null=True, blank=True)
    YOUTUBE_LINK = models.CharField(max_length=150, null=True, blank=True)
    GITHUB_APP = models.CharField(max_length=150, null=True, blank=True)
    GITHUB_WEBSITE = models.CharField(max_length=150, null=True, blank=True)
    PLAYSTORE = models.CharField(max_length=150, null=True, blank=True)
    WEBSITE = models.CharField(max_length=150, null=True, blank=True)
    FA_ICON = models.CharField(max_length=50)
    CONTRIBUTION = models.CharField(max_length=1000)
    ASSOCIATED_ACHIEVEMENT = models.CharField(max_length=500, null=True, blank=True)

    def __str__(self):
		return str(self.PROJECT_ID) + '-' +self.TITLE
