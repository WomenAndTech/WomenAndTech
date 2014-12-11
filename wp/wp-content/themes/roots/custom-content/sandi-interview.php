<ol class="curtains" ng-app="womenAndTech">
  <li class='opening'>
    <div class="container interview-intro">
      <header class="row">
        <div class="span9">
          <div class="interview-number double-digits interview-number-<?php echo get_field('interview_number') ?>"><?php echo get_field('interview_number')?></div>
          <h1 class="clearfix" id="twitter-handle" data-twitter-handle="HotPopFactory">
            <?php the_title() ?></h1>
          <address>
            <div class="author-image"></div>
            <div class="author-info">
              <p class="author">
                An interview with
                <a target="_blank" href="https://twitter.com/southersar" rel="author" target="_blank" title="<Sarah Southerland's twitter profile"> <strong>Sarah Southerland</strong>
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
      <img src="<?php echo get_home_url(); ?>/assets/img/sandi-interview/sandi-lin-featured.jpg" alt="Sandi Lin Profile"/>
      <div class="photo-credit">
        Photo credit:
        <a href="http://twitter.com/DougGradt" target="_blank">Doug Gradt</a>
      </div>
    </div>
    <div class="container">
      <section class="row no-margin-bottom">

        <div class="span4" id="start-tag">
          <div id="start-animation" style="width: 300px; height: 90px" class="swiffy"></div>
        </div>

        <first-question>
          Let’s talk about your background a little bit. What was growing up like?
        </first-question>

        <first-answer>
          <p>
            I grew up in <a href="http://www.viennava.gov/">Vienna, Virginia</a>, a suburb of Washington DC. I’m the middle child in a Chinese-American family, so I had a very academic and conservative upbringing. One thing my family valued was that whatever we did, we were expected to do it excellently, whether that was academics, music, or sports. My parents taught me to put everything into what I do, and I’ve definitely carried that lesson with me, throughout my career and especially in founding Skilljar.
          </p>
        </first-answer>

        <question>
          You studied engineering at MIT then later went to Stanford for an MBA. Where did the interest in technology come from, and what led you down that academic path?
        </question>

        <answer>
          <p>
            I’ve always been very analytical. In middle school I was on the math team. I went to a science and technology focused high school so it was always part of my academic upbringing.  At <a href="http://engineering.mit.edu/">MIT</a> I got to be part of a larger community of people that were really excited by technology and innovation. I always thought I wanted to be an engineer, and by the time I got to college it just arose very naturally.
          </p>
        </answer>

        <pull-quote>
          One thing my family valued was that whatever we did, we were expected to do it excellently
        </pull-quote>

        <question>
          You left your career at Amazon to start your own company. Was this a tough decision for you?
        </question>

        <answer>
          <p>
            When I left Amazon I wasn’t scared about trying entrepreneurship – it’s something I had wanted to do for a while. After thinking through it, I realized the worst that could happen is the startup wouldn’t go anywhere, I would draw down my savings, and I would end up back at Amazon. This didn't seem so bad because I was pretty happy with my career progression there. I was actually more scared about leaving my team behind at Amazon. I was a manager at that point and had helped build the business [Amazon Local](http://local.amazon.com/). I felt a lot of loyalty towards the people I worked with so I was more worried about leaving them than I was about the future.
          </p>        
        </answer>

        <question>
          Tell us about your company Skilljar.
        </question>

        <!-- Non-Angularizes callout

        <div class="span4">
          <div class="photo-callout notable-person">
            <figure class="first-row">
              <div class="arrow"></div>
              <iframe src="http://www.youtube.com/embed/JKXfNxbwKOc" width="278" height="156" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              <figcaption class="clear">
                <p>Skilljar empowers instructors to deliver courses from their own website.</p>
              </figcaption>
              <div style="clear:both"></div>
            </figure>
          </div>
        </div>
        -->
        

        <!-- Angular-ized callout with video -->

        <callout-with-video video="http://www.youtube.com/embed/JKXfNxbwKOc" caption="Skilljar demo Skilljar empowers instructors to deliver courses from their own website.">
        </callout-with-video>
        

        <answer>
          <p>
            Skilljar is an online course delivery platform which allows anyone to create an online course by uploading their videos and other content and publishing it to their website. We take care of registration, payments, course delivery, and analytics. We have instructors of all different sizes working across many different topics -- everything from yoga to enterprise software training. <a href="http://www.geekwire.com/2013/examazonians-raise-768k-online-instruction-platform-everpath/">We started the company in 2013</a>. It’s actually changed quite a bit from our original concept. We started as a search directory for online courses. As we began working with instructors, it became clear that what they really wanted was a technology platform where they could deliver online courses more easily. So we listened to our customers, and changed our product in September of 2013.
          </p>
        </answer>

        <pull-quote>Creating something from scratch and adding value to the world through my team’s efforts is an incredible feeling.</pull-quote>

        <question>
          What has been the best and most difficult parts of running a company?
        </question>

        <answer>
          <p>
            Creating something from scratch and adding value to the world through my team’s efforts is an incredible feeling. We have a lot of customers who really love using our product, and we’re powering a significant part of their business.
          </p>

          <p>
            The most difficult part is wearing so many different hats at the same time. I’ll respond to a complicated customer service issue, then pitch a really important customer, and then fix some code in our marketing website. This might all happen within the space of two hours, so I’m constantly switching roles and having to take on challenges I might never have done before.
          </p>
        </answer>

        <question>
          How do you create balance between work and your personal life?
        </question>

        <answer>
          <p>
            Not very well [laughing]. Balance is an ongoing struggle for me. Exercising is very important so I try to do that as often as I can. I try hard to not work on Friday nights and Saturdays too, but that’s not always possible when you are trying to grow a company.
          </p>
        </answer>

        <question>
          What is your strongest asset in your technical career?
        </question>

        <callout-with-large-image image="sandi-interview/sandi-mouse-trap.png" alternative-text-for-image="Early 1960’s board game Mouse Trap">
          Mouse Trap is a board game that was first released in the early 1960's. Players engineer a Rube Goldberg-like mousetrap system to trap opponent's pieces.
        </callout-with-large-image>

        <answer>
          <p>
            As a technical person I’ve always had a natural curiosity about how things work. I was the kid that played with Mouse Trap and those types of toys. From a technical perspective I’m fascinated by how bits and bytes move around, and because of that natural and genuine curiosity I think I’ve always been able to work very well with technical people.
          </p>
        </answer>

        <question>
          What about as a CEO?
        </question>

        <answer>
          <p>
            I think I learn very quickly -- especially through hands-on experiences. I’m not afraid to get into the weeds and experiment with things. I think I’m able to take in a lot of different inputs, draw conclusions and move on pretty rapidly.
          </p>
        </answer>

      </section>

    </div>
  </li>
  <li class='regular'>
    <full-screen-curtain
      image='sandi-interview/sandi-in-courtyard.jpg'
        id=''
        title='Sandi Lin in Courtyward'
        caption="Originally called “Everpath,” the business rebranded as “Skilljar” after Sandi initiated a <a href='http://thenextweb.com/entrepreneur/2014/03/31/changing-startups-name-tale-crowdsourcing-843-domain-names/''>crowdsourced naming campaign</a>."
        photo-credit='Doug Gradt'>
    </full-screen-curtain>

    <div class="container">
      <section class='row normal'>

        <question>
          What is the toughest thing you’ve had to do in your career?
        </question>

        <answer>
          <p>
            Definitely the hardest things I’ve had to do are around letting employees go. Even if it is completely mutual it has never been a pleasant experience. I think a lot about what didn’t work in terms of the role, the environment, or the expectations. I reflect on what I could have done differently and where things went off track. A lot of times it’s not anyone’s “fault,” it’s just a mismatch of expectations, where people are in their lives, or what’s needed for the company. However, it’s still definitely tough.
          </p>
        </answer>

        <question>
          Who would you say is your leadership role model that has influenced your career path?
        </question>

        <notable-person image="sandi-interview/sandi-tom-taylor.jpg">
          <h3>Tom Taylor</h3>
          Tom Taylor is a Vice President at Amazon in Sellers Services.
        </notable-person>

        <answer>
          <p>
            I really admire a leader at Amazon named Tom Taylor. When I worked on <a href="http://services.amazon.com/content/fulfillment-by-amazon.htm">Amazon Fulfillment</a> we were a really small team and I interacted with Tom on a daily basis; he’s actually one of our investors here at Skilljar. Tom is incredibly smart but also very humble and approachable. He provides strategic direction while also giving room for people to figure out the details. He has a remarkable ability to inspire others. I’m really lucky to have met him early in my career, and I definitely look to him as a role model for leadership.
          </p>
        </answer>

        <question>
          If you had to choose one characteristic what would you say is the most important trait to being a good leader?
        </question>

        <answer>
          <p>
            This is tough. I would say listening. Even if you don’t agree with someone’s point of view, an effective leader has to relate to the people around them. If people feel like they are heard and their opinions are valued you’ll be much more effective.
          </p>
        </answer>

        <question>
          You’ve claimed to be more introverted than extroverted so how do you manage to network?
        </question>

        <answer>
          <p>
            [laughing] In general I’m not someone that enjoys “networking.” If I’ve had a long day and I have an event to attend, I mentally reframe it as an opportunity to tell people about what we’re doing at Skilljar and share our mission. Usually I consider a networking event a success if I walk away with one or two interesting contacts.
          </p>
        </answer>

        <pull-quote>
          I think sometimes people are surprised that a young woman can be smart, ambitious, and technical.
        </pull-quote>

        <question>
          Where do you see the education technology space heading over the next few years?
        </question>

        <div class="span4">
          <div class="photo-callout notable-person">
            <figure class="first-row">
              <div class="arrow"></div>
              <iframe src="http://www.youtube.com/embed/5-mc9Rrfs00" width="278" height="156" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              <figcaption class="clear">
                <p>SEducation gamification attempts to incorporate game elements and design into learning environments. Watch Jane McGonigal, a leading proponent of education gamification, <a href='http://ed.ted.com/on/uk36wtoI'>discuss her thoughts</a></p>
              </figcaption>
              <div style="clear:both"></div>
            </figure>
          </div>
        </div>

        <!-- Angular-ized callout with video

        <callout-with-video video="http://youtu.be/5-mc9Rrfs00" caption="Education gamification attempts to incorporate game elements and design into learning environments. Watch Jane McGonigal, a leading proponent of education gamification, <a href='http://ed.ted.com/on/uk36wtoI'>discuss her thoughts</a>">
        </callout-with-video>

        -->

        <answer>
          <p>
            I think of education technology in two buckets. The first is technology that improves learning outcomes. These are things like adaptive learning and gamification. There’s a lot of exciting things happening in the K-12 space. The second bucket is technology that improves learning access. That’s a totally different way that technology can be applied to education. A lot of big data initiatives which help different education systems communicate are in this space, as well as Skilljar.
          </p>
        </answer>

        <question>
          Do you notice a lack of women starting companies in the tech industry? If you do why do you think that might be the case?
        </question>

        <answer>
          <p>
            Yes, absolutely. The numbers I’ve seen state <a href="http://www.forbes.com/sites/fridapolli/2013/07/29/we-are-the-3-where-are-all-the-women-tech-entrepreneurs/">around 3% of tech companies are founded by women</a>. Of those companies their founders are typically non-technical and in my experience most of them have either been launching fashion-related e-commerce sites or fitness applications so if you take those out then there’s even fewer women leading technology companies.
          </p>
        </answer>

        <question>
          What do you think is causing this?
        </question>

        <answer>
          <p>
            It’s a mix of reasons. First, women tend to be more risk-averse, and entrepreneurship is a very risky career move. Second, women are very underrepresented in the tech industry. When you combine women not necessarily wanting entrepreneurial risk with a lack of women in the technology industry you end up in a situation where only 3% of technology companies are started by women.
          </p>
        </answer>

     </section>

    </div>
  </li>
  <li class='regular'>
    <full-screen-curtain
      image='sandi-interview/sandi-lin-collage.jpg'
      id=''
      title=' '
      caption=''
      photo-credit='Doug Gradt'>
    </full-screen-curtain>

    <div class="container">
      <section class='row normal'>

        <question>Have you ever faced discrimination or different expectations in your academic or professional career because you’re a woman?</question>

        <answer>
          <p>
            Absolutely. First I’ll say that I’ve been super lucky because I don’t think I’ve faced that much overt conscious discrimination. Ever since high school I can remember little things, and most of it was subconscious discrimination. I was the top performer in my ninth grade electronics class and I remember the teacher would always pick the boys to be the class helpers. My first job out of college I was in engineering and I would go on business trips frequently. More than once, even though I was wearing a business suit and getting breakfast at the hotel, people would approach me thinking I was the wait staff. Professionally I think sometimes people are surprised that a young woman can be smart, ambitious, and technical.
          </p>
          <p>
            Sometimes I wonder how different things would be if I were a tall white male. A recent study showed that, all else being equal, <a href="http://www.bostonglobe.com/magazine/2013/11/02/how-female-entrepreneurs-can-get-venture-capital-game/Ahn0XfhG3WABm8Q4uoAq6O/story.html">a male founder is 40% more likely to secure financing</a> from investors than a female founder. For the most part I don’t feel that I have faced a ton of discrimination and bias to my face which certainly a lot of women in technology have to deal with so I’m lucky in that respect. I do feel that while we face forms of discrimination, being a woman in tech has many benefits too -- it helps me stand out from the crowd of other startups.
          </p>
        </answer>

        <pull-quote>
          I don’t think that the company, industry, or even specific role matters as much as working with really great people...
        </pull-quote>

        <question>
          What keeps you up at night?
        </question>

        <answer>
          <p>
            There’s always 100 things I should be doing. At best I’m only doing 10 of them so I’m usually up thinking about the 90 things that I’m not doing and I’m worrying that I’m not doing the remaining 10 very well at all.
          </p>
        </answer>

        <question>
          What do you do for fun outside of work?
        </question>

        <answer>
          <p>
            Primarily exercise -- running, skiing, hiking, and biking. I try to stay as active as possible. I find it helps clear my head and helps me function better as an entrepreneur and a leader. I have a few side hobbies too; I love travel, reading, cooking, and working on crossword puzzles.
          </p>
        </answer>

        <question>
          Do you have a favorite hike in Seattle?
        </question>

        <answer>
          <p>
            I recently went to <a href="http://www.wta.org/go-hiking/hikes/lake-22">Lake 22</a> up near Mt. Baker -- it was a really amazing hike.
          </p>
        </answer>

        <question>
          How would your friends describe you?
        </question>

        <answer>
          <p>
            My friends would describe me as responsible, hardworking, intelligent and loyal.
          </p>
        </answer>

        <question>
          What was the last book you read?
        </question>

        <answer>
          <p>
            So this is a little embarrassing because usually in interviews people always talk about amazing business books they’ve read, but the last book I read was the <a href="http://www.amazon.com/Divergent-Series-Complete-Box-Set/dp/0062278789#">Divergent Series by Veronica Roth</a>. The first book recently came out and is now a young-adult movie. I usually read non-fiction but ever since doing this startup I need a little mind candy when it comes to my reading. 
          </p>

          <p>
            The last business book I read was probably <a href="http://www.amazon.com/Influence-Psychology-Persuasion-Revised-Edition/dp/006124189X">Influence by Robert Cialdini</a>. You know I don’t read business books that often; I actually enjoy reading historical books and biographies more. One of my recent favorites is a biography of James Garfield called <a href="http://www.amazon.com/Destiny-Republic-Madness-Medicine-President-ebook/dp/B004J4X33O/ref=sr_1_1?s=books&ie=UTF8&qid=1407178494&sr=1-1&keywords=destiny+of+the+republic">Destiny of the Republic</a>.
          </p>
        </answer>

      </section>

    </div>
  </li>
  <li class='regular'>
    <full-screen-curtain
      image='sandi-interview/sandi-lin-market.jpg'
      id='Market'
      title=' '
      caption='Located in Pioneer Square, the company’s office is a short walk to Seattle’s historic <a hreef="http://www.pikeplacemarket.org/">Pike Place Market</a>.'
      photo-credit='Doug Gradt'>
    </full-screen-curtain>

    <div class="container">
      <section class='row normal'>

        <question>
          What’s the best piece of advice you’ve ever been given?
        </question>

        <answer>
          <p>
            Someone told me that the biggest risk I had to success was getting in my own way. I think that’s true because I definitely tend to worry about things too much and cause myself unnecessary anxiety. At the same time I recognize that’s one of the characteristics that has shaped who I am and has helped me achieve the success I’ve had to date.
          </p>
        </answer>

        <question>
          What advice would you give to women who are just starting their careers in tech?
        </question>

        <answer>
          <p>
            It’s probably true for anyone starting their career but I think the most important thing is to work with really great people who you can learn from and enjoy working with. Especially in the first five years of your career I don’t think that the company, industry, or even specific role matters as much as working with really great people who you think you’ll learn a lot from.
          </p>
        </answer>

        <question>
          This question was posed by the last woman interviewed: What has been the most unexpected lesson to come out of being an entrepreneur?
        </question>

        <answer>
          <p>
            The most unexpected lesson is the importance of maintaining a healthy physical, mental, and emotional state. Being an entrepreneur is a roller coaster of ups and downs. I've found it's critical to work at giving myself routines and space to regain perspective. It doesn't help the company if I'm not on top of my game. Some tactical things I've implemented include exercising even it’s just 10 minutes a day, reducing caffeine and alcohol, and not looking at email for 1 hour before bed.
          </p>
        </answer>

      </section>

      <section class="row contains-questions">
          <question-for-next-interviewee image="sandi-interview/img-square-sandi.jpg" firstname="Sandi">
            Women face many challenges in the technology industry but we also bring many strengths. What do you think is the best part of being a woman in tech?
          </question-for-next-interviewee>
      </section>

      <section class="row contains-credits">
          <div class="span8 offset3 credits-panel">
            <div class="credits">
              <p>
                <strong>Interview</strong><em> by</em>
                <a href="http://twitter.com/southersar" target="_blank">Sarah Southerland</a>
              </p>
              <p>
                <strong>Photography</strong><em> by</em>
                <a href="http://twitter.com/DougGradt" target="_blank">Doug Gradt</a>
              </p>
              <p>
                <strong>Editing</strong><em> by</em>
                <a href="http://twitter.com/heyrubyjean" target="_blank">Sarah Southerland</a><em> and</em>
                <a href="http://twitter.com/KeeganWincewicz" target="_blank">Keegan Wincewicz</a>
              </p>
              <p>
                <strong>Design</strong><em> by</em>
                <a href="http://twitter.com/DougGradt" target="_blank">Doug Gradt</a>
              </p>
              <p>
                <strong>Development</strong><em> by</em>
                <a href="http://twitter.com/warderin" target="_blank">Erin Ward</a>
              </p>
              <p>
                <strong>Transcriptions</strong><em> by</em>
                <a href="http://twitter.com/KeeganWincewicz" target="_blank">Keegan Wincewicz</a>
              </p>
            </div>
            <p class="tools">This site uses
              <a href="http://www.losttype.com/font/?name=blanch" target="_blank">Lost Type's Blanch by Atipus</a>,
              <a href="http://www.google.com/fonts/specimen/Open+Sans" target="_blank">Steve Matteson's Open Sans</a>,
              <a href="http://twitter.github.io/bootstrap/" target="_blank">Twitter Bootstrap,</a>
              <a href="http://wordpress.org/" target="_blank">WordPress</a>,
              <a href="http://www.rootstheme.com/" target="_blank">Roots Theme</a>,
              <a href="http://jquery.com/" target="_blank">jQuery</a>,
              <a href="https://angularjs.org/" target="_blank">AngularJS</a>,
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
