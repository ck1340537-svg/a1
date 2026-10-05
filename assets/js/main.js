(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Dinner builder
  var IDEAS={
    '20-light':['Tomato bruschetta & a big green salad','Toast thick bread, rub with garlic, top with chopped tomatoes, basil and olive oil. Serve with dressed leaves and a few white beans.'],
    '20-cosy':['Garlic & chilli spaghetti','Spaghetti tossed with olive oil gently warmed with sliced garlic and chilli flakes, finished with parsley and lemon zest.'],
    '20-veg':['Pesto pasta with peas','Stir a spoon of pesto and a handful of frozen peas through hot pasta with a splash of cooking water.'],
    '40-light':['Panzanella bread salad','Toasted bread cubes, ripe tomatoes, cucumber, red onion and basil soaked in a sharp vinegar dressing.'],
    '40-cosy':['Creamy lemon risotto','Slowly stir arborio rice with hot stock, then finish with butter, grated hard cheese and lemon zest.'],
    '40-veg':['Tray-roasted vegetables with polenta','Roast peppers, courgettes and onions until golden and spoon over soft, cheesy polenta.'],
    '60-light':['Herby focaccia with tomato salad','A simple tray focaccia, still warm, alongside tomatoes, olives and a herb dressing.'],
    '60-cosy':['Minestrone with crusty bread','A slow-simmered vegetable soup with beans and small pasta, finished with olive oil.'],
    '60-veg':['Stuffed peppers with rice & herbs','Peppers filled with rice, tomatoes, herbs and cheese, baked until soft and blistered.']
  };
  var t='20',m='light',box=document.getElementById('idea');
  function show(){if(!box)return;var i=IDEAS[t+'-'+m];box.querySelector('h3').textContent=i[0];box.querySelector('p').textContent=i[1];}
  document.querySelectorAll('[data-t]').forEach(function(p){p.addEventListener('click',function(){document.querySelectorAll('[data-t]').forEach(function(x){x.setAttribute('aria-pressed','false');});p.setAttribute('aria-pressed','true');t=p.dataset.t;show();});});
  document.querySelectorAll('[data-m]').forEach(function(p){p.addEventListener('click',function(){document.querySelectorAll('[data-m]').forEach(function(x){x.setAttribute('aria-pressed','false');});p.setAttribute('aria-pressed','true');m=p.dataset.m;show();});});
  // Serving scaler
  var serv=4,out=document.getElementById('serv-out');
  function fmt(x){var r=Math.round(x*4)/4,w=Math.floor(r),f=r-w,fr={0.25:'¼',0.5:'½',0.75:'¾'}[f]||'';return ((w?w:'')+(fr?(w?' ':'')+fr:''))||'0';}
  function scale(){if(!out)return;out.textContent=serv+' servings';document.querySelectorAll('[data-q]').forEach(function(el){el.textContent=fmt(parseFloat(el.dataset.q)*serv/4);});}
  document.querySelectorAll('[data-serv]').forEach(function(btn){btn.addEventListener('click',function(){serv=Math.min(12,Math.max(1,serv+parseInt(btn.dataset.serv,10)));scale();});});
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('bd_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('bd_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
