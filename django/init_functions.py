from .models import *

def initAchievements():
    achievement = Achievements(ACHIEVEMENT_ID = 9,
							   TITLE = 'Wintathon 2017',
							   SUB_TITLE = 'Winner @ Wintathon 2017',
							   DESCRIPTION = 'We won Wintathon 2017 and internship at Linkedin for Summer 2018. Our hack involved an app which recommends users various professional events nearby based on their interest and skill set & creating personalised notes and recommending labels to keep track of people they meet at an event enabling them to build a strong meaningful network.',
							   ISSUER = 'LinkedIn')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 8,
                               TITLE = 'Smart India Hackathon 2017',
 							   SUB_TITLE = 'Winner @ Smart India Hacakathon 2017',
 							   DESCRIPTION = 'Lead the team (TechnoTwisters) to the first position of Smart India Hackathon under category of NCPCR organized by Government of India. <br> <a href="http://www.i4c.co.in">View More</a>',
							   ISSUER = '- AICTE, I4C, NCPCR')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 7,
							   TITLE = 'Aziz Premji Award',
							   SUB_TITLE = 'Aziz Premji Award',
							   DESCRIPTION = 'Awarded Aziz Premji Award by Vivekanand School at Fragrance 2013-14 for displaying excellence in the field of IT',
							   ISSUER = '- Vivekanand Schoo')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 6,
							   TITLE = 'Hack\'It Girls',
							   SUB_TITLE = 'Hack\'It Girls',
							   DESCRIPTION = 'Won 2nd rank in an INTERCOLLEGE open theme hackathon organized by IEEE IGDTUW in association with Crypto Girls, PyLadies Delhi, HackerEarth and Elasticsearch Women India.<br/> "She builds. She makes. She hacks."',
							   ISSUER = '- IEEE IGDTUW')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 5,
							   TITLE = 'CodeDiva',
							   SUB_TITLE = 'CodeDiva',
							   DESCRIPTION = 'Secured second position in a coding competition held by CSI-IGDTUW in association with HackerRan',
							   ISSUER = '- CSI_IGDTUW, HackerRank')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 4,
							   TITLE = 'Cryptocodz',
							   SUB_TITLE = 'Cryptocodz',
							   DESCRIPTION = 'Secured first position in Cryptocodz-14 and second position in Cryptocodz-13, held under Annual Cyber Celebration, Technowiz by Vivekanand Schhol',
							   ISSUER = '- Vivekanand School')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 3,
							   TITLE = 'Bugwars',
							   SUB_TITLE = 'Bugwars',
							   DESCRIPTION = 'Secured third rank in Bugwars with team, organised by IEEE IGDTUW Student Chapter in collaboration with Techsters',
							   ISSUER = '- IGDTUW')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 2,
							   TITLE = 'Code n Counter',
							   SUB_TITLE = 'Code n Counter',
							   DESCRIPTION = 'Secured 19th rank with team in Code and Counter organised by Nagarro and Coding Blocks at HackerEarth platform',
							   ISSUER = '- Nagarro and Coding blocks')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 1,
							   TITLE = 'Mass Awareness Campaign',
							   SUB_TITLE = 'Mass Awareness Campaign',
							   DESCRIPTION = 'Certificate of Special Effort and Silver Medal by Care Promise Welfare Society for participating as volunteer in Mass Awareness Campaign against Cancer/ Hepatitis-Bl',
							   ISSUER = '- Care Promise Welfare Society')
    achievement.save()

def initSkills():
    skill = Skills(SKILL_ID = 11,
            TITLE = 'Android',
            SUB_TITLE = 'App Development',
            DESCRIPTION = 'I knows the basic and some advanced concepts of Android app development. Created some apps, MoviePlate being major of them. I also have worked with some libraries and git repos of them in android.',
            IMAGE = 'android.jpg')
    skill.save()
    skill = Skills(SKILL_ID = 10,
            TITLE = 'Git and Github',
            SUB_TITLE = 'Version Control',
            DESCRIPTION = 'I have hosted all my projects on github and use it to manage them on regular basis. I know basics of git and github.',
            IMAGE = 'gitngithub.png')
    skill.save()
    skill = Skills(SKILL_ID = 9,
            TITLE = 'Algorithm',
            SUB_TITLE = 'Computational Thinking',
            DESCRIPTION = 'Perhaps the most important principle for the good algorithm designer is to refuse to be content. OK, Can we do better?',
            IMAGE = 'algorithm.jpeg')
    skill.save()
    skill = Skills(SKILL_ID = 8,
            TITLE = 'Databases',
            SUB_TITLE = 'Data Storag',
            DESCRIPTION = 'Data being the important thing and its manipulation even more important, I have worked with many databases in different technologies',
            IMAGE = 'database.png')
    skill.save()
    skill = Skills(SKILL_ID = 7,
            TITLE = 'Linux',
            SUB_TITLE = 'Operating System',
            DESCRIPTION = 'Shifted to Linux from window not so long ago, I found it best operating system and use it as default. I have worked on many distros of linux like Ubuntu, CentOS, Fedora, Kali Linux, Backtrack, etc.',
            IMAGE = 'os.jpeg')
    skill.save()
    skill = Skills(SKILL_ID = 6,
            TITLE = 'Python & Django',
            SUB_TITLE = 'Framework',
            DESCRIPTION = 'I have created a website using Python and Django. I know their basics.',
            IMAGE = 'python.png')
    skill.save()
    skill = Skills(SKILL_ID = 5,
            TITLE = 'PHP and Xampp',
            SUB_TITLE = 'Backend Dev',
            DESCRIPTION = 'My one of the best projects is in PHP, i.e., RTI management system. I learned and worked with php during my RTI project only.',
            IMAGE = 'php.png')
    skill.save()
    skill = Skills(SKILL_ID = 4,
            TITLE = 'Java',
            SUB_TITLE = 'Programming Language',
            DESCRIPTION = 'My language to code some of the times. I knows the basics of language and some libraries and know how to implement most of the DS in Java.',
            IMAGE = 'java.png')
    skill.save()
    skill = Skills(SKILL_ID = 3,
            TITLE = 'C/C++',
            SUB_TITLE = 'Programming Language',
            DESCRIPTION = 'C++ was my first language and still the default language to code. I have created a library management system in 12th in C++',
            IMAGE = 'c++.png')
    skill.save()
    skill = Skills(SKILL_ID = 2,
            TITLE = 'Ethical Hacking',
            SUB_TITLE = '',
            DESCRIPTION = 'I knows basic of Ethical Hacking and have done 40 day training of Ethical Hacking from I3indya Technologies. I learned many new things during this phase.',
            IMAGE = 'hacking.png')
    skill.save()
    skill = Skills(SKILL_ID = 1,
            TITLE = 'HTML, CSS & JS',
            SUB_TITLE = 'Front end Dev.',
            DESCRIPTION = 'I am a newbie in HTML, CSS and JS. I have learned them from sites like W3Schools, codeacademy, etc. and have used this knowledge in some of my projects also.',
            IMAGE = 'front-end.png')
    skill.save()

def initSkillDiagram():
    skill = SkillDiagram(SKILL_ID = 8,
            TITLE = 'Android app dev.',
            CREATIVE_TITLE = 'compile \'android.app:development-v16:21.2.97\' 75%',
            DATA_WIDTH = 75)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 7,
            TITLE = 'C/C++',
            CREATIVE_TITLE = '#include&lt;C/C++&gt; 50%',
            DATA_WIDTH = 50)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 6,
            TITLE = 'Html/Css',
            CREATIVE_TITLE = '&lt;HTML/CSS Design&gt; 80%',
            DATA_WIDTH = 80)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 5,
            TITLE = 'Javascript',
            CREATIVE_TITLE = 'getElementById(Javascript) 70%',
            DATA_WIDTH = 70)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 4,
            TITLE = 'Java',
            CREATIVE_TITLE = 'import Java; 65%',
            DATA_WIDTH = 65)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 3,
            TITLE = 'Git & github',
            CREATIVE_TITLE = 'Git & --Github 75%',
            DATA_WIDTH = 75)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 2,
            TITLE = 'DS and Algo',
            CREATIVE_TITLE = 'Data-&gt;Structures-&gt;and-&gt;Algorithms 85%',
            DATA_WIDTH = 85)
    skill.save()
    skill = SkillDiagram(SKILL_ID = 1,
            TITLE = 'SQL & Databases',
            CREATIVE_TITLE = 'CREATE TABLE "SQL and Databases"; 70%',
            DATA_WIDTH = 70)
    skill.save()
