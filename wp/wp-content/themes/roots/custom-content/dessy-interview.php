<ol class="curtains">
  <li>
    <div class="container interview-intro">
      <header class="row">
        <div class="span9">
          <div class="interview-number">
            <?php echo get_field('interview_number')?></div>
          <h1 class="clearfix">
            <?php the_title() ?></h1>
          <address>
            <div class="author-image"></div>
            <div class="author-info">
              <p class="author">
                An interview with <a href="http://twitter.com/feastinc" rel="author" target="_blank" title="<?php echo get_the_author(); ?>'s twitter profile"> <strong><?php echo get_the_author(); ?></strong>
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
            <?php echo get_field('archive_excerpt'); ?></h2>
        </div>
      </section>
    </div>
    <div id="portrait" class="fullscreen">
      <?php get_image("dessy-interview/dessy-daskalov-teaching-portrait-women-and-tech.jpg"); ?>
      <div class="photo-credit light">
        Photo credit:
        <a href="http://jonlim.ca" target="_blank" title="Jon Lim's porfolio site">Jon Lim</a>
      </div>
    </div>
    <div class="container">
      <section class="row">
        <div class="span4" id="start-tag">
          <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
        </div>

        <div class="span7 interview-panel">
          <h3>What do you do?</h3>

          <p>
            I am the CTO and co-founder of <a href="https://www.greengagemobile.com/" alt="Greengage Mobile website" target="_blank">Greengage Mobile</a>, along with Lindsey Goodchild, CEO. We sell our software platform to large companies to help them create awareness, engage employees and measure the impact of their sustainability initiatives.
          </p>
        </div>

        <div class="span4 notable-person" id="lindsey-goodchild">
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable Person</h3>
            <a href="http://ca.linkedin.com/pub/lindsey-goodchild/18/298/20"
              title="Lindsey Goodchild's Bio"
              target="_blank">
              <?php get_image("dessy-interview/lindsey-goodchild-square.png"); ?></a>
            <figcaption class="clear">
              <a href="http://ca.linkedin.com/pub/lindsey-goodchild/18/298/20"
                title="Lindsey Goodchild's Bio"
                target="_blank">
                <h4>Lindsey Goodchild</h4>
              </a>
              <p>
                Lindsey Goodchild, founder and CEO of Greengage Mobile, graduated from Ryerson University with a degree in Sustainability and Corporate Responsibility.
              </p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 offset4 interview-panel">

          <p>
            My co-founder came up with the idea for Greengage Mobile while she was a sustainability consultant. She spent time doing market interviews to validate the idea, before deciding to pursue the opportunity full-time in late 2011. I joined her in January 2012, a little over a year ago.
          </p>
        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>How did you two form your partnership?</h3>

          <p>
            Lindsey came to <a href="http://www.theworkinggroup.ca/" title="The Working Group website" target="_blank">The Working Group</a> – where I was a developer at the time – with her idea and a few clients lined up that wanted to try the software. At that time, I was beginning to look for opportunities to branch out on my own as an entrepreneur. The Working Group was very supportive, and they also knew she was looking for a technical co-founder, so they put us in a room together to see what happened!
          </p>

          <p>
            Lindsey and I had a few beer dates (we joke about this all the time), and eventually we decided to partner up. We finished our first prototype in March 2012 and launched with our first clients last fall.
          </p>
        </div>
      </section>
    </div>
  </li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <div class="container">
          <div class="info-panel" id="on-stage">
            <aside>
              <div class="arrow left"></div>
              <p class="last">
                Dessy, along with Lindsey Goodchild, CEO of Greengage Mobile, pitched their company to a full-house at <a href="http://jolt.marsdd.com/" title="MaRS JOLT's webpage" target=_blank>JOLT's</a> first ever Demo Day held October 25th, 2012. JOLT is an early-stage startup program.
              </p>
            </aside>
          </div>
        </div>
        <?php get_image("dessy-interview/dessy-daskalov-mars-demo-day-women-and-tech.jpg"); ?>
        <div class="photo-credit light">
          Photo credit:
          <a href="http://www.marsdd.com/" title="MaRS' Website" target="_blank">MaRS Media</a>
        </div>
      </div>
    </div>
    <div class="container">
      <section class="row">
        <div class="span4 notable-person photo-callout">
          <figure class="first-row">
            <div class="arrow"></div>
            <a href="http://en.wikipedia.org/wiki/Ask.com#History" title="Ask.com Wikipedia entry">
              <?php get_image("dessy-interview/ask-jeeves.jpg", "Cover of P.G. Wodehouse's book 'Carry on Jeeves'"); ?></a>
            <figcaption class="clear">
              <p>
                <a href="http://ask.com" target=_blank title="Ask.com website">Ask Jeeves</a> (now Ask.com) was founded in 1996 as a search engine that used natural language to seek and find. It got its name from a character in the writing of P.G. Wodehouse – Bertie Wooster's valet, Jeeves.
              </p>
            </figcaption>
            <div style="clear:both"></div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>
            Did you have any early experiences with technology that have influenced your career?
          </h3>

          <p>
            When I was younger, my parents – especially my dad – were always showing me cool tech stuff. I remember the day my dad first showed me Google’s search engine. Back then people were still using Ask Jeeves. When Dad showed me Google, he also told me about the two guys who started it, <a href="http://en.wikipedia.org/wiki/Larry_Page" title="Larry Page's Wikipedia entry" target=_blank>Larry</a> and <a href="http://en.wikipedia.org/wiki/Sergey_Brin" title="Sergey Brin's Wikipedia entry" target=_blank>Sergey</a>. They were able to scale it up and build this huge company. He told me how amazing it was in this country to have the ability to start from nothing, to build a big company and influence the world with it. I was very young when he was telling me these things.
          </p>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>Do you have any siblings?</h3>

          <p>
            Yes, I have a brother; he’s a year younger than me. He too is a developer-entrepreneur. He’s working with a friend on a start-up.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Did you grow up in the Toronto area?</h3>

          <p>
            I was born in Bulgaria and lived there until I was seven. When I was born, Bulgaria was a communist country in which educated people were given limited opportunities to grow professionally. The way my parents tell the story is that the minute the Berlin Wall came down, all these changes started happening and they were eventually allowed to leave. My dad went to every single embassy looking for ways to move to another country.
          </p>

          <p>
            I can put his story into perspective now; my parents were in their 30s when they first left the country in which they were born. We moved here in 1994. We lived in Richmond Hill and the Oak Ridges area until I went to <a href="http://queensu.ca/" title="Queen’s University website" target=_blank>Queen’s University</a> to pursue my Bachelor in Engineering.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>
            What was your experience like as an undergrad student at Queen’s?
          </h3>

          <p>
            In Engineering at Queens, about twenty percent of the students were women. However, the whole university society makes you feel like you are part of something bigger, even though you happen to be in class with more men than women. There were a lot of guys at events too, but at that age guys want to have girls around, so they don’t make you feel like you don’t belong. I had really great friends, and two of my closest girlfriends today I met in the program.
          </p>

          <p>
            I remember feeling more intimidated when I started working in the corporate space. It wasn’t anything specific that anyone did to make me feel that way; I think I felt intimidated because everyone was so much older. I was 18 and working in an engineering office with all men 50 and older. I laugh about it now.
          </p>

        </div>
      </section>
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What inspires you? Who inspires you?</h3>

          <p>
            My parents, the friends I’ve made in tech who have accomplished so much, and my co-founder. Even though she didn’t begin her career in tech, she recognized a need and set out to meet it using technology. It takes a lot of courage to step out of your comfort zone and pursue something new.
          </p>

          <p>
            It inspires me that we even have the opportunity to be entrepreneurs. So many people in the world could never quit their job and go off and work on their own thing. Since I was born in Bulgaria and I go back often, I see how hard it is to start a business there. I’m really inspired by the opportunity that we have. It’s amazing.
          </p>
        </div>
      </section>
    </div>
  </li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <div class="container">
          <div class="info-panel" id="teaching">
            <aside>
              <div class="arrow left"></div>
              <p class="last">
                A regular mentor and instructor with <a href="http://ladieslearningcode.com/" title="Ladies Learning Code website" target=_blank>Ladies Learning Code</a>, Dessy taught an Intro to Ruby workshop to aspiring developers last October.
              </p>
            </aside>
          </div>
        </div>
        <?php get_image("dessy-interview/dessy-daskalov-mentoring-at-ladies-learning-code-women-and-tech.jpg"); ?>
        <div class="photo-credit light">
          Photo credit:
          <a href="http://jonlim.ca" target="_blank" title="Jon Lim's porfolio site">Jon Lim</a>
        </div>
      </div>
    </div>
    <div class="container">
      <section class="row">
        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>
              Be inspired by what the future holds. Make a name for yourself. Start volunteering. Do things on the side.
            </h2>
          </aside>
          <div class="quote-mark">
            <?php get_image("quote-mark.png"); ?></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>
            How would you inspire new immigrants skilled in tech who are coming to Canada looking for jobs?
          </h3>

          <p>
            I moved here young. My parents were educated – Mom and Dad both studied Math in university and my dad has a Master’s in Computer Science – but Mom worked in a donut shop and Dad worked in a pizza place when they came to this country. They had to do tough stuff in the beginning, got their feet on the ground. After five years in Canada, they were much better off than where they came from. The lesson there is to establish your foundation and then take advantage of opportunity. Be inspired by what the future holds. Make a name for yourself. Start volunteering. Do things on the side.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>Why do you work in tech?</h3>

          <p>
            Software is one of those fields where, with very little resources, you are able to build a platform that can affect many people. You have the ability to make a huge difference in the world with software; it’s so scalable.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>
            What challenges, if any, do you face being a woman in technology? How do you attempt to overcome them?
          </h3>

          <p>
            I have to give my parents a lot of credit for treating my brother and me the same. My mother never told me that math, science and tech were easy, but the most important thing she did was tell me I could do it. As long as you think it’s possible, you just don’t worry so much. That was huge.
          </p>
        </div>
      </section>

      <section class="row">
        <div class="span4 notable-person double" id='ohanian-wozniak'>
          <figure class="first-row">
            <div class="arrow"></div>
            <h3>Notable People</h3>
            <div id="alexis-ohanian" class="first">
              <a href="http://alexisohanian.com/"
              title="`anian's website"
              target="_blank">
                <?php get_image("dessy-interview/alexis-ohanian.jpg"); ?></a>
              <figcaption class="clear">
                <a href="http://alexisohanian.com/"
                  title="Alexis Ohanian's website"
                  target="_blank">
                  <h4>Alexis Ohanian</h4>
                </a>
                <p>
                  Alexis Ohanian is an entrepreneur (Reddit, Hipmunk) and activist for microfinancing, the open Internet, and women in tech (he even gave Women && Tech <a href="http://alexisohanian.com/womenandtechcom-i-wholeheartedly-approve-of-t" title="Alexis Ohanian (kn0thing) likes Women And Tech">a shout out</a>). His first book, <a href="http://withouttheirpermission.com/" title="Website for Alexis Ohanian's book 'Without Their Permission'" target=_blank>Without Their Permission</a>, comes out in October 2013.
                </p>
              </figcaption>
              <div style="clear:both"></div>
            </div>
            <div id="steve-wozniak">
              <a href="http://en.wikipedia.org/wiki/Steve_Wozniak"
              title="Steve Wozniak's wikipedia entry"
              target="_blank">
                <?php get_image("dessy-interview/steve-wozniak.jpg"); ?></a>
              <figcaption class="clear">
                <a href="http://en.wikipedia.org/wiki/Steve_Wozniak"
                title="Steve Wozniak's wikipedia entry"
                target="_blank">
                  <h4>Steve Wozniak</h4>
                </a>
                <p>
                  When Wozniak was in Montreal, Dessy emailed asking for a meet-up; he agreed and they met for a coffee. Dessy says, <em>"It was incredible to chat about technology with a man who had such a strong influence on the personal computer revolution."</em>
                </p>
              </figcaption>
              <div style="clear:both"></div>
            </div>
          </figure>
        </div>

        <div class="span7 interview-panel">
          <h3>Do you have any role models in tech?</h3>

          <p>
            The founder of Reddit [Alexis Ohanian]. He’s a huge supporter of <a href="http://www.women2.com/ycombinator-alexis-ohanian-pitch-nyc-2012-competition-judge/" target=_blank>women in tech</a> and the <a href="http://www.nytimes.com/2012/01/27/technology/victory-on-antipiracy-issue-buoys-internet-lobby.html?_r=0" target=_blank>open Internet</a>. He made a lot of money and
            <a href="http://breadpig.com/pages/about-us" target=_blank>uses it for good causes.</a> I look up to him immensely.
          </p>

          <p>
            Steve Wozniak, the other founder of Apple, seems like the most incredible guy. He made a ton of money but now spends his time as a teacher. He <a href="http://www.easyreadernews.com/60128/steve-wozniak/">taught at a public school for eight years</a> and ended up funding his local region’s school computer program. He has such a passion for this stuff. He is a builder himself and wants to inspire young people.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>
            How do you describe your role in tech, and do you view your role differently from your male counterparts?
          </h3>

          <p>
            I describe my role as lead developer, but I also have the responsibility of managing and building a really solid, cohesive development team. Another role is listening to clients, ensuring we properly incorporate the feedback we get from them into the system.
          </p>

          <p>
            My role focuses on three areas: coding, listening to users and clients, and ensuring the team works well together. Many men are good at all three, so I don’t see any difference with my male counterparts.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>
            What project or initiative are you most excited about in 2013?
          </h3>

          <p>
            A year in the start-up world is like ten years in a large enterprise. So much happens in a year, so many changes! I hope our team grows, our product evolves, and we acquire more clients. That should be very exciting.
          </p>

          <p>
            I’m also interested in teaching and hopefully will do more of that. I’m currently a mentor for HackerYou, and will be teaching Ruby to sixth graders in April. They’re so young, yet so receptive to learning at that age.
          </p>

        </div>
      </section>
    </div>
  </li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <div class="container">
          <div class="info-panel" id="girls">
            <aside>
              <div class="arrow"></div>
              <p class="last">
                Young participants of a <a href="http://girlslearningcode.com/" title="Girls Learning Code website" target=_blank>Girls Learning Code</a> Ruby workshop, where Dessy helped teach, hold up their favourite programming word.
              </p>
            </aside>
          </div>
        </div>
        <?php get_image("dessy-interview/dessy-daskalov-girls-learning-code-women-and-tech.jpg"); ?>
        <div class="photo-credit light">
          Photo credit:
          <a href="https://twitter.com/Hannah_DNA" title="Hannah Allen Twitter profile" target="_blank">Hannah Allen</a>
        </div>
      </div>
    </div>

    <div class="container">
      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>What are your challenges in the industry?</h3>

          <p>
            We’re building on our fourth platform, so there are lots of balls in the air in terms of technology. Sometimes you have to prioritize and say no to things. Deciding whether to take on an opportunity for the business is challenging, because those so-called opportunities can be distracting.
          </p>
        </div>
      </section>

      <section class="row">

        <div class="span7 offset4 interview-panel">

          <h3>
            What is your impression of developer culture? How do you think most people see developers?
          </h3>

          <p>
            When I started working full-time, I remember telling a male friend I had a hard time talking to the guys at work. They’d talk about video games, and because I don’t play video games, I would just tune out. My friend, who was in finance, told me he wished his co-workers would talk about video games – all they talked about was sports.
          </p>

          <p>
            At the end of the day, stereotypes are never 100% true. It might be true that some developers like video games and some people in finance like sports, but they all also have many other, diverse interests. After getting to know them, I developed friendships with some of the people I originally found it difficult to connect with.
          </p>
        </div>
      </section>

      <section class="row">

        <div class="span7 offset4 interview-panel">

          <h3>Where do you think technology might be failing women?</h3>

          <p>
            I’ve spent a lot of time reading essays by <a href="http://www.paulgraham.com/articles.html" title="Paul Graham's writing' target=_blank">Paul Graham</a> from <a href="http://ycombinator.com/" title="Y Combinator's website" title=_blank>Y Combinator</a> [a prestigious, competitive accelerator in San Francisco]. They are always thought-provoking essays. He says the best start-ups are the ones that see just ahead of the curve, to what technology is capable of doing in the future.
          </p>

          <p>
            I think a field that has yet to be explored is natural language processing. If you think about the types of things you can ask Google – it’s not like talking to a person, there are still certain questions it can’t answer. For example, when I google “best brunch spots in Toronto,” I get tons of articles from Toronto Life. But what if I want a cute brunch spot to bring my parents to, and I don’t want it to be too crazy, and it should have a nice modern atmosphere and a patio. In that case, Google still doesn't replace talking to a friend of mine that knows me and my interests.
          </p>

          <p>
            There’s an emotional element I’m looking for, a feeling, that Google doesn’t have. I can’t attach emotion or intent to my search. It’s hard to express feelings using traditional search engines.
          </p>

        </div>
      </section>
    </div>

  </li>
  <li>
    <div class="fullscreen">
      <div class="parallax">
        <?php get_image("dessy-interview/dessy-daskalov-with-microphone-women-and-tech.jpg") ?>
        <div class="photo-credit light">
          Photo credit:
          <a href="http://jonlim.ca" target="_blank" title="Jon Lim's porfolio site">Jon Lim</a>
        </div>
      </div>
    </div>

    <div class="container">

      <section class="row">

        <div class="span11 pull-quote">
          <aside class="quote">
            <h2>
              Twenty years from now, it would be great to say that we built this thing and it had a positive impact in the world.
            </h2>
          </aside>
          <div class="quote-mark">
            <?php get_image("quote-mark.png"); ?></div>
        </div>

        <div class="span7 offset4 interview-panel">
          <h3>
            What do you hope to achieve in your career? What are your short- and long-term goals?
          </h3>

          <p>
            Short-term, I want us to build Greengage Mobile into a lasting business. I want it to make a big impact in the world and change sustainability strategies. Lindsey and I are also passionate about making sustainability easy and exciting for the individual.
          </p>

          <p>
            Long-term, I want to continue to build things and hopefully spend more time teaching. Twenty years from now, it would be great to say that we built this thing and it had a positive impact in the world.
          </p>

        </div>
      </section>

      <section class="row">
        <div class="span7 offset4 interview-panel">
          <h3>
            In our last interview, <a href="http://womenandtech.com/interview/nora-young/">Nora Young</a> asked, “What technologies that you use allow you to best express who you really are?”
          </h3>

          <p>
            When you're working on a small team and you're the one building the software, you have a lot of control over how it's built, how it looks, and how the user interacts with it. Of course, it's a great idea to pull in talented designers to craft that experience with you, but developers can express themselves not only by changing the way something looks to a user, but by creating a clean workflow and designing beautiful code. These decisions can be very personal to a developer. No two people will build a feature the same way.
          </p>

          <p>
            After you've worked with a small development team for a long time, you start to recognize each developer's style, and get to the point where you can almost look at a piece of code and know who wrote it.
            <span class="full-stop">
              <?php get_image("full-stop.png"); ?></span>
          </p>

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
                <?php get_image("dessy-interview/dessy-portrait-square.jpg") ?></div>
              <h4>
                How are you changing the status quo, and what are you doing to change the things you don't like about the world?
              </h4>
              <div id='quote-mark'>
                <?php get_image("quote-mark-small.png"); ?></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12" id="call-to-action">
              <p>
                Be sure to check back next time (or <a href="#subscribe" title="Subscribe form">subscribe below</a>) for Martha's answer to this question.
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="row" id='end-tag'>
        <div class="span4">
          <?php get_image("end-tag.png"); ?>
        </div>
      </div>

    </div>
    <!-- container -->
  </li>
</ol>