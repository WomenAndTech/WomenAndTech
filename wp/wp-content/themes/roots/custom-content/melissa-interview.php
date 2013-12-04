<ol class="curtains">
<li>
  <div class="container interview-intro">
    <header class="row">
      <div class="span9">
        <div class="interview-number double-digits"><?php echo get_field('interview_number')?></div>
        <h1 class="clearfix" id="twitter-handle" data-twitter-handle="">
          <?php the_title() ?></h1>
        <address>
          <div class="author-image"></div>
          <div class="author-info">
            <p class="author">
              An interview with
              <a target="_blank" href="http://twitter.com/kelzor" rel="author" target="_blank" title="<?php echo get_the_author(); ?>'s twitter profile"> <strong><?php echo get_the_author(); ?></strong>
              </a>
            </p>
            <p class='date'>
              <?php the_date("F j, Y"); ?></p>
          </div>
        </address>
      </div>
    </header>
    <section class="row" id="introduction">
      <div class="span12">
        <h2>
          <?php echo get_field('archive_excerpt'); ?>
        </h2>
      </div>
    </section>
  </div><!-- interview-intro -->
  <div id="portrait" class="fullscreen">
    <img src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/melissa-intro.jpg" alt="Melissa Dominguez Profile"/>
    <div class="photo-credit">
      Photo credit:
      <a href="http://kidwithcamera.com/" target="_blank">David Waldman</a>
    </div>
  </div>
  <div class="container">
    <section class="row no-margin-bottom">

      <div class="span4" id="start-tag">
        <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
      </div>
      <div class="span7 interview-panel">
       <h3 id="so-you-are-the-tech-lead-on-gmail-for-ios-here-at-google-and-you-are-a-software-engineer-">So, you are the tech lead on Gmail for iOS here at Google, and you are a software engineer --</h3>
      </div>

    </section>
    <section class="row no-margin-top">
      <div class="span7 offset4 interview-panel">
        <p>Yes, and I’m also the leader of Google Women Engineers in Waterloo.</p>
      </div>
    </section>
    <section class="row">
      <div class="span4">
        <div class="photo-callout notable-person">
          <figure class="first-row">
            <div class="arrow"></div>
            <img src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/google-women-logo.png" alt="Women@Google Logo"/>
            <figcaption class="clear">
              <p>Google Women in Engineering and Women@Google are two of the most active employee groups at Google and provides courses, mentorships and summits to support career growth and development for women.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
      </div>
      <div class="span7 interview-panel">
        <h3 id="whats-the-purpose-and-function-of-google-women-engineers">What’s the purpose and function of Google Women Engineers?</h3>

        <p>One purpose is to foster a sense of connection and belonging amongst women engineers. As I’m sure you know, we're a minority, and it can feel lonely. We want to make sure that nobody feels too alone, so we have social events.</p>

        <p>My personal mission is outreach towards young girls. We’ve had a series of events where we invite a group of middle school or high school girls to come into the office, and say “Hey, this is what a career in technology can be. Look how awesome it is, we get taken care of really well.” We don't talk about the money, although I do tell them that women in technology tend to have a much smaller pay gap. Even in traditional professional fields, like law and accounting, there’s still a large pay gap, but in computer science and engineering it's really small. The gap still exists, which is a bummer, but it's more like ninety-eight cents on the dollar instead of seventy.</p>
      </div>

      <div class="span11 pull-quote">
        <aside class="quote">
          <h2 id="my-personal-mission-is-outreach-towards-young-girls-to-show-them-this-is-what-a-career-in-technology-can-be">My personal mission is outreach towards young girls [to show them] this is what a career in technology can be.</h2>
        </aside>
        <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
      </div>

      <div class="span4">
        <div class="photo-callout notable-person" id="pathways-kitchener">
          <figure class="first-row">
            <div class="arrow"></div>
            <figcaption class="clear">
              <p>The Pathways program in Kitchener have helped under-represented and at-risk youth stay in and succeed in school since it began in September 2007.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
      </div>

      <div class="span7 interview-panel">

        <h3 id="describe-some-of-the-outreach-efforts-of-google-women-engineers">Describe some of the outreach efforts of Google Women Engineers.</h3>

        <p>Typically I will partner with a particular school or an organization like <a href="https://www.girlguides.ca">Girl Guides</a> or <a href="http://www.pathwaystoeducation.ca/en/kitchener">Mosaic Pathways to Education</a>, who help, not just girls, but also other under-represented groups and at-risk youth. We’ll have a group of about thirty girls. I take them on a tour of the office and we do an engineering-related activity, like a game, and then I’ll explain how what we did was related to computer science and engineering: “What you just did was basically discrete finite automata.” Something like that.</p>

        <p>And then I’ll have a panel with five or six engineers. If it's an all-girls event, I try to have all-women or almost-all-women on the panel saying “This is us, we exist! Ask us any questions.” The goal is to foster open give-and-take of ideas and share their paths to getting here. We have a lot of people who have backgrounds in math, physics, or electrical engineering, and we want to make young people aware that there are multiple paths you can take, but you do have to work hard to get here.</p>

        <h3 id="you-have-a-phd-in-computer-science-tell-me-about-your-experience-as-a-woman-in-those-programs-in-the-graduate-and-post-graduate-environment">You have a Ph.D. in Computer Science. Tell me about your experience as a woman in those programs, in the graduate and post-graduate environment.</h3>

         <p>I found grad school to be a very painful kind of fun. [Laughs]</p>
         <p>You're very poor, you make no money and you work so hard all the time. I did the math at one point, and if you actually divide your income by the hours that you work, you make just a small fraction of minimum wage—and that's in Computer Science, which is one of the better-paid graduate programs, because you actually get a stipend. In some Humanities programs, you work just as hard and end up paying, which is horrifying.</p>
         <p>I’ve found the gender ratio in grad school to be more balanced than in the industry. I've always been comfortable with guys, so I don't really have a problem with it and it's not something I notice a whole lot—although right now on my team, I've got three amazing women and it’s really fun! There's a different kind of joking. In grad school, I didn't experience any real difficulties related to being female. I really enjoyed it and hated it at the same time, as everyone does—I mean, I don't think you finish a Ph.D. until you want to kill something. [Laughs]</p>

        </div>
        
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2 id="i-found-grad-school-to-be-a-very-painful-kind-of-fun-laughs">I found grad school to be a very painful kind of fun. [Laughs]</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">

         
          
         <h3 id="how-was-your-experience-making-the-transition-to-professional-practice">How was your experience making the transition to professional practice?</h3>

         <p>I thought I was going to be a professor, but over the course of my post-doc I realized, this isn't actually the life I want. </p>
         <p>In making the transition to professional practice, I kind of took a leap of faith. I got married as I was finishing my post-doc, and my husband had a fantastic job offer in Chicago that was right in line with his dissertation work. I didn’t really know what I wanted to do at the time, but I knew I had very marketable skills, so I said, “Let's just go! I'll find a job when we get there.” And I did. I applied for a bunch of stuff, and it took a couple months, but I ended up getting a pretty good job, and it worked out.</p>
      </div>
    </section>
  </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <div class="container">
        <div class="info-panel" id="uofr">
          <aside>
            <div class="arrow right"></div>
            <h3>Doctorate in Computer Science</h3>
            <p class="last">Melissa graduated with a PhD in Computer Science from the University of Rochester.
            </p>
          </aside>
        </div>      
      </div>      
      <img src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/university-of-rochester.jpg" alt="University of Rochester" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://commons.wikimedia.org/wiki/File:URRushRhees.jpg" target="_blank">Wikimedia</a>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="row">
      <div class="span7 offset4 interview-panel">
         <h3 id="was-that-first-job-a-practical-role-within-software-engineering">Was that first job a practical role within software engineering?</h3>

         <p>Yeah, I worked for a financial risk management software company for a couple years. It was a combination of software and consulting. I was on the software side, obviously, not the financial consulting side! [Laughs]</p>
      </div>
      
      <div class="span11 pull-quote">
        <aside class="quote">
          <h2 id="one-skill-to-have-as-a-software-engineer-is-a-desire-to-solve-problems-do-you-like-to-take-things-apart-and-put-them-together-i-like-to-knit-which-is-a-form-of-problem-solving">One [skill to have as a software engineer] is a desire to solve problems. Do you like to take things apart and put them together? I like to knit, which is a form of problem-solving.</h2>
        </aside>
        <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
      </div>

      <div class="span7 offset4 interview-panel">

         
          
        <h3 id="aside-from-the-obvious-technical-skills-are-there-any-other-skills-that-are-important-to-have-if-youre-interested-in-becoming-a-software-engineer">Aside from the obvious technical skills, are there any other skills that are important to have if you’re interested in becoming a software engineer?</h3>

        <p>There are a couple of things. One is a desire to solve problems. Do you like to take things apart and put them together? I like to knit, which is a form of problem-solving. I figure out how I want something to look, and then I figure out the knitting pattern to make it. Did you like to play with Legos as a kid? Did you like to build things? When I was a kid, our VCR broke and I took it apart. I didn't fix it, or anything—I just wanted to see what was inside.</p>

        <p>And the other, which I think women in particular are socialized against, is being willing to handle rejection without taking it personally. I’ve found this from my own experience, and I've heard it from other women as well: If I applied to Google and got rejected, what are the chances I would apply again?</p>
        <p>There's been a conversation going on around here, about how do we hire more women? Google gets so many resumes that there are false negatives, which means we say no to people who are totally qualified. People who are more easily discouraged by that rejection are going to be less likely to try again in a year or two. There are a few different things to consider when re-applying, one is you might have been a false negative in the first place, and another is, you might have actually gotten better since you first applied. Maybe you weren't quite above the bar last year, but maybe since then you’ve done an amazing project and learned so much, and now you can do it.</p>
          
        <h3 id="when-it-comes-to-bridging-the-gender-ratio-difference-between-education-and-professional-practice-youre-putting-a-bit-of-the-onus-on-women-themselves-its-not-just-about-companies-making-sure-they-hire-women-its-also-about-women-making-sure-that-they-get-themselves-hired-we-have-to-keep-trying-and-not-give-up">When it comes to bridging the gender-ratio difference between education and professional practice, you're putting a bit of the onus on women themselves. It’s not just about companies making sure they hire women, it's also about women making sure that they get themselves hired, we have to keep trying and not give up.</h3>

        <p>I do think it's important that, as an industry, we make the effort to be more inclusive and to recognize discrimination when it happens.</p>

        <p>On the other hand, for women that are in the industry now, we have to deal with the system as it is today. I'm always very pragmatic. I’m not saying it’s anyone’s fault, but there's a certain amount of the world that we just have to deal with. You can choose to take things personally, take offense at things and be hurt, or you can take a step back and say, “Okay, that sucked. What can I do to do better next time? Was this just a one-off?”</p>

      </div>
      
      <div class="span11 pull-quote">
        <aside class="quote">
          <h2 id="there-are-millions-of-people-who-use-my-code-every-day-how-cool-is-that">There are millions of people who use my code every day! How cool is that!?</h2>
        </aside>
        <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
      </div>

      <div class="span7 offset4 interview-panel">

        

        <h3 id="how-long-have-you-been-at-google">How long have you been at Google?</h3>
        <p>Two years now.</p>

        <h3 id="whats-your-favorite-part-of-your-job-right-now">What's your favorite part of your job right now?</h3>
        <p>Throughout my career, the people I work with have been the most important thing to me. I can work on something I don't really care about, and the people I work with will make it worth going to work every day. On the other hand, I could be working on something that's super cool, but if I'm working with a bunch of jerks, it doesn't matter! (Laughs) The people I'm working with right now are awesome.</p>

        <p>But also, I'm working on <a href="https://mail.google.com/intl/en/mail/help/about.html">Gmail</a>! There are millions of people who use my code every day! How cool is that!? I’m making something that people actually use, and it's amazing. After working on something that only a hundred banks use, this is way better. [Laughs]</p>
      </div>
    </section>
  </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <div class="container">
        <div class="info-panel" id="knitting">
          <aside>
            <div class="arrow right"></div>
            <h3>Knitter Extraordinaire</h3>
            <p class="last">Melissa attributes knitting as helping her develop the problem solving skills needed as an engineer.
            </p>
          </aside>
        </div>      
      </div>      
      <img src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/knitting2.jpg" alt="Knitted Sock" />
      <div class="photo-credit light">
        Photo credit:
        <a href="https://plus.google.com/114152066748412767096/posts" target="_blank">Melissa Dominguez</a>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="row">
      <div class="span4">
        <div class="photo-callout notable-person" id='creative-knitting'>
          <figure class="first-row">
            <div class="arrow"></div>
            <img src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/creativeknitting.jpg" alt="Creative Knitting Magazine Cover"/>
            <figcaption class="clear">
              <p>Creative Knitting magazine was the first all-knitting magazine and continues to be one of the most popular print-and-digital knitting magazines on the market.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
      </div>
      <div class="span7 interview-panel">

        <h3 id="do-you-have-any-passionate-interests-outside-of-technology">Do you have any passionate interests outside of technology?</h3>

        <p>I'm a mother, I have two small girls, a two year-old and a four year-old, so obviously they're pretty awesome. They're sweet and beautiful and loving and smart.</p>
        <p>And I'm also a knitter, I’ve actually published a few knitting designs. One came out in <a href="http://www.creativeknittingmagazine.com">Creative Knitting Magazine</a> last fall, which was really exciting!</p>

      </div>
      
      <div class="span11 pull-quote">
        <aside class="quote">
          <h2 id="make-sure-that-when-we-talk-to-young-girls-we-dont-focus-on-their-appearance-next-time-you-meet-a-girl-between-the-ages-of-two-and-eighteen-as-her-instead-about-her-interests">Make sure that when we talk to young girls, we don’t focus on their appearance [...] Next time you meet a girl between the ages of two and eighteen, as her instead about her interests</h2>
        </aside>
        <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
      </div>
    </section>

    <section class="row">
      <div class="span7 offset4 interview-panel">
        <h3 id="in-our-last-interview-amber-macarthur-asked-how-can-we-encourage-a-younger-generation-of-women-to-care-more-about-brains-than-beauty-when-theyre-bombarded-with-images-such-as-miley-cyrus-twerking">In our last interview, <a href="http://womenandtech.com/interview/amber-macarthur/">Amber Macarthur</a> asked: How can we encourage a younger generation of women to care more about brains than beauty when they’re bombarded with images such as Miley Cyrus twerking?</h3>

        <p>On an individual level, one of the most important things we can do is to make sure that when we talk to young girls, we don't focus on their appearance as the topic of conversation. Every time we meet a little girl and say, "Oh, aren't you the cutest! What a pretty dress!" we’re reinforcing the idea that her appearance is the most important thing about her.</p>

        <p>Next time you meet a girl between the ages of two and eighteen, ask her instead about her interests, her favorite book, or her favorite subject at school. Ask her to tell you about her hobbies.</p>
      </div>
    </section> <!-- mel -->

    <section class="row">
        <div class="span8 offset3">
          <div class="row-fluid callout-question">
            <div class="span12" id="question-prompt">
              <h3 id="without-knowing-who-they-are-please-pose-a-question-for-our-next-interviewee">Without knowing who they are, please pose a question for our next interviewee.</h3>
            </div>
            <div id="question-details">
              <div id="profile-image">
                <img
                  src="<?php echo get_home_url(); ?>/assets/img/melissa-interview/img-square-melissa.jpg" />
              </div>
              <h4>Is there a time when you've done something scary, and it's turned out to be absolutely the right decision?</h4>
              <div id='quote-mark'>
                <img src="<?php echo get_home_url(); ?>/assets/img/quote-mark-small.png" /></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12" id="call-to-action">
              <p>
                Be sure to check back next time (or <a href="#subscribe" title="Subscribe form">subscribe below</a>) for Melissa’s answer to this question.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="row">
        <div class="span8 offset3 credits-panel">
          <h4>Credits</h4>
          <p>This interview is thanks to the hard work on many volunteers. Can you help with the next one? <a href="mailto:volunteer@womenandtech.com">Email us.</a></p>
          <div class="credits">
            <p>
              <strong>Interview</strong><em> by</em>
              <a href="https://twitter.com/kelzor" target="_blank">Kelly Seagram</a>
            </p>
            <p>
              <strong>Photography</strong><em> by</em>
              <a href="https://twitter.com/kelzor" target="_blank">Kelly Seagram</a>
            </p>
            <p>
              <strong>Editing</strong><em> by</em>
              <a href="https://twitter.com/kelzor" target="_blank">Kelly Seagram</a>,
              <a href="http://work.cassiemcdaniel.com" target="_blank">Cassie McDaniel</a>,<em> and</em>
              <a href="http://ivonnekaramoy.com" target="_blank">Ivonne Karamoy</a>
            </p>
            <p>
              <strong>Art Direction</strong><em> by</em>
              <a href="http://twitter.com/britburger" target="_blank">Mark Staplehurst</a>
            </p>
            <p>
              <strong>Design</strong><em> by</em>
              <a href="http://www.cassiekaiser.com" target="_blank">Cassie Kaiser</a><em> and</em> 
              <a href="http://twitter.com/britburger" target="_blank">Mark Staplehurst</a>
            </p>
            <p>
              <strong>Development</strong><em> by</em>
              <a href="http://brennaobrien.com" target="_blank">Brenna O'Brien</a>,
              <a href="http://twitter.com/brttb" target="_blank">Brett Bergmann</a>, <em> and</em>
              <a href="http://twitter.com/raykao" target="_blank">Ray Kao</a>
            </p>
            <p>
              <strong>Transcriptions</strong><em> by</em>
              <a href="https://twitter.com/kelzor" target="_blank">Kelly Seagram</a>
            </p>
          </div>
          <p class="tools">This site uses 
            <a href="http://www.losttype.com/font/?name=blanch" target="_blank">Lost Type's Blanch by Atipus</a>, 
            <a href="http://www.google.com/fonts/specimen/Open+Sans" target="_blank">Steve Matteson's Open Sans</a>, 
            <a href="http://twitter.github.io/bootstrap/" target="_blank">Twitter Bootstrap,</a> 
            <a href="http://wordpress.org/" target="_blank">WordPress</a>, 
            <a href="http://www.rootstheme.com/" target="_blank">Roots Theme</a>, 
            <a href="http://jquery.com/" target="_blank">jQuery</a>, 
            <a href="https://github.com/victa/curtain.js" target="_blank">Curtains</a>, 
            <a href="http://modernizr.com/" target="_blank">Modernizr</a>, 
            <a href="https://github.com/" target="_blank">Github</a>, 
            <a href="https://www.google.com/doubleclick/studio/swiffy/" target="_blank">Swiffy</a>, 
            <a href="https://www.cloudflare.com/" target="_blank">Cloudflare</a>, and
            <a href="http://www.windowsazure.com/en-us/" target="_blank">Windows Azure</a>.
          </p>
        </div>
      </section>
      <div class="row" id='end-tag'>
        <div class="span4">
          <img src="<?php echo get_home_url(); ?>/assets/img/end-tag.png" />
        </div>
      </div>
    </div><!-- container -->
  </li>
</ol>
