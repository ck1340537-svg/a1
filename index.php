<?php
// Bruschetta Dawn — homepage
$week = json_decode('[["Monday", "Pasta al pomodoro", "Start the week gently: spaghetti in a quick sauce of tomatoes, garlic, olive oil and torn basil. Twenty minutes, one pot, one pan."], ["Tuesday", "Minestrone", "A big pot of vegetable and bean soup that tastes even better on Wednesday. Serve with toasted bread rubbed with garlic."], ["Wednesday", "Lemon risotto", "Midweek comfort. Stir arborio rice with hot stock until creamy, then finish with lemon zest, butter and grated cheese."], ["Thursday", "Tray-roasted vegetables", "Whatever is in the crisper drawer, roasted hot with olive oil and herbs. Spoon over polenta or toss with pasta."], ["Friday", "Focaccia night", "Warm tray focaccia with olives and tomatoes, a crisp salad and a bowl of beans. A relaxed end to the week."], ["Saturday", "Pesto & broccoli pasta", "Blend basil, garlic, nuts, cheese and olive oil into a bright pesto and toss with pasta and tender broccoli."], ["Sunday", "Lentil & vegetable stew", "A slow, nourishing pot of lentils, carrots, celery and tomatoes. Make extra for Monday’s lunch."]]', true);
$i = (int) date('N') - 1;
$tonight = $week[$i];
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['supper_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'supper_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you!'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Lovely! Your first Supper Note arrives this Sunday.';
    } else { $msg = 'Please enter a valid email address.'; }
}
function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bruschetta Dawn | Simple Italian-Inspired Dinners &amp; Weekly Menu</title>
<meta name="description" content="Easy Italian-inspired dinner ideas: a weekly menu that updates daily, a dinner builder, classic tomato bruschetta, kitchen habits, pantry staples and Sunday prep.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.bruschettadawn.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Bruschetta Dawn">
<meta property="og:title" content="Bruschetta Dawn | Simple Italian-Inspired Dinners &amp; Weekly Menu"><meta property="og:description" content="Easy Italian-inspired dinner ideas: a weekly menu that updates daily, a dinner builder, classic tomato bruschetta, kitchen habits, pantry staples and Sunday prep.">
<meta property="og:url" content="https://www.bruschettadawn.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#3B1F17">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 44 44'%3E%3Ccircle cx='22' cy='22' r='21' fill='%233B1F17'/%3E%3Cpath d='M6 27 A16 16 0 0 1 38 27 Z' fill='%23F2A93B'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;600;700&family=Gloock&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Bruschetta Dawn", "url": "https://www.bruschettadawn.com/", "email": "hello@bruschettadawn.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "Recipe", "name": "Classic Tomato Bruschetta", "image": "https://images.unsplash.com/photo-1630230596944-6373069c837d?auto=format&fit=crop&w=1200&q=75", "author": {"@type": "Organization", "name": "Bruschetta Dawn"}, "recipeYield": "4 servings", "prepTime": "PT15M", "cookTime": "PT5M", "totalTime": "PT20M", "recipeCategory": "Appetizer", "recipeCuisine": "Italian", "recipeIngredient": ["8 slices crusty country bread", "4 ripe tomatoes", "2 garlic cloves", "3 tbsp olive oil", "10 fresh basil leaves", "1/2 tsp flaky salt", "1 tsp balsamic or apple cider vinegar (optional)"], "recipeInstructions": [{"@type": "HowToStep", "text": "Dice the tomatoes, salt them and drain for 10 minutes."}, {"@type": "HowToStep", "text": "Mix with minced garlic, olive oil, basil and vinegar."}, {"@type": "HowToStep", "text": "Toast or grill the bread until crisp and golden."}, {"@type": "HowToStep", "text": "Rub the hot toast with the cut garlic, top with tomatoes and serve at once."}]}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Is bruschetta a starter or a dinner?", "acceptedAnswer": {"@type": "Answer", "text": "Traditionally it is an antipasto, a small bite before the meal. But a generous plate of bruschetta with a salad, beans or a bowl of soup makes a light and satisfying dinner, especially on warm evenings."}}, {"@type": "Question", "name": "How do I stop bruschetta going soggy?", "acceptedAnswer": {"@type": "Answer", "text": "Toast the bread well so it is crisp right through, salt and drain the chopped tomatoes for ten minutes, and top the toasts only just before serving."}}, {"@type": "Question", "name": "Can I make these dinners without cheese?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Most of our recipes work without cheese. Try toasted breadcrumbs, a squeeze of lemon or a spoon of nutritional yeast for a savoury finish."}}, {"@type": "Question", "name": "What is the best way to cook pasta?", "acceptedAnswer": {"@type": "Answer", "text": "Use plenty of well-salted boiling water, stir in the first minute so it doesn’t stick, cook until just tender, and save a cup of the starchy water to loosen your sauce."}}, {"@type": "Question", "name": "How long do leftovers keep?", "acceptedAnswer": {"@type": "Answer", "text": "Cooled quickly and kept covered in the fridge, most cooked dishes are best eaten within three to four days. Soups and stews also freeze well."}}, {"@type": "Question", "name": "Do you offer meal kits or cooking classes?", "acceptedAnswer": {"@type": "Answer", "text": "No. Bruschetta Dawn is a free recipe and dinner-planning website. We do not sell products or services."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Bruschetta Dawn home"><svg viewBox="0 0 44 44" aria-hidden="true"><circle cx="22" cy="22" r="21" fill="#3B1F17"/><path d="M6 27 A16 16 0 0 1 38 27 Z" fill="#F2A93B"/><path d="M4 27 H40" stroke="#FFF8EF" stroke-width="2"/><circle cx="17" cy="21" r="2.4" fill="#D9452B"/><circle cx="24" cy="18" r="2.4" fill="#D9452B"/><circle cx="29" cy="22" r="2.2" fill="#7A8450"/><path d="M12 31 h20" stroke="#F7C6B5" stroke-width="2" stroke-linecap="round"/></svg><span>Bruschetta <em>Dawn</em></span></a>
    <span class="tonight">Tonight: <b><?php echo e($tonight[1]); ?></b></span>
    <nav aria-label="Main navigation"><ul class="capsule" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="dinner-recipes.html">Recipes</a></li><li><a href="menu-planner.html">Menu Planner</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <div class="wrap">
    <span class="kick">Italian-inspired home dinners</span>
    <h1>Every good evening begins with <span>bread &amp; tomatoes</span>.</h1>
    <p class="lead">Bruschetta Dawn shares simple, honest dinners inspired by Italian home cooking: a weekly menu, a dinner idea builder, tested recipes and the small kitchen habits that make supper easy.</p>
    <div class="ctas"><a class="btn" href="#tonight">See tonight&#8217;s dinner</a><a class="btn btn--s" href="dinner-recipes.html">Browse recipes</a></div>
  </div>
  <div class="sun"><img src="https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?auto=format&fit=crop&w=1400&q=75" alt="slices of toasted bread topped with fresh vegetables" width="1400" height="933" fetchpriority="high"></div>
  <div class="side-pic"><img src="https://images.unsplash.com/photo-1594978583693-8dfdfc93f052?auto=format&fit=crop&w=400&q=75" alt="bread topped with tomato and green herbs on a wooden table" width="400" height="400"></div>
  <div class="horizon"></div>
</section>

<section class="week" id="tonight" aria-labelledby="wk-t">
  <div class="wrap">
    <div class="week-head"><div><span class="kick">This week&#8217;s table</span><h2 id="wk-t">Seven dinners, no guesswork</h2></div><p>A balanced weekly rhythm of pasta, soup, rice, vegetables and bread. It updates each day so you always know what&#8217;s for dinner tonight.</p></div>
    <article class="today">
      <div class="pic"><img src="https://images.unsplash.com/photo-1688437307658-23a1039d9634?auto=format&fit=crop&w=900&q=75" alt="table set for dinner with candles, plates and food" width="900" height="700" loading="lazy"></div>
      <div class="in">
        <span class="day">Tonight &middot; <?php echo e($tonight[0]); ?></span>
        <h3><?php echo e($tonight[1]); ?></h3>
        <p><?php echo e($tonight[2]); ?></p>
        <a class="btn btn--s" href="menu-planner.html">Plan the full week</a>
      </div>
    </article>
    <div class="days"><div class="dcard<?php echo $i === 0 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1676300184847-4ee4030409c0?auto=format&fit=crop&w=400&q=75" alt="white plate of pasta in tomato sauce" width="400" height="400" loading="lazy"></div><div class="t"><b>Mon</b><span>Pasta al pomodoro</span></div></div><div class="dcard<?php echo $i === 1 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1643786661490-966f1877effa?auto=format&fit=crop&w=400&q=75" alt="two bowls of vegetable soup with peas and carrots" width="400" height="400" loading="lazy"></div><div class="t"><b>Tue</b><span>Minestrone</span></div></div><div class="dcard<?php echo $i === 2 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1609770424775-39ec362f2d94?auto=format&fit=crop&w=400&q=75" alt="risotto with green vegetables on a white plate" width="400" height="400" loading="lazy"></div><div class="t"><b>Wed</b><span>Lemon risotto</span></div></div><div class="dcard<?php echo $i === 3 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1524394071506-4c3fde76077b?auto=format&fit=crop&w=400&q=75" alt="roasted vegetables on a silver baking tray" width="400" height="400" loading="lazy"></div><div class="t"><b>Thu</b><span>Tray-roasted vegetables</span></div></div><div class="dcard<?php echo $i === 4 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1711805064484-a77096f599a6?auto=format&fit=crop&w=400&q=75" alt="focaccia bread with toppings on a white plate" width="400" height="400" loading="lazy"></div><div class="t"><b>Fri</b><span>Focaccia night</span></div></div><div class="dcard<?php echo $i === 5 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1743352388509-835796029c79?auto=format&fit=crop&w=400&q=75" alt="bowl of pesto pasta with fresh basil" width="400" height="400" loading="lazy"></div><div class="t"><b>Sat</b><span>Pesto &amp; broccoli pasta</span></div></div><div class="dcard<?php echo $i === 6 ? ' on' : ''; ?>"><div class="pic"><img src="https://images.unsplash.com/photo-1714062108809-7ca61cb88045?auto=format&fit=crop&w=400&q=75" alt="three bowls of stew on a wooden table" width="400" height="400" loading="lazy"></div><div class="t"><b>Sun</b><span>Lentil &amp; vegetable stew</span></div></div></div>
  </div>
</section>

<section class="builder" id="builder" aria-labelledby="bl-t">
  <div class="wrap">
    <div class="b-box">
      <div>
        <span class="kick">Dinner builder</span>
        <h2 id="bl-t">What do you feel like?</h2>
        <p class="muted">Tell us how much time you have and what kind of evening it is, and we will suggest a simple supper.</p>
        <span class="opt-label">Time available</span>
        <div class="pills" role="group" aria-label="Time available"><button type="button" class="pill" data-t="20" aria-pressed="true">20 minutes</button><button type="button" class="pill" data-t="40" aria-pressed="false">40 minutes</button><button type="button" class="pill" data-t="60" aria-pressed="false">An hour</button></div>
        <span class="opt-label">Mood</span>
        <div class="pills" role="group" aria-label="Mood"><button type="button" class="pill" data-m="light" aria-pressed="true">Light &amp; fresh</button><button type="button" class="pill" data-m="cosy" aria-pressed="false">Cosy</button><button type="button" class="pill" data-m="veg" aria-pressed="false">Veg-packed</button></div>
      </div>
      <div class="idea" id="idea" aria-live="polite">
        <span class="tag">Tonight you could make</span>
        <h3>Tomato bruschetta &amp; a big green salad</h3>
        <p>Toast thick bread, rub with garlic, top with chopped tomatoes, basil and olive oil. Serve with dressed leaves and a few white beans.</p>
      </div>
    </div>
  </div>
</section>

<section class="recipe" id="bruschetta" aria-labelledby="rc-t">
  <div class="wrap r-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1630230596944-6373069c837d?auto=format&fit=crop&w=800&q=75" alt="toasted bread topped with sliced tomato and green leaves on a wooden board" width="800" height="920" loading="lazy"></div>
    <div>
      <span class="kick">Our namesake recipe</span>
      <h2 id="rc-t">Classic tomato bruschetta</h2>
      <p>The word comes from <em>bruscare</em>, to toast over coals. At its heart it is just good bread, garlic, olive oil and ripe tomatoes, so each ingredient really matters.</p>
      <ul class="meta"><li>Prep 15 min</li><li>Cook 5 min</li><li>Easy</li><li>Vegetarian</li></ul>
      <div class="serv"><button type="button" data-serv="-1" aria-label="Fewer servings">&minus;</button><output id="serv-out">4 servings</output><button type="button" data-serv="1" aria-label="More servings">+</button></div>
      <div class="cols">
        <div><h4>Ingredients</h4><ul class="ing"><li><span class="q" data-q="8">8</span> slices crusty country bread, about 1 inch thick</li><li><span class="q" data-q="4">4</span>  ripe tomatoes (about 1 lb / 450 g)</li><li><span class="q" data-q="2">2</span>  garlic cloves (1 minced, 1 halved for rubbing)</li><li><span class="q" data-q="3">3</span> tbsp good olive oil, plus extra to drizzle</li><li><span class="q" data-q="10">10</span>  fresh basil leaves, torn</li><li><span class="q" data-q="0.5">0.5</span> tsp flaky salt, plus black pepper</li><li><span class="q" data-q="1">1</span> tsp balsamic or apple cider vinegar (optional)</li></ul></div>
        <div><h4>Method</h4><ol class="method">
          <li>Dice the tomatoes, sprinkle with a pinch of salt and leave in a sieve for 10 minutes so the excess juice drains away.</li>
          <li>Tip into a bowl with the minced garlic, olive oil, torn basil, a little black pepper and the vinegar, if using.</li>
          <li>Toast or grill the bread until crisp and golden at the edges but still slightly soft in the middle.</li>
          <li>While still hot, rub each slice with the cut side of the halved garlic clove. Spoon over the tomatoes, drizzle with a little more oil and eat straight away.</li>
        </ol></div>
      </div>
    </div>
  </div>
</section>

<section class="courses" aria-labelledby="co-t">
  <div class="wrap">
    <span class="kick">The shape of an Italian meal</span>
    <h2 id="co-t">Four simple moments at the table</h2>
    <p class="muted" style="max-width:640px">You don&#8217;t need four courses on a Tuesday. But borrowing the rhythm of a traditional Italian meal makes even a quick dinner feel unhurried.</p>
    <div class="c-row">
      <div class="course"><div class="dot">1</div><h3>Antipasto</h3><p>Something small while the pasta cooks: bruschetta, olives, sliced vegetables.</p></div>
      <div class="course"><div class="dot">2</div><h3>Primo</h3><p>The first course, usually pasta, risotto or soup. Often the heart of a home dinner.</p></div>
      <div class="course"><div class="dot">3</div><h3>Secondo &amp; contorno</h3><p>A main protein with a vegetable side. At home, many families simply skip to the vegetables.</p></div>
      <div class="course"><div class="dot">4</div><h3>Dolce</h3><p>Fresh fruit, a spoon of yogurt with honey, or a simple cake to finish.</p></div>
    </div>
  </div>
</section>

<section class="tech" aria-labelledby="te-t">
  <div class="wrap">
    <span class="kick">Kitchen habits</span>
    <h2 id="te-t" style="margin-bottom:36px">Four habits that make dinner taste better</h2>
    <div class="tech-grid">
      <div class="tech-pics">
        <div class="pic"><img src="https://images.unsplash.com/photo-1653855395080-74f7d63b009a?auto=format&fit=crop&w=800&q=75" alt="person stirring food in a pot on the stove" width="800" height="500" loading="lazy"></div>
        <div class="pic"><img src="https://images.unsplash.com/photo-1636647511729-6703539ba71f?auto=format&fit=crop&w=800&q=75" alt="woman chopping vegetables on a cutting board in a kitchen" width="800" height="500" loading="lazy"></div>
      </div>
      <div class="tips">
        <div class="tip"><span class="n">01</span><h3>Salt the pasta water</h3><p>Season it generously once boiling. Pasta absorbs that seasoning as it cooks, so the sauce needs less salt later.</p></div>
        <div class="tip"><span class="n">02</span><h3>Start with a soffritto</h3><p>Gently soften finely chopped onion, carrot and celery in olive oil. This sweet base flavours soups, sauces and stews.</p></div>
        <div class="tip"><span class="n">03</span><h3>Save starchy water</h3><p>A splash of pasta water helps sauces cling and turns oil and cheese into a glossy coating.</p></div>
        <div class="tip"><span class="n">04</span><h3>Finish with fresh oil</h3><p>A drizzle of good olive oil and a few fresh herbs just before serving lifts the whole dish.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="pantry" aria-labelledby="pa-t">
  <div class="wrap">
    <span class="kick">The dinner pantry</span>
    <h2 id="pa-t">Six staples, endless suppers</h2>
    <div class="p-grid">
      <div class="p-item"><div class="pic"><img src="https://images.unsplash.com/photo-1587049332298-1c42e83937a7?auto=format&fit=crop&w=300&q=75" alt="whole garlic bulb on a white surface" width="200" height="200" loading="lazy"></div><div><h3>Garlic</h3><p>The backbone of almost every sauce and the secret to great bruschetta.</p></div></div>
      <div class="p-item"><div class="pic"><img src="https://images.unsplash.com/photo-1527964105263-1ac6265a569f?auto=format&fit=crop&w=300&q=75" alt="fresh green leafy herb plants" width="200" height="200" loading="lazy"></div><div><h3>Fresh herbs</h3><p>Basil, parsley and rosemary add brightness. Keep a pot on the windowsill.</p></div></div>
      <div class="p-item"><span class="ph" style="background:#F2A93B">P</span><div><h3>Dried pasta</h3><p>A few shapes: long for oily sauces, short for chunky ones and soups.</p></div></div>
      <div class="p-item"><span class="ph" style="background:#D9452B;color:#fff">T</span><div><h3>Canned tomatoes</h3><p>Whole peeled tomatoes for sauces in every season, crushed by hand.</p></div></div>
      <div class="p-item"><span class="ph" style="background:#EAEBDB">B</span><div><h3>Beans &amp; lentils</h3><p>Cannellini, chickpeas and green lentils for soups, salads and stews.</p></div></div>
      <div class="p-item"><span class="ph" style="background:#F7C6B5">R</span><div><h3>Arborio rice</h3><p>For risotto, but also good in soups and stuffed vegetables.</p></div></div>
    </div>
  </div>
</section>

<div class="wrap">
  <section class="split" aria-labelledby="tb-t">
    <div class="pic"><img src="https://images.unsplash.com/photo-1688437307687-fe226bddfab1?auto=format&fit=crop&w=900&q=75" alt="dinner table set with candles and shared plates of food" width="900" height="790" loading="lazy"></div>
    <div>
      <span class="kick">Slow down at supper</span>
      <h2 id="tb-t">Make the table part of the meal</h2>
      <p class="muted">Dinner is about more than food. A few small rituals can turn a quick weeknight meal into the best part of the day.</p>
      <ul class="ticks">
        <li>Set the table, even simply: a cloth, proper plates and a jug of water.</li>
        <li>Serve family-style in bowls and let everyone help themselves.</li>
        <li>Put phones in another room for the length of the meal.</li>
        <li>Light a candle or dim the overhead lights as the evening draws in.</li>
        <li>Finish with fruit and a few minutes of conversation before clearing up.</li>
      </ul>
    </div>
  </section>
  <section class="split rev" style="padding-top:0" aria-labelledby="bt-t">
    <div class="pic"><img src="https://images.unsplash.com/photo-1543352632-5a4b24e4d2a6?auto=format&fit=crop&w=900&q=75" alt="glass containers filled with rice, vegetables, olives and lentils" width="900" height="790" loading="lazy"></div>
    <div>
      <span class="kick">Sunday prep</span>
      <h2 id="bt-t">One hour on Sunday, easier evenings all week</h2>
      <dl class="plan">
        <dt>0:00</dt><dd>Put a pot of lentils or beans on to simmer.</dd>
        <dt>0:10</dt><dd>Wash and dry salad leaves and herbs; wrap in a clean towel.</dd>
        <dt>0:20</dt><dd>Chop onions, carrots and celery for two soffritto bases.</dd>
        <dt>0:35</dt><dd>Roast a tray of mixed vegetables for salads and pasta.</dd>
        <dt>0:50</dt><dd>Blend a jar of pesto and make a simple tomato sauce.</dd>
        <dt>1:00</dt><dd>Cool, label and refrigerate everything in clear containers.</dd>
      </dl>
      <a class="btn" href="menu-planner.html" style="margin-top:20px">Open the menu planner</a>
    </div>
  </section>
</div>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="kick">Questions</span><h2 id="fq-t">Dinner questions, answered</h2><p class="muted">Have another question? We are always happy to help.</p><a class="btn btn--o" href="contact.html">Ask us</a><div class="pic"><img src="https://images.unsplash.com/photo-1595587870672-c79b47875c6a?auto=format&fit=crop&w=800&q=75" alt="fresh tomato and leaf salad on a white plate" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>Is bruschetta a starter or a dinner?</summary><p>Traditionally it is an antipasto, a small bite before the meal. But a generous plate of bruschetta with a salad, beans or a bowl of soup makes a light and satisfying dinner, especially on warm evenings.</p></details><details><summary>How do I stop bruschetta going soggy?</summary><p>Toast the bread well so it is crisp right through, salt and drain the chopped tomatoes for ten minutes, and top the toasts only just before serving.</p></details><details><summary>Can I make these dinners without cheese?</summary><p>Yes. Most of our recipes work without cheese. Try toasted breadcrumbs, a squeeze of lemon or a spoon of nutritional yeast for a savoury finish.</p></details><details><summary>What is the best way to cook pasta?</summary><p>Use plenty of well-salted boiling water, stir in the first minute so it doesn&#8217;t stick, cook until just tender, and save a cup of the starchy water to loosen your sauce.</p></details><details><summary>How long do leftovers keep?</summary><p>Cooled quickly and kept covered in the fridge, most cooked dishes are best eaten within three to four days. Soups and stews also freeze well.</p></details><details><summary>Do you offer meal kits or cooking classes?</summary><p>No. Bruschetta Dawn is a free recipe and dinner-planning website. We do not sell products or services.</p></details></div>
  </div>
</section>

<section class="note" id="supper-note" aria-labelledby="sn-t">
  <img src="https://images.unsplash.com/photo-1631970512783-932c64521415?auto=format&fit=crop&w=1800&q=75" alt="table with a lit candle set for an evening meal" width="1800" height="1200" loading="lazy">
  <div class="wrap">
    <span class="kick" style="color:var(--saffron)">Every Sunday</span>
    <h2 id="sn-t">The Supper Note</h2>
    <p>Next week&#8217;s seven dinners, a short shopping list and one kitchen tip, delivered every Sunday morning. Free, and easy to unsubscribe.</p>
    <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo e($msg); ?></p><?php endif; ?>
    <form method="post" action="index.php#supper-note">
      <label for="se" class="skip">Email address</label>
      <input type="email" id="se" name="supper_email" placeholder="you@example.com" required autocomplete="email">
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
      <button class="btn btn--s" type="submit">Subscribe</button>
    </form>
    <p class="small">See our <a href="privacy-policy.html">Privacy Policy</a>.</p>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 44 44" aria-hidden="true"><circle cx="22" cy="22" r="21" fill="#3B1F17"/><path d="M6 27 A16 16 0 0 1 38 27 Z" fill="#F2A93B"/><path d="M4 27 H40" stroke="#FFF8EF" stroke-width="2"/><circle cx="17" cy="21" r="2.4" fill="#D9452B"/><circle cx="24" cy="18" r="2.4" fill="#D9452B"/><circle cx="29" cy="22" r="2.2" fill="#7A8450"/><path d="M12 31 h20" stroke="#F7C6B5" stroke-width="2" stroke-linecap="round"/></svg><span>Bruschetta <em>Dawn</em></span></a><p>Italian-inspired home dinners for ordinary weeknights: simple recipes, a weekly menu, and the small habits that make supper something to look forward to.</p></div>
      <div><h4>Cook</h4><a href="dinner-recipes.html">Dinner Recipes</a><a href="menu-planner.html">Menu Planner</a><a href="index.php#builder">Dinner Builder</a><a href="index.php#bruschetta">Classic Bruschetta</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@bruschettadawn.com">hello@bruschettadawn.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Bruschetta Dawn. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, if you agree, analytics cookies to see which recipes are useful. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
