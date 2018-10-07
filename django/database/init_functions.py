from .models import *

def initAchievements():
    achievement = Achievements(ACHIEVEMENT_ID = 11,
							   TITLE = 'Smart India Hackathon 2018',
							   SUB_TITLE = '2nd runner up | Smart India Hackathon 2018',
							   DESCRIPTION = 'Rakshak Arohan | Team Herricane | Team Lead | Worked on the goals of enhancing police capabilities in various ways to provide safe and secure environment. It\'s main feature is to provide safest and shortest path to people based on previous crimes and their intensity.',
							   ISSUER = 'AICTE, Govt of Assam, GOI')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 10,
							   TITLE = 'Wintathon 2017',
							   SUB_TITLE = 'Winner | Wintathon 2017',
							   DESCRIPTION = 'ConnectMe | Team Semicolon | Android person & Pitecher | LinkedIn is focused towards business and employment related networking. With this goal, ConnectMe assist you to connect to people you met somewhere in an event, add tags to them (so that you can remember where you met them) and also summarise your chat to remember what you were talking about.',
							   ISSUER = 'LinkedIn')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 9,
							   TITLE = 'Grace Hopper Celebration 2017',
							   SUB_TITLE = 'Attended as Scholar | Grace Hopper Celebration 2017 | Bangalore',
							   DESCRIPTION = 'Scholarship | Attended Grace Hopper Celebration happened in Bangalore November 16-17, 2017',
							   ISSUER = 'AnitaB.org')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 8,
                               TITLE = 'Smart India Hackathon 2017',
 							   SUB_TITLE = 'Winner | Smart India Hacakathon 2017',
 							   DESCRIPTION = 'Shikshak Aroahn | Team TechnoTwisters | Team Lead | Worked on providing real-time attendance of teachers as well as student-teacher ratio for govt. schools.',
							   ISSUER = 'AICTE, i4c, NCPCR')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 7,
							   TITLE = 'Aziz Premji Award',
							   SUB_TITLE = 'Awarded | Aziz Premji Award',
							   DESCRIPTION = 'Fragrance 2013-14 | For displaying excellence in the field of IT',
							   ISSUER = '- Vivekanand Schoo')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 6,
							   TITLE = 'Hack\'It Girls',
							   SUB_TITLE = '1st Runner up | Hack\'It Girls',
							   DESCRIPTION = 'RTI Management System | Team collaborator | Worked on automating the tedious process of RTI management in Indian government system',
							   ISSUER = 'IEEE IGDTUW')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 5,
							   TITLE = 'CodeDiva',
							   SUB_TITLE = 'CodeDiva',
							   DESCRIPTION = 'Secured second position in a coding competition held by CSI-IGDTUW in association with HackerRan',
							   ISSUER = 'CSI_IGDTUW, HackerRank')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 4,
							   TITLE = 'Cryptocodz',
							   SUB_TITLE = 'Cryptocodz',
							   DESCRIPTION = 'Secured first position in Cryptocodz-14 and second position in Cryptocodz-13, held under Annual Cyber Celebration, Technowiz by Vivekanand Schhol',
							   ISSUER = 'Vivekanand School')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 3,
							   TITLE = 'Bugwars',
							   SUB_TITLE = 'Bugwars',
							   DESCRIPTION = 'Secured third rank in Bugwars with team, organised by IEEE IGDTUW Student Chapter in collaboration with Techsters',
							   ISSUER = 'IGDTUW')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 2,
							   TITLE = 'Code n Counter',
							   SUB_TITLE = 'Code n Counter',
							   DESCRIPTION = 'Secured 19th rank with team in Code and Counter organised by Nagarro and Coding Blocks at HackerEarth platform',
							   ISSUER = 'Nagarro and Coding blocks')
    achievement.save()
    achievement = Achievements(ACHIEVEMENT_ID = 1,
							   TITLE = 'Mass Awareness Campaign',
							   SUB_TITLE = 'Mass Awareness Campaign',
							   DESCRIPTION = 'Certificate of Special Effort and Silver Medal by Care Promise Welfare Society for participating as volunteer in Mass Awareness Campaign against Cancer/ Hepatitis-Bl',
							   ISSUER = 'Care Promise Welfare Society')
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


def initProjects():
    project = Project(PROJECT_ID = 9,
                TITLE = 'Rakshak Arohan',
                SUBTITLE = 'To assist police in  increasing the efficiency of mapping crimes and keeping citizens safe',
                TYPE = 'Website and android app',
                IMAGE = None,
                DESCRIPTION = 'A technical solution is required to create digital crime maps that can be generated real time and get populated after every incident. The software can feed in GIS information of the place of occurrence along with other details and plot it on a map. A click on those points should give all details related to that particular crime in form of a pop up. This would greatly help in predictive analysis and enhance police capabilities for providing a safe and secure environment for the people.',
                DATE_START = "2018-03-12",
                DATE_END = "2018-03-21",
                STATUS = 'Workable Protoype',
                CREATORS = 'Megha Aggarwal, Aishna Gupta, Shreya Gupta, Dhriti Aggarwal, Arushi Arora and Apoorva Singhal',
                MENTORS = 'Arpan Garg and Ajay Bhatt',
                ASSOCIATED_TO = 'Smart India Hackathon 2018',
                STAR_LINK = '13.127.211.176',
                YOUTUBE_LINK = None,
                GITHUB_APP = 'https://github.com/codeb1ooded/CrimeMappingApp',
                GITHUB_WEBSITE = 'https://github.com/codeb1ooded/CrimeMapping',
                PLAYSTORE = None,
                WEBSITE = '13.127.211.176',
                FA_ICON = 'icofont icofont-police',
                CONTRIBUTION = 'I worked on android app of the project to build safest path and add offline functionality to app. I also worked on creating to endpoints (Rest API) on server to connect app with it.',
                ASSOCIATED_ACHIEVEMENT = 'Team Herricane won the third prize at Smart India Hackathon 2018 under Ministry of women and Child Development')
    project.save()
    project = Project(PROJECT_ID = 8,
                TITLE = 'EmpowerHer++',
                SUBTITLE = 'Inspired by goals of tech communities like Systers in a unique way to promote women in tech',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = '<em>Problem</em><br/>We went to ACM-ICPC regionals<br/>In about 400 participants there were not even 10 girls while there are women in women hackathons!!<br/>Why??<br/>We tried to identify the root cause of problem. Why it becomes difficult to reach out to all girls?? We present a solution which empowers them to come out of their shell with the comfort of their home, school or university.We motivate & aware them to seek help and join other tech communities like Systers, Women Techmakers, etc.' +
                '<em>Solution</em><br/> <ol><li>Awareness & Scattered Resources</li><li>Unable to find Mentors</li><li>Unidentified Questions</li><li>Been there, done that!!</li><liExpand Tech Circles></li><li>Get Identified</li><li>More women in tech</li></ol>',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = 'Workable Protoype',
                CREATORS = 'Megha Aggarwal, Aishna Gupta, Apoorva Singhal and Shinjanee Gupta',
                MENTORS = '',
                ASSOCIATED_TO = '<a href="https://challengerocket.com/anitasmoonshot> Anita Moonshot Codeathon </a>',
                STAR_LINK = 'https://empowerher.herokuapp.com/',
                YOUTUBE_LINK = 'https://www.youtube.com/watch?v=5UIZhrheBkE',
                GITHUB_APP = None,
                GITHUB_WEBSITE = 'https://github.com/codeb1ooded/Moonshot',
                PLAYSTORE = None,
                WEBSITE = 'https://empowerher.herokuapp.com/',
                FA_ICON = 'icofont icofont-businesswoman',
                CONTRIBUTION = 'I worked on coordinating the team and distributing the work. Technically, I worked on UI of the website, event page and putting all parts of the project together.',
                ASSOCIATED_ACHIEVEMENT = None)
    project.save()
    project = Project(PROJECT_ID = 7,
                TITLE = 'Connect Me',
                SUBTITLE = 'An android app to increase the effectiveness of networking',
                TYPE = 'Android App',
                IMAGE = None,
                DESCRIPTION = 'Connect me is an android app to increase the effectiveness of networking on linkedin. I has three major features: ' +
                '<ul><li>Recommendations to connect based on the events user attend</li><li>Add a tag/label with your connections so that it is easier to remember how you met them</li><li>Get the summary of connection with user to remember what page you were on him/her</li></ul>',
                DATE_START = "2017-11-11",
                DATE_END = "2017-11-12",
                STATUS = 'Code available',
                CREATORS = 'Megha Aggarwal, Deepshika and Tummala Armitha',
                MENTORS = '',
                ASSOCIATED_TO = 'LinkedIn Wintathon 2017',
                STAR_LINK = 'https://github.com/codeb1ooded/ConnectMe',
                YOUTUBE_LINK = None,
                GITHUB_APP = 'https://github.com/codeb1ooded/ConnectMe',
                GITHUB_WEBSITE = None,
                PLAYSTORE = None,
                WEBSITE = None,
                FA_ICON = 'icofont icofont-users',
                CONTRIBUTION = 'I have worked on the app and implemented all the pictures on it. I also gave the idea to include pictures of mentor to align with the idea of app.',
                ASSOCIATED_ACHIEVEMENT = 'Team semicolon was the awarded the first prize at Wintathon 2017 and all the team members were also awarded internship at LinkedIn.')
    project.save()
    project = Project(PROJECT_ID = 6,
                TITLE = 'Shikshak Arohan',
                SUBTITLE = 'A software which is used to monitor student-teacher ratio and (actual) percentage attendance of teachers in Government schools across India.',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'A software which is used to monitor student-teacher ratio and (actual) percentage attendance of teachers in Government schools across India.',
                DATE_START = "2017-04-02",
                DATE_END = "2017-03-09",
                STATUS = 'Working Prototype',
                CREATORS = 'Megha Aggarwal, Aishna Gupta, Shreya Gupta, Dhriti Aggarwal, Arushi Arora and Apoorva Singhal',
                MENTORS = 'Arpan Garg and Ajay Bhatt',
                ASSOCIATED_TO = 'Smart India Hackathon 2017',
                STAR_LINK = 'http://shikshakarohan.herokuapp.com/',
                YOUTUBE_LINK = '',
                GITHUB_APP = 'https://github.com/codeb1ooded/SIH-android',
                GITHUB_WEBSITE = 'https://github.com/codeb1ooded/SIH-website',
                PLAYSTORE = None,
                WEBSITE = 'http://shikshakarohan.herokuapp.com/',
                FA_ICON = 'fa fa-child',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = 'Team TechnoTwisters won the first prize at Smart India Hackathon 2017 under National Commission for Protection of Child Rights')
    project.save()
    project = Project(PROJECT_ID = 5,
                TITLE = 'RTI Management System',
                SUBTITLE = '',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'Project focuses on automating the RTI system in government institutions. Technologies used: HTML, CSS, Bootstrap, JS, PHP, XAMPP, MySQL Database',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = '',
                CREATORS = 'Megha Aggarwal, Bhavya Garg, Utkarsha Goswami and Saloni Bartia',
                MENTORS = 'Dr. Arun Sharma',
                ASSOCIATED_TO = '',
                STAR_LINK = '',
                YOUTUBE_LINK = '',
                GITHUB_APP = None,
                GITHUB_WEBSITE = '',
                PLAYSTORE = None,
                WEBSITE = '',
                FA_ICON = 'fa fa-info',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = '')
    project.save()
    project = Project(PROJECT_ID = 4,
                TITLE = 'MoviePlate',
                SUBTITLE = '',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'Android app to let you browse popular, rated & now playing movies and TV shows. Also manage your watchlist here. This is a proptotype. Technologies used: Java, XML, APIs, Android libraries(Retrofit, GSON, Picasso, etc.), MySQL Database',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = '',
                CREATORS = 'Megha Aggarwal, Himanshu Singhal and Sachin Aggarwal',
                MENTORS = '',
                ASSOCIATED_TO = '',
                STAR_LINK = '',
                YOUTUBE_LINK = '',
                GITHUB_APP = None,
                GITHUB_WEBSITE = '',
                PLAYSTORE = '',
                WEBSITE = '',
                FA_ICON = 'fa fa-file-movie-o',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = '')
    project.save()
    project = Project(PROJECT_ID = 3,
                TITLE = 'Eventley',
                SUBTITLE = '',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'Eventley help users to find popular and relevant(weather on day is fine) events near him on basis of his choice of category by analyzing events based on number of likes, number of comments, number of images, weather at time of event, etc.',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = '',
                CREATORS = 'Megha Aggarwal',
                MENTORS = '',
                ASSOCIATED_TO = '',
                STAR_LINK = '',
                YOUTUBE_LINK = '',
                GITHUB_APP = None,
                GITHUB_WEBSITE = '',
                PLAYSTORE = None,
                WEBSITE = '',
                FA_ICON = 'fa fa-globe',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = '')
    project.save()
    project = Project(PROJECT_ID = 2,
                TITLE = 'Othello',
                SUBTITLE = '',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'Othello is orignially a 1988 video game published by Acclaim Entertainment, made for the Nintendo Entertainment System. This is a board game made on similar concept with help of Java and its libraries with a UI interface.',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = '',
                CREATORS = 'Megha Aggarwal',
                MENTORS = '',
                ASSOCIATED_TO = '',
                STAR_LINK = '',
                YOUTUBE_LINK = '',
                GITHUB_APP = '',
                GITHUB_WEBSITE = '',
                PLAYSTORE = None,
                WEBSITE = '',
                FA_ICON = 'fa fa-gamepad',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = '')
    project.save()
    project = Project(PROJECT_ID = 1,
                TITLE = 'Calculator app',
                SUBTITLE = '',
                TYPE = 'Website',
                IMAGE = None,
                DESCRIPTION = 'An android app which not only includes basic mathematics or some scientfic  functions, but also, conversion of number system',
                DATE_START = "2018-02-01",
                DATE_END = "2018-02-28",
                STATUS = '',
                CREATORS = 'Megha Aggarwal, Deepshika and Tummala Armitha',
                MENTORS = '',
                ASSOCIATED_TO = '',
                STAR_LINK = '',
                YOUTUBE_LINK = '',
                GITHUB_APP = None,
                GITHUB_WEBSITE = '',
                PLAYSTORE = None,
                WEBSITE = '',
                FA_ICON = 'fa fa-calculator',
                CONTRIBUTION = '',
                ASSOCIATED_ACHIEVEMENT = '')
    project.save()
