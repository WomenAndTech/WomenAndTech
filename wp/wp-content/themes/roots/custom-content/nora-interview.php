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

          <p>I suppose that, because I interview a lot people who I think of as really really creative, I am a little hesitant to apply that label to myself. That said, one of the great advantages of Spark is that it is creative. I love that it's not just about facts and arguments but also about the pleasure of exploring story.</p>
          
        </div>
      </section>

      <section class="row clearfix">
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

      <section class="row">
        <div class="span4 notable-person photo-callout">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://cbc.radio-canada.ca/en/explore/who-we-are-what-we-do/" title="Information about The Canadian Broadcasting Corporation"><img src="<?php echo get_home_url(); ?>/assets/img/nora-interview/cbc_radio_logo.jpg" alt="CBC Radio Logo"/></a>
            <figcaption class="clear">
              <p>The Canadian Broadcasting Corporation (CBC), has been operating since July 1, 1927. At the time, American broadcasting was increasing in popularity and beginning to flood Canadian airwaves. In response, the Canadian government created a nationally-owned corporation to help preserve Canada's national identity.</p>

              <p>Since then, the CBC has become one of the strongest cultural institutions of Canada. It broadcasts from coast to coast, has 14 foreign bureaus and almost 9000 employees, and receives nearly a billion dollars a year in government funding.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>
        
        <div class="span7 offset4 interview-panel">
          <h3>Why CBC then?</h3>
          <p>CBC is just who popped up. It's certainly not the only place to be able to explore the questions that Spark does, but it's a pretty wonderful place to be able to explore them, particularly some of the deeper, softer questions around technology and human relationships, rather than covering the new iPhone or the latest business story about technology – all of which are completely reasonable stories to do about technology, but they're done a lot; we don't need to be doing that. I would say that CBC has given us a lot of freedom in that respect.</p>
        </div>
      </section>

      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>My stance towards technology is engaged; it's critical but not fearful. </h2>
          </aside>
          <div class="quote-mark"><img src="<?php echo get_home_url(); ?>/assets/img/quote-mark.png" /></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>On your CBC bio, it says you have a ‘love-hate relationship’ with technology. What do you love about technology and what do you hate about it?</h3>

          <p>My stance towards technology is engaged; it's critical but not fearful.</p>

          <p>There's something specifically lovable about seeing somebody doing something really, really smart on the Web. Human ingenuity and creativity is a source of delight, and I have an almost endless appetite for it. It makes me hopeful that this incredibly open dynamic platform can be used to do some amazing things.</p>

          <p>The hate, I think, comes partly from the irritation everyone feels when something is badly designed or is controlling in ways that you don't want to be controlled.</p>  
        </div>
      </section>


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
          <h3>I’m curious about the genesis of <em>Spark</em> and how you may have seen things change over the years.</h3>

          <p>I had floated a few ideas with CBC about doing shows that featured a lot of social media content, and that could start to break down the walls in between broadcasting, social media and audience. When I first suggested it, I think it was a little bit too early.</p>
          
          <p>In the spring of 2006, I thought of doing a show about technology that's not really about technology, but about all the interstitial aspects of human relationships: about the worlds of work, education, dating, and social relationships, seen through the filtering lens of technology. There was something really powerful about that. I think the timing was right, and I pitched it, and my bosses immediately thought, "That makes a lot of sense, I understand that." That was the origin of Spark. </p>
          
          <p>There was a lot going on at the time in the Internet space. YouTube and Facebook had already arrived, but in some ways, the fetishizing of our relationship with consumer technology has grown a lot since Spark went on the air. One thing we've returned to look at again is the way consumer technologies give us a lot of capabilities, but we don't really understand how any of them work. That’s an ongoing tension in our relationship with consumer tools.</p>
        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How many people are on the <em>Spark</em> team?</h3>

          <p>There are four of us, but we don't all work full-time. <a href="http://misener.org/" target="_blank">Dan Misener</a> is just back on the show, he also does a technology column two days a week. I work on Spark four days a week. <a href="http://www.cbc.ca/spark/about.html" target="_blank">Kent Hoffman and Michelle Parise</a> work on the show full time. Kent does most of the mixing and Michelle does all of the fielding, the pitches from freelancers, paying the bills, coordinating everything and making sure things get on the air. We all pitch stories, we all produce stories, we all do the social media side of Spark.</p>
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

          <p>I think we still have a special spot in tech journalism, but what I've seen happen is that a lot of the kind of stories that Spark used to cover are now just cultural stories. They're stories that may find a home on <a href="http://www.cbc.ca/q/" target="_blank">Q</a> or <a href="http://www.cbc.ca/thecurrent/" target="_blank">The Current</a>. Because it's no longer seen as Technology, with a capital “T,” it's seen as part of life. You now see more Spark stories in journalism in general. But the tech sector still is overwhelmingly wedded to products and business. That's still the bias of the media, partly because that's what pays the bills.</p>
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

          <p>I really like the <a href="http://www.cbc.ca/ideas/" target="_blank">Ideas</a> podcast, it’s very interesting and engaging. I’ve contributed to Ideas in the past. I like Spark. (Laughs) I also like <a href="http://www.cbc.ca/undertheinfluence/" target="_blank">Terry O’Reilly’s show</a>, I think it’s a really great show too.</p>

        </div>
      </section>
      <section class="row">
        <div class="span4 notable-person" id="linda-stone">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://en.wikipedia.org/wiki/Linda_Stone"
              title="Linda Stone's wikipedia entry"
              target="_blank"><img src='<?php echo get_home_url(); ?>/assets/img/nora-interview/linda-stone.jpg'></a>
            <figcaption class="clear">
              <a href="http://en.wikipedia.org/wiki/Linda_Stone"
                title="Linda Stone's wikipedia entry"
                target="_blank"><h4>Linda Stone</h4></a>
              <p>Linda Stone, a write and consultant, has worked for both Apple and Microsoft over the course of her career. She's written for Wired, New York Times and Forbes.</p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>Have you had any mentors in your career?</h3>

          <p>The executive producer on DNTO, Bill Smith was an early mentor of mine in terms of creative techniques and story telling. <a href="http://w3.stu.ca/stu/news/news_view.aspx?id=148069" target=_"blank">Bernie Lucht</a>, who was until recently the Executive Producer of Ideas, has certainly been a real mentor to me in terms of narrative and story.</p>
        </div>

        <div class="span4 notable-person" id="jane-mcgonigal">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://en.wikipedia.org/wiki/Jane_McGonigal"
              title="Jane McGonigal's wikipedia entry"
              target="_blank"><img src='<?php echo get_home_url(); ?>/assets/img/nora-interview/jane-mcgonigal.jpg'></a>
            <figcaption class="clear">
              <a href="http://en.wikipedia.org/wiki/Jane_McGonigal"
                title="Jane McGonigal's wikipedia entry"
                target="_blank"><h4>Jane McGonigal</h4></a>
              <p>Jane McGonigal is a game designer whose first book, Reality Is Broken: Why Games Make us Better and How they Can Change the World, was published in 2011 to mixed reviews. </p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
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

          <p>It's true, but it's easy to have conversations with the people on Spark. First of all, you're mostly listening. Second, – and this is the amazing thing about making a show like Spark – the people that we have as guests tend to be really passionate about what they're doing. Either they're artists or technologists or bloggers or geeks or academics, and they just want to tell you what they think.</p>

          <p>In journalism especially, that's such a gift, to have somebody who's not really promoting an agenda, not message-tracking or bullshitting you, just talking about what they're passionately interested in. </p>

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

