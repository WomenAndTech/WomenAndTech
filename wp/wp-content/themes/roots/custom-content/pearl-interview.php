<ol class="curtains">
<li>
    <div class="container interview-intro">
      <header class="row">
        <div class="span9">
          <div class="interview-number"><?php echo get_field('interview_number')?></div>
          <h1 class="clearfix" id="twitter-handle" data-twitter-handle="@PearlChen">
            <?php the_title() ?></h1>
          <address>
            <div class="author-image"></div>
            <div class="author-info">
              <p class="author">
                An interview with
                <a href="http://twitter.com/ivonnekn" rel="author" target="_blank" title="<?php echo get_the_author(); ?>'s twitter profile"> <strong><?php echo get_the_author(); ?></strong>
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
      <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/pearl-chen-profile.jpg" alt="Pearl Chen Profile"/>
      <div class="photo-credit light">
        Photo credit:
        <a href="http://www.mjcphotography.ca" target="_blank">Mauricio Calero</a>
      </div>
    </div>
    <div class="container">
      <section class="row no-margin-bottom">

        <div class="span4" id="start-tag">
          <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
        </div>
        <div class="span7 interview-panel">
          <h3>What was growing up like and how did you get interested in technology?</h3>
        </div>
      </section>

      <section class="row no-margin-bottom no-margin-top">
        <div class="span7 offset4 interview-panel">

          <p>My parents immigrated when I was ten months old to Regina, Saskatchewan. I grew up with three older brothers and all
          of us ended up in technology, despite neither of our parents being computer literate. I was the youngest so I had to
          fight for the things I wanted. That’s probably why I’m good at working in this male-dominated field, because if you want
          something you have to fight for it. </p>

          <p>I was fairly tomboyish; I played sports all through elementary and high school. I played basketball on a
          co-ed team. I learned that when you want to do something, it shouldn’t matter who you’re doing it with. Just do what you
          want to do. </p>
        </div>

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>Technology is something you can actually control; you can have it do anything, or make something out of nothing.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <p>We were a stereotypical prairie Chinese family <em>[The Canadian prairies stretch over Alberta, Manitoba and Saskatchewan.]</em> We owned a
          Chinese restaurant. I worked there from when I was twelve. When it wasn’t busy I
          would read. We had a library half a block away, and if I was interested in
          something I would clear out that section and read whatever was there. I remember
          getting a book on BASIC and typing out programs from it. Doing those exercises
          early on made me realize technology is something you can actually control; you
          can have it do anything, or make something out of nothing. That was probably the
          first time I started programming.</p>

        </div>

      </section>


      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>Did your family read a lot when you were growing up?</h3>

          <p>My parents actually wanted me to watch more TV and read less, but I found it
          pretty good to ignore what they told me to do. I had a great teacher in Grade 6,
          Mr. Smith. He had a creative writing and reading curriculum that was atypical of
          most other Grade 6 programs. We read and did creative writing exercises every
          day with him. Up until that point, it seemed predestined that I was going to be
          some kind of doctor or scientist, like every typical, Chinese immigrant's dream!
          The thought of having a creative career didn’t cross my mind until I realized
          that I was actually a pretty good writer, a creative writer.</p>

        </div>
      </section>

      <section class="row">
        <div class="span4 notable-person photo-callout" id='android-programming-book'>
          <figure class="first-row">
            <div class="arrow"></div>
            <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-android-programming.jpg" alt="Android Programming"/>
            <figcaption class="clear">
              <p>Pearl contributed the NFC and Open Accessory API chapters to <a href="http://www.wrox.com/WileyCDA/WroxTitle/Professional-Android-Sensor-Programming.productCd-1118183487.html">Professional Android Sensor Programming</a> published by Wrox.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>I saw in my research you contributed to an Android programming book. How did you come to combine your interests in writing with computing?</h3>

          <p>I left Regina to go to the University of Ottawa. I started out in marketing but
          I didn’t like it, so I switched to computer science. Although I loved those
          classes, I didn’t see myself becoming a computer scientist. So I applied to a
          Fine Arts program at <a href="http://www.ryerson.ca/index.html" target="_blank">Ryerson University</a>
          in Toronto called <a href="http://imagearts.ryerson.ca/newmedia.html" target="_blank">New Media</a> which was,
          at that time, part of a department called “Image Arts” and it had a mix of film
          and photography, along with new media. It focused on interactive art
          installations, which were fairly new at the time. That meant learning how to use
          electronics to sense when people were in rooms or to react to people. It was so
          different from anything else that I knew.</p>
        </div>

        <div class="span4 notable-person" id="norman-white">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://www.normill.ca/artpage.html"
              title="Norman White"
              target="_blank">
              <img src='<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-norman-white.jpg'>
            </a>
            <figcaption class="clear">
              <a href="http://www.normill.ca/artpage.html"
                title="Norman White"
                target="_blank"><h4>Norman White</h4></a>

              <p>Norman White is a New Media artist specializing in electronic and interactive art. He began teaching at OCAD in 1978 and currently teaches New Media at Ryerson University.</p>

            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <p>My electronics teacher at that time, <a href="http://en.wikipedia.org/wiki/Norman_White">Norman White</a>
          (Ryerson got him to come out
          of retirement to come and teach), was awesome because he was so good at
          encouraging people, and he listened. He took my class to the engineering
          department where they actually had a 3D printer, before 3D printers were all the
          rage. It was an eye opener to see that this kind of technology existed.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What did you do after you graduated?</h3>

          <p>I really liked the creative aspect of mixing technology and people, but it was
          difficult to find a job as an interactive art installation-ist. I had the
          opportunity to work with a startup that was doing large, Flash web applications.
          There were only eight people there when I started, so I was doing everything
          from HTML and CSS to writing content. I once sewed curtains for them [laughs].
          If you had some sort of ability and could fill in the gaps, you did.</p>

          <p>That was really good for me as a learning experience because I
          didn’t get pushed into a narrow job description. At night I would still do
          physical art installations or other projects like that.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You spent some time at the CFC (Canadian Film Centre) Media Lab. How did that come about?</h3>

          <p>After working at the startup I was looking for a change. And an
          opportunity came up to go to <a href="http://welcome.cfcmedialab.com">CFC Media Lab</a> on a full scholarship for a five
          month intensive post-graduate program. The program brought in experts to teach
          day or one week sessions with a couple key faculty members. Within two and a
          half months you were supposed to form a group and execute a prototype. </p>

          <p>After that I did a bit of freelance work, and then I returned to
          the CFC to work full-time as the research and technology manager. I was the
          point person for technical questions and resources. Students might come to me
          and say, “I want to make an interactive project with brain reading technology,
          where do I start?” Then I would help them research it and learn how to build it
          themselves. If they weren't technically savvy enough to want to do it on their
          own, or if time was short, then I would either work on their project or hire a
          contractor and manage them. </p>

        </div>
      </section>
    </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <div class="container">
        <div class="info-panel" id="new-media-installation">
          <aside>
            <div class="arrow right"></div>
            <h3>New Media Installation</h3>
            <p class="last">
              While at the CFC Media Lab, Pearl was technical lead on several
              new media installations including this one, entitled Alone
              Together, which was projected onto the front of the Bata Shoe
              Museum in downtown Toronto.
            </p>
          </aside>
        </div>
      </div>
      <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/pearl-chen-new-media-installation.jpg" alt="New Media Installation" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://www.longexposure.ca" target="_blank">Trevor Haldenby</a>
      </div>
    </div>
  </div>

  <div class="container">

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You’ve recently started a project called Code Huddle. Tell us about that.</h3>

          <p>For every new course I want to teach, I have to make the curriculum from
          scratch. I thought that seemed really stupid. The idea behind <a href="http://codehuddle.org">Code Huddle</a> is
          that I can make curriculum material that someone else can remix, or if I have a
          new course to teach I can remix other people’s material.</p>

          <p>It’s a platform for sharing materials and getting analysis and feedback,
          more or less like GitHub for educators, specifically for technology educators.
          I’m envisioning Code Huddle as an open source project, so I don’t have an
          amazing business model around it, but I think people really need it, so I’m
          going to build it — put it out in the wild and hopefully a lot of people will
          use it, and something will come of it. I was hoping to have a beta out for
          people to try early this year, but I started working full-time so I haven’t had
          a lot of time to focus on side projects.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What are you working on now?</h3>

          <p>I’m working with <a href="http://nascentdigital.com/">Nascent Digital</a> to help TELUS change their
          corporate culture to more of a startup culture. They created a <a href="http://web.telus.com/blog">lab</a> to redesign
          all of their web properties and this was almost exactly what I was looking for –
          web development and programming but also team building. From a technology
          standpoint, I’ve implemented some <a href="http://theleanstartup.com">Lean</a> methodologies, somewhat based on an
          <a href="http://en.wikipedia.org/wiki/Agile_software_development">Agile</a>
          workflow, and we’re training the other employees to think like a startup and
          execute on ideas really quickly.  </p>
        </div>
      </section>

      <section class="row">
        <div class="span4 notable-person" id="shawn-pucknell">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://about.me/pucknell"
              title="About Shawn Pucknell"
              target="_blank">
              <img src='<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-shawn-pucknell.jpg'>
            </a>
            <figcaption class="clear">
              <a href="http://about.me/pucknell"
                title="About Shawn Pucknell"
                target="_blank"><h4>Shawn Pucknell</h4></a>

              <p>Shawn Pucknell is the Founding Director of FITC, a worldwide design and
              technology event. He is a successful entrepreneur and respected figure in the
              new media industry.</p>

            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>How did you start teaching and why do you do it?</h3>

          <p>In 2008, Shawn Pucknell who runs <a href="http://fitc.ca/">FITC</a> events
          reached out to me and asked if I wanted to teach electronics workshops. I
          thought, I don’t know what to teach! He said to just pick a project then work on
          that during the class, so I agreed. My first class was making LED solar
          lanterns, and I had six people turn up. It was basic electronics. I actually
          hired one of those students a year later.</p>

        </div>


        <div class="span7 offset4 interview-panel">

          <p>I see a lot of companies nowadays searching for skilled programmers. I
          think it’s okay to look for someone junior-ish as long as they’re willing to
          learn. It should really be up to the company to figure out what their
          educational program is, whether that means sending them to conferences or
          classes or having internal classes like lunch n' learns. Companies have to have
          a good infrastructure for on-boarding people and helping mentor and train them.
          </p>

          <p>That's why I do a lot of this public speaking and training. If three years
          from now I wanted to start a company doing interactive projects, I'll have a
          fleet of people that I've worked with or taught in my classes who I know are
          eager to learn and who I can reach out to. It's an investment versus something
          that I do for fun. </p>

          <p>I also like doing in-person workshops because the reaction I get from people
          who are trying to learn is so wonderful. I like converting people who think they
          couldn't do something into people who now think they can.</p>

        </div>

        <div class="span11 pull-quote">
          <aside class="quote" data-quote="I like converting people who think they couldn't do something into people who now think they can.">
            <h2>I like converting people who think they couldn't do something into people who now think they can.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>A lot of technologists focus on one area, be it front-end development or
            hardware, but you seem to know and do a lot of things. How do you manage all
            of that?</h3>

          <p>Yeah, I'm into a lot of things. Part of that may be that a lot of
          technology doesn't exist for very long. When I was programming with Flash – and everyone kind
          of knows what the story is with <a
          href="http://www.apple.com/hotnews/thoughts-on-flash/">Flash</a> – I realized that the web was moving away
          from it and that I really should get back to see what was happening with
          JavaScript. </p>

          <p>For some time, Flash was building robust things and JavaScript was
          learning what it was and what people can do with it. Flash ActionScript 2 and
          JavaScript have similar backgrounds but the way people use it is different. It
          wasn't until a few people discovered key things about JavaScript that the
          language became powerful. That made me focus on web front-end dev – HTML, CSS
          and JavaScript – instead of Flash. </p>

          <p>I did some PHP and database programming too because
          when you want to execute an idea, and it's not too complex, you can do
          everything from the front-end to the back-end. It's nice to be a full-stack
          developer. Nowadays it's easier because you can actually create a database with
          JavaScript using <a href="http://www.mongodb.org/">MongoDB</a>, and then the
          backend or the server can be <a href="http://nodejs.org/">Node.js</a>. It's
          becoming easier to do it all just knowing Javascript. </p>

          <p>I know Java. I know nothing about Ruby, and I know only slightly more than
          nothing about Python. People think I have a lot more experience because I have
          this other hardware background, but it comes down to hands-on experience. Anyone
          could have the experience if they spent a weekend to learn some of these things,
          but most people are busy. Maybe having the time to learn these new tools is what
          seems impressive. </p>
        </div>
      </section>

      <section class="row">
        <div class="span4 notable-person photo-callout" id='nokia'>
          <figure class="first-row">
            <div class="arrow"></div>
            <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-nokia-6131.jpg" alt="Nokia 6131"/>
            <figcaption class="clear">
              <p>The Nokia 6131 clamshell phone released in February 2006 was the first phone to be produced with NFC capability.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>Do you have much mobile development experience?</h3>
          <p>I have very niche knowledge of <a
          href="http://www.android.com">Android</a> from the external hardware integration
          side. That includes NFC [Near Field Communication], which is about interacting
          with things in the real world, and <a href="http://www.arduino.cc">Arduino</a>,
          which combines my previous electronics background. I can only do some specific
          things with Android development. For example, I could integrate a web app with
          Android, or I could tell you best practices about working with NFC. </p>

          <p>It comes down to the project. Mobile makes sense for certain things that
          are fully immersive, like games, but I think the web has more to offer than
          native mobile development. Most apps are opened once or twice and never opened
          ever again, so why put that time in? That's probably why I don't do a lot of
          mobile development. </p>

       </div>
      </section>
    </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <div class="container">
        <div class="info-panel" id="pearl-android">
          <aside>
            <div class="arrow right"></div>
            <h3>Android Enthusiast</h3>
            <p class="last">
              Pearl’s home studio is filled with knick-knacks and hardware from Arduino kits to LED lights and circuit boards to Android Robots.
            </p>
          </aside>
        </div>
      </div>
      <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/pearl-chen-android.jpg" alt="Android" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://www.mjcphotography.ca" target="_blank">Mauricio Calero</a>
      </div>
    </div>
  </div>

  <div class="container">

      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>Your <a href="https://plus.google.com/108076675731922659261/about">Google+</a> bio, where you are pretty active, says you are an Android enthusiast.
          Do you have a conscious preference toward open products as opposed to
          proprietary? </h3>

          <p>When Android started off I liked it because it was the first open source
          mobile operating that had mass appeal. Each application can execute what they
          call an Android intent, and that’s how apps message each other, internally or
          externally. For example, if I have a twitter application and there is a post I
          want to share via email, there would be a popup that would ask me where I wanted
          to share this tweet to. The Android intent can route my share request to
          multiple places, not just my email, like my favourite todo app, Dropbox,
          Evernote, or another app I have installed. The way apps behave with each other
          is very open. </p>

          <p>iPhone is like a walled garden; you go into an app, do your thing, and you
          leave. Android is very much a powerhouse tool. When I don't have time to read a
          post from Twitter, I just hit share, I put it in <a
          href="http://getpocket.com">Pocket</a>, then Pocket does its thing. On iOS, this
          is only possible if the app developer explicitly builds in that Pocket
          integration. With Android, it's just seamless how all these apps talk to each
          other. </p>

          <p>   It's not about the open source label but about working in public. Having
          more people working on something is the benefit of open source. You just get so
          much more out of a project by having a network effect, rather than just working
          alone on something. It’s nice when collaboration makes something better. </p>

        </div>

        <div class="span11 pull-quote">
          <aside class="quote" data-quote="You get so much more out of a project by having a network effect... It's nice when collaboration makes something better..">
            <h2>You just get so much more out of a project by
            having a network effect, rather than just working alone on something. It’s nice
            when collaboration makes something better.</h2>
          </aside>

          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>How do you keep up in the industry?</h3>

          <p> I'm actually okay with not staying up-to-date. I used to feel compelled to
          read everyone's tweets on Twitter but now I just use it to broadcast my news.</p>

        </div>

        <div class="span4 notable-person" id="addy-osmani">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://addyosmani.com/blog/"
              title="Addy Osmani - Articles for Developers"
              target="_blank">
              <img src='<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-addy-osmani.jpg'>
            </a>
            <figcaption class="clear">
              <a href="http://addyosmani.com/blog/"
                title="Addy Osmani - Articles for Developers"
                target="_blank"><h4>Addy Osmani</h4></a>

              <p>Addy Osmani is a Developer on the Chrome team at Google and a respected figure in the JavaScript community. He has contributed to open-source Modernizr, jQuery and Yeoman</p>

            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">

          <p> There is one guy who I follow in the web community, <a
          href="http://addyosmani.com/blog/">Addy Osmani</a>. He is an expert in terms of
          web development so anything he says is more or less gold. When he says, "Oh we
          should try this" or "Have you considered this?" – you listen. He cuts through
          all the crap, and he is a really good teacher. He's a developer advocate, so
          he's very good at explaining technology. I find that if you have to stay up-to-date with one source for web development, just follow Addy and everything he
          says. </p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>   You do quite a bit of teaching through your <a href="http://karma-laboratory.com">Karma Laboratory</a> workshops, at conferences and with non-profits like <a href="http://www.makerkids.ca">Maker Kids</a>. Is code literacy
          important to you? </h3>

          <p>We’re moving into an age where everything is technology-enabled and
          everything’s gotta run on code. There may be a point where everyone needs to
          know enough code to put up their own web page or to fix something. So much of
          our future is going to be around computers, so I think knowing how to code will
          be an advantage for people. </p>
        </div>
      </section>



      <section class="row">
        <div class="span4 notable-person photo-callout" id="fitc">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://fitc.ca/event/to13/" title="FITC Toronto" target="_blank"><img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-fitc-logo.jpg" alt="FITC Toronto"/></a>
            <figcaption class="clear">

              <p>FITC produces design and technology events
              worldwide. It originated in Toronto in 2002 and has since expanded worldwide
              with events in Amsterdam, Tokyo, San Francisco, Chicago, New York, Seoul and
              many other cities.</p>

            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>How did you start speaking at events?</h3>
          <p>I got involved with FITC (a big creative technology conference that
          originated in Toronto) as a volunteer, then a stage manager, then volunteer
          coordinator. I had a professional relationship with the organizers since the
          conference began. </p>

          <p>A couple of years ago they asked if I wanted to do a talk for SCREENS [a
          conference held by FITC with a focus on mobile, tablet and device development].
          I submitted a talk but it was a little too avant-garde for them. I don’t
          remember what it was about but it was something weird, and I didn’t get in. The
          following year for <a href="http://fitc.ca/event/to13/">FITC Toronto</a>, I came
          to them with some topics I could talk about and they said sure. My relationships
          with the organizers made the submission process very easy. It wasn’t like a
          submission process. </p>

          <p>   I have submitted to other events and have been rejected from some, invited
          to others. I think speaking at conferences comes from being in the community and
          being out there. People sometimes have my name in the top of their mind for
          certain topics, so they’ll invite me to their events. </p>

       </div>
      </section>
    </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <img src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/pearl-chen-speaking.jpg" alt="Android" />
    </div>
  </div>

  <div class="container">

      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>Do you notice a lack of women speaking at conferences?</h3>

          <p>   I didn’t notice it so much at conferences, but I have noticed through
          Ladies Learning Code, who spend a lot of time trying to get half the instructors
          to be female. I remember when <a href="http://womenandtech.com/interview
          /heather-payne/">Heather</a> was trying to collect names for lead instructors it
          was the guys who would say, “Yeah, for sure, I’ll be a lead instructor,” and the
          women would say, “Maybe after mentoring a class.” Rarely will women jump in to
          lead a class or talk at a conference without having attended first. I do notice
          sometimes when I’m at an evening event, I look around and there are not that
          many females. I try to speak at more conferences, knowing that fact. I don’t want
          to be the token woman speaking at a conference, but I do want to be a woman
          speaking at a conference to show other women it’s not scary. </p>
        </div>

        <div class="span11 pull-quote">
          <aside class="quote" data-quote="I don't want to be the token woman speaking at a conference, but I do want to be a woman speaking at a conference.">
            <h2>I don’t want to be the token woman speaking at a conference, but I do want to be <em>a</em> woman speaking at a conference to show other women it’s not scary.</h2>
          </aside>

          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
      </section>

      <section class="row">

        <div class="span4 notable-person" id="ana-serrano">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://www.xmedialab.com/mentor/ana-serrano"
              title="Ana Serrano - Director of the CFC Media Lab (Toronto)"
              target="_blank">
              <img src='<?php echo get_home_url(); ?>/assets/img/pearl-interview/img-ana-serrano.jpg'>
            </a>
            <figcaption class="clear">
              <a href="http://www.xmedialab.com/mentor/ana-serrano"
                title="Ana Serrano - Director of the CFC Media Lab (Toronto)"
                target="_blank"><h4>Ana Serrano</h4></a>

              <p>Ana Serrano is the Founding Director of CFC
              Media Lab. Her work in storytelling and entertainment has influenced other
              digital storytelling projects around the world.</p>

            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>Any advice for women looking to start speaking?</h3>
          <p>If you feel uncomfortable standing and talking for an hour, there are
          various speaking formats you can do at conferences. You can present a topic
          yourself or maybe moderate a panel. <a href="http://www.xmedialab.com/mentor
          /ana-serrano">Ana Serrano</a>, who was my director at the CFC Media Lab, flies to
          conferences all over the place and one thing that I’ve seen her do is instead of
          talking for an hour, she’ll talk for ten minutes and then do break-out sessions.
          </p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">

          <h3>What are your favorite tools for development, design, process, etc.?</h3>

          <p>   It used to be Flash because it was a really good tool set; all the things
          you wanted were more or less there. Now there are so many little places that you
          have to go to to get a simple web page up. </p>

          <p>   Addy Osmani worked on a tool called <a
          href="http://yeoman.io/">Yeoman</a>. It’s a very streamlined way to do web
          development. It’s all based on command line tools, but it makes making a web
          application take 15 seconds essentially. You make a folder and initialize the
          Yeoman project and you can have a web application with a little local server
          already set up and ready to go. That’s by far my favorite tool. </p>

          <p> My favorite web framework is <a href="http://angularjs.org">AngularJS</a>
          because it makes making web applications amazingly simple. It gives you an
          opinionated way to work with web applications, in the sense that there is a
          “right” way of doing things. The more you work with it, you can do more advanced
          things and make your code really clean. That’s my second favorite tool. </p>

          <p> I use <a href="http://www.sublimetext.com">Sublime Text</a> for my text
          editor. It’s just so clean and easy to use. It’s like a lifesaver after using
          Dreamweaver for so many years. My computer, a really good keyboard, a good
          trackpad – and I’m good to go. </p>
        </div>
      </section>


      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Are you satisfied in the work that you’re doing now?</h3>

          <p> Even times when I didn’t think I would be a programmer, I still came back to
          programming. It seems like this thing kept pulling me back, so this is actually
          where I belong. I think the tension right now is whether to become a manager or
          continue as a developer. At this point I’m much happier being a team lead where
          I’m developing as well as leading a team, versus being very hands-off. So far
          I’m really happy with where I am. I don’t have any complaints. </p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>   In our last interview <a href="http://womenandtech.com/interview/martha-ladly/">Martha Ladly</a> asked, “If you were able to think about a technology
          that does not yet exist and you were going to particularly as a woman
          design/develop it for other women, what might it be?”</h3>

          <p>   Hmm... Probably wearables. The reason I like wearables is because they’re
          about personal space and communication, communicating not through words but
          through clothing or touch or heat. We shouldn’t fixate on technology as a <em>thing</em>,
          but we should think about how we use technology. Technology should be more of
          something that augments us, not controls us <span class="full-stop"><?php get_image("full-stop.png"); ?></span></p>
        </div>
      </section>

      <section class="row">
        <div class="span8 offset3">
          <div class="row-fluid callout-question">
            <div class="span12" id="question-prompt">
              <h3>
                Without knowing who the are, please pose a question for our next interviewee.
              </h3>
            </div>
            <div id="question-details">
              <div id="profile-image">
                <img
                  src="<?php echo get_home_url(); ?>/assets/img/pearl-interview/pearl-chen-square.jpg" />
              </div>
              <h4>What's one thing that has happened to you (either as a child or as an adult) that completely changed your life?</h4>
              <div id='quote-mark'>
                <img src="<?php echo get_home_url(); ?>/assets/img/quote-mark-small.png" /></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12" id="call-to-action">
              <p>
                Be sure to check back next time (or <a href="#subscribe" title="Subscribe form">subscribe below</a>) for Amber's answer to this question.
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
    </div><!-- container -->
  </li>
</ol>


