<ol class="curtains">
<li>
    <div class="container interview-intro">
      <header class="row">
        <div class="span9">
          <div class="interview-number"><?php echo get_field('interview_number')?></div>
          <h1 class="clearfix">
            <?php the_title() ?></h1>
          <address>
            <div class="author-image"></div>
            <div class="author-info">
              <p class="author">
                An interview with
                <a href="http://twitter.com/cassiemc" rel="author" target="_blank" title="<?php echo get_the_author(); ?>'s twitter profile"> <strong><?php echo get_the_author(); ?></strong>
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
    </div>
    <div id="portrait" class="fullscreen">
      <img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-coffee-shop-portrait.jpg" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://pamlau.com/" target="_blank">Pam Lau</a>
      </div>
    </div>
    <!-- <div class="table-of-contents">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="row" id="coffee-time">
              <div class="span1">
                <div id="coffee-animation" style="width: 76px; height: 76px" class="swiffy"></div>
              </div>
              <div class="span3">
                <p class="last">
                  We met for coffee after work on a rainy evening in Liberty Village.
                </p>
              </div>
            </div>
          </div>
          <div class="span8">
            <div class="illustrations">
              <div id="table-of-contents-animation" style="width: 770px; height: 190px" class="swiffy"></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container">
      <section class="row">
        <div class="span4" id="start-tag">
          <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
        </div>
        <div class="span7 interview-panel">
          <h3>How did you get started as a developer?</h3>

          <p>I studied Psychology and Communications in university, so I hadn’t planned to be in this industry when I was in school. It sort of just happened totally by accident.</p>

          <p>I had a professor in one of my Communications classes who taught us how to use basic WYSIWYG DreamWeaver and I put together this really awful site. I just thought it was fun. I liked the idea that you could take a blank slate and make something out of it. After I graduated, I didn’t really know what to do with my degree. I ended up working at this temp job; I was an admin assistant but my duties were very far and few between.</p>

          <p>One day I was looking through the mail and there was a pamphlet for Seneca College. I looked at their Web Design program and I thought, “Hey! Why don’t I go back to school and give this a try?” It was four months long and gave me an introduction to everything: HTML, CSS, Photoshop, Flash, PHP and JavaScript.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What challenges did you face early in your career?</h3>

          <p>My program was so short. It was an intro to everything so I didn’t exactly understand the difference between a Web Designer, a Web Developer, Frontend Developer or Backend Developer. It was all the same to me, and I thought you were supposed to know how to do all those things, all at once.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What was your first job in the industry like?</h3>

          <p>I was a Content Coordinator at a corporate financial company. But on the side I had been doing a little bit of freelance development and I thought, this is what I want to do – I don’t want to just push a button in a content management system and there, there’s a pdf. I wanted to be more creative and do more coding.</p>

          <p>I ended up breaking into the agency world at a place called <a href="http://www.nurun.com/"  target="_blank">Nurun</a> where I was hired as an Interface Developer/Frontend Developer. It was really great because they gave me a chance to actually flex and learn my development skills. So when I moved to this job I thought “Wait a minute, I’m a developer now!” It was a really nice switch, but kind of scary at the same time.</p>
          
        </div>

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>When I do something I always want to be good at it. I felt somewhat disadvantaged because I didn’t have a computer science background and a lot of the developers did.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>What was scary about it?</h3>

          <p>When I do something I always want to be good at it. I felt somewhat disadvantaged because I didn’t have a computer science background and a lot of the developers did. I had technically been in the industry for three years at that point, but didn’t actually have a lot of frontend experience.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How did you overcome that?</h3>

          <p>All the other developers at Nurun were really helpful. I came in as a junior and they were really good at helping me get better. It’s funny because this whole idea of women in tech – I never felt that was an issue while I was there because there were a lot of female developers (both at Nurun and at my previous job). At one point I think there were even more female than male developers. I never noticed there to be an imbalance.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>At which point did you become aware of the gender imbalance?</h3>

          <p>At Teehan+Lax. I was the first female there and now I’m one of two.</p>
          
        </div>
    </section>
    </div>
  </li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <div class="container">
          <div class="info-panel" id="teehanandlax">
            <aside>
              <div class="arrow"></div>
              <h3>T+Ler</h3>
              <p class="last">
                Christina develops at Teehan+Lax, a Toronto-based digital agency well-known for their <a href="http://www.teehanlax.com/work" title="Teehan+Lax website" target="_blank">cutting edge interactive work</a> as well as their <a href="http://www.teehanlax.com/downloads/" title="Teehan+Lax free downloads page" target="_blank">free iPhone and iPad GUI templates</a>, “to help you pitch, design and build amazing software”.
              </p>
            </aside>
          </div>
        </div>
        <img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-teehan-and-lax.jpg" />
        <div class="photo-credit light">
          Photo credit:
          <a href="http://www.flickr.com/photos/brendanlynch"
            title="Brendan Lynch's flickr photostream" target="_blank">Brendan Lynch</a>
        </div>
      </div>
    </div>

    <div class="container">
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How did it feel, coming from an environment that was balanced?</h3>

          <p>I didn’t feel any different. I was just more aware of the imbalance because people were saying, “There is a new girl coming and she’s a dev.” They didn’t make me feel uncomfortable at all, but I knew that this was an anomaly. They had only ever had one female applicant before.</p>

          <p>It was at that point that I realized that my previous work environments were skewed from the norm. I think it shocked me a bit because I didn’t know that being a “female dev” was something weird. A project manager might ask, “What’s it like being a female dev?” as if it’s something unimaginable, and I’d say, “Well, what’s it like being a project manager?” To me, it’s an odd question because being a woman and a developer never seemed weird to me.</p>
          
        </div>

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>I wear heels to work, I curl my hair every day. Then again I don't want to be stereotypically female either, so I focus on being who I am – this is my work, and this is who I am.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>How do you think people view developers, and do you fit that mould?</h3>

          <p>I don’t think I do. There definitely is a stereotype of being really geeky and nerdy, and I purposely don’t try to be one of the guys or feel like I have to fit the stereotype. I wear heels to work, I curl my hair every day. Then again I don't want to be stereotypically female either, so I focus on being who I am – this is my work, and this is who I am. And I definitely want other women to see that you can be yourself. At the end of the day you should be comfortable with yourself.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You mentioned on the Teehan+Lax blog that your job is a perfect fit for you. What makes it such a
            perfect
            fit?</h3>

          <p>I like the fact that I get to have my creative moments, and then I get to use my logical side and build stuff. I can get creative with development, especially with CSS3. I can do so much with it, finding ways to make things work. I think that's why I'm more drawn to frontend development rather than backend. You get to see the output for yourself a bit better.</p>

          <p>Even if I want to pull my hair out after dealing with one too many bugs, when I’m done I get to say, “Look what I made!” I feel like I’ve accomplished something. I think it balances the creative and the analytical sides of me.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span4 info-panel">
          <aside class="first-row">
            <div class="arrow"></div>
            <h3>Back in the Day</h3>
            <p class="last">It's hard to remember a time without dedicated high-speed Internet connections now, but many of us have a special place in our hearts for <a href="http://en.wikipedia.org/wiki/Dial-up_Internet_access" title="Dial-up Internet Wikipedia entry" target="_blank">56K</a> and its familiar song, "kssssssh, bee-boo bee-boo bee-boo."</p>
          </aside>
        </div>
        <div class="span7 interview-panel">
          <h3>Were computers part of your life growing up?</h3>

          <p>I was the computer person in my family. I would help my dad fix things as a kid. Maybe that’s why I gravitated more towards “stuff that boys do”. I have three older sisters; it was a house full of girls and I was a bit of a tomboy.</p>

          <p>As a teen, I was on the Internet all the time, keeping the phone line busy. The Internet was my way to see other parts of the world or connect with other people. I used to go on chat rooms and talk to people that lived in other cities.</p>

          <p>Growing up in a small city, there wasn’t a lot of cultural diversity, so I always felt like an outcast. I spent most of my early years trying to fit in and be like everyone else, and then when I was about 14, 15 or so, I just said “Forget it!” I kind of went the other route and said “I’m going to be different than everybody, or at least try to be.”</p>

          <p>Since then I’ve always done things that maybe weren’t expected of me. I’m used to doing things my own way. Maybe that’s what helped me go into this career and not worry about whether or not it was normal.</p>
          
        </div>

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>Growing up in a small city, there wasn’t a lot of cultural diversity, so I always felt like an outcast. I spent most of my early years trying to fit in and be like everyone else.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
        </section>
    </div>
  </li>
<li>
  <div class="fullscreen">
      <img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-subway.jpg" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://instagram.com/themiguelshow" title="Miguel Weston (themiguelshow) on Instagram" target="_blank">Miguel Weston</a>
      </div>
  </div>

  <div class="container">
        <section class="row">

        <div class="span7 offset4 interview-panel">
          <h3>Any examples of doing things that weren’t expected of you?</h3>

          <p>Well, I think a couple people who might read this interview are going to be surprised that I’m married, because I don’t wear a ring. I didn’t really tell anybody. We got married and a couple of close friends and family know. If it comes up in conversation I tell people, but I didn’t make any formal announcement. We just had a small ceremony. There’s the idea that all women want big weddings. I bought a brown dress, we got married at city hall, and we don’t wear rings – but we’re happy. As I got older, I learned, “I don’t have to do what anybody expects.” I just do what I want.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How did you and your husband meet?</h3>

          <p>Actually, funny story about my husband and how the Internet changed my life. While I was working at my first job, I started an anonymous personal blog just for fun. He left a comment on my very first blog post. And I looked at his blog and thought, “Hey, this guy’s funny.”</p>

          <p>We were just reading each other’s blogs and then in about six months or so, he emailed me saying he was going to be in Toronto for his birthday and suggested we meet up. When we met in person, we clicked. My life would be very different without the Internet!</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Definitely! How does technology fit into your life now? Do you think the current proliferation of tech enriches our lives or are there certain cautions that should come with it?</h3>

          <p>I think it definitely enriches our lives and makes it easier to manage our day-to-day lives. But I do think that it can't replace human interaction, real human interaction. Take books for example; as much as it's really handy to have a Kobo or some kind of e-reader with 50 books on it, I personally still like the tactile feeling of a book. I like how it smells, I like how it feels, I like flipping through it. I think that you have to find a balance.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Is there any challenge to finding that balance, given that you work with tech on a daily basis?</h3>

          <p>When you really enjoy your work, it obviously spills into your life, so turning off the computer and putting your phone down can be hard to do. There are times when I just want to text somebody because I know if I call them, we're going to be on the phone for three hours and I don't have that kind of time. But then I realize maybe there is a reason that we would be on the phone for three hours, that we need that time to interact and connect.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span4 notable-person photo-callout">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://www.arduino.cc/" title="About Arduino"><img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/arduino-board.jpg" alt="Arduino electronics board"/></a>
            <figcaption class="clear">
              <p class="last"><a href="http://www.arduino.cc/" title="About Arduino">Arduino</a> is an open-source system made up of simple hardware and easy to program software. Backed by an active community of tinkerers and enthusiasts, Arduino is an easy way for anyone to create input/output based electronic devices.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
        
        <div class="span7 interview-panel">

          <h3>We’d love to hear more about your <a href="http://www.teehanlax.com/labs/do-we-have-milk/" target="_blank">“Do We Have Milk”</a> experiment?  What is that and how did you come up with the idea?</h3>

          <p>We came up with the idea in the Teehan+Lax labs to build an app that tracks how much milk you have left in the fridge. I hadn't had a lot of experience with technology “outside of the screen”, but I started brainstorming ideas independent of the technology. I love food and love organizing things. So from there we came up with the idea of using <a href="http://www.arduino.cc/" target="_blank">Arduino</a> to combine physical computing and food organization.</p>

          <p>But it wasn’t really just, "Let's track milk." It was an experiment to show people how technology can interact with our daily lives. It's funny, because the day we decided to run with the idea, I was at the store and was hit with the “Do We Have Milk?” question. I was thinking, "I could really use this app right now!" [laughs]</p>
        </div>
      </section>
    </div>
  </li>
<li>
<div class="fullscreen">
  <div class="parallax">
    <div class="container">
      <div class="info-panel" id="arduino">
        <aside>
          <div class="arrow"></div>
          <h3>Get Milk!</h3>
          <p class="last">
            The <a href="http://www.teehanlax.com/labs/do-we-have-milk/" target="_blank">Do We Have Milk?</a> app helps you know when you’re running low on milk so you can pick some up on your way home. Christina helped develop and build the concept using Arduino technology.
          </p>
        </aside>
      </div>
    </div>
    <img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-get-milk.jpg" />
    <div class="photo-credit light">
      Photo credit:
      <a href="https://vimeo.com/41917421" title="A still taken from Teehan+Lax's 'Do We Have Milk' experiment trailer" target="_blank">Teehan+Lax Labs</a>
    </div>
  </div>
</div>

  <div class="container">
      <section class="row">
        <div class="span4 info-panel">
          <aside class="first-row">
            <div class="arrow"></div>
            <h3>Advancing CSS</h3>
            <p class="last"> <a href="http://lesscss.org/" target="_blank">LESS</a> is a <a href="http://www.vanseodesign.com/css/css-preprocessors/" target="_blank">CSS pre-processor</a>, a tool that allows web developers to extend the functionality of CSS with common programming constructs like variables and functions.</p>
          </aside>
        </div>

        <div class="span7 interview-panel">

          <h3>Are there any other new technologies or tools that really excite you, or that you're looking forward to working with?</h3>

          <p>Definitely. When I discovered <a href="http://lesscss.org/" target="_blank">LESS</a> – even though it is a simple tool – I thought “Why aren’t we using this all the time? Why isn’t this built into CSS already?”</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You've also been involved with <a href="http://alistapart.com/article/responsive-web-design" target="_blank">responsive design</a>, right?</h3>

          <p>My first involvement with <a href="http://ladieslearningcode.com/" target="_blank">Ladies Learning Code</a> was to present <a href="https://vimeo.com/27903221" target="_blank">a talk on responsive design.</a> I've been pushing myself to think more about responsive techniques, mobile techniques, and how to incorporate that into my everyday workflow. It shouldn't be a second thought anymore; it should be how all websites work. I had an iPhone 3G for the longest time, and I hardly ever used the browser because it was so slow. Then when I got the 4S, I found I was always browsing on the phone and it started to really bother me when sites didn't even have a basic mobile web experience – including my own – so I've come to see the importance of including that.</p>
          
        </div>
      </section>

      <section class="row">

        <div class="span7 offset4 interview-panel">
          <h3>How did you find out about Ladies Learning Code?</h3>

          <p>I wrote a blog post for Teehan+Lax about being a woman in web development [<a href="http://www.teehanlax.com/blog/thats-what-she-said-thoughts-from-a-female-dev/" target="_blank">“That’s what she said: thoughts from a female dev”</a>]. And then <a href="http://womenandtech.com/interview/heather-payne/">Heather Payne</a> reached out to me by leaving a comment, telling me how they were going to start this group and it would be nice if I could help out in some way.</p>
          
        </div>

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>I always felt it was a little too awkward to just show up to tech meetups and code with people I didn’t know.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>What convinced you to get involved?</h3>

          <p>I always felt it was a little too awkward to just show up to tech meetups and code with people I didn’t know. In my mind it felt unnatural. But with this, Heather asked me to do a talk, so it felt more natural to go there and have a purpose instead of just showing up on my own.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You’re also a teacher at Humber College, what is it you like (or dislike) about teaching?</h3>

          <p>I dislike marking. It takes so long!</p>

          <p>I like teaching because it actually makes me a better developer. When you're teaching, you can’t just do what you’re accustomed to doing. You have to think about why and you have to explain it. It makes me more careful about what I do and pushes me out of my comfort zone. It forces me to break out of my own routine.</p>

          <p>It's also nice to see other people enjoy the material the way I did when I first discovered it; hearing people say, “Wow!” or having that “Aha!” moment is great. Seeing the students get excited makes me want to go and build something for fun too.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What are some of those “Aha!” moments?</h3>

          <p>The thing that always blows their minds is being able to “View source.” That gets them every time. “What, you can see everything?” And the second question is almost always, “But how do you hide your stuff? How do you keep people from seeing it?” But, you can’t! I vaguely remember feeling that way too, thinking, “I don’t want people to take my stuff or see my code.”</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Is there anything that you hope to inspire in your students?</h3>

          <p>I think a lot of times we get stuck thinking, “What can I do to get a job that makes good money?” instead of, “What can I do that I enjoy doing?” So I hope to not only teach them the technical ins and outs of HTML and CSS but to show them that it's interesting and it's fun and it's not just a way to make money. Development is something you can actually enjoy and want to do, whether you're getting paid or not.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What are some of the challenges you face working and teaching in this industry?</h3>

          <p>I think always feeling that you don’t know enough. As soon as you learn a new skill, something else comes up. Keeping up with trends is tough in this industry.</p>
          
        </div>
      </section>
  </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <div class="container">
        <div class="info-panel" id="collage">
          <aside>
            <div class="arrow"></div>
			<h3>Creative Technology</h3>
          <p class="last">
            The <a href="http://www.teehanlax.com/labs/" target="_blank" title="Teehan+Lax Labs page">Teehan+Lax Labs</a> are an independent arm of the company where Christina and other employees foster an interest in technologies outside their day-to-day (like Arduino).
          </p>
          </aside>
        </div>
      </div>
      <img src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-soldering-iron.jpg" />
      <div class="photo-credit light">
        Photo credit:
        <a href="https://vimeo.com/41917421" title="A still taken from Teehan+Lax's 'Do We Have Milk' experiment trailer" target="_blank">Teehan+Lax Labs</a>
      </div>
    </div>
  </div>

  <div class="container">
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>I’ve often heard the argument made that women don’t advance because they tend to undervalue themselves. Do you agree?</h3>

          <p>I have read that women generally aren’t as boastful or willing to talk about themselves. And it totally made sense. My personal site used to say, “Hi, I’m Christina and I’m a web developer and I like shoes and food.” Then it hit me – why don’t I talk about what I do? Now my bio says, “I’ve worked with brands such as Bell and Virgin...” Because that’s what I do.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span4 info-panel">
          <aside class="first-row">
            <div class="arrow"></div>
            <h3>Lack of Cultural Diversity</h3>
            <p>Every year, <a href="http://alistapart.com/" target="_blank" title="A List Apart website">A List Apart</a> <a href="http://www.alistapart.com/articles/survey2011/" target="_blank" title="2011 A List Apart Survey Results">conducts a survey</a> of its web industry readership. In 2011, 12.9% of all respondents identified with a visible minority, whereas the total number of female respondents was 18%.
            </p> <p class="last">ALA also notes that while the percentage of women has risen slightly over the past five years, there has been no significant increase in the number of visible minorities.</p>
          </aside>
        </div>

        <div class="span7 interview-panel">
          <h3>Do you think there should be more female developers or women in the tech industry in general?</h3>

          <p>I don’t know how to answer that! My main concern is that there are a lot of women out there who don’t feel the industry is inclusive or welcoming to women. I hear this from a lot of the students (and mentors) at Ladies Learning Code. If I can help other women feel like they can join this industry, then I’m all for it. If women want to join, then they should join!</p>

          <p>Personally, I feel like there’s a lack of cultural diversity. That affects me more than being a woman. Maybe it’s because there are a lot of women in other roles at my company, despite the numbers of actual female developers. If you look at the numbers in the latest A List Apart survey, the combined total of all the different ethnic groups is less than the number of women who respond. That’s something I would like to see change.</p>
          
        </div>
        
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>If [joining the web industry] is something that you really want to do, then just do it and don't worry about what other people think.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
        
        <div class="span7 offset4 interview-panel">
          <h3>If you could give one piece of advice to someone who is apprehensive or not sure about joining the industry, what would it be?</h3>

          <p>I would say if this is something that you really want to do, then just do it and don't worry about what other people think. If you’re good at it, your work will speak for itself.</p>
          
        </div>
      </section>

      <section class="row">

        <div class="span4 notable-person" id="NAME">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://www.sazzy.co.uk/about/"
              title="Sarah Parmenter's Bio"
              target="_blank"><img src='<?php echo get_home_url(); ?>/assets/img/christina-interview/sarah-parmenter.jpg'></a>
            <figcaption class="clear">
              <a href="http://www.sazzy.co.uk/about/"
                title="Sarah Parmenter's Bio"
                target="_blank"><h4>Sarah Parmenter</h4></a>
              <p>Sarah Parmenter is a web and iOS UI designer in the UK.</p> 
              <p>In 2010 she participated in a Boagworld Show podcast that streamed live on the web and was met with numerous sexist comments. Her response to that experience can be found <a href="http://www.sazzy.co.uk/2010/02/dont-you-dare/" target="_blank">here.</a></p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>Are there any other designers or developers you admire?</h3>

          <p><a href="https://twitter.com/chriscoyier" target="_blank">Chris Coyier</a>. I end up visiting his site, <a href="http://css-tricks.com/" target="_blank">CSS-Tricks</a>, a lot. I find – especially with teaching – he has so many great examples.</p>

          <p>When I started research for my blog post about this idea of women designers and developers being kind of rare thing, I found <a href="https://twitter.com/sazzy" target="_blank">Sarah Parmenter</a>. She did a podcast and received a lot of negative comments about being a female in the industry and wrote this long blog post in response about how she worked really hard to get to where she is. I respect that and I like that she was able to gain recognition through hard work.</p>

          <p>I think maybe I could get there too. This last year has been a whirlwind where I feel like I have been getting more recognition. Ladies Learning Code asked me to come out to Ottawa to lead their first workshop, and I ended up doing a <a href="http://www.cbc.ca/player/News/ID/2309065971/" target="_blank">short interview for CBC Ottawa</a> (which amazed me).</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How do you think you have gotten to this point where you are starting to get recognized?</h3>

          <p>It depends on the day you ask me. Sometimes I feel like I’ve been in the right place at the right time. Other times, I know I still had to be the one to do something with that right place and right time. It think it feels unexpected because I don’t do what I do for the recognition.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Any future plans or goals that you are working towards?</h3>

          <p>When I was in school, I thought you had to know how to use all these different technologies and I struggled with that for a while, thinking I have to know how to do everything. But at this point I’ve realized that I just want to focus on what I like doing and get better at that.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>In our last interview, <a href="http://womenandtech.com/interview/ayla-newhouse/">Ayla Newhouse</a> asked, “I find I often get inspired in the middle of the night, what wakes you up at night?”</h3>

          <p>I am up at night thinking about everything. The wheels are always turning. Sometimes it’s inspiration, sometimes I am just thinking about what I have to do the next day. I could be thinking about anything... except sleeping!
          <span class="full-stop"><img src="<?php echo get_home_url(); ?>/assets/img/full-stop.png" /></span></p>
          
        </div>
      </section>

      <section class="row">
        <div class="span8 offset3">
          <div class="row-fluid callout-question">
            <div class="span12" id="question-prompt">
              <h3>
                Without knowing who they are, please pose a question for our next interviewee.
              </h3>
            </div>
            <div id="question-details">
              <div id="profile-image">
                <img
                  src="<?php echo get_home_url(); ?>/assets/img/christina-interview/christina-truong-portrait-square.jpg" />
              </div>
              <h4>How do you balance work and life?</h4>
              <div id='quote-mark'>
                <img src="<?php echo get_home_url(); ?>/assets/img/quote-mark-small.png" /></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12" id="call-to-action">
              <p>
                Be sure to check back next time (or <a href="#subscribe" title="Subscribe form">subscribe below</a>) for Nora Young's answer to this question.
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="row" id='end-tag'>
        <div class="span4">
          <img src="<?php echo get_home_url(); ?>/assets/img/end-tag.png" />
        </div>
      </div>

    </div><!-- container --> </li>
</ol>

