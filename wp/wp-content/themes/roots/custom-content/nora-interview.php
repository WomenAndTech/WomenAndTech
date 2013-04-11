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
      <img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-young-in-the-cbc-studio.jpg" alt="Nora Young in an audio booth at CBC"/>
      <div class="photo-credit light">
        Photo credit:
        <a href="http://rosabourin.crevado.com/" target="_blank">Rachelle Sabourin</a>
      </div>
    </div>
    <div class="container">
      <section class="row">
        <div class="span4" id="start-tag">
          <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
        </div>
        <div class="span7 interview-panel">
          <h3>What is your background?</h3>

          <p>I have a long history of being interested in technology, particularly the intersection of technology and culture, and technology and society. It goes back to doing my Masters degree in Political Science at <a href="http://www.mcgill.ca/" target="_blank">McGill</a>, where I focused on Technology and Political Philosophy. It was such a long time ago that people would sometimes ask me things that no one would ask now, like, "What does technology have to do with politics?"</p>

          <p>I was really engaged with the topic, and I'm not even solely interested in new technologies; I'm interested in the history of technology as well. I also knew that I wanted to be a journalist.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How did you know?</h3>

          <p>I knew from a really early age, like from my teens. My father had been a journalist. I'm a curious person by nature, and it struck me as a way to explore my interests without getting into too much of a rut; you could do a lot of different things as a journalist. So I started working for CBC, and I was initially doing more arts and pop culture journalism, but I always did it with an eye towards things like new media and technology-related subjects.</p>

          <p>My siblings were very arty. My oldest brother was a jazz musician, my sister is very musical and artistic, my other brother is very artistic. As the youngest kid, in a way, I saw art as the natural path that people in my family followed.</p>

          <p>If I were going to go back and change things, I probably would have wanted to be an architect. I think that speaks to a similar idea of being curious about how things are built and how they work and architecture as a system. I am interested in systems and systems thinking, so that would have been something I would have found fulfilling. </p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>So did you get into journalism through audio, or maybe through writing?</h3>

          <p>I initially approached it as a print journalist. Radio happened sort of by accident. I answered a want ad in the back of NOW Magazine for a show on CBC Radio called Brand X [now known as <a href="http://en.wikipedia.org/wiki/Definitely_Not_the_Opera" target="_blank">Definitely Not the Opera</a>].</p>

          <p>Radio is an amazing medium; it's so quicksilver, easy to manipulate and cheap. Now with podcasting you don't even need broadcast technology to do it. Compared to the amount of hierarchy and coordination that you need to do television, radio is a very freeing medium to work in as a journalist and as a, I hope, creative person.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You seem reticent to call yourself a creative person. </h3>

          <p>I suppose that, because I interview a lot people who I think of as really really creative, I am a little hesitant to apply that label to myself. That said, one of the great advantages of <em>Spark</em> is that it is creative. I love that it's not just about facts and arguments but also about the pleasure of exploring story.</p>
          
        </div>
      </section>

      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>I'm not a gear hound; I'm more interested in the philosophical aspect of technology than the gear. I think most journalists are generalists, and too much the magpie sort of people to be totally geeky.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>Do you identify as a geek?</h3>

          <p>I do, in the sense that I am curious about the way that things work, and I can get fixated on certain topics. I'm not a gear hound; I'm more interested in the philosophical aspect of technology than the gear. I think most journalists are generalists, and too much the magpie sort of people to be totally geeky. But I can definitely go down some pretty nerdy wormholes with guests, as far as passionate interests go.</p>  
        </div>
      </section>

      <section class="row clearfix">
        <div class="span4 notable-person photo-callout">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://cbc.radio-canada.ca/en/explore/who-we-are-what-we-do/" title="Information about The Canadian Broadcasting Corporation"><img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/cbc_logo.png" alt="CBC Logo"/></a>
            <figcaption class="clear">
              <p>The <a href="http://en.wikipedia.org/wiki/Canadian_Broadcasting_Corporation" title="Wikipedia article on Canadian Broadcasting Corporation" target="_blank">Canadian Broadcasting Corporation (CBC)</a> was formed in 1927 to help protect Canada's cultural identity from American broadcasting flooding the airwaves. The CBC now broadcasts from coast to coast, has 14 foreign bureaus and almost 9000 employees, and receives nearly a billion dollars a year in government funding.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
        
        <div class="span7 offset4 interview-panel">
          <h3>Why CBC then?</h3>
          <p>CBC is just who popped up. It's certainly not the only place to be able to explore the questions that <em>Spark</em> does, but it's a pretty wonderful place to be able to explore them, particularly some of the deeper, softer questions around technology and human relationships, rather than covering the new iPhone or the latest business story about technology – all of which are completely reasonable stories to do about technology, but they're done a lot; we don't need to be doing that. I would say that CBC has given us a lot of freedom in that respect.</p>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>On your CBC bio, it says you have a ‘love-hate relationship’ with technology. What do you love about technology and what do you hate about it?</h3>

          <p>My stance towards technology is engaged; it's critical but not fearful.</p>

          <p>There's something specifically lovable about seeing somebody doing something really, really smart on the Web. Human ingenuity and creativity is a source of delight, and I have an almost endless appetite for it. It makes me hopeful that this incredibly open dynamic platform can be used to do some amazing things.</p>

        </div>
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>My stance towards technology is engaged; it's critical but not fearful. </h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">

          <p>The hate, I think, comes partly from the irritation everyone feels when something is badly designed or is controlling in ways that you don't want to be controlled.</p>  
        </div>
      </section>
</li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-young-mixing-board.jpg" alt="Nora Young smiling in front of a mixing board at CBC" />
        <div class="photo-credit light">
          Photo credit:
          <a href="http://rosabourin.crevado.com/" target="_blank">Rachelle Sabourin</a>
        </div>
      </div>
    </div>

    <div class="container">
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>I’m curious about the genesis of <em>Spark</em> and how you may have seen things change over the years.</h3>

          <p>I had floated a few ideas with CBC about doing shows that featured a lot of social media content, and that could start to break down the walls in between broadcasting, social media and audience. When I first suggested it, I think it was a little bit too early.</p>
          
          <p>In the spring of 2006, I thought of doing a show about technology that's not really about technology, but about all the interstitial aspects of human relationships: about the worlds of work, education, dating, and social relationships, seen through the filtering lens of technology. There was something really powerful about that. I think the timing was right, and I pitched it, and my bosses immediately thought, "That makes a lot of sense, I understand that." That was the origin of <em>Spark</em>.</p>
          
          <p>There was a lot going on at the time in the Internet space. YouTube and Facebook had already arrived, but in some ways, the fetishizing of our relationship with consumer technology has grown a lot since <em>Spark</em> went on the air. One thing we've returned to look at again is the way consumer technologies give us a lot of capabilities, but we don't really understand how any of them work. That’s an ongoing tension in our relationship with consumer tools.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How many people are on the <em>Spark</em> team?</h3>

          <p>There are four of us, but we don't all work full-time. <a href="http://misener.org/" target="_blank">Dan Misener</a> is just back on the show, he also does a technology column two days a week. I work on <em>Spark</em> four days a week. <a href="http://www.cbc.ca/spark/about.html" target="_blank">Kent Hoffman and Michelle Parise</a> work on the show full time. Kent does most of the mixing and Michelle does all of the fielding, the pitches from freelancers, paying the bills, coordinating everything and making sure things get on the air. We all pitch stories, we all produce stories, we all do the social media side of <em>Spark</em>.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How long would you say a single episode takes to produce?</h3>

          <p>It’s hard to say, because we work on it in bits and pieces. In general an episode takes a full week.</p> 

          <p>There are lot of things behind the scenes that you don't think about, like you've got to send a version to Australia and to Vermont. There's a different version that re-airs on Sundays. Another version airs on Wednesday. So there are a lot of little steps in addition to packaging the show. </p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Have people started to copy your strategy of talking about the softer side of tech, or do you feel you still have a special spot in journalism?</h3>

          <p>I think we still have a special spot in tech journalism, but what I've seen happen is that a lot of the kind of stories that <em>Spark</em> used to cover are now just cultural stories. They're stories that may find a home on <a href="http://www.cbc.ca/q/" target="_blank">Q</a> or <a href="http://www.cbc.ca/thecurrent/" target="_blank">The Current</a>. Because it's no longer seen as Technology, with a capital “T,” it's seen as part of life. You now see more <em>Spark</em> stories in journalism in general. But the tech sector still is overwhelmingly wedded to products and business. That's still the bias of the media, partly because that's what pays the bills.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Would you like to see that change?</h3>

          <p>I think there is more room for more types of stories. The Verge does interesting technology stories, and Slate, and The Atlantic as well, so it's not that it's not happening, but it could open up more, for sure.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>As part of the CBC, how do you see <em>Spark’s</em> role in creating Canadian cultural identity? </h3>

          <p>People have a lot more choices now, and you have to think of the audience and subject matter more globally than nationally. I obviously hope the show is of particular relevance to Canadians, but technology as a subject crosses borders so much that you have to think about it as being international, which is, in itself, a very Canadian value. We see ourselves as nesting in the global community.</p>

          <p><a href="http://www.cbc.ca/radio/" target="_blank">CBC Radio</a> in particular is going through a really fantastic period. Maybe ten years ago there was a question as to how relevant it was to people’s lives, but the best podcasts that CBC Radio puts out right now would measure up against the best in the world. </p>

          <p>The level of engagement that people have between social media and CBC Radio is amazing. The challenge of trying to keep connected with people is greater than ever, because people are living such diverse lives. To speak to all the communities in Canada is really, really challenging.</p>

        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What would you say are the best CBC podcasts?</h3>

          <p>I really like the <a href="http://www.cbc.ca/ideas/" target="_blank">Ideas</a> podcast, it’s very interesting and engaging. I’ve contributed to Ideas in the past. I like <em>Spark</em>. [Laughs] I also like <a href="http://www.cbc.ca/undertheinfluence/" target="_blank">Terry O’Reilly’s show</a>, I think it’s a really great show too.</p>

        </div>
      </section>
      <section class="row">
        <div class="span4 notable-person double" id="linda-stone">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable People</h3>
            <div id="linda-stone" class="first">
			<a href="http://en.wikipedia.org/wiki/Linda_Stone"
              title="Linda Stone's wikipedia entry"
              target="_blank"><img src='<?php echo get_home_url(); ?>/assets/img/nora-interview/img-Linda-Stone.jpg'></a>
            <figcaption class="clear">
              <a href="http://en.wikipedia.org/wiki/Linda_Stone"
                title="Linda Stone's wikipedia entry"
                target="_blank"><h4>Linda Stone</h4></a>
              <p>Linda Stone, a writer and consultant, has worked for both Apple and Microsoft over the course of her career. She's written for Wired, New York Times and Forbes.</p>
            </figcaption>
            <div style="clear:both"></div>
			</div>
			<div id="jane-mcgonigal">
			<a href="http://en.wikipedia.org/wiki/Jane_McGonigal"
              title="Jane McGonigal's wikipedia entry"
              target="_blank"><img src='<?php echo get_home_url(); ?>/assets/img/nora-interview/img-Jane-McGonigal.jpg'></a>
            <figcaption class="clear">
              <a href="http://en.wikipedia.org/wiki/Jane_McGonigal"
                title="Jane McGonigal's wikipedia entry"
                target="_blank"><h4>Jane McGonigal</h4></a>
              <p>Jane McGonigal is a game designer whose first book, Reality Is Broken: Why Games Make us Better and How they Can Change the World, was published in 2011 to mixed reviews. </p>
            </figcaption>
            <div style="clear:both"></div>
			</div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>Have you had any mentors in your career?</h3>

          <p>The executive producer on DNTO, Bill Smith was an early mentor of mine in terms of creative techniques and story telling. <a href="http://w3.stu.ca/stu/news/news_view.aspx?id=148069" target=_"blank">Bernie Lucht</a>, who was until recently the Executive Producer of Ideas, has certainly been a real mentor to me in terms of narrative and story.</p>
        </div>


        <div class="span7 offset4 interview-panel">
          <p>There are people at a greater distance whom I really admire. I admire Linda Stone as somebody who has followed her intellectual passion, and I admire the game designer Jane McGonigal for similar reasons – for having a real vision and not being afraid to be outside of the norm in order to pursue it, because that’s what it takes.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How do you meet the people you work with?</h3>

          <p>I know that networking is an important thing to do but I am just the world's worst networker. I'm a bit of an introvert, so I tend not to. I’ll say I'm going to go to this function or party because I should be networking, but my idea of hell is going to those things! So I do have some problems in that regard.</p>

          <p>More than anything, I look for people who I feel sympatico with, who are interested in the same kinds of questions as I am. I call it "happy collaboration." I really like working with people in small non-hierarchical teams. It’s hard to find somebody that shares your intellectual interests and also has a passion for creative storytelling. When I meet somebody like that, I tend to really sink my teeth into them.</p>

        </div>
      </section>
      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>In journalism especially, that's such a gift, to have somebody who's not really promoting an agenda, not message-tracking or bullshitting you, just talking about what they're passionately interested in. </h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
        <div class="span7 offset4 interview-panel">
          <h3>It’s interesting that you say you're the world's worst networker, because you have so many conversations with different people in the work you do.</h3>

          <p>It's true, but it's easy to have conversations with the people on <em>Spark</em>. First of all, you're mostly listening. Second, – and this is the amazing thing about making a show like <em>Spark</em> – the people that we have as guests tend to be really passionate about what they're doing. Either they're artists or technologists or bloggers or geeks or academics, and they just want to tell you what they think.</p>

          <p>In journalism especially, that's such a gift, to have somebody who's not really promoting an agenda, not message-tracking or bullshitting you, just talking about what they're passionately interested in. </p>

        </div>
      </section>
    </div>
  </li>
<li>
  <div class="fullscreen">
      <img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-young-the-virtual-self.jpg" />
      <div class="photo-credit light">
        Photo credit:
        <a href="http://pamlau.com/" target="_blank">Pam Lau</a>
      </div>
  </div>

  <div class="container">
      <section class="row">
        <div class="span4 notable-person photo-callout">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://www.amazon.ca/The-Virtual-Self-Digital-Altering/dp/0771070640" title="Amazon's listing for The Virtual Self"><img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/img-The-Virtual-Self.jpg" alt="Cover of Nora Young's book 'The Virtual Self'"/></a>
            <figcaption class="clear">
              <p><a href="http://www.amazon.ca/The-Virtual-Self-Digital-Altering/dp/0771070640" title="Amazon's listing for The Virtual Self" target="_blank">The Virtual Self</a> is Nora's first book, published in spring of 2012. In the book she discusses the implications of self-tracking on society and our personal lives.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
        <div class="span7 offset4 interview-panel">
          <h3>One of the issues you raise in your book, The Virtual Self, is what is public and what is private, what belongs to us as individuals vs. what is ours collectively. Can you draw a line between them?</h3>

          <p>No I don’t think you can, or it is challenging to do that.</p>

          <p>One of the things you are referring to is the idea that as individuals we may want to hold onto our data, but there are also ways that collectively sharing our data and being open about our data can be useful to us as a community.</p>

          <p>The question is, do we have a responsibility with our data? As an individual, I don’t just control my data, I might have a responsibility to share my data with other people. But it’s tricky, because though I believe there is value in our data in the aggregate, you can’t force people to share. So I don’t have an easy answer to that.</p>

          <p>It’s partly whether people feel that there’s a sense of security, guardianship, trusteeship over their data. Is there transparency and consistency in terms of why you’re collecting the data versus how the data is actually used? </p>

          <p>And there’s also a role for fun and play. In researching the book I realized that there is a sense in which we enjoy tracking and sharing. As often as it can be annoying when people send out their Twitter stream of “I just ran five kilometers!” there’s a whole other part that allows us to be connected to the people we’re in social relationships with.</p>   
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>You have an activist sensibility that comes out in <em>The Virtual Self</em> in regards to protecting personal data. What inspired that?</h3>

          <p>I would never be able to do this job if I didn’t think there was a point to talking about these issues. Some eras are characterized by technological change, and we’re going through one right now. There’s a school of thought that suggests humans have the most power in the early stages of any new technology. When you look back at the early days of the car, for instance, all the stuff that we now take as normal for the system of the car was at one time up for grabs and capable of being discussed. But at a certain point, the system was established and now there’s much less flexibility. </p>

          <p>We’re in the relatively early stages of digital culture now. At the same time, new technologies are more broadly distributed than in the past, and we’re not as encouraged to be engaged in thinking about how those technologies are meant to be used, or how they could be used. So we accept the biases of technology without asking questions about it.</p>

          <p>One example we’re all familiar with is Facebook. How you present yourself to the world is as the high school you went to, and the television shows and bands you like. But is that really what defines you as a person? I’m not particularly bashing Facebook, but that’s not how you would describe yourself if you were writing your blog. There is an assumption about what a person’s autobiography means that is baked into how that information is displayed. Is it good for us, or is it good for somebody’s business model? It’s certainly good for Facebook’s <a href="https://www.facebook.com/about/graphsearch" target="_blank">graph search</a>, but there’s a whole lot of other things it doesn’t suit. </p>

          <p>Now, it might be completely reasonable for us to say “Yes, it suits how I want to use Facebook.” But if you don’t ask questions and bring critical thinking to it, what gets left out? If creative technologists and journalists aren’t asking those questions, you can’t fault people who are designing businesses for not asking those questions. It’s incumbent on technologists, designers and journalists to do that.</p>
        </div>
      </section>
    </div>
  </li>
<li>
<div class="fullscreen">
  <div class="parallax">
    <div class="container">
      <div class="info-panel" id="creative-mornings">
        <aside>
          <div class="arrow left"></div>
          <p class="last">
            Nora Young spoke at <a href="http://creativemorningstoronto.tumblr.com/" target="_blank">CreativeMornings Toronto</a> last November, raising questions about privacy and our responsibility as makers to ensure the wealth of data being created by online participants is used for good.
          </p>
        </aside>
      </div>
    </div>
    <img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-young-creative-mornings.jpg" />
    <div class="photo-credit light">
      Photo credit:
      <a href="http://pamlau.com/" target="_blank">Pam Lau</a>
    </div>
  </div>
</div>

  <div class="container">

      <section class="row">

        <div class="span7 offset4 interview-panel">
          <h3>Do consumers have a role to play too?</h3>

          <p>Yes. If we don’t at least demonstrate that we’re concerned about those things, how are we going to get the Privacy Commissioner to step in, or discussions within technology circles about better governance, better data responsibility and better data portability?</p>

          <p>And it’s a funny thing. I think people care once it pinches them. It takes a canary in the coal mine moment.</p>

          <p>Like, insurance companies in the U.S. are looking at a person’s Facebook profile to see, does this person have a lot of friends? Is this a person who drinks and smokes, and what should that mean for their insurance policy? Suddenly you realize, <em>Holy Hannah! Data that I thought was being used for one context is being used for something else.</em></p>      
        </div>

        <div class="span4 notable-person" id="helen-nissenbaum">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://www.nyu.edu/projects/nissenbaum/"
                title="Helen Nissenbaum's NYU page"
                target="_blank">
              <img src='<?php echo get_home_url(); ?>/assets/img/nora-interview/img-Helen-Nissenbaum.jpg'>
            </a>
            <figcaption class="clear">
              <a href="http://www.nyu.edu/projects/nissenbaum/"
                title="Helen Nissenbaum's NYU page"
                target="_blank"><h4>Helen Nissenbaum</h4></a>
              <p>Helen Nissenbaum is an NYU professor who holds a PhD in Philosophy from Stanford. She teaches and writes extensively on the subjects of ethics, politics, computer science and the social implications of digital technology.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">
          <p>We don’t realize this stuff because we’re used to a certain sense of how privacy is managed. The legal theorist <a href="http://www.concurringopinions.com/archives/2010/01/bright-ideas-helen-nissenbaums-privacy-in-context-technology-policy-and-the-integrity-of-social-life.html" target="_blank">Helen Nissenbaum</a>, calls this the idea of “<a href="http://www.amazon.com/Privacy-Context-Technology-Integrity-Stanford/dp/0804752370" target="_blank">Privacy in Context</a>” – the way we as humans think about privacy is different than how privacy functions in technology.</p>

          <p>Everyone has had those weird <a href="http://en.wikipedia.org/wiki/Uncanny_valley" target="_blank">uncanny</a> moments when Facebook suggests as a friend someone you know to be dead. Or when you realize the web browser you’re using is triggering all these assumptions, reflected in the advertising you’re shown. There are moments you know that it is going on, but only when it pops up in this uncanny way.</p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>In your book you also draw a parallel between technology and yoga, saying both can be tools to get to know yourself better. How long have you been practicing yoga?</h3>

          <p>I started in 1989, so a long time. There's something very powerful about being able to simply be aware of your body and mental state without, say, having an app that tracks it. </p>

          <p>You can use a little monitor tracking things like your heart rate, or you can use reminders to check in and ask yourself, what's my mood right now, what's my anxiety level? You can glean insight about what triggers anxiety, for example. But those sorts of external monitors – I see them a little bit as training wheels.</p>

          <p>Awareness of your own body and mental state allows you to have a greater degree of control. That's a very powerful tool of yoga, but it takes longer to get to that point.</p> 

          <p>As I say in the book, there are ways that we can use these technologies to start to listen to our bodies more, to listen to our minds more. But they also do have a way of taking us outside of really residing and being fully, deeply present in the body.</p>

          <p>It's part of contemporary technological life that we value the cerebral at the expense of the embodied. We tend to think about the body in the context of the gym, as a performing, functional machine, which is a limited way of looking at the intelligence that our body brings to us. If you listen to your body, it has a lot of intelligence that your mind doesn't always have access to.</p>

          <p>I admit this sounds a little bit flaky but I believe pretty passionately in it.</p> 
        </div>
      </section>

      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>Anyone going into journalism now should definitely learn to code, because you should be able to build apps that demonstrate what’s going on in your story, or design great data visualizations to accompany your story.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>Have you given any thought to applying your accumulated knowledge of technology to something you create yourself?</h3>

          <p>I have thought about it. Anyone going into journalism now should definitely learn to code, because you should be able to build apps that demonstrate what’s going on in your story, or design great data visualizations to accompany your story. I am definitely curious about it, but so far the time to do it has eluded me. It is something that I would like to try my hand at for sure.</p> 
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What upcoming projects are you excited about?</h3>

          <p>As far as <em>Spark</em> goes, we want to do a lot more content for the web. I'm interested in exploring how we can create tools for our users, so that we're more than just a radio show, we're actually providing tools for people's lives. That's a goal I have for this year.</p>

          <p>I have some speaking engagements coming up that I'm really looking forward to. Being an introvert, I would never have thought I would like getting up in front of perfect strangers and talking, but I really do.</p>

          <p>I'm excited about talking to the <a href="http://www.priv.gc.ca/index_e.asp" target="_blank">Office of the Privacy Commissioner</a> soon, they do such interesting work. Learning about how people in different areas intersect with technology, what their issues and concerns are, is really fascinating.</p> 
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>In your career and personal life, have you ever had any experiences where you felt discrimination because you are a woman?</h3>

          <p>I’ve had the general consumer experience where people assume that you don’t know what you’re talking about in relation to consumer technology. Professionally, I have been really, really assertive in my view that my take on technology is my take on technology, and just because I’m not talking about product specs doesn’t make it less legitimate as a journalistic perspective than any other. Maybe I’m just so confident, I’m not aware of any kind of bias, but I wouldn’t say I’ve experienced it in my professional life.</p> 
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Is that confidence something you’ve developed over time or were you born with it?</h3>

          <p>I definitely wasn’t born with it. My interest in technology goes back to graduate school. So, it’s developed in virtue of having done this for a long time, and from being good at seeing where technology is going. I think that it is a talent I have – so I have a strength of confidence in that vision.</p> 
        </div>
      </section>
  </div>
</li>
<li>
  <div class="fullscreen">
    <div class="parallax">
      <img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-and-cassie.jpg" alt="Nora Young being interviewed by Cassie McDaniel"/>
      <div class="photo-credit light">
        Photo credit:
        <a href="http://rosabourin.crevado.com/" target="_blank">Rachelle Sabourin</a>
      </div>
    </div>
  </div>

    <div class="container">
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How can we help promote women in tech, or in journalism?</h3>

          <p>On my show it is a challenge every week to find even a remote gender balance with men and women. What I’m most interested in is people who are thinking creatively about technology or designing things that are different technologically. I know there are women out there doing interesting projects, so for me the challenge is in working harder at finding them.</p>

          <p>If there were only five interesting technologists, then should two and half of them be women? I think diversity of perspective is a better answer than insisting there must be equal numbers of men and women. I trawl through conference websites all the time, looking for guests, and the number of times I have seen an incredible lack of diversity at conferences is really amazing. Because presumably, those events are not exclusively looking for coders, but for any people who have insight.</p>
		  <p>The problem isn’t that you can't find enough interesting or qualified people. To talk about quotas or no quotas sort of misses the mark. There are lots of people doing interesting work. Full stop. And we know diversity of perspective is a good thing, not just from a do-gooder point of view, but from a results point of view. So, diversity all around (gender, ethnicity, class, etc.) is a good idea.</p>    
        </div>
      </section>

      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>Not that I was any good at it, but if I had advice based on having not put my hand up, putting your hand up is much better.</h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
        <div class="span7 offset4 interview-panel">
          <h3>Any advice for young women just starting their careers?</h3>

          <p>Figure out what it is that you are most passionate about that you can grow with. I’ve been working in more or less the same area for nearly twenty years, and I am still really passionate about the subject. When I first started in radio, people were cutting physical tapes with razor blades. It’s going to continue to change. The part that I’m passionate about is the subject itself and its creative exploration.</p>

          <p>It’s a generalization, but as women it’s important to not be afraid to put yourself out there. Not that I was any good at it, but if I had advice based on having not put my hand up, putting your hand up is much better.</p>    
        </div>
      </section>

      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>It’s weird to have a big chunk of your career rest on something you have absolutely no control over. Aside from not pouring battery acid down my throat, there’s not a lot I can do about my voice. </h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>
        <div class="span7 offset4 interview-panel">
          <h3>One last question of my own: About your voice – have you done any voice training?</h3>

          <p>No, but I’ve learned not to do certain things. My natural tendency is to go on and on and have my voice trail off, it’s how I naturally speak. I’ve had to learn not to do that, because it’s actually really annoying when someone does that.</p>

          <p>It’s weird to have a big chunk of your career rest on something you have absolutely no control over. Aside from not pouring battery acid down my throat, there’s not a lot I can do about my voice. I have come to be thankful because it’s a helpful instrument for doing the job. </p> 

          <p>[Editor’s note: Listen to <a href="http://www.cbc.ca/spark/episodes/2013/01/04/spark-202-ethical-sales-ethical-internet/" target="_blank">one of our favorite Spark episodes</a> in which Nora speaks to <a href="https://twitter.com/DanielPink" target="_blank">Daniel Pink</a> about what it means to “sell”.]</p>   
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>In our last interview, <a href="http://womenandtech.com/interview/christina-truong/">Christina Truong</a> asked, "How do you balance work and life?"</h3>

          <p>[Laughs] I've just decided that this will be the year I figure that out. I'm not necessarily that great at it. Having just said all that stuff about yoga, I don't always give myself the opportunity to savor the things that are going on in my life.</p>

          <p>Maybe this is one reason why I'm so drawn to yoga, because it forces you to be present in what's going right now. I've become an advocate of the old idea, "You can have it all, but just not all at the same time."</p>

          <p>This fall was very busy for me, and there wasn’t a lot of time for my life. But then in December there was this fallow period. I think you have to nourish the fallow periods, and use those as an opportunity for seeing what’s essential to who you are as a creative person. So I’m trying to get better at enjoying the fallow time while it lasts instead of reverting to, “What’s the next thing I have to do?”</p>

          <p>But I'm not very good at the work life balance thing. And part of that is a good thing because I love my job. I used to be someone who said, “You love your job? Come on, you like your job.” But I really love my job.</p>

          <p>So there's a good side of the lack of work life balance too, which is that if you're doing work that you really like, it naturally fills up a lot of your life. <span class="full-stop"><img src="<?php echo get_home_url(); ?>/assets/img/full-stop.png" /></span></p>
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
                  src="<?php echo get_home_url(); ?>/assets/img/nora-interview/nora-portrait-square.jpg" />
              </div>
              <h4>What technologies that you use allow you to best express who you really are?</h4>
              <div id='quote-mark'>
                <img src="<?php echo get_home_url(); ?>/assets/img/quote-mark-small.png" /></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12" id="call-to-action">
              <p>
                Be sure to check back next time (or <a href="#subscribe" title="Subscribe form">subscribe below</a>) for Dessy's answer to this question.
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

