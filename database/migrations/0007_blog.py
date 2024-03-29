# -*- coding: utf-8 -*-
# Generated by Django 1.11.16 on 2018-11-17 06:07
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('database', '0006_auto_20181111_0743'),
    ]

    operations = [
        migrations.CreateModel(
            name='Blog',
            fields=[
                ('BLOG_ID', models.IntegerField(primary_key=True, serialize=False)),
                ('CLASS', models.CharField(max_length=20)),
                ('TITLE', models.CharField(max_length=100)),
                ('CATEGORY', models.CharField(max_length=50)),
                ('DATE', models.CharField(max_length=20)),
                ('BRIEF', models.CharField(max_length=250)),
                ('IMAGE_URL', models.CharField(blank=True, max_length=100, null=True)),
                ('BLOG_URL', models.CharField(blank=True, max_length=100, null=True)),
            ],
        ),
    ]
