<!DOCTYPE html>
<?php
include('functions.php');
?>
<html>
  <head>
  <link rel="stylesheet" href="<?php echo getRequestURL(); ?>/styles.css">
    <title>RaceTime.GG Async Search/Submission Tool by JamesFnX - Frequently Asked Questions</title>
  </head>
  <body>
    <div style="width: 50%; margin-left: auto; margin-right: auto;"><span class="headerleft"><a href="<?php echo getRequestURL(); ?>/">Home</a></span><span class="headerright"><a href="<?php echo getRequestURL(); ?>/featured">Featured Modes</a></span></div>
    <br><br><hr>
    <h1>Frequently Asked Questions</h1>
    <div><input type="button" value="What does this site do?" id="faq1" onclick="toggleAnswer1(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer1" class="faq_answer">This site gathers race data from completed races on <a href="https://racetime.gg" target="_blank">RaceTime.GG</a>. It takes that race data and makes races searchable by distinct modes and gives you options to grab the seed from that race and play it without getting spoiled on the results of the race or what's said in the race room. Then you can submit your time to our database and compare it to the players who ran that race live.</div><br>
    <div><input type="button" value="What races do you get data from?" id="faq2" onclick="toggleAnswer2(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer2" class="faq_answer">We gather races rolled by Synack's Sahasrahbot that are publicly distributed in the RaceTime race room. We don't gather races that are privately distributed (like main tournament races) or races that are rolled off site.</div><br>
    <div><input type="button" value="How often do you get new races?" id="faq3" onclick="toggleAnswer3(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer3" class="faq_answer">We grab new completed races every hour.</div><br>
    <div><input type="button" value="How do I compare my time to other runners?" id="faq4" onclick="toggleAnswer4(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer4" class="faq_answer">Next to each race (or on the Permalink page) there's a link to a form to input your name, time, and comments. Comments are subject to admin review and may be deleted without warning. Don't be a jerk.</div><br>
    <div><input type="button" value="I don't see a race I did recently here - where is it?" id="faq5" onclick="toggleAnswer5(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer5" class="faq_answer">One of three things happened: the race was not rolled by Sahasrahbot; the race <em>was</em> rolled by Sahasrahbot and our script didn't detect it; or our script hasn't gotten new race data since the race was completed. If the race was rolled by Sahasrahbot and the seed URL is public and we don't have the race, post a bug report in our <a href="<?php echo getRequestURL(); ?>/discord" target="_blank">Discord</a> and we'll take a look.</div><br>
    <div><input type="button" value="How do I know people who've posted async times aren't cheating?" id="faq6" onclick="toggleAnswer6(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer6" class="faq_answer">You don't and we don't either. This site is not an arbiter of truth. We won't be posting leaderboards of race winners and any statistics we release will be solely on RaceTime data.</div><br>
    <div><input type="button" value="I have an idea for a new feature. How can I tell you?" id="faq7" onclick="toggleAnswer7(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer7" class="faq_answer">We've got a channel for feature requests on the <a href="<?php echo getRequestURL(); ?>/discord" target="_blank">Discord</a>. This is a hobby and a learning project for me (I'm not a developer or coder by trade and I haven't written lots of HTML/PHP in probably 15 years, so new features may be slow to release at times because I'm trying to figure out how to do what you want.)</div><br>
    <div><input type="button" value="I'd like to help out with development of the site. How can I get access?" id="faq8" onclick="toggleAnswer8(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer8" class="faq_answer">I'll have a GitHub of the site <em>Soon™</em> but until then, reach out to JamesFnX on the Discord.</div><br>
    <div><input type="button" value="How else can we help out?" id="faq9" onclick="toggleAnswer9(this)" class="faq_question"></div><br>
    <div style="display:none;" id="answer9" class="faq_answer">Spread the word to your fellow Link to the Past Randomzier players, check me out on <a href="https://twitch.tv/jamesfnx" target="_blank">Twitch</a>, and send me a message on Discord if you want to help out in other ways.</div><br>
  </body>
  <script>
    function toggleAnswer1(ele) {
      var vis = document.getElementById('answer1');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer2(ele) {
      var vis = document.getElementById('answer2');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer3(ele) {
      var vis = document.getElementById('answer3');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer4(ele) {
      var vis = document.getElementById('answer4');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer5(ele) {
      var vis = document.getElementById('answer5');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer6(ele) {
      var vis = document.getElementById('answer6');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer7(ele) {
      var vis = document.getElementById('answer7');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer8(ele) {
      var vis = document.getElementById('answer8');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer9(ele) {
      var vis = document.getElementById('answer9');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
  <script>
    function toggleAnswer10(ele) {
      var vis = document.getElementById('answer10');
      if (vis.style.display == 'block') {
        vis.style.display = 'none';
      }
      else {
        vis.style.display = 'block';
      }
    }
  </script>
</html>